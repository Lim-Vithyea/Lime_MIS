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

/* answerOptionRow.twig */
class __TwigTemplate_63b1fc8100487600e037d18d0c150477 extends Template
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
<tr
    class='row-container'
    id='row_";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 19, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 19), 19, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 19, $this->source);
        yield "'
    data-common-id=\"";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 20), 20, $this->source);
        yield "_";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 20, $this->source);
        yield "\"
>

    ";
        // line 24
        yield "    ";
        if (($context["first"] ?? null)) {
            // line 25
            yield "        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"ri-menu-fill bigIcons move-icon\"
              role=\"button\"
              data-bs-toggle=\"tooltip\"
              data-title=\"";
            // line 33
            yield gT("Drag to sort");
            yield "\"
            ></span>
        </td>

        <!-- Code -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">

            ";
            // line 40
            if (($context["oldCode"] ?? null)) {
                // line 41
                yield "            <input
                type='hidden'
                class='oldcode code-title'
                id='answeroptions[";
                // line 44
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 44), 44, $this->source);
                yield "][";
                yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 44, $this->source);
                yield "][oldcode]'
                name='answeroptions[";
                // line 45
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 45), 45, $this->source);
                yield "][";
                yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 45, $this->source);
                yield "][oldcode]'
                value=\"";
                // line 46
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 46), 46, $this->source);
                yield "\"
            />
            ";
            }
            // line 49
            yield "
                <input
                    type='text'
                    class=\"code form-control input\"
                    id='answeroptions[";
            // line 53
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 53), 53, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 53, $this->source);
            yield "][code]'
                    name='answeroptions[";
            // line 54
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 54), 54, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 54, $this->source);
            yield "][code]'
                    class='code code-title'
                    value=\"";
            // line 56
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 56), 56, $this->source);
            yield "\"
                    maxlength='5'
                    pattern=\"[a-zA-Z0-9]+\"
                    required='required'
                    onfocusout=\"LS.questionEditor.showAnswerOptionCodeUniqueError(this);\"
                />
        </td>
        ";
            // line 64
            yield "    ";
        } else {
            // line 65
            yield "        <!-- Move icon -->
        <td class=\"move-icon-disable\">&nbsp;</td>
        <!-- Code -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">";
            // line 68
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 68), 68, $this->source);
            yield "</td>
    ";
        }
        // line 70
        yield "
    <!-- Assessment Value -->
    ";
        // line 72
        if ((($context["assessmentvisible"] ?? null) && ($context["first"] ?? null))) {
            // line 73
            yield "        <td class=\"assessment-value\">
            <input
                type='text'
                class='assessment form-control input'
                id='answeroptions[";
            // line 77
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 77), 77, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 77, $this->source);
            yield "][assessment]'
                name='answeroptions[";
            // line 78
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 78), 78, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 78, $this->source);
            yield "][assessment]'
                value=\"";
            // line 79
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "assessment_value", [], "any", false, false, true, 79), 79, $this->source);
            yield "\"
                pattern=\"-?\\d+\"
                maxlength='5'
                size='5'
                onkeypress=\"return window.LS.goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 86
($context["first"] ?? null)) {
            // line 87
            yield "        <td style='display:none;' class=\"assessment-value\">
            <input
                type='text'
                class='assessment'
                id='answeroptions[";
            // line 91
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 91), 91, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 91, $this->source);
            yield "][assessment]'
                name='answeroptions[";
            // line 92
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 92), 92, $this->source);
            yield "][";
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 92, $this->source);
            yield "][assessment]'
                value=\"";
            // line 93
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "assessment_value", [], "any", false, false, true, 93), 93, $this->source);
            yield "\"
                maxlength='5'
                pattern=\"-?\\d+\"
                size='5'
                onkeypress=\"return window.LS.goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 100
