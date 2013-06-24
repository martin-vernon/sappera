<header class="banner navbar navbar-static-top" role="banner">
  <div id="top" class="logo container">
    <a class="brand scrollLink" href="#contact">
      <img src="<?= get_stylesheet_directory_uri();?>/assets/img/logo.jpg" alt="Sappera" />
    </a>
  </div>
  <div class="scroll_down_black visible-phone">
    <a href="#about" class="scrollLink">scroll down<i class="icon-caret-down icon-4x"></i></a>
  </div>
  <div class="navbar-inner visible-desktop">
    <div class="container">
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav pull-right'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
