<!-- <p>test</p> -->

<?php
function scratch_bg_position() {
  $string = null;
  if(get_sub_field('image_position_y') === 'Top') {
    $string = 'top';
  } elseif(get_sub_field('image_position_y') === 'Middle') {
    $string = 'center';
  } elseif(get_sub_field('image_position_y') === 'Bottom') {
    $string = 'bottom';
  }
  if(get_sub_field('image_position_x') === 'Left') {
    $string .= ' left;';
  } elseif(get_sub_field('image_position_x') === 'Center') {
    $string .= ' center;';
  } elseif(get_sub_field('image_position_x') === 'Right') {
    $string .= ' right;';
  }
  echo $string;
}
?>

<?php
if( have_rows('layout') ) {
  $layout_count = 1; while ( have_rows('layout') ) { the_row();
    if( get_row_layout() === 'hero_unit' ) { ?>

      <?php get_template_part( 'layouts/layout', 'hero_unit' ); ?>

    <?php
    } elseif( get_row_layout() === 'flexible_columns' ) {
    ?>

      <?php get_template_part( 'layouts/layout', 'flexible_columns' ); ?>

    <?php
    } elseif( get_row_layout() === 'staggered_images_with_text' ) {
    ?>

      <?php get_template_part( 'layouts/layout', 'staggered_images_with_text' ); ?>

    <?php
    } elseif( get_row_layout() === 'slider' ) {
    ?>

      <?php get_template_part( 'layouts/layout', 'slider' ); ?>

    <?php
    } elseif( get_row_layout() === 'wysiwygs' ) {
    ?>

      <?php get_template_part( 'layouts/layout', 'wysiwygs' ); ?>

    <?php
    }
    ?>

  <?php
    $layout_count++;
  }
  ?>

<?php
} else {
?>

<?php
}
?>