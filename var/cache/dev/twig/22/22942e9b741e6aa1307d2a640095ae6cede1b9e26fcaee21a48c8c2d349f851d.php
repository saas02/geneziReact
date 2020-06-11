<?php

/* @Twigs/General/products.html.twig */
class __TwigTemplate_aa9adabe27387cd78eddbde53827dff533606fc874b27aea8a88fad6b64171d5 extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Nombre", []), "html", null, true);
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
                                    ";
        // line 38
        if (twig_test_empty((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "                                        <h2>No hay productos en esta categoria</h2>
                                    ";
        } else {
            // line 41
            echo "                                        ";
            $this->loadTemplate("./General/product.html.twig", "@Twigs/General/products.html.twig", 41)->display(array_merge($context, ["productos" => (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 41, $this->source); })())]));
            // line 42
            echo "                                    ";
        }
        echo "                                    
                                </div>
                            </div><!-- Fin del contenedor de todos los productos -->

                            <!-- ==================== Contenedores de categorias =============== -->

                            ";
        // line 48
        if (twig_test_empty((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 48, $this->source); })()))) {
            // line 49
            echo "                                <h2>No hay productos en esta categoria</h2>
                            ";
        } else {
            // line 50
            echo "                                                       
                                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                echo "                                        
                                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
                echo "-tab\"><br>
                                        ";
                // line 53
                $context["count"] = 0;
                echo " 
                                        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 54, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                    echo "                                            
                                            ";
                    // line 55
                    if ((twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idcategoria", []), "codigocat", []))) {
                        // line 56
                        echo "                                                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                                                    <div class=\"thumbnail\">
                                                        ";
                        // line 58
                        $context["images"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Imagen", []), ";");
                        // line 59
                        echo "                                                        <img class=\"imgSize productImg\" data-img=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "CodigoProd", []), "html", null, true);
                        echo "\" data-toggle=\"modal\" data-target=\".modal-detail\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img-products/" . twig_get_attribute($this->env, $this->source, $context["producto"], "codigoprod", [])) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 59, $this->source); })()), 0, [], "array")))), "html", null, true);
                        echo "\">
                                                        <div class=\"caption\">
                                                            <h3>";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombreprod", []), "html", null, true);
                        echo "</h3>
                                                            <p>";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "marca", []), "html", null, true);
                        echo "</p>
                                                            ";
                        // line 63
                        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", [])) && (twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", []) > 0))) {
                            // line 64
                            echo "                                                                ";
                        } else {
                            // line 65
                            echo "                                                                    <p>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", []), "html", null, true);
                            echo "</p>
                                                            ";
                        }
                        // line 66
                        echo "                                                            
                                                            <p class=\"text-center\">
                                                                <button href=\"#\" class=\"btn btn-primary btn-sm\" ><i class=\"fa fa-plus\"></i>&nbsp; Detalles</button>&nbsp;&nbsp;
                                                                <button value=\"";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "CodigoProd", []), "html", null, true);
                        echo "\" class=\"btn btn-success btn-sm botonCarrito\"><i class=\"fa fa-shopping-cart\"></i>&nbsp; Añadir</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ";
                        // line 74
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 74, $this->source); })()) + 1);
                        // line 75
                        echo "                                                ";
                        if ((0 == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 75, $this->source); })()) % (isset($context["filas"]) || array_key_exists("filas", $context) ? $context["filas"] : (function () { throw new Twig_Error_Runtime('Variable "filas" does not exist.', 75, $this->source); })()))) {
                            // line 76
                            echo "                                                    <div class=\"clearfix\"></div>
                                                ";
                        }
                        // line 77
                        echo "  
                                            ";
                    }
                    // line 79
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                            ";
        }
        // line 83
        echo "                            <!-- ==================== Fin contenedores de categorias =============== -->                            
                        </div>
                    </div>
                </div>
        </section>
        ";
        // line 88
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/General/products.html.twig", 88)->display($context);
        echo "                                     
        ";
        // line 89
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/General/products.html.twig", 89)->display($context);
        // line 90
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
        return array (  259 => 90,  257 => 89,  253 => 88,  246 => 83,  243 => 82,  236 => 80,  230 => 79,  226 => 77,  222 => 76,  219 => 75,  217 => 74,  209 => 69,  204 => 66,  198 => 65,  195 => 64,  193 => 63,  189 => 62,  185 => 61,  177 => 59,  175 => 58,  171 => 56,  169 => 55,  163 => 54,  159 => 53,  153 => 52,  147 => 51,  144 => 50,  140 => 49,  138 => 48,  128 => 42,  125 => 41,  121 => 39,  119 => 38,  108 => 29,  92 => 26,  85 => 24,  71 => 12,  65 => 10,  63 => 9,  56 => 5,  44 => 3,  15 => 2,);
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
                                            <a href=\"#{{categoria.CodigoCat}}\" tabindex=\"-1\" role=\"tab\" id=\"{{categoria.CodigoCat}}-tab\" data-toggle=\"tab\" aria-controls=\"{{categoria.CodigoCat}}\" aria-expanded=\"false\">{{categoria.Nombre}}
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
                                    {% if productos is empty %}
                                        <h2>No hay productos en esta categoria</h2>
                                    {% else %}
                                        {% include './General/product.html.twig' with {'productos': productos} %}
                                    {% endif %}                                    
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
                                                            {% if producto.inpromo is not empty and producto.inpromo > 0 %}
                                                                {% else %}
                                                                    <p>{{ producto.precio }}</p>
                                                            {% endif %}                                                            
                                                            <p class=\"text-center\">
                                                                <button href=\"#\" class=\"btn btn-primary btn-sm\" ><i class=\"fa fa-plus\"></i>&nbsp; Detalles</button>&nbsp;&nbsp;
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
", "@Twigs/General/products.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\products.html.twig");
    }
}
