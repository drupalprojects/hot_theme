<?php
/**
 * @file
 * Template for hotsauce Bartlett.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display bartlett clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row-fluid">
    <div class="bartlett-sidebar bartlett-column-content-region bartlett-column bartlett-container panel-panel span3">
      <div class="bartlett-sidebar-inner bartlett-column-content-region-inner bartlett-column-inner bartlett-container-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>

    <div class="bartlett-content-container bartlett-container span9">
      <div class="bartlett-column-content-region bartlett-content-header clearfix panel-panel row-fluid">
        <div class="bartlett-column-content-region-inner bartlett-content-header-inner panel-panel-inner span12">
          <?php print $content['contentheader']; ?>
        </div>
      </div>

      <div class="bartlett-content-container-column-container clearfix row-fluid">
        <div class="bartlett-column-content-region bartlett-content-column1 bartlett-column panel-panel span6">
          <div class="bartlett-column-content-region-inner bartlett-content-column1-inner bartlett-column-inner panel-panel-inner">
            <?php print $content['contentcolumn1']; ?>
          </div>
        </div>
        <div class="bartlett-column-content-region bartlett-content-column2 bartlett-column panel-panel span6">
          <div class="bartlett-column-content-region-inner bartlett-content-column2-inner bartlett-column-inner panel-panel-inner">
            <?php print $content['contentcolumn2']; ?>
          </div>
        </div>
      </div><!-- /.bartlett-content-container-column-container -->

    </div><!-- /.bartlett-content-container -->
  </div>
</div><!-- /.bartlett -->
