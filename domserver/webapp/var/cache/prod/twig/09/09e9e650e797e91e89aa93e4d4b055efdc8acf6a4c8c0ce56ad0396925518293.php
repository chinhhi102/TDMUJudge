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

/* partials/problem_list.html.twig */
class __TwigTemplate_61447cb75f2c8cff7bed8e85cf2e346786586ceab494b6869afdc432b15b1970 extends \Twig\Template
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
        // line 2
        echo "
<h1 class=\"mt-4 text-center\">Contest problems</h1>

";
        // line 5
        if (twig_test_empty((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
";
        } else {
            // line 8
            echo "    <div class=\"container\">
        <div class=\"row problem-list\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 10, $this->source); })()), 3, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 11
                echo "                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 14
                    echo "                            ";
                    if (twig_test_empty($context["problemData"])) {
                        // line 15
                        echo "                                <div class=\"card\" style=\"border: none;\"></div>
                            ";
                    } else {
                        // line 17
                        echo "                                ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 17);
                        // line 18
                        echo "                                ";
                        $context["numsamples"] = twig_get_attribute($this->env, $this->source, $context["problemData"], "numsamples", [], "any", false, false, false, 18);
                        // line 19
                        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">
                                            ";
                        // line 22
                        if (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 22, $this->source); })()), "color", [], "any", false, false, false, 22)) {
                            // line 23
                            echo "                                                <div class=\"circle\"
                                                     style=\"background-color: ";
                            // line 24
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 24, $this->source); })()), "color", [], "any", false, false, false, 24), "html", null, true);
                            echo ";\"></div>
                                                Problem ";
                            // line 25
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 25, $this->source); })()), "shortName", [], "any", false, false, false, 25), "html", null, true);
                            echo "
                                            ";
                        }
                        // line 27
                        echo "                                        </h3>
                                        <h4 class=\"card-subtitle mb-2 text-muted\">
                                            ";
                        // line 29
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 29, $this->source); })()), "problem", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                        echo "
                                        </h4>
                                        ";
                        // line 31
                        if ((isset($context["showLimits"]) || array_key_exists("showLimits", $context) ? $context["showLimits"] : (function () { throw new RuntimeError('Variable "showLimits" does not exist.', 31, $this->source); })())) {
                            // line 32
                            echo "                                            <h5 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: ";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 33, $this->source); })()), "problem", [], "any", false, false, false, 33), "timelimit", [], "any", false, false, false, 33), "html", null, true);
                            echo "
                                                second";
                            // line 35
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 35, $this->source); })()), "problem", [], "any", false, false, false, 35), "timelimit", [], "any", false, false, false, 35) > 1)) {
                                echo "s";
                            }
                            // line 36
                            if ((isset($context["timeFactorDiffers"]) || array_key_exists("timeFactorDiffers", $context) ? $context["timeFactorDiffers"] : (function () { throw new RuntimeError('Variable "timeFactorDiffers" does not exist.', 36, $this->source); })())) {
                                // line 37
                                echo "<sup>*</sup>
                                                ";
                            }
                            // line 39
                            echo "                                                /
                                                ";
                            // line 40
                            echo App\Utils\Utils::printSize((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 40), "memlimit", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 40), "memlimit", [], "any", false, false, false, 40), (isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 40, $this->source); })()))) : ((isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 40, $this->source); })()))) * 1024));
                            echo "
                                            </h5>
                                        ";
                        }
                        // line 43
                        echo "
                                        ";
                        // line 44
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 44, $this->source); })()), "problem", [], "any", false, false, false, 44), "problemtextType", [], "any", false, false, false, 44))) {
                            // line 45
                            echo "                                            <div class=\"text-center\">
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 47
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_text_path"]) || array_key_exists("problem_text_path", $context) ? $context["problem_text_path"] : (function () { throw new RuntimeError('Variable "problem_text_path" does not exist.', 47, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 47, $this->source); })()), "probid", [], "any", false, false, false, 47)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-";
                            // line 48
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 48, $this->source); })()), "problem", [], "any", false, false, false, 48), "problemtextType", [], "any", false, false, false, 48), "html", null, true);
                            echo "\"></i>
                                                    problem text
                                                </a>
                                            </div>
                                        ";
                        }
                        // line 53
                        echo "
                                        ";
                        // line 54
                        if (((isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 54, $this->source); })()) > 0)) {
                            // line 55
                            echo "                                            <div>
                                                <br/>
                                            </div>
                                            <h4 class=\"card-subtitle mb-2\">Samples</h4>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                ";
                            // line 60
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 60, $this->source); })())));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 61
                                echo "                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 63
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_sample_testcase_path"]) || array_key_exists("problem_sample_testcase_path", $context) ? $context["problem_sample_testcase_path"] : (function () { throw new RuntimeError('Variable "problem_sample_testcase_path" does not exist.', 63, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 63, $this->source); })()), "probid", [], "any", false, false, false, 63), "type" => "input", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            input ";
                                // line 64
                                if (((isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 64, $this->source); })()) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 65
                                echo "                                                        </a>
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 67
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_sample_testcase_path"]) || array_key_exists("problem_sample_testcase_path", $context) ? $context["problem_sample_testcase_path"] : (function () { throw new RuntimeError('Variable "problem_sample_testcase_path" does not exist.', 67, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 67, $this->source); })()), "probid", [], "any", false, false, false, 67), "type" => "output", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            output ";
                                // line 68
                                if (((isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 68, $this->source); })()) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 69
                                echo "                                                        </a>
                                                    </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 72
                            echo "                                                <li class=\"list-group-item\">
                                                    <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                       href=\"";
                            // line 74
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_sample_zip_path"]) || array_key_exists("problem_sample_zip_path", $context) ? $context["problem_sample_zip_path"] : (function () { throw new RuntimeError('Variable "problem_sample_zip_path" does not exist.', 74, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 74, $this->source); })()), "probid", [], "any", false, false, false, 74)]), "html", null, true);
                            echo "\">
                                                        zip with all samples
                                                    </a>
                                                </li>
                                            </ol>
                                        ";
                        }
                        // line 80
                        echo "                                    </div>
                                </div>
                            ";
                    }
                    // line 83
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </div>

        ";
            // line 89
            if (((isset($context["showLimits"]) || array_key_exists("showLimits", $context) ? $context["showLimits"] : (function () { throw new RuntimeError('Variable "showLimits" does not exist.', 89, $this->source); })()) && (isset($context["timeFactorDiffers"]) || array_key_exists("timeFactorDiffers", $context) ? $context["timeFactorDiffers"] : (function () { throw new RuntimeError('Variable "timeFactorDiffers" does not exist.', 89, $this->source); })()))) {
                // line 90
                echo "            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        ";
            }
            // line 98
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/problem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 98,  242 => 90,  240 => 89,  236 => 87,  228 => 84,  222 => 83,  217 => 80,  208 => 74,  204 => 72,  196 => 69,  191 => 68,  187 => 67,  183 => 65,  178 => 64,  174 => 63,  170 => 61,  166 => 60,  159 => 55,  157 => 54,  154 => 53,  146 => 48,  142 => 47,  138 => 45,  136 => 44,  133 => 43,  127 => 40,  124 => 39,  120 => 37,  118 => 36,  114 => 35,  110 => 33,  107 => 32,  105 => 31,  100 => 29,  96 => 27,  91 => 25,  87 => 24,  84 => 23,  82 => 22,  77 => 19,  74 => 18,  71 => 17,  67 => 15,  64 => 14,  60 => 13,  56 => 11,  52 => 10,  48 => 8,  44 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# problem \\App\\Entity\\ContestProblem #}

