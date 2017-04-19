function TzTemplateResizeImage(obj){


    var widthStage;
    var heightStage ;
    var widthImage;
    var heightImage;
    obj.each(function (i,el){

         heightStage = jQuery(this).height();

        widthStage = jQuery (this).width();

        var img_url = jQuery(this).find('img').attr('src');

        var image = new Image();
        image.src = img_url;
        image.onload = function() {

        }

        widthImage = image.naturalWidth;
        heightImage = image.naturalHeight;


        var tzimg	=	new resizeImage(widthImage, heightImage, widthStage, heightStage);
        jQuery(this).find('img').css ({ top: tzimg.top, left: tzimg.left, width: tzimg.width, height: tzimg.height });


    });

}
function tz_init(defaultwidth){
    var contentWidth    = jQuery('#TzContent').width();
    var columnWidth     = defaultwidth;
    var curColCount     = 0;

    var maxColCount     = 0;
    var newColCount     = 0;
    var newColWidth     = 0;
    var featureColWidth = 0;

    curColCount = Math.floor(contentWidth / columnWidth);

    maxColCount = curColCount + 1;
    if((maxColCount - (contentWidth / columnWidth)) > ((contentWidth / columnWidth) - curColCount)){
        newColCount     = curColCount;
    }
    else{
        newColCount = maxColCount;
    }

    newColWidth = contentWidth;
    featureColWidth = contentWidth;


    if(newColCount > 1){
        newColWidth = Math.floor(contentWidth / newColCount);
        featureColWidth = newColWidth * 2;
    }

    jQuery('.element').width(newColWidth);
    jQuery('.tz_item .TZPortfolio-image').each(function(){
        jQuery(this).find('img').first().attr('width','100%');
    });

    jQuery('.tz_feature_item').width(featureColWidth);
    var $container = jQuery('#portfolio');
    $container.imagesLoaded(function(){
        $container.isotope({
            masonry:{
                columnWidth: newColWidth
            }
        });

    });
    TzTemplateResizeImage(jQuery('.TZPortfolio-image'));
}
var p_width =   parseInt(portlofio_variable.p_width);
var resizeTimer = null;
jQuery(window).bind('load resize', function() {
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout("tz_init(p_width)", 100);
});

jQuery(document).ready(function(){

    jQuery(".tzfancybox").fancybox();
    // create tag
    var cat_status = []; //var cat_status = [];
    jQuery('#portfolio .element').each(function(){
        var item_class = jQuery(this).attr('class');
        item_class = item_class.split(' ');

        for(var i = 0; i < item_class.length; i++){

            if(parseInt(item_class[i].indexOf(themeprefix), 10) === 0) {
                if(jQuery.inArray(item_class[i], cat_status)){
                    cat_status.push(item_class[i]);
                }
            }
        }
    });
    for(var index=0; index < cat_status.length; index++){
        jQuery('#filter a#' + cat_status[index]).removeClass('TZHide');
    }

    var $container = jQuery('#portfolio');

    $container.imagesLoaded( function(){
        $container.find('.element').css({opacity: 1});
        $container.isotope({
            itemSelector : '.element',
            layoutMode: 'masonry',
            getSortData: {
                name: function( $elem ) {
                    var name = $elem.find('.name'),
                        itemText = name.length ? name : $elem;
                    return itemText.text();
                },
                date: function($elem){
                    var number = $elem.hasClass('element') ?
                        $elem.find('.create').text() :
                        $elem.attr('data-date');
                    return number;

                }
            }
        });

        tz_init(p_width);

    });

    function loadPortfolio(){

        var $optionSets = jQuery('#filter'),
            $optionLinks = $optionSets.find('a');
            $optionLinks.click(function(event){
            event.preventDefault();
            var $this = jQuery(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');

            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;

            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                // changes in layout modes need extra logic
                changeLayoutMode( $this, options );
            } else {
                // otherwise, apply new options
                $container.isotope( options );
            }
            return false;
        });
        tz_init(p_width);
    }

    loadPortfolio();


});

jQuery(function(){

    var $container = jQuery('#portfolio');

    $container.infinitescroll({
            navSelector  : '#loadajax a',    // selector for the paged navigation
            nextSelector : '#loadajax a:first',  // selector for the NEXT link (to page 2)
            itemSelector : '.element',     // selector for all items you'll retrieve
            errorCallback: function(){
                jQuery('#tz_append a').addClass('tzNomore');
                jQuery('#tz_append span').slideDown();
            },
            loading: {
                msgText:'',
                finishedMsg: '',
                img: portlofio_variable.img_load,
                selector: '#tz_append'
            }
        },
        // call Isotope as a callback
        function( newElements ) {

            var $newElems =   jQuery( newElements ).css({ opacity: 0 });

            // ensure that images load before adding to masonry layout
            $newElems.imagesLoaded(function(){
                // show elems now they're ready
                $newElems.animate({ opacity: 1 });

                // trigger scroll again
                $container.isotope( 'appended', $newElems);

                if (String(jQuery.browser.safari) && String(document.readyState) !== "complete") {
                    tz_init(p_width);
                } else {
                    tz_init(p_width);
                }

                //if there still more item
                if($newElems.length){

                    //move item-more to the end
                    jQuery('div#tz_append').find('a:first').show();


                }
            });

            // create tag
            var cat_status = []; //var cat_status = [];
            jQuery('#portfolio .element').each(function(){
                var item_class = jQuery(this).attr('class');
                item_class = item_class.split(' ');

                for(var i = 0; i < item_class.length; i++){

                    if(parseInt(item_class[i].indexOf(themeprefix), 10) === 0) {
                        if(jQuery.inArray(item_class[i], cat_status)){
                            cat_status.push(item_class[i]);
                        }
                    }
                }
            });
            for(var index=0; index < cat_status.length; index++){
                jQuery('#filter a#' + cat_status[index]).removeClass('TZHide');
            }

        }
    );
    jQuery(window).unbind('.infscr');
    jQuery('div#tz_append a').click(function(){
        jQuery('div#tz_append').find('a:first').hide();
        $container.infinitescroll('retrieve');
    });

});