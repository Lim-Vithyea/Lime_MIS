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

/* survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig */
class __TwigTemplate_d7f16aa9d1907f949ca919c567895b41 extends Template
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
        // line 13
        yield "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 15
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 15, $this->source);
        yield "\" class=\"answers-list radio-list ";
        if (($context["odd"] ?? null)) {
            yield " ls-odd";
        } else {
            yield " ls-even";
        }
        // line 16
        if (($context["error"] ?? null)) {
            yield " ls-error-mandatory has-error";
        }
        yield "\" role=\"radiogroup\"  aria-labelledby=\"answertext";
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 16, $this->source);
        yield "\">
    <th id=\"answertext";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 17, $this->source);
        yield "\" class=\"answertext control-label";
        if ((($context["answerwidth"] ?? null) == 0)) {
            yield " visually-hidden";
        }
        yield "\">
        ";
        // line 18
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertext"] ?? null), 18, $this->source));
        yield "
        
        ";
        // line 21
        yield "        ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 21), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 21, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 22
($context["myfname"] ?? null), 22, $this->source)), "disabled" => true]], "method", false, false, true, 21), 21, $this->source);
        // line 25
        yield "
    </th>

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aAnswerColumns"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aAnswerColumn"]) {
            // line 29
            yield "            ";
            yield from             $this->loadTemplate("survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig", "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig", 29)->unwrap()->yield(CoreExtension::merge($context, $context["aAnswerColumn"]));
            // line 30
            yield "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAnswerColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "        ";
        // line 32
        yield "    
    ";
        // line 33
        if (($context["right_exists"] ?? null)) {
            // line 34
            yield "        <th class='answertextright information-item";
            if ((($context["answerwidth"] ?? null) == 0)) {
                yield " visually-hidden";
            }
            yield "'>";
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertextright"] ?? null), 34, $this->source));
            yield "</th>
    ";
        }
        // line 36
        yield "    
        ";
        // line 38
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["aNoAnswerColumn"] ?? null))) {
            // line 39
            yield "            ";
            yield from             $this->loadTemplate("survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig", "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig", 39)->unwrap()->yield(CoreExtension::merge($context, ($context["aNoAnswerColumn"] ?? null)));
            // line 40
            yield "        ";
        }
        // line 41
        yield "    
</tr>
<!-- end of answer_row -->";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig";
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
        return array (  145 => 41,  142 => 40,  139 => 39,  136 => 38,  133 => 36,  123 => 34,  121 => 33,  118 => 32,  116 => 31,  102 => 30,  99 => 29,  82 => 28,  77 => 25,  75 => 22,  73 => 21,  68 => 18,  60 => 17,  52 => 16,  44 => 15,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\array\\no_dropdown\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "for" => 28, "include" => 29);
        static $filters = array();
        static $functions = array("processString" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'include'],
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
