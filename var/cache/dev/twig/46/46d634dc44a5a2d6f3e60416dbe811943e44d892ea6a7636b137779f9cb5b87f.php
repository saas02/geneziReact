<?php

/* @Twigs/General/nosotros.html.twig */
class __TwigTemplate_9e3e758b10abe54b922954a29daf8a34618b41f37d51b840f205a453fc1c2cd9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/General/nosotros.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/nosotros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/nosotros.html.twig"));

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
    <body id=\"container-page-registration\">
        ";
        // line 5
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/General/nosotros.html.twig", 5)->display($context);
        echo " 
        <section id=\"form-registration\">
            <div class=\"container\">            
                <div class=\"row\">
                    <div class=\"page-header\">
                        <h1>Nosotros</h1>
                    </div>  
                    <div class=\"col-xs-6 col-sm-6 text-center\">
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 13, $this->source); })()), "nosotros", [], "array"));
        foreach ($context['_seq'] as $context["key"] => $context["info"]) {
            echo "                        
                            ";
            // line 14
            if ((((($context["key"] != "direccion") && ($context["key"] != "telefono")) && ($context["key"] != "coordinates")) && ($context["key"] != "tokenMap"))) {
                echo "                                
                                <div class=\"page-header\">
                                    <h3><b>";
                // line 16
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
                echo "</b></h3>
                                </div>
                                <div class=\"col-xs-12 col-sm-12\">
                                    <h5>";
                // line 19
                echo twig_escape_filter($this->env, $context["info"], "html", null, true);
                echo "</h5>
                                </div>&nbsp;
                            ";
            }
            // line 21
            echo "                        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </div>
                    <div class=\"col-xs-6 col-sm-6 text-center\"> 
                        <div class=\"page-header\">
                            <h3><b>Contáctenos</b></h3>
                            <div id=\"mapid\"></div>
                            <b><h4>Dirrección: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 28, $this->source); })()), "nosotros", [], "array"), "direccion", [], "array"), "html", null, true);
        echo "</h4></b>
                            <b><h4>Teléfono: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 29, $this->source); })()), "nosotros", [], "array"), "telefono", [], "array"), "html", null, true);
        echo "</h4></b>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    ";
        // line 36
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/General/nosotros.html.twig", 36)->display($context);
        echo "                                     
    ";
        // line 37
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/General/nosotros.html.twig", 37)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/General/nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  118 => 36,  108 => 29,  104 => 28,  97 => 23,  90 => 21,  84 => 19,  78 => 16,  73 => 14,  67 => 13,  56 => 5,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends './App/base.html.twig' %}
{% block body %}  
    <body id=\"container-page-registration\">
        {% include './App/navigator.html.twig' %} 
        <section id=\"form-registration\">
            <div class=\"container\">            
                <div class=\"row\">
                    <div class=\"page-header\">
                        <h1>Nosotros</h1>
                    </div>  
                    <div class=\"col-xs-6 col-sm-6 text-center\">
                        {% for key, info in parameters['nosotros'] %}                        
                            {% if key != 'direccion' and key != 'telefono' and key != 'coordinates' and key != 'tokenMap' %}                                
                                <div class=\"page-header\">
                                    <h3><b>{{ key|capitalize }}</b></h3>
                                </div>
                                <div class=\"col-xs-12 col-sm-12\">
                                    <h5>{{ info }}</h5>
                                </div>&nbsp;
                            {% endif %}                        
                        {% endfor %}
                    </div>
                    <div class=\"col-xs-6 col-sm-6 text-center\"> 
                        <div class=\"page-header\">
                            <h3><b>Contáctenos</b></h3>
                            <div id=\"mapid\"></div>
                            <b><h4>Dirrección: {{ parameters['nosotros']['direccion'] }}</h4></b>
                            <b><h4>Teléfono: {{ parameters['nosotros']['telefono'] }}</h4></b>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    {% include './App/footer.html.twig' %}                                     
    {% include 'General/general_modal.html.twig' %}
{% endblock %}
", "@Twigs/General/nosotros.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\nosotros.html.twig");
    }
}
