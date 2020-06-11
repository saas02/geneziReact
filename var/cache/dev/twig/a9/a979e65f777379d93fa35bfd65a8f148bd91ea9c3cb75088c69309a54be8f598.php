<?php

/* ./Orders/facturation_form.html.twig */
class __TwigTemplate_6745986509b1e55b3271332673bf40e6adbe2040ea687a3cc0df5ed2d6fcaba0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Orders/facturation_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Orders/facturation_form.html.twig"));

        // line 1
        echo "<h3 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>Datos de Facturacion</h3>
<div class=\"form-group col-md-6\">
    <label for=\"PD_doc_type\">Tipo de documento:</label>
    <select name=\"PD_doc_type\" id=\"PD_doc_type\" class=\"form-control\">
        <option value=\"CC\">Cedula De Ciudadania</option>
        <option value=\"PPN\">Pasaporte</option>
        <option value=\"NIT\">Nit</option>
        <option value=\"RUT\">Rut</option>
        <option value=\"LIC\">Licencia De Conduccion</option>
        <option value=\"CE\">Cedula De Extranjeria</option>
        <option value=\"TI\">Tarjeta De Identidad</option>
    </select>
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_doc_num\">Número de identificación</label>                    
    <input type=\"text\" name=\"PD_doc_num\" id=\"PD_doc_num\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 16, $this->source); })()), "nit", []), "html", null, true);
        echo "\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_name\">Nombres</label>    
    <input type=\"text\" name=\"PD_name\" id=\"PD_name\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 20, $this->source); })()), "nombrecompleto", []), "html", null, true);
        echo "\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_last_name\">Apellidos</label>                    
    <input type=\"text\" name=\"PD_last_name\" id=\"PD_last_name\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 24, $this->source); })()), "apellido", []), "html", null, true);
        echo "\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_email\">Correo electrónico</label>    
    <input type=\"text\" name=\"PD_email\" id=\"PD_email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 28, $this->source); })()), "email", []), "html", null, true);
        echo "\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_phone\">Teléfono</label>                    
    <input type=\"text\" name=\"PD_phone\" id=\"PD_phone\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 32, $this->source); })()), "telefono", []), "html", null, true);
        echo "\" readonly class=\"form-control\">
</div>
                    
<div class=\"form-group col-md-6\">              
    <label for=\"PD_address\">Dirección</label>                    
    <input type=\"text\" name=\"PD_address\" id=\"PD_address\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 37, $this->source); })()), "direccion", []), "html", null, true);
        echo "\" readonly class=\"form-control\">
</div>

<div class=\"form-group col-md-12\">     
    <div class=\"jumbotron\">
        <a id=\"_submitPayment\" class=\"btn btn-primary\" name=\"_submit\" type=\"submit\" value=\"Comprar\">TOTAL A PAGAR: \$ ";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shoping"]) || array_key_exists("shoping", $context) ? $context["shoping"] : (function () { throw new Twig_Error_Runtime('Variable "shoping" does not exist.', 42, $this->source); })()), "total", [], "array"), 0, ".", "."), "html", null, true);
        echo "</a>
    </div>    
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./Orders/facturation_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  82 => 37,  74 => 32,  67 => 28,  60 => 24,  53 => 20,  46 => 16,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>Datos de Facturacion</h3>
<div class=\"form-group col-md-6\">
    <label for=\"PD_doc_type\">Tipo de documento:</label>
    <select name=\"PD_doc_type\" id=\"PD_doc_type\" class=\"form-control\">
        <option value=\"CC\">Cedula De Ciudadania</option>
        <option value=\"PPN\">Pasaporte</option>
        <option value=\"NIT\">Nit</option>
        <option value=\"RUT\">Rut</option>
        <option value=\"LIC\">Licencia De Conduccion</option>
        <option value=\"CE\">Cedula De Extranjeria</option>
        <option value=\"TI\">Tarjeta De Identidad</option>
    </select>
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_doc_num\">Número de identificación</label>                    
    <input type=\"text\" name=\"PD_doc_num\" id=\"PD_doc_num\" value=\"{{cliente.nit}}\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_name\">Nombres</label>    
    <input type=\"text\" name=\"PD_name\" id=\"PD_name\" value=\"{{cliente.nombrecompleto}}\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_last_name\">Apellidos</label>                    
    <input type=\"text\" name=\"PD_last_name\" id=\"PD_last_name\" value=\"{{cliente.apellido}}\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_email\">Correo electrónico</label>    
    <input type=\"text\" name=\"PD_email\" id=\"PD_email\" value=\"{{cliente.email}}\" readonly class=\"form-control\">
</div>
<div class=\"form-group col-md-6\">
    <label for=\"PD_phone\">Teléfono</label>                    
    <input type=\"text\" name=\"PD_phone\" id=\"PD_phone\" value=\"{{cliente.telefono}}\" readonly class=\"form-control\">
</div>
                    
<div class=\"form-group col-md-6\">              
    <label for=\"PD_address\">Dirección</label>                    
    <input type=\"text\" name=\"PD_address\" id=\"PD_address\" value=\"{{cliente.direccion}}\" readonly class=\"form-control\">
</div>

<div class=\"form-group col-md-12\">     
    <div class=\"jumbotron\">
        <a id=\"_submitPayment\" class=\"btn btn-primary\" name=\"_submit\" type=\"submit\" value=\"Comprar\">TOTAL A PAGAR: \$ {{ shoping['total']|number_format(0, '.', '.') }}</a>
    </div>    
</div>
", "./Orders/facturation_form.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Orders\\facturation_form.html.twig");
    }
}
