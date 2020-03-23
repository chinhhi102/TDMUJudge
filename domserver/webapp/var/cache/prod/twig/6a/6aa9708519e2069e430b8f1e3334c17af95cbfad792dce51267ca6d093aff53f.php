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

/* jury/partials/problem_form.html.twig */
class __TwigTemplate_5771cda5d4afd5de9313d3460bd1c27bd09bbad35390d1d9c129bccf27dae8ce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "offsetExists", [0 => "externalid"], "method", false, false, false, 4)) {
            // line 5
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "externalid", [], "any", false, false, false, 5), 'row');
            echo "
        ";
        }
        // line 7
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "timelimit", [], "any", false, false, false, 9), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "timelimit", [], "any", false, false, false, 11), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">sec</div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "memlimit", [], "any", false, false, false, 18), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "memlimit", [], "any", false, false, false, 20), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "memlimit", [], "any", false, false, false, 25), 'help');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "outputlimit", [], "any", false, false, false, 28), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "outputlimit", [], "any", false, false, false, 30), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "outputlimit", [], "any", false, false, false, 35), 'help');
        echo "
        </div>
        ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/problem_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  106 => 35,  98 => 30,  93 => 28,  87 => 25,  79 => 20,  74 => 18,  64 => 11,  59 => 9,  53 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-4\">
        {{ form_start(form) }}
        {% if form.offsetExists('externalid') %}
            {{ form_row(form.externalid) }}
        {% endif %}
        {{ form_row(form.name) }}
        <div class=\"form-group\">
            {{ form_label(form.timelimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.timelimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">sec</div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.memlimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.memlimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            {{ form_help(form.memlimit) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.outputlimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.outputlimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            {{ form_help(form.outputlimit) }}
        </div>
        {{ form_end(form) }}
    </div>
</div>
", "jury/partials/problem_form.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/partials/problem_form.html.twig");
    }
}
