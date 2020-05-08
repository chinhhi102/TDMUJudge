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

/* jury/refresh_cache.html.twig */
class __TwigTemplate_d1ade71e9167df3f9861d569556b48073b9c69fc63cc9dd581d7335756b42481 extends \Twig\Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/refresh_cache.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/refresh_cache.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Refresh cache - ";
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
          Refresh cache
        </h1>

        ";
        // line 21
        if ((isset($context["doRefresh"]) || array_key_exists("doRefresh", $context) ? $context["doRefresh"] : (function () { throw new RuntimeError('Variable "doRefresh" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "          <div id=\"refresh-status\"></div>
        ";
        } else {
            // line 24
            echo "          <div class=\"alert alert-warning\">
            <h5 class=\"alert-heading\">
              Significant database impact
            </h5>
            <hr />
            <p>
              Refreshing the scoreboard cache can have a significant impact on
              the database load, and is not necessary in normal operating
              circumstances.
              <br /><br />
              Refresh scoreboard cache for";
            // line 34
            if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 35, $this->source); })()), "shortname", [], "any", false, false, false, 35), "html", null, true);
                echo "
              ";
            } else {
                // line 37
                echo "                all active contests
              ";
            }
            // line 38
            echo "now?
            </p>
            <form action=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\" method=\"post\">
              ";
            // line 41
            if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 41, $this->source); })()))) {
                // line 42
                echo "                <input type=\"hidden\"
                  name=\"cid\"
                  value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 44, $this->source); })()), "cid", [], "any", false, false, false, 44), "html", null, true);
                echo "\" />
              ";
            }
            // line 46
            echo "              <button type=\"submit\" class=\"btn btn-danger\" name=\"refresh\">
                <i class=\"fas fa-sync-alt\"></i> Refresh now!
              </button>
            </form>
          </div>
        ";
        }
        // line 52
        echo "      </div>
    </div>
  </div>
";
    }

    // line 57
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "  <script>
    \$(function () { var \$status = \$('div#refresh-status'); var xhr = new
    XMLHttpRequest(); xhr.open('POST', '";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
        echo "',
    true); xhr.setRequestHeader('Content-Type',
    'application/x-www-form-urlencoded');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onprogress = function (e) { \$status.html(e.currentTarget.response);

    // Scroll page to bottom of div to keep showing progress \$('html,
    body').animate({scrollTop: \$status.offset().top + \$status.height()}, 0); };

    xhr.send(";
        // line 70
        if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 70, $this->source); })()))) {
            // line 71
            echo "      'cid=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 71, $this->source); })()), "cid", [], "any", false, false, false, 71), "html", null, true);
            echo "'
    ";
        }
        // line 72
        echo "); });
  </script>
";
    }

    public function getTemplateName()
    {
        return "jury/refresh_cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 72,  178 => 71,  176 => 70,  163 => 60,  159 => 58,  155 => 57,  148 => 52,  140 => 46,  135 => 44,  131 => 42,  129 => 41,  125 => 40,  121 => 38,  117 => 37,  111 => 35,  109 => 34,  97 => 24,  93 => 22,  91 => 21,  82 => 14,  78 => 13,  72 => 10,  67 => 9,  63 => 8,  56 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Refresh cache - {{ parent() }}
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
          Refresh cache
        </h1>

        {% if doRefresh %}
          <div id=\"refresh-status\"></div>
        {% else %}
          <div class=\"alert alert-warning\">
            <h5 class=\"alert-heading\">
              Significant database impact
            </h5>
            <hr />
            <p>
              Refreshing the scoreboard cache can have a significant impact on
              the database load, and is not necessary in normal operating
              circumstances.
              <br /><br />
              Refresh scoreboard cache for{% if current_contest is not empty %}
                {{ current_contest.shortname }}
              {% else %}
                all active contests
              {% endif %}now?
            </p>
            <form action=\"{{ path('jury_refresh_cache') }}\" method=\"post\">
              {% if current_contest is not empty %}
                <input type=\"hidden\"
                  name=\"cid\"
                  value=\"{{ current_contest.cid }}\" />
              {% endif %}
              <button type=\"submit\" class=\"btn btn-danger\" name=\"refresh\">
                <i class=\"fas fa-sync-alt\"></i> Refresh now!
              </button>
            </form>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}

{% block extrafooter %}
  <script>
    \$(function () { var \$status = \$('div#refresh-status'); var xhr = new
    XMLHttpRequest(); xhr.open('POST', '{{ path('jury_refresh_cache') }}',
    true); xhr.setRequestHeader('Content-Type',
    'application/x-www-form-urlencoded');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onprogress = function (e) { \$status.html(e.currentTarget.response);

    // Scroll page to bottom of div to keep showing progress \$('html,
    body').animate({scrollTop: \$status.offset().top + \$status.height()}, 0); };

    xhr.send({% if current_contest is not empty %}
      'cid={{ current_contest.cid }}'
    {% endif %}); });
  </script>
{% endblock %}
", "jury/refresh_cache.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/refresh_cache.html.twig");
    }
}
