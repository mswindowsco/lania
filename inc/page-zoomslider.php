<div class="tz-cb-slideshow">
    <ul class="cb-slideshow">
        <?php
            $zoom_id = ot_get_option(THEME_PREFIX. '_TZZoomCat',"");
            $zoom_limit = ot_get_option(THEME_PREFIX . '_TZZoomLimit',10);
            $zoom_title = ot_get_option(THEME_PREFIX.'_TZZoomShowtitle','show');
            $zoom_excerpt = ot_get_option(THEME_PREFIX.'_TZZoomShowexcerpt','show');
            $zoom_readmore = ot_get_option(THEME_PREFIX.'_TZZoomShowreadmore','show');
            $zoom_background_info = ot_get_option(THEME_PREFIX. '_TZZoomBackground','show');
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

            $i=1;
            $zoom_query = "";
            $zoom_query = new WP_Query($zoom_args);
            if($zoom_query->have_posts()):
                while($zoom_query->have_posts()):
                    $zoom_query->the_post();

        ?>
                    <li>
                        <?php if($i%2==0){ ?>
                        <span class="event"></span>
                        <?php }else{ ?>
                        <span></span>
                   <?php } ?>
                        <div class="tz-slideshow-content <?php if($zoom_background_info=='show'): echo"zoom_background"; endif; ?>">

                            <?php if($zoom_title=='show'): ?><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php endif; ?>
                            <?php if($zoom_excerpt=='show'): ?><?php the_excerpt(); ?><?php endif; ?>
                            <?php if($zoom_readmore=='show'): ?><a class="tz-zoom-button" href="<?php the_permalink(); ?>">Read More</a><?php endif; ?>

                        </div>
                    </li>
        <?php
                $i++;
                endwhile; // end while($zoom_query->have_posts)
            endif; // end if($zoom_query->have_posts)
        wp_reset_postdata(); // reset data
        ?>
    </ul><!--end class cb-slideshow-->
</div><!--end class tz-cb-slideshow-->

