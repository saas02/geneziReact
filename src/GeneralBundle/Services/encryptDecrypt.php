<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\GeneralBundle\Services;

/**
 * Description of encryptDecrypt
 *
 * @author sergio.amaya
 */

use Symfony\Component\HttpFoundation\Response;

class encryptDecrypt {
        
    private $kernel;
    private $mailer;
    private $templating; 
    private $container;
    
    
    /**
     * 
     * @param type $kernel     
     */
    
    public function __construct($kernel, \Swift_Mailer $mailer, \Twig\Environment $templating, $container){  
        $this->kernel       = $kernel;
        $this->mailer       = $mailer;
        $this->templating   = $templating;     
        $this->container    = $container;
    }
        
    
    function encrypt_decrypt($action, $string){
        /* =================================================
         * ENCRYPTION-DECRYPTION
         * =================================================
         * ENCRYPTION: encrypt_decrypt('encrypt', $string);
         * DECRYPTION: encrypt_decrypt('decrypt', $string) ;
         */
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'WS-SERVICE-KEY';
        $secret_iv = 'WS-SERVICE-VALUE';
        // hash
        $key = hash('sha256', $secret_key);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ($action == 'encrypt') {
            $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
        } else {
            if ($action == 'decrypt') {
                $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            }
        }
        return $output;
    }
    
}
