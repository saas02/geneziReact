<?php

/* @Twigs/App/email.html.twig */
class __TwigTemplate_74a0c9c9de2f5a6cac759c07306eb778861d67815cd1a983e138775a393cbe81 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("./App/base_email.html.twig", "@Twigs/App/email.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "./App/base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/App/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/App/email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"infoproduct\">
        <div class=\"container\">  
            <div class=\"col-xs-4\">
                <figure class=\"logo-navbar\"></figure>
                <p class=\"text-navbar tittles-pages-logo\">Genezi Tecnología Led</p>
            </div>
            <div class=\"table-title\">
                <h3>Resumen de Compra</h3>
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
                            <label>Referencia:</label>  ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 22, $this->source); })()), "transaction", []), "order", []), "referenceCode", []), "html", null, true);
        echo "
                        </td>
                        <td class=\"text-left\">
                            <label>Cliente: </label> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 25, $this->source); })()), "transaction", []), "payer", []), "fullName", []), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Total:</label>  ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 30, $this->source); })()), "transaction", []), "order", []), "additionalValues", []), "TX_VALUE", []), "currency", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 30, $this->source); })()), "transaction", []), "order", []), "additionalValues", []), "TX_VALUE", []), "value", []), 0, ".", ","), "html", null, true);
        echo "
                        </td>
                        <td class=\"text-left\">
                            <label>Email: </label> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 33, $this->source); })()), "transaction", []), "payer", []), "emailAddress", []), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Código de Autorización:</label> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 38, $this->source); })()), "message", []), "authorizationCode", []), "html", null, true);
        echo "
                        </td>
                        <td class=\"text-left\">
                            <label>Teléfono: </label> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 41, $this->source); })()), "transaction", []), "payer", []), "contactPhone", []), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Estado de Transacción:</label>  ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 46, $this->source); })()), "message", []), "responseCode", []), "html", null, true);
        echo "
                        </td>
                        <td class=\"text-left\">
                            <label>Dirección: </label> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 49, $this->source); })()), "transaction", []), "payer", []), "billingAddress", []), "street1", []), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Fecha de Transacción:</label>  ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 54, $this->source); })()), "message", []), "operationDate", []), "html", null, true);
        echo "
                        </td>
                        <td class=\"text-left\"></td>
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Código de Trazabilidad:</label>  ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 60, $this->source); })()), "message", []), "trazabilityCode", []), "html", null, true);
        echo "
                        </td>
                        <td class=\"text-left\"></td>
                    </tr> 
                    <tr>
                        <td colspan=\"2\" class=\"text-center\">
                            <label><b>Productos:</b></label>
                            <table class=\"table-fill\">
                            <thead>
                                <tr>
                                    <th class=\"text-center\">Cantidad</th>
                                    <th class=\"text-center\">Nombre</th>                                    
                                </tr>
                            </thead>
                            <tbody class=\"table-hover\">
                                ";
        // line 75
        $context["total"] = 0;
        // line 76
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
            // line 77
            echo "                                    <tr>
                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["products"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo "                                        
                                        <td text-center>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cantidad", []), "html", null, true);
                echo "</td>
                                        <td text-center>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nombre", []), "html", null, true);
                echo "</td>
                                        ";
                // line 81
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 81, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["product"], "total", []));
                // line 82
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                    </tr>                                                                        
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  
                                <tr>
                                    <td>
                                        <label><b>Valor Total:</b></label>  
                                    </td>
                                    <td>
                                        COP ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "
                                    </td>
                                </tr>
                            </tbody>
                        </td>
                    </tr>
                </tbody>
            </table>                
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/App/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 90,  198 => 84,  185 => 82,  183 => 81,  179 => 80,  175 => 79,  169 => 78,  166 => 77,  161 => 76,  159 => 75,  141 => 60,  132 => 54,  124 => 49,  118 => 46,  110 => 41,  104 => 38,  96 => 33,  88 => 30,  80 => 25,  74 => 22,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends './App/base_email.html.twig' %}
{% block body %}
    <section id=\"infoproduct\">
        <div class=\"container\">  
            <div class=\"col-xs-4\">
                <figure class=\"logo-navbar\"></figure>
                <p class=\"text-navbar tittles-pages-logo\">Genezi Tecnología Led</p>
            </div>
            <div class=\"table-title\">
                <h3>Resumen de Compra</h3>
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
                    <tr>
                        <td colspan=\"2\" class=\"text-center\">
                            <label><b>Productos:</b></label>
                            <table class=\"table-fill\">
                            <thead>
                                <tr>
                                    <th class=\"text-center\">Cantidad</th>
                                    <th class=\"text-center\">Nombre</th>                                    
                                </tr>
                            </thead>
                            <tbody class=\"table-hover\">
                                {% set total = 0 %}
                                {% for products in description %}
                                    <tr>
                                    {% for product in products %}                                        
                                        <td text-center>{{ product.cantidad}}</td>
                                        <td text-center>{{ product.nombre}}</td>
                                        {% set total = total + product.total %}
                                    {% endfor %} 
                                    </tr>                                                                        
                                {% endfor %}  
                                <tr>
                                    <td>
                                        <label><b>Valor Total:</b></label>  
                                    </td>
                                    <td>
                                        COP {{ total }}
                                    </td>
                                </tr>
                            </tbody>
                        </td>
                    </tr>
                </tbody>
            </table>                
        </div>
    </section>
{% endblock %}

", "@Twigs/App/email.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\App\\email.html.twig");
    }
}
