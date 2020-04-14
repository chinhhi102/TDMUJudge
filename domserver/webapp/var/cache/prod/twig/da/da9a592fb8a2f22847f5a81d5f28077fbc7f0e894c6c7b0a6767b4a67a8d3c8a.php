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

/* jury/scoreboard.html.twig */
class __TwigTemplate_ca0b1b1f735ab32093b09be1377f8910b996542222fddea64a6d64ee24220d81 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/scoreboard.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/scoreboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Scoreboard - ";
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
    <div data-ajax-refresh-target>
        ";
        // line 14
        $this->loadTemplate("partials/scoreboard.html.twig", "jury/scoreboard.html.twig", 14)->display(twig_array_merge($context, ["jury" => true]));
        // line 15
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  82 => 14,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Scoreboard - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <div data-ajax-refresh-target>
        {% include 'partials/scoreboard.html.twig' with {jury: true} %}
    </div>

{% endblock %}
", "jury/scoreboard.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/scoreboard.html.twig");
    }
}
