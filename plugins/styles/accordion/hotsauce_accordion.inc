<?php

/**
 * @file
 * The accordian style plugin that is part of hotsauce Theme
 */

// Plugin definition
$plugin = array(
  'title' => t('Accordion Style'),
  'description' => t('Display panes as accordion.'),
  'render region' => 'hot_theme_hotsauce_accordion_style_render_region',
  'settings form' => 'hot_theme_hotsauce_accordion_style_settings_form',
  'weight' => -15,
);

/**
 * Render callback.
 *
 * @ingroup themeable
 */
function theme_hot_theme_hotsauce_accordion_style_render_region($vars) {

  // Include Some Basic Information
  $display = $vars['display'];
  $region_id = $vars['region_id'];
  $panes = $vars['panes'];
  $settings = $vars['settings'];

  if (empty($display->css_id) ) {
    $region_id = 'accordion-panels-' . $region_id;
  }
  else {
    $region_id = 'accordion-' . $display->css_id;
  }

  // Display the Output
  $output = '<div class="drulog-panels-accordion" id="' . $region_id . '">';
  foreach ($panes as $pane_id => $pane) {
    if ($pane_id != 'empty_placeholder') {
      $output .= !empty($display->content[$pane_id]->title) ? '<h4 class="accordion-title">' . $display->content[$pane_id]->title . '</h4>' : '<h4 class="accordion-title">' . '&nbsp;' . '</h4>';
      $output .= '<div class="accordion-content ' . $region_id . '-' . $pane_id . '">' . $pane . '</div>';
    }
  }
  $output .= '</div>' ;

  // Handle the Empty Placeholder Panels IPE Needs
  if (!empty($panes['empty_placeholder'])) {
    $output .= $panes['empty_placeholder'];
  }

  // Inject the Javascript
  $settings_js = array(
    'accordion' => array($region_id  => array('options' => array('header' => 'h4.accordion-title')))
  );
  $settings_js['accordion'][$region_id]['options'] += $settings;
  $settings_js['accordion'][$region_id]['options']['active'] = (int) $settings_js['accordion'][$region_id]['options']['active'];
  drupal_add_js($settings_js, 'setting');
  return $output;
}

function hot_theme_hotsauce_accordion_style_settings_form($style_settings) {
  $form['active'] = array(
    '#type' => 'textfield',
    '#title' => t('Set active'),
    '#description' => t('Set to -1 if you want no pane active'),
    '#default_value' => (isset($style_settings['active'])) ? $style_settings['active'] : 0,
  );
  $form['autoHeight'] = array(
    '#type' => 'checkbox',
    '#title' => t('Set to autoheight'),
    '#return_value' => 1,
    '#default_value' => (isset($style_settings['autoHeight'])) ? $style_settings['autoHeight'] : 1,
  );
  $form['clearStyle'] = array(
    '#type' => 'checkbox',
    '#description' => t("If set, clears height and overflow styles after finishing animations. This enables accordions to work with dynamic content. Won't work together with autoHeight."),
    '#title' => t('Clear heights after animation'),
    '#return_value' => 1,
    '#default_value' => (isset($style_settings['clearStyle'])) ? $style_settings['clearStyle'] : 0,
  );
  $form['collapsible'] = array(
    '#type' => 'checkbox',
    '#description' => t("Whether all the sections can be closed at once. Allows collapsing the active section by the triggering event (click is the default)."),
    '#title' => t('Can close all section'),
    '#return_value' => 1,
    '#default_value' => (isset($style_settings['collapsible'])) ? $style_settings['collapsible'] : 0,
  );
  $form['event'] = array(
    '#type' => 'select',
    '#title' => t('The event on which to trigger the accordion.'),
    '#options' => array('click' => t('On click'), 'mouseover' => t('On mouse over')),
    '#default_value' => (isset($style_settings['event'])) ? $style_settings['event'] : 'click',
  );
  $form['fillSpace'] = array(
    '#type' => 'checkbox',
    '#title' => t('If set, the accordion completely fills the height of the parent element. Overrides autoheight.'),
    '#return_value' => TRUE,
    '#default_value' => (isset($style_settings['event'])) ? $style_settings['event'] : FALSE,
  );
  $form['navigation'] = array(
    '#type' => 'checkbox',
    '#title' => t('If set, looks for the anchor that matches location.href and activates it. Great for href-based state-saving. Use navigationFilter to implement your own matcher..'),
    '#return_value' => TRUE,
    '#default_value' => (isset($style_settings['navigation'])) ? $style_settings['navigation'] : FALSE,
  );

  return $form;
}