<h1 class=\"mt-4 text-center\">Contest problems</h1>

{% if problems is empty %}
    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
{% else %}
    <div class=\"container\">
        <div class=\"row problem-list\">
            {% for row in problems|batch(3, []) %}
                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                        {% for problemData in row %}
                            {% if problemData is empty %}
                                <div class=\"card\" style=\"border: none;\"></div>
                            {% else %}
                                {% set problem = problemData.0 %}
                                {% set numsamples = problemData.numsamples %}
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">
                                            {% if problem.color %}
                                                <div class=\"circle\"
                                                     style=\"background-color: {{ problem.color }};\"></div>
                                                Problem {{ problem.shortName }}
                                            {% endif %}
                                        </h3>
                                        <h4 class=\"card-subtitle mb-2 text-muted\">
                                            {{ problem.problem.name }}
                                        </h4>
                                        {% if showLimits %}
                                            <h5 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: {{ problem.problem.timelimit }}
                                                second
                                                {%- if problem.problem.timelimit > 1 %}s{% endif %}
                                                {%- if timeFactorDiffers -%}
                                                    <sup>*</sup>
                                                {% endif %}
                                                /
                                                {{ ((problem.problem.memlimit | default(defaultMemoryLimit)) * 1024) | printSize }}
                                            </h5>
                                        {% endif %}

                                        {% if problem.problem.problemtextType is not empty %}
                                            <div class=\"text-center\">
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"{{ path(problem_text_path, {'probId': problem.probid}) }}\">
                                                    <i class=\"fas fa-file-{{ problem.problem.problemtextType }}\"></i>
                                                    problem text
                                                </a>
                                            </div>
                                        {% endif %}

                                        {% if numsamples > 0 %}
                                            <div>
                                                <br/>
                                            </div>
                                            <h4 class=\"card-subtitle mb-2\">Samples</h4>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                {% for i in 1..numsamples %}
                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"{{ path(problem_sample_testcase_path, {'probId': problem.probid, 'type': 'input', 'index': i}) }}\">
                                                            input {% if numsamples > 1 %}#{{ i }}{% endif %}
                                                        </a>
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"{{ path(problem_sample_testcase_path, {'probId': problem.probid, 'type': 'output', 'index': i}) }}\">
                                                            output {% if numsamples > 1 %}#{{ i }}{% endif %}
                                                        </a>
                                                    </li>
                                                {% endfor %}
                                                <li class=\"list-group-item\">
                                                    <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                       href=\"{{ path(problem_sample_zip_path, {'probId': problem.probid}) }}\">
                                                        zip with all samples
                                                    </a>
                                                </li>
                                            </ol>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% endfor %}
        </div>

        {% if showLimits and timeFactorDiffers %}
            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endif %}
", "partials/problem_list.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/partials/problem_list.html.twig");
    }
}
