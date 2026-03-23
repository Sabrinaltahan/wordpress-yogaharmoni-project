<?php get_header(); ?>

<section class="single-news">
  <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="single-news-card">

        <?php if (has_post_thumbnail()) : ?>
          <div class="single-news-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="single-news-content">
          <span class="single-news-date">
            <?php echo get_the_date(); ?>
          </span>

          <h1 class="single-news-title">
            <?php the_title(); ?>
          </h1>

          <div class="single-news-text">
            <?php the_content(); ?>
          </div>
        </div>

      </article>

    <?php endwhile; endif; ?>

  </div>
</section>

<?php get_footer(); ?>