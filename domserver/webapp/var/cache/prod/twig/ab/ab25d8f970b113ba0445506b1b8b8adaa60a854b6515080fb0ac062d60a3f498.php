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
class __TwigTemplate_44c8e131e4286b5d1402307c0af77442e92c0cef2b561a854bdc303948983b44 extends \Twig\Template
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
        echo "<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->
<div class=\"dashboard-header\"> 
    <nav class=\"navbar navbar-expand-lg bg-white fixed-top\">
\t\t<a class=\"navbar-brand\" href=\"/jury\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.png"), "html", null, true);
        echo "\" alt=\"TDMU Judge logo\" style=\"height: 50px; width: 250px\" title=\"The TDMU Judge logo: free as in beer!\"/></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav ml-auto navbar-right-top\">
\t\t\t\t<!-- Render user information + logout button -->
\t\t\t\t";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "\t\t\t\t\t<li class=\"nav-item dropdown nav-user\">
\t\t\t\t\t\t<a class=\"nav-link nav-user-img\" href=\"#\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/NCKH.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "getUsername", [], "method", false, false, false, 16), "html", null, true);
            echo "\" class=\"user-avatar-md rounded-circle\"></a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right nav-user-dropdown\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "getName", [], "method", false, false, false, 18))) {
                // line 19
                echo "\t\t\t\t\t\t\t\t<a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "getName", [], "method", false, false, false, 19), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 21
            echo "
\t\t\t\t\t\t\t<a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell-slash fa-fw\"></i>
\t\t\t\t\t\t\t\tDisable Notifications
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\tEnable Notifications
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
            // line 31
            if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sync-alt fa-fw\"></i>
\t\t\t\t\t\t\t\t\t<span id=\"refresh-toggle\">
\t\t\t\t\t\t\t\t\t\t";
                // line 35
                if ((isset($context["refresh_flag"]) || array_key_exists("refresh_flag", $context) ? $context["refresh_flag"] : (function () { throw new RuntimeError('Variable "refresh_flag" does not exist.', 35, $this->source); })())) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t\t\tDisable Refresh
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t\tEnable Refresh
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                // line 41
                if ((isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 41, $this->source); })())) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 42, $this->source); })()), "after", [], "any", false, false, false, 42), "html", null, true);
                    echo "s)</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 46
            echo "
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" target=\"_top\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt fa-fw\"></i>
\t\t\t\t\t\t\tLog in</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 59
        echo "
\t\t\t\t";
        // line 60
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 60)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 60, $this->source); })()), "contests" => (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 60, $this->source); })()), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 61
        echo "\t\t\t</ul>
\t\t\t";
        // line 62
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 62)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 62, $this->source); })())]));
        // line 63
        echo "\t\t</div>
