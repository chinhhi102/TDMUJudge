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

/* jury/partials/analysis_filter.html.twig */
class __TwigTemplate_6b8788ccbd658f6aa79d7c7bac60788d0cb0ea37d5383bcaf2536f7109336a8f extends \Twig\Template
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
        echo "Filter:
<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 4
            echo "
        <label class=\"btn btn-secondary ";
            // line 5
            if (($context["key"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()))) {
                echo "active";
            }
            echo "\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                   ";
            // line 7
            if (($context["key"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 7, $this->source); })()))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
        </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/analysis_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  57 => 7,  53 => 6,  47 => 5,  44 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Filter:
<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
    {%- for key, label in filters %}

        <label class=\"btn btn-secondary {% if key == view %}active{% endif %}\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ key }}\"
                   {% if key == view %}checked{% endif %}> {{ label }}
        </label>
    {%- endfor %}
</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
", "jury/partials/analysis_filter.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/partials/analysis_filter.html.twig");
    }
}
