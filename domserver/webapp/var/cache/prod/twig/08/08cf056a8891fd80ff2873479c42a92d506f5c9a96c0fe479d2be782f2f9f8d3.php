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

/* team/partials/submission_list.html.twig */
class __TwigTemplate_aef5151390ae848dfbfcfef314a2a327f51c98fe2cad3c7e2add1bd5188f4028 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        if (twig_test_empty((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 7
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
        </tr>
        </thead>
        <tbody>";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 18
                echo "            ";
                $context["link"] = null;
                // line 19
                echo "            ";
                if ((((((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 19) < twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 19, $this->source); })()), "endtime", [], "any", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 19)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), "result", [], "any", false, false, false, 19))) && ( !(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 19, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), "verified", [], "any", false, false, false, 19)))) {
                    // line 20
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 20)]);
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "
            ";
                // line 23
                $context["classes"] = "";
                // line 24
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                ";
                    $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 25, $this->source); })()) . " ignore");
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "            ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27)) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), "seen", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "                ";
                    $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 28, $this->source); })()) . " unseen");
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 30, $this->source); })()), "html", null, true);
                echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 32
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                        ";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 33), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 33)), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 37
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 37, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 37, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 38), "shortname", [], "any", false, false, false, 38), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 42
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 42, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 42, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                echo "\">
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 43), "html", null, true);
                echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 47
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 47, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 47, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 48
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 48) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 48), "endtime", [], "any", false, false, false, 48))) {
                    // line 49
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("too-late");
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 50
$context["submission"], "judgings", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), "result", [], "any", false, false, false, 50)))) {
                    // line 51
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } elseif ((                // line 52
(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 52, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 52), "first", [], "any", false, false, false, 52), "verified", [], "any", false, false, false, 52))) {
                    // line 53
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } else {
                    // line 55
                    echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), "result", [], "any", false, false, false, 55));
                }
                // line 57
                echo "                    </a>
                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </tbody>
    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "team/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 61,  175 => 57,  172 => 55,  169 => 53,  167 => 52,  165 => 51,  163 => 50,  160 => 49,  158 => 48,  151 => 47,  144 => 43,  134 => 42,  127 => 38,  117 => 37,  110 => 33,  102 => 32,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  57 => 17,  46 => 7,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of submissions for a team page #}
{# @var submission \\App\\Entity\\Submission #}

{% if submissions is empty %}
    <div class=\"alert alert-warning\">No submissions</div>
{% else %}
    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
        </tr>
        </thead>
        <tbody>
        {%- for submission in submissions %}
            {% set link = null %}
            {% if submission.submittime < current_team_contest.endtime and submission.result and submission.judgings.first is not empty and submission.judgings.first.result is not empty and (not verificationRequired or submission.judgings.first.verified) %}
                {% set link = path('team_submission', {submitId: submission.submitid}) %}
            {% endif %}

            {% set classes = '' %}
            {% if not submission.valid %}
                {% set classes = classes ~ ' ignore' %}
            {% endif %}
            {% if submission.judgings.first is empty or not submission.judgings.first.seen %}
                {% set classes = classes ~ ' unseen' %}
            {% endif %}
            <tr class=\"{{ classes }}\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %}>
                        {{ submission.submittime | printtime(null, submission.contest) }}
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %} title=\"{{ submission.problem.name }}\">
                        {{ submission.contestProblem.shortname }}
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %} title=\"{{ submission.language.name }}\">
                        {{ submission.langid }}
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %}>
                        {%- if submission.submittime > submission.contest.endtime %}
                            {{ 'too-late' | printResult }}
                        {%- elseif submission.judgings.first is empty or submission.judgings.first.result is empty %}
                            {{- '' | printResult -}}
                        {%- elseif verificationRequired and not submission.judgings.first.verified %}
                            {{- '' | printResult -}}
                        {%- else %}
                            {{- submission.judgings.first.result | printResult -}}
                        {%- endif %}
                    </a>
                </td>
            </tr>
        {%- endfor %}
        </tbody>
    </table>
{% endif %}
", "team/partials/submission_list.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/team/partials/submission_list.html.twig");
    }
}
