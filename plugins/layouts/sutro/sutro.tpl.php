<?php
/**
 * @file
 * Template for hotsauce Sutro.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display sutro clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="sutro-container sutro-header clearfix panel-panel row-fluid">
    <div class="sutro-container-inner sutro-header-inner panel-panel-inner span12">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="sutro-container sutro-column-content clearfix row-fluid">
    <div class="sutro-column-content-region sutro-column1 sutro-column panel-panel span6">
      <div class="sutro-column-content-region-inner sutro-column1-inner sutro-column-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="sutro-column-content-region sutro-column2 sutro-column panel-panel span6">
      <div class="sutro-column-content-region-inner sutro-column2-inner sutro-column-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
  </div>

  <div class="sutro-container sutro-footer clearfix panel-panel row-fluid">
    <div class="sutro-container-inner sutro-footer-inner panel-panel-inner span12">
      <?php print $content['footer']; ?>
    </div>
  </div>

</div><!-- /.sutro -->
