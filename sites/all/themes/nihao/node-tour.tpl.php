<?php
?>

<div id="node-<?php print $node->nid; ?>" class="node tour-main-content <?php print $node_classes; ?>">
  <div class="inner">
    <?php print $picture ?>

    <?php if ($page == 0): ?>
    <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php endif; ?>

    <?php if ($submitted): ?>
    <div class="meta">
      <span class="submitted"><?php print $submitted ?></span>
    </div>
    <?php endif; ?>

    <?php if ($node_top && !$teaser): ?>
    <div id="node-top" class="node-top row nested">
      <div id="node-top-inner" class="node-top-inner inner">
        <?php print $node_top; ?>
      </div><!-- /node-top-inner -->
    </div><!-- /node-top -->
    <?php endif; ?>

    <div class="content clearfix">
      <?php// print $content ?>
      <div class="info-area clearfix">
        <div class="image-show left"><?php print $field_image[0]['view'];?></div>
        <div class="other-info left">
          <div class="tour-field-destination">
            <span>Destination:</span><?php print $field_destination[0]['value'];?>
          </div>
          <div class="tour-field-druation">
            <span>Druation:</span><?php print $field_duration[0]['value'];?>
          </div>
          <div class="tour-field-price">
            <?php print $field_price[0]['view'];?>
          </div>
          <div class="tour-button">
            <span class="customize"><a href="?q=node/30"><img src="/sites/all/themes/nihao/images/customize-button.png"/></a></span>
            <span class="customer"><a href="?q=node/29"><img src="/sites/all/themes/nihao/images/customer-button.png"/></a></span>
          </div>
        </div>
      </div>
      <div class="tour-field-details">
        <h2 class="field-label">Details</h2>
        <div class="content">
          <?php print $field_details[0]['value'];?>
        </div>
      </div>
      <div class="tour-price-hotel clearfix">
        <div class="tour-price left">
          <h2 class="price-title">price</h2>
          <?php print views_embed_view('tour_price','default',$nid);?>
        </div>
        <div class="tour-hotel left">
        <h2 class="hotel-title">hotel list</h2>
          <?php print views_embed_view('tour_hotel', 'default',$nid);?>
        </div>
      </div>
      <div class="tour-services-map clearfix">
        <div class="tour-services left">
          <div class="tour-field-services-include">
            <h2 class="services-include-label">services include</h2>
            <div class="content"><?php print $field_sevices_include[0]['value'];?></div>
          </div>
          <div class="tour-field-services-not-include">
            <h2 class="services-not-include-label">services include</h2>
            <div class="content"><?php print $field_sevices_not_include[0]['value'];?></div>
          </div>
        </div>
        <div class="tour-field-gmap">
          <?php print $field_gmap[0]['view'];?>
        </div>
      </div><!-- /tour-services-map -->
    </div>


    <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
    <?php endif; ?>
  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div><!-- /node-<?php print $node->nid; ?> -->
