<?php

namespace Drupal\materialize\Plugin\Process;

use Drupal\materialize\Plugin\PluginBase;
use Drupal\materialize\Utility\Element;
use Drupal\Core\Form\FormStateInterface;

/**
 * Base process class used to process elements.
 *
 * @ingroup plugins_process
 */
class ProcessBase extends PluginBase implements ProcessInterface {

  /**
   * {@inheritdoc}
   */
  public static function process(array $element, FormStateInterface $form_state, array &$complete_form) {
    if (!empty($element['#materialize_ignore_process'])) {
      return $element;
    }
    static::processElement(Element::create($element, $form_state), $form_state, $complete_form);
    return $element;
  }

  /**
   * Process a specific form element.
   *
   * @param \Drupal\materialize\Utility\Element $element
   *   The element object.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @see \Drupal\materialize\Plugin\Process\ProcessBase::process()
   * @see \Drupal\materialize\Plugin\Alter\ElementInfo::alter()
   */
  public static function processElement(Element $element, FormStateInterface $form_state, array &$complete_form) {}

}
