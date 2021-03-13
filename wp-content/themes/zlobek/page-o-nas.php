<?php 
 get_header('new');
 ?>
<main>
    <section class="about-us-wrapper">
        <div class="about-us-wrapper-one">
            <h2 class='main-h2' title="Informacje o nas - Przedszkole Kraina Szcześcia">
                    <img src="<?php echo get_theme_file_uri('/images/o-nas/1.png'); ?>" alt="Informacje o nas - Przedszkole Kraina Szcześcia">
            </h2>
            <p><?php the_content(); ?></p>
        </div>
        
        <div class="about-us-wrapper-two" style="background-image: url(<?php echo get_theme_file_uri('/images/o-nas/2.png'); ?>);">
            <h2 class='main-h2 main-h2-two' title="Informacje o nas - Przedszkole Kraina Szcześcia">
                    <img src="<?php echo get_theme_file_uri('/images/o-nas/6.png'); ?>" alt="Informacje o nas - Przedszkole Kraina Szcześcia">
            </h2>
            
            <?php 
                $ourStrenghts = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'nasze-atuty',
                'meta_key' => 'nasze_atuty',
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
                // 'posts_per_page' => 7,
                'post_type' => 'nasze-atuty',
                'meta_key' => 'nasze_atuty',
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
<?php 
get_footer();
?>