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

/* jury/partials/submission_list.html.twig */
class __TwigTemplate_001b54cc0ef0124046b0a972a3125cb71780d7d0efcc459029194d94fbe5a415 extends \Twig\Template
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
        if ( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context))) {
            // line 5
            echo "    ";
            $context["showExternalResult"] = false;
        }
        // line 7
        if ( !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context))) {
            // line 8
            echo "    ";
            $context["showExternalTestcases"] = false;
        }
        // line 10
        echo "
";
        // line 11
        $context["rowSpan"] = 1;
        // line 12
        if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 12, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "    ";
            $context["rowSpan"] = 2;
        }
        // line 15
        echo "
";
        // line 16
        if (twig_test_empty((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 19
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">ID</th>";
            // line 23
            if ((isset($context["showContest"]) || array_key_exists("showContest", $context) ? $context["showContest"] : (function () { throw new RuntimeError('Variable "showContest" does not exist.', 23, $this->source); })())) {
                // line 24
                echo "
                <th scope=\"col\">contest</th>";
            }
            // line 27
            echo "
            <th scope=\"col\">time</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            ";
            // line 32
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 32, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 32, $this->source); })()))) {
                // line 33
                echo "                <th scope=\"col\" colspan=\"2\">result</th>
            ";
            } else {
                // line 35
                echo "                <th scope=\"col\">result</th>
            ";
            }
            // line 37
            echo "            ";
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 37, $this->source); })()) &&  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 37, $this->source); })()))) {
                // line 38
                echo "                <th scope=\"col\">external result</th>
            ";
            }
            // line 40
            echo "            <th scope=\"col\">verified</th>
            ";
            // line 41
            if (( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 41, $this->source); })()) ||  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 41, $this->source); })()))) {
                // line 42
                echo "                <th scope=\"col\">by</th>
            ";
            }
            // line 44
            if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                // line 45
                echo "
                <th scope=\"col\">old result</th>";
            }
            // line 48
            if (((isset($context["showTestcases"]) || array_key_exists("showTestcases", $context)) && (isset($context["showTestcases"]) || array_key_exists("showTestcases", $context) ? $context["showTestcases"] : (function () { throw new RuntimeError('Variable "showTestcases" does not exist.', 48, $this->source); })()))) {
                // line 49
                echo "
                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>";
            }
            // line 52
            echo "
        </tr>
        </thead>
        <tbody>";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 57
                if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                    // line 58
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 58), "rejudgingid" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 58, $this->source); })()), "rejudgingid", [], "any", false, false, false, 58)]);
                } else {
                    // line 60
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 60)]);
                }
                // line 62
                echo "
            <tr class=\"";
                // line 63
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 63)) {
                    echo "ignore";
                }
                echo "\"
                data-problem-id=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "probid", [], "any", false, false, false, 64), "html", null, true);
                echo "\"
                data-team-id=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "teamid", [], "any", false, false, false, 65), "html", null, true);
                echo "\"
                data-language-id=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 66), "html", null, true);
                echo "\"
                data-submission-id=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 67), "html", null, true);
                echo "\">
                <td rowspan=\"";
                // line 68
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 68, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 69, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 69), "html", null, true);
                echo "</a>
                </td>";
                // line 71
                if ((isset($context["showContest"]) || array_key_exists("showContest", $context) ? $context["showContest"] : (function () { throw new RuntimeError('Variable "showContest" does not exist.', 71, $this->source); })())) {
                    // line 72
                    echo "                    <td><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 72, $this->source); })()), "html", null, true);
                    echo "\">c";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "cid", [], "any", false, false, false, 72), "html", null, true);
                    echo "</a></td>";
                }
                // line 74
                echo "
                <td rowspan=\"";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 75, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 76, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 76), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 76)), "html", null, true);
                echo "</a>
                </td>
                <td rowspan=\"";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 78, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"t";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "teamid", [], "any", false, false, false, 80), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), 30), "html", null, true);
                echo "</a>
                </td>
                <td class=\"probid\" rowspan=\"";
                // line 82
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 82, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 84), "shortname", [], "any", false, false, false, 84), "html", null, true);
                echo "</a>
                </td>
                <td class=\"langid\" rowspan=\"";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 87, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 88), "html", null, true);
                echo "</a>
                </td>
                ";
                // line 90
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 90, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 90, $this->source); })()))) {
                    // line 91
                    echo "                    <td>
                        <a href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 92, $this->source); })()), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 97
                echo "                <td>
                    <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 98, $this->source); })()), "html", null, true);
                echo "\">";
                // line 99
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 99) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 99), "endtime", [], "any", false, false, false, 99))) {
                    // line 100
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("too-late");
                    // line 101
                    if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 101), "first", [], "any", false, false, false, 101)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 101), "first", [], "any", false, false, false, 101), "result", [], "any", false, false, false, 101)))) {
                        // line 102
                        echo "                                (";
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 102), "first", [], "any", false, false, false, 102), "result", [], "any", false, false, false, 102));
                        echo ")";
                    }
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 104
$context["submission"], "judgings", [], "any", false, false, false, 104), "first", [], "any", false, false, false, 104)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 104), "first", [], "any", false, false, false, 104), "result", [], "any", false, false, false, 104)))) {
                    // line 105
                    if (twig_get_attribute($this->env, $this->source, $context["submission"], "judgehost", [], "any", false, false, false, 105)) {
                        // line 106
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                    } else {
                        // line 108
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                    }
                } else {
                    // line 111
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 111), "first", [], "any", false, false, false, 111), "result", [], "any", false, false, false, 111));
                }
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["submission"], "stillBusy", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "(&hellip;)";
                }
                // line 116
                echo "</a>
                </td>
                ";
                // line 118
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 118, $this->source); })()) &&  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 118, $this->source); })()))) {
                    // line 119
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 119), "empty", [], "any", false, false, false, 119)) {
                        // line 120
                        echo "                        ";
                        $context["externalJudgement"] = null;
                        // line 121
                        echo "                    ";
                    } else {
                        // line 122
                        echo "                        ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 122), "first", [], "any", false, false, false, 122);
                        // line 123
                        echo "                    ";
                    }
                    // line 124
                    echo "                    <td>
                        <a href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 125, $this->source); })()), "html", null, true);
                    echo "\">
                            ";
                    // line 126
                    if (((null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 126, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 126, $this->source); })()), "result", [], "any", false, false, false, 126)))) {
                        // line 127
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 129
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 129, $this->source); })()), "result", [], "any", false, false, false, 129));
                    }
                    // line 131
                    echo "                        </a>
                    </td>
                ";
                }
                // line 134
                $context["claim"] = false;
                // line 135
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 135), "first", [], "any", false, false, false, 135)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 135), "first", [], "any", false, false, false, 135), "result", [], "any", false, false, false, 135)))) {
                    // line 136
                    $context["verified"] = "";
                    // line 137
                    $context["juryMember"] = "";
                } else {
                    // line 139
                    $context["juryMember"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 139), "first", [], "any", false, false, false, 139), "juryMember", [], "any", false, false, false, 139);
                    // line 140
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 140), "first", [], "any", false, false, false, 140), "verified", [], "any", false, false, false, 140)) {
                        // line 141
                        $context["verified"] = "yes";
                    } else {
                        // line 143
                        $context["verified"] = "no";
                        // line 144
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 144), "first", [], "any", false, false, false, 144), "juryMember", [], "any", false, false, false, 144))) {
                            // line 145
                            $context["claim"] = true;
                        } else {
                            // line 147
                            $context["verified"] = "claimed";
                        }
                    }
                }
                // line 151
                if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 151, $this->source); })())) {
                    // line 152
                    $context["claimArg"] = ["claim" => 1];
                } else {
                    // line 154
                    $context["claimArg"] = ["unclaim" => 1];
                }
                // line 156
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 156, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 156, $this->source); })()), "html", null, true);
                echo "</a></td>
                ";
                // line 157
                if (( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 157, $this->source); })()) ||  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 157, $this->source); })()))) {
                    // line 158
                    echo "                    <td>";
                    // line 159
                    if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                        // line 160
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 160, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 160), "rejudgingid" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 160, $this->source); })()), "rejudgingid", [], "any", false, false, false, 160)]));
                    } else {
                        // line 162
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 162, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 162)]));
                    }
                    // line 164
                    if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 164, $this->source); })())) {
                        // line 165
                        echo "<a class=\"btn btn-outline-secondary btn-sm\"
                               href=\"";
                        // line 166
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 166, $this->source); })()), "html", null, true);
                        echo "\">claim</a>";
                    } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 167
