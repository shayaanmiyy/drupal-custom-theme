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

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_2823b52d09085434d63e17fc854ff5b8 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        yield ">
  <nav";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        yield ">
    <h2 class=\"visually-hidden\">";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 27, $this->source), "html", null, true);
        yield "</h2>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 29
            yield "      ";
            $context["tray"] = (($__internal_compile_0 = ($context["trays"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null);
            // line 30
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 30), "addClass", ["toolbar-tab"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            yield ">
        ";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            yield "
        ";
            // line 32
            $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 33
                yield "          <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                yield ">
            ";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 34)) {
                    // line 35
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    yield "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 36
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    yield "</h3>
            ";
                } else {
                    // line 38
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 40
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                yield "
            </nav>
          </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
            // line 44
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "  </nav>
  ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 47, $this->source), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "toolbar_attributes", "toolbar_heading", "tabs", "trays", "remainder"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
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
        return array (  113 => 47,  110 => 46,  103 => 44,  101 => 32,  92 => 40,  88 => 38,  83 => 36,  78 => 35,  76 => 34,  71 => 33,  69 => 32,  65 => 31,  60 => 30,  57 => 29,  53 => 28,  49 => 27,  45 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/toolbar/templates/toolbar.html.twig", "/var/www/html/web/core/modules/toolbar/templates/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 28, "set" => 29, "apply" => 32, "if" => 34);
        static $filters = array("escape" => 25, "spaceless" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'apply', 'if'],
                ['escape', 'spaceless'],
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
