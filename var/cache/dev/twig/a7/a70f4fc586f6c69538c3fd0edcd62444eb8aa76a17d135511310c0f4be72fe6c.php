<?php

/* Admin/contenidos.html.twig */
class __TwigTemplate_e3e630d7bca7ff331f69a056c269e158520e529ec4912ead81f015e3de0e5322 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/contenidos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/contenidos.html.twig"));

        // line 1
        echo "    
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Contenidos\">
    <div class=\"row\">        
        <div class=\"col-xs-12 col-sm-12\">
            <br><br>
            <div class=\"form-group\">
                <form id=\"contentsAdmin\" name=\"contentsAdmin\" role=\"form\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_contents");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">                    
                    <div class=\"form-group col-md-4\">
                        <label>Tìtulo</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Tìtulo\" required maxlength=\"30\" name=\"cont_titulo\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Descripciòn</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Descripciòn\" required maxlength=\"30\" name=\"cont_descripcion\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Palabra Clave</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Palabra Clave\" required maxlength=\"30\" name=\"cont_clave\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Url</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"url\" required maxlength=\"30\" name=\"cont_url\">
                    </div>                                                                
                    <div class=\"form-group col-md-12\">
                        <textarea name=\"cont_info\" id=\"cont_info\" required></textarea>
                    </div>                    
                    <div class=\"form-group col-md-12\">
                        <div id=\"res-form-contenido\"></div>
                        <input id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" type=\"submit\" value=\"Guardar\">
                    </div>                    
                </form>
            </div>            
        </div>
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar Contenidos</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">Título</th>
                                <th class=\"text-center\">Descripcion</th>
                                <th class=\"text-center\">Url</th>
                                <th class=\"text-center\">Ver</th>
                                <th class=\"text-center\">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenidos"]) || array_key_exists("contenidos", $context) ? $context["contenidos"] : (function () { throw new Twig_Error_Runtime('Variable "contenidos" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contenido"]) {
            echo "                                                                
                                <tr>
                                    <td>                                        
                                        <input readonly class=\"form-control\" type=\"text\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "title", [])), "html", null, true);
            echo "\">
                                    </td>
                                    <td><input class=\"form-control\" type=\"text\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "description", [])), "html", null, true);
            echo "\"></td>
                                    <td><input class=\"form-control\" type=\"text\" name=\"categ-descrip\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "url", []), "html", null, true);
            echo "\"></td>
                                    <td class=\"text-center\">                                              
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contents_view", ["url" => twig_get_attribute($this->env, $this->source, $context["contenido"], "url", [])]), "html", null, true);
            echo "\"><button type=\"submit\" class=\"btn btn-success\">Ver</button></a>
                                    </td>
                                    <td class=\"text-center\">                                              
                                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contents_edit", ["url" => twig_get_attribute($this->env, $this->source, $context["contenido"], "url", [])]), "html", null, true);
            echo "\"><button type=\"submit\" class=\"btn btn-primary\">Editar</button></a>
                                    </td>
                                </tr>                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        return "Admin/contenidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 64,  111 => 61,  105 => 58,  100 => 56,  96 => 55,  91 => 53,  83 => 50,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}    
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Contenidos\">
    <div class=\"row\">        
        <div class=\"col-xs-12 col-sm-12\">
            <br><br>
            <div class=\"form-group\">
                <form id=\"contentsAdmin\" name=\"contentsAdmin\" role=\"form\" action=\"{{ path(\"create_contents\") }}\" method=\"post\" enctype=\"multipart/form-data\">                    
                    <div class=\"form-group col-md-4\">
                        <label>Tìtulo</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Tìtulo\" required maxlength=\"30\" name=\"cont_titulo\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Descripciòn</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Descripciòn\" required maxlength=\"30\" name=\"cont_descripcion\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Palabra Clave</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Palabra Clave\" required maxlength=\"30\" name=\"cont_clave\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Url</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"url\" required maxlength=\"30\" name=\"cont_url\">
                    </div>                                                                
                    <div class=\"form-group col-md-12\">
                        <textarea name=\"cont_info\" id=\"cont_info\" required></textarea>
                    </div>                    
                    <div class=\"form-group col-md-12\">
                        <div id=\"res-form-contenido\"></div>
                        <input id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" type=\"submit\" value=\"Guardar\">
                    </div>                    
                </form>
            </div>            
        </div>
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar Contenidos</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">Título</th>
                                <th class=\"text-center\">Descripcion</th>
                                <th class=\"text-center\">Url</th>
                                <th class=\"text-center\">Ver</th>
                                <th class=\"text-center\">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for contenido in contenidos %}                                                                
                                <tr>
                                    <td>                                        
                                        <input readonly class=\"form-control\" type=\"text\" value=\"{{contenido.title|capitalize}}\">
                                    </td>
                                    <td><input class=\"form-control\" type=\"text\" value=\"{{contenido.description|capitalize}}\"></td>
                                    <td><input class=\"form-control\" type=\"text\" name=\"categ-descrip\" value=\"{{contenido.url}}\"></td>
                                    <td class=\"text-center\">                                              
                                        <a href=\"{{ url('contents_view', {url: contenido.url}) }}\"><button type=\"submit\" class=\"btn btn-success\">Ver</button></a>
                                    </td>
                                    <td class=\"text-center\">                                              
                                        <a href=\"{{ url('contents_edit', {url: contenido.url}) }}\"><button type=\"submit\" class=\"btn btn-primary\">Editar</button></a>
                                    </td>
                                </tr>                                
                            {% endfor %}                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
", "Admin/contenidos.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\contenidos.html.twig");
    }
}
