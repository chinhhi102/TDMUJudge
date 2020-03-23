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

/* jury/delete_modal.html.twig */
class __TwigTemplate_f740a3b382ee0852541466424d35985a855657b720b9c58abe211c95d6ecd680 extends \Twig\Template
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
            'closeButtonText' => [$this, 'block_closeButtonText'],
            'buttonText' => [$this, 'block_buttonText'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/modal.html.twig", "jury/delete_modal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Delete ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["primaryKey"]) || array_key_exists("primaryKey", $context) ? $context["primaryKey"] : (function () { throw new RuntimeError('Variable "primaryKey" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " - \"";
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\"";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        if ((isset($context["isError"]) || array_key_exists("isError", $context) ? $context["isError"] : (function () { throw new RuntimeError('Variable "isError" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"alert alert-danger\">
            <strong>Error: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 9, $this->source); })()), 0, [], "any", false, false, false, 9), "html", null, true);
            echo "</strong>
        </div>
    ";
        } else {
            // line 12
            echo "        <p>You're about to delete ";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["primaryKey"]) || array_key_exists("primaryKey", $context) ? $context["primaryKey"] : (function () { throw new RuntimeError('Variable "primaryKey" does not exist.', 12, $this->source); })()), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\".</p>

        ";
            // line 14
            if ( !twig_test_empty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 14, $this->source); })()))) {
                // line 15
                echo "            <p>
                <strong>Warning, this will:</strong>
            </p>
            <ul>
                ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            </ul>
        ";
            }
            // line 24
            echo "
        <p>Are you sure?</p>
    ";
        }
        // line 27
        echo "
";
    }

    // line 30
    public function block_closeButtonText($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        if ((isset($context["isError"]) || array_key_exists("isError", $context) ? $context["isError"] : (function () { throw new RuntimeError('Variable "isError" does not exist.', 31, $this->source); })())) {
            echo "OK";
        } else {
            echo "Cancel";
        }
    }

    // line 34
    public function block_buttonText($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Delete";
    }

    public function getTemplateName()
    {
        return "jury/delete_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  129 => 31,  125 => 30,  120 => 27,  115 => 24,  111 => 22,  102 => 20,  98 => 19,  92 => 15,  90 => 14,  80 => 12,  74 => 9,  71 => 8,  69 => 7,  66 => 6,  62 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"partials/modal.html.twig\" %}

{% block title %}Delete {{ type }} {{ primaryKey }} - \"{{ description }}\"{% endblock %}

{% block content %}

    {% if isError %}
        <div class=\"alert alert-danger\">
            <strong>Error: {{ messages.0 }}</strong>
        </div>
    {% else %}
        <p>You're about to delete {{ type }} {{ primaryKey }} \"{{ description }}\".</p>

        {% if messages is not empty %}
            <p>
                <strong>Warning, this will:</strong>
            </p>
            <ul>
                {% for message in messages %}
                    <li>{{ message }}</li>
                {% endfor %}
            </ul>
        {% endif %}

        <p>Are you sure?</p>
    {% endif %}

{% endblock %}

{% block closeButtonText %}
    {% if isError %}OK{% else %}Cancel{% endif %}
{% endblock %}

{% block buttonText %}Delete{% endblock %}
", "jury/delete_modal.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/delete_modal.html.twig");
    }
}
