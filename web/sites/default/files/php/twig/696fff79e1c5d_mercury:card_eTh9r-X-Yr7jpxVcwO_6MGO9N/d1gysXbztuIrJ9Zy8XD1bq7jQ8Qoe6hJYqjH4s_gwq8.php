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

/* mercury:card */
class __TwigTemplate_92801eefd0485ff90feaaaf6b95ca031 extends Template
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
            'badges' => [$this, 'block_badges'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:card"));
        $context["card_classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((        // line 2
array_key_exists("card_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["card_classes"] ?? null), [])) : ([])), ["card", "hg:flex", "hg:flex-col", "hg:gap-3", "hg:md:gap-4", "hg:lg:gap-6", "hg:transition-colors", "hg:duration-300", "hg:relative", ((CoreExtension::inFilter("stacked",         // line 15
($context["orientation"] ?? null))) ? ("is-stacked") : ("hg:md:flex-row is-landscape")), (((        // line 16
($context["style"] ?? null) == "framed")) ? ("is-framed hg:p-3 hg:md:p-4 hg:lg:p-6 hg:rounded-md") : ((((        // line 18
($context["style"] ?? null) == "featured")) ? ("is-featured hg:p-3 hg:md:p-4 hg:lg:p-6 hg:rounded-sm hg:text-center") : ("is-default")))), ((( !Twig\Extension\CoreExtension::testEmpty(        // line 19
($context["url"] ?? null)) && (($context["url"] ?? null) != "No URL"))) ? ("hg:group hg:cursor-pointer") : (""))]),         // line 22
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 24
        yield "
<div class=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["card_classes"] ?? null), " "), "html", null, true);
        yield "\">
  ";
        // line 26
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 26))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "    <div class=\"card--media hg:overflow-hidden\">
      ";
            // line 28
            yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
            // line 31
            yield "    </div>
  ";
        }
        // line 33
        yield "
  <div class=\"card--content hg:flex hg:w-full hg:flex-col hg:items-baseline hg:gap-4\">
    ";
        // line 35
        if (((($context["style"] ?? null) != "featured") &&  !Twig\Extension\CoreExtension::testEmpty(($context["badges"] ?? null)))) {
            // line 36
            yield "      ";
            if (            $this->unwrap()->hasBlock("badges", $context, $blocks)) {
                // line 37
                yield "        ";
                yield from $this->unwrap()->yieldBlock('badges', $context, $blocks);
                // line 55
                yield "      ";
            }
            // line 56
            yield "    ";
        }
        // line 57
        yield "    <div class=\"hg:flex hg:w-full hg:flex-col hg:gap-6\">
      <h3 class=\"heading hg:font-(--hgc-font-weight-h3)\"><a href=\"";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("heading_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading_text");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_text"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("heading_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading_text");
            }
        }
        yield "</a></h3>
      ";
        // line 59
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "        <p>
          ";
            // line 61
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
        }
        // line 64
        yield "    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["orientation", "style", "url", "v", "media", "badges", "heading_text", "text"]);        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "        <img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 29), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "alt", [], "any", false, false, true, 29), "html", null, true);
        yield "\" class=\"hg:h-full hg:w-full hg:object-cover\" />
      ";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_badges(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "          <ul class=\"hg:flex hg:list-none hg:items-center hg:gap-2 hg:ps-0\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["badges"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 40
            yield "              <li>
                ";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:badge", ["url" => CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["badge"], "url", [], "any", false, false, true, 45), "label" => CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["badge"], "label", [], "any", false, false, true, 46), "style" => "secondary"]));
            // line 50
            yield "
              </li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "          </ul>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:card";
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
        return array (  217 => 53,  201 => 50,  199 => 46,  198 => 45,  197 => 41,  194 => 40,  177 => 39,  174 => 38,  167 => 37,  157 => 29,  150 => 28,  141 => 64,  121 => 61,  118 => 60,  116 => 59,  96 => 58,  93 => 57,  90 => 56,  87 => 55,  84 => 37,  81 => 36,  79 => 35,  75 => 33,  71 => 31,  69 => 28,  66 => 27,  64 => 26,  60 => 25,  57 => 24,  55 => 22,  54 => 19,  53 => 18,  52 => 16,  51 => 15,  50 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:card", "themes/contrib/mercury/components/card/card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 26, "block" => 28, "for" => 39];
        static $filters = ["filter" => 22, "merge" => 4, "default" => 3, "escape" => 25, "join" => 25];
        static $functions = ["include" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
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
