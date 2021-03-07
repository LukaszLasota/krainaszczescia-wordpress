<?php 
 get_header('new');
 ?>
<main>
<section class="parrents">
    <h2 class='main-h2' title="Dla rodzica - Przedszkole Kraina Szcześcia">
        <img src="<?php echo get_theme_file_uri('/images/rodzice/1.png'); ?>" alt="Dla rodzica - Przedszkole Kraina Szcześcia">
    </h2>
    <p><?php the_content(); ?></p>

    <div class="toggle-main toggle-main-one">
        <a class="toggle toggle-one" href="#example"></a>
    
        <div class="toggle-content toggle-content-one" id="example">
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        </div>

    </div>

    <div class="toggle-main toggle-main-two">
        
        <a class="toggle toggle-two" href="#exampleOne"></a>
        
        <div class="toggle-content" id="exampleOne">
        <?php 
                $gestPDf = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'pdf-goście',
                'meta_key' => 'pdf-goście',
                'order' => 'ASC',
                ));
                while($gestPDf->have_posts()){
                      $gestPDf->the_post(); 

                $file = get_field('pdf-goscie');
                if( $file ): ?>
                    <a class="pdf" href="<?php echo $file['url']; ?>"><?php the_title(); ?></a>
                    <!-- echo $file['filename']; -->
                <?php endif; } ?>
        </div>

    </div>

 

</section>
</main>
<?php 
get_footer();
?>