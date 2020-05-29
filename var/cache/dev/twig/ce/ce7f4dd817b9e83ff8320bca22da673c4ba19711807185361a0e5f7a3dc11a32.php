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

/* security/listeUtilisateur.html.twig */
class __TwigTemplate_872e135f63bc3eaff10d93f62880c812bf11d6f6a49b33d0b570eb5caebe0fc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/listeUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/listeUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/listeUtilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1> liste des utilisateurs </h1>

<table class=\"table\">
  <thead>
    <th> id</th>
    <th> Email</th>
    <th> rôle </th>
    <th> modifier </th>
    <th> supprimer </th>
  </thead>

  <tbody>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 16
            echo "  <tr>
  <td> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo " </td>
    <td> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "mail", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
  <td>
  ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["users"], "role", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                // line 21
                echo "  ";
                echo twig_escape_filter($this->env, $context["roles"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </td>
  <td> <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listUsers", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-outline-warning\">  Modifier </a>  </td>
  <td> <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteusers", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">  Supprimer </a>  </td>
    </tr>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "  <tr>
    <td colspan=5> Il n'y a pas d'utilisateur inscrit </td>
    </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </tbody>
  </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/listeUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  128 => 29,  119 => 25,  115 => 24,  112 => 23,  103 => 21,  99 => 20,  94 => 18,  90 => 17,  87 => 16,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}
{%block body %}
<h1> liste des utilisateurs </h1>

<table class=\"table\">
  <thead>
    <th> id</th>
    <th> Email</th>
    <th> rôle </th>
    <th> modifier </th>
    <th> supprimer </th>
  </thead>

  <tbody>
  {%for users in user%}
  <tr>
  <td> {{users.id}} </td>
    <td> {{users.mail}}</td>
  <td>
  {% for roles in users.role %}
  {{roles}}
    {% endfor %}
  </td>
  <td> <a href=\"{{path('listUsers', {'id':users.id})}}\" class=\"btn btn-outline-warning\">  Modifier </a>  </td>
  <td> <a href=\"{{path('deleteusers', {'id':users.id})}}\" class=\"btn btn-outline-danger\">  Supprimer </a>  </td>
    </tr>

  {% else %}
  <tr>
    <td colspan=5> Il n'y a pas d'utilisateur inscrit </td>
    </tr>

    {% endfor %}
  </tbody>
  </table>
{%endblock%}
", "security/listeUtilisateur.html.twig", "/Users/enzogiammatteo/Sites/Proj_WebStat/templates/security/listeUtilisateur.html.twig");
    }
}
