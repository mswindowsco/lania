<?php
/*
 * Initialize the options before anything else.
 */

add_action('admin_init','plazat_theme_options',1);

/*
 * Build the custom settings & update OptionTree.
*/

function plazat_theme_options()
{

    /**
     * Get a copy of the saved settings array.
     */
    $saved_settings = get_option('option_tree_settings', array());


    // Pattern
    $patterns = array();
    if ($dir = opendir(SERVER_PATH . '/images/patterns/')) {
        while (false !== ($file = readdir($dir))) {
            if ($file != '..' && $file != '.') {
                $patterns[] = array(
                    'value' => trim($file),
                    'label' => 'Click on pattern to preview',
                    'src'   => THEME_PATH . '/images/patterns/' . $file, 40, 40, true
                );
            }
        }
        // Close directory handle
        closedir($dir);
    }

    /**
     * Custom settings array that will eventually be
     * passes to the OptionTree Settings API Class.
     */
    $custom_settings = array(
        'contextual_help' => array(
            'content' => array(
                array(
                    'id'      => 'general_help',
                    'title'   => 'General',
                    'content' => '<p>Help content goes here!</p>'
                ),
            ),
            'sidebar' => '<p>Sidebar content goes here!</p>'
        ),
        'sections'        => array(
            array(
                'id'    => 'logo',
                'title' => 'Logo & Favicon',
            ),
            array(
                'id'    => '404',
                'title' => '404 Page',
            ),

            array(
                'id'    => 'copyright',
                'title' => 'Copyright',
            ),
            array(
                'id'    =>  'google_analytics',
                'title' =>  'Google Analytics',
            ),
            array(
                'id'    => 'social_network',
                'title' => 'Social Network',
            ),
            array(
                'id'    =>  'TzSyle',
                'title' =>  'Style Option',
            ),
            array(
                'id'    =>  'TZBody',
                'title' =>  'Body Style',
            ),

            array(
                'id'    =>  'TzFontHeader',
                'title' =>  'Header Style',
            ),


            array(
                'id'    =>  'TzFontMenu',
                'title' =>  'Menu Style',
            ),

            array(
                'id'    =>  'TzFontCustom',
                'title' =>  'Custom Style',
            ),

            array(
                'id'    =>  'TZBackground',
                'title' =>  'Background',
            ),
            array(
                'id'    =>  'TzGlobalOption',
                'title' =>  'Global option',
            ),
            array(
                'id'    =>  'TZModuleClients',
                'title' =>  'Modules Clients'
            ),
            array(
                'id'    =>  'TZBlogPage',
                'title' =>  'Blog Settings'
            ),
            array(
                'id'    =>  'TZBlogHeader',
                'title' =>  'Blog Header'
            ),
            array(
                'id'    =>  'TZBlogFooter',
                'title' =>  'Blog Footer'
            ),
            array(
                'id'    =>  'TZPortfolio',
                'title' =>  'Portfolio Template'
            ),
            array(
                'id'    =>  'TZPageHeader',
                'title' =>  'Portfolio Header'
            ),

            array(
                'id'    =>  'TZPortfolioFooter',
                'title' =>  'Portfolio Footer'
            ),
            array(
                'id'    =>  'TZTimeline',
                'title' =>  'Timeline Template'
            ),
            array(
                'id'    =>  'TZTimelineHeader',
                'title' =>  'Timeline Header'
            ),

            array(
                'id'    =>  'TZTimelineFooter',
                'title' =>  'Timeline Footer'
            ),
            array(
                'id'    =>  'TZPageArchive',
                'title' =>  'Archive Template'
            ),
            array(
                'id'    =>  'TZArchivePageHeader',
                'title' =>  'Archive Header'
            ),

            array(
                'id'    =>  'TZArchivePageFooter',
                'title' =>  'Archive Footer'
            ),
            array(
                'id'    =>  'TZSlideSetting',
                'title' =>  'Slide Setting'
            ),
            array(
                'id'    =>  'TZNivoSetting',
                'title' =>  'Nivo Slide'
            ),
            array(
                'id'    =>  'TZZoomslider',
                'title' =>  'Zoomslider'
            ),
            array(
                'id'    =>  'TZRevslider',
                'title' =>  'Revslider'
            ),
            array(
                'id'    =>  'TZFlexslider',
                'title' =>  'Flexslider'
            ),
            array(
                'id'    =>  'TZHomePage',
                'title' =>  'Home page settings'
            ),

            array(
                'id'    =>  'TZModuleAbout',
                'title' =>  'Modules About'
            ),
            array(
                'id'    =>  'TZModuleServices',
                'title' =>  'Modules Services'
            ),
            array(
                'id'    =>  'TZModuleCompany',
                'title' =>  'Modules Company'
            ),
            array(
                'id'    =>  'TZModuleEvent',
                'title' =>  'Modules Event'
            ),
            array(
                'id'    =>  'TZModulePortfolio',
                'title' =>  'Modules Portfolio'
            ),
            array(
                'id'    =>  'TZModuleBlog',
                'title' =>  'Modules Blog'
            ),

            array(
                'id'    =>  'TZModulePage',
                'title' =>  'Modules Page'
            ),
            array(
                'id'    =>  'TZModuleQuote',
                'title' =>  'Modules Quote'
            ),
        ),

        'settings'        => array(

            array(
                'id'        => THEME_PREFIX . '_logotype',
                'label'     => 'Logo Type',
                'desc'      => '',
                'std'       => '1',
                'type'      => 'select',
                'section'   => 'logo',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => '1',
                        'label' => 'Logo image',
                    ),
                    array(
                        'value' => '0',
                        'label' => 'Logo text',
                    ),
                ),
            ),

            array(
                'id'        => THEME_PREFIX . '_logoText',
                'label'     => 'Logo Text',
                'desc'      => '',
                'std'       => 'logo',
                'type'      => 'text',
                'section'   => 'logo',
            ),

            array(
                'id'        => THEME_PREFIX . '_logoText',
                'label'     => 'Logo Text',
                'desc'      => '',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'logo',
            ),

            array(
                'id'        =>  THEME_PREFIX. '_logoTextcolor',
                'label'     => 'Color logo',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'logo',
            ),

            array(
                'id'        => THEME_PREFIX . '_logo',
                'label'     => 'Upload Logo',
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'logo',
            ),

            array(
                'id'        => THEME_PREFIX . '_favicon_onoff',
                'label'     => 'Enable Favicon',
                'desc'      => '',
                'std'       => 'no',
                'type'      => 'radio',
                'section'   => 'logo',
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
                'id'        => THEME_PREFIX . '_favicon',
                'label'     => 'Upload Favicon Icon',
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'logo',
            ),

            array(
                'id'        => THEME_PREFIX . '_404_page_content',
                'label'     => '404 Page Content',
                'desc'      => '',
                'std'       => '<h2>We\'re sorry..</h2><p>The page or journal you are looking for cannot be found</p>',
                'type'      => 'textarea',
                'section'   => '404',
                'rows'      => '15',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),


            // Copyright Settings
            array(
                'id'        => THEME_PREFIX . '_copyright',
                'label'     => 'Copyright',
                'desc'      => '',
                'std'       => '',
                'type'      => 'textarea',
                'section'   => 'copyright',
                'rows'      => '15',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            // Google Analytics
            array(
                'id'        => THEME_PREFIX . '_google_analytics',
                'label'     => 'Google Analytics',
                'desc'      => 'Place the code you get from google here. This should be something like:<br /><br /><code>   // Google analytics <br /> var _gaq = _gaq || []; <br />_gaq.push(["_setAccount", "UA-XXXXXXX-XX"]); <br /> ...</code>',
                'std'       => '',
                'type'      => 'textarea-simple',
                'section'   => 'google_analytics',
                'rows'      => '4',
            ),

            // Social Network Settings
            array(
                'id'        => THEME_PREFIX . '_social_network_size',
                'label'     => 'Size for social',
                'desc'      => '',
                'std'       => '',
                'type'      => 'Numeric-Slider',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_color',
                'label'     => 'Color for social',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_facebook',
                'label'     => 'Facebook',
                'desc'      => 'Place the link you want and Facebook icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_twitter',
                'label'     => 'Twitter',
                'desc'      => 'Place the link you want and Twitter icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_flickr',
                'label'     => 'Flickr',
                'desc'      => 'Place the link you want and Flickr icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_dribbble',
                'label'     => 'Dribbble',
                'desc'      => 'Place the link you want and Dribbble icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_dropbox',
                'label'     => 'Dropbox',
                'desc'      => 'Place the link you want and Dropbox icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_google-plus',
                'label'     => 'Google Plus',
                'desc'      => 'Place the link you want and Google Plus icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_linkedin',
                'label'     => 'linkedin',
                'desc'      => 'Place the link you want and linkedin icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_foursquare',
                'label'     => 'Foursquare',
                'desc'      => 'Place the link you want and Foursquare icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_pinterest',
                'label'     => 'Pinterest',
                'desc'      => 'Place the link you want and pinterest icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            array(
                'id'        => THEME_PREFIX . '_social_network_skype',
                'label'     => 'Skype',
                'desc'      => 'Place the link you want and Skype icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_tumblr',
                'label'     => 'Tumblr',
                'desc'      => 'Place the link you want and Tumblr icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_vimeo-square',
                'label'     => 'Vimeo',
                'desc'      => 'Place the link you want and Vimeo icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_social_network_youtube',
                'label'     => 'Youtube',
                'desc'      => 'Place the link you want and Youtube icon will appear. To remove it, just leave it blank.',
                'std'       => '',
                'type'      => 'text',
                'section'   => 'social_network',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id' =>  THEME_PREFIX.'_TzSyle',
                'label'     => 'StyleConfig',
                'desc'      => '<p>Config for body style, header style, menu style, custom style, background</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TzSyle',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            // font style body -----------------------------------------------------------------------
            array(
                'id'        =>  THEME_PREFIX. '_TZFontType',
                'label'     =>  'Font Type',
                'desc'      =>  'option font type',
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TZBody',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  'btn-group',
                'choices'   =>  array(
                    array(
                        'value' =>  'TzFontSquirrel',
                        'label' =>  'Squirrel Font',
                    ),
                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  'Goole Font',
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  'Standard Font',
                    ),


                ),
            ),

            // Squirrel font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontDefault',
                'label'    =>   'Select Standard Font ',
                'desc'     =>   '',
                'type'     =>   'select',
                'section'  =>   'TZBody',
                'class'    =>   'TzFontStylet',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  'Arial',
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  'Tahoma',
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  'Verdana',
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  'Georgia',
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  'Impact',
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  'Times',
                    ),
                )
            ),

            //default font
            array(
                'id'        =>  THEME_PREFIX .'_TzFontSquirrel',
                'label'     =>  'Select Squirrel  Font ',
                'desc'      =>  '',
                'type'      =>  'select',
                'section'   =>  'TZBody',
                'choices'   =>  array(
                    array(
                        'value'  =>  'OpenSansRegular',
                        'label'  =>  'OpenSansRegular',
                    ),
                ),
            ),

            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFami',
                'label' =>  'Google Url',
                'desc'  =>  'http://www.google.com/fonts/',
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TZBody'
            ),

            // body font
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFaminy',
                'label' =>  'Font Family',
                'desc'  =>  '',
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TZBody',
            ),
            // color code
            array(
                'id'        =>  THEME_PREFIX. '_TzBodyColor',
                'label'     => 'Color code',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZBody',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzBodySelecter',
                'label'     =>  'Body Selectors',
                'desc'      =>  'you can specify a selector for font used in the document body',
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TZBody',
                'rows'      =>  '10',
            ),
            // end font style body


            // font style Header -----------------------------------------------------------------------
            array(
                'id'        =>  THEME_PREFIX. '_TZFontTypeHead',
                'label'     =>  'Font Type',
                'desc'      =>  'option font type',
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontHeader',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'TzFontSquirrel',
                        'label' =>  'Squirrel Font',
                    ),
                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  'Goole Font',
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  'Standard Font',
                    ),


                ),
            ),

            // Squirrel font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontHeadDefault',
                'label'    =>   'Select Standard Font ',
                'desc'     =>   '',
                'type'     =>   'select',
                'section'  =>   'TzFontHeader',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  'Arial',
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  'Tahoma',
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  'Verdana',
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  'Georgia',
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  'Impact',
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  'Times',
                    ),
                )
            ),

            //default font
            array(
                'id'        =>  THEME_PREFIX .'_TzFontHeadSquirrel',
                'label'     =>  'Select Squirrel  Font ',
                'desc'      =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontHeader',
                'choices'   =>  array(
                    array(
                        'value'  =>  'OpenSansRegular',
                        'label'  =>  'OpenSansRegular',
                    ),
                ),
            ),

            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontHeadGoodurl',
                'label' =>  'Google Url',
                'desc'  =>  'http://www.google.com/fonts/',
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontHeader'
            ),

            // body font
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFaminyHead',
                'label' =>  'Font Family',
                'desc'  =>  '',
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontHeader',
            ),
            array(
                'id'    =>  THEME_PREFIX. '_TzHeaderFontColor',
                'label'     => 'Color code',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TzFontHeader',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzHeadSelecter',
                'label'     =>  'Header Selecter',
                'desc'      =>  'you can specify a selector for font used in the document Header',
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TzFontHeader',
                'rows'      =>  '10',
            ),

            // end font header

            // font  Menu -----------------------------------------------------------------------

            array(
                'id'        =>  THEME_PREFIX. '_TZFontTypeMenu',
                'label'     =>  'Font Type',
                'desc'      =>  'option font type',
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontMenu',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'TzFontSquirrel',
                        'label' =>  'Squirrel Font',
                    ),
                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  'Goole Font',
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  'Standard Font',
                    ),


                ),
            ),

            // Squirrel font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontMenuDefault',
                'label'    =>   'Select Standard Font ',
                'desc'     =>   '',
                'type'     =>   'select',
                'section'  =>   'TzFontMenu',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  'Arial',
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  'Tahoma',
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  'Verdana',
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  'Georgia',
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  'Impact',
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  'Times',
                    ),
                )
            ),

            //default font
            array(
                'id'        =>  THEME_PREFIX .'_TzFontMenuSquirrel',
                'label'     =>  'Select Squirrel  Font ',
                'desc'      =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontMenu',
                'choices'   =>  array(
                    array(
                        'value'  =>  'OpenSansRegular',
                        'label'  =>  'OpenSansRegular',
                    ),
                ),
            ),

            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontMenuGoodurl',
                'label' =>  'Google Url',
                'desc'  =>  'http://www.google.com/fonts/',
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontMenu'
            ),

            // Font Family
            array(
                'id'    =>  THEME_PREFIX. '_TzFontFaminyMenu',
                'label' =>  'Font Family',
                'desc'  =>  '',
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontMenu',
            ),

            array(
                'id'    =>  THEME_PREFIX. '_TzMenuFontColor',
                'label'     => 'Color code',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TzFontMenu',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzMenuSelecter',
                'label'     =>  'Menu Selectors',
                'desc'      =>  '',
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TzFontMenu',
                'rows'      =>  '10',
            ),
            /*---end menu font--*/



            // font style custom -----------------------------------------------------------------------
            array(
                'id'        =>  THEME_PREFIX. '_TZFontTypeCustom',
                'label'     =>  'Font Type',
                'desc'      =>  'option font type',
                'std'       =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontCustom',
                'rows'      =>  '',
                'post_type' =>  '',
                'taxonomy'  =>  '',
                'class'     =>  '',
                'choices'   =>  array(
                    array(
                        'value' =>  'TzFontSquirrel',
                        'label' =>  'Squirrel Font',
                    ),

                    array(
                        'value' =>  'Tzgoogle',
                        'label' =>  'Goole Font',
                    ),
                    array(
                        'value' =>  'TzFontDefault',
                        'label' =>  'Standard Font',
                    ),

                ),
            ),

            // Squirrel font
            array(
                'id'       =>   THEME_PREFIX.'_TzFontCustomDefault',
                'label'    =>   'Select Standard Font ',
                'desc'     =>   '',
                'type'     =>   'select',
                'section'  =>   'TzFontCustom',
                'choices'  =>   array(
                    array(
                        'value'  =>  'Arial',
                        'label'  =>  'Arial',
                    ),
                    array(
                        'value'  =>  'Tahoma',
                        'label'  =>  'Tahoma',
                    ),
                    array(
                        'value'  =>  'Verdana',
                        'label'  =>  'Verdana',
                    ),
                    array(
                        'value'  =>  'Georgia',
                        'label'  =>  'Georgia',
                    ),
                    array(
                        'value'  =>  'Impact',
                        'label'  =>  'Impact',
                    ),
                    array(
                        'value'  =>  'Times',
                        'label'  =>  'Times',
                    ),
                )
            ),

            //default font
            array(
                'id'        =>  THEME_PREFIX .'_TzFontCustomSquirrel',
                'label'     =>  'Select Squirrel  Font ',
                'desc'      =>  '',
                'type'      =>  'select',
                'section'   =>  'TzFontCustom',
                'choices'   =>  array(
                    array(
                        'value'  =>  'OpenSansRegular',
                        'label'  =>  'OpenSansRegular',
                    ),
                ),
            ),

            // google url
            array(
                'id'    =>  THEME_PREFIX. '_TzFontCustomGoodurl',
                'label' =>  'Google Url',
                'desc'  =>  'http://www.google.com/fonts/',
                'std'   =>  '',
                'type'  =>  'text',
                'section'=> 'TzFontCustom'
            ),

            // body font
            array(
                'id'       =>  THEME_PREFIX. '_TzFontFaminyCustom',
                'label'    =>  'Font Family',
                'desc'     =>  '',
                'std'      =>  '',
                'type'     =>  'text',
                'section'  => 'TzFontCustom',
            ),

            array(
                'id'        =>  THEME_PREFIX. '_TzCustomFontColor',
                'label'     =>  'Color code',
                'desc'      =>  '',
                'std'       =>  '',
                'type'      => 'colorpicker',
                'section'   => 'TzFontCustom',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TzCustomSelecter',
                'label'     =>  'Custom Selecter',
                'desc'      =>  'you can specify a selector for font used in the document Custom',
                'std'       =>  '',
                'type'      =>  'textarea-simple',
                'section'   =>  'TzFontCustom',
                'rows'      =>  '10',
            ),
            // end font custom


            // OptionAdmin
            array(
                'id'        =>  THEME_PREFIX.'_TzThemeStyleOptionAdmin',
                'label'     =>  'Show toolbar admin',
                'desc'      =>  '',
                'std'       =>  '0',
                'type'      =>  'select',
                'section'   =>  'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Hide',
                    ),

                ),
            ),
            // setting width
            array(
                'id'        =>  THEME_PREFIX.'_TzThemehomewidth',
                'label'     =>  'Config width for website',
                'desc'      =>  '',
                'std'       =>  'no',
                'type'      =>  'select',
                'section'   =>  'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  'no',
                        'label' =>  'No',
                    ),
                    array(
                        'value' =>  'yes',
                        'label' =>  'Full width',
                    ),

                ),
            ),
            // OptionAdmin
            array(
                'id'        =>  THEME_PREFIX.'_TzThemeStyle',
                'label'     =>  'Right to left',
                'desc'      =>  'Display theme by right to left',
                'std'       =>  'left',
                'type'      =>  'select',
                'section'   =>  'TzGlobalOption',
                'choices'   =>  array(
                    array(
                        'value' =>  'left',
                        'label' =>  'Left',
                    ),
                    array(
                        'value' =>  'right',
                        'label' =>  'Right',
                    ),

                ),
            ),
            // limit excerpt
            array(
                'label'     => 'Limit excerpt',
                'id'        => THEME_PREFIX . '_porlimitexcerpt',
                'type'      => 'text',
                'desc'      => '',
                'std'       => '',
                'section'   => 'TzGlobalOption',
            ),

            /*---------------------end themestyle--------------------*/

            /* Background */

            array(
                'id'        => 'cbackground',
                'label'     => 'Background',
                'desc'      => '<p>Default background for Post, Page, Portfolio, Category, Archive, Seach page.</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_background_type',
                'label'     => 'Background Type',
                'desc'      => 'You can choose the background you want between our pre-provided pattern and your custom image.',
                'std'       => 'none',
                'type'      => 'select',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   => array(
                    array(
                        'value' => 'none',
                        'label' => 'Default',
                    ),
                    array(
                        'value' => 'pattern',
                        'label' => 'Pattern',
                    ),
                    array(
                        'value' => 'single_image',
                        'label' => 'Single image',
                    ),
                ),
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZBackgroundColor',
                'label'     => 'Color code',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZBackground',
            ),
            array(
                'id'        => THEME_PREFIX . '_background_pattern',
                'label'     => 'Choose Pattern',
                'desc'      => '',
                'std'       => '',
                'type'      => 'radio-image',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => 'background_pattern',
                'choices'   => $patterns
            ),
            array(
                'id'        => THEME_PREFIX . '_background_single_image',
                'label'     => 'Single Image Background',
                'desc'      => '',
                'std'       => '',
                'type'      => 'upload',
                'section'   => 'TZBackground',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            /* End Background */

            /*------------------TZHomePage--------------------*/
            array(
                'id'        => 'TzHomePageId',
                'label'     => 'Home Page Settings',
                'desc'      => '<p>Home Page Template Configuration</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZHomePage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            /*-----------Module slide---------------------*/
            array(
                'id'        => 'TZSlideSettingDS',
                'label'     => 'Description',
                'desc'      => '<p>Lania theme provides you with 4 slides in which has 3 slides are integrated, Nivo Slide, Flexslider, ZoomSlide. With Revolution Slide, you need to install revslider plugin.</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZSlideSetting',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'choose Slide',
                'id'          =>  THEME_PREFIX.'_TZShooseSlide',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'nivo',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZSlideSetting',
                'choices'     =>  array(
                    array(
                        'value' =>  'nivo',
                        'label' =>  'Nivo slide',
                    ),
                    array(
                        'value' =>  'flexslider',
                        'label' =>  'Flexslider',
                    ),
                    array(
                        'value' =>  'zoomslider',
                        'label' =>  'Zoomslider',
                    ),
                    array(
                        'value' =>  'revslider',
                        'label' =>  'Revolution Slider',
                    ),

                ),
            ),
            // nivo slide
            array(
                'label'       => 'Display Category',
                'id'          => THEME_PREFIX. '_TZSlideCat',
                'type'        => 'taxonomy-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => 'portfolio-category',
                'class'       => '',
                'section'     => 'TZNivoSetting'
            ),
            array(
                'label'       =>  'choose effect',
                'id'          =>  THEME_PREFIX.'_TZNivoEffect',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'fade',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZNivoSetting',
                'choices'     =>  array(
                    array(
                        'value' =>  'fade',
                        'label' =>  'fade',
                    ),
                    array(
                        'value' =>  'sliceDown',
                        'label' =>  'sliceDown',
                    ),
                    array(
                        'value' =>  'fold',
                        'label' =>  'fold',
                    ),
                    array(
                        'value' =>  'random',
                        'label' =>  'random',
                    ),
                    array(
                        'value' =>  'sliceDownLeft',
                        'label' =>  'sliceDownLeft',
                    ),
                    array(
                        'value' =>  'sliceUp',
                        'label' =>  'sliceUp',
                    ),
                    array(
                        'value' =>  'sliceUpLeft',
                        'label' =>  'sliceUpLeft',
                    ),
                    array(
                        'value' =>  'sliceUpDown',
                        'label' =>  'sliceUpDown',
                    ),
                    array(
                        'value' =>  'sliceUpDownLeft',
                        'label' =>  'sliceUpDownLeft',
                    ),
                    array(
                        'value' =>  'slideInRight',
                        'label' =>  'slideInRight',
                    ),
                    array(
                        'value' =>  'slideInLeft',
                        'label' =>  'slideInLeft',
                    ),
                    array(
                        'value' =>  'boxRandom',
                        'label' =>  'boxRandom',
                    ),
                    array(
                        'value' =>  'boxRain',
                        'label' =>  'boxRain',
                    ),
                    array(
                        'value' =>  'boxRainReverse',
                        'label' =>  'boxRainReverse',
                    ),
                    array(
                        'value' =>  'boxRainGrow',
                        'label' =>  'boxRainGrow',
                    ),
                    array(
                        'value' =>  'boxRainGrowReverse',
                        'label' =>  'boxRainGrowReverse',
                    ),


                ),
            ),
            array(
                'label'       =>  'Numbers cols for box animations',
                'id'          =>  THEME_PREFIX.'_TZNivoCols',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '8',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZNivoSetting',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                ),
            ),
            array(
                'label'       =>  'Numbers rows for box animations',
                'id'          =>  THEME_PREFIX.'_TZNivorows',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '4',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZNivoSetting',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),

                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZSlideLimit',
                'label'     => 'Slide Limit',
                'desc'      => '',
                'std'       => '10',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZNivoSetting',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZNivoHeight',
                'label'     => 'Max height',
                'desc'      => '',
                'std'       => 'auto',
                'type'      => 'text',
                'section'   => 'TZNivoSetting',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZNivoTransition',
                'label'     => 'Slide transition speed',
                'desc'      => 'ms (default 500ms)',
                'std'       => '500',
                'type'      => 'text',
                'section'   => 'TZNivoSetting',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZNivoPause',
                'label'     => 'Pause time between the transitions',
                'desc'      => 'ms (default 3000ms)',
                'std'       => '3000',
                'type'      => 'text',
                'section'   => 'TZNivoSetting',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Show or Hide Info',
                'id'          =>  THEME_PREFIX.'_TZNivoShowInfo',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZNivoSetting',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZNivoBackground',
                'label'     => 'Background color Info',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZNivoSetting',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZNivoText',
                'label'     => 'Text color Info',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZNivoSetting',
            ),
            array(
                'label'       =>  'Opacity background color Info',
                'id'          =>  THEME_PREFIX.'_TZNivoOpacity',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '0.3',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZNivoSetting',
                'choices'     =>  array(
                    array(
                        'value' =>  '0.1',
                        'label' =>  '0.1',
                    ),
                    array(
                        'value' =>  '0.2',
                        'label' =>  '0.2',
                    ),
                    array(
                        'value' =>  '0.3',
                        'label' =>  '0.3',
                    ),
                    array(
                        'value' =>  '0.4',
                        'label' =>  '0.4',
                    ),
                    array(
                        'value' =>  '0.5',
                        'label' =>  '0.5',
                    ),
                    array(
                        'value' =>  '0.6',
                        'label' =>  '0.6',
                    ),
                    array(
                        'value' =>  '0.7',
                        'label' =>  '0.7',
                    ),
                    array(
                        'value' =>  '0.8',
                        'label' =>  '0.8',
                    ),
                    array(
                        'value' =>  '0.9',
                        'label' =>  '0.9',
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),



                ),
            ),
            //------------------------ TZZoomslider
            array(
                'label'       => 'Display Category',
                'id'          => THEME_PREFIX. '_TZZoomCat',
                'type'        => 'taxonomy-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => 'portfolio-category',
                'class'       => '',
                'section'     => 'TZZoomslider'
            ),

            array(
                'id'        => THEME_PREFIX . '_TZZoomLimit',
                'label'     => 'Slide Limit',
                'desc'      => '',
                'std'       => '10',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZZoomslider',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZZoomHeight',
                'label'     => 'Max height',
                'desc'      => '',
                'std'       => '500',
                'type'      => 'text',
                'section'   => 'TZZoomslider',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            array(
                'label'       =>  'Show or hide background info',
                'id'          =>  THEME_PREFIX.'_TZZoomBackground',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZZoomslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show or hide title',
                'id'          =>  THEME_PREFIX.'_TZZoomShowtitle',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZZoomslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show or hide excerpt',
                'id'          =>  THEME_PREFIX.'_TZZoomShowexcerpt',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZZoomslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show or hide readmore',
                'id'          =>  THEME_PREFIX.'_TZZoomShowreadmore',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZZoomslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),


            // module revi
            array(
                'label'      => 'alias slide',
                'id'          =>  THEME_PREFIX.'_TZAliasSlide',
                'type'        =>  'text',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'    => 'TZRevslider'
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZSlideStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZRevslider',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            // module TZFlexslider
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZFlexStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZFlexslider',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display Category',
                'id'          => THEME_PREFIX. '_TZFlexCat',
                'type'        => 'taxonomy-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => 'portfolio-category',
                'class'       => '',
                'section'     => 'TZFlexslider'
            ),
            array(
                'label'       =>  'choose effect',
                'id'          =>  THEME_PREFIX.'_TZFlexeffect',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'fade',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZFlexslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'fade',
                        'label' =>  'Fade',
                    ),
                    array(
                        'value' =>  'Slide',
                        'label' =>  'slide',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZFlexLimit',
                'label'     => 'Slide Limit',
                'desc'      => '',
                'std'       => '5',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZFlexslider',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZFlexHeight',
                'label'     => 'Max height',
                'desc'      => '',
                'std'       => '650',
                'type'      => 'text',
                'section'   => 'TZFlexslider',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZFlexthumbnail',
                'label'     => 'Width thumbnail',
                'desc'      => '',
                'std'       => '206',
                'type'      => 'text',
                'section'   => 'TZFlexslider',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZFlextextColor',
                'label'     => 'Color for title and excerpt',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZFlexslider',
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZFlexoverlay',
                'label'     => 'Background overlay',
                'desc'      => '',
                'std'       => '',
                'type'      => 'colorpicker',
                'section'   => 'TZFlexslider',
            ),
            array(
                'label'       =>  'Opacity background overlay',
                'id'          =>  THEME_PREFIX.'_TZZFlexOpacity',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '0.3',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZFlexslider',
                'choices'     =>  array(
                    array(
                        'value' =>  '0.1',
                        'label' =>  '0.1',
                    ),
                    array(
                        'value' =>  '0.2',
                        'label' =>  '0.2',
                    ),
                    array(
                        'value' =>  '0.3',
                        'label' =>  '0.3',
                    ),
                    array(
                        'value' =>  '0.4',
                        'label' =>  '0.4',
                    ),
                    array(
                        'value' =>  '0.5',
                        'label' =>  '0.5',
                    ),
                    array(
                        'value' =>  '0.6',
                        'label' =>  '0.6',
                    ),
                    array(
                        'value' =>  '0.7',
                        'label' =>  '0.7',
                    ),
                    array(
                        'value' =>  '0.8',
                        'label' =>  '0.8',
                    ),
                    array(
                        'value' =>  '0.9',
                        'label' =>  '0.9',
                    ),
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),

                ),
            ),
            array(
                'label'       =>  'Show or hide thumbnail',
                'id'          =>  THEME_PREFIX.'_TZFlexShowthumbnail',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZFlexslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show or hide title',
                'id'          =>  THEME_PREFIX.'_TZFlexShowtitle',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZFlexslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show or hide excerpt',
                'id'          =>  THEME_PREFIX.'_TZFlexShowexcerpt',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZFlexslider',
                'choices'     =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),

            /*-----------Module About us------------------*/

            array(
                'label'       =>  'Position About us',
                'id'          =>  THEME_PREFIX.'_TZAboutPosition',
                'type'        =>  'select',
                'desc'        =>  'Select the display module position',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleAbout',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Position 1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  'Position 2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  'Position 3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  'Position 4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  'Position 5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  'Position 6',
                    ),
                ),
            ),
            array(
                'id'          => 'tz_my_layout',
                'label'       => '',
                'desc'        => '',
                'std'         => '',
                'type'        => 'radio-image',
                'section'     => 'TZModuleAbout',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'position_1',
                        'label'   => 'Position 1',
                        'src'     => OT_URL . '/assets/images/layout/ps_1.jpg'
                    ),
                    array(
                        'value'   => 'position_2',
                        'label'   => 'Position 2',
                        'src'     => OT_URL . '/assets/images/layout/ps_2.jpg'
                    ),
                    array(
                        'value'   => 'position_3',
                        'label'   => 'Position 3',
                        'src'     => OT_URL . '/assets/images/layout/ps_3.jpg'
                    ),
                    array(
                        'value'   => 'position_4',
                        'label'   => 'Position 4',
                        'src'     => OT_URL . '/assets/images/layout/ps_4.jpg'
                    ),
                    array(
                        'value'   => 'position_5',
                        'label'   => 'position_6',
                        'src'     => OT_URL . '/assets/images/layout/ps_5.jpg'
                    ),
                    array(
                        'value'   => 'position_6',
                        'label'   => 'Position 6',
                        'src'     => OT_URL . '/assets/images/layout/ps_6.jpg'
                    )
                )
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZAboutStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleAbout',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX. '_TZAboutPage',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'class'       => '',
                'section'     => 'TZModuleAbout'
            ),
            array(
                'label'     => 'Employee',
                'id'        => THEME_PREFIX . '_porOption_Employee',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => 'portfolio-list',
                'section'  =>   'TZModuleAbout',
                'settings'  => array(

                    array(
                        'id'        => THEME_PREFIX . '_portfolio_slideshow_item',
                        'label'     => 'Image',
                        'type'      => 'upload',
                        'class'     => '',
                    ),
                    array(
                        'id'        => THEME_PREFIX . '_portfolio_Name_item',
                        'label'     => 'Name',
                        'type'      => 'text',
                        'class'     => 'portfolio-slideshow-item',
                    ),
                    array(
                        'id'        => THEME_PREFIX . '_portfolio_position_item',
                        'label'     => 'Regency',
                        'type'      => 'text',
                        'class'     => '',
                    ),
                )
            ),
            /*End module about us*/

            /*Module services*/
            array(
                'label'       =>  'Position Services',
                'id'          =>  THEME_PREFIX.'_TZServicesPosition',
                'type'        =>  'select',
                'desc'        =>  'Select the display module position',
                'std'         =>  '2',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleServices',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Position 1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  'Position 2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  'Position 3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  'Position 4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  'Position 5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  'Position 6',
                    ),
                ),
            ),
            array(
                'id'          => 'tz_my_layout_services',
                'label'       => '',
                'desc'        => '',
                'std'         => '',
                'type'        => 'radio-image',
                'section'     => 'TZModuleServices',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'position_1',
                        'label'   => 'Position 1',
                        'src'     => OT_URL . '/assets/images/layout/ps_1.jpg'
                    ),
                    array(
                        'value'   => 'position_2',
                        'label'   => 'Position 2',
                        'src'     => OT_URL . '/assets/images/layout/ps_2.jpg'
                    ),
                    array(
                        'value'   => 'position_3',
                        'label'   => 'Position 3',
                        'src'     => OT_URL . '/assets/images/layout/ps_3.jpg'
                    ),
                    array(
                        'value'   => 'position_4',
                        'label'   => 'Position 4',
                        'src'     => OT_URL . '/assets/images/layout/ps_4.jpg'
                    ),
                    array(
                        'value'   => 'position_5',
                        'label'   => 'position_6',
                        'src'     => OT_URL . '/assets/images/layout/ps_5.jpg'
                    ),
                    array(
                        'value'   => 'position_6',
                        'label'   => 'Position 6',
                        'src'     => OT_URL . '/assets/images/layout/ps_6.jpg'
                    )
                )
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZServicesStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleServices',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'     => 'Services',
                'id'        => THEME_PREFIX . '_Services',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => '',
                'section'  =>   'TZModuleServices',
                'settings'  => array(

                    array(
                        'id'        => THEME_PREFIX . '_Services_item',
                        'label'     => 'Image',
                        'type'      => 'upload',
                        'class'     => '',
                    ),
                    array(
                        'id'        => THEME_PREFIX . '_Services_description_item',
                        'label'     => 'Description',
                        'type'      => 'textarea-simple',
                        'class'     => '',
                    ),

                )
            ),
            /*Module company*/
            array(
                'label'       =>  'Position company',
                'id'          =>  THEME_PREFIX.'_TZCompanyPosition',
                'type'        =>  'select',
                'desc'        =>  'Select the display module position',
                'std'         =>  '3',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleCompany',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Position 1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  'Position 2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  'Position 3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  'Position 4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  'Position 5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  'Position 6',
                    ),
                ),
            ),
            array(
                'id'          => 'tz_my_layout_Company',
                'label'       => '',
                'desc'        => '',
                'std'         => '',
                'type'        => 'radio-image',
                'section'     => 'TZModuleCompany',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'position_1',
                        'label'   => 'Position 1',
                        'src'     => OT_URL . '/assets/images/layout/ps_1.jpg'
                    ),
                    array(
                        'value'   => 'position_2',
                        'label'   => 'Position 2',
                        'src'     => OT_URL . '/assets/images/layout/ps_2.jpg'
                    ),
                    array(
                        'value'   => 'position_3',
                        'label'   => 'Position 3',
                        'src'     => OT_URL . '/assets/images/layout/ps_3.jpg'
                    ),
                    array(
                        'value'   => 'position_4',
                        'label'   => 'Position 4',
                        'src'     => OT_URL . '/assets/images/layout/ps_4.jpg'
                    ),
                    array(
                        'value'   => 'position_5',
                        'label'   => 'position_6',
                        'src'     => OT_URL . '/assets/images/layout/ps_5.jpg'
                    ),
                    array(
                        'value'   => 'position_6',
                        'label'   => 'Position 6',
                        'src'     => OT_URL . '/assets/images/layout/ps_6.jpg'
                    )
                )
            ),
            array(
                'label'       =>  'Company title',
                'id'          =>  THEME_PREFIX.'_TZCompanyTitle',
                'type'        =>  'text',
                'desc'        =>  '',
                'std'         =>  'Company',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleCompany',
                'choices'     =>  ''
            ),

            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZCompanyStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleCompany',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'     => 'Company',
                'id'        => THEME_PREFIX . '_company',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => '',
                'section'  =>   'TZModuleCompany',
                'settings'  => array(

                    array(
                        'id'        => THEME_PREFIX . '_company_item',
                        'label'     => 'Image',
                        'type'      => 'upload',
                        'class'     => '',
                    ),
                )
            ),
            /*-------Module Event---------*/

            array(
                'label'       =>  'Position Event',
                'id'          =>  THEME_PREFIX.'_TZEventPosition',
                'type'        =>  'select',
                'desc'        =>  'Select the display module position',
                'std'         =>  '4',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Position 1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  'Position 2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  'Position 3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  'Position 4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  'Position 5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  'Position 6',
                    ),
                ),
            ),
            array(
                'id'          => 'tz_my_layout_event',
                'label'       => '',
                'desc'        => '',
                'std'         => '',
                'type'        => 'radio-image',
                'section'     => 'TZModuleEvent',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'position_1',
                        'label'   => 'Position 1',
                        'src'     => OT_URL . '/assets/images/layout/ps_1.jpg'
                    ),
                    array(
                        'value'   => 'position_2',
                        'label'   => 'Position 2',
                        'src'     => OT_URL . '/assets/images/layout/ps_2.jpg'
                    ),
                    array(
                        'value'   => 'position_3',
                        'label'   => 'Position 3',
                        'src'     => OT_URL . '/assets/images/layout/ps_3.jpg'
                    ),
                    array(
                        'value'   => 'position_4',
                        'label'   => 'Position 4',
                        'src'     => OT_URL . '/assets/images/layout/ps_4.jpg'
                    ),
                    array(
                        'value'   => 'position_5',
                        'label'   => 'position_6',
                        'src'     => OT_URL . '/assets/images/layout/ps_5.jpg'
                    ),
                    array(
                        'value'   => 'position_6',
                        'label'   => 'Position 6',
                        'src'     => OT_URL . '/assets/images/layout/ps_6.jpg'
                    )
                )
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZEventStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '0',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),

            array(
                'label'       =>  'Event title',
                'id'          =>  THEME_PREFIX.'_TZTZEventTitle',
                'type'        =>  'text',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  ''
            ),
            array(
                'label'       =>  'Event Description',
                'id'          =>  THEME_PREFIX.'_TZEventDescription',
                'type'        =>  'textarea-simple',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '7',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  ''
            ),
            array(
                'label'       =>  'Name Button',
                'id'          =>  THEME_PREFIX.'_TZTZEventButton',
                'type'        =>  'text',
                'desc'        =>  '',
                'std'         =>  'Click Event',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  ''
            ),
            array(
                'label'       =>  'link Button',
                'id'          =>  THEME_PREFIX.'_TZTZEventlink',
                'type'        =>  'text',
                'desc'        =>  '',
                'std'         =>  '#',
                'rows'        =>  '0',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  ''
            ),
            array(
                'id'        => 'TZModuleEventDS',
                'label'     => 'Description',
                'desc'      => '<p>Time configuration ends event</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZModuleEvent',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Date',
                'id'          =>  THEME_PREFIX.'_TZEventDate',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  '1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  '2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  '3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  '4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  '5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  '6',
                    ),
                    array(
                        'value' =>  '7',
                        'label' =>  '7',
                    ),
                    array(
                        'value' =>  '8',
                        'label' =>  '8',
                    ),
                    array(
                        'value' =>  '9',
                        'label' =>  '9',
                    ),
                    array(
                        'value' =>  '10',
                        'label' =>  '10',
                    ),
                    array(
                        'value' =>  '11',
                        'label' =>  '11',
                    ),
                    array(
                        'value' =>  '12',
                        'label' =>  '12',
                    ),
                    array(
                        'value' =>  '13',
                        'label' =>  '13',
                    ),
                    array(
                        'value' =>  '14',
                        'label' =>  '14',
                    ),
                    array(
                        'value' =>  '15',
                        'label' =>  '15',
                    ),
                    array(
                        'value' =>  '16',
                        'label' =>  '16',
                    ),
                    array(
                        'value' =>  '17',
                        'label' =>  '17',
                    ),
                    array(
                        'value' =>  '18',
                        'label' =>  '18',
                    ),
                    array(
                        'value' =>  '19',
                        'label' =>  '19',
                    ),
                    array(
                        'value' =>  '20',
                        'label' =>  '20',
                    ),
                    array(
                        'value' =>  '21',
                        'label' =>  '21',
                    ),
                    array(
                        'value' =>  '22',
                        'label' =>  '22',
                    ),
                    array(
                        'value' =>  '23',
                        'label' =>  '23',
                    ),
                    array(
                        'value' =>  '24',
                        'label' =>  '24',
                    ),
                    array(
                        'value' =>  '25',
                        'label' =>  '25',
                    ),
                    array(
                        'value' =>  '26',
                        'label' =>  '26',
                    ),
                    array(
                        'value' =>  '27',
                        'label' =>  '27',
                    ),
                    array(
                        'value' =>  '28',
                        'label' =>  '28',
                    ),
                    array(
                        'value' =>  '29',
                        'label' =>  '29',
                    ),
                    array(
                        'value' =>  '30',
                        'label' =>  '30',
                    ),
                    array(
                        'value' =>  '31',
                        'label' =>  '31',
                    ),
                ),
            ),
            array(
                'label'       =>  'Days',
                'id'          =>  THEME_PREFIX.'_TZEventDays',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleEvent',
                'choices'     =>  array(
                    array(
                        'value' =>  'january',
                        'label' =>  'January',
                    ),
                    array(
                        'value' =>  'february',
                        'label' =>  'February',
                    ),
                    array(
                        'value' =>  'march',
                        'label' =>  'March',
                    ),
                    array(
                        'value' =>  'april',
                        'label' =>  'April',
                    ),
                    array(
                        'value' =>  'may',
                        'label' =>  'May',
                    ),
                    array(
                        'value' =>  'june',
                        'label' =>  'June',
                    ),
                    array(
                        'value' =>  'july',
                        'label' =>  'July',
                    ),
                    array(
                        'value' =>  'august',
                        'label' =>  'August',
                    ),
                    array(
                        'value' =>  'september',
                        'label' =>  'September',
                    ),
                    array(
                        'value' =>  'october',
                        'label' =>  'October',
                    ),
                    array(
                        'value' =>  'november',
                        'label' =>  'November',
                    ),
                    array(
                        'value' =>  'december',
                        'label' =>  'December',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX.'_TZEventYear',
                'label'     => 'year',
                'desc'      => '<p>import year by number eg: 2016</p>',
                'std'       => '2016',
                'type'      => 'text',
                'section'   => 'TZModuleEvent',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX.'_TZEventTime',
                'label'     => 'Time',
                'desc'      => '<p>import year by number eg: 23:23:23</p>',
                'std'       => '23:23:23',
                'type'      => 'text',
                'section'   => 'TZModuleEvent',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            /*-----------Module Portfolio------------------*/
            array(
                'label'       =>  'Position Portfolio',
                'id'          =>  THEME_PREFIX.'_TZPortfolioPosition',
                'type'        =>  'select',
                'desc'        =>  'Select the display module position',
                'std'         =>  '5',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModulePortfolio',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Position 1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  'Position 2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  'Position 3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  'Position 4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  'Position 5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  'Position 6',
                    ),
                ),
            ),
            array(
                'id'          => 'tz_my_layout_portfolio',
                'label'       => '',
                'desc'        => '',
                'std'         => '',
                'type'        => 'radio-image',
                'section'     => 'TZModulePortfolio',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'position_1',
                        'label'   => 'Position 1',
                        'src'     => OT_URL . '/assets/images/layout/ps_1.jpg'
                    ),
                    array(
                        'value'   => 'position_2',
                        'label'   => 'Position 2',
                        'src'     => OT_URL . '/assets/images/layout/ps_2.jpg'
                    ),
                    array(
                        'value'   => 'position_3',
                        'label'   => 'Position 3',
                        'src'     => OT_URL . '/assets/images/layout/ps_3.jpg'
                    ),
                    array(
                        'value'   => 'position_4',
                        'label'   => 'Position 4',
                        'src'     => OT_URL . '/assets/images/layout/ps_4.jpg'
                    ),
                    array(
                        'value'   => 'position_5',
                        'label'   => 'position_6',
                        'src'     => OT_URL . '/assets/images/layout/ps_5.jpg'
                    ),
                    array(
                        'value'   => 'position_6',
                        'label'   => 'Position 6',
                        'src'     => OT_URL . '/assets/images/layout/ps_6.jpg'
                    )
                )
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZPortoflioStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModulePortfolio',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display Category',
                'id'          => THEME_PREFIX. '_TZPortfolioCat',
                'type'        => 'taxonomy-checkbox',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => 'portfolio-category',
                'class'       => '',
                'section'     => 'TZModulePortfolio'
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZPortfoliotitle',
                'label'     =>  'Title',
                'desc'      =>  '',
                'std'       =>  'Portfolio <span class="tz_title">Display Portfolio</span>',
                'type'      =>  'text',
                'section'   =>  'TZModulePortfolio',
                'rows'      =>  '',
            ),
            array(
                'id'        => THEME_PREFIX . '_TZPortfoliolimit',
                'label'     => 'Portfolio limit',
                'desc'      => '',
                'std'       => '',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZModulePortfolio',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'        =>  'Orderby',
                'id'          =>  THEME_PREFIX.'_TZPortfolioOrderby',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModulePortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'date',
                        'label' =>  'date',
                    ),
                    array(
                        'value' =>  'id',
                        'label' =>  'Date',
                    ),
                    array(
                        'value' =>  'title',
                        'label' =>  'Title',
                    ),
                ),
            ),
            array(
                'label'        =>  'Order',
                'id'          =>  THEME_PREFIX.'_TZPortfolioOrder',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModulePortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'desc',
                        'label' =>  'Z-->A',
                    ),
                    array(
                        'value' =>  'asc',
                        'label' =>  'A---->Z',
                    ),
                ),
            ),
            // display protfolio thumnail
            array(
                'id'        => THEME_PREFIX . '_TZPortfoliothumbnail',
                'label'     => 'Portfolio thumbnail',
                'desc'      => '',
                'std'       => '',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZModulePortfolio',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),

            /*------end module portfolio--------------*/

            /*========================================
             * Module Quote
             ========================================*/
            array(
                'id'        => 'TZModulePageDS',
                'label'     => 'Description',
                'desc'      => '<p>Click on Add New to display 1 post with "Quote" formi</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZModuleQuote',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'     => 'Display Quote',
                'id'        => THEME_PREFIX. '_TZQuote',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => '',
                'section'   =>  'TZModuleQuote',
                'settings'  => array(
                    array(
                        'label'       =>  'Position',
                        'id'          =>  THEME_PREFIX.'_TZPortfolioPosition',
                        'type'        =>  'select',
                        'desc'        =>  '',
                        'std'         =>  '',
                        'rows'        =>  '',
                        'post_type'   =>  '',
                        'taxonomy'    =>  '',
                        'class'       =>  '',
                        'choices'     =>  array(
                            array(
                                'value' =>  '1',
                                'label' =>  'Position 1',
                            ),
                            array(
                                'value' =>  '2',
                                'label' =>  'Position 2',
                            ),
                            array(
                                'value' =>  '3',
                                'label' =>  'Position 3',
                            ),
                            array(
                                'value' =>  '4',
                                'label' =>  'Position 4',
                            ),
                            array(
                                'value' =>  '5',
                                'label' =>  'Position 5',
                            ),
                            array(
                                'value' =>  '6',
                                'label' =>  'Position 6',
                            ),
                        ),
                    ),
                    array(
                        'label'       =>  'Status',
                        'id'          =>  THEME_PREFIX.'_TZPortoflioStatus',
                        'type'        =>  'select',
                        'desc'        =>  '',
                        'std'         =>  '1',
                        'rows'        =>  '',
                        'post_type'   =>  '',
                        'taxonomy'    =>  '',
                        'class'       =>  '',
                        'choices'     =>  array(
                            array(
                                'value' =>  '1',
                                'label' =>  'Published',
                            ),
                            array(
                                'value' =>  '0',
                                'label' =>  'Unpublished',
                            ),
                        ),
                    ),
                    array(
                        'id'          => THEME_PREFIX . '_TZQuote_item',
                        'label'       => 'Select a post display',
                        'type'        => 'post-select',
                        'desc'        => '',
                        'std'         => '',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'class'       => '',
                    ),
                ),
            ),
            /*end quote*/

            /*========================================
            * Module Blog
            ========================================*/
            // layout Most
            array(
                'id'        => 'tzmostds',
                'label'     => 'Description',
                'desc'      => '<p>Blog Module is divided into 2 parts. In the left, it will display articles which are assigned to category. In the right, it will be display featured articles with default</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZModuleBlog',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Position Blog',
                'id'          =>  THEME_PREFIX.'_TZPositionBlog',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Position 1',
                    ),
                    array(
                        'value' =>  '2',
                        'label' =>  'Position 2',
                    ),
                    array(
                        'value' =>  '3',
                        'label' =>  'Position 3',
                    ),
                    array(
                        'value' =>  '4',
                        'label' =>  'Position 4',
                    ),
                    array(
                        'value' =>  '5',
                        'label' =>  'Position 5',
                    ),
                    array(
                        'value' =>  '6',
                        'label' =>  'Position 6',
                    ),
                ),
            ),
            array(
                'id'          => 'tz_my_layout_blog',
                'label'       => '',
                'desc'        => '',
                'std'         => '',
                'type'        => 'radio-image',
                'section'     => 'TZModuleBlog',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'position_1',
                        'label'   => 'Position 1',
                        'src'     => OT_URL . '/assets/images/layout/ps_1.jpg'
                    ),
                    array(
                        'value'   => 'position_2',
                        'label'   => 'Position 2',
                        'src'     => OT_URL . '/assets/images/layout/ps_2.jpg'
                    ),
                    array(
                        'value'   => 'position_3',
                        'label'   => 'Position 3',
                        'src'     => OT_URL . '/assets/images/layout/ps_3.jpg'
                    ),
                    array(
                        'value'   => 'position_4',
                        'label'   => 'Position 4',
                        'src'     => OT_URL . '/assets/images/layout/ps_4.jpg'
                    ),
                    array(
                        'value'   => 'position_5',
                        'label'   => 'position_6',
                        'src'     => OT_URL . '/assets/images/layout/ps_5.jpg'
                    ),
                    array(
                        'value'   => 'position_6',
                        'label'   => 'Position 6',
                        'src'     => OT_URL . '/assets/images/layout/ps_6.jpg'
                    )
                )
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZBlogStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Title blog',
                'id'          => THEME_PREFIX. '_TZBlogTitle',
                'type'        => 'text',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'class'       => '',
                'section'     => 'TZModuleBlog'
            ),

            // layout new
            array(
                'label'       => 'Title left',
                'id'          => THEME_PREFIX. '_TZBlogNewTitle',
                'type'        => 'text',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'class'       => '',
                'section'     => 'TZModuleBlog'
            ),
            array(
                'label'       => 'Title right',
                'id'          => THEME_PREFIX. '_TZBlogMostTitle',
                'type'        => 'text',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'class'       => '',
                'section'     => 'TZModuleBlog'
            ),
            array(
                'id'        => THEME_PREFIX . '_TZBlogNewLimit',
                'label'     => 'Limit post',
                'desc'      => '',
                'std'       => '',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZModuleBlog',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'        =>  'Choose category',
                'id'          =>  THEME_PREFIX.'_TZBlogNewCat',
                'type'        =>  'category-select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  'post',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
            ),
            array(
                'label'        =>  'Orderby',
                'id'          =>  THEME_PREFIX.'_TZBlogNewOrderby',
                'type'        =>  'select',
                'desc'        =>  'default Orderby date',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'rand',
                        'label' =>  'Random',
                    ),
                    array(
                        'value' =>  'date',
                        'label' =>  'Date',
                    ),
                    array(
                        'value' =>  'title',
                        'label' =>  'Title',
                    ),
                ),
            ),
            array(
                'label'        =>  'Order',
                'id'          =>  THEME_PREFIX.'_TZBlogNewOrder',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'desc',
                        'label' =>  'Z---->A',
                    ),
                    array(
                        'value' =>  'asc',
                        'label' =>  'A---->Z',
                    ),
                ),
            ),
            array(
                'label'        =>  'Show title',
                'id'          =>  THEME_PREFIX.'_TZBlogNewShowtitle',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'        =>  'Show Excerpt',
                'id'          =>  THEME_PREFIX.'_TZBlogNewexcerpt',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'        =>  'Show image',
                'id'          =>  THEME_PREFIX.'_TZBlogNewimage',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'        =>  'Show Author',
                'id'          =>  THEME_PREFIX.'_TZBlogNewAuthor',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'        =>  'Show date',
                'id'          =>  THEME_PREFIX.'_TZBlogNewdate',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'        =>  'Show Readmore',
                'id'          =>  THEME_PREFIX.'_TZBlogNewReadmore',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleBlog',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),



            /*--------end blog-------*/

            /*-----------------Clients--------------------*/
            array(
                'id'        => 'TZModuleClients',
                'label'     => 'Descriptions',
                'desc'      => '<p>Those modules display on the top position of footer</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZModuleClients',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZClientsStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZModuleClients',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Title Clients',
                'id'          => THEME_PREFIX. '_TZClientsTitle',
                'type'        => 'text',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'class'       => '',
                'section'     => 'TZModuleClients'
            ),
            array(
                'label'       => 'Background Clients',
                'id'          => THEME_PREFIX. '_TZClientsBackground',
                'type'        => 'upload',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'class'       => '',
                'section'     => 'TZModuleClients'
            ),
            array(
                'label'     => 'Clients',
                'id'        => THEME_PREFIX . '_Clients',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => '',
                'section'  =>   'TZModuleClients',
                'settings'  => array(

                    array(
                        'id'        => THEME_PREFIX . '_Clients_item',
                        'label'     => 'Image',
                        'type'      => 'upload',
                        'class'     => '',
                    ),

                ),
            ),
            /*end clients*/
            /*========================================
             * Module Quote
             ========================================*/
            array(
                'id'        => 'TZModulePageDS',
                'label'     => 'Description',
                'desc'      => '<p>Click on Add New to add more 1 displayed page</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZModulePage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'     => 'Display Page',
                'id'        => THEME_PREFIX. '_TZPage',
                'type'      => 'list-item',
                'desc'      => '',
                'class'     => '',
                'section'   =>  'TZModulePage',
                'settings'  => array(
                    array(
                        'label'       =>  'Position Page',
                        'id'          =>  THEME_PREFIX.'_TZPagePosition',
                        'type'        =>  'select',
                        'desc'        =>  '',
                        'std'         =>  '',
                        'rows'        =>  '',
                        'post_type'   =>  '',
                        'taxonomy'    =>  '',
                        'class'       =>  '',
                        'choices'     =>  array(
                            array(
                                'value' =>  '1',
                                'label' =>  'Position 1',
                            ),
                            array(
                                'value' =>  '2',
                                'label' =>  'Position 2',
                            ),
                            array(
                                'value' =>  '3',
                                'label' =>  'Position 3',
                            ),
                            array(
                                'value' =>  '4',
                                'label' =>  'Position 4',
                            ),
                            array(
                                'value' =>  '5',
                                'label' =>  'Position 5',
                            ),
                            array(
                                'value' =>  '6',
                                'label' =>  'Position 6',
                            ),
                        ),
                    ),
                    array(
                        'label'       =>  'Status',
                        'id'          =>  THEME_PREFIX.'_TZPageStatus',
                        'type'        =>  'select',
                        'desc'        =>  '',
                        'std'         =>  '1',
                        'rows'        =>  '',
                        'post_type'   =>  '',
                        'taxonomy'    =>  '',
                        'class'       =>  '',
                        'choices'     =>  array(
                            array(
                                'value' =>  '1',
                                'label' =>  'Published',
                            ),
                            array(
                                'value' =>  '0',
                                'label' =>  'Unpublished',
                            ),
                        ),
                    ),
                    array(
                        'label'       =>  'Background Page',
                        'id'          =>  THEME_PREFIX.'_TZPageBackground',
                        'type'        =>  'select',
                        'desc'        =>  '',
                        'std'         =>  'bk-white',
                        'rows'        =>  '',
                        'post_type'   =>  '',
                        'taxonomy'    =>  '',
                        'class'       =>  '',
                        'choices'     =>  array(
                            array(
                                'value' =>  'page-white',
                                'label' =>  'White',
                            ),
                            array(
                                'value' =>  'bk-gray',
                                'label' =>  'Gray',
                            ),
                            array(
                                'value' =>  'bk-gray2',
                                'label' =>  'Gray2',
                            ),
                            array(
                                'value' =>  'bk-lime',
                                'label' =>  'Lime',
                            ),
                            array(
                                'value' =>  'bk-aqua',
                                'label' =>  'Aqua',
                            ),
                            array(
                                'value' =>  'bk-yellow',
                                'label' =>  'Yellow',
                            ),
                            array(
                                'value' =>  'bk-blue',
                                'label' =>  'Blue',
                            ),
                            array(
                                'value' =>  'bk-black',
                                'label' =>  'Black',
                            ),
                            array(
                                'value' =>  'bk-fuchsia',
                                'label' =>  'Fuchsia',
                            ),
                            array(
                                'value' =>  'bk-gold',
                                'label' =>  'Gold',
                            ),
                            array(
                                'value' =>  'bk-green',
                                'label' =>  'Green',
                            ),
                            array(
                                'value' =>  'bk-red',
                                'label' =>  'Red',
                            ),

                        ),
                    ),
                    array(
                        'label'       =>  'Padding style',
                        'id'          =>  THEME_PREFIX.'_TZPagePadding',
                        'type'        =>  'select',
                        'desc'        =>  '',
                        'std'         =>  'tzabout_padding',
                        'rows'        =>  '',
                        'post_type'   =>  '',
                        'taxonomy'    =>  '',
                        'class'       =>  '',
                        'choices'     =>  array(
                            array(
                                'value' =>  'tzabout_padding',
                                'label' =>  'padding (top left bottom right)',
                            ),
                            array(
                                'value' =>  'tzabout_padding2',
                                'label' =>  'padding (top left 0 right)',
                            ),
                            array(
                                'value' =>  'tzabout_padding3',
                                'label' =>  'padding (0 left 0 right)',
                            ),

                        ),
                    ),
                    array(
                        'id'          => THEME_PREFIX . '_TZPage_item',
                        'label'       => 'Select a Page display',
                        'type'        => 'page-select',
                        'desc'        => '',
                        'std'         => '',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'class'       => '',
                    ),
                ),
            ),
            /*end page*/


            /*-----End TZHomePage------*/

            /*------------TZPortfolio-------------------*/
            array(
                'id'        => 'TZPortfolioDs',
                'label'     => 'Portfolio settings',
                'desc'      => '<p>Portfolio Template Configuration</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZPortfolio',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       => 'Display Category',
                'id'          => THEME_PREFIX. '_TZPagePortfolioCat',
                'type'        => 'taxonomy-checkbox',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => 'portfolio-category',
                'class'       => '',
                'section'     => 'TZPortfolio'
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZProtitle',
                'label'     =>  'Title',
                'desc'      =>  '',
                'std'       =>  'Portfolio',
                'type'      =>  'text',
                'section'   =>  'TZPortfolio',
                'rows'      =>  '',
            ),
            array(
                'id'        => THEME_PREFIX . '_TZPorwidth',
                'label'     => 'Portfolio width',
                'desc'      => '',
                'std'       => '350',
                'type'      => 'text',
                'section'   => 'TZPortfolio',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZPorlimit',
                'label'     => 'Portfolio limit',
                'desc'      => '',
                'std'       => '10',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZPortfolio',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'        =>  'Orderby',
                'id'          =>  THEME_PREFIX.'_TZPortOrderby',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'date',
                        'label' =>  'date',
                    ),
                    array(
                        'value' =>  'id',
                        'label' =>  'Date',
                    ),
                    array(
                        'value' =>  'title',
                        'label' =>  'Title',
                    ),
                ),
            ),
            array(
                'label'        =>  'Order',
                'id'          =>  THEME_PREFIX.'_TZPorOrder',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'desc',
                        'label' =>  'Z-->A',
                    ),
                    array(
                        'value' =>  'asc',
                        'label' =>  'A---->Z',
                    ),
                ),
            ),
            array(
                'label'       =>  'Filter',
                'id'          =>  THEME_PREFIX.'_TZPorFilter',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'tags',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'tags',
                        'label' =>  'Tags',
                    ),
                    array(
                        'value' =>  'category',
                        'label' =>  'Category',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Filter',
                'id'          =>  THEME_PREFIX.'_TZPorShowFilter',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Title',
                'id'          =>  THEME_PREFIX.'_TZPorShowTitle',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Tags',
                'id'          =>  THEME_PREFIX.'_TZPorShowTags',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Icon',
                'id'          =>  THEME_PREFIX.'_TZPorShowIcon',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolio',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            // portoflio header
            array(
                'id'        => 'TZHeaderds',
                'label'     => 'Portfolio Header',
                'desc'      => '<p>Display page which is upper the content of Portfolio Template, single protfolio.</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZPageHeader',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZPageHeaderStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPageHeader',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX.'_TZPageHeader',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'section'    =>'TZPageHeader'
            ),
            // portfolio footer
            array(
                'id'        => 'TZFooter',
                'label'     => 'Portfolio Footer',
                'desc'      => '<p>Display page which is under the content of Portfolio template, single portfolio</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZPortfolioFooter',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZPageFooterStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZPortfolioFooter',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX.'_TZPageFooter',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'section'    =>'TZPortfolioFooter'
            ),
            /*end portfolio*/
            /*----------------------TimeLine---------------------*/
            array(
                'id'        => 'TZTimelineDs',
                'label'     => 'Timeline settings',
                'desc'      => '<p>Timeline Template Configuration</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZTimeline',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       => 'Display Category',
                'id'          => THEME_PREFIX. '_TZTimeCat',
                'type'        => 'taxonomy-checkbox',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => 'portfolio-category',
                'class'       => '',
                'section'     => 'TZTimeline'
            ),
            array(
                'id'        =>  THEME_PREFIX. '_TZTimetitle',
                'label'     =>  'Title',
                'desc'      =>  '',
                'std'       =>  'Timeline',
                'type'      =>  'text',
                'section'   =>  'TZTimeline',
                'rows'      =>  '',
            ),
            array(
                'id'        => THEME_PREFIX . '_TZTimewidth',
                'label'     => 'Timeline width',
                'desc'      => '',
                'std'       => '350',
                'type'      => 'text',
                'section'   => 'TZTimeline',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZTimelimit',
                'label'     => 'Timeline limit',
                'desc'      => '',
                'std'       => '10',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZTimeline',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'        =>  'Order',
                'id'          =>  THEME_PREFIX.'_TZTimeOrder',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimeline',
                'choices'    =>  array(
                    array(
                        'value' =>  'desc',
                        'label' =>  'Z-->A',
                    ),
                    array(
                        'value' =>  'asc',
                        'label' =>  'A---->Z',
                    ),
                ),
            ),
            array(
                'label'       =>  'Filter',
                'id'          =>  THEME_PREFIX.'_TZTimeFilter',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'tags',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimeline',
                'choices'    =>  array(
                    array(
                        'value' =>  'tags',
                        'label' =>  'Tags',
                    ),
                    array(
                        'value' =>  'category',
                        'label' =>  'Category',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Filter',
                'id'          =>  THEME_PREFIX.'_TZTimeShowFilter',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimeline',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Title',
                'id'          =>  THEME_PREFIX.'_TZTimeShowTitle',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimeline',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Tags',
                'id'          =>  THEME_PREFIX.'_TZTimeShowTags',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimeline',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            array(
                'label'       =>  'Show Icon',
                'id'          =>  THEME_PREFIX.'_TZTimeShowIcon',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  'show',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimeline',
                'choices'    =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>  'hide',
                        'label' =>  'Hide',
                    ),
                ),
            ),
            // Timeline header
            array(
                'id'        => 'TZTimeHeaderds',
                'label'     => 'Timeline Header',
                'desc'      => '<p>Display page which is upper the content of Timeline Template.</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZTimelineHeader',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZTimeHeaderStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimelineHeader',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX.'_TZTimeHeader',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'section'     =>'TZTimelineHeader'
            ),
            // Timeline footer
            array(
                'id'        => 'TZTimeFooter',
                'label'     => 'Timeline Footer',
                'desc'      => '<p>Display page which is under the content of Timeline template.</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZTimelineFooter',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZTimeFooterStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZTimelineFooter',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX.'_TZTimeFooter',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'section'    =>'TZTimelineFooter'
            ),
            /*end timeline*/

            /*------------TZ BLOG-------------------*/
            array(
                'id'        => 'TZBlogDs',
                'label'     => 'Blog setting',
                'desc'      => '<p>Configuration for Post, Page, Category, Archive, Author.</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZBlogPage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'          => THEME_PREFIX . '_tz_blogslidebar',
                'label'       => 'Archives, Category, Search, Tag, Author Sidebar Template',
                'desc'        => '',
                'std'         => 'yes',
                'type'        => 'radio-image',
                'section'     => 'TZBlogPage',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'yes',
                        'label'   => '',
                        'src'     => OT_URL . '/assets/images/layout/right-sidebar2.png'
                    ),
                    array(
                        'value'   => 'no',
                        'label'   => '',
                        'src'     => OT_URL . '/assets/images/layout/full-width2.png'
                    ),
                )
            ),
            array(
                'id'        => THEME_PREFIX . '_TZBlogHeading',
                'label'     => 'Blog Heading',
                'desc'      => '',
                'std'       => '2',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZBlogPage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZBlogImage',
                'label'     => 'Show images',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZBlogPage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZBlogInfo',
                'label'     => 'Show Info',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZBlogPage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZBlogExcerpt',
                'label'     => 'Show Excerpt',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZBlogPage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZBlogTags',
                'label'     => 'Show Tags',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZBlogPage',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),


            // TZBlog header
            array(
                'id'        => 'TZBlogHeaderds',
                'label'     => 'Blog Header',
                'desc'      => '<p>Display page which is upper the content for Post, Page, Category, Archive, Author</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZBlogHeader',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZBlogHeaderStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZBlogHeader',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX.'_TZBlogHeader',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'section'     => 'TZBlogHeader'
            ),
            // TZFooter footer
            array(
                'id'        => 'TZBlogFooter_id',
                'label'     => 'Blog Footer',
                'desc'      => '<p>Display page which is under the content for Post, Page, Category, Archive, Author</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZBlogFooter',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZBlogFooterStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZBlogFooter',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
                ),
                array(
                    'label'       => 'Display page',
                    'id'          => THEME_PREFIX.'_TZBlogFooter',
                    'type'        => 'page-select',
                    'desc'        => '',
                    'std'         => '',
                    'rows'        => '',
                    'section'    =>'TZBlogFooter'
                ),

            /*-----End BLOG--------*/

            /*------------TZ TZArchive-------------------*/
            array(
                'id'        => 'TZArchivePage',
                'label'     => 'Archive setting',
                'desc'      => '<p>Archive Template Configuration</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'          => THEME_PREFIX . '_TZPageArchiveslidebar',
                'label'       => 'Archives Sidebar Template',
                'desc'        => '',
                'std'         => 'yes',
                'type'        => 'radio-image',
                'section'     => 'TZPageArchive',
                'class'       => '',
                'choices'     => array(

                    array(
                        'value'   => 'yes',
                        'label'   => '',
                        'src'     => OT_URL . '/assets/images/layout/right-sidebar2.png'
                    ),
                    array(
                        'value'   => 'no',
                        'label'   => '',
                        'src'     => OT_URL . '/assets/images/layout/full-width2.png'
                    ),
                )
            ),
            array(
                'id'        => THEME_PREFIX . '_TZArchiveLimit',
                'label'     => 'Archive Limit',
                'desc'      => '',
                'std'       => '10',
                'type'      => 'Numeric-Slider',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'id'        => THEME_PREFIX . '_TZArchiveType',
                'label'     => 'Select post type',
                'desc'      => '',
                'std'       => '3',
                'type'      => 'select',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  '3',
                        'label' =>  'Post And Portfolio',
                    ),
                    array(
                        'value' =>   '1',
                        'label' =>   'Portfolio',
                    ),
                    array(
                        'value' =>   '2',
                        'label' =>   'Post',
                    ),

                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZArchiveOrder',
                'label'     => 'Order',
                'desc'      => '',
                'std'       => 'desc',
                'type'      => 'select',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'DESC',
                        'label' =>  'Z---->A',
                    ),
                    array(
                        'value' =>   'ASC',
                        'label' =>   'A---->Z',
                    ),

                ),
            ),

            array(
                'id'        => THEME_PREFIX . '_TZArchiveImage',
                'label'     => 'Show images',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZArchiveInfo',
                'label'     => 'Show Info',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZArchiveExcerpt',
                'label'     => 'Show Excerpt',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),
            array(
                'id'        => THEME_PREFIX . '_TZArchiveTags',
                'label'     => 'Show Tags',
                'desc'      => '',
                'std'       => 'show',
                'type'      => 'select',
                'section'   => 'TZPageArchive',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => '',
                'choices'   =>  array(
                    array(
                        'value' =>  'show',
                        'label' =>  'Show',
                    ),
                    array(
                        'value' =>   'hide',
                        'label' =>   'Hide',
                    ),
                ),
            ),

            // TZArchive header
            array(
                'id'        => 'TZArchivePageHeaderds',
                'label'     => 'Archive Header',
                'desc'      => '<p>Display page which is upper the content of Archive Template</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZArchivePageHeader',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZArchiveHeaderStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZArchivePageHeader',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX.'_TZArchiveHeaderID',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'section'     => 'TZArchivePageHeader'
            ),
            // TZArchive footer
            array(
                'id'        => 'TZArchiveFooter_id',
                'label'     => 'Archive Footer',
                'desc'      => '<p>Display page which is under the content of archive template</p>',
                'std'       => '',
                'type'      => 'textblock-titled',
                'section'   => 'TZArchivePageFooter',
                'rows'      => '',
                'post_type' => '',
                'taxonomy'  => '',
                'class'     => ''
            ),
            array(
                'label'       =>  'Status',
                'id'          =>  THEME_PREFIX.'_TZArchiveFooterStatus',
                'type'        =>  'select',
                'desc'        =>  '',
                'std'         =>  '1',
                'rows'        =>  '',
                'post_type'   =>  '',
                'taxonomy'    =>  '',
                'class'       =>  '',
                'section'     =>  'TZArchivePageFooter',
                'choices'     =>  array(
                    array(
                        'value' =>  '1',
                        'label' =>  'Published',
                    ),
                    array(
                        'value' =>  '0',
                        'label' =>  'Unpublished',
                    ),
                ),
            ),
            array(
                'label'       => 'Display page',
                'id'          => THEME_PREFIX.'_TZArchiveFooterID',
                'type'        => 'page-select',
                'desc'        => '',
                'std'         => '',
                'rows'        => '',
                'section'     => 'TZArchivePageFooter'
            ),

            /*-----End TZArchive--------*/
        ),
    );

    /* allow settings to be filtered before saving */

    $custom_settings = apply_filters('option_tree_settings_args', $custom_settings);

    /* settings are not the same update the DB */
    if ($saved_settings !== $custom_settings) {
        update_option('option_tree_settings', $custom_settings);
    }

}


?>
