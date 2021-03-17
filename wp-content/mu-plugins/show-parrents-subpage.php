<?php function showParrentsPage($args = NULL){

if(get_bloginfo( 'name' ) == 'przedszkole'){
    $args['alt'] = 'Dla rodzica - Przedszkole Kraina Szcześcia';
}else{
    $args['alt'] = 'Dla rodzica - Żłobek Kraina Szcześcia';
}

?>
<main>
<section class="parrents">
    <h2 class='main-h2' title="<?php echo $args['alt']; ?>">
        <img src="<?php echo get_theme_file_uri('/images/rodzice/1.png'); ?>" alt="<?php echo $args['alt']; ?>">
    </h2>
    <p><?php the_content(); ?></p>

    <div class="toggle-main toggle-main-one">
        <a class="toggle toggle-one" href="#example"></a>
    
        <div class="toggle-content toggle-content-one" id="example">
        <div class="toggle-body">

        <?php if(is_user_logged_in()) {
                $parrentPDF = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'pdf-rodzice',
                'meta_key' => 'pdf-rodzice',
                'order' => 'ASC',
                ));
                while($parrentPDF->have_posts()){
                      $parrentPDF->the_post(); 

                $fileParrent = get_field('pdf-rodzice');
                $urlParrent = $fileParrent['url'];

                if( $fileParrent): ?>
                    <div class="pdf-body">
                        <a class="pdf-link" href="<?php echo esc_attr($urlParrent); ?>" target="_blank">
                            <div class="pdf-image"></div>
                            <p class="pdf-title"><?php the_title(); ?></p>
                        </a>
                    </div>
                <?php endif; } 
        } else { ?>
            <p>Aby zobaczyś zawartość musisz sie zalogować</p>
        <?php }  ?>  
        </div>
        </div>

    </div>

    <div class="toggle-main toggle-main-two">
        
        <a class="toggle toggle-two" href="#exampleOne"></a>
        
        <div class="toggle-content" id="exampleOne">

        <div class="toggle-body">
            <?php 
                $gestPDf = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'pdf-goscie',
                'meta_key' => 'pdf-goscie',
                'order' => 'ASC',
                ));
                while($gestPDf->have_posts()){
                      $gestPDf->the_post(); 

                $file = get_field('pdf-goscie');
                $url = $file['url'];

                if( $file ): ?>
                    <div class="pdf-body">
                        <a class="pdf-link" href="<?php echo esc_attr($url); ?>" target="_blank">
                            <div class="pdf-image"></div>
                            <p class="pdf-title"><?php the_title(); ?></p>
                        </a>
                    </div>
            <?php endif; } ?>
        </div>
       


        </div>

    </div>

 

</section>
</main>

<?php }