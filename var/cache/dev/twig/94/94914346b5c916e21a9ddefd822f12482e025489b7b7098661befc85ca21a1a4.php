<?php

/* @Twigs/Orders/form_payment.html.twig */
class __TwigTemplate_d490fd3f0e2279e600616ed56ba6ff29379404c41f81688eaf0c0b6aa1ace238 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/Orders/form_payment.html.twig", 2);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "./App/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Orders/form_payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Orders/form_payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
    <body id=\"container-page-product\">
        ";
        // line 5
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/Orders/form_payment.html.twig", 5)->display($context);
        echo "           
        <section id=\"store\">
            <br>
            <div class=\"container\">
                <div class=\"page-header\">
                    <h1>Genezi <small class=\"tittles-pages-logo\">Shop</small></h1>
                </div>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-xs-12\">                        
                        <div class=\"bd-example\">
                            <div class=\"table-responsive-sm\">
                                <div class=\"frame js-last js-paymentForm\">    
                                <form id=\"formpayment\" method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
        echo "\">
                                    <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Productos\">
                                        <div class=\"row\">
                                            <div class=\"form-row col-xs-12 col-sm-6\">
                                                ";
        // line 22
        $this->loadTemplate("./Orders/payment_form.html.twig", "@Twigs/Orders/form_payment.html.twig", 22)->display($context);
        echo "                                                
                                            </div>
                                            <div class=\"form-row col-xs-12 col-sm-6\">
                                                ";
        // line 25
        $this->loadTemplate("./Orders/facturation_form.html.twig", "@Twigs/Orders/form_payment.html.twig", 25)->display($context);
        // line 26
        echo "                                            </div>
                                            ";
        // line 27
        if ((isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context))) {
            // line 28
            echo "                                                <input type=\"hidden\" readonly name=\"PD_deviceSessionId\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context) ? $context["deviceSessionId"] : (function () { throw new Twig_Error_Runtime('Variable "deviceSessionId" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\">
                                            ";
        }
        // line 29
        echo "                                            
                                        </div>
                                    </div>                                    
                                </form>
                            </div>                                                     
                        </div>
                    </div>
                </div>
        </section>
        ";
        // line 38
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/Orders/form_payment.html.twig", 38)->display($context);
        echo "                                     
        ";
        // line 39
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/Orders/form_payment.html.twig", 39)->display($context);
        // line 40
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/Orders/form_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  113 => 39,  109 => 38,  98 => 29,  92 => 28,  90 => 27,  87 => 26,  85 => 25,  79 => 22,  72 => 18,  56 => 5,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends './App/base.html.twig' %}
{% block body %}    
    <body id=\"container-page-product\">
        {% include './App/navigator.html.twig' %}           
        <section id=\"store\">
            <br>
            <div class=\"container\">
                <div class=\"page-header\">
                    <h1>Genezi <small class=\"tittles-pages-logo\">Shop</small></h1>
                </div>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-xs-12\">                        
                        <div class=\"bd-example\">
                            <div class=\"table-responsive-sm\">
                                <div class=\"frame js-last js-paymentForm\">    
                                <form id=\"formpayment\" method=\"post\" action=\"{{ path('payment') }}\">
                                    <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Productos\">
                                        <div class=\"row\">
                                            <div class=\"form-row col-xs-12 col-sm-6\">
                                                {% include './Orders/payment_form.html.twig' %}                                                
                                            </div>
                                            <div class=\"form-row col-xs-12 col-sm-6\">
                                                {% include './Orders/facturation_form.html.twig' %}
                                            </div>
                                            {% if deviceSessionId is defined %}
                                                <input type=\"hidden\" readonly name=\"PD_deviceSessionId\" value=\"{{deviceSessionId}}\">
                                            {% endif %}                                            
                                        </div>
                                    </div>                                    
                                </form>
                            </div>                                                     
                        </div>
                    </div>
                </div>
        </section>
        {% include './App/footer.html.twig' %}                                     
        {% include 'General/general_modal.html.twig' %}
    </body>
{% endblock %}
", "@Twigs/Orders/form_payment.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Orders\\form_payment.html.twig");
    }
}
