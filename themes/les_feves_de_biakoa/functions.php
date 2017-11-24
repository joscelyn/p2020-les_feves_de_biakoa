<?php

    /**
     * function
     * @private
     * @version     0.5.1
     * @property    undefined
     * @package     WordPress
     * @subpackage  firstPixel
     * @since       0.1
     */

    define( 'THEME_PATH' ,          get_template_directory()            );
    define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

    define( 'THEME_URL' ,           get_template_directory_uri()        );
    define( 'THEME_STYLE' ,         THEME_URL .    '/dist/css'          );
    define( 'IMAGES_URL' ,          THEME_URL .    '/dist/images'       );
    define( 'JS_URL' ,              THEME_URL .    '/dist/js'      );
    define( 'FAVICONS_URL' ,        THEME_URL .    '/dist/favicon'      );
    define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


    // LOADING CORE FILES
    foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
        include_once $file;
    }

    // SUPPORT THUMBNAILS
	add_theme_support('post-thumbnails');

