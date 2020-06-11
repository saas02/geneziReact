<?php

/* ./App/navigator.html.twig */
class __TwigTemplate_e37a3dd37acec52fa8fa83fc129e9d7355b9725beeeb8270e097cf22c381b983 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navigator' => [$this, 'block_navigator'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./App/navigator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./App/navigator.html.twig"));

        // line 1
        $this->displayBlock('navigator', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_navigator($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigator"));

        echo "    
    <section id=\"container-carrito-compras\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6\">
                    <div id=\"carrito-compras-tienda\">
                        <table class=\"table table-car\"></table>
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-6\">
                    <p class=\"text-center\" style=\"font-size: 80px;\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </p>
                    <p class=\"text-center\">
                        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pedido");
        echo "\" class=\"btn btn-success btn-block\"> Confirmar pedido</a>                        
                    </p>
                </div>
            </div>
        </div>
    </section>
    <nav id=\"navbar-auto-hidden\">
        <div class=\"row hidden-xs\"><!-- Menu computadoras y tablets -->
            <div class=\"col-xs-4\">
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_home");
        echo "\">
                    <figure class=\"logo-navbar\"></figure>
                    <p class=\"text-navbar tittles-pages-logo\">Genezi Tecnología Led</p>
                </a>
            </div>
            <div class=\"col-xs-8\">
                <div class=\"contenedor-tabla pull-right\">
                    <div class=\"contenedor-tr\">                                                
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"table-cell-td\">Productos</a>                     
                        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_info");
        echo "\" class=\"table-cell-td\">Nosotros</a>
                        ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "nombreAdmin"], "method", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->source); })()), "session", []), "get", [0 => "nombreAdmin"], "method")))) {
            // line 35
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_admin");
            echo "\" class=\"table-cell-td\">Administración</a>
                            <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_corporative");
            echo "\" class=\"table-cell-td\">Cliente Corporativo</a>  
                            <a href=\"#\" class=\"table-cell-td\" data-toggle=\"modal\" data-target=\".modal-logout\">
                                <i class=\"fa fa-user\"></i>&nbsp;&nbsp;";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "session", []), "get", [0 => "nombreAdmin"], "method"), "html", null, true);
            echo "</i>
                            </a>
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "nombreUser"], "method", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->source); })()), "session", []), "get", [0 => "nombreUser"], "method")))) {
            echo "                            
                            ";
            // line 41
            if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "pedido") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "formulario")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "resumen_approved")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "resumen_rejected"))) {
                // line 42
                echo "                                <a href=\"#\" class=\"table-cell-td carrito-button-nav\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ver carrito de compras\">
                                    <i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\"></i>
                                </a>
                            ";
            }
            // line 46
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_corporative");
            echo "\" class=\"table-cell-td\">Cliente Corporativo</a>  
                            <a href=\"#\" class=\"table-cell-td\" data-toggle=\"modal\" data-target=\".modal-logout\">
                                <i class=\"fa fa-user\"></i>&nbsp;&nbsp;";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->source); })()), "session", []), "get", [0 => "nombreUser"], "method"), "html", null, true);
            echo "
                            </a>
                            ";
        } else {
            // line 51
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"table-cell-td\">Registro</a>
                                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "pedido")) {
                // line 53
                echo "                                    <a href=\"#\" class=\"table-cell-td carrito-button-nav\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ver carrito de compras\">
                                        <i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\"></i>
                                    </a>
                                ";
            }
            // line 57
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_corporative");
            echo "\" class=\"table-cell-td\">Cliente Corporativo</a>  
                                <a href=\"#\" class=\"table-cell-td\" data-toggle=\"modal\" data-target=\".modal-login\">
                                    <i class=\"fa fa-user\"></i>&nbsp;&nbsp;Login
                                </a>                                
                        ";
        }
        // line 61
        echo "                        
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row visible-xs\"><!-- Mobile menu navbar -->
            <div class=\"col-xs-12\">
                <button class=\"btn btn-default pull-left button-mobile-menu\" id=\"btn-mobile-menu\">
                    <i class=\"fa fa-th-list\"></i>&nbsp;&nbsp;Menú
                </button>
                ";
        // line 71
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "pedido") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "formulario")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "resumen_approved")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "request", []), "get", [0 => "_route"], "method") != "resumen_rejected"))) {
            // line 72
            echo "                    <a href=\"#\" id=\"button-shopping-cart-xs\" class=\"elements-nav-xs all-elements-tooltip carrito-button-nav\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ver carrito de compras\">
                        <i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\"></i>
                    </a>
                ";
        }
        // line 76
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "nombreAdmin"], "method", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 76, $this->source); })()), "session", []), "get", [0 => "nombreAdmin"], "method")))) {
            // line 77
            echo "                    <a href=\"#\"  id=\"button-login-xs\" class=\"elements-nav-xs\" data-toggle=\"modal\" data-target=\".modal-logout\">
                        <i class=\"fa fa-user\"></i>&nbsp; ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 78, $this->source); })()), "session", []), "get", [0 => "nombreAdmin"], "method"), "html", null, true);
            echo "
                    </a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "nombreUser"], "method", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 80, $this->source); })()), "session", []), "get", [0 => "nombreUser"], "method")))) {
            // line 81
            echo "                    <a href=\"#\"  id=\"button-login-xs\" class=\"elements-nav-xs\" data-toggle=\"modal\" data-target=\".modal-logout\">
                        <i class=\"fa fa-user\"></i>&nbsp; ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 82, $this->source); })()), "session", []), "get", [0 => "nombreUser"], "method"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 85
            echo "                    <a href=\"#\" data-toggle=\"modal\" data-target=\".modal-login\" id=\"button-login-xs\" class=\"elements-nav-xs\">
                        <i class=\"fa fa-user\"></i>&nbsp; Iniciar Sesión
                    </a> 
                ";
        }
        // line 88
        echo "                
            </div>
        </div>
        <div id=\"mobile-menu-list\" class=\"hidden-sm hidden-md hidden-lg\">
            <br>
            <h3 class=\"text-center tittles-pages-logo\">Genezi</h3>
            <button class=\"btn btn-default button-mobile-menu\" id=\"button-close-mobile-menu\">
                <i class=\"fa fa-times\"></i>
            </button>
            <br><br>
            <ul class=\"list-unstyled text-center\">
                <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_home");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Productos</a></li>                 
                <li><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_info");
        echo "\" class=\"table-cell-td\">Nosotros</a></li>
                <li><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_corporative");
        echo "\" class=\"table-cell-td\">Cliente Corporativo</a></li>
                    ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "nombreAdmin"], "method", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 103, $this->source); })()), "session", []), "get", [0 => "nombreAdmin"], "method")))) {
            // line 104
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_admin");
            echo "\">Administración</a></li>                    
                    ";
        } else {
            // line 106
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Registro</a></li>
                    ";
        }
        // line 107
        echo "                  
            </ul>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "./App/navigator.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  248 => 107,  242 => 106,  236 => 104,  234 => 103,  230 => 102,  226 => 101,  222 => 100,  218 => 99,  205 => 88,  199 => 85,  193 => 82,  190 => 81,  188 => 80,  183 => 78,  180 => 77,  177 => 76,  171 => 72,  169 => 71,  157 => 61,  148 => 57,  142 => 53,  140 => 52,  135 => 51,  129 => 48,  123 => 46,  117 => 42,  115 => 41,  111 => 40,  106 => 38,  101 => 36,  96 => 35,  94 => 34,  90 => 33,  86 => 32,  75 => 24,  63 => 15,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block navigator %}    
    <section id=\"container-carrito-compras\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6\">
                    <div id=\"carrito-compras-tienda\">
                        <table class=\"table table-car\"></table>
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-6\">
                    <p class=\"text-center\" style=\"font-size: 80px;\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </p>
                    <p class=\"text-center\">
                        <a href=\"{{ path('pedido') }}\" class=\"btn btn-success btn-block\"> Confirmar pedido</a>                        
                    </p>
                </div>
            </div>
        </div>
    </section>
    <nav id=\"navbar-auto-hidden\">
        <div class=\"row hidden-xs\"><!-- Menu computadoras y tablets -->
            <div class=\"col-xs-4\">
                <a href=\"{{ path('general_home') }}\">
                    <figure class=\"logo-navbar\"></figure>
                    <p class=\"text-navbar tittles-pages-logo\">Genezi Tecnología Led</p>
                </a>
            </div>
            <div class=\"col-xs-8\">
                <div class=\"contenedor-tabla pull-right\">
                    <div class=\"contenedor-tr\">                                                
                        <a href=\"{{ path('products') }}\" class=\"table-cell-td\">Productos</a>                     
                        <a href=\"{{ path('general_info') }}\" class=\"table-cell-td\">Nosotros</a>
                        {% if app.session.get('nombreAdmin') is defined and app.session.get('nombreAdmin') is not empty %}
                            <a href=\"{{ path('general_admin') }}\" class=\"table-cell-td\">Administración</a>
                            <a href=\"{{ path('general_corporative') }}\" class=\"table-cell-td\">Cliente Corporativo</a>  
                            <a href=\"#\" class=\"table-cell-td\" data-toggle=\"modal\" data-target=\".modal-logout\">
                                <i class=\"fa fa-user\"></i>&nbsp;&nbsp;{{ app.session.get('nombreAdmin') }}</i>
                            </a>
                        {% elseif app.session.get('nombreUser') is defined and app.session.get('nombreUser') is not empty %}                            
                            {% if app.request.get('_route') != 'pedido' and app.request.get('_route') != 'formulario' and app.request.get('_route') != 'resumen_approved' and app.request.get('_route') != 'resumen_rejected' %}
                                <a href=\"#\" class=\"table-cell-td carrito-button-nav\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ver carrito de compras\">
                                    <i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\"></i>
                                </a>
                            {% endif %}
                            <a href=\"{{ path('general_corporative') }}\" class=\"table-cell-td\">Cliente Corporativo</a>  
                            <a href=\"#\" class=\"table-cell-td\" data-toggle=\"modal\" data-target=\".modal-logout\">
                                <i class=\"fa fa-user\"></i>&nbsp;&nbsp;{{ app.session.get('nombreUser') }}
                            </a>
                            {% else %}
                                <a href=\"{{ path('register') }}\" class=\"table-cell-td\">Registro</a>
                                {% if app.request.get('_route') != 'pedido' %}
                                    <a href=\"#\" class=\"table-cell-td carrito-button-nav\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ver carrito de compras\">
                                        <i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\"></i>
                                    </a>
                                {% endif %}
                                <a href=\"{{ path('general_corporative') }}\" class=\"table-cell-td\">Cliente Corporativo</a>  
                                <a href=\"#\" class=\"table-cell-td\" data-toggle=\"modal\" data-target=\".modal-login\">
                                    <i class=\"fa fa-user\"></i>&nbsp;&nbsp;Login
                                </a>                                
                        {% endif %}                        
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row visible-xs\"><!-- Mobile menu navbar -->
            <div class=\"col-xs-12\">
                <button class=\"btn btn-default pull-left button-mobile-menu\" id=\"btn-mobile-menu\">
                    <i class=\"fa fa-th-list\"></i>&nbsp;&nbsp;Menú
                </button>
                {% if app.request.get('_route') != 'pedido' and app.request.get('_route') != 'formulario' and app.request.get('_route') != 'resumen_approved' and app.request.get('_route') != 'resumen_rejected' %}
                    <a href=\"#\" id=\"button-shopping-cart-xs\" class=\"elements-nav-xs all-elements-tooltip carrito-button-nav\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ver carrito de compras\">
                        <i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\"></i>
                    </a>
                {% endif %}
                {% if app.session.get('nombreAdmin') is defined and app.session.get('nombreAdmin') is not empty %}
                    <a href=\"#\"  id=\"button-login-xs\" class=\"elements-nav-xs\" data-toggle=\"modal\" data-target=\".modal-logout\">
                        <i class=\"fa fa-user\"></i>&nbsp; {{ app.session.get('nombreAdmin') }}
                    </a>
                {% elseif app.session.get('nombreUser') is defined and app.session.get('nombreUser') is not empty %}
                    <a href=\"#\"  id=\"button-login-xs\" class=\"elements-nav-xs\" data-toggle=\"modal\" data-target=\".modal-logout\">
                        <i class=\"fa fa-user\"></i>&nbsp; {{ app.session.get('nombreUser') }}
                    </a>
                {% else %}
                    <a href=\"#\" data-toggle=\"modal\" data-target=\".modal-login\" id=\"button-login-xs\" class=\"elements-nav-xs\">
                        <i class=\"fa fa-user\"></i>&nbsp; Iniciar Sesión
                    </a> 
                {% endif %}                
            </div>
        </div>
        <div id=\"mobile-menu-list\" class=\"hidden-sm hidden-md hidden-lg\">
            <br>
            <h3 class=\"text-center tittles-pages-logo\">Genezi</h3>
            <button class=\"btn btn-default button-mobile-menu\" id=\"button-close-mobile-menu\">
                <i class=\"fa fa-times\"></i>
            </button>
            <br><br>
            <ul class=\"list-unstyled text-center\">
                <li><a href=\"{{ path('general_home') }}\">Inicio</a></li>
                <li><a href=\"{{ path('products') }}\">Productos</a></li>                 
                <li><a href=\"{{ path('general_info') }}\" class=\"table-cell-td\">Nosotros</a></li>
                <li><a href=\"{{ path('general_corporative') }}\" class=\"table-cell-td\">Cliente Corporativo</a></li>
                    {% if app.session.get('nombreAdmin') is defined and app.session.get('nombreAdmin') is not empty %}
                    <li><a href=\"{{ path('general_admin') }}\">Administración</a></li>                    
                    {% else %}
                    <li><a href=\"{{ path('register') }}\">Registro</a></li>
                    {% endif %}                  
            </ul>
        </div>
    </nav>
{% endblock %}
", "./App/navigator.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\App\\navigator.html.twig");
    }
}
