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
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Jury Interface";
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<!-- Body -->
        <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                <h1>TDMU Judge Jury Interface</h1>

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 16, $this->source); })()));
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
            // line 17
            echo "                    ";
            $this->loadTemplate("partials/alert.html.twig", "jury/index.html.twig", 17)->display(twig_array_merge($context, ["type" => "danger", "message" => $context["error"]]));
            // line 18
            echo "                ";
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
        // line 19
        echo "
                <div class=\"row equal mt-3\">
                    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
                        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 23
            echo "                        <div class=\"card mb-3\">
                            <div class=\"card-header\">
                                Before contest:
                            </div>
                            <div class=\"card-body\">
                                <ul>
                                    <li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\">Contests</a></li>
                                    <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executables");
            echo "\">Executables</a></li>
                                    <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\">Judgehosts</a></li>
                                    <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restrictions");
            echo "\">Judgehost Restrictions</a></li>
                                    <li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_languages");
            echo "\">Languages</a></li>
                                    <li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
            echo "\">Problems</a></li>
                                    <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_users");
            echo "\">Users</a></li>
                                    <li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_teams");
            echo "\">Teams</a></li>
                                    <li><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
            echo "\">Team Categories</a></li>
                                    <li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliations");
            echo "\">Team Affiliations</a></li>
                                </ul>
                            </div>
                        </div>
                        ";
        }
        // line 43
        echo "
                        <div class=\"card mb-3\">
                            <div class=\"card-header\">
                                During contest:
                            </div>
                            <div class=\"card-body\">
                                <ul>
                                    <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
        echo "\">Balloon Status</a></li>
                                    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 52
            echo "                                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\">Clarifications</a></li>
                                        <li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\">Internal Errors</a></li>
                                    ";
        }
        // line 55
        echo "                                    ";
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "                                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_print");
            echo "\">Print</a></li>
                                    ";
        }
        // line 58
        echo "                                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 59
            echo "                                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\">Rejudgings</a></li>
                                        <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">Scoreboard</a></li>
                                        <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_index");
            echo "\">Statistics/Analysis</a></li>
                                        <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">Submissions</a></li>
                                        ";
            // line 63
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 63, $this->source); })())) {
                // line 64
                echo "                                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">Shadow Differences</a></li>
                                        ";
            }
            // line 66
            echo "                                    ";
        }
        // line 67
        echo "                                </ul>
                            </div>
                        </div>
                    </div>

                  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
                    ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 74
            echo "                    <div class=\"card mb-3\">
                      <div class=\"card-header\">
                        Administrator:
                      </div>
                      <div class=\"card-body\">
                        <ul>
                          <li><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config");
            echo "\">Configuration settings</a></li>
                          <li><a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_check");
            echo "\">Config checker</a></li>
                          <li><a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export");
            echo "\">Import / export</a></li>
                          <li><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_generate_passwords");
            echo "\">Manage team passwords</a></li>
                          <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\">Refresh scoreboard cache</a></li>
                          <li><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
            echo "\">Judging verifier</a></li>
                          <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog");
            echo "\">Audit log</a></li>
                        </ul>
                      </div>
                    </div>
                    ";
        }
        // line 91
        echo "
                    <div class=\"card mb-3\">
                      <div class=\"card-header\">
                        Documentation:
                      </div>
                      <div class=\"card-body\">
                        <ul>
                        <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/build/html/index.html"), "html", null, true);
        echo "\">TDMU Judge manual</a></li>
                        <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/team/team-manual.pdf"), "html", null, true);
        echo "\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
                        <li><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.swagger_ui");
        echo "\">API documentation</a><br />
                            See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">ICPC Contest API</a>.</li>
                        </ul>
                      </div>
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
        return array (  303 => 100,  299 => 99,  295 => 98,  286 => 91,  278 => 86,  274 => 85,  270 => 84,  266 => 83,  262 => 82,  258 => 81,  254 => 80,  246 => 74,  244 => 73,  236 => 67,  233 => 66,  227 => 64,  225 => 63,  221 => 62,  217 => 61,  213 => 60,  208 => 59,  205 => 58,  199 => 56,  196 => 55,  191 => 53,  186 => 52,  184 => 51,  180 => 50,  171 => 43,  163 => 38,  159 => 37,  155 => 36,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  119 => 23,  117 => 22,  112 => 19,  98 => 18,  95 => 17,  78 => 16,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}{{ parent() }} - Jury Interface{% endblock %}

