 <?php get_header();?>
 
<section class="services" id="services">
  <div class="container">
    <h2>Our Services</h2>

    <div class="services-grid">
      <?php
      $args = array(
        'post_type' => 'service',
        'posts_per_page' => -1
      );
      $services = new WP_Query($args);

      if ($services->have_posts()) :
        while ($services->have_posts()) : $services->the_post(); ?>
          
          <article class="service-card">

            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>

            <h3><?php the_title(); ?></h3>

            <!-- زر فقط -->
            <a href="<?php the_permalink(); ?>" class="btn">
              Read More
            </a>

          </article>

        <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No services found.</p>';
      endif;
      ?>
    </div>
  </div>
</section>


<?php get_footer();?>