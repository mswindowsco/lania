<?php
  $current_path = __FILE__; //absolute path
  $path_arr = explode('wp-content', $current_path);

  require_once($path_arr[0] . '/wp-load.php');

  #-----------------------------------------------------------------
  # Shortcode Column Field
  #-----------------------------------------------------------------

  $shortcodes = array(
    //Half
    array('id' => 'optgroup', 'title' => __('1/2 Column Shortcodes', TEXT_DOMAIN)),
    array('id' => 'one_half', 'title' => __('1/2 Column', TEXT_DOMAIN)),

    //Thirds
    array('id' => 'optgroup', 'title' => __('1/3 Column Shortcodes', TEXT_DOMAIN)),
    array('id' => 'one_third', 'title' => __('1/3 Column', TEXT_DOMAIN)),
    array('id' => 'two_third', 'title' => __('2/3 Column', TEXT_DOMAIN)),

    //Fourth
    array('id' => 'optgroup', 'title' => __('1/4 Column Shortcodes', TEXT_DOMAIN)),
    array('id' => 'one_fourth', 'title' => __('1/4 Column', TEXT_DOMAIN)),
    array('id' => 'two_fourth', 'title' => __('2/4 Column', TEXT_DOMAIN)),
    array('id' => 'three_fourth', 'title' => __('3/4 Column', TEXT_DOMAIN))
  );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo __('Column Shortcode', TEXT_DOMAIN); ?></title>

  <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/extension/assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/extension/shortcode/plazart_shortcode.css"/>

    <script type="text/javascript" src="<?php echo THEME_PATH; ?>/js/jquery.min.js"></script>
  <script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
</head>
<body>
<div id="shortcode-wrap" class="bootstrap">

  <div id="shortcode-column">

    <div class="shortcode-content">

      <div class="heading-title">
        <?php echo __('Manage Items', TEXT_DOMAIN); ?>
      </div><!-- end:heading-title -->

      <div class="shorcode-content-inner">
        <select id="column-shortcodes">
          <option value=""><?php echo __('Choose a Shortcode', TEXT_DOMAIN); ?></option>
          <?php
          //Loop through shortcodes
          $options = ''; $loop = 0; $checkoptgroup = false; $total = count($shortcodes);
          foreach ($shortcodes as $shortcode) {
            if ($shortcode['id'] == 'optgroup') {
              if ($loop > 0 && $checkoptgroup) {
                $options .= '</optgroup>';
                $checkoptgroup = false;
              }
              $options .= '<optgroup label="' . $shortcode['title'] . '">';
              $checkoptgroup = true;
            } else {
              $options .= '<option value="' . $shortcode['id'] . '">' . $shortcode['title'] . '</option>';
            }
            $loop++;
            if ($loop == $total) {
              $options .= '</optgroup>';
              $checkoptgroup = false;
            }
          } //endforeach
          echo $options;
          ?>
        </select>

        <div id="last-column" style="display: none;">
          <strong><?php echo __('Last column ?', TEXT_DOMAIN)?></strong>
          <input type="checkbox" value=""/>

          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div><!-- end:shortcode-content-inner -->

    </div><!-- end:shortcode-content -->

    <div class="shortcode-content">

      <div class="heading-title">
        <?php echo __('Shortcode Preview', TEXT_DOMAIN); ?>
      </div><!-- end:heading-title -->

      <div class="shortcode-preview">
        <code>
          <span id="shortcode-preview-f">[]</span>
          <span id="shortcode-preview-m"> <?php echo __('ADD_CONTENT_HERE', TEXT_DOMAIN)?> </span>
          <span id="shortcode-preview-l">[/]</span>
        </code>
      </div><!-- end:shorcode-preview -->

    </div><!-- end:shortcode-content -->

    <div class="shorcode-insert">
      <input class="shorcode-btn" id="btn-insert" value="<?php _e('Insert Shortcode', TEXT_DOMAIN); ?>" type="button">
    </div><!-- end:shorcode-insert -->
  </div><!-- end:shortcode-generator -->
</div><!-- end:shortcode-wrap -->
<script type="text/javascript">
  /*global jQuery: false, tinyMCEPopup: false */
  jQuery(function () {
    "use strict";
    var shortcode_f = '';
    var shortcode_l = '';

    jQuery('#column-shortcodes').bind('change', function () {

      if (String(jQuery(this).val()) !== '') {
        jQuery('#last-column input:checkbox').attr('checked', false);
        jQuery('#last-column').show();

        jQuery('#shortcode-preview-f').text('[' + jQuery(this).val() + ']');
        jQuery('#shortcode-preview-l').text('[/' + jQuery(this).val() + ']');

        shortcode_f = jQuery('#shortcode-preview-f').text();
        shortcode_l = jQuery('#shortcode-preview-l').text();
      } else {
        jQuery('#last-column').hide();
        jQuery('#last-column input:checkbox').attr('checked', false);
        shortcode_f = '';
        shortcode_l = '';
      }
    });

    jQuery('#last-column :checkbox').bind('change', function () {
      if (jQuery(this).is(':checked')) {
        // it is checked
        var last_col_f = shortcode_f.substr(0, shortcode_f.length - 1) + '_last]';
        var last_col_l = shortcode_l.substr(0, shortcode_l.length - 1) + '_last]';
        jQuery('#shortcode-preview-f').text(last_col_f);
        jQuery('#shortcode-preview-l').text(last_col_l);
      } else {
        jQuery('#shortcode-preview-f').text(shortcode_f);
        jQuery('#shortcode-preview-l').text(shortcode_l);
      }
    });

    jQuery('#btn-insert').click(function () {

      var shortcode = jQuery('#shortcode-preview-f').text() + jQuery('#shortcode-preview-m').text() + jQuery('#shortcode-preview-l').text();

      tinyMCEPopup.execCommand('mceReplaceContent', false, shortcode);
      tinyMCEPopup.close();

      return false;

    });
  });
</script>
</body>
</html>