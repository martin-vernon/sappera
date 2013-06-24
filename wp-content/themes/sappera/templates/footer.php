<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <div class="copy span3">
        <p>&copy; Copyright <?php echo date('Y'); ?>. Sappera. All rights reserved.</p>
    </div>
    <div class="span3 pull-right">
        <a class="brand scrollLink" href="#top">
          <img src="<?= get_stylesheet_directory_uri();?>/assets/img/footer-logo.jpg" alt="Sappera" />
        </a>
    </div>
  </div>
  <div class="large-logo hidden-phone">
    <img src="<?= get_stylesheet_directory_uri();?>/assets/img/logo-large.png" />
  </div>
</footer>

<?php wp_footer(); ?>
