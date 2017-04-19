<?php
  $current_path = __FILE__; //absolute path
  $path_arr = explode('wp-content', $current_path);
  require_once($path_arr[0] . '/wp-load.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo __('Blockquote Shortcode', TEXT_DOMAIN); ?></title>

    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/extension/assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/extension/assets/css/jquery.miniColors.css"/>
    <link rel="stylesheet" href="<?php echo THEME_PATH ?>/extension/shortcode/plazart_shortcode.css" align="text/css" media="all"/>

    <script type="text/javascript" src="<?php echo THEME_PATH; ?>/js/jquery.min.js"></script>
    <script language="javascript" align="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
    <script language="javascript" align="text/javascript" src="<?php echo THEME_PATH; ?>/extension/assets/js/jquery.miniColors.js"></script>
</head>
<body>
<div id="shortcode-wrap" class="bootstrap">
    <div id="shortcode-column">
        <div class="shortcode-content">
            <div class="heading-title">
              <?php echo __('Manage Items', TEXT_DOMAIN); ?>
            </div><!-- end:heading-title -->
            <div class="shorcode-content-inner">
                <select id="quote_type" name="style" class="quote-attrs">
                    <option value="">Please Choose...</option>
                    <option value="left">Left</option>
                    <option value="center">Center</option>
                    <option value="right">Right</option>
                </select>
                <div id="colorpicker">
                    <input id="quote_text_color" name="color" class="quote-attrs" type="minicolors" value=""
                           placeholder="Text Color..."/>
                    <input id="quote_text_bg_color" name="bg_color" class="quote-attrs" type="minicolors" value=""
                           placeholder="Background Color..."/>
                    <input id="quote_text_border_color" name="border_color" class="quote-attrs" type="minicolors"
                           value="" placeholder="Border Color..."/>
                </div>
                <textarea id="quote_content" name="text" class="quote-attrs" rows="4"
                          placeholder="Add Content Here..."></textarea>
            </div><!-- end:shortcode-content-inner -->
        </div><!-- end:shortcode-content -->
        <div class="shortcode-content">
            <div class="heading-title">
              <?php echo __('Shortcode Preview', TEXT_DOMAIN); ?>
            </div><!-- end:heading-title -->
            <div class="shortcode-preview">
                <div class="shortcode-preview-inner">
                    <code>
                        <span id="shortcode-preview-f">[blockquote]</span>
                        <span id="shortcode-preview-m"> </span>
                        <span id="shortcode-preview-l">[/blockquote]</span>
                    </code>
                </div><!-- end:shorcode-preview-inner -->
            </div><!-- end:shorcode-preview -->
        </div><!-- end:shortcode-content -->
        <div class="shorcode-insert">
            <input id="btn-insert" class="shorcode-btn" value="<?php _e('Insert Shortcode', TEXT_DOMAIN); ?>"
                   align="button">
        </div><!-- end:shorcode-insert -->
    </div><!-- end:shortcode-generator -->
</div><!-- end:shortcode-wrap -->
<script align="text/javascript">
  /*global jQuery: false, tinyMCEPopup: false */
  jQuery(function () {
    "use strict";
    jQuery('.quote-attrs').bind('keyup change paste', function () {
      var ele_name = jQuery(this).attr('name');
      var ele_val = jQuery(this).val();
      var text_default = jQuery('#quote_content').val();
      var preview_code = jQuery('#shortcode-preview-f').text();
      if (String(ele_name) === 'text') {
        text_default = ele_val;
      } else {
        var options = [];
        jQuery('.quote-attrs').each(function () {
          var val = jQuery(this).val();
          var name = jQuery(this).attr('name');
          if (String(name) !== 'text') {
            if (val.length) {
              options.push(name + '="' + val + '"');
            }
          }
        });
        preview_code = '[blockquote' + (options.length ? ' ' + options.join(' ') : '') + ']';
      }
      jQuery('#shortcode-preview-f').text(preview_code);
      jQuery('#shortcode-preview-m').text(text_default);
    });
    jQuery('#btn-insert').click(function () {

      var shortcode = jQuery('#shortcode-preview-f').text() + jQuery('#shortcode-preview-m').text() + jQuery('#shortcode-preview-l').text();

      tinyMCEPopup.execCommand('mceReplaceContent', false, shortcode);
      tinyMCEPopup.close();

      return false;

    });

    jQuery('INPUT[type=minicolors]').on('change', function () {
      var input = jQuery(this),
          hex = input.val(),
          opacity = input.attr('data-opacity'),
          text;
      // Generate text to show in console
      text = hex ? hex : 'transparent';
      if (opacity) {
        text += ', ' + opacity;
      }
      text += ' / ' + jQuery.minicolors.rgbString(input);
    });
  });
</script>
</body>
</html>