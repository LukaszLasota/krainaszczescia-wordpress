<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php echo get_theme_file_uri('/images/menu/logo.png'); ?>" type="image/x-icon" />
<?php wp_head(); ?>
</head>
<body id="site-id-<?php echo get_current_blog_id(); ?>" <?php body_class(); ?>>
    
<?php showHeader(); ?>