<?php

/* core/themes/seven/templates/block-content-add-list.html.twig */
class __TwigTemplate_b5ab7373547807f2f530b73c20b833a0c94db259d05c40f545567c49092c285d extends Twig_Template
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
        $tags = array("for" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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

        // line 20
        echo "<ul class=\"admin-list\">
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 22
            echo "    <li class=\"clearfix\">
      <a href=\"";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["type"], "url", array()), "html", null, true));
            echo "\"><span class=\"label\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true));
            echo "</span><div class=\"description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true));
            echo "</div></a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block-content-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 26,  53 => 23,  50 => 22,  46 => 21,  43 => 20,);
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
 * Seven's theme implementation to display a list of custom block types.
 *
 * Displays the list of available custom block types for creation.
 *
 * Available variables:
 * - types: A collection of all the available custom block types.
 *   Each type contains:
 *   - url: A link to add a block of this type.
 *   - description: A description of this custom block type.
 *   - label: The title of the custom block type.
 *   - path: A path for the link to add a block of this type.
 *
 * @see template_preprocess_block_content_add_list()
 * @see seven_preprocess_block_content_add_list()
 */
 #}
<ul class=\"admin-list\">
  {% for type in types %}
    <li class=\"clearfix\">
      <a href=\"{{ type.url }}\"><span class=\"label\">{{ type.label }}</span><div class=\"description\">{{ type.description }}</div></a>
    </li>
  {% endfor %}
</ul>
", "core/themes/seven/templates/block-content-add-list.html.twig", "/home/im1x4il/var/www/html/drupal8/core/themes/seven/templates/block-content-add-list.html.twig");
    }
}
