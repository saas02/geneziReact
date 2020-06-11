<?php

namespace App\TwigsBundle\Twig\Extension;

use Symfony\Component\HttpFoundation\Response;


/**
 * Class encryptDecrypt
 * @package TwigBundle\Twig\Extension
 */
class encryptDecrypt extends \Twig_Extension {
    
    public function getName()
    {
        return 'twig.encrypt_decrypt';
    }
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('encrypt', array($this, 'encrypt')),
            new \Twig_SimpleFunction('decrypt', array($this, 'decrypt'))
        );
    }
    
    public function encrypt($string)
    {
        return $this->encrypt_decrypt('encrypt', $string);
    }
    
    public function decrypt($string)
    {
        return $this->encrypt_decrypt('decrypt', $string);
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
