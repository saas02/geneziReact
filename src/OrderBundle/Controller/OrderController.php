<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\OrderBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Cliente;
use App\Entity\Administrador;
use App\Entity\Parameters;
use App\Entity\Producto;
use App\Entity\Orders;
use App\Entity\FormUserInfo;
use App\Entity\HistoricalOrder;
use App\Entity\Card;



/**
 * Description of OrderController
 *
 * @author sergio.amaya
 */

class OrderController extends Controller {  
    
    /**
      * @Route("/pedido", name="order")
    */
    
    
    public function order(){
        $session = $this->get('request_stack')->getCurrentRequest()->getSession(); 
        $request = Request::createFromGlobals();
        if($session->has('nombreAdmin') || $session->has('nombreUser')){
            if($session->has('carShoping')){
                $carShoping = json_decode($session->get('carShoping'), true);                                              
                $productos = $this->getDoctrine()->getRepository(Producto::class)->findBy(['estado' => 1]);                
                foreach($productos as $producto){
                    foreach($carShoping as $key => $car){
                        if($car['codigo'] == $producto->getCodigoprod()){
                           $carShoping[$key]['stock'] = $producto->getStock();
                           $carShoping[$key]['imagenes'] = $producto->getImagen();
                        }                        
                    }                    
                }
                $OrderInfo = [
                    'carShoping' => $carShoping
                ];
                if($request->query->has('error_message')){
                   $OrderInfo['error_message'] = (string) $request->query->get('error_message');
                }
                
                $return = $this->render('@Twigs/Orders/order.html.twig', $OrderInfo);
            }else{                
                $return = $this->redirectToRoute('products');
            }
        }else{
           $return = $this->redirectToRoute('register'); 
        }                
        
        return $return;
    }
         
