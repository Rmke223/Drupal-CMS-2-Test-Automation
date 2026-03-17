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

/* uk_components:apple-gallery */
class __TwigTemplate_cdf7e6bdd39eacb755209450bea38da8 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.uk_components--apple-gallery"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "uk_components:apple-gallery"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "uk_components:apple-gallery"));
        // line 2
        $context["gallery_theme"] = ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "dark")) : ("dark"));
        // line 3
        yield "
<section class=\"apple-gallery apple-gallery--";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["gallery_theme"] ?? null), "html", null, true);
        yield "\">
  <div class=\"apple-gallery__header\">
    <h2 class=\"apple-gallery__title\">";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default(($context["title"] ?? null), "Endless entertainment.")) : ("Endless entertainment.")), "html", null, true);
        yield "</h2>
  </div>
  <div class=\"apple-gallery__track\" role=\"list\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("items", $context)) ? (Twig\Extension\CoreExtension::default(($context["items"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            yield "      <article class=\"apple-gallery__item\" role=\"listitem\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 10) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 10), "src", [], "any", false, false, true, 10))) {
                yield "style=\"background-image:url(";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 10), "src", [], "any", false, false, true, 10), "html", null, true);
                yield ")\"";
            }
            yield ">
        <div class=\"apple-gallery__overlay\">
          ";
            // line 12
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 12) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 12), "src", [], "any", false, false, true, 12))) {
                // line 13
                yield "            <img class=\"apple-gallery__logo\" src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 13), "src", [], "any", false, false, true, 13), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, true, true, 13), "alt", [], "any", true, true, true, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 13), "alt", [], "any", false, false, true, 13), "")) : ("")), "html", null, true);
                yield "\"
              ";
                // line 14
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 14), "width", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "width=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 14), "width", [], "any", false, false, true, 14), "html", null, true);
                    yield "\"";
                }
                // line 15
                yield "              ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 15), "height", [], "any", false, false, true, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "height=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "logo_image", [], "any", false, false, true, 15), "height", [], "any", false, false, true, 15), "html", null, true);
                    yield "\"";
                }
                // line 16
                yield "              loading=\"lazy\" decoding=\"async\" />
          ";
            }
            // line 18
            yield "          <h3 class=\"apple-gallery__item-title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 18), "html", null, true);
            yield "</h3>
          ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "genre", [], "any", false, false, true, 19) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "note", [], "any", false, false, true, 19))) {
                // line 20
                yield "            <p class=\"apple-gallery__meta\">
              ";
                // line 21
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "genre", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"apple-gallery__genre\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "genre", [], "any", false, false, true, 21), "html", null, true);
                    yield "</span>";
                }
                // line 22
                yield "              ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "note", [], "any", false, false, true, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "note", [], "any", false, false, true, 22), "html", null, true);
                }
                // line 23
                yield "            </p>
          ";
            }
            // line 25
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cta_text", [], "any", false, false, true, 25) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cta_url", [], "any", false, false, true, 25))) {
                // line 26
                yield "            <a class=\"apple-gallery__cta\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cta_url", [], "any", false, false, true, 26), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cta_text", [], "any", false, false, true, 26), "html", null, true);
                yield "</a>
          ";
            }
            // line 28
            yield "        </div>
      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "title", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "uk_components:apple-gallery";
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
        return array (  148 => 31,  140 => 28,  132 => 26,  129 => 25,  125 => 23,  120 => 22,  114 => 21,  111 => 20,  109 => 19,  104 => 18,  100 => 16,  93 => 15,  87 => 14,  80 => 13,  78 => 12,  68 => 10,  64 => 9,  58 => 6,  53 => 4,  50 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "uk_components:apple-gallery", "modules/custom/uk_components/components/apple-gallery/apple-gallery.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "for" => 9, "if" => 10];
        static $filters = ["default" => 2, "escape" => 4];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 'escape'],
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
