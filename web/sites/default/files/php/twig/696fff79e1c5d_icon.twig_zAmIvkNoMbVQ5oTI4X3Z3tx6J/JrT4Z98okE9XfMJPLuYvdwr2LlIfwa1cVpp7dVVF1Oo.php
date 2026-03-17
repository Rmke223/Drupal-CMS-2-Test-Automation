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

/* @mercury/components/icon/icon.twig */
class __TwigTemplate_be859545235ed138041977c0940f5be1 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["class_from_weight"] = ["normal" => "ph", "bold" => "ph-bold"];
        // line 5
        yield "
<i class=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["class_from_weight"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[((array_key_exists("weight", $context)) ? (Twig\Extension\CoreExtension::default(($context["weight"] ?? null), "normal")) : ("normal"))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["class_from_weight"] ?? null), ((array_key_exists("weight", $context)) ? (Twig\Extension\CoreExtension::default(($context["weight"] ?? null), "normal")) : ("normal")), [], "array", false, false, true, 6)), "html", null, true);
        yield " ph-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("icon_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_size"] ?? null), "hg:text-base")) : ("hg:text-base")), "html", null, true);
        yield "\"></i>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["weight", "icon", "icon_size"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@mercury/components/icon/icon.twig";
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
        return array (  49 => 6,  46 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@mercury/components/icon/icon.twig", "/var/www/html/web/themes/contrib/mercury/components/icon/icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1];
        static $filters = ["escape" => 6, "default" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'default'],
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
