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

/* /survey/questions/answer/arrays/dualscale/answer.twig */
class __TwigTemplate_36018f7baf25953fd12b3271fb3b1fb5 extends Template
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
        // line 10
        yield "
<!-- answer -->
 <div class=\"ls-table-wrapper\" role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 12
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 12, $this->source);
        yield "\">
    ";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["labelans0"] ?? null)) == 0)) {
            // line 14
            yield "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 15
            yield gT("Warning:");
            yield " ";
            yield gT("You need to add answer options to this question!");
            yield "<br>
        ";
            // line 16
            yield gT("This question cannot be properly displayed.");
            yield "
    </div>
    ";
        }
        // line 19
        yield "    <table class=\"";
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 19, $this->source);
        yield " table table-bordered table-hover\">
        <col class=\"col-answers\" style='width: ";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 20, $this->source);
        yield "%;' >
        ";
        // line 21
        if (((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != ""))) {
            // line 22
            yield "            <col style='width: 0%;'  class=\"d-none\"> <!-- see https://bugs.limesurvey.org/view.php?id=11863 -->
        ";
        }
        // line 24
        yield "        <colgroup class=\"col-responses group-1\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["labelans0"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ld"]) {
            // line 26
            yield "                <col style='width: ";
            yield $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 26, $this->source);
            yield "%;' >
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "        </colgroup>
        ";
        // line 29
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["labelans1"] ?? null)) > 1)) {
            // line 30
            yield "            <col class=\"separator\" style=\"width: ";
            yield $this->sandbox->ensureToStringAllowed(($context["separatorwidth"] ?? null), 30, $this->source);
            yield "%\">
            ";
            // line 31
            if (((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != ""))) {
                // line 32
                yield "                <col style='width: 0%;'  class=\"d-none\"> <!-- see https://bugs.limesurvey.org/view.php?id=11863 -->
            ";
            }
            // line 34
            yield "            <colgroup class=\"col-responses group-2\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["labelans1"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ld"]) {
                // line 36
                yield "                    <col style='width: ";
                yield $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 36, $this->source);
                yield "%;' >
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "            </colgroup>
        ";
        }
        // line 40
        yield "        ";
        if ((($context["shownoanswer"] ?? null) || ($context["rightexists"] ?? null))) {
            // line 41
            yield "            <col class=\"separator right_separator\" style=\"width: ";
            yield $this->sandbox->ensureToStringAllowed(($context["rightwidth"] ?? null), 41, $this->source);
            yield "%\">
        ";
        }
        // line 43
        yield "        ";
        if (($context["shownoanswer"] ?? null)) {
            // line 44
            yield "            <col class=\"col-no-answer\"  style=\"width: ";
            yield $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 44, $this->source);
            yield "%;\" />
        ";
        }
        // line 46
        yield "
        <thead>
            ";
        // line 48
        if (((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != ""))) {
            // line 49
            yield "                <tr class=\"ls-heading groups header_row\">
                    <th class=\"header_answer_text\"></th>
                    ";
            // line 51
            if (((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != ""))) {
                // line 52
                yield "                        <td class=\"d-none\"></td>
                    ";
            }
            // line 54
            yield "                    <th colspan=\"";
            yield Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["labelans0"] ?? null), 54, $this->source));
            yield "\" class=\"dsheader\">";
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["leftheader"] ?? null), 54, $this->source));
            yield "</th>
                    ";
            // line 55
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["labelans1"] ?? null)) > 0)) {
                // line 56
                yield "                        <td class=\"header_separator\"></td>  <!-- // Separator -->
                        ";
                // line 57
                if (((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != ""))) {
                    // line 58
                    yield "                            <td class=\"d-none\"></td>
                        ";
                }
                // line 60
                yield "                        <th colspan=\"";
                yield Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["labelans1"] ?? null), 60, $this->source));
                yield "\" class=\"dsheader\">";
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["rightheader"] ?? null), 60, $this->source));
                yield "</th>
                    ";
            }
            // line 62
            yield "
                    ";
            // line 63
            if ((($context["shownoanswer"] ?? null) || ($context["rightexists"] ?? null))) {
                // line 64
                yield "                        <td class=\"header_separator ";
                yield $this->sandbox->ensureToStringAllowed(($context["rightclass"] ?? null), 64, $this->source);
                yield "\"></td>
                        ";
                // line 65
                if (($context["shownoanswer"] ?? null)) {
                    // line 66
                    yield "                            <th class=\"header_no_answer\"></th>
                        ";
                }
                // line 68
                yield "                    ";
            }
            // line 69
            yield "                </tr>
            ";
        }
        // line 71
        yield "            <!-- Render header -->
            ";
        // line 72
        yield doRender("/survey/questions/answer/arrays/dualscale/answer_header", ["basename" => $this->sandbox->ensureToStringAllowed(        // line 74
($context["basename"] ?? null), 74, $this->source), "labelans0" => $this->sandbox->ensureToStringAllowed(        // line 75
($context["labelans0"] ?? null), 75, $this->source), "labelans1" => $this->sandbox->ensureToStringAllowed(        // line 76
($context["labelans1"] ?? null), 76, $this->source), "shownoanswer" => $this->sandbox->ensureToStringAllowed(        // line 77
($context["shownoanswer"] ?? null), 77, $this->source), "rightexists" => $this->sandbox->ensureToStringAllowed(        // line 78
($context["rightexists"] ?? null), 78, $this->source), "leftheader" => $this->sandbox->ensureToStringAllowed(        // line 79
($context["leftheader"] ?? null), 79, $this->source), "rightheader" => $this->sandbox->ensureToStringAllowed(        // line 80
($context["rightheader"] ?? null), 80, $this->source)], true);
        // line 84
        yield "

        </thead>

        <tbody>
            <!-- Loop all subquestions -->
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aSubQuestions"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ansrow"]) {
            // line 91
            yield "                <!-- Check for repeat headings -->
                ";
            // line 92
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "repeatheadings", [], "any", false, false, true, 92)) {
                // line 93
                yield "                        <!-- Render repeated header -->
                        ";
                // line 94
                yield doRender("/survey/questions/answer/arrays/dualscale/repeat_header", ["basename" => $this->sandbox->ensureToStringAllowed(                // line 96
($context["basename"] ?? null), 96, $this->source), "labelans0" => $this->sandbox->ensureToStringAllowed(                // line 97
($context["labelans0"] ?? null), 97, $this->source), "labelans1" => $this->sandbox->ensureToStringAllowed(                // line 98
($context["labelans1"] ?? null), 98, $this->source), "shownoanswer" => $this->sandbox->ensureToStringAllowed(                // line 99
($context["shownoanswer"] ?? null), 99, $this->source), "rightexists" => $this->sandbox->ensureToStringAllowed(                // line 100
($context["rightexists"] ?? null), 100, $this->source), "leftheader" => $this->sandbox->ensureToStringAllowed(                // line 101
($context["leftheader"] ?? null), 101, $this->source), "rightheader" => $this->sandbox->ensureToStringAllowed(                // line 102
($context["rightheader"] ?? null), 102, $this->source)], true);
                // line 106
                yield "
                ";
            }
            // line 108
            yield "
                <!-- tr -->
                <tr id=\"javatbd";
            // line 110
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname", [], "any", false, false, true, 110), 110, $this->source);
            yield "\" role=\"group\" aria-labelledby=\"answertext";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname", [], "any", false, false, true, 110), 110, $this->source);
            yield "\"
                    class=\"answers-list radio-list ";
            // line 111
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "odd", [], "any", false, false, true, 111)) {
                yield "ls-odd";
            } else {
                yield "ls-even";
            }
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "showmandatoryviolation", [], "any", false, false, true, 111)) {
                yield " ls-error-mandatory has-error";
            }
            yield "\"
                >
                <th id=\"answertext";
            // line 113
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname", [], "any", false, false, true, 113), 113, $this->source);
            yield "\" class=\"answertext control-label";
            if ((($context["answerwidth"] ?? null) == 0)) {
                yield " visually-hidden";
            }
            yield "\">
                    ";
            // line 114
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "answertext", [], "any", false, false, true, 114), 114, $this->source));
            yield "
                    ";
            // line 116
            yield "                    ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 116), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid0", [], "any", false, false, true, 116), 116, $this->source)), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "sessionfname0", [], "any", false, false, true, 116), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 117
