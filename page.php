<?php get_header(); the_post(); ?>

<main>

  <p class="center">This is the page.php file</p>

  <section class="wrap hpad clearfix">

    <article id="post-<?php the_ID(); ?>"
             <?php post_class(); ?>
             role="article">

      <header>
        <h1><?php the_title(); ?></h1>
      </header>

      <?php the_content(); ?>

    </article>

  </section>

</main>

<?php get_footer(); ?>