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

/* team/partials/index_content.html.twig */
class __TwigTemplate_6e4d7403d7c33b6888035009df64de8a3800ea0b3f281b7d636381e3e83c3226 extends \Twig\Template
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
        // line 1
        if (twig_test_empty((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 4, $this->source); })()), "freezeData", [], "any", false, false, false, 4), "started", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "
    </h2>
";
        } else {
            // line 10
            echo "
    <div id=\"teamscoresummary\">
        ";
            // line 12
            $context["displayRank"] =  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 12, $this->source); })()), "freezeData", [], "any", false, false, false, 12), "showFrozen", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $this->loadTemplate("partials/scoreboard_table.html.twig", "team/partials/index_content.html.twig", 13)->display(twig_array_merge($context, ["displayRank" => (isset($context["displayRank"]) || array_key_exists("displayRank", $context) ? $context["displayRank"] : (function () { throw new RuntimeError('Variable "displayRank" does not exist.', 13, $this->source); })()), "jury" => false, "public" => false]));
            // line 14
            echo "    </div>

    <div class=\"mt-4\" data-flash-messages>
        ";
            // line 17
            $this->loadTemplate("partials/messages.html.twig", "team/partials/index_content.html.twig", 17)->display($context);
            // line 18
            echo "    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h3 class=\"teamoverview\">Submissions</h3>

            ";
            // line 24
            $this->loadTemplate("team/partials/submission_list.html.twig", "team/partials/index_content.html.twig", 24)->display($context);
            // line 25
            echo "        </div>
        <div class=\"col\">
            <h3 class=\"teamoverview\">Clarifications</h3>
            ";
            // line 28
            if (twig_test_empty((isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 28, $this->source); })()))) {
                // line 29
                echo "                <p class=\"nodata\">No clarifications.</p>
            ";
            } else {
                // line 31
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 31)->display(twig_array_merge($context, ["clarifications" => (isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 31, $this->source); })())]));
                // line 32
                echo "            ";
            }
            // line 33
            echo "
            <h3 class=\"teamoverview\">Clarification Requests</h3>
            ";
            // line 35
            if (twig_test_empty((isset($context["clarificationRequests"]) || array_key_exists("clarificationRequests", $context) ? $context["clarificationRequests"] : (function () { throw new RuntimeError('Variable "clarificationRequests" does not exist.', 35, $this->source); })()))) {
                // line 36
                echo "                <p class=\"nodata\">No clarification request.</p>
            ";
            } else {
                // line 38
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 38)->display(twig_array_merge($context, ["clarifications" => (isset($context["clarificationRequests"]) || array_key_exists("clarificationRequests", $context) ? $context["clarificationRequests"] : (function () { throw new RuntimeError('Variable "clarificationRequests" does not exist.', 38, $this->source); })())]));
                // line 39
                echo "            ";
            }
            // line 40
            echo "
            <div class=\"m-1\">
                <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification_add");
            echo "\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 49
        echo "
";
        // line 50
        if (((isset($context["ajax"]) || array_key_exists("ajax", $context)) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "    ";
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/partials/index_content.html.twig", 51)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 51, $this->source); })())]));
        }
    }

    public function getTemplateName()
    {
        return "team/partials/index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  135 => 50,  132 => 49,  122 => 42,  118 => 40,  115 => 39,  112 => 38,  108 => 36,  106 => 35,  102 => 33,  99 => 32,  96 => 31,  92 => 29,  90 => 28,  85 => 25,  83 => 24,  75 => 18,  73 => 17,  68 => 14,  65 => 13,  63 => 12,  59 => 10,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if contest is empty %}
    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">{{ team.name }}</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
{% elseif not contest.freezeData.started %}
    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">{{ team.name }}</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest {{ contest | printContestStart }}
    </h2>
{% else %}

    <div id=\"teamscoresummary\">
        {% set displayRank = not contest.freezeData.showFrozen %}
        {% include 'partials/scoreboard_table.html.twig' with {displayRank: displayRank, jury: false, public: false} %}
    </div>

    <div class=\"mt-4\" data-flash-messages>
        {% include 'partials/messages.html.twig' %}
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h3 class=\"teamoverview\">Submissions</h3>

            {% include 'team/partials/submission_list.html.twig' %}
        </div>
        <div class=\"col\">
            <h3 class=\"teamoverview\">Clarifications</h3>
            {% if clarifications is empty %}
                <p class=\"nodata\">No clarifications.</p>
            {% else %}
                {% include 'team/partials/clarification_list.html.twig' with {clarifications: clarifications} %}
            {% endif %}

            <h3 class=\"teamoverview\">Clarification Requests</h3>
            {% if clarificationRequests is empty %}
                <p class=\"nodata\">No clarification request.</p>
            {% else %}
                {% include 'team/partials/clarification_list.html.twig' with {clarifications: clarificationRequests} %}
            {% endif %}

            <div class=\"m-1\">
                <a href=\"{{ path('team_clarification_add') }}\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
{% endif %}

{% if ajax is defined and ajax %}
    {% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_team_contest} %}
{% endif %}
", "team/partials/index_content.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/team/partials/index_content.html.twig");
    }
}
