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

/* mercury:image */
class __TwigTemplate_210268a46370e37799e461e1d3bfe583 extends Template
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
            'media' => [$this, 'block_media'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:image"));
        $context["class_map"] = ["size" => ["2:1" => "hg:aspect-2/1", "16:9" => "hg:aspect-16/9", "3:2" => "hg:aspect-3/2", "4:3" => "hg:aspect-4/3", "1:1" => "hg:aspect-1/1"], "radius" => ["small" => "hg:rounded-sm", "large" => "hg:rounded-xl hg:md:rounded-2xl", "extra-large" => "hg:rounded-[24px] hg:md:rounded-[32px]"]];
        // line 15
        $context["classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((        // line 16
array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])), ["media-image", "media-image", (((($tmp =         // line 18
($context["radius"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((($_v0 = (($_v1 = ($context["class_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "radius", [], "array", false, false, true, 18))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["radius"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["class_map"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "radius", [], "array", false, false, true, 18)), ($context["radius"] ?? null), [], "array", false, false, true, 18)) . " hg:overflow-hidden")) : ("hg:rounded-none"))]),         // line 19
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 21
        yield "
<figure class=\"";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  <div class=\"hg:w-full ";
        // line 23
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "size", [], "array", false, true, true, 23), ($context["size"] ?? null), [], "array", true, true, true, 23) &&  !(null === (($_v3 = (($_v4 = ($context["class_map"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "size", [], "array", false, false, true, 23))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[($context["size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["class_map"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "size", [], "array", false, false, true, 23)), ($context["size"] ?? null), [], "array", false, false, true, 23))))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v6 = (($_v7 = ($context["class_map"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "size", [], "array", false, false, true, 23))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[($context["size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["class_map"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["size"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "size", [], "array", false, false, true, 23)), ($context["size"] ?? null), [], "array", false, false, true, 23)), "html", null, true)) : (""));
        yield "\">
    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
        // line 27
        yield "  </div>
  ";
        // line 28
        if ((($tmp = ($context["caption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "    <figcaption class=\"hg:block hg:py-1 hg:text-sm hg:lg:text-base\">
      ";
            // line 30
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("caption", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "caption");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "caption");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("caption", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "caption");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "caption");
                }
            }
            yield "
    </figcaption>
  ";
        }
        // line 33
        yield "</figure>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["radius", "v", "size", "caption", "media"]);        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "      <img class=\"hg:h-full hg:w-full hg:object-cover\" src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 25), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "alt", [], "any", false, false, true, 25), "html", null, true);
        yield "\" />
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:image";
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
        return array (  110 => 25,  103 => 24,  96 => 33,  76 => 30,  73 => 29,  71 => 28,  68 => 27,  66 => 24,  62 => 23,  58 => 22,  55 => 21,  53 => 19,  52 => 18,  51 => 16,  50 => 15,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:image", "themes/contrib/mercury/components/image/image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 24, "if" => 28];
        static $filters = ["filter" => 19, "merge" => 18, "default" => 17, "escape" => 22, "join" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
