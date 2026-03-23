<?php get_header(); ?>

<main class="blog-page">
  <div class="container">

    <?php if ( have_posts() ) : ?>
      <div class="blog-grid">

        <?php while ( have_posts() ) : the_post(); ?>
          <article class="blog-card">
            <?php the_post_thumbnail('medium'); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
          </article>
        <?php endwhile; ?>

      </div>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>