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

/* jury/check_judgings.html.twig */
class __TwigTemplate_ab381e02f42025e8fb14607cc6c899ae991497c2e5c4179d4c543b4406622502 extends \Twig\Template
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
        $macros["checkJudgings"] = $this->macros["checkJudgings"] = $this;
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/check_judgings.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/check_judgings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Judging verifier - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                
    <h1>Judging verifier</h1>

    <p>
        ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["numChecked"]) || array_key_exists("numChecked", $context) ? $context["numChecked"] : (function () { throw new RuntimeError('Variable "numChecked" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " submissions checked:
        ";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["unexpected"]) || array_key_exists("unexpected", $context) ? $context["unexpected"] : (function () { throw new RuntimeError('Variable "unexpected" does not exist.', 21, $this->source); })())), "html", null, true);
        echo " unexpected results,
        ";
        // line 22
        if ((isset($context["verifyMultiple"]) || array_key_exists("verifyMultiple", $context) ? $context["verifyMultiple"] : (function () { throw new RuntimeError('Variable "verifyMultiple" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 23, $this->source); })())), "html", null, true);
            echo " automatically verified (multiple outcomes),
        ";
        } else {
            // line 25
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 25, $this->source); })())), "html", null, true);
            echo " to check manually,
        ";
        }
        // line 27
        echo "        ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 27, $this->source); })())), "html", null, true);
        echo " automatically verified
        <br>
        ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["numUnchecked"]) || array_key_exists("numUnchecked", $context) ? $context["numUnchecked"] : (function () { throw new RuntimeError('Variable "numUnchecked" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " submissions not checked:
        ";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["earlier"]) || array_key_exists("earlier", $context) ? $context["earlier"] : (function () { throw new RuntimeError('Variable "earlier" does not exist.', 30, $this->source); })())), "html", null, true);
        echo " verified earlier,
        ";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nomatch"]) || array_key_exists("nomatch", $context) ? $context["nomatch"] : (function () { throw new RuntimeError('Variable "nomatch" does not exist.', 31, $this->source); })())), "html", null, true);
        echo " without magic string
    </p>

    ";
        // line 44
        echo "
    ";
        // line 45
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["unexpected", "Unexpected results", (isset($context["unexpected"]) || array_key_exists("unexpected", $context) ? $context["unexpected"] : (function () { throw new RuntimeError('Variable "unexpected" does not exist.', 45, $this->source); })())], 45, $context, $this->getSourceContext());
        echo "
    ";
        // line 46
        if ((isset($context["verifyMultiple"]) || array_key_exists("verifyMultiple", $context) ? $context["verifyMultiple"] : (function () { throw new RuntimeError('Variable "verifyMultiple" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Automatically verified (multiple outcomes)", (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 47, $this->source); })()), true], 47, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 49
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Check manually", (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 49, $this->source); })())], 49, $context, $this->getSourceContext());
            echo "
        ";
            // line 50
            if ( !twig_test_empty((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 50, $this->source); })()))) {
                // line 51
                echo "            <form action=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
                echo "\" method=\"post\">
                <input type=\"hidden\" name=\"verify_multiple\" value=\"1\">
                <p>
                    Verify all multiple outcome submissions:
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Verify</button>
                </p>
            </form>
        ";
            }
            // line 59
            echo "    ";
        }
        // line 60
        echo "    ";
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["verified", "Automatically verified", (isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 60, $this->source); })()), true], 60, $context, $this->getSourceContext());
        echo "
    ";
        // line 61
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["earlier", "Verified earlier", (isset($context["earlier"]) || array_key_exists("earlier", $context) ? $context["earlier"] : (function () { throw new RuntimeError('Variable "earlier" does not exist.', 61, $this->source); })()), true], 61, $context, $this->getSourceContext());
        echo "
    ";
        // line 62
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["nomatch", "Without magic string", (isset($context["nomatch"]) || array_key_exists("nomatch", $context) ? $context["nomatch"] : (function () { throw new RuntimeError('Variable "nomatch" does not exist.', 62, $this->source); })()), true], 62, $context, $this->getSourceContext());
        echo "

            </div>
        </div>
    </div>
