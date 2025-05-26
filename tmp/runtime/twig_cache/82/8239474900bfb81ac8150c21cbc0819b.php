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

/* subquestionRow.twig */
class __TwigTemplate_86db4226bb88422f114769b5ce85c5b0 extends Template
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
        // line 15
        yield "
<!-- subquestion row -->
<tr id='row_";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 17, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 17), 17, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 17, $this->source);
        yield "' class=\"row-container\" data-common-id=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 17), 17, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 17, $this->source);
        yield "\">
    ";
        // line 19
        yield "    ";
        if ((($context["activated"] ?? null) == "Y")) {
            // line 20
            yield "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 30
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 30), 30, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 30, $this->source);
            yield "][code]'
                name='subquestions[";
            // line 31
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 31), 31, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 31, $this->source);
            yield "][code]'
                class='code code-title'
                value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 33), 33, $this->source), "html_attr");
            yield "\"
                required='required'
                maxlength=\"20\"
                pattern=\"[a-zA-Z0-9]+\"
                ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 37), "active", [], "any", false, false, true, 37) == "Y")) {
                // line 38
                yield "                readonly=\"readonly\"
                ";
            }
            // line 40
            yield "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 45
            yield "    ";
        } elseif (($context["first"] ?? null)) {
            // line 46
            yield "        ";
            $context["sPattern"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 46)) ? ((("^([a-zA-Z0-9]*|" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 46), 46, $this->source)) . ")\$")) : ("^[a-zA-Z0-9]*\$"));
            // line 47
            yield "
        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"ri-menu-fill move-icon\"
              role=\"button\"
              data-bs-toggle=\"tooltip\"
              data-title=\"";
            // line 56
            yield gT("Drag to sort");
            yield "\"
            ></span>
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 65
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 65), 65, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 65, $this->source);
            yield "][code]'
                name='subquestions[";
            // line 66
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 66), 66, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 66, $this->source);
            yield "][code]'
                class='code code-title'
                value=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 68), 68, $this->source), "html_attr");
            yield "\"
                required='required'
                maxlength=\"20\"
                pattern=\"[a-zA-Z0-9]+\"
                ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 72), "active", [], "any", false, false, true, 72) == "Y")) {
                // line 73
                yield "                readonly=\"readonly\"
                ";
            }
            // line 75
            yield "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 80
            yield "    ";
        } else {
            // line 81
            yield "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 88), 88, $this->source), "html");
            yield "
        </td>
    ";
        }
        // line 91
        yield "
    <!-- Subquestion text -->
    <td  class=\"subquestion-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">
            <!-- NB: Class \"answer\" is used for both subquestions and answer options. -->
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='subquestions[";
        // line 100
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 100), 100, $this->source);
        yield "][";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 100, $this->source);
        yield "][subquestionl10n][";
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 100, $this->source);
        yield "]'
                name='subquestions[";
        // line 101
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 101), 101, $this->source);
        yield "][";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 101, $this->source);
        yield "][subquestionl10n][";
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 101, $this->source);
        yield "]'
                placeholder='";
        // line 102
        yield gT("Some example subquestion", "js");
        yield "'
                value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestionl10n"] ?? null), "question", [], "any", false, false, true, 103), 103, $this->source), "html_attr");
        yield "\"
                data-contents-dir=\"";
        // line 104
        yield ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 104, $this->source))) ? ("rtl") : ("ltr"));
        yield "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
            ";
        // line 107
        yield getEditor("editanswer", (((((("subquestions[" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 109
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 109), 109, $this->source)) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 109, $this->source)) . "][subquestionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 109, $this->source)) . "]"), (((("[" . gT("Subquestion:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 110
($context["language"] ?? null), 110, $this->source)) . ")"), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 111
($context["subquestion"] ?? null), "sid", [], "any", false, false, true, 111), 111, $this->source), $this->sandbox->ensureToStringAllowed(        // line 112
($context["gid"] ?? null), 112, $this->source), ((CoreExtension::matches("/^\\d+\$/", CoreExtension::getAttribute($this->env, $this->source,         // line 113
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 113))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 113)) : ("")), "editanswer");
        // line 115
        yield "
        </div>
    </td>

    <!-- Relevance equation -->
    ";
        // line 120
        if ((($context["first"] ?? null) && (($context["scale_id"] ?? null) == 0))) {
            // line 121
            yield "        <td class=\"relevance-equation\">
            <input
                data-bs-toggle=\"tooltip\"
                data-title=\"";
            // line 124
            yield gT("Click to expand");
            yield "\"
                type='text'
                class='relevance form-control input'
                id='subquestions[";
            // line 127
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 127), 127, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 127, $this->source);
            yield "][relevance]'
                name='subquestions[";
            // line 128
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 128), 128, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 128, $this->source);
            yield "][relevance]'
                value=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "relevance", [], "any", false, false, true, 129), 129, $this->source), "html_attr");
            yield "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
        </td>
    ";
        } else {
            // line 134
            yield "        <!-- TOOD: Why render and then hide? -->
        <span style=\"display: none\" class=\"relevance relevance-equation\">
                    </span>
    ";
        }
        // line 139
        yield "
    <!-- Icons add/edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"subquestion-actions\">
        ";
        // line 142
        if (((($context["activated"] ?? null) != "Y") && ($context["first"] ?? null))) {
            // line 143
            yield "            <button class=\"btn btn-outline-secondary btn-sm btnaddsubquestion\">
                <i
                    class=\"ri-add-circle-fill text-primary\"
                    data-code=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 146), 146, $this->source), "html_attr");
            yield "\"
                    data-bs-toggle=\"tooltip\"
                    data-scale-id=\"";
            // line 148
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 148, $this->source);
            yield "\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 150
            yield gT("Insert a new subquestion after this one");
            yield "\"
                ></i>
            </button>
            <button class=\"btn btn-outline-secondary btn-sm btndelsubquestion\">
                <i
                    class=\"ri-indeterminate-circle-fill text-danger\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 158
            yield gT("Delete this subquestion");
            yield "\"
                ></i>
            </button>
        ";
        }
        // line 162
        yield "    </td>
</tr>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "subquestionRow.twig";
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
        return array (  316 => 162,  309 => 158,  298 => 150,  293 => 148,  288 => 146,  283 => 143,  281 => 142,  276 => 139,  270 => 134,  262 => 129,  256 => 128,  250 => 127,  244 => 124,  239 => 121,  237 => 120,  230 => 115,  228 => 113,  227 => 112,  226 => 111,  225 => 110,  224 => 109,  223 => 107,  217 => 104,  213 => 103,  209 => 102,  201 => 101,  193 => 100,  182 => 91,  176 => 88,  167 => 81,  164 => 80,  158 => 75,  154 => 73,  152 => 72,  145 => 68,  138 => 66,  132 => 65,  120 => 56,  109 => 47,  106 => 46,  103 => 45,  97 => 40,  93 => 38,  91 => 37,  84 => 33,  77 => 31,  71 => 30,  59 => 20,  56 => 19,  44 => 17,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "subquestionRow.twig", "C:\\wamp64\\www\\limemis\\Lime_MIS\\application\\views\\questionAdministration\\subquestionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 46);
        static $filters = array("escape" => 33);
        static $functions = array("gT" => 56, "getLanguageRTL" => 104, "getEditor" => 107);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['gT', 'getLanguageRTL', 'getEditor'],
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