\t</nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
        <div class=\"nav-left-sidebar sidebar-dark\">
            <div class=\"menu-list\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
                        <ul class=\"navbar-nav flex-column\">
                            <li class=\"nav-divider\">
                                Menu
                            </li>
                            ";
        // line 84
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 85
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\">
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        Balloons</a>
                                </li>
                            ";
        }
        // line 91
        echo "
                            ";
        // line 92
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 93
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\">
                                        <i class=\"fas fa-gavel\"></i>
                                        Judgehosts
                                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                                    </a>
                                    <div class=\"collapse submenu\" id=\"submenu-1\" aria-labelledby=\"navbarDropdown\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
                                                    <i class=\"fas fa-server fa-fw\"></i>
                                                    Judgehosts
                                                    <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"dropdown-item dropdown-disabled\" href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
                                                    <i class=\"fas fa-bolt fa-fw\"></i>
                                                    Internal error
                                                    <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            ";
        }
        // line 120
        echo "
                            ";
        // line 121
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 122
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 123
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\">
                                        <i class=\"fas fa-comments\"></i>
                                        Clarifications
                                        <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span>
                                    </a>
                                </li>


                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">
                                        <i class=\"fas fa-file-code\"></i>
                                        Submissions</a>
                                </li>

                                ";
            // line 137
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 137, $this->source); })())) {
                // line 138
                echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
                // line 139
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">
                                            <i class=\"fas fa-not-equal\"></i>
                                            Shadow differences</a>
                                    </li>
                                ";
            }
            // line 144
            echo "
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\">
                                        <i class=\"fas fa-sync\"></i>
                                        Rejudgings
                                        <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span>
                                    </a>
                                </li>
                            ";
        }
        // line 153
        echo "
                            ";
        // line 154
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 155
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 156
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">
                                        <i class=\"fas fa-list-ol\"></i>
                                        Scoreboard</a>
                                </li>
                            ";
        }
        // line 161
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 162
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 163
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\">
                                        <i class=\"fas fa-arrow-right\"></i>
                                        Team</a>
                                </li>
                            ";
        }
        // line 168
        echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-10\" aria-controls=\"submenu-10\"><i class=\"fas fa-f fa-folder\"></i>Menu Level</a>
                                <div id=\"submenu-10\" class=\"collapse submenu\" style=\"\">
                                    <ul class=\"nav flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Level 1</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-11\" aria-controls=\"submenu-11\">Level 2</a>
                                            <div id=\"submenu-11\" class=\"collapse submenu\" style=\"\">
                                                <ul class=\"nav flex-column\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link\" href=\"#\">Level 1</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link\" href=\"#\">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
\t
\t\t\t";
        // line 286
        echo "

\t\t\t";
        // line 635
        echo "<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!--
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
\t    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 640
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
        echo "\">Trang chủ</a>
\t    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"navbar-toggler-icon\"></span>
\t    </button>
\t
\t    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 645
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
\t        <ul class=\"navbar-nav mr-auto\">
\t
\t            ";
        // line 648
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 649
            echo "\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"";
            // line 650
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\"><i class=\"fas fa-map-marker-alt\"></i> Balloons</a>
\t                </li>
\t            ";
        }
        // line 653
        echo "\t
\t            ";
        // line 654
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 655
            echo "\t                <li class=\"nav-item dropdown\">
\t                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t                        <i class=\"fas fa-gavel\"></i> Judgehosts
\t                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
\t                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
\t                    </a>
\t                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t                        <a class=\"dropdown-item\" href=\"";
            // line 662
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
\t                            <i class=\"fas fa-server fa-fw\"></i> Judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
\t                        </a>
\t                        <a class=\"dropdown-item dropdown-disabled\" href=\"";
            // line 665
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
\t                            <i class=\"fas fa-bolt fa-fw\"></i> Internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
\t                        </a>
\t                    </div>
\t                </li>
\t            ";
        }
        // line 671
        echo "\t
\t            ";
        // line 672
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 673
            echo "\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"";
            // line 674
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> Clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
\t                </li>
\t
\t
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"";
            // line 679
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\"><i class=\"fas fa-file-code\"></i> Submissions</a>
\t                </li>
\t
\t                ";
            // line 682
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 682, $this->source); })())) {
                // line 683
                echo "\t                    <li class=\"nav-item\">
\t                        <a class=\"nav-link\" href=\"";
                // line 684
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\"><i class=\"fas fa-not-equal\"></i> Shadow differences</a>
\t                    </li>
\t                ";
            }
            // line 687
            echo "\t
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"";
            // line 689
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> Rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
\t                </li>
\t            ";
        }
        // line 692
        echo "\t
\t            ";
        // line 693
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 694
            echo "\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"";
            // line 695
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
\t                </li>
\t            ";
        }
        // line 698
        echo "\t            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 699
            echo "\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 700
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Team</a>
\t                </li>
\t            ";
        }
        // line 703
        echo "\t        </ul>
