<section id="scratch-layout-<?php echo $layout_count; ?>-id-<?php the_ID(); ?>"
         class="hero-unit">
  <figure class="scratch-image"
          style="background-image: url('<?php the_sub_field('image'); ?>'); background-position: <?php scratch_bg_position(); ?>">
    <div class="overlay clearfix">
      <?php
        if(get_sub_field('text_align') === 'Left') {
          $text_align_class = 'left';
        } elseif(get_sub_field('text_align') === 'Right') {
          $text_align_class = 'right';
        } else {
          $text_align_class = 'center';
        }
      ?>
      <figcaption class="wrap <?php echo $text_align_class; ?> hpad clearfix white">
        <div class="content"
             style="margin: <?php the_sub_field('text_margin'); ?>em auto;">
          <?php
            scratch_sub_field('header', 'h2');
            scratch_sub_field('blurb');
            scratch_sub_button('cta_link', 'cta_text');
          ?>
        </div>
      </figcaption>
    </div>
  </figure>
</section>