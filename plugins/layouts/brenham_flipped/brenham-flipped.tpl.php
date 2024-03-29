<?php
/**
 * @file
 * Template for hotsauce Brenham Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display brenham-flipped clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="brenham-flipped-container brenham-flipped-header clearfix panel-panel row-fluid">
    <div class="brenham-flipped-container-inner brenham-flipped-header-inner panel-panel-inner span12">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="brenham-flipped-container brenham-flipped-column-content clearfix row-fluid">
    <div class="brenham-flipped-column-content-region brenham-flipped-content panel-panel span9">
      <div class="brenham-flipped-column-content-region-inner brenham-flipped-content-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
    <div class="brenham-flipped-column-content-region brenham-flipped-sidebar panel-panel span3">
      <div class="brenham-flipped-column-content-region-inner brenham-flipped-sidebar-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
  </div>
</div><!-- /.brenham-flipped -->
