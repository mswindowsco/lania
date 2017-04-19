<?php

    /*
     * Method process option
     * # option 1: config font
     * # option 2: process config theme
    */

    if(!is_admin()):


        add_action('wp_head','portoflio_config_theme');



        function portoflio_config_theme(){

            /*===========================
             * method body font
            ============================*/
            $TZFontType     =   ot_get_option(THEME_PREFIX. '_TZFontType','TzFontSquirrel');       // type font google or defaul
            $TzFontFamiUrl  =   ot_get_option(THEME_PREFIX. '_TzFontFami');                        //  url google font
            $TZUrlFamily    =   ot_get_option(THEME_PREFIX. '_TzFontFaminy');                      //  font family google
            $TzFontSqui     =   ot_get_option(THEME_PREFIX.'_TzFontSquirrel','OpenSansLight');     //  font squireel
            $bodySelecter   =   ot_get_option(THEME_PREFIX. '_TzBodySelecter');                     //  body selecter
            $TzFontDefault  =   ot_get_option(THEME_PREFIX. '_TzFontDefault','Arial');             //  font standard
            $TzbodyFontColor    = ot_get_option(THEME_PREFIX. '_TzBodyColor');                      //*color*
            switch($TZFontType){
                case'Tzgoogle':
                    $Tzfont = $TZUrlFamily;
                    break;
                case'TzFontDefault':
                    $Tzfont = "'".$TzFontDefault."'";
                    break;
                default:
                    $Tzfont = "'".$TzFontSqui."'";
                    break;
            }


            // end method

            /*========================
            * Method header font
            ==========================*/
            $TZFHeadType     =   ot_get_option(THEME_PREFIX. '_TZFontTypeHead','TzFontDefault');                // type font google or defaul
            $TzFHeadUrl      =   ot_get_option(THEME_PREFIX. '_TzFontHeadGoodurl');                             //  url google font
            $TZFheadFamily   =   ot_get_option(THEME_PREFIX. '_TzFontFaminyHead');                              //  font family google
            $TzFHeadSqui     =   ot_get_option(THEME_PREFIX.'_TzFontHeadSquirrel','LaconicBold');               //  font squireel
            $FHeadSelecter   =   ot_get_option(THEME_PREFIX. '_TzHeadSelecter');                                //  body selecter
            $TzFHeadDefault  =   ot_get_option(THEME_PREFIX. '_TzFontHeadDefault','Arial');                     //  font standard
            $TzHeaderFontColor   = ot_get_option(THEME_PREFIX. '_TzHeaderFontColor');                           // color

            switch($TZFHeadType){
                case'Tzgoogle':
                    $TzHeadfont = $TZFheadFamily;
                    break;
                case'TzFontDefault':
                    $TzHeadfont = "'".$TzFHeadDefault."'";
                    break;
                default:
                    $TzHeadfont = "'".$TzFHeadSqui."'";
                    break;

            }


            // end method header font


            /*
            * Method Menu font
           */

            $TZFMenuType     =   ot_get_option(THEME_PREFIX. '_TZFontTypeMenu','TzFontDefault');               // type font google or defaul
            $TzFMenuUrl      =   ot_get_option(THEME_PREFIX. '_TzFontMenuGoodurl');                            //  url google font
            $TZFMenuFamily   =   ot_get_option(THEME_PREFIX. '_TzFontFaminyMenu');                             //  font family google
            $TzFMenuSqui     =   ot_get_option(THEME_PREFIX.'_TzFontMenuSquirrel','LaconicLight');            //  font squireel
            $FMenuSelecter   =   ot_get_option(THEME_PREFIX. '_TzMenuSelecter');                               //  body selecter
            $TzFMenuDefault  =   ot_get_option(THEME_PREFIX. '_TzFontMenuDefault','Arial');                     //  font standard
            $TzMenuFontColor    = ot_get_option(THEME_PREFIX. '_TzMenuFontColor');                              // color
            switch($TZFMenuType){
                case'Tzgoogle':
                    $TzMenufont = $TZFMenuFamily;
                    break;
                case'TzFontDefault':
                    $TzMenufont = "'".$TzFMenuDefault."'";
                    break;
                default:
                    $TzMenufont = "'".$TzFMenuSqui."'";
                    break;

            }
            // end method menu font


            /*
              * Method Custom font
             */
            $TZFCustomType     =   ot_get_option(THEME_PREFIX. '_TZFontTypeCustom','TzFontDefault');               // type font google or defaul
            $TzFCustomUrl      =   ot_get_option(THEME_PREFIX. '_TzFontCustomGoodurl');                            //  url google font
            $TZFCustomFamily   =   ot_get_option(THEME_PREFIX. '_TzFontFaminyCustom');                             //  font family google
            $TzFCustomSqui     =   ot_get_option(THEME_PREFIX.'_TzFontCustomSquirrel','LaconicBold');            //  font squireel
            $FCustomSelecter   =   ot_get_option(THEME_PREFIX. '_TzCustomSelecter');                               //  body selecter
            $TzFCustomDefault  =   ot_get_option(THEME_PREFIX. '_TzFontCustomDefault','Arial');                     //  font standard
            $TzCustomFontColor     = ot_get_option(THEME_PREFIX. '_TzCustomFontColor');                             // color

            switch($TZFCustomType){
                case'Tzgoogle':
                    $TzCustomfont = $TZFCustomFamily;
                    break;
                case'TzFontDefault':
                    $TzCustomfont = "'".$TzFCustomDefault."'";
                    break;
                default:
                    $TzCustomfont = "'".$TzFCustomSqui."'";
                    break;

            }

            // end custom font

            if(isset($TzFontFamiUrl) && $TzFontFamiUrl!=""){ wp_enqueue_style('google-font', $TzFontFamiUrl, false); }

            if(isset($TzFHeadUrl) && $TzFHeadUrl!=""){ wp_enqueue_style('header-font', $TzFHeadUrl, false); }

            if(isset($TzFMenuUrl) && $TzFMenuUrl!=""){ wp_enqueue_style('menu-font', $TzFMenuUrl, false); }

            if(isset($TzFCustomUrl) && $TzFCustomUrl!=""){ wp_enqueue_style('custom-font', $TzFCustomUrl, false); }


            /*====================================
             *  Background
            =====================================*/

            $default_background_type = ot_get_option(THEME_PREFIX . '_background_type');
            $default_color           = ot_get_option(THEME_PREFIX . '_TZBackgroundColor','#ffffff');
            $default_pattern         = ot_get_option(THEME_PREFIX . '_background_pattern');
            $default_single_image    = ot_get_option(THEME_PREFIX . '_background_single_image');
            $background = '';
            switch($default_background_type){
                case 'pattern':
                    $background = 'body#bd {background: url("' . THEME_PATH .'/images/patterns/' . $default_pattern . '") repeat scroll 0 0 transparent !important;}';
                    break;
                case 'single_image':
                    $background = 'body#bd {background: url("' . $default_single_image . '") no-repeat fixed center center / cover transparent !important;}';
                    break;
                case 'none':
                    $background = 'body#bd {background: '.$default_color.' !important;}';
                    break;
                default:
                    $background = 'body#bd {background: '.$default_color.' !important;}';
                    break;
            }


            // logo
            $colorlogo  =   ot_get_option(THEME_PREFIX. '_logoTextcolor');

            $chooseslide = ot_get_option(THEME_PREFIX.'_TZShooseSlide','nivo');

            // nivo slide

            $nivo_background_info = ot_get_option(THEME_PREFIX. '_TZNivoBackground','ffffff');
            $TZNivo_color = ot_get_option(THEME_PREFIX. '_TZNivoText','ffffff');
            $TZNivo_Opa = ot_get_option(THEME_PREFIX. '_TZNivoOpacity','0.3');




            ?>
                <style type="text/css">


                        /* body  font style  */
                        <?php if(!empty($bodySelecter) && !empty($bodySelecter)){  echo $bodySelecter ; ?> { font-family:<?php echo $Tzfont; ?> !important; color: <?php echo $TzbodyFontColor; ?> !important ;  }
                        <?php }   ?>

                        /* Head font style  */
                        <?php if(!empty($FHeadSelecter) && !empty($FHeadSelecter)){  echo $FHeadSelecter ; ?> { font-family:<?php echo $TzHeadfont; ?> !important; color: <?php echo $TzHeaderFontColor; ?> !important ;  }
                        <?php }   ?>

                        /* Menu font style*/
                        <?php if(!empty($FMenuSelecter) && !empty($FMenuSelecter)){  echo $FMenuSelecter ; ?> { font-family:<?php echo $TzMenufont; ?> !important ; color: <?php echo $TzMenuFontColor; ?> !important ; }
                        <?php } ?>

                        /* Custom font style */

                        <?php if(!empty($TZFCustomType) && !empty($FCustomSelecter)):  echo $FCustomSelecter ; ?> { font-family:<?php echo $TzCustomfont; ?> !important ; color: <?php echo $TzCustomFontColor; ?> !important ;  }
                        <?php endif; ?>

                        /* color logo */

                        <?php if(isset($colorlogo) && !empty($colorlogo)): echo'.tzlogo h3 a{ color: '.$colorlogo.' }';  endif; ?>

                        /*social color*/
                        .tzsocialfont{
                            color: <?php echo ot_get_option(THEME_PREFIX . '_social_network_color','#a6a6a6'); ?> !important;
                        }

                        /*background*/
                        <?php if($background){ echo $background; } ?>

                        /* nivo slide*/
                        <?php
                            if($chooseslide=='nivo'):
                        ?>
                        #slider{
                            max-height: <?php echo ot_get_option(THEME_PREFIX . '_TZNivoHeight',"auto")."px"; ?>;
                        }
                        .background-posi{
                            background: <?php echo $nivo_background_info; ?>;
                            opacity: <?php echo $TZNivo_Opa; ?>;
                        }

                        .tz-nivo-title a,
                        p.tz-nivo-description{
                            color: <?php echo $TZNivo_color; ?>;
                        }
                        <?php
                            endif; // endif nivo
                        ?>
                        /* flexslider*/
                        <?php
                            if($chooseslide=='flexslider'):
                        ?>

                        #tz_Flexslider, #slider, #tz_Flexslider #slider .slides .info_slide{
                            max-height: <?php echo ot_get_option(THEME_PREFIX . '_TZFlexHeight',650); ?>px;
                        }
                        body div.box .flexslider .info_slide .bg-slide-overlay{
                            background: <?php echo ot_get_option(THEME_PREFIX . '_TZFlexoverlay'); ?>;
                            opacity: <?php echo ot_get_option(THEME_PREFIX . '_TZZFlexOpacity','0.3'); ?>;
                        }
                        body .box .flexslider .sl-description p,
                        body .box .flexslider .info_slide .tz_title_slide a{
                            color: <?php echo ot_get_option(THEME_PREFIX . '_TZFlextextColor','#ffffff'); ?>;
                        }

                        <?php
                            endif; // end flext
                        ?>


                </style>

            <?php

            if(ot_get_option( THEME_PREFIX . '_favicon_onoff','no') == 'yes'){

                $plazart_favicon = ot_get_option(THEME_PREFIX . '_favicon');

                if( $plazart_favicon ){

                    echo '<link rel="shortcut icon" href="' . $plazart_favicon . '" type="image/x-icon" />';

                }

            }

        } // end function config theme




            add_action('wp_head','add_zoom_background');
            function add_zoom_background(){
                $chooseslide = ot_get_option(THEME_PREFIX.'_TZShooseSlide','nivo');
                if($chooseslide=='zoomslider'):
                $zoom_id = ot_get_option(THEME_PREFIX. '_TZZoomCat',"");
                $zoom_limit = ot_get_option(THEME_PREFIX . '_TZZoomLimit',10);
                if(isset($zoom_id) && $zoom_id!=""){
                    $zoom_args = array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => $zoom_limit,
                        'orderby' => 'date',
                        'order'  => 'desc',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'portfolio-category',
                                'field'  => 'id',
                                'terms'  => $zoom_id
                            )
                        ),
                        'meta_query' => array(
                            array(
                                'key' => 'plazart_portfolio_type',
                                'value' =>'images',
                            )
                        )
                    );
                }else{
                    $zoom_args = array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => $zoom_limit,
                        'orderby' => 'date',
                        'order'   => 'desc',
                        'meta_query' => array(
                            'key'  => 'plazart_portfolio_type',
                            'value' => 'images'
                        )
                    );
                }


                $tz_results_zoom = array();
                $zoom_query = "";
                $zoom_query = new WP_Query($zoom_args);
                if($zoom_query->have_posts()):
                    while($zoom_query->have_posts()):
                        $zoom_query->the_post();

                        $data_img = "";
                        $img_full = get_post_meta(get_the_ID(),THEME_PREFIX .'_portfolio_fullsize_image',true);
                        $img_thub = wp_get_attachment_thumb_url(get_post_thumbnail_id(get_the_ID()));
                        if(isset($img_full) && !empty($img_full)){
                            $data_img = $img_full;
                        }elseif(isset($img_thub) && !empty($img_thub)){
                            $data_img = $img_thub;
                        }else{
                            $data_img = THEME_PATH.'/images/zoom_background.png';
                        }
                        $tz_results_zoom[] = $data_img;


                    endwhile; // end while($zoom_query->have_posts)
                endif; // end if($zoom_query->have_posts)
                wp_reset_postdata(); // reset data


                ?>
                <style type="text/css">
                    <?php
                        $countZoom = count($tz_results_zoom);
                        $checktime = 6 * $countZoom;
                        if($checktime>36){
                            $timetotal =36;
                        }else{
                            $timetotal = $checktime;
                        }
                        echo '.cb-slideshow li span
                        {
                            -webkit-animation: imageAnimation '.$timetotal.'s linear infinite 0s;
                            -moz-animation: imageAnimation '.$timetotal.'s linear infinite 0s;
                            -o-animation: imageAnimation '.$timetotal.'s linear infinite 0s;
                            -ms-animation: imageAnimation '.$timetotal.'s linear infinite 0s;
                            animation: imageAnimation '.$timetotal.'s linear infinite 0s;
                        }';
                        echo '.cb-slideshow li span.event
                        {
                            -webkit-animation: imageAnimationEven '.$timetotal.'s linear infinite 0s;
                            -moz-animation: imageAnimationEven '.$timetotal.'s linear infinite 0s;
                            -o-animation: imageAnimationEven '.$timetotal.'s linear infinite 0s;
                            -ms-animation: imageAnimationEven '.$timetotal.'s linear infinite 0s;
                            animation: imageAnimationEven '.$timetotal.'s linear infinite 0s;
                        }';
                        echo'.cb-slideshow li div
                            {
                                -webkit-animation: titleAnimation '.$timetotal.'s linear infinite 0s;
                                -moz-animation: titleAnimation '.$timetotal.'s linear infinite 0s;
                                -o-animation: titleAnimation '.$timetotal.'s linear infinite 0s;
                                -ms-animation: titleAnimation '.$timetotal.'s linear infinite 0s;
                                animation: titleAnimation '.$timetotal.'s linear infinite 0s;
                        }';
                        for($i=0; $i<$countZoom; $i++):
                            $j= $i+1;
                            $timer = $i *6;
                            $images = $tz_results_zoom[$i];
                            $n = $i+1;


                           echo'.cb-slideshow li:nth-child('.$j.') span {
                                background-image: url('.$images.');
                                -webkit-animation-delay: '.$timer.'s;
                                -moz-animation-delay: '.$timer.'s;
                                -o-animation-delay: '.$timer.'s;
                                -ms-animation-delay: '.$timer.'s;
                                animation-delay: '.$timer.'s;
                                }';
                            if($n>1){

                            echo'.cb-slideshow li:nth-child('.$n.') div {
                                        -webkit-animation-delay: '.$timer.'s;
                                        -moz-animation-delay: '.$timer.'s;
                                        -o-animation-delay: '.$timer.'s;
                                        -ms-animation-delay: '.$timer.'s;
                                        animation-delay: '.$timer.'s;
                            }';
                            }

                    ?>



                    <?php
                    endfor;
                    ?>
                </style>
            <?php
                endif; // endif zoomslider
            }


    endif // endif check admin

?>