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

/* /survey/questions/answer/arrays/array/no_dropdown/rows/cells/header_answer.twig */
class __TwigTemplate_b99ad6ac7398fce9995c6b860d62f592 extends Template
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
        yield "<th class=\"";
        yield $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 12, $this->source);
        yield "\" ";
        if ( !($context["isrepeat"] ?? null)) {
            yield " id=\"answer";
            yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 12, $this->source);
            yield "-";
            yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 12, $this->source);
            yield "\" role=\"columnheader\" ";
        }
        yield ">
    ";
        // line 13
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 13, $this->source));
        yield "
</th>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/array/no_dropdown/rows/cells/header_answer.twig";
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
        return array (  53 => 13,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/array/no_dropdown/rows/cells/header_answer.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\array\\no_dropdown\\rows\\cells\\header_answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array();
        static $functions = array("processString" => 13);

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
