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

/* core/modules/navigation/templates/top-bar-local-tasks.html.twig */
class __TwigTemplate_9888dce409b396f4d883b31d67c3d6be extends Template
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
        // line 10
        $context["dropdown_id"] = \Drupal\Component\Utility\Html::getUniqueId("admin-local-tasks");
        // line 11
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/top-bar-local-tasks.html.twig", 11)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" =>         // line 15
($context["dropdown_id"] ?? null), "data-drupal-dropdown" => "true"]), "text" => t("More actions"), "extra_classes" => "toolbar-button--expand--down toolbar-button--weight--400 toolbar-button--tertiary--expanded toolbar-button--actions"]));
        // line 22
        yield "<div class=\"toolbar-dropdown__menu\" id=";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dropdown_id"] ?? null), 22, $this->source), "html", null, true);
        yield ">
  <ul class=\"toolbar-dropdown__list\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["local_tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["local_task"]) {
            // line 25
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["local_task"], 25, $this->source), "html", null, true);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local_task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "  </ul>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["local_tasks"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/navigation/templates/top-bar-local-tasks.html.twig";
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
        return array (  64 => 27,  55 => 25,  51 => 24,  45 => 22,  43 => 15,  42 => 11,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/navigation/templates/top-bar-local-tasks.html.twig", "/var/www/html/web/core/modules/navigation/templates/top-bar-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "include" => 11, "for" => 24);
        static $filters = array("clean_unique_id" => 10, "t" => 19, "escape" => 22);
        static $functions = array("create_attribute" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'for'],
                ['clean_unique_id', 't', 'escape'],
                ['create_attribute'],
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
