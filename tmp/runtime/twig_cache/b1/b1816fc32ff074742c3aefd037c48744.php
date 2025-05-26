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

/* __string_template__32758aef7a16fdf90ac17a09ecde2f7e */
class __TwigTemplate_0ecced6d6e16bd787c0619633f2de202 extends Template
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
        // line 1
        yield "<input type='hidden' name='answeroptions_sortorder' value='' />
<input type='hidden' id='answeroptions_deletedqids' name='answeroptions_deletedqids' value='' />

";
        // line 4
        $context["first"] = true;
        // line 5
        $context["scale_id"] = 0;
        // line 6
        yield "
<!-- Loop all language, and then hide all but the current selected one with JS. -->
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["allLanguages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 9
            yield "    <div class=\"lang-hide lang-";
            yield $this->sandbox->ensureToStringAllowed($context["lang"], 9, $this->source);
            yield " ";
            yield ((($context["first"] ?? null)) ? ("base-lang") : ("extra-lang"));
            yield "\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["scalecount"] ?? null) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["scale_id"]) {
                // line 11
                yield "
            ";
                // line 12
                $context["position"] = 1;
                // line 13
                yield "            ";
                if ((($context["scalecount"] ?? null) > 1)) {
                    // line 14
                    yield "                <div class='header ui-widget-header' style='margin-top:5px;'>
                    <i>";
                    // line 15
                    yield sprintf(gT("Answer scale %s"), ($context["scale_id"] + 1));
                    yield "</i>
                </div>
            ";
                }
                // line 18
                yield "
            <!-- Answer options table -->
            <div class=\"answeroptions-table-wrapper\" style=\"max-height: 394px;\">
                <table
                    class='answertable answeroptions-table table table-responsive'
                    id='answeroptions_";
                // line 23
                yield $this->sandbox->ensureToStringAllowed($context["lang"], 23, $this->source);
                yield "_";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 23, $this->source);
                yield "'
                    data-scaleid='";
                // line 24
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 24, $this->source);
                yield "'
                    data-input-data-id='add-answer-option-input-javascript-datas'
                >

                    <!-- Headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th class='col-lg-1'>";
                // line 32
                yield gT("Code");
                yield "
                            <i
                class=\"ri-information-fill\"
                data-bs-toggle=\"tooltip\"
                title=\"";
                // line 36
                yield gT("A mandatory unique alpha-numeric code for each answer option (1-5 characters)");
                yield "\"
            > </i>                            </th>

                            ";
                // line 39
                if (($context["assessmentvisible"] ?? null)) {
                    // line 40
                    yield "                                <th class='col-lg-1'>
                                    ";
                    // line 41
                    yield gT("Assessment value");
                    yield " <i
                class=\"ri-information-fill\"
                data-bs-toggle=\"tooltip\"
                title=\"";
                    // line 44
                    yield gT("A positive or negative integer number as assement value if this option is selected");
                    yield "\"
            > </i>     
                                </th>
                            ";
                } else {
                    // line 48
                    yield "                                <th style='display:none;'>
                                    &nbsp;
                                </th>
                            ";
                }
                // line 52
                yield "
                            <th class='col-lg-8'>
                                ";
                // line 54
                yield gT("Answer options");
                yield "
                                <i class=\"ri-earth-fill\" data-bs-toggle=\"tooltip\" title=\"";
                // line 55
                yield gT("This setting is localized");
                yield "\"></i>
                            </th>

                            <th class='col-lg-1'>
                                ";
                // line 59
                if (($context["first"] ?? null)) {
                    // line 60
                    yield "                                    ";
                    yield gT("Actions");
                    yield "
                                ";
                }
                // line 62
                yield "                            </th>
                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody>
                        ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = ($context["answers"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["scale_id"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["answers"] ?? null), $context["scale_id"], [], "array", false, false, true, 68)));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["answerOption"]) {
                    // line 69
                    yield "                            <!-- Line tag -->
                            ";
                    // line 70
                    yield from                     $this->loadTemplate("answerOptionRow.twig", "__string_template__32758aef7a16fdf90ac17a09ecde2f7e", 70)->unwrap()->yield(CoreExtension::merge($context, ["activated" =>                     // line 71
($context["activated"] ?? null), "position" =>                     // line 72
($context["position"] ?? null), "first" =>                     // line 73
($context["first"] ?? null), "assessmentvisible" =>                     // line 74
($context["assessmentvisible"] ?? null), "scale_id" =>                     // line 75
$context["scale_id"], "question" =>                     // line 76
($context["question"] ?? null), "answerOption" =>                     // line 77
$context["answerOption"], "answerOptionl10n" => (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,                     // line 78
$context["answerOption"], "answerl10ns", [], "any", false, false, true, 78)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array(get_class($__internal_compile_1), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[$context["lang"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answerOption"], "answerl10ns", [], "any", false, false, true, 78), $context["lang"], [], "array", false, false, true, 78)), "oldCode" => true, "language" =>                     // line 80
$context["lang"]]));
                    // line 82
                    yield "
                            ";
                    // line 83
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 84
                    yield "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answerOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                yield "                    </tbody>
                </table>
            </div>

            <div class=\"action-buttons\" style=\"padding-bottom: 10px;\">
                ";
                // line 90
                if (($context["first"] ?? null)) {
                    // line 91
                    yield "                    <!-- TODO: Not used??? -->
                    <input type='hidden' id='answercount_";
                    // line 92
                    yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 92, $this->source);
                    yield "' name='answercount_";
                    yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 92, $this->source);
                    yield "' value='";
                    yield $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null), 92, $this->source);
                    yield "' />
                    ";
                    // line 93
                    $context["disabled"] = "";
                    // line 94
                    yield "                ";
                }
                // line 95
                yield "
                <button
                    ";
                // line 97
                yield $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 97, $this->source);
                yield "
                    data-scale-id=\"";
                // line 98
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 98, $this->source);
                yield "\"
                    class='btnlsbrowser btn btn-outline-secondary'
                    type='button'
                    onclick=\"LS.questionEditor.showLabelSetPicker(event, 'answeroptions');\"
                >
                    ";
                // line 103
                yield gT("Load label set");
                yield "
                </button>

                ";
                // line 106
                if (($context["hasLabelSetPermission"] ?? null)) {
                    // line 107
                    yield "                    <button
                        class='bthsaveaslabel btn btn-outline-secondary'
                        id='bthsaveaslabel_";
                    // line 109
                    yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 109, $this->source);
                    yield "'
                        type='button'
                        onclick=\"LS.questionEditor.showLabelSetSaver(event, 'answeroptions-table');\"
                        data-bs-target=\"#saveaslabelModal\"
                    >
                        ";
                    // line 114
                    yield gT("Save label set");
                    yield "
                    </button>
                ";
                }
                // line 117
                yield "
                <button ";
                // line 118
                yield $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 118, $this->source);
                yield "  id='btnquickadd_";
                yield $this->sandbox->ensureToStringAllowed($context["lang"], 118, $this->source);
                yield "_";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 118, $this->source);
                yield "' data-scale-id=\"";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 118, $this->source);
                yield "\" class='btn btn-outline-secondary btnquickadd float-end' type='button'  data-bs-toggle=\"modal\" data-bs-target=\"#quickaddModal\" data-scale-id=\"";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 118, $this->source);
                yield "\">
                    ";
                // line 119
                yield gT("Quick add");
                yield "
                </button>
            </div>
            ";
                // line 122
                $context["position"] = sprintf("%05d", $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 122, $this->source));
                // line 123
                yield "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scale_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "    </div>
    ";
            // line 125
            $context["first"] = false;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "
