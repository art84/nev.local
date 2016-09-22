<footer class="footer">
    <div class="container form-container">
        <div class="row form-row">
            <div class="col-lg-7 col-lg-offset-1 col-md-6 col-sm-6 col-xs-3">
            <h4>Join our Newsleter</h4>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
            <form class="form-horizontal">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                </div>
            </form>
        </div>
    </div>

<div class="container footer-container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
            <h5>Quick Link</h5>
                <?php
                if (wp_nav_menu('footer-menu-1')) :([
                        'theme_location' => 'footer-menu-1',
                        'menu_class' => 'navbar-left',
                        'container' => false
                    ]);
                endif;
                ?>
        </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                    <?php
                    if (wp_nav_menu('footer-menu-2')) :([
                            'theme_location' => 'footer-menu-2',
                            'menu_class' => 'navbar-left',
                            'container' => false
                        ]);
                    endif;
                    ?>
            </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <h5>Service Aria</h5>
                    <?php
                    if (wp_nav_menu('footer-menu-3')) :([
                            'theme_location' => 'footer-menu-3',
                            'menu_class' => 'navbar-left',
                            'container' => false
                        ]);
                    endif;
                    ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                        <?php
                        if (wp_nav_menu('footer-menu-4')) :([
                                'theme_location' => 'footer-menu-1',
                                'menu_class' => 'navbar-left',
                                'container' => false
                            ]);
                        endif;
                        ?>
                </div>
    </div>
</div>
</footer>
