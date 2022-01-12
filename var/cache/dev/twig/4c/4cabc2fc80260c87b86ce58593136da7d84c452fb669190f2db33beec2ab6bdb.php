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

/* produit/afficher.html.twig */
class __TwigTemplate_950588db8f195a54ea35d1a8ebeed90e84829fe0f7d2ed6aa4723863a94bc1a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/afficher.html.twig", 1);
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
        if ((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "<table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Lot</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Stock</th>
      <th scope=\"col\">Disponibilite</th>
      <th scope=\"col\">DETAILS</th>
      <th scope=\"col\">MODIFIER</th>

    </tr>
  </thead>
  <tbody>
  ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 19
                echo "    <tr class=\"table-success\">
      <th scope=\"row\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getNom", [], "method", false, false, false, 20), "html", null, true);
                echo "</th>
      <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getLot", [], "method", false, false, false, 21), "html", null, true);
                echo "</td>
      <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getPrix", [], "method", false, false, false, 22), "html", null, true);
                echo "</td>
      <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getStock", [], "method", false, false, false, 23), "html", null, true);
                echo "</td>
      <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "getDisponibilite", [], "method", false, false, false, 24), "html", null, true);
                echo "</td>
      <td><a href=\"/voir/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\">Détails</a></td>
      <td><a href=\"/modifier/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  </tbody>
</table>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 29,  117 => 26,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  90 => 19,  86 => 18,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% if produits %}
<table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Lot</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Stock</th>
      <th scope=\"col\">Disponibilite</th>
      <th scope=\"col\">DETAILS</th>
      <th scope=\"col\">MODIFIER</th>

    </tr>
  </thead>
  <tbody>
  {% for produit in produits %}
    <tr class=\"table-success\">
      <th scope=\"row\">{{produit.getNom()}}</th>
      <td>{{produit.getLot()}}</td>
      <td>{{produit.getPrix()}}</td>
      <td>{{produit.getStock()}}</td>
      <td>{{produit.getDisponibilite()}}</td>
      <td><a href=\"/voir/{{ produit.id }}\" class=\"btn btn-outline-primary\">Détails</a></td>
      <td><a href=\"/modifier/{{ produit.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
    </tr>
    {% endfor %}
  </tbody>
</table>
{% endif %}
{% endblock %}", "produit/afficher.html.twig", "C:\\xampp\\htdocs\\my_php_project\\templates\\produit\\afficher.html.twig");
    }
}
