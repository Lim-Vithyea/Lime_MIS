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

/* ./subviews/navigation/save_links.twig */
class __TwigTemplate_539740b54f69f366f9d0263ece8c25a7 extends Template
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
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 20), "load", [], "any", false, false, true, 20), "show", [], "any", false, false, true, 20) == "Y")) {
            // line 21
            yield "    <!-- Load unfinished survey button -->
    <li class=\"nav-item ls-no-js-hidden px-2\" ";
            // line 22
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "loadlinksli", [], "any", false, false, true, 22), 22, $this->source);
            yield ">
        <a href=\"#\" data-limesurvey-submit='{ \"loadall\":\"loadall\" }'
           class='nav-link ls-link-action ls-link-loadall'>
            ";
            // line 25
            yield gT("Load unfinished survey");
            yield "
        </a>
    </li>
";
        }
        // line 29
        yield "
";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 30), "save", [], "any", false, false, true, 30), "show", [], "any", false, false, true, 30) == "Y")) {
            // line 31
            yield "    <!-- Resume later button -->
    <li class=\"nav-item ls-no-js-hidden\">
        <a href=\"#\" data-limesurvey-submit='{ \"saveall\":\"saveall\" }' class='nav-link'>
            ";
            // line 34
            yield gT("Resume later");
            yield "
        </a>
        ";
            // line 36
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 36), "text", [], "any", false, false, true, 36) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 36), "showpopups", [], "any", false, false, true, 36) > 0))) {
                // line 37
                yield "            <div class=\"alert-popup\"></div>
            ";
                // line 38
                yield LS_Twig_Extension::registerScript("saveflashmessage", (((("
                \$('.alert-popup').popover({
                    title: '" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 40
($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 40), "title", [], "any", false, false, true, 40), 40, $this->source)) . "',
                    content: '<div>") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 41
($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 41), "text", [], "any", false, false, true, 41), 41, $this->source)) . "</div>',
                    html: true,
                    container: 'body',
                    placement: 'bottom',
                    delay: { 'show': 500, 'hide': 100 },
                    trigger: 'click',
                }).popover('show');
                setTimeout(function(){ \$('.alert-popup').popover('dispose'); }, 3500);
                "), "POS_POSTSCRIPT");
                // line 49
                yield "
        ";
            }
            // line 51
            yield "    </li>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/save_links.twig";
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
        return array (  97 => 51,  93 => 49,  83 => 41,  81 => 40,  78 => 38,  75 => 37,  73 => 36,  68 => 34,  63 => 31,  61 => 30,  58 => 29,  51 => 25,  45 => 22,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/save_links.twig", "C:\\wamp64\\www\\limemis\\Lime_MIS\\themes\\survey\\vanilla\\views\\subviews\\navigation\\save_links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array();
        static $functions = array("gT" => 25, "registerScript" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT', 'registerScript'],
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
