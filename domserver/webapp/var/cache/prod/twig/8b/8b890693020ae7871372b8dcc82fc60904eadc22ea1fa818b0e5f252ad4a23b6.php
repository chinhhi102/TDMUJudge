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

/* jury/submissions.html.twig */
class __TwigTemplate_ba9f672a4fa9f6f879c1225c32d65ed538abbb10d6626c972c64268bc8289fc2 extends \Twig\Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/submissions.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submissions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Submissions - ";
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                            
                <h1>Submissions</h1>

                Show submissions:
                <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 22
            echo "
                        <label class=\"btn btn-secondary ";
            // line 23
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 23, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                                ";
            // line 25
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 25, $this->source); })()))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
                        </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                </div>

                <div class=\"mb-3\">
                    <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
                        <label class=\"btn btn-outline-secondary ";
        // line 33
        if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 33, $this->source); })())) {
            echo "active";
        }
        echo "\">
                            <input type=\"checkbox\" id=\"filter-toggle\" ";
        // line 34
        if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 34, $this->source); })())) {
            echo "checked";
        }
        echo " autocomplete=\"off\">
                            <i class=\"fas fa-filter\"></i> Filter
                        </label>
                    </div>
                    <div class=\"card mt-3";
        // line 38
        if ( !(isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 38, $this->source); })())) {
            echo " d-none";
        }
        echo "\" id=\"filter-card\">
                        <div class=\"card-body\">
                            <div class=\"form-row\">
                                <div class=\"form-group col-sm-6\">
                                    <label for=\"problems-filter\">Filter on problem(s)</label>
                                    <select class=\"select2 form-control\" multiple data-filter-field=\"problem-id\"
                                            data-ajax-url=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "problems", "select2" => true]), "html", null, true);
        echo "\">";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filteredProblems"]) || array_key_exists("filteredProblems", $context) ? $context["filteredProblems"] : (function () { throw new RuntimeError('Variable "filteredProblems" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 46
            echo "
                                            <option value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 47), "html", null, true);
            echo "\" selected>
                                                ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo " (p";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 48), "html", null, true);
            echo ")
                                            </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-row\">
                                <div class=\"form-group col-sm-6\">
                                    <label for=\"problems-filter\">Filter on language(s)</label>
                                    <select class=\"select2 form-control\" multiple data-filter-field=\"language-id\"
                                            data-ajax-url=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "languages", "select2" => true]), "html", null, true);
        echo "\">";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filteredLanguages"]) || array_key_exists("filteredLanguages", $context) ? $context["filteredLanguages"] : (function () { throw new RuntimeError('Variable "filteredLanguages" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 62
            echo "
                                            <option value=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 63), "html", null, true);
            echo "\" selected>
                                                ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 64), "html", null, true);
            echo ")
                                            </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-row\">
                                <div class=\"form-group col-sm-6\">
                                    <label for=\"problems-filter\">Filter on team(s)</label>
                                    <select class=\"select2 form-control\" multiple data-filter-field=\"team-id\"
                                            data-ajax-url=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "teams", "select2" => true]), "html", null, true);
        echo "\">";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filteredTeams"]) || array_key_exists("filteredTeams", $context) ? $context["filteredTeams"] : (function () { throw new RuntimeError('Variable "filteredTeams" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 78
            echo "
                                            <option value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 79), "html", null, true);
            echo "\" selected>
                                                ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 80), "html", null, true);
            echo ")
                                            </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                                    </select>
                                </div>
                            </div>

                            <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                                filters
                            </button>
                        </div>
                    </div>
                </div>

                <div data-ajax-refresh-target data-ajax-refresh-after=\"process_submissions_filter\">";
        // line 96
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/submissions.html.twig", 96)->display(twig_array_merge($context, ["showTestcases" => true]));
        // line 97
        echo "                </div>

            </div>
        </div>
    </div>
