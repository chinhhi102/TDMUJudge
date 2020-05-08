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

/* jury/team.html.twig */
class __TwigTemplate_818dbb13bd4038c931c139c846a52545d691aee6918e67f316cdeb9dd65017a1 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "teamid", [], "any", false, false, false, 5), "html", null, true);
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
          Team ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </h1>

        <div class=\"row\">
          <div class=\"col\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  ID
                </th>
                <td>
                  ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 29, $this->source); })()), "teamid", [], "any", false, false, false, 29), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  External ID
                </th>
                <td>
                  ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 37, $this->source); })()), "externalid", [], "any", false, false, false, 37)) {
            // line 38
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 38, $this->source); })()), "externalid", [], "any", false, false, false, 38), "html", null, true);
            echo "
                  ";
        } else {
            // line 40
            echo "                    -
                  ";
        }
        // line 42
        echo "                </td>
              </tr>
              <tr>
                <th>
                  Name
                </th>
                <td>
                  ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <th>
                  First login
                </th>
                <td>
                  ";
        // line 57
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 58, $this->source); })()), "users", [], "any", false, false, false, 58)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 58, $this->source); })()), "users", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), "firstLogin", [], "any", false, false, false, 58))) {
            // line 59
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 60
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 60, $this->source); })()), "users", [], "any", false, false, false, 60), "first", [], "any", false, false, false, 60), "firstLogin", [], "any", false, false, false, 60), "%a %d %b %Y %T %Z"), "html", null, true);
            // line 61
            echo "
                  ";
        } else {
            // line 63
            echo "                    -
                  ";
        }
        // line 65
        echo "                </td>
              </tr>
              <tr>
                <th>
                  IP
                </th>
                <td>
                  ";
        // line 72
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 73, $this->source); })()), "users", [], "any", false, false, false, 73)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 74, $this->source); })()), "users", [], "any", false, false, false, 74), "first", [], "any", false, false, false, 74), "lastIpAddress", [], "any", false, false, false, 74))) {
            // line 75
            echo "                    ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 75, $this->source); })()), "users", [], "any", false, false, false, 75), "first", [], "any", false, false, false, 75), "lastIpAddress", [], "any", false, false, false, 75), true);
            echo "
                  ";
        } else {
            // line 77
            echo "                    -
                  ";
        }
        // line 79
        echo "                </td>
              </tr>
              ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 81, $this->source); })()), "penalty", [], "any", false, false, false, 81)) {
            // line 82
            echo "                <tr>
                  <th>
                    Penalty time
                  </th>
                  <td>
                    ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 87, $this->source); })()), "penalty", [], "any", false, false, false, 87), "html", null, true);
            echo "
                  </td>
                </tr>
              ";
        }
        // line 91
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 91, $this->source); })()), "room", [], "any", false, false, false, 91)) {
            // line 92
            echo "                <tr>
                  <th>
                    Location
                  </th>
                  <td>
                    ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 97, $this->source); })()), "room", [], "any", false, false, false, 97), "html", null, true);
            echo "
                  </td>
                </tr>
              ";
        }
        // line 101
        echo "              <tr>
                <th>
                  User
                </th>
                <td>
                  ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 106, $this->source); })()), "users", [], "any", false, false, false, 106));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 107
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source,             // line 111
$context["user"], "userid", [], "any", false, false, false, 111)]), "html", null, true);
            // line 114
            echo "\">
                      ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 115), "html", null, true);
            echo "
                    </a>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_add", ["team" => twig_get_attribute($this->env, $this->source,             // line 122
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 122, $this->source); })()), "teamid", [], "any", false, false, false, 122)]), "html", null, true);
            // line 125
            echo "\">
                      <i class=\"fas fa-user-plus\"></i> add user
                    </a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                </td>
              </tr>
            </table>
          </div>

          <div class=\"col\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Category
                </th>
                <td>
                  <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 145
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 145, $this->source); })()), "category", [], "any", false, false, false, 145), "categoryid", [], "any", false, false, false, 145)]), "html", null, true);
        // line 148
        echo "\">
                    ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 149, $this->source); })()), "category", [], "any", false, false, false, 149), "name", [], "any", false, false, false, 149), "html", null, true);
        echo "
                  </a>
                </td>
              </tr>
              ";
        // line 153
        if (((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 153, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 153, $this->source); })()), "affiliation", [], "any", false, false, false, 153))) {
            // line 154
            echo "                <tr>
                  <th>
                    Affiliation
                  </th>
                  <td>
                    ";
            // line 159
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 159, $this->source); })()), "affiliation", [], "any", false, false, false, 159), "affilid", [], "any", false, false, false, 159);
            // line 160
            echo "                    ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 160, $this->source); })()), "affiliation", [], "any", false, false, false, 160))) {
                // line 161
                echo "                      ";
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 161, $this->source); })()), "affiliation", [], "any", false, false, false, 161), "externalid", [], "any", false, false, false, 161);
                // line 162
                echo "                    ";
            }
            // line 163
            echo "                    ";
            $context["affiliationLogo"] = (("images/affiliations/" .             // line 164
(isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 164, $this->source); })())) . ".png");
            // line 167
            echo "                    ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 167, $this->source); })()))) {
                // line 168
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 168, $this->source); })())), "html", null, true);
                echo "\"
                        alt=\"";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 169, $this->source); })()), "affiliation", [], "any", false, false, false, 169), "shortname", [], "any", false, false, false, 169), "html", null, true);
                echo "\"
                        title=\"";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 170, $this->source); })()), "affiliation", [], "any", false, false, false, 170), "shortname", [], "any", false, false, false, 170), "html", null, true);
                echo "\"
                        class=\"affiliation-logo\" />
                    ";
            }
            // line 173
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 177
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 177, $this->source); })()), "affiliation", [], "any", false, false, false, 177), "affilid", [], "any", false, false, false, 177)]), "html", null, true);
            // line 180
            echo "\">
                      ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 181, $this->source); })()), "affiliation", [], "any", false, false, false, 181), "name", [], "any", false, false, false, 181), "html", null, true);
            echo "
                    </a>
                  </td>
                </tr>
              ";
        }
        // line 186
        echo "              ";
        if (((        // line 187
(isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 187, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 187, $this->source); })()), "affiliation", [], "any", false, false, false, 187)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 187, $this->source); })()), "affiliation", [], "any", false, false, false, 187), "country", [], "any", false, false, false, 187))) {
            // line 188
            echo "                <tr>
                  <th>
                    Country
                  </th>
                  <td>
                    ";
            // line 193
            $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 194
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 194, $this->source); })()), "affiliation", [], "any", false, false, false, 194), "country", [], "any", false, false, false, 194)) . ".png");
            // line 197
            echo "                    ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 197, $this->source); })()))) {
                // line 198
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 198, $this->source); })())), "html", null, true);
                echo "\"
                        alt=\"";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 199, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 199, $this->source); })()), "affiliation", [], "any", false, false, false, 199), "country", [], "any", false, false, false, 199), [], "array", false, false, false, 199), "html", null, true);
                echo "\"
                        title=\"";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 200, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 200, $this->source); })()), "affiliation", [], "any", false, false, false, 200), "country", [], "any", false, false, false, 200), [], "array", false, false, false, 200), "html", null, true);
                echo "\"
                        class=\"countryflag\" />
                    ";
            }
            // line 203
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 203, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 203, $this->source); })()), "affiliation", [], "any", false, false, false, 203), "country", [], "any", false, false, false, 203), [], "array", false, false, false, 203), "html", null, true);
            echo "
                  </td>
                </tr>
              ";
        }
        // line 207
        echo "              ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 207, $this->source); })()), "contests", [], "any", false, false, false, 207)) > 0)) {
            // line 208
            echo "                <tr>
                  <th>
                    Contests
                  </th>
                  <td>
                    ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 213, $this->source); })()), "contests", [], "any", false, false, false, 213));
            foreach ($context['_seq'] as $context["_key"] => $context["ucontest"]) {
                // line 214
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source,                 // line 218
$context["ucontest"], "cid", [], "any", false, false, false, 218)]), "html", null, true);
                // line 221
                echo "\">
                        ";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ucontest"], "shortname", [], "any", false, false, false, 222), "html", null, true);
                echo "
                      </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ucontest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                  </td>
                </tr>
              ";
        }
        // line 228
        echo "              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 228, $this->source); })()), "comments", [], "any", false, false, false, 228))) {
            // line 229
            echo "                <tr>
                  <th>
                    Comments
                  </th>
                  <td>
                    ";
            // line 234
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 234, $this->source); })()), "comments", [], "any", false, false, false, 234), "html", null, true));
            echo "
                  </td>
                </tr>
              ";
        }
        // line 238
        echo "              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 238, $this->source); })()), "members", [], "any", false, false, false, 238))) {
            // line 239
            echo "                <tr>
                  <th>
                    Members
                  </th>
                  <td>
                    ";
            // line 244
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 244, $this->source); })()), "members", [], "any", false, false, false, 244), "html", null, true));
            echo "
                  </td>
                </tr>
              ";
        }
        // line 248
        echo "            </table>
          </div>
          ";
        // line 250
        $context["teamImage"] = (("images/teams/" . twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 250, $this->source); })()), "teamId", [], "any", false, false, false, 250)) . ".jpg");
        // line 251
        echo "          ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 251, $this->source); })()))) {
            // line 252
            echo "            <div class=\"col\">
              <img id=\"teampicture\"
                src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 254, $this->source); })())), "html", null, true);
            echo "\"
                alt=\"Picture of team ";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 255, $this->source); })()), "name", [], "any", false, false, false, 255), "html", null, true);
            echo "\"
                title=\"Picture of team ";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 256, $this->source); })()), "name", [], "any", false, false, false, 256), "html", null, true);
            echo "\" />
            </div>
          ";
        }
        // line 259
        echo "        </div>

        <p>";
        // line 262
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 263
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_edit", ["teamId" => twig_get_attribute($this->env, $this->source,             // line 268
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 268, $this->source); })()), "teamid", [], "any", false, false, false, 268)]), "Edit", "primary", "edit");
            // line 275
            echo "
            ";
            // line 276
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_delete", ["teamId" => twig_get_attribute($this->env, $this->source,             // line 281
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 281, $this->source); })()), "teamid", [], "any", false, false, false, 281)]), "Delete", "danger", "trash-alt", true);
            // line 289
            echo "
          ";
        }
        // line 291
        echo "          ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send", ["teamto" => twig_get_attribute($this->env, $this->source,         // line 296
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 296, $this->source); })()), "teamid", [], "any", false, false, false, 296)]), "Send message", "secondary", "envelope");
        // line 303
        echo "
          ";
        // line 304
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/team.html.twig", 304)->display(twig_array_merge($context, ["table" => "team", "id" => twig_get_attribute($this->env, $this->source,         // line 306
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 306, $this->source); })()), "teamid", [], "any", false, false, false, 306), "buttonClass" => "btn-secondary"]));
        // line 309
        echo "        </p>

        <div data-ajax-refresh-target>
          ";
        // line 312
        $this->loadTemplate("jury/partials/team_score_and_submissions.html.twig", "jury/team.html.twig", 312)->display($context);
        // line 313
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 313,  515 => 312,  510 => 309,  508 => 306,  507 => 304,  504 => 303,  502 => 296,  500 => 291,  496 => 289,  494 => 281,  493 => 276,  490 => 275,  488 => 268,  487 => 263,  485 => 262,  481 => 259,  475 => 256,  471 => 255,  467 => 254,  463 => 252,  460 => 251,  458 => 250,  454 => 248,  447 => 244,  440 => 239,  437 => 238,  430 => 234,  423 => 229,  420 => 228,  415 => 225,  406 => 222,  403 => 221,  401 => 218,  399 => 214,  395 => 213,  388 => 208,  385 => 207,  377 => 203,  371 => 200,  367 => 199,  362 => 198,  359 => 197,  357 => 194,  356 => 193,  349 => 188,  347 => 187,  345 => 186,  337 => 181,  334 => 180,  332 => 177,  330 => 173,  324 => 170,  320 => 169,  315 => 168,  312 => 167,  310 => 164,  308 => 163,  305 => 162,  302 => 161,  299 => 160,  297 => 159,  290 => 154,  288 => 153,  281 => 149,  278 => 148,  276 => 145,  275 => 141,  261 => 129,  252 => 125,  250 => 122,  248 => 118,  240 => 115,  237 => 114,  235 => 111,  233 => 107,  228 => 106,  221 => 101,  214 => 97,  207 => 92,  204 => 91,  197 => 87,  190 => 82,  188 => 81,  184 => 79,  180 => 77,  174 => 75,  172 => 74,  171 => 73,  170 => 72,  161 => 65,  157 => 63,  153 => 61,  151 => 60,  149 => 59,  147 => 58,  146 => 57,  135 => 49,  126 => 42,  122 => 40,  116 => 38,  114 => 37,  103 => 29,  89 => 18,  83 => 14,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Team {{ team.teamid }} - {{ parent() }}
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
          Team {{ team.name }}
        </h1>

        <div class=\"row\">
          <div class=\"col\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  ID
                </th>
                <td>
                  {{ team.teamid }}
                </td>
              </tr>
              <tr>
                <th>
                  External ID
                </th>
                <td>
                  {% if team.externalid %}
                    {{ team.externalid }}
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  Name
                </th>
                <td>
                  {{ team.name }}
                </td>
              </tr>
              <tr>
                <th>
                  First login
                </th>
                <td>
                  {% if
                    team.users is not empty and team.users.first.firstLogin %}
                    {{
                      team.users.first.firstLogin|printtime('%a %d %b %Y %T %Z')
                    }}
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
              <tr>
                <th>
                  IP
                </th>
                <td>
                  {% if
                    team.users is not empty
                      and team.users.first.lastIpAddress %}
                    {{ team.users.first.lastIpAddress|printHost(true) }}
                  {% else %}
                    -
                  {% endif %}
                </td>
              </tr>
              {% if team.penalty %}
                <tr>
                  <th>
                    Penalty time
                  </th>
                  <td>
                    {{ team.penalty }}
                  </td>
                </tr>
              {% endif %}
              {% if team.room %}
                <tr>
                  <th>
                    Location
                  </th>
                  <td>
                    {{ team.room }}
                  </td>
                </tr>
              {% endif %}
              <tr>
                <th>
                  User
                </th>
                <td>
                  {% for user in team.users %}
                    <a href=\"{{
                      path(
                        'jury_user',
                        {
                          userId: user.userid
                        }
                      )
                      }}\">
                      {{ user.username }}
                    </a>
                  {% else %}
                    <a href=\"{{
                      path(
                        'jury_user_add',
                        {
                          team: team.teamid
                        }
                      )
                      }}\">
                      <i class=\"fas fa-user-plus\"></i> add user
                    </a>
                  {% endfor %}
                </td>
              </tr>
            </table>
          </div>

          <div class=\"col\">
            <table class=\"table table-sm table-striped\">
              <tr>
                <th>
                  Category
                </th>
                <td>
                  <a href=\"{{
                    path(
                      'jury_team_category',
                      {
                        categoryId: team.category.categoryid
                      }
                    )
                    }}\">
                    {{ team.category.name }}
                  </a>
                </td>
              </tr>
              {% if showAffiliations and team.affiliation %}
                <tr>
                  <th>
                    Affiliation
                  </th>
                  <td>
                    {% set affiliationId = team.affiliation.affilid %}
                    {% if showExternalId(team.affiliation) %}
                      {% set affiliationId = team.affiliation.externalid %}
                    {% endif %}
                    {% set affiliationLogo = 'images/affiliations/'
                      ~ affiliationId
                      ~ '.png'
                    %}
                    {% if affiliationLogo|assetExists %}
                      <img src=\"{{ asset(affiliationLogo) }}\"
                        alt=\"{{ team.affiliation.shortname }}\"
                        title=\"{{ team.affiliation.shortname }}\"
                        class=\"affiliation-logo\" />
                    {% endif %}
                    <a href=\"{{
                      path(
                        'jury_team_affiliation',
                        {
                          affilId: team.affiliation.affilid
                        }
                      )
                      }}\">
                      {{ team.affiliation.name }}
                    </a>
                  </td>
                </tr>
              {% endif %}
              {% if
                showFlags and team.affiliation and team.affiliation.country %}
                <tr>
                  <th>
                    Country
                  </th>
                  <td>
                    {% set countryFlag = 'images/countries/'
                      ~ team.affiliation.country
                      ~ '.png'
                    %}
                    {% if countryFlag|assetExists %}
                      <img src=\"{{ asset(countryFlag) }}\"
                        alt=\"{{ alpha3_countries[team.affiliation.country] }}\"
                        title=\"{{ alpha3_countries[team.affiliation.country] }}\"
                        class=\"countryflag\" />
                    {% endif %}
                    {{ alpha3_countries[team.affiliation.country] }}
                  </td>
                </tr>
              {% endif %}
              {% if (team.contests|length) > 0 %}
                <tr>
                  <th>
                    Contests
                  </th>
                  <td>
                    {% for ucontest in team.contests %}
                      <a href=\"{{
                        path(
                          'jury_contest',
                          {
                            contestId: ucontest.cid
                          }
                        )
                        }}\">
                        {{ ucontest.shortname }}
                      </a>
                    {% endfor %}
                  </td>
                </tr>
              {% endif %}
              {% if team.comments is not empty %}
                <tr>
                  <th>
                    Comments
                  </th>
                  <td>
                    {{ team.comments|nl2br }}
                  </td>
                </tr>
              {% endif %}
              {% if team.members is not empty %}
                <tr>
                  <th>
                    Members
                  </th>
                  <td>
                    {{ team.members|nl2br }}
                  </td>
                </tr>
              {% endif %}
            </table>
          </div>
          {% set teamImage = 'images/teams/' ~ team.teamId ~ '.jpg' %}
          {% if teamImage|assetExists %}
            <div class=\"col\">
              <img id=\"teampicture\"
                src=\"{{ asset(teamImage) }}\"
                alt=\"Picture of team {{ team.name }}\"
                title=\"Picture of team {{ team.name }}\" />
            </div>
          {% endif %}
        </div>

        <p>
          {%- if is_granted('ROLE_ADMIN') -%}
            {{
              button(
                path(
                  'jury_team_edit',
                  {
                    teamId: team.teamid
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
                  'jury_team_delete',
                  {
                    teamId: team.teamid
                  }
                ),
                'Delete',
                'danger',
                'trash-alt',
                true
              )
            }}
          {% endif %}
          {{
            button(
              path(
                'jury_clarification_send',
                {
                  teamto: team.teamid
                }
              ),
              'Send message',
              'secondary',
              'envelope'
            )
          }}
          {% include 'jury/partials/rejudge_form.html.twig' with {
            table: 'team',
            id: team.teamid,
            buttonClass: 'btn-secondary'
          } %}
        </p>

        <div data-ajax-refresh-target>
          {% include 'jury/partials/team_score_and_submissions.html.twig' %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "jury/team.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/team.html.twig");
    }
}
