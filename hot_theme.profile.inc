<?php
/**
 * @file
 * hot_theme.profile.inc
 */

/**
 * Add an install task to allow selection of the theme
 */
function hot_theme_profile_theme_selection_install_task(&$install_task) {
  $tasks['hot_theme_selection_form'] = array(
    'display_name' => t('Choose a theme'),
    'type' => 'form',
  );
  return $tasks;
}

/**
 * Form to choose the starting theme from list of available options
 */
function hot_theme_selection_form($form, &$form_state) {

  // Set the page title
  drupal_set_title(t('Choose a theme'));

  // Create a list of theme options, minus the admin and testing themes
  $themes = array();
  foreach (system_rebuild_theme_data() as $theme) {
    if (!in_array($theme->name, array('test_theme', 'update_test_basetheme', 'update_test_subtheme', 'block_test_theme', 'stark', 'seven'))) {
      $themes[$theme->name] = theme('image', array('path' => $theme->info['screenshot'])) . '<strong>' . $theme->info['name'] . '</strong><br><p><em>' . $theme->info['description'] . '</em></p><p class="clearfix"></p>';
    }
  }

  $form['theme_wrapper'] = array(
    '#title' => t('Starting Theme'),
    '#type' => 'fieldset',
  );

  $form['theme_wrapper']['theme'] = array(
    '#type' => 'radios',
    '#options' => $themes,
    '#default_value' => 'responsive_bartik',
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Choose theme',
  );

  return $form;
}

/**
 * Form submit handler to select the theme
 */
function hot_theme_selection_form_submit($form, &$form_state) {

  // Enable and set the theme of choice
  $theme = $form_state['values']['theme'];
  theme_enable(array($theme));
  variable_set('theme_default', $theme);

  // Set the Bartik or Garland logo to be hotsauce's logo
  if ($theme == 'bartik' || $theme == 'garland' || $theme == 'responsive_bartik') {
    $theme_data = _system_rebuild_theme_data();
    $theme_data[$theme]->info['settings']['default_logo'] = 0;
    $theme_data[$theme]->info['settings']['logo_path'] = drupal_get_path('module', 'hot_theme') . '/images/hotsauce_icon_theme.png';
    variable_set('theme_' . $theme . '_settings', $theme_data[$theme]->info['settings']);
  }

  // Flush theme caches so things are right
  system_rebuild_theme_data();
  drupal_theme_rebuild();
}