    /**
      * @Route("/formulario", name="formOrder")
    */
    
    
    public function formOrder(){
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();   
        $request = Request::createFromGlobals();   
        
        if($session->has('nombreAdmin') || $session->has('nombreUser') && !empty($request->request)){
            if($request->request->has('referenceCode')){
                if($session->has('retry')){
                    $session->set('retry', ( $session->get('retry') + 1 ));
                }else{
                    $session->set('retry', 1);
                }
                $order = $this->getDoctrine()->getRepository(Orders::class)->findOneBy(['id' => str_replace('GZ', '', $session->get('Order'))]);
                if(!empty($order)){
                    $shoping = json_decode($this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $order->getDescription()), true);
                    $cliente = $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['nit' => $session->get('nombreUser')]);                    
                    $total = $shoping['total'];
                    $deviceSessionId = md5(session_id().microtime());
                    $return = $this->render('@Twigs/Orders/form_payment.html.twig', ['cliente' => $cliente, 'deviceSessionId' => $deviceSessionId,'shoping' => $shoping]);
                }else{
                    $return = $this->redirectToRoute('products');
                }
            }else{
                $cantidades = $request->request;
                if($session->has('carShoping')){
                    $carShoping = json_decode($session->get('carShoping'), true);                
                    $productos = $this->getDoctrine()->getRepository(Producto::class)->findBy(['estado' => 1]);
                    $cliente = $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['nit' => $session->get('nombreUser')]);
                    $shoping = [];
                    $total = 0;
                    foreach($productos as $producto){
                        foreach($carShoping as $key => $car){
                            if($car['codigo'] === $producto->getCodigoprod()){ 
                                $precio = $producto->getPrecio();
                                if(!empty($producto->getInpromo()) && $producto->getInpromo() > 0){
                                    $precio = $precio - ($precio * ($producto->getInpromo() / 100));
                                }
                                $shoping['productos'][$key]['id'] = $producto->getId();
                                $shoping['productos'][$key]['codigo'] = $producto->getCodigoprod();
                                $shoping['productos'][$key]['nombre'] = $producto->getNombreprod();
                                $shoping['productos'][$key]['imagen'] = $producto->getImagen();
                                $shoping['productos'][$key]['cantidad'] = $cantidades->get('cant_prod_'.$key);
                                $shoping['productos'][$key]['precio'] = $precio;                            
                                $shoping['productos'][$key]['total'] = ($precio * $cantidades->get('cant_prod_'.$key));                                
                                $total = ($total + $shoping['productos'][$key]['total']);
                            }                        
                        }                    
                    }
                    $shoping['total'] = $total;                    
                    $session->set('shoping', json_encode($shoping));
                    $deviceSessionId = md5(session_id().microtime());
                    $return = $this->render('@Twigs/Orders/form_payment.html.twig', ['cliente' => $cliente, 'deviceSessionId' => $deviceSessionId,'shoping' => $shoping]);
                }else{
                    $return = $this->redirectToRoute('products');
                }
            }                                    
        }else{
           $return = $this->redirectToRoute('products'); 
        }                
        
        return $return;
    }
    
    /**
      * @Route("/pago", name="payment")
    */
    
    public function payment(){            
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();   
        $request = Request::createFromGlobals(); 
        $parameters = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'payu'])->getValue(), true)['payu'];
        $entityManager = $this->getDoctrine()->getManager();                      
        $environment = ($parameters['isTest'] ? $this->get('kernel')->getEnvironment() : 'dev');        
        $endpoint = $parameters[$environment]['endpoints']['payment'];        
        if($session->has('nombreAdmin') || $session->has('nombreUser') && !empty($request->request)){  
            if($session->has('shoping')){
                $shoping = json_decode($session->get('shoping'), true);
            }elseif($session->has('retry')){
                $order = $this->getDoctrine()->getRepository(Orders::class)->findOneBy(['id' => str_replace('GZ', '', $session->get('Order'))]);
                if(!empty($order)){
                    $shoping = json_decode($this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $order->getDescription()), true);
                    $HistoricalOrder = new HistoricalOrder();
                    $HistoricalOrder->setOrder($order);
                    $HistoricalOrder->setPayrequest($order->getPayrequest());
                    $HistoricalOrder->setPayresponse($order->getPayresponse());
                    $HistoricalOrder->setUpdatingdate(new \DateTime());
                    $HistoricalOrder->setPublickey(base64_encode('WS-SERVICE-KEY'));
                    $entityManager->persist($HistoricalOrder);
                    $entityManager->flush();  
                }
            }
                        
            if(!empty($shoping)){
                
                $postInfo = $request->request;                                
                
                $paymentPing['test'] = $parameters['isTest'];
                $paymentPing['language'] = $parameters['language'];
                $paymentPing['command'] = 'PING';
                $paymentPing['merchant']['apiLogin'] = $parameters[$environment]['LOGIN'];
                $paymentPing['merchant']['apiKey'] = $parameters[$environment]['KEY'];                
                $this->get('log_save')->logSave(print_r($paymentPing, true), 'paymentPingRQ');
                $paymentState = $this->CallAPI($endpoint, json_encode($paymentPing));
                $this->get('log_save')->logSave(print_r($paymentState, true), 'paymentPingRS');
                
                if(!isset($paymentState['error'])){
                    
                    $x_amount = number_format($shoping['total'], 0, '', '');
                    $base = 0;//number_format(($x_amount /(1 + $parameters['iva'])), 0, '', '');
                    $baseIva = 0;//number_format(($base * $parameters['iva']), 0, '', '');
                    
                    /*Credentials Info */
                    $payInfo['language'] = $parameters['language'];
                    $payInfo['command'] = 'SUBMIT_TRANSACTION';
                    $payInfo['merchant']['apiKey'] = $parameters[$environment]['KEY'];
                    $payInfo['merchant']['apiLogin'] = $parameters[$environment]['LOGIN'];                                        
                    
                    if($session->has('nombreAdmin')){
                        $cliente = $this->getDoctrine()->getRepository(Administrador::class)->findOneBy(['nombre' => $session->get('nombreAdmin')]);                        
                    }elseif($session->has('nombreUser')){
                        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['nit' => $session->get('nombreUser')]);
                    }
                    
                    $cardInfo = $this->getDoctrine()->getRepository(Card::class)->findOneBy(['paymentgatewaycode' => $postInfo->get('PD_franquise')]);                            
                    
//                    if($session->has('retry')){
//                        if($session->get('retry') >= 3){
//                            $session->remove('retry');
//                            $Orders = new Orders();
//                        }else{
//                            $Orders = $order;
//                        }                        
//                    }else{
                        $Orders = new Orders();
                    //}
                    
                    $Orders->setIdCliente($cliente);                    
                    $Orders->setDescription($this->get('encrypt_decrypt')->encrypt_decrypt('encrypt', json_encode($shoping)));
                    $Orders->setCreationdate(new \DateTime());
                    $Orders->setUpdatingdate(new \DateTime());
                    $Orders->setStatus('create-order');    
                                                            
                    $entityManager->persist($Orders);
                    $entityManager->flush();                                        
                    $referenceCode = 'GZ'.str_pad($Orders->getId(), 10, ($environment == 'dev') ? "1" : "0", STR_PAD_LEFT);
                    $session->set('Order', 'GZ'.$Orders->getId());
                    $session->set('postInfo_'.$Orders->getId(), $postInfo);
                                                            
                    $infoPost = ["PD_first_name", "PD_card_num", "PD_franquise", "PD_differed", "PD_exp_month", "PD_exp_year", "PD_card_code", "PD_doc_type", "PD_doc_num", "PD_email", "PD_phone", "PD_address"];
                    $infoPostArray = [];
                    foreach ($infoPost as $key => $post){
                        if(!empty($postInfo->get($post)) ){                            
                            $infoPostArray[$key] = $postInfo->get($post);
                            if($post == 'PD_card_num'){
                                $infoPostArray[$key] = '********'.substr($infoPostArray[$key], -4);
                            }
                        }                        
                    }
                    
                    $FormUserInfo = new FormUserInfo();
                    $FormUserInfo->setInfo($this->get('encrypt_decrypt')->encrypt_decrypt('encrypt', json_encode($infoPostArray)));
                    $FormUserInfo->setOrder($Orders);
                    $FormUserInfo->setPublickey(base64_encode('WS-SERVICE-KEY'));
                    
                    $entityManager->persist($FormUserInfo);
                    $entityManager->flush();
                    
                    $signature = $parameters[$environment]['KEY'].'~'.$parameters[$environment]['MERCHANID'].'~'.$referenceCode.'~'.$x_amount.'~'.$parameters['currency'];
                                        
                    /*Order Info */
                    $payInfo['transaction']['order']['accountId'] = $parameters[$environment]['ACOUNTID'];
                    $payInfo['transaction']['order']['referenceCode'] = $referenceCode;
                    $payInfo['transaction']['order']['description'] = 'Compra Internet Genezi '.$referenceCode;
                    $payInfo['transaction']['order']['language'] = $parameters['language'];
                    $payInfo['transaction']['order']['signature'] = md5($signature);
                    $payInfo['transaction']['order']['notifyUrl'] = 'http://www.genezi.com.co/confirmation';
                    $payInfo['transaction']['order']['additionalValues']['TX_VALUE']['value'] = $x_amount;
                    $payInfo['transaction']['order']['additionalValues']['TX_VALUE']['currency'] = $parameters['currency'];
                    
                    $payInfo['transaction']['order']['additionalValues']['TX_TAX']['value'] = $base;
                    $payInfo['transaction']['order']['additionalValues']['TX_TAX']['currency'] = $parameters['currency'];
                    $payInfo['transaction']['order']['additionalValues']['TX_TAX_RETURN_BASE']['value'] = $baseIva;
                    $payInfo['transaction']['order']['additionalValues']['TX_TAX_RETURN_BASE']['currency'] = $parameters['currency'];
                    /*buyer information*/
                    $payInfo['transaction']['order']['buyer']['merchantBuyerId'] = $postInfo->get('PD_doc_num');                    
                    $payInfo['transaction']['order']['buyer']['fullName'] = $postInfo->get('PD_name').' '.$postInfo->get('PD_last_name');
                    $payInfo['transaction']['order']['buyer']['emailAddress'] = $postInfo->get('PD_email');
                    $payInfo['transaction']['order']['buyer']['contactPhone'] = $postInfo->get('PD_phone');
                    $payInfo['transaction']['order']['buyer']['dniNumber'] = $postInfo->get('PD_doc_type');
                    $payInfo['transaction']['order']['buyer']['shippingAddress']['street1'] = $postInfo->get('PD_address');
                    $payInfo['transaction']['order']['buyer']['shippingAddress']['street2'] = '';
                    $payInfo['transaction']['order']['buyer']['shippingAddress']['city'] = '';
                    $payInfo['transaction']['order']['buyer']['shippingAddress']['state'] = '';
                    $payInfo['transaction']['order']['buyer']['shippingAddress']['country'] = 'CO';
                    $payInfo['transaction']['order']['buyer']['shippingAddress']['postalCode'] = '';
                    $payInfo['transaction']['order']['buyer']['shippingAddress']['phone'] = $postInfo->get('PD_phone');                                        
                    
                    /*payer information*/                    
                    $payInfo['transaction']['payer']['fullName'] = $postInfo->get('PD_name').' '.$postInfo->get('PD_last_name');
                    $payInfo['transaction']['payer']['emailAddress'] = $postInfo->get('PD_email');
                    $payInfo['transaction']['payer']['contactPhone'] = $postInfo->get('PD_phone');
                    $payInfo['transaction']['payer']['dniNumber'] = $postInfo->get('PD_doc_type');
                    $payInfo['transaction']['payer']['billingAddress']['phone'] = $postInfo->get('PD_phone');                    
                    $payInfo['transaction']['payer']['billingAddress']['street1'] = $postInfo->get('PD_address');
                    $payInfo['transaction']['payer']['billingAddress']['street2'] = '';
                    $payInfo['transaction']['payer']['billingAddress']['city'] = '';
                    $payInfo['transaction']['payer']['billingAddress']['state'] = '';
                    $payInfo['transaction']['payer']['billingAddress']['country'] = 'CO';
                    $payInfo['transaction']['payer']['billingAddress']['postalCode'] = '';

                    /*Card Information*/
                    $payInfo['transaction']['creditCard']['number'] = $postInfo->get('PD_card_num');
                    $payInfo['transaction']['creditCard']['securityCode'] = $postInfo->get('PD_card_code');
                    $payInfo['transaction']['creditCard']['expirationDate'] = $postInfo->get('PD_exp_year').'/'.$postInfo->get('PD_exp_month');
                    $payInfo['transaction']['creditCard']['name'] =  $postInfo->get('PD_first_name');
                   
                    /* Extra information*/
                    $payInfo['transaction']['extraParameters']['INSTALLMENTS_NUMBER'] = 1;
                    $payInfo['transaction']['type'] = 'AUTHORIZATION_AND_CAPTURE';
                    $payInfo['transaction']['paymentMethod'] = strtoupper($cardInfo->getDescription());
                    $payInfo['transaction']['paymentCountry'] = 'CO';
                    $payInfo['transaction']['deviceSessionId'] = $postInfo->get('PD_deviceSessionId');
                    $payInfo['transaction']['ipAddress'] = $this->get_client_ip();
                    $payInfo['transaction']['cookie'] = session_id();
                    $payInfo['transaction']['userAgent'] = "Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0";
                    $payInfo['test'] = $parameters['isTest'];                    
                    
                    $paymentState = $this->CallAPI($endpoint, json_encode($payInfo));
                    
                    if(!isset($paymentState['message']->authorizationCode)){                        
                        $paymentState['message']->authorizationCode = (string) $paymentState['message']->state;  
                        $paymentState['message']->responseCode = (string) $paymentState['message']->responseCode;
                        $paymentState['message']->operationDate = date("Y-m-d H:i:s");                        
                        $paymentState['message']->trazabilityCode = $paymentState['message']->orderId;                        
                    }
                    
                    $payInfo['transaction']['creditCard']['number'] = '********'.substr($payInfo['transaction']['creditCard']['number'], -4);
                    unset($payInfo['transaction']['creditCard']['securityCode']);
                    unset($payInfo['transaction']['creditCard']['expirationDate']);
                    
                    $this->get('log_save')->logSave(print_r($payInfo, true), 'payInfoRQ', $referenceCode);
                    $this->get('log_save')->logSave(print_r($paymentState, true), 'paymentStateRS', $referenceCode);

                    $Orders->setPayrequest($this->get('encrypt_decrypt')->encrypt_decrypt('encrypt', json_encode($payInfo)));
                    $Orders->setPayresponse($this->get('encrypt_decrypt')->encrypt_decrypt('encrypt', json_encode($paymentState)));
                    $Orders->setUpdatingdate(new \DateTime());
                    $Orders->setStatus('send-order');
                    
                    $entityManager->persist($Orders);
                    $entityManager->flush();
                                        
                    if(!isset($paymentState['error'])){                        
                        $status = (string)$paymentState['message']->state;                        
                        if(strtolower($status) == 'approved'){                            
                            $return = $this->redirectToRoute('resumen_approved'); 
                        }else{
                            $return = $this->redirectToRoute('resumen_rejected'); 
                        }
                    }else{
                        $status = $paymentState['error'];
                        $return = $this->redirectToRoute('resumen_rejected'); 
                    }
                    
                    $Orders->setUpdatingdate(new \DateTime());
                    $Orders->setStatus(strtolower($status));                                            
                                                            
                    $entityManager->persist($Orders);
                    $entityManager->flush();                    
                                                            
                }else{                    
                    $return = $this->redirectToRoute('pedido', ['error_message' => $paymentState['error'].' - '.$paymentState['errorCode']], 307); 
                }                                
            }else{
                $return = $this->redirectToRoute('pedido', ['error_message' => '2. Ocurrio un error intente de nuevo'], 307); 
            }
        }else{
            $return = $this->redirectToRoute('pedido', ['error_message' => '1. Ocurrio un error intente de nuevo'], 307); 
        }
        return $return;
    }
    
     /**
      * @Route("/resumen-compra", name="resume")
    */
    
    public function resume(){   
        $session = $this->get('request_stack')->getCurrentRequest()->getSession(); 
        $environment = $this->get('kernel')->getEnvironment();
        
        if($session->has('Order')){
            $parameters = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'emails'])->getValue(), true);
            $order = $this->getDoctrine()->getRepository(Orders::class)->findOneBy(['id' => str_replace('GZ', '', $session->get('Order'))]);
            if(!empty($order)){             
                $request = $this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $order->getPayrequest());
                $response = $this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $order->getPayresponse());
                $description = $this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $order->getDescription());                
                if($session->has('retry')){
                    if($session->get('retry') >= 3){
                        $session->remove('retry');
                    }                    
                }
                $session->remove('shoping');
                $session->remove('carShoping');          
                
                if(!$session->has('sendEmail_'.$order->getId()) && $order->getStatus() == 'approved'){    
                    $postInfo = $session->get('postInfo_'.$order->getId());
                    $setTo = [$postInfo->get('PD_email'), 'saas02@gmail.com'];
                    if($environment != 'dev'){
                        $setTo[] = 'saas02@gmail.com';
                    }
                    $infoEmail = [
                        'setTemplate' => '@Twigs/App/email.html.twig',
                        'setTittle' => 'Compra Aprobada GZ'.str_pad($order->getId(), 10, ($environment == 'dev') ? "1" : "0", STR_PAD_LEFT),
                        'setFrom' => [$parameters[$environment]['setTo'] => 'Compra Realizada GZ'.str_pad($order->getId(), 10, ($environment == 'dev') ? "1" : "0", STR_PAD_LEFT)],
                        'setTo' => $setTo,
                        'setBcc' => $parameters[$environment]['setTo'],
                        'setInfo' => [
                            'request' => json_decode($request, true), 
                            'response' => json_decode($response, true), 
                            'description' => json_decode($description, true)
                        ],
                        'setFileName' => 'pdf/'.$order->getId(),
                        'generatePdf' => false,
                        'adjuntPdf' => false
                    ];                
                    
                    $this->get('email_service')->sendEmail($infoEmail);
                    $session->set('sendEmail_'.$order->getId(), true);
                }
                
                
                $return = $this->render('@Twigs/Orders/resume.html.twig', [
                    'request' => json_decode($request, true),
                    'response' => json_decode($response, true),
                    'description' => json_decode($description, true)
                ]);
            }else{
              $return = $this->redirectToRoute('pedido', ['error_message' => '2. No se encontro Orden'], 307);   
            }
        }else{
            $return = $this->redirectToRoute('pedido', ['error_message' => '1. No se encontro Orden'], 307); 
        }
        return $return;
    }            
    
    public function CallAPI($url, $data){
        $curl = curl_init();        
        curl_setopt($curl, CURLOPT_POST, 1);                        
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                               
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);        
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data))                                                                       
        ); 
        $execute = curl_exec($curl);
        if($execute === false){            
            $response['error'] = curl_error($curl);
        }else{                                            
            libxml_use_internal_errors(true); // !!!            
            $result = simplexml_load_string($execute, null, LIBXML_NOCDATA);            
            if($result !== false)
            {                                                                                
                if(isset($result->error) && $result->code == 'ERROR'){
                    $response['error'] = (string) $result->code;
                    $response['errorCode'] = (string) $result->error;
                    $response['message']['authorizationCode'] = (string) $result->code;  
                    $response['message']['responseCode'] = (string) $result->error;
                    $response['message']['operationDate'] = date("Y-m-d H:i:s");
                    $response['message']['trazabilityCode'] = (string) $result->error;
                }else{
                    $response['success'] = (string)$result->code;                    
                    $response['message'] = $result->transactionResponse;
                }                                
            }
            else
            {
                foreach(libxml_get_errors() as $error)
                {                                        
                    $response['error'] = $error->message;
                    $response['errorCode'] = '00000';
                }
            }
            
        }
        
        curl_close($curl);                               
        
        return $response;
    }        

    public function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    
}
