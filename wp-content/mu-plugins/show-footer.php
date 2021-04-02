<?php function showFooter($args = NULL){ ?>

<footer class="footer">

    <div class="footer-img">       
        <img src="<?php echo get_theme_file_uri('/images/kontakt/1.png'); ?>" alt="">  
    </div>

<div class="site-footer">
    
    <div class="footer-one">
        <div class="footer-one-img-top">
            <img class="top-first"  src="<?php echo get_theme_file_uri('/images/menu/logo-white.png'); ?>" alt="">
        </div>
        <div class="footer-one-text">
            <p><a href="/">Dom</a></p>
            <p><a href="#two">o nas</a></p>
            <p><a href="https://www.facebook.com/krainaszczescia.edu" target="_blank">aktualności</a></p>
            <p><a href="#three">oferta</a></p>
            <p><a href="#four">opłaty</a></p>
            <p><a href="#five">rekrutacja</a></p>
            <p><a href="<?php echo site_url( '/dla-rodzica'); ?>">dla rodzica</a></p>
            <p><a href="<?php echo get_post_type_archive_link('kariera'); ?>">kariera</a></p>
            <p><a href="#five">kontakt</a></p>
            <p class="footer-empty"></p>
            <p class="footer-empty"></p>
        </div>
        <div class="footer-one-img">
            <a href="https://www.facebook.com/krainaszczescia.edu" target="_blank">
                <img src="<?php echo get_theme_file_uri('/images/kontakt/8.png'); ?>" alt="">
            </a>
        </div>
    </div>

    <div class="footer-one">
    
        <div class="footer-one-img-top">
            <img src="<?php echo get_theme_file_uri('/images/kontakt/9.png'); ?>" alt="">
        </div>

        <div class="footer-one-text text-two">
        <p class="footer-one-left"></p>
        <p>17/2000660</p>
        <p class="footer-one-left">Żłobek</p>
        <p></p>
        <p class="footer-one-left">MALUCHY </p>
        <p>885 755  008</p>
        <p class="footer-one-left"> KRASNALE</p>
        <p> 885 755  007</p>
        <p class="footer-one-left">przedszkole</p>
        <p></p>
        <p class="footer-one-left">ZUCHY </p>
        <p>885 755  008</p>
        <p class="footer-one-left">STARSZAKI </p>
        <p>885 755  007</p>
        <p class="footer-empty"></p>
        <p class="footer-empty"></p>
        <p class="footer-one-left">Aneta Mikosz </p>
        <p>733 733 311 (10.00 - 18.00)</p>
        <p class="footer-empty"></p>
        <p class="footer-empty"></p>
        <p class="footer-one-left">Catering </p>
        <p>885 755 003 (nie SMS)</p>
        <p class="footer-one-left"></p>
        <p>/ 17/ 200 06 60 (nie SMS)</p>

        </div>

    </div>

    <div class="footer-one">
        
        <div class="footer-one-img-top">
            <img  src="<?php echo get_theme_file_uri('/images/kontakt/10.png'); ?>" alt="">
        </div>

        <div class="footer-three-content">
            <p class="footer-three-paragraph">ul. Ofiar Katynia 6, 35-209 Rzeszów</p>
        </div>

        <div class="footer-three-content">
            <p class="footer-empty"></p>
            <div class="footer-three-img">
                <img src="<?php echo get_theme_file_uri('/images/kontakt/11.png'); ?>" alt="">
            </div>
            <p class="footer-empty"></p>
            <p class="footer-three-paragraph">kontakt@krainaszczescia.edu.pl</p>
            <p class="footer-three-paragraph">biuro@krainaszczescia.edu.pl</p>
        </div>
        
        <div class="footer-three-content">
            <div class="footer-three-img">
                <img src="<?php echo get_theme_file_uri('/images/kontakt/12.png'); ?>" alt="">
            </div>
            <p class="footer-empty"></p>
            <p class="footer-three-paragraph">NIP 517-006-27-29</p>
            <p class="footer-three-paragraph">REGON Przedszkole: 365313006</p>
            <p class="footer-three-paragraph">REGON Żłobek 362511929</p>
        </div>

    </div>

</div>
        <div class="arrow-down-img">
            <a href="#site-id-<?php echo get_current_blog_id(); ?>">
                <img src="<?php echo get_theme_file_uri('/images/2.png'); ?>" alt="">
            </a>
        </div>

</footer>

<?php } ?>