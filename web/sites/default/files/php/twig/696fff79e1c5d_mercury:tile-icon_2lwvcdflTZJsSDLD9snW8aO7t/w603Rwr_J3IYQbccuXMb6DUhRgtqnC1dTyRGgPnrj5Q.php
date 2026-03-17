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

/* mercury:tile-icon */
class __TwigTemplate_68b6f76b1ae5ee1f04ea1c5ee156b9f2 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--tile-icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:tile-icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:tile-icon"));
        $context["class_map"] = ["icon_align" => ["left" => "hg:justify-start", "right" => "hg:justify-end", "center" => "hg:justify-center"], "icon_size" => ["small" => "hg:text-2xl", "medium" => "hg:text-4xl", "large" => "hg:text-6xl"], "text_align" => ["left" => "hg:text-start", "center" => "hg:text-center", "right" => "hg:text-end"], "tile_size" => ["square" => "hg:aspect-square", "4:3" => "hg:aspect-4/3", "16:9" => "hg:aspect-16/9"], "border_radius" => ["small" => "hg:rounded-sm", "large" => "hg:rounded-xl hg:md:rounded-2xl", "extra-large" => "hg:rounded-[24px] hg:md:rounded-[32px]"]];
        // line 28
        $context["tile_classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((        // line 29
array_key_exists("tile_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["tile_classes"] ?? null), [])) : ([])), ["icon-tile", "hg:relative", (((($tmp =         // line 35
($context["border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hg:border hg:p-6") : ("")), (((($tmp =         // line 36
($context["url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-link hg:transition-all hg:duration-300") : ("")), (((($tmp =         // line 37
($context["background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-bg hg:p-6") : ("")), (((($tmp =         // line 38
($context["tile_size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = (($_v1 = ($context["class_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["tile_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "tile_size", [], "array", false, false, true, 38))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["tile_size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["class_map"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["tile_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "tile_size", [], "array", false, false, true, 38)), ($context["tile_size"] ?? null), [], "array", false, false, true, 38))) : ("hg:aspect-none")), (((($tmp =         // line 39
($context["border_radius"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v3 = (($_v4 = ($context["class_map"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["border_radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "border_radius", [], "array", false, false, true, 39))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[($context["border_radius"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["class_map"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["border_radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "border_radius", [], "array", false, false, true, 39)), ($context["border_radius"] ?? null), [], "array", false, false, true, 39))) : ("hg:rounded-none"))]),         // line 42
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 44
        yield "
";
        // line 45
        $context["flex_align_map"] = ["start" => "hg:justify-start", "center" => "hg:justify-center", "end" => "hg:justify-end", "between" => "hg:justify-between"];
        // line 51
        yield "
<div class=\"";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["tile_classes"] ?? null), " "), "html", null, true);
        yield "\">
  <div class=\"hg:flex hg:h-full hg:flex-col ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v6 = ($context["flex_align_map"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[($context["flex_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["flex_align_map"] ?? null), ($context["flex_align"] ?? null), [], "array", false, false, true, 53)), "html", null, true);
        yield "\">
    <div class=\"hg:flex hg:w-full ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v7 = (($_v8 = ($context["class_map"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["icon_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "icon_align", [], "array", false, false, true, 54))) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7[($context["icon_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v9 = ($context["class_map"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["icon_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "icon_align", [], "array", false, false, true, 54)), ($context["icon_align"] ?? null), [], "array", false, false, true, 54)), "html", null, true);
        yield "\">
      ";
        // line 55
        if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["icon_size" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 60
($context["class_map"] ?? null), "icon_size", [], "array", false, true, true, 60), ($context["icon_size"] ?? null), [], "array", true, true, true, 60)) ? (Twig\Extension\CoreExtension::default((($_v10 = (($_v11 = ($context["class_map"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["icon_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "icon_size", [], "array", false, false, true, 60))) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10[($context["icon_size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v12 = ($context["class_map"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["icon_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "icon_size", [], "array", false, false, true, 60)), ($context["icon_size"] ?? null), [], "array", false, false, true, 60)), "hg:text-4xl")) : ("hg:text-4xl"))]));
            // line 63
            yield "
      ";
        }
        // line 65
        yield "    </div>

    <div class=\"hg:w-full hg:pt-2 ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v13 = (($_v14 = ($context["class_map"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["text_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "text_align", [], "array", false, false, true, 67))) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13[($context["text_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v15 = ($context["class_map"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["text_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "text_align", [], "array", false, false, true, 67)), ($context["text_align"] ?? null), [], "array", false, false, true, 67)), "html", null, true);
        yield "\">
      ";
        // line 68
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null)))) {
            // line 69
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\" class=\"hg:flex hg:w-full hg:flex-col hg:before:absolute hg:before:inset-0 hg:before:content-['']\">
            ";
                // line 71
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 72
                    yield "              <h3 class=\"icon-tile--link-title\">";
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
                        }
                    }
                    yield "</h3>
            ";
                }
                // line 74
                yield "            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 75
                    yield "              <span class=\"icon-tile--link--text hg:mt-1\">";
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        }
                    }
                    yield "</span>
            ";
                }
                // line 77
                yield "          </a>
        ";
            } else {
                // line 79
                yield "          <span class=\"hg:flex hg:w-full hg:flex-col hg:before:absolute hg:before:inset-0 hg:before:content-['']\">
            ";
                // line 80
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "              <h3 class=\"icon-tile--title\">";
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
                        }
                    }
                    yield "</h3>
            ";
                }
                // line 83
                yield "            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 84
                    yield "              <span class=\"icon-tile--text hg:mt-1\">";
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        }
                    }
                    yield "</span>
            ";
                }
                // line 86
                yield "          </span>
        ";
            }
            // line 88
            yield "      ";
        }
        // line 89
        yield "    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["border", "url", "background", "tile_size", "border_radius", "v", "flex_align", "icon_align", "icon", "icon_size", "text_align", "text", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:tile-icon";
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
        return array (  210 => 89,  207 => 88,  203 => 86,  183 => 84,  180 => 83,  160 => 81,  158 => 80,  155 => 79,  151 => 77,  131 => 75,  128 => 74,  108 => 72,  106 => 71,  101 => 70,  98 => 69,  96 => 68,  92 => 67,  88 => 65,  84 => 63,  82 => 60,  80 => 56,  78 => 55,  74 => 54,  70 => 53,  66 => 52,  63 => 51,  61 => 45,  58 => 44,  56 => 42,  55 => 39,  54 => 38,  53 => 37,  52 => 36,  51 => 35,  50 => 29,  49 => 28,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:tile-icon", "themes/contrib/mercury/components/tile-icon/tile-icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 55];
        static $filters = ["filter" => 42, "merge" => 31, "default" => 30, "escape" => 52, "join" => 52];
        static $functions = ["include" => 57];

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
