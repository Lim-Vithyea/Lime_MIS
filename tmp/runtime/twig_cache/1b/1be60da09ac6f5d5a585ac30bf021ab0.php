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

/* /survey/questions/answer/arrays/column/answer.twig */
class __TwigTemplate_c86daad7c7bfe49b60b331c6cee0d66f extends Template
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
        // line 10
        yield " <!-- Array by column -->

 <!-- answer -->
 <div class=\"ls-table-wrapper\" role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 13
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 13, $this->source);
        yield "\">
    <table class=\"";
        // line 14
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 14, $this->source);
        yield " table table-bordered table-col-hover\">
        <colgroup>
            <col class=\"col-answers\" style='width: ";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 16, $this->source);
        yield "%;' />
            <!-- @see https://www.w3.org/WAI/ARIA/apg/patterns/radio/ -->
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aQuestions"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["question"]) {
            // line 19
            yield "                <col
                    class=\"answers-list radio-list ";
            // line 20
            if (($context["i"] % 2)) {
                yield "ls-odd";
            } else {
                yield "ls-even";
            }
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["question"], "errormandatory", [], "any", false, false, true, 20)) {
                yield " ls-error-mandatory has-error";
            }
            yield "\"
                    style='width: ";
            // line 21
            yield $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 21, $this->source);
            yield "%;'
                    role=\"radiogroup\"
                    aria-labelledby=\"answertext";
            // line 23
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "myfname", [], "any", false, false, true, 23), 23, $this->source);
            yield "\"
                    >
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        </colgroup>
        <thead><!-- The global concept is hard to understand : must control if aria-labelledby for radiogroup is OK and if we can add aria-hidden here -->
            <tr class='ls-heading'><!-- unsure for ls-heading class here -->
                <td></td>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aQuestions"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["question"]) {
            // line 31
            yield "                    <th
                        id=\"answertext";
            // line 32
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "myfname", [], "any", false, false, true, 32), 32, $this->source);
            yield "\"
                        class=\"answertext control-label ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["question"], "errormandatory", [], "any", false, false, true, 33)) {
                yield " has-error error-mandatory";
            }
            yield "\"
                        role=\"columnheader\"
                    >
                        ";
            // line 36
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, true, 36), 36, $this->source));
            yield "
                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </tr>
        </thead>
        <tbody>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["labels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ansrow"]) {
            // line 43
            yield "                <tr id=\"javatbd";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname", [], "any", false, false, true, 43), 43, $this->source);
            yield "\" class=\"answers-list\">
                    <th id=\"label-";
            // line 44
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 44), 44, $this->source);
            yield "\" class=\"answertext";
            if ((($context["answerwidth"] ?? null) == 0)) {
                yield " visually-hidden";
            }
            yield "\">
                        ";
            // line 45
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "answer", [], "any", false, false, true, 45), 45, $this->source));
            yield "
                    </th>
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["anscode"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["ld"]) {
                // line 48
                yield "                        <td class=\"answer_cell_";
                yield $this->sandbox->ensureToStringAllowed($context["ld"], 48, $this->source);
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 48) == "")) {
                    yield " noanswer-item";
                }
                yield " answer-item radio-item\">
                                <input
                                    type=\"radio\"
                                    name=\"";
                // line 51
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = ($context["aQuestions"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestions"] ?? null), $context["i"], [], "array", false, false, true, 51)), "myfname", [], "any", false, false, true, 51), 51, $this->source);
                yield "\"
                                    value=\"";
                // line 52
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 52), 52, $this->source);
                yield "\"
                                    id=\"answer";
                // line 53
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["aQuestions"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array(get_class($__internal_compile_1), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestions"] ?? null), $context["i"], [], "array", false, false, true, 53)), "myfname", [], "any", false, false, true, 53), 53, $this->source);
                yield "-";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 53), 53, $this->source);
                yield "\"
                                    aria-labelledby=\"label-";
                // line 54
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 54), 54, $this->source);
                yield "\"
                                    ";
                // line 55
                yield $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = ($context["checked"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess && in_array(get_class($__internal_compile_3), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 55)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["checked"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 55), [], "array", false, false, true, 55))) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array(get_class($__internal_compile_2), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2[$context["ld"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["checked"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess && in_array(get_class($__internal_compile_4), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 55)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["checked"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 55), [], "array", false, false, true, 55)), $context["ld"], [], "array", false, false, true, 55)), 55, $this->source);
                yield "
                                     />
                                <label class=\"ls-label-xs-visibility \" for=\"answer";
                // line 57
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = ($context["aQuestions"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess && in_array(get_class($__internal_compile_5), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_5[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestions"] ?? null), $context["i"], [], "array", false, false, true, 57)), "myfname", [], "any", false, false, true, 57), 57, $this->source);
                yield "-";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "code", [], "any", false, false, true, 57), 57, $this->source);
                yield "\" aria-hidden=\"true\">
                                    ";
                // line 58
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = ($context["aQuestions"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess && in_array(get_class($__internal_compile_6), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_6[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestions"] ?? null), $context["i"], [], "array", false, false, true, 58)), "question", [], "any", false, false, true, 58), 58, $this->source));
                yield "
                                </label>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['ld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ansrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "        </tbody>
    </table>
</div>
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["anscode"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["ld"]) {
            // line 68
            yield "    ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 68), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = ($context["aQuestions"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess && in_array(get_class($__internal_compile_7), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_7[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestions"] ?? null), $context["i"], [], "array", false, false, true, 68)), "myfname", [], "any", false, false, true, 68), 68, $this->source)), CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = ($context["aQuestions"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess && in_array(get_class($__internal_compile_8), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_8[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestions"] ?? null), $context["i"], [], "array", false, false, true, 68)), "myfname_value", [], "any", false, false, true, 68), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 =             // line 69
($context["aQuestions"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess && in_array(get_class($__internal_compile_9), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_9[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestions"] ?? null), $context["i"], [], "array", false, false, true, 69)), "myfname", [], "any", false, false, true, 69), 69, $this->source)), "disabled" => true]], "method", false, false, true, 68), 68, $this->source);
            // line 72
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "
<!-- end of answer -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/column/answer.twig";
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
        return array (  233 => 74,  226 => 72,  224 => 69,  222 => 68,  218 => 67,  213 => 64,  206 => 62,  196 => 58,  190 => 57,  185 => 55,  181 => 54,  175 => 53,  171 => 52,  167 => 51,  157 => 48,  153 => 47,  148 => 45,  140 => 44,  135 => 43,  131 => 42,  126 => 39,  117 => 36,  109 => 33,  105 => 32,  102 => 31,  98 => 30,  92 => 26,  83 => 23,  78 => 21,  66 => 20,  63 => 19,  59 => 18,  54 => 16,  49 => 14,  45 => 13,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/column/answer.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\column\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18, "if" => 20);
        static $filters = array();
        static $functions = array("processString" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                [],
                ['processString'],
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
