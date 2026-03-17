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

/* mercury:logo-grid */
class __TwigTemplate_95f512e375567928c9b4df6bdc9ffb75 extends Template
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
            'logos' => [$this, 'block_logos'],
            'logos_media' => [$this, 'block_logos_media'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--logo-grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:logo-grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:logo-grid"));
        // line 2
        $context["columns_mobile"] = (((($context["behavior_mobile"] ?? null) == "scroll")) ? (false) : (($context["behavior_mobile"] ?? null)));
        // line 3
        $context["scroll_classes_mobile"] = Twig\Extension\CoreExtension::join(["hg:snap-x", "hg:snap-mandatory", "hg:overflow-x-auto", "hg:flex", "hg:flex-nowrap", "hg:justify-start", "hg:relative hg:left-1/2 hg:-translate-x-1/2 hg:w-screen"], " ");
        // line 14
        yield "
";
        // line 15
        $context["grid_classes_mobile"] = Twig\Extension\CoreExtension::join([(((($tmp =         // line 17
($context["columns_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("logo-grid--grid-mobile logo-grid--columns-mobile-" . ($context["columns_mobile"] ?? null))) : ("")), "hg:grid", "hg:justify-stretch", "hg:items-stretch", "hg:grid-cols-[repeat(var(--hgc-columns-mobile),minmax(0,1fr))]"], " ");
        // line 24
        yield "
";
        // line 25
        $context["columns_tablet"] = (((($context["behavior_tablet"] ?? null) == "scroll")) ? (false) : (($context["behavior_tablet"] ?? null)));
        // line 26
        $context["scroll_classes_tablet"] = Twig\Extension\CoreExtension::join(["hg:md:snap-x", "hg:md:snap-mandatory", "hg:md:overflow-x-auto", "hg:md:flex", "hg:md:flex-nowrap", "hg:md:justify-start", "hg:md:relative hg:md:left-1/2 hg:md:-translate-x-1/2 hg:md:w-screen"], " ");
        // line 37
        $context["cancel_grid_classes_tablet"] = Twig\Extension\CoreExtension::join(["hg:md:max-w-[none]", "hg:md:mx-0", "hg:md:justify-[initial]", "hg:md:items-[initial]"], " ");
        // line 38
        yield "
";
        // line 39
        $context["grid_classes_tablet"] = Twig\Extension\CoreExtension::join([(((($tmp =         // line 41
($context["columns_tablet"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("logo-grid--grid-tablet logo-grid--columns-tablet-" . ($context["columns_tablet"] ?? null))) : ("")), "hg:md:container", "hg:md:mx-auto", "hg:md:grid", "hg:md:justify-stretch", "hg:md:items-stretch", "hg:md:grid-cols-[repeat(var(--hgc-columns-tablet),minmax(0,1fr))]"], " ");
        // line 50
        $context["cancel_scroll_classes_tablet"] = Twig\Extension\CoreExtension::join(["hg:md:overflow-x-visible", "hg:md:static hg:md:left-0 hg:md:-translate-x-0 hg:md:w-auto"], " ");
        // line 51
        yield "
";
        // line 52
        $context["columns_desktop"] = (((($context["behavior_desktop"] ?? null) == "scroll")) ? (false) : (($context["behavior_desktop"] ?? null)));
        // line 53
        $context["scroll_classes_desktop"] = Twig\Extension\CoreExtension::join(["hg:xl:snap-x", "hg:xl:snap-mandatory", "hg:xl:overflow-x-auto", "hg:xl:flex", "hg:xl:flex-nowrap", "hg:xl:justify-start", "hg:xl:max-w-[none]", "hg:xl:relative hg:xl:left-1/2 hg:xl:-translate-x-1/2 hg:xl:w-screen"], " ");
        // line 65
        $context["cancel_grid_classes_desktop"] = Twig\Extension\CoreExtension::join(["hg:xl:max-w-[none]", "hg:xl:mx-0", "hg:xl:justify-[initial]", "hg:xl:items-[initial]"], " ");
        // line 66
        yield "
";
        // line 67
        $context["grid_classes_desktop"] = Twig\Extension\CoreExtension::join([(((($tmp =         // line 69
($context["columns_desktop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("logo-grid--grid-desktop logo-grid--columns-desktop-" . ($context["columns_desktop"] ?? null))) : ("")), "hg:xl:container", "hg:xl:mx-auto", "hg:xl:grid", "hg:xl:justify-stretch", "hg:xl:items-stretch", "hg:xl:grid-cols-[repeat(var(--hgc-columns-desktop),minmax(0,1fr))]"], " ");
        // line 78
        $context["cancel_scroll_classes_desktop"] = Twig\Extension\CoreExtension::join(["hg:xl:overflow-x-visible", "hg:xl:static hg:xl:left-0 hg:xl:-translate-x-0 hg:xl:w-auto"], " ");
        // line 79
        yield "
";
        // line 80
        $context["classes"] = ["logo-grid hg:gap-3 hg:min-w-[100%]", (((($tmp =         // line 82
($context["columns_mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["grid_classes_mobile"] ?? null)) : (($context["scroll_classes_mobile"] ?? null))), (((($tmp =         // line 83
($context["columns_tablet"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["grid_classes_tablet"] ?? null)) : (($context["scroll_classes_tablet"] ?? null))), ((( !        // line 84
($context["columns_mobile"] ?? null) !=  !($context["columns_tablet"] ?? null))) ? ((((($tmp = ($context["columns_tablet"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["cancel_scroll_classes_tablet"] ?? null)) : (($context["cancel_grid_classes_tablet"] ?? null)))) : ("")), (((($tmp =         // line 85
($context["columns_desktop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["grid_classes_desktop"] ?? null)) : (($context["scroll_classes_desktop"] ?? null))), ((( !        // line 86
($context["columns_tablet"] ?? null) !=  !($context["columns_desktop"] ?? null))) ? ((((($tmp = ($context["columns_desktop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["cancel_scroll_classes_desktop"] ?? null)) : (($context["cancel_grid_classes_desktop"] ?? null)))) : (""))];
        // line 88
        yield "
";
        // line 89
        $context["styles"] = [("--hgc-columns-desktop:" . ($context["columns_desktop"] ?? null)), ("--hgc-columns-tablet:" . ($context["columns_tablet"] ?? null)), ("--hgc-columns-mobile:" . ($context["columns_mobile"] ?? null))];
        // line 90
        yield "
<div class=\"";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\" style=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["styles"] ?? null), ";"), "html", null, true);
        yield "\">
  ";
        // line 92
        yield from $this->unwrap()->yieldBlock('logos', $context, $blocks);
        // line 109
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["behavior_mobile", "behavior_tablet", "behavior_desktop", "componentMetadata"]);        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logos(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 94
            yield "      ";
            yield from $this->unwrap()->yieldBlock('logos_media', $context, $blocks);
            // line 107
            yield "    ";
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "  ";
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logos_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "        ";
        yield from $this->load("mercury:logo-grid", 95, "697650419")->unwrap()->yield(CoreExtension::merge($context, ["background" => "light", "media" => ["src" => (((("/" . CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["componentMetadata"] ?? null), "path", [], "any", false, false, true, 99)) . "/assets/logo-") . ($context["i"] ?? null)) . "-vanilla-light.png"), "alt" => ("Placeholder logo " .         // line 100
($context["i"] ?? null))]]));
        // line 106
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:logo-grid";
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
        return array (  186 => 106,  184 => 100,  183 => 99,  181 => 95,  174 => 94,  169 => 108,  155 => 107,  152 => 94,  134 => 93,  127 => 92,  120 => 109,  118 => 92,  112 => 91,  109 => 90,  107 => 89,  104 => 88,  102 => 86,  101 => 85,  100 => 84,  99 => 83,  98 => 82,  97 => 80,  94 => 79,  92 => 78,  90 => 69,  89 => 67,  86 => 66,  84 => 65,  82 => 53,  80 => 52,  77 => 51,  75 => 50,  73 => 41,  72 => 39,  69 => 38,  67 => 37,  65 => 26,  63 => 25,  60 => 24,  58 => 17,  57 => 15,  54 => 14,  52 => 3,  50 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:logo-grid", "themes/contrib/mercury/components/logo-grid/logo-grid.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "block" => 92, "for" => 93, "embed" => 95];
        static $filters = ["join" => 12, "escape" => 91];
        static $functions = ["range" => 93];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'embed'],
                ['join', 'escape'],
                ['range'],
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


/* mercury:logo-grid */
class __TwigTemplate_95f512e375567928c9b4df6bdc9ffb75___697650419 extends Template
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

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 95
        return "mercury:tile-logo";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--logo-grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:logo-grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:logo-grid"));
        // line 95
        $this->parent = $this->load("mercury:tile-logo", 95);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:logo-grid";
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
        return array (  285 => 95,  281 => 1,  274 => 95,  186 => 106,  184 => 100,  183 => 99,  181 => 95,  174 => 94,  169 => 108,  155 => 107,  152 => 94,  134 => 93,  127 => 92,  120 => 109,  118 => 92,  112 => 91,  109 => 90,  107 => 89,  104 => 88,  102 => 86,  101 => 85,  100 => 84,  99 => 83,  98 => 82,  97 => 80,  94 => 79,  92 => 78,  90 => 69,  89 => 67,  86 => 66,  84 => 65,  82 => 53,  80 => 52,  77 => 51,  75 => 50,  73 => 41,  72 => 39,  69 => 38,  67 => 37,  65 => 26,  63 => 25,  60 => 24,  58 => 17,  57 => 15,  54 => 14,  52 => 3,  50 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:logo-grid", "themes/contrib/mercury/components/logo-grid/logo-grid.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 95];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends'],
                [],
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
