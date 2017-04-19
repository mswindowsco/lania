<?php
/*
 *Template Name: Template portfolio
 */
?>
<?php
/*
this is cateogry
*/
get_header();
?>
<?php
$status_header =   ot_get_option(THEME_PREFIX.'_TZPageHeaderStatus');
$id_page_header =   ot_get_option(THEME_PREFIX.'_TZPageHeader',"");
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
<section class="tz-portfolio">
    <div class="container-fluid">
        <div id="portfolio-fluid">
            <h3 class="title-portfolio"><?php echo ot_get_option(THEME_PREFIX. '_TZProtitle','portfolio'); ?></h3>
            <?php if($ShowFilter=='show'): ?>
                <div id="filter" class="option-set clearfix" data-option-key="filter">
                    <a href="#show-all" data-option-value="*" class="selected">Show all</a>
                    <?php

                    if($typeFilter=='tags'){
                        $tags = get_terms('portfolio-tags','orderby=count&hide_empty=0');
                        if($tags !=false):
                            foreach($tags as $tztags):
                                ?>
                                <a id="<?php echo THEME_PREFIX.'-'.$tztags->slug; ?>" class="TZHide" href="#<?php echo $tztags->slug; ?>" data-option-value=".<?php echo THEME_PREFIX.'-'.$tztags->slug; ?>"><?php echo $tztags->name; ?></a>

                            <?php endforeach;
                            endif;
                    }elseif($typeFilter=='category'){
                        $filtetCat   = get_portfolio_categories();
                        if(isset($filtetCat) && !empty($filtetCat)):
                             foreach($filtetCat as $tzcat):
                                 ?>
                                 <a id="<?php echo THEME_PREFIX.'-'.$tzcat->slug; ?>" class="TZHide" href="#<?php echo $tzcat->slug; ?>" data-option-value=".<?php echo THEME_PREFIX.'-'.$tzcat->slug; ?>"><?php echo $tzcat->name; ?></a>
                                <?php endforeach;
                        endif;
                    }
                    ?>
                    <div class="clearfix"></div>
                </div><!--end id filter-->
            <?php
                endif; //end if(showfilter)
            ?>
            <div id="TzContent">
                <div id="portfolio" class="super-list variable-sizes clearfix">
                    <?php
                    if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
                    } else if ( get_query_var('page') ) {
                        $paged = get_query_var('page');
                    } else {
                        $paged = 1;
                    }

                    if(isset($idcatpor) && $idcatpor != ""){
                        $tzcat = array();
                        if(is_array($idcatpor)){
                            sort($idcatpor);
                            $count_cat  =   count($idcatpor);

                            for($i=0; $i<$count_cat; $i++){
                                $tzcat[]  =   (int)$idcatpor[$i];
                            }

                        }else{
                            $tzcat[]    = (int)$idcatpor;
                        }
                        $args   =   array(
                            'post_type' =>  'portfolio',
                            'posts_per_page'    =>  $TZPorlimit,
                            'paged'             =>  $paged,
                            'orderby'           =>  $TZPorOrderBy,
                            'order'             =>  $TZPorOrder,
                            'tax_query'         =>  array(
                                array(
                                    'taxonomy'  =>  'portfolio-category',
                                    'field'     =>  'id',
                                    'terms'     =>  $tzcat
                                ),
                            ),
                        );
                    }else{
                        $args  = array(
                            'post_type'         =>   'portfolio',
                            'posts_per_page'    =>    $TZPorlimit,
                            'paged'             =>    $paged,
                            'orderby'           =>    $TZPorOrderBy,
                            'order'             =>    $TZPorOrder,
                        );
                    }
                    $portfolio_query    =   "";
                    $portfolio_query    =   new WP_Query($args);
                    if($portfolio_query->have_posts()): while($portfolio_query->have_posts()): $portfolio_query->the_post();
                        $tz_img =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_fullsize_image',true);
                        $data_image ="";
                        if(isset($tz_img) && $tz_img!=""){
                            $data_image =$tz_img;
                        }else{
                            $data_image=wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ));
                        }
                        if($typeFilter=='tags'){
                            $TZFilter   =   get_the_terms($post->ID,'portfolio-tags');
                            $por_tags   =   get_the_terms($post->ID,'portfolio-tags');
                        }elseif($typeFilter=='category'){
                            $TZFilter   =   get_the_terms($post->ID,'portfolio-category');
                            $por_tags   =   get_the_terms($post->ID,'portfolio-tags');
                        }
                        $featured   =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_featured',TRUE);
                        if($featured=='yes'){
                            $featureds = "tz_feature_item";
                        }else{
                            $featureds='';
                        }
                        $class_tags = "";
                        if($TZFilter!=false):
                            foreach($TZFilter as $p_tags):
                                $class_tags .=  THEME_PREFIX.'-'.$p_tags->slug.' ';
                            endforeach;
                        endif;

                        ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class("element tz_item $featureds $class_tags"); ?>>
                            <div class="TzInner">
                                <div class="TZPortfolio-image">
                                    <?php the_post_thumbnail(); ?>
                                    <?php if($TZPorShowIcon=='show'): ?>
                                    <a class="tzfancybox" href="<?php echo $data_image; ?>">
                                        <i class="fa fa-search tziconsearch"></i>
                                    </a>

                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-link tziconLink"></i></a>
                                    <?php endif; ?>
                                    <div class="tzportfolio-bk"></div>
                                </div><!--end class TZPortfolio-image-->
                                <div class="TZPortfolio-info">
                                    <?php if($TZPorShowTitle=='show'): ?><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php endif; ?>

                                    <?php
                                    if($TZPorShowTags=='show'):
                                    if($por_tags!=false):
                                        ?>
                                        <p class="TZPortfolio-tags">
                                            <?php
                                            $countTags   =   count($por_tags);
                                            $i = 0;
                                            foreach($por_tags as $term):
                                                $i++;
                                                $term_link = get_term_link( $term, 'portfolio-tags' );
                                                if(is_wp_error($term_link))
                                                    continue;

                                                echo'<a href="'.$term_link.'">'.$term->name.'</a>';
                                                if($i<$countTags):
                                                    echo", ";
                                                endif;

                                            endforeach;
                                            ?>
                                        </p>
                                            <?php
                                        endif;
                                    endif;
                                    ?>
                                </div><!--end class TZPortfolio-info-->
                                <div class="clearfix"></div>

                            </div><!--end class TzInner-->
                        </div><!--end class element-->

                        <?php
                    endwhile; // end while have posts
                    endif;    // end if have posts
                    wp_reset_postdata(); // reset data

                    ?>
                    <div class="clearfix"></div>
                </div><!--end id portfolio-->
                <div id="tz_append">
                    <a href="#tz_append">Load More Projects</a>
                    <span>No Load More</span>
                </div><!--end id tz_append-->
                <div id="loadajax">
                    <?php if(function_exists('wp_pagenavi')){
                    wp_pagenavi(array( 'query' => $portfolio_query ));
                }
                    ?>
                </div><!--end id loadaj-->
            </div><!--end id TzContent-->
        </div><!--end id portfolio-fluid-->
    </div><!--end class container-fluid-->
</section><!--end class tz-portfolio-->

<?php
    $Status_footer =   ot_get_option(THEME_PREFIX.'_TZPageFooterStatus',"");
    if(isset($Status_footer) && $Status_footer==1):
    $id_page_footer =   ot_get_option(THEME_PREFIX.'_TZPageFooter',"");
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
load_template( trailingslashit( SERVER_PATH ) . 'inc/page-clients.php' );
load_template( trailingslashit( SERVER_PATH ) . 'inc/page-breadcrumb.php' );
get_footer();
?>