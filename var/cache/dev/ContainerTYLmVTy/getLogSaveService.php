<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'log_save' shared autowired service.

include_once $this->targetDirs[3].'\\src\\GeneralBundle\\Services\\LogSave.php';

return $this->services['log_save'] = new \App\GeneralBundle\Services\LogSave(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->services['session'] ?? $this->getSessionService()), $this);
