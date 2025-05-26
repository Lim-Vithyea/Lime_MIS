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

/* ./subviews/privacy/privacy.twig */
class __TwigTemplate_7167d87724c493d50ae96acf0bae027e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'anonymous' => [$this, 'block_anonymous'],
            'datasecurity' => [$this, 'block_datasecurity'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        yield "
<!-- Privacy message -->

<div class=\"";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "privacycontainer", [], "any", false, false, true, 21), 21, $this->source);
        yield " row\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "privacycontainer", [], "any", false, false, true, 21), 21, $this->source);
        yield ">
    <div class=\"";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 22), "privacycol", [], "any", false, false, true, 22), 22, $this->source);
        yield "  col-12 col-centered\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "privacycol", [], "any", false, false, true, 22), 22, $this->source);
        yield ">
        ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 23), "hideprivacyinfo", [], "any", false, false, true, 23) == "off")) {
            // line 24
            yield "            ";
            yield from $this->unwrap()->yieldBlock('anonymous', $context, $blocks);
            // line 43
            yield "        ";
        }
        // line 44
        yield "        ";
        yield from $this->unwrap()->yieldBlock('datasecurity', $context, $blocks);
        // line 53
        yield "    </div>
</div>
";
        return; yield '';
    }

    // line 24
    public function block_anonymous($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "anonymized", [], "any", false, false, true, 25) == "Y")) {
            // line 26
            yield "                <div class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 26), "privacyhead", [], "any", false, false, true, 26), 26, $this->source);
            yield " h4 text-primary \" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "privacyhead", [], "any", false, false, true, 26), 26, $this->source);
            yield ">
                    ";
            // line 27
            yield gT("This survey is anonymous.");
            yield "
                </div>
                <div>
                    <p class=\"";
            // line 30
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "privacybody", [], "any", false, false, true, 30), 30, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "privacybody", [], "any", false, false, true, 30), 30, $this->source);
            yield ">
                        ";
            // line 31
            yield gT("The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it.");
            // line 33
            yield "
                    </p>
                    <p class=\"";
            // line 35
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 35), "privacybody", [], "any", false, false, true, 35), 35, $this->source);
            yield "\">
                        ";
            // line 36
            yield gT("If you used an identifying access code to access this survey, please rest assured that this code will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification access codes with survey responses.");
            // line 38
            yield "
                    </p>
                </div>
                ";
        }
        // line 42
        yield "            ";
        return; yield '';
    }

    // line 44
    public function block_datasecurity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 45) != "A")) {
            // line 46
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 46) == 1)) {
                // line 47
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/privacy/privacy_text.twig");
                yield "
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 48
($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 48) == 2)) {
                // line 49
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/privacy/privacy_modal.twig");
                yield "
                ";
            }
            // line 51
            yield "            ";
        }
        // line 52
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/privacy/privacy.twig";
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
        return array (  152 => 52,  149 => 51,  143 => 49,  141 => 48,  136 => 47,  133 => 46,  130 => 45,  126 => 44,  121 => 42,  115 => 38,  113 => 36,  109 => 35,  105 => 33,  103 => 31,  97 => 30,  91 => 27,  84 => 26,  81 => 25,  77 => 24,  70 => 53,  67 => 44,  64 => 43,  61 => 24,  59 => 23,  53 => 22,  47 => 21,  42 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\privacy\\privacy.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "block" => 24);
        static $filters = array();
        static $functions = array("gT" => 27, "include" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
