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

/* jury/partials/judgehost_list.html.twig */
class __TwigTemplate_bd92a3df0c4c50bcf30ca2dca0b40b73ada6bb7594e7d40dee215480fd1f17c0 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/partials/judgehost_list.html.twig", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["judgehosts"]) || array_key_exists("judgehosts", $context) ? $context["judgehosts"] : (function () { throw new RuntimeError('Variable "judgehosts" does not exist.', 2, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 2, $this->source); })()), (isset($context["num_actions"]) || array_key_exists("num_actions", $context) ? $context["num_actions"] : (function () { throw new RuntimeError('Variable "num_actions" does not exist.', 2, $this->source); })()), ["ordering" => "false"]], 2, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/partials/judgehost_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"jury/jury_macros.twig\" as macros %}
{{ macros.table(judgehosts, table_fields, num_actions, {ordering: 'false'}) }}
", "jury/partials/judgehost_list.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/partials/judgehost_list.html.twig");
    }
}
