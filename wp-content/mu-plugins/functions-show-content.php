<?php

function showPayment($offer = NULL, $offerTwo = NULL, $offerThree = NULL){

    $offer = array(
        'oferujemy opiekę dzienną (maksimum 10 godzin dziennie Art. 12 pkt. 2 Ustawa z dnia 4 lutego 2011 r. o opiece nad dziećmi w wieku do lat 3)', 
        'w szczególnie uzasadnionych przypadkach na wniosek rodzica za zgodą dyrekcji, wymiar opieki może być wydłużony za dodatkową opłatą', 'prowadzone są zajęcia dodatkowe takie jak:' 
    );

    $offerTwo = array(
        'oferujemy liczne atrakcje i wycieczki fakultatywne, wycieczki do kin i teatru, audycje muzyczne, warsztaty tematyczne',
        'opiekę logopedy, neurologopedy i zajęcia terapeutyczne',
        'konsultacje ze specjalistami pracującymi w „Krainie Szczęścia” w zakresie wychowania, edukacji i pomocy psychologiczno – pedagogicznej jak: pedagog, oligofrenopedagog, terapeuta autyzmu, logopeda, neurologopeda, psycholog',
    );

    $offerThree = array(
        'oferujemy liczne atrakcje, teatrzyki, audycje muzyczne, warsztaty tematyczne',
        'proponujemy konsultacje ze specjalistami pracującymi w „Krainie Szczęścia” w zakresie wychowania, edukacji i pomocy psychologiczno – pedagogicznej jak: pedagog, oligofrenopedagog, terapeuta autyzmu, logopeda, neurologopeda, psycholog',
    );

    ?>
<section class="payment"  style="background-image: url(<?php echo get_theme_file_uri('/images/oplaty/1.png'); ?>);">
    <div class="payment-position">
    
    <div class="payment-space"></div>
    
    <div class="payment-one" id="three">
        <h2 class='main-h2' title="Informacje o nas - Przedszkole Kraina Szcześcia">
            <img src="<?php echo get_theme_file_uri('/images/oplaty/2.png'); ?>" alt="Informacje o nas - Przedszkole Kraina Szcześcia">
        </h2>

        <?php 
        if(get_bloginfo( 'name' ) == 'przedszkole'){
            ?>
       <div class="payment-h4">
            <span>
                <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
            </span>
            <h4><?php echo $offer[2] ?></h4> 
        </div>
        <div class="payment-ul">
            <ul>
                <li>język angielski </li>
                <li>rytmika </li>
                <li>gimnastyka ogólnorozwojowa  i korekcyjne</li>
                <li>zajęcia logopedyczne </li>
                <li>taniec nowoczesny</li>
            </ul>
            <ul>
                <li>taniec towarzyski</li>
                <li>dogoterapia</li>
                <li>alpakoterapia</li>
                <li>trening umiejętności społecznych</li>
                <li>zajęcia kulinarne </li>
            </ul>
        </div>

        <?php foreach($offerTwo as $item) {?>
        <div class="payment-h4">
            <span>
                <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
            </span>
            <h4><?php echo $item ?></h4> 
        </div>

        <?php } 
        } else { 
            
        foreach($offer as $item) {?>
        <div class="payment-h4">
            <span>
                <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
            </span>
            <h4><?php echo $item ?></h4> 
        </div>
        <?php }?>
        <div class="payment-ul">
            <ul>
                <li>język angielski </li>
                <li>rytmika </li>
                <li>zajęcia umuzykalniające</li>
                <li>zajęcia logopedyczne i opiekę logopedy </li>
                <li>zajęcia i gimnastyka ogólnorozwojowa  </li>
            </ul>
            <ul>
                <li>taniec</li>
                <li>zajęcia z sensoryki </li>
                <li>zajęcia plastyczne i konstrukcyjne</li>
                <li>dogoterapia</li>
                <li>alpakoterapia </li>
            </ul>
        </div>
        <?php foreach($offerThree as $item) {?>
        <div class="payment-h4">
            <span>
                <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
            </span>
            <h4><?php echo $item ?></h4> 
        </div>
        <?php }} ?>            
    </div>

    <div class="payment-space"></div>

    <div class="payment-two" id="four">
        <h2 class='main-h2' title="Informacje o nas - Przedszkole Kraina Szcześcia">
            <img src="<?php echo get_theme_file_uri('/images/oplaty/3.png'); ?>" alt="Informacje o nas - Przedszkole Kraina Szcześcia">
        </h2>
        <div class="payment-progressbar">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="payment-two-content">
            
            <div class="payment-two-div">
                <div class="div-header">
                    <h3>Opłata wpisowa</h3>
                    <p>(jednorazowa)</p>
                    <div class="div-header-img">
                        <img class="div-header-img-one" src="<?php echo get_theme_file_uri('/images/oplaty/5.png'); ?>" alt="">
                        <img class="div-header-img-two" src="<?php echo get_theme_file_uri('/images/oplaty/6.png'); ?>" alt="">
                    </div>
                </div>
                <div class="div-body pt">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>opłata wpisowa za rodzeństwo zapisywane w jednym czasie do Przedszkola lub Żłobka „Kraina Szczęścia” wynosi 100% za pierwsze dziecko i każde kolejne dziecko 50% </p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>opłata wpisowa za drugie i kolejne dziecko wynosi 75%, jeśli rodzeństwo uczęszcza do Przedszkola lub Żłobka „Kraina Szczęścia”</p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="" alt="">
                    </span>
                    <p class="bold">Opłata wpisowa w całości przeznaczana jest na:</p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>roczne ubezpieczenie dziecka - NNW</p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>zakup „wyprawki”, na którą składają się: pościel dla dziecka, śliniaczek, sztućce, kubek, materiały plastyczne i techniczne</p> 
                </div>
                <div class="div-body pb">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>opłata nie obejmuje podręczników</p> 
                </div>
                
            </div>

            <div class="payment-two-div">
                <div class="div-header">
                    <h3 class="h3-padding" >Opłata miesięczna</h3>
                    <div class="div-header-img">
                        <img class="div-header-img-one" src="<?php echo get_theme_file_uri('/images/oplaty/7.png'); ?>" alt="">
                        <img class="div-header-img-two" src="<?php echo get_theme_file_uri('/images/oplaty/8.png'); ?>" alt="">
                    </div>
                </div>
                <div class="div-body pt">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>opłata miesięczna nie dotyczy dzieci z orzeczeniem o potrzebie kształcenia specjalnego </p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>czesne za drugie i kolejne dziecko pomniejszane jest o kwotę 150 zł (nie dotyczy dzieci z orzeczeniem)</p> 
                </div>
                
            </div>

            <div class="payment-two-div">
                <div class="div-header">
                    <h3>Opłata żywieniowa</h3>
                    <p>(5 posiłków dziennie)</p>
                    <div class="div-header-img">
                        <img class="div-header-img-one" src="<?php echo get_theme_file_uri('/images/oplaty/9.png'); ?>" alt="">
                    </div>
                </div>
                <div class="div-body pt">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>istnieje możliwość korzystania z diety indywidualnej</p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p class="paragraf-secend-img">w przypadku zgłoszonej nieobecności dziecka w przedszkolu (zgłoszenie przyjęte do godz. 8.00 w tym samym dniu) nie nalicza się opłaty żywieniowej za dni w których zostało zgłoszone</p> 
                    <span class="paragraf-second-span">
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/10.png'); ?>" alt="">
                    </span>
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>opłata nie zostanie naliczona jeżeli rodzic/opiekun prawny powiadomi opiekuna grupy dzień przed planowaną nieobecnością do godziny 18.30</p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/oplaty/4.png'); ?>" alt="">
                    </span>
                    <p>w przypadku wysłania wiadomości SMS w dniu nieobecności dziecka do godziny 8.00 na nr telefonu grupy przypisanej dziecku </p> 
                </div>
                <div class="div-body">
                    <span>
                        <img src="<?php echo get_theme_file_uri('/images/kontakt/4.png'); ?>" alt="">
                    </span>
                    <p>885 755 008 – ZUCHY <br> 885 755 007- STARSZAKI </p>
                </div>
            </div>

        </div>
    </div>

</div>

</section>

<?php }

