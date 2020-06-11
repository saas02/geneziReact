<?php

/* @Twigs/Admin/admin.html.twig */
class __TwigTemplate_4cc41b9ae026605b0e69782da0794138d385e9e6ea0b0215abd4bfb78ae8f5d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/Admin/admin.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/Admin/admin.html.twig"));

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
    <body id=\"container-page-configAdmin\">
        ";
        // line 5
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/Admin/admin.html.twig", 5)->display($context);
        echo "           
        <section id=\"prove-product-cat-config\">
            <div class=\"container\">                
                <div class=\"page-header\">
                  <h1>Panel de administración <small class=\"tittles-pages-logo\">Genezi</small></h1>
                </div>
                ";
        // line 11
        if ((isset($context["error_message"]) || array_key_exists("error_message", $context))) {
            // line 12
            echo "                    <div class=\"alert alert-info\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new Twig_Error_Runtime('Variable "error_message" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 14
        echo "                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                  <li role=\"presentation\" class=\"active\"><a href=\"#Productos\" role=\"tab\" data-toggle=\"tab\">Productos</a></li>
                  <li role=\"presentation\"><a href=\"#Proveedores\" role=\"tab\" data-toggle=\"tab\">Proveedores</a></li>
                  <li role=\"presentation\"><a href=\"#Categorias\" role=\"tab\" data-toggle=\"tab\">Categorías</a></li>
                  <li role=\"presentation\"><a href=\"#Admins\" role=\"tab\" data-toggle=\"tab\">Admin</a></li>
                  <li role=\"presentation\"><a href=\"#Pedidos\" role=\"tab\" data-toggle=\"tab\">Pedidos</a></li>
                  <li role=\"presentation\"><a href=\"#Contenidos\" role=\"tab\" data-toggle=\"tab\">Contenidos</a></li>
                  <li role=\"presentation\"><a href=\"#ImgMarcas\" role=\"tab\" data-toggle=\"tab\">Imagen Nuestras Marcas</a></li>
                  <li role=\"presentation\"><a href=\"#ImgRegistro\" role=\"tab\" data-toggle=\"tab\">Imagen Registro</a></li>
                </ul>
                <div class=\"tab-content\">
                    <!--==============================Panel productos===============================-->
                    ";
        // line 27
        $this->loadTemplate("./Admin/productos.html.twig", "@Twigs/Admin/admin.html.twig", 27)->display($context);
        echo "   
                    <!--==============================Panel Proveedores===============================-->
                    ";
        // line 29
        $this->loadTemplate("./Admin/proveedores.html.twig", "@Twigs/Admin/admin.html.twig", 29)->display($context);
        echo "   
                    <!--==============================Panel Categorias===============================-->
                    ";
        // line 31
        $this->loadTemplate("./Admin/categorias.html.twig", "@Twigs/Admin/admin.html.twig", 31)->display($context);
        echo "   
                    <!--==============================Panel Admins===============================-->
                    ";
        // line 33
        $this->loadTemplate("./Admin/admins.html.twig", "@Twigs/Admin/admin.html.twig", 33)->display($context);
        echo "   
                    <!--==============================Panel pedidos===============================-->
                    ";
        // line 35
        $this->loadTemplate("./Admin/pedidos.html.twig", "@Twigs/Admin/admin.html.twig", 35)->display($context);
        echo "   
                    <!--==============================Panel contenidos===============================-->
                    ";
        // line 37
        $this->loadTemplate("./Admin/contenidos.html.twig", "@Twigs/Admin/admin.html.twig", 37)->display($context);
        echo "   
                    <!--==============================Panel Nuestras marcas===============================-->
                    ";
        // line 39
        $this->loadTemplate("./Admin/marcas.html.twig", "@Twigs/Admin/admin.html.twig", 39)->display($context);
        echo "   
                    <!--==============================Panel Registro===============================-->
                    ";
        // line 41
        $this->loadTemplate("./Admin/registro.html.twig", "@Twigs/Admin/admin.html.twig", 41)->display($context);
        echo "   
                </div>
            </div>
        </section>
        ";
        // line 45
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/Admin/admin.html.twig", 45)->display($context);
        echo " 
        ";
        // line 46
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/Admin/admin.html.twig", 46)->display($context);
        // line 47
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/Admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 47,  134 => 46,  130 => 45,  123 => 41,  118 => 39,  113 => 37,  108 => 35,  103 => 33,  98 => 31,  93 => 29,  88 => 27,  73 => 14,  67 => 12,  65 => 11,  56 => 5,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends './App/base.html.twig' %}
{% block body %} 
    <body id=\"container-page-configAdmin\">
        {% include './App/navigator.html.twig' %}           
        <section id=\"prove-product-cat-config\">
            <div class=\"container\">                
                <div class=\"page-header\">
                  <h1>Panel de administración <small class=\"tittles-pages-logo\">Genezi</small></h1>
                </div>
                {% if error_message is defined %}
                    <div class=\"alert alert-info\" role=\"alert\">{{ error_message }}</div>
                {% endif %}
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                  <li role=\"presentation\" class=\"active\"><a href=\"#Productos\" role=\"tab\" data-toggle=\"tab\">Productos</a></li>
                  <li role=\"presentation\"><a href=\"#Proveedores\" role=\"tab\" data-toggle=\"tab\">Proveedores</a></li>
                  <li role=\"presentation\"><a href=\"#Categorias\" role=\"tab\" data-toggle=\"tab\">Categorías</a></li>
                  <li role=\"presentation\"><a href=\"#Admins\" role=\"tab\" data-toggle=\"tab\">Admin</a></li>
                  <li role=\"presentation\"><a href=\"#Pedidos\" role=\"tab\" data-toggle=\"tab\">Pedidos</a></li>
                  <li role=\"presentation\"><a href=\"#Contenidos\" role=\"tab\" data-toggle=\"tab\">Contenidos</a></li>
                  <li role=\"presentation\"><a href=\"#ImgMarcas\" role=\"tab\" data-toggle=\"tab\">Imagen Nuestras Marcas</a></li>
                  <li role=\"presentation\"><a href=\"#ImgRegistro\" role=\"tab\" data-toggle=\"tab\">Imagen Registro</a></li>
                </ul>
                <div class=\"tab-content\">
                    <!--==============================Panel productos===============================-->
                    {% include './Admin/productos.html.twig' %}   
                    <!--==============================Panel Proveedores===============================-->
                    {% include './Admin/proveedores.html.twig' %}   
                    <!--==============================Panel Categorias===============================-->
                    {% include './Admin/categorias.html.twig' %}   
                    <!--==============================Panel Admins===============================-->
                    {% include './Admin/admins.html.twig' %}   
                    <!--==============================Panel pedidos===============================-->
                    {% include './Admin/pedidos.html.twig' %}   
                    <!--==============================Panel contenidos===============================-->
                    {% include './Admin/contenidos.html.twig' %}   
                    <!--==============================Panel Nuestras marcas===============================-->
                    {% include './Admin/marcas.html.twig' %}   
                    <!--==============================Panel Registro===============================-->
                    {% include './Admin/registro.html.twig' %}   
                </div>
            </div>
        </section>
        {% include './App/footer.html.twig' %} 
        {% include 'General/general_modal.html.twig' %}
    </body>
{% endblock %}
", "@Twigs/Admin/admin.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\admin.html.twig");
    }
}
