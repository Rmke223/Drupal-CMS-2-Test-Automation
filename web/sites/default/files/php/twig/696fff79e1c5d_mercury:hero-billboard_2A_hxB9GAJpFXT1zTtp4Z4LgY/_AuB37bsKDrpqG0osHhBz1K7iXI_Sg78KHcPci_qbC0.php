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

/* mercury:hero-billboard */
class __TwigTemplate_4bde4537954752e732d06899570503f7 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--hero-billboard"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:hero-billboard"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:hero-billboard"));
        $context["class_map"] = ["height" => ["full" => "hg:h-dvh", "large" => "hg:h-3/4 hg:min-h-[500px] hg:md:max-h-[600px] hg:xl:max-h-[800px]", "ribbon" => "hg:h-1/2 hg:md:min-h-[400px] hg:md:max-h-[450px] hg:xl:max-h-[600px]"], "flex_position" => ["top-left" => "hg:justify-start", "center-left" => "hg:justify-center-safe", "bottom-left" => "hg:justify-end"], "overlay_opacity" => ["0%" => "hg:bg-black/0", "20%" => "hg:bg-black/20", "40%" => "hg:bg-black/40", "60%" => "hg:bg-black/60", "75%" => "hg:bg-black/75"], "object_position" => ["top" => "hg:object-top", "center" => "hg:object-center", "bottom" => "hg:object-bottom"]];
        // line 25
        $context["classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((        // line 26
array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])), ["hero-overlay", "hg:relative", "hg:flex", "hg:flex-col", (($_v0 = (($_v1 =         // line 34
($context["class_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["height"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "height", [], "array", false, false, true, 34))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(((array_key_exists("height", $context) &&  !(null === $context["height"]))) ? ($context["height"]) : ("full"))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["class_map"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["height"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "height", [], "array", false, false, true, 34)), (((array_key_exists("height", $context) &&  !(null === $context["height"]))) ? ($context["height"]) : ("full")), [], "array", false, false, true, 34)), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["class_map"] ?? null), "flex_position", [], "array", false, true, true, 35), ($context["flex_position"] ?? null), [], "array", true, true, true, 35) &&  !(null === (($_v3 = (($_v4 = ($context["class_map"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["flex_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_position", [], "array", false, false, true, 35))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[($context["flex_position"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["class_map"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["flex_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_position", [], "array", false, false, true, 35)), ($context["flex_position"] ?? null), [], "array", false, false, true, 35))))) ? ((($_v6 = (($_v7 = ($context["class_map"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["flex_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_position", [], "array", false, false, true, 35))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[($context["flex_position"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["class_map"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["flex_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_position", [], "array", false, false, true, 35)), ($context["flex_position"] ?? null), [], "array", false, false, true, 35))) : ("hg:justify-center"))]),         // line 38
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 40
        yield "
";
        // line 41
        $context["img_position"] = ("hg:object-" . ($context["background_position"] ?? null));
        // line 42
        yield "
<section class=\"";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  ";
        // line 44
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 44))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "    <div class=\"hero-overlay--media hg:absolute hg:left-[50%] hg:z-[-1] hg:ms-[-50vw] hg:h-full hg:w-screen\">
      ";
            // line 46
            yield from $this->unwrap()->yieldBlock('hero_media', $context, $blocks);
            // line 56
            yield "    </div>
  ";
        }
        // line 58
        yield "  <div
    class=\"hero-overlay--content ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((        // line 60
($context["flex_position"] ?? null) == "hero-center")) ? ("hg:text-center hg:items-center hg:lg:mx-auto hg:lg:max-w-2/3") : ("hg:lg:max-w-2/3")));
        // line 63
        yield " hg:relative hg:z-1 hg:flex hg:flex-col hg:gap-6 hg:py-6 hg:md:py-10 hg:xl:py-20\"
  >
    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('hero_content', $context, $blocks);
        // line 70
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["height", "flex_position", "v", "background_position", "media", "overlay_opacity", "object_position"]);        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 47))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "          <div class=\"hg:absolute hg:inset-0 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v9 = (($_v10 = ($context["class_map"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["overlay_opacity"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "overlay_opacity", [], "array", false, false, true, 48))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9[($context["overlay_opacity"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["class_map"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["overlay_opacity"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "overlay_opacity", [], "array", false, false, true, 48)), ($context["overlay_opacity"] ?? null), [], "array", false, false, true, 48)), "html", null, true);
            yield "\"></div>
        ";
        }
        // line 50
        yield "        <img
          src=\"";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 51), "html", null, true);
        yield "\"
          alt=\"";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "alt", [], "any", false, false, true, 52), "html", null, true);
        yield "\"
          class=\"hg:h-full hg:w-full hg:object-cover ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v12 = (($_v13 = ($context["class_map"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["object_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "object_position", [], "array", false, false, true, 53))) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12[($context["object_position"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v14 = ($context["class_map"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["object_position"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "object_position", [], "array", false, false, true, 53)), ($context["object_position"] ?? null), [], "array", false, false, true, 53)), "html", null, true);
        yield "\"
        />
      ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "      ";
        yield from $this->unwrap()->yieldBlock('hero_slot', $context, $blocks);
        // line 69
        yield "    ";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:hero-billboard";
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
        return array (  158 => 67,  151 => 66,  146 => 69,  143 => 66,  136 => 65,  128 => 53,  124 => 52,  120 => 51,  117 => 50,  111 => 48,  108 => 47,  101 => 46,  93 => 70,  91 => 65,  87 => 63,  85 => 60,  84 => 59,  81 => 58,  77 => 56,  75 => 46,  72 => 45,  70 => 44,  66 => 43,  63 => 42,  61 => 41,  58 => 40,  56 => 38,  55 => 35,  54 => 34,  53 => 26,  52 => 25,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:hero-billboard", "themes/contrib/mercury/components/hero-billboard/hero-billboard.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 44, "block" => 46];
        static $filters = ["filter" => 38, "merge" => 28, "default" => 27, "escape" => 43, "join" => 43];
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