<!--   Modals   -->
";
        // line 129
        if ((($context["first"] ?? null) == false)) {
            yield " ";
            // line 130
            yield "    ";
            yield from             $this->loadTemplate("modals.twig", "__string_template__32758aef7a16fdf90ac17a09ecde2f7e", 130)->unwrap()->yield($context);
        }
        // line 132
        yield "
<!-- For javascript -->
<input
    type=\"hidden\"
    id=\"add-answer-option-input-javascript-datas\"
    data-url=\"";
        // line 137
        yield LS_Twig_Extension::createUrl("/questionAdministration/getAnswerOptionRowForAllLanguages/");
        yield "\"
    data-quickurl=\"";
        // line 138
        yield LS_Twig_Extension::createUrl("/questionAdministration/getAnswerOptionRowQuickAdd", ["surveyid" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 141
($context["question"] ?? null), "sid", [], "any", false, false, true, 141), 141, $this->source), "gid" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 142
($context["question"] ?? null), "gid", [], "any", false, false, true, 142), 142, $this->source)]);
        // line 144
        yield "\"
    data-assessmentvisible=\"";
        // line 145
        if ((($context["assessmentvisible"] ?? null) == true)) {
            yield "1";
        } else {
            yield "0";
        }
        yield "\"
    data-errormessage=\"An error occured while processing the ajax request.\"
    data-languages='";
        // line 147
        yield CJSON::encode($this->sandbox->ensureToStringAllowed(($context["allLanguages"] ?? null), 147, $this->source));
        yield "'
    data-surveyid=\"";
        // line 148
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "sid", [], "any", false, false, true, 148), 148, $this->source);
        yield "\"
    data-gid=\"";
        // line 149
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "gid", [], "any", false, false, true, 149), 149, $this->source);
        yield "\"
    data-qid=\"";
        // line 150
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "qid", [], "any", false, false, true, 150), 150, $this->source);
        yield "\"
    data-scale-id=\"";
        // line 151
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 151, $this->source);
        yield "\" ";
        // line 152
        yield "/>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__32758aef7a16fdf90ac17a09ecde2f7e";
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
        return array (  431 => 152,  428 => 151,  424 => 150,  420 => 149,  416 => 148,  412 => 147,  403 => 145,  400 => 144,  398 => 142,  397 => 141,  396 => 138,  392 => 137,  385 => 132,  381 => 130,  378 => 129,  374 => 127,  360 => 125,  357 => 124,  343 => 123,  341 => 122,  335 => 119,  323 => 118,  320 => 117,  314 => 114,  306 => 109,  302 => 107,  300 => 106,  294 => 103,  286 => 98,  282 => 97,  278 => 95,  275 => 94,  273 => 93,  265 => 92,  262 => 91,  260 => 90,  253 => 85,  239 => 84,  237 => 83,  234 => 82,  232 => 80,  231 => 78,  230 => 77,  229 => 76,  228 => 75,  227 => 74,  226 => 73,  225 => 72,  224 => 71,  223 => 70,  220 => 69,  203 => 68,  195 => 62,  189 => 60,  187 => 59,  180 => 55,  176 => 54,  172 => 52,  166 => 48,  159 => 44,  153 => 41,  150 => 40,  148 => 39,  142 => 36,  135 => 32,  124 => 24,  118 => 23,  111 => 18,  105 => 15,  102 => 14,  99 => 13,  97 => 12,  94 => 11,  77 => 10,  70 => 9,  53 => 8,  49 => 6,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__32758aef7a16fdf90ac17a09ecde2f7e", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 8, "if" => 13, "include" => 70);
        static $filters = array("gT" => 55);
        static $functions = array("range" => 10, "sprintf" => 15, "gT" => 15, "createUrl" => 137, "json_encode" => 147);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['gT'],
                ['range', 'sprintf', 'gT', 'createUrl', 'json_encode'],
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
