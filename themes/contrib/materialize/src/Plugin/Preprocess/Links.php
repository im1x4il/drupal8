<?php

namespace Drupal\materialize\Plugin\Preprocess;

use Drupal\materialize\Annotation\MaterializePreprocess;
use Drupal\materialize\Utility\Element;
use Drupal\materialize\Utility\Variables;

/**
 * Pre-processes variables for the "links" theme hook.
 *
 * @ingroup plugins_preprocess
 *
 * @MaterializePreprocess("links")
 */
class Links extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
  public function preprocessVariables(Variables $variables) {
    if ($variables->theme_hook_original === 'links' && $variables->hasClass('operations')) {
      $variables->addClass('list-inline');
      foreach ($variables->links as &$data) {
        $link = Element::create($data['link']);
        $link->addClass(['btn']);
        // todo: add these functions.
        $link->colorize();
        $link->setIcon();
        if ($this->theme->getSetting('tooltip_enabled')) {
          $link->setAttribute('data-toggle', 'tooltip');
          $link->setAttribute('data-placement', 'bottom');
        }
      }
    }
    $this->preprocessAttributes();
  }

}
