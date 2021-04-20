<?php

function showTuition($offer = NULL, $offerTwo = NULL, $offerThree = NULL){

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
<!-- <div class="shape" data-name="triangle1" data-type="linear">
  <div class="preview">
    <div class="graph"></div>
  </div> -->

<div class="payment-one" id="three">
        <h2 class='main-h2' title="Informacje o nas - Przedszkole Kraina Szcześcia">
            <img src="<?php echo get_theme_file_uri('/images/oplaty/2.png'); ?>" alt="Informacje o nas - Przedszkole Kraina Szcześcia">
        </h2>

        <?php 
        if(get_current_blog_id() == 2){
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

<?php } ?>