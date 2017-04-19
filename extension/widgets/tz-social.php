<?php
 /**
 * Display social
 * Widgets display social
 */

class tz_mysocial extends WP_Widget {

  /*function construct*/
  public function __construct() {
      parent::__construct(
          'social_wd',
          __('Social widgets',TEXT_DOMAIN),
          array('description'=>__(' Display social widgets ',TEXT_DOMAIN),)
      );
  }

   /* *
    *  Font - end widgets
   */
   public function widget($args,$instance) {
       extract($args);
       $tzsocial = array(
           array('id' => 'twitter', 'title' => 'Twitter'),
           array('id' => 'flickr', 'title' => 'Flickr'),
           array('id' => 'dribbble', 'title' => 'Dribbble'),
           array('id' => 'dropbox', 'title' => 'Dropbox'),
           array('id' => 'google-plus', 'title' => 'Google Plus'),
           array('id' => 'linkedin', 'title' => 'Linkedin'),
           array('id' => 'facebook-square', 'title' => 'Facebook'),
           array('id' => 'pinterest', 'title' => 'Pinterest'),
           array('id' => 'skype', 'title' => 'Skype'),
           array('id' => 'tumblr', 'title' => 'Tumblr'),
           array('id' => 'vimeo-square', 'title' => 'Vimeo'),
           array('id' => 'youtube', 'title' => 'Youtube'),
       );
   ?>
       <aside class="TZSocial">
           <h3 class="footeritemh3">Social</h3>
           <ul>
               <?php

               foreach($tzsocial as $social) {
                   $social_url = $instance[$social['id']];
                   if($social_url) {
                       ?>
                       <li>
                           <a class="tzsocialfooter fa fa-<?php echo $social['id']; ?>"></a>
                           <a href="<?php echo $social_url; ?>" alt="<?php echo $social['title']; ?>" class="socialname"><?php echo $social['title']; ?></a>
                           <div class="tzclear"></div>
                       </li>
                       <?php
                   }
               }
               ?>

           </ul>
        </aside>
   <?php
   }
   /* *
   *  Back-and widgets form
   */
    public function form( $instance ) {
        $instance = wp_parse_args($instance,array(
           'title'=> 'Social',
            'twitter' => '',
            'flickr' => '',
            'dribbble' => '',
            'dropbox' => '',
            'google-plus' => '',
            'linkedin' => '',
            'facebook-square' => '',
            'pinterest' => '',
            'skype' => '',
            'tumblr' => '',
            'vimeo-square' => '',
            'youtube' => ''
        ));
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php echo _e('Title:',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat"  name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"
                    value="<?php if(!empty($instance['title'])): echo $instance['title']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php echo _e('Twitter',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('twitter'); ?>"
                   id="<?php echo $this->get_field_id('twitter'); ?>" value="<?php if(!empty($instance['twitter'])): echo $instance['twitter']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('flickr'); ?>"><?php echo _e('Flickr',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('flickr'); ?>"
                   id="<?php echo $this->get_field_id('flickr'); ?>" value="<?php if(!empty($instance['flickr'])): echo $instance['flickr']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('dribbble'); ?>"><?php echo _e('Dribbble',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('dribbble'); ?>"
                   id="<?php echo $this->get_field_id('dribbble'); ?>" value="<?php if(!empty($instance['dribbble'])): echo $instance['dribbble']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('dropbox'); ?>"><?php echo _e('Dropbox',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('dropbox'); ?>"
                   id="<?php echo $this->get_field_id('dropbox'); ?>" value="<?php if(!empty($instance['dropbox'])): echo $instance['dropbox']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('google-plus'); ?>"><?php echo _e('Google',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('google-plus'); ?>"
                   id="<?php echo $this->get_field_id('google-plus'); ?>" value="<?php if(!empty($instance['google-plus'])): echo $instance['google-plus']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php echo _e('linkedin',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('linkedin'); ?>"
                   id="<?php echo $this->get_field_id('linkedin'); ?>" value="<?php if(!empty($instance['linkedin'])): echo $instance['linkedin']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook-square'); ?>"><?php echo _e('Facebook',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('facebook-square'); ?>"
                   id="<?php echo $this->get_field_id('facebook-square'); ?>" value="<?php if(!empty($instance['facebook-square'])): echo $instance['facebook-square']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php echo _e('Pinterest',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('pinterest'); ?>"
                   id="<?php echo $this->get_field_id('pinterest'); ?>" value="<?php if(!empty($instance['pinterest'])): echo $instance['pinterest']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('skype'); ?>"><?php echo _e('Skype',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('skype'); ?>"
                   id="<?php echo $this->get_field_id('skype'); ?>" value="<?php if(!empty($instance['skype'])): echo $instance['skype']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php echo _e('Tumblr',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('tumblr'); ?>"
                   id="<?php echo $this->get_field_id('tumblr'); ?>" value="<?php if(!empty($instance['tumblr'])): echo $instance['tumblr']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vimeo-square'); ?>"><?php echo _e('Vimeo',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('vimeo-square'); ?>"
                   id="<?php echo $this->get_field_id('vimeo-square'); ?>" value="<?php if(!empty($instance['vimeo-square'])): echo $instance['vimeo-square']; endif; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php echo _e('Youtube',TEXT_DOMAIN); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('youtube'); ?>"
                   id="<?php echo $this->get_field_id('youtube'); ?>" value="<?php if(!empty($instance['youtube'])): echo $instance['youtube']; endif; ?>" />
        </p>

        <?php
    }

     /* *
     * function update option
     */
     function update($new_instance,$old_instance){
         $instance = array();
         $instance['title'] =  ( ! empty( $new_instance['title'] ) ) ? strip_tags($new_instance['title']): '' ;
         $instance['twitter'] = ( ! empty($new_instance['twitter'])) ? strip_tags($new_instance['twitter']): '';
         $instance['flickr'] = ( ! empty($new_instance['flickr'])) ? strip_tags($new_instance['flickr']): '';
         $instance['dribbble'] = ( ! empty($new_instance['dribbble'])) ? strip_tags($new_instance['dribbble']): '';
         $instance['dropbox'] = ( ! empty($new_instance['dropbox'])) ? strip_tags($new_instance['dropbox']): '';
         $instance['google-plus'] = ( ! empty($new_instance['google-plus'])) ? strip_tags($new_instance['google-plus']): '';
         $instance['linkedin'] = ( ! empty($new_instance['linkedin'])) ? strip_tags($new_instance['linkedin']): '';
         $instance['facebook-square'] = ( ! empty($new_instance['facebook-square'])) ? strip_tags($new_instance['facebook-square']): '';
         $instance['pinterest'] = ( ! empty($new_instance['pinterest'])) ? strip_tags($new_instance['pinterest']): '';
         $instance['skype'] = ( ! empty($new_instance['skype'])) ? strip_tags($new_instance['skype']): '';
         $instance['tumblr'] = ( ! empty($new_instance['tumblr'])) ? strip_tags($new_instance['tumblr']): '';
         $instance['vimeo-square'] = ( ! empty($new_instance['vimeo-square'])) ? strip_tags($new_instance['vimeo-square']): '';
         $instance['youtube'] = ( ! empty($new_instance['youtube'])) ? strip_tags($new_instance['youtube']): '';
         return $instance;
     }


}
function registet_social_wd(){
    register_widget('tz_mysocial');
}
add_action('widgets_init','registet_social_wd');

?>