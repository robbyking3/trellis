<header class="banner">
    <nav class="nav-primary">
    <div class="brand"></div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <?php dynamic_sidebar('sidebar-callout'); ?>
</header>

