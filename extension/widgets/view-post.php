<?php

/*
 * Display posts
 * Widgets display posts by category
 */

class TzViewPost extends WP_Widget{

    function TzViewPost() {
        $widget_ops = array( 'description' => __('Display post by category','dw') );
        $this->WP_Widget( 'TZ_Post', __('TZ Post','dw'), $widget_ops );
    }


    function  widget($args,$instance){
        extract($args);
        if(isset($instance['tzcat']) && $instance['tzcat'] !=""):
            $cat = $instance['tzcat'];

            if(isset($instance['tzlimitpost']) && $instance['tzlimitpost']!=""){
                $tzlimit = $instance['tzlimitpost'];
            }else{
                $tzlimit = 5;
            }

            if(isset($instance['tzshowimage']) && $instance['tzshowimage']!=""){
                $tzshowimg = $instance['tzshowimage']    ;
            }else{
                $tzshowimg = "show";
            }
            if(isset($instance['tzshowtitle']) && $instance['tzshowtitle']!=""){
                $tzshowtitle     = $instance['tzshowtitle'];
            }else{
                $tzshowtitle    = "show";
            }
            if(isset($instance['tzshowtitle']) && $instance['tzshowtitle']!=""){
                $tzshowexcerpt  = $instance['tzshowtitle'];
            }else{
                $tzshowexcerpt  = "show";
            }

            $tzargs = array(
                'post_type'         => 'post',
                'posts_per_page'    => $tzlimit,
                'cat'               =>  $cat
            );


    ?>
            <aside class="fearture">
                <h3 class="module-title"><span><?php echo $instance['title']; ?></span></h3>
                <ul>
                    <?php
                        $tz_query = "";
                        $tz_query = new WP_Query($tzargs);
                        if($tz_query->have_posts()):
                            while($tz_query->have_posts()):
                                $tz_query->the_post();
                    ?>
                    <li>
                        <div class="fearture-item">
                            <?php if($tzshowimg=='show'): ?>
                                <div class="tz-fearture-img">
                                    <?php the_post_thumbnail(); ?>
                                </div><!--end class tz-fearture-img-->
                            <?php endif; ?>
                            <?php if($tzshowtitle=='show'): ?><h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6><?php endif; ?>
                            <?php if($tzshowexcerpt=='show'): the_excerpt() ; endif; ?>
                        </div><!--end class fearture-item-->
                    </li>
                    <?php
                            endwhile; // end while(have_posts)

                        endif;  // end if(have_posts)
                    ?>
                </ul>
            </aside>
        <?php

        endif; // endif isset(category)

    }
    function form($instance) {
        $instance = wp_parse_args( $instance, array(
            'title'             => 'Featured',
            'tzlimitpost'       =>  5,
            'tzshowimage'       => 'show',
            'tzshowtitle'       =>  'show',
            'tzshowexcerpt'     =>  'show'
        ) );

    ?>
         <p>
             <label for="<?php echo $this->get_field_id('title'); ?>">
                 <?php echo _e('Title','dw'); ?>
             </label>
             <br>
             <input type="text" name="<?php echo $this->get_field_id('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" value="<?php echo $instance['title']; ?>" >
         </p>
         <p>
             <label for="<?php echo $this->get_field_id('tzcat'); ?>">
                 <?php echo _e('Category','dw'); ?>
             </label>

             <?php
                    wp_dropdown_categories(
                                            array(
                                            'name'=>$this->get_field_name('tzcat'),
                                            'selected'=>$this->get_field_name('tzcat'),
                                            'show_count'=>true,
                                            'taxonomy'=>'category'
                                            )
                                        );
             ?>

         </p>
         <p>
             <label for="<?php echo $this->get_field_id('tzlimitpost'); ?>">
                <?php echo _e('Limit post','dw'); ?>
             </label>
             <input type="text" class="widefat"  id="<?php echo $this->get_field_id('tzlimitpost'); ?>" name="<?php echo $this->get_field_name('tzlimitpost'); ?>" value="<?php echo $instance['tzlimitpost']; ?>" >
         </p>
         <p>
             <label for="<?php echo $this->get_field_id('tzshowimage'); ?>">
                 <?php echo _e('Show Image','dw'); ?>
             </label>
             <select class="widefat"  name="<?php echo $this->get_field_name('tzshowimage'); ?>">
                 <option value="show" <?php if($instance['tzshowimage']=='show'){ echo 'selected="true"'; } ?>>Show</option>
                 <option value="hide" <?php if($instance['tzshowimage']=='hide'){ echo 'selected="true"'; } ?>>Hide</option>
             </select>

         </p>
         <p>
             <label for="<?php echo $this->get_field_id('tzshowtitle'); ?>">
                <?php echo _e('Show Title','dw'); ?>
             </label>
             <select class="widefat"  name="<?php echo $this->get_field_name('tzshowtitle'); ?>">
                <option value="show" <?php if($instance['tzshowtitle']=='show'){ echo 'selected="true"'; } ?>>Show</option>
                 <option value="hide" <?php if($instance['tzshowtitle']=='hide'){ echo 'selected="true"'; } ?>>Hide</option>
             </select>
         </p>
         <p>
             <label for="<?php echo $this->get_field_id('tzshowexcerpt'); ?>">
                <?php echo _e('Show excerpt','dw'); ?>
             </label>
             <select class="widefat"  name="<?php echo $this->get_field_name('tzshowexcerpt'); ?>">
                <option value="show" <?php if($instance['tzshowexcerpt']=='show'){ echo 'selected="true"'; } ?>>Show</option>
                 <option value="hide" <?php if($instance['tzshowexcerpt']=='hide'){ echo 'selected="true"'; } ?>>Hide</option>
             </select>
         </p>
       <?php
    }
    function update($new_instance,$old_instance){
        if( ! isset($new_instance['title']) ) {
            $new_instance['title'] = 'Featured';
        }
        if(!isset($new_instance['tzlimitpost'])){
            $new_instance['tzlimitpost'] = 5;
        }
        if(!isset($new_instance['tzcat'])){
            $new_instance['tzcat'] = "";
        }
        if(!isset($new_instance['tzshowtitle'])){
            $new_instance['tzshowtitle'] = "show";
        }
        if(!isset($new_instance['tzshowexcerpt'])){
            $new_instance['tzshowexcerpt'] = "show";
        }
        if(!isset($new_instance['tzshowimage'])){
            $new_instance['tzshowimage'] = "show";
        }
        $update_instance = $new_instance;
        return $update_instance;
    }


}

add_action('widgets_init',create_function('','return register_widget("TzViewPost");'));

?>