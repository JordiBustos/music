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

/* themes/music/templates/view/views-view-table--pieces.html.twig */
class __TwigTemplate_5c703ce40733346dc24a9feb3f28c557 extends Template
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
        yield "
";
        // line 36
        $context["classes"] = [("cols-" . Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(        // line 37
($context["header"] ?? null), 37, $this->source))), ((        // line 38
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 39
($context["sticky"] ?? null)) ? ("sticky-enabled sticky-header") : ("")), "w-full"];
        // line 43
        yield "<table";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        yield ">
  ";
        // line 44
        if (($context["caption_needed"] ?? null)) {
            // line 45
            yield "    <caption>
    ";
            // line 46
            if (($context["caption"] ?? null)) {
                // line 47
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 47, $this->source), "html", null, true);
                yield "
    ";
            } else {
                // line 49
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 49, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 51
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["summary_element"] ?? null))) {
                // line 52
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_element"] ?? null), 52, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 54
            yield "    </caption>
  ";
        }
        // line 56
        yield "  ";
        if (($context["header"] ?? null)) {
            // line 57
            yield "    <thead>
      <tr>
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 60
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 60)) {
                    // line 61
                    yield "            ";
                    // line 62
                    $context["column_classes"] = ["views-field", ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 64
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 64, $this->source)), "text-left p-2 font-light cursor-s-resize"];
                    // line 68
                    yield "          ";
                }
                // line 69
                yield "          <th";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 69), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 69), "setAttribute", ["scope", "col"], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                yield ">";
                // line 70
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 70)) {
                    // line 71
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    yield ">";
                    // line 72
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 72)) {
                        // line 73
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        yield "\" rel=\"nofollow\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 75
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    }
                    // line 77
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 79
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 79)) {
                        // line 80
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        yield "\" rel=\"nofollow\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 82
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    }
                }
                // line 85
                yield "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "      </tr>
    </thead>
  ";
        }
        // line 90
        yield "  <tbody>
    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 92
            yield "      <tr class=\"border-t border-gray-700 font-semibold hover:bg-zinc-100\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            yield ">
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 93));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 94
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 94)) {
                    // line 95
                    yield "            ";
                    // line 96
                    $context["column_classes"] = ["views-field", "p-2"];
                    // line 101
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 102
                        yield "              ";
                        $context["column_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 102, $this->source), [("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 102, $this->source))]);
                        // line 103
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    yield "          ";
                }
                // line 105
                yield "          <td";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 105), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 105), 105, $this->source), "html", null, true);
                yield ">";
                // line 106
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 106)) {
                    // line 107
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                    yield ">
              ";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 108));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 109
                        yield "                ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                        yield "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    yield "              </";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 113));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 114
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 117
                yield "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "responsive", "sticky", "attributes", "caption_needed", "caption", "title", "summary_element", "fields", "rows"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/music/templates/view/views-view-table--pieces.html.twig";
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
        return array (  263 => 121,  256 => 119,  249 => 117,  241 => 114,  237 => 113,  232 => 111,  222 => 109,  218 => 108,  213 => 107,  211 => 106,  207 => 105,  204 => 104,  198 => 103,  195 => 102,  190 => 101,  188 => 96,  186 => 95,  183 => 94,  179 => 93,  174 => 92,  170 => 91,  167 => 90,  162 => 87,  155 => 85,  150 => 82,  140 => 80,  138 => 79,  133 => 77,  129 => 75,  119 => 73,  117 => 72,  113 => 71,  111 => 70,  107 => 69,  104 => 68,  102 => 64,  101 => 62,  99 => 61,  96 => 60,  92 => 59,  88 => 57,  85 => 56,  81 => 54,  75 => 52,  72 => 51,  66 => 49,  60 => 47,  58 => 46,  55 => 45,  53 => 44,  48 => 43,  46 => 39,  45 => 38,  44 => 37,  43 => 36,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/music/templates/view/views-view-table--pieces.html.twig", "/var/www/html/web/themes/music/templates/view/views-view-table--pieces.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 44, "for" => 59);
        static $filters = array("length" => 37, "escape" => 43, "merge" => 102);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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
