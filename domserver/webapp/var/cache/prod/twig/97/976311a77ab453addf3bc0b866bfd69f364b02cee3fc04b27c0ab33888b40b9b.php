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

/* jury/judgehost.html.twig */
class __TwigTemplate_85889bda7f99fe838ac4da1e9e73c91cd171e6513696c3cf963372f71c510005 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehost.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Judgehost ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 5, $this->source); })()), "hostname", [], "any", false, false, false, 5), "html", null, true);
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
      <div class=\"col-12\">
        <h1>
          Judgehost ";
        // line 18
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 18, $this->source); })()), "hostname", [], "any", false, false, false, 18));
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Name
                </th>
                <td>
                  ";
        // line 29
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 29, $this->source); })()), "hostname", [], "any", false, false, false, 29));
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Active
                </th>
                <td>
                  ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 37, $this->source); })()), "active", [], "any", false, false, false, 37)), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Restriction
                </th>
                <td>
                  ";
        // line 45
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 45, $this->source); })()), "restriction", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <i>None</i>
                  ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction", ["restrictionId" => twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 52, $this->source); })()), "restrictionid", [], "any", false, false, false, 52)]), "html", null, true);
            // line 55
            echo "\">
                      ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 56, $this->source); })()), "restriction", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
                    </a>
                  ";
        }
        // line 59
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Status
                </th>
                <td>
                  ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 66, $this->source); })()), "polltime", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    Judgehost never checked in.
                  ";
        } else {
            // line 69
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 69, $this->source); })()), "html", null, true);
            echo ", last checked in ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source,             // line 70
(isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 70, $this->source); })()), "polltime", [], "any", false, false, false, 70)), "html", null, true);
            // line 71
            echo "s ago.
                  ";
        }
        // line 73
        echo "                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class=\"mb-4\">";
        // line 80
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 81
            if (twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 81, $this->source); })()), "active", [], "any", false, false, false, 81)) {
                // line 82
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_deactivate", ["hostname" => twig_get_attribute($this->env, $this->source,                 // line 86
(isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 86, $this->source); })()), "hostname", [], "any", false, false, false, 86)]);
                // line 90
                echo "              ";
                $context["icon"] = "pause";
                // line 91
                echo "              ";
                $context["action"] = "Deactivate";
                // line 92
                echo "              ";
                $context["class"] = "warning";
            } else {
                // line 94
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_activate", ["hostname" => twig_get_attribute($this->env, $this->source,                 // line 98
(isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 98, $this->source); })()), "hostname", [], "any", false, false, false, 98)]);
                // line 102
                echo "              ";
                $context["icon"] = "play";
                // line 103
                echo "              ";
                $context["action"] = "Activate";
                // line 104
                echo "              ";
                $context["class"] = "success";
            }
            // line 106
            echo $this->extensions['App\Twig\TwigExtension']->button((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 106, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 106, $this->source); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 106, $this->source); })()), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 106, $this->source); })()));
            echo "
            ";
            // line 107
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_delete", ["hostname" => twig_get_attribute($this->env, $this->source,             // line 112
(isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 112, $this->source); })()), "hostname", [], "any", false, false, false, 112)]), "Delete judgehost", "danger", "trash-alt", true);
            // line 120
            echo "
          ";
        }
        // line 122
        echo "          ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/judgehost.html.twig", 122)->display(twig_array_merge($context, ["table" => "judgehost", "id" => twig_get_attribute($this->env, $this->source,         // line 124
(isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 124, $this->source); })()), "hostname", [], "any", false, false, false, 124), "buttonClass" => "btn-primary"]));
        // line 127
        echo "        </div>

        <h3>
          Judgings by ";
        // line 130
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 130, $this->source); })()), "hostname", [], "any", false, false, false, 130));
        echo "
        </h3>

        <div data-ajax-refresh-target>
          ";
        // line 134
        $this->loadTemplate("jury/partials/judgehost_judgings.html.twig", "jury/judgehost.html.twig", 134)->display($context);
        // line 135
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/judgehost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 135,  234 => 134,  227 => 130,  222 => 127,  220 => 124,  218 => 122,  214 => 120,  212 => 112,  211 => 107,  207 => 106,  203 => 104,  200 => 103,  197 => 102,  195 => 98,  194 => 94,  190 => 92,  187 => 91,  184 => 90,  182 => 86,  181 => 82,  179 => 81,  177 => 80,  169 => 73,  165 => 71,  163 => 70,  159 => 69,  155 => 67,  153 => 66,  144 => 59,  138 => 56,  135 => 55,  133 => 52,  131 => 48,  127 => 46,  125 => 45,  114 => 37,  103 => 29,  89 => 18,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Judgehost {{ judgehost.hostname }} - {{ parent() }}
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
          Judgehost {{ judgehost.hostname|printHost }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Name
                </th>
                <td>
                  {{ judgehost.hostname|printHost }}
                </td>
              </tr>
              <tr>
                <th>
                  Active
                </th>
                <td>
                  {{ judgehost.active|printYesNo }}
                </td>
              </tr>
              <tr>
                <th>
                  Restriction
                </th>
                <td>
                  {% if not judgehost.restriction %}
                    <i>None</i>
                  {% else %}
                    <a href=\"{{
                      path(
                        'jury_judgehost_restriction',
                        {
                          restrictionId: judgehost.restrictionid
                        }
                      )
                      }}\">
                      {{ judgehost.restriction.name }}
                    </a>
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Status
                </th>
                <td>
                  {% if not judgehost.polltime %}
                    Judgehost never checked in.
                  {% else %}
                    {{ status }}, last checked in {{
                      judgehost.polltime|printtimediff
                    }}s ago.
                  {% endif %}
                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class=\"mb-4\">
          {%- if is_granted('ROLE_ADMIN') -%}
            {%- if judgehost.active -%}
              {% set url =
                path(
                  'jury_judgehost_deactivate',
                  {
                    hostname: judgehost.hostname
                  }
                )
              %}
              {% set icon = 'pause' %}
              {% set action = 'Deactivate' %}
              {% set class = 'warning' %}
            {%- else -%}
              {% set url =
                path(
                  'jury_judgehost_activate',
                  {
                    hostname: judgehost.hostname
                  }
                )
              %}
              {% set icon = 'play' %}
              {% set action = 'Activate' %}
              {% set class = 'success' %}
            {%- endif -%}
            {{ button(url, action, class, icon) }}
            {{
              button(
                path(
                  'jury_judgehost_delete',
                  {
                    hostname: judgehost.hostname
                  }
                ),
                'Delete judgehost',
                'danger',
                'trash-alt',
                true
              )
            }}
          {% endif %}
          {% include 'jury/partials/rejudge_form.html.twig' with {
            table: 'judgehost',
            id: judgehost.hostname,
            buttonClass: 'btn-primary'
          } %}
        </div>

        <h3>
          Judgings by {{ judgehost.hostname|printHost }}
        </h3>

        <div data-ajax-refresh-target>
          {% include 'jury/partials/judgehost_judgings.html.twig' %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/judgehost.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/judgehost.html.twig");
    }
}
