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

/* mercury:group */
class __TwigTemplate_6674bcd70fc201479fdbf783d7cc9588 extends Template
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
            'group_slot' => [$this, 'block_group_slot'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--group"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:group"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:group"));
        $context["class_map"] = ["background" => ["brand" => "hg:bg-brand", "brand-light" => "hg:bg-brand-light", "brand-dark" => "hg:bg-brand-dark", "accent" => "hg:bg-accent", "accent-light" => "hg:bg-accent-light", "accent-dark" => "hg:bg-accent-dark"], "flex_direction" => ["column" => "hg:flex-col", "row" => "hg:flex-row", "column-reverse" => "hg:flex-col-reverse", "row-reverse" => "hg:flex-row-reverse"], "radius" => ["sm" => "hg:rounded-sm", "md" => "hg:rounded-md", "lg" => "hg:rounded-lg", "xl" => "hg:rounded-xl"], "flex_gap" => ["sm" => "hg:gap-4", "md" => "hg:gap-8", "lg" => "hg:gap-16", "xl" => "hg:gap-32"], "padding" => ["sm" => "hg:p-4", "md" => "hg:p-8", "lg" => "hg:p-16", "xl" => "hg:p-32"], "flex_align" => ["start" => "hg:self-start", "end" => "hg:self-end", "center" => "hg:self-center"]];
        // line 40
        yield "
";
        // line 41
        $context["classes"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, ["group", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["class_map"] ?? null), "flex_direction", [], "array", false, true, true, 44), ($context["flex_direction"] ?? null), [], "array", true, true, true, 44) &&  !(null === (($_v0 = (($_v1 = ($context["class_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_direction", [], "array", false, false, true, 44))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["flex_direction"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["class_map"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_direction", [], "array", false, false, true, 44)), ($context["flex_direction"] ?? null), [], "array", false, false, true, 44))))) ? ((($_v3 = (($_v4 = ($context["class_map"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_direction", [], "array", false, false, true, 44))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[($context["flex_direction"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["class_map"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["flex_direction"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_direction", [], "array", false, false, true, 44)), ($context["flex_direction"] ?? null), [], "array", false, false, true, 44))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["class_map"] ?? null), "flex_align", [], "array", false, true, true, 45), ($context["flex_align"] ?? null), [], "array", true, true, true, 45) &&  !(null === (($_v6 = (($_v7 = ($context["class_map"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_align", [], "array", false, false, true, 45))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[($context["flex_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["class_map"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_align", [], "array", false, false, true, 45)), ($context["flex_align"] ?? null), [], "array", false, false, true, 45))))) ? ((($_v9 = (($_v10 = ($context["class_map"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_align", [], "array", false, false, true, 45))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9[($context["flex_align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["class_map"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["flex_align"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_align", [], "array", false, false, true, 45)), ($context["flex_align"] ?? null), [], "array", false, false, true, 45))) : ("")), (((($tmp =         // line 46
($context["flex_gap"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v12 = (($_v13 = ($context["class_map"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["flex_gap"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_gap", [], "array", false, false, true, 46))) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12[($context["flex_gap"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v14 = ($context["class_map"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["flex_gap"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "flex_gap", [], "array", false, false, true, 46)), ($context["flex_gap"] ?? null), [], "array", false, false, true, 46))) : ("")), (((($tmp =         // line 47
($context["radius"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v15 = (($_v16 = ($context["class_map"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "radius", [], "array", false, false, true, 47))) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15[($context["radius"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v17 = ($context["class_map"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["radius"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "radius", [], "array", false, false, true, 47)), ($context["radius"] ?? null), [], "array", false, false, true, 47))) : ("")), (((($tmp =         // line 48
($context["padding"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v18 = (($_v19 = ($context["class_map"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["padding"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding", [], "array", false, false, true, 48))) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18[($context["padding"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v20 = ($context["class_map"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["padding"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "padding", [], "array", false, false, true, 48)), ($context["padding"] ?? null), [], "array", false, false, true, 48))) : ("")), (((($tmp =         // line 49
($context["background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v21 = (($_v22 = ($context["class_map"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22["background"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "background", [], "array", false, false, true, 49))) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21[($context["background"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v23 = ($context["class_map"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23["background"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_map"] ?? null), "background", [], "array", false, false, true, 49)), ($context["background"] ?? null), [], "array", false, false, true, 49))) : ("hg:bg-none"))],         // line 51
function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !Twig\Extension\CoreExtension::testEmpty(($context["c"] ?? null)); }), " ");
        // line 54
        yield "<div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["classes"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 55
        yield from $this->unwrap()->yieldBlock('group_slot', $context, $blocks);
        // line 58
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["flex_direction", "flex_align", "flex_gap", "radius", "padding", "background", "c"]);        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_group_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:group";
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
        return array (  83 => 56,  76 => 55,  69 => 58,  67 => 55,  62 => 54,  60 => 51,  59 => 49,  58 => 48,  57 => 47,  56 => 46,  55 => 45,  54 => 44,  53 => 41,  50 => 40,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:group", "themes/contrib/mercury/components/group/group.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 55];
        static $filters = ["join" => 52, "filter" => 51, "escape" => 54];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['join', 'filter', 'escape'],
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
