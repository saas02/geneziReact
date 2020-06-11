<?php

/* ./Orders/payment_form.html.twig */
class __TwigTemplate_d68356558436146086c1db67c05ba32bc9d8f86d770f8e2f8b554503fdc93779 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Orders/payment_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./Orders/payment_form.html.twig"));

        // line 1
        echo "
<h3 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>Datos de Pago</h3>
<input type=\"hidden\" name=\"PD[type]\" id=\"PD_type\" value=\"p2p\">     
<div class=\"form-group col-md-12\">        
    <label for=\"PD_first_name\">Nombre (como aparece en la tarjeta)</label>        
    <input type=\"text\" name=\"PD_first_name\" id=\"PD_first_name\" value=\"\" class=\"form-control\">
</div>
<div class=\"form-group col-md-12\">        
    <label for=\"PD_card_num\">Número de la tarjeta</label>        
    <input type=\"text\" name=\"PD_card_num\" id=\"PD_card_num\" value=\"\" class=\"form-control\">
</div>    
<div class=\"form-group col-md-12\">
    <label for=\"PD_franquise\">Tipo de tarjeta</label>
    <select name=\"PD_franquise\" id=\"PD_franquise\" class=\"form-control\">
        <option value=\"VS\">Visa</option>
        <option value=\"MC\">Mastercard</option>
        <option value=\"DN\">Diners</option>
        <option value=\"AM\">American Express</option>
        <option value=\"CS\">Codensa</option>
        <option value=\"EX\">Tarjeta Exito</option>
        <option value=\"AK\">Tarjeta Alkosto</option>
    </select>
</div>
<div class=\"form-group col-md-4\">
    <label for=\"PD_card_code\">Cuotas</label>                        
    <select name=\"PD_differed\" id=\"PD_differed\" class=\"form-control\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
        <option value=\"11\">11</option>
        <option value=\"12\">12</option>
        <option value=\"13\">13</option>
        <option value=\"14\">14</option>
        <option value=\"15\">15</option>
        <option value=\"16\">16</option>
        <option value=\"17\">17</option>
        <option value=\"18\">18</option>
        <option value=\"19\">19</option>
        <option value=\"20\">20</option>
        <option value=\"21\">21</option>
        <option value=\"22\">22</option>
        <option value=\"23\">23</option>
        <option value=\"24\">24</option>
        <option value=\"25\">25</option>
        <option value=\"26\">26</option>
        <option value=\"27\">27</option>
        <option value=\"28\">28</option>
        <option value=\"29\">29</option>
        <option value=\"30\">30</option>
        <option value=\"31\">31</option>
        <option value=\"32\">32</option>
        <option value=\"33\">33</option>
        <option value=\"34\">34</option>
        <option value=\"35\">35</option>
        <option value=\"36\">36</option>
    </select>
</div>
<div class=\"form-group col-md-6\">
    <label>Fecha de vencim. (Mes - Año)</label>
    <div class=\"form-group col-md-6\">            
        <select name=\"PD_exp_month\" id=\"PD_exp_month\" class=\"form-control\">
            <option value=\"01\">1</option>
            <option value=\"02\">2</option>
            <option value=\"03\">3</option>
            <option value=\"04\">4</option>
            <option value=\"05\">5</option>
            <option value=\"06\">6</option>
            <option value=\"07\">7</option>
            <option value=\"08\">8</option>
            <option value=\"09\">9</option>
            <option value=\"10\">10</option>
            <option value=\"11\">11</option>
            <option value=\"12\">12</option>
        </select>
    </div>
    <div class=\"form-group col-md-6\">
        <select name=\"PD_exp_year\" id=\"PD_exp_year\" class=\"form-control\">
            <option value=\"2019\">2019</option>
            <option value=\"2020\">2020</option>
            <option value=\"2021\">2021</option>
            <option value=\"2022\">2022</option>
            <option value=\"2023\">2023</option>
            <option value=\"2024\">2024</option>
            <option value=\"2025\">2025</option>
            <option value=\"2026\">2026</option>
            <option value=\"2027\">2027</option>
            <option value=\"2028\">2028</option>
            <option value=\"2029\">2029</option>
        </select>
    </div>                
