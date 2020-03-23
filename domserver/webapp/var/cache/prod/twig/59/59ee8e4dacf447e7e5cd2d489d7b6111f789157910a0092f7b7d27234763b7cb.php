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

/* security/login.html.twig */
class __TwigTemplate_582d638e454e421f812f3738b5808fae4ecbe1c8c657661b911d5f6d8a9764fa extends \Twig\Template
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
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "TDMU Judge Login";
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_login.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
        // line 12
        $context["hasaltmethods"] = ((twig_in_filter("xheaders",         // line 13
(isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 13, $this->source); })())) && (isset($context["auth_xheaders_present"]) || array_key_exists("auth_xheaders_present", $context) ? $context["auth_xheaders_present"] : (function () { throw new RuntimeError('Variable "auth_xheaders_present" does not exist.', 13, $this->source); })())) || (twig_in_filter("ipaddress",         // line 14
(isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 14, $this->source); })())) && (twig_length_filter($this->env, (isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 14, $this->source); })())) > 0)));
        // line 15
        echo "    ";
        $context["showregular"] = ( !(isset($context["hasaltmethods"]) || array_key_exists("hasaltmethods", $context) ? $context["hasaltmethods"] : (function () { throw new RuntimeError('Variable "hasaltmethods" does not exist.', 15, $this->source); })()) || (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()));
        // line 16
        echo "
    <div class=\"form-signin\" id=\"loginform\">
        <img class=\"mb-4\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.png"), "html", null, true);
        echo "\" alt=\"TDMU Judge\" width=\"72\">
        ";
        // line 19
        $this->loadTemplate("partials/messages.html.twig", "security/login.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20))) {
            // line 21
            echo "            ";
            $context["message"] = (("You are currently automatically logged in as " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21)) . ".<br />Use the form below to change login.");
            // line 22
            echo "            ";
            $this->loadTemplate("partials/alert.html.twig", "security/login.html.twig", 22)->display(twig_array_merge($context, ["type" => "success"]));
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <br class=\"clearfix\">

        ";
        // line 27
        if ((isset($context["hasaltmethods"]) || array_key_exists("hasaltmethods", $context) ? $context["hasaltmethods"] : (function () { throw new RuntimeError('Variable "hasaltmethods" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "            <div class=\"additional-logins mr-2\">
                <a class=\"float-right text-muted\" href=\"#\" title=\"more auth methods\"
                   onclick=\"collapse('.regularLoginform'); return false;\" role=\"button\">
                    <i class=\"fas fa-user-ninja\"></i>
                </a>
                ";
            // line 33
            if ((twig_in_filter("xheaders", (isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 33, $this->source); })())) && (isset($context["auth_xheaders_present"]) || array_key_exists("auth_xheaders_present", $context) ? $context["auth_xheaders_present"] : (function () { throw new RuntimeError('Variable "auth_xheaders_present" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Preconfigured Sign In</h1>
                    <form action=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"_username\" value=\"__INVALID__\">
                        <div class=\"login-content\">
                            <p>
                                You can log in using credentials that have been configured by your
                                administrator.
                            </p>
                        </div>
                        <button class=\"mt-auto btn btn-lg btn-success btn-block\" type=\"submit\"
                                name=\"loginmethod\" value=\"xheaders\">
                            Log in using computer credentials
                        </button>
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=loginmethod]').focus();
                        });
                    </script>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            if ((twig_in_filter("ipaddress", (isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 57, $this->source); })())) && (twig_length_filter($this->env, (isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 57, $this->source); })())) > 0))) {
                // line 58
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Sign in with IP</h1>
                    <form action=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"loginmethod\" value=\"ipaddress\">
                        <div class=\"login-content\">
                            <p>
                                You can log in automatically to an account based on your IP Address.
                                ";
                // line 66
                if (((isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 66, $this->source); })()) == 1)) {
                    echo "The accounts associated with your IP are shown below.
                                ";
                } else {
                    // line 67
                    echo "The account associated with your IP is shown below.";
                }
                // line 68
                echo "                            </p>
                        </div>

                        ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 71, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                    // line 72
                    echo "                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\"
                                    name=\"_username\" value=\"";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 73), "html", null, true);
                    echo "\">
                                Log in as ";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 74), "html", null, true);
                    echo "
                            </button>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=_username]:first').focus();
                        });
                    </script>
                ";
            }
            // line 84
            echo "            </div>

            <div class=\"vertical-line regularLoginform";
            // line 86
            if ( !(isset($context["showregular"]) || array_key_exists("showregular", $context) ? $context["showregular"] : (function () { throw new RuntimeError('Variable "showregular" does not exist.', 86, $this->source); })())) {
                echo " d-none";
            }
            echo "\"></div>
        ";
        }
        // line 88
        echo "
        <div class=\"main-login ml-2 regularLoginform ";
        // line 89
        if ( !(isset($context["showregular"]) || array_key_exists("showregular", $context) ? $context["showregular"] : (function () { throw new RuntimeError('Variable "showregular" does not exist.', 89, $this->source); })())) {
            echo " d-none";
        }
        echo "\">
            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
            <form action=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <div class=\"login-content\">
                    ";
        // line 94
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 94, $this->source); })())) {
            // line 95
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 95, $this->source); })()), "messageKey", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 95, $this->source); })()), "messageData", [], "any", false, false, false, 95), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 97
        echo "
                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\"
                               placeholder=\"Username\" required autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                        <input type=\"password\" id=\"inputPassword\" name=\"_password\"
                               class=\"form-control\"
                               placeholder=\"Password\" required autocomplete=\"current-password\">
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
                ";
        // line 111
        if ((isset($context["allow_registration"]) || array_key_exists("allow_registration", $context) ? $context["allow_registration"] : (function () { throw new RuntimeError('Variable "allow_registration" does not exist.', 111, $this->source); })())) {
            // line 112
            echo "                    <div class=\"mt-3\">
                        Don't have an account?<br/>
                        <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register", [], true);
            echo "\">Register now</a>.
                    </div>
                ";
        }
        // line 117
        echo "            </form>
        </div>

        <p class=\"mt-5 mb-3 small text-muted\">DOMjudge ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["DOMJUDGE_VERSION"]) || array_key_exists("DOMJUDGE_VERSION", $context) ? $context["DOMJUDGE_VERSION"] : (function () { throw new RuntimeError('Variable "DOMJUDGE_VERSION" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "</p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 120,  284 => 117,  278 => 114,  274 => 112,  272 => 111,  256 => 97,  250 => 95,  248 => 94,  243 => 92,  239 => 91,  232 => 89,  229 => 88,  222 => 86,  218 => 84,  209 => 77,  200 => 74,  196 => 73,  193 => 72,  189 => 71,  184 => 68,  181 => 67,  176 => 66,  168 => 61,  163 => 59,  160 => 58,  158 => 57,  155 => 56,  133 => 37,  128 => 35,  125 => 34,  123 => 33,  116 => 28,  114 => 27,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  95 => 19,  91 => 18,  87 => 16,  84 => 15,  82 => 14,  81 => 13,  80 => 12,  77 => 11,  73 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}TDMU Judge Login{% endblock %}

