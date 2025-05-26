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

/* /survey/questions/answer/arrays/5point/answer.twig */
class __TwigTemplate_b653f71f92d509c8ca5ba3ef00ef0aeb extends Template
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
        yield "<!-- Array 5 point choice -->

<!-- answer -->
<div class=\"ls-table-wrapper\" role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 14
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 14, $this->source);
        yield "\">
    <table class=\"";
        // line 15
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 15, $this->source);
        yield " table table-bordered table-hover table-5-point-array\" role=\"group\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 15, $this->source);
        yield "\">
        <!-- Columns -->
        <colgroup class=\"col-responses\">
            <col class=\"col-answers\" style='width: ";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 18, $this->source);
        yield "%;' />
                ";
        // line 20
        yield "                ";
        yield $this->sandbox->ensureToStringAllowed(($context["sColumns"] ?? null), 20, $this->source);
        yield "
        </colgroup>
        <!-- Table headers -->
        <thead>
            <tr class=\"ls-heading\"><!-- same class for repeat heading too -->
                    ";
        // line 26
        yield "                    ";
        yield $this->sandbox->ensureToStringAllowed(($context["sHeaders"] ?? null), 26, $this->source);
        yield "
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody>
            
                ";
        // line 33
        yield "                ";
        yield $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null), 33, $this->source);
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
        return "/survey/questions/answer/arrays/5point/answer.twig";
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
        return array (  80 => 33,  70 => 26,  61 => 20,  57 => 18,  49 => 15,  45 => 14,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/5point/answer.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\5point\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
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
