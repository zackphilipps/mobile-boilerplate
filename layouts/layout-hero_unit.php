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

<?php global $layout_count; ?>
<section id="scratch-layout-<?php echo $layout_count; ?>-id-<?php the_ID(); ?>"
         class="hero-unit">
  <div class="scratch-image"
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
      <div class="wrap <?php echo $text_align_class; ?> hpad clearfix white">
        <div class="content"
             style="margin: <?php the_sub_field('text_margin'); ?>em auto;">
          <?php
            scratch_sub_field('header', 'h2');
            scratch_sub_field('blurb');
            scratch_sub_button('cta_link', 'cta_text');
          ?>
        </div>
      </div>
    </div>
  </div>
</section>