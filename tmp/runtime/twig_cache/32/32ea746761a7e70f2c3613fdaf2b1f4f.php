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

/* ./survey/questions/answer/multiplechoice/rows/answer_row.twig */
class __TwigTemplate_aac73b8bf76423b27bcc24b2955a252d extends Template
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
        // line 21
        yield "<!-- answer_row -->
<li id='javatbd";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 22, $this->source);
        yield "' class='question-item answer-item checkbox-item mb-1 ";
        yield $this->sandbox->ensureToStringAllowed(($context["relevanceClass"] ?? null), 22, $this->source);
        yield "'>
    <div class=\"row\">
        <div class=\"col-auto\">
            <input
                type=\"checkbox\"
                name=\"";
        // line 27
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 27, $this->source);
        yield "\"
                id=\"answer";
        // line 28
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 28, $this->source);
        yield "\"
                ";
        // line 29
        yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 29, $this->source);
        yield "
                value=\"Y\"
            />
            <label for=\"answer";
        // line 32
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 32, $this->source);
        yield "\" class=\"checkbox-label control-label\">";
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["question"] ?? null), 32, $this->source));
        yield "</label>
            <input
                type=\"hidden\"
                name=\"java";
        // line 35
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 35, $this->source);
        yield "\"
                id=\"java";
        // line 36
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 36, $this->source);
        yield "\"
                value=\"";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 37), "encode", [($context["sValue"] ?? null)], "method", false, false, true, 37), 37, $this->source);
        yield "\"
            />
        </div>
    </div>
</li>
<!-- end of answer_row -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./survey/questions/answer/multiplechoice/rows/answer_row.twig";
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
        return array (  83 => 37,  79 => 36,  75 => 35,  67 => 32,  61 => 29,  57 => 28,  53 => 27,  43 => 22,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./survey/questions/answer/multiplechoice/rows/answer_row.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\multiplechoice\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("processString" => 32);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['processString'],
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
