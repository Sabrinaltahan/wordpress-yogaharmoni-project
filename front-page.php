<?php get_header(); ?>

<main class="front-page">

  <!-- ======================
       HERO SECTION
  ======================= -->
<section class="hero-image">
    <div class="container">
        <h1>Harmoni Yoga Center</h1>
        <a href="<?php echo get_permalink(116); ?>" class="btn btn-primary">
            Book a Class
        </a>
    </div>
</section>

  <!-- ======================
       HIGHLIGHTS / PUFFAR
  ======================= -->
  <section class="highlights">
    <div class="container">
      <h2>Highlights & Current Offers</h2>
      <div class="highlights-wrapper">
        <?php
        $args = array(
          'post_type' => 'highlight',
          'posts_per_page' => 4
        );
        $highlights = new WP_Query($args);

        if($highlights->have_posts()) :
          while($highlights->have_posts()) : $highlights->the_post(); ?>
            <div class="highlight-item">
              <?php if(has_post_thumbnail()) : ?>
                <div class="highlight-image"><?php the_post_thumbnail('medium'); ?></div>
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <div><?php the_excerpt(); ?></div>
              <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        else :
          echo '<p>Inga erbjudanden just nu.</p>';
        endif;
        ?>
      </div>
    </div>
  </section>

 <!-- ======================
       SERVICES
======================= -->
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


<!-- ======================
       NEWS / NYHETER
====================== -->
<section class="news">
  <div class="container">

    <h2>Last News</h2>

    <div class="news-layout">

      <div class="news-slider">

        <div class="news-track">
          <?php
          $featured = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3
          ));

          if ($featured->have_posts()) :
            while ($featured->have_posts()) : $featured->the_post(); ?>
              
              <article class="news-slide">
                <div class="news-image">
                  <?php the_post_thumbnail('large'); ?>
                </div>

                <div class="news-content">
                  <h3><?php the_title(); ?></h3>
                  <span class="news-date"><?php echo get_the_date(); ?></span>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
                </div>
              </article>

          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </div>

        <button class="news-prev">‹</button>
        <button class="news-next">›</button>

        <div class="news-dots"></div>

      </div>
    </div>

  </div>
</section>


  <!-- ======================
       TEAM / PERSONAL
  ======================= -->
  <section class="team">
    <div class="container">
      <h2>Our Team</h2>
      <div class="team-wrapper">
        <?php
        $args = array(
          'post_type' => 'team_member',
          'posts_per_page' => -1
        );
        $team = new WP_Query($args);

        if($team->have_posts()) :
          while($team->have_posts()) : $team->the_post(); ?>
            <div class="team-member">
              <?php if(has_post_thumbnail()) : ?>
                <div class="team-photo"><?php the_post_thumbnail('medium'); ?></div>
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        else :
          echo '<p>Team information coming soon.</p>';
        endif;
        ?>
      </div>
    </div>
  </section>

 

</main>

<?php get_footer(); ?>