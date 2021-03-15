<?php
get_header();
?>
<main>

<?php
    $blogName = get_bloginfo( 'name' );
?>
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

        ?>
          
        <!-- <div class="center">
            <div class="recruitment-form-one">
                <h3 class="recruitment-form-h3">Dane rodziców / opiekunów prawnych </h3>
                <div class="recruitment-form-one-column">
                    
                    <label > Imię i nazwisko matki/opiekuna prawnego [text text-687]</label>

                    <label> Data urodzenia [text text-688]</label>
                    
                    <label> Numer Telefonu [text text-692]</label>

                    <label> Numer telefonu do pracy: [text text-689]</label>

                    <label> adres e-mail: [email email-607]</label>

                </div>
                <div class="recruitment-form-one-column">

                    <label > Imię i nazwisko ojca/opiekuna prawnego [text text-693]</label>

                    <label > Data urodzenia: [text text-694]</label>

                    <label > Numer Telefonu [text text-695]</label>

                    <label > Numer telefonu do pracy [text text-696]</label>

                    <label > adres e-mail: [email email-608]</label>

                </div>
                
            </div>
            <div class="recruitment-form-two">
                <h3 class="recruitment-form-h3">Dane dziecka</h3>
                <label> Imię i nazwisko<span style="color: red">*</span>: [text* text-682] </label>

                <label> Numer PESEL<span style="color: red">*</span>: [text* text-684]</label>
                
                <label> Data urodzenia <span style="color: red">*</span>: [date* date-280] </label>
                
                <label> Miejsce urodzenia <span style="color: red">*</span>: [text* text-683] </label>
                
                <label> Adres zameldowania <span style="color: red">*</span>: [text* text-686]</label>
                
                <label> Adres zamieszkania <span style="color: red">*</span>: [text* text-685]</label>
                
                <label> Adres e-mail osoby zgłaszającej <span style="color: red">*</span>:[email* email-606]</label>
            </div>
        </div> -->
        
            <!-- <img src="<?php echo get_theme_file_uri('/images/rekrutacja/2.png'); ?>" alt=""> -->

    <!-- </section> -->
        
        <!-- <div class="btn-area">
            
        </div> -->
   
<?php
get_footer();
?>