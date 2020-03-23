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

/* jury/contest_add.html.twig */
class __TwigTemplate_349f03e971c0209bf7e24018c4109649f3d9f115821e79a996937edef19b8153 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest_add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest_add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Add contest - ";
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
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_jscolor_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <h1>Add contest</h1>

    ";
        // line 16
        $this->loadTemplate("jury/partials/contest_form.html.twig", "jury/contest_add.html.twig", 16)->display($context);
        // line 17
        echo "
    ";
        // line 18
        echo twig_call_macro($macros["macros"], "macro_collection_scripts", [], 18, $context, $this->getSourceContext());
        echo "

";
    }

    public function getTemplateName()
    {
        return "jury/contest_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  89 => 17,  87 => 16,  82 => 13,  78 => 12,  72 => 9,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Add contest - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.select2_extrahead() }}
    {{ macros.jscolor_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Add contest</h1>

    {% include 'jury/partials/contest_form.html.twig' %}

    {{ macros.collection_scripts() }}

{% endblock %}
", "jury/contest_add.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/contest_add.html.twig");
    }
}
