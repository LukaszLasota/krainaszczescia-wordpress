<?php 
 get_header('new');
 ?>
<main>

<section class="career">
    <h2 class='main-h2' title="Kariera - Przedszkole Kraina Szcześcia">
        <img src="<?php echo get_theme_file_uri('/images/kariera/1.png'); ?>" alt="Kariera - Przedszkole Kraina Szcześcia">
    </h2>
    <?php
      while(have_posts()){
        the_post(); ?>
        <div class="career-post-header">
            <h3><?php the_title(); ?></h3>
            <img src="<?php echo get_theme_file_uri('/images/kariera/2.png'); ?>" alt="">
        </div>
        <p><?php the_content(); ?></p>
     <?php } ?>

</section>
</main>
<?php 
get_footer();
?>