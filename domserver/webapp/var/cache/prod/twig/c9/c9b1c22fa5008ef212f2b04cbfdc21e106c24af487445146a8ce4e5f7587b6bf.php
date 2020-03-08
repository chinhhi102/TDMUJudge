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

/* jury/partials/rejudge_form.html.twig */
class __TwigTemplate_a294bd2ff8ee55c34c421d6a55e5fa33a31c13ab022749f1d9366c33770c0188 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    ";
        $context["buttonText"] = ((("Rejudge all for " . ($context["table"] ?? null)) . " ") . ($context["id"] ?? null));
        // line 5
        echo "    ";
        $context["questionText"] = (("Rejudge all submissions for this " . ($context["table"] ?? null)) . "?");
        // line 6
        echo "    ";
        $context["buttonDisabled"] = false;
        // line 7
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "        ";
            $context["includeAllButton"] = true;
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["includeAllButton"] = false;
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        if ( !(isset($context["buttonClass"]) || array_key_exists("buttonClass", $context))) {
            // line 13
            echo "        ";
            $context["buttonClass"] = "btn-outline-primary btn-sm";
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((((($context["table"] ?? null) == "submission") && (isset($context["submission"]) || array_key_exists("submission", $context))) && (isset($context["judgings"]) || array_key_exists("judgings", $context)))) {
            // line 17
            echo "        ";
            $context["buttonText"] = "Rejudge this submission";
            // line 18
            echo "        ";
            $context["questionText"] = (("Rejudge submission s" . ($context["id"] ?? null)) . "?");
            // line 19
            echo "        ";
            $context["includeAllButton"] = false;
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            $context["validResult"] = false;
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 23
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                ";
                    $context["validResult"] = twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 24);
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
        ";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "            ";
                if ( !($context["validResult"] ?? null)) {
                    // line 30
                    echo "                ";
                    $context["questionText"] = (("Restart judging of PENDING submission s" . ($context["id"] ?? null)) . ", are you sure?");
                    // line 31
                    echo "                ";
                    $context["buttonText"] = "Restart judging";
                    // line 32
                    echo "            ";
                } elseif ((($context["validResult"] ?? null) == "correct")) {
                    // line 33
                    echo "                ";
                    $context["questionText"] = (("Rejudge CORRECT submission s" . ($context["id"] ?? null)) . ", are you sure?");
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "        ";
            } else {
                // line 36
                echo "            ";
                if (( !($context["validResult"] ?? null) || (($context["validResult"] ?? null) == "correct"))) {
                    // line 37
                    echo "                ";
                    $context["buttonDisabled"] = true;
                    // line 38
                    echo "            ";
                }
                // line 39
                echo "        ";
            }
            // line 40
            echo "    ";
        }
        $___internal_fa18a51e507b3d7446647a32a2b12e077b153bbffa56530edebbfb547646840f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_fa18a51e507b3d7446647a32a2b12e077b153bbffa56530edebbfb547646840f_);
        // line 42
        echo "
<button type=\"button\" class=\"btn ";
        // line 43
        echo twig_escape_filter($this->env, ($context["buttonClass"] ?? null), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
        echo "\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"/>";
        // line 61
        if (($context["includeAllButton"] ?? null)) {
            // line 62
            echo "
                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>";
        }
        // line 69
        echo "
                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"full_rejudge\" name=\"full_rejudge\" checked>
                        <label class=\"custom-control-label\" for=\"full_rejudge\">Create rejudging</label>
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\"/>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/rejudge_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 81,  203 => 69,  195 => 62,  193 => 61,  190 => 60,  186 => 59,  181 => 57,  173 => 52,  161 => 43,  158 => 42,  156 => 3,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  117 => 28,  114 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudge_form.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/partials/rejudge_form.html.twig");
    }
}
