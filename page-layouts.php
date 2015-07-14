<?php

/*
 * Template Name: Layouts
 */

get_header(); the_post(); ?>

<main role="main">

	<?php get_template_part('content', 'layouts'); ?>

</main>

<?php get_footer(); ?>