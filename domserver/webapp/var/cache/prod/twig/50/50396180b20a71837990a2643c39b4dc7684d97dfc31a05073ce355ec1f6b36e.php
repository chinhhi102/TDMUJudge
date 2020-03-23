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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_67fca87903641cd61d6483a0c2d4570c6f4b300773bd09257fdcc7ac1b37fa23 extends \Twig\Template
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
        if ( !(isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context))) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge((isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 7, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !(isset($context["showLegends"]) || array_key_exists("showLegends", $context))) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 16, $this->source); })()), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 17, $this->source); })()), "usedCategories", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 17, $this->source); })())], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 18, $this->source); })()), "categoryColors", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 18, $this->source); })())], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 19, $this->source); })()), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context) { $context["score"] = $__score__; return ((null === (isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 19, $this->source); })())) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 19, $this->source); })()), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 19, $this->source); })()))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 20, $this->source); })()), "problems", [], "any", false, false, false, 20);
        // line 21
        echo "
";
        // line 22
        if (((isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 22, $this->source); })()) > 0)) {
            // line 23
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 29
        echo "
<table class=\"scoreboard center ";
        // line 30
        if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 30, $this->source); })())) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 33
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 35
        if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 38
            echo "            <col/>
        ";
        }
        // line 40
        echo "        ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 43
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 50
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 50, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 52
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "    </colgroup>

    ";
        // line 57
        $context["teamColspan"] = 2;
        // line 58
        echo "    ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "        ";
            $context["teamColspan"] = ((isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 59, $this->source); })()) + 1);
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 67
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 67, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 67, $this->source); })()))) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 69
                echo "                ";
                $context["link"] = null;
                // line 70
                echo "                ";
                $context["target"] = "_self";
                // line 71
                echo "                ";
                if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 71, $this->source); })())) {
                    // line 72
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 72, $this->source); })())) {
                        // line 73
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 73)]);
                        // line 74
                        echo "                    ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 74), "hasProblemtext", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "                        ";
                        if ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 75, $this->source); })())) {
                            // line 76
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 76)]);
                            // line 77
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 78
                            echo "                        ";
                        } else {
                            // line 79
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 79)]);
                            // line 80
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 81
                            echo "                        ";
                        }
                        // line 82
                        echo "                    ";
                    }
                    // line 83
                    echo "                ";
                }
                // line 84
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 85
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 85, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 85, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 85, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 86), "html", null, true);
                echo "
                        ";
                // line 87
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 88), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 90
                echo "                        ";
                if ((isset($context["showPoints"]) || array_key_exists("showPoints", $context) ? $context["showPoints"] : (function () { throw new RuntimeError('Variable "showPoints" does not exist.', 90, $this->source); })())) {
                    // line 91
                    echo "                            <span class='problempoints'>
                                [";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 95
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        ";
        }
        // line 99
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 102
        $context["previousSortOrder"] =  -1;
        // line 103
        echo "    ";
        $context["previousTeam"] = null;
        // line 104
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 105
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 105, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 106
            echo "        ";
            $context["classes"] = [];
            // line 107
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 107), "category", [], "any", false, false, false, 107), "sortorder", [], "any", false, false, false, 107) != (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 107, $this->source); })()))) {
                // line 108
                echo "            ";
                if (((isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 108, $this->source); })()) !=  -1)) {
                    // line 109
                    echo "                ";
                    // line 110
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 110)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 110, $this->source); })())]));
                    // line 111
                    echo "            ";
                }
                // line 112
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 112, $this->source); })()), [0 => "sortorderswitch"]);
                // line 113
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 113), "category", [], "any", false, false, false, 113), "sortorder", [], "any", false, false, false, 113);
                // line 114
                echo "            ";
                $context["previousTeam"] = null;
                // line 115
                echo "        ";
            }
            // line 116
            echo "
        ";
            // line 118
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && ((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context) ? $context["myTeamId"] : (function () { throw new RuntimeError('Variable "myTeamId" does not exist.', 118, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 118), "teamid", [], "any", false, false, false, 118)))) {
                // line 119
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 119, $this->source); })()), [0 => "scorethisisme"]);
                // line 120
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 121
                echo "        ";
            } else {
                // line 122
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 122), "category", [], "any", false, false, false, 122), "color", [], "any", false, false, false, 122);
                // line 123
                echo "        ";
            }
            // line 124
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 124, $this->source); })()), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 124), "teamid", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 127
            echo "                ";
            if ( !(isset($context["displayRank"]) || array_key_exists("displayRank", $context) ? $context["displayRank"] : (function () { throw new RuntimeError('Variable "displayRank" does not exist.', 127, $this->source); })())) {
                // line 128
                echo "                    ?
                ";
            } elseif (((null ===             // line 129
(isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 129, $this->source); })())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 129, $this->source); })()), "scores", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, (isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 129, $this->source); })()), "teamid", [], "any", false, false, false, 129), [], "array", false, false, false, 129), "rank", [], "any", false, false, false, 129) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 129)))) {
                // line 130
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 130), "html", null, true);
                echo "
                ";
            } else {
                // line 132
                echo "                ";
            }
            // line 133
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 133);
            // line 134
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 136
            if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 136, $this->source); })())) {
                // line 137
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 137), "affiliation", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                        ";
                    $context["link"] = null;
                    // line 139
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 139, $this->source); })())) {
                        // line 140
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 140), "affilid", [], "any", false, false, false, 140)]);
                        // line 141
                        echo "                        ";
                    }
                    // line 142
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 142, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 142, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 143), "affiliation", [], "any", false, false, false, 143), "country", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 144), "affiliation", [], "any", false, false, false, 144), "country", [], "any", false, false, false, 144)) . ".png");
                        // line 145
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 145, $this->source); })()))) {
                            // line 146
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 146, $this->source); })())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 146, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 146), "affiliation", [], "any", false, false, false, 146), "country", [], "any", false, false, false, 146), [], "array", false, false, false, 146), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 147
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 147, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 147), "affiliation", [], "any", false, false, false, 147), "country", [], "any", false, false, false, 147), [], "array", false, false, false, 147), "html", null, true);
                            echo "\" class=\"countryflag\"/>
                                ";
                        } else {
                            // line 149
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 149, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 149), "affiliation", [], "any", false, false, false, 149), "country", [], "any", false, false, false, 149), [], "array", false, false, false, 149), "html", null, true);
                            echo "
                                ";
                        }
                        // line 151
                        echo "                            ";
                    }
                    // line 152
                    echo "                        </a>
                    ";
                }
                // line 154
                echo "                ";
            }
            // line 155
            echo "            </td>
            ";
            // line 156
            if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 156, $this->source); })())) {
                // line 157
                echo "                <td class=\"scoreaf\">
                    ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 158), "affiliation", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                        ";
                    $context["link"] = null;
                    // line 160
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 160, $this->source); })())) {
                        // line 161
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 161), "affilid", [], "any", false, false, false, 161)]);
                        // line 162
                        echo "                        ";
                    }
                    // line 163
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 163, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 163, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 164
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 164), "affiliation", [], "any", false, false, false, 164), "affilid", [], "any", false, false, false, 164);
                    // line 165
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 165), "affiliation", [], "any", false, false, false, 165))) {
                        // line 166
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 166), "affiliation", [], "any", false, false, false, 166), "externalid", [], "any", false, false, false, 166);
                        // line 167
                        echo "                            ";
                    }
                    // line 168
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 168, $this->source); })())) . ".png");
                    // line 169
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 169, $this->source); })()))) {
                        // line 170
                        echo "                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 170, $this->source); })())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 170), "affiliation", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 171
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 171), "affiliation", [], "any", false, false, false, 171), "name", [], "any", false, false, false, 171), "html", null, true);
                        echo "\" class=\"affiliation-logo\">
                            ";
                    } else {
                        // line 173
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 173, $this->source); })()), "html", null, true);
                        echo "
                            ";
                    }
                    // line 175
                    echo "                        </a>
                    ";
                }
                // line 177
                echo "                </td>
            ";
            }
            // line 179
            echo "            ";
            if ((null === (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 179, $this->source); })()))) {
                // line 180
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 181
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 182
                echo "            ";
            } else {
                // line 183
                echo "                ";
                $context["colorClass"] = twig_replace_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 183, $this->source); })()), ["#" => "_"]);
                // line 184
                echo "                ";
                $context["backgroundColors"] = twig_array_merge((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 184, $this->source); })()), [(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 184, $this->source); })()) => 1]);
                // line 185
                echo "            ";
            }
            // line 186
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 186, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true);
            echo "\">
                ";
            // line 187
            $context["link"] = null;
            // line 188
            echo "                ";
            $context["extra"] = null;
            // line 189
            echo "                ";
            if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 189, $this->source); })())) {
                // line 190
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 190, $this->source); })())) {
                    // line 191
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 191), "teamid", [], "any", false, false, false, 191)]);
                    // line 192
                    echo "                    ";
                } elseif ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 192, $this->source); })())) {
                    // line 193
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 193), "teamid", [], "any", false, false, false, 193)]);
                    // line 194
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 195
                    echo "                    ";
                } else {
                    // line 196
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 196), "teamid", [], "any", false, false, false, 196)]);
                    // line 197
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 198
                    echo "                    ";
                }
                // line 199
                echo "                ";
            }
            // line 200
            echo "                <a ";
            if ( !(null === (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 200, $this->source); })()))) {
                echo twig_escape_filter($this->env, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 200, $this->source); })()), "html", null, true);
            }
            echo " ";
            if ( !(null === (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 200, $this->source); })()))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 200, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 202
            if (((twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 202, $this->source); })())) > 1) && twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 202, $this->source); })()), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 202), 1 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 202, $this->source); })())], "method", false, false, false, 202))) {
                // line 203
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 204), "category", [], "any", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 207
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
            echo "
                    </span>
                    ";
            // line 209
            if ((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 209, $this->source); })())) {
                // line 210
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 211
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 211), "affiliation", [], "any", false, false, false, 211)) {
                    // line 212
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 212), "affiliation", [], "any", false, false, false, 212), "name", [], "any", false, false, false, 212), "html", null, true);
                    echo "
                            ";
                }
                // line 214
                echo "                        </span>
                    ";
            }
            // line 216
            echo "                </a>
            </td>
            ";
            // line 218
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 218);
            // line 219
            echo "            ";
            if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 219, $this->source); })())) {
                // line 220
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative((isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 220, $this->source); })()));
                // line 221
                echo "            ";
            }
            // line 222
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numberOfPoints", [], "any", false, false, false, 222);
            // line 223
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, (isset($context["totalPoints"]) || array_key_exists("totalPoints", $context) ? $context["totalPoints"] : (function () { throw new RuntimeError('Variable "totalPoints" does not exist.', 223, $this->source); })()), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 224
            echo twig_escape_filter($this->env, (isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 224, $this->source); })()), "html", null, true);
            echo "</td>

            ";
            // line 226
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 226, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 226, $this->source); })()))) {
                // line 227
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 227, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 228
                    echo "                    ";
                    // line 229
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 230
                    echo "                    ";
                    $context["matrixItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 230, $this->source); })()), "matrix", [], "any", false, false, false, 230), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 230), "teamid", [], "any", false, false, false, 230), [], "array", false, false, false, 230), twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 230), [], "array", false, false, false, 230);
                    // line 231
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 231, $this->source); })()), "isCorrect", [], "any", false, false, false, 231)) {
                        // line 232
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 233
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 233, $this->source); })()), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 233), 1 => $context["problem"]], "method", false, false, false, 233)) {
                            // line 234
                            echo "                            ";
                            $context["scoreCssClass"] = ((isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 234, $this->source); })()) . " score_first");
                            // line 235
                            echo "                        ";
                        }
                        // line 236
                        echo "                    ";
                    } elseif (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 236, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 236, $this->source); })()), "numberOfPendingSubmissions", [], "any", false, false, false, 236) > 0))) {
                        // line 237
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 238
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 238, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 238) > 0)) {
                        // line 239
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 240
                        echo "                    ";
                    }
                    // line 241
                    echo "
                    ";
                    // line 242
                    $context["numberOfSubmissions"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 242, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 242);
                    // line 243
                    echo "                    ";
                    if (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 243, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 243, $this->source); })()), "numberOfPendingSubmissions", [], "any", false, false, false, 243) > 0))) {
                        // line 244
                        echo "                        ";
                        $context["numberOfSubmissions"] = (((isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 244, $this->source); })()) . " + ") . twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 244, $this->source); })()), "numberOfPendingSubmissions", [], "any", false, false, false, 244));
                        // line 245
                        echo "                    ";
                    }
                    // line 246
                    echo "
                    ";
                    // line 248
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 249
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 249, $this->source); })()), "isCorrect", [], "any", false, false, false, 249)) {
                        // line 250
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 250, $this->source); })()), "time", [], "any", false, false, false, 250);
                        // line 251
                        echo "                        ";
                        if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 251, $this->source); })())) {
                            // line 252
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 252, $this->source); })())));
                            // line 253
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 253, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 253) > 1)) {
                                // line 254
                                echo "                                ";
                                $context["time"] = (((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 254, $this->source); })()) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 254, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 254))));
                                // line 255
                                echo "                            ";
                            }
                            // line 256
                            echo "                        ";
                        } else {
                            // line 257
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 257, $this->source); })()));
                            // line 258
                            echo "                        ";
                        }
                        // line 259
                        echo "                    ";
                    }
                    // line 260
                    echo "
                    ";
                    // line 261
                    $context["link"] = null;
                    // line 262
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 262, $this->source); })())) {
                        // line 263
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 263)];
                        // line 264
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 264), "teamid", [], "any", false, false, false, 264), "restrict" => (isset($context["restrict"]) || array_key_exists("restrict", $context) ? $context["restrict"] : (function () { throw new RuntimeError('Variable "restrict" does not exist.', 264, $this->source); })())]);
                        // line 265
                        echo "                    ";
                    }
                    // line 266
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 268
                    if (((isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 268, $this->source); })()) != "0")) {
                        // line 269
                        echo "                            <a ";
                        if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 269, $this->source); })())) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 269, $this->source); })()), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 270
                        echo twig_escape_filter($this->env, (isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 270, $this->source); })()), "html", null, true);
                        echo "\">
                                    ";
                        // line 271
                        echo (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 271, $this->source); })());
                        echo "
                                    <span>
                                        ";
                        // line 273
                        if (((isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 273, $this->source); })()) === 1)) {
                            // line 274
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 276
                            echo "                                            ";
                            echo twig_escape_filter($this->env, (isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 276, $this->source); })()), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 278
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 282
                    echo "                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 284
                echo "            ";
            }
            // line 285
            echo "        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "
    ";
        // line 289
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 289)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 289, $this->source); })())]));
        // line 290
        echo "    </tbody>
