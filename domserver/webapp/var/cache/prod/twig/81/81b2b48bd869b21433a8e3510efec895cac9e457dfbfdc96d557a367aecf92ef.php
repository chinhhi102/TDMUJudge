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

/* partials/scoreboard_summary.html.twig */
class __TwigTemplate_045926efd8d35ccbb6d7507fe2d751065d339569bf1d670db401591eed00bab8 extends \Twig\Template
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
        // line 1
        if ((null === (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 2, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 2, $this->source); })()))) {
                // line 3
                echo "        <tr style=\"border-top: 2px solid black;\">
            ";
                // line 4
                $context["summaryColspan"] = 3;
                // line 5
                echo "            ";
                if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 5, $this->source); })())) {
                    // line 6
                    echo "                ";
                    $context["summaryColspan"] = ((isset($context["summaryColspan"]) || array_key_exists("summaryColspan", $context) ? $context["summaryColspan"] : (function () { throw new RuntimeError('Variable "summaryColspan" does not exist.', 6, $this->source); })()) + 1);
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "            <td id=\"scoresummary\" title=\"Summary\" colspan=\"";
                echo twig_escape_filter($this->env, (isset($context["summaryColspan"]) || array_key_exists("summaryColspan", $context) ? $context["summaryColspan"] : (function () { throw new RuntimeError('Variable "summaryColspan" does not exist.', 8, $this->source); })()), "html", null, true);
                echo "\">Summary</td>
            ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 9, $this->source); })()), "showPoints", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                <td class=\"scorenc\"></td>
            ";
                } else {
                    // line 12
                    echo "                <td title=\"total solved\" class=\"scorenc\">
                    ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 13, $this->source); })()), "summary", [], "any", false, false, false, 13), "numberOfPoints", [0 => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 13, $this->source); })())], "method", false, false, false, 13), "html", null, true);
                    echo "
                </td>
            ";
                }
                // line 16
                echo "            <td></td>
            ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 17, $this->source); })()), "problems", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 18
                    echo "                ";
                    $context["summary"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 18, $this->source); })()), "summary", [], "any", false, false, false, 18), "problem", [0 => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 18)], "method", false, false, false, 18);
                    // line 19
                    echo "                <td style=\"text-align: left;\">
                    ";
                    // line 20
                    $context["link"] = null;
                    // line 21
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 21, $this->source); })())) {
                        // line 22
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 22)]);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                    <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 24, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 24, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <i class=\"fas fa-thumbs-up fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of accepted submissions\">
                                ";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 27, $this->source); })()), "numberOfCorrectSubmissions", [0 => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 27, $this->source); })())], "method", false, false, false, 27), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-thumbs-down fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of rejected submissions\">
                                ";
                    // line 33
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 33, $this->source); })()), "numberOfSubmissions", [0 => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 33, $this->source); })())], "method", false, false, false, 33) - twig_get_attribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 33, $this->source); })()), "numberOfCorrectSubmissions", [0 => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 33, $this->source); })())], "method", false, false, false, 33)), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-question-circle fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of pending submissions\">
                                ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 39, $this->source); })()), "numberOfPendingSubmissions", [0 => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 39, $this->source); })())], "method", false, false, false, 39), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-clock fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"first solved\">
                            ";
                    // line 45
                    if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 45, $this->source); })()), "bestTimeInMinutes", [0 => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 45, $this->source); })())], "method", false, false, false, 45))) {
                        // line 46
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 46, $this->source); })()), "bestTimeInMinutes", [0 => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 46, $this->source); })())], "method", false, false, false, 46), "html", null, true);
                        echo "min
                            ";
                    } else {
                        // line 48
                        echo "                                n/a
                            ";
                    }
                    // line 50
                    echo "                        </span>
                    </a>
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "        </tr>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 54,  150 => 50,  146 => 48,  140 => 46,  138 => 45,  129 => 39,  120 => 33,  111 => 27,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  83 => 18,  79 => 17,  76 => 16,  70 => 13,  67 => 12,  63 => 10,  61 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if limitToTeamIds is null %}
    {% if showTeamSubmissions or jury %}
        <tr style=\"border-top: 2px solid black;\">
            {% set summaryColspan = 3 %}
            {% if showAffiliationLogos %}
                {% set summaryColspan = summaryColspan + 1 %}
            {% endif %}
            <td id=\"scoresummary\" title=\"Summary\" colspan=\"{{ summaryColspan }}\">Summary</td>
            {% if scoreboard.showPoints %}
                <td class=\"scorenc\"></td>
            {% else %}
                <td title=\"total solved\" class=\"scorenc\">
                    {{ scoreboard.summary.numberOfPoints(sortOrder) }}
                </td>
            {% endif %}
            <td></td>
            {% for problem in scoreboard.problems %}
                {% set summary = scoreboard.summary.problem(problem.probid) %}
                <td style=\"text-align: left;\">
                    {% set link = null %}
                    {% if jury %}
                        {% set link = path('jury_problem', {'probId': problem.probid}) %}
                    {% endif %}
                    <a {% if link %}href=\"{{ link }}\"{% endif %}>
                        <i class=\"fas fa-thumbs-up fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of accepted submissions\">
                                {{ summary.numberOfCorrectSubmissions(sortOrder) }}
                            </span>
                        <br/>

                        <i class=\"fas fa-thumbs-down fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of rejected submissions\">
                                {{ summary.numberOfSubmissions(sortOrder) - summary.numberOfCorrectSubmissions(sortOrder) }}
                            </span>
                        <br/>

                        <i class=\"fas fa-question-circle fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of pending submissions\">
                                {{ summary.numberOfPendingSubmissions(sortOrder) }}
                            </span>
                        <br/>

                        <i class=\"fas fa-clock fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"first solved\">
                            {% if summary.bestTimeInMinutes(sortOrder) is not null %}
                                {{ summary.bestTimeInMinutes(sortOrder) }}min
                            {% else %}
                                n/a
                            {% endif %}
                        </span>
                    </a>
                </td>
            {% endfor %}
        </tr>
    {% endif %}
{% endif %}
", "partials/scoreboard_summary.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/partials/scoreboard_summary.html.twig");
    }
}
