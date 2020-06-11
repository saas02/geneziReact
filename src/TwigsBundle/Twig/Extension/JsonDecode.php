<?php

namespace App\TwigsBundle\Twig\Extension;

/**
 * Class JsonDecode
 * @package TwigBundle\Twig\Extension
 */
class JsonDecode extends \Twig_Extension {
    public function getName()
    {
        return 'twig.json_decode';
    }
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('json_decode', array($this, 'jsonDecode'))
        );
    }
    public function jsonDecode($string, $assoc = false)
    {
        if($assoc === true) {
            return json_decode($string, true);
        } else {
            return json_decode($string);            
        }
    }
}
