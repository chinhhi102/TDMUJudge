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

/* public/scoreboard.html.twig */
class __TwigTemplate_40b3c526df41f5e9eef599a9b61e7e052d8881c7982a6f84c908c3bdb352fe0d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/scoreboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Scoreboard - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $context["banner"] = "images/banner.png";
        // line 6
        echo "    ";
        if (((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 6, $this->source); })()) && $this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "        <img class=\"banner\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner.png"), "html", null, true);
            echo "\" alt=\"Banner\"/>
    ";
        }
        // line 9
        echo "
    <div data-ajax-refresh-target data-ajax-refresh-after=\"initializeScoreboard\" class=\"mt-3\" style=\"clear:both\">
        ";
        // line 11
        $this->loadTemplate("partials/scoreboard.html.twig", "public/scoreboard.html.twig", 11)->display(twig_array_merge($context, ["jury" => false, "public" => true, "current_contest" => (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 11, $this->source); })())]));
        // line 12
        echo "    </div>
";
    }

    // line 15
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script>
        initFavouriteTeams();

        var scoreboardUrl = '";
        // line 19
        (((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 19), "html", null, true))) : (print (null)));
        echo "';

        \$(function () {
            window.initializeScoreboard = function () {
                var \$newProgress = \$('[data-ajax-refresh-target] > .d-none > [data-progress-bar]');
                if (\$newProgress.length) {
                    var \$oldProgress = \$('body > [data-progress-bar]');
                    \$oldProgress.html(\$newProgress.children());
                    \$newProgress.parent().remove();
                }

                initFavouriteTeams();
            };
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "public/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  87 => 16,  83 => 15,  78 => 12,  76 => 11,  72 => 9,  66 => 7,  63 => 6,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"public/base.html.twig\" %}

{% block title %}Scoreboard - {{ parent() }}{% endblock %}
{% block content %}
    {% set banner = 'images/banner.png' %}
    {% if static and banner | assetExists %}
        <img class=\"banner\" src=\"{{ asset('images/banner.png') }}\" alt=\"Banner\"/>
    {% endif %}

    <div data-ajax-refresh-target data-ajax-refresh-after=\"initializeScoreboard\" class=\"mt-3\" style=\"clear:both\">
        {% include 'partials/scoreboard.html.twig' with {jury: false, public: true, current_contest: current_public_contest} %}
    </div>
{% endblock %}

{% block extrafooter %}
    <script>
        initFavouriteTeams();

        var scoreboardUrl = '{{ refresh.url ?? null }}';

        \$(function () {
            window.initializeScoreboard = function () {
                var \$newProgress = \$('[data-ajax-refresh-target] > .d-none > [data-progress-bar]');
                if (\$newProgress.length) {
                    var \$oldProgress = \$('body > [data-progress-bar]');
                    \$oldProgress.html(\$newProgress.children());
                    \$newProgress.parent().remove();
                }

                initFavouriteTeams();
            };
        });
    </script>
{% endblock %}
", "public/scoreboard.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/public/scoreboard.html.twig");
    }
}
