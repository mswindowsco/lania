<?php
add_action('init', 'register_theme_scripts');
function register_theme_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php') {

        if (is_admin()) {

            add_action('admin_enqueue_scripts','register_back_end_styles');

        } else {

            add_action('wp_enqueue_scripts', 'register_front_end_styles');
            add_action('wp_enqueue_scripts', 'register_front_end_scripts');

        }
    }
}

//Register back-end
function register_back_end_styles(){

    wp_enqueue_style(THEME_PREFIX . '_admin_custom_styles', THEME_PATH . '/extension/assets/css/admin-styles.css');
    wp_enqueue_style('tz-theme-option', THEME_PATH . '/extension/assets/css/tz-theme-options.css');

    wp_register_script(THEME_PREFIX . '_admin_custom_scripts', THEME_PATH . '/extension/assets/js/admin-scripts.js', array(), '1.0', false);
    wp_enqueue_script(THEME_PREFIX . '_admin_custom_scripts');
    wp_register_script('portfolio_meta_boxes', THEME_PATH . '/extension/assets/js/portfolio_meta_boxes.js', false, '1.0', $in_footer=true);
    wp_enqueue_script('portfolio_meta_boxes');
    wp_register_script('portfolio_theme_option', THEME_PATH . '/extension/assets/js/portfolio_theme_option.js', false, '1.0', $in_footer=true);
    wp_enqueue_script('portfolio_theme_option');

}

//Register Front-End Styles
function register_front_end_styles()
{
    if(!is_404()) {

        wp_enqueue_style('style', THEME_PATH . '/style.css', false );
        wp_enqueue_style('bootstrap', THEME_PATH . '/css/bootstrap.css', false );
        wp_enqueue_style('bootstrap-responsive', THEME_PATH . '/css/bootstrap-responsive.css', false );
        wp_enqueue_style('theme-responsive', THEME_PATH . '/css/theme-responsive.css', false );
        wp_enqueue_style('responsive1200', THEME_PATH . '/css/responsive1200.css', false );
        wp_enqueue_style('responsive768x979', THEME_PATH . '/css/responsive768x979.css', false );
        wp_enqueue_style('responsive767', THEME_PATH . '/css/responsive767.css', false );
        wp_enqueue_style('responsive480', THEME_PATH . '/css/responsive480.css', false );
        wp_enqueue_style('shortcode', THEME_PATH . '/css/shortcode.css', false );
        wp_enqueue_style('RalewayRegular', THEME_PATH . '/fonts/RalewayRegular/stylesheet.css', false );
        wp_enqueue_style('font-awesome', THEME_PATH . '/fonts/font-awesome/css/font-awesome.min.css', false );
        wp_enqueue_style('OpenSansRegular', THEME_PATH . '/fonts/OpenSansRegular/stylesheet.css', false );
        wp_enqueue_style('OpenSansBold', THEME_PATH . '/fonts/OpenSansBold/stylesheet.css', false );
        wp_enqueue_style('OpenSansItalic', THEME_PATH . '/fonts/OpenSansItalic/stylesheet.css', false );
        wp_enqueue_style('RalewayBold', THEME_PATH . '/fonts/RalewayBold/stylesheet.css', false );
        wp_enqueue_style('RalewayThin', THEME_PATH . '/fonts/RalewayThin/stylesheet.css', false );
        $rightto = ot_get_option(THEME_PREFIX.'_TzThemeStyle','left');
        $configwidth = ot_get_option(THEME_PREFIX.'_TzThemehomewidth','no');
        if($rightto=='right'):
            wp_enqueue_style('righttoleft', THEME_PATH . '/css/righttoleft.css', false );
        endif;
        if($configwidth=='yes'):
            wp_enqueue_style('full-width', THEME_PATH . '/css/full-width.css', false );
        endif;

        wp_enqueue_style('jquery.fancybox', THEME_PATH . '/css/jquery.fancybox.css', false );
        wp_enqueue_style('theme-default', THEME_PATH . '/css/theme-default.css', false );

       if(is_category() || is_home() || is_single() || is_author() || is_tag() || is_search() || is_archive() || is_page_template('template-archive.php') && !is_singular('portfolio') ){
           wp_enqueue_style('blog', THEME_PATH . '/css/blog.css', false );
           wp_enqueue_style('slidebar', THEME_PATH . '/css/slidebar.css', false );
       }
        if(is_page_template('template-home-page.php')){
            $chooseslide = ot_get_option(THEME_PREFIX.'_TZShooseSlide','nivo');
            switch($chooseslide){
                case'flexslider':
                    wp_enqueue_style('flexslider2', THEME_PATH . '/css/flexslider_theme.css', false );
                    wp_enqueue_style('flexslider', THEME_PATH . '/css/flexslider.css', false );
                    break;
                case'zoomslider':
                    wp_enqueue_style('zoomSlide', THEME_PATH . '/css/zoomSlide.css', false );
                    break;
                case'nivo':
                    wp_enqueue_style('nivo', THEME_PATH . '/css/nivo.css', false );
                    break;
            }


        }
       if(is_single() && !is_singular('portfolio')){

            wp_enqueue_style('single-blog', THEME_PATH . '/css/single-blog.css', false );
           wp_enqueue_style('flexslider', THEME_PATH . '/css/flexslider.css', false );
       }
        if(is_page() && !is_singular('portfolio')){
            wp_enqueue_style('page', THEME_PATH . '/css/page.css', false );
            wp_enqueue_style('slidebar', THEME_PATH . '/css/slidebar.css', false );
       }
       if(is_page_template('template-portfolio.php') || is_page_template('template-timeline.php')){
            wp_enqueue_style('isotope', THEME_PATH . '/css/isotope.css', false );
            wp_enqueue_style('portfolio', THEME_PATH . '/css/portfolio.css', false );
       }
       if(is_singular('portfolio')){
           wp_enqueue_style('single-portfolio', THEME_PATH . '/css/single-portfolio.css', false );
            wp_enqueue_style('flexslider', THEME_PATH . '/css/flexslider.css', false );
       }

    }else
    {
        wp_enqueue_style('404', THEME_PATH . '/css/404.css', false );

    }
}

