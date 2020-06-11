<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\GeneralBundle\EventListener;

/**
 * Description of ExceptionSubscriber
 *
 * @author sergio.amaya
 */
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\GeneralBundle\Models\GeneralModel;

class RequestListener {

    private $session;
    private $service_container;
    private $em;
    protected $twig;
    private $sessionSufixParameters = '[parameters]';
    private $wwwPrefix = 'www.';

    public function __construct($service_container, $session, $em, $twig) {
        $this->service_container = $service_container;
        $this->session = $session;
        $this->em = $em;
        $this->twig = $twig;
    }

    public function onKernelRequest(GetResponseEvent $event) {
        $request = $event->getRequest();
        $domain = $request->getHost();
        $post = $request->request;
        
    }

}
