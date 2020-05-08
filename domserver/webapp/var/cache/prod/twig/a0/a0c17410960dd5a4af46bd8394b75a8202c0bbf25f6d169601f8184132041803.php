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
        echo "<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
               
    <h1>Configuration</h1>

    <form method=\"post\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "            <div class=\"card\">
                <div class=\"card-header\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo " Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "data", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 32
                echo "                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo "
                                    ";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 35) == "bool")) {
                    // line 36
                    echo "                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "\"
                                            ";
                    // line 39
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 39) == 1)) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 41
$context["option"], "type", [], "any", false, false, false, 41) == "int")) {
                    // line 42
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                               type=\"number\"
                                               name=\"config_";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "\"
                                               value=\"";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 46), "html", null, true);
                    echo "\">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 48
$context["option"], "type", [], "any", false, false, false, 48) == "string")) {
                    // line 49
                    echo "                                        <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                               name=\"config_";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 50), "html", null, true);
                    echo "\"
                                               value=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 51), "html", null, true);
                    echo "\">
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 52
$context["option"], "type", [], "any", false, false, false, 52) == "array_keyval")) {
                    // line 53
                    echo "                                        <br/>
                                        ";
                    // line 54
                    $context["counter"] = 0;
                    // line 55
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 55));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 56
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 58
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 59, $this->source); })()), "html", null, true);
                        echo "][key]\"
                                                   id=\"config_";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 60), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 60, $this->source); })()), "html", null, true);
                        echo "__key_\">
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 64), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 64, $this->source); })()), "html", null, true);
                        echo "][val]\"
                                                   id=\"config_";
                        // line 65
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 65), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 65, $this->source); })()), "html", null, true);
                        echo "__val\">
                                            <br/>
                                            ";
                        // line 67
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 67, $this->source); })()) + 1);
                        // line 68
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo "][key]\"
                                               id=\"config_";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 72), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 72, $this->source); })()), "html", null, true);
                    echo "__key_\">
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 75), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo "][val]\"
                                               id=\"config_";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 76), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 76, $this->source); })()), "html", null, true);
                    echo "__val\">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 78
$context["option"], "type", [], "any", false, false, false, 78) == "array_val")) {
                    // line 79
                    echo "                                        <br/>
                                        ";
                    // line 80
                    $context["counter"] = 0;
                    // line 81
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                        // line 82
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 84
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 85
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 85), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 85, $this->source); })()), "html", null, true);
                        echo "]\"
                                                   id=\"config_";
                        // line 86
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 86, $this->source); })()), "html", null, true);
                        echo "_\">
                                            <br/>
                                            ";
                        // line 88
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 88, $this->source); })()) + 1);
                        // line 89
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 92, $this->source); })()), "html", null, true);
                    echo "]\"
                                               id=\"config_";
                    // line 93
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 93), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 93, $this->source); })()), "html", null, true);
                    echo "_\">
                                        <br/>
                                    ";
                }
                // line 96
                echo "                                    <small class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 96), "html", null, true);
                echo "</small>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    </ul>
                </div>
            </div>
            <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form> 
            </div>
        </div>
    </div>
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
        return array (  341 => 105,  331 => 100,  320 => 96,  312 => 93,  306 => 92,  302 => 90,  296 => 89,  294 => 88,  287 => 86,  281 => 85,  277 => 84,  273 => 82,  268 => 81,  266 => 80,  263 => 79,  261 => 78,  254 => 76,  248 => 75,  240 => 72,  234 => 71,  230 => 69,  224 => 68,  222 => 67,  215 => 65,  209 => 64,  205 => 63,  197 => 60,  191 => 59,  187 => 58,  183 => 56,  178 => 55,  176 => 54,  173 => 53,  171 => 52,  167 => 51,  161 => 50,  158 => 49,  156 => 48,  151 => 46,  145 => 45,  140 => 42,  138 => 41,  131 => 39,  125 => 38,  121 => 36,  119 => 35,  115 => 34,  111 => 32,  107 => 31,  100 => 27,  96 => 25,  92 => 24,  83 => 17,  79 => 16,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
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
<div class=\"dashboard-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
               
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
            </div>
        </div>
    </div>
{% endblock %}
", "jury/config.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/config.html.twig");
    }
}
