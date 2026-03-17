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

/* @mercury/components/breadcrumb/breadcrumb.twig */
class __TwigTemplate_1a488e97fb1353f80ded74d60039e0ad extends Template
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
        // line 2
        if ((($tmp = ($context["breadcrumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "  ";
            $context["needs_truncation"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["breadcrumb"] ?? null)) > 3);
            // line 4
            yield "
  <nav aria-label=\"breadcrumb\" class=\"breadcrumb hg:mb-2 hg:w-full hg:md:my-3 hg:2xl:my-4\">
    <h2 id=\"system-breadcrumb\" class=\"hg:sr-only\">";
            // line 6
            yield "Breadcrumb";
            yield "</h2>
    <ol class=\"breadcrumb-items hg:m-0 hg:flex hg:list-none hg:flex-row hg:items-center hg:gap-1 hg:p-0 hg:leading-none hg:md:gap-2\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                yield "        ";
                $context["is_first"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 9);
                // line 10
                yield "        ";
                $context["is_last_two"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex", [], "any", false, false, true, 10) <= 2);
                // line 11
                yield "        ";
                $context["should_show"] = (( !($context["needs_truncation"] ?? null) || ($context["is_first"] ?? null)) || ($context["is_last_two"] ?? null));
                // line 12
                yield "
        ";
                // line 13
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "          <li
            class=\"breadcrumb-item hg:flex hg:items-center hg:gap-1 hg:text-xs hg:md:gap-2 hg:md:text-sm hg:2xl:text-base\"
            aria-labelledby=\"";
                    // line 16
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 16), "html", null, true);
                    yield "\"
          >
            <a href=\"";
                    // line 18
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 18), "html", null, true);
                    yield "\" class=\"breadcrumb-home hg:flex hg:items-center hg:no-underline\">
              ";
                    // line 19
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "house", "icon_size" => "hg:text-sm hg:md:text-base"]));
                    // line 28
                    yield "
            </a>
          </li>
        ";
                }
                // line 32
                yield "
        ";
                // line 34
                yield "        ";
                if ((($context["needs_truncation"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 34) == 2))) {
                    // line 35
                    yield "          <li aria-hidden=\"true\" class=\"breadcrumb-dots hg:flex hg:items-center hg:text-xs hg:md:text-sm\">
            ";
                    // line 36
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "dots-three", "icon_size" => "hg:text-sm hg:md:text-base"]));
                    // line 45
                    yield "
          </li>
          <li aria-hidden=\"true\" class=\"breadcrumb-caret hg:flex hg:items-center hg:text-xs hg:md:text-sm\">
            ";
                    // line 48
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "hg:text-sm hg:md:text-base"]));
                    // line 57
                    yield "
          </li>
        ";
                }
                // line 60
                yield "
        ";
                // line 62
                yield "        ";
                if ((($tmp = ($context["should_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 64
                        yield "            <li class=\"breadcrumb-item active hg:flex hg:items-center hg:text-xs hg:md:text-sm hg:2xl:text-base\" aria-current=\"page\">
              ";
                        // line 65
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 65), "html", null, true);
                        yield "
            </li>
          ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 67
$context["item"], "url", [], "any", false, false, true, 67) &&  !($context["is_first"] ?? null))) {
                        // line 68
                        yield "            <li class=\"breadcrumb-item hg:flex hg:items-center hg:text-xs hg:md:text-sm hg:2xl:text-base\">
              <a href=\"";
                        // line 69
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 69), "html", null, true);
                        yield "\" class=\"hg:no-underline hg:hover:underline hg:focus:underline\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 69), "html", null, true);
                        yield "</a>
            </li>
          ";
                    }
                    // line 72
                    yield "
          ";
                    // line 74
                    yield "          ";
                    if (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 74) && (( !($context["needs_truncation"] ?? null) || ($context["is_last_two"] ?? null)) || ($context["is_first"] ?? null)))) {
                        // line 75
                        yield "            <li aria-hidden=\"true\" class=\"breadcrumb-caret hg:flex hg:items-center hg:text-xs hg:md:text-sm\">
              ";
                        // line 76
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "hg:text-sm hg:md:text-base"]));
                        // line 85
                        yield "
            </li>
          ";
                    }
                    // line 88
                    yield "        ";
                }
                // line 89
                yield "      ";
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "    </ol>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@mercury/components/breadcrumb/breadcrumb.twig";
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
        return array (  196 => 90,  182 => 89,  179 => 88,  174 => 85,  172 => 76,  169 => 75,  166 => 74,  163 => 72,  155 => 69,  152 => 68,  150 => 67,  145 => 65,  142 => 64,  139 => 63,  136 => 62,  133 => 60,  128 => 57,  126 => 48,  121 => 45,  119 => 36,  116 => 35,  113 => 34,  110 => 32,  104 => 28,  102 => 19,  98 => 18,  93 => 16,  89 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  58 => 8,  53 => 6,  49 => 4,  46 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@mercury/components/breadcrumb/breadcrumb.twig", "/var/www/html/web/themes/contrib/mercury/components/breadcrumb/breadcrumb.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "set" => 3, "for" => 8];
        static $filters = ["length" => 3, "escape" => 16];
        static $functions = ["include" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape'],
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
