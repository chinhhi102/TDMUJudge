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

/* jury/rejudgings.html.twig */
class __TwigTemplate_3638a580a0285ea53a2c8f8163d2e284448d4abec48251c5fdcaa775d02f9f43 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudgings.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudgings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Rejudgings - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Rejudgings</h1>

    ";
        // line 15
        if (twig_test_empty((isset($context["rejudgings"]) || array_key_exists("rejudgings", $context) ? $context["rejudgings"] : (function () { throw new RuntimeError('Variable "rejudgings" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "        <div class=\"alert alert-warning\">No rejudgings defined</div>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["rejudgings"]) || array_key_exists("rejudgings", $context) ? $context["rejudgings"] : (function () { throw new RuntimeError('Variable "rejudgings" does not exist.', 18, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 18, $this->source); })()), 0], 18, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 20
        echo "
    <p>
        ";
        // line 22
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_add"), "Add new rejudging", "primary", "plus");
        echo "
    </p>

";
    }

    public function getTemplateName()
    {
        return "jury/rejudgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  95 => 20,  89 => 18,  85 => 16,  83 => 15,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Rejudgings - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Rejudgings</h1>

    {% if rejudgings is empty %}
        <div class=\"alert alert-warning\">No rejudgings defined</div>
    {% else %}
        {{ macros.table(rejudgings, table_fields, 0) }}
    {% endif %}

    <p>
        {{ button(path('jury_rejudging_add'), 'Add new rejudging', 'primary', 'plus') }}
    </p>

{% endblock %}
", "jury/rejudgings.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/rejudgings.html.twig");
    }
}
