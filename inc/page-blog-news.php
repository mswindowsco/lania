<div class="tab-pane active" id="latest">
    <ul class="tab-content-blog">
        <?php
        $idnew     =   ot_get_option(THEME_PREFIX.'_TZBlogNewCat',"");
        $limitnew  =   ot_get_option(THEME_PREFIX . '_TZBlogNewLimit',3);
        $orderby   =   ot_get_option(THEME_PREFIX . '_TZBlogNewOrderby','date');
        $order     =   ot_get_option(THEME_PREFIX . '_TZBlogNewOrder','desc');
        $newtitle   =   ot_get_option(THEME_PREFIX.'_TZBlogNewShowtitle','show');
        $newexcerpt =   ot_get_option(THEME_PREFIX.'_TZBlogNewexcerpt','show');
        $newauthor  =   ot_get_option(THEME_PREFIX.'_TZBlogNewAuthor','show');
        $newdate    =   ot_get_option(THEME_PREFIX.'_TZBlogNewdate','show');
        $newimage   =   ot_get_option(THEME_PREFIX.'_TZBlogNewimage','show');
        $newread    =   ot_get_option(THEME_PREFIX.'_TZBlogNewReadmore','show');
        if(isset($idnew) && !empty($idnew)){
            $new_blog  = array(
                'post_type'         =>   'post',
                'posts_per_page'    =>    $limitnew,
                'orderby'           =>    $orderby,
                'order'             =>    $order,
                'cat'               =>    $idnew
            );
        }else{
            $new_blog  = array(
                'post_type'         =>   'post',
                'posts_per_page'    =>    $limitnew,
                'orderby'           =>    $orderby,
                'order'             =>    $order
            );
        }
        $tznew  = new WP_Query($new_blog);
        if($tznew->have_posts()): while($tznew->have_posts()): $tznew->the_post();
            $type         = get_post_meta($post->ID,THEME_PREFIX . '_portfolio_type',true);
            $quotrauthor3  =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Quote_Autor',true);
             if($type=='quote'){
                 $tzcontent  =   get_the_content();
                 ?>
                 <li>
                 <div class="home-blog-quote">
                    <span class="quote-date">
                        <?php echo get_the_date(); ?>
                    </span>
                     <div class="tz-quote">
                         <p>
                             <?php echo $tzcontent ?>
                             <span class="tzauthor"><?php if(isset($quotrauthor3) && !empty($quotrauthor3)){ echo $quotrauthor3; }else{  the_author();  }?></span>
                         </p>

                     </div>
                 </div>
                 </li>
                 <?php
             }elseif($type=='link'){
                 ?>
                 <li>
                 <div class="home-blog-link">
                     <span class="link-date">
                        <?php echo get_the_date(); ?>
                    </span>
                     <div class="home-tz-link">
                         <h3>
                             <a href="<?php echo get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Link_Url',true); ?>">
                                 <?php echo get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Link_Title',true); ?>
                             </a>
                             <i class="icon-tz-link"></i>
                         </h3>
                         <div class="tzlink_des">
                             <?php the_content(); ?>
                         </div><!--end class tzlink_des-->
                     </div><!--end class link-->
                 </div><!--end class blog-content-item-->
                 </li>
                 <?php
             }else{
                 ?>

            <li>
                <?php if($newimage=='show'):
                if(has_post_thumbnail($post->ID)):
                ?> <div class="module-blog-img"><?php  the_post_thumbnail(); ?></div>
                    <?php
                    endif;
                endif; ?>
                <div class="tab-blog-info">
                    <?php if($newtitle=='show'): ?><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php endif; ?>
                    <span>
                        <?php if($newauthor=='show'): ?> by <a class="tzblogauthor" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>,<?php endif; ?>
                        <?php if($newdate=='show'): echo get_the_date(); endif; ?>
                    </span>
                    <?php if($newexcerpt=='show'): the_excerpt(); endif; ?>
                    <?php if($newread=='show'): ?><a class="tzblogread" href="<?php the_permalink(); ?>">Read more</a><?php endif; ?>
                </div>
                <div class="tzclear"></div>
            </li><!--end tag li-->



                 <?php
             }

                endwhile; // end while(have_posts)
            endif; // end if(have_posts)
        wp_reset_postdata();// end reset posts
        ?>
    </ul><!--end tab-content-blog-->
</div><!--end class tab-pane-->