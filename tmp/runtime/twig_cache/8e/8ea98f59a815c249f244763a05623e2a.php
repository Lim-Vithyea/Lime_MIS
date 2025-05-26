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

/* __string_template__559d49c8f487e3e193e8bebf21dd7393 */
class __TwigTemplate_d7b125f14935a0e144c237cf1de5c197 extends Template
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
        yield "<input type='hidden' name='subquestions_sortorder' value='' />
<input type='hidden' id='subquestions_deletedqids' name='subquestions_deletedqids' value='' />

";
        // line 4
        $context["first"] = true;
        // line 5
        $context["scale_id"] = 0;
        // line 7
        $context["supportsRelevance"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "questionType", [], "any", false, false, true, 7), "code", [], "any", false, false, true, 7) != "H");
        // line 8
        yield "
<!-- Loop all language, and then hide all but the current selected one with JS. -->
";
        // line 10
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
            // line 11
            yield "    <div class=\"lang-hide lang-";
            yield $this->sandbox->ensureToStringAllowed($context["lang"], 11, $this->source);
            yield " ";
            yield ((($context["first"] ?? null)) ? ("base-lang") : ("extra-lang"));
            yield "\">
        ";
            // line 12
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
                // line 13
                yield "            ";
                $context["anscount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["subquestions"] ?? null), 13, $this->source));
                // line 14
                yield "            ";
                // line 15
                yield "
            ";
                // line 16
                $context["position"] = 0;
                // line 17
                yield "            ";
                if ((($context["scalecount"] ?? null) > 1)) {
                    // line 18
                    yield "                ";
                    if (($context["scale_id"] == 0)) {
                        // line 19
                        yield "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 20
                        yield gT("Y-Scale");
                        yield "</i>
                    </div>
                ";
                    } else {
                        // line 23
                        yield "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 24
                        yield gT("X-Scale");
                        yield "</i>
                    </div>
                ";
                    }
                    // line 27
                    yield "            ";
                }
                // line 28
                yield "
            <!-- Subquestions table -->
            <!-- NB: Both questions and answer options uses class \"answertable\". -->
            <div class=\"subquestions-table-wrapper\" style=\"max-height: 414px;\">
                <table
                    class='answertable subquestions-table table table-responsive  ";
                // line 33
                yield ((($context["supportsRelevance"] ?? null)) ? ("") : ("hide-relevance"));
                yield "'
                    id='subquestions_";
                // line 34
                yield $this->sandbox->ensureToStringAllowed($context["lang"], 34, $this->source);
                yield "_";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 34, $this->source);
                yield "'
                    data-scaleid='";
                // line 35
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 35, $this->source);
                yield "'
                    data-input-data-id='add-subquestion-input-javascript-datas'
                >

                    <!-- Headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th class='col-lg-1'>";
                // line 43
                yield gT("Code");
                yield "
                            <i
                class=\"ri-information-fill\"
                data-bs-toggle=\"tooltip\"
                title=\"";
                // line 47
                yield gT("A mandatory unique alpha-numeric code for each subquestion (1-20 characters)");
                yield "\"
            > </i>
                            </th>
                            <th>
                                ";
                // line 51
                yield gT("Subquestion");
                yield "
                                <i class=\"ri-earth-fill\" data-bs-toggle=\"tooltip\" title=\"";
                // line 52
                yield gT("This setting is localized");
                yield "\"></i>
                            </th>
                            ";
                // line 54
                if (($context["first"] ?? null)) {
                    // line 55
                    yield "                                ";
                    if (($context["scale_id"] == 0)) {
                        // line 56
                        yield "                                    <th id='rel-eq-th' class='col-lg-1'>
                                        ";
                        // line 57
                        yield gT("Relevance equation");
                        yield "
                                    </th>
                                ";
                    }
                    // line 60
                    yield "                                <th class=\"col-lg-1\">
                                    ";
                    // line 61
                    yield gT("Action");
                    yield "
                                </th>
                            ";
                }
                // line 64
                yield "                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody>
                        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = ($context["subquestions"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["scale_id"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["subquestions"] ?? null), $context["scale_id"], [], "array", false, false, true, 69)));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subquestion"]) {
                    // line 70
                    yield "                            <!-- Line tag -->
                            ";
                    // line 71
                    yield from                     $this->loadTemplate("subquestionRow.twig", "__string_template__559d49c8f487e3e193e8bebf21dd7393", 71)->unwrap()->yield(CoreExtension::merge($context, ["position" =>                     // line 72
($context["position"] ?? null), "scale_id" =>                     // line 73
$context["scale_id"], "activated" =>                     // line 74
($context["activated"] ?? null), "first" =>                     // line 75
($context["first"] ?? null), "subquestion" =>                     // line 76
$context["subquestion"], "subquestionl10n" => (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,                     // line 77
$context["subquestion"], "questionl10ns", [], "any", false, false, true, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array(get_class($__internal_compile_1), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[$context["lang"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subquestion"], "questionl10ns", [], "any", false, false, true, 77), $context["lang"], [], "array", false, false, true, 77)), "language" =>                     // line 78
$context["lang"]]));
                    // line 80
                    yield "
                            ";
                    // line 81
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 82
                    yield "
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subquestion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                yield "                    </tbody>
                </table>
            </div>

            <div class=\"action-buttons\" style=\"padding-bottom: 10px;\">
                ";
                // line 89
                if ((($context["activated"] ?? null) == "Y")) {
                    // line 90
                    yield "                    ";
                    $context["disabled"] = "disabled=\"disabled\"";
                    // line 91
                    yield "                ";
                } else {
                    // line 92
                    yield "                    ";
                    $context["disabled"] = "";
                    // line 93
                    yield "                ";
                }
                // line 94
                yield "
                <button
                    ";
                // line 96
                yield $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 96, $this->source);
                yield "
                    data-scale-id=\"";
                // line 97
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 97, $this->source);
                yield "\"
                    class='btnlsbrowser btn btn-outline-secondary'
                    type='button'
                    onclick=\"LS.questionEditor.showLabelSetPicker(event, 'subquestions');\"
                >
                    ";
                // line 102
                yield gT("Load label set");
                yield "
                </button>

                ";
                // line 105
                if (($context["hasLabelSetPermission"] ?? null)) {
                    // line 106
                    yield "                    <button
                        class='bthsaveaslabel btn btn-outline-secondary'
                        id='bthsaveaslabel_";
                    // line 108
                    yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 108, $this->source);
                    yield "'
                        type='button'
                        onclick=\"LS.questionEditor.showLabelSetSaver(event, 'subquestions-table');\"
                        data-bs-target=\"#saveaslabelModal\"
                    >
                        ";
                    // line 113
                    yield gT("Save label set");
                    yield "
                    </button>
                ";
                }
                // line 116
                yield "
                <button ";
                // line 117
                yield $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 117, $this->source);
                yield " id='btnquickadd_";
                yield $this->sandbox->ensureToStringAllowed($context["lang"], 117, $this->source);
                yield "_";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 117, $this->source);
                yield "' data-scale-id=\"";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 117, $this->source);
                yield "\" class='btn btn-outline-secondary btnquickadd float-end' type='button' data-bs-toggle=\"modal\" data-bs-target=\"#quickaddModal\" data-scale-id=\"";
                yield $this->sandbox->ensureToStringAllowed($context["scale_id"], 117, $this->source);
                yield "\">
                    ";
                // line 118
                yield gT("Quick add");
                yield "
                </button>
            </div>
            ";
                // line 121
                $context["position"] = sprintf("%05d", $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 121, $this->source));
                // line 122
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
            // line 123
            yield "    </div>
    ";
            // line 124
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
        // line 126
        yield "
