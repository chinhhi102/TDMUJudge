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
class __TwigTemplate_acb5263d8db4db662a711a81ed9cf246c33606fc7bb1ef90d41ef1b047e2b0c2 extends \Twig\Template
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
        if ((null === ($context["limitToTeamIds"] ?? null))) {
            // line 2
            echo "    ";
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 3
                echo "        <tr style=\"border-top: 2px solid black;\">
            ";
                // line 4
                $context["summaryColspan"] = 3;
                // line 5
                echo "            ";
                if (($context["showAffiliationLogos"] ?? null)) {
                    // line 6
                    echo "                ";
                    $context["summaryColspan"] = (($context["summaryColspan"] ?? null) + 1);
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "            <td id=\"scoresummary\" title=\"Summary\" colspan=\"";
                echo twig_escape_filter($this->env, ($context["summaryColspan"] ?? null), "html", null, true);
                echo "\">Summary</td>
            ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                <td class=\"scorenc\"></td>
            ";
                } else {
                    // line 12
                    echo "                <td title=\"total solved\" class=\"scorenc\">
                    ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 13), "numberOfPoints", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 13), "html", null, true);
                    echo "
                </td>
            ";
                }
                // line 16
                echo "            <td></td>
            ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 18
                    echo "                ";
                    $context["summary"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 18), "problem", [0 => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 18)], "method", false, false, false, 18);
                    // line 19
                    echo "                <td style=\"text-align: left;\">
                    ";
                    // line 20
                    $context["link"] = null;
                    // line 21
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 22
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 22)]);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                    <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <i class=\"fas fa-thumbs-up fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of accepted submissions\">
                                ";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numberOfCorrectSubmissions", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 27), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-thumbs-down fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of rejected submissions\">
                                ";
                    // line 33
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numberOfSubmissions", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 33) - twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numberOfCorrectSubmissions", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 33)), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-question-circle fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of pending submissions\">
                                ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numberOfPendingSubmissions", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 39), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-clock fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"first solved\">
                            ";
                    // line 45
                    if ( !(null === twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 45))) {
                        // line 46
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 46), "html", null, true);
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
        return new Source("", "partials/scoreboard_summary.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/partials/scoreboard_summary.html.twig");
    }
}
