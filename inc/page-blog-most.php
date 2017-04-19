<div class="tab-pane" id="popular">
    <ul class="tab-content-blog">
        <?php
        $limitmost    =   ot_get_option(THEME_PREFIX . '_TZBlogNewLimit',3);
        $orderbymost  =   ot_get_option(THEME_PREFIX . '_TZBlogNewOrderby','date');
        $ordermost    =   ot_get_option(THEME_PREFIX . '_TZBlogNewOrder','desc');
        $mosttitle   =   ot_get_option(THEME_PREFIX.'_TZBlogNewShowtitle','show');
        $mostexcerpt =   ot_get_option(THEME_PREFIX.'_TZBlogNewexcerpt','show');
        $mostauthor  =   ot_get_option(THEME_PREFIX.'_TZBlogNewAuthor','show');
        $mostdate    =   ot_get_option(THEME_PREFIX.'_TZBlogNewdate','show');
        $mostimage   =   ot_get_option(THEME_PREFIX.'_TZBlogNewimage','show');
        $mostread    =   ot_get_option(THEME_PREFIX.'_TZBlogNewReadmore','show');
        $most_blog  = array(
            'post_type'         =>   'post',
            'posts_per_page'    =>    $limitmost,
            'orderby'           =>    $orderbymost,
            'order'             =>    $ordermost,
            'meta_query'        =>  array(
                array(
                    'key'       =>  'plazart_portfolio_featured',
                    'value'     =>  'yes'
                ),
            )
        );
        $tzmost = new WP_Query($most_blog);
        if($tzmost->have_posts()): while($tzmost->have_posts()): $tzmost->the_post();
            $type         = get_post_meta($post->ID,THEME_PREFIX . '_portfolio_type',true);
            $quotrauthor2  =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Quote_Autor',true);
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
                                 <span class="tzauthor"><?php if(isset($quotrauthor2) && !empty($quotrauthor2)){ echo $quotrauthor2; }else{  the_author();  }?></span>
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

                <?php if($mostimage=='show'):
                     if(has_post_thumbnail($post->ID)):
                ?>
                <div class="module-blog-img"><?php  the_post_thumbnail(); ?></div>
                     <?php
                    endif;
                 endif; ?>
                <div class="tab-blog-info">
                    <?php if($mosttitle=='show'): ?><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php endif; ?>
                    <span>
                        <?php if($mostauthor=='show'): ?> by <a class="tzblogauthor" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>,<?php endif; ?>
                        <?php if($mostdate=='show'): echo get_the_date(); endif; ?>
                    </span>
                    <?php if($mostexcerpt=='show'): the_excerpt(); endif; ?>
                    <?php if($mostread=='show'): ?><a class="tzblogread" href="<?php the_permalink(); ?>">Read more</a><?php endif; ?>
                </div>
                <div class="tzclear"></div>
            </li><!--end tag li-->

                 <?php
             }

            endwhile;

        endif;

        wp_reset_postdata(); ?>
    </ul><!--end tab-content-blog-->
</div>