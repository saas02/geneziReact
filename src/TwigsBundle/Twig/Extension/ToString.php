<?php

namespace App\TwigsBundle\Twig\Extension;

/**
 * Class ToString
 * @package TwigBundle\Twig\Extension
 */
class ToString extends \Twig_Extension {
    public function getName()
    {
        return 'twig.to_string';
    }
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('to_string', array($this, 'toString'))
        );
    }
    public function toString($element)
    {
        return (string) $element;
    }
}
