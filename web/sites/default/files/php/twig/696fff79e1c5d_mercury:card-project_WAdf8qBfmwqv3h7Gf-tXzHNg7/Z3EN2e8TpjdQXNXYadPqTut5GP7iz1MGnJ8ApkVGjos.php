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

/* mercury:card-project */
class __TwigTemplate_a7f3534e8039f8922ef3ba95a194fba4 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--card-project"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:card-project"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:card-project"));
        $context["classes"] = ["card-project", "hg:flex hg:flex-col hg:gap-6", ((CoreExtension::inFilter("media-last", ($context["layout"] ?? null))) ? ("hg:md:flex-row-reverse") : ("hg:md:flex-row"))];
        // line 2
        yield "
<div class=\"";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  ";
        // line 4
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div class=\"card--media hg:flex-1 hg:overflow-hidden\">
      ";
            // line 6
            yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
            // line 9
            yield "    </div>
  ";
        }
        // line 11
        yield "
  <div
    class=\"card--content hg:flex hg:flex-1 hg:flex-col hg:gap-2 hg:md:py-4 ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::inFilter("media-last",         // line 14
($context["layout"] ?? null))) ? ("hg:md:items-end hg:md:text-right") : ("hg:md:items-start")));
        // line 17
        yield "\"
  >
    ";
        // line 19
        if (        $this->unwrap()->hasBlock("badges", $context, $blocks)) {
            // line 20
            yield "      ";
            yield from $this->unwrap()->yieldBlock('badges', $context, $blocks);
            // line 38
            yield "    ";
        }
        // line 39
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:heading"));
        yield "
    <p class=\"hg:text-lg hg:font-extralight hg:xl:text-xl\">
      ";
        // line 41
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
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["layout", "media", "text", "badges"]);        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "        <img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 7), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "alt", [], "any", false, false, true, 7), "html", null, true);
        yield "\" class=\"hg:h-full hg:w-full hg:object-cover\" />
      ";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_badges(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "        <ul class=\"hg:flex hg:list-none hg:items-center hg:gap-2 hg:ps-0\">
          ";
        // line 22
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
            // line 23
            yield "            <li>
              ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:badge", ["url" => CoreExtension::getAttribute($this->env, $this->source,             // line 28
$context["badge"], "url", [], "any", false, false, true, 28), "label" => CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["badge"], "label", [], "any", false, false, true, 29), "style" => "secondary"]));
            // line 33
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
        // line 36
        yield "        </ul>
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:card-project";
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
        return array (  186 => 36,  170 => 33,  168 => 29,  167 => 28,  166 => 24,  163 => 23,  146 => 22,  143 => 21,  136 => 20,  126 => 7,  119 => 6,  94 => 41,  88 => 39,  85 => 38,  82 => 20,  80 => 19,  76 => 17,  74 => 14,  73 => 13,  69 => 11,  65 => 9,  63 => 6,  60 => 5,  58 => 4,  54 => 3,  51 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:card-project", "themes/contrib/mercury/components/card-project/card-project.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 4, "block" => 6, "for" => 22];
        static $filters = ["escape" => 3, "join" => 3];
        static $functions = ["include" => 39];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
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
