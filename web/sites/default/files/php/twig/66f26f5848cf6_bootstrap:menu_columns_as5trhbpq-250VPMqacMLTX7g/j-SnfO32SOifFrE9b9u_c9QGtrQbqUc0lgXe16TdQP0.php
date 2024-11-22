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

/* bootstrap:menu_columns */
class __TwigTemplate_9d1d13f00c904b782d7d5494352e5df4 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.bootstrap--menu_columns"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "bootstrap:menu_columns"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "bootstrap:menu_columns"));
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "
";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 7, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 9
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "  ";
            $macros["menus"] = $this;
            // line 11
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 12
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 13
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["nav flex-row"], "method", false, false, true, 13), 13, $this->source), "id"), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 15
                    yield "      <ul class=\"flex-column\">
    ";
                }
                // line 17
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 18
                    yield "      ";
                    // line 19
                    $context["classes"] = ["nav-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 21
$context["item"], "is_expanded", [], "any", false, false, true, 21)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 22
$context["item"], "is_collapsed", [], "any", false, false, true, 22)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 23
$context["item"], "in_active_trail", [], "any", false, false, true, 23)) ? ("active") : (""))];
                    // line 26
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 26), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
                    yield ">
        ";
                    // line 28
                    $context["link_classes"] = ["nav-link", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 30
$context["item"], "in_active_trail", [], "any", false, false, true, 30)) ? ("active") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 31
$context["item"], "url", [], "any", false, false, true, 31), "getOption", ["attributes"], "method", false, false, true, 31), "class", [], "any", false, false, true, 31)) ? (Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 31), "getOption", ["attributes"], "method", false, false, true, 31), "class", [], "any", false, false, true, 31), 31, $this->source), " ")) : ("")), ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 32
$context["item"], "url", [], "any", false, false, true, 32), "toString", [], "method", false, false, true, 32), 32, $this->source)))];
                    // line 35
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 35), 35, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35), 35, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    yield "
        ";
                    // line 36
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 36)) {
                        // line 37
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 37), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 37, $context, $this->getSourceContext()));
                        yield "
        ";
                    }
                    // line 39
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "    </ul>
  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap:menu_columns";
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
        return array (  132 => 41,  125 => 39,  119 => 37,  117 => 36,  112 => 35,  110 => 32,  109 => 31,  108 => 30,  107 => 28,  102 => 26,  100 => 23,  99 => 22,  98 => 21,  97 => 19,  95 => 18,  90 => 17,  86 => 15,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  57 => 9,  48 => 7,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap:menu_columns", "themes/contrib/bootstrap/components/menu_columns/menu_columns.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 9, "if" => 11, "for" => 17, "set" => 19);
        static $filters = array("escape" => 13, "without" => 13, "join" => 31, "clean_class" => 32);
        static $functions = array("link" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'without', 'join', 'clean_class'],
                ['link'],
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
