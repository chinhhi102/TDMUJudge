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

/* jury/judgehost_restriction.html.twig */
class __TwigTemplate_dca7d3b1e69e9c206794c6ff84071ef92fa6f82893c84e056994bb66898dc13d extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehost_restriction.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehost_restriction.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Judgehost restriction ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
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
        echo "<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                
    <h1>Judgehost restriction ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 23, $this->source); })()), "restrictionid", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Restrict to contests</th>
                    ";
        // line 31
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 31, $this->source); })()), "contests", [], "any", false, false, false, 31))) {
            // line 32
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 34
            echo "                        <td>
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 35, $this->source); })()), "contests", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
                // line 36
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contests"]) || array_key_exists("contests", $context) ? $context["contests"] : (function () { throw new RuntimeError('Variable "contests" does not exist.', 36, $this->source); })()), $context["contest"], [], "array", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contests"]) || array_key_exists("contests", $context) ? $context["contests"] : (function () { throw new RuntimeError('Variable "contests" does not exist.', 36, $this->source); })()), $context["contest"], [], "array", false, false, false, 36), "shortname", [], "any", false, false, false, 36), "html", null, true);
                echo " - c";
                echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                        </td>
                    ";
        }
        // line 40
        echo "                </tr>
                <tr>
                    <th>Restrict to problems</th>
                    ";
        // line 43
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 43, $this->source); })()), "problems", [], "any", false, false, false, 43))) {
            // line 44
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 46
            echo "                        <td>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 47, $this->source); })()), "problems", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 48
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 48, $this->source); })()), $context["problem"], [], "array", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                echo " (p";
                echo twig_escape_filter($this->env, $context["problem"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        </td>
                    ";
        }
        // line 52
        echo "                </tr>
                <tr>
                    <th>Restrict to languages</th>
                    ";
        // line 55
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 55, $this->source); })()), "languages", [], "any", false, false, false, 55))) {
            // line 56
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 58
            echo "                        <td>
                            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 59, $this->source); })()), "languages", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 60
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 60, $this->source); })()), $context["language"], [], "array", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                        </td>
                    ";
        }
        // line 64
        echo "                </tr>
                <tr>
                    <th>Rejudge by same judgehost</th>
                    <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 67, $this->source); })()), "rejudgeOwn", [], "any", false, false, false, 67)), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 74
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 75
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction_edit", ["restrictionId" => twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 75, $this->source); })()), "restrictionid", [], "any", false, false, false, 75)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 76
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction_delete", ["restrictionId" => twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 76, $this->source); })()), "restrictionid", [], "any", false, false, false, 76)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 78
        echo "    </div>

    <h2>Judgehosts having restriction ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 80, $this->source); })()), "name", [], "any", false, false, false, 80), "html", null, true);
        echo "</h2>
    ";
        // line 81
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 81, $this->source); })()), "judgehosts", [], "any", false, false, false, 81))) {
            // line 82
            echo "        <p class=\"nodata\">no judgehosts</p>
    ";
        } else {
            // line 84
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"data-table table table-sm table-striped\">
                    <thead>
                    <tr>
                        <th>hostname</th>
                        <th>active</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 94, $this->source); })()), "judgehosts", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["judgehost"]) {
                // line 95
                echo "                        <tr>
                            <td ";
                // line 96
                if ( !twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 96)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                                <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 97)]), "html", null, true);
                echo "\">
                                    ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 98), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td ";
                // line 101
                if ( !twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 101)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                                <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 102)]), "html", null, true);
                echo "\">
                                    ";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 103)), "html", null, true);
                echo "
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judgehost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 113
        echo "            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/judgehost_restriction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 113,  301 => 108,  290 => 103,  286 => 102,  280 => 101,  274 => 98,  270 => 97,  264 => 96,  261 => 95,  257 => 94,  245 => 84,  241 => 82,  239 => 81,  235 => 80,  231 => 78,  226 => 76,  222 => 75,  220 => 74,  211 => 67,  206 => 64,  202 => 62,  191 => 60,  187 => 59,  184 => 58,  180 => 56,  178 => 55,  173 => 52,  169 => 50,  158 => 48,  154 => 47,  151 => 46,  147 => 44,  145 => 43,  140 => 40,  136 => 38,  123 => 36,  119 => 35,  116 => 34,  112 => 32,  110 => 31,  103 => 27,  96 => 23,  86 => 16,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Judgehost restriction {{ judgehostRestriction.name }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                
    <h1>Judgehost restriction {{ judgehostRestriction.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ judgehostRestriction.restrictionid }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ judgehostRestriction.name }}</td>
                </tr>
                <tr>
                    <th>Restrict to contests</th>
                    {% if judgehostRestriction.contests is empty %}
                        <td class=\"nodata\">none</td>
                    {% else %}
                        <td>
                            {% for contest in judgehostRestriction.contests %}
                                {{ contests[contest].name }} ({{ contests[contest].shortname }} - c{{ contest }})<br/>
                            {% endfor %}
                        </td>
                    {% endif %}
                </tr>
                <tr>
                    <th>Restrict to problems</th>
                    {% if judgehostRestriction.problems is empty %}
                        <td class=\"nodata\">none</td>
                    {% else %}
                        <td>
                            {% for problem in judgehostRestriction.problems %}
                                {{ problems[problem].name }} (p{{ problem }})<br/>
                            {% endfor %}
                        </td>
                    {% endif %}
                </tr>
                <tr>
                    <th>Restrict to languages</th>
                    {% if judgehostRestriction.languages is empty %}
                        <td class=\"nodata\">none</td>
                    {% else %}
                        <td>
                            {% for language in judgehostRestriction.languages %}
                                {{ languages[language].name }} ({{ language }})<br/>
                            {% endfor %}
                        </td>
                    {% endif %}
                </tr>
                <tr>
                    <th>Rejudge by same judgehost</th>
                    <td>{{ judgehostRestriction.rejudgeOwn | printYesNo }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_judgehost_restriction_edit', {'restrictionId': judgehostRestriction.restrictionid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_judgehost_restriction_delete', {'restrictionId': judgehostRestriction.restrictionid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
    </div>

    <h2>Judgehosts having restriction {{ judgehostRestriction.name }}</h2>
    {% if judgehostRestriction.judgehosts is empty %}
        <p class=\"nodata\">no judgehosts</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"data-table table table-sm table-striped\">
                    <thead>
                    <tr>
                        <th>hostname</th>
                        <th>active</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for judgehost in judgehostRestriction.judgehosts %}
                        <tr>
                            <td {% if not judgehost.active %}class=\"disabled\"{% endif %}>
                                <a href=\"{{ path('jury_judgehost', {'hostname': judgehost.hostname}) }}\">
                                    {{ judgehost.hostname }}
                                </a>
                            </td>
                            <td {% if not judgehost.active %}class=\"disabled\"{% endif %}>
                                <a href=\"{{ path('jury_judgehost', {'hostname': judgehost.hostname}) }}\">
                                    {{ judgehost.active | printYesNo }}
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endif %}
            </div>
        </div>
    </div>

{% endblock %}
", "jury/judgehost_restriction.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/judgehost_restriction.html.twig");
    }
}
