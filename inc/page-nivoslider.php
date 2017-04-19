<?php

        $nivoid =   ot_get_option(THEME_PREFIX. '_TZSlideCat',"");
        $nivo_limit = ot_get_option(THEME_PREFIX . '_TZSlideLimit',10);
        $StatusInfo = ot_get_option(THEME_PREFIX.'_TZNivoShowInfo','show');
        if(isset($nivoid) && $nivoid!=""){
            $args_nivo = array(
                'post_type' =>'portfolio',
                'posts_per_page' =>$nivo_limit,
                'orderby'   => 'date',
                'order'   => 'desc',
                'tax_query' => array(
                     array(
                        'taxonomy' => 'portfolio-category',
                        'field'    =>'id',
                         'terms' => (int)$nivoid
                     ),
                ),
                'meta_query' => array(
                    array(
                        'key'   =>  'plazart_portfolio_type',
                        'value' =>  'images'
                    ),
                ),
            );
        }else{
            $args_nivo = array(
                'post_type' => 'portfolio',
                'posts_per_page' => $nivo_limit,
                'orderby' => 'date',
                'order'=>'desc',
                'meta_query' => array(
                    array(
                        'key'   =>  'plazart_portfolio_type',
                        'value' =>  'images'
                    ),
                ),
            );
        }
$nivo_content = array();
?>
<div class="tzslider-wrapper tz-theme-default">
    <div id="slider" class="nivo-imageLink">
        <?php
            $nivo_query = "";
            $i =0;
            $nivo_query =  new WP_Query($args_nivo);
            if($nivo_query->have_posts()):
                while($nivo_query->have_posts()):
                    $nivo_query->the_post();
                    $tz_img =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_fullsize_image',true);
                    $data_image ="";
                    if(isset($tz_img) && $tz_img!=""){
                        $data_image =$tz_img;
                    }else{
                        $data_image=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
                    }
                    $nivo_content['title'][] = get_the_title();
                    $nivo_content['excerot'][]= get_the_excerpt();
                    $nivo_content['permalink'][] =get_permalink($post->ID);
            ?>

                    <img src="<?php echo $data_image; ?>" title="#htmlcaption<?php echo $i; ?>" alt="<?php the_title(); ?>" />
            <?php
                $i++;

                endwhile; // end while(have_posts)

            endif; // end if(have_posts)

            wp_reset_postdata(); // end reset posts

        ?>
    </div><!--end id slider-->
<?php
    if($StatusInfo=='show'):
        $count = count($nivo_content['title']);
        for($i=0;$i<$count;$i++):
?>
        <div id="htmlcaption<?php echo $i; ?>" class="nivo-html-caption">
            <h3 class="tz-nivo-title"><a href="<?php echo  $nivo_content['permalink'][$i]; ?>"><?php echo $nivo_content['title'][$i]; ?></a></h3>
            <p class="tz-nivo-description">
                <?php echo $nivo_content['excerot'][$i]; ?>
            </p>
                <div class="background-posi"></div>
        </div><!--end class nivo-html-caption-->
<?php
        endfor; // end for nivo_content
    endif; // if($statusInfo)
?>
</div><!--end class tzslider-wrapper-->
