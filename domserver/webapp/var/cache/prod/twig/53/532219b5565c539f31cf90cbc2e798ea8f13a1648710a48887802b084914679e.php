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
        // line 5
        echo "  Configuration check - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card w-40 float-right m-5\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">
              System information
            </h5>
            <table class=\"w-100\">
              <tr>
                <td>
                  DOMjudge:
                </td>
                <td>
                  ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["DOMJUDGE_VERSION"]) || array_key_exists("DOMJUDGE_VERSION", $context) ? $context["DOMJUDGE_VERSION"] : (function () { throw new RuntimeError('Variable "DOMJUDGE_VERSION" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <td>
                  Environment:
                </td>
                <td>
                  ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "environment", [], "any", false, false, false, 31), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <td>
                  Debug:
                </td>
                <td>
                  ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "debug", [], "any", false, false, false, 39)), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <td colspan=\"2\">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td>
                  PHP:
                </td>
                <td>
                  ";
        // line 52
        echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
        echo "
                  <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_phpinfo");
        echo "\">
                    <i class=\"fas fa-info-circle\"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  Symfony:
                </td>
                <td>
                  ";
        // line 63
        echo twig_escape_filter($this->env, twig_constant("\\Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        // line 67
        echo "
                </td>
              </tr>
              <tr>
                <td>
                  Twig:
                </td>
                <td>
                  ";
        // line 75
        echo twig_escape_filter($this->env, twig_constant("Twig_Environment::VERSION"), "html", null, true);
        echo "
                </td>
              </tr>
            </table>
          </div>
        </div>

        <h1>
          Configuration check
        </h1>

        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["resultgroup"] => $context["groupresults"]) {
            // line 87
            echo "          <h3 class=\"mt-3 ml-3\">
            ";
            // line 88
            echo twig_escape_filter($this->env, $context["resultgroup"], "html", null, true);
            echo "
          </h3>

          <div class=\"accordion w-50 ml-5\"
            id=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
            // line 94
            echo "\"
            role=\"tablist\"
            aria-multiselectable=\"true\">
            ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupresults"]);
            foreach ($context['_seq'] as $context["test"] => $context["testresult"]) {
                // line 98
                echo "              <div class=\"card\">
                <h6 class=\"card-header result ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 99), "html", null, true);
                echo "\"
                  role=\"tab\"
                  id=\"heading";
                // line 101
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
                  <a class=\"collapsed d-block text-dark pt-0 pb-0\"
                    data-toggle=\"collapse\"
                    href=\"#collapse";
                // line 104
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\"
                    aria-expanded=\"true\"
                    aria-controls=\"collapse";
                // line 106
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\"
                    data-parent=\"#";
                // line 107
                echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
                // line 109
                echo "\">
                    ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 110) == "O")) {
                    // line 111
                    echo "                      <i class=\"fas fa-check text-success\"></i>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 112
$context["testresult"], "result", [], "any", false, false, false, 112) == "W")) {
                    // line 113
                    echo "                      <i class=\"fas fa-exclamation-triangle text-warning\"></i>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 114
$context["testresult"], "result", [], "any", false, false, false, 114) == "E")) {
                    // line 115
                    echo "                      <i class=\"fas fa-skull-crossbones text-danger\"></i>
                    ";
                }
                // line 117
                echo "                    <i class=\"fa fa-chevron-down float-right\"></i>
                    ";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "caption", [], "any", false, false, false, 118), "html", null, true);
                echo "
                  </a>
                </h6>

                <div id=\"collapse";
                // line 122
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\"
                  class=\"collapse collapsed\"
                  role=\"tabpanel\"
                  aria-labelledby=\"heading";
                // line 125
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
                  <div class=\"card-body\">
                    ";
                // line 127
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["testresult"], "desc", [], "any", false, false, false, 127);
                // line 128
                echo "                    ";
                if (( !twig_get_attribute($this->env, $this->source,                 // line 129
$context["testresult"], "escape", [], "any", true, true, false, 129) || twig_get_attribute($this->env, $this->source, $context["testresult"], "escape", [], "any", false, false, false, 129))) {
                    // line 130
                    echo "                      ";
                    $context["description"] = twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 130, $this->source); })()));
                    // line 131
                    echo "                    ";
                }
                // line 132
                echo "                    ";
                echo twig_replace_filter(                // line 133
(isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 133, $this->source); })()), ["
" => "<br />
"]);
                // line 138
                echo "
                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['test'], $context['testresult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['resultgroup'], $context['groupresults'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
        <div class=\"mt-5 mb-5\">
          All checks complete. <i class=\"fas fa-clipboard-check\"></i>
        </div>
      </div>
    </div>
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
        return array (  287 => 145,  280 => 143,  270 => 138,  266 => 133,  264 => 132,  261 => 131,  258 => 130,  256 => 129,  254 => 128,  252 => 127,  247 => 125,  241 => 122,  234 => 118,  231 => 117,  227 => 115,  225 => 114,  222 => 113,  220 => 112,  217 => 111,  215 => 110,  212 => 109,  210 => 107,  206 => 106,  201 => 104,  195 => 101,  190 => 99,  187 => 98,  183 => 97,  178 => 94,  176 => 92,  169 => 88,  166 => 87,  162 => 86,  148 => 75,  138 => 67,  136 => 63,  123 => 53,  119 => 52,  103 => 39,  92 => 31,  81 => 23,  65 => 9,  61 => 8,  54 => 5,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Configuration check - {{ parent() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card w-40 float-right m-5\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">
              System information
            </h5>
            <table class=\"w-100\">
              <tr>
                <td>
                  DOMjudge:
                </td>
                <td>
                  {{ DOMJUDGE_VERSION }}
                </td>
              </tr>
              <tr>
                <td>
                  Environment:
                </td>
                <td>
                  {{ app.environment }}
                </td>
              </tr>
              <tr>
                <td>
                  Debug:
                </td>
                <td>
                  {{ app.debug|printYesNo }}
                </td>
              </tr>
              <tr>
                <td colspan=\"2\">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td>
                  PHP:
                </td>
                <td>
                  {{ constant('PHP_VERSION') }}
                  <a href=\"{{ path('jury_config_phpinfo') }}\">
                    <i class=\"fas fa-info-circle\"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  Symfony:
                </td>
                <td>
                  {{
                    constant(
                      '\\\\Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION'
                    )
                  }}
                </td>
              </tr>
              <tr>
                <td>
                  Twig:
                </td>
                <td>
                  {{ constant('Twig_Environment::VERSION') }}
                </td>
              </tr>
            </table>
          </div>
        </div>

        <h1>
          Configuration check
        </h1>

        {% for resultgroup, groupresults in results %}
          <h3 class=\"mt-3 ml-3\">
            {{ resultgroup }}
          </h3>

          <div class=\"accordion w-50 ml-5\"
            id=\"{{ resultgroup|replace({
              ' ': ''
            }) }}\"
            role=\"tablist\"
            aria-multiselectable=\"true\">
            {% for test, testresult in groupresults %}
              <div class=\"card\">
                <h6 class=\"card-header result {{ testresult.result }}\"
                  role=\"tab\"
                  id=\"heading{{ test }}\">
                  <a class=\"collapsed d-block text-dark pt-0 pb-0\"
                    data-toggle=\"collapse\"
                    href=\"#collapse{{ test }}\"
                    aria-expanded=\"true\"
                    aria-controls=\"collapse{{ test }}\"
                    data-parent=\"#{{ resultgroup|replace({
                      ' ': ''
                    }) }}\">
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

                <div id=\"collapse{{ test }}\"
                  class=\"collapse collapsed\"
                  role=\"tabpanel\"
                  aria-labelledby=\"heading{{ test }}\">
                  <div class=\"card-body\">
                    {% set description = testresult.desc %}
                    {% if
                      testresult.escape is not defined or testresult.escape %}
                      {% set description = description|escape %}
                    {% endif %}
                    {{
                      description
                        |replace({
                          '\\n': '<br />\\n'
                        })
                        |raw
                    }}
                  </div>
                </div>
              </div>
            {% endfor %}
          </div>
        {% endfor %}

        <div class=\"mt-5 mb-5\">
          All checks complete. <i class=\"fas fa-clipboard-check\"></i>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/config_check.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/config_check.html.twig");
    }
}