function showRecruitment($args = NULL){

    // $args

     // if(!$args['title']){
    //     $args['title'] = get_the_title();
    // }
    // if(!$args['subtitle']){
    //     $args['subtitle'] = get_field('page_banner_subtitle');
    // }

    if(get_bloginfo( 'name' ) == 'przedszkole'){
        $args['shortcode'] = do_shortcode('[contact-form-7 id="76" title="Formularz zgłoszeniowy do przedszkola"]');
    }else{
        $args['shortcode'] = do_shortcode('[contact-form-7 id="6" title="Formularz zgłoszeniowy do zlobka"]');
    }
   

?>
<section class="recruitment" id="five">
        <div class="recruitment-position">
            <h2 class='main-h2' title="Rekrutacja - Przedszkole Kraina Szcześcia">
                <img src="<?php echo get_theme_file_uri('/images/rekrutacja/1.png'); ?>" alt="Rekrutacja - Przedszkole Kraina Szcześcia">
            </h2>
           
            <div class="contact-form"><?php echo $args['shortcode']; ?>
            </div>
            <div class="recruitment-image">
                <img src="<?php echo get_theme_file_uri('/images/rekrutacja/2.png'); ?>" alt="">
            </div>
        </div>
</section>

<?php

}



function showContact($args = NULL){


    ?>
        <section class="contact" id="six">
        <h2 class='main-h2' title="Kontakt przedszkole Kraina Szczęścia">
            <img src="<?php echo get_theme_file_uri('/images/kontakt/3.png'); ?>" alt="Kontakt przedszkole Kraina Szcześcia">
        </h2>
    <div class="contact-main">
        
        <div class="contact-one" >
            
            <div class="contact-one-img" >
                <img src="<?php echo get_theme_file_uri('/images/kontakt/2.png'); ?>" alt="">
            </div>
            
            <div class="content">
                
                <div class="content-one">   
                    <div class="content-one-img">
                        <img src="<?php echo get_theme_file_uri('/images/kontakt/4.png'); ?>" alt="">
                    </div>
                    <div class="content-one-text">
                        <p>17/2000660</p>
                        <h4>Żłobek</h4>
                            <p>885 755  006 MALUCHY</p>
                            <p>885 755  004 KRASNALE</p>
                        <h4>przedszkole</h4>
                            <p>885 755  008 ZUCHY</p>
                            <p>885 755  007 STARSZAKI</p>
                        <h4>Dyrektor</h4>
                            <p>Aneta Mikosz 733 733 311 (10.00 - 18.00)</p>
                        <h4>catering</h4>
                            <p>885 755 003 (nie SMS) / 17/ 200 06 60 (nie SMS)</p>
                    </div>  
                </div>
    
                <div class="content-one">
                    <div class="content-one-img">
                        <img src="<?php echo get_theme_file_uri('/images/kontakt/5.png'); ?>" alt="">
                    </div>
                    <div class="content-one-text">
                        <p>kontakt@krainaszczescia.edu.pl</p>
                        <p>biuro@krainaszczescia.edu.pl</p>
                    </div>  
                </div>
    
                <div class="content-one">
                    <div class="content-one-img">
                        <img src="<?php echo get_theme_file_uri('/images/kontakt/6.png'); ?>" alt="">
                    </div>
                    <div class="content-one-text">
                        <p>ul. Ofiar Katynia 6, 35-209 Rzeszów</p>
                    </div>  
                </div>
    
                <div class="content-one">                  
                    <div class="content-one-img">
                        <a href="https://www.facebook.com/krainaszczescia.edu" target="_blank">
                            <img src="<?php echo get_theme_file_uri('/images/kontakt/7.png'); ?>" alt="">
                        </a>                       
                    </div>
                    <div class="content-one-text">
                        <a href="https://www.facebook.com/krainaszczescia.edu" target="_blank">
                            <p>Facebook</p>
                        </a>  
                    </div>  
                </div>
    
            </div>  
    
        </div>
        
    </div>
    </section>
    </main>	
    
    <?php
    
    }




function showFooter($args = NULL){
    
    // if(!$args['title']){
    //     $args['title'] = get_the_title();
    // }
    // if(!$args['subtitle']){
    //     $args['subtitle'] = get_field('page_banner_subtitle');
    // }
    // if(!$args['photo']){
    //     if(get_field('page_banner_image') AND !is_archive() AND !is_home()){
    //         $args['photo'] = get_field('page_banner_image')['sizes']['pageBanner'];
    //     } else{
    //         $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    //     }
    // }

    ?>

    <!-- <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle'] ?></p>
      </div>
    </div>  
  </div> -->



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
                <p><a href="#">rekrutacja</a></p>
                <p><a href="#">dla rodzica</a></p>
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
                <a href="#one">
                    <img src="<?php echo get_theme_file_uri('/images/2.png'); ?>" alt="">
                </a>
            </div>
    
    </footer>








    <?php 
}















?>