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

/* jury/auditlog.html.twig */
class __TwigTemplate_8bdd7c3257f28717b31e5bf6a7d729a3f5b64af19aa0085dcc184737de6776ef extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/auditlog.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/auditlog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Auditlog - ";
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
    <h1>Auditlog</h1>
    ";
        // line 14
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 14, $this->source); })()) > 1)) {
            // line 15
            echo "    <ul class=\"pagination pagination-sm\">
        <li class=\"page-item";
            // line 16
            echo ((((isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 16, $this->source); })()) || ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 16, $this->source); })()) == 1))) ? (" disabled") : (""));
            echo "\">
            <a class=\"page-link\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 17, $this->source); })()) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 17, $this->source); })()) - 1)))]), "html", null, true);
            echo "\">«</a>
        </li>

        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 20, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "        <li class=\"page-item";
                echo ((( !(isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 21, $this->source); })()) && ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 21, $this->source); })()) == $context["i"]))) ? (" active") : (""));
                echo "\">
            <a class=\"page-link\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        <li class=\"page-item";
            // line 26
            echo ((((isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 26, $this->source); })()) || ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 26, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 26, $this->source); })())))) ? (" disabled") : (""));
            echo "\">
            <a class=\"page-link\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 27, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 27, $this->source); })()))) ? (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 27, $this->source); })()) + 1)) : ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 27, $this->source); })())))]), "html", null, true);
            echo "\">»</a>
        </li>

        <li class=\"page-item";
            // line 30
            echo (((isset($context["showAll"]) || array_key_exists("showAll", $context) ? $context["showAll"] : (function () { throw new RuntimeError('Variable "showAll" does not exist.', 30, $this->source); })())) ? (" active") : (""));
            echo "\">
            <a class=\"page-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog", ["showAll" => true]);
            echo "\">show all</a>
        </li>
    </ul>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 36, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 36, $this->source); })()), 0, (isset($context["table_options"]) || array_key_exists("table_options", $context) ? $context["table_options"] : (function () { throw new RuntimeError('Variable "table_options" does not exist.', 36, $this->source); })())], 36, $context, $this->getSourceContext());
        echo "

";
    }

    public function getTemplateName()
    {
        return "jury/auditlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 36,  141 => 35,  134 => 31,  130 => 30,  124 => 27,  120 => 26,  117 => 25,  106 => 22,  101 => 21,  97 => 20,  91 => 17,  87 => 16,  84 => 15,  82 => 14,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Auditlog - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Auditlog</h1>
    {% if maxPages > 1 %}
    <ul class=\"pagination pagination-sm\">
        <li class=\"page-item{{ showAll or thisPage == 1 ? ' disabled' }}\">
            <a class=\"page-link\" href=\"{{ path('jury_auditlog', {page: thisPage-1 < 1 ? 1 : thisPage-1}) }}\">«</a>
        </li>

        {% for i in 1..maxPages %}
        <li class=\"page-item{{ not showAll and thisPage == i ? ' active' }}\">
            <a class=\"page-link\" href=\"{{ path('jury_auditlog', {page: i}) }}\">{{ i }}</a>
        </li>
        {% endfor %}

        <li class=\"page-item{{ showAll or thisPage == maxPages ? ' disabled' }}\">
            <a class=\"page-link\" href=\"{{ path('jury_auditlog', {page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">»</a>
        </li>

        <li class=\"page-item{{ showAll ? ' active' }}\">
            <a class=\"page-link\" href=\"{{ path('jury_auditlog', {showAll: true}) }}\">show all</a>
        </li>
    </ul>
    {% endif %}

    {{ macros.table(auditlog, table_fields, 0, table_options) }}

{% endblock %}
", "jury/auditlog.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/auditlog.html.twig");
    }
}
