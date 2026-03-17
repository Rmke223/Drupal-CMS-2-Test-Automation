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
use Twig\TemplateWrapper;

/* uk_components:apple-nav-link */
class __TwigTemplate_3914f01bf64a80c10cfbc6821c00d788 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.uk_components--apple-nav-link"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "uk_components:apple-nav-link"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "uk_components:apple-nav-link"));
        // line 2
        $context["nav_display"] = ((array_key_exists("display", $context)) ? (Twig\Extension\CoreExtension::default(($context["display"] ?? null), "text")) : ("text"));
        // line 3
        $context["nav_icon"] = ((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon"] ?? null), "none")) : ("none"));
        // line 4
        yield "
<li class=\"apple-global-nav__item\">
  <a href=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" class=\"apple-global-nav__link\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 7
        if (((($context["nav_display"] ?? null) == "icon") && (($context["nav_icon"] ?? null) != "none"))) {
            // line 8
            yield "      <span class=\"apple-global-nav__icon\" aria-hidden=\"true\">
        ";
            // line 9
            if ((($context["nav_icon"] ?? null) == "search")) {
                // line 10
                yield "          <svg viewBox=\"0 0 15 15\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M10.67 9.61l3.42 3.42a.75.75 0 1 1-1.06 1.06l-3.42-3.42a5.5 5.5 0 1 1 1.06-1.06zM6.5 10.5a4 4 0 1 0 0-8 4 4 0 0 0 0 8z\"/></svg>
        ";
            } elseif ((            // line 11
($context["nav_icon"] ?? null) == "bag")) {
                // line 12
                yield "          <svg viewBox=\"0 0 17 17\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M12.6 6.1h-1a3.1 3.1 0 0 0-6.2 0h-1A2.1 2.1 0 0 0 2.3 8.2v5.7A2.1 2.1 0 0 0 4.4 16h8.2a2.1 2.1 0 0 0 2.1-2.1V8.2A2.1 2.1 0 0 0 12.6 6.1zm-4.1-2a2 2 0 0 1 2 2h-4a2 2 0 0 1 2-2zm4.4 9.8a1 1 0 0 1-1 1H4.1a1 1 0 0 1-1-1V8.2a1 1 0 0 1 1-1h7.8a1 1 0 0 1 1 1z\"/></svg>
        ";
            }
            // line 14
            yield "      </span>
      <span class=\"apple-global-nav__label apple-global-nav__label--visually-hidden\">";
            // line 15
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                }
            }
            yield "</span>
    ";
        } else {
            // line 17
            yield "      <span class=\"apple-global-nav__label\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                }
            }
            yield "</span>
    ";
        }
        // line 19
        yield "  </a>
</li>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["display", "icon", "url", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "uk_components:apple-nav-link";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  120 => 19,  100 => 17,  81 => 15,  78 => 14,  74 => 12,  72 => 11,  69 => 10,  67 => 9,  64 => 8,  62 => 7,  56 => 6,  52 => 4,  50 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "uk_components:apple-nav-link", "modules/custom/uk_components/components/apple-nav-link/apple-nav-link.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 7];
        static $filters = ["default" => 2, "escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape'],
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
