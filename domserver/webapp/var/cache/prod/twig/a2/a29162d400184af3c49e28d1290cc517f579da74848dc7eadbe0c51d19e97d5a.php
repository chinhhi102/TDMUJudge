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

/* jury/partials/country_select.html.twig */
class __TwigTemplate_5b20f99ad5d9d4611d67eb4a7c51749990da7916ee750bf38fe12bb098aa5bcf extends \Twig\Template
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
        echo "<script>
    var template = function(element) {
        var imgBase = '';
        ";
        // line 4
        $context["countryFlag"] = "images/countries/NLD.png";
        // line 5
        echo "        ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "        // Use a country flag we know exists to automatically determine base path and asset version
        imgBase = \"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "\";
        ";
        }
        // line 9
        echo "
        var img = element.id == undefined || element.id == \"\" || imgBase == \"\"
            ? ''
            : '<img src=\"' + imgBase.replace(\"NLD.png\", element.id + \".png\", 1) + '\" class=\"countryflag\">&nbsp;';

        return img + element.text;
    };

    \$('";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "').select2({
        templateResult: template,
        templateSelection: template,

        // Prevent escaping
        escapeMarkup: function(t) {
            return t;
        },
        theme: \"bootstrap\"
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/country_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  55 => 9,  50 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var template = function(element) {
        var imgBase = '';
        {% set countryFlag = 'images/countries/NLD.png' %}
        {% if countryFlag | assetExists %}
        // Use a country flag we know exists to automatically determine base path and asset version
        imgBase = \"{{ asset(countryFlag) }}\";
        {% endif %}

        var img = element.id == undefined || element.id == \"\" || imgBase == \"\"
            ? ''
            : '<img src=\"' + imgBase.replace(\"NLD.png\", element.id + \".png\", 1) + '\" class=\"countryflag\">&nbsp;';

        return img + element.text;
    };

    \$('{{ field }}').select2({
        templateResult: template,
        templateSelection: template,

        // Prevent escaping
        escapeMarkup: function(t) {
            return t;
        },
        theme: \"bootstrap\"
    });

</script>
", "jury/partials/country_select.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/partials/country_select.html.twig");
    }
}
