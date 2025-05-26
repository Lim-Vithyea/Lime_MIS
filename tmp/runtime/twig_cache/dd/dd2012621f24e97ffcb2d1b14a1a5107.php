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

/* /survey/questions/answer/multiplechoice/answer.twig */
class __TwigTemplate_ad791d3414a530624dba51f776c3cb41 extends Template
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
        yield "<!-- Multiple Choice -->

<!-- answer -->

<input type=\"hidden\" name=\"MULTI";
        // line 16
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 16, $this->source);
        yield "\" value=\"";
        yield $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null), 16, $this->source);
        yield "\" />
<div class=\"";
        // line 17
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 17, $this->source);
        yield " row\" role=\"group\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 17, $this->source);
        yield "\">
    <ul class=\"list-unstyled col-12 col-md-";
        // line 18
        yield $this->sandbox->ensureToStringAllowed(($context["iColumnWidth"] ?? null), 18, $this->source);
        yield "\">
        ";
        // line 19
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
            // line 20
            yield "            ";
            if (((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20) % ($context["iMaxRowsByColumn"] ?? null)) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20) != 0))) {
                // line 21
                yield "                </ul>
                <ul class=\"list-unstyled col-12 col-md-";
                // line 22
                yield $this->sandbox->ensureToStringAllowed(($context["iColumnWidth"] ?? null), 22, $this->source);
                yield "\">
            ";
            }
            // line 24
            yield "
            ";
            // line 25
            $context["rowTemplate"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aRow"], "other", [], "any", false, false, true, 25)) ? ("./survey/questions/answer/multiplechoice/rows/answer_row_other.twig") : ("./survey/questions/answer/multiplechoice/rows/answer_row.twig"));
            // line 26
            yield "            <!-- Row ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 26), 26, $this->source);
            yield " -->
            ";
            // line 27
            yield from             $this->loadTemplate(($context["rowTemplate"] ?? null), "/survey/questions/answer/multiplechoice/answer.twig", 27)->unwrap()->yield(CoreExtension::merge($context, $context["aRow"]));
            // line 28
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    </ul>
<!-- end of answer -->
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/multiplechoice/answer.twig";
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
        return array (  117 => 30,  102 => 28,  100 => 27,  95 => 26,  93 => 25,  90 => 24,  85 => 22,  82 => 21,  79 => 20,  62 => 19,  58 => 18,  52 => 17,  46 => 16,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/multiplechoice/answer.twig", "C:\\wamp64\\www\\limesurvey\\application\\views\\survey\\questions\\answer\\multiplechoice\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 19, "if" => 20, "set" => 25, "include" => 27);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
                [],
                [],
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
