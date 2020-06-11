<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\GeneralBundle\Services;

/**
 * Description of EmailService
 *
 * @author sergio.amaya
 */

use Symfony\Component\HttpFoundation\Response;

class EmailService {
        
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
        
    
    public function sendEmail($infoEmail){        
        $render = $this->templating->render($infoEmail['setTemplate'], $infoEmail['setInfo']);                  
        
        if(isset($infoEmail['generatePdf']) && $infoEmail['generatePdf']){
            $filename = $this->generatePdf($render, $infoEmail);            
        }
        
        array_push($infoEmail['setTo'], $infoEmail['setFrom']);
        $message = (new \Swift_Message())
            ->setSubject($infoEmail['setTittle'])
            ->setFrom($infoEmail['setFrom'])
            ->setBcc($infoEmail['setBcc'])
            ->setTo($infoEmail['setTo'])        
            ->setBody($render, 'text/html');
        if(isset($filename) && file_exists($filename) && isset($infoEmail['adjuntPdf']) && $infoEmail['adjuntPdf']){
            $message->attach(\Swift_Attachment::fromPath($filename));
        }        
        
        try{
            $this->mailer->send($message);
        }catch(\ErrorException $e){            
            print_r($e);die;
        }
        
    }
    
    
    public function generatePdf($render, $infoEmail){        
        
        $filename = $this->kernel->getProjectDir() . '/public/'.$infoEmail['setFileName'].'.pdf';            
        try{                        
            if (!file_exists($filename)) {
                $this->container->get('knp_snappy.pdf')->generateFromHtml($render, $filename);                    
            }                            
        }catch(\ErrorException $e){
            print_r($e);die;
        }

        return $filename;
        
    }
    
}
