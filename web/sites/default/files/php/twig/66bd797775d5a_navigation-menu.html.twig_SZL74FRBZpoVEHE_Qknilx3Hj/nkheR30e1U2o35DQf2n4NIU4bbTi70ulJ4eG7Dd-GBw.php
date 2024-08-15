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

/* core/modules/navigation/templates/navigation-menu.html.twig */
class __TwigTemplate_9a09cbea8917b01118ef9e32d7c4edba extends Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "<div class=\"admin-toolbar__item\">
  <h4 class=\"visually-hidden focusable\">";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\">
    ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 5, $context, $this->getSourceContext()));
        yield "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "title", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 9
    public function macro_menu_items($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
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
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                yield "    ";
                $context["item_id"] = \Drupal\Component\Utility\Html::getUniqueId(("navigation-link--" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_link", [], "any", false, false, true, 11), "pluginId", [], "any", false, false, true, 11), 11, $this->source)));
                // line 12
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 13
                    yield "      ";
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 13))) {
                        // line 14
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 14, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item\">
          ";
                        // line 15
                        yield from                         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/navigation-menu.html.twig", 15)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["href" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source,                         // line 16
$context["item"], "url", [], "any", false, false, true, 16)), "data-drupal-tooltip" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 16), "data-drupal-tooltip-class" => "admin-toolbar__tooltip"]), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 17
$context["item"], "class", [], "any", false, false, true, 17)), "html_tag" => "a", "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 19
$context["item"], "title", [], "any", false, false, true, 19), "extra_classes" => "toolbar-button--collapsible"]));
                        // line 22
                        yield "        </li>
      ";
                    } else {
                        // line 24
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 24, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item toolbar-popover\" data-toolbar-popover>
          ";
                        // line 25
                        yield from                         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/navigation-menu.html.twig", 25)->unwrap()->yield(CoreExtension::toArray(["action" => true, "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" =>                         // line 27
($context["item_id"] ?? null), "data-toolbar-popover-control" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 28
$context["item"], "class", [], "any", false, false, true, 28)), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 29
$context["item"], "title", [], "any", false, false, true, 29), "extra_classes" => "toolbar-button--expand--side toolbar-button--collapsible toolbar-popover__control", "has_safe_triangle" => true]));
                        // line 33
                        yield "          <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper inert>
            ";
                        // line 34
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34)) {
                            // line 35
                            yield "              ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 35), 35, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35), 35, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ["toolbar-popover__header", "toolbar-button", "toolbar-button--large", "toolbar-button--dark"]])), "html", null, true);
                            yield "
            ";
                        } else {
                            // line 37
                            yield "              <span class=\"toolbar-popover__header toolbar-button toolbar-button--large toolbar-button--dark toolbar-button--non-interactive\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                            yield "</span>
            ";
                        }
                        // line 39
                        yield "            <ul class=\"toolbar-menu toolbar-popover__menu\">
              ";
                        // line 40
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40), ($context["attributes"] ?? null), 1], 40, $context, $this->getSourceContext()));
                        yield "
            </ul>
          </div>
        </li>
      ";
                    }
                    // line 45
                    yield "
    ";
                } elseif ((                // line 46
($context["menu_level"] ?? null) == 1)) {
                    // line 47
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 47, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 48
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48))) {
                        // line 49
                        yield "          <a
            href=\"";
                        // line 50
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                        yield "\"
            class=\"toolbar-button\"
            data-index-text=\"";
                        // line 52
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source))), "html", null, true);
                        yield "\"
          >";
                        // line 53
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        yield "</a>
        ";
                    } else {
                        // line 55
                        yield "          <button
            class=\"toolbar-button toolbar-button--expand--down\"
            data-toolbar-menu-trigger=\"";
                        // line 57
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 57, $this->source), "html", null, true);
                        yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                        // line 59
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 59), 59, $this->source))), "html", null, true);
                        yield "\"
          >
            <span class=\"toolbar-menu__link-action visually-hidden\">";
                        // line 61
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                        yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                        // line 62
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                        yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                        // line 64
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 65
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 65), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 65, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 68
                    yield "      </li>
    ";
                } else {
                    // line 70
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 70, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 71
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71))) {
                        // line 72
                        yield "          <a
            href=\"";
                        // line 73
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        yield "\"
            class=\"toolbar-menu__link toolbar-menu__link--";
                        // line 74
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 74, $this->source), "html", null, true);
                        yield "\"
            data-index-text=\"";
                        // line 75
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 75), 75, $this->source))), "html", null, true);
                        yield "\"
          >";
                        // line 76
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                        yield "</a>
        ";
                    } else {
                        // line 78
                        yield "          <button
            class=\"toolbar-menu__link toolbar-menu__link--";
                        // line 79
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 79, $this->source), "html", null, true);
                        yield "\"
            data-toolbar-menu-trigger=\"";
                        // line 80
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 80, $this->source), "html", null, true);
                        yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                        // line 82
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 82), 82, $this->source))), "html", null, true);
                        yield "\"
          >
            <span class=\"toolbar-menu__link-action visually-hidden\">";
                        // line 84
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                        yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                        // line 85
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                        // line 87
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 88
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 88), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 88, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 91
                    yield "      </li>
    ";
                }
                // line 93
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/navigation/templates/navigation-menu.html.twig";
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
        return array (  274 => 93,  270 => 91,  264 => 88,  260 => 87,  255 => 85,  251 => 84,  246 => 82,  241 => 80,  237 => 79,  234 => 78,  229 => 76,  225 => 75,  221 => 74,  217 => 73,  214 => 72,  212 => 71,  207 => 70,  203 => 68,  197 => 65,  193 => 64,  188 => 62,  184 => 61,  179 => 59,  174 => 57,  170 => 55,  165 => 53,  161 => 52,  156 => 50,  153 => 49,  151 => 48,  146 => 47,  144 => 46,  141 => 45,  133 => 40,  130 => 39,  124 => 37,  118 => 35,  116 => 34,  113 => 33,  111 => 29,  110 => 28,  109 => 27,  108 => 25,  103 => 24,  99 => 22,  97 => 19,  96 => 17,  95 => 16,  94 => 15,  89 => 14,  86 => 13,  83 => 12,  80 => 11,  75 => 10,  61 => 9,  50 => 5,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/navigation/templates/navigation-menu.html.twig", "/var/www/html/web/core/modules/navigation/templates/navigation-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 9, "for" => 10, "set" => 11, "if" => 12, "include" => 15);
        static $filters = array("escape" => 3, "clean_unique_id" => 11, "render" => 16, "clean_class" => 17, "lower" => 52, "first" => 52, "t" => 61);
        static $functions = array("create_attribute" => 16, "link" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if', 'include'],
                ['escape', 'clean_unique_id', 'render', 'clean_class', 'lower', 'first', 't'],
                ['create_attribute', 'link'],
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