$context["ansrow"], "myfid0", [], "any", false, false, true, 117), 117, $this->source)), "disabled" => true]], "method", false, false, true, 116), 116, $this->source);
            // line 120
            yield "
                    ";
            // line 121
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["labelans1"] ?? null)) > 0)) {
                // line 122
                yield "                        ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 122), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid1", [], "any", false, false, true, 122), 122, $this->source)), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "sessionfname1", [], "any", false, false, true, 122), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,                 // line 123
$context["ansrow"], "myfid1", [], "any", false, false, true, 123), 123, $this->source)), "disabled" => true]], "method", false, false, true, 122), 122, $this->source);
                // line 126
                yield "
                    ";
            }
            // line 128
            yield "
                </th>

                <!-- First label set -->
                ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["labelcode0"] ?? null));
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
            foreach ($context['_seq'] as $context["j"] => $context["ld"]) {
                // line 133
                yield "                    ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 133) == 0) && ((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != "")))) {
                    // line 134
                    yield "                        <td class='d-block d-lg-none visible-xs leftheader information-item'>";
                    yield $this->sandbox->ensureToStringAllowed(($context["leftheader"] ?? null), 134, $this->source);
                    yield "</td>
                    ";
                }
                // line 136
                yield "                    <td class=\"answer_cell_1_";
                yield $this->sandbox->ensureToStringAllowed($context["ld"], 136, $this->source);
                yield " answer-item radio-item\">
                        <input
                            type=\"radio\"
                            name=\"";
                // line 139
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname0", [], "any", false, false, true, 139), 139, $this->source);
                yield "\"
                            value=\"";
                // line 140
                yield $this->sandbox->ensureToStringAllowed($context["ld"], 140, $this->source);
                yield "\"
                            id=\"answer";
                // line 141
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid0", [], "any", false, false, true, 141), 141, $this->source);
                yield "-";
                yield $this->sandbox->ensureToStringAllowed($context["ld"], 141, $this->source);
                yield "\"
                            labelledby=\"answer";
                // line 142
                yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 142, $this->source);
                yield "_0-";
                yield $this->sandbox->ensureToStringAllowed($context["ld"], 142, $this->source);
                yield "\"
                            ";
                // line 143
                yield $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = ($context["labelcode0_checked"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array(get_class($__internal_compile_1), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 143)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["labelcode0_checked"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 143), [], "array", false, false, true, 143))) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["ld"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = ($context["labelcode0_checked"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array(get_class($__internal_compile_2), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 143)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["labelcode0_checked"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 143), [], "array", false, false, true, 143)), $context["ld"], [], "array", false, false, true, 143)), 143, $this->source);
                yield "
                        />
                        <label for=\"answer";
                // line 145
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid0", [], "any", false, false, true, 145), 145, $this->source);
                yield "-";
                yield $this->sandbox->ensureToStringAllowed($context["ld"], 145, $this->source);
                yield "\" class=\"ls-label-xs-visibility\" aria-hidden=\"true\">
                            ";
                // line 146
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["labelans0"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess && in_array(get_class($__internal_compile_3), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_3[$context["j"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["labelans0"] ?? null), $context["j"], [], "array", false, false, true, 146)), 146, $this->source));
                yield "
                        </label>
                    </td>
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
            unset($context['_seq'], $context['_iterated'], $context['j'], $context['ld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            yield "
                ";
            // line 151
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["labelans1"] ?? null)) > 0)) {
                yield "  ";
                // line 152
                yield "                    <td class=\"dual_scale_separator information-item ";
                if (($context["shownoanswer"] ?? null)) {
                    yield "answer_cell_1_ radio-item noanswer-item ";
                }
                if ((($context["separatorwidth"] ?? null) == 0)) {
                    yield " visually-hidden";
                }
                yield "\">
                        ";
                // line 153
                if (($context["shownoanswer"] ?? null)) {
                    yield " ";
                    // line 154
                    yield "                        <div class=\"ls-js-hidden\">
                            <input
                                type='radio'
                                name='";
                    // line 157
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname0", [], "any", false, false, true, 157), 157, $this->source);
                    yield "'
                                value=''
                                id='answer";
                    // line 159
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid0", [], "any", false, false, true, 159), 159, $this->source);
                    yield "-'
                                labelledby=\"answer";
                    // line 160
                    yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 160, $this->source);
                    yield "-\"
                                ";
                    // line 161
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname0_notset", [], "any", false, false, true, 161), 161, $this->source);
                    yield "
                            />
                            <label for='answer";
                    // line 163
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid0", [], "any", false, false, true, 163), 163, $this->source);
                    yield "-' class='ls-label-xs-visibility'>
                                ";
                    // line 164
                    yield gT("No answer");
                    yield "
                            </label>
                        </div>
                        ";
                }
                // line 168
                yield "                        ";
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "answertextcenter", [], "any", false, false, true, 168), 168, $this->source));
                yield "
                    </td>

                    <!-- Second label set -->
                    ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["labelcode1"] ?? null));
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
                foreach ($context['_seq'] as $context["k"] => $context["ld"]) {
                    // line 173
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 173) == 0) && ((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != "")))) {
                        // line 174
                        yield "                            <td class='d-block d-lg-none visible-xs rightheader information-item'>";
                        yield $this->sandbox->ensureToStringAllowed(($context["rightheader"] ?? null), 174, $this->source);
                        yield "</td>
                        ";
                    }
                    // line 176
                    yield "                        <td class=\"answer_cell_2_";
                    yield $this->sandbox->ensureToStringAllowed($context["ld"], 176, $this->source);
                    yield " answer-item radio-item\">
                            <input
                                type=\"radio\"
                                name=\"";
                    // line 179
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname1", [], "any", false, false, true, 179), 179, $this->source);
                    yield "\"
                                value=\"";
                    // line 180
                    yield $this->sandbox->ensureToStringAllowed($context["ld"], 180, $this->source);
                    yield "\"
                                id=\"answer";
                    // line 181
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid1", [], "any", false, false, true, 181), 181, $this->source);
                    yield "-";
                    yield $this->sandbox->ensureToStringAllowed($context["ld"], 181, $this->source);
                    yield "\"
                                labelledby=\"answer";
                    // line 182
                    yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 182, $this->source);
                    yield "_1-";
                    yield $this->sandbox->ensureToStringAllowed($context["ld"], 182, $this->source);
                    yield "\"
                                ";
                    // line 183
                    yield $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = ($context["labelcode1_checked"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess && in_array(get_class($__internal_compile_5), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_5[CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 183)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["labelcode1_checked"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 183), [], "array", false, false, true, 183))) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess && in_array(get_class($__internal_compile_4), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_4[$context["ld"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = ($context["labelcode1_checked"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess && in_array(get_class($__internal_compile_6), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 183)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["labelcode1_checked"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "title", [], "any", false, false, true, 183), [], "array", false, false, true, 183)), $context["ld"], [], "array", false, false, true, 183)), 183, $this->source);
                    yield "
                            />
                            <label for=\"answer";
                    // line 185
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid1", [], "any", false, false, true, 185), 185, $this->source);
                    yield "-";
                    yield $this->sandbox->ensureToStringAllowed($context["ld"], 185, $this->source);
                    yield "\" class=\"ls-label-xs-visibility\">
                                ";
                    // line 186
                    yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["labelans1"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess && in_array(get_class($__internal_compile_7), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_7[$context["k"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["labelans1"] ?? null), $context["k"], [], "array", false, false, true, 186)), 186, $this->source));
                    yield "
                            </label>
                        </td>
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
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['ld'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                yield "                ";
            }
            // line 191
            yield "
                <!-- Separator for no-answer -->
                ";
            // line 193
            if ((($context["shownoanswer"] ?? null) || ($context["rightexists"] ?? null))) {
                // line 194
                yield "                    <td class=\"answertextright dual_scale_separator information-item\">";
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "answertextright", [], "any", false, false, true, 194), 194, $this->source));
                yield "</td>
                ";
            }
            // line 196
            yield "
                <!-- No answer column -->
                ";
            // line 198
            if (($context["shownoanswer"] ?? null)) {
                // line 199
                yield "                    <td class=\"answer_cell_2_ answer-item radio-item noanswer-item\">
                        ";
                // line 200
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["labelans1"] ?? null)) > 0)) {
                    // line 201
                    yield "                                <input
                                    type='radio'
                                    name='";
                    // line 203
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname1", [], "any", false, false, true, 203), 203, $this->source);
                    yield "'
                                    value=''
                                    id='answer";
                    // line 205
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid1", [], "any", false, false, true, 205), 205, $this->source);
                    yield "-'
                                    labelledby=\"answer";
                    // line 206
                    yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 206, $this->source);
                    yield "-\"
                                    ";
                    // line 207
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname1_notset", [], "any", false, false, true, 207), 207, $this->source);
                    yield "
                                />
                            <label for='answer";
                    // line 209
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid1", [], "any", false, false, true, 209), 209, $this->source);
                    yield "-' class=\"ls-label-xs-visibility\">
                                ";
                    // line 210
                    yield gT("No answer");
                    yield "
                            </label>
                        ";
                } else {
                    // line 213
                    yield "                                <input
                                    type='radio'
                                    name='";
                    // line 215
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname0", [], "any", false, false, true, 215), 215, $this->source);
                    yield "'
                                    value=''
                                    id='answer";
                    // line 217
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid0", [], "any", false, false, true, 217), 217, $this->source);
                    yield "-'
                                    labelledby=\"answer";
                    // line 218
                    yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 218, $this->source);
                    yield "-\"
                                    ";
                    // line 219
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfname0_notset", [], "any", false, false, true, 219), 219, $this->source);
                    yield "
                                />
                            <label for='answer";
                    // line 221
                    yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["ansrow"], "myfid0", [], "any", false, false, true, 221), 221, $this->source);
                    yield "-' class=\"ls-label-xs-visibility\">
                                ";
                    // line 222
                    yield gT("No answer");
                    yield "
                            </label>
                        ";
                }
                // line 225
                yield "                    </td>
                ";
            }
            // line 227
            yield "
                </tr>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ansrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "
        </tbody>
    </table>
