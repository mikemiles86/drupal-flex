<?php

namespace Drupal\flex_module;
use Drupal\Core\Menu\MenuLinkTree;

/**
 * Custom implementation of MenuLinkTree Service.
 */
class FlexModuleMenuLinkTree extends MenuLinkTree {
  // Overrides \Drupal\Core\Menu\MenuLinkTree::build().
  public function build(array $tree) {
    // Call parent build method.
    $build = parent::build($tree);
    // Are there menu items and is this going to be the main menu?
    if (isset($build['#items']) && $build['#theme'] == 'menu__main') {
      // Set a counter as array keys are strings/
      $n = 0;
      foreach ($build['#items'] as &$item ) {
        // On the 8th menu item?
        if (++$n == 8) {
          // Change Title
          $item['title'] .= ' Alt';
          // Add inline styling.
          $item['url']->setOption('attributes', array(
            'style' => 'color:#00F;background:#FFA500;',
          ));
        }
        // Pointing to node/8 ?
        if ($item['url']->toString() == '/node/8') {
          // Alter the title.
          $item['title'] .= ' Alt';
        }
      }
    }
    return $build;
  }
}
