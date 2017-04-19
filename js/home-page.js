/*file js home page*/
jQuery(document).ready(function() {

    var thumb   =   parseInt(var_theme.tbumb);
    /*--------------portfolio------------------*/
    jQuery('#box_portofliocontent').showbizpro({
        dragAndScroll:"on",
        visibleElementsArray:[thumb,3,2,1],
        carousel:"off",
        mediaMaxHeight:[200,200,150,150],
        rewindFromEnd:"off",
        autoPlay:"off",
        delay:2000,
        speed:250
    });
    jQuery('#content-emp').showbizpro({
        dragAndScroll:"on",
        visibleElementsArray:[4,3,2,1],
        carousel:"off",
        mediaMaxHeight:[200,200,150,150],
        rewindFromEnd:"off",
        autoPlay:"off",
        delay:2000,
        speed:250
    });
    jQuery('#company_side').showbizpro({
        dragAndScroll:"on",
        visibleElementsArray:[6,6,3,2],
        carousel:"off",
        mediaMaxHeight:[200,200,150,150],
        rewindFromEnd:"off",
        autoPlay:"off",
        delay:2000,
        speed:250
    });

    /*--------------quote------------------*/
    jQuery('.quotebk').each(function(){
    jQuery(this).parallax("50%", 0.4);
    });

    jQuery('.tzquote').each(function(){
        var tzinfoheight = jQuery(this).find('.tzinfo').height();
        var tzquote      = jQuery(this).find('.quoteitem').height();
        var heightquote   = (tzquote/2) - (tzinfoheight/2);
        jQuery(this).find('.tzinfo').css("padding-top",heightquote+"px");
    });

    /*--------------tab blog------------------*/
    jQuery('#tzmyTab a').click(function (e) {
        e.preventDefault();
        jQuery(this).tab('show');
    });

    <!--Countdown Script-->
    jQuery("#countdown").countdown({
            date: var_theme.tzdate_Evnet, // add the countdown's end date (i.e. 3 november 2012 12:00:00)
            format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
        },

        function() {

            // the code here will run when the countdown ends
            // alert("done!")

    });


    // ZOOM SLIDE
    jQuery('.cb-slideshow').css('height',var_theme.zoomheight+'px');

    jQuery('.two_third p').each(function(){
        if(jQuery(this).html()==""){
            jQuery(this).remove();
        }
    });

    jQuery(".tzfancybox").fancybox();

});
jQuery(window).load(function(){


        jQuery('div.slotholder').prepend('<div class="bk-responsive-slide"></div>');

    switch (var_theme.chooseslide){
        case 'flexslider':
            jQuery('#carousel').flexslider({
                animation: "slide",
                controlNav: true,
                animationLoop:false,
                slideshow: true,
                itemWidth: parseInt(var_theme.flexthumbnail),
                itemMargin: 0,
                slideshowSpeed: 3800,
                animationSpeed: 1500,
                asNavFor: '#slider'
            });

            jQuery('#slider').flexslider({
                animation: var_theme.flexffect,
                slideshowSpeed: 3800,
                animationSpeed: 1000,
                controlNav: true,
                animationLoop: true,
                slideshow: true,
                sync: "#carousel"
            });
            break;
        case 'nivo':
            jQuery('#slider').nivoSlider({
                effect: var_theme.Nivoeffect,          // Specify sets like: 'fold,fade,sliceDown'
                slices: 15,                            // For slice animations
                boxCols: parseInt(var_theme.NivoCols),     // For box animations
                boxRows: parseInt(var_theme.TZNivoRows),     // For box animations
                animSpeed: var_theme.NivoTransition,   // Slide transition speed
                pauseTime: var_theme.TZNivoPause,      // How long each slide will show
                startSlide: 0,                  // Set starting Slide (0 index)
                directionNav: true,             // Next & Prev navigation
                controlNav: false,               // 1,2,3... navigation
                controlNavThumbs: false,        // Use thumbnails for Control Nav
                pauseOnHover: true,             // Stop animation while hovering
                manualAdvance: false,           // Force manual transitions
                prevText: 'Prev',               // Prev directionNav text
                nextText: 'Next',               // Next directionNav text
                randomStart: false,             // Start on a random slide
                beforeChange: function(){
                    jQuery('.nivo-caption').slideUp();
                },     // Triggers before a slide transition
                afterChange: function(){
                    jQuery('.nivo-caption').slideDown();

                },      // Triggers after a slide transition
                slideshowEnd: function(){

                },     // Triggers after all slides have been shown
                lastSlide: function(){

                },        // Triggers when last slide is shown
                afterLoad: function(){

                }         // Triggers when slider has loaded
            });
            break;
    }



});


