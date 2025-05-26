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

/* __string_template__da4cbdd3efe221665793568c4ee74fed */
class __TwigTemplate_2bcdba928d12c3635b776f0c84d0a39c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "


";
        // line 86
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 88
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 88), 88, $this->source);
        yield "\" dir=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 88), 88, $this->source);
        yield "\"
      class=\"";
        // line 89
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 89), 89, $this->source);
        yield " dir-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 89), 89, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        yield ">

";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/head.twig");
        yield "

<body
    class=\" ";
        // line 95
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        yield " font-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "font", [], "any", false, false, true, 95), 95, $this->source);
        yield " lang-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 95), 95, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyformat", [], "any", false, false, true, 95), 95, $this->source);
        yield " ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "brandlogo", [], "any", false, false, true, 95) == "on")) {
            yield "brand-logo";
        }
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        yield " >

";
        // line 98
        yield "<div id=\"beginScripts\">
    <###begin###>
</div>

";
        // line 103
        yield "<article>

    <div id=\"";
        // line 105
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 105), "dynamicreload", [], "any", false, false, true, 105), 105, $this->source);
        yield "\">
        ";
        // line 106
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 211
        yield "    </div>
</article>
";
        // line 213
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 216
        yield "<div id=\"bottomScripts\">
    <###end###>
</div>
";
        // line 219
        yield from $this->unwrap()->yieldBlock('themescripts', $context, $blocks);
        // line 224
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        yield "            ";
        // line 108
        yield "            ";
        yield from $this->unwrap()->yieldBlock('nav_bar', $context, $blocks);
        // line 111
        yield "

            ";
        // line 114
        yield "            ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 205
        yield "

            ";
        // line 208
        yield "            ";
        yield LS_Twig_Extension::registerScript("BasicThemeScripts", " if(window.basicThemeScripts === undefined){ window.basicThemeScripts = new ThemeScripts(); } basicThemeScripts.initGlobal(); ", "POS_END");
        yield "

        ";
        return; yield '';
    }

    // line 108
    public function block_nav_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/nav_bar.twig");
        yield "
            ";
        return; yield '';
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        yield "                <div class=\"container-fluid\">
                    ";
        // line 116
        yield LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css");
        yield "

                    <div class=\"";
        // line 118
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 118), "surveylistrow", [], "any", false, false, true, 118), 118, $this->source);
        yield " row\"
                         id=\"";
        // line 119
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        yield ">
                        <div class=\"col-12\">
                            ";
        // line 122
        yield "                            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        yield "
                            <div class=\"row justify-content-center\">
                                <div
                                    id=\"";
        // line 125
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        yield ">
                                    ";
        // line 126
        yield LS_Twig_Extension::image("./files/survey_list_header.png", $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 126), 126, $this->source), ["class" => "img-fluid mx-auto d-block"]);
        yield "
                                    <span class=\"text-center\">";
        // line 127
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteName", [], "any", false, false, true, 127), 127, $this->source);
        yield "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\"></div>
                                <div class=\"col\">
                                    <div id=\"surveylist-language-changer\" class=\"ls-js-hidden\">
                                        ";
        // line 134
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/language_changer_form.twig");
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 140
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 140), "surveylistrowdiva", [], "any", false, false, true, 140), 140, $this->source);
        yield " col-12\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 140), "surveylistrowdiva", [], "any", false, false, true, 140), 140, $this->source);
        yield ">
                                    <div
                                        class='";
        // line 142
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 142), "surveylistrowdivadiv", [], "any", false, false, true, 142), 142, $this->source);
        yield " h3' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 142), "surveylistrowdivadiv", [], "any", false, false, true, 142), 142, $this->source);
        yield ">
                                        ";
        // line 143
        yield gT("The following surveys are available:");
        yield "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 150
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 150), "surveylistrowdivb", [], "any", false, false, true, 150), 150, $this->source);
        yield " col-12\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 150), "surveylistrowdivb", [], "any", false, false, true, 150), 150, $this->source);
        yield ">
                                    <div
                                        class='";
        // line 152
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 152), "surveylistrowdivbdiv", [], "any", false, false, true, 152), 152, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 152), "surveylistrowdivbdiv", [], "any", false, false, true, 152), 152, $this->source);
        yield ">
                                        <ul class='";
        // line 153
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 153), "surveylistrowdivbdivul", [], "any", false, false, true, 153), 153, $this->source);
        yield " list-unstyled ' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 153), "surveylistrowdivbdivul", [], "any", false, false, true, 153), 153, $this->source);
        yield ">

                                            ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "publicSurveys", [], "any", false, false, true, 155));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 156
            yield "                                                <li class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 156), "surveylistrowdivbdivulli", [], "any", false, false, true, 156), 156, $this->source);
            yield " btn-group col-12 col-md-6\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 156), "surveylistrowdivbdivulli", [], "any", false, false, true, 156), 156, $this->source);
            yield ">
                                                    <a
                                                        href=\"";
            // line 158
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["oSurvey"], "sSurveyUrl", [], "any", false, false, true, 158), 158, $this->source);
            yield "\"
                                                        title=\"";
            // line 159
            yield gT("Start survey");
            yield "\"
                                                        lang=\"";
            // line 160
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["oSurvey"], "language", [], "any", false, false, true, 160), 160, $this->source);
            yield "\"
                                                        class=\"";
            // line 161
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 161), "surveylistrowdivbdivullia", [], "any", false, false, true, 161), 161, $this->source);
            yield " btn btn-primary col-12\">
                                                        ";
            // line 162
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["oSurvey"], "localizedTitle", [], "any", false, false, true, 162), 162, $this->source);
            yield "
                                                    </a>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 172
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 172), "surveylistrowdivc", [], "any", false, false, true, 172), 172, $this->source);
        yield " col-12 \" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 172), "surveylistrowdivc", [], "any", false, false, true, 172), 172, $this->source);
        yield ">
                                    ";
        // line 173
        yield sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminName", [], "any", false, false, true, 173), 173, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", [], "any", false, false, true, 173), 173, $this->source));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=\"";
        // line 179
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 179), "surveylistfooter", [], "any", false, false, true, 179), 179, $this->source);
        yield "\"
                         class=\"";
        // line 180
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 180), "surveylistfooter", [], "any", false, false, true, 180), 180, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 180), "surveylistfooter", [], "any", false, false, true, 180), 180, $this->source);
        yield ">
                        <div
                            class=\"";
        // line 182
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 182), "surveylistfootercont", [], "any", false, false, true, 182), 182, $this->source);
        yield " container\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 182), "surveylistfootercont", [], "any", false, false, true, 182), 182, $this->source);
        yield ">
                            <div ";
        // line 183
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 183), "surveylistfootercontp", [], "any", false, false, true, 183), 183, $this->source);
        yield " class=\"row\">
                                <div class=\"col-6 col-md-12\">
                                    <a ";
        // line 185
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 185), "surveylistfootercontpaa", [], "any", false, false, true, 185), 185, $this->source);
        yield ">
                                        ";
        // line 186
        yield LS_Twig_Extension::image("./files/poweredby.png", "LimeSurvey Survey Software", ["class" => "img-fluid"]);
        yield "
                                    </a>
                                </div>
                                <div class=\"col-12 d-block d-sm-none d-md-block text-center\">
                                    <a ";
        // line 190
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 190), "surveylistfootercontpab", [], "any", false, false, true, 190), 190, $this->source);
        yield ">
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                </div>
                                <div class=\"col-6 d-none d-sm-block d-md-none text-center\">
                                    <a ";
        // line 196
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 196), "surveylistfootercontpab", [], "any", false, false, true, 196), 196, $this->source);
        yield ">
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        return; yield '';
    }

    // line 213
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/footer/footer.twig");
        yield "
