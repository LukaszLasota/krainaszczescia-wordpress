<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header class="header" >
  
      <div class="nav-bg" style="background-image: url(<?php echo get_theme_file_uri('/images/menu/2.png'); ?>);"> </div>

      <nav class="main-nav">
        <div class="main-nav-links">
          <div class="main-nav-back">
              <a href="#">
                <img src="<?php echo get_theme_file_uri('/images/menu/1.png'); ?>" alt="">
              </a>
            </div>

            <h1 class="logo" title="Przedszkole Kraina Szczęścia">
              <a href="/">
                <img src="<?php echo get_theme_file_uri('/images/menu/logo-white.png'); ?>" alt="Strona główna Przedszkola Kraina Szczęścia">
              </a>
            </h1>
        </div>
      

        <button class="hamburger" aria-expanded="false">
            <span class="sr-only">Otwórz/zamknij menu</span>
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        
        <div class="navigation">
            <ul class="navigation-list">
                <li class="navigation-item"><a href="#two">O nas</a></li>
                <li class="navigation-item"><a href="#">aktualności</a></li>
                <li class="navigation-item"><a href="#">oferta</a></li>
                <li class="navigation-item"><a href="#">opłaty</a></li>
                <li class="navigation-item"><a href="#">rekrutacja</a></li>
                <li class="navigation-item"><a href="#">dla rodzica</a></li>
                <li class="navigation-item"><a href="#">kariera</a></li>
                <li class="navigation-item"><a href="#">kontakt</a></li>
            </ul>
          </div>
          <div class="menu-login">

          <?php if(is_user_logged_in()) { ?>

              <div class="login-btn">
                  <a href="<?php echo wp_logout_url();  ?>">
                    <img src="<?php echo get_theme_file_uri('/images/menu/6.png'); ?>" alt="">
                  </a>
                </div>
                <div class="login-avatar">
                  <a href="<?php echo wp_login_url();  ?>">
                    <img src="<?php echo get_theme_file_uri('/images/menu/4.png'); ?>" alt="">
                  </a>
                </div>

              <?php } else { ?>
                 
                <div class="login-btn">
                  <a href="<?php echo wp_login_url();  ?>">
                    <img src="<?php echo get_theme_file_uri('/images/menu/5.png'); ?>" alt="">
                  </a>
                </div>
                <div class="login-avatar">
                  <a href="<?php echo wp_login_url();  ?>">
                    <img src="<?php echo get_theme_file_uri('/images/menu/3.png'); ?>" alt="">
                  </a>
                </div>

              <?php } ?> 

              </div>

          </div>
            
        </div>
        
      </nav>
      
      <div class="header-img">
        <img src="<?php echo get_theme_file_uri('/images/header/1.png'); ?>" alt="">
      </div>
    </header>
