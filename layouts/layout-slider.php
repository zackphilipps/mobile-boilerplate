<section id="scratch-layout-<?php echo $layout_count; ?>-id-<?php the_ID(); ?>"
         class="slider-row">
  <div class="wrap hpad vpad-gap clearfix">
    <?php if(get_sub_field('slides')) { ?>
      <div class="slider clearfix">
        <ul class="slider__wrapper">
          <?php while(has_sub_field('slides')) { ?>
            <li class="slider__item"
                style="background-image: url('<?php the_sub_field('background'); ?>');">
              <div class="overlay clearfix">
                <div class="slide-text center valign-always">
                  <?php
                    scratch_sub_field('header', 'h3');
                    scratch_sub_field('blurb');
                    scratch_sub_button('cta_link', 'cta_text');
                  ?>
                </div>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    <?php } ?>
  </div>
</section>