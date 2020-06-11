<?php

namespace App\TwigsBundle\Twig\Extension;

/**
 * Class ToInt
 * @package TwigBundle\Twig\Extension
 */
class ToInt extends \Twig_Extension {
    public function getName()
    {
        return 'twig.to_int';
    }
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('to_int', array($this, 'toInt'))
        );
    }
    public function toInt($element)
    {
        return (int) $element;
    }
}
