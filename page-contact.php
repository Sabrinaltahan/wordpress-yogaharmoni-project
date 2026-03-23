<?php
/*
Template Name: Contact Page
*/
get_header();
?>


  <!-- ======================
       HERO SECTION
  ======================= -->
<section class="hero-image">
    <div class="container">
        <h1>Contact Us</h1>
        
    </div>
</section>

<main class="contact-page">
  <div class="container">

   
    <p>Get in touch with Harmoni Yoga Center</p>

    <div class="contact-grid">

      <!-- Contact Info -->
      <div class="contact-info">
        <h2>Our Studio</h2>
        <p>📍 Stockholm, Sweden</p>
        <p>📞 +46 70 123 45 67</p>
        <p>✉️ info@harmoniyoga.se</p>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="123" title="Main Contact Form"]'); ?>
      </div>

    </div>

  </div>
</main>

<?php get_footer(); ?>