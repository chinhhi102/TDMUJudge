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

/* jury/team_edit.html.twig */
class __TwigTemplate_de2832174fcc15eb27d4675a6fe060a66915374e6f087d7114dd77b03f76c2d6 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Edit team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "teamid", [], "any", false, false, false, 5), "html", null, true);
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
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Edit team ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 18, $this->source); })()), "teamid", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-8\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Team ID
                </th>
                <td>
                  ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 29, $this->source); })()), "teamid", [], "any", false, false, false, 29), "html", null, true);
        echo "
                </td>
              </tr>
            </table>
          </div>
        </div>

        ";
        // line 36
        $this->loadTemplate("jury/partials/team_form.html.twig", "jury/team_edit.html.twig", 36)->display($context);
        // line 37
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/team_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  113 => 36,  103 => 29,  89 => 18,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Edit team {{ team.teamid }} - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Edit team {{ team.teamid }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-8\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Team ID
                </th>
                <td>
                  {{ team.teamid }}
                </td>
              </tr>
            </table>
          </div>
        </div>

        {% include 'jury/partials/team_form.html.twig' %}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/team_edit.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/team_edit.html.twig");
    }
}
