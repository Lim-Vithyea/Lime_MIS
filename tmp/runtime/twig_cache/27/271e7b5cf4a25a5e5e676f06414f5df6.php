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

/* ./subviews/privacy/privacy_modal.twig */
class __TwigTemplate_ed2b15a068c36af40920d0626bdb5569 extends Template
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
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_error", [], "any", false, false, true, 18)) {
            // line 19
            yield "<div class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 19), "activealert", [], "any", false, false, true, 19), 19, $this->source);
            yield " alert alert-danger alert-dismissible alert-dismissible ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [], "any", false, false, true, 19)) {
                yield "ls-js-hidden ";
            }
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "activealert", [], "any", false, false, true, 19), 19, $this->source);
            yield " id=\"datasecurity_error\">
\t<a ";
            // line 20
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 20), "activealertbutton", [], "any", false, false, true, 20), 20, $this->source);
            yield " class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 20), "activealertbutton", [], "any", false, false, true, 20), 20, $this->source);
            yield " btn-close\" aria-hidden=\"true\"></a>
\t";
            // line 21
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_error", [], "any", false, false, true, 21), 21, $this->source);
            yield "
</div>
\t";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [], "any", false, false, true, 23)) {
                // line 24
                yield "\t\t";
                $context["describeprivacy"] = ("datasecurity_error " . $this->sandbox->ensureToStringAllowed(($context["describeprivacy"] ?? null), 24, $this->source));
                // line 25
                yield "\t";
            }
        }
        // line 27
        yield "<div class=\"form-check\">
    <input required class=\"";
        // line 28
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "privacydataseccheckbox", [], "any", false, false, true, 28), 28, $this->source);
        yield " form-check-input\" type=\"checkbox\" name=\"datasecurity_accepted\" id=\"datasecurity_accepted\" />
    <label for=\"datasecurity_accepted\" class=\"form-check-label fw-bold ";
        // line 29
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "privacydataseccheckboxlabel", [], "any", false, false, true, 29), 29, $this->source);
        yield "\">";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_notice_label", [], "any", false, false, true, 29), 29, $this->source);
        yield "</label>
</div>
<div class=\"collapse fade\" id=\"data-security-modal-";
        // line 31
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 31), 31, $this->source);
        yield "\">
    <div class=\"card card-primary\">
        <div class=\"card-header bg-primary\">
            <h4 class=\"modal-title\">";
        // line 34
        yield gT("Privacy policy");
        yield "</h4>
        </div>
        <div class=\"card-body ";
        // line 36
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "privacydatasecmodalbody", [], "any", false, false, true, 36), 36, $this->source);
        yield "\">
            ";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_notice", [], "any", false, false, true, 37), 37, $this->source);
        yield "
        </div>
        <div class=\"ls-no-js-hidden card-footer\">
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#datasecurity_accepted').prop('checked',true).trigger('change');\" data-bs-dismiss=\"modal\">
                ";
        // line 41
        yield gT("Accept");
        yield "
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"\$('#data-security-modal-";
        // line 43
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 43), 43, $this->source);
        yield "').collapse('hide');\">
                ";
        // line 44
        yield gT("Close");
        yield "
            </button>
        </div>
    </div>
</div>
<script>
\$(function() {
    \$(\"#ls-button-submit\").on(\"click\", function() {
        if(!\$('#datasecurity_accepted').prop('checked')) {
            /* dynamic show error */
            \$('#datasecurity_error').removeClass(\"ls-js-hidden\");
            if(\$('#datasecurity_error').length) {
                /* add it in aria and role */
                \$('#datasecurity_error').attr(\"role\", \"alert\");
                \$('#datasecurity_accepted').attr(\"aria-describedby\", \"datasecurity_error ";
        // line 58
        yield $this->sandbox->ensureToStringAllowed(($context["datasecuritynotice"] ?? null), 58, $this->source);
        yield "\");
            }
        }
    });
});
\$(\"#datasecurity_accepted\").on(\"change\", function() {
    if(\$('#datasecurity_accepted').prop('checked')) {
        /* dynamic hide error */
        \$('#datasecurity_error').addClass(\"ls-js-hidden\");
    }
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/privacy/privacy_modal.twig";
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
        return array (  138 => 58,  121 => 44,  117 => 43,  112 => 41,  105 => 37,  101 => 36,  96 => 34,  90 => 31,  83 => 29,  79 => 28,  76 => 27,  72 => 25,  69 => 24,  67 => 23,  62 => 21,  56 => 20,  45 => 19,  43 => 18,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy_modal.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\privacy\\privacy_modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "set" => 24);
        static $filters = array();
        static $functions = array("gT" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT'],
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
