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

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_0ec4072109744d1f3ed1e0a696e738c3 extends Template
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
        // line 19
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "popupPreview", [], "any", false, false, true, 19)) {
            // line 20
            yield "    ";
            $context["navClass"] = "navbar-light bg-light";
            // line 21
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "template", [], "any", false, false, true, 21) == "bootswatch")) {
                // line 22
                yield "        ";
                $context["navClass"] = "navbar-default bg-primary";
                // line 23
                yield "    ";
            }
            // line 24
            yield "    <!-- Bootstrap Navigation Bar -->
    ";
            // line 26
            yield "    ";
            $context["ShowMenu"] = (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 26), "load", [], "any", false, false, true, 26), "show", [], "any", false, false, true, 26) == "Y") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 26), "save", [], "any", false, false, true, 26), "show", [], "any", false, false, true, 26) == "Y")) || (((CoreExtension::getAttribute($this->env, $this->source,             // line 27
($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 27) == true) || (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 27) == null)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 27), "showclearall", [], "any", false, false, true, 27) == "on"))) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 28
($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 28), "bShow", [], "any", false, false, true, 28) == true) && (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 28) != "A"))) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 29
($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 29), "show", [], "any", false, false, true, 29));
            // line 31
            yield "    <div id=\"survey-nav\" class=\"navbar ";
            yield $this->sandbox->ensureToStringAllowed(($context["navClass"] ?? null), 31, $this->source);
            yield " navbar-expand-md fixed-top border-bottom pt-0 pb-0\">
        <div class=\"container-fluid\">
            ";
            // line 33
            if (($context["ShowMenu"] ?? null)) {
                // line 34
                yield "                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\"
                        aria-controls=\"small-screens-menus\" aria-expanded=\"false\">
                    <span class=\"visually-hidden-focusable\">";
                // line 36
                yield gT("Tools");
                yield "</span>
                    <span class=\"navbar-toggler-icon\" aria-hidden=\"true\"></span>
                </button>
            ";
            }
            // line 40
            yield "            ";
            // line 41
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 41), "brandlogo", [], "any", false, false, true, 41) == "on")) {
                // line 42
                yield "                <div class=\"navbar-brand logo-container d-none d-md-block\">
                    ";
                // line 43
                yield LS_Twig_Extension::image($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 43), "brandlogofile", [], "any", false, false, true, 43), 43, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 43), 43, $this->source), ["class" => "logo img-fluid"]);
                yield "
                </div>
            ";
            } else {
                // line 46
                yield "                <div class=\"navbar-brand\">
                    ";
                // line 47
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 47), 47, $this->source);
                yield "
                </div>
            ";
            }
            // line 50
            yield "            ";
            if (($context["ShowMenu"] ?? null)) {
                // line 51
                yield "                <div id=\"navbar\" class=\"collapse navbar-collapse navbar-nav-scroll pt-2\">
                    <ul class=\"nav navbar-nav navbar-action-link navbar-right ms-auto\">
                        ";
                // line 53
                yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/save_links.twig");
                yield "
                        ";
                // line 54
                yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/clearall_links.twig");
                yield "
                        ";
                // line 55
                yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/question_index_menu.twig");
                yield "
                        ";
                // line 56
                yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/language_changer_top_menu.twig");
                yield "
                    </ul>
                </div>
            ";
            }
            // line 60
            yield "        </div>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
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
        return array (  131 => 60,  124 => 56,  120 => 55,  116 => 54,  112 => 53,  108 => 51,  105 => 50,  99 => 47,  96 => 46,  90 => 43,  87 => 42,  84 => 41,  82 => 40,  75 => 36,  71 => 34,  69 => 33,  63 => 31,  61 => 29,  60 => 28,  59 => 27,  57 => 26,  54 => 24,  51 => 23,  48 => 22,  45 => 21,  42 => 20,  40 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/nav_bar.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\nav_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 20);
        static $filters = array();
        static $functions = array("gT" => 36, "image" => 43, "include" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'image', 'include'],
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
