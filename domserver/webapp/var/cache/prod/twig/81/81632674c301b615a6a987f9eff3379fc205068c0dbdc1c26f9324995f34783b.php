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

/* jury/executable_edit.html.twig */
class __TwigTemplate_0a6ccaf692557e0093bf2857359aeb8209fca25316c6b8556b6df689690a7401 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/executable_edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Edit executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 5, $this->source); })()), "execid", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 10, $context, $this->getSourceContext());
        echo "
  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 11, $context, $this->getSourceContext());
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Edit executable ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 19, $this->source); })()), "execid", [], "any", false, false, false, 19), "html", null, true);
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form');
        echo "
          </div>
        </div>

        ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "          <hr />
          <i>or</i>

          <div class=\"row\">
            <div class=\"col-lg-4\">
              ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["uploadForm"]) || array_key_exists("uploadForm", $context) ? $context["uploadForm"] : (function () { throw new RuntimeError('Variable "uploadForm" does not exist.', 34, $this->source); })()), 'form');
            echo "
            </div>
          </div>
        ";
        }
        // line 38
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/executable_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  117 => 34,  110 => 29,  108 => 28,  101 => 24,  93 => 19,  87 => 15,  83 => 14,  77 => 11,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Edit executable {{ executable.execid }} - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
  {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Edit executable {{ executable.execid }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            {{ form(form) }}
          </div>
        </div>

        {% if is_granted('ROLE_ADMIN') %}
          <hr />
          <i>or</i>

          <div class=\"row\">
            <div class=\"col-lg-4\">
              {{ form(uploadForm) }}
            </div>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/executable_edit.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/executable_edit.html.twig");
    }
}
