<?php

/* @Twigs/General/product_detail.html.twig */
class __TwigTemplate_ad48b1e78b7a2b1b9afd2b0256f2eaef6436f5e7f2f077909e2b58dc6c5f6dd7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/General/product_detail.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/product_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/product_detail.html.twig"));

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
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/General/product_detail.html.twig", 5)->display($context);
        echo "   
        <section id=\"infoproduct\">            
            <div class=\"container\">
                <div class=\"row\">                                                                                
                    <div class=\"form-group col-md-4\">
                        ";
        // line 10
        $this->loadTemplate("./App/carousel.html.twig", "@Twigs/General/product_detail.html.twig", 10)->display(array_merge($context, ["pictures" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->source); })())]));
        echo "                    
                    </div>                    
                    <div class=\"form-group col-md-4\">                        
                        <h3 class=\"text-center\"><b>Información de producto</b></h3>
                        <h4><strong>Nombre: </strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->source); })()), "nombreprod", []), "html", null, true);
        echo "</h4>
                        <h4><strong>Modelo: </strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 15, $this->source); })()), "modelo", []), "html", null, true);
        echo "</h4>
                        <h4><strong>Marca: </strong>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 16, $this->source); })()), "marca", []), "html", null, true);
        echo "</h4>                        
                        <h4><strong>Descripción: </strong>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->source); })()), "descripcion", []), "html", null, true);
        echo "</h4>                        
                    </div>
                    <div class=\"form-group col-md-4\">
                        ";
        // line 20
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 20, $this->source); })()), "inpromo", [])) && (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 20, $this->source); })()), "inpromo", []) > 0))) {
            // line 21
            echo "                            <div class=\"products_ribbon\"><span>-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 21, $this->source); })()), "inpromo", []), "html", null, true);
            echo "%</span></div>
                        ";
        }
        // line 23
        echo "                        ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 23, $this->source); })()), "inpromo", [])) && (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 23, $this->source); })()), "inpromo", []) > 0))) {
            // line 24
            echo "                            ";
            $context["precioPromo"] = (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->source); })()), "precio", []) - (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->source); })()), "precio", []) * (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->source); })()), "inpromo", []) / 100)));
            // line 25
            echo "                            <h3><strong>Precio: </strong><br><strike>COP ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 25, $this->source); })()), "precio", []), 0, ".", "."), "html", null, true);
            echo "</strike></h3>
                            <h3><font color=\"red\"><p>COP ";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["precioPromo"]) || array_key_exists("precioPromo", $context) ? $context["precioPromo"] : (function () { throw new Twig_Error_Runtime('Variable "precioPromo" does not exist.', 26, $this->source); })()), 0, ".", ","), "html", null, true);
            echo "</p></font></h3>
                            ";
        } else {
            // line 28
            echo "                                <h3><strong>Precio: </strong><br>COP ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 28, $this->source); })()), "precio", []), 0, ".", "."), "html", null, true);
            echo "</h3><br> 
                        ";
        }
        // line 29
        echo "                                                
                        <button value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 30, $this->source); })()), "codigoprod", []), "html", null, true);
        echo "\" class=\"btn btn-lg btn-success botonCarrito\"><i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp; Añadir al carrito</button>                        
                    </div>                    
                </div>
            </div>
        </section>
        ";
        // line 35
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/General/product_detail.html.twig", 35)->display($context);
        echo "                                     
        ";
        // line 36
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/General/product_detail.html.twig", 36)->display($context);
        // line 37
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/General/product_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  134 => 36,  130 => 35,  122 => 30,  119 => 29,  113 => 28,  108 => 26,  103 => 25,  100 => 24,  97 => 23,  91 => 21,  89 => 20,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  64 => 10,  56 => 5,  44 => 3,  15 => 2,);
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
                    <div class=\"form-group col-md-4\">
                        {% include './App/carousel.html.twig' with {'pictures': product} %}                    
                    </div>                    
                    <div class=\"form-group col-md-4\">                        
                        <h3 class=\"text-center\"><b>Información de producto</b></h3>
                        <h4><strong>Nombre: </strong>{{product.nombreprod}}</h4>
                        <h4><strong>Modelo: </strong>{{product.modelo}}</h4>
                        <h4><strong>Marca: </strong>{{product.marca}}</h4>                        
                        <h4><strong>Descripción: </strong>{{product.descripcion}}</h4>                        
                    </div>
                    <div class=\"form-group col-md-4\">
                        {% if product.inpromo is not empty and product.inpromo > 0 %}
                            <div class=\"products_ribbon\"><span>-{{ product.inpromo }}%</span></div>
                        {% endif %}
                        {% if product.inpromo is not empty and product.inpromo > 0 %}
                            {% set precioPromo = product.precio - (product.precio * (product.inpromo/100)) %}
                            <h3><strong>Precio: </strong><br><strike>COP {{product.precio|number_format(0, '.', '.')}}</strike></h3>
                            <h3><font color=\"red\"><p>COP {{ precioPromo|number_format(0, '.', ',') }}</p></font></h3>
                            {% else %}
                                <h3><strong>Precio: </strong><br>COP {{product.precio|number_format(0, '.', '.')}}</h3><br> 
                        {% endif %}                                                
                        <button value=\"{{product.codigoprod}}\" class=\"btn btn-lg btn-success botonCarrito\"><i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp; Añadir al carrito</button>                        
                    </div>                    
                </div>
            </div>
        </section>
        {% include './App/footer.html.twig' %}                                     
        {% include 'General/general_modal.html.twig' %}
    </body>
{% endblock %}


", "@Twigs/General/product_detail.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\product_detail.html.twig");
    }
}