";
        return; yield '';
    }

    // line 219
    public function block_themescripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <script>
        window.basicThemeScripts.init();
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__da4cbdd3efe221665793568c4ee74fed";
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
        return array (  402 => 219,  394 => 214,  390 => 213,  376 => 196,  367 => 190,  360 => 186,  356 => 185,  351 => 183,  345 => 182,  338 => 180,  334 => 179,  325 => 173,  319 => 172,  311 => 166,  301 => 162,  297 => 161,  293 => 160,  289 => 159,  285 => 158,  277 => 156,  273 => 155,  266 => 153,  260 => 152,  253 => 150,  243 => 143,  237 => 142,  230 => 140,  221 => 134,  211 => 127,  207 => 126,  201 => 125,  194 => 122,  187 => 119,  183 => 118,  178 => 116,  175 => 115,  171 => 114,  163 => 109,  159 => 108,  150 => 208,  146 => 205,  143 => 114,  139 => 111,  136 => 108,  134 => 107,  130 => 106,  123 => 224,  121 => 219,  116 => 216,  114 => 213,  110 => 211,  108 => 106,  104 => 105,  100 => 103,  94 => 98,  77 => 95,  71 => 92,  60 => 89,  54 => 88,  50 => 86,  45 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__da4cbdd3efe221665793568c4ee74fed", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 95, "block" => 106, "for" => 155);
        static $filters = array();
        static $functions = array("include" => 92, "registerScript" => 208, "registerTemplateCssFile" => 116, "image" => 126, "gT" => 143, "sprintf" => 173);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for'],
                [],
                ['include', 'registerScript', 'registerTemplateCssFile', 'image', 'gT', 'sprintf'],
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
