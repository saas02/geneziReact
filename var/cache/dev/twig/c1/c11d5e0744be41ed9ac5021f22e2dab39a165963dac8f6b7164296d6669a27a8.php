<?php

/* Admin/categorias.html.twig */
class __TwigTemplate_79c7e42aa3410c9d6b640c45e41cc1e15bc6363e38670b5c5171500546432326 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/categorias.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/categorias.html.twig"));

        // line 2
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Categorias\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"add-categori\">
                <h2 class=\"text-info text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar categoría</h2>
                <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_category");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Código</label>
                        <input class=\"form-control\" type=\"text\" name=\"categ-code\" placeholder=\"Código de categoria\" maxlength=\"9\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Nombre</label>
                        <input class=\"form-control\" type=\"text\" name=\"categ-name\" placeholder=\"Nombre de categoria\" maxlength=\"30\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Descripción</label>
                        <input class=\"form-control\" type=\"text\" name=\"categ-descrip\" placeholder=\"Descripcióne de categoria\" required=\"\">
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar categoría</button></p>
                    <br>
                    <div id=\"res-form-add-categori\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"del-categori\">
                <h2 class=\"text-danger text-center\"><small><i class=\"fa fa-trash-o\"></i></small>&nbsp;&nbsp;Eliminar una categoría</h2>
                <form action=\"process/delcategori.php\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Categorías</label>
                        <select class=\"form-control\" name=\"categ-code\">
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 36
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Nombre", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " 
                        </select>
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-danger\">Eliminar categoría</button></p>
                    <br>
                    <div id=\"res-form-del-cat\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div> 
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar categoría</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">Código</th>
                                <th class=\"text-center\">Nombre</th>
                                <th class=\"text-center\">Descripción</th>
                                <th class=\"text-center\">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 61, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 62
            echo "                            <div id=\"update-category\">
                                <form method=\"post\" action=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_category");
            echo "\" id=\"res-update-category-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"hidden\" name=\"categ-code-old\" maxlength=\"9\" required=\"\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
            echo "\">
                                            <input readonly class=\"form-control\" type=\"text\" name=\"categ-code\" maxlength=\"9\" required=\"\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "CodigoCat", []), "html", null, true);
            echo "\">
                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"categ-name\" maxlength=\"30\" required=\"\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Nombre", [])), "html", null, true);
            echo "\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"categ-descrip\" required=\"\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Descripcion", []), "html", null, true);
            echo "\"></td>
                                        <td class=\"text-center\">
                                            <input name=\"categ-update\" value=\"1\" type=\"hidden\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-UC\" value=\"res-update-category-";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">Actualizar</button>
                                            <div id=\"res-update-category-";
            // line 74
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return "Admin/categorias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  159 => 74,  155 => 73,  149 => 70,  145 => 69,  140 => 67,  136 => 66,  128 => 63,  125 => 62,  108 => 61,  82 => 37,  71 => 36,  67 => 35,  37 => 8,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Categorias\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"add-categori\">
                <h2 class=\"text-info text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar categoría</h2>
                <form action=\"{{ path('create_category') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Código</label>
                        <input class=\"form-control\" type=\"text\" name=\"categ-code\" placeholder=\"Código de categoria\" maxlength=\"9\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Nombre</label>
                        <input class=\"form-control\" type=\"text\" name=\"categ-name\" placeholder=\"Nombre de categoria\" maxlength=\"30\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Descripción</label>
                        <input class=\"form-control\" type=\"text\" name=\"categ-descrip\" placeholder=\"Descripcióne de categoria\" required=\"\">
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar categoría</button></p>
                    <br>
                    <div id=\"res-form-add-categori\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <br><br>
            <div id=\"del-categori\">
                <h2 class=\"text-danger text-center\"><small><i class=\"fa fa-trash-o\"></i></small>&nbsp;&nbsp;Eliminar una categoría</h2>
                <form action=\"process/delcategori.php\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Categorías</label>
                        <select class=\"form-control\" name=\"categ-code\">
                            {% for categoria in categorias %}
                                <option value=\"{{ categoria.Id }}\">{{ categoria.Nombre }}</option>
                            {% endfor %} 
                        </select>
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-danger\">Eliminar categoría</button></p>
                    <br>
                    <div id=\"res-form-del-cat\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
        </div> 
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar categoría</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">Código</th>
                                <th class=\"text-center\">Nombre</th>
                                <th class=\"text-center\">Descripción</th>
                                <th class=\"text-center\">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for categoria in categorias %}
                            <div id=\"update-category\">
                                <form method=\"post\" action=\"{{ path('create_category') }}\" id=\"res-update-category-{{ loop.index }}\">
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"hidden\" name=\"categ-code-old\" maxlength=\"9\" required=\"\" value=\"{{categoria.CodigoCat}}\">
                                            <input readonly class=\"form-control\" type=\"text\" name=\"categ-code\" maxlength=\"9\" required=\"\" value=\"{{categoria.CodigoCat}}\">
                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"categ-name\" maxlength=\"30\" required=\"\" value=\"{{categoria.Nombre|capitalize}}\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"categ-descrip\" required=\"\" value=\"{{categoria.Descripcion}}\"></td>
                                        <td class=\"text-center\">
                                            <input name=\"categ-update\" value=\"1\" type=\"hidden\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-UC\" value=\"res-update-category-{{ loop.index }}\">Actualizar</button>
                                            <div id=\"res-update-category-{{ loop.index }}\" style=\"width: 100%; margin:0px; padding:0px;\"></div>
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
", "Admin/categorias.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\categorias.html.twig");
    }
}
