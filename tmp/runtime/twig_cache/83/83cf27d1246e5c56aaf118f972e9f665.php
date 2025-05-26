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

/* ./subviews/messages/welcome.twig */
class __TwigTemplate_6e2343059701e19f679926d2dd4be6f2 extends Template
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
        // line 23
        yield "
<!-- Welcome Message -->
<div id=\"";
        // line 25
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 25), "welcomecontainer", [], "any", false, false, true, 25), 25, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 25), "welcomecontainer", [], "any", false, false, true, 25), 25, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 25), "welcomecontainer", [], "any", false, false, true, 25), 25, $this->source);
        yield ">

    <!-- Survey Name -->
    <h1 class=\"";
        // line 28
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "surveyname", [], "any", false, false, true, 28), 28, $this->source);
        yield " text-center\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 28), "surveyname", [], "any", false, false, true, 28), 28, $this->source);
        yield " >
        ";
        // line 29
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 29), 29, $this->source), 1);
        yield "
    </h1>

    <!-- Survey description -->
    <div class=\"";
        // line 33
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 33), "description", [], "any", false, false, true, 33), 33, $this->source);
        yield " text-info text-center\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 33), "description", [], "any", false, false, true, 33), 33, $this->source);
        yield ">
        ";
        // line 34
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "description", [], "any", false, false, true, 34), 34, $this->source), 1);
        yield "
    </div>

    <!-- Welcome text -->
    <div class=\"";
        // line 38
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "welcome", [], "any", false, false, true, 38), 38, $this->source);
        yield " h5 text-primary\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "welcome", [], "any", false, false, true, 38), 38, $this->source);
        yield ">
        ";
        // line 39
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "welcome", [], "any", false, false, true, 39), 39, $this->source), 1);
        yield "
    </div>

    <!-- Question count -->
    <div class=\"";
        // line 43
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "questioncount", [], "any", false, false, true, 43), 43, $this->source);
        yield " text-muted\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 43), "questioncount", [], "any", false, false, true, 43), 43, $this->source);
        yield ">
        <div class='";
        // line 44
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "questioncounttext", [], "any", false, false, true, 44), 44, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "questioncounttext", [], "any", false, false, true, 44), 44, $this->source);
        yield ">

            ";
        // line 47
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowxquestions", [], "any", false, false, true, 47) == true)) {
            // line 48
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 48) < 1)) {
                // line 49
                yield "                    ";
                yield gT("There are no questions in this survey.");
                yield "
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 50
($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 50) == 1)) {
                // line 51
                yield "                    ";
                yield gT("There is 1 question in this survey.");
                yield "
                ";
            } else {
                // line 53
                yield "                    ";
                yield Twig\Extension\CoreExtension::sprintf(gT("There are %s questions in this survey."), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 53), 53, $this->source));
                yield "
              ";
            }
            // line 55
            yield "            ";
        }
        // line 56
        yield "        </div>
  </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/messages/welcome.twig";
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
        return array (  134 => 56,  131 => 55,  125 => 53,  119 => 51,  117 => 50,  112 => 49,  109 => 48,  106 => 47,  99 => 44,  93 => 43,  86 => 39,  80 => 38,  73 => 34,  67 => 33,  60 => 29,  54 => 28,  44 => 25,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/welcome.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\messages\\welcome.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 47);
        static $filters = array("format" => 53);
        static $functions = array("processString" => 29, "gT" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['format'],
                ['processString', 'gT'],
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
