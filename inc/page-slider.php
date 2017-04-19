
<section id="tzslideshow">
    <div class="container-fluid">
        <div class="div-home-slide">
            <?php
            $chooseslide = ot_get_option(THEME_PREFIX.'_TZShooseSlide','nivo');
            switch($chooseslide){
                case'flexslider':
                    load_template( trailingslashit( SERVER_PATH ) . 'inc/page-flexslider.php' );
                    break;
                case'zoomslider':
                    load_template( trailingslashit( SERVER_PATH ) . 'inc/page-zoomslider.php' );
                    break;
                case'revslider':
                    load_template( trailingslashit( SERVER_PATH ) . 'inc/page-slide_revolution.php' );
                    break;
                case'nivo':
                    load_template( trailingslashit( SERVER_PATH ) . 'inc/page-nivoslider.php' );
                    break;
            }
            ?>
        </div><!--end div-home-slide-->
    </div><!--end class container-fluid-->
</section><!--end id tzslideshow-->