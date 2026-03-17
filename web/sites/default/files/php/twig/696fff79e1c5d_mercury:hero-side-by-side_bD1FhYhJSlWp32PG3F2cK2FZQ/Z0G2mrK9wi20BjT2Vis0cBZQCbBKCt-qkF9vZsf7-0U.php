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

/* mercury:hero-side-by-side */
class __TwigTemplate_a2bc54bb65be7434d2e956c63074555f extends Template
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
            'hero_media' => [$this, 'block_hero_media'],
            'hero_content' => [$this, 'block_hero_content'],
            'hero_slot' => [$this, 'block_hero_slot'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--hero-side-by-side"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:hero-side-by-side"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:hero-side-by-side"));
        $context["class_map"] = ["hero_flex_gap" => ["large" => "hg:gap-4 hg:md:gap-6 hg:xl:gap-8", "extra-large" => "hg:gap-16 hg:md:gap-24 hg:xl:gap-32"], "hero_flex_direction_mobile" => ["vertical" => "hg:flex-col", "vertical-reverse" => "hg:flex-col-reverse"], "background" => ["brand" => "hg:bg-brand", "brand-light" => "hg:bg-brand-light", "brand-dark" => "hg:bg-brand-dark", "accent" => "hg:bg-accent", "accent-light" => "hg:bg-accent-light", "accent-dark" => "hg:bg-accent-dark"], "image_size" => ["2:1" => "hg:aspect-2/1", "16:9" => "hg:aspect-16/9", "3:2" => "hg:aspect-3/2", "4:3" => "hg:aspect-4/3", "1:1" => "hg:aspect-1/1"], "image_position" => ["left" => "hg:md:flex-row", "right" => "hg:md:flex-row-reverse"], "image_radius" => ["small" => "hg:rounded-sm", "large" => "hg:rounded-xl hg:md:rounded-2xl", "extra-large" => "hg:rounded-[24px] hg:md:rounded-[32px]"], "padding_block_start" => ["0" => "hg:pt-0", "16" => "hg:pt-4", "32" => "hg:pt-6 hg:md:pt-7 hg:xl:pt-8", "64" => "hg:pt-10 hg:md:pt-13 hg:xl:pt-16"], "padding_block_end" => ["0" => "hg:pb-0", "16" => "hg:pb-4", "32" => "hg:pb-6 hg:md:pb-7 hg:xl:pb-8", "64" => "hg:pb-10 hg:md:pb-13 hg:xl:pb-16"], "slot_flex_align" => ["start" => "hg:md:self-start", "center" => "hg:md:self-center", "end" => "hg:md:self-end"], "slot_flex_direction" => ["vertical" => "hg:flex-col", "vertical-reverse" => "hg:flex-col-reverse"], "slot_flex_gap" => ["small" => "hg:gap-4", "medium" => "hg:gap-6 hg:md:gap-8", "large" => "hg:gap-12 hg:md:gap-16"]];
        // line 61
        yield "
";
        // line 62
        $context["classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((        // line 63
array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])), ["hero", "hg:relative", "hg:h-full", "hg:flex", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["class_map"] ?? null), "image_position", [], "array", false, true, true, 71), ($context["image_position"] ?? null), [], "array", true, true, true, 71) &&  !(null === (($_v0 = (($_v1 = ($context["class_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["image_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_position", [], "array", false, false, true, 71))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["image_position"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["class_map"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["image_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_position", [], "array", false, false, true, 71)), ($context["image_position"] ?? null), [], "array", false, false, true, 71))))) ? ((($_v3 = (($_v4 = ($context["class_map"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["image_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_position", [], "array", false, false, true, 71))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[($context["image_position"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["class_map"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["image_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_position", [], "array", false, false, true, 71)), ($context["image_position"] ?? null), [], "array", false, false, true, 71))) : ("")), (((($tmp =         // line 72
($context["hero_flex_gap"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v6 = (($_v7 = ($context["class_map"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["hero_flex_gap"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "hero_flex_gap", [], "array", false, false, true, 72))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[($context["hero_flex_gap"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["class_map"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["hero_flex_gap"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "hero_flex_gap", [], "array", false, false, true, 72)), ($context["hero_flex_gap"] ?? null), [], "array", false, false, true, 72))) : ("hg:gap-0")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["class_map"] ?? null), "hero_flex_direction_mobile", [], "array", false, true, true, 73), ($context["hero_flex_direction_mobile"] ?? null), [], "array", true, true, true, 73) &&  !(null === (($_v9 = (($_v10 = ($context["class_map"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["hero_flex_direction_mobile"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "hero_flex_direction_mobile", [], "array", false, false, true, 73))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9[($context["hero_flex_direction_mobile"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["class_map"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["hero_flex_direction_mobile"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "hero_flex_direction_mobile", [], "array", false, false, true, 73)), ($context["hero_flex_direction_mobile"] ?? null), [], "array", false, false, true, 73))))) ? ((($_v12 = (($_v13 = ($context["class_map"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["hero_flex_direction_mobile"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "hero_flex_direction_mobile", [], "array", false, false, true, 73))) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12[($context["hero_flex_direction_mobile"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v14 = ($context["class_map"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["hero_flex_direction_mobile"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "hero_flex_direction_mobile", [], "array", false, false, true, 73)), ($context["hero_flex_direction_mobile"] ?? null), [], "array", false, false, true, 73))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["class_map"] ?? null), "padding_block_start", [], "array", false, true, true, 74), ($context["padding_block_start"] ?? null), [], "array", true, true, true, 74) &&  !(null === (($_v15 = (($_v16 = ($context["class_map"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 74))) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15[($context["padding_block_start"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v17 = ($context["class_map"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 74)), ($context["padding_block_start"] ?? null), [], "array", false, false, true, 74))))) ? ((($_v18 = (($_v19 = ($context["class_map"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 74))) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18[($context["padding_block_start"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v20 = ($context["class_map"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 74)), ($context["padding_block_start"] ?? null), [], "array", false, false, true, 74))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["class_map"] ?? null), "padding_block_end", [], "array", false, true, true, 75), ($context["padding_block_end"] ?? null), [], "array", true, true, true, 75) &&  !(null === (($_v21 = (($_v22 = ($context["class_map"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 75))) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21[($context["padding_block_end"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v23 = ($context["class_map"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 75)), ($context["padding_block_end"] ?? null), [], "array", false, false, true, 75))))) ? ((($_v24 = (($_v25 = ($context["class_map"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess && in_array($_v25::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v25["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 75))) && is_array($_v24) || $_v24 instanceof ArrayAccess && in_array($_v24::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v24[($context["padding_block_end"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v26 = ($context["class_map"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess && in_array($_v26::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v26["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 75)), ($context["padding_block_end"] ?? null), [], "array", false, false, true, 75))) : (""))]),         // line 78
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 80
        yield "
";
        // line 82
        $context["bgd_classes"] = Twig\Extension\CoreExtension::filter($this->env, [(((($tmp =         // line 84
($context["background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v27 = (($_v28 = ($context["class_map"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess && in_array($_v28::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v28["background"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "background", [], "array", false, false, true, 84))) && is_array($_v27) || $_v27 instanceof ArrayAccess && in_array($_v27::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v27[($context["background"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v29 = ($context["class_map"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess && in_array($_v29::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v29["background"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "background", [], "array", false, false, true, 84)), ($context["background"] ?? null), [], "array", false, false, true, 84))) : ("hg:bg-none")), "hg:absolute hg:w-screen hg:inset-0 hg:z-[-1] hg:ms-[-50vw] hg:left-[50%]"],         // line 86
function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !Twig\Extension\CoreExtension::testEmpty(($context["c"] ?? null)); });
        // line 88
        yield "
";
        // line 89
        $context["hero_content_classes"] = Twig\Extension\CoreExtension::filter($this->env, ["hero--content", "hg:flex", "hg:flex-1", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 94
($context["class_map"] ?? null), "slot_flex_direction", [], "array", false, true, true, 94), ($context["slot_flex_direction"] ?? null), [], "array", true, true, true, 94) &&  !(null === (($_v30 = (($_v31 = ($context["class_map"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess && in_array($_v31::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v31["slot_flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_direction", [], "array", false, false, true, 94))) && is_array($_v30) || $_v30 instanceof ArrayAccess && in_array($_v30::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v30[($context["slot_flex_direction"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v32 = ($context["class_map"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess && in_array($_v32::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v32["slot_flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_direction", [], "array", false, false, true, 94)), ($context["slot_flex_direction"] ?? null), [], "array", false, false, true, 94))))) ? ((($_v33 = (($_v34 = ($context["class_map"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess && in_array($_v34::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v34["slot_flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_direction", [], "array", false, false, true, 94))) && is_array($_v33) || $_v33 instanceof ArrayAccess && in_array($_v33::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v33[($context["slot_flex_direction"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v35 = ($context["class_map"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess && in_array($_v35::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v35["slot_flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_direction", [], "array", false, false, true, 94)), ($context["slot_flex_direction"] ?? null), [], "array", false, false, true, 94))) : ("")), (((($tmp =         // line 95
($context["slot_flex_gap"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v36 = (($_v37 = ($context["class_map"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess && in_array($_v37::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v37["slot_flex_gap"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_gap", [], "array", false, false, true, 95))) && is_array($_v36) || $_v36 instanceof ArrayAccess && in_array($_v36::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v36[($context["slot_flex_gap"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v38 = ($context["class_map"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess && in_array($_v38::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v38["slot_flex_gap"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_gap", [], "array", false, false, true, 95)), ($context["slot_flex_gap"] ?? null), [], "array", false, false, true, 95))) : ("hg:gap-0")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["class_map"] ?? null), "slot_flex_align", [], "array", false, true, true, 96), ($context["slot_flex_align"] ?? null), [], "array", true, true, true, 96) &&  !(null === (($_v39 = (($_v40 = ($context["class_map"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess && in_array($_v40::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v40["slot_flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_align", [], "array", false, false, true, 96))) && is_array($_v39) || $_v39 instanceof ArrayAccess && in_array($_v39::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v39[($context["slot_flex_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v41 = ($context["class_map"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess && in_array($_v41::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v41["slot_flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_align", [], "array", false, false, true, 96)), ($context["slot_flex_align"] ?? null), [], "array", false, false, true, 96))))) ? ((($_v42 = (($_v43 = ($context["class_map"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess && in_array($_v43::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v43["slot_flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_align", [], "array", false, false, true, 96))) && is_array($_v42) || $_v42 instanceof ArrayAccess && in_array($_v42::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v42[($context["slot_flex_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v44 = ($context["class_map"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess && in_array($_v44::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v44["slot_flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "slot_flex_align", [], "array", false, false, true, 96)), ($context["slot_flex_align"] ?? null), [], "array", false, false, true, 96))) : (""))],         // line 97
function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !Twig\Extension\CoreExtension::testEmpty(($context["c"] ?? null)); });
        // line 99
        yield "
";
        // line 100
        $context["image_classes"] = Twig\Extension\CoreExtension::filter($this->env, ["hero--media", "hg:flex-1", "hg:overflow-hidden", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["class_map"] ?? null), "image_size", [], "array", false, true, true, 105), ($context["image_size"] ?? null), [], "array", true, true, true, 105) &&  !(null === (($_v45 = (($_v46 = ($context["class_map"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess && in_array($_v46::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v46["image_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_size", [], "array", false, false, true, 105))) && is_array($_v45) || $_v45 instanceof ArrayAccess && in_array($_v45::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v45[($context["image_size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v47 = ($context["class_map"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess && in_array($_v47::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v47["image_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_size", [], "array", false, false, true, 105)), ($context["image_size"] ?? null), [], "array", false, false, true, 105))))) ? ((($_v48 = (($_v49 = ($context["class_map"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess && in_array($_v49::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v49["image_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_size", [], "array", false, false, true, 105))) && is_array($_v48) || $_v48 instanceof ArrayAccess && in_array($_v48::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v48[($context["image_size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v50 = ($context["class_map"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess && in_array($_v50::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v50["image_size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_size", [], "array", false, false, true, 105)), ($context["image_size"] ?? null), [], "array", false, false, true, 105))) : ("")), (((($tmp =         // line 106
($context["image_radius"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v51 = (($_v52 = ($context["class_map"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess && in_array($_v52::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v52["image_radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_radius", [], "array", false, false, true, 106))) && is_array($_v51) || $_v51 instanceof ArrayAccess && in_array($_v51::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v51[($context["image_radius"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v53 = ($context["class_map"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess && in_array($_v53::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v53["image_radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "image_radius", [], "array", false, false, true, 106)), ($context["image_radius"] ?? null), [], "array", false, false, true, 106))) : ("hg:rounded-none"))],         // line 107
function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !Twig\Extension\CoreExtension::testEmpty(($context["c"] ?? null)); });
        // line 109
        yield "
<section class=\"";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  ";
        // line 111
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["background"] ?? null)) && (($context["background"] ?? null) != "None"))) {
            // line 112
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["bgd_classes"] ?? null), " "), "html", null, true);
            yield "\"></div>
  ";
        }
        // line 114
        yield "
  <div class=\"";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["image_classes"] ?? null), " "), "html", null, true);
        yield "\">
    ";
        // line 116
        yield from $this->unwrap()->yieldBlock('hero_media', $context, $blocks);
        // line 119
        yield "  </div>
  <div class=\"";
        // line 120
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["hero_content_classes"] ?? null), " "), "html", null, true);
        yield "\">
    ";
        // line 121
        yield from $this->unwrap()->yieldBlock('hero_content', $context, $blocks);
        // line 126
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["image_position", "hero_flex_gap", "hero_flex_direction_mobile", "padding_block_start", "padding_block_end", "v", "background", "c", "slot_flex_direction", "slot_flex_gap", "slot_flex_align", "image_size", "image_radius", "media"]);        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 117
        yield "      <img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 117), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "alt", [], "any", false, false, true, 117), "html", null, true);
        yield "\" class=\"hg:h-full hg:w-full hg:object-cover\" />
    ";
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "      ";
        yield from $this->unwrap()->yieldBlock('hero_slot', $context, $blocks);
        // line 125
        yield "    ";
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 123
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:hero-side-by-side";
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
        return array (  168 => 123,  161 => 122,  156 => 125,  153 => 122,  146 => 121,  136 => 117,  129 => 116,  121 => 126,  119 => 121,  115 => 120,  112 => 119,  110 => 116,  106 => 115,  103 => 114,  97 => 112,  95 => 111,  91 => 110,  88 => 109,  86 => 107,  85 => 106,  84 => 105,  83 => 100,  80 => 99,  78 => 97,  77 => 96,  76 => 95,  75 => 94,  74 => 89,  71 => 88,  69 => 86,  68 => 84,  67 => 82,  64 => 80,  62 => 78,  61 => 75,  60 => 74,  59 => 73,  58 => 72,  57 => 71,  56 => 63,  55 => 62,  52 => 61,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:hero-side-by-side", "themes/contrib/mercury/components/hero-side-by-side/hero-side-by-side.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 111, "block" => 116];
        static $filters = ["filter" => 78, "merge" => 65, "default" => 64, "escape" => 110, "join" => 110];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['filter', 'merge', 'default', 'escape', 'join'],
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