</table>

";
        // line 293
        if ((isset($context["showLegends"]) || array_key_exists("showLegends", $context) ? $context["showLegends"] : (function () { throw new RuntimeError('Variable "showLegends" does not exist.', 293, $this->source); })())) {
            // line 294
            echo "    <p><br/><br/></p>

    ";
            // line 297
            echo "    ";
            if ((((null === (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 297, $this->source); })())) && (twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 297, $this->source); })())) > 1)) && (isset($context["hasDifferentCategoryColors"]) || array_key_exists("hasDifferentCategoryColors", $context) ? $context["hasDifferentCategoryColors"] : (function () { throw new RuntimeError('Variable "hasDifferentCategoryColors" does not exist.', 297, $this->source); })()))) {
                // line 298
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 298, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 302
                $context["link"] = null;
                // line 303
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 303, $this->source); })())) {
                    // line 304
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 305
                    echo "                    ";
                }
                // line 306
                echo "                    <a ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 306, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 306, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 311
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 311, $this->source); })()), "categories", [], "any", false, false, false, 311), function ($__category__) use ($context) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 311), [], "array", true, true, false, 311); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 312
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 312)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 312), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 314
                    $context["link"] = null;
                    // line 315
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 315, $this->source); })())) {
                        // line 316
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 316)]);
                        // line 317
                        echo "                        ";
                    }
                    // line 318
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 318, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 318, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 318), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 322
                echo "            </tbody>
        </table>
    ";
            }
            // line 325
            echo "
    ";
            // line 326
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 326, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 326, $this->source); })()))) {
                // line 327
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 328
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 328, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cellColors"]) || array_key_exists("cellColors", $context) ? $context["cellColors"] : (function () { throw new RuntimeError('Variable "cellColors" does not exist.', 335, $this->source); })()));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 336
                    echo "                ";
                    if ((($context["color"] != "pending") || (isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 336, $this->source); })()))) {
                        // line 337
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 338
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 341
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 342
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 346
        echo "
<style>
    ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 348, $this->source); })()));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 349
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 350
            echo "
        .cl";
            // line 351
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 351, $this->source); })()), "html", null, true);
            echo " {
            background-color: ";
            // line 352
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 355
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 356
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 357
            echo "
        .cl";
            // line 358
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 358, $this->source); })()), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 360
            echo twig_escape_filter($this->env, (isset($context["cMin"]) || array_key_exists("cMin", $context) ? $context["cMin"] : (function () { throw new RuntimeError('Variable "cMin" does not exist.', 360, $this->source); })()), "html", null, true);
            echo " 0%,
                ";
            // line 361
            echo twig_escape_filter($this->env, (isset($context["cMax"]) || array_key_exists("cMax", $context) ? $context["cMax"] : (function () { throw new RuntimeError('Variable "cMax" does not exist.', 361, $this->source); })()), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1067 => 364,  1058 => 361,  1054 => 360,  1049 => 358,  1046 => 357,  1043 => 356,  1041 => 355,  1035 => 352,  1031 => 351,  1028 => 350,  1025 => 349,  1021 => 348,  1017 => 346,  1011 => 342,  1005 => 341,  999 => 338,  994 => 337,  991 => 336,  987 => 335,  974 => 328,  971 => 327,  969 => 326,  966 => 325,  961 => 322,  944 => 318,  941 => 317,  938 => 316,  935 => 315,  933 => 314,  923 => 312,  919 => 311,  906 => 306,  903 => 305,  900 => 304,  897 => 303,  895 => 302,  885 => 298,  882 => 297,  878 => 294,  876 => 293,  871 => 290,  868 => 289,  865 => 287,  850 => 285,  847 => 284,  840 => 282,  834 => 278,  828 => 276,  824 => 274,  822 => 273,  817 => 271,  813 => 270,  804 => 269,  802 => 268,  798 => 266,  795 => 265,  792 => 264,  789 => 263,  786 => 262,  784 => 261,  781 => 260,  778 => 259,  775 => 258,  772 => 257,  769 => 256,  766 => 255,  763 => 254,  760 => 253,  757 => 252,  754 => 251,  751 => 250,  748 => 249,  745 => 248,  742 => 246,  739 => 245,  736 => 244,  733 => 243,  731 => 242,  728 => 241,  725 => 240,  722 => 239,  719 => 238,  716 => 237,  713 => 236,  710 => 235,  707 => 234,  704 => 233,  701 => 232,  698 => 231,  695 => 230,  692 => 229,  690 => 228,  685 => 227,  683 => 226,  678 => 224,  673 => 223,  670 => 222,  667 => 221,  664 => 220,  661 => 219,  659 => 218,  655 => 216,  651 => 214,  645 => 212,  643 => 211,  640 => 210,  638 => 209,  632 => 207,  626 => 204,  623 => 203,  621 => 202,  607 => 200,  604 => 199,  601 => 198,  598 => 197,  595 => 196,  592 => 195,  589 => 194,  586 => 193,  583 => 192,  580 => 191,  577 => 190,  574 => 189,  571 => 188,  569 => 187,  562 => 186,  559 => 185,  556 => 184,  553 => 183,  550 => 182,  547 => 181,  544 => 180,  541 => 179,  537 => 177,  533 => 175,  527 => 173,  522 => 171,  515 => 170,  512 => 169,  509 => 168,  506 => 167,  503 => 166,  500 => 165,  498 => 164,  489 => 163,  486 => 162,  483 => 161,  480 => 160,  477 => 159,  475 => 158,  472 => 157,  470 => 156,  467 => 155,  464 => 154,  460 => 152,  457 => 151,  451 => 149,  446 => 147,  439 => 146,  436 => 145,  433 => 144,  431 => 143,  422 => 142,  419 => 141,  416 => 140,  413 => 139,  410 => 138,  407 => 137,  405 => 136,  401 => 134,  398 => 133,  395 => 132,  389 => 130,  387 => 129,  384 => 128,  381 => 127,  373 => 124,  370 => 123,  367 => 122,  364 => 121,  361 => 120,  358 => 119,  355 => 118,  352 => 116,  349 => 115,  346 => 114,  343 => 113,  340 => 112,  337 => 111,  334 => 110,  332 => 109,  329 => 108,  326 => 107,  323 => 106,  305 => 105,  302 => 104,  299 => 103,  297 => 102,  292 => 99,  289 => 98,  281 => 95,  270 => 92,  267 => 91,  264 => 90,  258 => 88,  256 => 87,  252 => 86,  242 => 85,  237 => 84,  234 => 83,  231 => 82,  228 => 81,  225 => 80,  222 => 79,  219 => 78,  216 => 77,  213 => 76,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  198 => 71,  195 => 70,  192 => 69,  187 => 68,  185 => 67,  180 => 65,  174 => 61,  171 => 60,  168 => 59,  165 => 58,  163 => 57,  159 => 55,  156 => 54,  149 => 52,  144 => 51,  142 => 50,  133 => 43,  129 => 41,  126 => 40,  122 => 38,  118 => 36,  116 => 35,  112 => 33,  105 => 30,  102 => 29,  95 => 25,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  57 => 8,  54 => 7,  49 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if limitToTeams is not defined %}
    {% set limitToTeams = null %}
    {% set limitToTeamIds = null %}
{% else %}
    {% set limitToTeamIds = [] %}
    {% for team in limitToTeams %}
        {% set limitToTeamIds = limitToTeamIds | merge([team.teamid]) %}
    {% endfor %}
{% endif %}
{% if showLegends is not defined %}
    {% set showLegends = false %}
{% endif %}
{% if static is not defined %}
    {% set static = false %}
{% endif %}
{% set showPoints = scoreboard.showPoints %}
{% set usedCategories = scoreboard.usedCategories(limitToTeamIds) %}
{% set hasDifferentCategoryColors = scoreboard.categoryColors(limitToTeamIds) %}
{% set scores = scoreboard.scores | filter(score => limitToTeams is null or score.team.teamid in limitToTeamIds) %}
{% set problems = scoreboard.problems %}

