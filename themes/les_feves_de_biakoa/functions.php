<?php

    define( 'THEME_PATH' ,          get_template_directory()            );
    define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

    define( 'THEME_URL' ,           get_template_directory_uri()        );
    define( 'THEME_STYLE' ,         THEME_URL .    '/style.css'          );
    define( 'IMAGES_URL' ,          THEME_URL .    '/dist/images'       );
    define( 'JS_URL' ,              THEME_URL .    '/dist/js'      );
    define( 'FAVICONS_URL' ,        THEME_URL .    '/dist/favicon'      );
    define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );
    define( 'THEME_NAME',           'biakoa' );


    // LOADING CORE FILES
    foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
        include_once $file;
    }


