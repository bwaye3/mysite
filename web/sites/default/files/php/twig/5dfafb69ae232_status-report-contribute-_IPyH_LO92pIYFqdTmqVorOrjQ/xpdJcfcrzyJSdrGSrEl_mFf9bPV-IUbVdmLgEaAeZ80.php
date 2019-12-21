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

/* modules/contrib/contribute/templates/status-report-contribute-info.html.twig */
class __TwigTemplate_404941e5758bf392b8ed64d05421ad9915b13d77c72f06862890d8ff6d5badd2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 22];
        $filters = ["escape" => 12, "t" => 15];
        $functions = ["attach_library" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library']
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
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("contribute/status-report-contribute-info"), "html", null, true);
        echo "

<div class=\"system-status-contribute-info system-status-contribute-info\">
  <h2 class=\"system-status-contribute-info__header\">";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Community Information"));
        echo "</h2>
  <div class=\"system-status-contribute-info__items\">
    <div class=\"system-status-contribute-info__item\">
      <span class=\"system-status-contribute-info__item-icon system-status-contribute-info__item-icon--account\" id=\"contribute-info-account\"></span>
      <div class=\"system-status-contribute-info__item-details\">
        <h3 class=\"system-status-contribute-info__item-title\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal.org Account"));
        echo "</h3>
        ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["account"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 22
        if ($this->getAttribute(($context["account"] ?? null), "description", [])) {
            // line 23
            echo "          <br/>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["account"] ?? null), "description", [])), "html", null, true);
            echo "
        ";
        }
        // line 25
        echo "      </div>
    </div>
    <div class=\"system-status-contribute-info__item\">
      <span class=\"system-status-contribute-info__item-icon system-status-contribute-info__item-icon--membership\" id=\"contribute-info-membership\"></span>
      <div class=\"system-status-contribute-info__item-details\">
        <h3 class=\"system-status-contribute-info__item-title\">";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal Association Membership"));
        echo "</h3>
        ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["membership"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 32
        if ($this->getAttribute(($context["membership"] ?? null), "description", [])) {
            // line 33
            echo "          <br/>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["membership"] ?? null), "description", [])), "html", null, true);
            echo "
        ";
        }
        // line 35
        echo "      </div>
    </div>
    <div class=\"system-status-contribute-info__item\">
      <span class=\"system-status-contribute-info__item-icon system-status-contribute-info__item-icon--contribution\" id=\"contribute-info-contribution\"></span>
      <div class=\"system-status-contribute-info__item-details\">
        <h3 class=\"system-status-contribute-info__item-title\">";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contributions to Drupal"));
        echo "</h3>
        ";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["contribution"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 42
        if ($this->getAttribute(($context["contribution"] ?? null), "description", [])) {
            // line 43
            echo "          <br/>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["contribution"] ?? null), "description", [])), "html", null, true);
            echo "
        ";
        }
        // line 45
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/contribute/templates/status-report-contribute-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  125 => 43,  123 => 42,  119 => 41,  115 => 40,  108 => 35,  102 => 33,  100 => 32,  96 => 31,  92 => 30,  85 => 25,  79 => 23,  77 => 22,  73 => 21,  69 => 20,  61 => 15,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/contribute/templates/status-report-contribute-info.html.twig", "/Users/bwaye3/Documents/sites/local.dev.lozin.com/web/modules/contrib/contribute/templates/status-report-contribute-info.html.twig");
    }
}
