<?php 

// require get_theme_file_path('/includes/search-route.php');
// require get_theme_file_path('/includes/like-route.php');

function kindergarten_files(){
       
    // wp_enqueue_script( 'main-przedszkole-js', get_theme_file_uri( '/js/scripts-noWebpack.js' ), array('jquery'), '1.0', true); // dodanie pliku js, nazwa, link, zaleznosć, wersja, czy ma byc w footer czy nie (moze byc w head) dodano array(jquery) poprzedni skrypt script-bundle.js
    
    // wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
   

    if(strstr($_SERVER['SERVER_NAME'], 'przedszkole.krainaszczescia.local')){
        wp_enqueue_script('main-kindergarten-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/vendors~scripts.751709b6b29eb3320280.js'), NULL, '1.0', true);
        wp_enqueue_script('main-kindergarten-js', get_theme_file_uri('/bundled-assets/scripts.f59673653897901230d7.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.f59673653897901230d7.css'));
    // wp_enqueue_style('university_main_styles', get_stylesheet_uri('/bundled-assets/style.css'));
    }

    // wp_enqueue_script('main-przedszkole-js', get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
    // wp_enqueue_style('our-main-styles', get_theme_file_uri('/css/style.css'));
    
    wp_localize_script('main-kindergarten-js', 'kindergartenData', array(
        'root_url'=> get_site_url(),
        'nonce'=> wp_create_nonce('wp_rest'),
    ));


}

add_action('wp_enqueue_scripts', 'kindergarten_files');


function kindergarten_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');//dodanie wybranych obrazów w poście
    // add_image_size('professorLandscape', 400, 260, true);//dodanie nowego rozmairu do obrazów
    // add_image_size('professorPortrait', 480, 650, true);
    // add_image_size('pageBanner', 1500, 350, true);
}

add_action( 'after_setup_theme', 'kindergarten_features');


function kindergarten_post_types(){
    //Nasze-atuty typ postu, Po każdym dodaniu nowego rodzaju postu trzeba odświeżyć permalinki
    register_post_type('Nasze-atuty', array(
        'supports' => array('title'),  
        'show_in_rest' => true,
        'has_archive' => true,
        'public'=> true,
        'labels' => array(
            'name'=> 'Nasze atuty przedszkole',
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
            'name'=> 'Kariera przedszkole',
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

//     //Program post type Po każdym dodaniu nowego rodzaju postu trzeba odświeżyć permalinki
//     register_post_type('program', array(
//         'show_in_rest' => true,
//         'supports' => array('title'),
//         'rewrite' => array('slug'=> 'programs'),
//         'has_archive' => true,
//         'public'=> true,
//         'labels' => array(
//             'name'=> 'Programs',
//             'add_new_item' => 'Add new ',
//             'edit_item' => 'Edit Program',
//             'all_items' => 'All Programs',
//             'singular_name' => 'Program',
//         ),
//         'menu_icon' => 'dashicons-awards',
//     ));

//     // Professor Post Type
//   register_post_type('professor', array(
//     'show_in_rest' => true,
//     'supports' => array('title', 'editor', 'thumbnail'),
//     'public' => true,
//     'labels' => array(
//       'name' => 'Professors',
//       'add_new_item' => 'Add New Professor',
//       'edit_item' => 'Edit Professor',
//       'all_items' => 'All Professors',
//       'singular_name' => 'Professor'
//     ),
//     'menu_icon' => 'dashicons-welcome-learn-more'
//   ));

//   //Campus post type Po każdym dodaniu nowego rodzaju postu trzeba odświeżyć permalinki
//   register_post_type('campus', array(
//     'capability_type'=>'campus',
//     'map_meta_cap' => true,
//     'show_in_rest' => true,
//     'supports' => array('title', 'editor', 'excerpt'),
//     'rewrite' => array('slug'=> 'campuses'),
//     'has_archive' => true,
//     'public'=> true,
//     'labels' => array(
//         'name'=> 'Campuses',
//         'add_new_item' => 'Add New Campus',
//         'edit_item' => 'Edit Campus',
//         'all_items' => 'All campuses',
//         'singular_name' => 'Campus',
//     ),
//     'menu_icon' => 'dashicons-location-alt',
// ));

// //note post type
// register_post_type('note', array(
//   'capability_type'=> 'note',
//   'map_meta_cap'=> true,
//   'show_in_rest' => true,
//   'supports' => array('title', 'editor'),
//   'public' => false,
//   'show_ui'=> true,
//   'labels' => array(
//     'name' => 'Notes',
//     'add_new_item' => 'Add New note',
//     'edit_item' => 'Edit note',
//     'all_items' => 'All notes',
//     'singular_name' => 'note'
//   ),
//   'menu_icon' => 'dashicons-welcome-write-blog'
// ));
  
// //Like post type
// register_post_type('like', array(
//   'supports' => array('title'),
//   'public' => false,
//   'show_ui'=> true,
//   'labels' => array(
//     'name' => 'Likes',
//     'add_new_item' => 'Add New Like',
//     'edit_item' => 'Edit Like',
//     'all_items' => 'All Likes',
//     'singular_name' => 'Like'
//   ),
//   'menu_icon' => 'dashicons-heart'
// ));
  
};

add_action('init', 'kindergarten_post_types');

