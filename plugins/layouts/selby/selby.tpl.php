<?php
/**
 * @file
 * Template for hotsauce Selby.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display selby clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row-fluid">
    <div class="selby-sidebar selby-column-content-region selby-column selby-container panel-panel span4">
      <div class="selby-sidebar-inner selby-column-content-region-inner selby-column-inner selby-container-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>

    <div class="selby-content-container selby-container span8">
      <div class="selby-content-container-inner selby-container-inner">
        <div class="selby-column-content-region selby-content-header clearfix panel-panel row-fluid">
          <div class="selby-column-content-region-inner selby-content-header-inner panel-panel-inner span12">
            <?php print $content['contentheader']; ?>
          </div>
        </div>

        <div class="selby-content-container-column-container clearfix row-fluid">
          <div class="selby-content-container-column-container-inner">
            <div class="selby-column-content-region selby-content-column1 selby-column panel-panel span6">
              <div class="selby-column-content-region-inner selby-content-column1-inner selby-column-inner panel-panel-inner">
                <?php print $content['contentcolumn1']; ?>
              </div>
            </div>
            <div class="selby-column-content-region selby-content-column2 selby-column panel-panel span6">
              <div class="selby-column-content-region-inner selby-content-column2-inner selby-column-inner panel-panel-inner">
                <?php print $content['contentcolumn2']; ?>
              </div>
            </div>
          </div>
        </div><!-- /.selby-content-container-column-container -->

        <div class="selby-column-content-region selby-content-footer clearfix panel-panel row-fluid">
          <div class="selby-column-content-region-inner selby-content-footer-inner panel-panel-inner span12">
            <?php print $content['contentfooter']; ?>
          </div>
        </div>

      </div>
    </div><!-- /.selby-content-container -->
  </div>
</div><!-- /.selby -->
