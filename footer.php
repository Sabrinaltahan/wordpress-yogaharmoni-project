<footer class="site-footer">
  <div class="container footer-grid">

    <div class="footer-about">
      <h3>Harmoni Yoga Center</h3>
      <p>
        A peaceful yoga studio offering yoga classes, meditation and wellness
        programs for all levels.
      </p>
    </div>

    <div class="footer-links">
      <h4>Quick Links</h4>
      <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu'
        ));
      ?>
    </div>

    <div class="footer-contact">
      <h4>Contact</h4>
      <p>📍 Stockholm, Sweden</p>
      <p>📞 +46 70 123 45 67</p>
      <p>✉️ info@harmoniyoga.se</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p>©️ <?php echo date('Y'); ?> Harmoni Yoga Center</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>