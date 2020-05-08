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

/* jury/contests.html.twig */
class __TwigTemplate_13b75dd3d01d77eac8a11504616088922c6393cda73547bba37e02b487e303bf extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contests.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contests.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Contests - ";
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
        <div class=\"container-fluid dashboard-content\">
          <h1>
            Contests
          </h1>

          <h3>
            Current contests
          </h3>

          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
            // line 27
            echo "            ";
            // line 28
            echo "            <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\" method=\"post\">
              <input type=\"hidden\" name=\"contest\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 29), "html", null, true);
            echo "\" />
              <div class=\"row mb-4\">
                <div class=\"col-lg-12\">
                  <div class=\"card\">
                    <div class=\"card-header\">
                      ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "shortname", [], "any", false, false, false, 34), "html", null, true);
            echo " - c";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 35
$context["contest"], "cid", [], "any", false, false, false, 35), "html", null, true);
            // line 36
            echo ")
                    </div>
                    <div class=\"card-body\">
                      ";
            // line 39
            if (( !twig_get_attribute($this->env, $this->source,             // line 40
$context["contest"], "starttimeEnabled", [], "any", false, false, false, 40) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 41
$context["contest"], "finalizetime", [], "any", false, false, false, 41)))) {
                // line 42
                echo "                        <div class=\"alert alert-warning\">
                          <strong>Warning:</strong> start time is undefined, but
                          contest is finalized!
                        </div>
                      ";
            }
            // line 47
            echo "                      <table class=\"table table-hover\">
                        <tbody>
                          ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contest"], "juryTimeData", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["type"] => $context["data"]) {
                // line 50
                echo "                            <tr>
                              <td class=\"";
                // line 51
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 51), "")) : ("")), "html", null, true);
                echo "\">
                                ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", true, true, false, 52)) {
                    // line 53
                    echo "                                  <i class=\"fas fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", false, false, false, 53), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 55
                echo "                              </td>
                              <td class=\"";
                // line 56
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 56), "")) : ("")), "html", null, true);
                echo "\">
                                <b>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 57), "html", null, true);
                echo ":</b>
                              </td>
                              <td class=\"";
                // line 59
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 59), "")) : ("")), "html", null, true);
                echo "\">
                                ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "time", [], "any", false, false, false, 60), "html", null, true);
                echo "
                              </td>
                              ";
                // line 62
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 63
                    echo "                                <td>
                                  ";
                    // line 64
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "show_button", [], "any", false, false, false, 64)) {
                        // line 65
                        echo "                                    <input type=\"submit\"
                                      class=\"btn btn-primary btn-sm\"
                                      name=\"donow[";
                        // line 67
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "]\"
                                      value=\"";
                        // line 68
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo " now\" />
                                  ";
                    }
                    // line 70
                    echo "                                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", true, true, false, 70)) {
                        // line 71
                        echo "                                    <input type=\"submit\"
                                      class=\"btn btn-primary btn-sm\"
                                      name=\"donow[";
                        // line 73
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 73), "type", [], "any", false, false, false, 73), "html", null, true);
                        echo "]\"
                                      value=\"";
                        // line 74
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 74), "label", [], "any", false, false, false, 74), "html", null, true);
                        echo "\" />
                                  ";
                    }
                    // line 76
                    echo "                                </td>
                              ";
                }
                // line 78
                echo "                            </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "            ";
            if (twig_test_empty((isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 88, $this->source); })()))) {
                // line 89
                echo "              <div class=\"alert alert-danger\">
                No upcoming contest
              </div>
            ";
            } else {
                // line 93
                echo "              <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br />
                <p>
                  <i>
                    ";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 98
(isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 98, $this->source); })()), "shortname", [], "any", false, false, false, 98), "html", null, true);
                // line 99
                echo ")
                  </i>; active from ";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source,                 // line 101
(isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 101, $this->source); })()), "activatetime", [], "any", false, false, false, 101), "%a %d %b %Y %T %Z"), "html", null, true);
                // line 102
                echo "
                </p>
                <form action=\"";
                // line 104
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
                echo "\" method=\"post\">
                  <input type=\"hidden\"
                    name=\"contest\"
                    value=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 107, $this->source); })()), "cid", [], "any", false, false, false, 107), "html", null, true);
                echo "\" />
                  <input type=\"submit\"
                    class=\"btn btn-primary\"
                    name=\"donow[activate]\"
                    value=\"Activate now\" />
                </form>
              </div>
            ";
            }
            // line 115
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "          <div style=\"overflow:auto\">
            <h3>
              All available contests
            </h3>

            ";
        // line 121
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["contests_table"]) || array_key_exists("contests_table", $context) ? $context["contests_table"] : (function () { throw new RuntimeError('Variable "contests_table" does not exist.', 121, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 121, $this->source); })()), (isset($context["num_actions"]) || array_key_exists("num_actions", $context) ? $context["num_actions"] : (function () { throw new RuntimeError('Variable "num_actions" does not exist.', 121, $this->source); })())], 121, $context, $this->getSourceContext());
        echo "
          </div>
          ";
        // line 123
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 124
            echo "            <p>
              ";
            // line 125
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_add"), "Add new contest", "primary", "plus");
            // line 132
            echo "
            </p>
          ";
        }
        // line 135
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/contests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 135,  313 => 132,  311 => 125,  308 => 124,  306 => 123,  301 => 121,  294 => 116,  288 => 115,  277 => 107,  271 => 104,  267 => 102,  265 => 101,  264 => 100,  261 => 99,  259 => 98,  256 => 97,  250 => 93,  244 => 89,  241 => 88,  229 => 80,  222 => 78,  218 => 76,  213 => 74,  209 => 73,  205 => 71,  202 => 70,  197 => 68,  193 => 67,  189 => 65,  187 => 64,  184 => 63,  182 => 62,  177 => 60,  173 => 59,  168 => 57,  164 => 56,  161 => 55,  155 => 53,  153 => 52,  149 => 51,  146 => 50,  142 => 49,  138 => 47,  131 => 42,  129 => 41,  128 => 40,  127 => 39,  122 => 36,  120 => 35,  115 => 34,  107 => 29,  102 => 28,  100 => 27,  95 => 26,  81 => 14,  77 => 13,  71 => 10,  66 => 9,  62 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Contests - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"container-fluid dashboard-content\">
          <h1>
            Contests
          </h1>

          <h3>
            Current contests
          </h3>

          {% for contest in current_contests %}
            {# TODO: at some point use real Symfony forms here? Is maybe hard because of all the submit buttons... #}
            <form action=\"{{ path('jury_contests') }}\" method=\"post\">
              <input type=\"hidden\" name=\"contest\" value=\"{{ contest.cid }}\" />
              <div class=\"row mb-4\">
                <div class=\"col-lg-12\">
                  <div class=\"card\">
                    <div class=\"card-header\">
                      {{ contest.name }} ({{ contest.shortname }} - c{{
                        contest.cid
                      }})
                    </div>
                    <div class=\"card-body\">
                      {% if
                        not contest.starttimeEnabled
                          and contest.finalizetime is not empty %}
                        <div class=\"alert alert-warning\">
                          <strong>Warning:</strong> start time is undefined, but
                          contest is finalized!
                        </div>
                      {% endif %}
                      <table class=\"table table-hover\">
                        <tbody>
                          {% for type, data in contest.juryTimeData %}
                            <tr>
                              <td class=\"{{ data.class|default('') }}\">
                                {% if data.icon is defined %}
                                  <i class=\"fas fa-{{ data.icon }}\"></i>
                                {% endif %}
                              </td>
                              <td class=\"{{ data.class|default('') }}\">
                                <b>{{ data.label }}:</b>
                              </td>
                              <td class=\"{{ data.class|default('') }}\">
                                {{ data.time }}
                              </td>
                              {% if is_granted('ROLE_ADMIN') %}
                                <td>
                                  {% if data.show_button %}
                                    <input type=\"submit\"
                                      class=\"btn btn-primary btn-sm\"
                                      name=\"donow[{{ type }}]\"
                                      value=\"{{ type }} now\" />
                                  {% endif %}
                                  {% if data.extra_button is defined %}
                                    <input type=\"submit\"
                                      class=\"btn btn-primary btn-sm\"
                                      name=\"donow[{{ data.extra_button.type }}]\"
                                      value=\"{{ data.extra_button.label }}\" />
                                  {% endif %}
                                </td>
                              {% endif %}
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          {% else %}
            {% if upcoming_contest is empty %}
              <div class=\"alert alert-danger\">
                No upcoming contest
              </div>
            {% else %}
              <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br />
                <p>
                  <i>
                    {{ upcoming_contest.name }} ({{
                      upcoming_contest.shortname
                    }})
                  </i>; active from {{
                    upcoming_contest.activatetime|printtime('%a %d %b %Y %T %Z')
                  }}
                </p>
                <form action=\"{{ path('jury_contests') }}\" method=\"post\">
                  <input type=\"hidden\"
                    name=\"contest\"
                    value=\"{{ upcoming_contest.cid }}\" />
                  <input type=\"submit\"
                    class=\"btn btn-primary\"
                    name=\"donow[activate]\"
                    value=\"Activate now\" />
                </form>
              </div>
            {% endif %}
          {% endfor %}
          <div style=\"overflow:auto\">
            <h3>
              All available contests
            </h3>

            {{ macros.table(contests_table, table_fields, num_actions) }}
          </div>
          {% if is_granted('ROLE_ADMIN') %}
            <p>
              {{
                button(
                  path('jury_contest_add'),
                  'Add new contest',
                  'primary',
                  'plus'
                )
              }}
            </p>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/contests.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/contests.html.twig");
    }
}
