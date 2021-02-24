<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      
      <nav class="main-nav">
        
        <h1 class="logo" title="Przedszkole Kraina Szczęścia">
          <a href="/">
            <img src="<?php echo get_theme_file_uri('/images/menu/logo-white.png'); ?>" alt="Strona główna Przedszkola Kraina Szczęścia">
          </a>
        </h1>

        <button class="hamburger" aria-expanded="false">
            <span class="sr-only">Otwórz/zamknij menu</span>
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        
        <div class="navigation">
            <ul class="navigation-list">
                <li class="navigation-item"><a href="#">O nas</a></li>
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

              <a href="<?php echo esc_url(site_url('/my-notes')); ?>" class="btn btn--small btn--orange float-left push-right">My notes</a>

              <a href="<?php echo wp_logout_url();  ?>" class="btn btn--small  btn--dark-orange float-left btn--with-photo">
              <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
              <span class="btn__text">Log Out</span>
              </a>

              <?php } else { ?>

                <a href="<?php echo wp_login_url();  ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>

              <?php } ?>

              </div>

          </div>
            
        </div>
        
      </nav>

      
      <div class="header-img">
        <img src="<?php echo get_theme_file_uri('/images/header/1.png'); ?>" alt="">
      </div>
    </header>
