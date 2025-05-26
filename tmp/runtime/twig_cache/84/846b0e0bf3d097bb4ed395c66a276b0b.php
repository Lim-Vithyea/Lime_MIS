<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /admin/labels/labelRow.twig */
class __TwigTemplate_989ad5bdb42000acc3081f8e82e8ba2c extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "<tr class=\"labelDatas\" style='white-space: nowrap;' id='row_";
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 14, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 14, $this->source);
        yield "'>
    ";
        // line 15
        if ( !($context["first"] ?? null)) {
            // line 16
            yield "        <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 16, $this->source));
            yield "</td>
        <td>";
            // line 17
            yield $this->sandbox->ensureToStringAllowed(($context["assessmentValue"] ?? null), 17, $this->source);
            yield "</td>
    ";
        } else {
            // line 19
            yield "        <td>
            <span class=\"ri-menu-fill bigIcons text-success\"></span>
        </td>

        <td>
            <input type='hidden' class='hiddencode' value='";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 24, $this->source));
            yield "'/>
            <input type='text' class='codeval  form-control  ' id='code_";
            // line 25
            yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 25, $this->source);
            yield "' name='code_";
            yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 25, $this->source);
            yield "' maxlength='20' size='20' value='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 25, $this->source));
            yield "'/>
        </td>

        <td>
            <input type=\"number\" class='assessmentval  form-control  ' id='assessmentvalue_";
            // line 29
            yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 29, $this->source);
            yield "' style='text-align: right;' name='assessmentvalue_";
            yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 29, $this->source);
            yield "' maxlength='5' size='6' value='";
            yield $this->sandbox->ensureToStringAllowed(($context["assessmentValue"] ?? null), 29, $this->source);
            yield "'/>
        </td>
    ";
        }
        // line 32
        yield "
    <td>
        <input type='text' class=\" form-control  \" name='title_";
        // line 34
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 34, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 34, $this->source);
        yield "' id='title_";
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 34, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 34, $this->source);
        yield "' maxlength='3000' size='80' value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 34, $this->source));
        yield "\" />
    </td>
    <td>
        <div class=\"icon-btn-row\">
            ";
        // line 38
        if (($context["hasLabelSetUpdatePermission"] ?? null)) {
            // line 39
            yield "                <a
                    href='#'
                    class=\"btn btn-outline-secondary btn-sm htmleditor--openmodal\"
                    data-target-field-id=\"title_";
            // line 42
            yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 42, $this->source);
            yield "_";
            yield $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 42, $this->source);
            yield "\"
                    data-bs-toggle=\"tooltip\"
                    title=\"";
            // line 44
            yield gT("Open editor");
            yield "\">
                    <i class=\"ri-file-edit-line\"></i>
                </a>
                ";
            // line 47
            if (($context["first"] ?? null)) {
                // line 48
                yield "                    <button class=\"btn btn-outline-secondary btn-sm btnaddanswer\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                yield gT("Add label");
                yield "\">
                        <i class=\"ri-add-circle-fill text-success\"></i>
                    </button>
                    <button class=\"btn btn-outline-secondary btn-sm btndelanswer\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 51
                yield gT("Delete label");
                yield "\">
                        <i class=\"ri-indeterminate-circle-fill text-danger\"></i>
                    </button>
                ";
            }
            // line 55
            yield "            ";
        }
        // line 56
        yield "        </div>
    </td>
</tr>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/admin/labels/labelRow.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  149 => 56,  146 => 55,  139 => 51,  132 => 48,  130 => 47,  124 => 44,  117 => 42,  112 => 39,  110 => 38,  95 => 34,  91 => 32,  81 => 29,  70 => 25,  66 => 24,  59 => 19,  54 => 17,  49 => 16,  47 => 15,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/labels/labelRow.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\admin\\labels\\labelRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16);
        static $functions = array("gT" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['gT'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
