<?php
/**
 * @file
 * Template for hotsauce Burr.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display burr clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="burr-container burr-content-container clearfix row-fluid">
    <div class="burr-sidebar burr-content-region panel-panel span4">
      <div class="burr-sidebar-inner burr-content-region-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
    <div class="burr-content burr-content-region panel-panel span8">
      <div class="burr-content-inner burr-content-region-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
  </div>

</div><!-- /.burr -->
