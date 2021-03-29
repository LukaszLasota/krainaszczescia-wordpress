<?php 

function nursery_files(){
       
    if(strstr($_SERVER['SERVER_NAME'], 'krainaszczescia.local')){
        wp_enqueue_script('main-nursery-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/vendors~scripts.346d0a9d878e6cffc9bf.js'), NULL, '1.0', true);
        wp_enqueue_script('main-nursery-js', get_theme_file_uri('/bundled-assets/scripts.d8494c1e983348a73030.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.d8494c1e983348a73030.css'));
    }
    
    wp_localize_script('main-nursery-js', 'nurseryData', array(
        'root_url'=> get_site_url(),
        'nonce'=> wp_create_nonce('wp_rest'),
    ));

}

add_action('wp_enqueue_scripts', 'nursery_files');


function nursery_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');//dodanie wybranych obrazów w poście
}

add_action( 'after_setup_theme', 'nursery_features');


function nursery_post_types(){
    //Nasze-atuty typ postu, Po każdym dodaniu nowego rodzaju postu trzeba odświeżyć permalinki
    register_post_type('banner', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'show_in_rest' => true,
        'has_archive' => true,
        'public'=> true,
        'labels' => array(
            'name'=> 'Banner strona główna',
            'add_new_item' => 'Dodaj nowy banner',
            'edit_item' => 'Edytuj banner',
            'all_items' => 'Wszystkie bannery',
            'singular_name' => 'Banner',
        ),
        'menu_icon' => 'dashicons-format-gallery',
    ));
    
    register_post_type('nasze-atuty', array(
        'supports' => array('title'),  
        'show_in_rest' => true,
        'has_archive' => true,
        'public'=> true,
        'labels' => array(
            'name'=> 'Nasze atuty żłobek',
            'add_new_item' => 'Dodaj nowy atut',
            'edit_item' => 'Edytuj atut',
            'all_items' => 'Wszystkie atuty',
            'singular_name' => 'Atut',
        ),
        'menu_icon' => 'dashicons-heart',
    ));

    register_post_type('kariera', array(
        'supports' => array('title', 'editor', 'thumbnail'),  
        'show_in_rest' => true,
        'has_archive' => true,
        'public'=> true,
        'labels' => array(
            'name'=> 'Kariera żłobek',
            'add_new_item' => 'Dodaj nowe ogłoszenie',
            'edit_item' => 'Edytuj ogłoszenie',
            'all_items' => 'Wszystkie ogłoszenia',
            'singular_name' => 'ogłoszenie',
        ),
        'menu_icon' => 'dashicons-businesswoman',
    ));

    register_post_type('pdf-goscie', array(
        'supports' => array('title'),  
        'show_in_rest' => true,
        'has_archive' => true,
        'public'=> true,
        'labels' => array(
            'name'=> 'PDF dla gości',
            'add_new_item' => 'Dodaj nowy pdf',
            'edit_item' => 'Edytuj pdf',
            'all_items' => 'Wszystkie pdfy',
            'singular_name' => 'pdf',
        ),
        'menu_icon' => 'dashicons-pdf',
    ));
    register_post_type('pdf-rodzice', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui'=> true,//Show in admin dashboard
        'labels' => array(
            'name' => 'PDF dla rodziców',
            'add_new_item' => 'Dodaj nowy pdf',
            'edit_item' => 'Edytuj pdf',
            'all_items' => 'Wszystkie pdfy',
            'singular_name' => 'pdf',
        ),
        'menu_icon' => 'dashicons-pdf'
    ));
  
};

add_action('init', 'nursery_post_types');


//Redirecy subscriber acount out of admin to homepage

add_action('admin_init', 'redirectSubsToFrontEnd');

function redirectSubsToFrontEnd(){

    $ourCurrenyUser = wp_get_current_user();

    if(count($ourCurrenyUser->roles) == 1 AND $ourCurrenyUser->roles[0] == 'subscriber'){
        wp_redirect( site_url('/dla-rodzica'));
        exit;
    }
}

add_action('wp_loaded', 'nowSubsAdminBar');

function nowSubsAdminBar(){

    $ourCurrenyUser = wp_get_current_user();

    if(count($ourCurrenyUser->roles) == 1 AND $ourCurrenyUser->roles[0] == 'subscriber'){
        show_admin_bar(false);
    }
}

//custom login screen

add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl(){
    return esc_url(site_url('/'));
}

// add_action('login_enqueue_scripts', 'ourLoginCSS' );

// function ourLoginCSS(){
//     wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.d8494c1e983348a73030.css'));
//     wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
// }

add_filter('login_headertitle', 'ourLoginTitle');

function ourLoginTitle(){
    return get_bloginfo('name');
}