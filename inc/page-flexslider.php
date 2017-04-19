<?php
    $status_flex = ot_get_option(THEME_PREFIX.'_TZFlexStatus','1');
    if($status_flex==1):
?>

<div class="box">
    <div class="tz_slideshow">
        <div id="tz_Flexslider">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php
                    $flexid = ot_get_option(THEME_PREFIX. '_TZFlexCat',"");
                    $flextlimit = ot_get_option(THEME_PREFIX . '_TZFlexLimit',5);
                    $flexttitle = ot_get_option(THEME_PREFIX.'_TZFlexShowtitle','show');
                    $flextexcript = ot_get_option(THEME_PREFIX.'_TZFlexShowexcerpt','show');
                    $thumbnail   = ot_get_option(THEME_PREFIX.'_TZFlexShowthumbnail','show');
                    if(isset($flexid) && $flexid!=""){

                        $flexags = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => $flextlimit,
                            'orderby'  => 'date',
                            'order'    => 'desc',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'portfolio-category',
                                    'filed'    => 'id',
                                    'terms'   => $flexid,
                                ),
                            ),
                            'meta_query' => array(
                                array(
                                    'key'  => 'plazart_portfolio_type',
                                    'value' => 'images',
                                ),
                            ),
                        );

                    }else{
                        $flexags = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => $flextlimit,
                            'orderby'  => 'date',
                            'order'  => 'desc',
                            'meta_query' => array(
                                array(
                                    'key'  => 'plazart_portfolio_type',
                                    'value' => 'images',
                                )
                            )
                        );
                    }

                    $img_arr = array();
                    $flext_query = "";
                    $flext_query = new WP_Query($flexags);
                    if($flext_query->have_posts()):
                        while($flext_query->have_posts()):
                            $flext_query->the_post();

                            $img_thub = wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID));
                            $img_arr[] = $img_thub;
                ?>
                    <li>
                        <div class="info_slide">
                            <img src ="<?php echo get_post_meta($post->ID,THEME_PREFIX.'_portfolio_fullsize_image',true); ?>" alt ="<?php the_title(); ?>" />
                            <div class="sl-description">
                                <?php if($flexttitle=='show'): ?>
                                <h3 class="tz_title_slide caption-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <?php endif; ?>
                                <?php if($flextexcript=='show'): the_excerpt(); endif; ?>
                            </div><!--end class sl-description-->
                            <div class="bg-slide-overlay"></div>
                        </div><!--end class info_slide-->
                    </li>
                <?php
                    endwhile; // end while(have_posts)
                endif; // end if(have_posts)
                wp_reset_postdata();
                ?>
            </ul><!--end class slides-->
        </div><!--end class slider-->
        <?php if($thumbnail=='show'): ?>
        <div id="carousel" class="flexslider">
            <ul class="slides">

                <?php
                    if(isset($img_arr) && !empty($img_arr)):
                        for($i=0;$i<count($img_arr); $i++):
                ?>
                <li>
                    <?php
                        if($img_arr[$i]!=""){
                    ?>
                        <img src ="<?php echo $img_arr[$i]; ?>" alt ="<?php echo"FlextSlider".$i; ?>" />
                    <?php }else{
                    ?>
                        <img src ="<?php echo THEME_PATH.'/images/zoom_background.png'; ?>" alt ="<?php echo"FlextSlider".$i; ?>" />
                    <?php
                        }
                    ?>
                </li>
                <?php
                         endfor; // end foreach
                    endif; // end if(isset($img_arr))
                ?>

            </ul>
        </div><!--end class carousel-->
        <?php endif; ?>
        </div><!--end class tz_Flexslider-->
    </div><!--end calss tz_slideshow-->
</div><!--end class box-->

<?php
    endif;
?>