<?php

namespace App\TwigsBundle\Services;

use Symfony\Component\HttpFoundation\RequestStack;

class TwigFolder {

    protected $request;
    private $service_container;
    private $wwwPrefix = 'www.';

    public function __construct($service_container) {
        $this->service_container = $service_container;
    }

    public function setRequest(RequestStack $request_stack) {
        $this->request = $request_stack->getCurrentRequest();
    }
    
    public function twigExists($customTwig, $defaultTwig = null) {
        $parser = $this->service_container->get('templating.name_parser');
        $locator = $this->service_container->get('templating.locator');
        try {
            $parsed = $parser->parse($customTwig);
            $path = $locator->locate($parsed);
            if (file_exists($path)) {
                return $customTwig;
            }
        } catch (\Exception $ex) {
            try {
                if ($defaultTwig != null) {
                    $parsed = $parser->parse($defaultTwig);
                    $path = $locator->locate($parsed);
                    if (file_exists($path)) {
                        return $defaultTwig;
                    }
                } else {
                    $explodedTwig = explode(':', $customTwig);
                    $implodedTwig = $explodedTwig[0] . ":default:" . $explodedTwig[2];
                    $parsed = $parser->parse($implodedTwig);
                    $path = $locator->locate($parsed);
                    if (file_exists($path)) {
                        return $implodedTwig;
                    }
                }
            } catch (\Exception $ex) {
                return false;
            }
        }
    }

    public function pathWithLocale($path, $pathArray = array(), $newLocale = null) {
        if ($newLocale == null) {
            $request = $this->service_container->get('request_stack')->getCurrentRequest();
            $locale = $request->getLocale();
        } else {
            $locale = $newLocale;
        }
        if ($locale == 'en' || $locale == 'fr') {
            $pathArray['_locale'] = $locale;
            return $this->service_container->get('router')->generate($path . '_locale', $pathArray);
        } else {
            return $this->service_container->get('router')->generate($path, $pathArray);
        }
    }

}
