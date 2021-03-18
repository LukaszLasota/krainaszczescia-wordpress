<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>

  </head>
  <body id="site-id-<?php echo get_current_blog_id(); ?>" <?php body_class(); ?>>
    
<?php showHeader(); ?>