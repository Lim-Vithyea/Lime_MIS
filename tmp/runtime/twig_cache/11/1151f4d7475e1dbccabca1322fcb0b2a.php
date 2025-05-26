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

/* ./subviews/header/custom_header.twig */
class __TwigTemplate_602de66383b267ec065450f3fd3f180d extends Template
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
        // line 17
        yield "
";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 19), "notables", [], "any", false, false, true, 19) == "2")) {
            // line 20
            yield "    ";
            yield LS_Twig_Extension::registerTemplateCssFile("./css/noTablesGeneral.css");
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 21), "notables", [], "any", false, false, true, 21) == "1")) {
            // line 22
            yield "    ";
            yield LS_Twig_Extension::registerTemplateCssFile("./css/noTablesOnMobile.css");
            yield "
";
        }
        // line 24
        yield "
";
        // line 26
        yield "<style>
    ";
        // line 27
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 27), "backgroundimage", [], "any", false, false, true, 27) == "on") && LS_Twig_Extension::imageSrc(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 27), "backgroundimagefile", [], "any", false, false, true, 27)))) {
            // line 28
            yield "        body {
            background-image: url('";
            // line 29
            yield LS_Twig_Extension::imageSrc($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 29), "backgroundimagefile", [], "any", false, false, true, 29), 29, $this->source));
            yield "');
            background-attachment: fixed;
            background-size: cover;

        }

        body .top-container {
            background-color: rgba(236, 240, 241, 0.2);
        }
    ";
        }
        // line 39
        yield "
    ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 40), "brandlogo", [], "any", false, false, true, 40) == "on")) {
            // line 41
            yield "        body .top-container {
            margin-top: 70px;
        }
    ";
        }
        // line 45
        yield "
    body {
         padding-bottom: 10px;
         /*padding-top: 60px;!* now is redefine in JS to fit any title length *!*/
         background-color:";
        // line 49
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 49), "bodybackgroundcolor", [], "any", false, false, true, 49), 49, $this->source);
        yield " ;
         color: ";
        // line 50
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 50), "fontcolor", [], "any", false, false, true, 50), 50, $this->source);
        yield ";
    }

    .navbar-default .navbar-nav > li > a:hover {
        color: ";
        // line 54
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 54), "fontcolor", [], "any", false, false, true, 54), 54, $this->source);
        yield ";
    }


    .question-container {
      background-color: ";
        // line 59
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 59), "questionbackgroundcolor", [], "any", false, false, true, 59), 59, $this->source);
        yield ";

      ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 61), "questionborder", [], "any", false, false, true, 61) == "on")) {
            // line 62
            yield "        border:  1px solid #e6e6e6;
      ";
        }
        // line 64
        yield "
      ";
        // line 65
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 65), "questioncontainershadow", [], "any", false, false, true, 65) == "on") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 65), "questionborder", [], "any", false, false, true, 65) == "on"))) {
            // line 66
            yield "        box-shadow: 0 1px 2px rgba(0,0,0,.2);
      ";
        }
        // line 68
        yield "    }

    ";
        // line 70
        $context["checkicon"] = (("\"\\" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 70), "checkicon", [], "any", false, false, true, 70), 70, $this->source)) . "\"");
        // line 71
        yield "    .checkbox-item input[type=\"checkbox\"]:checked + label::after, .checkbox-item input[type=\"radio\"]:checked + label::after {
        content: ";
        // line 72
        yield $this->sandbox->ensureToStringAllowed(($context["checkicon"] ?? null), 72, $this->source);
        yield ";
    }

    ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 75), "animatecheckbox", [], "any", false, false, true, 75) == "on")) {
            // line 76
            yield "
        ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 77), "checkboxanimationduration", [], "any", false, false, true, 77) < 1)) {
                // line 78
                yield "            ";
                $context["checkboxanimationduration"] = 500;
                // line 79
                yield "        ";
            } else {
                // line 80
                yield "            ";
                $context["checkboxanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 80), "checkboxanimationduration", [], "any", false, false, true, 80);
                // line 81
                yield "        ";
            }
            // line 82
            yield "
        .checkbox-item input[type=\"checkbox\"]:checked + label::after{
            animation-name: ";
            // line 84
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 84), "checkboxanimation", [], "any", false, false, true, 84), 84, $this->source);
            yield ";
            animation-duration: ";
            // line 85
            yield $this->sandbox->ensureToStringAllowed(($context["checkboxanimationduration"] ?? null), 85, $this->source);
            yield "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .checkbox-item input[type=\"checkbox\"] + label::after{
            display: none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 102
        yield "
    ";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 103), "animateradio", [], "any", false, false, true, 103) == "on")) {
            // line 104
            yield "
        ";
            // line 105
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 105), "radioanimationduration", [], "any", false, false, true, 105) < 1)) {
                // line 106
                yield "            ";
                $context["radioanimationduration"] = 500;
                // line 107
                yield "        ";
            } else {
                // line 108
                yield "            ";
                $context["radioanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 108), "radioanimationduration", [], "any", false, false, true, 108);
                // line 109
                yield "        ";
            }
            // line 110
            yield "
        .radio-item input[type=\"radio\"]:checked + label::after{
            animation-name: ";
            // line 112
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 112), "radioanimation", [], "any", false, false, true, 112), 112, $this->source);
            yield ";
            animation-duration: ";
            // line 113
            yield $this->sandbox->ensureToStringAllowed(($context["radioanimationduration"] ?? null), 113, $this->source);
            yield "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .radio-item input[type=\"radio\"] + label::after{
            display:none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 130
        yield "
    ";
        // line 131
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 131), "animatequestion", [], "any", false, false, true, 131) == "on")) {
            // line 132
            yield "
        ";
            // line 133
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 133), "questionanimationduration", [], "any", false, false, true, 133) < 1)) {
                // line 134
                yield "            ";
                $context["questionanimationduration"] = 500;
                // line 135
                yield "        ";
            } else {
                // line 136
                yield "            ";
                $context["questionanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 136), "questionanimationduration", [], "any", false, false, true, 136);
                // line 137
                yield "        ";
            }
            // line 138
            yield "
        .question-container {
            animation-name: ";
            // line 140
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 140), "questionanimation", [], "any", false, false, true, 140), 140, $this->source);
            yield ";
            animation-duration: ";
            // line 141
            yield $this->sandbox->ensureToStringAllowed(($context["questionanimationduration"] ?? null), 141, $this->source);
            yield "ms;
            animation-fill-mode: none; /* Issue #18648: Unable to upload a file with theme animations enabled - Set it to none to avoid overlay */
        }
    ";
        }
        // line 145
        yield "
    ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 146), "animatealert", [], "any", false, false, true, 146) == "on")) {
            // line 147
            yield "
        ";
            // line 148
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 148), "alertanimationduration", [], "any", false, false, true, 148) < 1)) {
                // line 149
                yield "            ";
                $context["alertanimationduration"] = 500;
                // line 150
                yield "        ";
            } else {
                // line 151
                yield "            ";
                $context["alertanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 151), "alertanimationduration", [], "any", false, false, true, 151);
                // line 152
                yield "        ";
            }
            // line 153
            yield "
        .alert {
            animation-name: ";
            // line 155
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 155), "alertanimation", [], "any", false, false, true, 155), 155, $this->source);
            yield ";
            animation-duration: ";
            // line 156
            yield $this->sandbox->ensureToStringAllowed(($context["alertanimationduration"] ?? null), 156, $this->source);
            yield "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 160
        yield "
    ";
        // line 161
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 161), "animatebody", [], "any", false, false, true, 161) == "on")) {
            // line 162
            yield "
        ";
            // line 163
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 163), "bodyanimationduration", [], "any", false, false, true, 163) < 1)) {
                // line 164
                yield "            ";
                $context["bodyanimationduration"] = 500;
                // line 165
                yield "        ";
            } else {
                // line 166
                yield "            ";
                $context["bodyanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 166), "bodyanimationduration", [], "any", false, false, true, 166);
                // line 167
                yield "        ";
            }
            // line 168
            yield "
        #outerframeContainer {
            animation-name: ";
            // line 170
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 170), "bodyanimation", [], "any", false, false, true, 170), 170, $this->source);
            yield ";
            animation-duration: ";
            // line 171
            yield $this->sandbox->ensureToStringAllowed(($context["bodyanimationduration"] ?? null), 171, $this->source);
            yield "ms;
            animation-fill-mode: none;  /* Issue #18648: Unable to upload a file with theme animations enabled - Set it to none to avoid overlay */
        }
    ";
        }
        // line 175
        yield "
    ";
        // line 176
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 176), "zebrastriping", [], "any", false, false, true, 176) == "on")) {
            // line 177
            yield "    .question-container:nth-of-type(odd){
        background-color: ";
            // line 178
            yield LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 178), "questionbackgroundcolor", [], "any", false, false, true, 178), 178, $this->source));
            yield "
    }
    .question-container:nth-of-type(even){
        background-color: ";
            // line 181
            yield LS_Twig_Extension::lightencss($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 181), "questionbackgroundcolor", [], "any", false, false, true, 181), 181, $this->source));
            yield "
    }
    ";
        }
        // line 184
        yield "
    ";
        // line 185
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 185), "stickymatrixheaders", [], "any", false, false, true, 185) == "on")) {
            // line 186
            yield "
        .sticky .ls-heading.stickyBar {
            background: white;
            opacity: 1;
        }
        .sticky .ls-heading.stickyBar>td,
        .sticky .ls-heading.stickyBar>th {
            word-break: break-word;
        }

        .sticky .ls-heading.stickyBar>td:first-child {
            visibility: hidden;
        }

        .sticky .ls-heading:nth-child(n+2) {
            display: none;
            background: white;
        }

        tbody>.ls-heading-repeat:not(.stickyBar) {
            display: none;
        }
        @media (max-width: 1024px){
            .sticky .ls-heading.stickyBar {
                display: none;
            }
        }
    ";
        }
        // line 214
        yield "
    ";
        // line 215
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 215), "greyoutselected", [], "any", false, false, true, 215) == "on")) {
            // line 216
            yield "
        tr.radio-list.selected{
            opacity: 0.5;
        }
        tr.radio-list.selected:hover,
        tr.radio-list.selected:active{
            opacity: 1;
        }
    ";
        }
        // line 225
        yield "
    ";
        // line 226
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 226), "crosshover", [], "any", false, false, true, 226) == "on")) {
            // line 227
            yield "        @media (min-width: 1024px){
            table.ls-answers.table-hover,
            table.ls-answers.table-col-hover
            {
                overflow: hidden;
                }

            table.ls-answers.table-hover>tbody>tr:hover td,
            table.ls-answers.table-hover>tbody>tr:hover th,
            table.ls-answers.table-col-hover>tbody>tr:hover td,
            table.ls-answers.table-col-hover>tbody>tr:hover th {
                background-color: ";
            // line 238
            yield LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 238), "questionbackgroundcolor", [], "any", false, false, true, 238), 238, $this->source), 50, 0.2);
            yield ";
            }

            table.ls-answers.table-hover>tbody>tr>td, th {
                position: relative;
            }
            table.ls-answers.table-col-hover>tbody>tr>td, th {
                position: relative;
            }
            table.ls-answers.table-hover>tbody>tr>td:hover::after,
            table.ls-answers.table-col-hover>tbody>tr>td:hover::after {
                content: \"\";
                position: absolute;
                background-color: ";
            // line 251
            yield LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 251), "questionbackgroundcolor", [], "any", false, false, true, 251), 251, $this->source), 50, 0.2);
            yield ";
                left: 0;
                top: -5000px;
                height: 10000px;
                width: 100%;
                z-index: 2;
                pointer-events: none;
            }
        }
    ";
        }
        // line 261
        yield "
