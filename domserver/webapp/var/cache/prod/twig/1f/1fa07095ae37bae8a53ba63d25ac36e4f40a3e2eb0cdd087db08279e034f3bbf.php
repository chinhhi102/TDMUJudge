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

/* jury/clarification.html.twig */
class __TwigTemplate_d98be8dd33772825c1f07e4d22fe725cbf8ba38a8dcab8a37ea46388b86ff06a extends \Twig\Template
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
        // line 3
        $context["origclar"] = twig_first($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 3, $this->source); })()));
        // line 4
        $context["claimed"] = ( !twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 4, $this->source); })()), "answered", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "from_jurymember", [], "any", true, true, false, 4));
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Clarification ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 6, $this->source); })()), "clarid", [], "any", false, false, false, 6), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
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
                
<div class=\"container clarificationform\">
";
        // line 18
        if ((isset($context["claimed"]) || array_key_exists("claimed", $context) ? $context["claimed"] : (function () { throw new RuntimeError('Variable "claimed" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "<div class=\"alert alert-info\" role=\"alert\">
<i class=\"fas fa-user-lock\"></i> Claimed by <strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 20, $this->source); })()), "from_jurymember", [], "any", false, false, false, 20), "html", null, true);
            echo "</strong>
";
            // line 21
            if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 21, $this->source); })()), "jurymember_is_me", [], "any", false, false, false, 21)) {
                echo "(it's you!)";
            }
            // line 22
            echo "</div>
";
        }
        // line 24
        echo "

";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clar"]) {
            // line 27
            echo "
<div class=\"card mb-3 ";
            // line 28
            if ( !twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", true, true, false, 28)) {
                echo "border-primary";
            }
            echo "\">
<div class=\"card-header\"><div class=\"row\">
<div class=\"col-sm\">
    Clarification ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 31), "html", null, true);
            echo "
    ";
            // line 32
            if ((isset($context["showExternalId"]) || array_key_exists("showExternalId", $context) ? $context["showExternalId"] : (function () { throw new RuntimeError('Variable "showExternalId" does not exist.', 32, $this->source); })())) {
                // line 33
                echo "        (external ID: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "externalid", [], "any", false, false, false, 33), "html", null, true);
                echo ")
    ";
            }
            // line 35
            echo "</div>
<div class=\"col-sm text-muted text-right\">";
            // line 36
            echo $this->extensions['App\Twig\TwigExtension']->printtimeHover(twig_get_attribute($this->env, $this->source, $context["clar"], "time", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, $context["clar"], "contest", [], "any", false, false, false, 36));
            echo "</div>
</div></div>
<div class=\"card-body\">
<div class=\"card-title\">
<div class=\"row\">
<div class=\"col-sm\">
From:
";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", true, true, false, 43)) {
                // line 44
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamname", [], "any", false, false, false, 44), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", false, false, false, 44), "html", null, true);
                echo ")</a>
";
            } else {
                // line 46
                echo "Jury
    ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", true, true, false, 47)) {
                    // line 48
                    echo "        (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", false, false, false, 48), "html", null, true);
                    echo ")
    ";
                }
            }
            // line 51
            echo "</div>

<div class=\"col-sm\">
Subject: <span class=\"clarification-subject\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subject", [], "any", false, false, false, 54), "html", null, true);
            echo "
<button class=\"btn btn-sm btn-link clarification-subject-change-button\"><i class=\"far fa-edit\" title=\"Change subject\"></i></button></span>
<span class=\"clarification-subject-form\" data-current-selected-subject=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 56), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 56), "html", null, true);
            echo "\">
<form action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_subject", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"subject\" id=\"subject\" class=\"custom-select custom-select-sm\">
";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 59, $this->source); })()), "subjects", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["contest"] => $context["subject"]) {
                // line 60
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
                echo "\">
";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["subject"]);
                foreach ($context['_seq'] as $context["id"] => $context["descr"]) {
                    // line 62
                    echo "<option value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 62) == $context["id"])) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                    echo "</option>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['descr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "</optgroup>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contest'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "</select>
<button type=\"button\" class=\"close clarification-subject-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>
</div>
</div>

<div class=\"row\">
<div class=\"col-sm\">To:
";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", true, true, false, 77)) {
                // line 78
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamname", [], "any", false, false, false, 78), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", false, false, false, 78), "html", null, true);
                echo ")</a>
