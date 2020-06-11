<?php

/* @Twigs/General/corporative.html.twig */
class __TwigTemplate_166aba5725f699161dc0064f675df5e3e5c9c0d6bcd76fb3053973f6ca6e01bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/General/corporative.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/corporative.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/corporative.html.twig"));

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
    <body id=\"container-page-registration\">
    ";
        // line 5
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/General/corporative.html.twig", 5)->display($context);
        echo " 
    <section id=\"form-registration\">
        <div class=\"container\">
            ";
        // line 8
        if ((isset($context["message"]) || array_key_exists("message", $context))) {
            // line 9
            echo "                <div class=\"alert alert-info\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "</div>
            ";
        }
        // line 11
        echo "            <div class=\"row\">
                <div class=\"page-header\">
                  <h1>Formulario de Cliente Corporativo <small class=\"tittles-pages-logo\">Genezi</small></h1>
                </div>                
                <div class=\"col-xs-12 col-sm-12\">
                   <br><br>
                    <div id=\"container-form\">
                       <p style=\"color:#fff;\" class=\"text-center lead\">Cotización Clientes Corporativos</p>
                       <br><br>
                       <form class=\"form-horizontal FormCatElec\" action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_corporative");
        echo "\" role=\"form\" method=\"post\" data-form=\"save\">                                                      
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus nombres\" required name=\"form-fullname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus nombres.(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus apellidos\" required name=\"form-lastname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus apellido(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>                                                        
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-mobile\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"tel\" placeholder=\"Ingrese su número telefónico\" required name=\"form-phone\" maxlength=\"11\" pattern=\"[0-9]{8,11}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su número telefónico. Mínimo 8 digitos máximo 11\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-at\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"email\" placeholder=\"Ingrese su Email\" required name=\"form-email\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese la dirección de su Email\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-pencil\"></i></div>
                                <textarea class=\"form-control all-elements-tooltip\" placeholder=\"Ingrese su información\" required name=\"form-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su información\" pattern=\"[^-,]+\"></textarea>
                              </div>
                            </div>
                            <br>
                            <p><button type=\"submit\" class=\"btn btn-success btn-block\"><i class=\"fa fa-pencil\"></i>&nbsp; Enviar Cotización</button></p>
                            <div class=\"error\" style=\"display:none;padding-left: 40%\">
                                <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/error.png")), "html", null, true);
        echo "\" class=\"center-all-contens\"><br>
                            </div>
                            <div class=\"ResForm\" style=\"width: 100%; color: #fff; text-align: center; margin: 0;\"></div>
                        </form> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    ";
        // line 67
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/General/corporative.html.twig", 67)->display($context);
        echo "                                     
    ";
        // line 68
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/General/corporative.html.twig", 68)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/General/corporative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 68,  134 => 67,  122 => 58,  81 => 20,  70 => 11,  64 => 9,  62 => 8,  56 => 5,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends './App/base.html.twig' %}
{% block body %}  
    <body id=\"container-page-registration\">
    {% include './App/navigator.html.twig' %} 
    <section id=\"form-registration\">
        <div class=\"container\">
            {% if message is defined %}
                <div class=\"alert alert-info\" role=\"alert\">{{ message }}</div>
            {% endif %}
            <div class=\"row\">
                <div class=\"page-header\">
                  <h1>Formulario de Cliente Corporativo <small class=\"tittles-pages-logo\">Genezi</small></h1>
                </div>                
                <div class=\"col-xs-12 col-sm-12\">
                   <br><br>
                    <div id=\"container-form\">
                       <p style=\"color:#fff;\" class=\"text-center lead\">Cotización Clientes Corporativos</p>
                       <br><br>
                       <form class=\"form-horizontal FormCatElec\" action=\"{{ path(\"general_corporative\") }}\" role=\"form\" method=\"post\" data-form=\"save\">                                                      
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus nombres\" required name=\"form-fullname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus nombres.(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus apellidos\" required name=\"form-lastname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus apellido(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>                                                        
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-mobile\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"tel\" placeholder=\"Ingrese su número telefónico\" required name=\"form-phone\" maxlength=\"11\" pattern=\"[0-9]{8,11}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su número telefónico. Mínimo 8 digitos máximo 11\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-at\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"email\" placeholder=\"Ingrese su Email\" required name=\"form-email\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese la dirección de su Email\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-pencil\"></i></div>
                                <textarea class=\"form-control all-elements-tooltip\" placeholder=\"Ingrese su información\" required name=\"form-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su información\" pattern=\"[^-,]+\"></textarea>
                              </div>
                            </div>
                            <br>
                            <p><button type=\"submit\" class=\"btn btn-success btn-block\"><i class=\"fa fa-pencil\"></i>&nbsp; Enviar Cotización</button></p>
                            <div class=\"error\" style=\"display:none;padding-left: 40%\">
                                <img src=\"{{ absolute_url(asset('assets/img/error.png')) }}\" class=\"center-all-contens\"><br>
                            </div>
                            <div class=\"ResForm\" style=\"width: 100%; color: #fff; text-align: center; margin: 0;\"></div>
                        </form> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    {% include './App/footer.html.twig' %}                                     
    {% include 'General/general_modal.html.twig' %}
{% endblock %}
", "@Twigs/General/corporative.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\corporative.html.twig");
    }
}
