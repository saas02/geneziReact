<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'email_service' shared autowired service.

include_once $this->targetDirs[3].'\\src\\GeneralBundle\\Services\\EmailService.php';

return $this->services['email_service'] = new \App\GeneralBundle\Services\EmailService(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php')), ($this->services['twig'] ?? $this->getTwigService()), $this);