\t
\t        <ul class=\"navbar-nav ml-auto\">
\t            ";
        // line 707
        echo "\t            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 708
            echo "\t                <li class=\"nav-item dropdown\">
\t                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t                        <i class=\"fas fa-user\"></i> ";
            // line 710
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 710, $this->source); })()), "user", [], "any", false, false, false, 710), "getUsername", [], "method", false, false, false, 710), "html", null, true);
            echo "
\t                    </a>
\t                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t                        ";
            // line 713
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 713, $this->source); })()), "user", [], "any", false, false, false, 713) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 713, $this->source); })()), "user", [], "any", false, false, false, 713), "getName", [], "method", false, false, false, 713))) {
                // line 714
                echo "\t                            <a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 714, $this->source); })()), "user", [], "any", false, false, false, 714), "getName", [], "method", false, false, false, 714), "html", null, true);
                echo "</a>
\t                        ";
            }
            // line 716
            echo "\t
\t                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
\t                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
\t                        </a>
\t                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
\t                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
\t                        </a>
\t
\t                        ";
            // line 724
            if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 724, $this->source); })()))) {
                // line 725
                echo "\t                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
\t                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
\t                  ";
                // line 727
                if ((isset($context["refresh_flag"]) || array_key_exists("refresh_flag", $context) ? $context["refresh_flag"] : (function () { throw new RuntimeError('Variable "refresh_flag" does not exist.', 727, $this->source); })())) {
                    // line 728
                    echo "\t                      Disable Refresh
\t                  ";
                } else {
                    // line 730
                    echo "\t                      Enable Refresh
\t                  ";
                }
                // line 732
                echo "\t                </span>
\t                                ";
                // line 733
                if ((isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 733, $this->source); })())) {
                    // line 734
                    echo "\t                                    <span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 734, $this->source); })()), "after", [], "any", false, false, false, 734), "html", null, true);
                    echo "s)</span>
\t                                ";
                }
                // line 736
                echo "\t                            </a>
\t                        ";
            }
            // line 738
            echo "\t
\t                        <a class=\"dropdown-item\" href=\"";
            // line 739
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
\t                    </div>
\t                </li>
\t            ";
        } else {
            // line 743
            echo "\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 744
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> Log in</a>
\t                </li>
\t            ";
        }
        // line 747
        echo "\t
\t            ";
        // line 748
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 748)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 748, $this->source); })()), "contests" => (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 748, $this->source); })()), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 749
        echo "\t        </ul>
\t        ";
        // line 750
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 750)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 750, $this->source); })())]));
        // line 751
        echo "\t    </div>
