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

/* mercury:button */
class __TwigTemplate_4aca5fe5c651b33b88f005dbf5080f17 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:button"));
        $context["size_classes_map"] = ["small" => "hg:gap-1 hg:px-4 hg:py-[6px] hg:text-sm hg:rounded-md", "medium" => "hg:gap-2 hg:px-5 hg:py-[10px] hg:text-base hg:rounded-lg", "large" => "hg:gap-3 hg:px-6 hg:py-3 hg:text-lg hg:rounded-xl hg:leading-[22px]!"];
        // line 6
        yield "
";
        // line 7
        $context["icon_size_map"] = ["small" => "hg:text-sm", "medium" => "hg:text-base", "large" => "hg:text-xl"];
        // line 12
        yield "
";
        // line 13
        $context["btn_classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((        // line 14
array_key_exists("btn_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["btn_classes"] ?? null), [])) : ([])), ["button", ("button--" . ((        // line 19
array_key_exists("variant", $context)) ? (Twig\Extension\CoreExtension::default(($context["variant"] ?? null), "primary")) : ("primary"))), "hg:no-underline", "hg:hover:no-underline", "hg:cursor-pointer", "hg:border", "hg:flex", "hg:items-center", "hg:justify-center", (((($tmp =         // line 27
($context["mobile_width"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hg:w-full hg:sm:size-fit") : ("hg:size-fit")), (((($tmp =         // line 28
($context["icon_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hg:flex-row") : ("hg:flex-row-reverse")), (($_v0 =         // line 29
($context["size_classes_map"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "medium")) : ("medium"))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["size_classes_map"] ?? null), ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "medium")) : ("medium")), [], "array", false, false, true, 29))]),         // line 32
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 34
        yield "
";
        // line 35
        $context["icon_size"] = (($_v1 = ($context["icon_size_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "medium")) : ("medium"))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icon_size_map"] ?? null), ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "medium")) : ("medium")), [], "array", false, false, true, 35));
        // line 36
        yield "
";
        // line 38
        $context["disabled_attr"] = (((($tmp = ((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["disabled"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("aria-disabled=\"true\"") : (""));
        // line 39
        $context["button_disabled_attr"] = (((($tmp = ((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["disabled"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        // line 40
        yield "
";
        // line 41
        if ((($tmp = ($context["href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["btn_classes"] ?? null), " "), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["disabled_attr"] ?? null), "html", null, true);
            yield ">
    ";
            // line 43
            if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold"]));
            }
            // line 51
            yield "    ";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                }
            }
            yield "
  </a>
";
        } else {
            // line 54
            yield "  <button class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["btn_classes"] ?? null), " "), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_disabled_attr"] ?? null), "html", null, true);
            yield ">
    ";
            // line 55
            if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold"]));
            }
            // line 63
            yield "    ";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                }
            }
            yield "
  </button>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["variant", "mobile_width", "icon_first", "size", "v", "disabled", "href", "icon", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:button";
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
        return array (  127 => 63,  123 => 55,  116 => 54,  95 => 51,  91 => 43,  82 => 42,  80 => 41,  77 => 40,  75 => 39,  73 => 38,  70 => 36,  68 => 35,  65 => 34,  63 => 32,  62 => 29,  61 => 28,  60 => 27,  59 => 19,  58 => 14,  57 => 13,  54 => 12,  52 => 7,  49 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:button", "themes/contrib/mercury/components/button/button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 41];
        static $filters = ["filter" => 32, "merge" => 16, "default" => 15, "escape" => 42, "join" => 42];
        static $functions = ["include" => 44];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['filter', 'merge', 'default', 'escape', 'join'],
                ['include'],
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
