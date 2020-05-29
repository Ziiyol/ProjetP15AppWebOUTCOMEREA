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

/* evo_graph/index.html.twig */
class __TwigTemplate_484c2bb9a852a9cb73e25c2807ad391c7713549aafec9d2d3844dfe8f4fd9629 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evo_graph/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evo_graph/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evo_graph/index.html.twig", 1);
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

        echo "Graphique(s) des données <évolutives></évolutives>!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    <script type=\"text/javascript\">

        var stringTitle = \"Représentation graphique de l'évolution \";
        var temp = 1;
        var dates = [];
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 11
            echo "            dates.push(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "dtdonnevo", [], "any", false, false, false, 11), "html", null, true);
            echo " jour n°\" + temp);
            temp += 1;
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        var data = [];
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["columns"]) {
            // line 17
            echo "            var values = [];
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["columns"]);
            foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
                // line 19
                echo "                if (\"";
                echo twig_escape_filter($this->env, $context["values"], "html", null, true);
                echo "\" == \"\"){
                    values.push(null);
                }else {
                    values.push(\"";
                // line 22
                echo twig_escape_filter($this->env, $context["values"], "html", null, true);
                echo "\");
                }
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            data.push(values);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columns'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        var labels = [];
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabSelectedColumns"]) || array_key_exists("tabSelectedColumns", $context) ? $context["tabSelectedColumns"] : (function () { throw new RuntimeError('Variable "tabSelectedColumns" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dat"]) {
            // line 30
            echo "            labels.push(\"";
            echo twig_escape_filter($this->env, $context["dat"], "html", null, true);
            echo "\");

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        function getYAxesString(labelString){
            switch (labelString) {
                case \"minTemp\" :
                    return \"Température (en °C)\";
                case \"maxTemp\":
                    return \"Température (en °C)\";
                case \"minfc\" :
                    return \"Battements par minutes\";
                case \"maxfc\":
                    return \"Battements par minutes\";
                case \"intubation\":
                    return \"Intubation\";
                case \"freqresp\" :
                    return \"Cycles respiratoires par minutes\";
            }
        }

       function getTitleString( labelString){
            switch (labelString) {
                case \"minTemp\" :
                    return stringTitle+\" de la température minimale du patient\";
                case \"maxTemp\":
                    return stringTitle+\" de la température maximale du patient\";
                case \"minfc\":
                    return stringTitle+\" de la fréquence cardiaque minimale du patient\";
                case \"maxfc\":
                    return stringTitle+\" de la fréquence cardiaque maximale du patient\";
                case \"intubation\":
                    return stringTitle+\" de l'intubation' du patient\";
                case \"freqresp\" :
                    return stringTitle+\" des cycles respiratoires du patient\";
            }
        }



        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbColumns"]) || array_key_exists("nbColumns", $context) ? $context["nbColumns"] : (function () { throw new RuntimeError('Variable "nbColumns" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
            echo "            var myChart = new Chart(document.getElementById('graph";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "').getContext('2d'), {
                type: 'line',
                options: {
                    title:{
                        display:true,
                        text:getTitleString(labels[";
            // line 76
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "]),
                    },

                    scales:{

                        xAxes : [{
                            scaleLabel:{
                                display: true,
                                labelString : 'Temps (en jour)',
                            }

                        }],
                        yAxes : [{
                            scaleLabel: {
                                display:true,
                                labelString:getYAxesString(labels[";
            // line 91
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "]),
                            }
                        }],
                    }
                },
                data: {
                    datasets: [
                        {
                            data: data[";
            // line 99
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "],
                            label: labels[";
            // line 100
            echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
            echo "],
                            borderColor: '#'+((1<<24)*Math.random()|0).toString(16),
                            fill: false
                        },
                    ],
                    labels: dates,
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
        // line 115
        echo "
        \$(document).ready(function() {

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "    <style>
        #content{
            background-color: lightgreen;
            text-align: center;
        }
        #selection{
            background-color: lightgray;
        }
        canvas{
            background-color: lightblue;
        }
    </style>


    <h1>Graphiques du patient ";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["idPat"]) || array_key_exists("idPat", $context) ? $context["idPat"] : (function () { throw new RuntimeError('Variable "idPat" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "</h1>

    <div id=\"content\">

        <div id=\"selection\">
            ";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form');
        echo "
        </div>

        <div id=\"canvas-holder\">
            ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbColumns"]) || array_key_exists("nbColumns", $context) ? $context["nbColumns"] : (function () { throw new RuntimeError('Variable "nbColumns" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 146
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
        // line 151
        echo "        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evo_graph/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 151,  332 => 146,  328 => 145,  321 => 141,  313 => 136,  297 => 122,  287 => 121,  272 => 115,  251 => 100,  247 => 99,  236 => 91,  218 => 76,  209 => 71,  205 => 70,  166 => 33,  156 => 30,  152 => 29,  148 => 27,  141 => 25,  132 => 22,  125 => 19,  121 => 18,  118 => 17,  114 => 16,  110 => 14,  100 => 11,  96 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Graphique(s) des données <évolutives></évolutives>!{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">

        var stringTitle = \"Représentation graphique de l'évolution \";
        var temp = 1;
        var dates = [];
        {% for d in dates %}
            dates.push(\"{{ d.dtdonnevo }} jour n°\" + temp);
            temp += 1;
        {% endfor %}

        var data = [];
        {% for columns in data %}
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

        var labels = [];
        {% for dat in tabSelectedColumns %}
            labels.push(\"{{ dat }}\");

        {% endfor %}

        function getYAxesString(labelString){
            switch (labelString) {
                case \"minTemp\" :
                    return \"Température (en °C)\";
                case \"maxTemp\":
                    return \"Température (en °C)\";
                case \"minfc\" :
                    return \"Battements par minutes\";
                case \"maxfc\":
                    return \"Battements par minutes\";
                case \"intubation\":
                    return \"Intubation\";
                case \"freqresp\" :
                    return \"Cycles respiratoires par minutes\";
            }
        }

       function getTitleString( labelString){
            switch (labelString) {
                case \"minTemp\" :
                    return stringTitle+\" de la température minimale du patient\";
                case \"maxTemp\":
                    return stringTitle+\" de la température maximale du patient\";
                case \"minfc\":
                    return stringTitle+\" de la fréquence cardiaque minimale du patient\";
                case \"maxfc\":
                    return stringTitle+\" de la fréquence cardiaque maximale du patient\";
                case \"intubation\":
                    return stringTitle+\" de l'intubation' du patient\";
                case \"freqresp\" :
                    return stringTitle+\" des cycles respiratoires du patient\";
            }
        }



        {% for i in nbColumns %}
            var myChart = new Chart(document.getElementById('graph{{ i }}').getContext('2d'), {
                type: 'line',
                options: {
                    title:{
                        display:true,
                        text:getTitleString(labels[{{ i - 1 }}]),
                    },

                    scales:{

                        xAxes : [{
                            scaleLabel:{
                                display: true,
                                labelString : 'Temps (en jour)',
                            }

                        }],
                        yAxes : [{
                            scaleLabel: {
                                display:true,
                                labelString:getYAxesString(labels[{{ i - 1 }}]),
                            }
                        }],
                    }
                },
                data: {
                    datasets: [
                        {
                            data: data[{{ i - 1 }}],
                            label: labels[{{ i - 1 }}],
                            borderColor: '#'+((1<<24)*Math.random()|0).toString(16),
                            fill: false
                        },
                    ],
                    labels: dates,
                    options: {
                        responsive: false,
                        maintainAspectRatio: true,
                    }
                },


            });
        {% endfor %}

        \$(document).ready(function() {

        });
    </script>
{% endblock %}
{% block body %}
    <style>
        #content{
            background-color: lightgreen;
            text-align: center;
        }
        #selection{
            background-color: lightgray;
        }
        canvas{
            background-color: lightblue;
        }
    </style>


    <h1>Graphiques du patient {{ idPat }}</h1>

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
", "evo_graph/index.html.twig", "/Users/enzogiammatteo/Sites/Proj_WebStat/templates/evo_graph/index.html.twig");
    }
}
