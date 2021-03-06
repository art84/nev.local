<header class="banner navbar navbar-default">
  <div class="container header-container">
        <div class="navbar-header col-md-3">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
              <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                <img src="http://nev.local/wp-content/uploads/2016/08/logo_03.png" alt="A Corporation Logo"
                     class="img-responsive">
                <?php bloginfo('name'); ?>
              </a>
            </div>
        </div>
            <nav class="collapse navbar-collapse pull-right" id="main-nav">
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
</header>

