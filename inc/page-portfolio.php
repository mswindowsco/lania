<?php

    $TZPorCat = ot_get_option(THEME_PREFIX. '_TZPortfolioCat');
    $prolimit = ot_get_option(THEME_PREFIX . '_TZPortfoliolimit',10);
    $order   = ot_get_option(THEME_PREFIX.'_TZPortfolioOrder','desc');
?>
<section class="portfolio"">
    <div class="container-fluid bk-fullwidth">
        <div class="full-width">
            <div class="content-portfolio" style="border-top: 1px solid rgba(176,176,176,1)>
                <h3>
                    <?php echo ot_get_option(THEME_PREFIX. '_TZPortfoliotitle'); ?>
                </h3>
                <div class="boxprotfolio">
                    <div id="box_portofliocontent">
                        <div class="showbiz">
                            <div class="overflowholder">
                                <ul>
                                    <?php
                                          if(isset($TZPorCat) && $TZPorCat != ""){
                                              $cat = array();
                                              if(is_array($TZPorCat)){
                                                  sort($TZPorCat);
                                                  $count_cat  =   count($TZPorCat);

                                                      for($i=0; $i<$count_cat; $i++){
                                                          $cat[]  =   (int)$TZPorCat[$i];
                                                      }

                                              }else{
                                                   $cat[]    = (int)$TZPorCat;
                                              }
                                                    $args   =   array(
                                                        'post_type' =>  'portfolio',
                                                        'posts_per_page'    =>  $prolimit,
                                                        'paged'             =>  1,
                                                        'orderby'           =>  'rand',
                                                        'order'             =>  $order,
                                                        'tax_query'         =>  array(
                                                            array(
                                                                'taxonomy'  =>  'portfolio-category',
                                                                'field'     =>  'id',
                                                                'terms'     =>  $cat
                                                            ),
                                                        ),
                                                    );
                                          }else{
                                                    $args  = array(
                                                         'post_type'         =>   'portfolio',
                                                         'posts_per_page'    =>    $prolimit,
                                                         'paged'             =>    1,
                                                         'orderby'           =>    'rand',
                                                         'order'             =>    $order,
                                                     );
                                          }
                                          $query    =   new WP_Query($args);
                                        while($query->have_posts()): $query->the_post();
                                            $termsTag = get_the_terms($post->ID, 'portfolio-tags');
                                            $tz_img =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_fullsize_image',true);
                                            $data_image ="";
                                            if(isset($tz_img) && $tz_img!=""){
                                                $data_image =$tz_img;
                                            }else{
                                                $data_image=wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ));
                                            }
                                    ?>
                                    <li class="sb-media-skin">
                                        <div class="tzboxcontent">
                                            <div class="tz-porpage-img">
                                                <?php the_post_thumbnail(); ?>
                                                <a class="tzfancybox" href="<?php echo $data_image; ?>">
                                                    <i class="fa fa-search tziconsearch"></i>
                                                </a>
                                                
                                            </div>
                                            <h3><?php the_title(); ?></h3>
                                            <p>

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
                                                    echo '<a href="' . $term_link . '">'.$term->name .'</a>';
                                                    if($i < $countTag){
                                                        echo", ";
                                                    }
                                                }

                                            } ?>
                                            </p>
                                        </div>
                                    </li><!-- END OF ENTRY HERE -->

                                    <?php endwhile; wp_reset_postdata(); ?>
                                </ul>
                                <div class="sbclear"></div>
                            </div> <!-- end overflowholder -->
                        </div><!--end class tzshowbiz-->
                    </div><!--end box_portofliocontent-->
                </div><!--end class boxprotfolio-->
            </div><!--end class content-redleased-->
        </div><!--end full-width-->
    </div><!---end class container-fluid-->
</section><!--end class portfolio-->