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
        echo "  <!-- Body -->
  <div class=\"dashboard-ecommerce\">
    <div class=\"container-fluid dashboard-content\">
      <h1>
        TDMU Judge Jury Interface
      </h1>

      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 19, $this->source); })()));
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
            // line 20
            echo "        ";
            $this->loadTemplate("partials/alert.html.twig", "jury/index.html.twig", 20)->display(twig_array_merge($context, ["type" => "danger", "message" =>             // line 22
$context["error"]]));
            // line 24
            echo "      ";
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
        // line 25
        echo "
      <div class=\"row equal mt-3\">
        <div class=\"col-lg-6 col-md-5 col-sm-6 mt-3\">
          ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 29
            echo "            <div class=\"card mb-3\">
              <div class=\"card-header\">
                Before contest:
              </div>
              <div class=\"card-body\">
                <ul>
                  <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\">Contests</a></li>
                  <li>
                    <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executables");
            echo "\">Executables</a>
                  </li>
                  <li>
                    <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\">Judgehosts</a>
                  </li>
                  <li>
                    <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restrictions");
            echo "\">
                      Judgehost Restrictions
                    </a>
                  </li>
                  <li><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_languages");
            echo "\">Languages</a></li>
                  <li><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
            echo "\">Problems</a></li>
                  <li><a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_users");
            echo "\">Users</a></li>
                  <li><a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_teams");
            echo "\">Teams</a></li>
                  <li>
                    <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
            echo "\">
                      Team Categories
                    </a>
                  </li>
                  <li>
                    <a href=\"";
            // line 57
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
        // line 65
        echo "
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              During contest:
            </div>
            <div class=\"card-body\">
              <ul>
                <li>
                  <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
        echo "\">Balloon Status</a>
                </li>
                ";
        // line 75
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 76
            echo "                  <li>
                    <a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\">
                      Clarifications
                    </a>
                  </li>
                  <li>
                    <a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\">
                      Internal Errors
                    </a>
                  </li>
                ";
        }
        // line 87
        echo "                ";
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 87, $this->source); })())) {
            // line 88
            echo "                  <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_print");
            echo "\">Print</a></li>
                ";
        }
        // line 90
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 91
            echo "                  <li>
                    <a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\">Rejudgings</a>
                  </li>
                  <li>
                    <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">Scoreboard</a>
                  </li>
                  <li>
                    <a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_index");
            echo "\">
                      Statistics/Analysis
                    </a>
                  </li>
                  <li>
                    <a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">Submissions</a>
                  </li>
                  ";
            // line 105
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 105, $this->source); })())) {
                // line 106
                echo "                    <li>
                      <a href=\"";
                // line 107
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">
                        Shadow Differences
                      </a>
                    </li>
                  ";
            }
            // line 112
            echo "                ";
        }
        // line 113
        echo "              </ul>
            </div>
          </div>
        </div>

        <div class=\"col-lg-6 col-md-5 col-sm-6 mt-3\">
          ";
        // line 119
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 120
            echo "            <div class=\"card mb-3\">
              <div class=\"card-header\">
                Administrator:
              </div>
              <div class=\"card-body\">
                <ul>
                  <li>
                    <a href=\"";
            // line 127
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config");
            echo "\">
                      Configuration settings
                    </a>
                  </li>
                  <li>
                    <a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_check");
            echo "\">Config checker</a>
                  </li>
                  <li>
                    <a href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export");
            echo "\">
                      Import / export
                    </a>
                  </li>
                  <li>
                    <a href=\"";
            // line 140
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_generate_passwords");
            echo "\">
                      Manage team passwords
                    </a>
                  </li>
                  <li>
                    <a href=\"";
            // line 145
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\">
                      Refresh scoreboard cache
                    </a>
                  </li>
                  <li>
                    <a href=\"";
            // line 150
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
            echo "\">
                      Judging verifier
                    </a>
                  </li>
                  <li><a href=\"";
            // line 154
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog");
            echo "\">Audit log</a></li>
                </ul>
              </div>
            </div>
          ";
        }
        // line 159
        echo "
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              Documentation:
            </div>
            <div class=\"card-body\">
              <ul>
                <li>
                  <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/build/html/index.html"), "html", null, true);
        echo "\">
                    TDMU Judge manual
                  </a>
                </li>
                <li>
                  <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/team/team-manual.pdf"), "html", null, true);
        echo "\">
                    Team manual <i class=\"fas fa-file-pdf\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.swagger_ui");
        echo "\">API documentation</a><br />
                  See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">
                    ICPC Contest API
                  </a>.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End -->
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
        return array (  383 => 177,  375 => 172,  367 => 167,  357 => 159,  349 => 154,  342 => 150,  334 => 145,  326 => 140,  318 => 135,  312 => 132,  304 => 127,  295 => 120,  293 => 119,  285 => 113,  282 => 112,  274 => 107,  271 => 106,  269 => 105,  264 => 103,  256 => 98,  250 => 95,  244 => 92,  241 => 91,  238 => 90,  232 => 88,  229 => 87,  221 => 82,  213 => 77,  210 => 76,  208 => 75,  203 => 73,  193 => 65,  182 => 57,  174 => 52,  169 => 50,  165 => 49,  161 => 48,  157 => 47,  150 => 43,  144 => 40,  138 => 37,  133 => 35,  125 => 29,  123 => 28,  118 => 25,  104 => 24,  102 => 22,  100 => 20,  83 => 19,  74 => 12,  70 => 11,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
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
                  <li><a href=\"{{ path('jury_contests') }}\">Contests</a></li>
                  <li>
                    <a href=\"{{ path('jury_executables') }}\">Executables</a>
                  </li>
                  <li>
                    <a href=\"{{ path('jury_judgehosts') }}\">Judgehosts</a>
                  </li>
                  <li>
                    <a href=\"{{ path('jury_judgehost_restrictions') }}\">
                      Judgehost Restrictions
                    </a>
                  </li>
                  <li><a href=\"{{ path('jury_languages') }}\">Languages</a></li>
                  <li><a href=\"{{ path('jury_problems') }}\">Problems</a></li>
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
                <li>
                  <a href=\"{{ path('jury_balloons') }}\">Balloon Status</a>
                </li>
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
                  <li>
                    <a href=\"{{ path('jury_rejudgings') }}\">Rejudgings</a>
                  </li>
                  <li>
                    <a href=\"{{ path('jury_scoreboard') }}\">Scoreboard</a>
                  </li>
                  <li>
                    <a href=\"{{ path('analysis_index') }}\">
                      Statistics/Analysis
                    </a>
                  </li>
                  <li>
                    <a href=\"{{ path('jury_submissions') }}\">Submissions</a>
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
                  <li>
                    <a href=\"{{ path('jury_config_check') }}\">Config checker</a>
                  </li>
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
                  <li>
                    <a href=\"{{ path('jury_judging_verifier') }}\">
                      Judging verifier
                    </a>
                  </li>
                  <li><a href=\"{{ path('jury_auditlog') }}\">Audit log</a></li>
                </ul>
              </div>
            </div>
          {% endif %}

          <div class=\"card mb-3\">
            <div class=\"card-header\">
              Documentation:
            </div>
            <div class=\"card-body\">
              <ul>
                <li>
                  <a href=\"{{ asset('doc/manual/build/html/index.html') }}\">
                    TDMU Judge manual
                  </a>
                </li>
                <li>
                  <a href=\"{{ asset('doc/team/team-manual.pdf') }}\">
                    Team manual <i class=\"fas fa-file-pdf\"></i>
                  </a>
                </li>
                <li>
                  <a href=\"{{ path('app.swagger_ui') }}\">API documentation</a><br />
                  See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">
                    ICPC Contest API
                  </a>.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End -->
{% endblock %}
", "jury/index.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/index.html.twig");
    }
}