";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 79
$context["clar"], "from_teamid", [], "any", true, true, false, 79)) {
                // line 80
                echo "Jury
";
            } else {
                // line 82
                echo "<strong>All</strong>
";
            }
            // line 84
            echo "</div>

<div class=\"col-sm\">Queue: <span class=\"clarification-queue\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queue", [], "any", false, false, false, 86), "html", null, true);
            echo "
<button class=\"btn btn-sm btn-link clarification-queue-change-button\"><i class=\"far fa-edit\" title=\"Change queue\"></i></button></span>
<span class=\"clarification-queue-form\" data-current-selected-queue=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 88), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 88), "html", null, true);
            echo "\">
<form action=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"queue\" id=\"queue\" class=\"custom-select custom-select-sm\">
<option value=\"\">Unassigned issues</option>
";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 92, $this->source); })()), "queues", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["qid"] => $context["queue"]) {
                // line 93
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["qid"], "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 93) == $context["qid"])) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['qid'], $context['queue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "</select>
<button type=\"button\" class=\"close clarification-queue-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>

</div>

</div>
</div>

<div class=\"card-text\"><pre class=\"output-text bg-light p-3\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "body", [], "any", false, false, false, 107), "html", null, true);
            echo "</pre></div>

</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
<div class=\"knoppenbalk\">
<div class=\"row\">
<div class=\"col-sm\"><button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
 aria-expanded=\"false\" aria-controls=\"collapsereplyform\"><i class=\"fa fa-reply\"></i> reply</button>
</div>

<div class=\"col-sm text-center\">
<form action=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 121, $this->source); })()), "clarid", [], "any", false, false, false, 121)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 123
        if ((isset($context["claimed"]) || array_key_exists("claimed", $context) ? $context["claimed"] : (function () { throw new RuntimeError('Variable "claimed" does not exist.', 123, $this->source); })())) {
            // line 124
            if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 124, $this->source); })()), "jurymember_is_me", [], "any", false, false, false, 124)) {
                // line 125
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"0\" type=\"submit\"><i class=\"fas fa-lock-open\"></i> unclaim</button>
";
            } else {
                // line 127
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"1\" type=\"submit\"><i class=\"fas fa-user-secret\"></i> steal</button>
";
            }
        } else {
            // line 130
            echo "<button class=\"btn btn-sm btn-success\" name=\"claimed\" value=\"1\" type=\"submit\" ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 130, $this->source); })()), "answered", [], "any", false, false, false, 130)) {
                echo "disabled";
            }
            echo "><i class=\"fas fa-lock\"></i> claim</button>
";
        }
        // line 132
        echo "
</form>
</div>

<div class=\"col-sm text-right\">
<form action=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_set_answered", ["clarId" => twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 137, $this->source); })()), "clarid", [], "any", false, false, false, 137)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 139
        if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 139, $this->source); })()), "answered", [], "any", false, false, false, 139)) {
            // line 140
            echo "<button class=\"btn btn-sm btn-outline-warning\" name=\"answered\" value=\"0\" type=\"submit\"><i class=\"fas fa-times\"></i> set unanswered</button>
";
        } else {
            // line 142
            echo "<button class=\"btn btn-sm btn-warning\" name=\"answered\" value=\"1\" type=\"submit\"><i class=\"fas fa-check\"></i> set answered</button>
";
        }
        // line 144
        echo "</form>
</div>

</div>
</div>

</div>

<div class=\"collapse container clarificationform\" id=\"collapsereplyform\"><div class=\"card\">
<div class=\"card-header\">Send clarification</div>
<div class=\"card-body\">";
        // line 155
        $this->loadTemplate("jury/partials/clarification_form.html.twig", "jury/clarification.html.twig", 155)->display($context);
        // line 156
        echo "</div>
</div></div>

<div class=\"mb-5\"></div>
            </div>
        </div>
    </div>
