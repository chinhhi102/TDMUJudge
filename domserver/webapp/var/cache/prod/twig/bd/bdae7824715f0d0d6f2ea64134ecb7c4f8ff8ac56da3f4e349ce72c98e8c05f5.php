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

/* jury/contest_edit.html.twig */
class __TwigTemplate_e1d831e8b0dc8f0ec3e28fbae9dcbd7e26e1973912da1a30c0b5605572cf4d61 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest_edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Edit contest ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 5, $this->source); })()), "cid", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 10, $context, $this->getSourceContext());
        echo "
  ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_jscolor_extrahead", [], 11, $context, $this->getSourceContext());
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
          Edit contest ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 19, $this->source); })()), "cid", [], "any", false, false, false, 19), "html", null, true);
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Contest ID/ext
                </th>
                <td>
                  ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 30, $this->source); })()), "cid", [], "any", false, false, false, 30), "html", null, true);
        echo "
                </td>
              </tr>
            </table>
          </div>
        </div>

        ";
        // line 37
        $this->loadTemplate("jury/partials/contest_form.html.twig", "jury/contest_edit.html.twig", 37)->display($context);
        // line 38
        echo "
        ";
        // line 39
        echo twig_call_macro($macros["macros"], "macro_collection_scripts", [], 39, $context, $this->getSourceContext());
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/contest_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  119 => 38,  117 => 37,  107 => 30,  93 => 19,  87 => 15,  83 => 14,  77 => 11,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Edit contest {{ contest.cid }} - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.select2_extrahead() }}
  {{ macros.jscolor_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Edit contest {{ contest.cid }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Contest ID/ext
                </th>
                <td>
                  {{ contest.cid }}
                </td>
              </tr>
            </table>
          </div>
        </div>

        {% include 'jury/partials/contest_form.html.twig' %}

        {{ macros.collection_scripts() }}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/contest_edit.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/contest_edit.html.twig");
    }
}