\t</nav>
\t-->

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
        return array (  579 => 751,  577 => 750,  574 => 749,  572 => 748,  569 => 747,  563 => 744,  560 => 743,  553 => 739,  550 => 738,  546 => 736,  540 => 734,  538 => 733,  535 => 732,  531 => 730,  527 => 728,  525 => 727,  521 => 725,  519 => 724,  509 => 716,  503 => 714,  501 => 713,  495 => 710,  491 => 708,  488 => 707,  483 => 703,  477 => 700,  474 => 699,  471 => 698,  465 => 695,  462 => 694,  460 => 693,  457 => 692,  451 => 689,  447 => 687,  441 => 684,  438 => 683,  436 => 682,  430 => 679,  422 => 674,  419 => 673,  417 => 672,  414 => 671,  405 => 665,  399 => 662,  390 => 655,  388 => 654,  385 => 653,  379 => 650,  376 => 649,  374 => 648,  368 => 645,  360 => 640,  353 => 635,  349 => 286,  316 => 168,  308 => 163,  305 => 162,  302 => 161,  294 => 156,  291 => 155,  289 => 154,  286 => 153,  276 => 146,  272 => 144,  264 => 139,  261 => 138,  259 => 137,  251 => 132,  239 => 123,  236 => 122,  234 => 121,  231 => 120,  218 => 110,  208 => 103,  196 => 93,  194 => 92,  191 => 91,  183 => 86,  180 => 85,  178 => 84,  170 => 79,  152 => 63,  150 => 62,  147 => 61,  145 => 60,  142 => 59,  134 => 54,  131 => 53,  122 => 47,  119 => 46,  115 => 44,  109 => 42,  107 => 41,  104 => 40,  100 => 38,  96 => 36,  94 => 35,  89 => 32,  87 => 31,  75 => 21,  69 => 19,  67 => 18,  60 => 16,  57 => 15,  55 => 14,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->
<div class=\"dashboard-header\"> 
    <nav class=\"navbar navbar-expand-lg bg-white fixed-top\">
\t\t<a class=\"navbar-brand\" href=\"/jury\"><img src=\"{{ asset('images/DOMjudgelogo.png') }}\" alt=\"TDMU Judge logo\" style=\"height: 50px; width: 250px\" title=\"The TDMU Judge logo: free as in beer!\"/></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav ml-auto navbar-right-top\">
\t\t\t\t<!-- Render user information + logout button -->
\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t<li class=\"nav-item dropdown nav-user\">
\t\t\t\t\t\t<a class=\"nav-link nav-user-img\" href=\"#\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"{{ asset('images/NCKH.png') }}\" alt=\"{{ app.user.getUsername() }}\" class=\"user-avatar-md rounded-circle\"></a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right nav-user-dropdown\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t{% if app.user and app.user.getName() %}
\t\t\t\t\t\t\t\t<a class=\"dropdown-item disabled\" href=\"#\">{{ app.user.getName() }}</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell-slash fa-fw\"></i>
\t\t\t\t\t\t\t\tDisable Notifications
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\tEnable Notifications
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% if refresh is defined and refresh %}
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sync-alt fa-fw\"></i>
\t\t\t\t\t\t\t\t\t<span id=\"refresh-toggle\">
\t\t\t\t\t\t\t\t\t\t{% if refresh_flag %}
\t\t\t\t\t\t\t\t\t\t\tDisable Refresh
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\tEnable Refresh
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t{% if refresh %}
\t\t\t\t\t\t\t\t\t\t<span class=\"small text-muted\">({{ refresh.after }}s)</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('logout') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" target=\"_top\" href=\"{{ path('login') }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt fa-fw\"></i>
\t\t\t\t\t\t\tLog in</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{% include 'partials/menu_change_contest.html.twig' with {contest: current_contest, contests: current_contests, change_path: 'jury_change_contest', show_no_contest: true} %}
\t\t\t</ul>
\t\t\t{% include 'partials/menu_countdown.html.twig' with {contest: current_contest} %}
\t\t</div>
\t</nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
        <div class=\"nav-left-sidebar sidebar-dark\">
            <div class=\"menu-list\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
                        <ul class=\"navbar-nav flex-column\">
                            <li class=\"nav-divider\">
                                Menu
                            </li>
                            {% if is_granted('ROLE_BALLOON') and not is_granted('ROLE_JURY') and not is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\">
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        Balloons</a>
                                </li>
                            {% endif %}

                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\">
                                        <i class=\"fas fa-gavel\"></i>
                                        Judgehosts
                                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                                    </a>
                                    <div class=\"collapse submenu\" id=\"submenu-1\" aria-labelledby=\"navbarDropdown\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"dropdown-item\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
                                                    <i class=\"fas fa-server fa-fw\"></i>
                                                    Judgehosts
                                                    <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"dropdown-item dropdown-disabled\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
                                                    <i class=\"fas fa-bolt fa-fw\"></i>
                                                    Internal error
                                                    <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            {% endif %}

                            {% if is_granted('ROLE_JURY') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('jury_clarifications') }}\" id=\"menu_clarifications\">
                                        <i class=\"fas fa-comments\"></i>
                                        Clarifications
                                        <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span>
                                    </a>
                                </li>


                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('jury_submissions') }}\">
                                        <i class=\"fas fa-file-code\"></i>
                                        Submissions</a>
                                </li>

                                {% if show_shadow_differences %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('jury_shadow_differences') }}\">
                                            <i class=\"fas fa-not-equal\"></i>
                                            Shadow differences</a>
                                    </li>
                                {% endif %}

                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('jury_rejudgings') }}\" id=\"menu_rejudgings\">
                                        <i class=\"fas fa-sync\"></i>
                                        Rejudgings
                                        <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span>
                                    </a>
                                </li>
                            {% endif %}

                            {% if is_granted('ROLE_JURY') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('jury_scoreboard') }}\">
                                        <i class=\"fas fa-list-ol\"></i>
                                        Scoreboard</a>
                                </li>
                            {% endif %}
                            {% if is_granted('ROLE_TEAM') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('team_index') }}\">
                                        <i class=\"fas fa-arrow-right\"></i>
                                        Team</a>
                                </li>
                            {% endif %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-10\" aria-controls=\"submenu-10\"><i class=\"fas fa-f fa-folder\"></i>Menu Level</a>
                                <div id=\"submenu-10\" class=\"collapse submenu\" style=\"\">
                                    <ul class=\"nav flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Level 1</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-11\" aria-controls=\"submenu-11\">Level 2</a>
                                            <div id=\"submenu-11\" class=\"collapse submenu\" style=\"\">
                                                <ul class=\"nav flex-column\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link\" href=\"#\">Level 1</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link\" href=\"#\">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
\t
\t\t\t{# <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
\t\t\t\t\t\t            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_BALLOON') and not is_granted('ROLE_JURY') and not is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBalloons</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-gavel\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tJudgehosts
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-server fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJudgehosts
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-disabled\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bolt fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInternal error
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_JURY') %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_clarifications') }}\" id=\"menu_clarifications\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tClarifications
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_submissions') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-code\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSubmissions</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% if show_shadow_differences %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_shadow_differences') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-not-equal\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tShadow differences</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_rejudgings') }}\" id=\"menu_rejudgings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sync\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tRejudgings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_JURY') %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_scoreboard') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list-ol\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tScoreboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_TEAM') %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" target=\"_top\" href=\"{{ path('team_index') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTeam</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div> #}


