<?php
/**
 * @file
 * Contains \Drupal\materialize\Plugin\Alter\ElementInfo.
 */

namespace Drupal\materialize\Plugin\Alter;

use Drupal\materialize\Annotation\MaterializeAlter;
use Drupal\materialize\Materialize;
use Drupal\materialize\Plugin\PluginBase;
use Drupal\materialize\Plugin\PrerenderManager;
use Drupal\materialize\Plugin\ProcessManager;

/**
 * Implements hook_element_info_alter().
 *
 * @ingroup plugins_alter
 *
 * @MaterializeAlter("element_info")
 */
class ElementInfo extends PluginBase implements AlterInterface {

  /**
   * {@inheritdoc}
   */
  public function alter(&$types, &$context1 = NULL, &$context2 = NULL) {
    // Sort the types for easier debugging.
    ksort($types, SORT_NATURAL);

    $process_manager = new ProcessManager($this->theme);
    $pre_render_manager = new PrerenderManager($this->theme);

    foreach (array_keys($types) as $type) {
      $element = &$types[$type];

      // By default, the "checkboxes" and "radios" element types invoke
      // CompositeFormElementTrait::preRenderCompositeFormElement which wraps
      // the element in a fieldset and thus ultimately a panel. This isn't
      // (usually) the desired effect for these elements, so to avoid rendering
      // them as Materialize panels, the #materialize_panel should be set to FALSE
      // by default. This allows those who wish to opt back in to do so.
      if ($type === 'checkboxes' || $type === 'radios') {
        $element['#materialize_panel'] = FALSE;
      }

      // Core does not actually use the "description_display" property on the
      // "details" or "fieldset" element types because the positioning of the
      // description is never used in core templates. However, the form builder
      // automatically applies the value of "after", thus making it impossible
      // to detect a valid value later in the rendering process. It looks better
      // for the "details" and "fieldset" element types to display as "before".
      // @see \Drupal\Core\Form\FormBuilder::doBuildForm()
      if ($type === 'details' || $type === 'fieldset') {
        $element['#description_display'] = 'before';
        $element['#panel_type'] = 'default';
      }

      // Add extra variables to all elements.
      foreach (Materialize::extraVariables() as $key => $value) {
        if (!isset($variables["#$key"])) {
          $variables["#$key"] = $value;
        }
      }

      // Only continue if the type isn't "form" (as it messes up AJAX).
      if ($type !== 'form') {
        $regex = "/^$type/";

        // Add necessary #process callbacks.
        $element['#process'][] = [get_class($process_manager), 'process'];
        $definitions = $process_manager->getDefinitionsLike($regex);
        foreach ($definitions as $definition) {
          Materialize::addCallback($element['#process'], [$definition['class'], 'process'], $definition['replace'], $definition['action']);
        }

        // Add necessary #pre_render callbacks.
        $element['#pre_render'][] = [get_class($pre_render_manager), 'preRender'];
        foreach ($pre_render_manager->getDefinitionsLike($regex) as $definition) {
          Materialize::addCallback($element['#pre_render'], [$definition['class'], 'preRender'], $definition['replace'], $definition['action']);
        }
      }
    }
  }

}
