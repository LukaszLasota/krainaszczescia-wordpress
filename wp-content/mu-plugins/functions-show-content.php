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

<?php } ?>