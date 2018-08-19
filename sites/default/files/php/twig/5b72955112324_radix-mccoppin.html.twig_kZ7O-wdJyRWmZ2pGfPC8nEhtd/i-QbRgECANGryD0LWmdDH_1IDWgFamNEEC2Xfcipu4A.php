<?php

/* modules/contrib/radix_layouts/plugins/layouts/radix_mccoppin/radix-mccoppin.html.twig */
class __TwigTemplate_61f57ece2d6d3cd58b8286832da48db0a4273b1cf5c5831fae0d45018a59dce1 extends Twig_Template
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
        $tags = array("if" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 12
        echo "
<div class=\"panel-display mccoppin clearfix ";
        // line 13
        if (($context["classes"] ?? null)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["classes"] ?? null), "html", null, true));
        }
        if (($context["class"] ?? null)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["class"] ?? null), "html", null, true));
        }
        echo "\" ";
        if (($context["css_id"] ?? null)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["css_id"] ?? null), "html", null, true));
        }
        echo ">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4 radix-layouts-column1 panel-panel\">
        <div class=\"panel-panel-inner\">
          ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "column1", array()), "html", null, true));
        echo "
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-column2 panel-panel\">
        <div class=\"panel-panel-inner\">
          ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "column2", array()), "html", null, true));
        echo "
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-column3 panel-panel\">
        <div class=\"panel-panel-inner\">
          ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "column3", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /.mccoppin -->
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/radix_layouts/plugins/layouts/radix_mccoppin/radix-mccoppin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  72 => 24,  64 => 19,  46 => 13,  43 => 12,);
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
 * Template for Radix Mccoppin.
 *
 * Variables:
 * - \$css_id: An optional CSS id to use for the layout.
 * - \$content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
#}

<div class=\"panel-display mccoppin clearfix {% if classes %}{{ classes }}{% endif %}{% if class %}{{ class }}{% endif %}\" {% if css_id %}{{ css_id }}{% endif %}>

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4 radix-layouts-column1 panel-panel\">
        <div class=\"panel-panel-inner\">
          {{ content.column1 }}
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-column2 panel-panel\">
        <div class=\"panel-panel-inner\">
          {{ content.column2 }}
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-column3 panel-panel\">
        <div class=\"panel-panel-inner\">
          {{ content.column3 }}
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /.mccoppin -->
", "modules/contrib/radix_layouts/plugins/layouts/radix_mccoppin/radix-mccoppin.html.twig", "/home/im1x4il/var/www/html/drupal8/modules/contrib/radix_layouts/plugins/layouts/radix_mccoppin/radix-mccoppin.html.twig");
    }
}
