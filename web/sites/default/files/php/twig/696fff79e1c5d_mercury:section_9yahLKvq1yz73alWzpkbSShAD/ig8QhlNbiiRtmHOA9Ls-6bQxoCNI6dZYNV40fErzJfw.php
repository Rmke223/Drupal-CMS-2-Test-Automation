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

/* mercury:section */
class __TwigTemplate_91c5892da4ea30d7d871aed480ebe5ef extends Template
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
            'background_media_block' => [$this, 'block_background_media_block'],
            'header_slot' => [$this, 'block_header_slot'],
            'main_slot' => [$this, 'block_main_slot'],
            'footer_slot' => [$this, 'block_footer_slot'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--section"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:section"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:section"));
        $context["class_map"] = ["background_color" => ["overlay" => "hg:bg-black/50", "brand" => "hg:bg-brand", "brand-light" => "hg:bg-brand-light", "brand-dark" => "hg:bg-brand-dark", "accent" => "hg:bg-accent", "accent-light" => "hg:bg-accent-light", "accent-dark" => "hg:bg-accent-dark"], "width" => ["90%" => "hg:lg:max-w-9/10", "80%" => "hg:lg:max-w-8/10", "75%" => "hg:lg:max-w-3/4", "50%" => "hg:lg:max-w-1/2"], "margin_block_start" => ["0" => "hg:mt-0", "8" => "hg:mt-2", "20" => "hg:mt-5", "32" => "hg:mt-6 hg:md:mt-7 hg:xl:mt-8", "48" => "hg:mt-8 hg:md:mt-10 hg:xl:mt-12", "64" => "hg:mt-10 hg:md:mt-13 hg:xl:mt-16", "96" => "hg:mt-16 hg:md:mt-20 hg:xl:mt-24", "128" => "hg:mt-20 hg:md:mt-24 hg:xl:mt-32"], "margin_block_end" => ["0" => "hg:mb-0", "8" => "hg:mb-2", "20" => "hg:mb-5", "32" => "hg:mb-6 hg:md:mb-7 hg:xl:mb-8", "48" => "hg:mb-8 hg:md:mb-10 hg:xl:mb-12", "64" => "hg:mb-10 hg:md:mb-13 hg:xl:mb-16", "96" => "hg:mb-16 hg:md:mb-20 hg:xl:mb-24", "128" => "hg:mb-20 hg:md:mb-24 hg:xl:mb-32"], "padding_block_start" => ["0" => "hg:pt-0", "16" => "hg:pt-4", "32" => "hg:pt-6 hg:md:pt-7 hg:xl:pt-8", "64" => "hg:pt-10 hg:md:pt-13 hg:xl:pt-16"], "padding_block_end" => ["0" => "hg:pb-0", "16" => "hg:pb-4", "32" => "hg:pb-6 hg:md:pb-7 hg:xl:pb-8", "64" => "hg:pb-10 hg:md:pb-13 hg:xl:pb-16"]];
        // line 50
        yield "
";
        // line 52
        $context["grid_class"] = (((CoreExtension::getAttribute($this->env, $this->source, ["100" => "hg:grid-cols-1", "50-50" => "hg:md:grid-cols-2", "33-33-33" => "hg:md:grid-cols-3", "75-25" => "hg:md:grid-cols-[minmax(0,3fr)_minmax(0,1fr)]", "25-75" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,3fr)]", "67-33" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]", "33-67" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,2fr)]", "50-25-25" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)_minmax(0,1fr)]", "25-25-50" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(0,2fr)]", "25-25-25-25" => "hg:grid-cols-1 hg:sm:grid-cols-2 hg:lg:grid-cols-4"],         // line 63
($context["columns"] ?? null), [], "array", true, true, true, 53) &&  !(null === (($_v0 = ["100" => "hg:grid-cols-1", "50-50" => "hg:md:grid-cols-2", "33-33-33" => "hg:md:grid-cols-3", "75-25" => "hg:md:grid-cols-[minmax(0,3fr)_minmax(0,1fr)]", "25-75" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,3fr)]", "67-33" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]", "33-67" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,2fr)]", "50-25-25" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)_minmax(0,1fr)]", "25-25-50" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(0,2fr)]", "25-25-25-25" => "hg:grid-cols-1 hg:sm:grid-cols-2 hg:lg:grid-cols-4"]) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["columns"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ["100" => "hg:grid-cols-1", "50-50" => "hg:md:grid-cols-2", "33-33-33" => "hg:md:grid-cols-3", "75-25" => "hg:md:grid-cols-[minmax(0,3fr)_minmax(0,1fr)]", "25-75" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,3fr)]", "67-33" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]", "33-67" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,2fr)]", "50-25-25" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)_minmax(0,1fr)]", "25-25-50" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(0,2fr)]", "25-25-25-25" => "hg:grid-cols-1 hg:sm:grid-cols-2 hg:lg:grid-cols-4"], ($context["columns"] ?? null), [], "array", false, false, true, 53))))) ? ((($_v1 = ["100" => "hg:grid-cols-1", "50-50" => "hg:md:grid-cols-2", "33-33-33" => "hg:md:grid-cols-3", "75-25" => "hg:md:grid-cols-[minmax(0,3fr)_minmax(0,1fr)]", "25-75" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,3fr)]", "67-33" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]", "33-67" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,2fr)]", "50-25-25" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)_minmax(0,1fr)]", "25-25-50" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(0,2fr)]", "25-25-25-25" => "hg:grid-cols-1 hg:sm:grid-cols-2 hg:lg:grid-cols-4"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["columns"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ["100" => "hg:grid-cols-1", "50-50" => "hg:md:grid-cols-2", "33-33-33" => "hg:md:grid-cols-3", "75-25" => "hg:md:grid-cols-[minmax(0,3fr)_minmax(0,1fr)]", "25-75" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,3fr)]", "67-33" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]", "33-67" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,2fr)]", "50-25-25" => "hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)_minmax(0,1fr)]", "25-25-50" => "hg:md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(0,2fr)]", "25-25-25-25" => "hg:grid-cols-1 hg:sm:grid-cols-2 hg:lg:grid-cols-4"], ($context["columns"] ?? null), [], "array", false, false, true, 53))) : ("hg:grid-cols-1"));
        // line 66
        yield "
