<?php

/**
 * Implements hook_js_alter().
 * The base theme thinks the Bootstrap library was put in it's folder, replace it with our own.
 */
function bootstrap_subtheme_js_alter(&$js) {
  $base_js = drupal_get_path('theme', 'bootstrap') . '/bootstrap/js/bootstrap.js';
  $theme_js_path = drupal_get_path('theme', 'bootstrap_subtheme') . '/bootstrap/js/bootstrap-';
  if (isset($js[$base_js])) {
    unset($js[$base_js]);
    // Add Bootstrap JS libraries. Comment out the ones you don't want.
    drupal_add_js($theme_js_path . 'affix.js');
    drupal_add_js($theme_js_path . 'alert.js');
    drupal_add_js($theme_js_path . 'button.js');
    drupal_add_js($theme_js_path . 'carousel.js');
    drupal_add_js($theme_js_path . 'collapse.js');
    drupal_add_js($theme_js_path . 'dropdown.js');
    drupal_add_js($theme_js_path . 'modal.js');
    drupal_add_js($theme_js_path . 'tooltip.js');
    drupal_add_js($theme_js_path . 'popover.js');
    drupal_add_js($theme_js_path . 'scrollspy.js');
    drupal_add_js($theme_js_path . 'tab.js');
    drupal_add_js($theme_js_path . 'transition.js');
    drupal_add_js($theme_js_path . 'typeahead.js');
  }
}

/**
 * Implements hook_preprocess_region().
 * Add additional classes to block group regions.
 */
function bootstrap_subtheme_preprocess_region(&$variables) {
  if (strpos($variables['region'], 'blockgroup-') === 0) {
    $variables['classes_array'][] = 'row-fluid';
    $variables['classes_array'][] = 'equal-height-container';
  }
}
