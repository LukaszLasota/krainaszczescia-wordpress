<?php 

function nursery_files(){
       
    if(strstr($_SERVER['SERVER_NAME'], 'krainaszczescia.local')){
        wp_enqueue_script('main-nursery-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/vendors~scripts.346d0a9d878e6cffc9bf.js'), NULL, '1.0', true);
        wp_enqueue_script('main-nursery-js', get_theme_file_uri('/bundled-assets/scripts.c72f2d7f59d775a96cee.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.c72f2d7f59d775a96cee.css'));
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
