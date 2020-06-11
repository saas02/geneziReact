<?php

/* ./App/base.html.twig */
class __TwigTemplate_21cade1bd0d4e2b1c1f6ca89a9956e2dc1d1deeae2abc89ea6e1af98e07f6686 extends Twig_Template
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
        echo "    
    <!-- Load Facebook SDK for JavaScript -->        
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo " 
    <div id=\"fb-root\"></div>    
    <!-- Your customer chat code -->
    <div class=\"fb-customerchat\"
      attribution=install_email
      page_id=\"109697087286952\"
      theme_color=\"#13cf13\"
        logged_in_greeting=\"Hola, &#xbf;como podemos ayudarte?\"
        logged_out_greeting=\"Hola, &#xbf;como podemos ayudarte?\">
    </div>
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

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "        <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v6.0'
              });
            };

            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.validate.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/additional-methods.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/trumbowyg.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/trumbowyg.upload.js")), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
        <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"></script>
        
        ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->source); })()), "environment", []) != "dev")) {
            // line 55
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
        // line 65
        echo "        
        ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "nosotros", [], "array", false, true), "coordinates", [], "array", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "general_info"))) {
            // line 67
            echo "            <script>                
                var coordinates = \"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 68, $this->source); })()), "nosotros", [], "array"), "coordinates", [], "array"), "html", null, true);
            echo "\";
                var direccion = \"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 69, $this->source); })()), "nosotros", [], "array"), "direccion", [], "array"), "html", null, true);
            echo "\";
                var telefono = \"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 70, $this->source); })()), "nosotros", [], "array"), "telefono", [], "array"), "html", null, true);
            echo "\";
                var token = \"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 71, $this->source); })()), "nosotros", [], "array"), "tokenMap", [], "array"), "html", null, true);
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
        // line 88
        echo "        
        <script>
                var baseUrl = '";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/")), "html", null, true);
        echo "';                
        </script>        
        ";
        // line 92
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "formulario") && (isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context)))) {
            // line 93
            echo "            <script type=\"text/javascript\" src=\"https://maf.pagosonline.net/ws/fp/tags.js?id=";
            echo twig_escape_filter($this->env, (isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context) ? $context["deviceSessionId"] : (function () { throw new Twig_Error_Runtime('Variable "deviceSessionId" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "80200\"></script>
            <noscript>
                <iframe style=\"width: 100px; height: 100px; border: 0; position: absolute; top: -5000px;\" src=\"https://maf.pagosonline.net/ws/fp/tags.js?id=";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["deviceSessionId"]) || array_key_exists("deviceSessionId", $context) ? $context["deviceSessionId"] : (function () { throw new Twig_Error_Runtime('Variable "deviceSessionId" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "80200\"></iframe>
            </noscript>
        ";
        }
        // line 98
        echo "        
        ";
        // line 99
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
        return array (  305 => 99,  302 => 98,  296 => 95,  290 => 93,  288 => 92,  283 => 90,  279 => 88,  259 => 71,  255 => 70,  251 => 69,  247 => 68,  244 => 67,  242 => 66,  239 => 65,  227 => 55,  225 => 54,  219 => 51,  215 => 50,  211 => 49,  207 => 48,  203 => 47,  185 => 31,  176 => 30,  159 => 27,  147 => 23,  142 => 21,  138 => 20,  134 => 19,  130 => 18,  126 => 17,  121 => 16,  112 => 15,  94 => 8,  72 => 100,  70 => 30,  66 => 28,  64 => 27,  60 => 25,  58 => 15,  48 => 8,  43 => 6,  39 => 5,  33 => 1,);
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
    
    <!-- Load Facebook SDK for JavaScript -->        
    {% block javascripts %}
        <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v6.0'
              });
            };

            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
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
    <div id=\"fb-root\"></div>    
    <!-- Your customer chat code -->
    <div class=\"fb-customerchat\"
      attribution=install_email
      page_id=\"109697087286952\"
      theme_color=\"#13cf13\"
        logged_in_greeting=\"Hola, &#xbf;como podemos ayudarte?\"
        logged_out_greeting=\"Hola, &#xbf;como podemos ayudarte?\">
    </div>
</body>    
</html>
", "./App/base.html.twig", "C:\\xampp\\htdocs\\geneziSymReact\\src\\TwigsBundle\\Resources\\views\\App\\base.html.twig");
    }
}