{% if maxWidth > 0 %}
    <style>
        .forceWidth {
            max-width: {{ maxWidth }}px;
        }
    </style>
{% endif %}

<table class=\"scoreboard center {% if jury %}scoreboard_jury{% endif %}\">

    {# output table column groups (for the styles) #}
    <colgroup>
        <col id=\"scorerank\"/>
        {% if showFlags %}
            <col id=\"scoreflags\"/>
        {% else %}
            <col/>
        {% endif %}
        {% if showAffiliationLogos %}
            <col id=\"scorelogos\"/>
        {% endif %}
        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                <col class=\"scoreprob\"/>
            {% endfor %}
        {% endif %}
    </colgroup>

    {% set teamColspan = 2 %}
    {% if showAffiliationLogos %}
        {% set teamColspan = teamColspan + 1 %}
    {% endif %}

    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"{{ teamColspan }}\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                {% set link = null %}
                {% set target = '_self' %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_problem', {'probId': problem.probid}) %}
                    {% elseif problem.problem.hasProblemtext %}
                        {% if public %}
                            {% set link = path('public_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% else %}
                            {% set link = path('team_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% endif %}
                    {% endif %}
                {% endif %}
                <th title=\"problem {{ problem.problem.name }}\" scope=\"col\">
                    <a {% if link %}href=\"{{ link }}\"{% endif %} target=\"{{ target }}\">
                        {{ problem.shortname }}
                        {% if problem.color is not empty %}
                            <div class=\"circle\" style=\"background: {{ problem.color }};\"></div>
                        {% endif %}
                        {% if showPoints %}
                            <span class='problempoints'>
                                [{% if problem.points == 1 %}1 point{% else %}{{ problem.points }} points{% endif %}]
                            </span>
                        {% endif %}
                    </a>
                </th>
            {% endfor %}
        {% endif %}
    </tr>
    </thead>
    <tbody>
    {% set previousSortOrder = -1 %}
    {% set previousTeam = null %}
    {% set backgroundColors = {\"#FFFFFF\": 1} %}
    {% for score in scores %}
        {% set classes = [] %}
        {% if score.team.category.sortorder != previousSortOrder %}
            {% if previousSortOrder != -1 %}
                {# Output summary of previous sort order #}
                {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
            {% endif %}
            {% set classes = classes | merge(['sortorderswitch']) %}
            {% set previousSortOrder = score.team.category.sortorder %}
            {% set previousTeam = null %}
        {% endif %}

        {# check whether this is us, otherwise use category colour #}
        {% if myTeamId is defined and myTeamId == score.team.teamid %}
            {% set classes = classes | merge(['scorethisisme']) %}
            {% set color = '#FFFF99' %}
        {% else %}
            {% set color = score.team.category.color %}
        {% endif %}
        <tr class=\"{{ classes | join(' ') }}\" id=\"team:{{ score.team.teamid }}\">
            <td class=\"scorepl\">
                {# Only print rank when score is different from the previous team #}
                {% if not displayRank %}
                    ?
                {% elseif previousTeam is null or scoreboard.scores[previousTeam.teamid].rank != score.rank %}
                    {{ score.rank }}
                {% else %}
                {% endif %}
                {% set previousTeam = score.team %}
            </td>
            <td class=\"scoreaf\">
                {% if showFlags %}
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% if score.team.affiliation.country %}
                                {% set countryFlag = 'images/countries/' ~ score.team.affiliation.country ~ '.png' %}
                                {% if countryFlag | assetExists %}
                                    <img src=\"{{ asset(countryFlag) }}\" alt=\"{{ alpha3_countries[score.team.affiliation.country] }}\"
                                         title=\"{{ alpha3_countries[score.team.affiliation.country] }}\" class=\"countryflag\"/>
                                {% else %}
                                    {{ alpha3_countries[score.team.affiliation.country] }}
                                {% endif %}
                            {% endif %}
                        </a>
                    {% endif %}
                {% endif %}
            </td>
            {% if showAffiliationLogos %}
                <td class=\"scoreaf\">
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% set affiliationId = score.team.affiliation.affilid %}
                            {% if showExternalId(score.team.affiliation) %}
                                {% set affiliationId = score.team.affiliation.externalid %}
                            {% endif %}
                            {% set affiliationImage = 'images/affiliations/' ~ affiliationId ~ '.png' %}
                            {% if affiliationImage | assetExists %}
                                <img src=\"{{ asset(affiliationImage) }}\" alt=\"{{ score.team.affiliation.name }}\"
                                     title=\"{{ score.team.affiliation.name }}\" class=\"affiliation-logo\">
                            {% else %}
                                {{ affiliationId }}
                            {% endif %}
                        </a>
                    {% endif %}
                </td>
            {% endif %}
            {% if color is null %}
                {% set color = \"#FFFFFF\" %}
                {% set colorClass = \"_FFFFFF\" %}
            {% else %}
                {% set colorClass = color | replace({\"#\": \"_\"}) %}
                {% set backgroundColors = backgroundColors | merge({(color): 1}) %}
            {% endif %}
            <td class=\"scoretn cl{{ colorClass }}\" title=\"{{ score.team.name }}\">
                {% set link = null %}
                {% set extra = null %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_team', {teamId: score.team.teamid}) %}
                    {% elseif public %}
                        {% set link = path('public_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% else %}
                        {% set link = path('team_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% endif %}
                {% endif %}
                <a {% if extra is not null %}{{ extra }}{% endif %} {% if link is not null %}href=\"{{ link }}\"{% endif %}>
                    <span class=\"forceWidth\">
                        {% if usedCategories | length > 1 and scoreboard.bestInCategory(score.team, limitToTeamIds) %}
                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            {{ score.team.category.name }}
                        </span>
                        {% endif %}
                        {{ score.team.name }}
                    </span>
                    {% if showAffiliations %}
                        <span class=\"univ forceWidth\">
                            {% if score.team.affiliation %}
                                {{ score.team.affiliation.name }}
                            {% endif %}
                        </span>
                    {% endif %}
                </a>
            </td>
            {% set totalTime = score.totalTime %}
            {% if scoreInSeconds %}
                {% set totalTime = totalTime | printTimeRelative %}
            {% endif %}
            {% set totalPoints = score.numberOfPoints %}
            <td class=\"scorenc\">{{ totalPoints }}</td>
            <td class=\"scorett\">{{ totalTime }}</td>

            {% if showTeamSubmissions or jury %}
                {% for problem in problems %}
                    {# CSS class for correct/incorrect/neutral results #}
                    {% set scoreCssClass = 'score_neutral' %}
                    {% set matrixItem = scoreboard.matrix[score.team.teamid][problem.probid] %}
                    {% if matrixItem.isCorrect %}
                        {% set scoreCssClass = 'score_correct' %}
                        {% if scoreboard.solvedFirst(score.team, problem) %}
                            {% set scoreCssClass = scoreCssClass ~ ' score_first' %}
                        {% endif %}
                    {% elseif showPending and matrixItem.numberOfPendingSubmissions > 0 %}
                        {% set scoreCssClass = 'score_pending' %}
                    {% elseif matrixItem.numberOfSubmissions > 0 %}
                        {% set scoreCssClass = 'score_incorrect' %}
                    {% endif %}

                    {% set numberOfSubmissions = matrixItem.numberOfSubmissions %}
                    {% if showPending and matrixItem.numberOfPendingSubmissions > 0 %}
                        {% set numberOfSubmissions = numberOfSubmissions ~ ' + ' ~ matrixItem.numberOfPendingSubmissions %}
                    {% endif %}

                    {# If correct, print time scored. The format will vary depending on the scoreboard resolution setting #}
                    {% set time = '&nbsp;' %}
                    {% if matrixItem.isCorrect %}
                        {% set time = matrixItem.time %}
                        {% if scoreInSeconds %}
                            {% set time = time | scoreTime | printTimeRelative %}
                            {% if matrixItem.numberOfSubmissions > 1 %}
                                {% set time = time ~ ' + ' ~ (calculatePenaltyTime(true, matrixItem.numberOfSubmissions) | printTimeRelative) %}
                            {% endif %}
                        {% else %}
                            {% set time = time | scoreTime %}
                        {% endif %}
                    {% endif %}

                    {% set link = null %}
                    {% if jury %}
                        {% set restrict = {probid: problem.probid} %}
                        {% set link = path('jury_team', {teamId: score.team.teamid, restrict: restrict}) %}
                    {% endif %}

                    <td class=\"score_cell\">
                        {% if numberOfSubmissions != '0' %}
                            <a {% if link %}href=\"{{ link }}\"{% endif %}>
                                <div class=\"{{ scoreCssClass }}\">
                                    {{ time | raw }}
                                    <span>
                                        {% if numberOfSubmissions is same as(1) %}
                                            1 try
                                        {% else %}
                                            {{ numberOfSubmissions }} tries
                                        {% endif %}
                                    </span>
                                </div>
                            </a>
                        {% endif %}
                    </td>
                {% endfor %}
            {% endif %}
        </tr>
    {% endfor %}

    {# Output summary of last sort order #}
    {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
    </tbody>
</table>

{% if showLegends %}
    <p><br/><br/></p>

    {# only print legend when there's more than one category #}
    {% if limitToTeamIds is null and usedCategories | length > 1 and hasDifferentCategoryColors %}
        <table id=\"categ_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">
                    {% set link = null %}
                    {% if jury %}
                        {% set link = path('jury_team_categories') %}
                    {% endif %}
                    <a {% if link %}href=\"{{ link }}\"{% endif %}>Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            {% for category in scoreboard.categories | filter(category => usedCategories[category.categoryid] is defined) %}
                <tr {% if category.color %}style=\"background: {{ category.color }};\"{% endif %}>
                    <td>
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_category', {'categoryId': category.categoryid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>{{ category.name }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if showTeamSubmissions or jury %}
        {% set cellColors = {first: 'Solved first', correct: 'Solved', incorrect: 'Tried, incorrect', pending: 'Tried, pending', neutral: 'Untried'} %}
        <table id=\"cell_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            {% for color, description in cellColors %}
                {% if color != 'pending' or showPending %}
                    <tr class=\"score_{{ color }}\">
                        <td>{{ description }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endif %}

<style>
    {% for color,i in backgroundColors %}
        {% set colorClass = color | replace({\"#\": \"_\"}) %}

        .cl{{ colorClass }} {
            background-color: {{ color }};
        }

        {% set cMin = color|hexColorToRGBA(0) %}
        {% set cMax = color|hexColorToRGBA(1) %}

        .cl{{ colorClass }} .forceWidth.toolong:after {
            background: linear-gradient(to right,
                {{ cMin }} 0%,
                {{ cMax }} 96%);
        }
    {% endfor %}
</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
", "partials/scoreboard_table.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
