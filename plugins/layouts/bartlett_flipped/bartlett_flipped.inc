<?php
// Plugin definition
$plugin = array(
  'title' => t('Bartlett Flipped'),
  'icon' => 'bartlett-flipped.png',
  'category' => t('hotsauce'),
  'theme' => 'bartlett_flipped',
  'css' => 'bartlett-flipped.css',
  'regions' => array(
    'sidebar' => t('Sidebar'),
    'contentheader' => t('Content Header'),
    'contentcolumn1' => t('Content Column 1'),
    'contentcolumn2' => t('Content Column 2'),
  ),
);
