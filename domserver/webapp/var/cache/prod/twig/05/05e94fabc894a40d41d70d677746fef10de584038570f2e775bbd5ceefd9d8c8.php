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

/* jury/internal_error.html.twig */
class __TwigTemplate_9a4003fb63fd9956dbe6e8145505008e071b2f004d91d66ffa7daf14a4928ef5 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/internal_error.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/internal_error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Internal error e";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 5, $this->source); })()), "errorid", [], "any", false, false, false, 5), "html", null, true);
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
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\" style=\"overflow: auto\">
        <h1>
          Internal error e";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 18, $this->source); })()), "errorid", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Description
                </th>
                <td>
                  ";
        // line 29
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29))) {
            // line 30
            echo "                    <span class=\"nodata\">None</span>
                  ";
        } else {
            // line 32
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
            echo "
                  ";
        }
        // line 34
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Time
                </th>
                <td>
                  ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41), "%F %T"), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Status
                </th>
                <td>
                  ";
        // line 49
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49)), "html", null, true);
        echo "
                </td>
              </tr>
              ";
        // line 52
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 52, $this->source); })()), "judgingid", [], "any", false, false, false, 52))) {
            // line 53
            echo "                <tr>
                  <th>
                    Related judging
                  </th>
                  <td>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source,             // line 62
(isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 62, $this->source); })()), "judgingid", [], "any", false, false, false, 62)]), "html", null, true);
            // line 65
            echo "\">
                      j";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 66, $this->source); })()), "judgingid", [], "any", false, false, false, 66), "html", null, true);
            echo "
                    </a>
                  </td>
                </tr>
              ";
        }
        // line 71
        echo "              ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 71, $this->source); })()), "cid", [], "any", false, false, false, 71))) {
            // line 72
            echo "                <tr>
                  <th>
                    Related contest
                  </th>
                  <td>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 81, $this->source); })()), "cid", [], "any", false, false, false, 81)]), "html", null, true);
            // line 84
            echo "\">
                      c";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 85, $this->source); })()), "cid", [], "any", false, false, false, 85), "html", null, true);
            echo "
                    </a>
                  </td>
                </tr>
              ";
        }
        // line 90
        echo "              ";
        if ( !(null === (isset($context["affectedText"]) || array_key_exists("affectedText", $context) ? $context["affectedText"] : (function () { throw new RuntimeError('Variable "affectedText" does not exist.', 90, $this->source); })()))) {
            // line 91
            echo "                <tr>
                  <th>
                    Affected ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 93, $this->source); })()), "disabled", [], "any", false, false, false, 93), "kind", [], "any", false, false, false, 93), "html", null, true);
            echo "
                  </th>
                  <td>
                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["affectedLink"]) || array_key_exists("affectedLink", $context) ? $context["affectedLink"] : (function () { throw new RuntimeError('Variable "affectedLink" does not exist.', 96, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["affectedText"]) || array_key_exists("affectedText", $context) ? $context["affectedText"] : (function () { throw new RuntimeError('Variable "affectedText" does not exist.', 96, $this->source); })()), "html", null, true);
            echo "</a>
                  </td>
                </tr>
              ";
        }
        // line 100
        echo "              <tr>
                <th>
                  Judgehost log snippet
                </th>
                <td>
                  <pre class=\"output_text\">
                    ";
        // line 106
        echo twig_escape_filter($this->env, base64_decode(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 106, $this->source); })()), "judgehostlog", [], "any", false, false, false, 106)), "html", null, true);
        echo "
                  </pre>
                </td>
              </tr>
            </table>
          </div>
        </div>

        ";
        // line 114
        if ((twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 114, $this->source); })()), "status", [], "any", false, false, false, 114) == "open")) {
            // line 115
            echo "          <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source,             // line 119
(isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 119, $this->source); })()), "errorid", [], "any", false, false, false, 119), "action" => "ignore"]), "html", null, true);
            // line 123
            echo "\"
            method=\"post\"
            class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
              <i class=\"fas fa-times\"></i> Ignore error
            </button>
          </form>

          <form action=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source,             // line 135
(isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 135, $this->source); })()), "errorid", [], "any", false, false, false, 135), "action" => "resolve"]), "html", null, true);
            // line 139
            echo "\"
            method=\"post\"
            class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
              <i class=\"fas fa-check\"></i> Mark as resolved and re-enable ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 144
(isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 144, $this->source); })()), "disabled", [], "any", false, false, false, 144), "kind", [], "any", false, false, false, 144), "html", null, true);
            // line 145
            echo "
            </button>
          </form>
        ";
        }
        // line 149
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/internal_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 149,  257 => 145,  255 => 144,  254 => 143,  248 => 139,  246 => 135,  245 => 131,  235 => 123,  233 => 119,  231 => 115,  229 => 114,  218 => 106,  210 => 100,  201 => 96,  195 => 93,  191 => 91,  188 => 90,  180 => 85,  177 => 84,  175 => 81,  174 => 77,  167 => 72,  164 => 71,  156 => 66,  153 => 65,  151 => 62,  150 => 58,  143 => 53,  141 => 52,  135 => 49,  124 => 41,  115 => 34,  109 => 32,  105 => 30,  103 => 29,  89 => 18,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Internal error e{{ internalError.errorid }} - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\" style=\"overflow: auto\">
        <h1>
          Internal error e{{ internalError.errorid }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Description
                </th>
                <td>
                  {% if internalError.description is empty %}
                    <span class=\"nodata\">None</span>
                  {% else %}
                    {{ internalError.description }}
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Time
                </th>
                <td>
                  {{ internalError.time|printtime('%F %T') }}
                </td>
              </tr>
              <tr>
                <th>
                  Status
                </th>
                <td>
                  {{ internalError.status|capitalize }}
                </td>
              </tr>
              {% if internalError.judgingid is not null %}
                <tr>
                  <th>
                    Related judging
                  </th>
                  <td>
                    <a href=\"{{
                      path(
                        'jury_submission_by_judging',
                        {
                          jid: internalError.judgingid
                        }
                      )
                      }}\">
                      j{{ internalError.judgingid }}
                    </a>
                  </td>
                </tr>
              {% endif %}
              {% if internalError.cid is not null %}
                <tr>
                  <th>
                    Related contest
                  </th>
                  <td>
                    <a href=\"{{
                      path(
                        'jury_contest',
                        {
                          contestId: internalError.cid
                        }
                      )
                      }}\">
                      c{{ internalError.cid }}
                    </a>
                  </td>
                </tr>
              {% endif %}
              {% if affectedText is not null %}
                <tr>
                  <th>
                    Affected {{ internalError.disabled.kind }}
                  </th>
                  <td>
                    <a href=\"{{ affectedLink }}\">{{ affectedText }}</a>
                  </td>
                </tr>
              {% endif %}
              <tr>
                <th>
                  Judgehost log snippet
                </th>
                <td>
                  <pre class=\"output_text\">
                    {{ internalError.judgehostlog|base64_decode }}
                  </pre>
                </td>
              </tr>
            </table>
          </div>
        </div>

        {% if internalError.status == 'open' %}
          <form action=\"{{
            path(
              'jury_internal_error_handle',
              {
                errorId: internalError.errorid,
                action: 'ignore'
              }
            )
            }}\"
            method=\"post\"
            class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
              <i class=\"fas fa-times\"></i> Ignore error
            </button>
          </form>

          <form action=\"{{
            path(
              'jury_internal_error_handle',
              {
                errorId: internalError.errorid,
                action: 'resolve'
              }
            )
            }}\"
            method=\"post\"
            class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
              <i class=\"fas fa-check\"></i> Mark as resolved and re-enable {{
                internalError.disabled.kind
              }}
            </button>
          </form>
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/internal_error.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/internal_error.html.twig");
    }
}