";
    }

    // line 104
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions", ["view" => "REPLACE_ME"]);
        echo "'.replace('REPLACE_ME', \$(this).val());
            });

            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_submissions_filter = function () {
                var \$trs = \$('table.submissions-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var submissions_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    submissions_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_submissionsfilter', JSON.stringify(submissions_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_submissions_filter);
            window.process_submissions_filter();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 108,  277 => 105,  273 => 104,  264 => 97,  262 => 96,  248 => 83,  238 => 80,  234 => 79,  231 => 78,  227 => 77,  224 => 76,  213 => 67,  203 => 64,  199 => 63,  196 => 62,  192 => 61,  189 => 60,  178 => 51,  168 => 48,  164 => 47,  161 => 46,  157 => 45,  154 => 44,  143 => 38,  134 => 34,  128 => 33,  121 => 28,  109 => 25,  105 => 24,  99 => 23,  96 => 22,  92 => 21,  83 => 13,  79 => 12,  73 => 9,  69 => 8,  64 => 7,  60 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Submissions - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}
<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                            
                <h1>Submissions</h1>

                Show submissions:
                <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                    {%- for idx, type in viewTypes %}

                        <label class=\"btn btn-secondary {% if idx == view %}active{% endif %}\">
                            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ type }}\"
                                {% if idx == view %}checked{% endif %}> {{ type }}
                        </label>
                    {%- endfor %}

                </div>

                <div class=\"mb-3\">
                    <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
                        <label class=\"btn btn-outline-secondary {% if hasFilters %}active{% endif %}\">
                            <input type=\"checkbox\" id=\"filter-toggle\" {% if hasFilters %}checked{% endif %} autocomplete=\"off\">
                            <i class=\"fas fa-filter\"></i> Filter
                        </label>
                    </div>
                    <div class=\"card mt-3{% if not hasFilters %} d-none{% endif %}\" id=\"filter-card\">
                        <div class=\"card-body\">
                            <div class=\"form-row\">
                                <div class=\"form-group col-sm-6\">
                                    <label for=\"problems-filter\">Filter on problem(s)</label>
                                    <select class=\"select2 form-control\" multiple data-filter-field=\"problem-id\"
                                            data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'problems', select2: true}) }}\">
                                        {%- for problem in filteredProblems %}

                                            <option value=\"{{ problem.probid }}\" selected>
                                                {{ problem.name }} (p{{ problem.probid }})
                                            </option>
                                        {%- endfor %}

                                    </select>
                                </div>
                            </div>

                            <div class=\"form-row\">
                                <div class=\"form-group col-sm-6\">
                                    <label for=\"problems-filter\">Filter on language(s)</label>
                                    <select class=\"select2 form-control\" multiple data-filter-field=\"language-id\"
                                            data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'languages', select2: true}) }}\">
                                        {%- for language in filteredLanguages %}

                                            <option value=\"{{ language.langid }}\" selected>
                                                {{ language.name }} ({{ language.langid }})
                                            </option>
                                        {%- endfor %}

                                    </select>
                                </div>
                            </div>

                            <div class=\"form-row\">
                                <div class=\"form-group col-sm-6\">
                                    <label for=\"problems-filter\">Filter on team(s)</label>
                                    <select class=\"select2 form-control\" multiple data-filter-field=\"team-id\"
                                            data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'teams', select2: true}) }}\">
                                        {%- for team in filteredTeams %}

                                            <option value=\"{{ team.teamid }}\" selected>
                                                {{ team.name }} (t{{ team.teamid }})
                                            </option>
                                        {%- endfor %}

                                    </select>
                                </div>
                            </div>

                            <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                                filters
                            </button>
                        </div>
                    </div>
                </div>

                <div data-ajax-refresh-target data-ajax-refresh-after=\"process_submissions_filter\">
                    {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: true} %}
                </div>

            </div>
        </div>
    </div>
{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '{{ path('jury_submissions', {'view': 'REPLACE_ME'}) }}'.replace('REPLACE_ME', \$(this).val());
            });

            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_submissions_filter = function () {
                var \$trs = \$('table.submissions-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var submissions_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    submissions_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_submissionsfilter', JSON.stringify(submissions_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_submissions_filter);
            window.process_submissions_filter();
        });
    </script>
{% endblock %}
", "jury/submissions.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/submissions.html.twig");
    }
}
