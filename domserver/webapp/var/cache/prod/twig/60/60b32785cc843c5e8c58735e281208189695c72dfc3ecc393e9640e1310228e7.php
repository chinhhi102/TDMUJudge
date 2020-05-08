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

/* jury/index.html.twig */
class __TwigTemplate_372b703a1e3adb083ea37f0c122178c056081465f6b65ab6eb67ada5ca60c411 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Jury Interface
";
    }

    // line 7
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- Body -->
        <div class=\"dashboard-ecommerce\">
          <div class=\"container-fluid dashboard-content\">
            <h1>
              TDMU Judge Jury Interface
            </h1>

            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 22, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 23
            echo "              ";
            $this->loadTemplate("partials/alert.html.twig", "jury/index.html.twig", 23)->display(twig_array_merge($context, ["type" => "danger", "message" =>             // line 25
$context["error"]]));
            // line 27
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
            <div class=\"row equal mt-3\">
              <div class=\"col-lg-6 col-md-5 col-sm-6 mt-3\">
                ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 32
            echo "                  <div class=\"card mb-3\">
                    <div class=\"card-header\">
                      Before contest:
                    </div>
                    <div class=\"card-body\">
                      <ul>
                        <li>
                          <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\">Contests</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executables");
            echo "\">
                            Executables
                          </a>
                        </li>
                        <li>
                          <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\">Judgehosts</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restrictions");
            echo "\">
                            Judgehost Restrictions
                          </a>
                        </li>
                        ";
            // line 57
            echo "                        <li>
                          <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
            echo "\">Problems</a>
                        </li>
                        <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_users");
            echo "\">Users</a></li>
                        <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_teams");
            echo "\">Teams</a></li>
                        <li>
                          <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
            echo "\">
                            Team Categories
                          </a>
                        </li>
                        <li>
                          <a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliations");
            echo "\">
                            Team Affiliations
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                ";
        }
        // line 76
        echo "
                <div class=\"card mb-3\">
                  <div class=\"card-header\">
                    During contest:
                  </div>
                  <div class=\"card-body\">
                    <ul>
                      ";
        // line 86
        echo "                      ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 87
            echo "                        <li>
                          <a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\">
                            Clarifications
                          </a>
                        </li>
                        <li>
                          <a href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\">
                            Internal Errors
                          </a>
                        </li>
                      ";
        }
        // line 98
        echo "                      ";
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 98, $this->source); })())) {
            // line 99
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_print");
            echo "\">Print</a></li>
                      ";
        }
        // line 101
        echo "                      ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 102
            echo "                        ";
            // line 105
            echo "                        <li>
                          <a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">Scoreboard</a>
                        </li>
                        <li>
                          <a href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_index");
            echo "\">
                            Statistics/Analysis
                          </a>
                        </li>
                        <li>
                          <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">
                            Submissions
                          </a>
                        </li>
                        ";
            // line 118
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 118, $this->source); })())) {
                // line 119
                echo "                          <li>
                            <a href=\"";
                // line 120
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">
                              Shadow Differences
                            </a>
                          </li>
                        ";
            }
            // line 125
            echo "                      ";
        }
        // line 126
        echo "                    </ul>
                  </div>
                </div>
              </div>

              <div class=\"col-lg-6 col-md-5 col-sm-6 mt-3\">
                ";
        // line 132
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 133
            echo "                  <div class=\"card mb-3\">
                    <div class=\"card-header\">
                      Administrator:
                    </div>
                    <div class=\"card-body\">
                      <ul>
                        <li>
                          <a href=\"";
            // line 140
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config");
            echo "\">
                            Configuration settings
                          </a>
                        </li>
                        ";
            // line 149
            echo "                        <li>
                          <a href=\"";
            // line 150
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export");
            echo "\">
                            Import / export
                          </a>
                        </li>
                        <li>
                          <a href=\"";
            // line 155
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_generate_passwords");
            echo "\">
                            Manage team passwords
                          </a>
                        </li>
                        <li>
                          <a href=\"";
            // line 160
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\">
                            Refresh scoreboard cache
                          </a>
                        </li>
                        ";
            // line 169
            echo "                        ";
            // line 172
            echo "                      </ul>
                    </div>
                  </div>
                ";
        }
        // line 176
        echo "
                ";
        // line 208
        echo "              </div>
            </div>
          </div>
        </div>
        <!-- End -->
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 208,  345 => 176,  339 => 172,  337 => 169,  330 => 160,  322 => 155,  314 => 150,  311 => 149,  304 => 140,  295 => 133,  293 => 132,  285 => 126,  282 => 125,  274 => 120,  271 => 119,  269 => 118,  262 => 114,  254 => 109,  248 => 106,  245 => 105,  243 => 102,  240 => 101,  234 => 99,  231 => 98,  223 => 93,  215 => 88,  212 => 87,  209 => 86,  200 => 76,  189 => 68,  181 => 63,  176 => 61,  172 => 60,  167 => 58,  164 => 57,  157 => 50,  151 => 47,  143 => 42,  137 => 39,  128 => 32,  126 => 31,  121 => 28,  107 => 27,  105 => 25,  103 => 23,  86 => 22,  74 => 12,  70 => 11,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}

{% block title %}
  {{ parent() }} - Jury Interface
{% endblock %}

