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

/* /survey/questions/answer/arrays/dualscale/content_header.twig */
class __TwigTemplate_76d5be1de357f6c07ad1065078e0944c extends Template
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
        // line 11
        yield "<td></td>
";
        // line 12
        if (((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != ""))) {
            // line 13
            yield "    <td class=\"d-none\"></td>
";
        }
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["labelans0"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["ld"]) {
            // line 16
            yield "    <th class='answer-text'";
            if ( !($context["repeat"] ?? null)) {
                yield " id=\"answer";
                yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 16, $this->source);
                yield "_0-";
                yield $this->sandbox->ensureToStringAllowed($context["code"], 16, $this->source);
                yield "\" role=\"columnheader\" ";
            }
            yield ">";
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($context["ld"], 16, $this->source));
            yield "</th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["labelans1"] ?? null)) > 0)) {
            // line 19
            yield "    <td class=\"header_separator\">
        ";
            // line 20
            if (($context["shownoanswer"] ?? null)) {
                // line 21
                yield "            <div class=\"ls-js-hidden\">";
                yield gT("No answer");
                yield "</div>
        ";
            }
            // line 22
            yield "</td>  <!-- Separator : and No answer for accessibility for first colgroup -->
    ";
            // line 23
            if (((($context["leftheader"] ?? null) != "") || (($context["rightheader"] ?? null) != ""))) {
                // line 24
                yield "        <td class=\"d-none\"></td>
    ";
            }
            // line 26
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["labelans1"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["ld"]) {
                // line 27
                yield "        <th class='answer-text'";
                if ( !($context["repeat"] ?? null)) {
                    yield " id=\"answer";
                    yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 27, $this->source);
                    yield "_1-";
                    yield $this->sandbox->ensureToStringAllowed($context["code"], 27, $this->source);
                    yield "\" role=\"columnheader\" ";
                }
                yield ">";
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($context["ld"], 27, $this->source));
                yield "</th>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['ld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 30
        if ((($context["shownoanswer"] ?? null) || ($context["rightexists"] ?? null))) {
            // line 31
            yield "    <td class=\"header_separator rigth_separator\"></td>
";
        }
        // line 33
        if (($context["shownoanswer"] ?? null)) {
            // line 34
            yield "    <th class=\"answer-text noanswer-text\"";
            if ( !($context["repeat"] ?? null)) {
                yield " id=\"answer";
                yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 34, $this->source);
                yield "-\" role=\"columnheader\" ";
            }
            yield ">";
            yield gT("No answer");
            yield "</th>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/dualscale/content_header.twig";
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
        return array (  123 => 34,  121 => 33,  117 => 31,  115 => 30,  97 => 27,  92 => 26,  88 => 24,  86 => 23,  83 => 22,  77 => 21,  75 => 20,  72 => 19,  70 => 18,  53 => 16,  49 => 15,  45 => 13,  43 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/dualscale/content_header.twig", "C:\\wamp64\\www\\limemis\\Lime_MIS\\application\\views\\survey\\questions\\answer\\arrays\\dualscale\\content_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 15);
        static $filters = array("length" => 18);
        static $functions = array("processString" => 16, "gT" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length'],
                ['processString', 'gT'],
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
