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

/* jury/judgehosts_edit_multiple.html.twig */
class __TwigTemplate_ef0ff7d4bece4baff2d9bed54cbfca4e29ea5654666d172663c9d90297c50a5b extends \Twig\Template
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
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehosts_edit_multiple.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  Edit Judgehosts - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Edit Judgehosts
        </h1>

        ";
        // line 15
        $this->loadTemplate("jury/partials/judgehosts_form.html.twig", "jury/judgehosts_edit_multiple.html.twig", 15)->display($context);
        // line 16
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/judgehosts_edit_multiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  71 => 15,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}

{% block title %}
  Edit Judgehosts - {{ parent() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Edit Judgehosts
        </h1>

        {% include 'jury/partials/judgehosts_form.html.twig' %}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/judgehosts_edit_multiple.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/judgehosts_edit_multiple.html.twig");
    }
}
