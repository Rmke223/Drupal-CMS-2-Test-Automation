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

/* mercury:pager */
class __TwigTemplate_bcf69df51f75fff0f0fcba860a4fff61 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--pager"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:pager"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:pager"));
        $context["classes"] = ["pager", "hg:my-4"];
        // line 2
        yield "
";
        // line 3
        $context["ellipsis_container_classes"] = ["hg:flex hg:items-center hg:justify-center hg:rounded hg:px-2 hg:py-1.5"];
        // line 4
        yield "
";
        // line 5
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "  <nav class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
            yield "\" role=\"navigation\" aria-labelledby=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 7
            if ((($context["pagination_heading_level"] ?? null) == "h1")) {
                // line 8
                yield "      <h1 id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"hg:sr-only\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h1>
    ";
            } elseif ((            // line 9
($context["pagination_heading_level"] ?? null) == "h2")) {
                // line 10
                yield "      <h2 id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"hg:sr-only\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h2>
    ";
            } elseif ((            // line 11
($context["pagination_heading_level"] ?? null) == "h3")) {
                // line 12
                yield "      <h3 id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"hg:sr-only\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h3>
    ";
            } elseif ((            // line 13
($context["pagination_heading_level"] ?? null) == "h4")) {
                // line 14
                yield "      <h4 id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"hg:sr-only\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h4>
    ";
            } elseif ((            // line 15
($context["pagination_heading_level"] ?? null) == "h5")) {
                // line 16
                yield "      <h5 id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"hg:sr-only\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h5>
    ";
            } elseif ((            // line 17
($context["pagination_heading_level"] ?? null) == "h6")) {
                // line 18
                yield "      <h6 id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"hg:sr-only\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h6>
    ";
            } else {
                // line 20
                yield "      <h2 id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"hg:sr-only\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h2>
    ";
            }
            // line 22
            yield "    <ul class=\"hg:flex hg:list-none hg:items-center hg:justify-center hg:gap-1\">
      ";
            // line 24
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "        <li>
          <a href=\"";
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 26), "href", [], "any", false, false, true, 26), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 26), "attributes", [], "any", false, false, true, 26), "href", "title"), "html", null, true);
                yield ">
            <span class=\"hg:sr-only\">";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
            <span aria-hidden=\"true\" class=\"pager__list-item hg:hover:underline hg:hover:decoration-1 hg:hover:underline-offset-3\">
              ";
                // line 29
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 29), "text", [], "any", true, true, true, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 29), "text", [], "any", false, false, true, 29), t("« First"))) : (t("« First"))), "html", null, true);
                yield "
            </span>
          </a>
        </li>
      ";
            }
            // line 34
            yield "      ";
            // line 35
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "        <li>
          <a
            href=\"";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 38), "href", [], "any", false, false, true, 38), "html", null, true);
                yield "\"
            title=\"";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\"
            rel=\"prev\"
            class=\"hg:flex hg:items-center hg:justify-center hg:gap-1 hg:rounded hg:pe-2 hg:lg:pe-4\"
            ";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), "href", "title", "rel"), "html", null, true);
                yield "
          >
            <span class=\"hg:sr-only\">";
                // line 44
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
            <i class=\"pager__icon ph ph-caret-left hg:flex hg:items-center hg:justify-center hg:px-2 hg:lg:px-4\"></i>
            <span class=\"pager__list-item hg:hover:underline hg:hover:decoration-1 hg:hover:underline-offset-3\" aria-hidden=\"true\">
              ";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 47), "text", [], "any", true, true, true, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 47), "text", [], "any", false, false, true, 47), t("Previous"))) : (t("Previous"))), "html", null, true);
                yield "
            </span>
          </a>
        </li>
      ";
            }
            // line 52
            yield "      ";
            // line 53
            yield "
      ";
            // line 54
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "        <li><span class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["ellipsis_container_classes"] ?? null), " "), "html", null, true);
                yield "\" role=\"presentation\"><i class=\"pager__icon ph ph-caret-left\"></i></span></li>
      ";
            }
            // line 57
            yield "      ";
            // line 58
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 58));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 59
                yield "        <li>
          ";
                // line 60
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 61
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 62
                    yield "            ";
                    $context["page_classes"] = "hg:flex hg:items-center hg:justify-center hg:aspect-square hg:rounded hg:px-2 hg:lg:px-4 hg:border hg:border";
                    // line 63
                    yield "          ";
                } else {
                    // line 64
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" =>                     // line 66
$context["key"]]);
                    // line 69
                    yield "            ";
                    $context["page_classes"] = "hg:hover:underline hg:hover:decoration-1 hg:hover:underline-offset-3 hg:flex hg:items-center hg:justify-center hg:aspect-square hg:rounded hg:px-2 hg:lg:px-4";
                    // line 72
                    yield "          ";
                }
                // line 73
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 73), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\" class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 73), "href", "title"), "html", null, true);
                yield ">
            <span class=\"hg:sr-only\">";
                // line 74
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                yield "</span>
            <span class=\"pager__list-item\">";
                // line 75
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("key", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "key");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "key");
                    }
                }
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("key", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "key");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "key");
                    }
                }
                yield "</span>
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "      ";
            // line 80
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 81
                yield "        <li><span class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["ellipsis_container_classes"] ?? null), " "), "html", null, true);
                yield "\" role=\"presentation\"><i class=\"pager__icon ph ph-caret-right\"></i></span></li>
      ";
            }
            // line 83
            yield "      ";
            // line 84
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 85
                yield "        <li>
          <a
            href=\"";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 87), "href", [], "any", false, false, true, 87), "html", null, true);
                yield "\"
            title=\"";
                // line 88
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\"
            rel=\"next\"
            class=\"hg:flex hg:items-center hg:justify-center hg:gap-1 hg:rounded hg:ps-2 hg:lg:ps-4\"
            ";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 91), "attributes", [], "any", false, false, true, 91), "href", "title", "rel"), "html", null, true);
                yield "
          >
            <span class=\"hg:sr-only\">";
                // line 93
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
            <span class=\"pager__list-item hg:hover:underline hg:hover:decoration-1 hg:hover:underline-offset-3\" aria-hidden=\"true\">
              ";
                // line 95
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 95), "text", [], "any", true, true, true, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 95), "text", [], "any", false, false, true, 95), t("Next"))) : (t("Next"))), "html", null, true);
                yield "
            </span>
            <i class=\"pager__icon ph ph-caret-right hg:flex hg:items-center hg:justify-center hg:px-2 hg:lg:px-4\"></i>
          </a>
        </li>
      ";
            }
            // line 101
            yield "      ";
            // line 102
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "        <li>
          <a href=\"";
                // line 104
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 104), "href", [], "any", false, false, true, 104), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 104), "attributes", [], "any", false, false, true, 104), "href", "title"), "html", null, true);
                yield ">
            <span class=\"hg:sr-only\">";
                // line 105
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
            <span aria-hidden=\"true\" class=\"pager__list-item hg:hover:underline hg:hover:decoration-1 hg:hover:underline-offset-3\">
              ";
                // line 107
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 107), "text", [], "any", true, true, true, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 107), "text", [], "any", false, false, true, 107), t("Last »"))) : (t("Last »"))), "html", null, true);
                yield "
            </span>
          </a>
        </li>
      ";
            }
            // line 112
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:pager";
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
        return array (  358 => 112,  350 => 107,  345 => 105,  337 => 104,  334 => 103,  331 => 102,  329 => 101,  320 => 95,  315 => 93,  310 => 91,  304 => 88,  300 => 87,  296 => 85,  293 => 84,  291 => 83,  285 => 81,  282 => 80,  280 => 79,  256 => 75,  252 => 74,  241 => 73,  238 => 72,  235 => 69,  233 => 66,  231 => 64,  228 => 63,  225 => 62,  222 => 61,  220 => 60,  217 => 59,  212 => 58,  210 => 57,  204 => 55,  202 => 54,  199 => 53,  197 => 52,  189 => 47,  183 => 44,  178 => 42,  172 => 39,  168 => 38,  164 => 36,  161 => 35,  159 => 34,  151 => 29,  146 => 27,  138 => 26,  135 => 25,  132 => 24,  129 => 22,  121 => 20,  113 => 18,  111 => 17,  104 => 16,  102 => 15,  95 => 14,  93 => 13,  86 => 12,  84 => 11,  77 => 10,  75 => 9,  68 => 8,  66 => 7,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:pager", "themes/contrib/mercury/components/pager/pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 5, "for" => 58];
        static $filters = ["escape" => 6, "join" => 6, "t" => 8, "without" => 26, "default" => 29];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'join', 't', 'without', 'default'],
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
