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

/* mercury:hero-full-width */
class __TwigTemplate_857180722a66c6bcd5588d01a893598f extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--hero-full-width"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:hero-full-width"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:hero-full-width"));
        $context["classes"] = ["hero-fullwidth", ((CoreExtension::inFilter("media-last", ($context["layout"] ?? null))) ? ("hg:flex-col-reverse") : ("hg:flex-col"))];
        // line 2
        yield "
<section class=\"";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  <div class=\"hero-fullwidth--media hg:aspect-4/3 hg:overflow-hidden hg:sm:aspect-2/1\">
    ";
        // line 5
        yield from $this->unwrap()->yieldBlock('hero_media', $context, $blocks);
        // line 8
        yield "  </div>
  <div class=\"hero-fullwidth--content\">
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('hero_content', $context, $blocks);
        // line 21
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["layout", "media", "font_size"]);        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "      <img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 6), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "alt", [], "any", false, false, true, 6), "html", null, true);
        yield "\" class=\"hg:h-full hg:w-full hg:object-cover\" />
    ";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:heading", ["url" => "No URL", "font_size" => ((        // line 16
array_key_exists("font_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["font_size"] ?? null), "default")) : ("default"))]));
        // line 19
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:hero-full-width";
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
        return array (  103 => 19,  101 => 16,  99 => 11,  92 => 10,  82 => 6,  75 => 5,  67 => 21,  65 => 10,  61 => 8,  59 => 5,  54 => 3,  51 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:hero-full-width", "themes/contrib/mercury/components/hero-full-width/hero-full-width.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 5];
        static $filters = ["escape" => 3, "join" => 3, "default" => 16];
        static $functions = ["include" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['escape', 'join', 'default'],
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
