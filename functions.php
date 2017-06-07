<?php

    // vars
    define("THEME_URL", get_stylesheet_directory_uri());
    define("TEMPLATE_PATH", get_stylesheet_directory() .'/');
    define("SITE_URL", site_url());

    @ini_set( 'upload_max_size' , '64M' );
    @ini_set( 'post_max_size', '64M');
    @ini_set( 'max_execution_time', '300' );


    show_admin_bar(false);

    //include php files
    include("incl/general.php");

    include("incl/acf.php");

    include("incl/cpt.php");

    include("incl/helpers.php");
