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
        // line 5
        echo "  Rejudgings - ";
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
          Rejudgings
        </h1>

        ";
        // line 21
        if (twig_test_empty((isset($context["rejudgings"]) || array_key_exists("rejudgings", $context) ? $context["rejudgings"] : (function () { throw new RuntimeError('Variable "rejudgings" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "          <div class=\"alert alert-warning\">
            No rejudgings defined
          </div>
        ";
        } else {
            // line 26
            echo "          ";
            echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["rejudgings"]) || array_key_exists("rejudgings", $context) ? $context["rejudgings"] : (function () { throw new RuntimeError('Variable "rejudgings" does not exist.', 26, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 26, $this->source); })()), 0], 26, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 28
        echo "
        <p>
          ";
        // line 30
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_add"), "Add new rejudging", "primary", "plus");
        // line 37
        echo "
        </p>
      </div>
    </div>
  </div>
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
        return array (  110 => 37,  108 => 30,  104 => 28,  98 => 26,  92 => 22,  90 => 21,  81 => 14,  77 => 13,  71 => 10,  66 => 9,  62 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Rejudgings - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Rejudgings
        </h1>

        {% if rejudgings is empty %}
          <div class=\"alert alert-warning\">
            No rejudgings defined
          </div>
        {% else %}
          {{ macros.table(rejudgings, table_fields, 0) }}
        {% endif %}

        <p>
          {{
            button(
              path('jury_rejudging_add'),
              'Add new rejudging',
              'primary',
              'plus'
            )
          }}
        </p>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/rejudgings.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/rejudgings.html.twig");
    }
}
