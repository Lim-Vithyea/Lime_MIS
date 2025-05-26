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

/* /survey/questions/answer/arrays/5point/rows/cells/answer_td_input.twig */
class __TwigTemplate_52af0637941076b4f2f89866928f5a34 extends Template
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
        // line 11
        yield "
<!-- td_input -->
<td class=\"answer_cell_";
        // line 13
        yield $this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 13, $this->source);
        if ((($context["i"] ?? null) == "")) {
            yield " noanswer-item";
        }
        yield " answer-item radio-item\">
    <input
        type=\"radio\"
        name=\"";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 16, $this->source);
        yield "\"
        id=\"answer";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 17, $this->source);
        yield "-";
        yield $this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 17, $this->source);
        yield "\"
        aria-labelledby=\"answer";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 18, $this->source);
        yield "-";
        yield $this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 18, $this->source);
        yield "\"
        value=\"";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 19, $this->source);
        yield "\"
        ";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(($context["CHECKED"] ?? null), 20, $this->source);
        yield "
     />
    <label for=\"answer";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 22, $this->source);
        yield "-";
        yield $this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 22, $this->source);
        yield "\" class=\"ls-label-xs-visibility\" aria-hidden=\"true\">
        ";
        // line 23
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["labelText"] ?? null), 23, $this->source));
        yield "
    </label>
</td>
<!-- end of td_input -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/5point/rows/cells/answer_td_input.twig";
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
        return array (  84 => 23,  78 => 22,  73 => 20,  69 => 19,  63 => 18,  57 => 17,  53 => 16,  44 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/5point/rows/cells/answer_td_input.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\5point\\rows\\cells\\answer_td_input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array();
        static $functions = array("processString" => 23);

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
