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

/* /survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig */
class __TwigTemplate_bd33ceba0ee312ae9e6962e9e3412dd7 extends Template
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
        // line 24
        yield "
<!-- answer_td -->
<td class=\"answer_cell_";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 26, $this->source);
        yield " answer-item ";
        yield $this->sandbox->ensureToStringAllowed(($context["answertypeclass"] ?? null), 26, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 26, $this->source);
        if (($context["error"] ?? null)) {
            yield " has-error";
        }
        yield "\">
        ";
        // line 28
        yield "        ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 28), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 28, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 29
($context["myfname2"] ?? null), 29, $this->source)), "disabled" => true]], "method", false, false, true, 28), 28, $this->source);
        // line 32
        yield "
        <label for=\"answer";
        // line 33
        yield $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 33, $this->source);
        yield "\" class='ls-label-xs-visibility' aria-hidden=\"true\">
            ";
        // line 34
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["dataTitle"] ?? null), 34, $this->source));
        yield "
        </label>
        ";
        // line 36
        if ((($context["inputboxlayout"] ?? null) == false)) {
            // line 37
            yield "            <!-- InputBox Layout False -->
            <select
                ";
            // line 40
            yield "                class=\"form-select text-end\"
                name=\"";
            // line 41
            yield $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 41, $this->source);
            yield "\"
                id=\"answer";
            // line 42
            yield $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 42, $this->source);
            yield "\"
                aria-labelledby=\"answertext";
            // line 43
            yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 43, $this->source);
            yield "_";
            yield $this->sandbox->ensureToStringAllowed(($context["dataCode"] ?? null), 43, $this->source);
            yield "\"
            >
                <option value=\"\">
                    ";
            // line 46
            yield gT("...");
            yield "
                </option>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["minvalue"] ?? null), ($context["maxvalue"] ?? null), ($context["stepvalue"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 49
                yield "                    ";
                $context["selected"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null)) && (gT($this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 49, $this->source)) == gT($this->sandbox->ensureToStringAllowed($context["i"], 49, $this->source))))) ? ("SELECTED") : (""));
                // line 50
                yield "                    <option value=\"";
                yield Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed($context["i"], 50, $this->source), ["." => $this->sandbox->ensureToStringAllowed(($context["sSeparator"] ?? null), 50, $this->source)]);
                yield "\" ";
                yield $this->sandbox->ensureToStringAllowed(($context["selected"] ?? null), 50, $this->source);
                yield ">
                        ";
                // line 51
                yield Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed($context["i"], 51, $this->source), ["." => $this->sandbox->ensureToStringAllowed(($context["sSeparator"] ?? null), 51, $this->source)]);
                yield "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "            </select>
        ";
        } elseif ((        // line 55
($context["inputboxlayout"] ?? null) == true)) {
            // line 56
            yield "            <!-- InputBox Layout -->
            ";
            // line 57
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 57), "textField", [($context["myfname2"] ?? null), ($context["value"] ?? null), ["id" => ("answer" . $this->sandbox->ensureToStringAllowed(            // line 58
($context["myfname2"] ?? null), 58, $this->source)), "aria-labelledby" => ((("answertext" . $this->sandbox->ensureToStringAllowed(            // line 59
($context["basename"] ?? null), 59, $this->source)) . "_") . $this->sandbox->ensureToStringAllowed(($context["dataCode"] ?? null), 59, $this->source)), "class" => (("multiflexitext form-control " . $this->sandbox->ensureToStringAllowed(            // line 60
($context["answertypeclass"] ?? null), 60, $this->source)) . " "), "title" => gT("Only numbers may be entered in this field."), "size" => ((            // line 62
($context["inputsize"] ?? null)) ? (($context["inputsize"] ?? null)) : (null)), "maxlength" => ((            // line 63
($context["maxlength"] ?? null)) ? (($context["maxlength"] ?? null)) : (null)), "data-number" => 1]], "method", false, false, true, 57), 57, $this->source);
            // line 66
            yield "
        ";
        }
        // line 68
        yield "</td>
<!-- end of answer_td -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig";
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
        return array (  143 => 68,  139 => 66,  137 => 63,  136 => 62,  135 => 60,  134 => 59,  133 => 58,  132 => 57,  129 => 56,  127 => 55,  124 => 54,  115 => 51,  108 => 50,  105 => 49,  101 => 48,  96 => 46,  88 => 43,  84 => 42,  80 => 41,  77 => 40,  73 => 37,  71 => 36,  66 => 34,  62 => 33,  59 => 32,  57 => 29,  55 => 28,  44 => 26,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\multiflexi\\rows\\cells\\answer_td.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26, "for" => 48, "set" => 49);
        static $filters = array("t" => 49, "replace" => 50);
        static $functions = array("processString" => 34, "gT" => 46, "range" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'replace'],
                ['processString', 'gT', 'range'],
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
