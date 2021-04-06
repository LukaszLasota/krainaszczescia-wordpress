<?php function showAboutAsPage($args = NULL){

if(get_current_blog_id() == 2){
    $args['alt'] = 'Informacje o nas - Przedszkole Kraina Szcześcia';
}else{
    $args['alt'] = 'Informacje o nas - Żłobek Kraina Szcześcia';
}

?>
<main>
    <section class="about-us-wrapper">
        <div class="about-us-wrapper-one">
            <h2 class='main-h2' title="<?php echo $args['alt']; ?>">
                    <img src="<?php echo get_theme_file_uri('/images/o-nas/1.png'); ?>" alt="<?php echo $args['alt']; ?>">
            </h2>
            <p><?php the_content(); ?></p>
        </div>
        
        <div class="about-us-wrapper-two" style="background-image: url(<?php echo get_theme_file_uri('/images/o-nas/2.1.png'); ?>);">
            <h2 class='main-h2 main-h2-two' title="<?php echo $args['alt']; ?>">
                    <img src="<?php echo get_theme_file_uri('/images/o-nas/6.png'); ?>" alt="<?php echo $args['alt']; ?>">
            </h2>
            
            <?php 
                $ourStrenghts = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'nasze-atuty',
                'order' => 'ASC',
                ));
                while($ourStrenghts->have_posts()){
                    $ourStrenghts->the_post(); ?>

                    <div class="about-us-list about-us-list-width">
                        <div class="about-us-list-img">
                            <img src="<?php echo get_theme_file_uri('/images/o-nas/5.png'); ?>" alt="">                          
                         </div>
                        <h4 class="about-us-list-h4"><?php the_title(); ?></h4>
                    </div> 

            <?php } 
            
                $ourStrenghtsTwo = new WP_Query(array(
                'post_type' => 'nasze-atuty',
                'order' => 'ASC',
                'offset' => 6,
                ));
                while($ourStrenghtsTwo->have_posts()){
                    $ourStrenghtsTwo->the_post(); ?>

                    <div class="about-us-list">
                        <div class="about-us-list-img">
                            <img src="<?php echo get_theme_file_uri('/images/o-nas/5.png'); ?>" alt="">                          
                         </div>
                        <h4 class="about-us-list-h4"><?php the_title(); ?></h4>
                    </div> 

            <?php } ?>
        </div>   
      

    </section>
</main>

<?php }