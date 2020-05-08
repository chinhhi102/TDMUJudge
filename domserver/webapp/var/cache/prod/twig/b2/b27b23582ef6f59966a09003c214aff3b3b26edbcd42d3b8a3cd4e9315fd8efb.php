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

/* jury/problem.html.twig */
class __TwigTemplate_131c77431a9e139a8c8f1c7dcaa617f724aaee52dbd1dd3cd3d950cf91103cb9 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 5, $this->source); })()), "probid", [], "any", false, false, false, 5), "html", null, true);
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
        <h1>
          Problem ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  ID
                </th>
                <td>
                  p";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 29, $this->source); })()), "probid", [], "any", false, false, false, 29), "html", null, true);
        echo "
                </td>
              </tr>
              ";
        // line 32
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                <tr>
                  <th>
                    External ID
                  </th>
                  <td>
                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 38, $this->source); })()), "externalid", [], "any", false, false, false, 38), "html", null, true);
            echo "
                  </td>
                </tr>
              ";
        }
        // line 42
        echo "              <tr>
                <th>
                  Name
                </th>
                <td>
                  ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Testcases
                </th>
                <td>
                  ";
        // line 55
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 55, $this->source); })()), "testcases", [], "any", false, false, false, 55))) {
            // line 56
            echo "                    <em>no testcases</em>
                  ";
        } else {
            // line 58
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 58, $this->source); })()), "testcases", [], "any", false, false, false, 58), "count", [], "any", false, false, false, 58), "html", null, true);
            echo "
                  ";
        }
        // line 60
        echo "                  <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcases", ["probId" => twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 64, $this->source); })()), "probid", [], "any", false, false, false, 64)]), "html", null, true);
        // line 67
        echo "\">
                    details / edit
                  </a>
                </td>
              </tr>
              <tr>
                <th>
                  Timelimit
                </th>
                <td>
                  ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 77, $this->source); })()), "timelimit", [], "any", false, false, false, 77), "html", null, true);
        echo " sec
                </td>
              </tr>
              <tr>
                <th>
                  Memory limit
                </th>
                <td>
                  ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 85, $this->source); })()), "memlimit", [], "any", false, false, false, 85) == null)) {
            // line 86
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 86, $this->source); })()), "html", null, true);
            echo " kB (default)
                  ";
        } else {
            // line 88
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 88, $this->source); })()), "memlimit", [], "any", false, false, false, 88), "html", null, true);
            echo " kB
                  ";
        }
        // line 90
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Output limit
                </th>
                <td>
                  ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 97, $this->source); })()), "outputlimit", [], "any", false, false, false, 97) == null)) {
            // line 98
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["defaultOutputLimit"]) || array_key_exists("defaultOutputLimit", $context) ? $context["defaultOutputLimit"] : (function () { throw new RuntimeError('Variable "defaultOutputLimit" does not exist.', 98, $this->source); })()), "html", null, true);
            echo " kB (default)
                  ";
        } else {
            // line 100
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 100, $this->source); })()), "outputlimit", [], "any", false, false, false, 100), "html", null, true);
            echo " kB
                  ";
        }
        // line 102
        echo "                </td>
              </tr>
              ";
        // line 104
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 104, $this->source); })()), "problemtextType", [], "any", false, false, false, 104))) {
            // line 105
            echo "                <tr>
                  <th>
                    Problem text
                  </th>
                  <td>
                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_text", ["probId" => twig_get_attribute($this->env, $this->source,             // line 114
(isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 114, $this->source); })()), "probid", [], "any", false, false, false, 114)]), "html", null, true);
            // line 117
            echo "\">
                      <i title=\"view problem description\"
                        class=\"fas fa-file-";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 119, $this->source); })()), "problemtextType", [], "any", false, false, false, 119), "html", null, true);
            echo "\">

                      </i>
                    </a>
                  </td>
                </tr>
              ";
        }
        // line 126
        echo "              <tr>
                <th>
                  Run script
                </th>
                <td class=\"filename\">
                  ";
        // line 131
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 131, $this->source); })()), "runExecutable", [], "any", false, false, false, 131))) {
            // line 132
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 136
(isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 136, $this->source); })()), "runExecutable", [], "any", false, false, false, 136), "execid", [], "any", false, false, false, 136)]), "html", null, true);
            // line 139
            echo "\">
                      ";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 140, $this->source); })()), "runExecutable", [], "any", false, false, false, 140), "execid", [], "any", false, false, false, 140), "html", null, true);
            echo "
                    </a>
                  ";
        } else {
            // line 143
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" =>             // line 147
(isset($context["defaultRunExecutable"]) || array_key_exists("defaultRunExecutable", $context) ? $context["defaultRunExecutable"] : (function () { throw new RuntimeError('Variable "defaultRunExecutable" does not exist.', 147, $this->source); })())]), "html", null, true);
            // line 150
            echo "\">
                      ";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["defaultRunExecutable"]) || array_key_exists("defaultRunExecutable", $context) ? $context["defaultRunExecutable"] : (function () { throw new RuntimeError('Variable "defaultRunExecutable" does not exist.', 151, $this->source); })()), "html", null, true);
            echo "
                    </a>
                    (default)
                  ";
        }
        // line 155
        echo "                </td>
              </tr>
              ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 157, $this->source); })()), "combinedRunCompare", [], "any", false, false, false, 157)) {
            // line 158
            echo "                <tr>
                  <th>
                    Compare script
                  </th>
                  <td>
                    Run script combines run and compare script.
                  </td>
                </tr>
              ";
        } else {
            // line 167
            echo "                <tr>
                  <th>
                    Compare script
                  </th>
                  <td class=\"filename\">
                    ";
            // line 172
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 172, $this->source); })()), "compareExecutable", [], "any", false, false, false, 172))) {
                // line 173
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 177
(isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 177, $this->source); })()), "compareExecutable", [], "any", false, false, false, 177), "execid", [], "any", false, false, false, 177)]), "html", null, true);
                // line 180
                echo "\">
                        ";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 181, $this->source); })()), "compareExecutable", [], "any", false, false, false, 181), "execid", [], "any", false, false, false, 181), "html", null, true);
                echo "
                      </a>
                    ";
            } else {
                // line 184
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" =>                 // line 188
(isset($context["defaultCompareExecutable"]) || array_key_exists("defaultCompareExecutable", $context) ? $context["defaultCompareExecutable"] : (function () { throw new RuntimeError('Variable "defaultCompareExecutable" does not exist.', 188, $this->source); })())]), "html", null, true);
                // line 191
                echo "\">
                        ";
                // line 192
                echo twig_escape_filter($this->env, (isset($context["defaultCompareExecutable"]) || array_key_exists("defaultCompareExecutable", $context) ? $context["defaultCompareExecutable"] : (function () { throw new RuntimeError('Variable "defaultCompareExecutable" does not exist.', 192, $this->source); })()), "html", null, true);
                echo "
                      </a>
                      (default)
                    ";
            }
            // line 196
            echo "                  </td>
                </tr>
              ";
        }
        // line 199
        echo "              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 199, $this->source); })()), "specialCompareArgs", [], "any", false, false, false, 199))) {
            // line 200
            echo "                <tr>
                  <th>
                    Compare script arguments
                  </th>
                  <td class=\"filename\">
                    ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 205, $this->source); })()), "specialCompareArgs", [], "any", false, false, false, 205), "html", null, true);
            echo "
                  </td>
                </tr>
              ";
        }
        // line 209
        echo "            </table>
          </div>
        </div>

        <p>";
        // line 214
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 215
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_edit", ["probId" => twig_get_attribute($this->env, $this->source,             // line 220
(isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 220, $this->source); })()), "probid", [], "any", false, false, false, 220)]), "Edit", "primary", "edit");
            // line 227
            echo "
            ";
            // line 228
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_delete", ["probId" => twig_get_attribute($this->env, $this->source,             // line 233
(isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 233, $this->source); })()), "probid", [], "any", false, false, false, 233)]), "Delete", "danger", "trash-alt", true);
            // line 241
            echo "
          ";
        }
        // line 243
        echo "          ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/problem.html.twig", 243)->display(twig_array_merge($context, ["table" => "problem", "id" => twig_get_attribute($this->env, $this->source,         // line 245
(isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 245, $this->source); })()), "probid", [], "any", false, false, false, 245), "buttonClass" => "btn-secondary"]));
        // line 248
        echo "        </p>

        <h2>
          Contests
        </h2>

        ";
        // line 254
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 254, $this->source); })()), "contestProblems", [], "any", false, false, false, 254))) {
            // line 255
            echo "          <p class=\"nodata\">
            No contests defined
          </p>
        ";
        } else {
            // line 259
            echo "          <div class=\"row\">
            <div class=\"col-md-6\">
              <table class=\"data-table table table-hover table-striped table-sm\">
                <thead class=\"thead-light\">
                  <tr>
                    <th>
                      CID
                    </th>
                    <th>
                      Contest<br />shortname
                    </th>
                    <th>
                      Contest<br />name
                    </th>
                    <th>
                      Problem<br />shortname
                    </th>
                    <th>
                      Allow<br />submit
                    </th>
                    <th>
                      Allow<br />judge
                    </th>
                    <th>
                      Colour
                    </th>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 288, $this->source); })()), "contestProblems", [], "any", false, false, false, 288));
            foreach ($context['_seq'] as $context["_key"] => $context["contestProblem"]) {
                // line 289
                echo "                    ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source,                 // line 293
$context["contestProblem"], "cid", [], "any", false, false, false, 293)]);
                // line 297
                echo "                    <tr>
                      <td>
                        <a href=\"";
                // line 299
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 299, $this->source); })()), "html", null, true);
                echo "\">c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 299), "html", null, true);
                echo "</a>
                      </td>
                      <td>
                        <a href=\"";
                // line 302
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 302, $this->source); })()), "html", null, true);
                echo "\">
                          ";
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 303), "shortname", [], "any", false, false, false, 303), "html", null, true);
                echo "
                        </a>
                      </td>
                      <td>
                        <a href=\"";
                // line 307
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 307, $this->source); })()), "html", null, true);
                echo "\">
                          ";
                // line 308
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 308), "name", [], "any", false, false, false, 308), "html", null, true);
                echo "
                        </a>
                      </td>
                      <td>
                        <a href=\"";
                // line 312
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 312, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "shortname", [], "any", false, false, false, 312), "html", null, true);
                echo "</a>
                      </td>
                      <td>
                        <a href=\"";
                // line 315
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 315, $this->source); })()), "html", null, true);
                echo "\">
                          ";
                // line 316
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowSubmit", [], "any", false, false, false, 316)), "html", null, true);
                echo "
                        </a>
                      </td>
                      <td>
                        <a href=\"";
                // line 320
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 320, $this->source); })()), "html", null, true);
                echo "\">
                          ";
                // line 321
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowJudge", [], "any", false, false, false, 321)), "html", null, true);
                echo "
                        </a>
                      </td>
                      ";
                // line 324
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 324))) {
                    // line 325
                    echo "                        <td>
                          <a href=\"";
                    // line 326
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 326, $this->source); })()), "html", null, true);
                    echo "\">&nbsp;</a>
                        </td>
                      ";
                } else {
                    // line 329
                    echo "                        <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 329), "html", null, true);
                    echo "\">
                          <a href=\"";
                    // line 330
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 330, $this->source); })()), "html", null, true);
                    echo "\">
                            <div class=\"circle\"
                              style=\"background-color: ";
                    // line 332
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 333
$context["contestProblem"], "color", [], "any", false, false, false, 333), "html", null, true);
                    // line 334
                    echo "\"></div>
                          </a>
                        </td>
                      ";
                }
                // line 338
                echo "                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contestProblem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "                </tbody>
              </table>
            </div>
          </div>
        ";
        }
        // line 345
        echo "
        <h2>
          Submissions for ";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 347, $this->source); })()), "name", [], "any", false, false, false, 347), "html", null, true);
        echo "
        </h2>

        <div data-ajax-refresh-target>";
        // line 351
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/problem.html.twig", 351)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 354
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 354,  557 => 351,  551 => 347,  547 => 345,  540 => 340,  533 => 338,  527 => 334,  525 => 333,  524 => 332,  519 => 330,  514 => 329,  508 => 326,  505 => 325,  503 => 324,  497 => 321,  493 => 320,  486 => 316,  482 => 315,  474 => 312,  467 => 308,  463 => 307,  456 => 303,  452 => 302,  444 => 299,  440 => 297,  438 => 293,  436 => 289,  432 => 288,  401 => 259,  395 => 255,  393 => 254,  385 => 248,  383 => 245,  381 => 243,  377 => 241,  375 => 233,  374 => 228,  371 => 227,  369 => 220,  368 => 215,  366 => 214,  360 => 209,  353 => 205,  346 => 200,  343 => 199,  338 => 196,  331 => 192,  328 => 191,  326 => 188,  324 => 184,  318 => 181,  315 => 180,  313 => 177,  311 => 173,  309 => 172,  302 => 167,  291 => 158,  289 => 157,  285 => 155,  278 => 151,  275 => 150,  273 => 147,  271 => 143,  265 => 140,  262 => 139,  260 => 136,  258 => 132,  256 => 131,  249 => 126,  239 => 119,  235 => 117,  233 => 114,  232 => 110,  225 => 105,  223 => 104,  219 => 102,  213 => 100,  207 => 98,  205 => 97,  196 => 90,  190 => 88,  184 => 86,  182 => 85,  171 => 77,  159 => 67,  157 => 64,  155 => 60,  149 => 58,  145 => 56,  143 => 55,  132 => 47,  125 => 42,  118 => 38,  111 => 33,  109 => 32,  103 => 29,  89 => 18,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Problem {{ problem.probid }} - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Problem {{ problem.name }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  ID
                </th>
                <td>
                  p{{ problem.probid }}
                </td>
              </tr>
              {% if showExternalId(problem) %}
                <tr>
                  <th>
                    External ID
                  </th>
                  <td>
                    {{ problem.externalid }}
                  </td>
                </tr>
              {% endif %}
              <tr>
                <th>
                  Name
                </th>
                <td>
                  {{ problem.name }}
                </td>
              </tr>
              <tr>
                <th>
                  Testcases
                </th>
                <td>
                  {% if problem.testcases is empty %}
                    <em>no testcases</em>
                  {% else %}
                    {{ problem.testcases.count }}
                  {% endif %}
                  <a href=\"{{
                    path(
                      'jury_problem_testcases',
                      {
                        probId: problem.probid
                      }
                    )
                    }}\">
                    details / edit
                  </a>
                </td>
              </tr>
              <tr>
                <th>
                  Timelimit
                </th>
                <td>
                  {{ problem.timelimit }} sec
                </td>
              </tr>
              <tr>
                <th>
                  Memory limit
                </th>
                <td>
                  {% if problem.memlimit == null %}
                    {{ defaultMemoryLimit }} kB (default)
                  {% else %}
                    {{ problem.memlimit }} kB
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Output limit
                </th>
                <td>
                  {% if problem.outputlimit == null %}
                    {{ defaultOutputLimit }} kB (default)
                  {% else %}
                    {{ problem.outputlimit }} kB
                  {% endif %}
                </td>
              </tr>
              {% if problem.problemtextType is not empty %}
                <tr>
                  <th>
                    Problem text
                  </th>
                  <td>
                    <a href=\"{{
                      path(
                        'jury_problem_text',
                        {
                          probId: problem.probid
                        }
                      )
                      }}\">
                      <i title=\"view problem description\"
                        class=\"fas fa-file-{{ problem.problemtextType }}\">

                      </i>
                    </a>
                  </td>
                </tr>
              {% endif %}
              <tr>
                <th>
                  Run script
                </th>
                <td class=\"filename\">
                  {% if problem.runExecutable is not empty %}
                    <a href=\"{{
                      path(
                        'jury_executable',
                        {
                          execId: problem.runExecutable.execid
                        }
                      )
                      }}\">
                      {{ problem.runExecutable.execid }}
                    </a>
                  {% else %}
                    <a href=\"{{
                      path(
                        'jury_executable',
                        {
                          execId: defaultRunExecutable
                        }
                      )
                      }}\">
                      {{ defaultRunExecutable }}
                    </a>
                    (default)
                  {% endif %}
                </td>
              </tr>
              {% if problem.combinedRunCompare %}
                <tr>
                  <th>
                    Compare script
                  </th>
                  <td>
                    Run script combines run and compare script.
                  </td>
                </tr>
              {% else %}
                <tr>
                  <th>
                    Compare script
                  </th>
                  <td class=\"filename\">
                    {% if problem.compareExecutable is not empty %}
                      <a href=\"{{
                        path(
                          'jury_executable',
                          {
                            execId: problem.compareExecutable.execid
                          }
                        )
                        }}\">
                        {{ problem.compareExecutable.execid }}
                      </a>
                    {% else %}
                      <a href=\"{{
                        path(
                          'jury_executable',
                          {
                            execId: defaultCompareExecutable
                          }
                        )
                        }}\">
                        {{ defaultCompareExecutable }}
                      </a>
                      (default)
                    {% endif %}
                  </td>
                </tr>
              {% endif %}
              {% if problem.specialCompareArgs is not empty %}
                <tr>
                  <th>
                    Compare script arguments
                  </th>
                  <td class=\"filename\">
                    {{ problem.specialCompareArgs }}
                  </td>
                </tr>
              {% endif %}
            </table>
          </div>
        </div>

        <p>
          {%- if is_granted('ROLE_ADMIN') -%}
            {{
              button(
                path(
                  'jury_problem_edit',
                  {
                    probId: problem.probid
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
                  'jury_problem_delete',
                  {
                    probId: problem.probid
                  }
                ),
                'Delete',
                'danger',
                'trash-alt',
                true
              )
            }}
          {% endif %}
          {% include 'jury/partials/rejudge_form.html.twig' with {
            table: 'problem',
            id: problem.probid,
            buttonClass: 'btn-secondary'
          } %}
        </p>

        <h2>
          Contests
        </h2>

        {% if problem.contestProblems is empty %}
          <p class=\"nodata\">
            No contests defined
          </p>
        {% else %}
          <div class=\"row\">
            <div class=\"col-md-6\">
              <table class=\"data-table table table-hover table-striped table-sm\">
                <thead class=\"thead-light\">
                  <tr>
                    <th>
                      CID
                    </th>
                    <th>
                      Contest<br />shortname
                    </th>
                    <th>
                      Contest<br />name
                    </th>
                    <th>
                      Problem<br />shortname
                    </th>
                    <th>
                      Allow<br />submit
                    </th>
                    <th>
                      Allow<br />judge
                    </th>
                    <th>
                      Colour
                    </th>
                  </tr>
                </thead>
                <tbody>
                  {% for contestProblem in problem.contestProblems %}
                    {% set link =
                      path(
                        'jury_contest',
                        {
                          contestId: contestProblem.cid
                        }
                      )
                    %}
                    <tr>
                      <td>
                        <a href=\"{{ link }}\">c{{ contestProblem.cid }}</a>
                      </td>
                      <td>
                        <a href=\"{{ link }}\">
                          {{ contestProblem.contest.shortname }}
                        </a>
                      </td>
                      <td>
                        <a href=\"{{ link }}\">
                          {{ contestProblem.contest.name }}
                        </a>
                      </td>
                      <td>
                        <a href=\"{{ link }}\">{{ contestProblem.shortname }}</a>
                      </td>
                      <td>
                        <a href=\"{{ link }}\">
                          {{ contestProblem.allowSubmit|printYesNo }}
                        </a>
                      </td>
                      <td>
                        <a href=\"{{ link }}\">
                          {{ contestProblem.allowJudge|printYesNo }}
                        </a>
                      </td>
                      {% if contestProblem.color is empty %}
                        <td>
                          <a href=\"{{ link }}\">&nbsp;</a>
                        </td>
                      {% else %}
                        <td title=\"{{ contestProblem.color }}\">
                          <a href=\"{{ link }}\">
                            <div class=\"circle\"
                              style=\"background-color: {{
                              contestProblem.color
                              }}\"></div>
                          </a>
                        </td>
                      {% endif %}
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </div>
        {% endif %}

        <h2>
          Submissions for {{ problem.name }}
        </h2>

        <div data-ajax-refresh-target>
          {%- include 'jury/partials/submission_list.html.twig' with {
            showTestcases: false
          } %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/problem.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/problem.html.twig");
    }
}
