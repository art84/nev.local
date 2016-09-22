<header class="banner navbar navbar-default">
  <div class="container header-container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img id="logo" src="http://nev.local/wp-content/uploads/2016/08/logo_03.png">
        <?php bloginfo('name'); ?></a>
      </div>
    <nav class="collapse navbar-collapse" id="main-nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav navbar-nav navbar-right',
            'container' => false,
            'walker'    => new wp_bootstrap_navwalker()
        ]);
      endif;
      ?>
    </nav>
  </div>
  </div>
</header>

