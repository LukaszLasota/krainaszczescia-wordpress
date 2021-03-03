<?php

// function kraina_post_types(){
//     //Event post type Po każdym dodaniu nowego rodzaju postu trzeba odświeżyć permalinki
//     register_post_type('nasze-atuty', array(
//         'supports' => array('title'),  
//         'show_in_rest' => true,
//         'has_archive' => true,
//         'public'=> true,
//         'labels' => array(
//             'name'=> 'Nasze atuty przedszkole',
//             'add_new_item' => 'Dodaj nowy atut',
//             'edit_item' => 'Edytuj atut',
//             'all_items' => 'Wszystkie atuty',
//             'singular_name' => 'Atut',
//         ),
//         'menu_icon' => 'dashicons-heart',
//     ));

// //     //Program post type Po każdym dodaniu nowego rodzaju postu trzeba odświeżyć permalinki
// //     register_post_type('program', array(
// //         'show_in_rest' => true,
// //         'supports' => array('title'),
// //         'rewrite' => array('slug'=> 'programs'),
// //         'has_archive' => true,
// //         'public'=> true,
// //         'labels' => array(
// //             'name'=> 'Programs',
// //             'add_new_item' => 'Add new ',
// //             'edit_item' => 'Edit Program',
// //             'all_items' => 'All Programs',
// //             'singular_name' => 'Program',
// //         ),
// //         'menu_icon' => 'dashicons-awards',
// //     ));

// //     // Professor Post Type
// //   register_post_type('professor', array(
// //     'show_in_rest' => true,
// //     'supports' => array('title', 'editor', 'thumbnail'),
// //     'public' => true,
// //     'labels' => array(
// //       'name' => 'Professors',
// //       'add_new_item' => 'Add New Professor',
// //       'edit_item' => 'Edit Professor',
// //       'all_items' => 'All Professors',
// //       'singular_name' => 'Professor'
// //     ),
// //     'menu_icon' => 'dashicons-welcome-learn-more'
// //   ));

// //   //Campus post type Po każdym dodaniu nowego rodzaju postu trzeba odświeżyć permalinki
// //   register_post_type('campus', array(
// //     'capability_type'=>'campus',
// //     'map_meta_cap' => true,
// //     'show_in_rest' => true,
// //     'supports' => array('title', 'editor', 'excerpt'),
// //     'rewrite' => array('slug'=> 'campuses'),
// //     'has_archive' => true,
// //     'public'=> true,
// //     'labels' => array(
// //         'name'=> 'Campuses',
// //         'add_new_item' => 'Add New Campus',
// //         'edit_item' => 'Edit Campus',
// //         'all_items' => 'All campuses',
// //         'singular_name' => 'Campus',
// //     ),
// //     'menu_icon' => 'dashicons-location-alt',
// // ));

// // //note post type
// // register_post_type('note', array(
// //   'capability_type'=> 'note',
// //   'map_meta_cap'=> true,
// //   'show_in_rest' => true,
// //   'supports' => array('title', 'editor'),
// //   'public' => false,
// //   'show_ui'=> true,
// //   'labels' => array(
// //     'name' => 'Notes',
// //     'add_new_item' => 'Add New note',
// //     'edit_item' => 'Edit note',
// //     'all_items' => 'All notes',
// //     'singular_name' => 'note'
// //   ),
// //   'menu_icon' => 'dashicons-welcome-write-blog'
// // ));
  
// // //Like post type
// // register_post_type('like', array(
// //   'supports' => array('title'),
// //   'public' => false,
// //   'show_ui'=> true,
// //   'labels' => array(
// //     'name' => 'Likes',
// //     'add_new_item' => 'Add New Like',
// //     'edit_item' => 'Edit Like',
// //     'all_items' => 'All Likes',
// //     'singular_name' => 'Like'
// //   ),
// //   'menu_icon' => 'dashicons-heart'
// // ));
  
// };

// add_action('init', 'kraina_post_types');

?>