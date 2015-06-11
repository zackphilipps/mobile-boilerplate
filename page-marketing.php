<?php

/*
 * Template Name: Standard Marketing Page
 */

get_header(); the_post(); ?>

<main role="main">

	<?php get_template_part('content', 'marketing'); ?>

</main>

<?php get_footer(); ?>