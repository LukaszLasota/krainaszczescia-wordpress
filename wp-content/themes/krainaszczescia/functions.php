<?php
function main_site_files(){  
    if(strstr($_SERVER['SERVER_NAME'], 'krainaszczescia.local')){
        wp_enqueue_script('main-site-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        // wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
        wp_enqueue_script('main-site-js', get_theme_file_uri('/bundled-assets/scripts.9d4b869636b27bffefc8.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.9d4b869636b27bffefc8.css'));
    }
    
}

add_action('wp_enqueue_scripts', 'main_site_files');

