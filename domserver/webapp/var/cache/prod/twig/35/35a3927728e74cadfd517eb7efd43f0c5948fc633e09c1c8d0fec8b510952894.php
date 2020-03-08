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
class __TwigTemplate_d781bf68fb82b5d5213a15f52028e4213c1ebbde3df40a3987a5763e67dc3c16 extends \Twig\Template
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
            $context['_seq'] = twig_ensure_traversable(($context["limitToTeams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge(($context["limitToTeamIds"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
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
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "usedCategories", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categoryColors", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context) { $context["score"] = $__score__; return ((null === ($context["limitToTeams"] ?? null)) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), ($context["limitToTeamIds"] ?? null))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 20);
        // line 21
        echo "
";
        // line 22
        if ((($context["maxWidth"] ?? null) > 0)) {
            // line 23
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 25
            echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 29
        echo "
<table class=\"scoreboard center ";
        // line 30
        if (($context["jury"] ?? null)) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 33
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 35
        if (($context["showFlags"] ?? null)) {
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
        if (($context["showAffiliationLogos"] ?? null)) {
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
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
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
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 59
            echo "        ";
            $context["teamColspan"] = (($context["teamColspan"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["teamColspan"] ?? null), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 67
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 69
                echo "                ";
                $context["link"] = null;
                // line 70
                echo "                ";
                $context["target"] = "_self";
                // line 71
                echo "                ";
                if ( !($context["static"] ?? null)) {
                    // line 72
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 73
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 73)]);
                        // line 74
                        echo "                    ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 74), "hasProblemtext", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "                        ";
                        if (($context["public"] ?? null)) {
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
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
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
                if (($context["showPoints"] ?? null)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 107), "category", [], "any", false, false, false, 107), "sortorder", [], "any", false, false, false, 107) != ($context["previousSortOrder"] ?? null))) {
                // line 108
                echo "            ";
                if ((($context["previousSortOrder"] ?? null) !=  -1)) {
                    // line 109
                    echo "                ";
                    // line 110
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 110)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
                    // line 111
                    echo "            ";
                }
                // line 112
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sortorderswitch"]);
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
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && (($context["myTeamId"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 118), "teamid", [], "any", false, false, false, 118)))) {
                // line 119
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "scorethisisme"]);
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
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 124), "teamid", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 127
            echo "                ";
            if ( !($context["displayRank"] ?? null)) {
                // line 128
                echo "                    ?
                ";
            } elseif (((null ===             // line 129
($context["previousTeam"] ?? null)) || (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 129)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["previousTeam"] ?? null), "teamid", [], "any", false, false, false, 129)] ?? null) : null), "rank", [], "any", false, false, false, 129) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 129)))) {
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
            if (($context["showFlags"] ?? null)) {
                // line 137
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 137), "affiliation", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                        ";
                    $context["link"] = null;
                    // line 139
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 140
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 140), "affilid", [], "any", false, false, false, 140)]);
                        // line 141
                        echo "                        ";
                    }
                    // line 142
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                            // line 146
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 146), "affiliation", [], "any", false, false, false, 146), "country", [], "any", false, false, false, 146)] ?? null) : null), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 147
                            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 147), "affiliation", [], "any", false, false, false, 147), "country", [], "any", false, false, false, 147)] ?? null) : null), "html", null, true);
                            echo "\" class=\"countryflag\"/>
                                ";
                        } else {
                            // line 149
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 149), "affiliation", [], "any", false, false, false, 149), "country", [], "any", false, false, false, 149)] ?? null) : null), "html", null, true);
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
            if (($context["showAffiliationLogos"] ?? null)) {
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
                    if (($context["jury"] ?? null)) {
                        // line 161
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 161), "affilid", [], "any", false, false, false, 161)]);
                        // line 162
                        echo "                        ";
                    }
                    // line 163
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
                    $context["affiliationImage"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
                    // line 169
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationImage"] ?? null))) {
                        // line 170
                        echo "                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationImage"] ?? null)), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["affiliationId"] ?? null), "html", null, true);
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
            if ((null === ($context["color"] ?? null))) {
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
                $context["colorClass"] = twig_replace_filter(($context["color"] ?? null), ["#" => "_"]);
                // line 184
                echo "                ";
                $context["backgroundColors"] = twig_array_merge(($context["backgroundColors"] ?? null), [($context["color"] ?? null) => 1]);
                // line 185
                echo "            ";
            }
            // line 186
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
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
            if ( !($context["static"] ?? null)) {
                // line 190
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 191
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 191), "teamid", [], "any", false, false, false, 191)]);
                    // line 192
                    echo "                    ";
                } elseif (($context["public"] ?? null)) {
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
            if ( !(null === ($context["extra"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["extra"] ?? null), "html", null, true);
            }
            echo " ";
            if ( !(null === ($context["link"] ?? null))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 202
            if (((twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 202), 1 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 202))) {
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
            if (($context["showAffiliations"] ?? null)) {
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
            if (($context["scoreInSeconds"] ?? null)) {
                // line 220
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative(($context["totalTime"] ?? null));
                // line 221
                echo "            ";
            }
            // line 222
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numberOfPoints", [], "any", false, false, false, 222);
            // line 223
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, ($context["totalPoints"] ?? null), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 224
            echo twig_escape_filter($this->env, ($context["totalTime"] ?? null), "html", null, true);
            echo "</td>

            ";
            // line 226
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 227
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 228
                    echo "                    ";
                    // line 229
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 230
                    echo "                    ";
                    $context["matrixItem"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "matrix", [], "any", false, false, false, 230)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 230), "teamid", [], "any", false, false, false, 230)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 230)] ?? null) : null);
                    // line 231
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 231)) {
                        // line 232
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 233
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 233), 1 => $context["problem"]], "method", false, false, false, 233)) {
                            // line 234
                            echo "                            ";
                            $context["scoreCssClass"] = (($context["scoreCssClass"] ?? null) . " score_first");
                            // line 235
                            echo "                        ";
                        }
                        // line 236
                        echo "                    ";
                    } elseif ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 236) > 0))) {
                        // line 237
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 238
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 238) > 0)) {
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
                    $context["numberOfSubmissions"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 242);
                    // line 243
                    echo "                    ";
                    if ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 243) > 0))) {
                        // line 244
                        echo "                        ";
                        $context["numberOfSubmissions"] = ((($context["numberOfSubmissions"] ?? null) . " + ") . twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 244));
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
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 249)) {
                        // line 250
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "time", [], "any", false, false, false, 250);
                        // line 251
                        echo "                        ";
                        if (($context["scoreInSeconds"] ?? null)) {
                            // line 252
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null)));
                            // line 253
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 253) > 1)) {
                                // line 254
                                echo "                                ";
                                $context["time"] = ((($context["time"] ?? null) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 254))));
                                // line 255
                                echo "                            ";
                            }
                            // line 256
                            echo "                        ";
                        } else {
                            // line 257
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null));
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
                    if (($context["jury"] ?? null)) {
                        // line 263
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 263)];
                        // line 264
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 264), "teamid", [], "any", false, false, false, 264), "restrict" => ($context["restrict"] ?? null)]);
                        // line 265
                        echo "                    ";
                    }
                    // line 266
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 268
                    if ((($context["numberOfSubmissions"] ?? null) != "0")) {
                        // line 269
                        echo "                            <a ";
                        if (($context["link"] ?? null)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 270
                        echo twig_escape_filter($this->env, ($context["scoreCssClass"] ?? null), "html", null, true);
                        echo "\">
                                    ";
                        // line 271
                        echo ($context["time"] ?? null);
                        echo "
                                    <span>
                                        ";
                        // line 273
                        if ((($context["numberOfSubmissions"] ?? null) === 1)) {
                            // line 274
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 276
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ($context["numberOfSubmissions"] ?? null), "html", null, true);
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
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 289)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
        // line 290
        echo "    </tbody>
</table>

";
        // line 293
        if (($context["showLegends"] ?? null)) {
            // line 294
            echo "    <p><br/><br/></p>

    ";
            // line 297
            echo "    ";
            if ((((null === ($context["limitToTeamIds"] ?? null)) && (twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1)) && ($context["hasDifferentCategoryColors"] ?? null))) {
                // line 298
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
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
                if (($context["jury"] ?? null)) {
                    // line 304
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 305
                    echo "                    ";
                }
                // line 306
                echo "                    <a ";
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categories", [], "any", false, false, false, 311), function ($__category__) use ($context) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 311), [], "array", true, true, false, 311); }));
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
                    if (($context["jury"] ?? null)) {
                        // line 316
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 316)]);
                        // line 317
                        echo "                        ";
                    }
                    // line 318
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 327
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 328
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["cellColors"] ?? null));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 336
                    echo "                ";
                    if ((($context["color"] != "pending") || ($context["showPending"] ?? null))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["backgroundColors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 349
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 350
            echo "
        .cl";
            // line 351
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 360
            echo twig_escape_filter($this->env, ($context["cMin"] ?? null), "html", null, true);
            echo " 0%,
                ";
            // line 361
            echo twig_escape_filter($this->env, ($context["cMax"] ?? null), "html", null, true);
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
        return new Source("", "partials/scoreboard_table.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
