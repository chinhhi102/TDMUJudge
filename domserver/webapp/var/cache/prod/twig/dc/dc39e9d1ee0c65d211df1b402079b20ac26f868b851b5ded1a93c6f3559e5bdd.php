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
class __TwigTemplate_fcf919737b4f77e1ce76a893b046c9b45a14ac147757d8a32ccb321818a0c1f9 extends \Twig\Template
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
        // line 5
        echo "  Contest ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 5, $this->source); })()), "cid", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 10, $context, $this->getSourceContext());
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"container-fluid dashboard-content\">
          <h1>
            Contest ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "
          </h1>

          ";
        // line 22
        if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "            <div class=\"alert alert-success\">
              This is an active contest
            </div>
          ";
        }
        // line 27
        echo "          ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 27, $this->source); })()), "enabled", [], "any", false, false, false, 27)) {
            // line 28
            echo "            <div class=\"alert alert-danger\">
              This contest is disabled
            </div>
          ";
        }
        // line 32
        echo "          ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 32, $this->source); })()), "finalizetime", [], "any", false, false, false, 32))) {
            // line 33
            echo "            <div class=\"alert alert-info\">
              This contest is final
            </div>
          ";
        }
        // line 37
        echo "
          <div class=\"row\">
            <div class=\"col-lg-4\">
              <table class=\"table table-sm table-striped\">
                <tr>
                  <th>
                    CID
                  </th>
                  <td>
                    c";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 46, $this->source); })()), "cid", [], "any", false, false, false, 46), "html", null, true);
        echo "
                  </td>
                </tr>
                ";
        // line 49
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 49, $this->source); })()))) {
            // line 50
            echo "                  <tr>
                    <th>
                      External ID
                    </th>
                    <td>
                      ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 55, $this->source); })()), "externalid", [], "any", false, false, false, 55), "html", null, true);
            echo "
                    </td>
                  </tr>
                ";
        }
        // line 59
        echo "                <tr>
                  <th>
                    Short name
                  </th>
                  <td>
                    ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 64, $this->source); })()), "shortname", [], "any", false, false, false, 64), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Name
                  </th>
                  <td>
                    ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Activate time
                  </th>
                  <td>
                    ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 80, $this->source); })()), "activatetimeString", [], "any", false, false, false, 80), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Start time
                  </th>
                  <td>
                    ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 88, $this->source); })()), "starttimeEnabled", [], "any", false, false, false, 88)) {
            // line 89
            echo "                      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 89, $this->source); })()), "starttimeString", [], "any", false, false, false, 89), "html", null, true);
            echo "
                    ";
        } else {
            // line 91
            echo "                      <span class=\"ignore\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 91, $this->source); })()), "starttimeString", [], "any", false, false, false, 91), "html", null, true);
            echo "</span>
                      <em>delayed</em>
                    ";
        }
        // line 94
        echo "                  </td>
                </tr>
                <tr>
                  <th>
                    Scoreboard freeze
                  </th>
                  <td>
                    ";
        // line 101
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", true, true, false, 101)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", false, false, false, 101), "-")) : ("-")), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    End time
                  </th>
                  <td>
                    ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 109, $this->source); })()), "endtimeString", [], "any", false, false, false, 109), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Scoreboard unfreeze
                  </th>
                  <td>
                    ";
        // line 117
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", false, false, false, 117), "-")) : ("-")), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Deactivate time
                  </th>
                  <td>
                    ";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 125, $this->source); })()), "deactivatetimeString", [], "any", false, false, false, 125), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Process balloons
                  </th>
                  <td>
                    ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 133, $this->source); })()), "processBalloons", [], "any", false, false, false, 133)), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Publicly visible
                  </th>
                  <td>
                    ";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 141, $this->source); })()), "public", [], "any", false, false, false, 141)), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Open to all teams
                  </th>
                  <td>
                    ";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 149, $this->source); })()), "openToAllTeams", [], "any", false, false, false, 149)), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <th>
                    Teams
                  </th>
                  <td>
                    ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 157, $this->source); })()), "openToAllTeams", [], "any", false, false, false, 157)) {
            // line 158
            echo "                      <em>all teams</em>
                    ";
        } else {
            // line 160
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 160, $this->source); })()), "teams", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 161
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source,                 // line 165
$context["team"], "teamid", [], "any", false, false, false, 165)]), "html", null, true);
                // line 168
                echo "\">
                          ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 169), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 169), "html", null, true);
                echo ")
                        </a>
                        <br />
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 173, $this->source); })()), "teamCategories", [], "any", false, false, false, 173));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 174
                echo "                        All teams from
                        <a href=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source,                 // line 179
