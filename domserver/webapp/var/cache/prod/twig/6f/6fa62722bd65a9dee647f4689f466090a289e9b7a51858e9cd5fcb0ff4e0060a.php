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

/* jury/clarification_new.html.twig */
class __TwigTemplate_214f9def69b6ced470ebfba7a4031e891cf70b4fae634bb8cf33900a3eff61d1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarification_new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  Send clarification - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"container clarificationform\">
          <h1>
            Send Clarification
          </h1>";
        // line 19
        $this->loadTemplate("jury/partials/clarification_form.html.twig", "jury/clarification_new.html.twig", 19)->display($context);
        // line 20
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/clarification_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  82 => 19,  74 => 12,  70 => 11,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}

{% block title %}
  Send clarification - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"container clarificationform\">
          <h1>
            Send Clarification
          </h1>
          {%- include 'jury/partials/clarification_form.html.twig' %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/clarification_new.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/clarification_new.html.twig");
    }
}