($context["assessmentvisible"] ?? null)) {
            // line 101
            yield "        <td class=\"assessment-value\">
            ";
            // line 102
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "assessment_value", [], "any", false, false, true, 102), 102, $this->source);
            yield "
        </td>
    ";
        } else {
            // line 105
            yield "        <td style='display:none;' class=\"assessment-value\"></td>
    ";
        }
        // line 107
        yield "
    <!-- Answer -->
    <td  class=\"answeroption-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='answeroptions[";
        // line 115
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 115), 115, $this->source);
        yield "][";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 115, $this->source);
        yield "][answeroptionl10n][";
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 115, $this->source);
        yield "]'
                name='answeroptions[";
        // line 116
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 116), 116, $this->source);
        yield "][";
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 116, $this->source);
        yield "][answeroptionl10n][";
        yield $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 116, $this->source);
        yield "]'
                placeholder='";
        // line 117
        yield gT("Some example answer option");
        yield "'
                data-contents-dir=\"";
        // line 118
        yield ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 118, $this->source))) ? ("rtl") : ("ltr"));
        yield "\"
                value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOptionl10n"] ?? null), "answer", [], "any", false, false, true, 119), 119, $this->source), "html_attr");
        yield "\"
            />
            ";
        // line 121
        yield getEditor("editanswer", (((((("answeroptions[" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 123
($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 123), 123, $this->source)) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 123, $this->source)) . "][answeroptionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 123, $this->source)) . "]"), (((("[" . gT("Answer option:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 124
($context["language"] ?? null), 124, $this->source)) . ")"), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 125
($context["question"] ?? null), "sid", [], "any", false, false, true, 125), 125, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["question"] ?? null), "gid", [], "any", false, false, true, 126), 126, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["question"] ?? null), "qid", [], "any", false, false, true, 127), 127, $this->source), "editanswer");
        // line 129
        yield "
        </div>
    </td>

    <!-- Icons edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"answeroption-actions\">
        ";
        // line 135
        if (($context["first"] ?? null)) {
            // line 136
            yield "            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm btnaddanswer\">
                <i
                    class=\"ri-add-circle-fill text-primary\"
                    data-assessmentvisible='";
            // line 139
            yield $this->sandbox->ensureToStringAllowed(($context["assessmentvisible"] ?? null), 139, $this->source);
            yield "'
                    data-position=\"";
            // line 140
            yield $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 140, $this->source);
            yield "\"
                    data-code=\"";
            // line 141
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 141), 141, $this->source);
            yield "\"
                    data-scale-id=\"";
            // line 142
            yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 142, $this->source);
            yield "\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 145
            yield gT("Insert a new answer option after this one");
            yield "\"
                ></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm btndelanswer\">
                <i class=\"ri-indeterminate-circle-fill text-danger \" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 149
            yield gT("Delete this entry");
            yield "\"></i>
            </button>
        ";
        }
        // line 152
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
        return "answerOptionRow.twig";
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
        return array (  322 => 152,  316 => 149,  309 => 145,  303 => 142,  299 => 141,  295 => 140,  291 => 139,  286 => 136,  284 => 135,  276 => 129,  274 => 127,  273 => 126,  272 => 125,  271 => 124,  270 => 123,  269 => 121,  264 => 119,  260 => 118,  256 => 117,  248 => 116,  240 => 115,  230 => 107,  226 => 105,  220 => 102,  217 => 101,  215 => 100,  205 => 93,  199 => 92,  193 => 91,  187 => 87,  185 => 86,  175 => 79,  169 => 78,  163 => 77,  157 => 73,  155 => 72,  151 => 70,  146 => 68,  141 => 65,  138 => 64,  128 => 56,  121 => 54,  115 => 53,  109 => 49,  103 => 46,  97 => 45,  91 => 44,  86 => 41,  84 => 40,  74 => 33,  64 => 25,  61 => 24,  53 => 20,  45 => 19,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "answerOptionRow.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\questionAdministration\\answerOptionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24);
        static $filters = array("escape" => 119);
        static $functions = array("gT" => 33, "getLanguageRTL" => 118, "getEditor" => 121);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
