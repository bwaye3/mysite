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

/* modules/custom/gavias_view/templates/views-view-gvaonefour.html.twig */
class __TwigTemplate_ac3ba80b2db4a67f2426841a09a9242f702591edf319ce6709d5f7b675101cdf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 9, "for" => 11];
        $filters = ["escape" => 2, "raw" => 17, "length" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'raw', 'length'],
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
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "   
  ";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "    <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
  ";
        }
        // line 8
        echo "
  ";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "    ";
        $context["j"] = 0;
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "    ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 13
            echo "    ";
            $context["j"] = (($context["j"] ?? null) + 1);
            // line 14
            echo "    ";
            if ((($context["i"] ?? null) == 1)) {
                echo "<div class=\"big-row row\">";
            }
            // line 15
            echo "      ";
            if ((($context["i"] ?? null) == 1)) {
                // line 16
                echo "        <div class=\"item index-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null)), "html", null, true);
                echo " first-item col-md-6 col-sm-12 col-xs-12\">
          <div";
                // line 17
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
                echo "</div>
        </div>
      ";
            } else {
                // line 20
                echo "        ";
                if ((($context["i"] ?? null) == 2)) {
                    echo " <div class=\"small-items col-md-6 col-sm-12 col-xs-12\">";
                }
                // line 21
                echo "          ";
                if (((($context["i"] ?? null) % 2) == 0)) {
                    echo "<div class=\"row\">";
                }
                // line 22
                echo "            <div class=\"item index-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null)), "html", null, true);
                echo " col-sm-6 col-xs-12\">
              <div";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
                echo "</div>
            </div>
          ";
                // line 25
                if ((((($context["i"] ?? null) % 2) == 1) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " </div> ";
                }
                // line 26
                echo "        ";
                if (((($context["i"] ?? null) == 5) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " </div>";
                }
                echo "    
      ";
            }
            // line 28
            echo "    ";
            if (((($context["i"] ?? null) == 5) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                echo "</div>";
            }
            // line 29
            echo "    ";
            if ((($context["i"] ?? null) == 5)) {
                $context["i"] = 0;
            }
            // line 30
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 32
        if (($context["attributes"] ?? null)) {
            // line 33
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/gavias_view/templates/views-view-gvaonefour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 33,  167 => 32,  164 => 31,  158 => 30,  153 => 29,  148 => 28,  140 => 26,  136 => 25,  129 => 23,  124 => 22,  119 => 21,  114 => 20,  106 => 17,  101 => 16,  98 => 15,  93 => 14,  90 => 13,  87 => 12,  82 => 11,  79 => 10,  77 => 9,  74 => 8,  68 => 6,  66 => 5,  63 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/gavias_view/templates/views-view-gvaonefour.html.twig", "/Users/bwaye3/Documents/sites/local.dev.lozin.com/web/modules/custom/gavias_view/templates/views-view-gvaonefour.html.twig");
    }
}
