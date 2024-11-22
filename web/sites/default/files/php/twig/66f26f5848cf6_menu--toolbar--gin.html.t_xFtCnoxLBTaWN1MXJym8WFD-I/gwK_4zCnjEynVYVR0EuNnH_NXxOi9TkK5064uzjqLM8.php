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

/* themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig */
class __TwigTemplate_7b1ccf41f58ce503bd62047b00589ba2 extends Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, false, ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null)], 29, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_name", "icon_default", "icon_path", "toolbar_variant", "menu_level", "loop", "parent"]);        return; yield '';
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__parent__ = null, $__menu_name__ = null, $__icon_default__ = null, $__icon_path__ = null, $__toolbar_variant__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "parent" => $__parent__,
            "menu_name" => $__menu_name__,
            "icon_default" => $__icon_default__,
            "icon_path" => $__icon_path__,
            "toolbar_variant" => $__toolbar_variant__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "  ";
            $macros["menus"] = $this;
            // line 33
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 34
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar-menu"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 37
                    yield "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 39
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    yield "      ";
                    // line 41
                    $context["classes"] = ["menu-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 43
$context["item"], "is_expanded", [], "any", false, false, true, 43)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["item"], "is_collapsed", [], "any", false, false, true, 44)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 45
$context["item"], "in_active_trail", [], "any", false, false, true, 45)) ? ("menu-item--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 46
$context["item"], "gin_id", [], "any", false, false, true, 46)) ? (("menu-item__" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 46), 46, $this->source))) : (""))];
                    // line 49
                    yield "
      ";
                    // line 51
                    yield "      ";
                    if (((((($context["menu_level"] ?? null) == 0) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) == 1)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 51))) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 51) != "admin_toolbar_tools-help"))) {
                        // line 52
                        yield "        <li class=\"menu-item menu-item--expanded menu-item__tools\">
          ";
                        // line 53
                        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
                            // line 54
                            yield "            <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                            yield "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
              <img src=\"";
                            // line 55
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 55, $this->source)), "html", null, true);
                            yield "\" class=\"toolbar-icon-home\" alt=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                            yield "\" />
            </a>
          ";
                        } else {
                            // line 58
                            yield "            <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                            yield "\" class=\"toolbar-icon toolbar-icon-admin-toolbar-tools-help toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
              ";
                            // line 59
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                            yield "
            </a>
          ";
                        }
                        // line 62
                        yield "        </li>
      ";
                    }
                    // line 64
                    yield "
      ";
                    // line 68
                    yield "
      ";
                    // line 70
                    yield "      ";
                    if (((($context["menu_level"] ?? null) == 1) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 70) == 1))) {
                        // line 71
                        yield "        <li class=\"menu-item-title\">
          <h2 class=\"toolbar-menu__title\">
            <a href=\"";
                        // line 73
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        yield "</a>
          </h2>
        </li>
        ";
                        // line 76
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 77
                            yield "          <li class=\"menu-item\">
            <a href=\"";
                            // line 78
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                            yield "\" class=\"toolbar-icon\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Overview"));
                            yield "</a>
          </li>
        ";
                        }
                        // line 81
                        yield "      ";
                    } elseif (((($context["menu_level"] ?? null) > 1) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 81) == 1))) {
                        // line 82
                        yield "        <li class=\"menu-item-title\">
          <h3 class=\"toolbar-menu__sub-title\">
            <a href=\"";
                        // line 84
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        yield "</a>
          </h3>
        </li>
        ";
                        // line 87
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 88
                            yield "          <li class=\"menu-item\">
            <a href=\"";
                            // line 89
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                            yield "\" class=\"toolbar-icon\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Overview"));
                            yield "</a>
          </li>
        ";
                        }
                        // line 92
                        yield "      ";
                    }
                    // line 93
                    yield "
      <li";
                    // line 94
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 94), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
                    yield ">
        ";
                    // line 95
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 95) == "admin_toolbar_tools-help") && (($context["icon_default"] ?? null) == false)) && (($context["icon_path"] ?? null) != ""))) {
                        // line 96
                        yield "          <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                        yield "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
                        // line 97
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 97, $this->source)), "html", null, true);
                        yield "\" class=\"toolbar-icon-home\" alt=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                        yield "\" />
          </a>
        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 99
$context["item"], "gin_id", [], "any", false, false, true, 99) == "admin_toolbar_tools-help")) {
                        // line 100
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink("Drupal", $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 100), 100, $this->source), ["class" => ["toolbar-icon-default"]]), "html", null, true);
                        yield "
        ";
                    } else {
                        // line 102
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 102), 102, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 102), 102, $this->source), ["class" => [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 102)) ? ("is-active") : (""))]]), "html", null, true);
                        yield "
        ";
                    }
                    // line 104
                    yield "        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 104)) {
                        // line 105
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 105), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), $context["item"], ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null)], 105, $context, $this->getSourceContext()));
                        yield "
        ";
                    }
                    // line 107
                    yield "      </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                yield "    </ul>
  ";
            }
            // line 111
            yield "
  ";
            // line 112
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 113
                yield "    ";
                // line 114
                yield "    <a href=\"#\" class=\"toolbar-menu__trigger trigger\" role=\"button\" aria-pressed=\"false\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
                yield "</a>
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
        return "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig";
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
        return array (  292 => 114,  290 => 113,  288 => 112,  285 => 111,  281 => 109,  266 => 107,  260 => 105,  257 => 104,  251 => 102,  245 => 100,  243 => 99,  236 => 97,  231 => 96,  229 => 95,  225 => 94,  222 => 93,  219 => 92,  211 => 89,  208 => 88,  206 => 87,  198 => 84,  194 => 82,  191 => 81,  183 => 78,  180 => 77,  178 => 76,  170 => 73,  166 => 71,  163 => 70,  160 => 68,  157 => 64,  153 => 62,  147 => 59,  142 => 58,  134 => 55,  129 => 54,  127 => 53,  124 => 52,  121 => 51,  118 => 49,  116 => 46,  115 => 45,  114 => 44,  113 => 43,  112 => 41,  110 => 40,  92 => 39,  88 => 37,  82 => 35,  79 => 34,  76 => 33,  73 => 32,  54 => 31,  45 => 29,  42 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig", "/var/www/html/web/themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 41);
        static $filters = array("escape" => 35, "t" => 55);
        static $functions = array("path" => 54, "file_url" => 55, "link" => 100);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 't'],
                ['path', 'file_url', 'link'],
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
