<?php
/*
this is User
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
            <div class="container-fluid">
                <div class="resume_fluid">
                    <div class="resume_fluid_Content">
                        <?php
                        the_content();
                        ?>
                    </div>
                </div><!--end class resume_fluid-->
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
$blogsidebar = ot_get_option(THEME_PREFIX . '_tz_blogslidebar','yes');
?>
<section class="tz-blog-main">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="tz-blog-wrap">
                <div class="<?php if ( $blogsidebar == 'yes' ){ echo 'span8'; }else{ echo'span12'; } ?>">
                    <div class="tzblog-content">
                        <div class="blog-content">
                            <?php if(have_posts()) :  the_post(); ?>
                            <div class="tzuser-author">
                                <div class="tzuser-author-info">
                                    <h1><?php the_author_meta( 'display_name' ); ?></h1>
                                    <p class="tzuser-description"><?php the_author_meta('description'); ?></p>
                                </div><!--end class singke-author-info-->
                                <div class="tzuser-author-img">
                                    <?php echo get_avatar( get_the_author_meta('ID'),100 ); ?>
                                </div><!--end class single-author-img-->
                                <div class="clearfix"></div>
                            </div><!--end class tzuser-author-->
                            <?php rewind_posts(); ?>
                            <?php
                            $i=0;
                            while(have_posts()): the_post();
                                $type                =   get_post_type( get_the_ID() );
                                $quotrauthor  =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Quote_Autor',true);
                                $type_custom         =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_type',true);
                                if($type=='post'){

                                    $termsTag     =   get_the_tags();

                                    $termsCat     =   get_the_category();


                                }elseif($type=='portfolio'){


                                    $termsTag     =   get_the_terms($post->ID, 'portfolio-tags');

                                    $termsCat     =   get_the_terms($post->ID, 'portfolio-category');


                                }
                                $i++;
                                if($i<=$heading){
                                    ?>
                                    <?php
                                    if($type_custom=='quote'){
                                        $tzcontent  =   get_the_content();
                                        ?>
                                    <div class="blog-content-item">
                                        <div class="blog-info-quote">
                                            <span>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                        </div><!--end class info-blog-->
                                        <div class="tz-quote">
                                            <p>
                                                <?php echo $tzcontent ?>
                                                <span class="tzauthor"><?php if(isset($quotrauthor) && !empty($quotrauthor)){ echo $quotrauthor; }else{  the_author();  }?></span>
                                            </p>

                                        </div>
                                    </div>
                                        <?php
                                    }elseif($type_custom=='link'){
                                        ?>
                                    <div class="blog-content-item">
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
                                            </h3>
                                            <div class="tzlink_des">
                                                <?php the_content(); ?>
                                            </div><!--end class tzlink_des-->
                                        </div><!--end class link-->
                                    </div><!--end class blog-content-item-->
                                        <?php
                                    }else{
                                        ?>
                                    <div class="blog-content-heading">
                                        <?php the_post_thumbnail(); ?>
                                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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

                                        if($type=='post'){
                                            foreach($termsCat as $cat){
                                                ?>
                                                <a href="<?php echo  get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                                <?php


                                            }

                                        }elseif($type=='portfolio'){

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
                                        <div class="blog-description">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <?php if( isset($termsTag) && $termsTag !=false): ?>
                                        <div class="blog-tags">
                                            Tags:

                                            <?php
                                            if($type=='post'){

                                                foreach($termsTag as $tag){
                                                    $i++;
                                                    ?>
                                                    <a href="<?php echo  get_tag_link($tag->term_id); ?>"><?php echo"#".$tag->name; ?></a>
                                                    <?php

                                                }

                                            }elseif($type=='portfolio'){


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
                                        <?php endif; ?>
                                    </div><!--end class blog-content-item-->
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <?php
                                    if($type_custom=='quote'){
                                        $tzcontent  =   get_the_content();
                                        ?>
                                    <div class="blog-content-item">
                                        <div class="blog-info-quote">
                                                <span>
                                                    <?php echo get_the_date(); ?>
                                                </span>
                                        </div><!--end class info-blog-->
                                        <div class="tz-quote">
                                            <p>
                                                <?php echo $tzcontent ?>
                                                <span class="tzauthor"><?php if(isset($quotrauthor) && !empty($quotrauthor)){ echo $quotrauthor; }else{  the_author();  }?></span>
                                            </p>

                                        </div>
                                    </div>
                                        <?php
                                    }elseif($type_custom=='link'){
                                        ?>
                                    <div class="blog-content-item">
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
                                            </h3>
                                            <div class="tzlink_des">
                                                <?php the_content(); ?>
                                            </div><!--end class tzlink_des-->
                                        </div><!--end class link-->
                                    </div><!--end class blog-content-item-->
                                        <?php
                                    }else{
                                        ?>
                                    <div class="blog-content-item">
                                        <div class="tz-blog-images">
                                            <?php the_post_thumbnail(); ?>
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

                                            if($type=='post'){



                                                foreach($termsCat as $cat){

                                                    ?>
                                                    <a href="<?php echo  get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                                    <?php


                                                }

                                            }elseif($type=='portfolio'){

                                                $countCat   =   count($termsCat);



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
                                        </div>
                                        <div class="blog-description">
                                            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="clearfix"></div>
                                        <?php if(isset($termsTag) && $termsTag !=false): ?>
                                        <div class="blog-tags">
                                            Tags:
                                            <?php
                                            if($type=='post'){


                                                foreach($termsTag as $tag){

                                                    ?>
                                                    <a href="<?php echo  get_tag_link($tag->term_id); ?>"><?php echo"#".$tag->name; ?></a>
                                                    <?php

                                                }

                                            }elseif($type=='portfolio'){
                                                foreach ($termsTag as $termtag):

                                                    //Always check if it's an error before continuing. get_term_link() can be finicky sometimes
                                                    $term_link = get_term_link( $termtag, 'portfolio-tags' );

                                                    if( is_wp_error( $term_link ) )
                                                        continue;

                                                    //We successfully got a link. Print it out.
                                                    echo '<a href="' . $term_link . '">'."#".$termtag->name . '</a> ';

                                                endforeach;
                                            }

                                            ?>
                                        </div><!--end blog-tags-->
                                        <?php endif; ?>
                                    </div><!--end class blog-content-item-->
                                    <?php    }
                                }

                            endwhile; endif;
                            ?>

                            <div class="TzPagination">
                                <?php
                                if(function_exists('wp_pagenavi')){
                                    wp_pagenavi();
                                } else {
                                    plazart_content_nav('bottom-nav');
                                }
                                ?>
                            </div>
                        </div><!--end blog-content-->
                    </div><!--end class tzblog-content-->
                </div><!--end class span8-->
                <?php
                if( $blogsidebar == 'yes' ) {
                    get_sidebar();
                }
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