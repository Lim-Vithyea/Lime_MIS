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

/* __string_template__13008e82199d2330f4ba886992ad10e2 */
class __TwigTemplate_bf1214730ae17f4ae685c1f1540c97fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "
";
        // line 27
        yield LS_Twig_Extension::registerTemplateCssFile("css/errors.css");
        yield "
";
        // line 28
        $context["aError"] = CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aError", [], "any", false, false, true, 28);
        // line 29
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 31
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 31), 31, $this->source);
        yield "\" dir=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 31), 31, $this->source);
        yield "\"
      class=\"";
        // line 32
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 32), 32, $this->source);
        yield " dir-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 32), 32, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "html", [], "any", false, false, true, 32), 32, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "html", [], "any", false, false, true, 32), 32, $this->source);
        yield "
      xmlns=\"http://www.w3.org/1999/html\">

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    <title>
        ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 41)) {
            // line 42
            yield "            ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 42), 42, $this->source);
            yield "
        ";
        } else {
            // line 44
            yield "            Error ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 44), 44, $this->source);
            yield "
        ";
        }
        // line 46
        yield "    </title>

    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\"/>
    ";
        // line 49
        if (LS_Twig_Extension::imageSrc("./files/favicon.ico")) {
            // line 50
            yield "        <link rel=\"shortcut icon\" href=\"";
            yield LS_Twig_Extension::imageSrc("./files/favicon.ico");
            yield "\"/>
    ";
        }
        // line 52
        yield "</head>

<body class=\"";
        // line 54
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 54), "body", [], "any", false, false, true, 54), 54, $this->source);
        yield " lang-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 54), 54, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(($context["surveyformat"] ?? null), 54, $this->source);
        yield "\" marginwidth=\"0\"
      marginheight=\"0\" ";
        // line 55
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 55), "body", [], "any", false, false, true, 55), 55, $this->source);
        yield ">
<div class=\"container\">
    <div id=\"error-card\" class=\"card w-75 mt-6 mb-0 mx-auto\">
        <div class=\"card-body\">
            <h2 class=\"card-title\">
                ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 60)) {
            // line 61
            yield "                    ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 61), 61, $this->source);
            yield "
                ";
        }
        // line 63
        yield "                ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "title", [], "any", false, false, true, 63), 63, $this->source);
        yield "
            </h2>
            <hr>
            <div class=\"card-text\">";
        // line 66
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "message", [], "any", false, false, true, 66), 66, $this->source);
        yield "</div>
            ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "contact", [], "any", false, false, true, 67)) {
            // line 68
            yield "                ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "contact", [], "any", false, false, true, 68), 68, $this->source);
            yield "
            ";
        } else {
            // line 70
            yield "                ";
            yield Twig\Extension\CoreExtension::sprintf(gT("For further information please contact %s:"), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "admin", [], "any", false, false, true, 70), 70, $this->source));
            yield "
                ";
            // line 71
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 71)) {
                // line 72
                yield "                    <br>
                    <a class=\"card-link\" href='mailto:";
                // line 73
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 73), 73, $this->source);
                yield "'>";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 73), 73, $this->source);
                yield "</a>
                ";
            }
            // line 75
            yield "            ";
        }
        // line 76
        yield "            ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "trace", [], "any", false, false, true, 76))) {
            // line 77
            yield "                <pre>
                        ";
            // line 78
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aError"] ?? null), "trace", [], "any", false, false, true, 78), 78, $this->source);
            yield "
                </pre>
            ";
        }
        // line 81
        yield "        </div>

    </div>
</div>
";
        // line 85
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 88
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 85
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/footer/footer.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__13008e82199d2330f4ba886992ad10e2";
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
        return array (  203 => 86,  199 => 85,  192 => 88,  190 => 85,  184 => 81,  178 => 78,  175 => 77,  172 => 76,  169 => 75,  162 => 73,  159 => 72,  157 => 71,  152 => 70,  146 => 68,  144 => 67,  140 => 66,  133 => 63,  127 => 61,  125 => 60,  117 => 55,  109 => 54,  105 => 52,  99 => 50,  97 => 49,  92 => 46,  86 => 44,  80 => 42,  78 => 41,  60 => 32,  54 => 31,  50 => 29,  48 => 28,  44 => 27,  41 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__13008e82199d2330f4ba886992ad10e2", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 41, "block" => 85);
        static $filters = array("format" => 70);
        static $functions = array("registerTemplateCssFile" => 27, "imageSrc" => 49, "gT" => 70, "include" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['format'],
                ['registerTemplateCssFile', 'imageSrc', 'gT', 'include'],
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
