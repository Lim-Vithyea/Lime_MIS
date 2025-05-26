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

/* /survey/questions/answer/arrays/multiflexi/answer.twig */
class __TwigTemplate_02ce698ee59fb00c5545565f11e08726 extends Template
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
        // line 16
        yield "<!-- answer -->
<div  role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 17, $this->source);
        yield "\">
    <table class=\"";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 18, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 18, $this->source);
        yield " table table-bordered table-hover\">

        <colgroup class=\"col-responses\">
            <col class=\"answertext\" style='width: ";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 21, $this->source);
        yield "%;'/>

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["ld"]) {
            // line 24
            yield "                <col class=\"";
            yield "\" style='width: ";
            yield $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 24, $this->source);
            yield "%;'/> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
            ";
        // line 27
        if (($context["right_exists"] ?? null)) {
            // line 28
            yield "                <col class=\"answertextright ";
            yield "\" style='width: ";
            yield $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 28, $this->source);
            yield "%;' />
            ";
        }
        // line 30
        yield "        </colgroup>

        <thead>
            <tr class=\"ls-heading ls-header\">
                <td></td>

                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["label"]) {
            // line 37
            yield "                    <th id=\"answertext";
            yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 37, $this->source);
            yield "_";
            yield $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["labelcode"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["labelcode"] ?? null), $context["i"], [], "array", false, false, true, 37)), 37, $this->source);
            yield "\" class=\"answertext control-label\" role=\"columnheader\">";
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($context["label"], 37, $this->source));
            yield "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
                ";
        // line 40
        if (($context["right_exists"] ?? null)) {
            // line 41
            yield "                    <td></td>
                ";
        }
        // line 43
        yield "            </tr>
        </thead>

        <tbody>
                ";
        // line 48
        yield "                ";
        yield $this->sandbox->ensureToStringAllowed(($context["sAnswerRows"] ?? null), 48, $this->source);
        yield "
        </tbody>
    </table>
</div>
<!-- end of answer -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/answer.twig";
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
        return array (  126 => 48,  120 => 43,  116 => 41,  114 => 40,  111 => 39,  98 => 37,  94 => 36,  86 => 30,  79 => 28,  77 => 27,  74 => 26,  64 => 24,  60 => 23,  55 => 21,  47 => 18,  43 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/multiflexi/answer.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\multiflexi\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 23, "if" => 27);
        static $filters = array();
        static $functions = array("processString" => 37);

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
