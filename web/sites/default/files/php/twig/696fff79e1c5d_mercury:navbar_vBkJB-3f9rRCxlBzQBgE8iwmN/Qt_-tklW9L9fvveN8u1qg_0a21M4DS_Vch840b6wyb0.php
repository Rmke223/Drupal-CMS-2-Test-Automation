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

/* mercury:navbar */
class __TwigTemplate_852782ef8891b56f0b84596c9f16838c extends Template
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
            'logo' => [$this, 'block_logo'],
            'navigation' => [$this, 'block_navigation'],
            'links' => [$this, 'block_links'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:navbar"));
        yield "<div
  class=\"navbar hg:relative hg:z-[500] hg:flex hg:justify-between hg:p-2 hg:md:px-0 hg:md:py-4 ";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        // line 3
($context["storybook"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hg:container hg:mx-auto") : ("")));
        // line 6
        yield "\"
>
  <div class=\"navbar--logo hg:self-center\">
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
        // line 12
        yield "  </div>

  ";
        // line 14
        $context["class_from_menu_align"] = ["left" => "hg:md:justify-start", "center" => "hg:md:justify-center", "right" => "hg:md:justify-end"];
        // line 19
        yield "  <div
    class=\"navbar--menu hg:fixed hg:inset-0 hg:top-[calc(var(--drupal-displace-offset-top,0px)+var(--gin-toolbar-height,0px)-var(--navbar-scroll-top,0px))] hg:shrink-1 hg:grow-1 hg:grid-cols-[1fr] hg:grid-rows-[auto_1fr_auto] hg:flex-col hg:items-stretch hg:justify-start hg:pb-8 hg:md:static hg:md:h-auto hg:md:flex-row hg:md:items-center hg:md:pb-0\"
  >
    <div
      class=\"navbar--modal-top hg:relative hg:z-[500] hg:col-span-1 hg:col-start-1 hg:row-span-1 hg:row-start-1 hg:container hg:mx-auto hg:flex hg:w-full hg:justify-between hg:p-2 hg:md:hidden\"
    >
      <div class=\"navbar--modal-logo hg:flex hg:min-h-[44px] hg:flex-1 hg:flex-col hg:items-start hg:justify-center hg:md:hidden\">
        ";
        // line 26
        yield from         $this->unwrap()->yieldBlock("logo", $context, $blocks);
        yield "
      </div>

      <button
        class=\"navbar--hide-menu hg:flex hg:h-[44px] hg:w-[44px] hg:flex-0 hg:cursor-pointer hg:items-center hg:justify-center hg:p-2 hg:md:hidden\"
        aria-label=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide menu"));
        yield "\"
      >
        ";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["icon" => "x", "icon_size" => "hg:text-3xl"]));
        // line 41
        yield "
      </button>
    </div>

    <div
      class=\"navbar--dropdown-menu-wrapper hg:relative hg:col-span-1 hg:col-start-1 hg:row-span-1 hg:row-start-2 hg:min-h-0 hg:w-full hg:flex-1 hg:after:pointer-events-none hg:after:absolute hg:after:bottom-0 hg:after:z-3 hg:after:h-24 hg:after:w-full hg:after:bg-linear-to-b hg:after:from-transparent hg:after:to-body-bg hg:after:content-[''] hg:md:after:content-none\"
    >
      <div
        class=\"navbar--dropdown-menu hg:flex hg:max-h-full hg:flex-col hg:items-stretch hg:justify-start hg:gap-2 hg:overflow-auto hg:pr-[calc((var(--hg-spacing)_*_8)_-_var(--element-scrollbar-width,_0px))] hg:pl-8 hg:md:flex-row hg:md:overflow-visible ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 =         // line 50
($context["class_from_menu_align"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["menu_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_from_menu_align"] ?? null), ($context["menu_align"] ?? null), [], "array", false, false, true, 50)), "html", null, true);
        // line 51
        yield "\"
      >
        ";
        // line 53
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 56
        yield "      </div>
    </div>

    <div
      class=\"navbar--links hg:col-span-1 hg:col-start-1 hg:row-span-1 hg:row-start-3 hg:ml-auto hg:flex hg:w-full hg:flex-initial hg:shrink-0 hg:grow-0 hg:flex-col hg:justify-end hg:gap-2 hg:md:w-auto hg:md:flex-row\"
    >
      ";
        // line 62
        yield from $this->unwrap()->yieldBlock('links', $context, $blocks);
        // line 87
        yield "    </div>
  </div>

  <div
    class=\"navbar--hamburger-container hg:flex hg:min-h-[44px] hg:min-w-[44px] hg:shrink-0 hg:grow-0 hg:items-center hg:justify-center hg:md:hidden\"
  >
    <button class=\"navbar--hamburger hg:flex hg:items-center hg:justify-center\" aria-label=\"";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show menu"));
        yield "\">
      ";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["icon" => "list", "icon_size" => "hg:text-3xl"]));
        // line 102
        yield "
    </button>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["storybook", "menu_align"]);        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/branding/branding.twig"));
        yield "
    ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "
        ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:button", ["variant" => "primary", "label" => t("Button"), "icon" => "arrow-right", "href" => "https://example.com"]));
        // line 73
        yield "

        ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:button", ["variant" => "secondary", "label" => t("Another"), "icon" => "arrow-right", "href" => "https://example.com"]));
        // line 85
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:navbar";
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
        return array (  190 => 85,  188 => 75,  184 => 73,  181 => 63,  174 => 62,  168 => 54,  161 => 53,  153 => 10,  146 => 9,  136 => 102,  134 => 94,  130 => 93,  122 => 87,  120 => 62,  112 => 56,  110 => 53,  106 => 51,  104 => 50,  103 => 49,  93 => 41,  91 => 33,  86 => 31,  78 => 26,  69 => 19,  67 => 14,  63 => 12,  61 => 9,  56 => 6,  54 => 3,  53 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:navbar", "themes/contrib/mercury/components/navbar/navbar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 9, "set" => 14];
        static $filters = ["t" => 31, "escape" => 50];
        static $functions = ["include" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['t', 'escape'],
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
