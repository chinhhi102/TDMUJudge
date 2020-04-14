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

/* jury/config_check.html.twig */
class __TwigTemplate_a1289d2b82c2b2aa0a9ae1a2da5902e1bedb5e88342a2200a2b1d576d30c1564 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config_check.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config_check.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Configuration check - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"card w-40 float-right m-5\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">System information</h5>
  <table class=\"w-100\">
  <tr><td>DOMjudge:</td><td>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["DOMJUDGE_VERSION"]) || array_key_exists("DOMJUDGE_VERSION", $context) ? $context["DOMJUDGE_VERSION"] : (function () { throw new RuntimeError('Variable "DOMJUDGE_VERSION" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</td></tr>
  <tr><td>Environment:</td><td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "environment", [], "any", false, false, false, 12), "html", null, true);
        echo "</td></tr>
  <tr><td>Debug:</td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "debug", [], "any", false, false, false, 13)), "html", null, true);
        echo "</td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>PHP:</td><td>";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_phpinfo");
        echo "\"><i class=\"fas fa-info-circle\"></i></a></td></tr>
  <tr><td>Symfony:</td><td>";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("\\Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</td></tr>
  <tr><td>Twig:</td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_constant("Twig_Environment::VERSION"), "html", null, true);
        echo "</td></tr>
  </table>
  </div>
</div>

<h1>Configuration check</h1>

";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["resultgroup"] => $context["groupresults"]) {
            // line 25
            echo "<h3 class=\"mt-3 ml-3\">";
            echo twig_escape_filter($this->env, $context["resultgroup"], "html", null, true);
            echo "</h3>

<div class=\"accordion w-50 ml-5\" id=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">

";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupresults"]);
            foreach ($context['_seq'] as $context["test"] => $context["testresult"]) {
                // line 30
                echo "  <div class=\"card\">
    <h6 class=\"card-header result ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 31), "html", null, true);
                echo "\" role=\"tab\" id=\"heading";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
      <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapse";
                // line 32
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" data-parent=\"#";
                echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
                echo "\">
        ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 33) == "O")) {
                    // line 34
                    echo "        <i class=\"fas fa-check text-success\"></i>
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 35
$context["testresult"], "result", [], "any", false, false, false, 35) == "W")) {
                    // line 36
                    echo "        <i class=\"fas fa-exclamation-triangle text-warning\"></i>
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 37
$context["testresult"], "result", [], "any", false, false, false, 37) == "E")) {
                    // line 38
                    echo "        <i class=\"fas fa-skull-crossbones text-danger\"></i>
        ";
                }
                // line 40
                echo "        <i class=\"fa fa-chevron-down float-right\"></i>
        ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "caption", [], "any", false, false, false, 41), "html", null, true);
                echo "
      </a>
    </h6>

    <div id=\"collapse";
                // line 45
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" class=\"collapse collapsed\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
      <div class=\"card-body\">
        ";
                // line 47
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["testresult"], "desc", [], "any", false, false, false, 47);
                // line 48
                echo "        ";
                if (( !twig_get_attribute($this->env, $this->source, $context["testresult"], "escape", [], "any", true, true, false, 48) || twig_get_attribute($this->env, $this->source, $context["testresult"], "escape", [], "any", false, false, false, 48))) {
                    // line 49
                    echo "          ";
                    $context["description"] = twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 49, $this->source); })()));
                    // line 50
                    echo "        ";
                }
                // line 51
                echo "        ";
                echo twig_replace_filter((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 51, $this->source); })()), ["
" => "<br />
"]);
                echo "
      </div>
    </div>
  </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['test'], $context['testresult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['resultgroup'], $context['groupresults'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
<div class=\"mt-5 mb-5\">
All checks complete. <i class=\"fas fa-clipboard-check\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/config_check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 60,  196 => 57,  181 => 51,  178 => 50,  175 => 49,  172 => 48,  170 => 47,  163 => 45,  156 => 41,  153 => 40,  149 => 38,  147 => 37,  144 => 36,  142 => 35,  139 => 34,  137 => 33,  129 => 32,  123 => 31,  120 => 30,  116 => 29,  111 => 27,  105 => 25,  101 => 24,  91 => 17,  87 => 16,  81 => 15,  76 => 13,  72 => 12,  68 => 11,  62 => 7,  58 => 6,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Configuration check - {{ parent() }}{% endblock %}

{% block content %}
<div class=\"card w-40 float-right m-5\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">System information</h5>
  <table class=\"w-100\">
  <tr><td>DOMjudge:</td><td>{{ DOMJUDGE_VERSION }}</td></tr>
  <tr><td>Environment:</td><td>{{ app.environment }}</td></tr>
  <tr><td>Debug:</td><td>{{ app.debug|printYesNo }}</td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>PHP:</td><td>{{ constant('PHP_VERSION') }} <a href=\"{{ path('jury_config_phpinfo') }}\"><i class=\"fas fa-info-circle\"></i></a></td></tr>
  <tr><td>Symfony:</td><td>{{ constant('\\\\Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</td></tr>
  <tr><td>Twig:</td><td>{{ constant('Twig_Environment::VERSION') }}</td></tr>
  </table>
  </div>
</div>

<h1>Configuration check</h1>

{% for resultgroup,groupresults in results %}
<h3 class=\"mt-3 ml-3\">{{ resultgroup }}</h3>

<div class=\"accordion w-50 ml-5\" id=\"{{ resultgroup|replace({' ':''}) }}\" role=\"tablist\" aria-multiselectable=\"true\">

{% for test,testresult in groupresults %}
  <div class=\"card\">
    <h6 class=\"card-header result {{ testresult.result }}\" role=\"tab\" id=\"heading{{ test }}\">
      <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapse{{ test }}\" aria-expanded=\"true\" aria-controls=\"collapse{{ test }}\" data-parent=\"#{{ resultgroup|replace({' ':''}) }}\">
        {% if testresult.result == 'O' %}
        <i class=\"fas fa-check text-success\"></i>
        {% elseif testresult.result == 'W' %}
        <i class=\"fas fa-exclamation-triangle text-warning\"></i>
        {% elseif testresult.result == 'E' %}
        <i class=\"fas fa-skull-crossbones text-danger\"></i>
        {% endif %}
        <i class=\"fa fa-chevron-down float-right\"></i>
        {{ testresult.caption }}
      </a>
    </h6>

    <div id=\"collapse{{ test }}\" class=\"collapse collapsed\" role=\"tabpanel\" aria-labelledby=\"heading{{ test }}\">
      <div class=\"card-body\">
        {% set description = testresult.desc %}
        {% if testresult.escape is not defined or testresult.escape %}
          {% set description = description | escape %}
        {% endif %}
        {{ description | replace({\"\\n\":\"<br />\\n\"}) | raw }}
      </div>
    </div>
  </div>

{% endfor %}
</div>

{% endfor %}

<div class=\"mt-5 mb-5\">
All checks complete. <i class=\"fas fa-clipboard-check\"></i>
</div>
{% endblock %}
", "jury/config_check.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/config_check.html.twig");
    }
}
