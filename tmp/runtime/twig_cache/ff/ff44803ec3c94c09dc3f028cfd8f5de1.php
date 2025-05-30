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

/* ./subviews/navigation/clearall_links.twig */
class __TwigTemplate_00f124af2d8673db7531927fc6c99e56 extends Template
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
        yield "
";
        // line 20
        yield "

 ";
        // line 22
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 22) == true) || (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 22) == null))) {
            // line 23
            yield "     ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 23), "showclearall", [], "any", false, false, true, 23) == "on")) {
                // line 24
                yield "         <!-- Exit and clear survey -->
         <li class=\"nav-item ls-no-js-hidden px-2\">
             <a href=\"#\" class='nav-link ls-link-action ls-link-clearall'
                data-limesurvey-submit='{ \"clearall\":\"clearall\" }'
                data-confirmedby='{ \"confirm-clearall\":\"confirm\" }'
                data-confirmlabel='";
                // line 29
                yield gT("Please confirm you want to clear your response?");
                yield "'>
                 ";
                // line 30
                yield gT("Exit and clear survey");
                yield "
             </a>
         </li>
     ";
            }
            // line 34
            yield " ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/clearall_links.twig";
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
        return array (  70 => 34,  63 => 30,  59 => 29,  52 => 24,  49 => 23,  47 => 22,  43 => 20,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/clearall_links.twig", "C:\\wamp64\\www\\limemis\\Lime_MIS\\themes\\survey\\vanilla\\views\\subviews\\navigation\\clearall_links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array();
        static $functions = array("gT" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT'],
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
