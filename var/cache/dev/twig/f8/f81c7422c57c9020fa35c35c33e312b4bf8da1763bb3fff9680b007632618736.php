<?php

/* Admin/contenido.html.twig */
class __TwigTemplate_f4fd2fd6b789cc0fe88295b03fe52fe63b0d40c48f73ac57f53c25ac161cb8f6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("./App/base.html.twig", "Admin/contenido.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/contenido.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/contenido.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <body id=\"container-page-configAdmin\">
        ";
        // line 4
        $this->loadTemplate("./App/navigator.html.twig", "Admin/contenido.html.twig", 4)->display($context);
        echo "    
        ";
        // line 5
        if ((isset($context["OnlyView"]) || array_key_exists("OnlyView", $context))) {
            // line 6
            echo "            <section id=\"prove-product-cat-config\">
                <div class=\"container\">
                    <div class=\"col-xs-12 col-sm-12\">
                        ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new Twig_Error_Runtime('Variable "contenido" does not exist.', 9, $this->source); })()), "text", []);
            echo "
                    </div>
                </div>
            </section>
            ";
        } else {
            // line 14
            echo "                <section id=\"prove-product-cat-config\">
                    <div class=\"container\">
                        <div class=\"col-xs-12 col-sm-12\">
                            <br><br>
                            <div class=\"form-group\">
                                <form id=\"contentsAdmin\" name=\"contentsAdmin\" role=\"form\" action=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_contents");
            echo "\" method=\"post\" enctype=\"multipart/form-data\">                    
                                    <div class=\"form-group col-md-4\">
                                        <label>Tìtulo</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"Tìtulo\" required maxlength=\"30\" name=\"cont_titulo\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new Twig_Error_Runtime('Variable "contenido" does not exist.', 22, $this->source); })()), "title", []), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label>Descripciòn</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"Descripciòn\" required maxlength=\"30\" name=\"cont_descripcion\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new Twig_Error_Runtime('Variable "contenido" does not exist.', 26, $this->source); })()), "description", []), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label>Palabra Clave</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"Palabra Clave\" required maxlength=\"30\" name=\"cont_clave\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new Twig_Error_Runtime('Variable "contenido" does not exist.', 30, $this->source); })()), "keywords", []), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label>Url</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"url\" required maxlength=\"30\" name=\"cont_url\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new Twig_Error_Runtime('Variable "contenido" does not exist.', 34, $this->source); })()), "url", []), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        <textarea name=\"cont_info\" id=\"cont_info\" required>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new Twig_Error_Runtime('Variable "contenido" does not exist.', 37, $this->source); })()), "text", []), "html", null, true);
            echo "</textarea>
                                    </div>                    
                                    <div class=\"form-group col-md-12\">
                                        <div id=\"res-form-contenido\"></div>
                                        <input type=\"hidden\" name=\"cont_url_edition\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new Twig_Error_Runtime('Variable "contenido" does not exist.', 41, $this->source); })()), "url", []), "html", null, true);
            echo "\">
                                        <input id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" type=\"submit\" value=\"Editar\">
                                    </div>                    
                                </form>
                            </div>            
                        </div>
                    </div>
                </section>
        ";
        }
        // line 49
        echo "        
        ";
        // line 50
        $this->loadTemplate("./App/footer.html.twig", "Admin/contenido.html.twig", 50)->display($context);
        echo " 
        ";
        // line 51
        $this->loadTemplate("General/general_modal.html.twig", "Admin/contenido.html.twig", 51)->display($context);
        echo "        
    </body>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/contenido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  137 => 50,  134 => 49,  122 => 41,  115 => 37,  109 => 34,  102 => 30,  95 => 26,  88 => 22,  82 => 19,  75 => 14,  67 => 9,  62 => 6,  60 => 5,  56 => 4,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends './App/base.html.twig' %}
{% block body %} 
    <body id=\"container-page-configAdmin\">
        {% include './App/navigator.html.twig' %}    
        {% if OnlyView is defined %}
            <section id=\"prove-product-cat-config\">
                <div class=\"container\">
                    <div class=\"col-xs-12 col-sm-12\">
                        {{ contenido.text|raw }}
                    </div>
                </div>
            </section>
            {% else %}
                <section id=\"prove-product-cat-config\">
                    <div class=\"container\">
                        <div class=\"col-xs-12 col-sm-12\">
                            <br><br>
                            <div class=\"form-group\">
                                <form id=\"contentsAdmin\" name=\"contentsAdmin\" role=\"form\" action=\"{{ path(\"create_contents\") }}\" method=\"post\" enctype=\"multipart/form-data\">                    
                                    <div class=\"form-group col-md-4\">
                                        <label>Tìtulo</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"Tìtulo\" required maxlength=\"30\" name=\"cont_titulo\" value=\"{{contenido.title}}\">
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label>Descripciòn</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"Descripciòn\" required maxlength=\"30\" name=\"cont_descripcion\" value=\"{{ contenido.description}}\">
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label>Palabra Clave</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"Palabra Clave\" required maxlength=\"30\" name=\"cont_clave\" value=\"{{ contenido.keywords}}\">
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label>Url</label>
                                        <input type=\"text\" class=\"form-control\"  placeholder=\"url\" required maxlength=\"30\" name=\"cont_url\" value=\"{{ contenido.url}}\">
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        <textarea name=\"cont_info\" id=\"cont_info\" required>{{contenido.text}}</textarea>
                                    </div>                    
                                    <div class=\"form-group col-md-12\">
                                        <div id=\"res-form-contenido\"></div>
                                        <input type=\"hidden\" name=\"cont_url_edition\" value=\"{{ contenido.url }}\">
                                        <input id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" type=\"submit\" value=\"Editar\">
                                    </div>                    
                                </form>
                            </div>            
                        </div>
                    </div>
                </section>
        {% endif %}        
        {% include './App/footer.html.twig' %} 
        {% include 'General/general_modal.html.twig' %}        
    </body>    
{% endblock %}", "Admin/contenido.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\contenido.html.twig");
    }
}
