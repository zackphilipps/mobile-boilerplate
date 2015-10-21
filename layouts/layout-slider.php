<?php global $layout_count; ?>
<section id="scratch-layout-<?php echo $layout_count; ?>-id-<?php the_ID(); ?>"
         class="slider-row">
  <div class="wrap hpad vpad-gap clearfix">
    <?php if(get_sub_field('slides')) { ?>
      <div class="glide">
      	<div class="glide__arrows">
	        <span class="glide__arrow prev" data-glide-dir="<">
	        	<i class="ion-chevron-left"></i>
	        </span>
	        <span class="glide__arrow next" data-glide-dir=">">
	        	<i class="ion-chevron-right"></i>
	        </span>
		    </div>
        <div class="glide__wrapper">
        	<ul class="glide__track">
	          <?php while(has_sub_field('slides')) { ?>
	            <li class="glide__slide"
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
        <ul class="glide__bullets"></ul>
      </div>
    <?php } ?>
  </div>
</section>