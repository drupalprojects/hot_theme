<?php
/**
 * @file
 * Template for hotsauce Moscone.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display moscone clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="moscone-container moscone-header clearfix panel-panel row-fluid">
    <div class="moscone-container-inner moscone-header-inner panel-panel-inner span12">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="moscone-container moscone-column-content clearfix row-fluid">
    <div class="moscone-column-content-region moscone-sidebar panel-panel span3">
      <div class="moscone-column-content-region-inner moscone-sidebar-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
    <div class="moscone-column-content-region moscone-content panel-panel span9">
      <div class="moscone-column-content-region-inner moscone-content-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
  </div>

  <div class="moscone-container moscone-footer clearfix panel-panel row-fluid">
    <div class="moscone-container-inner moscone-footer-inner panel-panel-inner span12">
      <?php print $content['footer']; ?>
    </div>
  </div>

</div><!-- /.moscone -->
