<?php function showMainMenu($args = NULL){ 
    
    if(get_current_blog_id() == 2){
        $args['alt'] = 'Strona główna Przedszkola Kraina Szczęścia';
        $args['title'] = 'Przedszkole Kraina Szczęścia';
    }else{
        $args['alt'] = 'Strona główna Żłobek Kraina Szczęścia';
        $args['title'] = 'Złobek Kraina Szczęścia';
    }
    
?>

<div class="nav-bg" style="background-image: url(<?php echo get_theme_file_uri('/images/menu/2.png'); ?>);"> </div>

      <nav class="main-nav">
        <div class="main-nav-links">
          <div class="main-nav-back">
              <a href="http://new.krainaszczescia.edu.pl/">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri('/images/3.png'); ?>" media="(max-width: 1024px)">
                  <img src="<?php echo get_theme_file_uri('/images/menu/1.png'); ?>" alt="">
                </picture>
              </a>
            </div>

            <h1 class="logo" title="<?php echo $args['title']; ?>">
              <a href="/">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri('/images/menu/logo.png'); ?>" media="(max-width: 1024px)">
                  <img src="<?php echo get_theme_file_uri('/images/menu/logo-white.png'); ?>" alt="<?php echo $args['alt']; ?>">
                </picture>
              </a>
            </h1>
        </div>
      

        
        
        <div class="navigation">
            <ul class="navigation-list">
                <li class="navigation-item"><a href="#two">O nas</a></li>
                <li class="navigation-item"><a href="https://www.facebook.com/krainaszczescia.edu" target="_blank">aktualności</a></li>
                <li class="navigation-item"><a href="#three">oferta</a></li>
                <li class="navigation-item"><a href="#four">opłaty</a></li>
                <li class="navigation-item"><a href="#five">rekrutacja</a></li>
                <li class="navigation-item"><a href="<?php echo site_url( '/dla-rodzica'); ?>">dla rodzica</a></li>
                <li class="navigation-item"><a href="<?php echo get_post_type_archive_link('kariera'); ?>">kariera</a></li></li>
                <li class="navigation-item"><a href="#six">kontakt</a></li>
            </ul>
         </div>
          <div class="menu-login">

              <?php if(is_user_logged_in()) { ?>

              <div class="login-btn">
                  <a href="<?php echo wp_logout_url();  ?>">
                    <img src="<?php echo get_theme_file_uri('/images/menu/5.png'); ?>" alt="">
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
                    <picture>
                      <source srcset="<?php echo get_theme_file_uri('/images/menu/8.png'); ?>" media="(max-width: 1024px)">
                      <img src="<?php echo get_theme_file_uri('/images/menu/6.png'); ?>" alt="">
                    </picture>
                  </a>
                </div>
                <div class="login-avatar">
                  <a href="<?php echo wp_login_url();  ?>">
                    <picture>
                      <source srcset="<?php echo get_theme_file_uri('/images/menu/4.png'); ?>" media="(max-width: 1024px)">
                      <img src="<?php echo get_theme_file_uri('/images/menu/3.png'); ?>" alt="">
                    </picture>
                  </a>
                </div>

              <?php } ?> 

            </div>

         
          
            
        </div>
        <button class="hamburger" aria-expanded="false">
            <span class="sr-only">Otwórz/zamknij menu</span>
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
      </nav>

<?php }