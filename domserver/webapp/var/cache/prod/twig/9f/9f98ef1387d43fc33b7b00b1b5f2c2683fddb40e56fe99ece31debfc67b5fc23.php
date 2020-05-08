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

/* jury/submission.html.twig */
class __TwigTemplate_6543dde249d6abaf2d311503f815037f303587ad317483857dab1a02b2decc2a extends \Twig\Template
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
        // line 2
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Submission s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 4, $this->source); })()), "submitid", [], "any", false, false, false, 4), "html", null, true);
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                            
                ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 30, $this->source); })()), "externalJudgements", [], "any", false, false, false, 30), "empty", [], "any", false, false, false, 30)) {
            // line 31
            echo "                    ";
            $context["externalJudgement"] = null;
            // line 32
            echo "                ";
        } else {
            // line 33
            echo "                    ";
            $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 33, $this->source); })()), "externalJudgements", [], "any", false, false, false, 33), "first", [], "any", false, false, false, 33);
            // line 34
            echo "                ";
        }
        // line 35
        echo "
                ";
        // line 36
        if ((isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "                    <div class=\"alert alert-warning\">
                        ";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 41
        echo "
                <div class=\"mb-3\">
                    <h1 style=\"display: inline;\">
                        Submission ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 44, $this->source); })()), "submitid", [], "any", false, false, false, 44), "html", null, true);
        echo "
                        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 45, $this->source); })()), "originalSubmission", [], "any", false, false, false, 45)) {
            // line 46
            echo "                            ";
            $context["origSubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 46, $this->source); })()), "originalSubmission", [], "any", false, false, false, 46), "submitid", [], "any", false, false, false, 46)]);
            // line 47
            echo "                            (resubmit of <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["origSubmissionUrl"]) || array_key_exists("origSubmissionUrl", $context) ? $context["origSubmissionUrl"] : (function () { throw new RuntimeError('Variable "origSubmissionUrl" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 47, $this->source); })()), "originalSubmission", [], "any", false, false, false, 47), "submitid", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>)
                        ";
        }
        // line 49
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 49, $this->source); })()), "resubmissions", [], "any", false, false, false, 49))) {
            // line 50
            echo "                            (resubmitted as";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 51, $this->source); })()), "resubmissions", [], "any", false, false, false, 51));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 52
                $context["resubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 52)]);
                // line 53
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["resubmissionUrl"]) || array_key_exists("resubmissionUrl", $context) ? $context["resubmissionUrl"] : (function () { throw new RuntimeError('Variable "resubmissionUrl" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 53), "html", null, true);
                echo "</a>";
                // line 54
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 54)) {
                    echo ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo ")
                        ";
        }
        // line 58
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 58, $this->source); })()), "valid", [], "any", false, false, false, 58)) {
            // line 59
            echo "                            (ignored)
                        ";
        }
        // line 61
        echo "                    </h1>
                    ";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 63, $this->source); })()), "valid", [], "any", false, false, false, 63)) {
                // line 64
                echo "                            ";
                $context["action"] = "ignore";
                // line 65
                echo "                        ";
            } else {
                // line 66
                echo "                            ";
                $context["action"] = "unignore";
                // line 67
                echo "                        ";
            }
            // line 68
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_update_status", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 68, $this->source); })()), "submitid", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" method=\"post\"
                            style=\"display: inline; \">
                            <input type=\"hidden\" name=\"valid\" value=\"";
            // line 70
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 70, $this->source); })()), "valid", [], "any", false, false, false, 70)) {
                echo "0";
            } else {
                echo "1";
            }
            echo "\"/>
                            <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                                value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 72, $this->source); })())), "html", null, true);
            echo " this submission\"
                                onclick=\"return confirm('Really ";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 73, $this->source); })()), "html", null, true);
            echo " submission s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 73, $this->source); })()), "submitid", [], "any", false, false, false, 73), "html", null, true);
            echo "?');\"/>
                        </form>
                    ";
        }
        // line 76
        echo "
                    ";
        // line 77
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/submission.html.twig", 77)->display(twig_array_merge($context, ["table" => "submission", "id" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 77, $this->source); })()), "submitid", [], "any", false, false, false, 77)]));
        // line 78
        echo "                </div>

                ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 80, $this->source); })()), "valid", [], "any", false, false, false, 80)) {
            // line 81
            echo "                    <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
                ";
        }
        // line 83
        echo "
                ";
        // line 84
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 84, $this->source); })()), "contestProblem", [], "any", false, false, false, 84)) {
            // line 85
            echo "                    <div class=\"alert alert-danger\">
                        This submission is for a problem that is not part (anymore) of the contest of the submission.
                    </div>
                ";
        }
        // line 89
        echo "
                ";
        // line 91
        echo "                <div class=\"submission-summary mb-2\">
                    <span>
                        <i class=\"fas fa-users\" title=\"Team:\"></i>
                        <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 94, $this->source); })()), "teamid", [], "any", false, false, false, 94), "cid" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 94, $this->source); })()), "cid", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\">
                            ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 95, $this->source); })()), "team", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
        echo " (t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 95, $this->source); })()), "teamid", [], "any", false, false, false, 95), "html", null, true);
        echo ")
                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
                        <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 101, $this->source); })()), "cid", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\">
                            ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 102, $this->source); })()), "contest", [], "any", false, false, false, 102), "shortname", [], "any", false, false, false, 102), "html", null, true);
        echo "
                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
                        <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 108, $this->source); })()), "probid", [], "any", false, false, false, 108)]), "html", null, true);
        echo "\">
                            ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 109, $this->source); })()), "contestProblem", [], "any", false, false, false, 109)) {
            // line 110
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 110, $this->source); })()), "contestProblem", [], "any", false, false, false, 110), "shortname", [], "any", false, false, false, 110), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 110, $this->source); })()), "problem", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110), "html", null, true);
            echo "
                            ";
        } else {
            // line 112
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 112, $this->source); })()), "problem", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
            echo "
                            ";
        }
        // line 114
        echo "                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-comments\" title=\"Language:\"></i>
                        <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 119, $this->source); })()), "langid", [], "any", false, false, false, 119)]), "html", null, true);
        echo "\">
                            ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 120, $this->source); })()), "language", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
        echo "
                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
                        <span title=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 126, $this->source); })()), "submittime", [], "any", false, false, false, 126), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
        echo "\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 127, $this->source); })()), "submittime", [], "any", false, false, false, 127), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 127, $this->source); })()), "contest", [], "any", false, false, false, 127)), "html", null, true);
        echo "
                        </span>
                    </span>

                    <span>
                        <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
                        ";
        // line 133
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 133, $this->source); })()), "problem", [], "any", false, false, false, 133), "timelimit", [], "any", false, false, false, 133) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 133, $this->source); })()), "language", [], "any", false, false, false, 133), "timeFactor", [], "any", false, false, false, 133)), "html", null, true);
        echo "s
                    </span>

                    <span>
                        <i class=\"fas fa-code\" title=\"Source code:\"></i>
                        <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 138, $this->source); })()), "submitid", [], "any", false, false, false, 138)]), "html", null, true);
        echo "\">
                            View source code
                        </a>
                    </span>

                    ";
        // line 143
        if ( !twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 143, $this->source); })()))) {
            // line 144
            echo "                        <span>
                            <i class=\"fas fa-link\" title=\"External link:\"></i>
                            <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 146, $this->source); })())), "html", null, true);
            echo "\" target=\"_blank\">
                                View in external CCS
                            </a>
                        </span>
                    ";
        }
        // line 151
        echo "                </div>

                ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 153, $this->source); })()), "externalid", [], "any", false, false, false, 153)) {
            // line 154
            echo "                    <div class=\"mb-2\">
                        External ID:
                        ";
            // line 156
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 156, $this->source); })()))) {
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 157, $this->source); })()), "externalid", [], "any", false, false, false, 157), "html", null, true);
            } else {
                // line 159
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 159, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 160, $this->source); })()), "externalid", [], "any", false, false, false, 160), "html", null, true);
                // line 161
                echo "</a>";
            }
            // line 163
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 163, $this->source); })()))) {
                // line 164
                echo ", ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 164, $this->source); })()), "result", [], "any", false, false, false, 164));
                echo "
                        ";
            }
            // line 166
            echo "                    </div>
                ";
        }
        // line 168
        echo "
                ";
        // line 169
        if (((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 169, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 169, $this->source); })()), "result", [], "any", false, false, false, 169))) &&  !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 169, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 169, $this->source); })()), "result", [], "any", false, false, false, 169) != twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 169, $this->source); })()), "result", [], "any", false, false, false, 169)))) {
            // line 170
            echo "                    <div class=\"alert alert-danger\">
                        <strong>Results differ!</strong>
                        <hr>
                        <p>
                            This submission was judged as
                            ";
            // line 175
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 175, $this->source); })()))) {
                // line 176
                echo "                                ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 176, $this->source); })()), "result", [], "any", false, false, false, 176));
                echo " by the external CCS
                            ";
            } else {
                // line 178
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 178, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">
                                    ";
                // line 179
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 179, $this->source); })()), "result", [], "any", false, false, false, 179));
                echo " by the external CCS
                                </a>
                            ";
            }
            // line 182
            echo ", but as ";
            echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 182, $this->source); })()), "result", [], "any", false, false, false, 182));
            echo "
                            by DOMjudge.
                        </p>
                    </div>
                ";
        }
        // line 187
        echo "
                ";
        // line 188
        if (((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 188, $this->source); })())) > 1) || ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 188, $this->source); })())) == 1) && (null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 188, $this->source); })()))))) {
            // line 189
            echo "                    <h2>Judgings</h2>
                    <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
                        <thead>
                        <tr>
                            <td></td>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">start</th>
                            <th scope=\"col\">max runtime</th>
                            <th scope=\"col\">judgehost</th>
                            <th scope=\"col\">result</th>
                            <th scope=\"col\">rejudging</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 203, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 204
                echo "                            ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 204, $this->source); })()), "submitid", [], "any", false, false, false, 204), "jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 204)]);
                // line 205
                echo "                            <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 205)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                                <td>
                                    <a href=\"";
                // line 207
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 207, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 208
                if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 208, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 208, $this->source); })()), "judgingid", [], "any", false, false, false, 208) == twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 208)))) {
                    // line 209
                    echo "                                            <i class=\"fas fa-long-arrow-alt-right\"></i>
                                        ";
                } else {
                    // line 211
                    echo "                                            &nbsp;
                                        ";
                }
                // line 213
                echo "                                    </a>
                                </td>
                                <td><a href=\"";
                // line 215
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 215, $this->source); })()), "html", null, true);
                echo "\">j";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 215), "html", null, true);
                echo "</a></td>
                                <td><a href=\"";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 216, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 216), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 216, $this->source); })()), "contest", [], "any", false, false, false, 216)), "html", null, true);
                echo "</a></td>
                                <td>
                                    <a href=\"";
                // line 218
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 218, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 219
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 219, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 219), [], "array", false, false, false, 219))) {
                    // line 220
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 220, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 220), [], "array", false, false, false, 220), "html", null, true);
                    echo "s
                                        ";
                }
                // line 222
                echo "                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 225
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 225, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 226
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 226))) {
                    // line 227
                    echo "                                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 227), "hostname", [], "any", false, false, false, 227));
                    echo "
                                        ";
                }
                // line 229
                echo "                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 232
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 232, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 233
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 233), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 233), true);
                echo "
                                        ";
                // line 234
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 234)) {
                    // line 235
                    echo "                                            (&hellip;)
                                        ";
                }
                // line 237
                echo "                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 240
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 240, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 241
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 241))) {
                    // line 242
                    echo "                                            r";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudgingid", [], "any", false, false, false, 242), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 242), "reason", [], "any", false, false, false, 242), "html", null, true);
                    echo ")
                                        ";
                }
                // line 244
                echo "                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 251
        echo "
                ";
        // line 252
        if ((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 252, $this->source); })()))) {
            // line 253
            echo "                    <div class=\"alert alert-warning\">Not (re)judged yet</div>

                    ";
            // line 255
            if ( !twig_test_empty((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 255, $this->source); })()))) {
                // line 256
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 256, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 257
                    echo "                            <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                    echo "</div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "                    ";
            }
            // line 260
            echo "                ";
        }
        // line 261
        echo "
                ";
        // line 262
        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 262, $this->source); })())) ||  !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 262, $this->source); })())))) {
            // line 263
            echo "
                    ";
            // line 264
            $this->loadTemplate("jury/partials/submission_graph.html.twig", "jury/submission.html.twig", 264)->display($context);
            // line 265
            echo "
                    ";
            // line 266
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 266, $this->source); })()))) {
                // line 267
                echo "
                        ";
                // line 269
                echo "                        <div class=\"mb-2\">
                            <h2 style=\"display: inline;\">
                                Judging j";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 271, $this->source); })()), "judgingid", [], "any", false, false, false, 271), "html", null, true);
                echo "
                                ";
                // line 272
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 272, $this->source); })()), "rejudging", [], "any", false, false, false, 272)) {
                    // line 273
                    echo "                                    (rejudging
                                    <a href=\"";
                    // line 274
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 274, $this->source); })()), "rejudgingid", [], "any", false, false, false, 274)]), "html", null, true);
                    echo "\">
                                        r";
                    // line 275
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 275, $this->source); })()), "rejudgingid", [], "any", false, false, false, 275), "html", null, true);
                    echo "</a>, reason: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 275, $this->source); })()), "rejudging", [], "any", false, false, false, 275), "reason", [], "any", false, false, false, 275), "html", null, true);
                    echo ")
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 276
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 276, $this->source); })()), "valid", [], "any", false, false, false, 276)) {
                    // line 277
                    echo "                                    (Invalid)
                                ";
                }
                // line 279
                echo "                            </h2>
                            &nbsp;
                            ";
                // line 281
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 281, $this->source); })()), "verified", [], "any", false, false, false, 281)) {
                    // line 282
                    echo "                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 282, $this->source); })()), "submitid", [], "any", false, false, false, 282), "jid" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 282, $this->source); })()), "judgingid", [], "any", false, false, false, 282)]), "html", null, true);
                    echo "\"
                                    method=\"post\" style=\"display: inline;\">
                                    ";
                    // line 284
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 284, $this->source); })()), "juryMember", [], "any", false, false, false, 284))) {
                        // line 285
                        echo "                                        (claimed by ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 285, $this->source); })()), "juryMember", [], "any", false, false, false, 285), "html", null, true);
                        echo ")
                                        <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                                    ";
                    }
                    // line 288
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "user", [], "any", false, false, false, 288), "username", [], "any", false, false, false, 288) == twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 288, $this->source); })()), "juryMember", [], "any", false, false, false, 288))) {
                        // line 289
                        echo "                                        <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                                    ";
                    } else {
                        // line 291
                        echo "                                        <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                                    ";
                    }
                    // line 293
                    echo "                                </form>
                            ";
                }
                // line 295
                echo "                        </div>
                    ";
            }
            // line 297
            echo "
                    <div class=\"mb-2\">
                        <div>
                            Result:
                            ";
            // line 301
            if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 301, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 301, $this->source); })()), "result", [], "any", false, false, false, 301)))) {
                // line 302
                if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 302, $this->source); })()), "judgehost", [], "any", false, false, false, 302)) {
                    // line 303
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                } else {
                    // line 305
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                }
            } else {
                // line 308
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 308, $this->source); })()), "result", [], "any", false, false, false, 308));
            }
            // line 310
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 310, $this->source); })()), "stillBusy", [], "any", false, false, false, 310)) {
                // line 311
                echo "(&hellip;)";
            }
            // line 313
            if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 313, $this->source); })()))) {
                // line 314
                $context["lastSubmissionLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 314, $this->source); })()), "submitid", [], "any", false, false, false, 314)]);
                // line 315
                echo "<span class=\"lastresult\">
                                (<a href=\"";
                // line 316
                echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 316, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 316, $this->source); })()), "submitid", [], "any", false, false, false, 316), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 316, $this->source); })()), "result", [], "any", false, false, false, 316), "html", null, true);
                echo ")";
                // line 317
                echo "</span>";
            }
            // line 319
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 319, $this->source); })()))) {
                // line 320
                echo "                                (external: ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 320, $this->source); })()), "result", [], "any", false, false, false, 320));
                echo ")";
            }
            // line 322
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 322, $this->source); })()))) {
                // line 323
                echo ", Judgehost:
                                ";
                // line 324
                $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 324, $this->source); })()), "judgehost", [], "any", false, false, false, 324), "hostname", [], "any", false, false, false, 324)]);
                // line 325
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["judgehostLink"]) || array_key_exists("judgehostLink", $context) ? $context["judgehostLink"] : (function () { throw new RuntimeError('Variable "judgehostLink" does not exist.', 325, $this->source); })()), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 325, $this->source); })()), "judgehost", [], "any", false, false, false, 325), "hostname", [], "any", false, false, false, 325));
                echo "</a>,
                                <span class=\"judgetime\">Judging started: ";
                // line 326
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 326, $this->source); })()), "starttime", [], "any", false, false, false, 326), "%H:%M:%S"), "html", null, true);
                // line 327
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 327, $this->source); })()), "endtime", [], "any", false, false, false, 327)) {
                    // line 328
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 328, $this->source); })()), "starttime", [], "any", false, false, false, 328), twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 328, $this->source); })()), "endtime", [], "any", false, false, false, 328)), "html", null, true);
                    echo "s";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 329
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 329, $this->source); })()), "valid", [], "any", false, false, false, 329) || twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 329, $this->source); })()), "rejudging", [], "any", false, false, false, 329))) {
                    // line 330
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 330, $this->source); })()), "starttime", [], "any", false, false, false, 330)), "html", null, true);
                    echo "]";
                } else {
                    // line 332
                    echo "&nbsp;[aborted]";
                }
                // line 334
                echo "</span>
                            ";
            }
            // line 336
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 336, $this->source); })()))) {
                // line 337
                echo "                                <span class=\"judgetime\">(external judging started: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 337, $this->source); })()), "starttime", [], "any", false, false, false, 337), "%H:%M:%S"), "html", null, true);
                // line 338
                if (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 338, $this->source); })()), "endtime", [], "any", false, false, false, 338)) {
                    // line 339
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 339, $this->source); })()), "starttime", [], "any", false, false, false, 339), twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 339, $this->source); })()), "endtime", [], "any", false, false, false, 339)), "html", null, true);
                    echo "s";
                } else {
                    // line 341
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 341, $this->source); })()), "starttime", [], "any", false, false, false, 341)), "html", null, true);
                    echo "]";
                }
                // line 343
                echo ")</span>";
            }
            // line 345
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 345, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 345, $this->source); })()), "result", [], "any", false, false, false, 345) != "compiler-error"))) {
                // line 346
                echo ", max/sum runtime:
                                ";
                // line 347
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 347, $this->source); })()), "maxRuntime", [], "any", false, false, false, 347), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 347, $this->source); })()), "sumRuntime", [], "any", false, false, false, 347), 2, ".", ""), "html", null, true);
                echo "s";
                // line 348
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 348, $this->source); })()))) {
                    // line 349
                    echo "<span class=\"lastruntime\">
                                    (<a href=\"";
                    // line 350
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 350, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 350, $this->source); })()), "submitid", [], "any", false, false, false, 350), "html", null, true);
                    echo "</a>:
                                        ";
                    // line 351
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 351, $this->source); })()), "maxRuntime", [], "any", false, false, false, 351), 2, ".", ""), "html", null, true);
                    // line 352
                    echo "/";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 352, $this->source); })()), "sumRuntime", [], "any", false, false, false, 352), 2, ".", ""), "html", null, true);
                    echo "s)
                                </span>";
                }
            }
            // line 356
            if ((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 356, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 356, $this->source); })()), "result", [], "any", false, false, false, 356) != "compiler-error")) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 356, $this->source); })()), "result", [], "any", false, false, false, 356) != null))) {
                // line 357
                echo ", external max/sum runtime:
                                ";
                // line 358
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 358, $this->source); })()), "maxRuntime", [], "any", false, false, false, 358), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 358, $this->source); })()), "sumRuntime", [], "any", false, false, false, 358), 2, ".", ""), "html", null, true);
                echo "s
                            ";
            }
            // line 360
            echo "                        </div>

                        ";
            // line 363
            echo "                        ";
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 363, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 363, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 363, $this->source); })()), "result", [], "any", false, false, false, 363) != "compiler-error")))) {
                // line 364
                echo "                            <table>
                                <tr>
                                    <td>testcase runs:</td>
                                    <td>
                                        ";
                // line 368
                if ((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 368, $this->source); })()))) {
                    // line 369
                    echo "                                            ";
                    $context["judgingDone"] = false;
                    // line 370
                    echo "                                        ";
                } else {
                    // line 371
                    echo "                                            ";
                    $context["judgingDone"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 371, $this->source); })()), "endtime", [], "any", false, false, false, 371));
                    // line 372
                    echo "                                        ";
                }
                // line 373
                echo "                                        ";
                echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 373, $this->source); })()), (isset($context["judgingDone"]) || array_key_exists("judgingDone", $context) ? $context["judgingDone"] : (function () { throw new RuntimeError('Variable "judgingDone" does not exist.', 373, $this->source); })()));
                echo "
                                    </td>
                                </tr>
                                ";
                // line 376
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 376, $this->source); })()))) {
                    // line 377
                    echo "                                    <tr class=\"lasttcruns\">
                                        <td>
                                            <a href=\"";
                    // line 379
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 379, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 379, $this->source); })()), "submitid", [], "any", false, false, false, 379), "html", null, true);
                    echo "</a> runs:
                                        </td>
                                        <td>
                                            ";
                    // line 382
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["lastRuns"]) || array_key_exists("lastRuns", $context) ? $context["lastRuns"] : (function () { throw new RuntimeError('Variable "lastRuns" does not exist.', 382, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 382, $this->source); })()), "endtime", [], "any", false, false, false, 382)));
                    echo "
                                        </td>
                                    </tr>
                                ";
                }
                // line 386
                echo "                                ";
                if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 386, $this->source); })()))) {
                    // line 387
                    echo "                                    <tr>
                                        <td>external runs:</td>
                                        <td>
                                            ";
                    // line 390
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 390, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 390, $this->source); })()), "endtime", [], "any", false, false, false, 390)), true);
                    echo "
                                        </td>
                                    </tr>
                                ";
                }
                // line 394
                echo "                            </table>

                            ";
                // line 397
                echo "                            ";
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 397, $this->source); })()))) {
                    // line 398
                    echo "                                <span class=\"testcases_prev\">
                                <a href=\"javascript:togglelastruns();\">show/hide</a>
                                results of previous <a href=\"";
                    // line 400
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 400, $this->source); })()), "html", null, true);
                    echo "\">submission s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 400, $this->source); })()), "submitid", [], "any", false, false, false, 400), "html", null, true);
                    echo "</a>
                                    ";
                    // line 401
                    if (twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 401, $this->source); })()), "verifyComment", [], "any", false, false, false, 401)) {
                        // line 402
                        echo "                                        <span class=\"prevsubmit\">(verify comment: '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 402, $this->source); })()), "verifyComment", [], "any", false, false, false, 402), "html", null, true);
                        echo "')</span>
                                    ";
                    }
                    // line 404
                    echo "                            </span>
                            ";
                }
                // line 406
                echo "                        ";
            }
            // line 407
            echo "                    </div>

                    <script>
                        \$(function () {
                            togglelastruns();
                        });
                    </script>

                    ";
            // line 416
            echo "                    ";
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 416, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 416, $this->source); })()), "result", [], "any", false, false, false, 416)))) {
                // line 417
                echo "                        <form action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verify", ["judgingId" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 417, $this->source); })()), "judgingid", [], "any", false, false, false, 417)]), "html", null, true);
                echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"verified\" value=\"";
                // line 418
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 418, $this->source); })()), "verified", [], "any", false, false, false, 418)) {
                    echo "0";
                } else {
                    echo "1";
                }
                echo "\"/>

                            ";
                // line 421
                echo "                            <p>
                                Verified: <strong>";
                // line 422
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 422, $this->source); })()), "verified", [], "any", false, false, false, 422)) {
                    echo "yes";
                } else {
                    echo "no";
                }
                echo "</strong>";
                // line 423
                if ((twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 423, $this->source); })()), "verified", [], "any", false, false, false, 423) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 423, $this->source); })()), "juryMember", [], "any", false, false, false, 423)))) {
                    // line 424
                    echo ", by ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 424, $this->source); })()), "juryMember", [], "any", false, false, false, 424), "html", null, true);
                    // line 425
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 425, $this->source); })()), "verifyComment", [], "any", false, false, false, 425))) {
                        // line 426
                        echo "                                        with comment \"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 426, $this->source); })()), "verifyComment", [], "any", false, false, false, 426), "html", null, true);
                        echo "\"";
                    }
                }
                // line 429
                if ( !(((isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 429, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 429, $this->source); })()), "verified", [], "any", false, false, false, 429)) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 429, $this->source); })()), "valid", [], "any", false, false, false, 429))) {
                    // line 430
                    echo "                                    <input type=\"submit\" value=\"";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 430, $this->source); })()), "verified", [], "any", false, false, false, 430)) {
                        echo "un";
                    }
                    echo "mark verified\"
                                        class=\"btn btn-outline-secondary btn-sm\"/>

                                    ";
                    // line 433
                    if ( !twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 433, $this->source); })()), "verified", [], "any", false, false, false, 433)) {
                        // line 434
                        echo "                                        with comment
                                        <input type=\"text\" name=\"comment\" size=\"25\" class=\"form-control\" id=\"comment\"
                                            style=\"display: inline; width: auto;\"/>
                                    ";
                    }
                    // line 438
                    echo "
                                    ";
                    // line 439
                    if (( !(null === (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 439, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 439, $this->source); })()), "contestProblem", [], "any", false, false, false, 439))) {
                        // line 440
                        echo "                                        <button class=\"btn btn-outline-secondary btn-sm\" id=\"post-to-icat\">
                                            post to iCAT
                                        </button>
                                    ";
                    }
                    // line 444
                    echo "                                ";
                }
                // line 445
                echo "                            </p>
                        </form>
                        ";
                // line 447
                if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 447, $this->source); })()), "contestProblem", [], "any", false, false, false, 447)) {
                    // line 448
                    echo "                            <script>
                                \$(function () {
                                    \$('#post-to-icat').on('click', function () {
                                        postVerifyCommentToICAT(
                                            '";
                    // line 452
                    echo twig_escape_filter($this->env, (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 452, $this->source); })()), "html", null, true);
                    echo "/insert_entry.php',
                                            '";
                    // line 453
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 453, $this->source); })()), "user", [], "any", false, false, false, 453), "username", [], "any", false, false, false, 453), "html", null, true);
                    echo "',
                                            '";
                    // line 454
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 454, $this->source); })()), "teamid", [], "any", false, false, false, 454), "html", null, true);
                    echo "',
                                            '";
                    // line 455
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 455, $this->source); })()), "contestProblem", [], "any", false, false, false, 455), "shortname", [], "any", false, false, false, 455), "html", null, true);
                    echo "',
                                            '";
                    // line 456
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 456, $this->source); })()), "externalid", [], "any", false, false, false, 456), "html", null, true);
                    echo "'
                                        );
                                        alert('Comment posted to iCAT.');
                                        return false;
                                    });
                                });
                            </script>
                        ";
                }
                // line 464
                echo "                    ";
            } elseif ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 464, $this->source); })()))) {
                // line 465
                echo "                        <div class=\"alert alert-warning\">Judging is not ready yet!</div>
                    ";
            }
            // line 467
            echo "
                    ";
            // line 469
            echo "                    ";
            $context["color"] = "#6666FF";
            // line 470
            echo "                    ";
            $context["message"] = "not finished yet";
            // line 471
            echo "                    ";
            $context["output"] = null;
            // line 472
            echo "                    ";
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 472, $this->source); })()))) {
                // line 473
                echo "                        ";
                $context["output"] = twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 473, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 473);
                // line 474
                echo "                    ";
            }
            // line 475
            echo "                    ";
            if ( !(null === (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 475, $this->source); })()))) {
                // line 476
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 476, $this->source); })()), "result", [], "any", false, false, false, 476) == "compiler-error")) {
                    // line 477
                    echo "                            ";
                    $context["color"] = "red";
                    // line 478
                    echo "                            ";
                    $context["message"] = "unsuccessful";
                    // line 479
                    echo "                        ";
                } else {
                    // line 480
                    echo "                            ";
                    $context["color"] = "#1daa1d";
                    // line 481
                    echo "                            ";
                    $context["message"] = "successful";
                    // line 482
                    echo "                            ";
                    if ( !twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 482, $this->source); })()))) {
                        // line 483
                        echo "                                ";
                        $context["message"] = ((((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 483, $this->source); })()) . " (with ") . $this->extensions['App\Twig\TwigExtension']->lineCount((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 483, $this->source); })()))) . " line(s) of output)");
                        // line 484
                        echo "                            ";
                    }
                    // line 485
                    echo "                        ";
                }
                // line 486
                echo "                    ";
            }
            // line 487
            echo "                    ";
            $context["header"] = (((("Compilation <span style=\"color: " . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 487, $this->source); })())) . ";\">") . (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 487, $this->source); })())) . "</span>");
            // line 488
            echo "                    <h3>
                        ";
            // line 489
            if ( !twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 489, $this->source); })()))) {
                // line 490
                echo "                            <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                                ";
                // line 491
                echo (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 491, $this->source); })());
                echo "
                            </a>
                        ";
            } else {
                // line 494
                echo "                            ";
                echo (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 494, $this->source); })());
                echo "
                        ";
            }
            // line 496
            echo "                    </h3>
                    ";
            // line 497
            if (twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 497, $this->source); })()))) {
                // line 498
                echo "                        <p class=\"nodata";
                if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 498, $this->source); })())) || (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 498, $this->source); })()), "result", [], "any", false, false, false, 498) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                            id=\"detailcompile\">There were no compiler errors or warnings.</p>
                    ";
            } else {
                // line 501
                echo "                        <pre class=\"output_text ";
                if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 501, $this->source); })())) || (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 501, $this->source); })()), "result", [], "any", false, false, false, 501) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                            id=\"detailcompile\">";
                // line 502
                echo twig_escape_filter($this->env, (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 502, $this->source); })()), "html", null, true);
                echo "</pre>
                    ";
            }
            // line 504
            echo "
                    ";
            // line 505
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 505, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 505, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 505, $this->source); })()), "result", [], "any", false, false, false, 505) != "compiler-error")))) {
                // line 506
                echo "                        ";
                // line 507
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 507, $this->source); })()));
                foreach ($context['_seq'] as $context["runIdx"] => $context["run"]) {
                    // line 508
                    echo "                            ";
                    $context["externalRun"] = null;
                    // line 509
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["externalRuns"] ?? null), $context["runIdx"], [], "array", true, true, false, 509)) {
                        // line 510
                        echo "                                ";
                        $context["externalRun"] = twig_get_attribute($this->env, $this->source, (isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 510, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 510);
                        // line 511
                        echo "                            ";
                    }
                    // line 512
                    echo "                            <div id=\"run-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 512), "html", null, true);
                    echo "\"
                                style=\"margin-bottom: 20px;\"
                                class=\"card run ";
                    // line 514
                    if ((twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 514) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 514), "runresult", [], "any", false, false, false, 514) == "correct"))) {
                        echo "run_correct";
                    }
                    echo "\">
                                <div class=\"card-header\">
                                    Run #";
                    // line 516
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 516), "html", null, true);
                    echo "
                                    ";
                    // line 517
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 517))) {
                        // line 518
                        echo "                                        | <span style=\"font-family:monospace;\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 518), "html", null, true);
                        echo ".in</span>
                                    ";
                    } else {
                        // line 520
                        echo "                                        ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 520))) {
                            // line 521
                            echo "                                            | ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 521), "html", null, true);
                            echo "
                                        ";
                        }
                        // line 523
                        echo "                                    ";
                    }
                    // line 524
                    echo "                                    ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 524))) {
                        // line 525
                        echo "                                        | 
                                        <span class=\"sol ";
                        // line 526
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 526), "runresult", [], "any", false, false, false, 526) == "correct")) {
                            echo "sol_correct";
                        } else {
                            echo "sol_incorrect";
                        }
                        echo "\">
                                            ";
                        // line 527
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 527), "runresult", [], "any", false, false, false, 527), "html", null, true);
                        echo "
                                        </span>
                                        ";
                        // line 529
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 529), "runresult", [], "any", false, false, false, 529) == "timelimit")) {
                            // line 530
                            echo "                                            ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 530, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 530), "terminated", [], "any", false, false, false, 530)) {
                                // line 531
                                echo "                                                <b>(terminated)</b>
                                            ";
                            } else {
                                // line 533
                                echo "                                                <b>(finished late)</b>
                                            ";
                            }
                            // line 535
                            echo "                                        ";
                        }
                        // line 536
                        echo "                                    ";
                    }
                    // line 537
                    echo "                                    ";
                    if (( !(null === (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 537, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 537, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 537)))) {
                        // line 538
                        echo "                                        ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 538, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 538))) {
                            // line 539
                            echo "                                            (external:
                                            <span class=\"sol ";
                            // line 540
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 540, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 540), "result", [], "any", false, false, false, 540) == "correct")) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                                ";
                            // line 541
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 541, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 541), "result", [], "any", false, false, false, 541), "html", null, true);
                            // line 542
                            echo "</span>";
                            // line 543
                            echo ")
                                        ";
                        }
                        // line 545
                        echo "                                    ";
                    }
                    // line 546
                    echo "                                    <span style=\"float: right;\">
                                        <a href=\"";
                    // line 547
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 547, $this->source); })()), "probid", [], "any", false, false, false, 547), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 547), "type" => "input"]), "html", null, true);
                    echo "\">
                                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                                <i class=\"fas fa-download\"></i>
                                                Input
                                            </button>
                                        </a>
                                        <a href=\"";
                    // line 553
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 553, $this->source); })()), "probid", [], "any", false, false, false, 553), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 553), "type" => "output"]), "html", null, true);
                    echo "\">
                                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                                <i class=\"fas fa-download\"></i>
                                                Reference Output
                                            </button>
                                        </a>
                                        ";
                    // line 559
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 559))) {
                        // line 560
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_team_output", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 560, $this->source); })()), "submitid", [], "any", false, false, false, 560), "run" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 560), "runid", [], "any", false, false, false, 560), "contest" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 560, $this->source); })()), "cid", [], "any", false, false, false, 560)]), "html", null, true);
                        echo "\">
                                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                                    <i class=\"fas fa-download\"></i>
                                                    Team Output
                                                </button>
                                            </a>
                                        ";
                    }
                    // line 567
                    echo "                                    </span>
                                </div>
                                <div class=\"card-body\">
                                ";
                    // line 570
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 570))) {
                        // line 571
                        echo "                                <span style=\"display:inline; margin-left: 5px;\">
                            <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                                    ";
                        // line 573
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 573, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 573), "cpu_time", [], "any", false, false, false, 573), "html", null, true);
                        echo "s CPU
                                    ";
                        // line 574
                        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 574, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 574), "metadata", [], "any", false, false, false, 574))) {
                            // line 575
                            echo "                                        , ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 575, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 575), "wall_time", [], "any", false, false, false, 575), "html", null, true);
                            echo "s wall,
                                <i class=\"fas fa-memory\" title=\"RAM\"></i>
                                        ";
                            // line 577
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 577, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 577), "memory", [], "any", false, false, false, 577), "html", null, true);
                            echo "
                                <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                                        exit code:
                                        ";
                            // line 580
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 580, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 580), "exitcode", [], "any", false, false, false, 580), "html", null, true);
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 580, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 580), "signal", [], "any", false, false, false, 580) > 0)) {
                                echo ",
                                            signal: ";
                                // line 581
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 581, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 581), "signal", [], "any", false, false, false, 581), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 583
                            echo "                                        <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                                data-target=\"#collapseExample-";
                            // line 584
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\"
                                                aria-expanded=\"false\">
                                            show complete metadata
                                        </button>
                                        <div class=\"collapse\" id=\"collapseExample-";
                            // line 588
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\">
                                            <div class=\"card card-body output_text\">";
                            // line 589
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 589, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 589), "metadata", [], "any", false, false, false, 589), "html", null, true);
                            echo "</div>
                                        </div>
                                    ";
                        }
                        // line 592
                        echo "                                </span>
                                ";
                    }
                    // line 594
                    echo "                                ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 594))) {
                        // line 595
                        echo "                                    <p><em>
                                        ";
                        // line 596
                        echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 596));
                        echo "
                                    </em></p>
                                ";
                    }
                    // line 599
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 599, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 599), "image_thumb", [], "any", false, false, false, 599)) {
                        // line 600
                        echo "                                    <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                                        ";
                        // line 601
                        $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 601, $this->source); })()), "probid", [], "any", false, false, false, 601), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 601), "type" => "image"]);
                        // line 602
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["imgUrl"]) || array_key_exists("imgUrl", $context) ? $context["imgUrl"] : (function () { throw new RuntimeError('Variable "imgUrl" does not exist.', 602, $this->source); })()), "html", null, true);
                        echo "\">
                                            <img src=\"data:image/";
                        // line 603
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "imageType", [], "any", false, false, false, 603), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 603, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 603), "image_thumb", [], "any", false, false, false, 603)), "html", null, true);
                        echo "\"/>
                                        </a>
                                    </span>
                                ";
                    }
                    // line 607
                    echo "
                                ";
                    // line 608
                    $context["runDone"] = false;
                    // line 609
                    echo "                                ";
                    if ((( !(null === $context["run"]) &&  !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 609))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 609), "runresult", [], "any", false, false, false, 609)))) {
                        // line 610
                        echo "                                    ";
                        $context["runDone"] = true;
                        // line 611
                        echo "                                ";
                    } elseif ((( !(null === (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 611, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 611, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 611))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 611), "result", [], "any", false, false, false, 611)))) {
                        // line 612
                        echo "                                    ";
                        $context["runDone"] = true;
                        // line 613
                        echo "                                ";
                    }
                    // line 614
                    echo "                                ";
                    if ( !(isset($context["runDone"]) || array_key_exists("runDone", $context) ? $context["runDone"] : (function () { throw new RuntimeError('Variable "runDone" does not exist.', 614, $this->source); })())) {
                        // line 615
                        echo "                                    <p class=\"nodata\">
                                        ";
                        // line 616
                        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 616, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 616, $this->source); })()), "result", [], "any", false, false, false, 616))) {
                            // line 617
                            echo "                                            Run not used for final result.
                                        ";
                        } else {
                            // line 619
                            echo "                                            Run not started/finished yet.
                                        ";
                        }
                        // line 621
                        echo "                                    </p>
                                ";
                    } else {
                        // line 623
                        echo "                                    ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 623)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 623), "runresult", [], "any", false, false, false, 623)))) {
                            // line 624
                            echo "                                        ";
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 624, $this->source); })())) {
                                // line 625
                                echo "                                            <h5>Validator output</h5>
                                            ";
                                // line 626
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 626, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 626), "output_diff", [], "any", false, false, false, 626))) {
                                    // line 627
                                    echo "                                                <p class=\"nodata\">There was no validator output.</p>
                                            ";
                                } else {
                                    // line 629
                                    echo "                                                <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 629, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 629), "output_diff", [], "any", false, false, false, 629));
                                    echo "</pre>
                                            ";
                                }
                                // line 631
                                echo "                                        ";
                            } else {
                                // line 632
                                echo "                                            <h5>Diff output</h5>
                                            ";
                                // line 633
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 633, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 633), "output_diff", [], "any", false, false, false, 633))) {
                                    // line 634
                                    echo "                                                <p class=\"nodata\">There was no diff output.</p>
                                            ";
                                } else {
                                    // line 636
                                    echo "                                                <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 636, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 636), "output_diff", [], "any", false, false, false, 636));
                                    echo "</pre>
                                            ";
                                }
                                // line 638
                                echo "
                                            ";
                                // line 639
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 639), "runresult", [], "any", false, false, false, 639) != "correct")) {
                                    // line 640
                                    echo "                                                ";
                                    echo $this->extensions['App\Twig\TwigExtension']->runDiff(twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 640, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 640));
                                    echo "
                                            ";
                                }
                                // line 642
                                echo "                                        ";
                            }
                            // line 643
                            echo "
                                        ";
                            // line 644
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 644, $this->source); })())) {
                                // line 645
                                echo "                                            <h5>Validator/Submission interaction</h5>
                                            ";
                                // line 646
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 646, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 646), "output_run", [], "any", false, false, false, 646))) {
                                    // line 647
                                    echo "                                                <p class=\"nodata\">There was no interaction log.</p>
                                            ";
                                } else {
                                    // line 649
                                    echo "                                                ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 649, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 649), "output_run", [], "any", false, false, false, 649));
                                    echo "
                                            ";
                                }
                                // line 651
                                echo "                                        ";
                            } else {
                                // line 652
                                echo "                                            <h5>Program output</h5>
                                            ";
                                // line 653
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 653, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 653), "output_run", [], "any", false, false, false, 653))) {
                                    // line 654
                                    echo "                                                <p class=\"nodata\">There was no program output.</p>
                                            ";
                                } else {
                                    // line 656
                                    echo "                                                <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 656, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 656), "output_run", [], "any", false, false, false, 656));
                                    echo "</pre>
                                            ";
                                }
                                // line 658
                                echo "                                        ";
                            }
                            // line 659
                            echo "
                                        <h5>Program error output</h5>
                                        ";
                            // line 661
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 661, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 661), "output_error", [], "any", false, false, false, 661))) {
                                // line 662
                                echo "                                            <p class=\"nodata\">There was no stderr output.</p>
                                        ";
                            } else {
                                // line 664
                                echo "                                            <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 664, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 664), "output_error", [], "any", false, false, false, 664));
                                echo "</pre>
                                        ";
                            }
                            // line 666
                            echo "
                                        <h5>Judging system output (info/debug/errors)</h5>
                                        ";
                            // line 668
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 668, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 668), "output_system", [], "any", false, false, false, 668))) {
                                // line 669
                                echo "                                            <p class=\"nodata\">There was no judging system output.</p>
                                        ";
                            } else {
                                // line 671
                                echo "                                            <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 671, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 671), "output_system", [], "any", false, false, false, 671));
                                echo "</pre>
                                        ";
                            }
                            // line 673
                            echo "                                    ";
                        }
                        // line 674
                        echo "                                ";
                    }
                    // line 675
                    echo "
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['runIdx'], $context['run'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 679
                echo "
                        <script>
                            function display_correctruns(show) {
                                elements = document.getElementsByClassName('run_correct');
                                for (var i = 0; i < elements.length; i++) {
                                    elements[i].style.display = show ? 'block' : 'none';
                                }
                            }

                            display_correctruns(false);
                        </script>
                    ";
            }
            // line 690
            echo " ";
            // line 691
            echo "
                ";
        }
        // line 692
        echo " ";
        // line 693
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "jury/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1692 => 693,  1690 => 692,  1686 => 691,  1684 => 690,  1670 => 679,  1661 => 675,  1658 => 674,  1655 => 673,  1649 => 671,  1645 => 669,  1643 => 668,  1639 => 666,  1633 => 664,  1629 => 662,  1627 => 661,  1623 => 659,  1620 => 658,  1614 => 656,  1610 => 654,  1608 => 653,  1605 => 652,  1602 => 651,  1596 => 649,  1592 => 647,  1590 => 646,  1587 => 645,  1585 => 644,  1582 => 643,  1579 => 642,  1573 => 640,  1571 => 639,  1568 => 638,  1562 => 636,  1558 => 634,  1556 => 633,  1553 => 632,  1550 => 631,  1544 => 629,  1540 => 627,  1538 => 626,  1535 => 625,  1532 => 624,  1529 => 623,  1525 => 621,  1521 => 619,  1517 => 617,  1515 => 616,  1512 => 615,  1509 => 614,  1506 => 613,  1503 => 612,  1500 => 611,  1497 => 610,  1494 => 609,  1492 => 608,  1489 => 607,  1480 => 603,  1475 => 602,  1473 => 601,  1470 => 600,  1467 => 599,  1461 => 596,  1458 => 595,  1455 => 594,  1451 => 592,  1445 => 589,  1441 => 588,  1434 => 584,  1431 => 583,  1426 => 581,  1421 => 580,  1415 => 577,  1409 => 575,  1407 => 574,  1403 => 573,  1399 => 571,  1397 => 570,  1392 => 567,  1381 => 560,  1379 => 559,  1370 => 553,  1361 => 547,  1358 => 546,  1355 => 545,  1351 => 543,  1349 => 542,  1347 => 541,  1339 => 540,  1336 => 539,  1333 => 538,  1330 => 537,  1327 => 536,  1324 => 535,  1320 => 533,  1316 => 531,  1313 => 530,  1311 => 529,  1306 => 527,  1298 => 526,  1295 => 525,  1292 => 524,  1289 => 523,  1283 => 521,  1280 => 520,  1274 => 518,  1272 => 517,  1268 => 516,  1261 => 514,  1255 => 512,  1252 => 511,  1249 => 510,  1246 => 509,  1243 => 508,  1238 => 507,  1236 => 506,  1234 => 505,  1231 => 504,  1226 => 502,  1219 => 501,  1210 => 498,  1208 => 497,  1205 => 496,  1199 => 494,  1193 => 491,  1190 => 490,  1188 => 489,  1185 => 488,  1182 => 487,  1179 => 486,  1176 => 485,  1173 => 484,  1170 => 483,  1167 => 482,  1164 => 481,  1161 => 480,  1158 => 479,  1155 => 478,  1152 => 477,  1149 => 476,  1146 => 475,  1143 => 474,  1140 => 473,  1137 => 472,  1134 => 471,  1131 => 470,  1128 => 469,  1125 => 467,  1121 => 465,  1118 => 464,  1107 => 456,  1103 => 455,  1099 => 454,  1095 => 453,  1091 => 452,  1085 => 448,  1083 => 447,  1079 => 445,  1076 => 444,  1070 => 440,  1068 => 439,  1065 => 438,  1059 => 434,  1057 => 433,  1048 => 430,  1046 => 429,  1040 => 426,  1038 => 425,  1035 => 424,  1033 => 423,  1026 => 422,  1023 => 421,  1014 => 418,  1009 => 417,  1006 => 416,  996 => 407,  993 => 406,  989 => 404,  983 => 402,  981 => 401,  975 => 400,  971 => 398,  968 => 397,  964 => 394,  957 => 390,  952 => 387,  949 => 386,  942 => 382,  934 => 379,  930 => 377,  928 => 376,  921 => 373,  918 => 372,  915 => 371,  912 => 370,  909 => 369,  907 => 368,  901 => 364,  898 => 363,  894 => 360,  887 => 358,  884 => 357,  882 => 356,  875 => 352,  873 => 351,  867 => 350,  864 => 349,  862 => 348,  857 => 347,  854 => 346,  852 => 345,  849 => 343,  844 => 341,  839 => 339,  837 => 338,  834 => 337,  832 => 336,  828 => 334,  825 => 332,  820 => 330,  818 => 329,  814 => 328,  812 => 327,  810 => 326,  803 => 325,  801 => 324,  798 => 323,  796 => 322,  791 => 320,  789 => 319,  786 => 317,  779 => 316,  776 => 315,  774 => 314,  772 => 313,  769 => 311,  767 => 310,  764 => 308,  760 => 305,  757 => 303,  755 => 302,  753 => 301,  747 => 297,  743 => 295,  739 => 293,  735 => 291,  731 => 289,  728 => 288,  721 => 285,  719 => 284,  713 => 282,  711 => 281,  707 => 279,  703 => 277,  701 => 276,  695 => 275,  691 => 274,  688 => 273,  686 => 272,  682 => 271,  678 => 269,  675 => 267,  673 => 266,  670 => 265,  668 => 264,  665 => 263,  663 => 262,  660 => 261,  657 => 260,  654 => 259,  645 => 257,  640 => 256,  638 => 255,  634 => 253,  632 => 252,  629 => 251,  624 => 248,  615 => 244,  607 => 242,  605 => 241,  601 => 240,  596 => 237,  592 => 235,  590 => 234,  586 => 233,  582 => 232,  577 => 229,  571 => 227,  569 => 226,  565 => 225,  560 => 222,  554 => 220,  552 => 219,  548 => 218,  541 => 216,  535 => 215,  531 => 213,  527 => 211,  523 => 209,  521 => 208,  517 => 207,  509 => 205,  506 => 204,  502 => 203,  486 => 189,  484 => 188,  481 => 187,  472 => 182,  466 => 179,  461 => 178,  455 => 176,  453 => 175,  446 => 170,  444 => 169,  441 => 168,  437 => 166,  431 => 164,  429 => 163,  426 => 161,  424 => 160,  420 => 159,  417 => 157,  415 => 156,  411 => 154,  409 => 153,  405 => 151,  397 => 146,  393 => 144,  391 => 143,  383 => 138,  375 => 133,  366 => 127,  362 => 126,  353 => 120,  349 => 119,  342 => 114,  336 => 112,  328 => 110,  326 => 109,  322 => 108,  313 => 102,  309 => 101,  298 => 95,  294 => 94,  289 => 91,  286 => 89,  280 => 85,  278 => 84,  275 => 83,  271 => 81,  269 => 80,  265 => 78,  263 => 77,  260 => 76,  252 => 73,  248 => 72,  239 => 70,  233 => 68,  230 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  216 => 62,  213 => 61,  209 => 59,  206 => 58,  202 => 56,  186 => 54,  180 => 53,  178 => 52,  161 => 51,  159 => 50,  156 => 49,  148 => 47,  145 => 46,  143 => 45,  139 => 44,  134 => 41,  128 => 38,  125 => 37,  123 => 36,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  108 => 31,  106 => 30,  100 => 26,  96 => 25,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  62 => 7,  58 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var \\App\\Entity\\ExternalJudgement externalJudgement #}
{% extends \"jury/base.html.twig\" %}

{% block title %}Submission s{{ submission.submitid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/nv.d3.min.css') }}\">
    <script src=\"{{ asset('js/d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/nv.d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/FileSaver.min.js') }}\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
{% endblock %}

{% block content %}
<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                            
                {% if submission.externalJudgements.empty %}
                    {% set externalJudgement = null %}
                {% else %}
                    {% set externalJudgement = submission.externalJudgements.first %}
                {% endif %}

                {% if claimWarning %}
                    <div class=\"alert alert-warning\">
                        {{ claimWarning }}
                    </div>
                {% endif %}

                <div class=\"mb-3\">
                    <h1 style=\"display: inline;\">
                        Submission {{ submission.submitid }}
                        {% if submission.originalSubmission %}
                            {% set origSubmissionUrl = path('jury_submission', {submitId: submission.originalSubmission.submitid}) %}
                            (resubmit of <a href=\"{{ origSubmissionUrl }}\">s{{ submission.originalSubmission.submitid }}</a>)
                        {% endif %}
                        {% if submission.resubmissions is not empty %}
                            (resubmitted as
                            {%- for resubmission in submission.resubmissions -%}
                                {% set resubmissionUrl = path('jury_submission', {submitId: resubmission.submitid}) %}
                                <a href=\"{{ resubmissionUrl }}\">s{{ resubmission.submitid }}</a>
                                {%- if not loop.last -%},{%- endif -%}
                            {%- endfor -%}
                            )
                        {% endif %}
                        {% if not submission.valid %}
                            (ignored)
                        {% endif %}
                    </h1>
                    {% if is_granted('ROLE_ADMIN') %}
                        {% if submission.valid %}
                            {% set action = 'ignore' %}
                        {% else %}
                            {% set action = 'unignore' %}
                        {% endif %}
                        <form action=\"{{ path('jury_submission_update_status', {'submitId': submission.submitid}) }}\" method=\"post\"
                            style=\"display: inline; \">
                            <input type=\"hidden\" name=\"valid\" value=\"{% if submission.valid %}0{% else %}1{% endif %}\"/>
                            <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                                value=\"{{ action | upper }} this submission\"
                                onclick=\"return confirm('Really {{ action }} submission s{{ submission.submitid }}?');\"/>
                        </form>
                    {% endif %}

                    {% include 'jury/partials/rejudge_form.html.twig' with {table: 'submission', id: submission.submitid} %}
                </div>

                {% if not submission.valid %}
                    <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
                {% endif %}

                {% if not submission.contestProblem %}
                    <div class=\"alert alert-danger\">
                        This submission is for a problem that is not part (anymore) of the contest of the submission.
                    </div>
                {% endif %}

                {# Condensed submission info on a single line with icons #}
                <div class=\"submission-summary mb-2\">
                    <span>
                        <i class=\"fas fa-users\" title=\"Team:\"></i>
                        <a href=\"{{ path('jury_team', {teamId: submission.teamid, cid: submission.cid}) }}\">
                            {{ submission.team.name }} (t{{ submission.teamid }})
                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
                        <a href=\"{{ path('jury_contest', {'contestId': submission.cid}) }}\">
                            {{ submission.contest.shortname }}
                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
                        <a href=\"{{ path('jury_problem', {'probId': submission.probid}) }}\">
                            {% if submission.contestProblem %}
                                {{ submission.contestProblem.shortname }}: {{ submission.problem.name }}
                            {% else %}
                                {{ submission.problem.name }}
                            {% endif %}
                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-comments\" title=\"Language:\"></i>
                        <a href=\"{{ path('jury_language', {'langId': submission.langid}) }}\">
                            {{ submission.language.name }}
                        </a>
                    </span>

                    <span>
                        <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
                        <span title=\"{{ submission.submittime | printtime('%Y-%m-%d %H:%M:%S (%Z)') }}\">
                            {{ submission.submittime | printtime(null, submission.contest) }}
                        </span>
                    </span>

                    <span>
                        <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
                        {{ submission.problem.timelimit * submission.language.timeFactor }}s
                    </span>

                    <span>
                        <i class=\"fas fa-code\" title=\"Source code:\"></i>
                        <a href=\"{{ path('jury_submission_source', {submission: submission.submitid}) }}\">
                            View source code
                        </a>
                    </span>

                    {% if external_ccs_submission_url is not empty %}
                        <span>
                            <i class=\"fas fa-link\" title=\"External link:\"></i>
                            <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                                View in external CCS
                            </a>
                        </span>
                    {% endif %}
                </div>

                {% if submission.externalid %}
                    <div class=\"mb-2\">
                        External ID:
                        {% if external_ccs_submission_url is empty %}
                            {{- submission.externalid -}}
                        {% else %}
                            <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                                {{- submission.externalid -}}
                            </a>
                        {%- endif -%}
                        {%- if externalJudgement is not null -%}
                            , {{ externalJudgement.result | printValidJuryResult }}
                        {% endif %}
                    </div>
                {% endif %}

                {% if externalJudgement is not null and externalJudgement.result is not empty and selectedJudging is not null and externalJudgement.result != selectedJudging.result %}
                    <div class=\"alert alert-danger\">
                        <strong>Results differ!</strong>
                        <hr>
                        <p>
                            This submission was judged as
                            {% if external_ccs_submission_url is empty %}
                                {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                            {% else %}
                                <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                                    {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                                </a>
                            {% endif -%}
                            , but as {{ selectedJudging.result | printValidJuryResult }}
                            by DOMjudge.
                        </p>
                    </div>
                {% endif %}

                {% if judgings | length > 1 or (judgings | length == 1 and selectedJudging is null) %}
                    <h2>Judgings</h2>
                    <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
                        <thead>
                        <tr>
                            <td></td>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">start</th>
                            <th scope=\"col\">max runtime</th>
                            <th scope=\"col\">judgehost</th>
                            <th scope=\"col\">result</th>
                            <th scope=\"col\">rejudging</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for judging in judgings %}
                            {% set link = path('jury_submission', {submitId: submission.submitid, jid: judging.judgingid}) %}
                            <tr {% if not judging.valid %}class=\"disabled\"{% endif %}>
                                <td>
                                    <a href=\"{{ link }}\">
                                        {% if selectedJudging is not null and selectedJudging.judgingid == judging.judgingid %}
                                            <i class=\"fas fa-long-arrow-alt-right\"></i>
                                        {% else %}
                                            &nbsp;
                                        {% endif %}
                                    </a>
                                </td>
                                <td><a href=\"{{ link }}\">j{{ judging.judgingid }}</a></td>
                                <td><a href=\"{{ link }}\">{{ judging.starttime | printtime(null, submission.contest) }}</a></td>
                                <td>
                                    <a href=\"{{ link }}\">
                                        {% if maxRunTimes[judging.judgingId] is not null %}
                                            {{ maxRunTimes[judging.judgingId] }}s
                                        {% endif %}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"{{ link }}\">
                                        {% if judging.judgehost is not null %}
                                            {{ judging.judgehost.hostname | printHost }}
                                        {% endif %}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"{{ link }}\">
                                        {{ judging.result | printResult(judging.valid, true) }}
                                        {% if judging.stillBusy %}
                                            (&hellip;)
                                        {% endif %}
                                    </a>
                                </td>
                                <td>
                                    <a href=\"{{ link }}\">
                                        {% if judging.rejudging is not null %}
                                            r{{ judging.rejudgingid }} ({{ judging.rejudging.reason }})
                                        {% endif %}
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}

                {% if selectedJudging is null %}
                    <div class=\"alert alert-warning\">Not (re)judged yet</div>

                    {% if unjudgableReasons is not empty %}
                        {% for reason in unjudgableReasons %}
                            <div class=\"alert alert-danger\">{{ reason }}</div>
                        {% endfor %}
                    {% endif %}
                {% endif %}

                {% if selectedJudging is not null or externalJudgement is not null %}

                    {% include 'jury/partials/submission_graph.html.twig' %}

                    {% if selectedJudging is not null %}

                        {# Show judging information #}
                        <div class=\"mb-2\">
                            <h2 style=\"display: inline;\">
                                Judging j{{ selectedJudging.judgingid }}
                                {% if selectedJudging.rejudging %}
                                    (rejudging
                                    <a href=\"{{ path('jury_rejudging', {rejudgingId: selectedJudging.rejudgingid}) }}\">
                                        r{{ selectedJudging.rejudgingid }}</a>, reason: {{ selectedJudging.rejudging.reason }})
                                {% elseif not selectedJudging.valid %}
                                    (Invalid)
                                {% endif %}
                            </h2>
                            &nbsp;
                            {% if not selectedJudging.verified %}
                                <form action=\"{{ path('jury_submission', {submitId: submission.submitid, jid: selectedJudging.judgingid}) }}\"
                                    method=\"post\" style=\"display: inline;\">
                                    {% if selectedJudging.juryMember is not empty %}
                                        (claimed by {{ selectedJudging.juryMember }})
                                        <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                                    {% endif %}
                                    {% if app.user.username == selectedJudging.juryMember %}
                                        <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                                    {% else %}
                                        <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                                    {% endif %}
                                </form>
                            {% endif %}
                        </div>
                    {% endif %}

                    <div class=\"mb-2\">
                        <div>
                            Result:
                            {% if selectedJudging is null or selectedJudging.result is empty %}
                                {%- if submission.judgehost %}
                                    {{- '' | printValidJuryResult -}}
                                {%- else %}
                                    {{- 'queued' | printValidJuryResult -}}
                                {%- endif %}
                            {%- else %}
                                {{- selectedJudging.result | printValidJuryResult -}}
                            {%- endif %}
                            {%- if submission.stillBusy -%}
                                (&hellip;)
                            {%- endif -%}
                            {%- if lastJudging is not null -%}
                                {% set lastSubmissionLink = path('jury_submission', {submitId: lastSubmission.submitid}) %}{#-
                            -#}<span class=\"lastresult\">
                                (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>: {{ lastJudging.result }}){#-
                            -#}</span>
                            {%- endif -%}
                            {%- if externalJudgement is not null %}
                                (external: {{ externalJudgement.result | printValidJuryResult }})
                            {%- endif %}
                            {%- if selectedJudging is not null -%}
                                , Judgehost:
                                {% set judgehostLink = path('jury_judgehost', {hostname: selectedJudging.judgehost.hostname}) %}
                                <a href=\"{{ judgehostLink }}\">{{ selectedJudging.judgehost.hostname | printHost }}</a>,
                                <span class=\"judgetime\">Judging started: {{ selectedJudging.starttime | printtime('%H:%M:%S') }}
                                    {%- if selectedJudging.endtime -%}
                                        , finished in {{ selectedJudging.starttime | printtimediff(selectedJudging.endtime) }}s
                                    {%- elseif selectedJudging.valid or selectedJudging.rejudging -%}
                                        &nbsp;[still judging - busy {{ selectedJudging.starttime | printtimediff }}]
                                    {%- else -%}
                                        &nbsp;[aborted]
                                    {%- endif -%}
                                </span>
                            {% endif -%}
                            {%- if externalJudgement is not null %}
                                <span class=\"judgetime\">(external judging started: {{ externalJudgement.starttime | printtime('%H:%M:%S') }}
                                    {%- if externalJudgement.endtime -%}
                                        , finished in {{ externalJudgement.starttime | printtimediff(externalJudgement.endtime) }}s
                                    {%- else -%}
                                        &nbsp;[still judging - busy {{ externalJudgement.starttime | printtimediff }}]
                                    {%- endif -%}
                                )</span>
                            {%- endif -%}
                            {%- if selectedJudging is not null and selectedJudging.result != 'compiler-error' -%}
                                , max/sum runtime:
                                {{ selectedJudging.maxRuntime | number_format(2, '.', '') }}/{{ selectedJudging.sumRuntime | number_format(2, '.', '') }}s
                                {%- if lastJudging is not null -%}
                                    <span class=\"lastruntime\">
                                    (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>:
                                        {{ lastJudging.maxRuntime | number_format(2, '.', '') }}{#-
                                    -#}/{{ lastJudging.sumRuntime | number_format(2, '.', '') }}s)
                                </span>
                                {%- endif -%}
                            {% endif -%}
                            {%- if externalJudgement is not null and externalJudgement.result != 'compiler-error' and externalJudgement.result != null -%}
                                , external max/sum runtime:
                                {{ externalJudgement.maxRuntime | number_format(2, '.', '') }}/{{ externalJudgement.sumRuntime | number_format(2, '.', '') }}s
                            {% endif %}
                        </div>

                        {# Display testcase results #}
                        {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
                            <table>
                                <tr>
                                    <td>testcase runs:</td>
                                    <td>
                                        {% if selectedJudging is null %}
                                            {% set judgingDone = false %}
                                        {% else %}
                                            {% set judgingDone = selectedJudging.endtime is not empty %}
                                        {% endif %}
                                        {{ runs | displayTestcaseResults(judgingDone) }}
                                    </td>
                                </tr>
                                {% if lastJudging is not null %}
                                    <tr class=\"lasttcruns\">
                                        <td>
                                            <a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a> runs:
                                        </td>
                                        <td>
                                            {{ lastRuns | displayTestcaseResults(lastJudging.endtime is not empty) }}
                                        </td>
                                    </tr>
                                {% endif %}
                                {% if externalJudgement is not null %}
                                    <tr>
                                        <td>external runs:</td>
                                        <td>
                                            {{ externalRuns | displayTestcaseResults(externalJudgement.endtime is not empty, true) }}
                                        </td>
                                    </tr>
                                {% endif %}
                            </table>

                            {# Show JS toggle of previous submission results #}
                            {% if lastJudging is not null %}
                                <span class=\"testcases_prev\">
                                <a href=\"javascript:togglelastruns();\">show/hide</a>
                                results of previous <a href=\"{{ lastSubmissionLink }}\">submission s{{ lastSubmission.submitid }}</a>
                                    {% if lastJudging.verifyComment %}
                                        <span class=\"prevsubmit\">(verify comment: '{{ lastJudging.verifyComment }}')</span>
                                    {% endif %}
                            </span>
                            {% endif %}
                        {% endif %}
                    </div>

                    <script>
                        \$(function () {
                            togglelastruns();
                        });
                    </script>

                    {# Show verify info, but only when a result is known #}
                    {% if selectedJudging is not null and selectedJudging.result is not empty %}
                        <form action=\"{{ path('jury_judging_verify', {judgingId: selectedJudging.judgingid}) }}\" method=\"post\">
                            <input type=\"hidden\" name=\"verified\" value=\"{% if selectedJudging.verified %}0{% else %}1{% endif %}\"/>

                            {# Display verification data: verified, by whom, and comment #}
                            <p>
                                Verified: <strong>{% if selectedJudging.verified %}yes{% else %}no{% endif %}</strong>
                                {%- if selectedJudging.verified and selectedJudging.juryMember is not empty -%}
                                    , by {{ selectedJudging.juryMember }}
                                    {%- if selectedJudging.verifyComment is not empty %}
                                        with comment \"{{ selectedJudging.verifyComment }}\"
                                    {%- endif -%}
                                {%- endif -%}
                                {% if not (verificationRequired and selectedJudging.verified and selectedJudging.valid) %}
                                    <input type=\"submit\" value=\"{% if selectedJudging.verified %}un{% endif %}mark verified\"
                                        class=\"btn btn-outline-secondary btn-sm\"/>

                                    {% if not selectedJudging.verified %}
                                        with comment
                                        <input type=\"text\" name=\"comment\" size=\"25\" class=\"form-control\" id=\"comment\"
                                            style=\"display: inline; width: auto;\"/>
                                    {% endif %}

                                    {% if icat_url is not null and submission.contestProblem %}
                                        <button class=\"btn btn-outline-secondary btn-sm\" id=\"post-to-icat\">
                                            post to iCAT
                                        </button>
                                    {% endif %}
                                {% endif %}
                            </p>
                        </form>
                        {% if submission.contestProblem %}
                            <script>
                                \$(function () {
                                    \$('#post-to-icat').on('click', function () {
                                        postVerifyCommentToICAT(
                                            '{{ icat_url }}/insert_entry.php',
                                            '{{ app.user.username }}',
                                            '{{ submission.teamid }}',
                                            '{{ submission.contestProblem.shortname }}',
                                            '{{ submission.externalid }}'
                                        );
                                        alert('Comment posted to iCAT.');
                                        return false;
                                    });
                                });
                            </script>
                        {% endif %}
                    {% elseif selectedJudging is not null %}
                        <div class=\"alert alert-warning\">Judging is not ready yet!</div>
                    {% endif %}

                    {# Display compile output #}
                    {% set color = '#6666FF' %}
                    {% set message = 'not finished yet' %}
                    {% set output = null %}
                    {% if selectedJudging is not null %}
                        {% set output = selectedJudging.outputCompile(true) %}
                    {% endif %}
                    {% if output is not null %}
                        {% if selectedJudging.result == 'compiler-error' %}
                            {% set color = 'red' %}
                            {% set message = 'unsuccessful' %}
                        {% else %}
                            {% set color = '#1daa1d' %}
                            {% set message = 'successful' %}
                            {% if output is not empty %}
                                {% set message = message ~ ' (with ' ~ (output | lineCount) ~ ' line(s) of output)' %}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                    {% set header = 'Compilation <span style=\"color: ' ~ color ~ ';\">' ~ message ~ '</span>' %}
                    <h3>
                        {% if output is not empty %}
                            <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                                {{ header | raw }}
                            </a>
                        {% else %}
                            {{ header | raw }}
                        {% endif %}
                    </h3>
                    {% if output is empty %}
                        <p class=\"nodata{% if selectedJudging is null or selectedJudging.result != 'compiler-error' %} d-none{% endif %}\"
                            id=\"detailcompile\">There were no compiler errors or warnings.</p>
                    {% else %}
                        <pre class=\"output_text {% if selectedJudging is null or selectedJudging.result != 'compiler-error' %} d-none{% endif %}\"
                            id=\"detailcompile\">{{ output }}</pre>
                    {% endif %}

                    {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
                        {# Show run info. Only when compilation was successful or we have an external judgement #}
                        {% for runIdx, run in runs %}
                            {% set externalRun = null %}
                            {% if externalRuns[runIdx] is defined %}
                                {% set externalRun = externalRuns[runIdx] %}
                            {% endif %}
                            <div id=\"run-{{run.rank}}\"
                                style=\"margin-bottom: 20px;\"
                                class=\"card run {% if run.firstJudgingRun and run.firstJudgingRun.runresult == 'correct' %}run_correct{% endif %}\">
                                <div class=\"card-header\">
                                    Run #{{ run.rank }}
                                    {% if run.origInputFilename is not null %}
                                        | <span style=\"font-family:monospace;\">{{ run.origInputFilename }}.in</span>
                                    {% else %}
                                        {% if run.description is not null %}
                                            | {{ run.description }}
                                        {% endif %}
                                    {% endif %}
                                    {% if run.firstJudgingRun is not null %}
                                        | 
                                        <span class=\"sol {% if run.firstJudgingRun.runresult == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                            {{ run.firstJudgingRun.runresult }}
                                        </span>
                                        {% if run.firstJudgingRun.runresult == 'timelimit' %}
                                            {% if runsOutput[runIdx].terminated %}
                                                <b>(terminated)</b>
                                            {% else %}
                                                <b>(finished late)</b>
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                    {% if externalRun is not null and externalRun.firstExternalRun is not null %}
                                        {% if externalRun.firstExternalRun is not null %}
                                            (external:
                                            <span class=\"sol {% if externalRun.firstExternalRun.result == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                                {{ externalRun.firstExternalRun.result }}{#-
                                            -#}</span>{#-
                                            -#})
                                        {% endif %}
                                    {% endif %}
                                    <span style=\"float: right;\">
                                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'input'}) }}\">
                                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                                <i class=\"fas fa-download\"></i>
                                                Input
                                            </button>
                                        </a>
                                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'output'}) }}\">
                                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                                <i class=\"fas fa-download\"></i>
                                                Reference Output
                                            </button>
                                        </a>
                                        {% if run.firstJudgingRun is not null %}
                                            <a href=\"{{ path('jury_submission_team_output', {'submission': submission.submitid, 'run': run.firstJudgingRun.runid, 'contest': submission.cid}) }}\">
                                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                                    <i class=\"fas fa-download\"></i>
                                                    Team Output
                                                </button>
                                            </a>
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"card-body\">
                                {% if run.firstJudgingRun is not null %}
                                <span style=\"display:inline; margin-left: 5px;\">
                            <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                                    {{ runsOutput[runIdx].cpu_time }}s CPU
                                    {% if runsOutput[runIdx].metadata is not null %}
                                        , {{ runsOutput[runIdx].wall_time }}s wall,
                                <i class=\"fas fa-memory\" title=\"RAM\"></i>
                                        {{ runsOutput[runIdx].memory }}
                                <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                                        exit code:
                                        {{ runsOutput[runIdx].exitcode }}{% if runsOutput[runIdx].signal > 0 %},
                                            signal: {{ runsOutput[runIdx].signal }}
                                        {% endif %}
                                        <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                                data-target=\"#collapseExample-{{ runIdx }}\"
                                                aria-expanded=\"false\">
                                            show complete metadata
                                        </button>
                                        <div class=\"collapse\" id=\"collapseExample-{{ runIdx }}\">
                                            <div class=\"card card-body output_text\">{{ runsOutput[runIdx].metadata }}</div>
                                        </div>
                                    {% endif %}
                                </span>
                                {% endif %}
                                {% if run.description is not null %}
                                    <p><em>
                                        {{ run.description(true) | descriptionExpand }}
                                    </em></p>
                                {% endif %}
                                {% if runsOutput[runIdx].image_thumb %}
                                    <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                                        {% set imgUrl = path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'image'}) %}
                                        <a href=\"{{ imgUrl }}\">
                                            <img src=\"data:image/{{ run.imageType }};base64,{{ runsOutput[runIdx].image_thumb | base64 }}\"/>
                                        </a>
                                    </span>
                                {% endif %}

                                {% set runDone = false %}
                                {% if run is not null and run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                                    {% set runDone = true %}
                                {% elseif externalRun is not null and externalRun.firstExternalRun is not null and run.firstExternalRun.result is not null %}
                                    {% set runDone = true %}
                                {% endif %}
                                {% if not runDone %}
                                    <p class=\"nodata\">
                                        {% if selectedJudging is not null and selectedJudging.result %}
                                            Run not used for final result.
                                        {% else %}
                                            Run not started/finished yet.
                                        {% endif %}
                                    </p>
                                {% else %}
                                    {% if run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                                        {% if combinedRunCompare %}
                                            <h5>Validator output</h5>
                                            {% if runsOutput[runIdx].output_diff is empty %}
                                                <p class=\"nodata\">There was no validator output.</p>
                                            {% else %}
                                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                            {% endif %}
                                        {% else %}
                                            <h5>Diff output</h5>
                                            {% if runsOutput[runIdx].output_diff is empty %}
                                                <p class=\"nodata\">There was no diff output.</p>
                                            {% else %}
                                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                            {% endif %}

                                            {% if run.firstJudgingRun.runresult != 'correct' %}
                                                {{ runsOutput[runIdx] | runDiff }}
                                            {% endif %}
                                        {% endif %}

                                        {% if combinedRunCompare %}
                                            <h5>Validator/Submission interaction</h5>
                                            {% if runsOutput[runIdx].output_run is empty %}
                                                <p class=\"nodata\">There was no interaction log.</p>
                                            {% else %}
                                                {{ runsOutput[runIdx].output_run | interactiveLog }}
                                            {% endif %}
                                        {% else %}
                                            <h5>Program output</h5>
                                            {% if runsOutput[runIdx].output_run is empty %}
                                                <p class=\"nodata\">There was no program output.</p>
                                            {% else %}
                                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_run | parseRunDiff }}</pre>
                                            {% endif %}
                                        {% endif %}

                                        <h5>Program error output</h5>
                                        {% if runsOutput[runIdx].output_error is empty %}
                                            <p class=\"nodata\">There was no stderr output.</p>
                                        {% else %}
                                            <pre class=\"output_text\">{{ runsOutput[runIdx].output_error | parseRunDiff }}</pre>
                                        {% endif %}

                                        <h5>Judging system output (info/debug/errors)</h5>
                                        {% if runsOutput[runIdx].output_system is empty %}
                                            <p class=\"nodata\">There was no judging system output.</p>
                                        {% else %}
                                            <pre class=\"output_text\">{{ runsOutput[runIdx].output_system | parseRunDiff }}</pre>
                                        {% endif %}
                                    {% endif %}
                                {% endif %}

                                </div>
                            </div>
                        {% endfor %}

                        <script>
                            function display_correctruns(show) {
                                elements = document.getElementsByClassName('run_correct');
                                for (var i = 0; i < elements.length; i++) {
                                    elements[i].style.display = show ? 'block' : 'none';
                                }
                            }

                            display_correctruns(false);
                        </script>
                    {% endif %} {# selectedJudging.result != 'compiler-error' #}

                {% endif %} {# selectedJudging is not null or externalJudgement is not null #}

            </div>
        </div>
    </div>
{% endblock %}
", "jury/submission.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/submission.html.twig");
    }
}
