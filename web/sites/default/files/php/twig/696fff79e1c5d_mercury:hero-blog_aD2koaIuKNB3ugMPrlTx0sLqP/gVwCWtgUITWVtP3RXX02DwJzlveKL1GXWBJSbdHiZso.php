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

/* mercury:hero-blog */
class __TwigTemplate_c3550d39224a3148ac241e8a9f4a3b3c extends Template
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
            'title' => [$this, 'block_title'],
            'author' => [$this, 'block_author'],
            'blog_media' => [$this, 'block_blog_media'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--hero-blog"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:hero-blog"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:hero-blog"));
        $context["classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])), ["hero-blog", "hg:py-8", "hg:md:py-12"]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 2
        yield "
";
        // line 3
        $context["date_formatted"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date"] ?? null), "m.d.Y");
        // line 4
        yield "
<section class=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  <div class=\"hero-blog--content hg:container hg:mx-auto hg:flex hg:flex-col hg:gap-8 hg:px-6 hg:md:w-full hg:md:gap-12 hg:lg:w-10/12 hg:xl:w-8/12\">
    <p>
      <time datetime=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_formatted"] ?? null), "html", null, true);
        yield "\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_formatted", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_formatted");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_formatted");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_formatted"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_formatted", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_formatted");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_formatted");
            }
        }
        yield "</time>
    </p>

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 23
        yield "
    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('author', $context, $blocks);
        // line 31
        yield "  </div>

  ";
        // line 33
        if (        $this->unwrap()->hasBlock("blog_media", $context, $blocks)) {
            // line 34
            yield "    <div class=\"hg:relative hg:mx-auto hg:mt-8 hg:px-6 hg:md:mt-12 hg:lg:w-full hg:xl:w-10/12\">
      <div
        class=\"hg:absolute hg:-bottom-8 hg:left-1/2 hg:z-[-1] hg:-ml-[50vw] hg:h-[calc(33.3%+32px)] hg:w-screen hg:bg-brand-light hg:md:-bottom-12 hg:md:h-[calc(33.3%+48px)]\"
      ></div>
      ";
            // line 38
            yield from $this->unwrap()->yieldBlock('blog_media', $context, $blocks);
            // line 41
            yield "    </div>
  ";
        }
        // line 43
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["v", "date", "heading_text", "author"]);        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:heading", ["heading_text" =>         // line 16
($context["heading_text"] ?? null), "level" => 1, "url" => "No URL"]));
        // line 21
        yield "
    ";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_author(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["author"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        <p>
          By ";
            // line 27
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "author");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "author");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "author");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "author");
                }
            }
            yield "
        </p>
      ";
        }
        // line 30
        yield "    ";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_blog_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:hero-blog";
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
        return array (  182 => 39,  175 => 38,  170 => 30,  150 => 27,  147 => 26,  144 => 25,  137 => 24,  131 => 21,  129 => 16,  127 => 12,  120 => 11,  113 => 43,  109 => 41,  107 => 38,  101 => 34,  99 => 33,  95 => 31,  93 => 24,  90 => 23,  88 => 11,  66 => 8,  60 => 5,  57 => 4,  55 => 3,  52 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:hero-blog", "themes/contrib/mercury/components/hero-blog/hero-blog.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 11, "if" => 33];
        static $filters = ["filter" => 1, "merge" => 1, "default" => 1, "date" => 3, "escape" => 5, "join" => 5];
        static $functions = ["include" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['filter', 'merge', 'default', 'date', 'escape', 'join'],
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
