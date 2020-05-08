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

/* jury/executable.html.twig */
class __TwigTemplate_7568f7977ecbf405a29a955a33b1805fd54a4b89aca3f8b227bf7477080a4216 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/executable.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 5, $this->source); })()), "execid", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 10, $context, $this->getSourceContext());
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Executable ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 18, $this->source); })()), "execid", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  ID
                </th>
                <td>
                  ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 29, $this->source); })()), "execid", [], "any", false, false, false, 29), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Name
                </th>
                <td>
                  ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  MD5sum
                </th>
                <td>
                  ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 45, $this->source); })()), "md5sum", [], "any", false, false, false, 45), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Type
                </th>
                <td>
                  ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Size
                </th>
                <td>
                  ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 61, $this->source); })()), "zipFileSize", [], "any", false, false, false, 61), "html", null, true);
        echo " bytes
                </td>
              </tr>
              <tr>
                <th>
                  Content
                </th>
                <td>
                  <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_content", ["execId" => twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 73, $this->source); })()), "execid", [], "any", false, false, false, 73)]), "html", null, true);
        // line 76
        echo "\">
                    View file contents
                  </a>
                </td>
              </tr>
              <tr>
                <th>
                  Used as ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 83, $this->source); })()), "type", [], "any", false, false, false, 83), "html", null, true);
        echo " script
                </th>
                <td>
                  ";
        // line 86
        $context["used"] = false;
        // line 87
        echo "                  ";
        if (((twig_get_attribute($this->env, $this->source,         // line 88
(isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 88, $this->source); })()), "type", [], "any", false, false, false, 88) == "compare") && (        // line 89
(isset($context["default_compare"]) || array_key_exists("default_compare", $context) ? $context["default_compare"] : (function () { throw new RuntimeError('Variable "default_compare" does not exist.', 89, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 89, $this->source); })()), "execid", [], "any", false, false, false, 89)))) {
            // line 90
            echo "                    <em>default compare</em>
                    ";
            // line 91
            $context["used"] = true;
            // line 92
            echo "                  ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 93
(isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 93, $this->source); })()), "type", [], "any", false, false, false, 93) == "run") && (        // line 94
(isset($context["default_run"]) || array_key_exists("default_run", $context) ? $context["default_run"] : (function () { throw new RuntimeError('Variable "default_run" does not exist.', 94, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 94, $this->source); })()), "execid", [], "any", false, false, false, 94)))) {
            // line 95
            echo "                    <em>default run</em>
                    ";
            // line 96
            $context["used"] = true;
            // line 97
            echo "                  ";
        }
        // line 98
        echo "                  ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 98, $this->source); })()), "type", [], "any", false, false, false, 98) == "compare")) {
            // line 99
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 99, $this->source); })()), "problemsCompare", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 100
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source,                 // line 104
$context["problem"], "probid", [], "any", false, false, false, 104)]), "html", null, true);
                // line 107
                echo "\">
                        p";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 108), "html", null, true);
                echo "
                      </a>
                      ";
                // line 110
                $context["used"] = true;
                // line 111
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                  ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112) == "run")) {
            // line 113
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 113, $this->source); })()), "problemsRun", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 114
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source,                 // line 118
$context["problem"], "probid", [], "any", false, false, false, 118)]), "html", null, true);
                // line 121
                echo "\">
                        p";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 122), "html", null, true);
                echo "
                      </a>
                      ";
                // line 124
                $context["used"] = true;
                // line 125
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                  ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 126, $this->source); })()), "type", [], "any", false, false, false, 126) == "compile")) {
            // line 127
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 127, $this->source); })()), "languages", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 128
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source,                 // line 132
$context["language"], "langid", [], "any", false, false, false, 132)]), "html", null, true);
                // line 135
                echo "\">
                        ";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 136), "html", null, true);
                echo "
                      </a>
                      ";
                // line 138
                $context["used"] = true;
                // line 139
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                  ";
        }
        // line 141
        echo "                  ";
        if ( !(isset($context["used"]) || array_key_exists("used", $context) ? $context["used"] : (function () { throw new RuntimeError('Variable "used" does not exist.', 141, $this->source); })())) {
            // line 142
            echo "                    <span class=\"nodata\">none</span>
                  ";
        }
        // line 144
        echo "                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class=\"mb-4\">";
        // line 151
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 152
            echo "<p>
              ";
            // line 153
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download", ["execId" => twig_get_attribute($this->env, $this->source,             // line 158
(isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 158, $this->source); })()), "execid", [], "any", false, false, false, 158)]), "Download", "secondary", "file-download");
            // line 165
            echo "
              ";
            // line 166
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit", ["execId" => twig_get_attribute($this->env, $this->source,             // line 171
(isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 171, $this->source); })()), "execid", [], "any", false, false, false, 171)]), "Edit", "primary", "edit");
            // line 178
            echo "
              ";
            // line 179
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_delete", ["execId" => twig_get_attribute($this->env, $this->source,             // line 184
(isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 184, $this->source); })()), "execid", [], "any", false, false, false, 184)]), "Delete", "danger", "trash-alt", true);
            // line 192
            echo "
            </p>
          ";
        }
        // line 195
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/executable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 195,  323 => 192,  321 => 184,  320 => 179,  317 => 178,  315 => 171,  314 => 166,  311 => 165,  309 => 158,  308 => 153,  305 => 152,  303 => 151,  295 => 144,  291 => 142,  288 => 141,  285 => 140,  279 => 139,  277 => 138,  272 => 136,  269 => 135,  267 => 132,  265 => 128,  260 => 127,  257 => 126,  251 => 125,  249 => 124,  244 => 122,  241 => 121,  239 => 118,  237 => 114,  232 => 113,  229 => 112,  223 => 111,  221 => 110,  216 => 108,  213 => 107,  211 => 104,  209 => 100,  204 => 99,  201 => 98,  198 => 97,  196 => 96,  193 => 95,  191 => 94,  190 => 93,  188 => 92,  186 => 91,  183 => 90,  181 => 89,  180 => 88,  178 => 87,  176 => 86,  170 => 83,  161 => 76,  159 => 73,  158 => 69,  147 => 61,  136 => 53,  125 => 45,  114 => 37,  103 => 29,  89 => 18,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Executable {{ executable.execid }} - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Executable {{ executable.execid }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  ID
                </th>
                <td>
                  {{ executable.execid }}
                </td>
              </tr>
              <tr>
                <th>
                  Name
                </th>
                <td>
                  {{ executable.description }}
                </td>
              </tr>
              <tr>
                <th>
                  MD5sum
                </th>
                <td>
                  {{ executable.md5sum }}
                </td>
              </tr>
              <tr>
                <th>
                  Type
                </th>
                <td>
                  {{ executable.type }}
                </td>
              </tr>
              <tr>
                <th>
                  Size
                </th>
                <td>
                  {{ executable.zipFileSize }} bytes
                </td>
              </tr>
              <tr>
                <th>
                  Content
                </th>
                <td>
                  <a href=\"{{
                    path(
                      'jury_executable_content',
                      {
                        execId: executable.execid
                      }
                    )
                    }}\">
                    View file contents
                  </a>
                </td>
              </tr>
              <tr>
                <th>
                  Used as {{ executable.type }} script
                </th>
                <td>
                  {% set used = false %}
                  {% if
                    executable.type == 'compare'
                      and default_compare == executable.execid %}
                    <em>default compare</em>
                    {% set used = true %}
                  {% elseif
                    executable.type == 'run'
                      and default_run == executable.execid %}
                    <em>default run</em>
                    {% set used = true %}
                  {% endif %}
                  {% if executable.type == 'compare' %}
                    {% for problem in executable.problemsCompare %}
                      <a href=\"{{
                        path(
                          'jury_problem',
                          {
                            probId: problem.probid
                          }
                        )
                        }}\">
                        p{{ problem.probid }}
                      </a>
                      {% set used = true %}
                    {% endfor %}
                  {% elseif executable.type == 'run' %}
                    {% for problem in executable.problemsRun %}
                      <a href=\"{{
                        path(
                          'jury_problem',
                          {
                            probId: problem.probid
                          }
                        )
                        }}\">
                        p{{ problem.probid }}
                      </a>
                      {% set used = true %}
                    {% endfor %}
                  {% elseif executable.type == 'compile' %}
                    {% for language in executable.languages %}
                      <a href=\"{{
                        path(
                          'jury_language',
                          {
                            langId: language.langid
                          }
                        )
                        }}\">
                        {{ language.langid }}
                      </a>
                      {% set used = true %}
                    {% endfor %}
                  {% endif %}
                  {% if not used %}
                    <span class=\"nodata\">none</span>
                  {% endif %}
                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class=\"mb-4\">
          {%- if is_granted('ROLE_ADMIN') -%}
            <p>
              {{
                button(
                  path(
                    'jury_executable_download',
                    {
                      execId: executable.execid
                    }
                  ),
                  'Download',
                  'secondary',
                  'file-download'
                )
              }}
              {{
                button(
                  path(
                    'jury_executable_edit',
                    {
                      execId: executable.execid
                    }
                  ),
                  'Edit',
                  'primary',
                  'edit'
                )
              }}
              {{
                button(
                  path(
                    'jury_executable_delete',
                    {
                      execId: executable.execid
                    }
                  ),
                  'Delete',
                  'danger',
                  'trash-alt',
                  true
                )
              }}
            </p>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/executable.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/executable.html.twig");
    }
}
