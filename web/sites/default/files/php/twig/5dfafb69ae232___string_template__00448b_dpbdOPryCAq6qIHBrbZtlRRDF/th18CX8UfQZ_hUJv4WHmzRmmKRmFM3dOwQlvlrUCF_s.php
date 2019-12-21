<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__00448b3fc56daadfa5ac46f859a8123a05aeb17b2f8def3862fdc911b1bfe50d */
class __TwigTemplate_b048ea0e5e1967504d1fa5d30a39ca7d73b024fc99830b408ea2582b99f0376d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"listing-category-block\">
    <div class=\"cat-image\">
         ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_listing_category_image"] ?? null)), "html", null, true);
        echo "
         <div class=\"cat-icon bg-";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_listing_category_color"] ?? null)), "html", null, true);
        echo "\"><i class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_listing_category_icon"] ?? null)), "html", null, true);
        echo "\"></i></div>
     </div>
     <div class=\"content-inner\">
          <h3 class=\"cat-name\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
        echo "</h3>
          <div class=\"cat-desc\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description__value"] ?? null)), "html", null, true);
        echo "</div>
     </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__00448b3fc56daadfa5ac46f859a8123a05aeb17b2f8def3862fdc911b1bfe50d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  71 => 7,  63 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__00448b3fc56daadfa5ac46f859a8123a05aeb17b2f8def3862fdc911b1bfe50d", "");
    }
}
