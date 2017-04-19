<?php
/*
this is single portfolio
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
<section class="tz-portfolio-single">
    <div class="container-fluid">
        <div class="portfolio-single">
            <?php
                if(have_posts()): while(have_posts()): the_post();
                setPostViews(get_the_ID());
                $type_por =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_type',true);
                $tz_img   =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_fullsize_image',true);
                $cat      =   get_the_terms($post->ID,'portfolio-category');
                $termsTag =   get_the_terms($post->ID,'portfolio-tags');
                $client   =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_client',true);
                $website  =  get_post_meta($post->ID,THEME_PREFIX . '_portfolio_website',true);
                $slideshows   =   get_post_meta($post->ID,THEME_PREFIX. '_portfolio_slideshows',TRUE);

                ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class('single-content'); ?>>

                <h1>
                    <?php the_title(); ?>
                </h1>

                  <?php
                        if($type_por=='images'){
                    ?>
                        <div class="portfolio-single-image">
                            <img src="<?php echo $tz_img; ?>" alt="<?php the_title(); ?>">
                         </div><!--end class portfoli-single-image-->
                    <?php
                        }elseif($type_por=='slideshows'){
                    ?>

                            <div class="tz_portfolio_image_gallery">

                                <div class="flexslider" id="slider">

                                    <ul class="slides">

                                        <?php if($slideshows): ?>

                                        <?php foreach($slideshows as $slide): ?>

                                            <li><img src="<?php echo $slide[ THEME_PREFIX . '_portfolio_slideshow_item']; ?>" alt="" /></li>

                                            <?php endforeach; endif; ?>

                                    </ul>

                                </div>


                            </div>
                    <?php
                        }
                    ?>

                <div class="portfolio-single-info">
                    <ul>
                        <li>
                            <span>Created</span>
                            <a href="#"><?php the_date(); ?></a>
                        </li>
                        <li>
                            <span>Category</span>
                            <?php if($cat!=false){
                            $countCat   =   count($cat);
                            $i =0;
                            foreach ($cat as $termsCat) {
                                $i++;
                                //Always check if it's an error before continuing. get_term_link() can be finicky sometimes
                                $term_link = get_term_link( $termsCat, 'portfolio-category' );
                                if( is_wp_error( $term_link ) )
                                    continue;
                                //We successfully got a link. Print it out.
                                echo '<a href="' . $term_link . '">' .$termsCat->name . '</a> ';

                            }
                            } ?>
                        </li>
                        <li>
                            <span>Tags</span>

                            <?php if($termsTag!=false){

                            $countTag   =   count($termsTag);
                            $i =0;

                            foreach ($termsTag as $term) {
                                $i++;
                                //Always check if it's an error before continuing. get_term_link() can be finicky sometimes
                                $term_link = get_term_link( $term, 'portfolio-tags' );
                                if( is_wp_error( $term_link ) )
                                    continue;
                                //We successfully got a link. Print it out.

                                if($i < $countTag){
                                    echo '<a href="' . $term_link . '">' .$term->name .",". '</a>';
                                }else{
                                    echo '<a href="' . $term_link . '">' .$term->name . '</a>';
                                }
                            }

                        } ?>
                        </li>
                        <li>
                            <span>Hits</span>
                            <a href="#"><?php echo getPostViews($post->ID) ?></a>
                        </li>
                        <?php if(isset($client) && $client!=""): ?>
                        <li>
                            <span>Client</span>
                            <a><?php echo $client; ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if(isset($website) && $website!=""): ?>
                        <li>
                            <span>Website</span>
                            <a href="<?php echo get_post_meta($post->ID,THEME_PREFIX . '_portfolio_website',true); ?>"><?php echo get_post_meta($post->ID,THEME_PREFIX . '_portfolio_website',true); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div><!--end class portfolio-single-info-->
                <div class="clearfix"></div>
                <div class="single-description">
                   <?php
                        the_content();
                        wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', TEXT_DOMAIN ), 'after' => '</div>' ) );
                    ?>
                </div><!--end class single-description-->
                <div class="share-it">
                    <div class="TwitterButton">
                        <a href="<?php the_permalink(); ?>" class="twitter-share-button" data-count="horizontal" data-via=""></a>
                    </div>
                    <!-- Facebook Button -->
                    <div class="FacebookButton">
                        <div id="fb-root"></div>
                        <script type="text/javascript">
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) {return;}
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/all.js#appId=177111755694317&xfbml=1";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-like" data-send="false" data-width="200" data-show-faces="true"
                             data-layout="button_count" data-href="<?php the_permalink(); ?>"></div>
                    </div>

                    <!-- Google +1 Button -->
                    <div class="GooglePlusOneButton">

                        <!-- Place this tag where you want the +1 button to render -->
                        <div class="g-plusone" data-size="medium" data-href="<?php the_permalink(); ?>"></div>

                        <!-- Place this render call where appropriate -->
                        <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/plusone.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                            })();
                        </script>

                    </div>
                    <!-- Pinterest Button -->
                    <div class="PinterestButton">
                        <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&description=<?php the_title(); ?>"
                           data-pin-do="buttonPin" data-pin-config="beside">
                            <img class="tzpinterest" src="//assets.pinterest.com/images/pidgets/pin_it_button.png" />
                        </a>
                        <script type="text/javascript">
                            (function(d){
                                var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
                                p.type = 'text/javascript';
                                p.async = true;
                                p.src = '//assets.pinterest.com/js/pinit.js';
                                f.parentNode.insertBefore(p, f);
                            }(document));
                        </script>
                    </div>
                    <div class="clearfix"></div>
                </div><!--end class share-it-->

            </div><!--end single-content-->
            <div class="related-project">
                <h3 class="related-title">Related Project</h3>
                <hr class="relate-hr">
                <div class="tzclear"></div>
                <div class="related-content">
                    <div class="showbiz">
                        <div class="overflowholder">
                            <ul>

                                <?php

                                $category_re   = array();
                                if($cat){
                                    foreach($cat as $cat_red){
                                        $category_re[] = $cat_red->term_id;
                                    }
                                    $args_re  = array(
                                        'post_type'         =>   'portfolio',
                                        'posts_per_page'    =>   10,
                                        'orderby'           =>   'date',
                                        'order'             =>   'desc',
                                        'post__not_in'      => array($post->ID),
                                        'tax_query'         =>   array(
                                            array(
                                                'taxonomy'  =>  'portfolio-category',
                                                'field'     =>  'id',
                                                'terms'     =>  $category_re
                                            ),
                                        ),
                                    );
                                    $query_rel  = new WP_Query($args_re);
                                    if($query_rel->have_posts()): while($query_rel->have_posts()): $query_rel->the_post();
                                        $termsTagRel =   get_the_terms($post->ID,'portfolio-tags');
                                        $tz_img =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_fullsize_image',true);

                                        $data_image ="";
                                        if(isset($tz_img) && $tz_img!=""){
                                            $data_image =$tz_img;
                                        }else{
                                            $data_image=wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ));
                                        }

                                        ?>

                                        <li class="sb-media-skin">
                                            <div class="related">
                                                <div class="related-image">
                                                    <?php the_post_thumbnail(); ?>
                                                    <a class="tzfancybox" href="<?php echo $data_image; ?>">
                                                        <i class="fa fa-search tziconsearch"></i>
                                                    </a>
                                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-link tziconLink"></i></a>
                                                    <div class="tzportfolio-bk"></div>
                                                </div><!--end class TZPortfolio-image-->
                                                <div class="related-info">
                                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    <?php
                                                    if($termsTagRel!=false):
                                                        ?>
                                                        <p class="related-tags">
                                                            <?php
                                                            $countTagsred   =   count($termsTagRel);
                                                            $i = 0;
                                                            foreach($termsTagRel as $term2):
                                                                $i++;
                                                                $term_link2 = get_term_link( $term2, 'portfolio-category' );
                                                                if(is_wp_error($term_link2))
                                                                    continue;

                                                                echo'<a href="'.$term_link2.'">'.$term2->name.'</a>';
                                                                if($i<$countTagsred):
                                                                    echo", ";
                                                                endif;

                                                            endforeach;
                                                            ?>
                                                        </p>
                                                        <?php
                                                    endif;
                                                    ?>
                                                </div><!--end class TZPortfolio-info-->
                                                <div class="clearfix"></div>
                                            </div><!--end class TzInner-->
                                        </li><!-- END OF ENTRY HERE -->

                                <?php
                                    endwhile; endif; wp_reset_query();
                                }
                                ?>
                            </ul>
                            <div class="sbclear"></div>
                        </div> <!-- end overflowholder -->
                    </div><!--end class tzshowbiz-->
                </div><!--end class related-content-->
            </div><!--end class related-project-->
            <?php
                endwhile; endif;
            ?>
        </div><!--end class portfolio-single-->
    </div><!--end class container-fluid-->
</section><!--end class tz-portfolio-single-->

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