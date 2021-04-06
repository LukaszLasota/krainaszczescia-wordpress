<?php

function showRecruitment($args = NULL){

if(get_current_blog_id() == 2){
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

?>

      