<?php

/* General/general_modal.html.twig */
class __TwigTemplate_9c03cfeb1d0ce07b9e892814e6f629de9722f17d0f927b73a5f3a6f97a279fe3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'modal' => [$this, 'block_modal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "General/general_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "General/general_modal.html.twig"));

        // line 1
        $this->displayBlock('modal', $context, $blocks);
        // line 78
        echo "                
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_modal($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        echo "  
    <!-- Modal login -->
    <div class=\"modal fade modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\" id=\"modal-form-login\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title text-center text-primary\" id=\"myModalLabel\">Iniciar sesión en Genezi</h4>
                </div>
                <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_login");
        echo "\" method=\"post\" role=\"form\" style=\"margin: 20px;\" class=\"FormCatElec\" data-form=\"login\">
                    <div class=\"form-group\">
                        <label><span class=\"glyphicon glyphicon-user\"></span>&nbsp;Identificación</label>
                        <input type=\"text\" class=\"form-control\" name=\"nombre-login\" placeholder=\"Escribe tu nombre\" required=\"\"/>
                    </div>
                    <div class=\"form-group\">
                        <label><span class=\"glyphicon glyphicon-lock\"></span>&nbsp;Contraseña</label>
                        <input type=\"password\" class=\"form-control\" name=\"clave-login\" placeholder=\"Escribe tu contraseña\" required=\"\"/>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Iniciar sesión</button>
                        <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Cancelar</button>
                    </div>                    
                    <div class=\"error\" style=\"display:none;padding-left: 40%\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/error.png")), "html", null, true);
        echo "\" class=\"center-all-contens\"><br>
                    </div>
                    <div class=\"ResFormL\" style=\"width: 100%; text-align: center; margin: 0;\"></div>                    
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal login -->
    
    <!-- Modal carrito -->
    <div class=\"modal fade modal-carrito\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"padding: 20px;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <br>
                <p class=\"text-center\"><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
                <p class=\"text-center\">El producto se añadio al carrito</p>                
            </div>
        </div>
    </div>
    <!-- Fin Modal carrito -->

    <!-- Modal logout -->
    <div class=\"modal fade modal-logout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"padding: 20px;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <br>
                <p class=\"text-center\">¿Quieres cerrar la sesión?</p>
                <p class=\"text-center\"><i class=\"fa fa-exclamation-triangle fa-5x\"></i></p>
                <p class=\"text-center\">
                    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_logout");
        echo "\" class=\"btn btn-primary btn-sm\">Cerrar la sesión</a>
                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Cancelar</button>
                </p>
            </div>
        </div>
    </div>
    <!-- Fin Modal logout -->
    
    
    <!-- Modal detalle -->
    <div class=\"modal fade modal-detail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"padding: 20px;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"imgTittle\"></div>
                <br>
                <div class=\"imgFormL\">
                    ";
        // line 69
        if (((isset($context["producto"]) || array_key_exists("producto", $context)) &&  !twig_test_empty((isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 69, $this->source); })())))) {
            echo "                    
                        ";
            // line 70
            $this->loadTemplate("./App/carousel.html.twig", "General/general_modal.html.twig", 70)->display(array_merge($context, ["pictures" => (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 70, $this->source); })())]));
            echo "                        
                    ";
        }
        // line 71
        echo "                
                </div>                
            </div>
        </div>
    </div>
    <!-- Fin Modal detalle -->
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "General/general_modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 71,  134 => 70,  130 => 69,  111 => 53,  79 => 24,  62 => 10,  43 => 1,  32 => 78,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block modal %}  
    <!-- Modal login -->
    <div class=\"modal fade modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\" id=\"modal-form-login\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title text-center text-primary\" id=\"myModalLabel\">Iniciar sesión en Genezi</h4>
                </div>
                <form action=\"{{ path('general_login') }}\" method=\"post\" role=\"form\" style=\"margin: 20px;\" class=\"FormCatElec\" data-form=\"login\">
                    <div class=\"form-group\">
                        <label><span class=\"glyphicon glyphicon-user\"></span>&nbsp;Identificación</label>
                        <input type=\"text\" class=\"form-control\" name=\"nombre-login\" placeholder=\"Escribe tu nombre\" required=\"\"/>
                    </div>
                    <div class=\"form-group\">
                        <label><span class=\"glyphicon glyphicon-lock\"></span>&nbsp;Contraseña</label>
                        <input type=\"password\" class=\"form-control\" name=\"clave-login\" placeholder=\"Escribe tu contraseña\" required=\"\"/>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Iniciar sesión</button>
                        <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Cancelar</button>
                    </div>                    
                    <div class=\"error\" style=\"display:none;padding-left: 40%\">
                        <img src=\"{{ absolute_url(asset('assets/img/error.png')) }}\" class=\"center-all-contens\"><br>
                    </div>
                    <div class=\"ResFormL\" style=\"width: 100%; text-align: center; margin: 0;\"></div>                    
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal login -->
    
    <!-- Modal carrito -->
    <div class=\"modal fade modal-carrito\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"padding: 20px;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <br>
                <p class=\"text-center\"><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
                <p class=\"text-center\">El producto se añadio al carrito</p>                
            </div>
        </div>
    </div>
    <!-- Fin Modal carrito -->

    <!-- Modal logout -->
    <div class=\"modal fade modal-logout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"padding: 20px;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <br>
                <p class=\"text-center\">¿Quieres cerrar la sesión?</p>
                <p class=\"text-center\"><i class=\"fa fa-exclamation-triangle fa-5x\"></i></p>
                <p class=\"text-center\">
                    <a href=\"{{ path(\"general_logout\") }}\" class=\"btn btn-primary btn-sm\">Cerrar la sesión</a>
                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Cancelar</button>
                </p>
            </div>
        </div>
    </div>
    <!-- Fin Modal logout -->
    
    
    <!-- Modal detalle -->
    <div class=\"modal fade modal-detail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"padding: 20px;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"imgTittle\"></div>
                <br>
                <div class=\"imgFormL\">
                    {% if producto is defined and producto is not empty %}                    
                        {% include './App/carousel.html.twig' with {'pictures': producto} %}                        
                    {% endif %}                
                </div>                
            </div>
        </div>
    </div>
    <!-- Fin Modal detalle -->
    
{% endblock %}                
", "General/general_modal.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\general_modal.html.twig");
    }
}
