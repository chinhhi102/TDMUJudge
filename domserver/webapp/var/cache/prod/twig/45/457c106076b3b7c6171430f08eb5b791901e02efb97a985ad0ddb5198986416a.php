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

/* base.html.twig */
class __TwigTemplate_7ff8ab00fe635a129c35796aeebcaf7897a7b31e0adaa0a0f91dcf4053c742a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- DOMjudge version ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["DOMJUDGE_VERSION"]) || array_key_exists("DOMJUDGE_VERSION", $context) ? $context["DOMJUDGE_VERSION"] : (function () { throw new RuntimeError('Variable "DOMJUDGE_VERSION" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " -->
    <meta charset=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["DJ_CHARACTER_SET"]) || array_key_exists("DJ_CHARACTER_SET", $context) ? $context["DJ_CHARACTER_SET"] : (function () { throw new RuntimeError('Variable "DJ_CHARACTER_SET" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style_jury.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/domjudge.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 18
        $this->displayBlock('extrahead', $context, $blocks);
        // line 23
        echo "</head>
<body style=\"padding-top: 4.5rem;\">
";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
<script>
    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40)) {
            // line 41
            echo "        var domjudge_base_url = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "getBaseURL", [], "method", false, false, false, 41), "html", null, true);
            echo "\";
    ";
        }
        // line 43
        echo "    \$(function () {
        \$('body').on('change', '.custom-file-input', function () {
            var files = this.files;
            var fileNames = [];
            for (var i = 0; i < files.length; i++) {
                fileNames.push(files.item(i).name);
            }
            \$(this).next('.custom-file-label').html(fileNames.join(\", \"));
            \$(this).next('.custom-file-label').removeClass('text-muted');
        });

        /* toggle refresh if set */
        ";
        // line 55
        if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 55, $this->source); })()))) {
            // line 56
            echo "        \$('#refresh-navitem').on('click', function () {
            toggleRefresh('";
            // line 57
            echo twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 57, $this->source); })()), "url", [], "any", false, false, false, 57);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 57, $this->source); })()), "after", [], "any", false, false, false, 57), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 57), 0)) : (0)), "html", null, true);
            echo ");
        });
        ";
        }
        // line 60
        echo "        /* Enable page refresh if set if wanted by the page, and wanted by the user */
        ";
        // line 61
        if ((((isset($context["refresh"]) || array_key_exists("refresh", $context)) && (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 61, $this->source); })())) && (isset($context["refresh_flag"]) || array_key_exists("refresh_flag", $context) ? $context["refresh_flag"] : (function () { throw new RuntimeError('Variable "refresh_flag" does not exist.', 61, $this->source); })()))) {
            // line 62
            echo "        enableRefresh('";
            echo twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 62, $this->source); })()), "url", [], "any", false, false, false, 62);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 62, $this->source); })()), "after", [], "any", false, false, false, 62), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 62), 0)) : (0)), "html", null, true);
            echo ");
        ";
        }
        // line 64
        echo "
        initializeAjaxModals();
    });
</script>
";
        // line 68
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        $this->displayBlock('extrafooter', $context, $blocks);
        // line 70
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "TDMU Judge";
    }

    // line 18
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_domjudge.css"), "html", null, true);
        echo "\">

        ";
        // line 21
        echo twig_escape_filter($this->env, (((isset($context["extrahead"]) || array_key_exists("extrahead", $context))) ? (_twig_default_filter((isset($context["extrahead"]) || array_key_exists("extrahead", $context) ? $context["extrahead"] : (function () { throw new RuntimeError('Variable "extrahead" does not exist.', 21, $this->source); })()), "")) : ("")), "html", null, true);
        echo "
    ";
    }

    // line 25
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 30
        $this->displayBlock('messages', $context, $blocks);
        // line 33
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "            </div>
        </div>
    </div>
";
    }

    // line 30
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                    ";
        $this->loadTemplate("partials/messages.html.twig", "base.html.twig", 31)->display($context);
        // line 32
        echo "                ";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 33, $this->source); })());
    }

    // line 68
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 69
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 69,  244 => 68,  237 => 33,  233 => 32,  230 => 31,  226 => 30,  219 => 34,  216 => 33,  214 => 30,  209 => 27,  205 => 26,  199 => 25,  193 => 21,  187 => 19,  183 => 18,  176 => 6,  170 => 70,  168 => 69,  166 => 68,  160 => 64,  150 => 62,  148 => 61,  145 => 60,  135 => 57,  132 => 56,  130 => 55,  116 => 43,  110 => 41,  108 => 40,  104 => 38,  102 => 26,  100 => 25,  96 => 23,  94 => 18,  90 => 17,  85 => 15,  81 => 14,  76 => 12,  72 => 11,  68 => 10,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- DOMjudge version {{ DOMJUDGE_VERSION }} -->
    <meta charset=\"{{ DJ_CHARACTER_SET }}\">
    <title>{% block title %}TDMU Judge{% endblock %}</title>
    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"{{ asset(\"css/bootstrap.min.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/fontawesome-all.min.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/style_jury.css\") }}\">

    <script src=\"{{ asset(\"js/jquery.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/bootstrap.bundle.min.js\") }}\"></script>

    <script src=\"{{ asset(\"js/domjudge.js\") }}\"></script>
    {% block extrahead %}
        <link rel=\"stylesheet\" href=\"{{ asset('style_domjudge.css') }}\">

        {{ extrahead|default('') }}
    {% endblock %}
</head>
<body style=\"padding-top: 4.5rem;\">
{% block menu %}{% endblock %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                {% block messages %}
                    {% include 'partials/messages.html.twig' %}
                {% endblock %}
                {% block content %}{{ body|raw }}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}

<script>
    {% if app.request %}
        var domjudge_base_url = \"{{ app.request.getBaseURL() }}\";
    {% endif %}
    \$(function () {
        \$('body').on('change', '.custom-file-input', function () {
            var files = this.files;
            var fileNames = [];
            for (var i = 0; i < files.length; i++) {
                fileNames.push(files.item(i).name);
            }
            \$(this).next('.custom-file-label').html(fileNames.join(\", \"));
            \$(this).next('.custom-file-label').removeClass('text-muted');
        });

        /* toggle refresh if set */
        {% if refresh is defined and refresh %}
        \$('#refresh-navitem').on('click', function () {
            toggleRefresh('{{ refresh.url | raw }}', {{ refresh.after }}, {{ refresh.ajax | default(0) }});
        });
        {% endif %}
        /* Enable page refresh if set if wanted by the page, and wanted by the user */
        {% if refresh is defined and refresh and refresh_flag %}
        enableRefresh('{{ refresh.url | raw }}', {{ refresh.after }}, {{ refresh.ajax | default(0) }});
        {% endif %}

        initializeAjaxModals();
    });
</script>
{% block footer %}{% endblock %}
{% block extrafooter %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/base.html.twig");
    }
}