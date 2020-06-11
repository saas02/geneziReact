<?php

/* @Twigs/General/products.html.twig */
class __TwigTemplate_48226bde84bc2cc4c29d7663c98f1c7f2633d405c2067d6aa169264b58f87989 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/General/products.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/products.html.twig"));

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
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/General/products.html.twig", 5)->display($context);
        echo "   
        <section id=\"store\">
            <br>
            <div class=\"container\">
                ";
        // line 9
        if ((isset($context["message"]) || array_key_exists("message", $context))) {
            // line 10
            echo "                    <div class=\"alert alert-info\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 12
        echo "                <div class=\"page-header\">
                    <h1>Genezi <small class=\"tittles-pages-logo\">Shop</small></h1>
                </div>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul id=\"store-links\" class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\"><a href=\"#all-product\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"all-product\" aria-expanded=\"false\">Todos los productos</a></li>
                            <li role=\"presentation\" class=\"dropdown active\">
                                <a href=\"#\" id=\"myTabDrop1\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-controls=\"myTabDrop1-contents\" aria-expanded=\"false\">Categorías <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"myTabDrop1\" id=\"myTabDrop1-contents\">
                                    <!-- ==================== Lista categorias =============== -->
                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            echo "                                        
                                        <li>
                                            <a href=\"#";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"tab\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
            echo "-tab\" data-toggle=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
            echo "\" aria-expanded=\"false\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Nombre", [])), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                    
                                    <!-- ==================== Fin lista categorias =============== -->
                                </ul>
                            </li>
                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"all-product\" aria-labelledby=\"all-product-tab\">
                                <br><br>
                                <div class=\"row\">
                                    <div id=\"products\"></div>                                   
                                </div>
                            </div><!-- Fin del contenedor de todos los productos -->

                            <!-- ==================== Contenedores de categorias =============== -->

                            ";
        // line 44
        if (twig_test_empty((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "                                <h2>No hay productos en esta categoria</h2>
                            ";
        } else {
            // line 46
            echo "                                                       
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                echo "                                        
                                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
                echo "-tab\"><br>
                                        ";
                // line 49
                $context["count"] = 0;
                echo " 
                                        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 50, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                    echo "                                            
                                            ";
                    // line 51
                    if ((twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idcategoria", []), "codigocat", []))) {
                        // line 52
                        echo "                                                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                                                    <div class=\"thumbnail\">
                                                        ";
                        // line 54
                        $context["images"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Imagen", []), ";");
                        // line 55
                        echo "                                                        <img class=\"imgSize productImg\" data-img=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "CodigoProd", []), "html", null, true);
                        echo "\" data-toggle=\"modal\" data-target=\".modal-detail\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img-products/" . twig_get_attribute($this->env, $this->source, $context["producto"], "codigoprod", [])) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 55, $this->source); })()), 0, [], "array")))), "html", null, true);
                        echo "\">
                                                        <div class=\"caption\">
                                                            <h3>";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombreprod", []), "html", null, true);
                        echo "</h3>
                                                            <p>";
                        // line 58
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "marca", []), "html", null, true);
                        echo "</p>  
                                                            <p>Color: ";
                        // line 59
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "color", [])), "html", null, true);
                        echo "</p>
                                                            ";
                        // line 60
                        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", [])) && (twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", []) > 0))) {
                            // line 61
                            echo "                                                            ";
                        } else {
                            // line 62
                            echo "                                                                <p>COP ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", []), 0, ".", ","), "html", null, true);
                            echo "</p>
                                                            ";
                        }
                        // line 63
                        echo "                                                            
                                                            <p class=\"text-center\">
                                                                <a href=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["name" => $this->extensions['App\TwigsBundle\Twig\Extension\encryptDecrypt']->encrypt(twig_get_attribute($this->env, $this->source, $context["producto"], "codigoprod", []))]), "html", null, true);
                        echo "\" class=\"btn btn-primary btn-sm\" ><i class=\"fa fa-plus\"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                                                <button value=\"";
                        // line 66
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "CodigoProd", []), "html", null, true);
                        echo "\" class=\"btn btn-success btn-sm botonCarrito\"><i class=\"fa fa-shopping-cart\"></i>&nbsp; Añadir</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ";
                        // line 71
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 71, $this->source); })()) + 1);
                        // line 72
                        echo "                                                ";
                        if ((0 == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 72, $this->source); })()) % (isset($context["filas"]) || array_key_exists("filas", $context) ? $context["filas"] : (function () { throw new Twig_Error_Runtime('Variable "filas" does not exist.', 72, $this->source); })()))) {
                            // line 73
                            echo "                                                    <div class=\"clearfix\"></div>
                                                ";
                        }
                        // line 74
                        echo "  
                                            ";
                    }
                    // line 76
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                            ";
        }
        // line 80
        echo "                            <!-- ==================== Fin contenedores de categorias =============== -->                            
                        </div>
                    </div>
                </div>
        </section>
        ";
        // line 85
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/General/products.html.twig", 85)->display($context);
        echo "                                     
        ";
        // line 86
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/General/products.html.twig", 86)->display($context);
        // line 87
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/General/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 87,  251 => 86,  247 => 85,  240 => 80,  237 => 79,  230 => 77,  224 => 76,  220 => 74,  216 => 73,  213 => 72,  211 => 71,  203 => 66,  199 => 65,  195 => 63,  189 => 62,  186 => 61,  184 => 60,  180 => 59,  176 => 58,  172 => 57,  164 => 55,  162 => 54,  158 => 52,  156 => 51,  150 => 50,  146 => 49,  140 => 48,  134 => 47,  131 => 46,  127 => 45,  125 => 44,  108 => 29,  92 => 26,  85 => 24,  71 => 12,  65 => 10,  63 => 9,  56 => 5,  44 => 3,  15 => 2,);
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
                {% if message is defined %}
                    <div class=\"alert alert-info\" role=\"alert\">{{ message }}</div>
                {% endif %}
                <div class=\"page-header\">
                    <h1>Genezi <small class=\"tittles-pages-logo\">Shop</small></h1>
                </div>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul id=\"store-links\" class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\"><a href=\"#all-product\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"all-product\" aria-expanded=\"false\">Todos los productos</a></li>
                            <li role=\"presentation\" class=\"dropdown active\">
                                <a href=\"#\" id=\"myTabDrop1\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-controls=\"myTabDrop1-contents\" aria-expanded=\"false\">Categorías <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"myTabDrop1\" id=\"myTabDrop1-contents\">
                                    <!-- ==================== Lista categorias =============== -->
                                    {% for categoria in categorias %}                                        
                                        <li>
                                            <a href=\"#{{categoria.CodigoCat}}\" tabindex=\"-1\" role=\"tab\" id=\"{{categoria.CodigoCat}}-tab\" data-toggle=\"tab\" aria-controls=\"{{categoria.CodigoCat}}\" aria-expanded=\"false\">{{categoria.Nombre|capitalize}}
                                            </a>
                                        </li>
                                    {% endfor %}                                    
                                    <!-- ==================== Fin lista categorias =============== -->
                                </ul>
                            </li>
                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"all-product\" aria-labelledby=\"all-product-tab\">
                                <br><br>
                                <div class=\"row\">
                                    <div id=\"products\"></div>                                   
                                </div>
                            </div><!-- Fin del contenedor de todos los productos -->

                            <!-- ==================== Contenedores de categorias =============== -->

                            {% if productos is empty %}
                                <h2>No hay productos en esta categoria</h2>
                            {% else %}                                                       
                                {% for categoria in categorias %}                                        
                                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"{{categoria.CodigoCat}}\" aria-labelledby=\"{{categoria.CodigoCat}}-tab\"><br>
                                        {% set count = 0 %} 
                                        {% for producto in productos %}                                            
                                            {% if categoria.CodigoCat == producto.idcategoria.codigocat %}
                                                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                                                    <div class=\"thumbnail\">
                                                        {% set images = producto.Imagen|split(';') %}
                                                        <img class=\"imgSize productImg\" data-img=\"{{ producto.CodigoProd }}\" data-toggle=\"modal\" data-target=\".modal-detail\" src=\"{{ absolute_url(asset('assets/img-products/'~producto.codigoprod~'/'~images[0])) }}\">
                                                        <div class=\"caption\">
                                                            <h3>{{ producto.nombreprod }}</h3>
                                                            <p>{{ producto.marca }}</p>  
                                                            <p>Color: {{ producto.color|capitalize }}</p>
                                                            {% if producto.inpromo is not empty and producto.inpromo > 0 %}
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
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                {% endfor %}
                            {% endif %}
                            <!-- ==================== Fin contenedores de categorias =============== -->                            
                        </div>
                    </div>
                </div>
        </section>
        {% include './App/footer.html.twig' %}                                     
        {% include 'General/general_modal.html.twig' %}
    </body>
{% endblock %}
", "@Twigs/General/products.html.twig", "C:\\xampp\\htdocs\\geneziSymReact\\src\\TwigsBundle\\Resources\\views\\General\\products.html.twig");
    }
}
