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

/* jury/user.html.twig */
class __TwigTemplate_2cfa1ea0a449673b5893da5b8a39184401b9be73037e623b96e33aeae4362a90 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/user.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  User ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "userid", [], "any", false, false, false, 5), "html", null, true);
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
          User ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "userid", [], "any", false, false, false, 29), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Login
                </th>
                <td class=\"teamid\">
                  ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Name
                </th>
                <td>
                  ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Email
                </th>
                <td>
                  ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53)) {
            // line 54
            echo "                    <a href=\"mailto:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "</a>
                  ";
        } else {
            // line 56
            echo "                    -
                  ";
        }
        // line 58
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Password
                </th>
                <td>
                  ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "password", [], "any", false, false, false, 65)) {
            // line 66
            echo "                    Set
                  ";
        } else {
            // line 68
            echo "                    Not set
                  ";
        }
        // line 70
        echo "                </td>
              </tr>
              <tr>
                <th>
                  IP address
                </th>
                <td>
                  ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "ipAddress", [], "any", false, false, false, 77)) {
            // line 78
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "ipAddress", [], "any", false, false, false, 78), "html", null, true);
            echo "
                  ";
        } else {
            // line 80
            echo "                    -
                  ";
        }
        // line 82
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Enabled
                </th>
                <td>
                  ";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "enabled", [], "any", false, false, false, 89)), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  Roles
                </th>
                <td>
                  ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "userRoles", [], "any", false, false, false, 97));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 98
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 98), "html", null, true);
            echo "<br />
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "                    No roles assigned
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Team
                </th>
                ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "team", [], "any", false, false, false, 108)) {
            // line 109
            echo "                  <td class=\"teamid\">
                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 114
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "team", [], "any", false, false, false, 114), "teamid", [], "any", false, false, false, 114)]), "html", null, true);
            // line 117
            echo "\">
                      ";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "team", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "team", [], "any", false, false, false, 118), "teamid", [], "any", false, false, false, 118), "html", null, true);
            echo ")
                    </a>
                  </td>
                ";
        } else {
            // line 122
            echo "                  <td>
                    -
                  </td>
                ";
        }
        // line 126
        echo "              </tr>
            </table>
          </div>

          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  First login
                </th>
                <td>
                  ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 137, $this->source); })()), "firstLogin", [], "any", false, false, false, 137)) {
            // line 138
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "firstLogin", [], "any", false, false, false, 138), "%a %d %b %Y %T %Z"), "html", null, true);
            echo "
                  ";
        } else {
            // line 140
            echo "                    -
                  ";
        }
        // line 142
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Last login
                </th>
                <td>
                  ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "lastLogin", [], "any", false, false, false, 149)) {
            // line 150
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "lastLogin", [], "any", false, false, false, 150), "%a %d %b %Y %T %Z"), "html", null, true);
            echo "
                  ";
        } else {
            // line 152
            echo "                    -
                  ";
        }
        // line 154
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Last IP
                </th>
                <td>
                  ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "lastIpAddress", [], "any", false, false, false, 161)) {
            // line 162
            echo "                    ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "lastIpAddress", [], "any", false, false, false, 162), true);
            echo "
                  ";
        } else {
            // line 164
            echo "                    -
                  ";
        }
        // line 166
        echo "                </td>
              </tr>
            </table>
          </div>
        </div>";
        // line 172
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 173
            echo "<p>
            ";
            // line 174
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_edit", ["userId" => twig_get_attribute($this->env, $this->source,             // line 179
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "userid", [], "any", false, false, false, 179)]), "Edit", "primary", "edit");
            // line 186
            echo "
            ";
            // line 187
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_delete", ["userId" => twig_get_attribute($this->env, $this->source,             // line 192
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "userid", [], "any", false, false, false, 192)]), "Delete", "danger", "trash-alt", true);
            // line 200
            echo "
          </p>
        ";
        }
        // line 203
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 203,  351 => 200,  349 => 192,  348 => 187,  345 => 186,  343 => 179,  342 => 174,  339 => 173,  337 => 172,  331 => 166,  327 => 164,  321 => 162,  319 => 161,  310 => 154,  306 => 152,  300 => 150,  298 => 149,  289 => 142,  285 => 140,  279 => 138,  277 => 137,  264 => 126,  258 => 122,  249 => 118,  246 => 117,  244 => 114,  243 => 110,  240 => 109,  238 => 108,  230 => 102,  223 => 100,  215 => 98,  210 => 97,  199 => 89,  190 => 82,  186 => 80,  180 => 78,  178 => 77,  169 => 70,  165 => 68,  161 => 66,  159 => 65,  150 => 58,  146 => 56,  138 => 54,  136 => 53,  125 => 45,  114 => 37,  103 => 29,  89 => 18,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  User {{ user.userid }} - {{ parent() }}
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
          User {{ user.name }}
        </h1>

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  ID
                </th>
                <td>
                  {{ user.userid }}
                </td>
              </tr>
              <tr>
                <th>
                  Login
                </th>
                <td class=\"teamid\">
                  {{ user.username }}
                </td>
              </tr>
              <tr>
                <th>
                  Name
                </th>
                <td>
                  {{ user.name }}
                </td>
              </tr>
              <tr>
                <th>
                  Email
                </th>
                <td>
                  {% if user.email %}
                    <a href=\"mailto:{{ user.email }}\">{{ user.email }}</a>
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Password
                </th>
                <td>
                  {% if user.password %}
                    Set
                  {% else %}
                    Not set
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  IP address
                </th>
                <td>
                  {% if user.ipAddress %}
                    {{ user.ipAddress }}
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Enabled
                </th>
                <td>
                  {{ user.enabled|printYesNo }}
                </td>
              </tr>
              <tr>
                <th>
                  Roles
                </th>
                <td>
                  {% for role in user.userRoles %}
                    {{ role.description }}<br />
                  {% else %}
                    No roles assigned
                  {% endfor %}
                </td>
              </tr>
              <tr>
                <th>
                  Team
                </th>
                {% if user.team %}
                  <td class=\"teamid\">
                    <a href=\"{{
                      path(
                        'jury_team',
                        {
                          teamId: user.team.teamid
                        }
                      )
                      }}\">
                      {{ user.team.name }} (t{{ user.team.teamid }})
                    </a>
                  </td>
                {% else %}
                  <td>
                    -
                  </td>
                {% endif %}
              </tr>
            </table>
          </div>

          <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  First login
                </th>
                <td>
                  {% if user.firstLogin %}
                    {{ user.firstLogin|printtime('%a %d %b %Y %T %Z') }}
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Last login
                </th>
                <td>
                  {% if user.lastLogin %}
                    {{ user.lastLogin|printtime('%a %d %b %Y %T %Z') }}
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Last IP
                </th>
                <td>
                  {% if user.lastIpAddress %}
                    {{ user.lastIpAddress|printHost(true) }}
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
            </table>
          </div>
        </div>

        {%- if is_granted('ROLE_ADMIN') -%}
          <p>
            {{
              button(
                path(
                  'jury_user_edit',
                  {
                    userId: user.userid
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
                  'jury_user_delete',
                  {
                    userId: user.userid
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
{% endblock %}
", "jury/user.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/user.html.twig");
    }
}