{% block extrahead %}
  {{ parent() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- Body -->
        <div class=\"dashboard-ecommerce\">
          <div class=\"container-fluid dashboard-content\">
            <h1>
              TDMU Judge Jury Interface
            </h1>

            {% for error in errors %}
              {% include 'partials/alert.html.twig' with {
                type: 'danger',
                message: error
              } %}
            {% endfor %}

            <div class=\"row equal mt-3\">
              <div class=\"col-lg-6 col-md-5 col-sm-6 mt-3\">
                {% if is_granted('ROLE_JURY') %}
                  <div class=\"card mb-3\">
                    <div class=\"card-header\">
                      Before contest:
                    </div>
                    <div class=\"card-body\">
                      <ul>
                        <li>
                          <a href=\"{{ path('jury_contests') }}\">Contests</a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_executables') }}\">
                            Executables
                          </a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_judgehosts') }}\">Judgehosts</a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_judgehost_restrictions') }}\">
                            Judgehost Restrictions
                          </a>
                        </li>
                        {# <li>
                          <a href=\"{{ path('jury_languages') }}\">Languages</a>
                        </li> #}
                        <li>
                          <a href=\"{{ path('jury_problems') }}\">Problems</a>
                        </li>
                        <li><a href=\"{{ path('jury_users') }}\">Users</a></li>
                        <li><a href=\"{{ path('jury_teams') }}\">Teams</a></li>
                        <li>
                          <a href=\"{{ path('jury_team_categories') }}\">
                            Team Categories
                          </a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_team_affiliations') }}\">
                            Team Affiliations
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                {% endif %}

                <div class=\"card mb-3\">
                  <div class=\"card-header\">
                    During contest:
                  </div>
                  <div class=\"card-body\">
                    <ul>
                      {# <li>
                        <a href=\"{{ path('jury_balloons') }}\">Balloon Status</a>
                      </li> #}
                      {% if is_granted('ROLE_JURY') %}
                        <li>
                          <a href=\"{{ path('jury_clarifications') }}\">
                            Clarifications
                          </a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_internal_errors') }}\">
                            Internal Errors
                          </a>
                        </li>
                      {% endif %}
                      {% if have_printing %}
                        <li><a href=\"{{ path('jury_print') }}\">Print</a></li>
                      {% endif %}
                      {% if is_granted('ROLE_JURY') %}
                        {# <li>
                          <a href=\"{{ path('jury_rejudgings') }}\">Rejudgings</a>
                        </li> #}
                        <li>
                          <a href=\"{{ path('jury_scoreboard') }}\">Scoreboard</a>
                        </li>
                        <li>
                          <a href=\"{{ path('analysis_index') }}\">
                            Statistics/Analysis
                          </a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_submissions') }}\">
                            Submissions
                          </a>
                        </li>
                        {% if show_shadow_differences %}
                          <li>
                            <a href=\"{{ path('jury_shadow_differences') }}\">
                              Shadow Differences
                            </a>
                          </li>
                        {% endif %}
                      {% endif %}
                    </ul>
                  </div>
                </div>
              </div>

              <div class=\"col-lg-6 col-md-5 col-sm-6 mt-3\">
                {% if is_granted('ROLE_ADMIN') %}
                  <div class=\"card mb-3\">
                    <div class=\"card-header\">
                      Administrator:
                    </div>
                    <div class=\"card-body\">
                      <ul>
                        <li>
                          <a href=\"{{ path('jury_config') }}\">
                            Configuration settings
                          </a>
                        </li>
                        {# <li>
                          <a href=\"{{ path('jury_config_check') }}\">
                            Config checker
                          </a>
                        </li> #}
                        <li>
                          <a href=\"{{ path('jury_import_export') }}\">
                            Import / export
                          </a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_generate_passwords') }}\">
                            Manage team passwords
                          </a>
                        </li>
                        <li>
                          <a href=\"{{ path('jury_refresh_cache') }}\">
                            Refresh scoreboard cache
                          </a>
                        </li>
                        {# <li>
                          <a href=\"{{ path('jury_judging_verifier') }}\">
                            Judging verifier
                          </a>
                        </li> #}
                        {# <li>
                          <a href=\"{{ path('jury_auditlog') }}\">Audit log</a>
                        </li> #}
                      </ul>
                    </div>
                  </div>
                {% endif %}

                {# <div class=\"card mb-3\">
                  <div class=\"card-header\">
                    Documentation:
                  </div>
                  <div class=\"card-body\">
                    <ul>
                      <li>
                        <a href=\"{{
                          asset(
                            'doc/manual/build/html/index.html'
                          )
                          }}\">
                          TDMU Judge manual
                        </a>
                      </li>
                      <li>
                        <a href=\"{{ asset('doc/team/team-manual.pdf') }}\">
                          Team manual <i class=\"fas fa-file-pdf\"></i>
                        </a>
                      </li>
                      <li>
                        <a href=\"{{ path('app.swagger_ui') }}\">
                          API documentation
                        </a><br />
                        See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">
                          ICPC Contest API
                        </a>.
                      </li>
                    </ul>
                  </div>
                </div> #}
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
      </div>
    </div>
  </div>
{% endblock %}
", "jury/index.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/index.html.twig");
    }
}
