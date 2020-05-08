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

/* jury/auditlog.html.twig */
class __TwigTemplate_8bdd7c3257f28717b31e5bf6a7d729a3f5b64af19aa0085dcc184737de6776ef extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/auditlog.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/auditlog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Auditlog - ";
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
          Auditlog
        </h1>
        ";
        // line 20
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 20, $this->source); })()) > 1)) {
            // line 21
            echo "          <ul class=\"pagination pagination-sm\">
            <li class=\"page-item";
            // line 22
            echo ((((isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 22, $this->source); })()) || ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 22, $this->source); })()) == 1))) ? (" disabled") : (""));
            echo "\">
              <a class=\"page-link\"
                href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => ((((            // line 28
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 28, $this->source); })()) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 28, $this->source); })()) - 1)))]), "html", null, true);
            // line 31
            echo "\">
                «
              </a>
            </li>

            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 36, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "              <li class=\"page-item";
                echo ((( !                // line 38
(isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 38, $this->source); })()) && ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 38, $this->source); })()) == $context["i"]))) ? (" active") : (""));
                // line 40
                echo "\">
                <a class=\"page-link\"
                  href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" =>                 // line 46
$context["i"]]), "html", null, true);
                // line 49
                echo "\">
                  ";
                // line 50
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
            <li class=\"page-item";
            // line 55
            echo (((            // line 56
(isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 56, $this->source); })()) || ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 56, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 56, $this->source); })())))) ? (" disabled") : (""));
            // line 58
            echo "\">
              <a class=\"page-link\"
                href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => ((((            // line 64
(isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 64, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 64, $this->source); })()))) ? (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 64, $this->source); })()) + 1)) : ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 64, $this->source); })())))]), "html", null, true);
            // line 67
            echo "\">
                »
              </a>
            </li>

            <li class=\"page-item";
            // line 72
            echo (((isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 72, $this->source); })())) ? (" active") : (""));
            echo "\">
              <a class=\"page-link\"
                href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["showAll" => true]);
            // line 81
            echo "\">
                show all
              </a>
            </li>
          </ul>
        ";
        }
        // line 87
        echo "
        ";
        // line 88
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 88, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 88, $this->source); })()), 0, (isset($context["table_options"]) || array_key_exists("table_options", $context) ? $context["table_options"] : (function () { throw new RuntimeError('Variable "table_options" does not exist.', 88, $this->source); })())], 88, $context, $this->getSourceContext());
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/auditlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 88,  172 => 87,  164 => 81,  162 => 74,  157 => 72,  150 => 67,  148 => 64,  147 => 60,  143 => 58,  141 => 56,  140 => 55,  137 => 54,  127 => 50,  124 => 49,  122 => 46,  121 => 42,  117 => 40,  115 => 38,  113 => 37,  109 => 36,  102 => 31,  100 => 28,  99 => 24,  94 => 22,  91 => 21,  89 => 20,  81 => 14,  77 => 13,  71 => 10,  66 => 9,  62 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Auditlog - {{ parent() }}
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
          Auditlog
        </h1>
        {% if maxPages > 1 %}
          <ul class=\"pagination pagination-sm\">
            <li class=\"page-item{{ showAll or thisPage == 1 ? ' disabled' }}\">
              <a class=\"page-link\"
                href=\"{{
                path(
                  'jury_auditlog',
                  {
                    page: thisPage - 1 < 1 ? 1 : thisPage - 1
                  }
                )
                }}\">
                «
              </a>
            </li>

            {% for i in 1..maxPages %}
              <li class=\"page-item{{
                not showAll and thisPage == i
                  ? ' active'
                }}\">
                <a class=\"page-link\"
                  href=\"{{
                  path(
                    'jury_auditlog',
                    {
                      page: i
                    }
                  )
                  }}\">
                  {{ i }}
                </a>
              </li>
            {% endfor %}

            <li class=\"page-item{{
              showAll or thisPage == maxPages
                ? ' disabled'
              }}\">
              <a class=\"page-link\"
                href=\"{{
                path(
                  'jury_auditlog',
                  {
                    page: thisPage + 1 <= maxPages ? thisPage + 1 : thisPage
                  }
                )
                }}\">
                »
              </a>
            </li>

            <li class=\"page-item{{ showAll ? ' active' }}\">
              <a class=\"page-link\"
                href=\"{{
                path(
                  'jury_auditlog',
                  {
                    showAll: true
                  }
                )
                }}\">
                show all
              </a>
            </li>
          </ul>
        {% endif %}

        {{ macros.table(auditlog, table_fields, 0, table_options) }}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/auditlog.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/auditlog.html.twig");
    }
}
