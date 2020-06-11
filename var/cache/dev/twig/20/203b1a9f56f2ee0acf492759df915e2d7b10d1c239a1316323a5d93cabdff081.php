<?php

/* App/footer.html.twig */
class __TwigTemplate_bfc81186b28c6580464d12920694723cf2a2b81dfef553008c923187c689ae82 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <footer>
        <h3 class=\"text-center\">Siguenos en nuestras redes sociales</h3><br>
        <ul class=\"list-unstyled text-center\">
            <a href=\"https://www.facebook.com/Genezi-Tecnolog%C3%ADa-Led-316025609013103/?__tn__=kC-R&eid=ARAduNThM-RnbgP2NrH9-1ftSb4XLqTqzPCyiasRZBRHxBt9tOb207_VIoniQ-zu-yRQmCHJxkt6Uzxm&hc_ref=ARRr6psv3bQJA3ffa7FglWFe83Hxwo9foq6O2LozhG7hTaoqOKas4d-2cnimYEHpuM8&fref=nf&__xts__[0]=68.ARCkDCSnx933Ten115bw-n2rYis4k2OXPQ5i4I2IRYIQl1zQOeGkOHFXfJpY5qOrVpq_23nuWADX2GbP6u3Q8oAROVug_-YQJg88bDjrXlXA_f2XezZ-qG0lx24yjIHjuNai_i0gDMUdMuzAlBrxpUNPXLOaK_yObon0X-pvtI2rlGYh5pPzRIT4BwmBLH9VdrMVXyf5SpFumDtvOFm_1U33MeIGIYSjK4ZVXGwsMpg3BC-eDmbinfLJXxcwUyhnX7yVa1n-upj6iRgCQo8vW6pjZi1FBGqNJtsLOAndoIVytURKhdu9S8KzlMfgWvpYUiGSpIY3iEQRIIDL5V8qf5U\" target=\"_blank\" class=\"social-icon all-elements-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/social-facebook.png"), "html", null, true);
        echo "\" alt=\"facebook-icon\">
            </a>
            <a href=\"https://www.instagram.com/explore/locations/316025609013103/genezi-tecnologia-led/?hl=es-la\" target=\"_blank\" class=\"social-icon all-elements-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Instagram +\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/social-instagram.png"), "html", null, true);
        echo "\" alt=\"instagram-icon\">
            </a>            
            ";
        // line 20
        echo "        </ul>
        <br><br>
        ";
        // line 23
        echo "        <br>
        <h5 class=\"text-center tittles-pages-logo\">Genezi Tecnología Led &copy; <script>document.write(new Date().getFullYear())</script></h5>
    </footer>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "App/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  65 => 20,  60 => 9,  54 => 6,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
    <footer>
        <h3 class=\"text-center\">Siguenos en nuestras redes sociales</h3><br>
        <ul class=\"list-unstyled text-center\">
            <a href=\"https://www.facebook.com/Genezi-Tecnolog%C3%ADa-Led-316025609013103/?__tn__=kC-R&eid=ARAduNThM-RnbgP2NrH9-1ftSb4XLqTqzPCyiasRZBRHxBt9tOb207_VIoniQ-zu-yRQmCHJxkt6Uzxm&hc_ref=ARRr6psv3bQJA3ffa7FglWFe83Hxwo9foq6O2LozhG7hTaoqOKas4d-2cnimYEHpuM8&fref=nf&__xts__[0]=68.ARCkDCSnx933Ten115bw-n2rYis4k2OXPQ5i4I2IRYIQl1zQOeGkOHFXfJpY5qOrVpq_23nuWADX2GbP6u3Q8oAROVug_-YQJg88bDjrXlXA_f2XezZ-qG0lx24yjIHjuNai_i0gDMUdMuzAlBrxpUNPXLOaK_yObon0X-pvtI2rlGYh5pPzRIT4BwmBLH9VdrMVXyf5SpFumDtvOFm_1U33MeIGIYSjK4ZVXGwsMpg3BC-eDmbinfLJXxcwUyhnX7yVa1n-upj6iRgCQo8vW6pjZi1FBGqNJtsLOAndoIVytURKhdu9S8KzlMfgWvpYUiGSpIY3iEQRIIDL5V8qf5U\" target=\"_blank\" class=\"social-icon all-elements-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\">
                <img src=\"{{ asset('assets/icons/social-facebook.png') }}\" alt=\"facebook-icon\">
            </a>
            <a href=\"https://www.instagram.com/explore/locations/316025609013103/genezi-tecnologia-led/?hl=es-la\" target=\"_blank\" class=\"social-icon all-elements-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Instagram +\">
                <img src=\"{{ asset('assets/icons/social-instagram.png') }}\" alt=\"instagram-icon\">
            </a>            
            {#<a href=\"#\" class=\"social-icon all-elements-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Linkedin\">
                <img src=\"{{ asset('assets/icons/social-linkedin.png') }}\" alt=\"linkedin-icon\">
            </a>
            <a href=\"#\" class=\"social-icon all-elements-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Pinterest\">
                <img src=\"{{ asset('assets/icons/social-pinterest.png') }}\" alt=\"pinterest-icon\">
            </a>
            <a href=\"#\" class=\"social-icon all-elements-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\">
                <img src=\"{{ asset('assets/icons/social-twitter.png') }}\" alt=\"twitter-icon\">
            </a>#}
        </ul>
        <br><br>
        {#<a href=\"http://www.payulatam.com/logos/pol.php?l=133&c=5d9755b7087f3\" target=\"_blank\"><img src=\"http://www.payulatam.com/logos/logo.php?l=133&c=5d9755b7087f3\" alt=\"PayU Latam\" border=\"0\" /></a>#}
        <br>
        <h5 class=\"text-center tittles-pages-logo\">Genezi Tecnología Led &copy; <script>document.write(new Date().getFullYear())</script></h5>
    </footer>    
{% endblock %}", "App/footer.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\App\\footer.html.twig");
    }
}
