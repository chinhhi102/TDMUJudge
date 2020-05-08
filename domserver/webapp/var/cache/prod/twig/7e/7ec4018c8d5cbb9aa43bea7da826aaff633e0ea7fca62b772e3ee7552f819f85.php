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
        // line 4
        echo "  Delete ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["primaryKey"]) || array_key_exists("primaryKey", $context) ? $context["primaryKey"] : (function () { throw new RuntimeError('Variable "primaryKey" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " - \"";
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\"
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 11
        if ((isset($context["isError"]) || array_key_exists("isError", $context) ? $context["isError"] : (function () { throw new RuntimeError('Variable "isError" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "          <div class=\"alert alert-danger\">
            <strong>Error: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 13, $this->source); })()), 0, [], "array", false, false, false, 13), "html", null, true);
            echo "</strong>
          </div>
        ";
        } else {
            // line 16
            echo "          <p>
            You're about to delete ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["primaryKey"]) || array_key_exists("primaryKey", $context) ? $context["primaryKey"] : (function () { throw new RuntimeError('Variable "primaryKey" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env,             // line 18
(isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 18, $this->source); })()), "html", null, true);
            // line 19
            echo "\".
          </p>

          ";
            // line 22
            if ( !twig_test_empty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 22, $this->source); })()))) {
                // line 23
                echo "            <p>
              <strong>Warning, this will:</strong>
            </p>
            <ul>
              ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 27, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 28
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
          ";
            }
            // line 32
            echo "
          <p>
            Are you sure?
          </p>
        ";
        }
        // line 37
        echo "      </div>
    </div>
  </div>
";
    }

    // line 42
    public function block_closeButtonText($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "  ";
        if ((isset($context["isError"]) || array_key_exists("isError", $context) ? $context["isError"] : (function () { throw new RuntimeError('Variable "isError" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "    OK
  ";
        } else {
            // line 46
            echo "    Cancel
  ";
        }
    }

    // line 50
    public function block_buttonText($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "  Delete
";
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
        return array (  159 => 51,  155 => 50,  149 => 46,  145 => 44,  142 => 43,  138 => 42,  131 => 37,  124 => 32,  120 => 30,  111 => 28,  107 => 27,  101 => 23,  99 => 22,  94 => 19,  92 => 18,  87 => 17,  84 => 16,  78 => 13,  75 => 12,  73 => 11,  68 => 8,  64 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/modal.html.twig' %}

{% block title %}
  Delete {{ type }} {{ primaryKey }} - \"{{ description }}\"
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        {% if isError %}
          <div class=\"alert alert-danger\">
            <strong>Error: {{ messages[0] }}</strong>
          </div>
        {% else %}
          <p>
            You're about to delete {{ type }} {{ primaryKey }} \"{{
              description
            }}\".
          </p>

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

          <p>
            Are you sure?
          </p>
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}

{% block closeButtonText %}
  {% if isError %}
    OK
  {% else %}
    Cancel
  {% endif %}
{% endblock %}

{% block buttonText %}
  Delete
{% endblock %}
", "jury/delete_modal.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/delete_modal.html.twig");
    }
}
