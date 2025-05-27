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

/* /survey/questions/answer/listradio/rows/answer_row.twig */
class __TwigTemplate_2212258e8b5408279de22a9461dd613d extends Template
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
        // line 12
        yield "
<!-- answer_row -->
<li id='javatbd";
        // line 14
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 14, $this->source);
        yield "' class='answer-item radio-item' ";
        yield $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 14, $this->source);
        yield " >
    <input
        type=\"radio\"
        value=\"";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 17, $this->source);
        yield "\"
        name=\"";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 18, $this->source);
        yield "\"
        id=\"answer";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 19, $this->source);
        yield "\"
        ";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 20, $this->source);
        yield "
        onclick=\"if (document.getElementById('answer";
        // line 21
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        yield "othertext') != null) document.getElementById('answer";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        yield "othertext').value='';checkconditions(this.value, this.name, this.type)\"
     />
    <label for=\"answer";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 23, $this->source);
        yield $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 23, $this->source);
        yield "\" class=\"control-label radio-label\">
        ";
        // line 24
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null), 24, $this->source));
        yield "
    </label>
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
        return "/survey/questions/answer/listradio/rows/answer_row.twig";
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
        return array (  81 => 24,  76 => 23,  69 => 21,  65 => 20,  60 => 19,  56 => 18,  52 => 17,  44 => 14,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row.twig", "C:\\wamp64\\www\\limemis\\Lime_MIS\\application\\views\\survey\\questions\\answer\\listradio\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("processString" => 24);

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
