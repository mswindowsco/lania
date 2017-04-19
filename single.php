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
    $tzmeta = get_post_meta(get_the_ID());
    if(isset($tzmeta['plazart_portfolio_sidebar']) && !empty($tzmeta['plazart_portfolio_sidebar'])){
        $tzsidebar = $tzmeta['plazart_portfolio_sidebar'][0];
    }else{
        $tzsidebar = 'yes';
    }

?>
<section class="tz-blog-main">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="tz-blog-wrap">
                <div class="<?php if($tzsidebar=='yes'){ echo'span8'; }else{ echo'span12'; } ?>">
                    <div class="tzblog-content">
                        <?php if(have_posts()): while(have_posts()): the_post();

                                $termsTag     =   get_the_tags();

                                $termsCat     = get_the_category();

                                $type_por      =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_type',true);
                                 $tz_img       =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_fullsize_image',true);
                                 $slideshows   =   get_post_meta($post->ID,THEME_PREFIX. '_portfolio_slideshows',TRUE);
                            $VideoStyle   =   get_post_meta($post->ID,THEME_PREFIX. '_portfolio_video_type',TRUE);
                            ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('blog-single'); ?>>

                               <?php
                                   if($type_por=='images'){
                                    the_post_thumbnail();
                                   }elseif($type_por=='slideshows'){
                                       ?>
                                       <div class="tz_blog_image_gallery">

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
                                   }elseif($type_por=='audio'){
                                    ?>
                                       <div class="tz_audio">

                                           <iframe class="tz-single-audio"
                                                   src="http://w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/<?php echo get_post_meta($post->ID,THEME_PREFIX . '_portfolio_soundCloud_id',true); ?>&amp;show_artwork=true&amp;auto_play=false&amp;sharing=true&amp;buying=true&amp;download=true&amp;show_user=true&amp;show_playcount=true&amp;show_comments=true"
                                                   frameborder="0" allowfullscreen>
                                           </iframe>

                                       </div>
                                   <?php
                                   }elseif($type_por=='video'){
                                       if($VideoStyle=='youtube'){ ?>
                                           <div class="tz_portfolio_video">
                                               <iframe  class="tz_portfolio_video_attr"
                                                        src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID,THEME_PREFIX. '_portfolio_video',TRUE); ?>"
                                                        frameborder="0" allowfullscreen>
                                               </iframe>
                                           </div>
                                           <?php }elseif($VideoStyle=='vimeo'){
                                           ?>
                                           <div class="tz_portfolio_video">
                                               <iframe src="http://player.vimeo.com/video/<?php echo get_post_meta($post->ID,THEME_PREFIX. '_portfolio_video',TRUE); ?>"
                                                       class="tz_portfolio_video_attr"
                                                       frameborder="0" allowFullScreen>
                                               </iframe>
                                           </div>
                                           <?php
                                       }
                                   } ?>
                                <h3 class="single-title"><?php the_title(); ?></h3>
                                <div class="single-info">
                                    <span>
                                        by
                                         <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                                             <?php the_author(); ?>
                                         </a>
                                    </span><!--end class info-author-->
                                    <span>
                                        in
                                        <?php if($termsCat !=false): ?>
                                        <?php
                                        $countCat   =   count($termsCat);
                                        $i =0;

                                        foreach($termsCat as $cat){
                                            $i++;
                                            ?>
                                            <a href="<?php echo  get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                            <?php
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
                                <div class="single-description">
                                    <?php
                                        the_content();
                                        wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', TEXT_DOMAIN ), 'after' => '</div>' ) );
                                    ?>
                                </div><!--end class single-description-->
                                <?php if($termsTag !=false): ?>
                                <div class="single-tags">
                                    Tags:
                                    <?php

                                    $countTag   =   count($termsTag);

                                    $i = 0;

                                    foreach($termsTag as $tag){
                                        $i++;
                                        ?>
                                        <a href="<?php echo  get_tag_link($tag->term_id); ?>"><?php echo"#".$tag->name; ?></a>
                                        <?php

                                    }

                                    ?>
                                </div><!--end single-tags-->
                                <?php endif; ?>
                                <div class="share-it">
                                    <div class="share-it-title">
                                        <span>Share it!</span>
                                    </div><!--end class share-it-title-->
                                    <!-- Twitter Button -->
                                    <!-- Twitter Button -->
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

                                <div class="single-author">
                                    <div class="single-author-info">
                                        <h3>
                                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                                            <?php the_author(); ?>
                                            </a>
                                        </h3>
                                        <p class="author-description"><?php the_author_meta('description'); ?></p>

                                    </div><!--end class singke-author-info-->
                                    <div class="single-author-img">
                                        <?php echo get_avatar(get_the_author_meta('ID'),150); ?>
                                    </div><!--end class single-author-img-->
                                    <div class="clearfix"></div>
                                </div><!--end class single-author-->
                            </div><!--end blog-content-->
                            <div class="Related-articles">
                                <h3>Related articles</h3>

                                <ul>
                                    <?php
                                    if ( is_single() ) {
                                        $categories = get_the_category();
                                        if ($categories) {
                                            foreach ($categories as $category) {

                                                $cat = $category->cat_ID;
                                                $args=array(
                                                    'cat' => $cat,
                                                    'post__not_in' => array($post->ID),
                                                    'posts_per_page'=>10,
                                                    'orderby'           =>   'date',
                                                    'order'             =>   'desc',
                                                );
                                                $my_query = null;
                                                $my_query = new WP_Query($args);
                                                if( $my_query->have_posts() ) {
                                                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                                        <li>
                                                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                } //if ($my_query)
                                            } //foreach ($categories
                                        } //if ($categories)
                                        wp_reset_query();  // Restore global post data stomped by the_post().
                                    } //if (is_single())
                                    ?>
                                </ul>
                            </div><!--end class Related-articles-->
                        <?php
                            endwhile; // end while(have_posts)
                        endif; // end if(have_posts)

                        ?>
                        <div class="tz_comment">
                            <?php comments_template( '', true ); ?>
                        </div><!--end class tz_comment-->
                    </div><!--end class tzblog-content-->
                </div><!--end class span9-->
                <?php
                    if($tzsidebar=='yes'):
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