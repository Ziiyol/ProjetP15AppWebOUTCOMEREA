<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* init_graph/index.html.twig */
class __TwigTemplate_bf26a90694e15a423a9ed5b73421b7f45a0c69e6bf4ce2e5cc86e448bdc9eea0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "init_graph/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "init_graph/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "init_graph/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Graphique(s) des données initiales";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "<script type=\"text/javascript\">

    var stringTitle = \"Représentation graphique de la répartition de la population selon \";

    var data = [];
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dictTot"]) || array_key_exists("dictTot", $context) ? $context["dictTot"] : (function () { throw new RuntimeError('Variable "dictTot" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["columns"]) {
            // line 12
            echo "        var values = [];
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["columns"]);
            foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
                // line 14
                echo "            if (\"";
                echo twig_escape_filter($this->env, $context["values"], "html", null, true);
                echo "\" == \"\"){
                values.push(null);
            }else {
                values.push(\"";
                // line 17
                echo twig_escape_filter($this->env, $context["values"], "html", null, true);
                echo "\");
            }
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        data.push(values);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columns'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    var indexes = [];
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dictIndex"]) || array_key_exists("dictIndex", $context) ? $context["dictIndex"] : (function () { throw new RuntimeError('Variable "dictIndex" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["columns"]) {
            // line 25
            echo "        var values = [];
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["columns"]);
            foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
                // line 27
                echo "            if (\"";
                echo twig_escape_filter($this->env, $context["values"], "html", null, true);
                echo "\" == \"\"){
                values.push(null);
            }else {
                values.push(\"";
                // line 30
                echo twig_escape_filter($this->env, $context["values"], "html", null, true);
                echo "\");
            }
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        indexes.push(values);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columns'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    var labels = [];
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabSelectedColumns"]) || array_key_exists("tabSelectedColumns", $context) ? $context["tabSelectedColumns"] : (function () { throw new RuntimeError('Variable "tabSelectedColumns" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dat"]) {
            // line 38
            echo "        labels.push(\"";
            echo twig_escape_filter($this->env, $context["dat"], "html", null, true);
            echo "\");
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "


    var dictLabel = new Map();
    var id = [];
    var label =[];
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labelsSymp"]) || array_key_exists("labelsSymp", $context) ? $context["labelsSymp"] : (function () { throw new RuntimeError('Variable "labelsSymp" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 47
            echo "         id.push(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "array", false, false, false, 47), "html", null, true);
            echo ");
        label.push(\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "array", false, false, false, 48), "html", null, true);
            echo "\");

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    var sizeDictLabel = ";
        echo twig_escape_filter($this->env, (isset($context["labelsSympSize"]) || array_key_exists("labelsSympSize", $context) ? $context["labelsSympSize"] : (function () { throw new RuntimeError('Variable "labelsSympSize" does not exist.', 51, $this->source); })()), "html", null, true);
        echo ";
    for(let i = 0 ; i<sizeDictLabel; i++){
        dictLabel.set(id[i],label[i]);
    }


    function getXAxesString(labelString){
        switch (labelString) {
            case \"agepat\" :
                return \"Années\";
            case \"sexepat\":
                return \"Type de sexe\";
            case \"poidspat\" :
                return \"Poids (En Kg)\";
            case \"taillepat\":
                return \"Taille (en cm)\";
            case \"sympprinc\":
                return \"Libellé du symptôme principal\";

        }
    }

    function getTitleString( labelString){
        switch (labelString) {
            case \"agepat\" :
                return stringTitle+\"l'âge \";
            case \"sexepat\":
                return stringTitle+\"le sexe \";
            case \"poidspat\" :
                return stringTitle+\"le poids  \";
            case \"taillepat\":
                return stringTitle+\"la taille\";
            case \"sympprinc\":
                return stringTitle+\"le symptôme du patient \";
        }
    }
    var labelIndexes = [].concat(indexes);

    function putLabelOnIndexes(arrayOfLabel){
        for(var [clef, valeur] of dictLabel){
            for (var i = 0 ; i<arrayOfLabel.length;i++){
                if (clef == arrayOfLabel[i]){
                    arrayOfLabel[i] = valeur;
                }
                else{
                    arrayOfLabel[i]=arrayOfLabel[i];
                }
            }
        }
    }

    function verifyTypeOfLabel(myLabel) {
        if (myLabel== \"sexepat\" || myLabel==\"sympprinc\")
            return true;
        else{
            return false;
        }

    }
    function changeNameLabel() {
        for (let i =0 ; i<labels.length; i++){
            if(verifyTypeOfLabel(labels[i])==true){
                putLabelOnIndexes(labelIndexes[i]);
            }
        }
    }

    changeNameLabel();

    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbColumns"]) || array_key_exists("nbColumns", $context) ? $context["nbColumns"] : (function () { throw new RuntimeError('Variable "nbColumns" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 121
            echo "    var myChart = new Chart(document.getElementById('graph";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "').getContext('2d'), {
        type: 'bar',
        options: {
            title:{
                display:true,
                text:getTitleString(labels[";
            // line 126
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "]),
            },

            scales:{

                xAxes : [{
                    scaleLabel:{
                        display: true,
                        labelString : getXAxesString(labels[";
            // line 134
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "]),
                    },
                    barPercentage: 1.25,
                    ticks:{
                        autoSkip: false,

                    }

                }],
                yAxes : [{
                    scaleLabel: {
                        display:true,
                        labelString:'En nombre de personnes',
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize:1,
                    },
                }],
            }
        },
        data: {
            datasets: [
                {
                    data: data[";
            // line 158
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "], //METTRE LA QUANTITE DE PERSONNES A PARTIR DE LA NOUVELLE VAR
                    label: labels[";
            // line 159
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "],
                    backgroundColor: '#'+((1<<24)*Math.random()|0).toString(16),
                    fill: true,
                },
            ],
            labels: indexes[";
            // line 164
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "],
            options: {
                responsive: false,
                maintainAspectRatio: true,
            }
        },


    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "



</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 182
        echo "    <style>
        #content{
            background-color: lightgreen;
            text-align: center;
        }
        #selection{
            width: 100%;
            background-color: lightgray;
        }
        canvas{
            width: 100%;
            background-color: lightblue;
        }
    </style>


    <h1>Graphiques de la population de patients du service</h1>

    <div id=\"content\">

        <div id=\"selection\">
            ";
        // line 203
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), 'form');
        echo "
        </div>

        <div id=\"canvas-holder\">
            ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbColumns"]) || array_key_exists("nbColumns", $context) ? $context["nbColumns"] : (function () { throw new RuntimeError('Variable "nbColumns" does not exist.', 207, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 208
            echo "                <canvas id=\"graph";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">

                </canvas>
                <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "init_graph/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 213,  422 => 208,  418 => 207,  411 => 203,  388 => 182,  378 => 181,  363 => 174,  347 => 164,  339 => 159,  335 => 158,  308 => 134,  297 => 126,  288 => 121,  284 => 120,  211 => 51,  202 => 48,  197 => 47,  193 => 46,  185 => 40,  176 => 38,  172 => 37,  168 => 35,  161 => 33,  152 => 30,  145 => 27,  141 => 26,  138 => 25,  134 => 24,  130 => 22,  123 => 20,  114 => 17,  107 => 14,  103 => 13,  100 => 12,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Graphique(s) des données initiales{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">

    var stringTitle = \"Représentation graphique de la répartition de la population selon \";

    var data = [];
    {% for columns in dictTot %}
        var values = [];
        {% for values in columns %}
            if (\"{{ values }}\" == \"\"){
                values.push(null);
            }else {
                values.push(\"{{ values }}\");
            }
            {% endfor %}
        data.push(values);
    {% endfor %}

    var indexes = [];
    {% for columns in dictIndex %}
        var values = [];
        {% for values in columns %}
            if (\"{{ values }}\" == \"\"){
                values.push(null);
            }else {
                values.push(\"{{ values }}\");
            }
        {% endfor %}
        indexes.push(values);
    {% endfor %}

    var labels = [];
    {% for dat in tabSelectedColumns %}
        labels.push(\"{{ dat }}\");
    {% endfor %}



    var dictLabel = new Map();
    var id = [];
    var label =[];
    {% for label in labelsSymp %}
         id.push({{ label[\"id\"] }});
        label.push(\"{{ label[\"label\"] }}\");

    {% endfor %}
    var sizeDictLabel = {{ labelsSympSize }};
    for(let i = 0 ; i<sizeDictLabel; i++){
        dictLabel.set(id[i],label[i]);
    }


    function getXAxesString(labelString){
        switch (labelString) {
            case \"agepat\" :
                return \"Années\";
            case \"sexepat\":
                return \"Type de sexe\";
            case \"poidspat\" :
                return \"Poids (En Kg)\";
            case \"taillepat\":
                return \"Taille (en cm)\";
            case \"sympprinc\":
                return \"Libellé du symptôme principal\";

        }
    }

    function getTitleString( labelString){
        switch (labelString) {
            case \"agepat\" :
                return stringTitle+\"l'âge \";
            case \"sexepat\":
                return stringTitle+\"le sexe \";
            case \"poidspat\" :
                return stringTitle+\"le poids  \";
            case \"taillepat\":
                return stringTitle+\"la taille\";
            case \"sympprinc\":
                return stringTitle+\"le symptôme du patient \";
        }
    }
    var labelIndexes = [].concat(indexes);

    function putLabelOnIndexes(arrayOfLabel){
        for(var [clef, valeur] of dictLabel){
            for (var i = 0 ; i<arrayOfLabel.length;i++){
                if (clef == arrayOfLabel[i]){
                    arrayOfLabel[i] = valeur;
                }
                else{
                    arrayOfLabel[i]=arrayOfLabel[i];
                }
            }
        }
    }

    function verifyTypeOfLabel(myLabel) {
        if (myLabel== \"sexepat\" || myLabel==\"sympprinc\")
            return true;
        else{
            return false;
        }

    }
    function changeNameLabel() {
        for (let i =0 ; i<labels.length; i++){
            if(verifyTypeOfLabel(labels[i])==true){
                putLabelOnIndexes(labelIndexes[i]);
            }
        }
    }

    changeNameLabel();

    {% for i in nbColumns %}
    var myChart = new Chart(document.getElementById('graph{{ i }}').getContext('2d'), {
        type: 'bar',
        options: {
            title:{
                display:true,
                text:getTitleString(labels[{{ i - 1 }}]),
            },

            scales:{

                xAxes : [{
                    scaleLabel:{
                        display: true,
                        labelString : getXAxesString(labels[{{ i - 1 }}]),
                    },
                    barPercentage: 1.25,
                    ticks:{
                        autoSkip: false,

                    }

                }],
                yAxes : [{
                    scaleLabel: {
                        display:true,
                        labelString:'En nombre de personnes',
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize:1,
                    },
                }],
            }
        },
        data: {
            datasets: [
                {
                    data: data[{{ i - 1 }}], //METTRE LA QUANTITE DE PERSONNES A PARTIR DE LA NOUVELLE VAR
                    label: labels[{{ i - 1 }}],
                    backgroundColor: '#'+((1<<24)*Math.random()|0).toString(16),
                    fill: true,
                },
            ],
            labels: indexes[{{ i - 1 }}],
            options: {
                responsive: false,
                maintainAspectRatio: true,
            }
        },


    });
    {% endfor %}




</script>
{% endblock %}

{% block body %}
    <style>
        #content{
            background-color: lightgreen;
            text-align: center;
        }
        #selection{
            width: 100%;
            background-color: lightgray;
        }
        canvas{
            width: 100%;
            background-color: lightblue;
        }
    </style>


    <h1>Graphiques de la population de patients du service</h1>

    <div id=\"content\">

        <div id=\"selection\">
            {{ form(form) }}
        </div>

        <div id=\"canvas-holder\">
            {% for i in nbColumns %}
                <canvas id=\"graph{{ i }}\">

                </canvas>
                <br>
            {% endfor %}
        </div>

    </div>
{% endblock %}
", "init_graph/index.html.twig", "/Users/enzogiammatteo/Sites/Proj_WebStat/templates/init_graph/index.html.twig");
    }
}
