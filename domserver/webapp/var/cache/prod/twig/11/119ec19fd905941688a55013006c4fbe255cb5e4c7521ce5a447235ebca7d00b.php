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

/* jury/contest.html.twig */
class __TwigTemplate_e0a8825f26dddfc9eca9cf6a49282cfa7914aac108431bb91d4568b54aa91882 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contest ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 4), "html", null, true);
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
        echo "
    <h1>Contest ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        if (($context["isActive"] ?? null)) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            This is an active contest
        </div>
    ";
        }
        // line 20
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "enabled", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <div class=\"alert alert-danger\">
            This contest is disabled
        </div>
    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 25))) {
            // line 26
            echo "        <div class=\"alert alert-info\">
            This contest is final
        </div>
    ";
        }
        // line 30
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>CID</th>
                    <td>c";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 38
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["contest"] ?? null))) {
            // line 39
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "externalid", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 44
        echo "                <tr>
                    <th>Short name</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "shortname", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Activate time</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "activatetimeString", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeEnabled", [], "any", false, false, false, 59)) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeString", [], "any", false, false, false, 60), "html", null, true);
            echo "
                        ";
        } else {
            // line 62
            echo "                            <span class=\"ignore\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeString", [], "any", false, false, false, 62), "html", null, true);
            echo "</span> <em>delayed</em>
                        ";
        }
        // line 64
        echo "                    </td>
                </tr>
                <tr>
                    <th>Scoreboard freeze</th>
                    <td>";
        // line 68
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", false, false, false, 68), "-")) : ("-")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>End time</th>
                    <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtimeString", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Scoreboard unfreeze</th>
                    <td>";
        // line 76
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", false, false, false, 76), "-")) : ("-")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Deactivate time</th>
                    <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "deactivatetimeString", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Process balloons</th>
                    <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "processBalloons", [], "any", false, false, false, 84)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Publicly visible</th>
                    <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "public", [], "any", false, false, false, 88)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Open to all teams</th>
                    <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "openToAllTeams", [], "any", false, false, false, 92)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>
                        ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "openToAllTeams", [], "any", false, false, false, 97)) {
            // line 98
            echo "                            <em>all teams</em>
                        ";
        } else {
            // line 100
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "teams", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 101
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\">
                                    ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 102), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 102), "html", null, true);
                echo ")
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "teamCategories", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 107
                echo "                                All teams from
                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">
                                    ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 109), "html", null, true);
                echo "
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                        ";
        }
        // line 114
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 120)) {
            // line 121
            echo "        <h2>Finalized</h2>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Finalized at</th>
                        <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 128), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "b", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>";
            // line 136
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizecomment", [], "any", false, false, false, 136), "html", null, true));
            echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    ";
        }
        // line 142
        echo "
    <p>";
        // line 144
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 145
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_edit", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 145)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 146
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_delete", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 146)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 148
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 148)) {
            // line 149
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 149)]), "Update finalization", "secondary", "lock");
            echo "
        ";
        } else {
            // line 151
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 151)]), "Finalize this contest", "secondary", "lock");
            echo "
        ";
        }
        // line 153
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/contest.html.twig", 153)->display(twig_array_merge($context, ["table" => "contest", "id" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 153), "buttonClass" => "btn-secondary"]));
        // line 154
        echo "    </p>

    ";
        // line 156
        if (($context["allowRemovedIntervals"] ?? null)) {
            // line 157
            echo "        <h2>Removed intervals</h2>
        ";
            // line 158
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "removedIntervals", [], "any", false, false, false, 158)))) {
                // line 159
                echo "            <p class=\"nodata\">None.</p>
        ";
            } else {
                // line 161
                echo "            ";
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 162
                    echo "                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["removedIntervalForm"] ?? null), 'form_start');
                    echo "
            ";
                }
                // line 164
                echo "            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <table class=\"table data-table table-sm table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th></th>
                            <th>To</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["removedIntervals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["removedInterval"]) {
                    // line 179
                    echo "                            <tr>
                                <td>";
                    // line 180
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 180), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttimeString", [], "any", false, false, false, 181), "html", null, true);
                    echo "</td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>";
                    // line 183
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtimeString", [], "any", false, false, false, 183), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 184
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttime", [], "any", false, false, false, 184), twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtime", [], "any", false, false, false, 184)), "html", null, true);
                    echo "</td>
                                <td>
                                    <button class=\"btn btn-sm btn-danger remove-interval-button\" type=\"button\"
                                            data-submit-url=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_remove_interval", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 187), "intervalId" => twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 187)]), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-trash-alt\"></i></button>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['removedInterval'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 193
                    echo "                            <tr>
                                <td>new</td>
                                <td>
                                    ";
                    // line 196
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "starttimeString", [], "any", false, false, false, 196), 'errors');
                    echo "
                                    ";
                    // line 197
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "starttimeString", [], "any", false, false, false, 197), 'widget');
                    echo "
                                </td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>
                                    ";
                    // line 201
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "endtimeString", [], "any", false, false, false, 201), 'errors');
                    echo "
                                    ";
                    // line 202
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "endtimeString", [], "any", false, false, false, 202), 'widget');
                    echo "
                                </td>
                                <td></td>
                                <td>";
                    // line 205
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "add", [], "any", false, false, false, 205), 'widget');
                    echo "</td>
                            </tr>
                        ";
                }
                // line 208
                echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
                // line 212
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 213
                    echo "                <small class=\"text-muted\">Use the format <b><tt>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</tt></b> for
                    start/end times.
                </small>
                ";
                    // line 216
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["removedIntervalForm"] ?? null), 'form_end');
                    echo "
            ";
                }
                // line 218
                echo "        ";
            }
            // line 219
            echo "    ";
        }
        // line 220
        echo "
    <h2 class=\"mt-2\">Problems</h2>

    ";
        // line 223
        if (twig_test_empty(($context["problems"] ?? null))) {
            // line 224
            echo "        <p class=\"nodata\">No problems added yet</p>
    ";
        } else {
            // line 226
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shortname</th>
                        <th>Points</th>
                        <th>Allow<br>submit</th>
                        <th>Allow<br>judge</th>
                        <th>Color</th>
                        <th>Lazy eval</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 244
                echo "                        <tr>
                            ";
                // line 245
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 245)]);
                // line 246
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 246), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 247
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 247), "name", [], "any", false, false, false, 247), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 248
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 248), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 249
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 249), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 250
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 250)), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 251
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 251)), "html", null, true);
                echo "</a></td>
                            ";
                // line 252
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 252))) {
                    // line 253
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 255
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 255), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 256
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                                        <div class=\"circle\" style=\"background-color: ";
                    // line 257
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 257), "html", null, true);
                    echo "\"></div>
                                    </a>
                                </td>
                            ";
                }
                // line 261
                echo "                            <td>
                                <a href=\"";
                // line 262
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                                    ";
                // line 263
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 263))) {
                    // line 264
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 264)), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 266
                    echo "                                        -
                                    ";
                }
                // line 268
                echo "                                </a>
                            </td>
                            <td>
                                ";
                // line 271
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 272
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_delete", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 272), "probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 272)]), "html", null, true);
                    echo "\" data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
                }
                // line 276
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 284
        echo "
    <script>
        \$(function () {
            \$('.remove-interval-button').on('click', function () {
                if (confirm('Really delete interval?')) {
                    var \$form = \$('<form method=\"post\" />');
                    \$form.attr('action', \$(this).data('submit-url'));
                    \$form.submit();
                }
                return false;
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "jury/contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 284,  640 => 279,  632 => 276,  624 => 272,  622 => 271,  617 => 268,  613 => 266,  607 => 264,  605 => 263,  601 => 262,  598 => 261,  591 => 257,  587 => 256,  582 => 255,  576 => 253,  574 => 252,  568 => 251,  562 => 250,  556 => 249,  550 => 248,  544 => 247,  537 => 246,  535 => 245,  532 => 244,  528 => 243,  509 => 226,  505 => 224,  503 => 223,  498 => 220,  495 => 219,  492 => 218,  487 => 216,  482 => 213,  480 => 212,  474 => 208,  468 => 205,  462 => 202,  458 => 201,  451 => 197,  447 => 196,  442 => 193,  439 => 192,  428 => 187,  422 => 184,  418 => 183,  413 => 181,  409 => 180,  406 => 179,  402 => 178,  386 => 164,  380 => 162,  377 => 161,  373 => 159,  371 => 158,  368 => 157,  366 => 156,  362 => 154,  359 => 153,  353 => 151,  347 => 149,  344 => 148,  339 => 146,  335 => 145,  333 => 144,  330 => 142,  321 => 136,  314 => 132,  307 => 128,  298 => 121,  296 => 120,  288 => 114,  285 => 113,  275 => 109,  271 => 108,  268 => 107,  263 => 106,  251 => 102,  246 => 101,  241 => 100,  237 => 98,  235 => 97,  227 => 92,  220 => 88,  213 => 84,  206 => 80,  199 => 76,  192 => 72,  185 => 68,  179 => 64,  173 => 62,  167 => 60,  165 => 59,  157 => 54,  150 => 50,  143 => 46,  139 => 44,  133 => 41,  129 => 39,  127 => 38,  122 => 36,  114 => 30,  108 => 26,  105 => 25,  99 => 21,  96 => 20,  90 => 16,  88 => 15,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/contest.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/contest.html.twig");
    }
}
