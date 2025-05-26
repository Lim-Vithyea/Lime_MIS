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

/* ./subviews/content/submit_preview.twig */
class __TwigTemplate_2ffc7feceb8a99f3942392b2cb180796 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'endtext' => [$this, 'block_endtext'],
            'printanswer' => [$this, 'block_printanswer'],
            'publicstatistics' => [$this, 'block_publicstatistics'],
            'endurl' => [$this, 'block_endurl'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "./subviews/content/submit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./subviews/content/submit.twig", "./subviews/content/submit_preview.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_endtext($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "    <div class=\"alert alert-warning\"><strong class=\"h4 text-danger\">";
        yield gT("Did Not Save");
        yield " </strong>
        ";
        // line 23
        yield gT("Your survey responses have not been recorded. This survey is not yet active.");
        yield "
    </div>
    ";
        // line 25
        yield from $this->yieldParentBlock("endtext", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 27
    public function block_printanswer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        // line 29
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 29), "aPrintAnswers", [], "any", false, false, true, 29), "show", [], "any", false, false, true, 29) == true)) {
            // line 30
            yield "        <!--  Link to Print Answer Preview -->
        <div class=\"";
            // line 31
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 31), "submitwrapperdiva", [], "any", false, false, true, 31), 31, $this->source);
            yield " disabled\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 31), "submitwrapperdiv", [], "any", false, false, true, 31), 31, $this->source);
            yield ">
            <a href=\"#\" title=\" ";
            // line 32
            yield gT("Note: This link only works if the survey is activated.");
            yield "\" class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "submitwrapperdivaa", [], "any", false, false, true, 32), 32, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "submitwrapperdivaa", [], "any", false, false, true, 32), 32, $this->source);
            yield ">
                <span class=\"ri-printer-line\"></span>";
            // line 33
            yield gT("Print your answers.");
            yield "
            </a>
        </div>
    ";
        }
        return; yield '';
    }

    // line 38
    public function block_publicstatistics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        // line 40
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 40), "aPublicStatistics", [], "any", false, false, true, 40), "show", [], "any", false, false, true, 40) == true)) {
            // line 41
            yield "        <!-- Link to Public statistics -->
        <div class=\"";
            // line 42
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 42), "submitwrapperdivb", [], "any", false, false, true, 42), 42, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 42), "submitwrapperdivb", [], "any", false, false, true, 42), 42, $this->source);
            yield ">
            <a href=\"#\" title=\" ";
            // line 43
            yield gT("Note: This link only works if the survey is activated.");
            yield "\" class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "submitwrapperdivba", [], "any", false, false, true, 43), 43, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 43), "submitwrapperdivba", [], "any", false, false, true, 43), 43, $this->source);
            yield ">
                ";
            // line 44
            yield gT("View the statistics for this survey.");
            yield "
            </a>
        </div>
    ";
        }
        return; yield '';
    }

    // line 49
    public function block_endurl($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 50), "sSurveylsUrl", [], "any", false, false, true, 50)) {
            // line 51
            yield "        <a href=\"";
            yield str_replace("\"", "%22", $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 51), "sSurveylsUrl", [], "any", false, false, true, 51), 51, $this->source));
            yield "\">";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 51), "sSurveylsUrlDescription", [], "any", false, false, true, 51), 51, $this->source);
            yield "</a>
        ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "autoredirect", [], "any", false, false, true, 52) == "Y")) {
                // line 53
                yield "            <small class=\"text-info\">";
                yield gT("Note: Automatically loading the end URL works only if the survey is activated.");
                yield "</small>
        ";
            }
            // line 55
            yield "        </a>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/content/submit_preview.twig";
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
        return array (  167 => 55,  161 => 53,  159 => 52,  152 => 51,  149 => 50,  145 => 49,  135 => 44,  127 => 43,  121 => 42,  118 => 41,  115 => 40,  113 => 39,  109 => 38,  99 => 33,  91 => 32,  85 => 31,  82 => 30,  79 => 29,  77 => 28,  73 => 27,  66 => 25,  61 => 23,  56 => 22,  52 => 21,  41 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/submit_preview.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\content\\submit_preview.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29);
        static $filters = array();
        static $functions = array("gT" => 22, "str_replace" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT', 'str_replace'],
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
