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

/* /survey/questions/answer/arrays/5point/rows/answer_row.twig */
class __TwigTemplate_6d8372c90fefe2c7593bf3b18385c594 extends Template
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
        yield "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 16, $this->source);
        yield "\" class=\"answers-list radio-list mb-3 ";
        if (($context["odd"] ?? null)) {
            yield "ls-odd";
        } else {
            yield "ls-even";
        }
        if (($context["error"] ?? null)) {
            yield " ls-error-mandatory has-error";
        }
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 16, $this->source);
        yield "  role=\"radiogroup\"  aria-labelledby=\"answertext";
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 16, $this->source);
        yield "\">
    <th id=\"answertext";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 17, $this->source);
        yield "\" class=\"answertext control-label";
        if ((($context["answerwidth"] ?? null) == 0)) {
            yield " d-none visually-hidden";
        }
        yield "}\">
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
        yield "        ";
        yield $this->sandbox->ensureToStringAllowed(($context["answer_tds"] ?? null), 28, $this->source);
        yield "

</tr>
<!-- end of answer_row -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/5point/rows/answer_row.twig";
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
        return array (  82 => 28,  78 => 25,  76 => 22,  74 => 21,  69 => 18,  61 => 17,  44 => 16,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/5point/rows/answer_row.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\5point\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array();
        static $functions = array("processString" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
