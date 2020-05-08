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

/* jury/base.html.twig */
class __TwigTemplate_6897d2685bcd817dd79c2bd36e39b54da4be7a4302c8d53f815aaeb7328e51e4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'messages' => [$this, 'block_messages'],
            'extrahead' => [$this, 'block_extrahead'],
            'menu' => [$this, 'block_menu'],
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "jury/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "TDMU Judge")) : ("TDMU Judge")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "

  ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashBag", [], "any", false, false, false, 10), "has", [0 => "scoreboard_refresh"], "method", false, false, false, 10)) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "flashBag", [], "any", false, false, false, 11), "get", [0 => "scoreboard_refresh"], "method", false, false, false, 11));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "      ";
                $this->loadTemplate("jury/refresh_scoreboard.html.twig", "jury/base.html.twig", 12)->display($context);
                // line 13
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  ";
        }
    }

    // line 17
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_jury.css"), "html", null, true);
        echo "\" />
";
    }

    // line 22
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  ";
        $this->loadTemplate("jury/menu.html.twig", "jury/base.html.twig", 23)->display($context);
    }

    // line 25
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "  <script>
    \$(function () { /* Show the notification options if the browser supports it
    */ if ('Notification' in window) {
    \$('#notify_disable').click(disableNotifications);
    \$('#notify_enable').click(enableNotifications); if
    (getCookie('domjudge_notify') != 1) {
    \$('#notify_enable').removeClass('d-none'); } else {
    \$('#notify_disable').removeClass('d-none'); } }

    updateMenuAlerts(); setInterval(updateMenuAlerts, 20000); });
  </script>
";
    }

    public function getTemplateName()
    {
        return "jury/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 26,  137 => 25,  132 => 23,  128 => 22,  122 => 19,  117 => 18,  113 => 17,  108 => 14,  94 => 13,  91 => 12,  73 => 11,  71 => 10,  65 => 8,  61 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  {{ title|default('TDMU Judge') }}
{% endblock %}

{% block messages %}
  {{ parent() }}

  {% if app.session.flashBag.has('scoreboard_refresh') %}
    {% for message in app.session.flashBag.get('scoreboard_refresh') %}
      {% include 'jury/refresh_scoreboard.html.twig' %}
    {% endfor %}
  {% endif %}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset('style_jury.css') }}\" />
{% endblock %}

{% block menu %}
  {% include 'jury/menu.html.twig' %}
{% endblock %}
{% block footer %}
  <script>
    \$(function () { /* Show the notification options if the browser supports it
    */ if ('Notification' in window) {
    \$('#notify_disable').click(disableNotifications);
    \$('#notify_enable').click(enableNotifications); if
    (getCookie('domjudge_notify') != 1) {
    \$('#notify_enable').removeClass('d-none'); } else {
    \$('#notify_disable').removeClass('d-none'); } }

    updateMenuAlerts(); setInterval(updateMenuAlerts, 20000); });
  </script>
{% endblock %}
", "jury/base.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/base.html.twig");
    }
}
