/*
 Plugin: jQuery Lania
 Version 1.0.0
 Author: Templaza
 Author URL: http:templaza.com
 Plugin URL: http:templaza.com
 Dual licensed under the MIT and GPL licenses:
 http://www.opensource.org/licenses/mit-license.php
 http://www.gnu.org/licenses/gpl.html
 */
jQuery(document).ready(function(){

    /*--------------quote------------------*/
    jQuery('.Clientbk').each(function(){
        jQuery(this).parallax("50%", 0.4);
    });

    // footer
    var countFooter = 4;
    var footermenu = jQuery('.footermenu').html();
    var footer_1 = footermenu.replace(/^\s+|\s+$/g,'');;
    var footer_1 = footer_1.length;
    if(footer_1==0){
        jQuery('div').remove('.footermenu');
        countFooter = countFooter-1;
    }
    var footerSocial = jQuery('.footerSocial').html();
    var footer_2 = footerSocial.replace(/^\s+|\s+$/g,'');;
    var footer_2 = footer_2.length;
    if(footer_2==0){
        jQuery('div').remove('.footerSocial');
        countFooter = countFooter-1;
    }
    var footerLatest = jQuery('.footerLatest').html();
    var footer_3 = footerLatest.replace(/^\s+|\s+$/g,'');;
    var footer_3 = footer_3.length;
    if(footer_3==0){
        jQuery('div').remove('.footerLatest');
        countFooter = countFooter-1;
    }
    var footerTweets = jQuery('.footerTweets').html();
    var footer_4 = footerTweets.replace(/^\s+|\s+$/g,'');;
    var footer_4 = footer_4.length;
    if(footer_4==0){
        jQuery('div').remove('.footerTweets');
        countFooter = countFooter-1;
    }
    if(countFooter==0){
        jQuery('div').remove('.footer-fluid');
    }
    if(countFooter==1){
        if(jQuery('div').hasClass('footermenu')==true){
            jQuery('.footermenu').removeClass('span2');
            jQuery('.footermenu').addClass('span12');
        }
        if(jQuery('div').hasClass('footerSocial')==true){
            jQuery('.footerSocial').removeClass('span2');
            jQuery('.footerSocial').addClass('span12');
        }
        if(jQuery('div').hasClass('footerLatest')==true){
            jQuery('.footerLatest').removeClass('span4');
            jQuery('.footerLatest').addClass('span12');
        }
        if(jQuery('div').hasClass('footerTweets')==true){
            jQuery('.footerTweets').removeClass('span4');
            jQuery('.footerTweets').addClass('span12');
        }
    }
    if(countFooter==2){
        if(jQuery('div').hasClass('footermenu')==true){
            jQuery('.footermenu').removeClass('span2');
            jQuery('.footermenu').addClass('span6');
        }
        if(jQuery('div').hasClass('footerSocial')==true){
            jQuery('.footerSocial').removeClass('span2');
            jQuery('.footerSocial').addClass('span6');
        }
        if(jQuery('div').hasClass('footerLatest')==true){
            jQuery('.footerLatest').removeClass('span4');
            jQuery('.footerLatest').addClass('span6');
        }
        if(jQuery('div').hasClass('footerTweets')==true){
            jQuery('.footerTweets').removeClass('span4');
            jQuery('.footerTweets').addClass('span6');
        }
    }
    if(countFooter==3){
        if(jQuery('div').hasClass('footermenu')==true){
            jQuery('.footermenu').removeClass('span2');
            jQuery('.footermenu').addClass('span4');
        }
        if(jQuery('div').hasClass('footerSocial')==true){
            jQuery('.footerSocial').removeClass('span2');
            jQuery('.footerSocial').addClass('span4');
        }
    }
    jQuery('#TzTop').click(function() {
        jQuery('html, body').animate({scrollTop:0},700);

    });



});