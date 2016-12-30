<?php global $layout_count; ?>
<section id="scratch-layout-<?php echo $layout_count; ?>-id-<?php the_ID(); ?>"
         class="wysiwygs">
  <div class="wrap hpad clearfix">
    <?php if(get_sub_field('header')): ?>
      <h2><?php the_sub_field('header'); ?></h2>
    <?php endif; ?>
    <?php
      if(get_sub_field('offset') !== 'Flexible') {
        if(get_sub_field('offset') === '2 to 1') {
          $offset = '2:1';
        } else {
          $offset = '1:2';
        }
      } else {
        $offset = null;
      }
      $sub_field_count = count( (get_sub_field('wysiwygs') ) );
      scratch_layout_declare(get_sub_field('wysiwygs'), $sub_field_count, $offset);
      while(has_sub_field('wysiwygs')) {
        scratch_layout_start();
          the_sub_field('wysiwyg');
        scratch_layout_end();
      }
    ?>
  </div>
</section>
