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

/* ./subviews/navigation/navigator.twig */
class __TwigTemplate_6af1a8d7a81dbc998679998d5d40eac8 extends Template
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
        // line 21
        yield "
";
        // line 23
        $context["aNavigator"] = CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 23);
        // line 24
        yield "
<!-- PRESENT THE NAVIGATOR -->
<div class=\"";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 26), "navigatorcontainer", [], "any", false, false, true, 26), 26, $this->source);
        yield " row navigator space-col\" id=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 26), "navigatorcontainer", [], "any", false, false, true, 26), 26, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "navigatorcontainer", [], "any", false, false, true, 26), 26, $this->source);
        yield ">

    <!-- Previous button container -->
    <div class=\"";
        // line 29
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "navigatorbuttonl", [], "any", false, false, true, 29), 29, $this->source);
        yield " col-6 text-start\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 29), "navigatorbuttonl", [], "any", false, false, true, 29), 29, $this->source);
        yield ">

        ";
        // line 32
        yield "        ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "popupPreview", [], "any", false, false, true, 32) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aNavigator"] ?? null), "aMovePrev", [], "any", false, false, true, 32), "show", [], "any", false, false, true, 32))) {
            // line 33
            yield "            <!-- Button previous -->
            <button ";
            // line 34
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 34), "navigatorbuttonprev", [], "any", false, false, true, 34), 34, $this->source);
            yield " accesskey=\"p\" class=\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aNavigator"] ?? null), "disabled", [], "any", false, false, true, 34), 34, $this->source);
            yield " ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 34), "navigatorbuttonprev", [], "any", false, false, true, 34), 34, $this->source);
            yield " btn btn-lg btn-outline-secondary \" >
                ";
            // line 35
            yield gT("Previous");
            yield "
            </button>
        ";
        }
        // line 38
        yield "    </div>
    <div class=\"";
        // line 39
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 39), "navigatorbuttonr", [], "any", false, false, true, 39), 39, $this->source);
        yield " col-6 text-end\">

        ";
        // line 42
        yield "        ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "popupPreview", [], "any", false, false, true, 42) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aNavigator"] ?? null), "aMoveNext", [], "any", false, false, true, 42), "show", [], "any", false, false, true, 42))) {
            // line 43
            yield "
            ";
            // line 45
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aNavigator"] ?? null), "aMoveNext", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45) == "movesubmit")) {
                // line 46
                yield "                <!-- Button submit -->
                <button ";
                // line 47
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "navigatorbuttonsubmit", [], "any", false, false, true, 47), 47, $this->source);
                yield " accesskey=\"n\" class=\" ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aNavigator"] ?? null), "disabled", [], "any", false, false, true, 47), 47, $this->source);
                yield " ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 47), "navigatorbuttonsubmit", [], "any", false, false, true, 47), 47, $this->source);
                yield " btn btn-lg btn-primary\">
                    ";
                // line 48
                yield gT("Submit");
                yield "
                </button>
            ";
            } else {
                // line 51
                yield "                <!-- Button Next -->
                <button ";
                // line 52
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 52), "navigatorbuttonnext", [], "any", false, false, true, 52), 52, $this->source);
                yield " accesskey=\"n\" class=\" ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aNavigator"] ?? null), "disabled", [], "any", false, false, true, 52), 52, $this->source);
                yield " ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 52), "navigatorbuttonnext", [], "any", false, false, true, 52), 52, $this->source);
                yield " btn btn-lg btn-primary \" >
                    ";
                // line 53
                yield gT("Next");
                yield "
                </button>
            ";
            }
            // line 56
            yield "        ";
        }
        // line 57
        yield "    </div>
</div>
<!-- Extra navigator part -->
";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/navigator_complement.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/navigator.twig";
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
        return array (  145 => 60,  140 => 57,  137 => 56,  131 => 53,  123 => 52,  120 => 51,  114 => 48,  106 => 47,  103 => 46,  100 => 45,  97 => 43,  94 => 42,  89 => 39,  86 => 38,  80 => 35,  72 => 34,  69 => 33,  66 => 32,  59 => 29,  49 => 26,  45 => 24,  43 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/navigator.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\navigator.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 32);
        static $filters = array();
        static $functions = array("gT" => 35, "include" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['gT', 'include'],
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
