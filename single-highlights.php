<?php get_header(); ?>

<main class="single-page">
  <section class="single-post-section">
    <div class="container">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="single-post-card">

          <?php if ( has_post_thumbnail() ) : ?>
            <div class="single-post-image">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php endif; ?>

          <h1 class="single-post-title"><?php the_title(); ?></h1>

          <div class="single-post-meta">
            <span><?php echo get_the_date(); ?></span>
          </div>

          <div class="single-post-content">
            <?php the_content(); ?>
          </div>

        </article>

      <?php endwhile; endif; ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>