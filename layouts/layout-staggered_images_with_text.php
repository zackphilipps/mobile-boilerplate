<section id="scratch-layout-<?php echo $layout_count; ?>-id-<?php the_ID(); ?>"
         class="staggered">
  <?php
    if(get_sub_field('icon_or_image') === 'Icon') {
      $icon_or_image = 'icon';
    } else {
      $icon_or_image = 'image';
    }
  ?>
  <?php while(has_sub_field('rows')) { ?>
    <div class="row vpad-2x">
      <div class="wrap hpad clearfix">
        <div class="fivecol first">
          <?php
            if($icon_or_image === 'icon') {
              scratch_sub_icon_circle('icon');
            } else {
              scratch_sub_image_start('image', 'circle');
              scratch_sub_image_end('image');
            }
          ?>
        </div>
        <div class="sevencol last">
          <div class="content valign">
            <?php
              scratch_sub_field('header', 'h3');
              scratch_sub_field('blurb');
              scratch_sub_button('cta_link', 'cta_text');
            ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</section>