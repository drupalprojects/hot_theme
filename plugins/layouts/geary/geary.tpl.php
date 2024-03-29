<?php
/**
 * @file
 * Template for hotsauce Geary.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display geary clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="geary-container geary-header clearfix panel-panel row-fluid">
    <div class="geary-container-inner geary-header-inner panel-panel-inner span12">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="geary-container geary-column-content clearfix row-fluid">
    <div class="geary-column-content-region geary-column1 panel-panel span4">
      <div class="geary-column-content-region-inner geary-column1-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="geary-column-content-region geary-column2 panel-panel span4">
      <div class="geary-column-content-region-inner geary-column2-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
    <div class="geary-column-content-region geary-column3 panel-panel span4">
      <div class="geary-column-content-region-inner geary-column3-inner panel-panel-inner">
        <?php print $content['column3']; ?>
      </div>
    </div>
  </div>

</div><!-- /.geary -->
