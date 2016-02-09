<?php

    /**
     *	Page_editor plugin
     *
     *	@package Monstra
     *  @subpackage Plugins
     *	@author Moncho Varela / Nakome
     *	@copyright 2012 Moncho Varela / Nakome
     *	@version 1.0.0
     *
     */


    // Register plugin
    Plugin::register( __FILE__,                    
                    __('Page Editor', 'page_editor'),
                    __('Page Editor for Monstra CMS', 'page_editor'),  
                    '1.0a',
                    '@MonstraHost',                 
                    'http://page-editor.monstrahost.com/',
                    null);


    // Add hooks  
    Action::add('admin_header', 'Page_editor::headers');


    class Page_editor {
                

        /**
         * Set editor headers
         */
        public static function headers() {
            echo ('

                <script type="text/javascript" src="'.Option::get('siteurl').'/plugins/page_editor/assets/wysihtml5-0.3.0.min.js"></script>
                <script type="text/javascript" src="'.Option::get('siteurl').'/plugins/page_editor/assets/bootstrap-wysihtml5.js"></script>
                <link rel="stylesheet" type="text/css" href="'.Option::get('siteurl').'/plugins/page_editor/assets/bootstrap-wysihtml5.css" />
            ');

            echo ('
                <script type="text/javascript">
                    <!--
                    $(document).ready(function()    {
                        $("#editor_area").wysihtml5({
                            "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                            "emphasis": true, //Italics, bold, etc. Default true
                            "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                            "html": true, //Button which allows you to edit the generated HTML. Default false
                            "link": true, //Button to insert a link. Default true
                            "image": true, //Button to insert an image. Default true,
                            "color": false, //Button to change color of font 
                        });                    
                    });
                    -->
                </script>
            ');
        }
        public static function Colors(){
            echo (' <link rel="stylesheet"  href="'.Option::get('siteurl').'/plugins/page_editor/assets/wysiwyg-color.css" />');
        }

    }