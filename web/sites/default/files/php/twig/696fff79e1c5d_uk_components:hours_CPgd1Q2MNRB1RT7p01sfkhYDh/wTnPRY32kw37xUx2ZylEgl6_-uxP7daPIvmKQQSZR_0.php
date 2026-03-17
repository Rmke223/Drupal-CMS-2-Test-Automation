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

/* uk_components:hours */
class __TwigTemplate_569f3810b436ad4305ed8262a851f3c9 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.uk_components--hours"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "uk_components:hours"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "uk_components:hours"));
        yield "<div class=\"hours-today\">
  <div class=\"slab\">
    <div class=\"slab__wrapper hours-today__inner\">
      <h2>
        <svg width=\"23\" height=\"23\" viewBox=\"0 0 23 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.4898 0C14.6624 0 17.535 1.28622 19.6143 3.36585C21.6934 5.4453 22.9795 8.318 22.9795 11.4912C22.9795 14.6637 21.6934 17.5357 19.6142 19.6147C17.5349 21.6937 14.6624 22.9795 11.4898 22.9795C8.31712 22.9795 5.44462 21.6937 3.36531 19.6147C1.28609 17.5357 0 14.6637 0 11.4912C0 8.318 1.28607 5.4453 3.36523 3.36585C5.44456 1.28622 8.3171 0 11.4898 0ZM11.4898 2.35294C8.96646 2.35294 6.68233 3.37576 5.02898 5.02939C3.37553 6.68312 2.35294 8.96775 2.35294 11.4912C2.35294 14.014 3.3756 16.2984 5.02918 17.9519C6.68251 19.6053 8.96656 20.628 11.4898 20.628C14.0129 20.628 16.297 19.6053 17.9503 17.9519C19.6039 16.2984 20.6266 14.014 20.6266 11.4912C20.6266 8.96775 19.604 6.68312 17.9505 5.02939C16.2972 3.37576 14.013 2.35294 11.4898 2.35294ZM11.4898 4.08498C11.9012 4.08498 12.2729 4.2517 12.5419 4.52114C12.8108 4.79041 12.977 5.16247 12.977 5.5737V10.8766L16.7236 14.6232C17.0137 14.9133 17.1589 15.2939 17.1589 15.6745C17.1589 16.0551 17.0137 16.4357 16.7255 16.7239C16.4349 17.017 16.0525 17.1618 15.6723 17.1618C15.2896 17.1618 14.9098 17.017 14.6211 16.7259L10.437 12.5432C10.1435 12.2496 10.0006 11.8655 10.0024 11.4801V5.5737C10.0024 5.16247 10.1687 4.79041 10.4376 4.52114C10.7066 4.2517 11.0783 4.08498 11.4898 4.08498Z\" fill=\"black\"/></svg>
        <span>Today's Hours</span>
      </h2>
      <div class=\"hours-today__selector\">
        ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["locations"] ?? null))) > 1)) {
            // line 10
            yield "          <label><span class=\"visually-hidden\">Select a location</span>
            <select name=\"location-selector\">
              ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(($context["locations"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["lid"]) {
                // line 13
                yield "                <option value=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["lid"], "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["locations"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["lid"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["locations"] ?? null), $context["lid"], [], "array", false, false, true, 13)), "name", [], "any", false, false, true, 13), "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lid'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "            </select>
          </label>
        ";
        } else {
            // line 18
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["locations"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["locations"] ?? null)))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["locations"] ?? null), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["locations"] ?? null))), [], "array", false, false, true, 18)), "name", [], "any", false, false, true, 18), "html", null, true);
            yield "
        ";
        }
        // line 20
        yield "      </div>
      <div class=\"hours-today__hours\">
        ";
        // line 22
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["locations"] ?? null))) > 1)) {
            // line 23
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(($context["locations"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["lid"]) {
                // line 24
                yield "            <div class=\"hours-today__location-hours\" data-lid=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["lid"], "html", null, true);
                yield "\">
              ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["locations"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[$context["lid"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["locations"] ?? null), $context["lid"], [], "array", false, false, true, 25)), "info", [], "any", false, false, true, 25), "html", null, true);
                yield "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lid'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "        ";
        } else {
            // line 29
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["locations"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["locations"] ?? null)))] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["locations"] ?? null), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["locations"] ?? null))), [], "array", false, false, true, 29)), "info", [], "any", false, false, true, 29), "html", null, true);
            yield "
        ";
        }
        // line 31
        yield "      </div>
      <div>
        <a class=\"hours-today__all-hours\" href=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["all_hours_url"] ?? null), "html", null, true);
        yield "\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("all_hours_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "all_hours_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "all_hours_title");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["all_hours_title"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("all_hours_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "all_hours_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "all_hours_title");
            }
        }
        yield "</a>
      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["locations", "all_hours_url", "all_hours_title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "uk_components:hours";
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
        return array (  127 => 33,  123 => 31,  117 => 29,  114 => 28,  105 => 25,  100 => 24,  95 => 23,  93 => 22,  89 => 20,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  59 => 10,  57 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "uk_components:hours", "modules/custom/uk_components/components/hours/hours.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 9, "for" => 12];
        static $filters = ["length" => 9, "keys" => 9, "escape" => 13, "first" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 'keys', 'escape', 'first'],
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
