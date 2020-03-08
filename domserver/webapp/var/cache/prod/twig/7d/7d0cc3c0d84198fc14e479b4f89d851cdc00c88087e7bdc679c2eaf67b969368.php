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

/* partials/scoreboard.html.twig */
class __TwigTemplate_12e5fc62f590eabba9dfb701e73b37d1f0b0ea613bca279f9a1cf959f399bcc9 extends \Twig\Template
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
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 2
            echo "    ";
            $context["static"] = false;
        }
        // line 4
        echo "
";
        // line 5
        if (((((isset($context["ajax"]) || array_key_exists("ajax", $context)) && ($context["ajax"] ?? null)) &&  !($context["static"] ?? null)) && ($context["public"] ?? null))) {
            // line 6
            echo "    <div class=\"d-none\">
        ";
            // line 7
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 7)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((null === ($context["current_contest"] ?? null))) {
            // line 12
            echo "    <p class=\"nodata\">No active contest</p>
";
        } else {
            // line 14
            echo "    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
            <span style=\"color: DimGray; margin-left: auto;\">
                ";
            // line 18
            if ((null === ($context["scoreboard"] ?? null))) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart(($context["current_contest"] ?? null)), "html", null, true);
                echo "
                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 20), "showFinal", [0 => ($context["jury"] ?? null)], "method", false, false, false, 20)) {
                // line 21
                echo "                    ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "finalizetime", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                        preliminary results - not final
                    ";
                } else {
                    // line 24
                    echo "                        final standings
                    ";
                }
                // line 26
                echo "                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 26), "stopped", [], "any", false, false, false, 26)) {
                // line 27
                echo "                    contest over, waiting for results
                ";
            } else {
                // line 29
                echo "                    starts: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "starttime", [], "any", false, false, false, 29)), "html", null, true);
                echo " - ends: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "endtime", [], "any", false, false, false, 29)), "html", null, true);
                echo "
                ";
            }
            // line 31
            echo "            </span>
        </div>

        ";
            // line 34
            if (($context["static"] ?? null)) {
                // line 35
                echo "            ";
                $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 35)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
                // line 36
                echo "        ";
            }
            // line 37
            echo "    </div> ";
            // line 38
            echo "
    ";
            // line 39
            if (((null === ($context["scoreboard"] ?? null)) &&  !($context["jury"] ?? null))) {
                // line 40
                echo "        ";
                // line 41
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groupedAffiliations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["affiliationGroupRow"]) {
                    // line 42
                    echo "            <br/><br/>
            <div class=\"card-deck\">
                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["affiliationGroupRow"]);
                    foreach ($context['_seq'] as $context["category"] => $context["affiliations"]) {
                        // line 45
                        echo "                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">";
                        // line 46
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                ";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["affiliations"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                            // line 50
                            echo "                                    <li class=\"list-group-item\">
                                        ";
                            // line 51
                            $context["affiliationLogo"] = (("images/affiliations/" . twig_get_attribute($this->env, $this->source, $context["affiliation"], "id", [], "any", false, false, false, 51)) . ".png");
                            // line 52
                            echo "                                        ";
                            if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationLogo"] ?? null))) {
                                // line 53
                                echo "                                            <img src=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 53), "html", null, true);
                                echo "\"
                                                 title=\"";
                                // line 54
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 54), "html", null, true);
                                echo "\" class=\"affiliation-logo\"/>
                                        ";
                            }
                            // line 56
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 56), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        echo "                            </ul>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['category'], $context['affiliations'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                ";
                    if ((twig_length_filter($this->env, $context["affiliationGroupRow"]) < 3)) {
                        // line 64
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, $context["affiliationGroupRow"]) + 1), 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 65
                            echo "                        <div class=\"card\" style=\"border: none;\"></div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "                ";
                    }
                    // line 68
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliationGroupRow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "    ";
            } else {
                // line 71
                echo "
        ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 72), "showFrozen", [0 => false], "method", false, false, false, 72)) {
                    // line 73
                    echo "            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                ";
                    // line 74
                    if (($context["jury"] ?? null)) {
                        // line 75
                        echo "                    <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
                        echo "\">The public scoreboard</a>
                    was frozen with ";
                        // line 76
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 76), "html", null, true);
                        echo " minutes remaining
                ";
                    } else {
                        // line 78
                        echo "                    The scoreboard was frozen with ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 78), "html", null, true);
                        echo " minutes remaining - solutions
                    submitted in the last ";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 79), "html", null, true);
                        echo " minutes of the contest ";
                        if (($context["showPending"] ?? null)) {
                            echo "are still shown as pending";
                        } else {
                            echo "are not shown";
                        }
                        echo ".
                ";
                    }
                    // line 81
                    echo "            </div>
        ";
                }
                // line 83
                echo "
        ";
                // line 84
                if (( !($context["static"] ?? null) && (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 85
($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 85)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 86
($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 86)) > 1)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 87
($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 87)) > 1)))) {
                    // line 88
                    echo "\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                ";
                    // line 92
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "filteredOn", [], "any", false, false, false, 92))) {
                        // line 93
                        echo "                    Filter
                ";
                    } else {
                        // line 95
                        echo "                    Filtered (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "filteredOn", [], "any", false, false, false, 95), "html", null, true);
                        echo ")
                ";
                    }
                    // line 97
                    echo "            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"m-2 p-2 form-inline\">
                        ";
                    // line 102
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 102)) > 1)) {
                        // line 103
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                ";
                        // line 104
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 104));
                        foreach ($context['_seq'] as $context["affiliationId"] => $context["affiliation"]) {
                            // line 105
                            echo "                                    <option ";
                            if (twig_in_filter($context["affiliationId"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "affiliations", [], "any", false, false, false, 105))) {
                                echo "selected";
                            }
                            // line 106
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["affiliationId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["affiliation"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['affiliationId'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                            </select>
                        ";
                    }
                    // line 110
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 110)) > 1)) {
                        // line 111
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                ";
                        // line 112
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 112));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 113
                            echo "                                    <option ";
                            if (twig_in_filter($context["country"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "countries", [], "any", false, false, false, 113))) {
                                echo "selected";
                            }
                            // line 114
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["country"]] ?? null) : null), "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 116
                        echo "                            </select>
                        ";
                    }
                    // line 118
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 118)) > 1)) {
                        // line 119
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                ";
                        // line 120
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 120));
                        foreach ($context['_seq'] as $context["categoryId"] => $context["category"]) {
                            // line 121
                            echo "                                    <option ";
                            if (twig_in_filter($context["categoryId"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "categories", [], "any", false, false, false, 121))) {
                                echo "selected";
                            }
                            // line 122
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["categoryId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['categoryId'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 124
                        echo "                            </select>
                        ";
                    }
                    // line 126
                    echo "                    <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                    <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        ";
                } else {
                    // line 132
                    echo " ";
                    // line 133
                    echo "            <br/>
        ";
                }
                // line 134
                echo " ";
                // line 135
                echo "
        ";
                // line 136
                $this->loadTemplate("partials/scoreboard_table.html.twig", "partials/scoreboard.html.twig", 136)->display(twig_array_merge($context, ["displayRank" => true, "showLegends" => true]));
                // line 137
                echo "
    ";
            }
            // line 138
            echo " ";
            // line 139
            echo "
    <p id=\"lastmod\">
        Last Update: ";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(null, "%a %d %b %Y %T %Z"), "html", null, true);
            echo "<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 141,  415 => 139,  413 => 138,  409 => 137,  407 => 136,  404 => 135,  402 => 134,  398 => 133,  396 => 132,  387 => 126,  383 => 124,  372 => 122,  367 => 121,  363 => 120,  360 => 119,  357 => 118,  353 => 116,  342 => 114,  337 => 113,  333 => 112,  330 => 111,  327 => 110,  323 => 108,  312 => 106,  307 => 105,  303 => 104,  300 => 103,  298 => 102,  291 => 97,  285 => 95,  281 => 93,  279 => 92,  273 => 88,  271 => 87,  270 => 86,  269 => 85,  268 => 84,  265 => 83,  261 => 81,  250 => 79,  245 => 78,  240 => 76,  235 => 75,  233 => 74,  230 => 73,  228 => 72,  225 => 71,  222 => 70,  215 => 68,  212 => 67,  205 => 65,  200 => 64,  197 => 63,  188 => 59,  178 => 56,  173 => 54,  166 => 53,  163 => 52,  161 => 51,  158 => 50,  154 => 49,  148 => 46,  145 => 45,  141 => 44,  137 => 42,  132 => 41,  130 => 40,  128 => 39,  125 => 38,  123 => 37,  120 => 36,  117 => 35,  115 => 34,  110 => 31,  102 => 29,  98 => 27,  95 => 26,  91 => 24,  87 => 22,  84 => 21,  82 => 20,  77 => 19,  75 => 18,  70 => 16,  66 => 14,  62 => 12,  60 => 11,  57 => 10,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/partials/scoreboard.html.twig");
    }
}
