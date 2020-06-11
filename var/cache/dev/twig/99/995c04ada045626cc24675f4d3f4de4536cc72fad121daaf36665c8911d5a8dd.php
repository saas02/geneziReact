<?php

/* @Twigs/App/cotizacion.html.twig */
class __TwigTemplate_490d9fd3cb72638126a8a7e2eb7276bfb95b4ec701f9aff567bf570b9fed1b6a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("./App/base_email.html.twig", "@Twigs/App/cotizacion.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "./App/base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/App/cotizacion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/App/cotizacion.html.twig"));

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

        // line 3
        echo "    <section id=\"infoproduct\">
        <div class=\"container\">  
            <div class=\"col-xs-4\">
                <figure class=\"logo-navbar\"></figure>
                <p class=\"text-navbar tittles-pages-logo\">Genezi Tecnología Led</p>
            </div>
            <div class=\"table-title\">
                <h3>Cotización</h3>
            </div>                            
            <table class=\"table-fill\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Datos de cotización</th>                        
                    </tr>
                </thead>
                <tbody class=\"table-hover\">
                    <tr>
                        <td class=\"text-left\">
                            <label>Nombre:</label> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 21, $this->source); })()), "name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 21, $this->source); })()), "surname", []), "html", null, true);
        echo "
                        </td>                        
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Telefono:</label>  ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 26, $this->source); })()), "phone", []), "html", null, true);
        echo "
                        </td>                        
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Email:</label> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 31, $this->source); })()), "email", []), "html", null, true);
        echo "
                        </td>                        
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Mensaje:</label>  ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 36, $this->source); })()), "observations", []);
        echo "
                        </td>                        
                    </tr>                    
                </tbody>
            </table>                
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/App/cotizacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  91 => 31,  83 => 26,  73 => 21,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends './App/base_email.html.twig' %}
{% block body %}
    <section id=\"infoproduct\">
        <div class=\"container\">  
            <div class=\"col-xs-4\">
                <figure class=\"logo-navbar\"></figure>
                <p class=\"text-navbar tittles-pages-logo\">Genezi Tecnología Led</p>
            </div>
            <div class=\"table-title\">
                <h3>Cotización</h3>
            </div>                            
            <table class=\"table-fill\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Datos de cotización</th>                        
                    </tr>
                </thead>
                <tbody class=\"table-hover\">
                    <tr>
                        <td class=\"text-left\">
                            <label>Nombre:</label> {{info.name}} {{info.surname}}
                        </td>                        
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Telefono:</label>  {{info.phone}}
                        </td>                        
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Email:</label> {{ info.email }}
                        </td>                        
                    </tr>
                    <tr>
                        <td class=\"text-left\">
                            <label>Mensaje:</label>  {{info.observations|raw}}
                        </td>                        
                    </tr>                    
                </tbody>
            </table>                
        </div>
    </section>
{% endblock %}


", "@Twigs/App/cotizacion.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\App\\cotizacion.html.twig");
    }
}
