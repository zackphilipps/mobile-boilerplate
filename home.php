<?php get_header(); ?>

<main>

<p class="center">This is the home.php file</p>
    




  
  
  
  
  <section class="wrap hpad clearfix">
  
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
  
    <article class="center">
      
      <header>
        <h2><?php the_title(); ?></h2>
      </header>
        
      <?php the_content(); ?>
      
    </article>
    
    <?php endwhile; else: ?>
    
      <p>No posts here.</p>
  
  <?php endif; ?>
  
  </section>









</main>

<?php get_footer(); ?>