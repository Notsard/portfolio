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

/* step3/home.html.twig */
class __TwigTemplate_c6bb9134535dccab67af90098bf9648d76c923698a062269216f0a24866fecc5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "step3/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "step3/home.html.twig", 1);
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
        echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vero asperiores blanditiis earum dolore
    laudantium? Corrupti eveniet quia tenetur aut deserunt corporis, velit necessitatibus adipisci. Adipisci dicta sunt
    sapiente sint exercitationem laborum voluptate autem fuga eaque quos consequuntur ipsa recusandae optio, quia eos
    laudantium minus omnis, error voluptatum vero vel? Odio libero culpa, dolores dicta sint esse perspiciatis
    reprehenderit soluta atque ad id! Earum dignissimos dolorum natus unde exercitationem eaque perferendis, voluptatem
    est veniam provident vero? Amet, non inventore expedita esse nam iste blanditiis magni quibusdam neque, perspiciatis
    eius laudantium aliquid earum maxime fugit dolorum maiores eveniet laborum! Harum nisi itaque tenetur dicta!
    Deserunt facilis modi quasi. Incidunt voluptates distinctio, commodi eius eos eveniet ipsum optio voluptas quidem
    dolores exercitationem dolorum quas dolore corporis animi deleniti fugiat, veniam voluptatem asperiores reiciendis
    odit non qui! Eos corporis dolore libero temporibus ab, ipsum a atque reiciendis unde suscipit. Perspiciatis harum
    nesciunt porro magni quis dolorem. Et voluptatibus pariatur molestiae officiis omnis blanditiis asperiores iusto
    laudantium quas. Unde, molestias facilis architecto eos officia in pariatur facere aperiam veniam animi optio
    maiores dolor ex explicabo impedit placeat reprehenderit temporibus! Saepe porro, cum neque doloremque vitae tenetur
    ratione vero deleniti laudantium repellendus ullam! Vitae expedita nesciunt corrupti dolores quia magni asperiores
    labore incidunt. Quis tempore, pariatur sunt, odit provident possimus debitis exercitationem deleniti, distinctio
    reiciendis corporis iusto. Nihil debitis alias reiciendis corporis, dolorum soluta sequi deserunt optio odio
    cupiditate? Ad, quaerat hic? Nihil similique aut voluptates iure delectus cum quidem eos? Iure tenetur commodi
    obcaecati aliquid culpa. Inventore exercitationem provident officiis facilis! At, facilis consectetur, in ex
    voluptates, commodi corrupti deleniti veniam dolorum explicabo odit ab facere maiores possimus? Odit at aspernatur
    cum ab necessitatibus velit quam nam, recusandae quibusdam repellat commodi dolore totam a consequuntur nihil,
    obcaecati maiores aut tenetur dolor, eum sit asperiores ea? Consequuntur quis sapiente in eligendi quo fugiat modi
    ab iure explicabo autem! Similique nesciunt ab nobis incidunt earum cupiditate quas, saepe unde, fuga amet officiis
    necessitatibus, sequi quod! Nesciunt alias est error? Veritatis magni omnis quasi cupiditate unde doloremque qui
    voluptatibus facilis minima eius quisquam iste suscipit, aspernatur expedita dolore, inventore enim laboriosam dicta
    aliquid debitis repellendus in corrupti nobis obcaecati. Consequatur tenetur perferendis eveniet, voluptatem numquam
    veniam sint vero sapiente iste, error iure dolorum debitis esse, minus fugit ipsum non cupiditate natus quos illum
    dicta quidem voluptas. Nesciunt voluptates excepturi, qui hic repellendus placeat tenetur molestiae accusamus nisi.
</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "step3/home.html.twig";
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
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vero asperiores blanditiis earum dolore
    laudantium? Corrupti eveniet quia tenetur aut deserunt corporis, velit necessitatibus adipisci. Adipisci dicta sunt
    sapiente sint exercitationem laborum voluptate autem fuga eaque quos consequuntur ipsa recusandae optio, quia eos
    laudantium minus omnis, error voluptatum vero vel? Odio libero culpa, dolores dicta sint esse perspiciatis
    reprehenderit soluta atque ad id! Earum dignissimos dolorum natus unde exercitationem eaque perferendis, voluptatem
    est veniam provident vero? Amet, non inventore expedita esse nam iste blanditiis magni quibusdam neque, perspiciatis
    eius laudantium aliquid earum maxime fugit dolorum maiores eveniet laborum! Harum nisi itaque tenetur dicta!
    Deserunt facilis modi quasi. Incidunt voluptates distinctio, commodi eius eos eveniet ipsum optio voluptas quidem
    dolores exercitationem dolorum quas dolore corporis animi deleniti fugiat, veniam voluptatem asperiores reiciendis
    odit non qui! Eos corporis dolore libero temporibus ab, ipsum a atque reiciendis unde suscipit. Perspiciatis harum
    nesciunt porro magni quis dolorem. Et voluptatibus pariatur molestiae officiis omnis blanditiis asperiores iusto
    laudantium quas. Unde, molestias facilis architecto eos officia in pariatur facere aperiam veniam animi optio
    maiores dolor ex explicabo impedit placeat reprehenderit temporibus! Saepe porro, cum neque doloremque vitae tenetur
    ratione vero deleniti laudantium repellendus ullam! Vitae expedita nesciunt corrupti dolores quia magni asperiores
    labore incidunt. Quis tempore, pariatur sunt, odit provident possimus debitis exercitationem deleniti, distinctio
    reiciendis corporis iusto. Nihil debitis alias reiciendis corporis, dolorum soluta sequi deserunt optio odio
    cupiditate? Ad, quaerat hic? Nihil similique aut voluptates iure delectus cum quidem eos? Iure tenetur commodi
    obcaecati aliquid culpa. Inventore exercitationem provident officiis facilis! At, facilis consectetur, in ex
    voluptates, commodi corrupti deleniti veniam dolorum explicabo odit ab facere maiores possimus? Odit at aspernatur
    cum ab necessitatibus velit quam nam, recusandae quibusdam repellat commodi dolore totam a consequuntur nihil,
    obcaecati maiores aut tenetur dolor, eum sit asperiores ea? Consequuntur quis sapiente in eligendi quo fugiat modi
    ab iure explicabo autem! Similique nesciunt ab nobis incidunt earum cupiditate quas, saepe unde, fuga amet officiis
    necessitatibus, sequi quod! Nesciunt alias est error? Veritatis magni omnis quasi cupiditate unde doloremque qui
    voluptatibus facilis minima eius quisquam iste suscipit, aspernatur expedita dolore, inventore enim laboriosam dicta
    aliquid debitis repellendus in corrupti nobis obcaecati. Consequatur tenetur perferendis eveniet, voluptatem numquam
    veniam sint vero sapiente iste, error iure dolorum debitis esse, minus fugit ipsum non cupiditate natus quos illum
    dicta quidem voluptas. Nesciunt voluptates excepturi, qui hic repellendus placeat tenetur molestiae accusamus nisi.
</p>
{% endblock %}", "step3/home.html.twig", "/home/romain-simplon/Git/Symfony/your-project/templates/step3/home.html.twig");
    }
}
