<?php

/* ./General/product.html.twig */
class __TwigTemplate_aa238833e7522536dfb6cddc492db2045118b3b69e1cd2439e4e604b718a5b37 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./General/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./General/product.html.twig"));

        // line 1
        $context["count"] = 0;
        echo "                        
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 3
            echo "    <div class=\"col-xs-12 col-sm-6 col-md-3\">
        ";
            // line 4
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", [])) && (twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", []) > 0))) {
                // line 5
                echo "            <div class=\"products_ribbon\"><span>-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", []), "html", null, true);
                echo "%</span></div>
        ";
            }
            // line 7
            echo "        <div class=\"thumbnail\">                                                                
            ";
            // line 8
            $context["images"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Imagen", []), ";");
            // line 9
            echo "            <img class=\"imgSize productImg\" data-img=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "CodigoProd", []), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\".modal-detail\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img-products/" . twig_get_attribute($this->env, $this->source, $context["producto"], "codigoprod", [])) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 9, $this->source); })()), 0, [], "array")))), "html", null, true);
            echo "\">
            <div class=\"caption\">
                <h3>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombreprod", []), "html", null, true);
            echo "</h3>
                <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "marca", []), "html", null, true);
            echo "</p>  
                <p>Color: ";
            // line 13
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "color", [])), "html", null, true);
            echo "</p>                                 
                ";
            // line 14
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", [])) && (twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", []) > 0))) {
                // line 15
                echo "                    ";
                $context["precioPromo"] = (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", []) - (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", []) * (twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", []) / 100)));
                // line 16
                echo "                    <p>COP <strike>";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", []), 0, ".", ","), "html", null, true);
                echo "</strike></p>                                        
                    <font color=\"red\"><p>COP ";
                // line 17
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["precioPromo"]) || array_key_exists("precioPromo", $context) ? $context["precioPromo"] : (function () { throw new Twig_Error_Runtime('Variable "precioPromo" does not exist.', 17, $this->source); })()), 0, ".", ","), "html", null, true);
                echo "</p></font>
                    ";
            } else {
                // line 19
                echo "                        <p>COP ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", []), 0, ".", ","), "html", null, true);
                echo "</p>
                ";
            }
            // line 20
            echo "                                         
                <p class=\"text-center\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["name" => $this->extensions['App\TwigsBundle\Twig\Extension\encryptDecrypt']->encrypt(twig_get_attribute($this->env, $this->source, $context["producto"], "codigoprod", []))]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\" ><i class=\"fa fa-plus\"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                    <button value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "CodigoProd", []), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm botonCarrito\"><i class=\"fa fa-shopping-cart\"></i>&nbsp; Añadir</button>
                </p>

            </div>
        </div>
    </div>
    ";
            // line 29
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 29, $this->source); })()) + 1);
            // line 30
            echo "    ";
            if ((0 == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 30, $this->source); })()) % (isset($context["filas"]) || array_key_exists("filas", $context) ? $context["filas"] : (function () { throw new Twig_Error_Runtime('Variable "filas" does not exist.', 30, $this->source); })()))) {
                // line 31
                echo "        <div class=\"clearfix\"></div>
    ";
            }
            // line 32
            echo "  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./General/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  116 => 31,  113 => 30,  111 => 29,  102 => 23,  98 => 22,  94 => 20,  88 => 19,  83 => 17,  78 => 16,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  53 => 9,  51 => 8,  48 => 7,  42 => 5,  40 => 4,  37 => 3,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set count = 0 %}                        
{% for producto in productos %}
    <div class=\"col-xs-12 col-sm-6 col-md-3\">
        {% if producto.inpromo is not empty and producto.inpromo > 0 %}
            <div class=\"products_ribbon\"><span>-{{ producto.inpromo }}%</span></div>
        {% endif %}
        <div class=\"thumbnail\">                                                                
            {% set images = producto.Imagen|split(';') %}
            <img class=\"imgSize productImg\" data-img=\"{{ producto.CodigoProd }}\" data-toggle=\"modal\" data-target=\".modal-detail\" src=\"{{ absolute_url(asset('assets/img-products/'~producto.codigoprod~'/'~images[0])) }}\">
            <div class=\"caption\">
                <h3>{{ producto.nombreprod }}</h3>
                <p>{{ producto.marca }}</p>  
                <p>Color: {{ producto.color|capitalize }}</p>                                 
                {% if producto.inpromo is not empty and producto.inpromo > 0 %}
                    {% set precioPromo = producto.precio - (producto.precio * (producto.inpromo/100)) %}
                    <p>COP <strike>{{ producto.precio|number_format(0, '.', ',') }}</strike></p>                                        
                    <font color=\"red\"><p>COP {{ precioPromo|number_format(0, '.', ',') }}</p></font>
                    {% else %}
                        <p>COP {{ producto.precio|number_format(0, '.', ',') }}</p>
                {% endif %}                                         
                <p class=\"text-center\">
                    <a href=\"{{ path('detail', { 'name' : encrypt(producto.codigoprod) }) }}\" class=\"btn btn-primary btn-sm\" ><i class=\"fa fa-plus\"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                    <button value=\"{{ producto.CodigoProd }}\" class=\"btn btn-success btn-sm botonCarrito\"><i class=\"fa fa-shopping-cart\"></i>&nbsp; Añadir</button>
                </p>

            </div>
        </div>
    </div>
    {% set count = count + 1 %}
    {% if count is divisible by(filas) %}
        <div class=\"clearfix\"></div>
    {% endif %}  
{% endfor %}
", "./General/product.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\product.html.twig");
    }
}
