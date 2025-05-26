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

/* ./subviews/navigation/question_index_groups_buttons.twig */
class __TwigTemplate_133e0ced4957a3acebc3b57258b2d706 extends Template
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
        // line 6
        yield "<div class=\"list-group index-button-full\">
  <div class=\"list-group-item\">
      <div class=\"h4 list-group-item-heading\">";
        // line 8
        yield gT("Question index");
        yield "</div>
  </div>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 10), "items", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
            // line 11
            yield "    ";
            $context["templateClass"] = "";
            // line 12
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 12), "index-item-unanswered", [], "any", true, true, true, 12) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 12), "index-item-unanswered", [], "any", false, false, true, 12) == true))) {
                // line 13
                yield "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null), 13, $this->source) . " list-group-item-warning");
                // line 14
                yield "    ";
            }
            // line 15
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 15), "index-item-error", [], "any", true, true, true, 15) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 15), "index-item-error", [], "any", false, false, true, 15) == true))) {
                // line 16
                yield "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null), 16, $this->source) . " list-group-item-danger");
                // line 17
                yield "    ";
            }
            // line 18
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 18), "index-item-current", [], "any", true, true, true, 18) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 18), "index-item-current", [], "any", false, false, true, 18) == true))) {
                // line 19
                yield "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 19, $this->source) . " disabled");
                // line 20
                yield "    ";
            }
            // line 21
            yield "    <button type=\"submit\" name=\"move\" value=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "step", [], "any", false, false, true, 21), 21, $this->source);
            yield "\" class=\"list-group-item ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 21), 21, $this->source);
            yield " ";
            yield $this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null), 21, $this->source);
            yield "\" >";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 21), 21, $this->source);
            yield "</button>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_groups_buttons.twig";
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
        return array (  98 => 23,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  49 => 10,  44 => 8,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_groups_buttons.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_groups_buttons.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10, "set" => 11, "if" => 12);
        static $filters = array();
        static $functions = array("gT" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
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
