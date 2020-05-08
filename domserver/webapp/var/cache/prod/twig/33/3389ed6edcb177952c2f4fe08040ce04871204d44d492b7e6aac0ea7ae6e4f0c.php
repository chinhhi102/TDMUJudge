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

/* jury/judgehosts.html.twig */
class __TwigTemplate_9f31d7ddb7b31506ffa5ca2997f1fe347d117e45ce11b9465cfc0a371b8a29c2 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehosts.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehosts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Judgehosts - ";
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
          Judgehosts
        </h1>

        <div data-ajax-refresh-target>
          ";
        // line 22
        $this->loadTemplate("jury/partials/judgehost_list.html.twig", "jury/judgehosts.html.twig", 22)->display($context);
        // line 23
        echo "        </div>";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "          <div class=\"mb-4\">
            <form action=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_activate_all");
            echo "\"
              method=\"post\"
              class=\"d-inline\">
              <button type=\"submit\" name=\"cmd-activate\" class=\"btn btn-success\">
                <i class=\"fas fa-play\"></i>
                Start all judgehosts
              </button>
            </form>
            <form action=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_deactivate_all");
            echo "\"
              method=\"post\"
              class=\"d-inline\">
              <button type=\"submit\"
                name=\"cmd-deactivate\"
                class=\"btn btn-warning\">
                <i class=\"fas fa-pause\"></i>
                Stop all judgehosts
              </button>
            </form>
            <div class=\"d-inline\">
              ";
            // line 46
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_edit"), "Edit judgehosts", "secondary", "edit");
            // line 53
            echo "
            </div>
          </div>";
        }
        // line 57
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/judgehosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 57,  127 => 53,  125 => 46,  111 => 35,  100 => 27,  97 => 26,  95 => 25,  93 => 23,  91 => 22,  81 => 14,  77 => 13,  71 => 10,  66 => 9,  62 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Judgehosts - {{ parent() }}
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
          Judgehosts
        </h1>

        <div data-ajax-refresh-target>
          {% include 'jury/partials/judgehost_list.html.twig' %}
        </div>

        {%- if is_granted('ROLE_ADMIN') %}
          <div class=\"mb-4\">
            <form action=\"{{ path('jury_judgehost_activate_all') }}\"
              method=\"post\"
              class=\"d-inline\">
              <button type=\"submit\" name=\"cmd-activate\" class=\"btn btn-success\">
                <i class=\"fas fa-play\"></i>
                Start all judgehosts
              </button>
            </form>
            <form action=\"{{ path('jury_judgehost_deactivate_all') }}\"
              method=\"post\"
              class=\"d-inline\">
              <button type=\"submit\"
                name=\"cmd-deactivate\"
                class=\"btn btn-warning\">
                <i class=\"fas fa-pause\"></i>
                Stop all judgehosts
              </button>
            </form>
            <div class=\"d-inline\">
              {{
                button(
                  path('jury_judgehost_edit'),
                  'Edit judgehosts',
                  'secondary',
                  'edit'
                )
              }}
            </div>
          </div>
        {%- endif %}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/judgehosts.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/judgehosts.html.twig");
    }
}
