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

/* /survey/questions/answer/arrays/dualscale/answer_header.twig */
class __TwigTemplate_4f14a11577ee7e2a40bdad38a8ec9add extends Template
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
        yield "<tr class=\"ls-heading ls-header\" >
    ";
        // line 14
        yield doRender("/survey/questions/answer/arrays/dualscale/content_header", ["basename" => $this->sandbox->ensureToStringAllowed(        // line 17
($context["basename"] ?? null), 17, $this->source), "labelans0" => $this->sandbox->ensureToStringAllowed(        // line 18
($context["labelans0"] ?? null), 18, $this->source), "labelans1" => $this->sandbox->ensureToStringAllowed(        // line 19
($context["labelans1"] ?? null), 19, $this->source), "shownoanswer" => $this->sandbox->ensureToStringAllowed(        // line 20
($context["shownoanswer"] ?? null), 20, $this->source), "rightexists" => $this->sandbox->ensureToStringAllowed(        // line 21
($context["rightexists"] ?? null), 21, $this->source), "leftheader" => $this->sandbox->ensureToStringAllowed(        // line 22
($context["leftheader"] ?? null), 22, $this->source), "rightheader" => $this->sandbox->ensureToStringAllowed(        // line 23
($context["rightheader"] ?? null), 23, $this->source), "repeat" => false]);
        // line 26
        yield "
</tr>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/dualscale/answer_header.twig";
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
        return array (  52 => 26,  50 => 23,  49 => 22,  48 => 21,  47 => 20,  46 => 19,  45 => 18,  44 => 17,  43 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/dualscale/answer_header.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\dualscale\\answer_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("doRender" => 14);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['doRender'],
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
