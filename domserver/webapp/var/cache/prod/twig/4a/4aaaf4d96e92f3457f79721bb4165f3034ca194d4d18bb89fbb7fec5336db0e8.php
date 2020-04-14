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
        echo "Refresh cache - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Refresh cache</h1>

    ";
        // line 15
        if ((isset($context["doRefresh"]) || array_key_exists("doRefresh", $context) ? $context["doRefresh"] : (function () { throw new RuntimeError('Variable "doRefresh" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <div id=\"refresh-status\"></div>
    ";
        } else {
            // line 18
            echo "        <div class=\"alert alert-warning\">
            <h5 class=\"alert-heading\">Significant database impact</h5>
            <hr>
            <p>
                Refreshing the scoreboard cache can have a significant impact on the database load,
                and is not necessary in normal operating circumstances.
                <br/><br/>
                Refresh scoreboard cache for
                ";
            // line 26
            if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 26, $this->source); })()))) {
                // line 27
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 27, $this->source); })()), "shortname", [], "any", false, false, false, 27), "html", null, true);
                echo "
                ";
            } else {
                // line 29
                echo "                    all active contests
                ";
            }
            // line 31
            echo "                now?
            </p>
            <form action=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\" method=\"post\">
                ";
            // line 34
            if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                    <input type=\"hidden\" name=\"cid\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 35, $this->source); })()), "cid", [], "any", false, false, false, 35), "html", null, true);
                echo "\"/>
                ";
            }
            // line 37
            echo "                <button type=\"submit\" class=\"btn btn-danger\" name=\"refresh\">
                    <i class=\"fas fa-sync-alt\"></i> Refresh now!
                </button>
            </form>
        </div>
    ";
        }
    }

    // line 45
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    <script>
        \$(function () {
            var \$status = \$('div#refresh-status');
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
        echo "', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            xhr.onprogress = function (e) {
                \$status.html(e.currentTarget.response);

                // Scroll page to bottom of div to keep showing progress
                \$('html, body').animate({scrollTop: \$status.offset().top + \$status.height()}, 0);
            };

            xhr.send(";
        // line 61
        if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 61, $this->source); })()))) {
            echo "'cid=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 61, $this->source); })()), "cid", [], "any", false, false, false, 61), "html", null, true);
            echo "'";
        }
        echo ");
        });
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
        return array (  162 => 61,  148 => 50,  142 => 46,  138 => 45,  128 => 37,  122 => 35,  120 => 34,  116 => 33,  112 => 31,  108 => 29,  102 => 27,  100 => 26,  90 => 18,  86 => 16,  84 => 15,  79 => 12,  75 => 11,  69 => 8,  64 => 7,  60 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Refresh cache - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Refresh cache</h1>

    {% if doRefresh %}
        <div id=\"refresh-status\"></div>
    {% else %}
        <div class=\"alert alert-warning\">
            <h5 class=\"alert-heading\">Significant database impact</h5>
            <hr>
            <p>
                Refreshing the scoreboard cache can have a significant impact on the database load,
                and is not necessary in normal operating circumstances.
                <br/><br/>
                Refresh scoreboard cache for
                {% if current_contest is not empty %}
                    {{ current_contest.shortname }}
                {% else %}
                    all active contests
                {% endif %}
                now?
            </p>
            <form action=\"{{ path('jury_refresh_cache') }}\" method=\"post\">
                {% if current_contest is not empty %}
                    <input type=\"hidden\" name=\"cid\" value=\"{{ current_contest.cid }}\"/>
                {% endif %}
                <button type=\"submit\" class=\"btn btn-danger\" name=\"refresh\">
                    <i class=\"fas fa-sync-alt\"></i> Refresh now!
                </button>
            </form>
        </div>
    {% endif %}
{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            var \$status = \$('div#refresh-status');
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ (path('jury_refresh_cache')) }}', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            xhr.onprogress = function (e) {
                \$status.html(e.currentTarget.response);

                // Scroll page to bottom of div to keep showing progress
                \$('html, body').animate({scrollTop: \$status.offset().top + \$status.height()}, 0);
            };

            xhr.send({% if current_contest is not empty %}'cid={{ current_contest.cid }}'{% endif %});
        });
    </script>
{% endblock %}
", "jury/refresh_cache.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/refresh_cache.html.twig");
    }
}
