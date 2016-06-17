<?php

/*
 * Template Name: Layouts
 */

get_template_part('_parts/header'); the_post(); ?>

<main>

	<?php get_template_part('_parts/content', 'layouts'); ?>

</main>

<?php get_template_part('_parts/footer'); ?>
