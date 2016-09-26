<footer class="footer" id="footer">
    <div class="container footer-container">
            <div class="row form-row">
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="http://nev.local/wp-content/uploads/2016/09/form-group.png" alt="">
                </div>
                <div class="col-lg-7 col-md-8 col-sm-6 hidden-xs">
                    <p><span class="text-left">Join our Newsleter</span>
                        <span class="text-right">Lorem Ipsum is simply dummy text of the printing</p></span>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-9 pull-right">
                    <form class="form-horizontal">
                        <div class="form">
                            <a href="">
                            <input type="email" class="form-control" id="email" placeholder="mail Address...">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        <div class="row footer-content">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu-1',
                    'items_wrap' => '<ul><li id="item-id">Quick Link</li>%3$s</ul>',
                    'container' => false,
                ) ); ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-3">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu-2',
                    'container' => false,
                ) ); ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-3">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu-3',
                    'items_wrap' => '<ul><li id="item-id">Service Aria</li>%3$s</ul>',
                    'container' => false,
                ) ); ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-3">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu-4',
                    'container' => false,
                ) ); ?>
            </div>
        </div>
    </div>
</footer>
