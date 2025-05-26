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

/* ./subviews/navigation/question_index_menu.twig */
class __TwigTemplate_b7ee957a5addff5303da2b302a575269 extends Template
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
        // line 25
        yield "
";
        // line 27
        yield "
";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 28), "bShow", [], "any", false, false, true, 28) == true)) {
            // line 29
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 29) == "G")) {
                // line 30
                yield "        <!-- Question index, group, ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 30), "type", [], "any", false, false, true, 30), 30, $this->source);
                yield " -->
        <li class=\"dropdown nav-item ls-no-js-hidden px-2 index-menu-";
                // line 31
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 31), "type", [], "any", false, false, true, 31), 31, $this->source);
                yield "\">
            <a class=\"dropdown-toggle nav-link\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"false\" href=\"#\">
                ";
                // line 34
                yield gT("Question index");
                yield "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 39
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 39), "items", [], "any", false, false, true, 39));
                foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                    // line 40
                    yield "                    ";
                    $context["statusClass"] = "";
                    // line 41
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 41), "index-item-unanswered", [], "any", true, true, true, 41) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 41), "index-item-unanswered", [], "any", false, false, true, 41) == true))) {
                        // line 42
                        yield "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 42, $this->source) . " bg-warning");
                        // line 43
                        yield "                    ";
                    }
                    // line 44
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 44), "index-item-error", [], "any", true, true, true, 44) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 44), "index-item-error", [], "any", false, false, true, 44) == true))) {
                        // line 45
                        yield "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 45, $this->source) . " bg-danger");
                        // line 46
                        yield "                    ";
                    }
                    // line 47
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 47), "index-item-current", [], "any", true, true, true, 47) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 47), "index-item-current", [], "any", false, false, true, 47) == true))) {
                        // line 48
                        yield "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 48, $this->source) . " disabled");
                        // line 49
                        yield "                    ";
                    }
                    // line 50
                    yield "                    <li class=\"list-group-item";
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 50), 50, $this->source);
                    yield "\">
                        <a href='";
                    // line 51
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "url", [], "any", false, false, true, 51), 51, $this->source);
                    yield "' data-limesurvey-submit='";
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "submit", [], "any", false, false, true, 51), 51, $this->source);
                    yield "'
                           class='dropdown-item  ";
                    // line 52
                    yield $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 52, $this->source);
                    yield "'>
                            ";
                    // line 53
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 53), 53, $this->source);
                    yield "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "            </ul>
        </li>
    ";
            }
            // line 60
            yield "
    ";
            // line 62
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 62) == "S")) {
                // line 63
                yield "        <!-- Question index, question by question, ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 63), "type", [], "any", false, false, true, 63), 63, $this->source);
                yield " -->
        <li class=\"dropdown nav-item ls-no-js-hidden dropdown index-menu-";
                // line 64
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 64), "type", [], "any", false, false, true, 64), 64, $this->source);
                yield "\">
            <a class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"false\">
                ";
                // line 67
                yield gT("Question index");
                yield "
                <span class=\"caret\"></span>
            </a>
            <!-- TODO: Remove this when support is added -->
            <ul class=\"dropdown-sub-menu dropdown-menu\">
                ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 72), "items", [], "any", false, false, true, 72));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 73
                    yield "                    ";
                    // line 74
                    yield "                    <li>
                        <div class=\"dropdown-header\">
                            ";
                    // line 76
                    yield LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "text", [], "any", false, false, true, 76), 76, $this->source), true, 30, " &hellip; ", 0.6);
                    yield "
                            <span class=\"caret\"></span>
                        </div>
                        <ul class=\"dropdown-sub-menu dropdown-menu\">
                            ";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "questions", [], "any", false, false, true, 80));
                    foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                        // line 81
                        yield "                                ";
                        $context["statusClass"] = "";
                        // line 82
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 82), "index-item-unanswered", [], "any", true, true, true, 82) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 82), "index-item-unanswered", [], "any", false, false, true, 82) == true))) {
                            // line 83
                            yield "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 83, $this->source) . " bg-warning");
                            // line 84
                            yield "                                ";
                        }
                        // line 85
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 85), "index-item-error", [], "any", true, true, true, 85) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 85), "index-item-error", [], "any", false, false, true, 85) == true))) {
                            // line 86
                            yield "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 86, $this->source) . " bg-danger");
                            // line 87
                            yield "                                ";
                        }
                        // line 88
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 88), "index-item-current", [], "any", true, true, true, 88) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 88), "index-item-current", [], "any", false, false, true, 88) == true))) {
                            // line 89
                            yield "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 89, $this->source) . " disabled");
                            // line 90
                            yield "                                ";
                        }
                        // line 91
                        yield "                                <li class=\"";
                        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 91), 91, $this->source);
                        yield " ";
                        yield $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 91, $this->source);
                        yield "\">
                                    <a href='";
                        // line 92
                        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "url", [], "any", false, false, true, 92), 92, $this->source);
                        yield "' data-limesurvey-submit='";
                        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "submit", [], "any", false, false, true, 92), 92, $this->source);
                        yield "'
                                       class='animate'>
                                        ";
                        // line 94
                        yield LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 94), 94, $this->source), true, 30, " &hellip; ", 0.6);
                        yield "
                                    </a>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    yield "                        </ul>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 101), "type", [], "any", false, false, true, 101) == "full")) {
                    // line 102
                    yield "                    <li>
                        ";
                    // line 103
                    yield gT("Question by question mode not yet supported.");
                    yield "
                    </li>
                ";
                }
                // line 106
                yield "            </ul>
        </li>
    ";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_menu.twig";
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
        return array (  254 => 106,  248 => 103,  245 => 102,  242 => 101,  234 => 98,  224 => 94,  217 => 92,  210 => 91,  207 => 90,  204 => 89,  201 => 88,  198 => 87,  195 => 86,  192 => 85,  189 => 84,  186 => 83,  183 => 82,  180 => 81,  176 => 80,  169 => 76,  165 => 74,  163 => 73,  159 => 72,  151 => 67,  145 => 64,  140 => 63,  137 => 62,  134 => 60,  129 => 57,  119 => 53,  115 => 52,  109 => 51,  104 => 50,  101 => 49,  98 => 48,  95 => 47,  92 => 46,  89 => 45,  86 => 44,  83 => 43,  80 => 42,  77 => 41,  74 => 40,  69 => 39,  62 => 34,  56 => 31,  51 => 30,  48 => 29,  46 => 28,  43 => 27,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_menu.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "for" => 39, "set" => 40);
        static $filters = array();
        static $functions = array("gT" => 34, "flatEllipsizeText" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'flatEllipsizeText'],
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
