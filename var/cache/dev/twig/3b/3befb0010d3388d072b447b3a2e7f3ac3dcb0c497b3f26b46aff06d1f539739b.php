<?php

/* Admin/admins.html.twig */
class __TwigTemplate_0996258da28450a12a2bd3682dae2f5be6e065561334f90cbd1d2f790c3628cd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/admins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/admins.html.twig"));

        // line 2
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Admins\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"add-admin\">
                <h2 class=\"text-info text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar administrador</h2>
                <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_admin");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Nombre</label>
                        <input class=\"form-control\" type=\"text\" name=\"admin-name\" placeholder=\"Nombre\" maxlength=\"20\" pattern=\"[a-zA-Z]{4,20}\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Contraseña</label>
                        <input class=\"form-control\" type=\"password\" name=\"admin-pass\" placeholder=\"Contraseña\" required=\"\">
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar administrador</button></p>
                    <br>
                    <div id=\"res-form-add-admin\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"del-admin\">
                <h2 class=\"text-danger text-center\"><small><i class=\"fa fa-trash-o\"></i></small>&nbsp;&nbsp;Eliminar administrador</h2>
                <form action=\"process/deladmin.php\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Administradores</label>
                        <select class=\"form-control\" name=\"name-admin\">
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administradores"]) || array_key_exists("administradores", $context) ? $context["administradores"] : (function () { throw new Twig_Error_Runtime('Variable "administradores" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["administrador"]) {
            // line 32
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrador"], "Id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrador"], "Nombre", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['administrador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            
                        </select>
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-danger\">Eliminar administrador</button></p>
                    <br>
                    <div id=\"res-form-del-admin\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12\"></div> 
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/admins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  67 => 32,  63 => 31,  37 => 8,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Admins\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"add-admin\">
                <h2 class=\"text-info text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar administrador</h2>
                <form action=\"{{ path('create_admin') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Nombre</label>
                        <input class=\"form-control\" type=\"text\" name=\"admin-name\" placeholder=\"Nombre\" maxlength=\"20\" pattern=\"[a-zA-Z]{4,20}\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Contraseña</label>
                        <input class=\"form-control\" type=\"password\" name=\"admin-pass\" placeholder=\"Contraseña\" required=\"\">
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar administrador</button></p>
                    <br>
                    <div id=\"res-form-add-admin\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"del-admin\">
                <h2 class=\"text-danger text-center\"><small><i class=\"fa fa-trash-o\"></i></small>&nbsp;&nbsp;Eliminar administrador</h2>
                <form action=\"process/deladmin.php\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Administradores</label>
                        <select class=\"form-control\" name=\"name-admin\">
                            {% for administrador in administradores %}
                                <option value=\"{{ administrador.Id }}\">{{ administrador.Nombre }}</option>
                            {% endfor %}                            
                        </select>
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-danger\">Eliminar administrador</button></p>
                    <br>
                    <div id=\"res-form-del-admin\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12\"></div> 
    </div>
</div>
", "Admin/admins.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\admins.html.twig");
    }
}
