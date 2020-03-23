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

/* jury/problem_testcases.html.twig */
class __TwigTemplate_7d2e7a2153b14c718d8124da704c0a133b9083b261b326e2af13ce50e74f513f extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_testcases.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_testcases.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Testcases for p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 4, $this->source); })()), "probid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Testcases for p";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "probid", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"mb-2\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Back to problem p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            $context["formStart"] = "<form method=\"post\" enctype=\"multipart/form-data\">";
            // line 22
            echo "        ";
            echo (isset($context["formStart"]) || array_key_exists("formStart", $context) ? $context["formStart"] : (function () { throw new RuntimeError('Variable "formStart" does not exist.', 22, $this->source); })());
            echo "
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (twig_test_empty((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "        <p class=\"nodata\">No testcase(s) yet.</p>
    ";
        } else {
            // line 28
            echo "        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                <th>download</th>
                <th>size</th>
                <th>md5</th>
                ";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 37
                echo "                    <th>upload new</th>
                ";
            }
            // line 39
            echo "                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["rank"] => $context["testcase"]) {
                // line 44
                echo "                <tr>
                    <td rowspan=\"2\" class=\"testrank\">
                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 46, $this->source); })()), "probid", [], "any", false, false, false, 46), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 46), "direction" => "up"]), "html", null, true);
                echo "\"
                           title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 48), "html", null, true);
                echo "<br>
                        <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 49, $this->source); })()), "probid", [], "any", false, false, false, 49), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 49), "direction" => "down"]), "html", null, true);
                echo "\"
                           title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 53), "html", null, true);
                echo "]\" value=\"sample\"
                               ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["testcase"], "sample", [], "any", false, false, false, 54)) {
                    echo "checked";
                }
                echo " />
                    </td>
                    <td class=\"filename\">
                        <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 57, $this->source); })()), "probid", [], "any", false, false, false, 57), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 57), "type" => "input"]), "html", null, true);
                echo "\">
                            p";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 58, $this->source); })()), "probid", [], "any", false, false, false, 58), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 58), "html", null, true);
                echo ".in
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 62
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 62), [], "array", false, false, false, 62), "input_size", [], "any", false, false, false, 62));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumInput", [], "any", false, false, false, 65), "html", null, true);
                echo "
                    </td>
                    ";
                // line 67
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 68
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 69), "html", null, true);
                    echo "]\" id=\"update_input_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 69), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 70), "html", null, true);
                    echo "\">new input file</label>
                        </div></td>
                    ";
                }
                // line 73
                echo "                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">";
                // line 74
                echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 74));
                echo "</span>
                        ";
                // line 75
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 76
                    echo "                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 76), "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 76), "html", null, true);
                    echo "</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        ";
                }
                // line 79
                echo "                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 83, $this->source); })()), "probid", [], "any", false, false, false, 83), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 83), "type" => "output"]), "html", null, true);
                echo "\">
                            p";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 84, $this->source); })()), "probid", [], "any", false, false, false, 84), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 84), "html", null, true);
                echo ".out
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 88
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 88, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 88), [], "array", false, false, false, 88), "output_size", [], "any", false, false, false, 88));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumOutput", [], "any", false, false, false, 91), "html", null, true);
                echo "
                    </td>
                    ";
                // line 93
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 94
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 95), "html", null, true);
                    echo "]\" id=\"update_output_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 95), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 96), "html", null, true);
                    echo "\">new output file</label>
                        </div></td>
                    ";
                }
                // line 99
                echo "                    <td class=\"testimage\">
                        ";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 100, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 100), [], "array", false, false, false, 100), "image_size", [], "any", false, false, false, 100) > 0)) {
                    // line 101
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 101, $this->source); })()), "probid", [], "any", false, false, false, 101), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 101), "type" => "image"]), "html", null, true);
                    echo "\">
                                <span class=\"filename\">p";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 102, $this->source); })()), "probid", [], "any", false, false, false, 102), "html", null, true);
                    echo ".t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 102), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 102, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 102), [], "array", false, false, false, 102), "image_type", [], "any", false, false, false, 102), "html", null, true);
                    echo "</span>
                            </a>
                            ";
                    // line 104
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 105
                        echo "                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 107
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 107), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 107), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 108
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 108), "html", null, true);
                        echo "\">replace image</label>
                            </div>
                            ";
                    }
                    // line 111
                    echo "                        ";
                } else {
                    // line 112
                    echo "                            ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 113
                        echo "                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 114
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 115
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 115), "html", null, true);
                        echo "\">add an image</label>
                            </div>
                            ";
                    } else {
                        // line 118
                        echo "                            <span class=\"nodata\">No image</span>
                            ";
                    }
                    // line 120
                    echo "                        ";
                }
                // line 121
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rank'], $context['testcase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "            </tbody>
        </table>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 129
            echo "        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    ";
        }
        // line 176
        echo "
    ";
        // line 177
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 178
            echo "        ";
            // line 179
            echo "        ";
            $context["formEnd"] = "</form>";
            // line 180
            echo "        ";
            echo (isset($context["formEnd"]) || array_key_exists("formEnd", $context) ? $context["formEnd"] : (function () { throw new RuntimeError('Variable "formEnd" does not exist.', 180, $this->source); })());
            echo "
    ";
        }
        // line 182
        echo "
    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "jury/problem_testcases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 182,  427 => 180,  424 => 179,  422 => 178,  420 => 177,  417 => 176,  368 => 129,  366 => 128,  363 => 127,  358 => 124,  350 => 121,  347 => 120,  343 => 118,  337 => 115,  331 => 114,  328 => 113,  325 => 112,  322 => 111,  316 => 108,  310 => 107,  306 => 105,  304 => 104,  295 => 102,  290 => 101,  288 => 100,  285 => 99,  279 => 96,  273 => 95,  270 => 94,  268 => 93,  263 => 91,  257 => 88,  248 => 84,  244 => 83,  238 => 79,  229 => 76,  227 => 75,  223 => 74,  220 => 73,  214 => 70,  208 => 69,  205 => 68,  203 => 67,  198 => 65,  192 => 62,  183 => 58,  179 => 57,  171 => 54,  167 => 53,  160 => 49,  156 => 48,  151 => 46,  147 => 44,  143 => 43,  137 => 39,  133 => 37,  131 => 36,  121 => 28,  117 => 26,  115 => 25,  112 => 24,  106 => 22,  103 => 21,  101 => 20,  99 => 19,  91 => 16,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Testcases for p{{ problem.probid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Testcases for p{{ problem.probid }} - {{ problem.name }}</h1>

    <div class=\"mb-2\">
        <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">Back to problem p{{ problem.probid }}</a>
    </div>

    {% if is_granted('ROLE_ADMIN') %}
        {# We use a variable here so indeting doesn't get screwed up #}
        {% set formStart = '<form method=\"post\" enctype=\"multipart/form-data\">' %}
        {{ formStart | raw }}
    {% endif %}

    {% if testcases is empty %}
        <p class=\"nodata\">No testcase(s) yet.</p>
    {% else %}
        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                <th>download</th>
                <th>size</th>
                <th>md5</th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>upload new</th>
                {% endif %}
                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            {% for rank, testcase in testcases %}
                <tr>
                    <td rowspan=\"2\" class=\"testrank\">
                        <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'up'}) }}\"
                           title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        {{ testcase.rank }}<br>
                        <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'down'}) }}\"
                           title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[{{ testcase.rank }}]\" value=\"sample\"
                               {% if testcase.sample %}checked{% endif %} />
                    </td>
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'input'}) }}\">
                            p{{ problem.probid }}.t{{ testcase.rank }}.in
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].input_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumInput }}
                    </td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[{{ testcase.rank }}]\" id=\"update_input_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_{{testcase.rank}}\">new input file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">{{ testcase.description(true) | descriptionExpand }}</span>
                        {% if is_granted('ROLE_ADMIN') %}
                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[{{ testcase.rank }}]\">{{ testcase.description(true) }}</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'output'}) }}\">
                            p{{ problem.probid }}.t{{ testcase.rank }}.out
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].output_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumOutput }}
                    </td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[{{ testcase.rank }}]\" id=\"update_output_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_{{testcase.rank}}\">new output file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testimage\">
                        {% if testcaseData[testcase.rank].image_size > 0 %}
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'image'}) }}\">
                                <span class=\"filename\">p{{ problem.probid }}.t{{ testcase.rank }}.{{ testcaseData[testcase.rank].image_type }}</span>
                            </a>
                            {% if is_granted('ROLE_ADMIN') %}
                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">replace image</label>
                            </div>
                            {% endif %}
                        {% else %}
                            {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">add an image</label>
                            </div>
                            {% else %}
                            <span class=\"nodata\">No image</span>
                            {% endif %}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        {# We use a variable here so indeting doesn't get screwed up #}
        {% set formEnd = '</form>' %}
        {{ formEnd | raw }}
    {% endif %}

    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

{% endblock %}
", "jury/problem_testcases.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/problem_testcases.html.twig");
    }
}
