<?php

/*
 * Template Name: Rename
 */

get_header(); ?>

<main>

<p class="center">This is the page-{rename}.php file</p>
    




  
  
  
  
  <section class="wrap hpad clearfix">
  
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
  
    <article class="center">
      
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
        
      <?php the_content(); ?>
      
    </article>
    
    <?php endwhile; else: ?>
    
      <p>No posts here.</p>
  
  <?php endif; ?>
  
  </section>









</main>
    
<?php get_footer(); ?>