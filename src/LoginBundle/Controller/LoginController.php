<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\LoginBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Cliente;
use App\Entity\Administrador;
use App\Entity\Parameters;
use App\Entity\DocumentType;



/**
 * Description of LoginController
 *
 * @author sergio.amaya
 */

class LoginController extends Controller {  
    
    /**
      * @Route("/login", name="general_login")
    */
    
    public function login(){
        $request = Request::createFromGlobals();
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();        
        $result = [];
        $nombre = $request->request->get('nombre-login');
        $clave = md5($request->request->get('clave-login'));
        //$options = $request->request->get('optionsRadios');        
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];        
        if(!empty($nombre) && !empty($clave)){                                    
            $Admin = $this->getDoctrine()->getRepository(Administrador::class)->findBy(['nombre' => $nombre, 'clave' => $clave]);                        
            if(!empty($Admin)){
                if(!empty($Admin) > 0){
                    $session->set('nombreAdmin', $nombre);
                    $session->set('claveAdmin', $clave);
                    $result['message'] = $mensajes['user_autenticated'];
                }else{
                   $result['error'] = $mensajes['user_autenticated_error'];
                }
            }else{
                $Client = $this->getDoctrine()->getRepository(Cliente::class)->findBy(['nit' => $nombre, 'clave' => $clave]);
                if(!empty($Client)){                
                    if(!empty($Client) > 0){                    
                        $session->set('nombreUser', $nombre);
                        $session->set('claveUser', $clave);
                        $result['message'] = $mensajes['user_autenticated'];                    
                    }else{
                        $result['error'] = $mensajes['user_autenticated_error'];
                    }
                }else{
                   $result['error'] = $mensajes['user_autenticated_error'];
                }
            }
            
        }else{
            $result['error'] = $mensajes['user_autenticated_error']; 
        }
           
        return new JsonResponse($result);
        
    }
    
    
    /**
      * @Route("/registro-cliente", name="register_client")
    */
    
    public function registerClient(){
        $request = Request::createFromGlobals();
        $entityManager = $this->getDoctrine()->getManager();
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();          
        $inputs = ["clien-nit","clien-fullname","clien-lastname","clien-pass","clien-dir","clien-phone","clien-email", "clien-doc-type"];        
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
            $result['error'] = $mensajes['user_created_error'];
        }else{            
            $Cliente = $this->getDoctrine()->getRepository(Cliente::class)->duplicateNitName($variables['clien-nit'], $variables['clien-email']);             
            if(!empty($Cliente)){
                $result['error'] = $mensajes['duplicate_user'];
            }else{          
                $documentType = $this->getDoctrine()->getRepository(DocumentType::class)->findOneBy(['externalcode' => $variables['clien-doc-type']]);             
                $clienteNew = new Cliente();
                $clienteNew->setNit($variables['clien-nit']);                
                $clienteNew->setNombrecompleto($variables['clien-fullname']);
                $clienteNew->setApellido($variables['clien-lastname']);
                $clienteNew->setClave(md5($variables['clien-pass']));
                $clienteNew->setDireccion($variables['clien-dir']);
                $clienteNew->setTelefono($variables['clien-phone']);
                $clienteNew->setEmail($variables['clien-email']);
                $clienteNew->setDocumenttype($documentType);                
                $clienteNew->setCreado(new \DateTime());
                $clienteNew->setActualizado(new \DateTime());
                $entityManager->persist($clienteNew);
                $entityManager->flush();                
                $result['message'] = $mensajes['user_created'];
            }

        }        
        
        return new JsonResponse($result);                               
    }
    
    
    /**
      * @Route("/logout", name="general_logout")
    */
    
    public function logout(){
        $session = $this->get('request_stack')->getCurrentRequest()->getSession(); 
        $sessionsInfo = ['nombreAdmin', 'claveAdmin', 'nombreUser', 'claveUser', 'carShoping', 'retry', 'Order'];        
        foreach($sessionsInfo as $sessionInfo){
            if($session->has($sessionInfo)){
                $session->remove($sessionInfo);
            }            
        }            
        return $this->redirectToRoute('general_home');
    }
                            
    
}
