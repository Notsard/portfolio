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

/* step3/add.html.twig */
class __TwigTemplate_97694c9d5140381cb0bfeca48472813572b608e62b153ca1271957c6b429b2c4 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "step3/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "step3/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un Projet";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        // line 5
        echo "    <h2>Ajouter le projet</h2>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProject"]) || array_key_exists("formProject", $context) ? $context["formProject"] : (function () { throw new RuntimeError('Variable "formProject" does not exist.', 6, $this->source); })()), 'form_start');
        echo "

        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProject"]) || array_key_exists("formProject", $context) ? $context["formProject"] : (function () { throw new RuntimeError('Variable "formProject" does not exist.', 8, $this->source); })()), "Name", [], "any", false, false, false, 8), 'row', ["label" => "Nom du projet"]);
        echo " 
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProject"]) || array_key_exists("formProject", $context) ? $context["formProject"] : (function () { throw new RuntimeError('Variable "formProject" does not exist.', 9, $this->source); })()), "Description", [], "any", false, false, false, 9), 'row', ["label" => "Description du projet"]);
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProject"]) || array_key_exists("formProject", $context) ? $context["formProject"] : (function () { throw new RuntimeError('Variable "formProject" does not exist.', 10, $this->source); })()), "lien", [], "any", false, false, false, 10), 'row', ["label" => "Lien du projet"]);
        echo "<br>
        <button class=\"btn btn-outline-success\" type=\"submit\">Ajouter le projet</button>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProject"]) || array_key_exists("formProject", $context) ? $context["formProject"] : (function () { throw new RuntimeError('Variable "formProject" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
    
    
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "step3/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 12,  87 => 10,  83 => 9,  79 => 8,  74 => 6,  71 => 5,  69 => 4,  63 => 3,  51 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Ajouter un Projet{% endblock %}
{% block body %}
    {# Forme page #}
    <h2>Ajouter le projet</h2>
    {{ form_start(formProject) }}

        {{ form_row(formProject.Name, {'label': 'Nom du projet'}) }} 
        {{ form_row(formProject.Description, {'label': 'Description du projet'}) }}
        {{ form_row(formProject.lien, {'label': 'Lien du projet'}) }}<br>
        <button class=\"btn btn-outline-success\" type=\"submit\">Ajouter le projet</button>
    {{ form_end(formProject) }}
    
    
    
{% endblock %}", "step3/add.html.twig", "/home/romain-simplon/Git/Symfony/your-project/templates/step3/add.html.twig");
    }
}