$context["submission"], "judgings", [], "any", false, false, false, 167), "first", [], "any", false, false, false, 167) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 167), "first", [], "any", false, false, false, 167), "verified", [], "any", false, false, false, 167)) && ((isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 167, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "username", [], "any", false, false, false, 167)))) {
                        // line 168
                        echo "<a class=\"btn btn-info btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 168, $this->source); })()), "html", null, true);
                        echo "\">unclaim</a>";
                    } else {
                        // line 170
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 170, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 170, $this->source); })()), "html", null, true);
                        echo "</a>";
                    }
                    // line 172
                    echo "</td>
                ";
                }
                // line 174
                if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                    // line 175
                    echo "
                    <td><a href=\"";
                    // line 176
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 176)]), "html", null, true);
                    echo "\">
                            ";
                    // line 177
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, $context["submission"], "oldResult", [], "any", false, false, false, 177));
                    echo "
                        </a></td>";
                }
                // line 180
                if (((isset($context["showTestcases"]) || array_key_exists("showTestcases", $context)) && (isset($context["showTestcases"]) || array_key_exists("showTestcases", $context) ? $context["showTestcases"] : (function () { throw new RuntimeError('Variable "showTestcases" does not exist.', 180, $this->source); })()))) {
                    // line 181
                    echo "
                    <td class=\"testcase-results\">";
                    // line 183
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"]);
                    // line 184
                    echo "</td>";
                }
                // line 186
                echo "
            </tr>
            ";
                // line 188
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 188, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 188, $this->source); })()))) {
                    // line 189
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 189), "empty", [], "any", false, false, false, 189)) {
                        // line 190
                        echo "                    ";
                        $context["externalJudgement"] = null;
                        // line 191
                        echo "                ";
                    } else {
                        // line 192
                        echo "                    ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 192), "first", [], "any", false, false, false, 192);
                        // line 193
                        echo "                ";
                    }
                    // line 194
                    echo "                <td>
                    <a href=\"";
                    // line 195
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 195, $this->source); })()), "html", null, true);
                    echo "\">
                        External
                    </a>
                </td>
                <td>
                    <a href=\"";
                    // line 200
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 200, $this->source); })()), "html", null, true);
                    echo "\">
                        ";
                    // line 201
                    if (((null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 201, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 201, $this->source); })()), "result", [], "any", false, false, false, 201)))) {
                        // line 202
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 204
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 204, $this->source); })()), "result", [], "any", false, false, false, 204));
                    }
                    // line 206
                    echo "                    </a>
                </td>
                <td>";
                    // line 209
                    if ((isset($context["rejudging"]) || array_key_exists("rejudging", $context))) {
                        // line 210
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 210, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 210), "rejudgingid" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 210, $this->source); })()), "rejudgingid", [], "any", false, false, false, 210)]));
                    } else {
                        // line 212
                        $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 212, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 212)]));
                    }
                    // line 214
                    if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 214, $this->source); })())) {
                        // line 215
                        echo "<a class=\"btn btn-outline-secondary btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 215, $this->source); })()), "html", null, true);
                        echo "\">claim</a>";
                    } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 216
