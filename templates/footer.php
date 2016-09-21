<footer class="footer">
    <div class="newsletter">
    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1')); ?>
    </div> 
<div class="container footer-container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
        <h5>Quick Link</h5>
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2', 'menu_class' => 'navbar-left' )); ?>  
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-3', 'menu_class' => 'navbar-left' )); ?> 
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">  
        <h5>Service Area</h5>
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-4', 'menu_class' => 'navbar-left' )); ?>
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-5', 'menu_class' => 'navbar-left' )); ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
        <h5>Contact us</h5>
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-6', 'menu_class' => 'navbar-left', 
        'before' => '<p>Please contact us anytime! We look <br>
        forward to hearing from you.</p>' )); ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-7', 'menu_class' => 'navbar-left' )); ?>
        </div>
    </div>
</div>
</footer>
