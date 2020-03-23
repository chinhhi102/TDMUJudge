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

/* public/problems.html.twig */
class __TwigTemplate_ef570b45e1e6a662d4115cbd1f0b98c69220c3b1ce85a942bc581e5d5aa1b578 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/problems.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contest problems - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("partials/problem_list.html.twig", "public/problems.html.twig", 6)->display(twig_array_merge($context, ["problem_text_path" => "public_problem_text", "problem_sample_testcase_path" => "public_problem_sample_testcase", "problem_sample_zip_path" => "public_problem_sample_zip"]));
    }

    public function getTemplateName()
    {
        return "public/problems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"public/base.html.twig\" %}

{% block title %}Contest problems - {{ parent() }}{% endblock %}

{% block content %}
    {% include 'partials/problem_list.html.twig' with {
        problem_text_path: 'public_problem_text',
        problem_sample_testcase_path: 'public_problem_sample_testcase',
        problem_sample_zip_path: 'public_problem_sample_zip'
    } %}
{% endblock %}
", "public/problems.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/public/problems.html.twig");
    }
}
