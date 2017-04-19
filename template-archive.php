<?php
/*
 * Template Name: Template Archive
 */

get_header();
?>
<?php
$status_header =   ot_get_option(THEME_PREFIX.'_TZArchiveHeaderStatus');
$id_page_header =   ot_get_option(THEME_PREFIX.'_TZArchiveHeaderID',"");
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
$Archivesidebar = ot_get_option(THEME_PREFIX . '_TZPageArchiveslidebar','yes');
?>
<section class="tz-blog-main">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="tz-blog-wrap">
                <div class="<?php if ( $Archivesidebar == 'yes' ){ echo 'span8'; }else{ echo'span12'; } ?>">
                    <div class="tzblog-content">
                    <h1 class="tzarchive2">Archives</h1>
                        <div class="blog-content">
                        <?php
                            $month_checked = array();
                            if ( get_query_var('paged') ) {
                                $paged = get_query_var('paged');
                            } else if ( get_query_var('page') ) {
                                $paged = get_query_var('page');
                            } else {
                                $paged = 1;
                            }
                            switch($Ar_type){
                                case'1':
                                    $tzpost_type = 'portfolio';
                                    break;
                                case'2':
                                    $tzpost_type = 'post';
                                    break;
                                default:
                                    $tzpost_type = array('post','portfolio');
                                    break;
                            }
                            $args  = array(
                                'post_type'         =>    $tzpost_type,
                                'posts_per_page'    =>    $Ar_limit,
                                'paged'             =>    $paged,
                                'order'             =>    $Ar_Order
                            );
                            $archive_query    =   "";
                            $archive_query    =   new WP_Query($args);
                            if($archive_query->have_posts()): while($archive_query->have_posts()): $archive_query->the_post();
                                $type         =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_type',true);
                                $type_custom  =   get_post_type( get_the_ID() );
                                if($type_custom=='post'){
                                   $termsTag     =   get_the_tags();
                                    $termsCat     =   get_the_category();
                                }elseif($type_custom=='portfolio'){
                                    $termsTag     =   get_the_terms($post->ID, 'portfolio-tags');
                                    $termsCat     =   get_the_terms($post->ID, 'portfolio-category');
                                }

                                // check date
                                if (!in_array(array( get_the_date('Y'), get_the_date('F')), $month_checked)) {
                                    $month_checked[] = array( get_the_date('Y'), get_the_date('F') );
                                    ?>
                                        <div class="blog-content-date">
                                            <h3 class="archive-date"><?php echo get_the_date('F Y'); ?></h3>
                                        </div>
                                    <?php
                                }
                                ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class("blog-content-item"); ?>>
                                <?php
                                if($type=='quote'){
                                    $tzcontent  =   get_the_content();
                                ?>

                                        <div class="blog-info-quote">
                                            <span>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                        </div><!--end class info-blog-->
                                        <div class="tz-quote">
                                            <p>
                                                <?php echo $tzcontent ?>
                                                <span class="tzauthor"><?php the_author(); ?></span>
                                            </p>

                                        </div>

                                <?php
                                }elseif($type=='link'){
                                ?>

                                        <div class="blog-info-quote">
                                            <span>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                        </div><!--end class info-blog-->
                                        <div class="tz-link">
                                            <h3>
                                                <a href="<?php echo get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Link_Url',true); ?>">
                                                    <?php echo get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Link_Title',true); ?>
                                                </a>
                                                <i class="icon-tz-link"></i>
                                                <div class="clearfix"></div>
                                            </h3>
                                            <div class="tzlink_des">
                                                <?php the_content(); ?>
                                            </div><!--end class tzlink_des-->
                                        </div><!--end class link-->

                                <?php
                                }else{ ?>

                                        <div class="tz-blog-images">
                                            <?php if($Ar_images=='show'):  the_post_thumbnail(); endif; ?>
                                            <?php if($Ar_Info=='show'): ?>
                                                <div class="blog-info">
                                                    <span>
                                                        by
                                                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                                                            <?php the_author(); ?>
                                                        </a>
                                                    </span><!--end class info-author-->
                                                    <span>
                                                        in
                                                        <?php if(isset($termsCat) && !empty($termsCat)): ?>

                                                        <?php

                                                        if($type_custom=='post'){
                                                            foreach($termsCat as $cat){
                                                                ?>
                                                                <a href="<?php echo  get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                                                <?php


                                                            }

                                                        }elseif($type_custom=='portfolio'){

                                                            foreach ($termsCat as $term) {

                                                                //Always check if it's an error before continuing. get_term_link() can be finicky sometimes
                                                                $term_link = get_term_link( $term, 'portfolio-category' );

                                                                if( is_wp_error( $term_link ) )
                                                                    continue;
                                                                //We successfully got a link. Print it out.
                                                                echo '<a href="' . $term_link . '">' .$term->name . '</a> ';

                                                            }
                                                        }

                                                        ?>
                                                        <?php endif; ?>
                                                    </span><!--end class info-author-->
                                                    <span>
                                                        at
                                                        <i>
                                                            <?php echo get_the_date(); ?>
                                                        </i>
                                                    </span><!--end class info-author-->
                                                </div><!--end class info-blog-->
                                            <?php endif; ?>
                                        </div>
                                        <div class="blog-description">
                                            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <?php if($Ar_Excerpt=='show'): the_excerpt(); endif; ?>
                                        </div>
                                        <div class="clearfix"></div>
                                        <?php if($Ar_Tags=='show'):
                                            if( isset($termsTag) && $termsTag !=false): ?>
                                            <div class="blog-tags">
                                                Tags:
                                                <?php
                                                if($type_custom=='post'){


                                                    foreach($termsTag as $tag){

                                                        ?>
                                                        <a href="<?php echo  get_tag_link($tag->term_id); ?>"><?php echo"#".$tag->name; ?></a>
                                                        <?php

                                                    }

                                                }elseif($type_custom=='portfolio'){


                                                    foreach ($termsTag as $term):

                                                        //Always check if it's an error before continuing. get_term_link() can be finicky sometimes
                                                        $term_link = get_term_link( $term, 'portfolio-tags' );

                                                        if( is_wp_error( $term_link ) )
                                                            continue;

                                                        //We successfully got a link. Print it out.
                                                        echo '<a href="' . $term_link . '">'."#".$term->name . '</a> ';

                                                    endforeach;
                                                }

                                                ?>
                                            </div><!--end blog-tags-->
                                        <?php
                                                endif; // endif trems !=false
                                        endif; // endif tag==show
                                        ?>

                                <?php
                                }
                                ?>
                                  </div><!--end class blog-content-item-->
                                <?php

                                endwhile; // end while have posts
                            endif;    // end if have posts
                            wp_reset_postdata(); // reset data
                        ?>

                        <div class="TzPagination">
                            <?php if(function_exists('wp_pagenavi')){
                            wp_pagenavi(array( 'query' => $archive_query ));
                            }
                            ?>
                        </div><!--end class TzPagination-->
                        </div><!--end blog-content-->
                    </div><!--end class tzblog-content-->
                </div><!--end class span8-->
                <?php
                if( $Archivesidebar == 'yes' ) {
                    get_sidebar();
                }
                ?>
                <div class="clearfix"></div>
            </div><!--end class tz-blog-wrap-->
        </div><!--end class row-fluid-->
    </div><!--end class container-fluid-->
</section><!--end class tz-blog-main-->

<?php
$Status_footer =   ot_get_option(THEME_PREFIX.'_TZArchiveFooterStatus',"");
if(isset($Status_footer) && $Status_footer==1):
    $id_page_footer =   ot_get_option(THEME_PREFIX.'_TZArchiveFooterID',"");
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