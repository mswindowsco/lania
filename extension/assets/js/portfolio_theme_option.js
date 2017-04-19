jQuery(document).ready(function(){

    // method body font
    var FontCheck2 = jQuery("#plazart_TZFontType").attr('value');
    switch (FontCheck2){
        case 'TzFontSquirrel':
            jQuery('#setting_plazart_TzFontSquirrel').css("display","block");
            break;
        case 'TzFontDefault':
            jQuery('#setting_plazart_TzFontDefault').css("display","block");

            break;
        case 'Tzgoogle':

            jQuery('#setting_plazart_TzFontFami').css("display","block");
            jQuery('#setting_plazart_TzFontFaminy').css("display","block");
            break;
    }

    jQuery("#plazart_TZFontType").change(function(){
        var FontCheck = jQuery("#plazart_TZFontType").attr('value');
        switch (FontCheck){
            case 'TzFontSquirrel':
                jQuery('#setting_plazart_TzFontSquirrel').slideDown();
                jQuery('#setting_plazart_TzFontDefault').slideUp();
                jQuery('#setting_plazart_TzFontFami').slideUp();
                jQuery('#setting_plazart_TzFontFaminy').slideUp();
                break;
            case 'TzFontDefault':
                jQuery('#setting_plazart_TzFontDefault').slideDown();
                jQuery('#setting_plazart_TzFontSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontFami').slideUp();
                jQuery('#setting_plazart_TzFontFaminy').slideUp();
                break;
            case 'Tzgoogle':
                jQuery('#setting_plazart_TzFontDefault').slideUp();
                jQuery('#setting_plazart_TzFontSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontFami').slideDown();
                jQuery('#setting_plazart_TzFontFaminy').slideDown();
                break;
        }
    });


    // method header font
    var FontCheckHead = jQuery("#plazart_TZFontTypeHead").attr('value');
    switch (FontCheckHead){
        case 'TzFontSquirrel':
            jQuery('#setting_plazart_TzFontHeadSquirrel').css("display","block");
            break;
        case 'TzFontDefault':
            jQuery('#setting_plazart_TzFontHeadDefault').css("display","block");

            break;
        case 'Tzgoogle':

            jQuery('#setting_plazart_TzFontHeadGoodurl').css("display","block");
            jQuery('#setting_plazart_TzFontFaminyHead').css("display","block");
            break;
    }

    jQuery("#plazart_TZFontTypeHead").change(function(){
        var FontCheckHead2 = jQuery("#plazart_TZFontTypeHead").attr('value');
        switch (FontCheckHead2){
            case 'TzFontSquirrel':
                jQuery('#setting_plazart_TzFontHeadSquirrel').slideDown();
                jQuery('#setting_plazart_TzFontHeadDefault').slideUp();
                jQuery('#setting_plazart_TzFontHeadGoodurl').slideUp();
                jQuery('#setting_plazart_TzFontFaminyHead').slideUp();
                break;
            case 'TzFontDefault':
                jQuery('#setting_plazart_TzFontHeadDefault').slideDown();
                jQuery('#setting_plazart_TzFontHeadSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontHeadGoodurl').slideUp();
                jQuery('#setting_plazart_TzFontFaminyHead').slideUp();
                break;
            case 'Tzgoogle':
                jQuery('#setting_plazart_TzFontHeadDefault').slideUp();
                jQuery('#setting_plazart_TzFontHeadSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontHeadGoodurl').slideDown();
                jQuery('#setting_plazart_TzFontFaminyHead').slideDown();
                break;
        }
    });

    // method Menu font
    var FontCheckMenu= jQuery("#plazart_TZFontTypeMenu").attr('value');
    switch (FontCheckMenu){
        case 'TzFontSquirrel':
            jQuery('#setting_plazart_TzFontMenuSquirrel').css("display","block");
            break;
        case 'TzFontDefault':
            jQuery('#setting_plazart_TzFontMenuDefault').css("display","block");

            break;
        case 'Tzgoogle':

            jQuery('#setting_plazart_TzFontMenuGoodurl').css("display","block");
            jQuery('#setting_plazart_TzFontFaminyMenu').css("display","block");
            break;
    }

    jQuery("#plazart_TZFontTypeMenu").change(function(){
        var FontCheckMenu2 = jQuery("#plazart_TZFontTypeMenu").attr('value');
        switch (FontCheckMenu2){
            case 'TzFontSquirrel':
                jQuery('#setting_plazart_TzFontMenuSquirrel').slideDown();
                jQuery('#setting_plazart_TzFontMenuDefault').slideUp();
                jQuery('#setting_plazart_TzFontMenuGoodurl').slideUp();
                jQuery('#setting_plazart_TzFontFaminyMenu').slideUp();
                break;
            case 'TzFontDefault':
                jQuery('#setting_plazart_TzFontMenuDefault').slideDown();
                jQuery('#setting_plazart_TzFontMenuSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontMenuGoodurl').slideUp();
                jQuery('#setting_plazart_TzFontFaminyMenu').slideUp();
                break;
            case 'Tzgoogle':
                jQuery('#setting_plazart_TzFontMenuDefault').slideUp();
                jQuery('#setting_plazart_TzFontMenuSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontMenuGoodurl').slideDown();
                jQuery('#setting_plazart_TzFontFaminyMenu').slideDown();
                break;
        }
    });

    // method custom font
    var FontCheckCustom= jQuery("#plazart_TZFontTypeCustom").attr('value');
    switch (FontCheckCustom){
        case 'TzFontSquirrel':
            jQuery('#setting_plazart_TzFontCustomSquirrel').css("display","block");
            break;
        case 'TzFontDefault':
            jQuery('#setting_plazart_TzFontCustomDefault').css("display","block");

            break;
        case 'Tzgoogle':

            jQuery('#setting_plazart_TzFontCustomGoodurl').css("display","block");
            jQuery('#setting_plazart_TzFontFaminyCustom').css("display","block");
            break;
    }

    jQuery("#plazart_TZFontTypeCustom").change(function(){
        var FontCheckCustom2 = jQuery("#plazart_TZFontTypeCustom").attr('value');
        switch (FontCheckCustom2){
            case 'TzFontSquirrel':
                jQuery('#setting_plazart_TzFontCustomSquirrel').slideDown();
                jQuery('#setting_plazart_TzFontCustomDefault').slideUp();
                jQuery('#setting_plazart_TzFontCustomGoodurl').slideUp();
                jQuery('#setting_plazart_TzFontFaminyCustom').slideUp();
                break;
            case 'TzFontDefault':
                jQuery('#setting_plazart_TzFontCustomDefault').slideDown();
                jQuery('#setting_plazart_TzFontCustomSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontCustomGoodurl').slideUp();
                jQuery('#setting_plazart_TzFontFaminyCustom').slideUp();
                break;
            case 'Tzgoogle':
                jQuery('#setting_plazart_TzFontCustomDefault').slideUp();
                jQuery('#setting_plazart_TzFontCustomSquirrel').slideUp();
                jQuery('#setting_plazart_TzFontCustomGoodurl').slideDown();
                jQuery('#setting_plazart_TzFontFaminyCustom').slideDown();
                break;
        }
    });




    // method logo type

    var LogoType= jQuery("#plazart_logotype").attr('value');
    if(LogoType==1){
        jQuery('#setting_plazart_logo').slideDown();
        jQuery('#setting_plazart_logoText').slideUp();
        jQuery('#setting_plazart_logoTextcolor').slideUp();
    }else{
        jQuery('#setting_plazart_logo').slideUp();
        jQuery('#setting_plazart_logoText').slideDown();
        jQuery('#setting_plazart_logoTextcolor').slideDown();
    }

    jQuery("#plazart_logotype").change(function(){
        var LogoTypeChange= jQuery("#plazart_logotype").attr('value');
        if(LogoTypeChange==1){
            jQuery('#setting_plazart_logo').slideDown();
            jQuery('#setting_plazart_logoText').slideUp();
            jQuery('#setting_plazart_logoTextcolor').slideUp();
        }else{
            jQuery('#setting_plazart_logo').slideUp();
            jQuery('#setting_plazart_logoText').slideDown();
            jQuery('#setting_plazart_logoTextcolor').slideDown();
        }
    });


    jQuery("#tab_TzSyle").toggle(function(){
        jQuery('#tab_TzFontMenu').slideDown();
        jQuery('#tab_TzFontCustom').slideDown();
        jQuery('#tab_TZBackground').slideDown();
        jQuery('#tab_TZBody').slideDown();
        jQuery('#tab_TzFontHeader').slideDown();
    },function(){
        jQuery('#tab_TzFontMenu').slideUp();
        jQuery('#tab_TzFontCustom').slideUp();
        jQuery('#tab_TZBackground').slideUp();
        jQuery('#tab_TZBody').slideUp();
        jQuery('#tab_TzFontHeader').slideUp();
    });

    // slide setting
    jQuery('#tab_TZSlideSetting').click(function(){
        var Nivovalue= jQuery("#plazart_TZShooseSlide").attr('value');
        switch (Nivovalue){
            case'nivo':
                jQuery('#tab_TZNivoSetting').slideDown();
                jQuery('#tab_TZRevslider').slideUp();
                jQuery('#tab_TZZoomslider').slideUp();
                jQuery('#tab_TZFlexslider').slideUp();
                break;
            case'revslider':
                jQuery('#tab_TZRevslider').slideDown();
                jQuery('#tab_TZNivoSetting').slideUp();
                jQuery('#tab_TZZoomslider').slideUp();
                jQuery('#tab_TZFlexslider').slideUp();
                break;
            case'zoomslider':
                jQuery('#tab_TZRevslider').slideUp();
                jQuery('#tab_TZNivoSetting').slideUp();
                jQuery('#tab_TZZoomslider').slideDown();
                jQuery('#tab_TZFlexslider').slideUp();
                break;
            case'flexslider':
                jQuery('#tab_TZRevslider').slideUp();
                jQuery('#tab_TZNivoSetting').slideUp();
                jQuery('#tab_TZZoomslider').slideUp();
                jQuery('#tab_TZFlexslider').slideDown();
                break;
        }

    });

    jQuery("#plazart_TZShooseSlide").change(function(){
        var SlideChange= jQuery("#plazart_TZShooseSlide").attr('value');
        switch (SlideChange){
            case'nivo':
                jQuery('#tab_TZNivoSetting').slideDown();
                jQuery('#tab_TZRevslider').slideUp();
                jQuery('#tab_TZZoomslider').slideUp();
                jQuery('#tab_TZFlexslider').slideUp();
                break;
            case'revslider':
                jQuery('#tab_TZRevslider').slideDown();
                jQuery('#tab_TZNivoSetting').slideUp();
                jQuery('#tab_TZZoomslider').slideUp();
                jQuery('#tab_TZFlexslider').slideUp();
                break;
            case'zoomslider':
                jQuery('#tab_TZRevslider').slideUp();
                jQuery('#tab_TZNivoSetting').slideUp();
                jQuery('#tab_TZZoomslider').slideDown();
                jQuery('#tab_TZFlexslider').slideUp();
                break;
            case'flexslider':
                jQuery('#tab_TZRevslider').slideUp();
                jQuery('#tab_TZNivoSetting').slideUp();
                jQuery('#tab_TZZoomslider').slideUp();
                jQuery('#tab_TZFlexslider').slideDown();
                break;
        }

    });

    // nivo effece
    var NivoEffect= jQuery("#plazart_TZNivoEffect").attr('value');
    if( NivoEffect=="boxRandom" || NivoEffect=="boxRain" || NivoEffect=="boxRainReverse" || NivoEffect=="boxRainGrow" || NivoEffect=="boxRainGrowReverse" ) {
        jQuery('#setting_plazart_TZNivoCols').slideDown();
        jQuery('#setting_plazart_TZNivorows').slideDown();
    }else{
        jQuery('#setting_plazart_TZNivoCols').slideUp();
        jQuery('#setting_plazart_TZNivorows').slideUp();
    }

    jQuery("#plazart_TZNivoEffect").change(function(){
        var SlideEffect= jQuery("#plazart_TZNivoEffect").attr('value');
       if( SlideEffect=="boxRandom" || SlideEffect=="boxRain" || SlideEffect=="boxRainReverse" || SlideEffect=="boxRainGrow" || SlideEffect=="boxRainGrowReverse" ) {
           jQuery('#setting_plazart_TZNivoCols').slideDown();
           jQuery('#setting_plazart_TZNivorows').slideDown();
       }else{
           jQuery('#setting_plazart_TZNivoCols').slideUp();
           jQuery('#setting_plazart_TZNivorows').slideUp();
       }

    });

    // nivo info
    var ShowInfo= jQuery("#plazart_TZNivoShowInfo").attr('value');
    if( ShowInfo=='show' ) {
        jQuery('#setting_plazart_TZNivoBackground').slideDown();
        jQuery('#setting_plazart_TZNivoText').slideDown();
        jQuery('#setting_plazart_TZNivoOpacity').slideDown();
    }else{
        jQuery('#setting_plazart_TZNivoBackground').slideUp();
        jQuery('#setting_plazart_TZNivoText').slideUp();
        jQuery('#setting_plazart_TZNivoOpacity').slideUp();
    }

    jQuery("#plazart_TZNivoShowInfo").change(function(){
        var ShowInfoChangle= jQuery("#plazart_TZNivoShowInfo").attr('value');
        if( ShowInfoChangle=='show' ) {
            jQuery('#setting_plazart_TZNivoBackground').slideDown();
            jQuery('#setting_plazart_TZNivoText').slideDown();
            jQuery('#setting_plazart_TZNivoOpacity').slideDown();
        }else{
            jQuery('#setting_plazart_TZNivoBackground').slideUp();
            jQuery('#setting_plazart_TZNivoText').slideUp();
            jQuery('#setting_plazart_TZNivoOpacity').slideUp();
        }

    });

    // Home page settings


    jQuery("#tab_TZHomePage").toggle(function(){
        jQuery('#tab_TZModuleAbout').slideDown();
        jQuery('#tab_TZModuleServices').slideDown();
        jQuery('#tab_TZModuleCompany').slideDown();
        jQuery('#tab_TZModuleEvent').slideDown();
        jQuery('#tab_TZModulePortfolio').slideDown();
        jQuery('#tab_TZModuleBlog').slideDown();
        jQuery('#tab_TZModulePage').slideDown();
        jQuery('#tab_TZModuleQuote').slideDown();
    },function(){
        jQuery('#tab_TZModuleAbout').slideUp();
        jQuery('#tab_TZModuleServices').slideUp();
        jQuery('#tab_TZModuleCompany').slideUp();
        jQuery('#tab_TZModuleEvent').slideUp();
        jQuery('#tab_TZModulePortfolio').slideUp();
        jQuery('#tab_TZModuleBlog').slideUp();
        jQuery('#tab_TZModulePage').slideUp();
        jQuery('#tab_TZModuleQuote').slideUp();
    });
    // Portfolio settings


    jQuery("#tab_TZPortfolio").toggle(function(){
        jQuery('#tab_TZPortfolioFooter').slideDown();
        jQuery('#tab_TZPageHeader').slideDown();
    },function(){
        jQuery('#tab_TZPortfolioFooter').slideUp();
        jQuery('#tab_TZPageHeader').slideUp();
    });
   // timeline settings


    jQuery("#tab_TZTimeline").toggle(function(){
        jQuery('#tab_TZTimelineHeader').slideDown();
        jQuery('#tab_TZTimelineFooter').slideDown();
    },function(){
        jQuery('#tab_TZTimelineHeader').slideUp();
        jQuery('#tab_TZTimelineFooter').slideUp();
    });

    // Blog settings
    jQuery("#tab_TZBlogPage").toggle(function(){
        jQuery('#tab_TZBlogHeader').slideDown();
        jQuery('#tab_TZBlogFooter').slideDown();
    },function(){
        jQuery('#tab_TZBlogHeader').slideUp();
        jQuery('#tab_TZBlogFooter').slideUp();
    });

    // Archive settings
    jQuery("#tab_TZPageArchive").toggle(function(){
        jQuery('#tab_TZArchivePageHeader').slideDown();
        jQuery('#tab_TZArchivePageFooter').slideDown();
    },function(){
        jQuery('#tab_TZArchivePageHeader').slideUp();
        jQuery('#tab_TZArchivePageFooter').slideUp();
    });

    // position abouts
    var attrposition= jQuery("#plazart_TZAboutPosition").attr('value');

    switch (attrposition){
        case '1':
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeIn();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '2':
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeIn();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '3':
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeIn();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '4':
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeIn();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '5':
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeIn();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '6':
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeIn();
            break;
    }


    jQuery("#plazart_TZAboutPosition").change(function(){
        var changposition = jQuery("#plazart_TZAboutPosition").attr('value');

        switch (changposition){
            case '1':
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeIn();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '2':
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeIn();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '3':
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeIn();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '4':
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeIn();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '5':
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeIn();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '6':
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout .option-tree-ui-radio-images:eq(5)").fadeIn();
                break;
        }
    });

    // position services
    var attrpositionServices= jQuery("#plazart_TZServicesPosition").attr('value');

    switch (attrpositionServices){
        case '1':
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeIn();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '2':
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeIn();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '3':
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeIn();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '4':
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeIn();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '5':
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_services_services .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeIn();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '6':
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeIn();
            break;
    }

    jQuery("#plazart_TZServicesPosition").change(function(){
        var changpositionServices = jQuery("#plazart_TZServicesPosition").attr('value');

        switch (changpositionServices){
            case '1':
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeIn();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '2':
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeIn();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '3':
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeIn();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '4':
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeIn();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '5':
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeIn();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '6':
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_services .option-tree-ui-radio-images:eq(5)").fadeIn();
                break;
        }
    });

    // position company
    var attrpositionCompany = jQuery("#plazart_TZCompanyPosition").attr('value');

    switch (attrpositionCompany){
        case '1':
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeIn();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '2':
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeIn();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '3':
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeIn();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '4':
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeIn();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '5':
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeIn();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '6':
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeIn();
            break;
    }

    jQuery("#plazart_TZCompanyPosition").change(function(){
        var changpositionCompany = jQuery("#plazart_TZCompanyPosition").attr('value');

        switch (changpositionCompany){
            case '1':
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeIn();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '2':
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeIn();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '3':
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeIn();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '4':
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeIn();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '5':
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeIn();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '6':
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_Company .option-tree-ui-radio-images:eq(5)").fadeIn();
                break;
        }
    });

    // position event

    var attrpositionevent = jQuery("#plazart_TZEventPosition").attr('value');

    switch (attrpositionevent){
        case '1':
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeIn();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '2':
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeIn();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '3':
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeIn();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '4':
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeIn();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '5':
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeIn();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '6':
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeIn();
            break;
    }

    jQuery("#plazart_TZEventPosition").change(function(){
        var changpositionevent = jQuery("#plazart_TZEventPosition").attr('value');

        switch (changpositionevent){
            case '1':
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeIn();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '2':
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeIn();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '3':
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeIn();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '4':
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeIn();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '5':
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeIn();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '6':
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_event .option-tree-ui-radio-images:eq(5)").fadeIn();
                break;
        }
    });

    // position portfolio

    var attrpositionportfolio = jQuery("#plazart_TZPortfolioPosition").attr('value');

    switch (attrpositionportfolio){
        case '1':
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeIn();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '2':
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeIn();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '3':
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeIn();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '4':
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeIn();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '5':
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeIn();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '6':
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeIn();
            break;
    }

    jQuery("#plazart_TZPortfolioPosition").change(function(){
        var changpositionportfolio = jQuery("#plazart_TZPortfolioPosition").attr('value');

        switch (changpositionportfolio){
            case '1':
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeIn();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '2':
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeIn();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '3':
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeIn();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '4':
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeIn();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '5':
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeIn();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '6':
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_portfolio .option-tree-ui-radio-images:eq(5)").fadeIn();
                break;
        }
    });

    // position blog

    var attrpositionblog = jQuery("#plazart_TZPositionBlog").attr('value');

    switch (attrpositionblog){
        case '1':
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeIn();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '2':
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeIn();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '3':
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeIn();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();

            break;
        case '4':
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeIn();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '5':
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeIn();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();
            break;
        case '6':
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
            jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeIn();
            break;
    }

    jQuery("#plazart_TZPositionBlog").change(function(){
        var changpositionblog2 = jQuery("#plazart_TZPositionBlog").attr('value');

        switch (changpositionblog2){
            case '1':
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeIn();
                jQuery("#setting_tz_my_layout_blogion-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '2':
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeIn();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '3':
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeIn();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();

                break;
            case '4':
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeIn();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '5':
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeIn();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeOut();
                break;
            case '6':
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(0)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(1)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(2)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(3)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(4)").fadeOut();
                jQuery("#setting_tz_my_layout_blog .option-tree-ui-radio-images:eq(5)").fadeIn();
                break;
        }
    });


});



// Background Type Event

jQuery('#' + themeprefix + '_background_type').live('change', function () {
    "use strict";

    var value = jQuery(this).val();
    if (String(value) === 'none') {
        jQuery('#setting_' + themeprefix + '_background_pattern, ' +
            '#setting_' + themeprefix + '_background_single_image').slideUp();
        jQuery('#setting_' + themeprefix + '_TZBackgroundColor').slideDown();
    }else if (String(value) === 'pattern') {
        jQuery('#setting_' + themeprefix + '_background_pattern').slideDown();
        jQuery('#setting_' + themeprefix + '_background_single_image').slideUp();
        jQuery('#setting_' + themeprefix + '_TZBackgroundColor').slideUp();
    }else {
        jQuery('#setting_' + themeprefix + '_background_pattern').slideUp();
        jQuery('#setting_' + themeprefix + '_background_single_image').slideDown();
        jQuery('#setting_' + themeprefix + '_TZBackgroundColor').slideUp();
    }
});

var background_type = jQuery('#' + themeprefix + '_background_type').val();
if (String(background_type) === 'none') {
    jQuery('#setting_' + themeprefix + '_background_pattern, ' +
        '#setting_' + themeprefix + '_background_single_image').slideUp();
    jQuery('#setting_' + themeprefix + '_TZBackgroundColor').slideDown();
}else if (String(background_type) === 'pattern') {
    jQuery('#setting_' + themeprefix + '_background_pattern').slideDown();
    jQuery('#setting_' + themeprefix + '_background_single_image').slideUp();
} else {
    jQuery('#setting_' + themeprefix + '_background_pattern').slideUp();
    jQuery('#setting_' + themeprefix + '_background_single_image').slideDown();

}

// Background Pattern Preview
jQuery('#setting_' + themeprefix + '_background_pattern .background_pattern').live('click', function () {
    "use strict";
    if (jQuery('#wpcontent').length > 0) {
        jQuery('#wpcontent').css('background', 'url("' + jQuery(this).attr('src') + '") repeat');
    }
});