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

/* bonjour/icons.html.twig */
class __TwigTemplate_99d6df39970b8532c4acd11673e3103c24fbe49dc792f6d8293b7c5187ae16d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonjour/icons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonjour/icons.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bonjour/icons.html.twig", 1);
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

        echo "Quelques icônes Font Awesome";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<p></p>
<p><b>Rappel :</b> Pour voir le code source de la page sous Firefox, tapez <code>Ctrl-U</code>.</p>
<p>Le <code>span</code> sert à définir la couleur ou plus généralement le style du texte, la taille peut être définie
avec des classes Font Awesome : <code>fa-xs</code>, <code>fa-sm</code>, <code>fa-lg</code>, <code>fa-2x</code>,...,
<code>fa-10x</code>.</p>

<p>
    <span style=\"color: #444444\"><i class=\"fas fa-search fa-xs\"></i><i class=\"fas fa-search fa-sm\"></i><i class=\"fas fa-search fa-lg\"></i><i class=\"fas fa-search fa-2x\"></i><i class=\"fas fa-search fa-5x\"></i><i class=\"fas fa-search-plus fa-5x\"></i></span>
</p>

<p>
    <span style=\"color: green\"><i class=\"fas fa-home fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-info fa-4x\"></i></span>
    <span style=\"color: orange\"><i class=\"fas fa-info-circle fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-user fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"far fa-user fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-eye fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"far fa-eye fa-4x\"></i></span>
    <span style=\"color: red\"><i class=\"fas fa-sign-out-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-sign-in-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-check fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-check-square fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-check-square fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-check-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-check-circle fa-4x\"></i></span>
</p>

<p>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-up fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-down fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-right fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-left fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-up fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-down fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-right fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-left fa-4x\"></i></span>
</p>

<p>
    <span style=\"color: green\"><i class=\"fas fa-trash-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-trash-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-trash fa-4x\"></i></span>
    <span style=\"color: pink\"><i class=\"fas fa-minus fa-4x\"></i></span>
    <span style=\"color: pink\"><i class=\"fas fa-minus-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-times-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-times-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-times fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-window-close fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-window-close fa-4x\"></i></span>
</p>

<p style=\"text-align: center; font-size: 2em; margin-top: 2em;\">
    <span style=\"color: #EC4C4E\"><i class=\"fas fa-arrow-right fa-lg\"></i></span>
<a href=\"https://fontawesome.com/icons?d=gallery&m=free\">Toutes les icônes libres sur le site officiel</a>
    <span style=\"color: #EC4C4E\"><i class=\"fas fa-arrow-left fa-lg\"></i></span>
</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bonjour/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quelques icônes Font Awesome{% endblock %}

{% block body %}
<p></p>
<p><b>Rappel :</b> Pour voir le code source de la page sous Firefox, tapez <code>Ctrl-U</code>.</p>
<p>Le <code>span</code> sert à définir la couleur ou plus généralement le style du texte, la taille peut être définie
avec des classes Font Awesome : <code>fa-xs</code>, <code>fa-sm</code>, <code>fa-lg</code>, <code>fa-2x</code>,...,
<code>fa-10x</code>.</p>

<p>
    <span style=\"color: #444444\"><i class=\"fas fa-search fa-xs\"></i><i class=\"fas fa-search fa-sm\"></i><i class=\"fas fa-search fa-lg\"></i><i class=\"fas fa-search fa-2x\"></i><i class=\"fas fa-search fa-5x\"></i><i class=\"fas fa-search-plus fa-5x\"></i></span>
</p>

<p>
    <span style=\"color: green\"><i class=\"fas fa-home fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-info fa-4x\"></i></span>
    <span style=\"color: orange\"><i class=\"fas fa-info-circle fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-user fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"far fa-user fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-eye fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"far fa-eye fa-4x\"></i></span>
    <span style=\"color: red\"><i class=\"fas fa-sign-out-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-sign-in-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-check fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-check-square fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-check-square fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-check-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-check-circle fa-4x\"></i></span>
</p>

<p>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-up fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-down fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-right fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-left fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-up fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-down fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-right fa-4x\"></i></span>
    <span style=\"color: blue\"><i class=\"fas fa-chevron-circle-left fa-4x\"></i></span>
</p>

<p>
    <span style=\"color: green\"><i class=\"fas fa-trash-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-trash-alt fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-trash fa-4x\"></i></span>
    <span style=\"color: pink\"><i class=\"fas fa-minus fa-4x\"></i></span>
    <span style=\"color: pink\"><i class=\"fas fa-minus-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-times-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-times-circle fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-times fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"fas fa-window-close fa-4x\"></i></span>
    <span style=\"color: green\"><i class=\"far fa-window-close fa-4x\"></i></span>
</p>

<p style=\"text-align: center; font-size: 2em; margin-top: 2em;\">
    <span style=\"color: #EC4C4E\"><i class=\"fas fa-arrow-right fa-lg\"></i></span>
<a href=\"https://fontawesome.com/icons?d=gallery&m=free\">Toutes les icônes libres sur le site officiel</a>
    <span style=\"color: #EC4C4E\"><i class=\"fas fa-arrow-left fa-lg\"></i></span>
</p>
{% endblock %}
", "bonjour/icons.html.twig", "/Users/enzogiammatteo/Sites/Proj_WebStat/templates/bonjour/icons.html.twig");
    }
}
