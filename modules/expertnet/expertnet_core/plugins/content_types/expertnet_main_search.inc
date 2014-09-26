<?php
/**
 * @file oa_notifications_pane.inc
 */

$plugin = array(
  'title' => t('Expertnet Main Search bar'),
  'description' => t('Provides a search bar for the toolbar that provides Expertnet-specific options.'),
  'single' => TRUE,
  'category' => array(t('Expertnet'), -9),
  'edit form' => 'expertnet_main_search_settings_form',
  'render callback' => 'expertnet_main_search_pane_render',
);


/**
 * Provides the form for the widget.
 */
function expertnet_main_search_settings_form($form, &$form_state) {
  return $form;
}


/**
 * Renders the widget.
 */
function expertnet_main_search_pane_render($subtype, $conf, $args, $context) {
  $block = new stdClass();
  $block->content = array(
    '#theme' => 'expertnet_main_search',
    '#options' => array(
      'area' => t('Areas'),
      'expert' => t('Users'),
      'project' => t('Projects')
    ),
  );

  return $block;
}
