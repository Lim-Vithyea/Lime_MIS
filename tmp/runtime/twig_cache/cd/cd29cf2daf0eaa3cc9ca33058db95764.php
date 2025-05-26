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

/* /survey/questions/answer/arrays/multiflexi/rows/answer_row.twig */
class __TwigTemplate_bd6b9ec0ed526f81edf3343972fe5d3a extends Template
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
        // line 17
        yield "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 19, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(($context["coreRowClass"] ?? null), 19, $this->source);
        yield " ";
        if (($context["odd"] ?? null)) {
            yield "ls-odd";
        } else {
            yield "ls-even";
        }
        if (($context["error"] ?? null)) {
            yield " ls-error-mandatory";
        }
        yield " ";
        if ((($context["error"] ?? null) && (($context["layout"] ?? null) == "checkbox"))) {
            yield " has-error";
        }
        yield "\" role=\"group\" aria-labelledby=\"answertext";
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 19, $this->source);
        yield "\">
    <th
        id=\"answertext";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 21, $this->source);
        yield "\"
        class=\"answertext control-label";
        // line 22
        if ((($context["error"] ?? null) && (($context["layout"] ?? null) != "checkbox"))) {
            yield " text-danger\" ";
        }
        if ((($context["answerwidth"] ?? null) == 0)) {
            yield " visually-hidden";
        }
        yield "\",
        role=\"rowheader\"
    >
        ";
        // line 25
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertext"] ?? null), 25, $this->source));
        yield "
        ";
        // line 27
        yield "        ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 27), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 27, $this->source)), ($context["row_value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 28
($context["myfname"] ?? null), 28, $this->source)), "disabled" => true]], "method", false, false, true, 27), 27, $this->source);
        // line 31
        yield "
    </th>
        ";
        // line 34
        yield "        ";
        yield $this->sandbox->ensureToStringAllowed(($context["answer_tds"] ?? null), 34, $this->source);
        yield "
    <!-- right -->
    ";
        // line 36
        if (($context["rightTd"] ?? null)) {
            // line 37
            yield "        <td class=\"answertextright\">";
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertextright"] ?? null), 37, $this->source));
            yield "</td>
    ";
        }
        // line 39
        yield "</tr>
<!-- end of answer_row -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/rows/answer_row.twig";
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
        return array (  107 => 39,  101 => 37,  99 => 36,  93 => 34,  89 => 31,  87 => 28,  85 => 27,  81 => 25,  70 => 22,  66 => 21,  44 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/multiflexi/rows/answer_row.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\multiflexi\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array();
        static $functions = array("processString" => 25);

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
