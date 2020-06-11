<?php

/* ./Admin/productos.html.twig */
class __TwigTemplate_12232794a55996dad85895ae0e318b253ba46aac4d423a909add7765ecff0a2f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Admin/productos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Admin/productos.html.twig"));

        // line 2
        echo "<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Productos\">
    <div class=\"row\">
        <div class=\"form-row col-xs-12 col-sm-12\">            
            <div id=\"form-row add-product\">
                <h2 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                <form role=\"form\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_products");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group col-md-4\">
                        <label>Código de producto</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Código\" required maxlength=\"30\" name=\"prod-codigo\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Nombre de producto</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Nombre\" required maxlength=\"30\" name=\"prod-name\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Categoría</label>
                        <select class=\"form-control\" name=\"prod-categoria\">
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 20
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Nombre", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                                    
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Precio</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Precio\" required maxlength=\"20\" pattern=\"[0-9]{1,20}\" name=\"prod-price\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Modelo</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Modelo\" required maxlength=\"30\" name=\"prod-model\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Marca</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Marca\" required maxlength=\"30\" name=\"prod-marca\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Unidades disponibles</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Unidades\" required maxlength=\"20\" pattern=\"[0-9]{1,20}\" name=\"prod-stock\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Proveedor</label>
                        <select class=\"form-control\" name=\"prod-codigoP\">
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new Twig_Error_Runtime('Variable "proveedores" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 44
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "NombreProveedor", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                    
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Imagen de producto</label>
                        <input type=\"file\" name=\"img[]\" multiple>
                        <p class=\"help-block\">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                    </div>
                    <div class=\"form-group col-md-8\">
                        <label>Descripción</label>
                        <textarea name=\"prod-descripcion\" style=\"margin: 0px;width: 100%;height: 100%;\"></textarea>
                    </div>                    
                    <div class=\"form-group col-md-2\">
                        <label>Promoción</label>
                        <input type=\"number\" class=\"form-control\"  placeholder=\"Promoción\" max=\"100\" min=\"0\" value=\"0\" name=\"prod-promo\">               
                    </div>
                    <div class=\"form-group col-md-2\">
                        <label>In Home</label>
                        <input type=\"checkbox\" name=\"prod-home\">                        
                    </div>
                    <div class=\"form-group col-md-12\">
                        <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar a la tienda</button></p>
                        <div id=\"res-form-add\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                    </div>                    
                </form>
            </div>
        </div>        
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar datos de producto</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">Código</th>
                                <th class=\"text-center\">Nombre</th>
                                <th class=\"text-center\">Categoría</th>
                                <th class=\"text-center\">Precio</th>
                                <th class=\"text-center\">Modelo</th>
                                <th class=\"text-center\">Marca</th>
                                <th class=\"text-center\">Und</th>
                                <th class=\"text-center\">Proveedor</th>
                                <th class=\"text-center\">In Home</th>
                                <th class=\"text-center\">Promo</th>
                                <th class=\"text-center\">Descripción</th>
                                <th class=\"text-center\">Actualizar</th>
                                <th class=\"text-center\" colspan=\"2\">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 96, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            echo "                                        
                            <div id=\"update-product\">
                                <form method=\"post\" action=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_products");
            echo "\" id=\"res-update-product-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"hidden\" name=\"code-old-prod\" required=\"\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Id", []), "html", null, true);
            echo "\">
                                            <input class=\"form-control\" type=\"text\" name=\"code-prod\" maxlength=\"30\" required=\"\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "CodigoProd", []), "html", null, true);
            echo "\" readonly>
                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"prod-name\" maxlength=\"30\" required=\"\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "NombreProd", []), "html", null, true);
            echo "\"></td>
                                        <td>        
                                            <select class=\"form-control\" name=\"prod-category\">
                                                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                echo "                                                    
                                                    <option value=\"";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Id", []), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["categoria"], "codigocat", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idcategoria", []), "codigocat", []))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "Nombre", []), "html", null, true);
                echo "</option>;                                                                                            
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                            </select>
                                        </td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"price-prod\" required=\"\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Precio", []), "html", null, true);
            echo "\"></td>
                                        <td><input class=\"form-control\" type=\"tel\" name=\"model-prod\" required=\"\" maxlength=\"20\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Modelo", []), "html", null, true);
            echo "\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"marc-prod\" maxlength=\"30\" required=\"\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Marca", []), "html", null, true);
            echo "\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"stock-prod\" maxlength=\"30\" required=\"\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "Stock", []), "html", null, true);
            echo "\"></td>
                                        <td>                                                                                                                                               
                                            <select class=\"form-control\" name=\"prod-provider\">;
                                                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new Twig_Error_Runtime('Variable "proveedores" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
                echo " 
                                                    <option value=\"";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Id", []), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["proveedor"], "nitproveedor", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idproveedor", []), "nitproveedor", []))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "nombreproveedor", []), "html", null, true);
                echo "</option>;
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                                            </select>                                                                                            
                                        </td>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" name=\"prod-home\" ";
            // line 124
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "inhome", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["producto"], "inhome", [])))) {
                echo "checked";
            }
            echo ">      
                                        </td>
                                        <td>
                                            <input class=\"form-control\" type=\"number\" name=\"promo-prod\" min=\"0\" maxlength=\"30\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "inpromo", []), "html", null, true);
            echo "\">
                                        </td>
                                        <td>
                                            <textarea name=\"description-prod\" >";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "descripcion", []), "html", null, true);
            echo "</textarea>
                                        </td>
                                        <td class=\"text-center\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-files-UPR\" value=\"res-update-product-";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\" data-info=\"res-update-files-product-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">Fotos</button>
                                            <div id=\"res-update-files-product-";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\" class = \"load-files\" style=\"width: 100%; margin:0px; padding:0px;\"></div>
                                        </td>
                                        <td class=\"text-center\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-UPR\" value=\"res-update-product-";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">Actualizar</button>                                            
                                        </td> 
                                        <td class=\"text-center\">                                            
                                            <button type=\"submit\" class=\"btn btn-sm btn-danger button-INA\" value=\"res-update-product-";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">Eliminar</button>
                                        </td>                                         
                                        <td>
                                            <div id=\"res-update-product-";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\" style=\"width: 100%; margin:0px; padding:0px;\"></div>                                        
                                        </td>
                                    </tr>
                                </form>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
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
        return "./Admin/productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 148,  312 => 143,  306 => 140,  300 => 137,  294 => 134,  288 => 133,  282 => 130,  276 => 127,  268 => 124,  263 => 121,  249 => 119,  243 => 118,  237 => 115,  233 => 114,  229 => 113,  225 => 112,  221 => 110,  207 => 108,  201 => 107,  195 => 104,  190 => 102,  186 => 101,  178 => 98,  158 => 96,  105 => 45,  94 => 44,  90 => 43,  66 => 21,  55 => 20,  51 => 19,  36 => 7,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Productos\">
    <div class=\"row\">
        <div class=\"form-row col-xs-12 col-sm-12\">            
            <div id=\"form-row add-product\">
                <h2 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                <form role=\"form\" action=\"{{ path(\"create_products\") }}\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group col-md-4\">
                        <label>Código de producto</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Código\" required maxlength=\"30\" name=\"prod-codigo\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Nombre de producto</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Nombre\" required maxlength=\"30\" name=\"prod-name\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Categoría</label>
                        <select class=\"form-control\" name=\"prod-categoria\">
                            {% for categoria in categorias %}
                                <option value=\"{{ categoria.Id }}\">{{ categoria.Nombre }}</option>
                            {% endfor %}                                    
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Precio</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Precio\" required maxlength=\"20\" pattern=\"[0-9]{1,20}\" name=\"prod-price\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Modelo</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Modelo\" required maxlength=\"30\" name=\"prod-model\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Marca</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Marca\" required maxlength=\"30\" name=\"prod-marca\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Unidades disponibles</label>
                        <input type=\"text\" class=\"form-control\"  placeholder=\"Unidades\" required maxlength=\"20\" pattern=\"[0-9]{1,20}\" name=\"prod-stock\">
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Proveedor</label>
                        <select class=\"form-control\" name=\"prod-codigoP\">
                            {% for proveedor in proveedores %}
                                <option value=\"{{ proveedor.Id }}\">{{ proveedor.NombreProveedor }}</option>
                            {% endfor %}                                    
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Imagen de producto</label>
                        <input type=\"file\" name=\"img[]\" multiple>
                        <p class=\"help-block\">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                    </div>
                    <div class=\"form-group col-md-8\">
                        <label>Descripción</label>
                        <textarea name=\"prod-descripcion\" style=\"margin: 0px;width: 100%;height: 100%;\"></textarea>
                    </div>                    
                    <div class=\"form-group col-md-2\">
                        <label>Promoción</label>
                        <input type=\"number\" class=\"form-control\"  placeholder=\"Promoción\" max=\"100\" min=\"0\" value=\"0\" name=\"prod-promo\">               
                    </div>
                    <div class=\"form-group col-md-2\">
                        <label>In Home</label>
                        <input type=\"checkbox\" name=\"prod-home\">                        
                    </div>
                    <div class=\"form-group col-md-12\">
                        <p class=\"text-center\"><button type=\"submit\" class=\"btn btn-primary\">Agregar a la tienda</button></p>
                        <div id=\"res-form-add\" style=\"width: 100%; text-align: center; margin: 0;\"></div>
                    </div>                    
                </form>
            </div>
        </div>        
        <div class=\"col-xs-12\">
            <br><br>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading text-center\"><i class=\"fa fa-refresh fa-2x\"></i><h3>Actualizar datos de producto</h3></div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead class=\"\">
                            <tr>
                                <th class=\"text-center\">Código</th>
                                <th class=\"text-center\">Nombre</th>
                                <th class=\"text-center\">Categoría</th>
                                <th class=\"text-center\">Precio</th>
                                <th class=\"text-center\">Modelo</th>
                                <th class=\"text-center\">Marca</th>
                                <th class=\"text-center\">Und</th>
                                <th class=\"text-center\">Proveedor</th>
                                <th class=\"text-center\">In Home</th>
                                <th class=\"text-center\">Promo</th>
                                <th class=\"text-center\">Descripción</th>
                                <th class=\"text-center\">Actualizar</th>
                                <th class=\"text-center\" colspan=\"2\">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for producto in productos %}                                        
                            <div id=\"update-product\">
                                <form method=\"post\" action=\"{{ path(\"update_products\") }}\" id=\"res-update-product-{{ loop.index }}\">
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"hidden\" name=\"code-old-prod\" required=\"\" value=\"{{producto.Id}}\">
                                            <input class=\"form-control\" type=\"text\" name=\"code-prod\" maxlength=\"30\" required=\"\" value=\"{{producto.CodigoProd}}\" readonly>
                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"prod-name\" maxlength=\"30\" required=\"\" value=\"{{producto.NombreProd}}\"></td>
                                        <td>        
                                            <select class=\"form-control\" name=\"prod-category\">
                                                {% for categoria in categorias %}                                                    
                                                    <option value=\"{{categoria.Id}}\" {% if categoria.codigocat == producto.idcategoria.codigocat %}selected{% endif %}>{{categoria.Nombre}}</option>;                                                                                            
                                                {% endfor %}
                                            </select>
                                        </td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"price-prod\" required=\"\" value=\"{{producto.Precio}}\"></td>
                                        <td><input class=\"form-control\" type=\"tel\" name=\"model-prod\" required=\"\" maxlength=\"20\" value=\"{{producto.Modelo}}\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"marc-prod\" maxlength=\"30\" required=\"\" value=\"{{producto.Marca}}\"></td>
                                        <td><input class=\"form-control\" type=\"text-area\" name=\"stock-prod\" maxlength=\"30\" required=\"\" value=\"{{producto.Stock}}\"></td>
                                        <td>                                                                                                                                               
                                            <select class=\"form-control\" name=\"prod-provider\">;
                                                {% for proveedor in proveedores %} 
                                                    <option value=\"{{proveedor.Id}}\" {% if proveedor.nitproveedor == producto.idproveedor.nitproveedor%}selected{% endif %}>{{proveedor.nombreproveedor}}</option>;
                                                {% endfor %}
                                            </select>                                                                                            
                                        </td>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" name=\"prod-home\" {% if producto.inhome is defined and producto.inhome is not empty %}checked{% endif %}>      
                                        </td>
                                        <td>
                                            <input class=\"form-control\" type=\"number\" name=\"promo-prod\" min=\"0\" maxlength=\"30\" value=\"{{producto.inpromo}}\">
                                        </td>
                                        <td>
                                            <textarea name=\"description-prod\" >{{producto.descripcion}}</textarea>
                                        </td>
                                        <td class=\"text-center\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-files-UPR\" value=\"res-update-product-{{ loop.index }}\" data-info=\"res-update-files-product-{{ loop.index }}\">Fotos</button>
                                            <div id=\"res-update-files-product-{{ loop.index }}\" class = \"load-files\" style=\"width: 100%; margin:0px; padding:0px;\"></div>
                                        </td>
                                        <td class=\"text-center\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary button-UPR\" value=\"res-update-product-{{ loop.index }}\">Actualizar</button>                                            
                                        </td> 
                                        <td class=\"text-center\">                                            
                                            <button type=\"submit\" class=\"btn btn-sm btn-danger button-INA\" value=\"res-update-product-{{ loop.index }}\">Eliminar</button>
                                        </td>                                         
                                        <td>
                                            <div id=\"res-update-product-{{ loop.index }}\" style=\"width: 100%; margin:0px; padding:0px;\"></div>                                        
                                        </td>
                                    </tr>
                                </form>
                            </div>
                        {% endfor %}                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
", "./Admin/productos.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Admin\\productos.html.twig");
    }
}
