<?php

/* core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig */
class __TwigTemplate_f301b0713f750561586f37417b355448a6c9f02f7bbc6854b6bb0189668876b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 14, "if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        $context["classes"] = array(0 => "layout", 1 => "layout--twocol");
        // line 19
        if (($context["content"] ?? null)) {
            // line 20
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 21
            if ($this->getAttribute(($context["content"] ?? null), "top", array())) {
                // line 22
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--top"), "method"), "html", null, true));
                echo ">
        ";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "top", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 26
            echo "
    ";
            // line 27
            if ($this->getAttribute(($context["content"] ?? null), "first", array())) {
                // line 28
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--first"), "method"), "html", null, true));
                echo ">
        ";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "first", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 32
            echo "
    ";
            // line 33
            if ($this->getAttribute(($context["content"] ?? null), "second", array())) {
                // line 34
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--second"), "method"), "html", null, true));
                echo ">
        ";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "second", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if ($this->getAttribute(($context["content"] ?? null), "bottom", array())) {
                // line 40
                echo "      <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--bottom"), "method"), "html", null, true));
                echo ">
        ";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "bottom", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 44
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  107 => 41,  102 => 40,  100 => 39,  97 => 38,  91 => 35,  86 => 34,  84 => 33,  81 => 32,  75 => 29,  70 => 28,  68 => 27,  65 => 26,  59 => 23,  54 => 22,  52 => 21,  47 => 20,  45 => 19,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a two-column layout.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'layout',
    'layout--twocol',
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {% if content.top %}
      <div {{ region_attributes.top.addClass('layout__region', 'layout__region--top') }}>
        {{ content.top }}
      </div>
    {% endif %}

    {% if content.first %}
      <div {{ region_attributes.first.addClass('layout__region', 'layout__region--first') }}>
        {{ content.first }}
      </div>
    {% endif %}

    {% if content.second %}
      <div {{ region_attributes.second.addClass('layout__region', 'layout__region--second') }}>
        {{ content.second }}
      </div>
    {% endif %}

    {% if content.bottom %}
      <div {{ region_attributes.bottom.addClass('layout__region', 'layout__region--bottom') }}>
        {{ content.bottom }}
      </div>
    {% endif %}
  </div>
{% endif %}
", "core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig", "/home/im1x4il/var/www/html/drupal8/core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig");
    }
}
