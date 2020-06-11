<?php

/* @Twigs/Orders/order.html.twig */
class __TwigTemplate_6c893ead2c022f2724f6de177de87424744dd4d5d359daa807dd7e368f3f2976 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/Orders/order.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Orders/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Orders/order.html.twig"));

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
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/Orders/order.html.twig", 5)->display($context);
        echo "         
        <section id=\"store\">
            <br>
            <div class=\"container\">
                <div class=\"page-header\">
                    <h1>Genezi <small class=\"tittles-pages-logo\">Shop</small></h1>
                </div>
                <br><br>
                ";
        // line 13
        if ((isset($context["error_message"]) || array_key_exists("error_message", $context))) {
            // line 14
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new Twig_Error_Runtime('Variable "error_message" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 18
        echo "                <div class=\"row\">
                    <div class=\"col-xs-12\">                        
                        <div class=\"bd-example\">
                            <div class=\"table-responsive-sm\">
                                <form id=\"formorder\" method=\"post\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulario");
        echo "\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\"></th>
                                                <th scope=\"col\">Cantidad</th>                                            
                                                <th scope=\"col\">Nombre</th>
                                                <th scope=\"col\">Precio</th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 33
        $context["total"] = 0;
        // line 34
        echo "                                            ";
        $context["iteration"] = 0;
        // line 35
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carShoping"]) || array_key_exists("carShoping", $context) ? $context["carShoping"] : (function () { throw new Twig_Error_Runtime('Variable "carShoping" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 36
            echo "                                                <tr class=\"prod_";
            echo twig_escape_filter($this->env, (isset($context["iteration"]) || array_key_exists("iteration", $context) ? $context["iteration"] : (function () { throw new Twig_Error_Runtime('Variable "iteration" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">
                                                    <td width=\"30%\" align=\"center\">
                                                        ";
            // line 38
            $context["images"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "imagenes", []), ";");
            // line 39
            echo "                                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img-products/" . twig_get_attribute($this->env, $this->source, $context["car"], "codigo", [])) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 39, $this->source); })()), 0, [], "array")))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "nombre", []), "html", null, true);
            echo "\" width=\"50%\" heigth=\"50%\">
                                                    </td>
                                                    <td>
                                                        <div class=\"col-input-pedido\">
                                                            <input id=\"cant_prod_";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["iteration"]) || array_key_exists("iteration", $context) ? $context["iteration"] : (function () { throw new Twig_Error_Runtime('Variable "iteration" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control cant_prod\" name=\"cant_prod_";
            echo twig_escape_filter($this->env, (isset($context["iteration"]) || array_key_exists("iteration", $context) ? $context["iteration"] : (function () { throw new Twig_Error_Runtime('Variable "iteration" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "precio", []), 0, "", ""), "html", null, true);
            echo "\" type=\"number\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "stock", []), "html", null, true);
            echo "\" value=\"1\">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "nombre", []), "html", null, true);
            echo "
                                                    </td>
                                                    <td>
                                                        <label id=\"cant_prod_price_";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["iteration"]) || array_key_exists("iteration", $context) ? $context["iteration"] : (function () { throw new Twig_Error_Runtime('Variable "iteration" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\">\$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "precio", []), 0, ".", "."), "html", null, true);
            echo "</label>
                                                    </td>                                                    
                                                    <td>
                                                        <a data-cod=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "codigo", []), "html", null, true);
            echo "\" data-iteration=\"";
            echo twig_escape_filter($this->env, (isset($context["iteration"]) || array_key_exists("iteration", $context) ? $context["iteration"] : (function () { throw new Twig_Error_Runtime('Variable "iteration" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm carDelete\"><i class=\"fa fa-trash\"></i>&nbsp; Eliminar</a>
                                                    </td>
                                                </tr>  
                                                ";
            // line 56
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 56, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["car"], "precio", []));
            // line 57
            echo "                                                ";
            $context["iteration"] = ((isset($context["iteration"]) || array_key_exists("iteration", $context) ? $context["iteration"] : (function () { throw new Twig_Error_Runtime('Variable "iteration" does not exist.', 57, $this->source); })()) + 1);
            // line 58
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                            <tr>
                                                <td align=\"right\" colspan = \"3\">
                                                    <h5>Total a pagar</h5>
                                                </td>
                                                <td>
                                                    <label id=\"cant_total_price\">\$ ";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 64, $this->source); })()), 0, ".", "."), "html", null, true);
        echo "</label>
                                                </td>
                                                <td>
                                                    <div class=\"message\" style=\"display:none\"></div>
                                                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">Pagar</button>                                                
                                                </td>
                                            </tr>                                                                                   
                                        </tbody>
                                    </table>
                                </form>
                            </div>                                                     
                        </div>
                    </div>
                </div>
        </section>
        ";
        // line 79
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/Orders/order.html.twig", 79)->display($context);
        echo "                                     
        ";
        // line 80
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/Orders/order.html.twig", 80)->display($context);
        // line 81
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/Orders/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 81,  201 => 80,  197 => 79,  179 => 64,  172 => 59,  166 => 58,  163 => 57,  161 => 56,  153 => 53,  145 => 50,  139 => 47,  126 => 43,  116 => 39,  114 => 38,  108 => 36,  103 => 35,  100 => 34,  98 => 33,  84 => 22,  78 => 18,  72 => 15,  69 => 14,  67 => 13,  56 => 5,  44 => 3,  15 => 2,);
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
                {% if error_message is defined %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ error_message }}
                    </div>
                {% endif %}
                <div class=\"row\">
                    <div class=\"col-xs-12\">                        
                        <div class=\"bd-example\">
                            <div class=\"table-responsive-sm\">
                                <form id=\"formorder\" method=\"post\" action=\"{{path('formulario')}}\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\"></th>
                                                <th scope=\"col\">Cantidad</th>                                            
                                                <th scope=\"col\">Nombre</th>
                                                <th scope=\"col\">Precio</th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% set total = 0 %}
                                            {% set iteration = 0 %}
                                            {% for car in carShoping %}
                                                <tr class=\"prod_{{iteration}}\">
                                                    <td width=\"30%\" align=\"center\">
                                                        {% set images = car.imagenes|split(';') %}
                                                        <img src=\"{{ absolute_url(asset('assets/img-products/'~car.codigo~'/'~images[0])) }}\" alt=\"{{ car.nombre }}\" width=\"50%\" heigth=\"50%\">
                                                    </td>
                                                    <td>
                                                        <div class=\"col-input-pedido\">
                                                            <input id=\"cant_prod_{{iteration}}\" class=\"form-control cant_prod\" name=\"cant_prod_{{iteration}}\" data-price=\"{{car.precio|number_format(0, '', '')}}\" type=\"number\" max=\"{{car.stock}}\" value=\"1\">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ car.nombre}}
                                                    </td>
                                                    <td>
                                                        <label id=\"cant_prod_price_{{iteration}}\">\$ {{ car.precio|number_format(0, '.', '.') }}</label>
                                                    </td>                                                    
                                                    <td>
                                                        <a data-cod=\"{{ car.codigo }}\" data-iteration=\"{{iteration}}\" class=\"btn btn-danger btn-sm carDelete\"><i class=\"fa fa-trash\"></i>&nbsp; Eliminar</a>
                                                    </td>
                                                </tr>  
                                                {% set total = total + car.precio %}
                                                {% set iteration = iteration + 1 %}
                                            {% endfor %}
                                            <tr>
                                                <td align=\"right\" colspan = \"3\">
                                                    <h5>Total a pagar</h5>
                                                </td>
                                                <td>
                                                    <label id=\"cant_total_price\">\$ {{ total|number_format(0, '.', '.') }}</label>
                                                </td>
                                                <td>
                                                    <div class=\"message\" style=\"display:none\"></div>
                                                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">Pagar</button>                                                
                                                </td>
                                            </tr>                                                                                   
                                        </tbody>
                                    </table>
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
", "@Twigs/Orders/order.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Orders\\order.html.twig");
    }
}