";
    }

    // line 164
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "<script>
    \$(function() {
        \$(['subject', 'queue']).each(function(_, field) {
            \$('.clarification-' + field + '-change-button').on('click', function () {
                \$(this).closest('.clarification-' + field).hide();
                \$(this).closest('div').find('.clarification-' + field + '-form').show();
            });
            \$('.clarification-' + field + '-cancel-button').on('click', function () {
                \$(this).closest('.clarification-' + field + '-form').hide();
                \$(this).closest('div').find('.clarification-' + field).show();
            });
            \$('.clarification-' + field + '-form select').on('change', function () {
                var \$select = \$(this);
                var \$form = \$select.closest('.clarification-' + field + '-form');
                var clarId = \$form.data('clarification-id');
                var value = \$select.find(':selected').text();
                if (confirm('Are you sure you want to change the ' + field + ' of clarification ' + clarId + ' to \"' + value + '\"?')) {
                    \$form.find('form').submit();
                } else {
                    \$select.val(\$form.data('current-selected-' + field));
                }
            });
        });
        \$('#clar_answers').change(clarificationAppendAnswer);
     });
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 165,  410 => 164,  399 => 156,  397 => 155,  385 => 144,  381 => 142,  377 => 140,  375 => 139,  370 => 137,  363 => 132,  355 => 130,  350 => 127,  346 => 125,  344 => 124,  342 => 123,  337 => 121,  327 => 113,  315 => 107,  301 => 95,  286 => 93,  282 => 92,  276 => 89,  270 => 88,  265 => 86,  261 => 84,  257 => 82,  253 => 80,  251 => 79,  242 => 78,  240 => 77,  227 => 66,  220 => 64,  205 => 62,  201 => 61,  196 => 60,  192 => 59,  187 => 57,  181 => 56,  176 => 54,  171 => 51,  164 => 48,  162 => 47,  159 => 46,  149 => 44,  147 => 43,  137 => 36,  134 => 35,  128 => 33,  126 => 32,  122 => 31,  114 => 28,  111 => 27,  107 => 26,  103 => 24,  99 => 22,  95 => 21,  91 => 20,  88 => 19,  86 => 18,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  54 => 6,  49 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% set origclar = list|first %}
{% set claimed = not origclar.answered and origclar.from_jurymember is defined %}

