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

/* partials/modal.html.twig */
class __TwigTemplate_c070a26e3cf55df2313880f73c1abdcc249a48eb325e7b8030d6d8fa78deb02c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'extraButton' => [$this, 'block_extraButton'],
            'closeButtonText' => [$this, 'block_closeButtonText'],
            'buttonText' => [$this, 'block_buttonText'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "            </div>
            <div class=\"modal-footer\">
                ";
        // line 16
        $this->displayBlock('extraButton', $context, $blocks);
        // line 17
        echo "                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                    ";
        // line 18
        $this->displayBlock('closeButtonText', $context, $blocks);
        // line 19
        echo "                </button>
                ";
        // line 20
        if ((((isset($context["showModalSubmit"]) || array_key_exists("showModalSubmit", $context))) ? (_twig_default_filter((isset($context["showModalSubmit"]) || array_key_exists("showModalSubmit", $context) ? $context["showModalSubmit"] : (function () { throw new RuntimeError('Variable "showModalSubmit" does not exist.', 20, $this->source); })()), false)) : (false))) {
            // line 21
            echo "                    <button type=\"button\" class=\"btn ";
            echo twig_escape_filter($this->env, (((isset($context["buttonClass"]) || array_key_exists("buttonClass", $context))) ? (_twig_default_filter((isset($context["buttonClass"]) || array_key_exists("buttonClass", $context) ? $context["buttonClass"] : (function () { throw new RuntimeError('Variable "buttonClass" does not exist.', 21, $this->source); })()), "btn-danger")) : ("btn-danger")), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, (isset($context["modalUrl"]) || array_key_exists("modalUrl", $context) ? $context["modalUrl"] : (function () { throw new RuntimeError('Variable "modalUrl" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 22
            $this->displayBlock('buttonText', $context, $blocks);
            // line 23
            echo "                    </button>
                ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_extraButton($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_closeButtonText($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Close";
    }

    // line 22
    public function block_buttonText($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "partials/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 22,  116 => 18,  110 => 16,  104 => 13,  98 => 6,  90 => 25,  86 => 23,  84 => 22,  77 => 21,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  65 => 16,  61 => 14,  59 => 13,  51 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    {% block title %}{% endblock %}
                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                {% block content %}{% endblock %}
            </div>
            <div class=\"modal-footer\">
                {% block extraButton %}{% endblock %}
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                    {% block closeButtonText %}Close{% endblock %}
                </button>
                {% if showModalSubmit|default(false) %}
                    <button type=\"button\" class=\"btn {{ buttonClass|default('btn-danger') }}\" data-url=\"{{ modalUrl }}\">
                        {% block buttonText %}{% endblock %}
                    </button>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "partials/modal.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/partials/modal.html.twig");
    }
}