";
    }

    // line 34
    public function macro_verifyResults($__id__ = null, $__header__ = null, $__results__ = null, $__collapse__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "header" => $__header__,
            "results" => $__results__,
            "collapse" => $__collapse__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "        ";
            if ( !twig_test_empty((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 35, $this->source); })()))) {
                // line 36
                echo "            <h2><a class=\"collapse-link\" href=\"javascript:collapse('#detail";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 36, $this->source); })()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 36, $this->source); })()), "html", null, true);
                echo "</a></h2>
            <ul id=\"detail";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "\"";
                if ((((isset($context["collapse"]) || array_key_exists("collapse", $context))) ? (_twig_default_filter((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 37, $this->source); })()), false)) : (false))) {
                    echo " class=\"d-none\"";
                }
                echo ">
                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 38, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 39
                    echo "                    <li>";
                    echo $context["result"];
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "            </ul>
        ";
            }
            // line 43
            echo "    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "jury/check_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 43,  234 => 41,  225 => 39,  221 => 38,  213 => 37,  206 => 36,  203 => 35,  187 => 34,  177 => 62,  173 => 61,  168 => 60,  165 => 59,  153 => 51,  151 => 50,  146 => 49,  140 => 47,  138 => 46,  134 => 45,  131 => 44,  125 => 31,  121 => 30,  117 => 29,  111 => 27,  105 => 25,  99 => 23,  97 => 22,  93 => 21,  89 => 20,  80 => 13,  76 => 12,  70 => 9,  65 => 8,  61 => 7,  53 => 5,  48 => 1,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import _self as checkJudgings %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Judging verifier - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                
    <h1>Judging verifier</h1>

    <p>
        {{ numChecked }} submissions checked:
        {{ unexpected | length }} unexpected results,
        {% if verifyMultiple %}
            {{ multiple | length }} automatically verified (multiple outcomes),
        {% else %}
            {{ multiple | length }} to check manually,
        {% endif %}
        {{ verified | length }} automatically verified
        <br>
        {{ numUnchecked }} submissions not checked:
        {{ earlier | length }} verified earlier,
        {{ nomatch | length }} without magic string
    </p>

    {% macro verifyResults(id, header, results, collapse) %}
        {% if results is not empty %}
            <h2><a class=\"collapse-link\" href=\"javascript:collapse('#detail{{ id }}')\">{{ header }}</a></h2>
            <ul id=\"detail{{ id }}\"{% if collapse | default(false) %} class=\"d-none\"{% endif %}>
                {% for result in results %}
                    <li>{{ result | raw }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endmacro %}

    {{ checkJudgings.verifyResults('unexpected', 'Unexpected results', unexpected) }}
    {% if verifyMultiple %}
        {{ checkJudgings.verifyResults('multiple', 'Automatically verified (multiple outcomes)', multiple, true) }}
    {% else %}
        {{ checkJudgings.verifyResults('multiple', 'Check manually', multiple) }}
        {% if multiple is not empty %}
            <form action=\"{{ path('jury_judging_verifier') }}\" method=\"post\">
                <input type=\"hidden\" name=\"verify_multiple\" value=\"1\">
                <p>
                    Verify all multiple outcome submissions:
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Verify</button>
                </p>
            </form>
        {% endif %}
    {% endif %}
    {{ checkJudgings.verifyResults('verified', 'Automatically verified', verified, true) }}
    {{ checkJudgings.verifyResults('earlier', 'Verified earlier', earlier, true) }}
    {{ checkJudgings.verifyResults('nomatch', 'Without magic string', nomatch, true) }}

            </div>
        </div>
    </div>
{% endblock %}
", "jury/check_judgings.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/check_judgings.html.twig");
    }
}