{% block extrahead %}
    <link rel=\"stylesheet\" href=\"{{ asset('style_login.css') }}\">
{% endblock %}

{% block messages %}{% endblock %}
{% block body %}

    {% set hasaltmethods =
        (\"xheaders\" in allowed_authmethods and auth_xheaders_present) or
        (\"ipaddress\" in allowed_authmethods and auth_ipaddress_users|length > 0) %}
    {% set showregular = not hasaltmethods or error %}

    <div class=\"form-signin\" id=\"loginform\">
        <img class=\"mb-4\" src=\"{{ asset('images/DOMjudgelogo.png') }}\" alt=\"TDMU Judge\" width=\"72\">
        {% include 'partials/messages.html.twig' %}
        {% if app.user is not null %}
            {% set message = 'You are currently automatically logged in as ' ~ app.user.username ~ '.<br />Use the form below to change login.' %}
            {% include 'partials/alert.html.twig' with {type: 'success'} %}
        {% endif %}

        <br class=\"clearfix\">

        {% if hasaltmethods %}
            <div class=\"additional-logins mr-2\">
                <a class=\"float-right text-muted\" href=\"#\" title=\"more auth methods\"
                   onclick=\"collapse('.regularLoginform'); return false;\" role=\"button\">
                    <i class=\"fas fa-user-ninja\"></i>
                </a>
                {% if \"xheaders\" in allowed_authmethods and auth_xheaders_present %}
                    <h1 class=\"h3 mb-3 font-weight-normal\">Preconfigured Sign In</h1>
                    <form action=\"{{ path('login') }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\">
                        <input type=\"hidden\" name=\"_username\" value=\"__INVALID__\">
                        <div class=\"login-content\">
                            <p>
                                You can log in using credentials that have been configured by your
                                administrator.
                            </p>
                        </div>
                        <button class=\"mt-auto btn btn-lg btn-success btn-block\" type=\"submit\"
                                name=\"loginmethod\" value=\"xheaders\">
                            Log in using computer credentials
                        </button>
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=loginmethod]').focus();
                        });
                    </script>
                {% endif %}

                {% if \"ipaddress\" in allowed_authmethods and auth_ipaddress_users|length > 0 %}
                    <h1 class=\"h3 mb-3 font-weight-normal\">Sign in with IP</h1>
                    <form action=\"{{ path('login') }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\">
                        <input type=\"hidden\" name=\"loginmethod\" value=\"ipaddress\">
                        <div class=\"login-content\">
                            <p>
                                You can log in automatically to an account based on your IP Address.
                                {% if auth_ipaddress_users == 1 %}The accounts associated with your IP are shown below.
                                {% else %}The account associated with your IP is shown below.{% endif %}
                            </p>
                        </div>

                        {% for u in auth_ipaddress_users %}
                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\"
                                    name=\"_username\" value=\"{{ u.username }}\">
                                Log in as {{ u.username }}
                            </button>
                        {% endfor %}
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=_username]:first').focus();
                        });
                    </script>
                {% endif %}
            </div>

            <div class=\"vertical-line regularLoginform{% if not showregular %} d-none{% endif %}\"></div>
        {% endif %}

        <div class=\"main-login ml-2 regularLoginform {% if not showregular %} d-none{% endif %}\">
            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
            <form action=\"{{ path('login') }}\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <div class=\"login-content\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\"
                               placeholder=\"Username\" required autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                        <input type=\"password\" id=\"inputPassword\" name=\"_password\"
                               class=\"form-control\"
                               placeholder=\"Password\" required autocomplete=\"current-password\">
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
                {% if allow_registration %}
                    <div class=\"mt-3\">
                        Don't have an account?<br/>
                        <a href=\"{{ url('register', {}, true) }}\">Register now</a>.
                    </div>
                {% endif %}
            </form>
        </div>

        <p class=\"mt-5 mb-3 small text-muted\">DOMjudge {{ DOMJUDGE_VERSION }}</p>
    </div>

{% endblock %}
", "security/login.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/security/login.html.twig");
    }
}