$context["category"], "categoryid", [], "any", false, false, false, 179)]), "html", null, true);
                // line 182
                echo "\">
                          ";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 183), "html", null, true);
                echo "
                        </a>
                        <br />
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                    ";
        }
        // line 188
        echo "                  </td>
                </tr>
              </table>
            </div>
          </div>

          ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 194, $this->source); })()), "finalizetime", [], "any", false, false, false, 194)) {
            // line 195
            echo "            <h2>
              Finalized
            </h2>

            <div class=\"row\">
              <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                  <tr>
                    <th>
                      Finalized at
                    </th>
                    <td>
                      ";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source,             // line 208
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 208, $this->source); })()), "finalizetime", [], "any", false, false, false, 208), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            // line 209
            echo "
                    </td>
                  </tr>
                  <tr>
                    <th>
                      B
                    </th>
                    <td>
                      ";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 217, $this->source); })()), "b", [], "any", false, false, false, 217), "html", null, true);
            echo "
                    </td>
                  </tr>
                  <tr>
                    <th>
                      Comment
                    </th>
                    <td>
                      ";
            // line 225
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 225, $this->source); })()), "finalizecomment", [], "any", false, false, false, 225), "html", null, true));
            echo "
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          ";
        }
        // line 232
        echo "
          <p>";
        // line 234
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 235
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_edit", ["contestId" => twig_get_attribute($this->env, $this->source,             // line 240
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 240, $this->source); })()), "cid", [], "any", false, false, false, 240)]), "Edit", "primary", "edit");
            // line 247
            echo "
              ";
            // line 248
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_delete", ["contestId" => twig_get_attribute($this->env, $this->source,             // line 253
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 253, $this->source); })()), "cid", [], "any", false, false, false, 253)]), "Delete", "danger", "trash-alt", true);
            // line 261
            echo "
            ";
        }
        // line 263
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 263, $this->source); })()), "finalizetime", [], "any", false, false, false, 263)) {
            // line 264
            echo "              ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source,             // line 269
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 269, $this->source); })()), "cid", [], "any", false, false, false, 269)]), "Update finalization", "secondary", "lock");
            // line 276
            echo "
            ";
        } else {
            // line 278
            echo "              ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source,             // line 283
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 283, $this->source); })()), "cid", [], "any", false, false, false, 283)]), "Finalize this contest", "secondary", "lock");
            // line 290
            echo "
            ";
        }
        // line 292
        echo "            ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/contest.html.twig", 292)->display(twig_array_merge($context, ["table" => "contest", "id" => twig_get_attribute($this->env, $this->source,         // line 294
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 294, $this->source); })()), "cid", [], "any", false, false, false, 294), "buttonClass" => "btn-secondary"]));
        // line 297
        echo "          </p>

          ";
        // line 299
        if ((isset($context["allowRemovedIntervals"]) || array_key_exists("allowRemovedIntervals", $context) ? $context["allowRemovedIntervals"] : (function () { throw new RuntimeError('Variable "allowRemovedIntervals" does not exist.', 299, $this->source); })())) {
            // line 300
            echo "            <h2>
              Removed intervals
            </h2>
            ";
            // line 303
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 305
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 305, $this->source); })()), "removedIntervals", [], "any", false, false, false, 305)))) {
                // line 306
                echo "              <p class=\"nodata\">
                None.
              </p>
            ";
            } else {
                // line 310
                echo "              ";
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 311
                    echo "                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 311, $this->source); })()), 'form_start');
                    echo "
              ";
                }
                // line 313
                echo "              <div class=\"row\">
                <div class=\"col-lg-6\">
                  <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          From
                        </th>
                        <th></th>
                        <th>
                          To
                        </th>
                        <th>
                          Duration
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["removedIntervals"]) || array_key_exists("removedIntervals", $context) ? $context["removedIntervals"] : (function () { throw new RuntimeError('Variable "removedIntervals" does not exist.', 335, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["removedInterval"]) {
                    // line 336
                    echo "                        <tr>
                          <td>
                            ";
                    // line 338
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 338), "html", null, true);
                    echo "
                          </td>
                          <td>
                            ";
                    // line 341
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttimeString", [], "any", false, false, false, 341), "html", null, true);
                    echo "
                          </td>
                          <td>
                            <i class=\"fas fa-arrow-right\"></i>
                          </td>
                          <td>
                            ";
                    // line 347
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtimeString", [], "any", false, false, false, 347), "html", null, true);
                    echo "
                          </td>
                          <td>
                            ";
                    // line 350
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source,                     // line 351
$context["removedInterval"], "starttime", [], "any", false, false, false, 351), twig_get_attribute($this->env, $this->source,                     // line 352
$context["removedInterval"], "endtime", [], "any", false, false, false, 352)), "html", null, true);
                    // line 354
                    echo "
                          </td>
                          <td>
                            <button class=\"btn btn-sm btn-danger remove-interval-button\"
                              type=\"button\"
                              data-submit-url=\"";
                    // line 359
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_remove_interval", ["contestId" => twig_get_attribute($this->env, $this->source,                     // line 363
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 363, $this->source); })()), "cid", [], "any", false, false, false, 363), "intervalId" => twig_get_attribute($this->env, $this->source,                     // line 364
$context["removedInterval"], "intervalid", [], "any", false, false, false, 364)]), "html", null, true);
                    // line 367
                    echo "\">
                              <i class=\"fas fa-trash-alt\"></i>
                            </button>
                          </td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['removedInterval'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 373
                echo "                      ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 374
                    echo "                        <tr>
                          <td>
                            new
                          </td>
                          <td>
                            ";
                    // line 379
                    echo                     // line 380
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 380, $this->source); })()), "starttimeString", [], "any", false, false, false, 380), 'errors');
                    // line 381
                    echo "
                            ";
                    // line 382
                    echo                     // line 383
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 383, $this->source); })()), "starttimeString", [], "any", false, false, false, 383), 'widget');
                    // line 384
                    echo "
                          </td>
                          <td>
                            <i class=\"fas fa-arrow-right\"></i>
                          </td>
                          <td>
                            ";
                    // line 390
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 390, $this->source); })()), "endtimeString", [], "any", false, false, false, 390), 'errors');
                    echo "
                            ";
                    // line 391
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 391, $this->source); })()), "endtimeString", [], "any", false, false, false, 391), 'widget');
                    echo "
                          </td>
                          <td></td>
                          <td>
                            ";
                    // line 395
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 395, $this->source); })()), "add", [], "any", false, false, false, 395), 'widget');
                    echo "
                          </td>
                        </tr>
                      ";
                }
                // line 399
                echo "                    </tbody>
                  </table>
                </div>
              </div>
              ";
                // line 403
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 404
                    echo "                <small class=\"text-muted\">
                  Use the format <b>
                    <tt>
                      YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone
                    </tt>
                  </b> for start/end times.
                </small>
                ";
                    // line 411
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 411, $this->source); })()), 'form_end');
                    echo "
              ";
                }
                // line 413
                echo "            ";
            }
            // line 414
            echo "          ";
        }
        // line 415
        echo "
          <h2 class=\"mt-2\">
            Problems
          </h2>

          ";
        // line 420
        if (twig_test_empty((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 420, $this->source); })()))) {
            // line 421
            echo "            <p class=\"nodata\">
              No problems added yet
            </p>
          ";
        } else {
            // line 425
            echo "            <div class=\"row\">
              <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                  <thead>
                    <tr>
                      <th>
                        ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Shortname
                      </th>
                      <th>
                        Points
                      </th>
                      <th>
                        Allow<br />submit
                      </th>
                      <th>
                        Allow<br />judge
                      </th>
                      <th>
                        Color
                      </th>
                      <th>
                        Lazy eval
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 458
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 458, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 459
                echo "                      <tr>
                        ";
                // line 460
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source,                 // line 464
$context["problem"], "probid", [], "any", false, false, false, 464)]);
                // line 468
                echo "                        <td>
                          <a href=\"";
                // line 469
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 469, $this->source); })()), "html", null, true);
                echo "\">p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 469), "html", null, true);
                echo "</a>
                        </td>
                        <td>
                          <a href=\"";
                // line 472
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 472, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 472), "name", [], "any", false, false, false, 472), "html", null, true);
                echo "</a>
                        </td>
                        <td>
                          <a href=\"";
                // line 475
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 475, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 475), "html", null, true);
                echo "</a>
                        </td>
                        <td>
                          <a href=\"";
                // line 478
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 478, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 478), "html", null, true);
                echo "</a>
                        </td>
                        <td>
                          <a href=\"";
                // line 481
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 481, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 482
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 482)), "html", null, true);
                echo "
                          </a>
                        </td>
                        <td>
                          <a href=\"";
                // line 486
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 486, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 487
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 487)), "html", null, true);
                echo "
                          </a>
                        </td>
                        ";
                // line 490
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 490))) {
                    // line 491
                    echo "                          <td>
                            <a href=\"";
                    // line 492
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 492, $this->source); })()), "html", null, true);
                    echo "\">&nbsp;</a>
                          </td>
                        ";
                } else {
                    // line 495
                    echo "                          <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 495), "html", null, true);
                    echo "\">
                            <a href=\"";
                    // line 496
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 496, $this->source); })()), "html", null, true);
                    echo "\">
                              <div class=\"circle\"
                                style=\"background-color: ";
                    // line 498
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 499
$context["problem"], "color", [], "any", false, false, false, 499), "html", null, true);
                    // line 500
                    echo "\"></div>
                            </a>
                          </td>
                        ";
                }
                // line 504
                echo "                        <td>
                          <a href=\"";
                // line 505
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 505, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 506
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 506))) {
                    // line 507
                    echo "                              ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 507)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 509
                    echo "                              -
                            ";
                }
                // line 511
                echo "                          </a>
                        </td>
                        <td>
                          ";
                // line 514
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 515
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_delete", ["contestId" => twig_get_attribute($this->env, $this->source,                     // line 519
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 519, $this->source); })()), "cid", [], "any", false, false, false, 519), "probId" => twig_get_attribute($this->env, $this->source,                     // line 520
$context["problem"], "probid", [], "any", false, false, false, 520)]), "html", null, true);
                    // line 523
                    echo "\"
                              data-ajax-modal>
                              <i class=\"fas fa-trash-alt\"></i>
                            </a>
                          ";
                }
                // line 528
                echo "                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 531
            echo "                  </tbody>
                </table>
              </div>
            </div>
          ";
        }
        // line 536
        echo "
          <script>
            \$(function () { \$('.remove-interval-button').on('click', function ()
            { if (confirm('Really delete interval?')) { var \$form = \$('<form method=\"post\" />');
            \$form.attr('action', \$(this).data('submit-url')); \$form.submit(); }
            return false; }); });
          </script>
        </div>
      </div>
    </div>
  </div>
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
        return array (  832 => 536,  825 => 531,  817 => 528,  810 => 523,  808 => 520,  807 => 519,  805 => 515,  803 => 514,  798 => 511,  794 => 509,  788 => 507,  786 => 506,  782 => 505,  779 => 504,  773 => 500,  771 => 499,  770 => 498,  765 => 496,  760 => 495,  754 => 492,  751 => 491,  749 => 490,  743 => 487,  739 => 486,  732 => 482,  728 => 481,  720 => 478,  712 => 475,  704 => 472,  696 => 469,  693 => 468,  691 => 464,  690 => 460,  687 => 459,  683 => 458,  648 => 425,  642 => 421,  640 => 420,  633 => 415,  630 => 414,  627 => 413,  622 => 411,  613 => 404,  611 => 403,  605 => 399,  598 => 395,  591 => 391,  587 => 390,  579 => 384,  577 => 383,  576 => 382,  573 => 381,  571 => 380,  570 => 379,  563 => 374,  560 => 373,  549 => 367,  547 => 364,  546 => 363,  545 => 359,  538 => 354,  536 => 352,  535 => 351,  534 => 350,  528 => 347,  519 => 341,  513 => 338,  509 => 336,  505 => 335,  481 => 313,  475 => 311,  472 => 310,  466 => 306,  464 => 305,  463 => 303,  458 => 300,  456 => 299,  452 => 297,  450 => 294,  448 => 292,  444 => 290,  442 => 283,  440 => 278,  436 => 276,  434 => 269,  432 => 264,  429 => 263,  425 => 261,  423 => 253,  422 => 248,  419 => 247,  417 => 240,  416 => 235,  414 => 234,  411 => 232,  401 => 225,  390 => 217,  380 => 209,  378 => 208,  377 => 207,  363 => 195,  361 => 194,  353 => 188,  350 => 187,  340 => 183,  337 => 182,  335 => 179,  334 => 175,  331 => 174,  326 => 173,  314 => 169,  311 => 168,  309 => 165,  307 => 161,  302 => 160,  298 => 158,  296 => 157,  285 => 149,  274 => 141,  263 => 133,  252 => 125,  241 => 117,  230 => 109,  219 => 101,  210 => 94,  203 => 91,  197 => 89,  195 => 88,  184 => 80,  173 => 72,  162 => 64,  155 => 59,  148 => 55,  141 => 50,  139 => 49,  133 => 46,  122 => 37,  116 => 33,  113 => 32,  107 => 28,  104 => 27,  98 => 23,  96 => 22,  90 => 19,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Contest {{ contest.cid }} - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"container-fluid dashboard-content\">
          <h1>
            Contest {{ contest.name }}
          </h1>

          {% if isActive %}
            <div class=\"alert alert-success\">
              This is an active contest
            </div>
          {% endif %}
          {% if not contest.enabled %}
            <div class=\"alert alert-danger\">
              This contest is disabled
            </div>
          {% endif %}
          {% if contest.finalizetime is not empty %}
            <div class=\"alert alert-info\">
              This contest is final
            </div>
          {% endif %}

          <div class=\"row\">
            <div class=\"col-lg-4\">
              <table class=\"table table-sm table-striped\">
                <tr>
                  <th>
                    CID
                  </th>
                  <td>
                    c{{ contest.cid }}
                  </td>
                </tr>
                {% if showExternalId(contest) %}
                  <tr>
                    <th>
                      External ID
                    </th>
                    <td>
                      {{ contest.externalid }}
                    </td>
                  </tr>
                {% endif %}
                <tr>
                  <th>
                    Short name
                  </th>
                  <td>
                    {{ contest.shortname }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Name
                  </th>
                  <td>
                    {{ contest.name }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Activate time
                  </th>
                  <td>
                    {{ contest.activatetimeString }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Start time
                  </th>
                  <td>
                    {% if contest.starttimeEnabled %}
                      {{ contest.starttimeString }}
                    {% else %}
                      <span class=\"ignore\">{{ contest.starttimeString }}</span>
                      <em>delayed</em>
                    {% endif %}
                  </td>
                </tr>
                <tr>
                  <th>
                    Scoreboard freeze
                  </th>
                  <td>
                    {{ contest.freezetimeString|default('-') }}
                  </td>
                </tr>
                <tr>
                  <th>
                    End time
                  </th>
                  <td>
                    {{ contest.endtimeString }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Scoreboard unfreeze
                  </th>
                  <td>
                    {{ contest.unfreezetimeString|default('-') }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Deactivate time
                  </th>
                  <td>
                    {{ contest.deactivatetimeString }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Process balloons
                  </th>
                  <td>
                    {{ contest.processBalloons|printYesNo }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Publicly visible
                  </th>
                  <td>
                    {{ contest.public|printYesNo }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Open to all teams
                  </th>
                  <td>
                    {{ contest.openToAllTeams|printYesNo }}
                  </td>
                </tr>
                <tr>
                  <th>
                    Teams
                  </th>
                  <td>
                    {% if contest.openToAllTeams %}
                      <em>all teams</em>
                    {% else %}
                      {% for team in contest.teams %}
                        <a href=\"{{
                          path(
                            'jury_team',
                            {
                              teamId: team.teamid
                            }
                          )
                          }}\">
                          {{ team.name }} (t{{ team.teamid }})
                        </a>
                        <br />
                      {% endfor %}
                      {% for category in contest.teamCategories %}
                        All teams from
                        <a href=\"{{
                          path(
                            'jury_team_category',
                            {
                              categoryId: category.categoryid
                            }
                          )
                          }}\">
                          {{ category.name }}
                        </a>
                        <br />
                      {% endfor %}
                    {% endif %}
                  </td>
                </tr>
              </table>
            </div>
          </div>

          {% if contest.finalizetime %}
            <h2>
              Finalized
            </h2>

            <div class=\"row\">
              <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                  <tr>
                    <th>
                      Finalized at
                    </th>
                    <td>
                      {{
                        contest.finalizetime|printtime('%Y-%m-%d %H:%M:%S (%Z)')
                      }}
                    </td>
                  </tr>
                  <tr>
                    <th>
                      B
                    </th>
                    <td>
                      {{ contest.b }}
                    </td>
                  </tr>
                  <tr>
                    <th>
                      Comment
                    </th>
                    <td>
                      {{ contest.finalizecomment|nl2br }}
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          {% endif %}

          <p>
            {%- if is_granted('ROLE_ADMIN') -%}
              {{
                button(
                  path(
                    'jury_contest_edit',
                    {
                      contestId: contest.cid
                    }
                  ),
                  'Edit',
                  'primary',
                  'edit'
                )
              }}
              {{
                button(
                  path(
                    'jury_contest_delete',
                    {
                      contestId: contest.cid
                    }
                  ),
                  'Delete',
                  'danger',
                  'trash-alt',
                  true
                )
              }}
            {% endif %}
            {% if contest.finalizetime %}
              {{
                button(
                  path(
                    'jury_contest_finalize',
                    {
                      contestId: contest.cid
                    }
                  ),
                  'Update finalization',
                  'secondary',
                  'lock'
                )
              }}
            {% else %}
              {{
                button(
                  path(
                    'jury_contest_finalize',
                    {
                      contestId: contest.cid
                    }
                  ),
                  'Finalize this contest',
                  'secondary',
                  'lock'
                )
              }}
            {% endif %}
            {% include 'jury/partials/rejudge_form.html.twig' with {
              table: 'contest',
              id: contest.cid,
              buttonClass: 'btn-secondary'
            } %}
          </p>

          {% if allowRemovedIntervals %}
            <h2>
              Removed intervals
            </h2>
            {% if
              not is_granted('ROLE_ADMIN')
                and contest.removedIntervals is empty %}
              <p class=\"nodata\">
                None.
              </p>
            {% else %}
              {% if removedIntervalForm is defined %}
                {{ form_start(removedIntervalForm) }}
              {% endif %}
              <div class=\"row\">
                <div class=\"col-lg-6\">
                  <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          From
                        </th>
                        <th></th>
                        <th>
                          To
                        </th>
                        <th>
                          Duration
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for removedInterval in removedIntervals %}
                        <tr>
                          <td>
                            {{ removedInterval.intervalid }}
                          </td>
                          <td>
                            {{ removedInterval.starttimeString }}
                          </td>
                          <td>
                            <i class=\"fas fa-arrow-right\"></i>
                          </td>
                          <td>
                            {{ removedInterval.endtimeString }}
                          </td>
                          <td>
                            {{
                              removedInterval.starttime|printtimediff(
                                removedInterval.endtime
                              )
                            }}
                          </td>
                          <td>
                            <button class=\"btn btn-sm btn-danger remove-interval-button\"
                              type=\"button\"
                              data-submit-url=\"{{
                              path(
                                'jury_contest_remove_interval',
                                {
                                  contestId: contest.cid,
                                  intervalId: removedInterval.intervalid
                                }
                              )
                              }}\">
                              <i class=\"fas fa-trash-alt\"></i>
                            </button>
                          </td>
                        </tr>
                      {% endfor %}
                      {% if is_granted('ROLE_ADMIN') %}
                        <tr>
                          <td>
                            new
                          </td>
                          <td>
                            {{
                              form_errors(removedIntervalForm.starttimeString)
                            }}
                            {{
                              form_widget(removedIntervalForm.starttimeString)
                            }}
                          </td>
                          <td>
                            <i class=\"fas fa-arrow-right\"></i>
                          </td>
                          <td>
                            {{ form_errors(removedIntervalForm.endtimeString) }}
                            {{ form_widget(removedIntervalForm.endtimeString) }}
                          </td>
                          <td></td>
                          <td>
                            {{ form_widget(removedIntervalForm.add) }}
                          </td>
                        </tr>
                      {% endif %}
                    </tbody>
                  </table>
                </div>
              </div>
              {% if removedIntervalForm is defined %}
                <small class=\"text-muted\">
                  Use the format <b>
                    <tt>
                      YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone
                    </tt>
                  </b> for start/end times.
                </small>
                {{ form_end(removedIntervalForm) }}
              {% endif %}
            {% endif %}
          {% endif %}

          <h2 class=\"mt-2\">
            Problems
          </h2>

          {% if problems is empty %}
            <p class=\"nodata\">
              No problems added yet
            </p>
          {% else %}
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                  <thead>
                    <tr>
                      <th>
                        ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Shortname
                      </th>
                      <th>
                        Points
                      </th>
                      <th>
                        Allow<br />submit
                      </th>
                      <th>
                        Allow<br />judge
                      </th>
                      <th>
                        Color
                      </th>
                      <th>
                        Lazy eval
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for problem in problems %}
                      <tr>
                        {% set link =
                          path(
                            'jury_problem',
                            {
                              probId: problem.probid
                            }
                          )
                        %}
                        <td>
                          <a href=\"{{ link }}\">p{{ problem.probid }}</a>
                        </td>
                        <td>
                          <a href=\"{{ link }}\">{{ problem.problem.name }}</a>
                        </td>
                        <td>
                          <a href=\"{{ link }}\">{{ problem.shortname }}</a>
                        </td>
                        <td>
                          <a href=\"{{ link }}\">{{ problem.points }}</a>
                        </td>
                        <td>
                          <a href=\"{{ link }}\">
                            {{ problem.allowSubmit|printYesNo }}
                          </a>
                        </td>
                        <td>
                          <a href=\"{{ link }}\">
                            {{ problem.allowJudge|printYesNo }}
                          </a>
                        </td>
                        {% if problem.color is empty %}
                          <td>
                            <a href=\"{{ link }}\">&nbsp;</a>
                          </td>
                        {% else %}
                          <td title=\"{{ problem.color }}\">
                            <a href=\"{{ link }}\">
                              <div class=\"circle\"
                                style=\"background-color: {{
                                problem.color
                                }}\"></div>
                            </a>
                          </td>
                        {% endif %}
                        <td>
                          <a href=\"{{ link }}\">
                            {% if problem.lazyEvalResults is not null %}
                              {{ problem.lazyEvalResults|printYesNo }}
                            {% else %}
                              -
                            {% endif %}
                          </a>
                        </td>
                        <td>
                          {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{
                              path(
                                'jury_contest_problem_delete',
                                {
                                  contestId: contest.cid,
                                  probId: problem.probid
                                }
                              )
                              }}\"
                              data-ajax-modal>
                              <i class=\"fas fa-trash-alt\"></i>
                            </a>
                          {% endif %}
                        </td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          {% endif %}

          <script>
            \$(function () { \$('.remove-interval-button').on('click', function ()
            { if (confirm('Really delete interval?')) { var \$form = \$('<form method=\"post\" />');
            \$form.attr('action', \$(this).data('submit-url')); \$form.submit(); }
            return false; }); });
          </script>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/contest.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/contest.html.twig");
    }
}
