<?php
/**
 * Initialize the meta boxes.
 */

add_action( 'admin_init', '_custom_meta_boxes' );

/*
 * Methor add meta boxes for custom post type
 */
function _custom_meta_boxes(){

    /**
     * Create a custom meta boxes array that we pass to
     * the OptionTree Meta Box API Class.
     */

    $portfolio_meta_box =   array(
      'id'          =>  'portfolio_meta_box',
      'title'       =>  'Porfolio Option',
      'desc'        =>  '',
        'pages'       => array( 'portfolio'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'label'     => 'Client',
                'id'        => THEME_PREFIX . '_portfolio_client',
                'type'      => 'text',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
            ),
            array(
                'label'     => 'Website',
                'id'        => THEME_PREFIX . '_portfolio_website',
                'type'      => 'text',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
            ),
            array(
                'label'     => 'Is Featured ?',
                'id'        => THEME_PREFIX . '_portfolio_featured',
                'type'      => 'select',
                'desc'      => '',
                'std'       => 'no',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => 'yes',
                        'label' => 'Yes',
                        'src'   => ''
                    ),
                    array(
                        'value' => 'no',
                        'label' => 'No',
                        'src'   => ''
                    )
                ),
            ),
            array(
                'label'     =>  'Portfolio Type',
                'id'        =>  THEME_PREFIX . '_portfolio_type',
                'type'      =>  'select',
                'desc'      =>  'Option type potfolio',
                'std'       =>  'none',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' => 'none',
                        'label' => 'None'
                    ),
                    array(
                        'value' => 'images',
                        'label' => 'Images'
                    ),
                    array(
                        'value' => 'slideshows',
                        'label' => 'Slideshows'
                    ),

                ),

            ),

            array(
                'label'     => 'Full Size Image',
                'id'        => THEME_PREFIX . '_portfolio_fullsize_image',
                'type'      => 'upload',
                'desc'      => 'This is the full size image.',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'portfolioImage'
            ),
            array(
                'label'     => 'Slideshow',
                'id'        => THEME_PREFIX . '_portfolio_slideshows',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => 'portfolio-slideshows',
                'settings'  => array(
                    array(
                        'id'        => THEME_PREFIX . '_portfolio_slideshow_item',
                        'label'     => 'Image',
                        'type'      => 'upload',
                        'class'     => 'portfolio-slideshow-item',
                    )
                )
            ),

        )
    );

    $post_meta_box =   array(
        'id'          =>  'post_meta_box',
        'title'       =>  'post Option',
        'desc'        =>  '',
        'pages'       => array( 'post'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(

            array(
                'label'     => 'Display sidebar',
                'id'        => THEME_PREFIX . '_portfolio_sidebar',
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'choices'   => array(
                    array(
                        'value' => 'yes',
                        'label' => 'Yes',
                        'src'   => ''
                    ),
                    array(
                        'value' => 'no',
                        'label' => 'No',
                        'src'   => ''
                    )
                ),
            ),
            array(
                'label'     => 'Is Featured ?',
                'id'        => THEME_PREFIX . '_portfolio_featured',
                'type'      => 'select',
                'desc'      => '',
                'std'       => 'no',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => 'yes',
                        'label' => 'Yes',
                        'src'   => ''
                    ),
                    array(
                        'value' => 'no',
                        'label' => 'No',
                        'src'   => ''
                    )
                ),
            ),
            array(
                'label'     =>  'Portfolio Type',
                'id'        =>  THEME_PREFIX . '_portfolio_type',
                'type'      =>  'select',
                'desc'      =>  'Option type potfolio',
                'std'       =>  'none',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' => 'none',
                        'label' => 'None'
                    ),
                    array(
                        'value' => 'images',
                        'label' => 'Images'
                    ),
                    array(
                        'value' => 'slideshows',
                        'label' => 'Slideshows'
                    ),
                    array(
                        'value' => 'video',
                        'label' => 'Video'
                    ),
                    array(
                        'value' => 'audio',
                        'label' => 'Audio'
                    ),
                    array(
                        'value' => 'quote',
                        'label' => 'Quote'
                    ),
                    array(
                        'value' => 'link',
                        'label' => 'Link'
                    ),
                ),

            ),

            array(
                'label'     => 'Full Size Image',
                'id'        => THEME_PREFIX . '_portfolio_fullsize_image',
                'type'      => 'upload',
                'desc'      => 'This is the full size image.',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'portfolioImage'
            ),
            array(
                'label'     => 'Slideshow',
                'id'        => THEME_PREFIX . '_portfolio_slideshows',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => 'portfolio-slideshows',
                'settings'  => array(
                    array(
                        'id'        => THEME_PREFIX . '_portfolio_slideshow_item',
                        'label'     => 'Image',
                        'type'      => 'upload',
                        'class'     => 'portfolio-slideshow-item',
                    )
                )
            ),
            array(

                'id'        => THEME_PREFIX . '_portfolio_video_type',
                'label'     => 'Video Type',
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',

                'choices' =>  array(
                    array(
                        'value'   =>  'youtube',
                        'label'   =>  'Youtube',
                    ),
                    array(
                        'value'  =>  'vimeo',
                        'label'   =>  'vimeo',
                    ),
                ),

            ),

            array(
                'label'     => 'Video ID',
                'id'        => THEME_PREFIX . '_portfolio_video',
                'type'      => 'textarea',
                'desc'      => '',
                'std'       => '',
                'rows'      => '4',
            ),

            array(
                'label'     => 'SoundCloud ID',
                'id'        => THEME_PREFIX . '_portfolio_soundCloud_id',
                'type'      => 'text',
                'desc'      => 'Only use for the SoundCloud',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'SoundCloudImage'
            ),

            array(
                'label'     => 'Quote Autor',
                'id'        => THEME_PREFIX . '_portfolio_Quote_Autor',
                'type'      => 'text',
                'desc'      => 'Only use for the SoundCloud',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'Quote_Autor'
            ),

            array(
                'label'     => 'Link Title',
                'id'        => THEME_PREFIX . '_portfolio_Link_Title',
                'type'      => 'text',
                'desc'      => 'Link title',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'Link_Title'
            ),
            array(
                'label'     => 'Link Url',
                'id'        => THEME_PREFIX . '_portfolio_Link_Url',
                'type'      => 'text',
                'desc'      => 'Link title',
                'std'       => '',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'Link_Url'
            ),
        )
    );

    $page_meta_box =   array(
        'id'          =>  'post_meta_box',
        'title'       =>  'Page Option',
        'desc'        =>  '',
        'pages'       => array( 'page'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(

            array(
                'label'     => 'Display sidebar',
                'id'        => THEME_PREFIX . '_portfolio_sidebar',
                'type'      => 'select',
                'desc'      => '',
                'std'       => '',
                'rows'      => '',
                'choices'   => array(
                    array(
                        'value' => 'yes',
                        'label' => 'Yes',
                        'src'   => ''
                    ),
                    array(
                        'value' => 'no',
                        'label' => 'No',
                        'src'   => ''
                    )
                ),
            ),
        )
    );

    /**
     * Register our meta boxes using the
     * ot_register_meta_box() function.
     */
    ot_register_meta_box( $portfolio_meta_box );
    ot_register_meta_box( $post_meta_box );
    ot_register_meta_box( $page_meta_box );


}
?>