{% block extrahead %}
{{ parent() }}
{% endblock %}

{% block content %}
<!-- Body -->
        <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                <h1>TDMU Judge Jury Interface</h1>

                {% for error in errors %}
                    {% include 'partials/alert.html.twig' with {type: 'danger', message: error} %}
                {% endfor %}

                <div class=\"row equal mt-3\">
                    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
                        {% if is_granted('ROLE_JURY') %}
                        <div class=\"card mb-3\">
                            <div class=\"card-header\">
                                Before contest:
                            </div>
                            <div class=\"card-body\">
                                <ul>
                                    <li><a href=\"{{ path('jury_contests') }}\">Contests</a></li>
                                    <li><a href=\"{{ path('jury_executables') }}\">Executables</a></li>
                                    <li><a href=\"{{ path('jury_judgehosts') }}\">Judgehosts</a></li>
                                    <li><a href=\"{{ path('jury_judgehost_restrictions') }}\">Judgehost Restrictions</a></li>
                                    <li><a href=\"{{ path('jury_languages') }}\">Languages</a></li>
                                    <li><a href=\"{{ path('jury_problems') }}\">Problems</a></li>
                                    <li><a href=\"{{ path('jury_users') }}\">Users</a></li>
                                    <li><a href=\"{{ path('jury_teams') }}\">Teams</a></li>
                                    <li><a href=\"{{ path('jury_team_categories') }}\">Team Categories</a></li>
                                    <li><a href=\"{{ path('jury_team_affiliations') }}\">Team Affiliations</a></li>
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
                                    <li><a href=\"{{ path('jury_balloons') }}\">Balloon Status</a></li>
                                    {% if is_granted('ROLE_JURY') %}
                                        <li><a href=\"{{ path('jury_clarifications') }}\">Clarifications</a></li>
                                        <li><a href=\"{{ path('jury_internal_errors') }}\">Internal Errors</a></li>
                                    {% endif %}
                                    {% if have_printing %}
                                        <li><a href=\"{{ path('jury_print') }}\">Print</a></li>
                                    {% endif %}
                                    {% if is_granted('ROLE_JURY') %}
                                        <li><a href=\"{{ path('jury_rejudgings') }}\">Rejudgings</a></li>
                                        <li><a href=\"{{ path('jury_scoreboard') }}\">Scoreboard</a></li>
                                        <li><a href=\"{{ path('analysis_index') }}\">Statistics/Analysis</a></li>
                                        <li><a href=\"{{ path('jury_submissions') }}\">Submissions</a></li>
                                        {% if show_shadow_differences %}
                                            <li><a href=\"{{ path('jury_shadow_differences') }}\">Shadow Differences</a></li>
                                        {% endif %}
                                    {% endif %}
                                </ul>
                            </div>
                        </div>
                    </div>

                  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
                    {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"card mb-3\">
                      <div class=\"card-header\">
                        Administrator:
                      </div>
                      <div class=\"card-body\">
                        <ul>
                          <li><a href=\"{{ path('jury_config') }}\">Configuration settings</a></li>
                          <li><a href=\"{{ path('jury_config_check') }}\">Config checker</a></li>
                          <li><a href=\"{{ path('jury_import_export') }}\">Import / export</a></li>
                          <li><a href=\"{{ path('jury_generate_passwords') }}\">Manage team passwords</a></li>
                          <li><a href=\"{{ path('jury_refresh_cache') }}\">Refresh scoreboard cache</a></li>
                          <li><a href=\"{{ path('jury_judging_verifier') }}\">Judging verifier</a></li>
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
                        <li><a href=\"{{ asset('doc/manual/build/html/index.html') }}\">TDMU Judge manual</a></li>
                        <li><a href=\"{{ asset('doc/team/team-manual.pdf') }}\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
                        <li><a href=\"{{ path('app.swagger_ui') }}\">API documentation</a><br />
                            See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">ICPC Contest API</a>.</li>
                        </ul>
                      </div>
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
