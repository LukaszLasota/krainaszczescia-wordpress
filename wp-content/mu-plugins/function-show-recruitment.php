<?php

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
    $args['shortcode'] = do_shortcode('[contact-form-7 id="7" title="zlobek"]');
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