$context["submission"], "judgings", [], "any", false, false, false, 216), "first", [], "any", false, false, false, 216) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 216), "first", [], "any", false, false, false, 216), "verified", [], "any", false, false, false, 216)) && ((isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 216, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216), "username", [], "any", false, false, false, 216)))) {
                        // line 217
                        echo "<a class=\"btn btn-info btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 217, $this->source); })()), "html", null, true);
                        echo "\">unclaim</a>";
                    } else {
                        // line 219
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 219, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 219, $this->source); })()), "html", null, true);
                        echo "</a>";
                    }
                    // line 221
                    echo "</td>
                <td class=\"testcase-results\">";
                    // line 223
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"], true);
                    // line 224
                    echo "</td>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "
        </tbody>
    </table>

    <p>
        Total correct: ";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 232, $this->source); })()), "correct", [], "any", false, false, false, 232), "html", null, true);
            echo ", submitted: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 232, $this->source); })()), "total", [], "any", false, false, false, 232), "html", null, true);
            // line 233
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 233, $this->source); })()), "unverified", [], "any", false, false, false, 233) > 0)) {
                // line 234
                echo ", unverified: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 234, $this->source); })()), "unverified", [], "any", false, false, false, 234), "html", null, true);
            }
            // line 236
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 236, $this->source); })()), "ignored", [], "any", false, false, false, 236) > 0)) {
                // line 237
                echo ", ignored: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 237, $this->source); })()), "ignored", [], "any", false, false, false, 237), "html", null, true);
            }
            // line 239
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 239, $this->source); })()), "queued", [], "any", false, false, false, 239) > 0)) {
                // line 240
                echo ", judgement pending: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 240, $this->source); })()), "queued", [], "any", false, false, false, 240), "html", null, true);
            }
            // line 242
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "jury/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 242,  558 => 240,  556 => 239,  552 => 237,  550 => 236,  546 => 234,  544 => 233,  540 => 232,  533 => 227,  525 => 224,  523 => 223,  520 => 221,  513 => 219,  508 => 217,  506 => 216,  502 => 215,  500 => 214,  497 => 212,  494 => 210,  492 => 209,  488 => 206,  485 => 204,  482 => 202,  480 => 201,  476 => 200,  468 => 195,  465 => 194,  462 => 193,  459 => 192,  456 => 191,  453 => 190,  450 => 189,  448 => 188,  444 => 186,  441 => 184,  439 => 183,  436 => 181,  434 => 180,  429 => 177,  425 => 176,  422 => 175,  420 => 174,  416 => 172,  409 => 170,  404 => 168,  402 => 167,  399 => 166,  396 => 165,  394 => 164,  391 => 162,  388 => 160,  386 => 159,  384 => 158,  382 => 157,  375 => 156,  372 => 154,  369 => 152,  367 => 151,  362 => 147,  359 => 145,  357 => 144,  355 => 143,  352 => 141,  350 => 140,  348 => 139,  345 => 137,  343 => 136,  341 => 135,  339 => 134,  334 => 131,  331 => 129,  328 => 127,  326 => 126,  322 => 125,  319 => 124,  316 => 123,  313 => 122,  310 => 121,  307 => 120,  304 => 119,  302 => 118,  298 => 116,  295 => 114,  293 => 113,  290 => 111,  286 => 108,  283 => 106,  281 => 105,  279 => 104,  274 => 102,  272 => 101,  269 => 100,  267 => 99,  264 => 98,  261 => 97,  253 => 92,  250 => 91,  248 => 90,  241 => 88,  237 => 87,  233 => 86,  226 => 84,  222 => 83,  218 => 82,  211 => 80,  207 => 79,  203 => 78,  196 => 76,  192 => 75,  189 => 74,  182 => 72,  180 => 71,  174 => 69,  170 => 68,  166 => 67,  162 => 66,  158 => 65,  154 => 64,  148 => 63,  145 => 62,  142 => 60,  139 => 58,  137 => 57,  133 => 56,  128 => 52,  124 => 49,  122 => 48,  118 => 45,  116 => 44,  112 => 42,  110 => 41,  107 => 40,  103 => 38,  100 => 37,  96 => 35,  92 => 33,  90 => 32,  83 => 27,  79 => 24,  77 => 23,  72 => 19,  68 => 17,  66 => 16,  63 => 15,  59 => 13,  57 => 12,  55 => 11,  52 => 10,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of submissions for a jury page #}
{# @var \\App\\Entity\\ExternalJudgement externalJudgement #}

{% if showExternalResult is not defined %}
    {% set showExternalResult = false %}
{% endif %}
{% if showExternalTestcases is not defined %}
    {% set showExternalTestcases = false %}
{% endif %}

{% set rowSpan = 1 %}
{% if showExternalResult and showExternalTestcases %}
    {% set rowSpan = 2 %}
{% endif %}

{% if submissions is empty %}
    <div class=\"alert alert-warning\">No submissions</div>
{% else %}
    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">ID</th>
            {%- if showContest %}

                <th scope=\"col\">contest</th>
            {%- endif %}

            <th scope=\"col\">time</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            {% if showExternalResult and showExternalTestcases %}
                <th scope=\"col\" colspan=\"2\">result</th>
            {% else %}
                <th scope=\"col\">result</th>
            {% endif %}
            {% if showExternalResult and not showExternalTestcases %}
                <th scope=\"col\">external result</th>
            {% endif %}
            <th scope=\"col\">verified</th>
            {% if not showExternalResult or not showExternalTestcases %}
                <th scope=\"col\">by</th>
            {% endif %}
            {%- if rejudging is defined %}

                <th scope=\"col\">old result</th>
            {%- endif %}
            {%- if showTestcases is defined and showTestcases %}

                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>
            {%- endif %}

        </tr>
        </thead>
        <tbody>
        {%- for submission in submissions %}
            {%- if rejudging is defined %}
                {%- set link = path('jury_submission', {submitId: submission.submitid, rejudgingid: rejudging.rejudgingid}) %}
            {%- else %}
                {%- set link = path('jury_submission', {submitId: submission.submitid}) %}
            {%- endif %}

            <tr class=\"{% if not submission.valid %}ignore{% endif %}\"
                data-problem-id=\"{{ submission.probid }}\"
                data-team-id=\"{{ submission.teamid }}\"
                data-language-id=\"{{ submission.langid }}\"
                data-submission-id=\"{{ submission.submitid }}\">
                <td rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\">s{{ submission.submitid }}</a>
                </td>
                {%- if showContest %}
                    <td><a href=\"{{ link }}\">c{{ submission.cid }}</a></td>
                {%- endif %}

                <td rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\">{{ submission.submittime | printtime(null, submission.contest) }}</a>
                </td>
                <td rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\"
                       title=\"t{{ submission.teamid }}\">{{ submission.team.name | truncate(30) }}</a>
                </td>
                <td class=\"probid\" rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\"
                       title=\"{{ submission.problem.name }}\">{{ submission.contestProblem.shortname }}</a>
                </td>
                <td class=\"langid\" rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\"
                       title=\"{{ submission.language.name }}\">{{ submission.langid }}</a>
                </td>
                {% if showExternalResult and showExternalTestcases %}
                    <td>
                        <a href=\"{{ link }}\">
                            Local
                        </a>
                    </td>
                {% endif %}
                <td>
                    <a href=\"{{ link }}\">
                        {%- if submission.submittime > submission.contest.endtime %}
                            {{ 'too-late' | printValidJuryResult }}
                            {%- if submission.judgings.first is not empty and submission.judgings.first.result is not empty %}
                                ({{ submission.judgings.first.result | printValidJuryResult }})
                            {%- endif %}
                        {%- elseif submission.judgings.first is empty or submission.judgings.first.result is empty %}
                            {%- if submission.judgehost %}
                                {{- '' | printValidJuryResult -}}
                            {%- else %}
                                {{- 'queued' | printValidJuryResult -}}
                            {%- endif %}
                        {%- else %}
                            {{- submission.judgings.first.result | printValidJuryResult -}}
                        {%- endif %}
                        {%- if submission.stillBusy -%}
                            (&hellip;)
                        {%- endif -%}
                    </a>
                </td>
                {% if showExternalResult and not showExternalTestcases %}
                    {% if submission.externalJudgements.empty %}
                        {% set externalJudgement = null %}
                    {% else %}
                        {% set externalJudgement = submission.externalJudgements.first %}
                    {% endif %}
                    <td>
                        <a href=\"{{ link }}\">
                            {% if externalJudgement is null or externalJudgement.result is empty %}
                                {{- 'pending' | printValidJuryResult -}}
                            {% else %}
                                {{- externalJudgement.result | printValidJuryResult -}}
                            {% endif %}
                        </a>
                    </td>
                {% endif %}
                {%- set claim = false %}
                {%- if submission.judgings.first is empty or submission.judgings.first.result is empty -%}
                    {%- set verified = '' %}
                    {%- set juryMember = '' %}
                {%- else %}
                    {%- set juryMember = submission.judgings.first.juryMember %}
                    {%- if submission.judgings.first.verified %}
                        {%- set verified = 'yes' %}
                    {%- else %}
                        {%- set verified = 'no' %}
                        {%- if submission.judgings.first.juryMember is empty %}
                            {%- set claim = true %}
                        {%- else %}
                            {%- set verified = 'claimed' %}
                        {%- endif %}
                    {%- endif %}
                {%- endif %}
                {%- if claim %}
                    {%- set claimArg = {claim: 1} %}
                {%- else %}
                    {%- set claimArg = {unclaim: 1} %}
                {%- endif %}
                <td><a href=\"{{ link }}\">{{ verified }}</a></td>
                {% if not showExternalResult or not showExternalTestcases %}
                    <td>
                        {%- if rejudging is defined %}
                            {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid, rejudgingid: rejudging.rejudgingid})) %}
                        {%- else %}
                            {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid})) %}
                        {%- endif %}
                        {%- if claim -%}
                            <a class=\"btn btn-outline-secondary btn-sm\"
                               href=\"{{ claimLink }}\">claim</a>
                        {%- elseif (not submission.judgings.first or not submission.judgings.first.verified) and juryMember == app.user.username -%}
                            <a class=\"btn btn-info btn-sm\" href=\"{{ claimLink }}\">unclaim</a>
                        {%- else -%}
                            <a href=\"{{ link }}\">{{ juryMember }}</a>
                        {%- endif -%}
                    </td>
                {% endif %}
                {%- if rejudging is defined %}

                    <td><a href=\"{{ path('jury_submission', {submitId: submission.submitid}) }}\">
                            {{ submission.oldResult | printValidJuryResult }}
                        </a></td>
                {%- endif %}
                {%- if showTestcases is defined and showTestcases %}

                    <td class=\"testcase-results\">
                        {{- submission | testcaseResults -}}
                    </td>
                {%- endif %}

            </tr>
            {% if showExternalResult and showExternalTestcases %}
                {% if submission.externalJudgements.empty %}
                    {% set externalJudgement = null %}
                {% else %}
                    {% set externalJudgement = submission.externalJudgements.first %}
                {% endif %}
                <td>
                    <a href=\"{{ link }}\">
                        External
                    </a>
                </td>
                <td>
                    <a href=\"{{ link }}\">
                        {% if externalJudgement is null or externalJudgement.result is empty %}
                            {{- 'pending' | printValidJuryResult -}}
                        {% else %}
                            {{- externalJudgement.result | printValidJuryResult -}}
                        {% endif %}
                    </a>
                </td>
                <td>
                    {%- if rejudging is defined %}
                        {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid, rejudgingid: rejudging.rejudgingid})) %}
                    {%- else %}
                        {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid})) %}
                    {%- endif %}
                    {%- if claim -%}
                        <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ claimLink }}\">claim</a>
                    {%- elseif (not submission.judgings.first or not submission.judgings.first.verified) and juryMember == app.user.username -%}
                        <a class=\"btn btn-info btn-sm\" href=\"{{ claimLink }}\">unclaim</a>
                    {%- else -%}
                        <a href=\"{{ link }}\">{{ juryMember }}</a>
                    {%- endif -%}
                </td>
                <td class=\"testcase-results\">
                    {{- submission | testcaseResults(true) -}}
                </td>
            {% endif %}
        {%- endfor %}

        </tbody>
    </table>

    <p>
        Total correct: {{ submissionCounts.correct }}, submitted: {{ submissionCounts.total }}
        {%- if submissionCounts.unverified > 0 -%}
            , unverified: {{ submissionCounts.unverified }}
        {%- endif -%}
        {%- if submissionCounts.ignored > 0 -%}
            , ignored: {{ submissionCounts.ignored }}
        {%- endif -%}
        {%- if submissionCounts.queued > 0 -%}
            , judgement pending: {{ submissionCounts.queued }}
        {%- endif -%}
    </p>
{% endif %}
", "jury/partials/submission_list.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/partials/submission_list.html.twig");
    }
}
