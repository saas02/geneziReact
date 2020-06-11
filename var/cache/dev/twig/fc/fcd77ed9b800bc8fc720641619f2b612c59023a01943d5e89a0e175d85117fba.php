<?php

/* ./Admin/marcas.html.twig */
class __TwigTemplate_b6378e31451f30f78a563d5927913a09a7e09af14b4ed38d0a487be137db8a1b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Admin/marcas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Admin/marcas.html.twig"));

        // line 2
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"ImgMarcas\">
    <div class=\"row\">
        <div class=\"form-row col-xs-12 col-sm-12\">            
            <div id=\"form-row add-product\">
                <h2 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar imagen (módulo de nuestras marcas)</h2>
                <form role=\"form\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_images_parameters");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">                    
                    <div class=\"form-group col-md-4\">
                        <label>Imagen de marcas</label>
                        <input type=\"file\" name=\"img[]\" required multiple>
                        <input type=\"hidden\" name=\"marcas\" value=\"1\"> 
                        <p class=\"help-block\">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                    </div>                    
                    <div class=\"form-group col-md-12\">
                        <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar imagen</button></p>
                        <div id=\"res-form-add\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                    </div>                    
                </form>
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
        return "./Admin/marcas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"ImgMarcas\">
    <div class=\"row\">
        <div class=\"form-row col-xs-12 col-sm-12\">            
            <div id=\"form-row add-product\">
                <h2 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar imagen (módulo de nuestras marcas)</h2>
                <form role=\"form\" action=\"{{ path(\"update_images_parameters\") }}\" method=\"post\" enctype=\"multipart/form-data\">                    
                    <div class=\"form-group col-md-4\">
                        <label>Imagen de marcas</label>
                        <input type=\"file\" name=\"img[]\" required multiple>
                        <input type=\"hidden\" name=\"marcas\" value=\"1\"> 
                        <p class=\"help-block\">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                    </div>                    
                    <div class=\"form-group col-md-12\">
                        <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar imagen</button></p>
                        <div id=\"res-form-add\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                    </div>                    
                </form>
            </div>
        </div>        
    </div>
</div>

", "./Admin/marcas.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\marcas.html.twig");
    }
}
