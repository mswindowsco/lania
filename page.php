<?php
/*
this is cateogry
*/
get_header();
?>

<?php
$status_header =   ot_get_option(THEME_PREFIX.'_TZBlogHeaderStatus');
$id_page_header =   ot_get_option(THEME_PREFIX.'_TZBlogHeader',"");
if(isset($status_header) && $status_header==1):
    if(isset($id_page_header) && $id_page_header!=""):
        $heade_arrs    = array(
            'post_type' =>  'page',
            'post_status'   =>  'publish',
            'p'         =>  $id_page_header,
        );
        $tz_heade_query = "";
        $tz_heade_query = new WP_Query($heade_arrs);
        if($tz_heade_query->have_posts()): while($tz_heade_query->have_posts()): $tz_heade_query->the_post();

            ?>
        <section class="resume">
            <div class="container-fluid bk-resume">
                <div class="full-width">
                    <div class="resume_fluid">
                        <div class="resume_fluid_Content">
                            <?php
                               the_content();
                               wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', TEXT_DOMAIN ), 'after' => '</div>' ) );
                            ?>
                        </div>
                    </div><!--end class resume_fluid-->
                </div>
            </div><!--end class container-fluid-->
        </section><!--end class resume-->
        <?php
        endwhile; // end while(have_posts)
        endif; // end if(have_posts)
        wp_reset_postdata(); // end reset
    endif; // end isset(id_heade)
endif; // end status
?>
<?php
$tzmetapage = get_post_meta(get_the_ID());
if(isset($tzmetapage['plazart_portfolio_sidebar']) && !empty($tzmetapage['plazart_portfolio_sidebar'])){
    $tzsidebarpage = $tzmetapage['plazart_portfolio_sidebar'][0];
}else{
    $tzsidebarpage = 'yes';
}

?>
<section class="tz-page-main">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="tz-page-wrap">
                <div class="<?php if ( $tzsidebarpage == 'yes' ) { echo 'span8'; } else { echo 'span12'; } ?>">
                    <div class="tzpage">
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <h1 class="page_title"><?php the_title(); ?></h1>
                            <div id="post-<?php the_ID(); ?>" <?php post_class("page-content"); ?>>
                           <?php
                                the_content();
                                wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', TEXT_DOMAIN ), 'after' => '</div>' ) );
                            ?>
                        </div><!--end class page-content-->
                        <?php endwhile; endif ?>
                    </div><!--end class tzpage-->
                </div><!--end class span8-->
                <?php
                    if($tzsidebarpage=='yes'):
                        get_sidebar();
                    endif;
                ?>
                <div class="clearfix"></div>
            </div><!--end class tz-blog-wrap-->
        </div><!--end class row-fluid-->
    </div><!--end class container-fluid-->
</section><!--end class tz-blog-main-->

<?php
$Status_footer =   ot_get_option(THEME_PREFIX.'_TZBlogFooterStatus',"");
if(isset($Status_footer) && $Status_footer==1):
    $id_page_footer =   ot_get_option(THEME_PREFIX.'_TZBlogFooter',"");
    if(isset($id_page_footer) && $id_page_footer!=""):
        $footer_arrs    = array(
            'post_type' =>  'page',
            'post_status'   =>  'publish',
            'p'         =>  $id_page_footer,
        );
        $tz_footer_query = "";
        $tz_footer_query = new WP_Query($footer_arrs);
        if($tz_footer_query->have_posts()): while($tz_footer_query->have_posts()): $tz_footer_query->the_post();

            ?>
        <section class="resume">
            <div class="container-fluid bk-resume">
                <div class="full-width">
                    <div class="resume_fluid">
                        <div class="resume_fluid_Content">
                            <?php
                            the_content();
                            wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', TEXT_DOMAIN ), 'after' => '</div>' ) );
                            ?>
                        </div>
                    </div><!--end class resume_fluid-->
                </div>
            </div><!--end class container-fluid-->
        </section><!--end class resume-->
        <?php
        endwhile; // end while(have_while)
        endif; // end if(have_posts)
        wp_reset_postdata(); // end postdate
    endif; // end if(id_header)
endif; // end satatus
?>
<?php

if($ClientsStatus==1):
    load_template( trailingslashit( SERVER_PATH ) . 'inc/page-clients.php' );
endif;
load_template( trailingslashit( SERVER_PATH ) . 'inc/page-breadcrumb.php' );
get_footer();
?>