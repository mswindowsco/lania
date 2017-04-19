<?php

// Add button to visual editor
add_action('init', 'add_shortcode_button');
function add_shortcode_button() {
    if (current_user_can('edit_posts') && current_user_can('edit_pages')) {
        add_filter('mce_external_plugins', 'add_shortcode_plugin');
        add_filter('mce_buttons_3', 'register_shortcode_button');
    }
}

function register_shortcode_button($buttons) {
    array_push($buttons, "divider", "space", "separator");
    array_push($buttons, "column","list","accordion","table","tabs","skill", "separator");
    array_push($buttons, "button_one","button_two","alert_one","alert_two","pringcing", "separator");
    return $buttons;
}

function add_shortcode_plugin($plugin_array) {
    $plugin_array['divider'] = THEME_PATH . '/extension/shortcode/plazart_shortcode.js';
    return $plugin_array;
}

// shortcode for space
add_shortcode('space', 'space_shortcode');
function space_shortcode( $attrs ){
    $attrs = shortcode_atts(array(
        'height' => '',
    ), $attrs);
    return "<div style='clear:both; height:" . !empty($attrs['height']) ? $attrs['height'] : '10' . "px' ></div>";
}

/* =========================================================
 * shortcode for column
 * ========================================================= */
// 1/2 column
function one_haft($atts, $content = null) {
    return '<div class="one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'one_haft');

function one_half_last($atts, $content = null) {
    return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
}
add_shortcode('one_half_last', 'one_half_last');

// 1/3 column
function one_third($atts, $content = null) {
    return '<div class="one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'one_third');

function one_third_last($atts, $content = null) {
    return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
}
add_shortcode('one_third_last', 'one_third_last');

// 2/3
function two_third($atts, $content = null) {
    return '<div class="two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'two_third');

function two_third_last($atts, $content = null) {
    return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
}
add_shortcode('two_third_last', 'two_third_last');

// 1/4 column
function one_fourth($atts, $content = null) {
    return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'one_fourth');

function one_fourth_last($atts, $content = null) {
    return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
}
add_shortcode('one_fourth_last', 'one_fourth_last');

function two_fourth($atts, $content = null) {
    return '<div class="two_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_fourth', 'two_fourth');

function two_fourth_last($atts, $content = null) {
    return '<div class="two_fourth last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
}
add_shortcode('two_fourth_last', 'two_fourth_last');

function three_fourth($atts, $content = null) {
    return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'three_fourth');

function three_fourth_last($atts, $content = null) {
    return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
}
add_shortcode('three_fourth_last', 'three_fourth_last');

/* =========================================================
* shortcode for Items list.
* ========================================================= */
// Items list.
function shortcode_list_items($attrs, $content) {
    global $tz_list_items_arr;
    $tz_list_items_arr = array();
    $attrs = shortcode_atts(array(
        'type' => 'list-default',
        'class' => '',
    ), $attrs);
    do_shortcode($content);
    $return = '';
    if (!empty($tz_list_items_arr)) {
        $list_items = array();
        foreach ($tz_list_items_arr as $list_item) {
            $list_items[] = '<li>' . $list_item['content'] . '</li>';
        }
        $return = "\n" . '<!-- the items list --><ul class="plazart-list ' . $attrs['type'] . ' ' . $attrs['class'] . '">' . implode("\n", $list_items) . '</ul>' . "\n";
    }
    return $return;
}

add_shortcode('list_items', 'shortcode_list_items');
// Item list.
function shortcode_list_item($attrs, $content) {
    global $tz_list_items_arr;
    $tz_list_items_arr[] = array(
        'content' => $content,
    );
}

add_shortcode('list_item', 'shortcode_list_item');

/*==================================
 * Skill
 ===================================*/
function shortcode_skill($atts,$content = null){
    extract(shortcode_atts(array(
        'background'            =>  'bk-gray2',
        'width'                 =>  '90',
        'background_progress'   =>  'bk-gray',
        'color'                 =>  'white',
        'icon'                  =>  'css3'
    ),$atts));
    $html   ="";
    $html   .='<div class="tzskill bk-'.$background.'">
                <p class="tzskill_info width'.$width.' bk-'.$background_progress.' color-'.$color.'">
                    <i class="tzpageicon fa fa-'.$icon.'  size18"></i>
                    '.do_shortcode($content).'
                </p><div class="clearfix"></div>
            </div>';
    return $html;
}
add_shortcode('skill','shortcode_skill');
// end skill

/*==============================================
* Button1
 ==============================================*/
function shortcode_button1($atts,$content = null){
    extract(shortcode_atts(array(
        'style'         =>  'default',
        'icon_name'     =>  'check',
        'display_icon'  =>  'block',
        'font_weight'    =>   'bold'
    ),$atts));
    $html = "";
    $html = '<button class="btn-icon btn-'.$style.' btn-font-'.$font_weight.'"><i class="fa fa-'.$icon_name.' display-icon-'.$display_icon.' btn-i-icon"></i>' . do_shortcode($content) . '</button>';
    return $html;
}
add_shortcode('button_one','shortcode_button1');
/*end Button1*/
/*==============================================
* Button2
 ==============================================*/
function shortcode_button2($atts,$content = null){
    extract(shortcode_atts(array(
        'style'         =>  'default',
        'icon_name'     =>  'check',
        'display_icon'  =>  'block',
        'font_weight'    =>   'bold'
    ),$atts));
    $html = "";
    $html = '<button class="btn-icon lania-large btn-'.$style.' btn-font-'.$font_weight.'"><i class="fa fa-'.$icon_name.' display-icon-'.$display_icon.' btn-i-icon"></i>' . do_shortcode($content) . '</button>';
    return $html;
}
add_shortcode('button_two','shortcode_button2');
/*end button2*/

/*================================================
Alert 1
=================================================*/
function tzshortcode_alert1($atts,$content = null){
    extract(shortcode_atts(array(
        "background" => 1,
    ),$atts));
    $html ="";
    $html ='<div class="tzalert1 alert-background'.$background.'"><p>'.do_shortcode($content).'</p><i class="fa fa-times tzalert-icon"></i></div>';
    return $html;
}
add_shortcode('alert_one','tzshortcode_alert1');
// end alert 1
/*================================================
Alert 2
=================================================*/
function tzshortcode_alert2($atts,$content = null){
    extract(shortcode_atts(array(
        "title" => "",
        "background" =>'1'
    ),$atts));
    $html ="";
    $html ='<div class="tzalert2 alert-background'.$background.'"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $html;
}
add_shortcode('alert_two','tzshortcode_alert2');

function tzshortcode_alert_item($atts,$content = null){
    extract(shortcode_atts(array(
        "content_alert" => ""
    ),$atts));
    $html ="";
    $html ='<p class="alert2-info">'.$content_alert.'</p><p class="alert2-icon">'.do_shortcode($content).'</p><i class="fa fa-times tzalert2-icon"></i>';

    return $html;
}
add_shortcode('alert_content','tzshortcode_alert_item');


/*end Alert2*/
/*===================================
pringcing
=====================================*/
function tzshortcode_pring($atts,$content){
    extract(shortcode_atts(array(
        'title'=>'pringcing',
        'style_border'=>'1',
        'units' => '$',
        'price' => '19',
    ),$atts));
    $html = "";
    $html = '<ul class="pringcing pring-border-'.$style_border.'"><li class="pringcing-title">'.$title.'</li><li class="pring"><label>'.$units.'</label><span>'.$price.'</span></li>'.do_shortcode($content).'</ul>';
    return $html;
}
add_shortcode('pringcing','tzshortcode_pring');
function tzshortcode_pring_content($atts,$content){
    $html = '';
    $html ='<li class="pring-content">'.do_shortcode($content).'</li>';
    return $html;
}
add_shortcode('pring_content','tzshortcode_pring_content');

/*end pringcing*/


/* =========================================================
* shortcode for accordion.
* ========================================================= */
function shortcode_accordion($attrs, $content) {
    global $tz_accs_arr;
    $tz_accs_arr = array();
    do_shortcode($content);
    $return = '';
    if (!empty($tz_accs_arr)) {
        $acc_items = array();
        foreach ($tz_accs_arr as $acc) {
            $acc_items[] = '<div class="tz_accordion"><h3 class="tz_title">' . $acc['title'] . '</h3> <div class="info_accordion">' . $acc['content'] . '</div></div>';
        }
        $return = "\n" . '<!-- the accordion --><div class="tz_news">' . implode("\n", $acc_items) . "\n" . '</div>' . "\n";
    }
    return $return;
}

add_shortcode('accordion', 'shortcode_accordion');
// Accordion item.
function shortcode_accordion_item($attrs, $content) {
    global $tz_accs_arr;
    $attrs = shortcode_atts(array(
        'title' => '',
    ), $attrs);
    $tz_accs_arr[] = array(
        'title' => $attrs['title'],
        'content' => do_shortcode($content),
    );
}
add_shortcode('acc_item', 'shortcode_accordion_item');

/*===========================
* shortcode table
=============================*/
function shortcode_table($attts,$content=null){
    $str='';
    $str.='<table class="table table-striped">'.do_shortcode($content).'</table>';
    return $str;
}
add_shortcode('table','shortcode_table');
// thead
function shortcode_thead($attrs,$content=null){
    $html = '';
    $html ='<thead><tr>'.do_shortcode($content).'</tr></thead>';
    return $html;
}
add_shortcode('thead','shortcode_thead');
// th
function shortcode_addth($attrs,$content=null){
    $html = '';
    $html = '<th>'.do_shortcode($content).'</th>';
    return $html;
}
add_shortcode('th','shortcode_addth');
// tbody
function shortcode_tbody($attrs,$content=null){
    $html = '';
    $html ='<tbody>'.do_shortcode($content).'</tbody>';
    return $html;
}
add_shortcode('tbody','shortcode_tbody');
// tr
function shortcode_addtr($attrs,$content=null){
    $html = '';
    $html = '<tr>'.do_shortcode($content).'</tr>';
    return $html;
}
add_shortcode('tr','shortcode_addtr');
function shortcode_addtd($attrs,$content=null){
    $html = '';
    $html = '<td>'.do_shortcode($content).'</td>';
    return $html;
}
add_shortcode('td','shortcode_addtd');


/* =========================================================
* shortcode for tab.
* ========================================================= */
function shortcode_tabs($attrs, $content) {
    global $tz_tabs_arr;
    $tz_tabs_arr = array();
    do_shortcode($content);
    $return = '';
    if (!empty($tz_tabs_arr)) {
        $count = 0;
        $tab_items = array();
        $tab_contents = array();
        foreach ($tz_tabs_arr as $tab) {
            $count++;
            $tab_items[] = '<li><a href="#tab_' . strtolower(str_replace(" ", "_", $tab['title'])) . '">' . $tab['title'] . '</a></li>';
            $tab_contents[] = '<div class="tab-pane" id="tab_' . strtolower(str_replace(" ", "_", $tab['title'])) . '">' . $tab['content'] . '</div>';
        }
        $return = "\n" . '<!-- the tabs --><ul class="nav nav-tabs" id="Shortcode_myTab">' . implode("\n", $tab_items) . '</ul>' . "\n" . '<!-- tab "content" --><div class="tab-content tab-sh-content">' . implode("\n", $tab_contents) . '</div>' . "\n";
    }
    return $return;
}

add_shortcode('tabs', 'shortcode_tabs');
// Tab item.
function shortcode_tab_item($attrs, $content) {
    global $tz_tabs_arr;
    $attrs = shortcode_atts(array(
        'title' => '',
    ), $attrs);
    $tz_tabs_arr[] = array(
        'title' => $attrs['title'],
        'content' => do_shortcode($content),
    );
}
add_shortcode('tab_item', 'shortcode_tab_item');


  // Enable Shortcodes in excerpts and widgets
  add_filter('widget_text', 'do_shortcode');
  add_filter('the_excerpt', 'do_shortcode');
  add_filter('get_the_excerpt', 'do_shortcode');