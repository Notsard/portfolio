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

/* portfolio/home.html.twig */
class __TwigTemplate_60f41d45f3a05055959d32d318ab4d30efdf2c2ec78e39d7ac8b53c622bac98a extends \Twig\Template
{
    private $source;

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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "<h1>Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "html", null, true);
            echo " ravie de vous revoir.</h1>
";
        }
        // line 7
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "<h1>Bienvenue sur mon port-folio.</h1>
";
        }
        // line 10
        echo "<p>Bonjour je me presente je m'appel Romain j'ai 20 ans je suis developpeur web depuis 4 mois et demis et je suis deja
    capable de faire un port-folio avec symfony en 1 semaine car oui ce port-folio que vous voyez actuelement bah je
    l'ai coder en 1 semaine seullement merci a tous. N'oubliez pas : \"Seul on vas peut etre plus vite mais en equipe on
    vas beaucoups plus loin\".
</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  66 => 8,  64 => 7,  58 => 5,  56 => 4,  50 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{% if app.user %}
<h1>Bonjour {{app.user}} ravie de vous revoir.</h1>
{% endif %}
{% if not app.user %}
<h1>Bienvenue sur mon port-folio.</h1>
{% endif %}
<p>Bonjour je me presente je m'appel Romain j'ai 20 ans je suis developpeur web depuis 4 mois et demis et je suis deja
    capable de faire un port-folio avec symfony en 1 semaine car oui ce port-folio que vous voyez actuelement bah je
    l'ai coder en 1 semaine seullement merci a tous. N'oubliez pas : \"Seul on vas peut etre plus vite mais en equipe on
    vas beaucoups plus loin\".
</p>
{% endblock %}", "portfolio/home.html.twig", "/home/romain-simplon/Git/Symfony/your-project/templates/portfolio/home.html.twig");
    }
}