";
        // line 68
        $context["classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((        // line 69
array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])), ["section", "hg:relative", "hg:flex", "hg:flex-col", "hg:items-stretch", "hg:mx-auto", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["class_map"] ?? null), "margin_block_start", [], "array", false, true, true, 79), ($context["margin_block_start"] ?? null), [], "array", true, true, true, 79) &&  !(null === (($_v2 = (($_v3 = ($context["class_map"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["margin_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_start", [], "array", false, false, true, 79))) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[($context["margin_block_start"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["class_map"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["margin_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_start", [], "array", false, false, true, 79)), ($context["margin_block_start"] ?? null), [], "array", false, false, true, 79))))) ? ((($_v5 = (($_v6 = ($context["class_map"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["margin_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_start", [], "array", false, false, true, 79))) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[($context["margin_block_start"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["class_map"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["margin_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_start", [], "array", false, false, true, 79)), ($context["margin_block_start"] ?? null), [], "array", false, false, true, 79))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 80
($context["class_map"] ?? null), "margin_block_end", [], "array", false, true, true, 80), ($context["margin_block_end"] ?? null), [], "array", true, true, true, 80) &&  !(null === (($_v8 = (($_v9 = ($context["class_map"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["margin_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_end", [], "array", false, false, true, 80))) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[($context["margin_block_end"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v10 = ($context["class_map"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["margin_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_end", [], "array", false, false, true, 80)), ($context["margin_block_end"] ?? null), [], "array", false, false, true, 80))))) ? ((($_v11 = (($_v12 = ($context["class_map"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["margin_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_end", [], "array", false, false, true, 80))) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11[($context["margin_block_end"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["class_map"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["margin_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "margin_block_end", [], "array", false, false, true, 80)), ($context["margin_block_end"] ?? null), [], "array", false, false, true, 80))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["class_map"] ?? null), "padding_block_start", [], "array", false, true, true, 81), ($context["padding_block_start"] ?? null), [], "array", true, true, true, 81) &&  !(null === (($_v14 = (($_v15 = ($context["class_map"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 81))) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14[($context["padding_block_start"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v16 = ($context["class_map"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 81)), ($context["padding_block_start"] ?? null), [], "array", false, false, true, 81))))) ? ((($_v17 = (($_v18 = ($context["class_map"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 81))) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17[($context["padding_block_start"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v19 = ($context["class_map"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["padding_block_start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_start", [], "array", false, false, true, 81)), ($context["padding_block_start"] ?? null), [], "array", false, false, true, 81))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 82
($context["class_map"] ?? null), "padding_block_end", [], "array", false, true, true, 82), ($context["padding_block_end"] ?? null), [], "array", true, true, true, 82) &&  !(null === (($_v20 = (($_v21 = ($context["class_map"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 82))) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20[($context["padding_block_end"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v22 = ($context["class_map"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 82)), ($context["padding_block_end"] ?? null), [], "array", false, false, true, 82))))) ? ((($_v23 = (($_v24 = ($context["class_map"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess && in_array($_v24::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v24["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 82))) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23[($context["padding_block_end"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v25 = ($context["class_map"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess && in_array($_v25::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v25["padding_block_end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding_block_end", [], "array", false, false, true, 82)), ($context["padding_block_end"] ?? null), [], "array", false, false, true, 82))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["class_map"] ?? null), "width", [], "array", false, true, true, 83), ($context["width"] ?? null), [], "array", true, true, true, 83) &&  !(null === (($_v26 = (($_v27 = ($context["class_map"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess && in_array($_v27::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v27["width"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "width", [], "array", false, false, true, 83))) && is_array($_v26) || $_v26 instanceof ArrayAccess && in_array($_v26::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v26[($context["width"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v28 = ($context["class_map"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess && in_array($_v28::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v28["width"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "width", [], "array", false, false, true, 83)), ($context["width"] ?? null), [], "array", false, false, true, 83))))) ? ((($_v29 = (($_v30 = ($context["class_map"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess && in_array($_v30::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v30["width"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "width", [], "array", false, false, true, 83))) && is_array($_v29) || $_v29 instanceof ArrayAccess && in_array($_v29::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v29[($context["width"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v31 = ($context["class_map"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess && in_array($_v31::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v31["width"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "width", [], "array", false, false, true, 83)), ($context["width"] ?? null), [], "array", false, false, true, 83))) : ("hg:lg:max-w-full"))]),         // line 86
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 88
        yield "
";
        // line 90
        $context["background_classes"] = [(((($tmp =         // line 91
($context["background_color"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v32 = (($_v33 = ($context["class_map"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess && in_array($_v33::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v33["background_color"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "background_color", [], "array", false, false, true, 91))) && is_array($_v32) || $_v32 instanceof ArrayAccess && in_array($_v32::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v32[($context["background_color"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v34 = ($context["class_map"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess && in_array($_v34::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v34["background_color"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "background_color", [], "array", false, false, true, 91)), ($context["background_color"] ?? null), [], "array", false, false, true, 91))) : ("hg:bg-none")), "hg:absolute hg:w-screen hg:inset-0 hg:z-[-1] hg:ms-[-50vw] hg:left-[50%]"];
        // line 94
        yield "
<section class=\"";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  ";
        // line 97
        yield "  ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["background_media"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["background_media"] ?? null), "src", [], "any", false, false, true, 97)))) {
            // line 98
            yield "    ";
            yield from $this->unwrap()->yieldBlock('background_media_block', $context, $blocks);
            // line 103
            yield "  ";
        }
        // line 104
        yield "
  ";
        // line 106
        yield "  ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["background_color"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["background_classes"] ?? null), " "), "html", null, true);
            yield "\"></div>
  ";
        }
        // line 109
        yield "
  ";
        // line 110
        if ((($tmp = ($context["section_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "    ";
            $context["header_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 112
                yield "      ";
                yield from $this->unwrap()->yieldBlock('header_slot', $context, $blocks);
                // line 115
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["header_content"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "      <header class=\"section--header hg:mb-6 hg:md:mb-8 hg:xl:mb-10\">
        ";
                // line 118
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("header_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "header_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "header_content");
                    }
                }
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_content"] ?? null), "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("header_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "header_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "header_content");
                    }
                }
                yield "
      </header>
    ";
            }
            // line 121
            yield "  ";
        }
        // line 122
        yield "
  <div class=\"section--main hg:grid hg:w-full hg:gap-4 hg:md:gap-6 hg:xl:gap-8 ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["grid_class"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 124
        yield from $this->unwrap()->yieldBlock('main_slot', $context, $blocks);
        // line 127
        yield "  </div>

  ";
        // line 129
        if ((($tmp = ($context["section_footer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "    ";
            $context["footer_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 131
                yield "      ";
                yield from $this->unwrap()->yieldBlock('footer_slot', $context, $blocks);
                // line 134
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 135
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["footer_content"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 136
                yield "      <footer class=\"section--footer hg:mt-6 hg:md:mt-8 hg:xl:mt-10\">
        ";
                // line 137
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("footer_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "footer_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "footer_content");
                    }
                }
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_content"] ?? null), "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("footer_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "footer_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "footer_content");
                    }
                }
                yield "
      </footer>
    ";
            }
            // line 140
            yield "  ";
        }
        // line 141
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["columns", "margin_block_start", "margin_block_end", "padding_block_start", "padding_block_end", "width", "v", "background_color", "background_media", "section_header", "section_footer"]);        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_background_media_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "      <div class=\"section--background-media hg:absolute hg:inset-0 hg:left-[50%] hg:z-[-1] hg:ms-[-50vw] hg:w-screen\">
        <img src=\"";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["background_media"] ?? null), "src", [], "any", false, false, true, 100), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["background_media"] ?? null), "alt", [], "any", false, false, true, 100), "html", null, true);
        yield "\" class=\"hg:h-full hg:w-full hg:object-cover\" />
      </div>
    ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "
      ";
        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 125
        yield "
    ";
        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 132
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:section";
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
        return array (  263 => 132,  256 => 131,  250 => 125,  243 => 124,  237 => 113,  230 => 112,  220 => 100,  217 => 99,  210 => 98,  203 => 141,  200 => 140,  180 => 137,  177 => 136,  174 => 135,  170 => 134,  167 => 131,  164 => 130,  162 => 129,  158 => 127,  156 => 124,  152 => 123,  149 => 122,  146 => 121,  126 => 118,  123 => 117,  120 => 116,  116 => 115,  113 => 112,  110 => 111,  108 => 110,  105 => 109,  99 => 107,  96 => 106,  93 => 104,  90 => 103,  87 => 98,  84 => 97,  80 => 95,  77 => 94,  75 => 91,  74 => 90,  71 => 88,  69 => 86,  68 => 83,  67 => 82,  66 => 81,  65 => 80,  64 => 79,  63 => 69,  62 => 68,  59 => 66,  57 => 63,  56 => 52,  53 => 50,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:section", "themes/contrib/mercury/components/section/section.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 97, "block" => 98];
        static $filters = ["filter" => 86, "merge" => 71, "default" => 70, "escape" => 95, "join" => 95, "trim" => 116];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['filter', 'merge', 'default', 'escape', 'join', 'trim'],
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