</div>    
<div class=\"form-group col-md-2\">
    <label for=\"PD_card_code\">CVC</label>                        
    <input type=\"text\" name=\"PD_card_code\" id=\"PD_card_code\" value=\"\" class=\"form-control\">
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./Orders/payment_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h3 class=\"text-primary text-center\"><small><i class=\"fa fa-plus\"></i></small>Datos de Pago</h3>
<input type=\"hidden\" name=\"PD[type]\" id=\"PD_type\" value=\"p2p\">     
<div class=\"form-group col-md-12\">        
    <label for=\"PD_first_name\">Nombre (como aparece en la tarjeta)</label>        
    <input type=\"text\" name=\"PD_first_name\" id=\"PD_first_name\" value=\"\" class=\"form-control\">
</div>
<div class=\"form-group col-md-12\">        
    <label for=\"PD_card_num\">Número de la tarjeta</label>        
    <input type=\"text\" name=\"PD_card_num\" id=\"PD_card_num\" value=\"\" class=\"form-control\">
</div>    
<div class=\"form-group col-md-12\">
    <label for=\"PD_franquise\">Tipo de tarjeta</label>
    <select name=\"PD_franquise\" id=\"PD_franquise\" class=\"form-control\">
        <option value=\"VS\">Visa</option>
        <option value=\"MC\">Mastercard</option>
        <option value=\"DN\">Diners</option>
        <option value=\"AM\">American Express</option>
        <option value=\"CS\">Codensa</option>
        <option value=\"EX\">Tarjeta Exito</option>
        <option value=\"AK\">Tarjeta Alkosto</option>
    </select>
</div>
<div class=\"form-group col-md-4\">
    <label for=\"PD_card_code\">Cuotas</label>                        
    <select name=\"PD_differed\" id=\"PD_differed\" class=\"form-control\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
        <option value=\"11\">11</option>
        <option value=\"12\">12</option>
        <option value=\"13\">13</option>
        <option value=\"14\">14</option>
        <option value=\"15\">15</option>
        <option value=\"16\">16</option>
        <option value=\"17\">17</option>
        <option value=\"18\">18</option>
        <option value=\"19\">19</option>
        <option value=\"20\">20</option>
        <option value=\"21\">21</option>
        <option value=\"22\">22</option>
        <option value=\"23\">23</option>
        <option value=\"24\">24</option>
        <option value=\"25\">25</option>
        <option value=\"26\">26</option>
        <option value=\"27\">27</option>
        <option value=\"28\">28</option>
        <option value=\"29\">29</option>
        <option value=\"30\">30</option>
        <option value=\"31\">31</option>
        <option value=\"32\">32</option>
        <option value=\"33\">33</option>
        <option value=\"34\">34</option>
        <option value=\"35\">35</option>
        <option value=\"36\">36</option>
    </select>
</div>
<div class=\"form-group col-md-6\">
    <label>Fecha de vencim. (Mes - Año)</label>
    <div class=\"form-group col-md-6\">            
        <select name=\"PD_exp_month\" id=\"PD_exp_month\" class=\"form-control\">
            <option value=\"01\">1</option>
            <option value=\"02\">2</option>
            <option value=\"03\">3</option>
            <option value=\"04\">4</option>
            <option value=\"05\">5</option>
            <option value=\"06\">6</option>
            <option value=\"07\">7</option>
            <option value=\"08\">8</option>
            <option value=\"09\">9</option>
            <option value=\"10\">10</option>
            <option value=\"11\">11</option>
            <option value=\"12\">12</option>
        </select>
    </div>
    <div class=\"form-group col-md-6\">
        <select name=\"PD_exp_year\" id=\"PD_exp_year\" class=\"form-control\">
            <option value=\"2019\">2019</option>
            <option value=\"2020\">2020</option>
            <option value=\"2021\">2021</option>
            <option value=\"2022\">2022</option>
            <option value=\"2023\">2023</option>
            <option value=\"2024\">2024</option>
            <option value=\"2025\">2025</option>
            <option value=\"2026\">2026</option>
            <option value=\"2027\">2027</option>
            <option value=\"2028\">2028</option>
            <option value=\"2029\">2029</option>
        </select>
    </div>                
</div>    
<div class=\"form-group col-md-2\">
    <label for=\"PD_card_code\">CVC</label>                        
    <input type=\"text\" name=\"PD_card_code\" id=\"PD_card_code\" value=\"\" class=\"form-control\">
</div>", "./Orders/payment_form.html.twig", "C:\\wamp\\www\\geneziSym\\src\\TwigsBundle\\Resources\\views\\Orders\\payment_form.html.twig");
    }
}
