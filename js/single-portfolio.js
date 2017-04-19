jQuery(document).ready(function() {

    jQuery(".tzfancybox").fancybox();

    jQuery('.related-content').showbizpro({
        dragAndScroll:"on",
        visibleElementsArray:[3,2,1,1],
        carousel:"off",
        mediaMaxHeight:[200,260,400,200],
        rewindFromEnd:"off",
        autoPlay:"off",
        delay:2000,
        speed:250
    });
    jQuery('#slider').flexslider({
        animation: "fade",
        slideshowSpeed: 3800,
        animationSpeed: 1000,
        controlNav: true,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel"
    });
});
