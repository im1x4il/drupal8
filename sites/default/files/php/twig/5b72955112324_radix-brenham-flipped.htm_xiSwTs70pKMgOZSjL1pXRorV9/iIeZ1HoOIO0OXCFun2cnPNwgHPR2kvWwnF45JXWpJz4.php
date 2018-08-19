<?php

/* modules/contrib/radix_layouts/plugins/layouts/radix_brenham_flipped/radix-brenham-flipped.html.twig */
class __TwigTemplate_40f48a9a5dfcc04823c7f0ec005fc3c3452d25680162f408daee9c977d65f0c8 extends Twig_Template
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
<div class=\"panel-display brenham-flipped clearfix ";
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
      <div class=\"col-md-12 radix-layouts-header panel-panel\">
        <div class=\"panel-panel-inner\">
          ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "header", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-8 radix-layouts-content panel-panel\">
        <div class=\"panel-panel-inner\">
          ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "contentmain", array()), "html", null, true));
        echo "
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-sidebar panel-panel\">
        <div class=\"panel-panel-inner\">
          ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "sidebar", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>
    
</div><!-- /.brenham-flipped -->";
    }

    public function getTemplateName()
    {
        return "modules/contrib/radix_layouts/plugins/layouts/radix_brenham_flipped/radix-brenham-flipped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  75 => 27,  64 => 19,  46 => 13,  43 => 12,);
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
 * Template for Radix Brenham Flipped.
 *
 * Variables:
 * - \$css_id: An optional CSS id to use for the layout.
 * - \$content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
#}

<div class=\"panel-display brenham-flipped clearfix {% if classes %}{{ classes }}{% endif %}{% if class %}{{ class }}{% endif %}\" {% if css_id %}{{ css_id }}{% endif %}>

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12 radix-layouts-header panel-panel\">
        <div class=\"panel-panel-inner\">
          {{ content.header }}
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-8 radix-layouts-content panel-panel\">
        <div class=\"panel-panel-inner\">
          {{ content.contentmain }}
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-sidebar panel-panel\">
        <div class=\"panel-panel-inner\">
          {{ content.sidebar }}
        </div>
      </div>
    </div>
  </div>
    
</div><!-- /.brenham-flipped -->", "modules/contrib/radix_layouts/plugins/layouts/radix_brenham_flipped/radix-brenham-flipped.html.twig", "/home/im1x4il/var/www/html/drupal8/modules/contrib/radix_layouts/plugins/layouts/radix_brenham_flipped/radix-brenham-flipped.html.twig");
    }
}
