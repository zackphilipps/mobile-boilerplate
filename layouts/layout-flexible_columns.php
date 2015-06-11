<section id="scratch-layout-<?php echo $layout_count; ?>-id-<?php the_ID(); ?>"
         class="flexible-columns vpad-3x">
  <div class="wrap hpad clearfix center">
    <?php
      scratch_sub_field('header', 'h2');
      scratch_sub_field('blurb');
      if(get_sub_field('use_custom_columns')) {
        $columns = 'custom';
      } else {
        $columns = 4;
      }
      if(get_sub_field('icon_or_image') === 'Icon') {
        $icon_or_image = 'icon';
      } else {
        $icon_or_image = 'image';
      }
      scratch_sub_layout_declare('columns', $columns);
      while(has_sub_field('columns')) {
        scratch_layout_start();
          scratch_sub_link_start('link', 'header');
            if($icon_or_image === 'icon') {
              scratch_sub_icon_circle('icon');
            } else {
              scratch_sub_image_start('image', 'circle');
              scratch_sub_image_end('image');
            }
            scratch_sub_field('header', 'h3');
          scratch_sub_link_end('link');
          scratch_sub_field('blurb');
          if(get_sub_field('link')) :
    ?>
      <p>
        <a href="<?php the_sub_field('link'); ?>"
           class="button"
           title="Learn More">
          Learn More
        </a>
      </p>
    <?php
          endif;
        scratch_layout_end();
      }
      scratch_sub_button('cta_link', 'cta_text');
    ?>
  </div>
</section>