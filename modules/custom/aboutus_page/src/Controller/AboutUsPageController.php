<?php
/**
 *@file
 * Contains \Drupal\aboutus_page\Controller\AboutUsPageController.
 */

namespace Drupal\aboutus_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class AboutUsPageController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('This is my menu linked custom about us page'),
    );
  }
}