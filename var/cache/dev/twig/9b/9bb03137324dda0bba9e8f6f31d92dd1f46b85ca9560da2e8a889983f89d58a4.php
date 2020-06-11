<?php

/* @Twigs/General/register.html.twig */
class __TwigTemplate_b64ec4bed195d14fed149d4b7917793fad424e10b40a8742b578c6e32fbd4dc6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/General/register.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/register.html.twig"));

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
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/General/register.html.twig", 5)->display($context);
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
                  <h1>Registro de usuarios <small class=\"tittles-pages-logo\">Genezi</small></h1>
                </div>
                <div class=\"col-xs-12 col-sm-6 text-center\">
                   <br><br><br>
                    <p><i class=\"fa fa-users fa-5x\"></i></p>
                    <p class=\"lead\">
                        Al registrarse recibira notificaciones de nuestros productos y ofertas más recientes en nuestra tienda.
                    </p>
                    <br>
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["imagesParameter"]) || array_key_exists("imagesParameter", $context) ? $context["imagesParameter"] : (function () { throw new Twig_Error_Runtime('Variable "imagesParameter" does not exist.', 22, $this->source); })()), "register", []))), "html", null, true);
        echo "\" alt=\"electrodomesticos\" class=\"img-responsive\">
                </div>
                <div class=\"col-xs-12 col-sm-6\">
                   <br><br>
                    <div id=\"container-form\">
                       <p style=\"color:#fff;\" class=\"text-center lead\">Debera de llenar todos los campos para registrarse</p>
                       <br><br>
                       <form class=\"form-horizontal FormCatElec\" action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_client");
        echo "\" role=\"form\" method=\"post\" data-form=\"save\">
                           <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-credit-card\"></i></div>
                                <select name=\"clien-doc-type\" id=\"clien-doc-type\" required class=\"form-control\">                                    
                                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentType"]) || array_key_exists("documentType", $context) ? $context["documentType"] : (function () { throw new Twig_Error_Runtime('Variable "documentType" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 35
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "externalcode", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "description", []), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                    
                                </select>
                              </div>
                            </div>                                                        
                            <br>
                           <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-credit-card\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese su número de Identificación\" required name=\"clien-nit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su número de Identificación. Solamente números\" maxlength=\"30\" pattern=\"[0-9]{7,30}\">
                              </div>
                            </div>                                                        
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus nombres\" required name=\"clien-fullname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus nombres.(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus apellidos\" required name=\"clien-lastname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus apellido(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"password\" placeholder=\"Introduzca una contraseña\" required name=\"clien-pass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Defina una contraseña para iniciar sesión\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-home\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese su dirección\" required name=\"clien-dir\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese la direción en la reside actualmente\" maxlength=\"100\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-mobile\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"tel\" placeholder=\"Ingrese su número telefónico\" required name=\"clien-phone\" maxlength=\"11\" pattern=\"[0-9]{8,11}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su número telefónico. Mínimo 8 digitos máximo 11\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-at\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"email\" placeholder=\"Ingrese su Email\" required name=\"clien-email\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese la dirección de su Email\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <p><button type=\"submit\" class=\"btn btn-success btn-block\"><i class=\"fa fa-pencil\"></i>&nbsp; Registrarse</button></p>
                            <div class=\"error\" style=\"display:none;padding-left: 40%\">
                                <img src=\"";
        // line 92
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
        // line 101
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/General/register.html.twig", 101)->display($context);
        echo "                                     
    ";
        // line 102
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/General/register.html.twig", 102)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/General/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 102,  186 => 101,  174 => 92,  116 => 36,  105 => 35,  101 => 34,  93 => 29,  83 => 22,  70 => 11,  64 => 9,  62 => 8,  56 => 5,  44 => 3,  15 => 2,);
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
                  <h1>Registro de usuarios <small class=\"tittles-pages-logo\">Genezi</small></h1>
                </div>
                <div class=\"col-xs-12 col-sm-6 text-center\">
                   <br><br><br>
                    <p><i class=\"fa fa-users fa-5x\"></i></p>
                    <p class=\"lead\">
                        Al registrarse recibira notificaciones de nuestros productos y ofertas más recientes en nuestra tienda.
                    </p>
                    <br>
                    <img src=\"{{ absolute_url(asset(imagesParameter.register)) }}\" alt=\"electrodomesticos\" class=\"img-responsive\">
                </div>
                <div class=\"col-xs-12 col-sm-6\">
                   <br><br>
                    <div id=\"container-form\">
                       <p style=\"color:#fff;\" class=\"text-center lead\">Debera de llenar todos los campos para registrarse</p>
                       <br><br>
                       <form class=\"form-horizontal FormCatElec\" action=\"{{ path(\"register_client\") }}\" role=\"form\" method=\"post\" data-form=\"save\">
                           <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-credit-card\"></i></div>
                                <select name=\"clien-doc-type\" id=\"clien-doc-type\" required class=\"form-control\">                                    
                                    {% for document in documentType %}
                                        <option value=\"{{ document.externalcode }}\">{{ document.description }}</option>
                                    {% endfor %}                                    
                                </select>
                              </div>
                            </div>                                                        
                            <br>
                           <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-credit-card\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese su número de Identificación\" required name=\"clien-nit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su número de Identificación. Solamente números\" maxlength=\"30\" pattern=\"[0-9]{7,30}\">
                              </div>
                            </div>                                                        
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus nombres\" required name=\"clien-fullname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus nombres.(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-user\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese sus apellidos\" required name=\"clien-lastname\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese sus apellido(solamente letras)\" pattern=\"[a-zA-Z ]{1,50}\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"password\" placeholder=\"Introduzca una contraseña\" required name=\"clien-pass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Defina una contraseña para iniciar sesión\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-home\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"text\" placeholder=\"Ingrese su dirección\" required name=\"clien-dir\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese la direción en la reside actualmente\" maxlength=\"100\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-mobile\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"tel\" placeholder=\"Ingrese su número telefónico\" required name=\"clien-phone\" maxlength=\"11\" pattern=\"[0-9]{8,11}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese su número telefónico. Mínimo 8 digitos máximo 11\">
                              </div>
                            </div>
                            <br>
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-at\"></i></div>
                                <input class=\"form-control all-elements-tooltip\" type=\"email\" placeholder=\"Ingrese su Email\" required name=\"clien-email\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ingrese la dirección de su Email\" maxlength=\"50\">
                              </div>
                            </div>
                            <br>
                            <p><button type=\"submit\" class=\"btn btn-success btn-block\"><i class=\"fa fa-pencil\"></i>&nbsp; Registrarse</button></p>
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
", "@Twigs/General/register.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\register.html.twig");
    }
}
