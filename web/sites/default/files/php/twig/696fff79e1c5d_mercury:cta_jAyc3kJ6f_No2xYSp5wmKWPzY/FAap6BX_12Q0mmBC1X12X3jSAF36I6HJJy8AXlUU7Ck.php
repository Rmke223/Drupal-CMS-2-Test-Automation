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

/* mercury:cta */
class __TwigTemplate_932477cfe9622ac762f865e958784acf extends Template
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
            'actions' => [$this, 'block_actions'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:cta"));
        $context["classes"] = ["cta", "hg:relative", "hg:z-1"];
        // line 2
        yield "
";
        // line 3
        if ((($context["text_align"] ?? null) == "left")) {
            // line 4
            yield "  ";
            $context["alignment"] = "hg:text-left";
            // line 5
            yield "  ";
            $context["list_extras"] = "hg:md:justify-start";
        } elseif ((        // line 6
($context["text_align"] ?? null) == "right")) {
            // line 7
            yield "  ";
            $context["alignment"] = "hg:text-right";
            // line 8
            yield "  ";
            $context["list_extras"] = "hg:md:justify-end";
        } else {
            // line 10
            yield "  ";
            $context["alignment"] = "hg:text-center hg:lg:max-w-3/4 hg:mx-auto";
            // line 11
            yield "  ";
            $context["list_extras"] = "hg:justify-center hg:items-center";
        }
        // line 13
        yield "
";
        // line 14
        if ((($context["has_background_image"] ?? null) == true)) {
            // line 15
            yield "  ";
            $context["text_color"] = "hg:text-white!";
        }
        // line 17
        yield "
<section class=\"";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  ";
        // line 19
        yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
        // line 27
        yield "  <div
    class=\"cta--content hg:relative hg:flex hg:min-h-80 hg:flex-col hg:justify-center hg:gap-6 hg:py-[90px] hg:lg:gap-8 hg:lg:py-[115px] hg:xl:py-[140px] ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((        // line 29
($context["text_align"] ?? null) == "center")) ? ("hg:items-center") : ("")));
        // line 31
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["alignment"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text_color"] ?? null), "html", null, true);
        yield "\"
  >
    ";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:heading", ["heading_classes" => ["hg:font-extrabold"]]));
        // line 40
        yield "
    <p class=\"hg:text-md hg:font-normal\">
      ";
        // line 42
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
        yield "
    </p>
    ";
        // line 44
        if (        $this->unwrap()->hasBlock("actions", $context, $blocks)) {
            // line 45
            yield "      <div class=\"cta--links hg:flex hg:w-full hg:flex-col hg:gap-6 hg:sm:flex-row ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["list_extras"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 46
            yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
            // line 49
            yield "      </div>
    ";
        }
        // line 51
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["text_align", "has_background_image", "text", "media"]);        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 20)) && ($context["has_background_image"] ?? null))) {
            // line 21
            yield "      <div class=\"cta--media hg:absolute hg:left-[50%] hg:z-[-1] hg:ms-[-50vw] hg:h-full hg:w-screen\">
        <div class=\"hg:absolute hg:inset-0 hg:bg-black/30\"></div>
        <img src=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 23), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "alt", [], "any", false, false, true, 23), "html", null, true);
            yield "\" class=\"hg:h-full hg:w-full hg:object-cover\" />
      </div>
    ";
        }
        // line 26
        yield "  ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:cta";
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
        return array (  190 => 47,  183 => 46,  178 => 26,  170 => 23,  166 => 21,  163 => 20,  156 => 19,  148 => 51,  144 => 49,  142 => 46,  137 => 45,  135 => 44,  116 => 42,  112 => 40,  110 => 33,  102 => 31,  100 => 29,  99 => 28,  96 => 27,  94 => 19,  90 => 18,  87 => 17,  83 => 15,  81 => 14,  78 => 13,  74 => 11,  71 => 10,  67 => 8,  64 => 7,  62 => 6,  59 => 5,  56 => 4,  54 => 3,  51 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:cta", "themes/contrib/mercury/components/cta/cta.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 3, "block" => 19];
        static $filters = ["escape" => 18, "join" => 18];
        static $functions = ["include" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'join'],
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
