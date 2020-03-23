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

/* team/base.html.twig */
class __TwigTemplate_76eeb8788a14c960887e69eba63d7d47cf198daddab3d3334d85a33df755c48f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "team/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "TDMU Judge")) : ("TDMU Judge")), "html", null, true);
    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("team/menu.html.twig", "team/base.html.twig", 6)->display($context);
    }

    // line 9
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("team/partials/submit_scripts.html.twig", "team/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <script>
        \$(function () {
            \$('body').on('submit', 'form[name=team_clarification]', function () {
                return confirm(\"Send clarification request to Jury?\");
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "team/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ title|default('TDMU Judge') }}{% endblock %}

{% block menu %}
    {% include 'team/menu.html.twig' %}
{% endblock %}

{% block footer %}
    {% include 'team/partials/submit_scripts.html.twig' %}

    <script>
        \$(function () {
            \$('body').on('submit', 'form[name=team_clarification]', function () {
                return confirm(\"Send clarification request to Jury?\");
            });
        });
    </script>
{% endblock %}
", "team/base.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/team/base.html.twig");
    }
}
