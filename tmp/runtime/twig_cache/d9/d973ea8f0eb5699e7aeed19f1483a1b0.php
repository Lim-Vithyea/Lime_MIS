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

/* survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig */
class __TwigTemplate_3b01f9ec07426d05778bb9d95393ee68 extends Template
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
        // line 12
        yield "
<!-- answer_td -->
<td class=\"answer_cell_";
        // line 14
        yield $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 14, $this->source);
        if ((($context["ld"] ?? null) == "")) {
            yield " noanswer-item";
        }
        yield " answer-item radio-item\">
    <input
        type=\"radio\"
        name=\"";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 17, $this->source);
        yield "\"
        value=\"";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 18, $this->source);
        yield "\"
        id=\"answer";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 19, $this->source);
        yield "-";
        yield $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 19, $this->source);
        yield "\"
        aria-labelledby=\"answer";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 20, $this->source);
        yield "-";
        yield $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 20, $this->source);
        yield "\"
        ";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["checked"] ?? null), 21, $this->source);
        yield "
    />
    <label for=\"answer";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 23, $this->source);
        yield "-";
        yield $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 23, $this->source);
        yield "\" class=\"ls-label-xs-visibility\" aria-hidden=\"true\">
        ";
        // line 24
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source));
        yield "
    </label>
</td>
<!-- end of answer_td -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig";
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
        return array (  84 => 24,  78 => 23,  73 => 21,  67 => 20,  61 => 19,  57 => 18,  53 => 17,  44 => 14,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\array\\no_dropdown\\rows\\cells\\answer_td.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array();
        static $functions = array("processString" => 24);

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
