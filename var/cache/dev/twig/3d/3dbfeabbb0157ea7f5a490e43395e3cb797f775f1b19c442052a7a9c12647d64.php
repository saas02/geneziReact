<?php

/* Admin/proveedores.html.twig */
class __TwigTemplate_82190060e34e67c0b24b6d02958e0d8166264942ff3e2c38ece17f7e7a8b5526 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/proveedores.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/proveedores.html.twig"));

        // line 2
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Proveedores\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"add-provee\">
                <h2 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar un proveedor</h2>
                <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_provider");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>NIT</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-nit\" placeholder=\"NIT proveedor\" maxlength=\"30\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Nombre</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-name\" placeholder=\"Nombre proveedor\" maxlength=\"30\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Dirección</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-dir\" placeholder=\"Dirección proveedor\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Teléfono</label>
                        <input class=\"form-control\" type=\"tel\" name=\"prove-tel\" placeholder=\"Número telefónico\" pattern=\"[0-9]{1,20}\" maxlength=\"20\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Página web</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-web\" placeholder=\"Página web proveedor\" required=\"\">
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Añadir proveedor</button></p>
                    <br>
                    <div id=\"res-form-add-prove\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"del-prove\">
                <h2 class=\"text-danger text-center\"><small><i class=\"fa fa-trash-o\"></i></small>&nbsp;&nbsp;Eliminar un proveedor</h2>
                <form action=\"process/delprove.php\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Proveedores</label>
                        <select class=\"form-control\" name=\"nit-prove\">
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new Twig_Error_Runtime('Variable "proveedores" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 44
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "NombreProveedor", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "   
                        </select>
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-danger\">Eliminar proveedor</button></p>
                    <br>
                    <div id=\"res-form-del-prove\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>    
        </div> 
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar datos de proveedor</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">NIT</th>
                                <th class=\"text-center\">Nombre</th>
                                <th class=\"text-center\">Dirección</th>
                                <th class=\"text-center\">Telefono</th>
                                <th class=\"text-center\">Página web</th>
                                <th class=\"text-center\">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new Twig_Error_Runtime('Variable "proveedores" does not exist.', 71, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 72
            echo "                            <div id=\"update-proveedor\">
                                <form method=\"post\" action=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_provider");
            echo "\" id=\"res-update-prove-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"hidden\" name=\"prove-nit-old\" required=\"\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "NitProveedor", []), "html", null, true);
            echo "\">
                                            <input readonly class=\"form-control\" type=\"text\" name=\"prove-nit\" maxlength=\"30\" required=\"\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "NitProveedor", []), "html", null, true);
            echo "\">
                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"prove-name\" maxlength=\"30\" required=\"\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "NombreProveedor", [])), "html", null, true);
            echo "\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"prove-dir\" required=\"\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Direccion", []), "html", null, true);
            echo "\"></td>
                                        <td><input class=\"form-control\" type=\"tel\" name=\"prove-tel\" required=\"\" maxlength=\"20\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Telefono", []), "html", null, true);
            echo "\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"prove-web\" maxlength=\"30\" required=\"\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "PaginaWeb", []), "html", null, true);
            echo "\"></td>
                                        <td class=\"text-center\">
                                            <input name=\"prove-update\" value=\"1\" type=\"hidden\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-UP\" value=\"res-update-prove-";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">Actualizar</button>
                                            <div id=\"res-update-prove-";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\" style=\"width: 100%; margin:0px; padding:0px;\"></div>
                                        </td>
                                    </tr>
                                </form>
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/proveedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 91,  177 => 86,  173 => 85,  167 => 82,  163 => 81,  159 => 80,  155 => 79,  150 => 77,  146 => 76,  138 => 73,  135 => 72,  118 => 71,  90 => 45,  79 => 44,  75 => 43,  37 => 8,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Proveedores\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"add-provee\">
                <h2 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar un proveedor</h2>
                <form action=\"{{ path('create_provider') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>NIT</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-nit\" placeholder=\"NIT proveedor\" maxlength=\"30\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Nombre</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-name\" placeholder=\"Nombre proveedor\" maxlength=\"30\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Dirección</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-dir\" placeholder=\"Dirección proveedor\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Teléfono</label>
                        <input class=\"form-control\" type=\"tel\" name=\"prove-tel\" placeholder=\"Número telefónico\" pattern=\"[0-9]{1,20}\" maxlength=\"20\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Página web</label>
                        <input class=\"form-control\" type=\"text\" name=\"prove-web\" placeholder=\"Página web proveedor\" required=\"\">
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Añadir proveedor</button></p>
                    <br>
                    <div id=\"res-form-add-prove\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"del-prove\">
                <h2 class=\"text-danger text-center\"><small><i class=\"fa fa-trash-o\"></i></small>&nbsp;&nbsp;Eliminar un proveedor</h2>
                <form action=\"process/delprove.php\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Proveedores</label>
                        <select class=\"form-control\" name=\"nit-prove\">
                            {% for proveedor in proveedores %}
                                <option value=\"{{ proveedor.Id }}\">{{ proveedor.NombreProveedor }}</option>
                            {% endfor %}   
                        </select>
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-danger\">Eliminar proveedor</button></p>
                    <br>
                    <div id=\"res-form-del-prove\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>    
        </div> 
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar datos de proveedor</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">NIT</th>
                                <th class=\"text-center\">Nombre</th>
                                <th class=\"text-center\">Dirección</th>
                                <th class=\"text-center\">Telefono</th>
                                <th class=\"text-center\">Página web</th>
                                <th class=\"text-center\">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for proveedor in proveedores %}
                            <div id=\"update-proveedor\">
                                <form method=\"post\" action=\"{{ path('create_provider') }}\" id=\"res-update-prove-{{ loop.index }}\">
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"hidden\" name=\"prove-nit-old\" required=\"\" value=\"{{ proveedor.NitProveedor }}\">
                                            <input readonly class=\"form-control\" type=\"text\" name=\"prove-nit\" maxlength=\"30\" required=\"\" value=\"{{ proveedor.NitProveedor }}\">
                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"prove-name\" maxlength=\"30\" required=\"\" value=\"{{ proveedor.NombreProveedor|capitalize }}\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"prove-dir\" required=\"\" value=\"{{ proveedor.Direccion }}\"></td>
                                        <td><input class=\"form-control\" type=\"tel\" name=\"prove-tel\" required=\"\" maxlength=\"20\" value=\"{{ proveedor.Telefono }}\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"prove-web\" maxlength=\"30\" required=\"\" value=\"{{ proveedor.PaginaWeb }}\"></td>
                                        <td class=\"text-center\">
                                            <input name=\"prove-update\" value=\"1\" type=\"hidden\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-UP\" value=\"res-update-prove-{{ loop.index }}\">Actualizar</button>
                                            <div id=\"res-update-prove-{{ loop.index }}\" style=\"width: 100%; margin:0px; padding:0px;\"></div>
                                        </td>
                                    </tr>
                                </form>
                            </div>
                        {% endfor %}                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
", "Admin/proveedores.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\proveedores.html.twig");
    }
}
