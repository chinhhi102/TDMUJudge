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

/* jury/menu.html.twig */
class __TwigTemplate_28e5f0dac574f515e776302c1bc4f29c5d3bb7249b4cd40e04145d501c83d00f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
        <ul class=\"navbar-nav mr-auto\">

            ";
        // line 10
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 11
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\"><i class=\"fas fa-map-marker-alt\"></i> balloons</a>
                </li>
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 35
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                ";
            // line 44
            if (($context["show_shadow_differences"] ?? null)) {
                // line 45
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\"><i class=\"fas fa-not-equal\"></i> shadow differences</a>
                    </li>
                ";
            }
            // line 49
            echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            ";
        }
        // line 54
        echo "
            ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 56
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            ";
        }
        // line 60
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 61
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            ";
        }
        // line 65
        echo "        </ul>

        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 69
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 70
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 72), "getUsername", [], "method", false, false, false, 72), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 75) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 75), "getName", [], "method", false, false, false, 75))) {
                // line 76
                echo "                            <a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 76), "getName", [], "method", false, false, false, 76), "html", null, true);
                echo "</a>
                        ";
            }
            // line 78
            echo "
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        ";
            // line 86
            if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null))) {
                // line 87
                echo "                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  ";
                // line 89
                if (($context["refresh_flag"] ?? null)) {
                    // line 90
                    echo "                      Disable Refresh
                  ";
                } else {
                    // line 92
                    echo "                      Enable Refresh
                  ";
                }
                // line 94
                echo "                </span>
                                ";
                // line 95
                if (($context["refresh"] ?? null)) {
                    // line 96
                    echo "                                    <span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 96), "html", null, true);
                    echo "s)</span>
                                ";
                }
                // line 98
                echo "                            </a>
                        ";
            }
            // line 100
            echo "
                        <a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            ";
        } else {
            // line 105
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            ";
        }
        // line 109
        echo "
            ";
        // line 110
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 110)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null), "contests" => ($context["current_contests"] ?? null), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 111
        echo "        </ul>
        ";
        // line 112
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 112)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
        // line 113
        echo "    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "jury/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 113,  257 => 112,  254 => 111,  252 => 110,  249 => 109,  243 => 106,  240 => 105,  233 => 101,  230 => 100,  226 => 98,  220 => 96,  218 => 95,  215 => 94,  211 => 92,  207 => 90,  205 => 89,  201 => 87,  199 => 86,  189 => 78,  183 => 76,  181 => 75,  175 => 72,  171 => 70,  168 => 69,  163 => 65,  157 => 62,  154 => 61,  151 => 60,  145 => 57,  142 => 56,  140 => 55,  137 => 54,  131 => 51,  127 => 49,  121 => 46,  118 => 45,  116 => 44,  110 => 41,  102 => 36,  99 => 35,  97 => 34,  94 => 33,  85 => 27,  79 => 24,  70 => 17,  68 => 16,  65 => 15,  59 => 12,  56 => 11,  54 => 10,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/menu.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/menu.html.twig");
    }
}