</div>
<!-- end of answer -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/dualscale/answer.twig";
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
        return array (  666 => 231,  649 => 227,  645 => 225,  639 => 222,  635 => 221,  630 => 219,  626 => 218,  622 => 217,  617 => 215,  613 => 213,  607 => 210,  603 => 209,  598 => 207,  594 => 206,  590 => 205,  585 => 203,  581 => 201,  579 => 200,  576 => 199,  574 => 198,  570 => 196,  564 => 194,  562 => 193,  558 => 191,  555 => 190,  537 => 186,  531 => 185,  526 => 183,  520 => 182,  514 => 181,  510 => 180,  506 => 179,  499 => 176,  493 => 174,  490 => 173,  473 => 172,  465 => 168,  458 => 164,  454 => 163,  449 => 161,  445 => 160,  441 => 159,  436 => 157,  431 => 154,  428 => 153,  418 => 152,  415 => 151,  412 => 150,  394 => 146,  388 => 145,  383 => 143,  377 => 142,  371 => 141,  367 => 140,  363 => 139,  356 => 136,  350 => 134,  347 => 133,  330 => 132,  324 => 128,  320 => 126,  318 => 123,  316 => 122,  314 => 121,  311 => 120,  309 => 117,  307 => 116,  303 => 114,  295 => 113,  283 => 111,  277 => 110,  273 => 108,  269 => 106,  267 => 102,  266 => 101,  265 => 100,  264 => 99,  263 => 98,  262 => 97,  261 => 96,  260 => 94,  257 => 93,  255 => 92,  252 => 91,  235 => 90,  227 => 84,  225 => 80,  224 => 79,  223 => 78,  222 => 77,  221 => 76,  220 => 75,  219 => 74,  218 => 72,  215 => 71,  211 => 69,  208 => 68,  204 => 66,  202 => 65,  197 => 64,  195 => 63,  192 => 62,  184 => 60,  180 => 58,  178 => 57,  175 => 56,  173 => 55,  166 => 54,  162 => 52,  160 => 51,  156 => 49,  154 => 48,  150 => 46,  144 => 44,  141 => 43,  135 => 41,  132 => 40,  128 => 38,  119 => 36,  115 => 35,  112 => 34,  108 => 32,  106 => 31,  101 => 30,  99 => 29,  96 => 28,  87 => 26,  83 => 25,  80 => 24,  76 => 22,  74 => 21,  70 => 20,  65 => 19,  59 => 16,  53 => 15,  50 => 14,  48 => 13,  44 => 12,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/dualscale/answer.twig", "C:\\wamp64\\www\\limemis\\Lime_MIS\\application\\views\\survey\\questions\\answer\\arrays\\dualscale\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "for" => 25);
        static $filters = array("length" => 13);
        static $functions = array("gT" => 15, "processString" => 54, "doRender" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length'],
                ['gT', 'processString', 'doRender'],
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