\t\t\t{# <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
\t\t\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
\t\t\t\t\t\t            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t                        <span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-divider\">
\t\t\t\t\t\t\t\t\t\t\t\tMenu
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t                    {% if is_granted('ROLE_BALLOON') and not is_granted('ROLE_JURY') and not is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBalloons</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t                    {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t                        <li class=\"nav-item\">
\t\t\t\t\t\t                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"collapse\" aria-haspopup=\"true\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t                                <i class=\"fas fa-gavel\"></i>
\t\t\t\t\t\t                                Judgehosts
\t\t\t\t\t\t                                <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
\t\t\t\t\t\t                                <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
\t\t\t\t\t\t                            </a>
\t\t\t\t\t\t                            <div id=\"submenu-1\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t                                <ul class=\"nav flex-column\">
\t\t\t\t\t\t                                    <li class=\"nav-item\">
\t\t\t\t\t\t                                        <a class=\"nav-link\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">Judgehosts
\t\t\t\t\t\t                                            <span class=\"badge badge-secondary\">New</span>
\t\t\t\t\t\t                                        </a>
\t\t\t\t\t\t                                    </li>
\t\t\t\t\t\t                                    <li class=\"nav-item\">
\t\t\t\t\t\t                                        <a class=\"dropdown-item\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
\t\t\t\t\t\t                                            <i class=\"fas fa-server fa-fw\"></i>
\t\t\t\t\t\t                                            Judgehosts
\t\t\t\t\t\t                                            <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
\t\t\t\t\t\t                                        </a>
\t\t\t\t\t\t                                    </li>
\t\t\t\t\t\t                                    <li class=\"nav-item\">
\t\t\t\t\t\t                                        <a class=\"dropdown-item dropdown-disabled\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
\t\t\t\t\t\t                                            <i class=\"fas fa-bolt fa-fw\"></i>
\t\t\t\t\t\t                                            Internal error
\t\t\t\t\t\t                                            <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
\t\t\t\t\t\t                                        </a>
\t\t\t\t\t\t                                    </li>
\t\t\t\t\t\t                                </ul>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                        </li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-user-circle\"></i>Dashboard
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">6</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-1\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1-2\" aria-controls=\"submenu-1-2\">E-Commerce</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-1-2\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">E Commerce Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"ecommerce-product.html\">Product List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"ecommerce-product-single.html\">Product Single</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"ecommerce-product-checkout.html\">Product Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"dashboard-finance.html\">Finance</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"dashboard-sales.html\">Sales</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1-1\" aria-controls=\"submenu-1-1\">Infulencer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-1-1\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"dashboard-influencer.html\">Influencer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"influencer-finder.html\">Influencer Finder</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"influencer-profile.html\">Influencer Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-2\" aria-controls=\"submenu-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-rocket\"></i>UI Elements</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-2\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/cards.html\">Cards
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">New</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/general.html\">General</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/carousel.html\">Carousel</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/listgroup.html\">List Group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/typography.html\">Typography</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/accordions.html\">Accordions</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/tabs.html\">Tabs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-3\" aria-controls=\"submenu-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-chart-pie\"></i>Chart</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-3\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/chart-c3.html\">C3 Charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/chart-chartist.html\">Chartist Charts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/chart-charts.html\">Chart</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/chart-morris.html\">Morris</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/chart-sparkline.html\">Sparkline</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/chart-gauge.html\">Guage</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-4\" aria-controls=\"submenu-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-fw fa-wpforms\"></i>Forms</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-4\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/form-elements.html\">Form Elements</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/form-validation.html\">Parsely Validations</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/multiselect.html\">Multiselect</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/datepicker.html\">Date Picker</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/bootstrap-select.html\">Bootstrap Select</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-5\" aria-controls=\"submenu-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-table\"></i>Tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-5\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/general-table.html\">General Tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/data-tables.html\">Data Tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-divider\">
\t\t\t\t\t\t\t\t\t\t\t\tFeatures
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-6\" aria-controls=\"submenu-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-file\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-6\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/blank-page.html\">Blank Page</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/blank-page-header.html\">Blank Page Header</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/404-page.html\">404 page</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/sign-up.html\">Sign up Page</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/forgot-password.html\">Forgot Password</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/pricing.html\">Pricing Tables</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/timeline.html\">Timeline</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/calendar.html\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/sortable-nestable-lists.html\">Sortable/Nestable List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/widgets.html\">Widgets</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/media-object.html\">Media Objects</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/cropper-image.html\">Cropper</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/color-picker.html\">Color Picker</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-7\" aria-controls=\"submenu-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-inbox\"></i>Apps
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">New</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-7\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/inbox.html\">Inbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/email-details.html\">Email Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/email-compose.html\">Email Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/message-chat.html\">Message Chat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-8\" aria-controls=\"submenu-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-columns\"></i>Icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-8\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icon-fontawesome.html\">FontAwesome Icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icon-material.html\">Material Icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icon-simple-lineicon.html\">Simpleline Icon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icon-themify.html\">Themify Icon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icon-flag.html\">Flag Icons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/icon-weather.html\">Weather Icon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-9\" aria-controls=\"submenu-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-map-marker-alt\"></i>Maps</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-9\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/map-google.html\">Google Maps</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"pages/map-vector.html\">Vector Maps</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-10\" aria-controls=\"submenu-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-f fa-folder\"></i>Menu Level</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-10\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Level 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-11\" aria-controls=\"submenu-11\">Level 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-11\" class=\"collapse submenu\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Level 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Level 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Level 3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div> #}
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!--
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
\t    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('jury_index') }}\">Trang chủ</a>
\t    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"navbar-toggler-icon\"></span>
\t    </button>
\t
\t    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
\t        <ul class=\"navbar-nav mr-auto\">
\t
\t            {% if is_granted('ROLE_BALLOON') and not is_granted('ROLE_JURY') and not is_granted('ROLE_ADMIN') %}
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\"><i class=\"fas fa-map-marker-alt\"></i> Balloons</a>
\t                </li>
\t            {% endif %}
\t
\t            {% if is_granted('ROLE_ADMIN') %}
\t                <li class=\"nav-item dropdown\">
\t                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t                        <i class=\"fas fa-gavel\"></i> Judgehosts
\t                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
\t                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
\t                    </a>
\t                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t                        <a class=\"dropdown-item\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
\t                            <i class=\"fas fa-server fa-fw\"></i> Judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
\t                        </a>
\t                        <a class=\"dropdown-item dropdown-disabled\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
\t                            <i class=\"fas fa-bolt fa-fw\"></i> Internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
\t                        </a>
\t                    </div>
\t                </li>
\t            {% endif %}
\t
\t            {% if is_granted('ROLE_JURY') %}
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"{{ path('jury_clarifications') }}\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> Clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
\t                </li>
\t
\t
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"{{ path('jury_submissions') }}\"><i class=\"fas fa-file-code\"></i> Submissions</a>
\t                </li>
\t
\t                {% if show_shadow_differences %}
\t                    <li class=\"nav-item\">
\t                        <a class=\"nav-link\" href=\"{{ path('jury_shadow_differences') }}\"><i class=\"fas fa-not-equal\"></i> Shadow differences</a>
\t                    </li>
\t                {% endif %}
\t
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"{{ path('jury_rejudgings') }}\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> Rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
\t                </li>
\t            {% endif %}
\t
\t            {% if is_granted('ROLE_JURY') %}
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" href=\"{{ path('jury_scoreboard') }}\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
\t                </li>
\t            {% endif %}
\t            {% if is_granted('ROLE_TEAM') %}
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('team_index') }}\"><i class=\"fas fa-arrow-right\"></i> Team</a>
\t                </li>
\t            {% endif %}
\t        </ul>
\t
\t        <ul class=\"navbar-nav ml-auto\">
\t            {# Render user information + logout button #}
\t            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t                <li class=\"nav-item dropdown\">
\t                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t                        <i class=\"fas fa-user\"></i> {{ app.user.getUsername() }}
\t                    </a>
\t                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t                        {% if app.user and app.user.getName() %}
\t                            <a class=\"dropdown-item disabled\" href=\"#\">{{ app.user.getName() }}</a>
\t                        {% endif %}
\t
\t                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
\t                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
\t                        </a>
\t                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
\t                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
\t                        </a>
\t
\t                        {% if refresh is defined and refresh %}
\t                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
\t                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
\t                  {% if refresh_flag %}
\t                      Disable Refresh
\t                  {% else %}
\t                      Enable Refresh
\t                  {% endif %}
\t                </span>
\t                                {% if refresh %}
\t                                    <span class=\"small text-muted\">({{ refresh.after }}s)</span>
\t                                {% endif %}
\t                            </a>
\t                        {% endif %}
\t
\t                        <a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
\t                    </div>
\t                </li>
\t            {% else %}
\t                <li class=\"nav-item\">
\t                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('login') }}\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> Log in</a>
\t                </li>
\t            {% endif %}
\t
\t            {% include 'partials/menu_change_contest.html.twig' with {contest: current_contest, contests: current_contests, change_path: 'jury_change_contest', show_no_contest: true} %}
\t        </ul>
\t        {% include 'partials/menu_countdown.html.twig' with {contest: current_contest} %}
\t    </div>
\t</nav>
\t-->

", "jury/menu.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/menu.html.twig");
    }
}
