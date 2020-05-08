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

/* jury/tsv/userdata.tsv.twig */
class __TwigTemplate_0ac3c155202e670ab010c604e9edb8c3b439e006851ffcecf9e98475f068109c extends \Twig\Template
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
        echo "userdata\t1
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 3), ["\t" => " "]), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 3), ["\t" => " "]), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "fullname", [], "any", false, false, false, 3), ["\t" => " "]), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "username", [], "any", false, false, false, 3), ["\t" => " "]), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "password", [], "any", false, false, false, 3), ["\t" => " "]), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "jury/tsv/userdata.tsv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("userdata\t1
{% for row in data %}
{{ row.type|replace({'\\t':' '}) }}\t{{ row.id|replace({'\\t':' '}) }}\t{{ row.fullname|replace({'\\t':' '}) }}\t{{ row.username|replace({'\\t':' '}) }}\t{{ row.password|replace({'\\t':' '}) }}
{% endfor %}
", "jury/tsv/userdata.tsv.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/tsv/userdata.tsv.twig");
    }
}
