<?php

/* @Twigs/General/general.html.twig */
class __TwigTemplate_eaf15ce68500f24459842b00b922f2c1933eb15d2a89cc5fd2c828b3538bf244 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("./App/base.html.twig", "@Twigs/General/general.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/general.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twigs/General/general.html.twig"));

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
    <body id=\"container-page-index\">
        ";
        // line 5
        $this->loadTemplate("./App/navigator.html.twig", "@Twigs/General/general.html.twig", 5)->display($context);
        echo "   
        <div class=\"jumbotron\" id=\"jumbotron-index\">
            ";
        // line 7
        $context["count"] = 0;
        echo "                        
            <div id=\"myCarouselBanner\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                ";
        // line 10
        echo "                <ol class=\"carousel-indicators\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) || array_key_exists("banners", $context) ? $context["banners"] : (function () { throw new Twig_Error_Runtime('Variable "banners" does not exist.', 11, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 12
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                $context["active"] = "active";
            } else {
                $context["active"] = "";
            }
            // line 13
            echo "                        <li data-target=\"#carousel-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banner"], "codigoprod", []), "html", null, true);
            echo "\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\"></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </ol>

                ";
        // line 18
        echo "                <div class=\"carousel-inner slide-carousel\" role=\"listbox\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) || array_key_exists("banners", $context) ? $context["banners"] : (function () { throw new Twig_Error_Runtime('Variable "banners" does not exist.', 19, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 20
            echo "                        ";
            $context["images"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banner"], "Imagen", []), ";");
            // line 21
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                $context["active"] = "active";
            } else {
                $context["active"] = "";
            }
            // line 22
            echo "                        <div class=\"item ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\">                                                        
                            <img class=\"image-carousel\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("assets/img-products/" . twig_get_attribute($this->env, $this->source, $context["banner"], "codigoprod", [])) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 23, $this->source); })()), 0, [], "array")))), "html", null, true);
            echo "\">                            
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </div>
                ";
        // line 28
        echo "                <a class=\"left carousel-control slider-left\" href=\"#myCarouselBanner\" data-slide=\"prev\">
                  <i class=\"fa fa-chevron-left\"></i>
                </a>
                <a class=\"right carousel-control slider-right\" href=\"#myCarouselBanner\" data-slide=\"next\">
                  <i class=\"fa fa-chevron-right\"></i>
                </a>
            </div>
        </div>        
        <section id=\"new-prod-index\" class=\"section-home\">
            <div class=\"container\">                                
                <div class=\"page-header\">
                    <h1>Novedades <small>productos</small></h1>
                </div>
                <div class=\"row\">
                    ";
        // line 42
        if (twig_test_empty((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "                        <h2>No hay productos registrados en la tienda</h2>
                    ";
        } else {
            // line 45
            echo "                        ";
            $this->loadTemplate("./General/product.html.twig", "@Twigs/General/general.html.twig", 45)->display(array_merge($context, ["productos" => (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 45, $this->source); })())]));
            // line 46
            echo "                    ";
        }
        echo "                    
                </div>
            </div>
        </section>
        ";
        // line 50
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "session", []), "has", [0 => "nombreAdmin"], "method") != 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "session", []), "has", [0 => "nombreUser"], "method") != 1))) {
            // line 51
            echo "            <section id=\"reg-info-index\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 text-center\">
                            <article style=\"margin-top:20%;\">
                                <p><i class=\"fa fa-users fa-4x\"></i></p>
                                <h3>Registrate</h3>
                                <p>Registrese y hagase cliente de <span class=\"tittles-pages-logo\">Genezi</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
                                <p><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"btn btn-info btn-block\">Registrarse</a></p>   
                            </article>
                        </div>
                        <div class=\"col-xs-12 col-sm-6\">
                            <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Smart-TV-RegInfo.png"), "html", null, true);
            echo "\" alt=\"Smart-TV\" class=\"img-responsive\">
                        </div>
                    </div>
                </div>
            </section>
        ";
        }
        // line 69
        echo "        <section id=\"distribuidores-index\">
            <div class=\"container\">
                <div class=\"col-xs-12 col-sm-6\">

                </div>
                <div class=\"col-xs-12 col-sm-6\">

                </div>
                <div class=\"col-xs-12\">
                    <div class=\"page-header\">
                        <h1>Nuestras <small style=\"color: #333;\">Marcas</small></h1>
                    </div>
                    <br><br>
                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["imagesParameter"]) || array_key_exists("imagesParameter", $context) ? $context["imagesParameter"] : (function () { throw new Twig_Error_Runtime('Variable "imagesParameter" does not exist.', 82, $this->source); })()), "marcas", [])), "html", null, true);
        echo "\" alt=\"logos-marcas\" class=\"img-responsive\">
                </div>
            </div>
        </section>
        ";
        // line 86
        $this->loadTemplate("./App/footer.html.twig", "@Twigs/General/general.html.twig", 86)->display($context);
        echo "                                     
        ";
        // line 87
        $this->loadTemplate("General/general_modal.html.twig", "@Twigs/General/general.html.twig", 87)->display($context);
        // line 88
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twigs/General/general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 88,  260 => 87,  256 => 86,  249 => 82,  234 => 69,  225 => 63,  218 => 59,  208 => 51,  206 => 50,  198 => 46,  195 => 45,  191 => 43,  189 => 42,  173 => 28,  170 => 26,  153 => 23,  148 => 22,  141 => 21,  138 => 20,  121 => 19,  118 => 18,  114 => 15,  93 => 13,  86 => 12,  69 => 11,  66 => 10,  61 => 7,  56 => 5,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends './App/base.html.twig' %}
{% block body %}  
    <body id=\"container-page-index\">
        {% include './App/navigator.html.twig' %}   
        <div class=\"jumbotron\" id=\"jumbotron-index\">
            {% set count = 0 %}                        
            <div id=\"myCarouselBanner\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                {# Indicators #}
                <ol class=\"carousel-indicators\">
                    {% for banner in banners %}
                        {% if loop.first %}{% set active = 'active' %}{% else %}{% set active = '' %}{% endif %}
                        <li data-target=\"#carousel-{{ banner.codigoprod }}\" data-slide-to=\"{{ loop.index0 }}\" class=\"{{ active }}\"></li>
                    {% endfor %}
                </ol>

                {# Wrapper for slides #}
                <div class=\"carousel-inner slide-carousel\" role=\"listbox\">
                    {% for banner in banners %}
                        {% set images = banner.Imagen|split(';') %}
                        {% if loop.first %}{% set active = 'active' %}{% else %}{% set active = '' %}{% endif %}
                        <div class=\"item {{ active }}\">                                                        
                            <img class=\"image-carousel\" src=\"{{ absolute_url(asset('assets/img-products/'~banner.codigoprod~'/'~images[0])) }}\">                            
                        </div>
                    {% endfor %}
                </div>
                {# Controls #}
                <a class=\"left carousel-control slider-left\" href=\"#myCarouselBanner\" data-slide=\"prev\">
                  <i class=\"fa fa-chevron-left\"></i>
                </a>
                <a class=\"right carousel-control slider-right\" href=\"#myCarouselBanner\" data-slide=\"next\">
                  <i class=\"fa fa-chevron-right\"></i>
                </a>
            </div>
        </div>        
        <section id=\"new-prod-index\" class=\"section-home\">
            <div class=\"container\">                                
                <div class=\"page-header\">
                    <h1>Novedades <small>productos</small></h1>
                </div>
                <div class=\"row\">
                    {% if productos is empty %}
                        <h2>No hay productos registrados en la tienda</h2>
                    {% else %}
                        {% include './General/product.html.twig' with {'productos': productos} %}
                    {% endif %}                    
                </div>
            </div>
        </section>
        {% if app.session.has('nombreAdmin') != 1 and app.session.has('nombreUser') != 1 %}
            <section id=\"reg-info-index\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 text-center\">
                            <article style=\"margin-top:20%;\">
                                <p><i class=\"fa fa-users fa-4x\"></i></p>
                                <h3>Registrate</h3>
                                <p>Registrese y hagase cliente de <span class=\"tittles-pages-logo\">Genezi</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
                                <p><a href=\"{{ path('register') }}\" class=\"btn btn-info btn-block\">Registrarse</a></p>   
                            </article>
                        </div>
                        <div class=\"col-xs-12 col-sm-6\">
                            <img src=\"{{ asset('assets/img/Smart-TV-RegInfo.png') }}\" alt=\"Smart-TV\" class=\"img-responsive\">
                        </div>
                    </div>
                </div>
            </section>
        {% endif %}
        <section id=\"distribuidores-index\">
            <div class=\"container\">
                <div class=\"col-xs-12 col-sm-6\">

                </div>
                <div class=\"col-xs-12 col-sm-6\">

                </div>
                <div class=\"col-xs-12\">
                    <div class=\"page-header\">
                        <h1>Nuestras <small style=\"color: #333;\">Marcas</small></h1>
                    </div>
                    <br><br>
                    <img src=\"{{ asset(imagesParameter.marcas) }}\" alt=\"logos-marcas\" class=\"img-responsive\">
                </div>
            </div>
        </section>
        {% include './App/footer.html.twig' %}                                     
        {% include 'General/general_modal.html.twig' %}
    </body>
{% endblock %}

", "@Twigs/General/general.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\General\\general.html.twig");
    }
}
