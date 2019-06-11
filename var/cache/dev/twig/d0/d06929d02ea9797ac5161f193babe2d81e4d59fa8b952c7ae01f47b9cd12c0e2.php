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

/* portfolio/article.html.twig */
class __TwigTemplate_ff53d6894bd1480366764abcb43077375da1769a7ae5d6be05efbe5b7ab86149 extends \Twig\Template
{
    private $source;

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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes Projets";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <h1>Venez decouvrire tous mes projets</h1>
    ";
        }
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "        <h1>Vous venez voir les derniers projets ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "html", null, true);
            echo " ?</h1>
    ";
        }
        // line 12
        echo "    
    
<section class=\"articles\">
    ";
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 16, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 17
            echo "    <article>
        <h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "Name", [], "any", false, false, false, 18), "html", null, true);
            echo "</h3>
        <div class=\"content\">
            <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "Description", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "lien", [], "any", false, false, false, 21), "html", null, true);
            echo "\" target=\"blank\" class=\"btn btn-outline-primary\">Voir le projet</a>
            <br>
            <br>
            ";
            // line 24
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 25
                echo "            <a href=\"\"><button class=\"btn btn-primary\">Modifier le projet</button></a>
            ";
            }
            // line 27
            echo "        </div>
    </article>
    <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</section>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  119 => 27,  115 => 25,  113 => 24,  107 => 21,  103 => 20,  98 => 18,  95 => 17,  90 => 16,  85 => 12,  79 => 10,  76 => 9,  72 => 7,  69 => 6,  63 => 5,  51 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Projets{% endblock %}

{% block body %}
    {% if not app.user %}
        <h1>Venez decouvrire tous mes projets</h1>
    {% endif %}
    {% if app.user %}
        <h1>Vous venez voir les derniers projets {{app.user}} ?</h1>
    {% endif %}
    
    
<section class=\"articles\">
    {# Add a project from the database #}
    {% for projet in projets | reverse %}
    <article>
        <h3>{{ projet.Name }}</h3>
        <div class=\"content\">
            <p>{{ projet.Description }}</p>
            <a href=\"{{ projet.lien }}\" target=\"blank\" class=\"btn btn-outline-primary\">Voir le projet</a>
            <br>
            <br>
            {% if is_granted('ROLE_SUPER_ADMIN') %}
            <a href=\"\"><button class=\"btn btn-primary\">Modifier le projet</button></a>
            {% endif %}
        </div>
    </article>
    <br>
    {% endfor %}
</section>    
{% endblock %}
", "portfolio/article.html.twig", "/home/romain-simplon/Git/Symfony/your-project/templates/portfolio/article.html.twig");
    }
}
