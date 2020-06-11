<?php

/* @Twigs/Orders/resume.html.twig */
class __TwigTemplate_b29591b40d2ef35fe25974d1c6659f9a4636733ff730281bb7ec019af64bfc24 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/Orders/resume.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Orders/resume.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Orders/resume.html.twig"));

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
    <body id=\"container-page-index\">
        ";
        // line 5
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/Orders/resume.html.twig", 5)->display($context);
        echo " 
        <section id=\"infoproduct\">
            <div class=\"container\">                                
                <div class=\"table-title\">
                    <h3>Resumen de Compra</h3>
                </div>                
                <div class=\"table-title text-center\">                    
                    ";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 12, $this->source); })()), "message", []), "responseCode", []) != "APPROVED") && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "session", []), "get", [0 => "retry"], "method") != 1) || ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "session", []), "get", [0 => "retry"], "method") > 0) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "session", []), "get", [0 => "retry"], "method") < 3))))) {
            // line 13
            echo "                        <form class=\"inline-block condensed\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulario");
            echo "\" method=\"POST\">
                            <input type=\"submit\" value=\"Reintentar pago\" class=\"btn btn-info\">
                            <input type=\"hidden\" name=\"referenceCode\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 15, $this->source); })()), "transaction", []), "order", []), "referenceCode", []), "html", null, true);
            echo "\">
                        </form>                                            
                    ";
        }
        // line 17
        echo "                
                    ";
        // line 19
        echo "                </div>                
                <table class=\"table-fill\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Datos de transacción</th>
                            <th class=\"text-center\">Datos de Cliente</th>                            
                        </tr>
                    </thead>
                    <tbody class=\"table-hover\">
                        <tr>
                            <td class=\"text-left\">
                                <label>Referencia:</label>  ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 30, $this->source); })()), "transaction", []), "order", []), "referenceCode", []), "html", null, true);
        echo "
                            </td>
                            <td class=\"text-left\">
                                <label>Cliente: </label> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 33, $this->source); })()), "transaction", []), "payer", []), "fullName", []), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Total:</label>  ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 38, $this->source); })()), "transaction", []), "order", []), "additionalValues", []), "TX_VALUE", []), "currency", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 38, $this->source); })()), "transaction", []), "order", []), "additionalValues", []), "TX_VALUE", []), "value", []), 0, ".", ","), "html", null, true);
        echo "
                            </td>
                            <td class=\"text-left\">
                                <label>Email: </label> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 41, $this->source); })()), "transaction", []), "payer", []), "emailAddress", []), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Código de Autorización:</label> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 46, $this->source); })()), "message", []), "authorizationCode", []), "html", null, true);
        echo "
                            </td>
                            <td class=\"text-left\">
                                <label>Teléfono: </label> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 49, $this->source); })()), "transaction", []), "payer", []), "contactPhone", []), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Estado de Transacción:</label>  ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 54, $this->source); })()), "message", []), "responseCode", []), "html", null, true);
        echo "
                            </td>
                            <td class=\"text-left\">
                                <label>Dirección: </label> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 57, $this->source); })()), "transaction", []), "payer", []), "billingAddress", []), "street1", []), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Fecha de Transacción:</label>  ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 62, $this->source); })()), "message", []), "operationDate", []), "html", null, true);
        echo "
                            </td>
                            <td class=\"text-left\"></td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Código de Trazabilidad:</label>  ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 68, $this->source); })()), "message", []), "trazabilityCode", []), "html", null, true);
        echo "
                            </td>
                            <td class=\"text-left\"></td>
                        </tr>                        
                    </tbody>
                </table>                
            </div>
        </section>             
        ";
        // line 76
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/Orders/resume.html.twig", 76)->display($context);
        echo "                                     
        ";
        // line 77
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/Orders/resume.html.twig", 77)->display($context);
        // line 78
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/Orders/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 78,  178 => 77,  174 => 76,  163 => 68,  154 => 62,  146 => 57,  140 => 54,  132 => 49,  126 => 46,  118 => 41,  110 => 38,  102 => 33,  96 => 30,  83 => 19,  80 => 17,  74 => 15,  68 => 13,  66 => 12,  56 => 5,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends './App/base.html.twig' %}
{% block body %}  
    <body id=\"container-page-index\">
        {% include './App/navigator.html.twig' %} 
        <section id=\"infoproduct\">
            <div class=\"container\">                                
                <div class=\"table-title\">
                    <h3>Resumen de Compra</h3>
                </div>                
                <div class=\"table-title text-center\">                    
                    {% if ((response.message.responseCode != 'APPROVED') and (app.session.get('retry') != 1 or (app.session.get('retry') > 0 and app.session.get('retry') < 3))) %}
                        <form class=\"inline-block condensed\" action=\"{{ path('formulario')}}\" method=\"POST\">
                            <input type=\"submit\" value=\"Reintentar pago\" class=\"btn btn-info\">
                            <input type=\"hidden\" name=\"referenceCode\" value=\"{{request.transaction.order.referenceCode}}\">
                        </form>                                            
                    {% endif %}                
                    {#<input type=\"submit\" value=\"imprimir\" class=\"btn btn-info\">#}
                </div>                
                <table class=\"table-fill\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Datos de transacción</th>
                            <th class=\"text-center\">Datos de Cliente</th>                            
                        </tr>
                    </thead>
                    <tbody class=\"table-hover\">
                        <tr>
                            <td class=\"text-left\">
                                <label>Referencia:</label>  {{request.transaction.order.referenceCode}}
                            </td>
                            <td class=\"text-left\">
                                <label>Cliente: </label> {{request.transaction.payer.fullName}}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Total:</label>  {{request.transaction.order.additionalValues.TX_VALUE.currency}} {{request.transaction.order.additionalValues.TX_VALUE.value|number_format(0, '.', ',')}}
                            </td>
                            <td class=\"text-left\">
                                <label>Email: </label> {{request.transaction.payer.emailAddress}}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Código de Autorización:</label> {{ response.message.authorizationCode }}
                            </td>
                            <td class=\"text-left\">
                                <label>Teléfono: </label> {{request.transaction.payer.contactPhone}}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Estado de Transacción:</label>  {{response.message.responseCode}}
                            </td>
                            <td class=\"text-left\">
                                <label>Dirección: </label> {{request.transaction.payer.billingAddress.street1}}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Fecha de Transacción:</label>  {{response.message.operationDate}}
                            </td>
                            <td class=\"text-left\"></td>
                        </tr>
                        <tr>
                            <td class=\"text-left\">
                                <label>Código de Trazabilidad:</label>  {{response.message.trazabilityCode}}
                            </td>
                            <td class=\"text-left\"></td>
                        </tr>                        
                    </tbody>
                </table>                
            </div>
        </section>             
        {% include './App/footer.html.twig' %}                                     
        {% include 'General/general_modal.html.twig' %}
    </body>
{% endblock %}



", "@Twigs/Orders/resume.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Orders\\resume.html.twig");
    }
}
