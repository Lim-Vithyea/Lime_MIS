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

/* /survey/questions/answer/shortfreetext/text/item.twig */
class __TwigTemplate_3b259b6a711c03be5d06f38c2a35fecf extends Template
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
<!-- answer -->
";
        // line 19
        if (($context["withColumn"] ?? null)) {
            // line 20
            yield "<div class='";
            yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 20, $this->source);
            yield " row'>
    <div class=\"";
            // line 21
            yield $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 21, $this->source);
            yield "\">
";
        } else {
            // line 23
            yield "<div class='";
            yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 23, $this->source);
            yield " ";
            yield $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 23, $this->source);
            yield "'>
";
        }
        // line 25
        yield "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 26
            yield "        <div class=\"ls-input-group\">
    ";
        }
        // line 28
        yield "        <!-- Prefix -->
        ";
        // line 29
        if ((($context["prefix"] ?? null) != "")) {
            // line 30
            yield "            <div class='ls-input-group-extra prefix-text prefix'>";
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 30, $this->source));
            yield "</div>
        ";
        }
        // line 32
        yield "
        <!-- Input -->
        <input
            class=\"form-control ";
        // line 35
        yield $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 35, $this->source);
        yield "\"
            type=\"text\"
            name=\"";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 37, $this->source);
        yield "\"
            id=\"answer";
        // line 38
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 38, $this->source);
        yield "\"
            value=\"";
        // line 39
        yield $this->sandbox->ensureToStringAllowed(($context["dispVal"] ?? null), 39, $this->source);
        yield "\"
            placeholder=\"";
        // line 40
        yield LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["placeholder"] ?? null), 40, $this->source), 1), 1);
        yield "\"
            ";
        // line 41
        if (($context["inputsize"] ?? null)) {
            yield "size=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null), 41, $this->source);
            yield "\" ";
        }
        // line 42
        yield "            ";
        if (($context["maxlength"] ?? null)) {
            yield "maxlength=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["maxlength"] ?? null), 42, $this->source);
            yield "\" ";
        }
        // line 43
        yield "            ";
        if (($context["numberonly"] ?? null)) {
            yield "data-number=\"1\" ";
        }
        // line 44
        yield "            aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 44, $this->source);
        yield "\"
        />

        <!-- Suffix -->
        ";
        // line 48
        if (($context["suffix"] ?? null)) {
            // line 49
            yield "            <div class='ls-input-group-extra suffix-text suffix'>";
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 49, $this->source));
            yield "</div>
        ";
        }
        // line 51
        yield "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 52
            yield "        </div>
    ";
        }
        // line 54
        if (($context["withColumn"] ?? null)) {
            // line 55
            yield "    </div>
</div>

";
        } else {
            // line 59
            yield "</div>
";
        }
        // line 61
        yield "
<!-- end of answer -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/shortfreetext/text/item.twig";
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
        return array (  161 => 61,  157 => 59,  151 => 55,  149 => 54,  145 => 52,  142 => 51,  136 => 49,  134 => 48,  126 => 44,  121 => 43,  114 => 42,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  87 => 35,  82 => 32,  76 => 30,  74 => 29,  71 => 28,  67 => 26,  64 => 25,  56 => 23,  51 => 21,  46 => 20,  44 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/shortfreetext/text/item.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\shortfreetext\\text\\item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array();
        static $functions = array("processString" => 30, "flatString" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString', 'flatString'],
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
