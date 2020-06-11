<?php

/* ./Admin/pedidos.html.twig */
class __TwigTemplate_636aa5a79ee518d90270df9aad5f6f7216cff3269f71135e4fda67ef9e564821 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Admin/pedidos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Admin/pedidos.html.twig"));

        // line 2
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Pedidos\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <br><br>
            ";
        // line 23
        echo "            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar estado de pedido</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">#</th>
                                <th class=\"text-center\">Fecha</th>
                                <th class=\"text-center\">Cliente</th>                                
                                <th class=\"text-center\">Total</th>
                                <th class=\"text-center\">Estado</th>
                                <th class=\"text-center\">Productos</th>
                                <th class=\"text-center\">Cambiar de Estado</th>
                            </tr>
                        </thead>
                        <tbody>                                                                                    
                            <div id=\"update-pedido\">
                                <form method=\"post\" action=\"process/updatePedido.php\" id=\"res-update-pedido-'.\$upp.'\">
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventas"]) || array_key_exists("ventas", $context) ? $context["ventas"] : (function () { throw new Twig_Error_Runtime('Variable "ventas" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 42
            echo "                                        <tr>
                                            <td>
                                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "referenceCode", []), "html", null, true);
            echo " 
                                            </td>
                                            <td>
                                                ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "fecha", []), "Y-m-d h:m:s"), "html", null, true);
            echo " 
                                            </td>
                                            <td>
                                                ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "cliente", []), "html", null, true);
            echo "<br>
                                                ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "email", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "phone", []), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "amount", []), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venta"], "status", []), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["venta"], "productos", []));
            foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
                // line 61
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "nombre", []), "html", null, true);
                echo "<br>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                                
                                            </td>
                                            <td>                                                
                                                <select class=\"form-control\" name=\"pedido-status\">
                                                    <option value=\"\">Cambiar Estado</option>  
                                                    ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["venta"], "status", []) == "approved")) {
                // line 68
                echo "                                                        <option value=\"Pendiente\">Entregado</option>                                                  
                                                        <option value=\"Pendiente\">Devuelto</option>
                                                    ";
            }
            // line 71
            echo "                                                </select>                                                
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                ";
        // line 103
        echo "                                </form>
                            </div>                                      
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
        return "./Admin/pedidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 103,  137 => 75,  128 => 71,  123 => 68,  121 => 67,  114 => 62,  103 => 61,  99 => 60,  93 => 57,  87 => 54,  79 => 51,  75 => 50,  69 => 47,  63 => 44,  59 => 42,  55 => 41,  35 => 23,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Pedidos\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <br><br>
            {#<div id=\"del-pedido\">
                <h2 class=\"text-danger text-center\"><small><i class=\"fa fa-trash-o\"></i></small>&nbsp;&nbsp;Eliminar pedido</h2>
                <form action=\"process/delPedido.php\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <label>Pedidos</label>
                        <select class=\"form-control\" name=\"num-pedido\">
                            {% for venta in ventas %}
                                <option value=\"{{venta.id}}\">Pedido #{{venta.referenceCode}} - Estado({{venta.status}})</option>
                            {% endfor %}                            
                        </select>
                    </div>
                    <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-danger\">Eliminar pedido</button></p>
                    <br>
                    <div id=\"res-form-del-pedido\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                </form>
            </div>
            <br><br>#}
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar estado de pedido</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">#</th>
                                <th class=\"text-center\">Fecha</th>
                                <th class=\"text-center\">Cliente</th>                                
                                <th class=\"text-center\">Total</th>
                                <th class=\"text-center\">Estado</th>
                                <th class=\"text-center\">Productos</th>
                                <th class=\"text-center\">Cambiar de Estado</th>
                            </tr>
                        </thead>
                        <tbody>                                                                                    
                            <div id=\"update-pedido\">
                                <form method=\"post\" action=\"process/updatePedido.php\" id=\"res-update-pedido-'.\$upp.'\">
                                    {% for venta in ventas %}
                                        <tr>
                                            <td>
                                                {{ venta.referenceCode }} 
                                            </td>
                                            <td>
                                                {{ venta.fecha|date(\"Y-m-d h:m:s\") }} 
                                            </td>
                                            <td>
                                                {{ venta.cliente }}<br>
                                                {{ venta.email }} - {{ venta.phone }}
                                            </td>
                                            <td>
                                                {{ venta.amount }}
                                            </td>
                                            <td>
                                                {{ venta.status }}
                                            </td>
                                            <td>
                                                {% for productos in venta.productos %}
                                                    {{ productos.cantidad }} {{ productos.nombre }}<br>
                                                {% endfor %}                                                
                                            </td>
                                            <td>                                                
                                                <select class=\"form-control\" name=\"pedido-status\">
                                                    <option value=\"\">Cambiar Estado</option>  
                                                    {% if venta.status == \"approved\" %}
                                                        <option value=\"Pendiente\">Entregado</option>                                                  
                                                        <option value=\"Pendiente\">Devuelto</option>
                                                    {% endif %}
                                                </select>                                                
                                            </td>
                                        </tr>
                                    {% endfor %}
                                {#<tr>
                                    <td>'.\$peU['NumPedido'].'<input type=\"hidden\" name=\"num-pedido\" value=\"'.\$peU['NumPedido'].'\"></td>
                                    <td>'.\$peU['Fecha'].'</td>
                                    <td>';
                                        \$conUs= ejecutarSQL::consultar(\"select * from cliente where NIT='\".\$peU['NIT'].\"'\");
                                        while(\$UsP=mysql_fetch_array(\$conUs)){
                                            echo \$UsP['Nombre'];
                                        }
                            echo   '</td>
                                    <td>'.\$peU['Descuento'].'%</td>
                                    <td>'.\$peU['TotalPagar'].'</td>
                                    <td>
                                        <select class=\"form-control\" name=\"pedido-status\">';
                                            if(\$peU['Estado']==\"Pendiente\"){
                                               echo '<option value=\"Pendiente\">Pendiente</option>'; 
                                               echo '<option value=\"Entregado\">Entregado</option>'; 
                                            }
                                            if(\$peU['Estado']==\"Entregado\"){
                                               echo '<option value=\"Entregado\">Entregado</option>';
                                               echo '<option value=\"Pendiente\">Pendiente</option>'; 
                                            }
                            echo        '</select>
                                    </td>
                                    <td class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-primary button-UPPE\" value=\"res-update-pedido-'.\$upp.'\">Actualizar</button>
                                        <div id=\"res-update-pedido-'.\$upp.'\" style=\"width: 100%; margin:0px; padding:0px;\"></div>
                                    </td>
                                </tr>#}
                                </form>
                            </div>                                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
", "./Admin/pedidos.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\pedidos.html.twig");
    }
}
