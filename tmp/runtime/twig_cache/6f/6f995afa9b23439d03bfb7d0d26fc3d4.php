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

/* /survey/questions/answer/arrays/array/no_dropdown/answer.twig */
class __TwigTemplate_7486aae7ca76469010a96dcfaf6c384d extends Template
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
        // line 14
        yield "<!-- Array -->

<!-- answer -->
<div class=\"ls-table-wrapper\" role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 17, $this->source);
        yield "\">
    <table class=\"";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 18, $this->source);
        yield " table table-bordered table-hover table-array-radio\" >
        <colgroup class=\"col-responses\">
            <col class=\"col-answers\"  style='width: ";
        // line 20
        yield $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 20, $this->source);
        yield "%;' />
            ";
        // line 22
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aColumns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 23
            yield "                <col class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["aColumn"], "class", [], "any", false, false, true, 23), 23, $this->source);
            yield "\" style='width: ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["aColumn"], "cellwidth", [], "any", false, false, true, 23), 23, $this->source);
            yield "%'/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "        </colgroup>
        <thead>
            <tr class=\"ls-heading ls-header\">
                ";
        // line 28
        yield $this->sandbox->ensureToStringAllowed(($context["sHeaders"] ?? null), 28, $this->source);
        yield "
            </tr>
        </thead>
        <tbody>
             ";
        // line 32
        if ((($context["anscount"] ?? null) == 0)) {
            // line 33
            yield "                <tr>
                    <th class=\"answertext\">
                         ";
            // line 35
            yield gT("Error: This question has no answers.");
            yield "
                    </th>
                </tr>
             ";
        }
        // line 39
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aRows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 40
            yield "                    ";
            yield from             $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, $context["aRow"], "template", [], "any", false, false, true, 40), "/survey/questions/answer/arrays/array/no_dropdown/answer.twig", 40)->unwrap()->yield(CoreExtension::merge($context, CoreExtension::getAttribute($this->env, $this->source, $context["aRow"], "content", [], "any", false, false, true, 40)));
            // line 41
            yield "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </tbody>
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
        return "/survey/questions/answer/arrays/array/no_dropdown/answer.twig";
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
        return array (  134 => 42,  120 => 41,  117 => 40,  99 => 39,  92 => 35,  88 => 33,  86 => 32,  79 => 28,  74 => 25,  63 => 23,  58 => 22,  54 => 20,  49 => 18,  45 => 17,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/array/no_dropdown/answer.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\array\\no_dropdown\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22, "if" => 32, "include" => 40);
        static $filters = array();
        static $functions = array("gT" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'include'],
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