//Register Front-End Scripts
function register_front_end_scripts()
{
    wp_enqueue_script('jquery');

    wp_deregister_script('bootstrap');
    wp_register_script('bootstrap', THEME_PATH . '/js/bootstrap.js', false, '2.3.1', $in_footer=true);
    wp_enqueue_script('bootstrap');
    wp_deregister_script('shortcode');
    wp_register_script('shortcode', THEME_PATH . '/js/shortcode.js', false, false, $in_footer=true);
    wp_enqueue_script('shortcode');


    if(is_page_template('template-home-page.php')){
        $chooseslide = ot_get_option(THEME_PREFIX.'_TZShooseSlide','nivo');

        wp_deregister_script('jquery.fancybox.pack');
        wp_register_script('jquery.fancybox.pack', THEME_PATH . '/js/jquery.fancybox.pack.js', false, false, $in_footer=true);
        wp_enqueue_script('jquery.fancybox.pack');

        wp_deregister_script('showbizpro');
        wp_register_script('showbizpro', THEME_PATH . '/js/jquery.themepunch.showbizpro.min.js', false, '1.2.7', $in_footer=true);
        wp_enqueue_script('showbizpro');

        wp_deregister_script('parallax');
        wp_register_script('parallax', THEME_PATH . '/js/jquery.parallax-1.1.3.js', false, '1.1.3', $in_footer=true);
        wp_enqueue_script('parallax');

        wp_deregister_script('localscroll');
        wp_register_script('localscroll', THEME_PATH . '/js/jquery.localscroll-1.2.7-min.js', false, '1.2.7', $in_footer=true);
        wp_enqueue_script('localscroll');

        wp_deregister_script('countdown');
        wp_register_script('countdown', THEME_PATH . '/js/countdown.js', false, false, $in_footer=true);
        wp_enqueue_script('countdown');

        switch($chooseslide){
            case'flexslider':
                wp_deregister_script('jquery.flexslider');
                wp_register_script('jquery.flexslider', THEME_PATH . '/js/jquery.flexslider.js', false, '2.2.0', $in_footer=true);
                wp_enqueue_script('jquery.flexslider');
                break;
            case'zoomslider':
                wp_deregister_script('modernizr.custom.86080');
                wp_register_script('modernizr.custom.86080', THEME_PATH . '/js/modernizr.custom.86080.js', false, false, $in_footer=true);
                wp_enqueue_script('modernizr.custom.86080');

                break;
            case'nivo':
                wp_deregister_script('jquery.nivo.slider');
                wp_register_script('jquery.nivo.slider', THEME_PATH . '/js/jquery.nivo.slider.js', false, '3.2', $in_footer=true);
                wp_enqueue_script('jquery.nivo.slider');
                break;
        }

        wp_deregister_script('home-page');
        wp_register_script('home-page', THEME_PATH . '/js/home-page.js', false, '1.0.0', $in_footer=true);
        wp_enqueue_script('home-page');

        wp_deregister_script('theme-lania');
        wp_register_script('theme-lania', THEME_PATH . '/js/theme-lania.js', false, '1.0.0', $in_footer=true);
        wp_enqueue_script('theme-lania');

        //flex
        $flexffect = ot_get_option(THEME_PREFIX.'_TZFlexeffect','fade');
        $flexthumbnail = ot_get_option(THEME_PREFIX.'_TZFlexthumbnail','206');


        //nivo
        $Nivoeffect = ot_get_option(THEME_PREFIX.'_TZNivoEffect','fade');
        $NivoTransition = ot_get_option(THEME_PREFIX . '_TZNivoTransition',500);
        $TZNivoPause = ot_get_option(THEME_PREFIX . '_TZNivoPause',3000);
        $NivoCols = ot_get_option(THEME_PREFIX . '_TZNivoCols',8);
        $TZNivoRows = ot_get_option(THEME_PREFIX . '_TZNivorows',4);

        //zoomslider
        $zoomHeight = ot_get_option(THEME_PREFIX . '_TZZoomHeight','auto');

        $tzDate = ot_get_option(THEME_PREFIX.'_TZEventDate',31);
        $tzDays = ot_get_option(THEME_PREFIX.'_TZEventDays','december');
        $tzYear = ot_get_option(THEME_PREFIX.'_TZEventYear',2016);
        $tzTime = ot_get_option(THEME_PREFIX.'_TZEventTime','23:23:23');
        $tzdate_Event =  "$tzDate $tzDays $tzYear $tzTime";
        $thumb  = ot_get_option(THEME_PREFIX . '_TZPortfoliothumbnail',3);

        $var_theme = array('flexffect'=>$flexffect,'flexthumbnail'=>$flexthumbnail,'chooseslide'=>$chooseslide,'tbumb'=>$thumb,'tzdate_Evnet'=>$tzdate_Event,'Nivoeffect'=>$Nivoeffect,'NivoTransition'=>$NivoTransition,'TZNivoPause'=>$TZNivoPause,'NivoCols'=>$NivoCols,'TZNivoRows'=>$TZNivoRows,'zoomheight'=>$zoomHeight);
        wp_localize_script('home-page','var_theme',$var_theme);

    }
    if(is_page_template('template-portfolio.php') || is_page_template('template-timeline.php')){

        wp_deregister_script('jquery.fancybox.pack');
        wp_register_script('jquery.fancybox.pack', THEME_PATH . '/js/jquery.fancybox.pack.js', false, false, $in_footer=true);
        wp_enqueue_script('jquery.fancybox.pack');

        wp_deregister_script('jquery.parallax-1.1.3');
        wp_register_script('jquery.parallax-1.1.3', THEME_PATH . '/js/jquery.parallax-1.1.3.js',false,false,$in_footer=true);
        wp_enqueue_script('jquery.parallax-1.1.3');

        wp_deregister_script('jquery.localscroll-1.2.7-min');
        wp_register_script('jquery.localscroll-1.2.7-min', THEME_PATH . '/js/jquery.localscroll-1.2.7-min.js',false,false,$in_footer=true);
        wp_enqueue_script('jquery.localscroll-1.2.7-min');

        wp_deregister_script('jquery.isotope.min');
        wp_register_script('jquery.isotope.min', THEME_PATH . '/js/jquery.isotope.min.js',false,false,$in_footer=true);
        wp_enqueue_script('jquery.isotope.min');

        wp_deregister_script('jquery.infinitescroll.min.min');
        wp_register_script('jquery.infinitescroll.min.min', THEME_PATH . '/js/jquery.infinitescroll.min.min.js');
        wp_enqueue_script('jquery.infinitescroll.min.min');

        wp_deregister_script('theme-lania');
        wp_register_script('theme-lania', THEME_PATH . '/js/theme-lania.js',false,false,$in_footer=true);
        wp_enqueue_script('theme-lania');

    }
    if(is_page_template('template-portfolio.php')){
        wp_deregister_script('resizeimage');
        wp_register_script('resizeimage', THEME_PATH . '/js/resizeimage.js',false,false,$in_footer=true);
        wp_enqueue_script('resizeimage');

        wp_deregister_script('portfolio');
        wp_register_script('portfolio', THEME_PATH . '/js/portfolio.js',false,false,$in_footer=true);
        wp_enqueue_script('portfolio');
        $p_width    =   ot_get_option(THEME_PREFIX . '_TZPorwidth',350);
        $image_load   =   THEME_PATH . '/images/ajax-loader.gif';
        $portlofio_variable =   array('p_width'=>$p_width,'img_load'=>$image_load);
        wp_localize_script('portfolio','portlofio_variable',$portlofio_variable);
    }
    if(is_page_template('template-timeline.php')){
        wp_deregister_script('resizeimage');
        wp_register_script('resizeimage', THEME_PATH . '/js/resizeimage.js',false,false,$in_footer=true);
        wp_enqueue_script('resizeimage');

        wp_deregister_script('timeline');
        wp_register_script('timeline', THEME_PATH . '/js/timeline.js',false,false,$in_footer=true);
        wp_enqueue_script('timeline');
        $t_width    =  ot_get_option(THEME_PREFIX . '_TZTimewidth',350);
        $image_load   =   THEME_PATH . '/images/ajax-loader.gif';
        $timeline_varibale  =   array('t_width'=>$t_width,'img_load'=>$image_load);
        wp_localize_script('timeline','timeline_varibale',$timeline_varibale);
    }
    if(is_category() || is_search() || is_home() || is_single() || is_author() || is_tag() || is_archive() || is_page() || is_page_template('template-archive.php') ){

        wp_deregister_script('parallax');
        wp_register_script('parallax', THEME_PATH . '/js/jquery.parallax-1.1.3.js', false, '1.1.3', $in_footer=true);
        wp_enqueue_script('parallax');

        wp_deregister_script('localscroll');
        wp_register_script('localscroll', THEME_PATH . '/js/jquery.localscroll-1.2.7-min.js', false, '1.2.7', $in_footer=true);
        wp_enqueue_script('localscroll');


        wp_deregister_script('theme-lania');
        wp_register_script('theme-lania', THEME_PATH . '/js/theme-lania.js', false, '1.0.0', $in_footer=true);
        wp_enqueue_script('theme-lania');
    }

    if(is_single()){

        wp_deregister_script('jquery.flexslider');
        wp_register_script('jquery.flexslider', THEME_PATH . '/js/jquery.flexslider.js', false, '2.2.0', $in_footer=true);
        wp_enqueue_script('jquery.flexslider');


        wp_deregister_script('single');
        wp_register_script('single', THEME_PATH . '/js/single.js', false, false, $in_footer=true);
        wp_enqueue_script('single');

        wp_deregister_script('widgets');
        wp_register_script('widgets', THEME_PATH . '/js/widgets.js', false, false, $in_footer=true);
        wp_enqueue_script('widgets');
    }
    if(is_singular('portfolio')){

        wp_deregister_script('jquery.fancybox.pack');
        wp_register_script('jquery.fancybox.pack', THEME_PATH . '/js/jquery.fancybox.pack.js', false, false, $in_footer=true);
        wp_enqueue_script('jquery.fancybox.pack');

        wp_deregister_script('showbizpro');
        wp_register_script('showbizpro', THEME_PATH . '/js/jquery.themepunch.showbizpro.min.js', false, '1.2.7', $in_footer=true);
        wp_enqueue_script('showbizpro');

        wp_deregister_script('jquery.flexslider');
        wp_register_script('jquery.flexslider', THEME_PATH . '/js/jquery.flexslider.js', false, '2.2.0', $in_footer=true);
        wp_enqueue_script('jquery.flexslider');

        wp_deregister_script('single-portfolio');
        wp_register_script('single-portfolio', THEME_PATH . '/js/single-portfolio.js', false, false, $in_footer=true);
        wp_enqueue_script('single-portfolio');
    }

}

?>