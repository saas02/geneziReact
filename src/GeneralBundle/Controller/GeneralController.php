<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use App\Entity\Producto;
use App\Entity\Categoria;
use App\Entity\Parameters;
use App\Entity\DocumentType;
use App\Entity\FormSubscription;



/**
 * Description of GeneralController
 *
 * @author sergio.amaya
 */

class GeneralController extends Controller {    
    
    /**
      * @Route("/", name="general_home")
    */
    
    public function index(){
        $productos = $this->getDoctrine()->getRepository(Producto::class)->findAllByCreado();
        $banners = $this->getDoctrine()->getRepository(Producto::class)->findAllByInHome();
        $parameters = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'images'])->getValue(), true);
        $filas = 4; 
        
//        $infoEmail = [
//            'setTemplate' => '@Twigs/App/email.html.twig',
//            'setTittle' => 'Incentivos Prueba',
//            'setFrom' => ['saas02@gmail.com' => 'Prueba Email'],
//            'setTo' => ['sergio.amaya@aviatur.com', 'saas02@gmail.com'],
//            'setInfo' => ['name' => 'Esto es una prueba'],
//            'setFileName' => 'pdf/roles',
//            'generatePdf' => false,
//            'adjuntPdf' => false
//        ];                
                        
        //$this->get('email_service')->sendEmail($infoEmail);
                        
                
        return $this->render('@Twigs/General/general.html.twig', [
            'productos' => $productos, 
            'banners' => $banners, 
            'filas' => $filas,
            'imagesParameter' => $parameters['imagesParameter']
        ]);
        
    }

    /**
      * @Route("/productos_creados", name="productos_creados")
      */
      public function indexAction()
      {
        
        $productos = $this->getDoctrine()->getRepository(Producto::class)->findAllByCreado();

        $serializer = $this->get('serializer');        
        $response = $serializer->serialize($productos,'json');

        $responsesArray = json_decode($response, true);

        foreach($responsesArray as $key => $responseArray){            
            foreach($productos as $producto){                
                if($producto->getCodigoprod() == $responseArray['codigoprod']){                                        
                    $responsesArray[$key]['codigoprodurl'] = $this->get('encrypt_decrypt')->encrypt_decrypt('encrypt', $responseArray['codigoprod']);
                }                
            }             
        }        
        
        return new Response(json_encode($responsesArray));
  
      }
    
    /**
      * @Route("/nosotros", name="general_info")
    */
    
    public function generalInfo(){ 
        $parameters = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'nosotros'])->getValue(), true);
        
        return $this->render('@Twigs/General/nosotros.html.twig', ['parameters' => $parameters]);
    }
    
    
    
    
    /**
      * @Route("/registro", name="register")
    */
    
    public function register(){    
        $documentType = $this->getDoctrine()->getRepository(DocumentType::class)->findBy([],array('description' => 'ASC'));
        $parameters = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'images'])->getValue(), true);
        return $this->render('@Twigs/General/register.html.twig', [
            'documentType' => $documentType, 
            'imagesParameter' => $parameters['imagesParameter']
        ]);
    }
    
    /**
      * @Route("/productos", name="products")
    */
    
    public function products(){             
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->findAll();
        $productos = $this->getDoctrine()->getRepository(Producto::class)->findAllByStock();
        $filas = 4;
        
        return $this->render('@Twigs/General/products.html.twig', ['categorias' => $categorias, 'productos' => $productos, 'filas' => $filas]);
    }
    
    /**
      * @Route("/productos-imagenes", name="products-img")
    */
    
    public function productsImg(){   
        $request = Request::createFromGlobals();                   
        if($request->isXmlHttpRequest()) {
            $inputs = ["product"];
            $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
            $validate = true;
            $result = [];            
            $variables = [];

            foreach($inputs as $input){
                if(empty($request->request->get($input))){                
                    $validate = false;
                }else{
                    $variables[$input] = trim($request->request->get($input));
                }
            }
            
            if(!$validate){
                $result['flash_error'] = 'Error en los campos';
            }else{                
                $producto = $this->getDoctrine()->getRepository(Producto::class)->findOneBy(['codigoprod' => $variables['product']]);                
                if(empty($producto)){
                    $result['flash_error'] = 'No existe el producto';
                }else{                    
                    $results["nombre"] = strtoupper($producto->getNombreprod());
                    $results["codigo"] = $producto->getCodigoprod();
                    $results["imagenes"] = $producto->getImagen();
                    $results["descripcion"] = $producto->getDescripcion();
                    $result['message'] = json_encode($results);
                }
            }            
        }else{            
            $result['flash_error'] = 'Petición invalida';
        }
                
        return new JsonResponse($result);    
    }            
    
    /**
      * @Route("/carrito", name="car_shop")
    */
    
    
    public function carShop(){
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();                  
        $request = Request::createFromGlobals();           
        $inputs = ["dataInfo", "deleteInfo"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $result = [];
        $carShoping = [];
        $variables = [];
                
        foreach($inputs as $input){
            if(empty($request->request->get($input))){                
                $validate = false;
            }else{
                $variables[$input] = trim($request->request->get($input));
            }
        }
        //$session->remove('carShoping');die;
        if(!$validate){
            $result['flash_error'] = 'Error en los campos';
        }else{            
            $producto = $this->getDoctrine()->getRepository(Producto::class)->findOneBy(['codigoprod' => $variables['dataInfo'], 'estado' => 1]);
            if(empty($producto)){
                $result['flash_error'] = 'No existe el producto';
            }else{
                $precio = $producto->getPrecio();
                if(!empty($producto->getInpromo()) && $producto->getInpromo() > 0){
                    $precio = $precio - ($precio * ($producto->getInpromo() / 100));
                }
                $carShopingInput[] = [
                    "codigo" => $producto->getCodigoprod(),
                    "nombre" => $producto->getNombreprod(),
                    "precio" => $precio                    
                ];  
                
                if($session->has('carShoping') && !empty($session->get('carShoping'))){                                         
                    $carShoping = json_decode($session->get('carShoping'), true);                                        
                    if($variables['deleteInfo'] === "true"){
                        $carShopingDelete = [];
                        foreach($carShoping as $key => $car){                                                        
                            if($carShopingInput[0]['codigo'] !== $car['codigo']) {
                                $carShopingDelete[] = $car;
                            }
                        }
                        $carShoping = $carShopingDelete;
                    }else{
                        if(!array_search($carShopingInput[0]['codigo'], array_column($carShoping, 'codigo')) !== false) {                            
                            $carShoping[] = $carShopingInput[0];
                        }                        
                    }                                                                                 
                }else{
                    $carShoping[] = $carShopingInput[0];
                }
                
                if(!empty($carShoping)){
                    $session->set('carShoping', json_encode($carShoping));
                }else{
                    $session->remove('carShoping');
                }
                
                $result['message'] = json_encode($carShoping);
            }            
        }
 
        return new JsonResponse($result);       
        
    }
    
    /**
      * @Route("/cargar-carrito", name="car_load")
    */
    
    
    public function loadCarShop(){
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();        
        $request = Request::createFromGlobals();           
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];        
        $inputs = ["carShoping"];
        $validate = true;
        $variables = [];
                
        foreach($inputs as $input){
            if(empty($request->request->get($input))){                
                $validate = false;
            }else{
                $variables[$input] = trim($request->request->get($input));
            }
        }
        
        if(!$validate || !$session->has('carShoping') || empty($session->get('carShoping'))){
            $result['flash_error'] = 'No se encuentran datos';             
        }else{            
            $result['message'] = json_decode($variables['carShoping'], true);            
        }
        
        return new JsonResponse($result);
         
    }
    
    /**
      * @Route("/cliente-corporativo", name="general_corporative")
    */
    
    public function corporativeIndex(){
        $entityManager = $this->getDoctrine()->getManager();
        $request = Request::createFromGlobals();        
        $inputs = ["form-fullname", "form-lastname", "form-phone", "form-email", "form-info"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $parameters = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'emails'])->getValue(), true);
        $environment = $this->get('kernel')->getEnvironment(); 
        $validate = true;
        $result = [];        
        $variables = [];
        
        
        if ($request->isXmlHttpRequest()) {
            foreach($inputs as $input){                                
                if(empty($request->request->get($input))){                
                    $validate = false;
                }else{                    
                    $variables[$input] = htmlspecialchars(trim($request->request->get($input)));
                }
            }
            
            if(!$validate){
                $result['flash_error'] = 'Error en los campos';
            }else{                                
                $FormSubscription = new FormSubscription();             
                $FormSubscription->setName($variables['form-fullname']);
                $FormSubscription->setSurname($variables['form-lastname']);
                $FormSubscription->setPhone($variables['form-phone']);
                $FormSubscription->setEmail($variables['form-email']);
                $FormSubscription->setObservations($variables['form-info']);
                $FormSubscription->setCreationdate(new \DateTime());
                $entityManager->persist($FormSubscription);
                $entityManager->flush();                
                $result['message'] = 'Cotización Realizada';
                
                $infoEmail = [
                    'setTemplate' => '@Twigs/App/cotizacion.html.twig',
                    'setTittle' => 'Cotización',
                    'setFrom' => [$parameters[$environment]['setTo'] => 'Cotización'],
                    'setBcc' => $parameters[$environment]['setTo'],
                    'setTo' => [$variables['form-email']],
                    'setInfo' => ['info' => $FormSubscription],
                    'setFileName' => 'pdf/roles',
                    'generatePdf' => false,
                    'adjuntPdf' => false
                ];                

                $this->get('email_service')->sendEmail($infoEmail);
                
                $return = new JsonResponse($result);   
                
            }  
                        
        }else{
            $return = $this->render('@Twigs/General/corporative.html.twig', []);
        }
        
        return $return;
    }
    
                
}