<!-- For javascript -->
<input
    type=\"hidden\"
    id=\"add-subquestion-input-javascript-datas\"
    data-url=\"";
        // line 131
        yield LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowForAllLanguages/");
        yield "\"
    data-quickurl=\"";
        // line 132
        yield LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowQuickAdd", ["surveyid" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 135
($context["question"] ?? null), "sid", [], "any", false, false, true, 135), 135, $this->source), "gid" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 136
($context["question"] ?? null), "gid", [], "any", false, false, true, 136), 136, $this->source)]);
        // line 138
        yield "\"
    data-assessmentvisible=\"";
        // line 139
        if ((($context["assessmentvisible"] ?? null) == true)) {
            yield "1";
        } else {
            yield "0";
        }
        yield "\"
    data-errormessage=\"An error occured while processing the ajax request.\"
    data-languages='";
        // line 141
        yield CJSON::encode($this->sandbox->ensureToStringAllowed(($context["allLanguages"] ?? null), 141, $this->source));
        yield "'
    data-surveyid=\"";
        // line 142
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "sid", [], "any", false, false, true, 142), 142, $this->source);
        yield "\"
    data-gid=\"";
        // line 143
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "gid", [], "any", false, false, true, 143), 143, $this->source);
        yield "\"
    data-qid=\"";
        // line 144
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "qid", [], "any", false, false, true, 144), 144, $this->source);
        yield "\"
    data-scale-id=\"";
        // line 145
        yield $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 145, $this->source);
        yield "\" ";
        // line 146
        yield "/>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__559d49c8f487e3e193e8bebf21dd7393";
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
        return array (  426 => 146,  423 => 145,  419 => 144,  415 => 143,  411 => 142,  407 => 141,  398 => 139,  395 => 138,  393 => 136,  392 => 135,  391 => 132,  387 => 131,  380 => 126,  366 => 124,  363 => 123,  349 => 122,  347 => 121,  341 => 118,  329 => 117,  326 => 116,  320 => 113,  312 => 108,  308 => 106,  306 => 105,  300 => 102,  292 => 97,  288 => 96,  284 => 94,  281 => 93,  278 => 92,  275 => 91,  272 => 90,  270 => 89,  263 => 84,  248 => 82,  246 => 81,  243 => 80,  241 => 78,  240 => 77,  239 => 76,  238 => 75,  237 => 74,  236 => 73,  235 => 72,  234 => 71,  231 => 70,  214 => 69,  207 => 64,  201 => 61,  198 => 60,  192 => 57,  189 => 56,  186 => 55,  184 => 54,  179 => 52,  175 => 51,  168 => 47,  161 => 43,  150 => 35,  144 => 34,  140 => 33,  133 => 28,  130 => 27,  124 => 24,  121 => 23,  115 => 20,  112 => 19,  109 => 18,  106 => 17,  104 => 16,  101 => 15,  99 => 14,  96 => 13,  79 => 12,  72 => 11,  55 => 10,  51 => 8,  49 => 7,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__559d49c8f487e3e193e8bebf21dd7393", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 10, "if" => 17, "include" => 71);
        static $filters = array("length" => 13, "gT" => 52);
        static $functions = array("range" => 12, "gT" => 20, "sprintf" => 121, "createUrl" => 131, "json_encode" => 141);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['length', 'gT'],
                ['range', 'gT', 'sprintf', 'createUrl', 'json_encode'],
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