{% block title %}Clarification {{ origclar.clarid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
{% endblock %}

{% block content %}
<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                
<div class=\"container clarificationform\">
{% if claimed %}
<div class=\"alert alert-info\" role=\"alert\">
<i class=\"fas fa-user-lock\"></i> Claimed by <strong>{{ origclar.from_jurymember }}</strong>
{% if origclar.jurymember_is_me %}(it's you!){% endif %}
</div>
{% endif %}


{% for clar in list %}

<div class=\"card mb-3 {% if clar.from_teamid is not defined %}border-primary{% endif %}\">
<div class=\"card-header\"><div class=\"row\">
<div class=\"col-sm\">
    Clarification {{ clar.clarid }}
    {% if showExternalId %}
        (external ID: {{ clar.externalid }})
    {% endif %}
</div>
<div class=\"col-sm text-muted text-right\">{{ clar.time | printtimeHover(clar.contest) }}</div>
</div></div>
<div class=\"card-body\">
<div class=\"card-title\">
<div class=\"row\">
<div class=\"col-sm\">
From:
{% if clar.from_teamid is defined %}
<a href=\"{{ path('jury_team', {teamId: clar.from_teamid}) }}\">{{ clar.from_teamname }} (t{{ clar.from_teamid }})</a>
{% else %}
Jury
    {% if clar.from_jurymember is defined %}
        ({{ clar.from_jurymember }})
    {% endif %}
{% endif %}
</div>

<div class=\"col-sm\">
Subject: <span class=\"clarification-subject\">{{ clar.subject }}
<button class=\"btn btn-sm btn-link clarification-subject-change-button\"><i class=\"far fa-edit\" title=\"Change subject\"></i></button></span>
<span class=\"clarification-subject-form\" data-current-selected-subject=\"{{ clar.categoryid }}\" data-clarification-id=\"{{clar.clarid}}\">
<form action=\"{{ path('jury_clarification_change_subject', {'clarId': clar.clarid }) }}\" method=\"post\" class=\"form-inline\">
<select name=\"subject\" id=\"subject\" class=\"custom-select custom-select-sm\">
{% for contest,subject in clarform.subjects %}
<optgroup label=\"{{ contest }}\">
{% for id,descr in subject %}
<option value=\"{{id}}\"{% if clar.categoryid == id %} selected{% endif %}>{{descr}}</option>
{% endfor %}
</optgroup>
{% endfor %}
</select>
<button type=\"button\" class=\"close clarification-subject-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>
</div>
</div>

<div class=\"row\">
<div class=\"col-sm\">To:
{% if clar.to_teamid is defined %}
<a href=\"{{ path('jury_team', {teamId: clar.to_teamid}) }}\">{{ clar.to_teamname }} (t{{ clar.to_teamid }})</a>
{% elseif clar.from_teamid is defined %}
Jury
{% else %}
<strong>All</strong>
{% endif %}
</div>

<div class=\"col-sm\">Queue: <span class=\"clarification-queue\">{{ clar.queue }}
<button class=\"btn btn-sm btn-link clarification-queue-change-button\"><i class=\"far fa-edit\" title=\"Change queue\"></i></button></span>
<span class=\"clarification-queue-form\" data-current-selected-queue=\"{{ clar.queueid }}\" data-clarification-id=\"{{clar.clarid}}\">
<form action=\"{{ path('jury_clarification_change_queue', {'clarId': clar.clarid }) }}\" method=\"post\" class=\"form-inline\">
<select name=\"queue\" id=\"queue\" class=\"custom-select custom-select-sm\">
<option value=\"\">Unassigned issues</option>
{% for qid,queue in clarform.queues %}
<option value=\"{{qid}}\"{% if clar.queueid == qid %} selected{% endif %}>{{queue}}</option>
{% endfor %}
</select>
<button type=\"button\" class=\"close clarification-queue-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>

</div>

</div>
</div>

<div class=\"card-text\"><pre class=\"output-text bg-light p-3\">{{ clar.body }}</pre></div>

</div>
</div>

{% endfor %}

<div class=\"knoppenbalk\">
<div class=\"row\">
<div class=\"col-sm\"><button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
 aria-expanded=\"false\" aria-controls=\"collapsereplyform\"><i class=\"fa fa-reply\"></i> reply</button>
</div>

<div class=\"col-sm text-center\">
<form action=\"{{ path('jury_clarification_claim', {'clarId': origclar.clarid}) }}\" method=\"post\">

{% if claimed %}
{% if origclar.jurymember_is_me %}
<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"0\" type=\"submit\"><i class=\"fas fa-lock-open\"></i> unclaim</button>
{% else %}
<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"1\" type=\"submit\"><i class=\"fas fa-user-secret\"></i> steal</button>
{% endif %}
{% else %}
<button class=\"btn btn-sm btn-success\" name=\"claimed\" value=\"1\" type=\"submit\" {% if origclar.answered %}disabled{% endif %}><i class=\"fas fa-lock\"></i> claim</button>
{% endif %}

</form>
</div>

<div class=\"col-sm text-right\">
<form action=\"{{ path('jury_clarification_set_answered', {'clarId': origclar.clarid}) }}\" method=\"post\">

{% if origclar.answered %}
<button class=\"btn btn-sm btn-outline-warning\" name=\"answered\" value=\"0\" type=\"submit\"><i class=\"fas fa-times\"></i> set unanswered</button>
{% else %}
<button class=\"btn btn-sm btn-warning\" name=\"answered\" value=\"1\" type=\"submit\"><i class=\"fas fa-check\"></i> set answered</button>
{% endif %}
</form>
</div>

</div>
</div>

</div>

<div class=\"collapse container clarificationform\" id=\"collapsereplyform\"><div class=\"card\">
<div class=\"card-header\">Send clarification</div>
<div class=\"card-body\">
{%- include 'jury/partials/clarification_form.html.twig' %}
</div>
</div></div>

<div class=\"mb-5\"></div>
            </div>
        </div>
    </div>
{% endblock %}
{% block extrafooter %}
<script>
    \$(function() {
        \$(['subject', 'queue']).each(function(_, field) {
            \$('.clarification-' + field + '-change-button').on('click', function () {
                \$(this).closest('.clarification-' + field).hide();
                \$(this).closest('div').find('.clarification-' + field + '-form').show();
            });
            \$('.clarification-' + field + '-cancel-button').on('click', function () {
                \$(this).closest('.clarification-' + field + '-form').hide();
                \$(this).closest('div').find('.clarification-' + field).show();
            });
            \$('.clarification-' + field + '-form select').on('change', function () {
                var \$select = \$(this);
                var \$form = \$select.closest('.clarification-' + field + '-form');
                var clarId = \$form.data('clarification-id');
                var value = \$select.find(':selected').text();
                if (confirm('Are you sure you want to change the ' + field + ' of clarification ' + clarId + ' to \"' + value + '\"?')) {
                    \$form.find('form').submit();
                } else {
                    \$select.val(\$form.data('current-selected-' + field));
                }
            });
        });
        \$('#clar_answers').change(clarificationAppendAnswer);
     });
</script>
{% endblock %}
", "jury/clarification.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/clarification.html.twig");
    }
}
