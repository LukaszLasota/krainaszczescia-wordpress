<?php
get_header();
?>
<main>
    <section class="about" >
        <div class="about-position" id="two" >
      
        <div class="about-content" style="background-image: url(<?php echo get_theme_file_uri('/images/o-nas/2.png'); ?>);">
            <h2 class='main-h2' title="Informacje o nas - Przedszkole Kraina Szcześcia">
                <img src="<?php echo get_theme_file_uri('/images/o-nas/1.png'); ?>" alt="Informacje o nas - Przedszkole Kraina Szcześcia">
            </h2>
            <div class="about-text">
            <div class="about-image-div"></div>
                <p>Przedszkole „Kraina Szczęścia” jest przyjaznym miejscem dla dzieci i ich rodzin. Działania prowadzone przez zatrudnionych nauczycieli i specjalistów ukierunkowane są na rozbudzanie ciekawości świata, zdobywanie wiedzy i kształtowania nowych umiejętności dzieci niezbędnych do podjęcia nauki w szkole, odkrywania i rozwijania naturalnych talentów a także samodzielności. Rozumiemy przez to wysokie standardy pracy z dziećmi, współpracę z rodzicami, współpracę ze specjalistami również z innych placówek, a także podnoszenie kwalifikacji i rozwój pracowników przedszkola.Głównym założeniem naszej placówki jest wspieranie harmonijnego i wszechstronnego rozwoju każdego dziecka, również ze specjalnymi potrzebami edukacyjnymi, zgodnie z jego możliwościami, zainteresowaniami i wrodzonym potencjałem. Wsparcie to realizujemy w trakcie...</p>
               
            </div>

            <a class="btn">
                <!-- <a href="#" style="background-image: url(<?php echo get_theme_file_uri('/images/o-nas/3.png'); ?>);"></a>  -->
            </a>
            
        </div>
    </section> 
    

<?php
showPayment();
showRecruitment();   
get_footer();
?>