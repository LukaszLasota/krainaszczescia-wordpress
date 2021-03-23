<?php

function showAbout($args = NULL){

if(get_bloginfo( 'name' ) == 'przedszkole'){
    $args['paragraph'] = 'Przedszkole „Kraina Szczęścia” jest przyjaznym miejscem dla dzieci i ich rodzin. Działania prowadzone przez zatrudnionych nauczycieli i specjalistów ukierunkowane są na rozbudzanie ciekawości świata, zdobywanie wiedzy i kształtowania nowych umiejętności dzieci niezbędnych do podjęcia nauki w szkole, odkrywania i rozwijania naturalnych talentów a także samodzielności. Rozumiemy przez to wysokie standardy pracy z dziećmi, współpracę z rodzicami, współpracę ze specjalistami również z innych placówek, a także podnoszenie kwalifikacji i rozwój pracowników przedszkola.Głównym założeniem naszej placówki jest wspieranie harmonijnego i wszechstronnego rozwoju każdego dziecka, również ze specjalnymi potrzebami edukacyjnymi, zgodnie z jego możliwościami, zainteresowaniami i wrodzonym potencjałem. Wsparcie to realizujemy w trakcie...';
    $args['alt'] = 'Informacje o nas - Przedszkole Kraina Szczęścia';
}else{
    $args['paragraph']  = 'Żłobek „Kraina Szczęścia” jest przyjaznym miejscem dla dzieci i ich zapracowanych rodziców, którzy oddając pod opiekę swoje dziecko zwracają szczególną uwagę na bezpieczeństwo dzieci, zaangażowanie kadry i podejście pełne ciepła, akceptacji i wyrozumiałości. To właśnie gwarantujemy w „Krainie Szczęścia”. 
    Żłobek „Kraina Szczęścia” to placówka, która prowadzi działalność opiekuńczo – wychowawczą dla dzieci od 20 tygodnia życia do ukończenia 3 lat, a w szczególnych sytuacjach dłużej (do 4 r. ż.). 
    Dzięki celowym i planowanym działaniom ukierunkowanym na wszechstronny rozwój dzieci, tworzymy na co dzień warunki do ich harmonijnego rozwoju, wspierając przy tym, stosownie do wieku, samodzielność dzieci i rozbudzając zainteresowanie światem. 
    Personel zatrudniony w Żłobku posiada niezbędne kwalifikacje ';
    $args['alt'] = 'Informacje o nas - Złobek Kraina Szczęścia';
}

?>
<main>
 <section class="about" >
        <div class="about-position" id="two" >
      
        <div class="about-content">
            <h2 class='main-h2' title="<?php echo $args['alt']; ?>">
                <img src="<?php echo get_theme_file_uri('/images/o-nas/1.png'); ?>" alt="<?php echo $args['alt']; ?>">
            </h2>
            <div class="about-text">
            <!-- <div class="about-image-div"></div> -->
                <p><?php echo $args['paragraph']; ?></p>
            </div>
            <div class="about-btn">
                <a href="<?php echo site_url( '/o-nas'); ?>">
                    <img class="about-btn-one" src="<?php echo get_theme_file_uri('/images/o-nas/4.png'); ?>" alt="">
                    <img class="about-btn-two" src="<?php echo get_theme_file_uri('/images/o-nas/3.png'); ?>" alt="">
                </a>
            </div>
            <div class="about-img-mobile">
                <img class="about-btn-one" src="<?php echo get_theme_file_uri('/images/o-nas/2.png'); ?>" alt="">
            </div>
            
        </div>
    </section>

<?php

}