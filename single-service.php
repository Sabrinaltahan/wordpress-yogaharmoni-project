<?php get_header(); ?>

<section class="single-service">
  <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="single-service-card">

        <?php if (has_post_thumbnail()) : ?>
          <div class="single-service-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="single-service-content">
          <span class="single-service-date">
            <?php echo get_the_date(); ?>
          </span>

          <h1 class="single-service-title">
            <?php the_title(); ?>
          </h1>

          <div class="single-service-text">
            <?php the_content(); ?>
          </div>
        </div>

      </article>

    <?php endwhile; endif; ?>

  </div>
</section>

<?php get_footer(); ?>