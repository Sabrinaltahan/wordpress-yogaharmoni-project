  <?php get_header();?>

  <!-- ======================
       HERO SECTION
  ======================= -->
<section class="hero-image">
    <div class="container">
        <h1>Our Team</h1>
        
    </div>
</section>

  <!-- ======================
       TEAM / PERSONAL
  ======================= -->
  <section class="team">
    <div class="container">
     
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

   <?php get_footer();?>