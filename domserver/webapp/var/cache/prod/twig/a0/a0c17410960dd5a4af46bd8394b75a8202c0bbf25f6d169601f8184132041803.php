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

/* jury/config.html.twig */
class __TwigTemplate_bed5183efea54f397da46990dc775e356ea7e5386eaf252879f8317716a254f4 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Configuration - ";
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
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <h1>Configuration</h1>

    <form method=\"post\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "            <div class=\"card\">
                <div class=\"card-header\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo " Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "data", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 28
                echo "                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "
                                    ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 31) == "bool")) {
                    // line 32
                    echo "                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"
                                            ";
                    // line 35
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35) == 1)) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 37
$context["option"], "type", [], "any", false, false, false, 37) == "int")) {
                    // line 38
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                               type=\"number\"
                                               name=\"config_";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 41), "html", null, true);
                    echo "\"
                                               value=\"";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 42), "html", null, true);
                    echo "\">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 44
$context["option"], "type", [], "any", false, false, false, 44) == "string")) {
                    // line 45
                    echo "                                        <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                               name=\"config_";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46), "html", null, true);
                    echo "\"
                                               value=\"";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 47), "html", null, true);
                    echo "\">
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 48
$context["option"], "type", [], "any", false, false, false, 48) == "array_keyval")) {
                    // line 49
                    echo "                                        <br/>
                                        ";
                    // line 50
                    $context["counter"] = 0;
                    // line 51
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 51));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 52
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 55), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 55, $this->source); })()), "html", null, true);
                        echo "][key]\"
                                                   id=\"config_";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 56), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 56, $this->source); })()), "html", null, true);
                        echo "__key_\">
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 59
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 60), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 60, $this->source); })()), "html", null, true);
                        echo "][val]\"
                                                   id=\"config_";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 61), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 61, $this->source); })()), "html", null, true);
                        echo "__val\">
                                            <br/>
                                            ";
                        // line 63
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 63, $this->source); })()) + 1);
                        // line 64
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 67), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 67, $this->source); })()), "html", null, true);
                    echo "][key]\"
                                               id=\"config_";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 68), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 68, $this->source); })()), "html", null, true);
                    echo "__key_\">
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo "][val]\"
                                               id=\"config_";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 72), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 72, $this->source); })()), "html", null, true);
                    echo "__val\">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 74
$context["option"], "type", [], "any", false, false, false, 74) == "array_val")) {
                    // line 75
                    echo "                                        <br/>
                                        ";
                    // line 76
                    $context["counter"] = 0;
                    // line 77
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 77));
                    foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                        // line 78
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 80
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 81
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 81), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 81, $this->source); })()), "html", null, true);
                        echo "]\"
                                                   id=\"config_";
                        // line 82
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 82), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 82, $this->source); })()), "html", null, true);
                        echo "_\">
                                            <br/>
                                            ";
                        // line 84
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 84, $this->source); })()) + 1);
                        // line 85
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 88), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 88, $this->source); })()), "html", null, true);
                    echo "]\"
                                               id=\"config_";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 89, $this->source); })()), "html", null, true);
                    echo "_\">
                                        <br/>
                                    ";
                }
                // line 92
                echo "                                    <small class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 92), "html", null, true);
                echo "</small>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                    </ul>
                </div>
            </div>
            <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "jury/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 101,  327 => 96,  316 => 92,  308 => 89,  302 => 88,  298 => 86,  292 => 85,  290 => 84,  283 => 82,  277 => 81,  273 => 80,  269 => 78,  264 => 77,  262 => 76,  259 => 75,  257 => 74,  250 => 72,  244 => 71,  236 => 68,  230 => 67,  226 => 65,  220 => 64,  218 => 63,  211 => 61,  205 => 60,  201 => 59,  193 => 56,  187 => 55,  183 => 54,  179 => 52,  174 => 51,  172 => 50,  169 => 49,  167 => 48,  163 => 47,  157 => 46,  154 => 45,  152 => 44,  147 => 42,  141 => 41,  136 => 38,  134 => 37,  127 => 35,  121 => 34,  117 => 32,  115 => 31,  111 => 30,  107 => 28,  103 => 27,  96 => 23,  92 => 21,  88 => 20,  83 => 17,  79 => 16,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Configuration - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.toggle_extrahead() }}
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
{% endblock %}

{% block content %}
    <h1>Configuration</h1>

    <form method=\"post\">
        {% for category in options %}
            <div class=\"card\">
                <div class=\"card-header\">
                    {{ category.name }} Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        {% for option in category.data %}
                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    {{ option.name }}
                                    {% if option.type == 'bool' %}
                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                            {% if option.value == 1 %} checked=\"checked\"{% endif %}>
                                        <br/>
                                    {% elseif option.type == 'int' %}
                                        <input class=\"form-control form-control-sm\"
                                               style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                               type=\"number\"
                                               name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                               value=\"{{ option.value }}\">
                                        <br/>
                                    {% elseif option.type == 'string' %}
                                        <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                               name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                               value=\"{{ option.value }}\">
                                    {% elseif option.type == 'array_keyval' %}
                                        <br/>
                                        {% set counter = 0 %}
                                        {% for key,val in option.value %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   value=\"{{ key }}\"
                                                   name=\"config_{{ option.name }}[{{ counter }}][key]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}__key_\">
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"{{ val }}\"
                                                   name=\"config_{{ option.name }}[{{ counter }}][val]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}__val\">
                                            <br/>
                                            {% set counter = counter + 1 %}
                                        {% endfor %}
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                               name=\"config_{{ option.name }}[{{ counter }}][key]\"
                                               id=\"config_{{ option.name }}_{{ counter }}__key_\">
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_{{ option.name }}[{{ counter }}][val]\"
                                               id=\"config_{{ option.name }}_{{ counter }}__val\">
                                        <br/>
                                    {% elseif option.type == 'array_val' %}
                                        <br/>
                                        {% set counter = 0 %}
                                        {% for val in option.value %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"{{ val }}\"
                                                   name=\"config_{{ option.name }}[{{ counter }}]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}_\">
                                            <br/>
                                            {% set counter = counter + 1 %}
                                        {% endfor %}
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_{{ option.name }}[{{ counter }}]\"
                                               id=\"config_{{ option.name }}_{{ counter }}_\">
                                        <br/>
                                    {% endif %}
                                    <small class=\"text-muted\">{{ option.description }}</small>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <br/>
        {% endfor %}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form>
{% endblock %}
", "jury/config.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/config.html.twig");
    }
}
