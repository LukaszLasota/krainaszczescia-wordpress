<?php 

// require get_theme_file_path('/includes/search-route.php');
// require get_theme_file_path('/includes/like-route.php');

function przedszkole_files(){
       
    // wp_enqueue_script( 'main-przedszkole-js', get_theme_file_uri( '/js/scripts-noWebpack.js' ), array('jquery'), '1.0', true); // dodanie pliku js, nazwa, link, zaleznosć, wersja, czy ma byc w footer czy nie (moze byc w head) dodano array(jquery) poprzedni skrypt script-bundle.js
    
    // wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
   

    if(strstr($_SERVER['SERVER_NAME'], 'przedszkole.krainaszczescia.local')){
        wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/vendors~scripts.76c9fb00663a45474373.js'), NULL, '1.0', true);
        wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.f040f32d95821f6aaf09.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.f040f32d95821f6aaf09.css'));
    // wp_enqueue_style('university_main_styles', get_stylesheet_uri('/bundled-assets/style.css'));
    }

    // wp_enqueue_script('main-przedszkole-js', get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
    // wp_enqueue_style('our-main-styles', get_theme_file_uri('/css/style.css'));
    
    wp_localize_script('main-przedszkole-js', 'przedszkoleData', array(
        'root_url'=> get_site_url(),
        'nonce'=> wp_create_nonce('wp_rest'),
    ));


}

add_action('wp_enqueue_scripts', 'przedszkole_files');


// function przedszkole_features(){
//     add_theme_support('title-tag');
//     add_theme_support('post-thumbnails');//dodanie wybranych obrazów w poście
//     add_image_size('professorLandscape', 400, 260, true);//dodanie nowego rozmairu do obrazów
//     add_image_size('professorPortrait', 480, 650, true);
//     add_image_size('pageBanner', 1500, 350, true);
// }

// add_action( 'after_setup_theme', 'przedszkole_features');
