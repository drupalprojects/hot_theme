<?php
// Plugin definition
$plugin = array(
  'title' => t('Webb Flipped'),
  'icon' => 'webb-flipped.png',
  'category' => t('hotsauce'),
  'theme' => 'webb_flipped',
  'css' => 'webb-flipped.css',
  'regions' => array(
    'header' => t('Header'),
    'sidebar' => t('Sidebar'),
    'contentheader' => t('Content Header'),
    'contentcolumn1' => t('Content Column 1'),
    'contentcolumn2' => t('Content Column 2'),
  ),
);
