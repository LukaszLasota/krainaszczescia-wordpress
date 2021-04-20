<?php function showArchiveCareerPage($args = NULL){

if(get_current_blog_id() == 2){
    $args['alt'] = 'Kariera - Przedszkole Kraina Szcześcia';
}else{
    $args['alt'] = 'Kariera - Żłobek Kraina Szcześcia';
}

?>
<main>

<section class="career">
    <h2 class='main-h2' title="<?php echo $args['alt']; ?>">
        <img src="<?php echo get_theme_file_uri('/images/kariera/1.png'); ?>" alt="<?php echo $args['alt']; ?>">
    </h2>
    <?php
      if(get_post_type() == 'kariera'){
        while(have_posts()){
            the_post(); ?>
            <div class="career-post-header">
                <h3><?php the_title(); ?></h3>
                <img src="<?php echo get_theme_file_uri('/images/kariera/2.png'); ?>" alt="">
            </div>
            <?php the_content(); ?>
    
         <?php } 
        }else{ ?>
            <div class="career-no-recrutation">
                <h3>Nie prowadzimy aktulanie rekrutacji, zapraszamy do śledzenia naszej strony.</h3>
            </div>
        <?php } ?>
     

</section>
</main>

<?php }