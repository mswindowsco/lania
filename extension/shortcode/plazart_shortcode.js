/*global themeprefix: false, tinymce: false */
// JavaScript Document
(function () {
    "use strict";
    tinymce.create('tinymce.plugins.plazart.shortcode', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init:function (ed, url) {
            // Register command
            ed.addCommand(themeprefix + '_command_column', function () {
                ed.windowManager.open({
                    file:url + '/plazart-shortcode-column.php',
                    width:450 + parseInt(ed.getLang('plazart-shortcode-column.delta_width', 0), 10),
                    height:450 + parseInt(ed.getLang('plazart-shortcode-column.delta_height', 0), 10),
                    inline:1
                });
            });
            ed.addCommand(themeprefix + '_command_list', function () {
                ed.windowManager.open({
                    file:url + '/plazart-shortcode-list.php',
                    width:450 + parseInt(ed.getLang('plazart-shortcode-list.delta_width', 0), 10),
                    height:450 + parseInt(ed.getLang('plazart-shortcode-list.delta_height', 0), 10),
                    inline:1
                });
            });
            ed.addCommand(themeprefix + '_command_accordion', function () {
                ed.windowManager.open({
                    file:url + '/plazart-shortcode-accordion.php',
                    width:450 + parseInt(ed.getLang('plazart-shortcode-accordion.delta_width', 0), 10),
                    height:450 + parseInt(ed.getLang('plazart-shortcode-accordion.delta_height', 0), 10),
                    inline:1
                });
            });
            ed.addCommand(themeprefix + '_command_tabs', function () {
                ed.windowManager.open({
                    file:url + '/plazart-shortcode-tabs.php',
                    width:450 + parseInt(ed.getLang('plazart-shortcode-tabs.delta_width', 0), 10),
                    height:450 + parseInt(ed.getLang('plazart-shortcode-tabs.delta_height', 0), 10),
                    inline:1
                });
            });
            ed.addButton('table', {title:'Add table', image:url + '/images/table.png',
                onclick:function () {
                    ed.focus();
                    ed.selection.setContent('[table][thead][th]title 1[/th][th]title 2[/th][/thead][tbody][tr][td]content[/td][td]content[/td][/tr][tr][td]content[/td][td]content[/td][/tr][/tbody][/table]');
                }
            });
            ed.addButton('skill', {title:'Add skill', image:url + '/images/icon_skills-trans.png',
                onclick:function () {
                    ed.focus();
                    ed.selection.setContent('[skill background="gray or {gray2, white, lime, aqua, yellow, blue, black, fuchsia, gold, green,red}" width="100 or {90, 80, 70, 60, 50, 40, 30, 20, 10}" background_progress="gray or {gray2, white, lime, aqua, yellow, blue, black, fuchsia, gold, green,red}" color="white or {gray, lime, aqua, yellow, blue, black, fuchsia, gold, green, red}" icon="film or{ twitter, css3, facebook-square, search, mobile-phone, star, remove, zoom-in, trash, download }"]Content skill[/skill]');
                }
            });

            ed.addButton('button_one',{title:'Add button one',image:url + '/images/button-white1.png',
                onclick:function(){
                    ed.focus();
                    ed.selection.setContent('[button_one style="default or {none, red, gray, green, blue, yellow, gray2}" icon_name="check or { twitter, css3, facebook-square, search, mobile-phone, star, remove, zoom-in, trash, download }" display_icon="block or none" font_weight="bold or none"]content[/button_one]');
                }
            });
            ed.addButton('button_two',{title:'Add button two',image:url + '/images/button-white2.png',
                onclick:function(){
                    ed.focus();
                    ed.selection.setContent('[button_two style="default or {red, gray, green, blue, yellow, gray2}" icon_name="check or { twitter, css3, facebook-square, search, mobile-phone, star, remove, zoom-in, trash, download }" display_icon="block or none" font_weight="bold or none"]content[/button_two]');
                }
            });
            ed.addButton('alert_one',{title:'Add alert one',image:url + '/images/alert.png',
                onclick:function(){
                    ed.focus();
                    ed.selection.setContent('[alert_one background="1 or 2 or 3"]content[/alert_one]');
                }
            });
            ed.addButton('alert_two',{title:'Add alert two',image:url + '/images/alert2.png',
                onclick:function(){
                    ed.focus();
                    ed.selection.setContent('[alert_two background="1 or 2 or 3" title="title for alert"][alert_content content_alert="content for alert"][button_one style="default" icon_name="check" display_icon="block"]button name[/button_one][button_two style="default" icon_name="check" display_icon="none"]Button name[/button_two][/alert_content][/alert_two]');
                }
            });
            ed.addButton('pringcing',{title:'Add pringcing',image:url + '/images/price_money.png',
                onclick:function(){
                    ed.focus();
                    ed.selection.setContent('[pringcing title="pringcing" style_border="1 or 2" units="$" price="19"][pring_content]this is content[/pring_content][/pringcing]');
                }
            });

            /*
             ==========
             end js add button
             ==========
             */
            ed.addButton('column', {title:'Add Column', cmd:themeprefix + '_command_column', image:url + '/images/column.png' });
            ed.addButton('list', {title:'Add List', cmd:themeprefix + '_command_list', image:url + '/images/list.png' });
            ed.addButton('accordion', {title:'Add Accordion', cmd:themeprefix + '_command_accordion', image:url + '/images/accordion.png' });
            ed.addButton('tabs', {title:'Add Tabs', cmd:themeprefix + '_command_tabs', image:url + '/images/tab.png' });


        },
        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        /*
         createControl:function (n, cm) {
         return null;
         },
         */
        createControl:function () {
            return null;
        },

        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo:function () {
            return {
                longname:'Plazart TinyMCE Shortcode',
                author:'Plazart',
                authorurl:'http://templaza.com',
                infourl:'http://templaza.com',
                version:tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('divider', tinymce.plugins.plazart.shortcode);
})();