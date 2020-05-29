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

/* evo_data/index.html.twig */
class __TwigTemplate_dac18fa1a100323a8ab41f8546e1cd250bfb5c725688bd51662d6f6c44d7a2d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evo_data/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evo_data/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evo_data/index.html.twig", 1);
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

        echo "Données évolutives";
        
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

        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener(\"input\", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement(\"DIV\");
                a.setAttribute(\"id\", this.id + \"autocomplete-list\");
                a.setAttribute(\"class\", \"autocomplete-items\");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement(\"DIV\");
                        /*make the matching letters bold:*/
                        b.innerHTML = \"<strong>\" + arr[i].substr(0, val.length) + \"</strong>\";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener(\"click\", function(e) {
                            /*insert the value for the autocomplete text fieldisplay suggestionsd:*/
                            inp.value = this.getElementsByTagName(\"input\")[0].value;
                            /*close the list of autocompleted values,
                       display suggestions     (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener(\"keydown\", function(e) {
                var x = document.getElementById(this.id + \"autocomplete-list\");
                if (x) x = x.getElementsByTagName(\"div\");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the \"active\" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as \"active\":*/
                if (!x) return false;
                /*start by removing the \"active\" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class \"autocomplete-active\":*/
                x[currentFocus].classList.add(\"autocomplete-active\");
            }
            function removeActive(x) {
                /*a function to remove the \"active\" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove(\"autocomplete-active\");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName(\"autocomplete-items\");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener(\"click\", function (e) {
                closeAllLists(e.target);
            });
        }

        \$(document).ready(function() {

            var ids = [];
            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allIDPat"]) || array_key_exists("allIDPat", $context) ? $context["allIDPat"] : (function () { throw new RuntimeError('Variable "allIDPat" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 108
            echo "                ids.push(\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
            autocomplete(\$('#searchBar'),ids);
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 117
        echo "    <style>
        #content{
            text-align: center;
        }
    </style>

    <h1>Recherche sur un patient</h1>

    <div id=\"content\">

        <br><br>

        <form method=\"post\" action=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evo_data");
        echo "\">
            <input id=\"searchBar\" type=\"text\" name=\"idPat\" placeholder=\"entrez l'ID visite d'un patient\">
            <input type=\"submit\" value=\"valider\">
        </form>

        <br><br>

        <div id=\"idPatient\">

            Le patient choisi à l'ID : ";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["idPat"]) || array_key_exists("idPat", $context) ? $context["idPat"] : (function () { throw new RuntimeError('Variable "idPat" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "

            ";
        // line 140
        if ((isset($context["isPatFound"]) || array_key_exists("isPatFound", $context) ? $context["isPatFound"] : (function () { throw new RuntimeError('Variable "isPatFound" does not exist.', 140, $this->source); })())) {
            // line 141
            echo "                <br><br>
                <p>Avec la prochaine page, vous pourrez choisir parmi des critères définis</p>
                <form method=\"post\" action=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evo_graph", ["idPat" => (isset($context["idPat"]) || array_key_exists("idPat", $context) ? $context["idPat"] : (function () { throw new RuntimeError('Variable "idPat" does not exist.', 143, $this->source); })())]), "html", null, true);
            echo "\">
                    <button name=\"idPat\" type=\"submit\">Générer les graphiques du patient</button>
                </form>
            ";
        }
        // line 147
        echo "        </div>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evo_data/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 147,  267 => 143,  263 => 141,  261 => 140,  256 => 138,  244 => 129,  230 => 117,  220 => 116,  206 => 110,  197 => 108,  193 => 107,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Données évolutives{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">

        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener(\"input\", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement(\"DIV\");
                a.setAttribute(\"id\", this.id + \"autocomplete-list\");
                a.setAttribute(\"class\", \"autocomplete-items\");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement(\"DIV\");
                        /*make the matching letters bold:*/
                        b.innerHTML = \"<strong>\" + arr[i].substr(0, val.length) + \"</strong>\";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener(\"click\", function(e) {
                            /*insert the value for the autocomplete text fieldisplay suggestionsd:*/
                            inp.value = this.getElementsByTagName(\"input\")[0].value;
                            /*close the list of autocompleted values,
                       display suggestions     (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener(\"keydown\", function(e) {
                var x = document.getElementById(this.id + \"autocomplete-list\");
                if (x) x = x.getElementsByTagName(\"div\");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the \"active\" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as \"active\":*/
                if (!x) return false;
                /*start by removing the \"active\" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class \"autocomplete-active\":*/
                x[currentFocus].classList.add(\"autocomplete-active\");
            }
            function removeActive(x) {
                /*a function to remove the \"active\" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove(\"autocomplete-active\");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName(\"autocomplete-items\");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener(\"click\", function (e) {
                closeAllLists(e.target);
            });
        }

        \$(document).ready(function() {

            var ids = [];
            {% for id in allIDPat %}
                ids.push(\"{{ id }}\");
            {% endfor %}

            autocomplete(\$('#searchBar'),ids);
        });
    </script>
{% endblock %}

{% block body %}
    <style>
        #content{
            text-align: center;
        }
    </style>

    <h1>Recherche sur un patient</h1>

    <div id=\"content\">

        <br><br>

        <form method=\"post\" action=\"{{ path('evo_data') }}\">
            <input id=\"searchBar\" type=\"text\" name=\"idPat\" placeholder=\"entrez l'ID visite d'un patient\">
            <input type=\"submit\" value=\"valider\">
        </form>

        <br><br>

        <div id=\"idPatient\">

            Le patient choisi à l'ID : {{ idPat }}

            {% if isPatFound %}
                <br><br>
                <p>Avec la prochaine page, vous pourrez choisir parmi des critères définis</p>
                <form method=\"post\" action=\"{{ path('evo_graph', { 'idPat': idPat }) }}\">
                    <button name=\"idPat\" type=\"submit\">Générer les graphiques du patient</button>
                </form>
            {% endif %}
        </div>


    </div>

{% endblock %}
", "evo_data/index.html.twig", "/Users/enzogiammatteo/Sites/Proj_WebStat/templates/evo_data/index.html.twig");
    }
}
