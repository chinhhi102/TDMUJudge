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

/* jury/import_export.html.twig */
class __TwigTemplate_0d9d349a3090dc202aff440a13a895ba93180d79a1f29d17d9e9b363ff753528 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/import_export.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  Import and export - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
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
        <h1>
          Import and export
        </h1>

        <h3>
          Import / export via file down/upload
        </h3>

        <ul>
          <li>
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export_yaml");
        echo "\">
              Contest data (<code>
                contest.yaml
              </code>)
            </a>
          </li>
          <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
        echo "\">Problem archive</a></li>
          <li>
            Tab separated, export:<ul>
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "groups", 1 => "teams", 2 => "scoreboard"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 31
            echo "                <li>
                  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" =>             // line 36
$context["type"]]), "html", null, true);
            // line 39
            echo "\">
                    <code>
                      ";
            // line 41
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo ".tsv
                    </code>
                  </a>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              <li>
                <code>
                  results.tsv
                </code>for sort order<ul>
                  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 51
            echo "                    <li>
                      <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => "results"]);
            // line 59
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">
                        ";
            // line 60
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "
                      </a>
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </ul>
              </li>
            </ul>
          </li>
          <li>
            HTML, export:<ul>
              <li>
                <code>
                  results.html
                </code>for sort order<ul>
                  ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 75
            echo "                    <li>
                      <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results"]);
            // line 83
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">
                        ";
            // line 84
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "
                      </a>
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </ul>
              </li>
              <li>
                <code>
                  results.html
                </code>for on ICPC site for sort order<ul>
                  ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 95
            echo "                    <li>
                      <a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results-icpc"]);
            // line 103
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">
                        ";
            // line 104
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "
                      </a>
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                </ul>
              </li>
              <li>
                <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "clarifications"]);
        // line 118
        echo "\"
                  target=\"_blank\">
                  <code>
                    clarifications.html
                  </code>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <h4>
          Tab-separated import
        </h4>
        <div class=\"row\">
          <div class=\"col-md-6\">
            ";
        // line 134
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tsv_form"]) || array_key_exists("tsv_form", $context) ? $context["tsv_form"] : (function () { throw new RuntimeError('Variable "tsv_form" does not exist.', 134, $this->source); })()), 'form');
        echo "
          </div>
        </div>

        <h3>
          Import teams / upload standings from / to icpc.baylor.edu
        </h3>

        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"alert alert-info\">
              Create a \"Web Services Token\" with appropriate rights in the
              \"Export\" section for your contest at <a href=\"https://icpc.baylor.edu/login\"
                target=\"_blank\">
                https://icpc.baylor.edu/login
              </a>. You can find the Contest ID (e.g.<code>
                Southwestern-Europe-2014
              </code>) in the URL.
            </div>

            ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 154, $this->source); })()), 'form_start');
        echo "
            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 155, $this->source); })()), "contest_id", [], "any", false, false, false, 155), 'row');
        echo "
            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 156, $this->source); })()), "access_token", [], "any", false, false, false, 156), 'row');
        echo "
            <div class=\"form-group\">
              ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 158, $this->source); })()), "fetch_teams", [], "any", false, false, false, 158), 'widget');
        echo "
              ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 159, $this->source); })()), "upload_standings", [], "any", false, false, false, 159), 'widget');
        echo "
            </div>
            ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 161, $this->source); })()), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/import_export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 161,  280 => 159,  276 => 158,  271 => 156,  267 => 155,  263 => 154,  240 => 134,  222 => 118,  220 => 111,  215 => 108,  205 => 104,  200 => 103,  198 => 96,  195 => 95,  191 => 94,  183 => 88,  173 => 84,  168 => 83,  166 => 76,  163 => 75,  159 => 74,  147 => 64,  137 => 60,  132 => 59,  130 => 52,  127 => 51,  123 => 50,  117 => 46,  106 => 41,  102 => 39,  100 => 36,  99 => 32,  96 => 31,  92 => 30,  86 => 27,  77 => 21,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}

{% block title %}
  Import and export - {{ parent() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h1>
          Import and export
        </h1>

        <h3>
          Import / export via file down/upload
        </h3>

        <ul>
          <li>
            <a href=\"{{ path('jury_import_export_yaml') }}\">
              Contest data (<code>
                contest.yaml
              </code>)
            </a>
          </li>
          <li><a href=\"{{ path('jury_problems') }}\">Problem archive</a></li>
          <li>
            Tab separated, export:<ul>
              {% for type in ['groups', 'teams', 'scoreboard'] %}
                <li>
                  <a href=\"{{
                    path(
                      'jury_tsv_export',
                      {
                        type: type
                      }
                    )
                    }}\">
                    <code>
                      {{ type }}.tsv
                    </code>
                  </a>
                </li>
              {% endfor %}
              <li>
                <code>
                  results.tsv
                </code>for sort order<ul>
                  {% for sort_order in sort_orders %}
                    <li>
                      <a href=\"{{
                        path(
                          'jury_tsv_export',
                          {
                            type: 'results'
                          }
                        )
                        }}?sort_order={{ sort_order }}\">
                        {{ sort_order }}
                      </a>
                    </li>
                  {% endfor %}
                </ul>
              </li>
            </ul>
          </li>
          <li>
            HTML, export:<ul>
              <li>
                <code>
                  results.html
                </code>for sort order<ul>
                  {% for sort_order in sort_orders %}
                    <li>
                      <a href=\"{{
                        path(
                          'jury_html_export',
                          {
                            type: 'results'
                          }
                        )
                        }}?sort_order={{ sort_order }}\">
                        {{ sort_order }}
                      </a>
                    </li>
                  {% endfor %}
                </ul>
              </li>
              <li>
                <code>
                  results.html
                </code>for on ICPC site for sort order<ul>
                  {% for sort_order in sort_orders %}
                    <li>
                      <a href=\"{{
                        path(
                          'jury_html_export',
                          {
                            type: 'results-icpc'
                          }
                        )
                        }}?sort_order={{ sort_order }}\">
                        {{ sort_order }}
                      </a>
                    </li>
                  {% endfor %}
                </ul>
              </li>
              <li>
                <a href=\"{{
                  path(
                    'jury_html_export',
                    {
                      type: 'clarifications'
                    }
                  )
                  }}\"
                  target=\"_blank\">
                  <code>
                    clarifications.html
                  </code>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <h4>
          Tab-separated import
        </h4>
        <div class=\"row\">
          <div class=\"col-md-6\">
            {{ form(tsv_form) }}
          </div>
        </div>

        <h3>
          Import teams / upload standings from / to icpc.baylor.edu
        </h3>

        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"alert alert-info\">
              Create a \"Web Services Token\" with appropriate rights in the
              \"Export\" section for your contest at <a href=\"https://icpc.baylor.edu/login\"
                target=\"_blank\">
                https://icpc.baylor.edu/login
              </a>. You can find the Contest ID (e.g.<code>
                Southwestern-Europe-2014
              </code>) in the URL.
            </div>

            {{ form_start(baylor_form) }}
            {{ form_row(baylor_form.contest_id) }}
            {{ form_row(baylor_form.access_token) }}
            <div class=\"form-group\">
              {{ form_widget(baylor_form.fetch_teams) }}
              {{ form_widget(baylor_form.upload_standings) }}
            </div>
            {{ form_end(baylor_form) }}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/import_export.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/import_export.html.twig");
    }
}