</style>


";
        // line 265
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 265), "stickymatrixheaders", [], "any", false, false, true, 265) == "on")) {
            // line 266
            yield "    ";
            yield LS_Twig_Extension::registerTemplateScript("scripts/sticky.min.js", "POS_BEGIN");
            yield "
    ";
            // line 267
            yield LS_Twig_Extension::registerScript("StickyMatrixHeaderScript", "
        var stickyRows = new StickyTableRows();
        \$('thead>tr.ls-heading').each(function(itrt, item){
            if(\$(item).closest('div.question-container').hasClass('array-flexible-dual-scale')) {
                return;
            }
            stickyRows.add(item);
        });
        stickyRows.init();
    ", "POS_POSTSCRIPT");
            // line 276
            yield "
";
        }
        // line 278
        yield "
";
        // line 279
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 279), "greyoutselected", [], "any", false, false, true, 279) == "on")) {
            // line 280
            yield "    ";
            yield LS_Twig_Extension::registerScript("GreyOutSelectedScript", "
    \$('td.radio-item > input[type=radio]').on('click', function(){
        if(\$(this).val() != '' ) {
            \$(this).closest('tr.radio-list').addClass('selected');
        } else {
            \$(this).closest('tr.radio-list').removeClass('selected');
        }
    })
    ", "POS_POSTSCRIPT");
            // line 288
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/header/custom_header.twig";
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
        return array (  523 => 288,  512 => 280,  510 => 279,  507 => 278,  503 => 276,  492 => 267,  487 => 266,  485 => 265,  479 => 261,  466 => 251,  450 => 238,  437 => 227,  435 => 226,  432 => 225,  421 => 216,  419 => 215,  416 => 214,  386 => 186,  384 => 185,  381 => 184,  375 => 181,  369 => 178,  366 => 177,  364 => 176,  361 => 175,  354 => 171,  350 => 170,  346 => 168,  343 => 167,  340 => 166,  337 => 165,  334 => 164,  332 => 163,  329 => 162,  327 => 161,  324 => 160,  317 => 156,  313 => 155,  309 => 153,  306 => 152,  303 => 151,  300 => 150,  297 => 149,  295 => 148,  292 => 147,  290 => 146,  287 => 145,  280 => 141,  276 => 140,  272 => 138,  269 => 137,  266 => 136,  263 => 135,  260 => 134,  258 => 133,  255 => 132,  253 => 131,  250 => 130,  230 => 113,  226 => 112,  222 => 110,  219 => 109,  216 => 108,  213 => 107,  210 => 106,  208 => 105,  205 => 104,  203 => 103,  200 => 102,  180 => 85,  176 => 84,  172 => 82,  169 => 81,  166 => 80,  163 => 79,  160 => 78,  158 => 77,  155 => 76,  153 => 75,  147 => 72,  144 => 71,  142 => 70,  138 => 68,  134 => 66,  132 => 65,  129 => 64,  125 => 62,  123 => 61,  118 => 59,  110 => 54,  103 => 50,  99 => 49,  93 => 45,  87 => 41,  85 => 40,  82 => 39,  69 => 29,  66 => 28,  64 => 27,  61 => 26,  58 => 24,  52 => 22,  50 => 21,  45 => 20,  43 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/custom_header.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\fruity\\views\\subviews\\header\\custom_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 70);
        static $filters = array();
        static $functions = array("registerTemplateCssFile" => 20, "imageSrc" => 27, "darkencss" => 178, "lightencss" => 181, "registerTemplateScript" => 266, "registerScript" => 267);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['registerTemplateCssFile', 'imageSrc', 'darkencss', 'lightencss', 'registerTemplateScript', 'registerScript'],
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
