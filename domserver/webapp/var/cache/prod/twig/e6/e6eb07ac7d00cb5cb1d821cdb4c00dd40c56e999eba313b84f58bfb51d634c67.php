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

/* jury/clarifications.html.twig */
class __TwigTemplate_139d14e097839f3d21bbc15b4588d4a14ca9868b244c0bc48071f59e3e59d37f extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/clarifications.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Clarifications - ";
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
        echo "<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\" >
                
    <h1>Clarifications</h1>";
        // line 18
        if (twig_test_empty((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "
        <div class=\"alert alert-danger\">No active contest(s)</div>";
        } else {
            // line 22
            echo "
        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_new");
            echo "\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        <br />
        <br />

        Filter:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <label class=\"btn btn-secondary ";
            // line 31
            if ((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 31, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       ";
            // line 33
            if ((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 33, $this->source); })()))) {
                echo "checked";
            }
            echo "> All
            </label>
            <label class=\"btn btn-secondary ";
            // line 35
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 35, $this->source); })()) == "new")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       ";
            // line 37
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 37, $this->source); })()) == "new")) {
                echo "checked";
            }
            echo "> New
            </label>
            <label class=\"btn btn-secondary ";
            // line 39
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 39, $this->source); })()) == "old")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       ";
            // line 41
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 41, $this->source); })()) == "old")) {
                echo "checked";
            }
            echo "> Old
            </label>
            <label class=\"btn btn-secondary ";
            // line 43
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 43, $this->source); })()) == "general")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       ";
            // line 45
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 45, $this->source); })()) == "general")) {
                echo "checked";
            }
            echo "> General
            </label>
        </div>
        <div  style=\"overflow: auto\">
            ";
            // line 49
            if ((twig_length_filter($this->env, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 49, $this->source); })())) > 0)) {
                // line 50
                echo "                Queue:
                <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                    <label class=\"btn btn-secondary ";
                // line 52
                if ((null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 52, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                            ";
                // line 54
                if ((null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 54, $this->source); })()))) {
                    echo "checked";
                }
                echo "> All
                    </label>
                    <label class=\"btn btn-secondary ";
                // line 56
                if (( !(null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 56, $this->source); })())) && ((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 56, $this->source); })()) == ""))) {
                    echo "active";
                }
                echo "\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"\"
                            ";
                // line 58
                if (( !(null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 58, $this->source); })())) && ((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 58, $this->source); })()) == ""))) {
                    echo "checked";
                }
                echo "> Unassigned
                    </label>";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 60, $this->source); })()));
                foreach ($context['_seq'] as $context["queue"] => $context["name"]) {
                    // line 61
                    echo "                        <label class=\"btn btn-secondary ";
                    if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 61, $this->source); })()) == $context["queue"])) {
                        echo "active";
                    }
                    echo "\">
                            <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                    echo "\"
                                ";
                    // line 63
                    if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 63, $this->source); })()) == $context["queue"])) {
                        echo "checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                        </label>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['queue'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                </div>
            ";
            }
            // line 68
            echo "
            ";
            // line 69
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 69, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 69, $this->source); })()) == "new"))) {
                // line 70
                echo "                <h3 id=\"newrequests\">New requests:</h3>";
                // line 71
                if ((twig_length_filter($this->env, (isset($context["newClarifications"]) || array_key_exists("newClarifications", $context) ? $context["newClarifications"] : (function () { throw new RuntimeError('Variable "newClarifications" does not exist.', 71, $this->source); })())) == 0)) {
                    // line 72
                    echo "                    <p class=\"nodata\">No new clarification requests.</p>";
                } else {
                    // line 74
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 74)->display(twig_array_merge($context, ["clarifications" => (isset($context["newClarifications"]) || array_key_exists("newClarifications", $context) ? $context["newClarifications"] : (function () { throw new RuntimeError('Variable "newClarifications" does not exist.', 74, $this->source); })())]));
                }
                // line 76
                echo "            ";
            }
            // line 77
            echo "
            ";
            // line 78
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 78, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 78, $this->source); })()) == "old"))) {
                // line 79
                echo "                <h3 id=\"oldrequests\">Old requests:</h3>";
                // line 80
                if ((twig_length_filter($this->env, (isset($context["oldClarifications"]) || array_key_exists("oldClarifications", $context) ? $context["oldClarifications"] : (function () { throw new RuntimeError('Variable "oldClarifications" does not exist.', 80, $this->source); })())) == 0)) {
                    // line 81
                    echo "                    <p class=\"nodata\">No old clarification requests.</p>";
                } else {
                    // line 83
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 83)->display(twig_array_merge($context, ["clarifications" => (isset($context["oldClarifications"]) || array_key_exists("oldClarifications", $context) ? $context["oldClarifications"] : (function () { throw new RuntimeError('Variable "oldClarifications" does not exist.', 83, $this->source); })())]));
                }
                // line 85
                echo "            ";
            }
            // line 86
            echo "
            ";
            // line 87
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 87, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 87, $this->source); })()) == "general"))) {
                // line 88
                echo "                <h3 id=\"clarifications\">General clarifications:</h3>";
                // line 89
                if ((twig_length_filter($this->env, (isset($context["generalClarifications"]) || array_key_exists("generalClarifications", $context) ? $context["generalClarifications"] : (function () { throw new RuntimeError('Variable "generalClarifications" does not exist.', 89, $this->source); })())) == 0)) {
                    // line 90
                    echo "                    <p class=\"nodata\">No general clarifications.</p>";
                } else {
                    // line 92
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 92)->display(twig_array_merge($context, ["clarifications" => (isset($context["generalClarifications"]) || array_key_exists("generalClarifications", $context) ? $context["generalClarifications"] : (function () { throw new RuntimeError('Variable "generalClarifications" does not exist.', 92, $this->source); })())]));
                }
                // line 94
                echo "            ";
            }
        }
        // line 96
        echo "    </div>
    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications", ["queue" => "REPLACE_QUEUE", "filter" => "REPLACE_FILTER"]), "html", null, true);
        echo "'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val())
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => 12345]);
        echo "\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 125,  287 => 100,  281 => 96,  277 => 94,  274 => 92,  271 => 90,  269 => 89,  267 => 88,  265 => 87,  262 => 86,  259 => 85,  256 => 83,  253 => 81,  251 => 80,  249 => 79,  247 => 78,  244 => 77,  241 => 76,  238 => 74,  235 => 72,  233 => 71,  231 => 70,  229 => 69,  226 => 68,  222 => 66,  210 => 63,  206 => 62,  199 => 61,  195 => 60,  189 => 58,  182 => 56,  175 => 54,  168 => 52,  164 => 50,  162 => 49,  153 => 45,  146 => 43,  139 => 41,  132 => 39,  125 => 37,  118 => 35,  111 => 33,  104 => 31,  93 => 23,  90 => 22,  86 => 19,  84 => 18,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Clarifications - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\" >
                
    <h1>Clarifications</h1>

    {%- if current_contests is empty %}

        <div class=\"alert alert-danger\">No active contest(s)</div>
    {%- else %}

        <a href=\"{{ path('jury_clarification_new') }}\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        <br />
        <br />

        Filter:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <label class=\"btn btn-secondary {% if currentFilter is null %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       {% if currentFilter is null %}checked{% endif %}> All
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'new' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       {% if currentFilter == 'new' %}checked{% endif %}> New
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'old' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       {% if currentFilter == 'old' %}checked{% endif %}> Old
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'general' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       {% if currentFilter == 'general' %}checked{% endif %}> General
            </label>
        </div>
        <div  style=\"overflow: auto\">
            {% if queues | length > 0 %}
                Queue:
                <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                    <label class=\"btn btn-secondary {% if currentQueue is null %}active{% endif %}\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                            {% if currentQueue is null %}checked{% endif %}> All
                    </label>
                    <label class=\"btn btn-secondary {% if currentQueue is not null and currentQueue == '' %}active{% endif %}\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"\"
                            {% if currentQueue is not null and currentQueue == '' %}checked{% endif %}> Unassigned
                    </label>
                    {%- for queue, name in queues %}
                        <label class=\"btn btn-secondary {% if currentQueue == queue %}active{% endif %}\">
                            <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"{{ queue }}\"
                                {% if currentQueue == queue %}checked{% endif %}> {{ name }}
                        </label>
                    {%- endfor %}
                </div>
            {% endif %}

            {% if currentFilter is null or currentFilter == 'new' %}
                <h3 id=\"newrequests\">New requests:</h3>
                {%- if newClarifications | length == 0 %}
                    <p class=\"nodata\">No new clarification requests.</p>
                {%- else %}
                    {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: newClarifications} %}
                {%- endif %}
            {% endif %}

            {% if currentFilter is null or currentFilter == 'old' %}
                <h3 id=\"oldrequests\">Old requests:</h3>
                {%- if oldClarifications | length == 0 %}
                    <p class=\"nodata\">No old clarification requests.</p>
                {%- else %}
                    {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: oldClarifications} %}
                {%- endif %}
            {% endif %}

            {% if currentFilter is null or currentFilter == 'general' %}
                <h3 id=\"clarifications\">General clarifications:</h3>
                {%- if generalClarifications | length == 0 %}
                    <p class=\"nodata\">No general clarifications.</p>
                {%- else %}
                    {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: generalClarifications} %}
                {%- endif %}
            {% endif %}
        {%- endif %}
    </div>
    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '{{ path('jury_clarifications', {'queue': 'REPLACE_QUEUE', 'filter': 'REPLACE_FILTER'}) }}'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val())
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"{{ path('jury_clarification_change_queue', {'clarId': 12345}) }}\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>
            </div>
        </div>
    </div>

{% endblock %}
", "jury/clarifications.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/clarifications.html.twig");
    }
}
