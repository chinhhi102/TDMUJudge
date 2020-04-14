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
\t<div class=\"menu-list\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t<a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
\t\t\t\t<ul class=\"navbar-nav flex-column\">
\t\t\t\t\t<li class=\"nav-divider\">
\t\t\t\t\t\tMenu
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 84
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 85
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\tBalloons</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 91
        echo "
\t\t\t\t\t";
        // line 92
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 93
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-gavel\"></i>
\t\t\t\t\t\t\t\tJudgehosts
\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse submenu\" id=\"submenu-1\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-server fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t\tJudgehosts
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-disabled\" href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bolt fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t\tInternal error
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 120
        echo "
\t\t\t\t\t";
        // line 121
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 122
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 123
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\tClarifications
\t\t\t\t\t\t\t\t<span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-file-code\"></i>
\t\t\t\t\t\t\t\tSubmissions</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
            // line 137
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 137, $this->source); })())) {
                // line 138
                echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 139
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-not-equal\"></i>
\t\t\t\t\t\t\t\t\tShadow differences</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 144
            echo "
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sync\"></i>
\t\t\t\t\t\t\t\tRejudgings
\t\t\t\t\t\t\t\t<span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 153
        echo "
\t\t\t\t\t";
        // line 154
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 155
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 156
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-list-ol\"></i>
\t\t\t\t\t\t\t\tScoreboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 161
        echo "\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 162
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" target=\"_top\" href=\"";
            // line 163
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-right\"></i>
\t\t\t\t\t\t\t\tTeam</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</div>
</div>
\t\t\t
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->";
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
        return array (  316 => 168,  308 => 163,  305 => 162,  302 => 161,  294 => 156,  291 => 155,  289 => 154,  286 => 153,  276 => 146,  272 => 144,  264 => 139,  261 => 138,  259 => 137,  251 => 132,  239 => 123,  236 => 122,  234 => 121,  231 => 120,  218 => 110,  208 => 103,  196 => 93,  194 => 92,  191 => 91,  183 => 86,  180 => 85,  178 => 84,  170 => 79,  152 => 63,  150 => 62,  147 => 61,  145 => 60,  142 => 59,  134 => 54,  131 => 53,  122 => 47,  119 => 46,  115 => 44,  109 => 42,  107 => 41,  104 => 40,  100 => 38,  96 => 36,  94 => 35,  89 => 32,  87 => 31,  75 => 21,  69 => 19,  67 => 18,  60 => 16,  57 => 15,  55 => 14,  44 => 6,  37 => 1,);
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
\t<div class=\"menu-list\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t<a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
\t\t\t\t<ul class=\"navbar-nav flex-column\">
\t\t\t\t\t<li class=\"nav-divider\">
\t\t\t\t\t\tMenu
\t\t\t\t\t</li>
\t\t\t\t\t{% if is_granted('ROLE_BALLOON') and not is_granted('ROLE_JURY') and not is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\tBalloons</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-gavel\"></i>
\t\t\t\t\t\t\t\tJudgehosts
\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse submenu\" id=\"submenu-1\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-server fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t\tJudgehosts
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-disabled\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bolt fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t\tInternal error
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if is_granted('ROLE_JURY') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_clarifications') }}\" id=\"menu_clarifications\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\tClarifications
\t\t\t\t\t\t\t\t<span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_submissions') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-file-code\"></i>
\t\t\t\t\t\t\t\tSubmissions</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% if show_shadow_differences %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_shadow_differences') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-not-equal\"></i>
\t\t\t\t\t\t\t\t\tShadow differences</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_rejudgings') }}\" id=\"menu_rejudgings\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sync\"></i>
\t\t\t\t\t\t\t\tRejudgings
\t\t\t\t\t\t\t\t<span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if is_granted('ROLE_JURY') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('jury_scoreboard') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-list-ol\"></i>
\t\t\t\t\t\t\t\tScoreboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if is_granted('ROLE_TEAM') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" target=\"_top\" href=\"{{ path('team_index') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-right\"></i>
\t\t\t\t\t\t\t\tTeam</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</div>
</div>
\t\t\t
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->", "jury/menu.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/menu.html.twig");
    }
}
