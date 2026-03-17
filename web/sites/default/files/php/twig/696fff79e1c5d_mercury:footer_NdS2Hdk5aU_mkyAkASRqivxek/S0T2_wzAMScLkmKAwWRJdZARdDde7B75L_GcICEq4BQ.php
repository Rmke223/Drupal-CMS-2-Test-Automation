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

/* mercury:footer */
class __TwigTemplate_b958abef0a6984a1902237f8e1a0d4c9 extends Template
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
            'footer_first' => [$this, 'block_footer_first'],
            'footer_last' => [$this, 'block_footer_last'],
            'footer_utility_first' => [$this, 'block_footer_utility_first'],
            'footer_utility_last' => [$this, 'block_footer_utility_last'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:footer"));
        $context["footer_classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((array_key_exists("footer_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["footer_classes"] ?? null), [])) : ([])), ["hg:flex", "hg:flex-col"]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 2
        yield "
<section class=\"site-footer\">
  <div class=\"";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["footer_classes"] ?? null), " "), "html", null, true);
        yield "\">
    <div
      class=\"site-footer--top hg:flex hg:w-full hg:flex-col hg:justify-between hg:gap-6 hg:border-t hg:border-(--hgc-footer-border) hg:py-8 hg:md:grid hg:md:grid-cols-2 hg:md:gap-6\"
    >
      ";
        // line 8
        if (        $this->unwrap()->hasBlock("footer_first", $context, $blocks)) {
            // line 9
            yield "        <div class=\"site-footer--first-col hg:flex hg:flex-col hg:gap-6\">
          ";
            // line 10
            yield from $this->unwrap()->yieldBlock('footer_first', $context, $blocks);
            // line 13
            yield "        </div>
      ";
        }
        // line 15
        yield "
      ";
        // line 16
        if (        $this->unwrap()->hasBlock("footer_last", $context, $blocks)) {
            // line 17
            yield "        <div
          class=\"site-footer--last-col hg:flex hg:flex-col hg:gap-2 hg:md:mx-0 hg:md:ms-auto hg:md:w-xs hg:lg:w-md hg:[&_form]:flex hg:[&_form]:flex-row hg:[&_form]:gap-2 hg:md:[&_form]:items-end\"
        >
          ";
            // line 20
            yield from $this->unwrap()->yieldBlock('footer_last', $context, $blocks);
            // line 23
            yield "        </div>
      ";
        }
        // line 25
        yield "    </div>

    <div
      class=\"site-footer--bottom hg:flex hg:w-full hg:flex-col hg:gap-2 hg:border-t hg:border-(--hgc-footer-border) hg:py-3 hg:text-xs hg:md:grid hg:md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)] hg:md:gap-6 hg:md:py-4\"
    >
      ";
        // line 30
        if (        $this->unwrap()->hasBlock("footer_utility_first", $context, $blocks)) {
            // line 31
            yield "        <div class=\"site-footer--bottom-col\">
          ";
            // line 32
            yield from $this->unwrap()->yieldBlock('footer_utility_first', $context, $blocks);
            // line 35
            yield "        </div>
      ";
        }
        // line 37
        yield "
      ";
        // line 38
        if (        $this->unwrap()->hasBlock("footer_utility_last", $context, $blocks)) {
            // line 39
            yield "        <div class=\"site-footer--bottom-col hg:md:flex hg:md:justify-end\">
          ";
            // line 40
            yield from $this->unwrap()->yieldBlock('footer_utility_last', $context, $blocks);
            // line 43
            yield "        </div>
      ";
        }
        // line 45
        yield "    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["v"]);        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "            ";
        // line 12
        yield "          ";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_last(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "            ";
        // line 22
        yield "          ";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_utility_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "            ";
        // line 34
        yield "          ";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_utility_last(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "            ";
        // line 42
        yield "          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:footer";
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
        return array (  183 => 42,  181 => 41,  174 => 40,  169 => 34,  167 => 33,  160 => 32,  155 => 22,  153 => 21,  146 => 20,  141 => 12,  139 => 11,  132 => 10,  123 => 45,  119 => 43,  117 => 40,  114 => 39,  112 => 38,  109 => 37,  105 => 35,  103 => 32,  100 => 31,  98 => 30,  91 => 25,  87 => 23,  85 => 20,  80 => 17,  78 => 16,  75 => 15,  71 => 13,  69 => 10,  66 => 9,  64 => 8,  57 => 4,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:footer", "themes/contrib/mercury/components/footer/footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 8, "block" => 10];
        static $filters = ["filter" => 1, "merge" => 1, "default" => 1, "escape" => 4, "join" => 4];
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
