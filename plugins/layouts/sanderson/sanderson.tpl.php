<?php
/**
 * @file
 * Template for hotsauce Sanderson.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display sanderson clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="sanderson-container sanderson-column-content sanderson-column-content-row1 clearfix row-fluid">
    <div class="sanderson-column-content-region sanderson-column1 panel-panel span6">
      <div class="sanderson-column-content-region-inner sanderson-column1-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="sanderson-column-content-region sanderson-column2 panel-panel span6">
      <div class="sanderson-column-content-region-inner sanderson-column2-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
  </div>

  <div class="sanderson-container sanderson-secondary-column-content sanderson-column-content-row2 clearfix row-fluid">
    <div class="sanderson-secondary-column-content-region sanderson-secondary-column1 panel-panel span4">
      <div class="sanderson-secondary-column-content-region-inner sanderson-secondary-column1-inner panel-panel-inner">
        <?php print $content['secondarycolumn1']; ?>
      </div>
    </div>
    <div class="sanderson-secondary-column-content-region sanderson-secondary-column2 panel-panel span4">
      <div class="sanderson-secondary-column-content-region-inner sanderson-secondary-column2-inner panel-panel-inner">
        <?php print $content['secondarycolumn2']; ?>
      </div>
    </div>
    <div class="sanderson-secondary-column-content-region sanderson-secondary-column3 panel-panel span4">
      <div class="sanderson-secondary-column-content-region-inner sanderson-secondary-column3-inner panel-panel-inner">
        <?php print $content['secondarycolumn3']; ?>
      </div>
    </div>
  </div>

</div><!-- /.sanderson -->
