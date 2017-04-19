<?php
    /*
     * The Header for our theme.
     */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Language" content="en">
    <meta name="google" content="notranslate">


    
    
    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

 
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', TEXT_DOMAIN ), max( $paged, $page ) );

        ?>
    </title>
    <?php wp_head(); ?>

<script type='text/javascript'>
jQuery(document).ready(function ($) {

    jQuery('.sidebar-container').hide();


    jQuery(window).scroll(function () {
        var scrollAmountMS = $(window).scrollTop();
        if (scrollAmountMS > 400) {
            jQuery('.sidebar-container').css("display", "block").FadeIn;
        } else {
            jQuery('.sidebar-container').css("display", "none");
        }
    });


    jQuery('#closeMS').click(function (){
        jQuery('.sidebar-container').remove();
    });

    jQuery('#submit').click(function (){
        setTimeout(function() {
    $('.sidebar-container').remove();
        }, 3000);
    });

});



</script>


</head>

<body onLoad="window.scroll(20, 20)" id="bd" <?php body_class(); ?>>


<div class="container-fluid">
<div class="row-fluid">
                <div class="span12" style="min-height:0px !important">
                <h1 class="titleonpage" style="font-size:12px;line-height:0;margin:0;padding:10px 25px 10px 0; text-align:center;"> <?php       /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );


        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', TEXT_DOMAIN ), max( $paged, $page ) );

        ?></h1>
                </div>
            </div>
        </div>



<!--
<div class="sidebar-container" style="display:none">
    <div class="sidebar">
        <div class="row-fluid">
            <div class="span12">
                <h5 style="text-align:center">Too Much To Read?</h5>
                <p style="text-align:center">Fill in the form and we’ll get one of our team to give you a call to answer any questions you may have..</p>
                <?php echo do_shortcode("[contact-form-7 id='1348' title='Sidebar']"); ?>
            </div>
        </div>
    </div>
    <div style="position:absolute; top:5px; right:25px">
        <a href="javascript:void(0);"> <i class="fa fa-times-circle-o" id="closeMS" style="text-align:center; font-size:18px"></i></br><span style="font-size:10px">CLOSE</span></a>
    </div>
</div> -->





<header id="tzheader">
    <div class="container-fluid">
        <div class="full-width">
            <div class="row-fluid">
                <div class="span3 tzlogo">
                    <h3>
                        <?php
                            $logotype = ot_get_option(THEME_PREFIX . '_logotype',1);
                            if(isset($logotype) && $logotype==1){
                                $logo = ot_get_option(THEME_PREFIX . '_logo');
                                ?>
                                <a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>"/></a>
                                <?php
                            }else{
                                $logotext   =   ot_get_option(THEME_PREFIX . '_logoText','logo');
                            ?>
                                <a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php echo $logotext; ?></a>
                        <?php } ?>
                    </h3>

                <?
                $homepage = "/";
                $currentpage = $_SERVER['REQUEST_URI'];
                if($homepage==$currentpage) {
                echo "<div style='display:none'></div>";
                }
                elseif ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p style="text-align:center" id="breadcrumbs">','</p>');
                }
                ?>
                </div><!--end class tzlogo-->
                <div class="span9 tzmenu">
                    <div  id="plazart-menu" class="navbar-inner">
                        <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span style="font-size:8px;">MENU</span>
                        </button>
                        <div class="nav-collapse collapse always-show">
                            <?php
                                if(has_nav_menu('primary')){
                                    wp_nav_menu(
                                        array(
                                            'theme_location'   =>  'primary',
                                            'menu_id'          =>   '',
                                            'menu_class'       =>   'nav',
                                            'container'        =>   false
                                        )
                                    );
                                }
                            ?>
                            <div class="tzclear"></div>
                        </div><!--end class nav-collapse-->
                    </div><!--end id plazart-menu-->
                </div><!--end class tzmenu-->
            </div><!--end class row-fluid-->
                
<div class="container-fluid bk-resume"> 
                <div class="row-fluid small-hide" style="margin:0; margin:0; background: white; font-family: RalewayRegular,Arial,sans-serif; border-top: 1px solid rgba(233,233,233,1); border-bottom: 1px solid rgba(233,233,233,1)">
                    <div class="span2" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-phone"></i> 01626 335555 </div>
                    <div class="span2 small-hide" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-phone-square"></i> <a style="color:#5c5c5c;" href="/contact-us">Request a Call Back</a></div>
                    <div class="span2 small-hide" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-envelope"></i><a style="color:#5c5c5c;" href="mailto:info@mswindows.co"> Email Us Direct</a></div>
                    <div class="span2 small-hide" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-users"></i> <a style="color:#5c5c5c;" href="/trade-accounts"> Open An Account</a></div>
                    <div class="span2 small-hide" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-file-text"></i> <a style="color:#5c5c5c;" href="/contact-us"> Email A Quote</a></div>
                    <div class="span2 small-hide" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-file-text-o"></i> <a style="color:#5c5c5c;" href="/contact-us"> Email An Order</a></div>
                </div>
                </div>

<div class="container-fluid bk-resume"> 
                <div class="row-fluid small-show" style="margin:0; margin:0; background: white; font-family: RalewayRegular,Arial,sans-serif; border-top: 1px solid rgba(233,233,233,1); border-bottom: 1px solid rgba(233,233,233,1)">
                    <div class="span6" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-phone"></i> 01626 335555 </div>
                    <div class="span6" style="color:#5c5c5c; text-align:center; padding:10px 0 10px 0;"><i class="fa fa-phone-square"></i> <a style="color:#5c5c5c;" href="/contact-us">Request a Call Back</a></div>
                </div>
</div>

        </div>
    </div><!--end class container-fluid-->
</header><!--end id tzheader-->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48388542-1', 'mswindows.co');
  ga('send', 'pageview');

</script>

