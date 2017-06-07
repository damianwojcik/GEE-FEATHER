<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'	=> 'Nawigacja',
        'menu_title'	=> 'Nawigacja',
        'menu_slug'		=> 'page-options',
        'capability'	=> 'edit_posts',
        'parent_slug'	=> '',
        'icon_url'		=> 'dashicons-menu',
        'redirect'		=> true
    ));

}

?>