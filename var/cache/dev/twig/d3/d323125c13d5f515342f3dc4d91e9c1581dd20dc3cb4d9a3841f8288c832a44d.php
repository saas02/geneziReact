<?php

/* ./App/base.html.twig */
class __TwigTemplate_3a5962f90b739a39d2cb03e6b565ef0911f057362dd59e4c4ae5c066f59ac27d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./App/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">        
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png")), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png")), "html", null, true);
        echo "\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Encuentra productos para motos y vehiculos con precios competitivos y de alta calidad\">
        <meta name=\"title\" content=\"Genezi | genezi.com\">
        <meta name=\"keywords\" content=\"iluminacion, bombillos, led, luces, motos, carros\"> 
        <meta name=\"theme-color\" content=\"#ffffff\">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name=\"viewport\" content=\"width=device-width\" />        
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    </head>
    <body>
    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "        
</body>    
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genezi | Tecnologia Led";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/normalize.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />  
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/media.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />  
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/trumbowyg.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />  
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\" />
            ";
        // line 23
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "        
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.validate.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/additional-methods.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/trumbowyg.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/trumbowyg.upload.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
        <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"></script>
        
        ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "environment", []) != "dev")) {
            // line 38
            echo "            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-147220450-1\"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-147220450-1');
            </script>
        ";
        }
        // line 48
        echo "        
        ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "nosotros", [], "array", false, true), "coordinates", [], "array", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "general_info"))) {
            // line 50
            echo "            <script>                
                var coordinates = \"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 51, $this->source); })()), "nosotros", [], "array"), "coordinates", [], "array"), "html", null, true);
            echo "\";
                var direccion = \"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 52, $this->source); })()), "nosotros", [], "array"), "direccion", [], "array"), "html", null, true);
            echo "\";
                var telefono = \"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 53, $this->source); })()), "nosotros", [], "array"), "telefono", [], "array"), "html", null, true);
            echo "\";
                var token = \"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 54, $this->source); })()), "nosotros", [], "array"), "tokenMap", [], "array"), "html", null, true);
            echo "\";
                coordinates = coordinates.split(\",\");                
                // Initialize and add the map
                var mymap = L.map('mapid').setView([parseFloat(coordinates[0]), parseFloat(coordinates[1])], 16);
                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token='+token, {
                        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox.streets',
                        accessToken: token
                }).addTo(mymap);
                var marker = L.marker([parseFloat(coordinates[0]), parseFloat(coordinates[1])]).addTo(mymap);
                var popup = L.popup()
                .setLatLng([parseFloat(coordinates[0]), parseFloat(coordinates[1])])
                .setContent(\"Genezi Shop <br> \"+direccion+\" <br>\"+telefono)
                .openOn(mymap);
            </script>
        ";
        }
        // line 71
        echo "        
        <script>
                var baseUrl = '";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/")), "html", null, true);
        echo "';                
        </script>        
        ";
        // line 75
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "formulario") && (isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context)))) {
            // line 76
            echo "            <script type=\"text/javascript\" src=\"https://maf.pagosonline.net/ws/fp/tags.js?id=";
            echo twig_escape_filter($this->env, (isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context) ? $context["deviceSessionId"] : (function () { throw new Twig_Error_Runtime('Variable "deviceSessionId" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "80200\"></script>
            <noscript>
                <iframe style=\"width: 100px; height: 100px; border: 0; position: absolute; top: -5000px;\" src=\"https://maf.pagosonline.net/ws/fp/tags.js?id=";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context) ? $context["deviceSessionId"] : (function () { throw new Twig_Error_Runtime('Variable "deviceSessionId" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "80200\"></iframe>
            </noscript>
        ";
        }
        // line 81
        echo "        
        ";
        // line 82
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "./App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 82,  275 => 81,  269 => 78,  263 => 76,  261 => 75,  256 => 73,  252 => 71,  232 => 54,  228 => 53,  224 => 52,  220 => 51,  217 => 50,  215 => 49,  212 => 48,  200 => 38,  198 => 37,  192 => 34,  188 => 33,  184 => 32,  180 => 31,  176 => 30,  173 => 29,  164 => 28,  147 => 27,  135 => 23,  130 => 21,  126 => 20,  122 => 19,  118 => 18,  114 => 17,  109 => 16,  100 => 15,  82 => 8,  69 => 83,  66 => 28,  64 => 27,  60 => 25,  58 => 15,  48 => 8,  43 => 6,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">        
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ absolute_url(asset('assets/img/logo.png')) }}\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ absolute_url(asset('assets/img/logo.png')) }}\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>{% block title %}Genezi | Tecnologia Led{% endblock %}</title>
        <meta name=\"description\" content=\"Encuentra productos para motos y vehiculos con precios competitivos y de alta calidad\">
        <meta name=\"title\" content=\"Genezi | genezi.com\">
        <meta name=\"keywords\" content=\"iluminacion, bombillos, led, luces, motos, carros\"> 
        <meta name=\"theme-color\" content=\"#ffffff\">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name=\"viewport\" content=\"width=device-width\" />        
        {% block stylesheets %}
            <link href=\"{{ absolute_url(asset('assets/css/font-awesome.min.css')) }}\" rel=\"stylesheet\" />
            <link href=\"{{ absolute_url(asset('assets/css/normalize.css')) }}\" rel=\"stylesheet\" />
            <link href=\"{{ absolute_url(asset('assets/css/bootstrap.min.css')) }}\" rel=\"stylesheet\" />
            <link href=\"{{ absolute_url(asset('assets/css/style.css')) }}\" rel=\"stylesheet\" />  
            <link href=\"{{ absolute_url(asset('assets/css/media.css')) }}\" rel=\"stylesheet\" />  
            <link href=\"{{ absolute_url(asset('assets/css/trumbowyg.css')) }}\" rel=\"stylesheet\" />  
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\" />
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body>
    {% block body %}{% endblock %}
    {% block javascripts %}
        
        <script src=\"{{ absolute_url(asset('assets/js/jquery.min.js')) }}\" type=\"text/javascript\"></script>
        <script src=\"{{ absolute_url(asset('assets/js/jquery.validate.js')) }}\" type=\"text/javascript\"></script>
        <script src=\"{{ absolute_url(asset('assets/js/additional-methods.js')) }}\" type=\"text/javascript\"></script>
        <script src=\"{{ absolute_url(asset('assets/js/trumbowyg.js')) }}\" type=\"text/javascript\"></script>
        <script src=\"{{ absolute_url(asset('assets/js/trumbowyg.upload.js')) }}\" type=\"text/javascript\"></script> 
        <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"></script>
        
        {% if app.environment != 'dev' %}
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-147220450-1\"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-147220450-1');
            </script>
        {% endif %}
        
        {% if parameters['nosotros']['coordinates'] is defined and app.request.get('_route') == 'general_info' %}
            <script>                
                var coordinates = \"{{ parameters['nosotros']['coordinates'] }}\";
                var direccion = \"{{ parameters['nosotros']['direccion'] }}\";
                var telefono = \"{{ parameters['nosotros']['telefono'] }}\";
                var token = \"{{ parameters['nosotros']['tokenMap'] }}\";
                coordinates = coordinates.split(\",\");                
                // Initialize and add the map
                var mymap = L.map('mapid').setView([parseFloat(coordinates[0]), parseFloat(coordinates[1])], 16);
                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token='+token, {
                        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox.streets',
                        accessToken: token
                }).addTo(mymap);
                var marker = L.marker([parseFloat(coordinates[0]), parseFloat(coordinates[1])]).addTo(mymap);
                var popup = L.popup()
                .setLatLng([parseFloat(coordinates[0]), parseFloat(coordinates[1])])
                .setContent(\"Genezi Shop <br> \"+direccion+\" <br>\"+telefono)
                .openOn(mymap);
            </script>
        {% endif %}
        
        <script>
                var baseUrl = '{{ absolute_url(asset('/')) }}';                
        </script>        
        {% if app.request.get('_route') == 'formulario' and deviceSessionId is defined %}
            <script type=\"text/javascript\" src=\"https://maf.pagosonline.net/ws/fp/tags.js?id={{deviceSessionId}}80200\"></script>
            <noscript>
                <iframe style=\"width: 100px; height: 100px; border: 0; position: absolute; top: -5000px;\" src=\"https://maf.pagosonline.net/ws/fp/tags.js?id={{deviceSessionId}}80200\"></iframe>
            </noscript>
        {% endif %}
        
        {{ encore_entry_script_tags('app') }}
    {% endblock %}        
</body>    
</html>
", "./App/base.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\App\\base.html.twig");
    }
}
