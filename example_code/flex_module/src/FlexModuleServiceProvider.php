<?php

namespace Drupal\flex_module;

use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Drupal\Core\DependencyInjection\ContainerBuilder;


class FlexModuleServiceProvider extends ServiceProviderBase {
  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    // Retrieve definition for the menu.link_tree service.
    $definition = $container->getDefinition('menu.link_tree');
    // Replace class used for service with custom class.
    $definition->setClass('Drupal\flex_module\FlexModuleMenuLinkTree');
  }
}
