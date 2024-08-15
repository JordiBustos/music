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

/* core/themes/stable9/templates/layout/page.html.twig */
class __TwigTemplate_1215067f67034be1e0af96de92946efe extends Template
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
        // line 46
        yield "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        yield "
  </header>

  ";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        yield "
  ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        yield "

  ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        yield "

  ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        yield "

  ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        yield "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 63
        yield "
    <div class=\"layout-content\">
      ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        yield "
    </div>";
        // line 67
        yield "
    ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 68)) {
            // line 69
            yield "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 73
        yield "
    ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 74)) {
            // line 75
            yield "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 79
        yield "
  </main>

  ";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 82)) {
            // line 83
            yield "    <footer role=\"contentinfo\">
      ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            yield "
    </footer>
  ";
        }
        // line 87
        yield "
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/stable9/templates/layout/page.html.twig";
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
        return array (  128 => 87,  122 => 84,  119 => 83,  117 => 82,  112 => 79,  106 => 76,  103 => 75,  101 => 74,  98 => 73,  92 => 70,  89 => 69,  87 => 68,  84 => 67,  80 => 65,  76 => 63,  70 => 59,  65 => 57,  60 => 55,  55 => 53,  51 => 52,  45 => 49,  40 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable9/templates/layout/page.html.twig", "/var/www/html/web/core/themes/stable9/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 68);
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
