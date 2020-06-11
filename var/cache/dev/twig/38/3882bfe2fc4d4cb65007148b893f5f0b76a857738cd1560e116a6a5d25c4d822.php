<?php

/* Admin/productos_actualizar.html.twig */
class __TwigTemplate_76b82ac0fa0a1e5121ee53644d070e6a2fc272907fd25b3a25b2830fbcfbe905 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "Admin/productos_actualizar.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/productos_actualizar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/productos_actualizar.html.twig"));

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
        $this->loadTemplate("./App/navigator.html.twig", "Admin/productos_actualizar.html.twig", 5)->display($context);
        echo "   
        <section id=\"infoproduct\">
            <div class=\"container\">
                <div class=\"row\">
                    <form id=\"res-update-files-product\" role=\"form\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_files_product");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"page-header\">
                            <h1>Tienda <small class=\"tittles-pages-logo\">Genezi</small></h1><h3 class=\"text-center\">Información de producto</h3>
                        </div>                    
                        <div class=\"col-xs-6 col-sm-3\">                                                
                            <h4><strong>Nombre: </strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 14, $this->source); })()), "NombreProd", []), "html", null, true);
        echo "</h4><br>
                            <h4><strong>Modelo: </strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 15, $this->source); })()), "Modelo", []), "html", null, true);
        echo "</h4><br>
                            <h4><strong>Marca: </strong>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 16, $this->source); })()), "Marca", []), "html", null, true);
        echo "</h4><br>
                            <h4><strong>Precio: </strong>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 17, $this->source); })()), "Precio", []), "html", null, true);
        echo "</h4>
                        </div>                                                                                    
                        <div class=\"col-xs-6 col-sm-9\">
                            ";
        // line 20
        $context["imagenes"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 20, $this->source); })()), "imagen", []), ";");
        // line 21
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new Twig_Error_Runtime('Variable "imagenes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 22
            echo "                                <img class=\"delete-img\" data-imagen=\"";
            echo twig_escape_filter($this->env, $context["imagen"], "html", null, true);
            echo "\" style=\"width: 20%;height: 20%;\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img-products/" . twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 22, $this->source); })()), "codigoprod", [])) . "/") . $context["imagen"]))), "html", null, true);
            echo "\">                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                                                
                            <br>
                            <label>Añadir Imagenes</label>
                            <input type=\"file\" name=\"img[]\" multiple>
                            <p class=\"help-block\">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                            ";
        // line 29
        echo "                            <button type=\"submit\" class=\"btn btn-lg btn-primary files-save\">Guardar Cambios</button>  
                            <input type=\"hidden\" name='img-names' id='img-names' value='";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 30, $this->source); })()), "imagen", []), "html", null, true);
        echo "'>                            
                            <input type=\"hidden\" name='prod-codigo' id='prod-codigo' value='";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 31, $this->source); })()), "codigoprod", []), "html", null, true);
        echo "'>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        ";
        // line 37
        $this->loadTemplate("./App/footer.html.twig", "Admin/productos_actualizar.html.twig", 37)->display($context);
        echo " 
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/productos_actualizar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  121 => 31,  117 => 30,  114 => 29,  107 => 23,  96 => 22,  91 => 21,  89 => 20,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  63 => 9,  56 => 5,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends './App/base.html.twig' %}
{% block body %} 
    <body id=\"container-page-product\">
        {% include './App/navigator.html.twig' %}   
        <section id=\"infoproduct\">
            <div class=\"container\">
                <div class=\"row\">
                    <form id=\"res-update-files-product\" role=\"form\" action=\"{{ path(\"update_files_product\") }}\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"page-header\">
                            <h1>Tienda <small class=\"tittles-pages-logo\">Genezi</small></h1><h3 class=\"text-center\">Información de producto</h3>
                        </div>                    
                        <div class=\"col-xs-6 col-sm-3\">                                                
                            <h4><strong>Nombre: </strong>{{producto.NombreProd}}</h4><br>
                            <h4><strong>Modelo: </strong>{{producto.Modelo}}</h4><br>
                            <h4><strong>Marca: </strong>{{producto.Marca}}</h4><br>
                            <h4><strong>Precio: </strong>{{producto.Precio}}</h4>
                        </div>                                                                                    
                        <div class=\"col-xs-6 col-sm-9\">
                            {% set imagenes = producto.imagen|split(';') %}
                            {% for imagen in imagenes %}
                                <img class=\"delete-img\" data-imagen=\"{{imagen}}\" style=\"width: 20%;height: 20%;\" src=\"{{ absolute_url(asset('assets/img-products/'~producto.codigoprod~'/'~imagen)) }}\">                            
                            {% endfor %}                                                
                            <br>
                            <label>Añadir Imagenes</label>
                            <input type=\"file\" name=\"img[]\" multiple>
                            <p class=\"help-block\">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                            {#<a class=\"btn btn-lg btn-primary files-save\">Guardar Cambios</a>     #}
                            <button type=\"submit\" class=\"btn btn-lg btn-primary files-save\">Guardar Cambios</button>  
                            <input type=\"hidden\" name='img-names' id='img-names' value='{{ producto.imagen }}'>                            
                            <input type=\"hidden\" name='prod-codigo' id='prod-codigo' value='{{ producto.codigoprod }}'>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        {% include './App/footer.html.twig' %} 
    </body>
{% endblock %}
", "Admin/productos_actualizar.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\productos_actualizar.html.twig");
    }
}
