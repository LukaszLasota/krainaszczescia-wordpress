<?php function showHeader($args = NULL) { 

$banner = new WP_Query(array(
  'posts_per_page' => 1,
  'post_type' => 'banner',
  'order' => 'ASC',
  ));

  while($banner->have_posts()){
    $banner->the_post(); 
      
    $file = get_field('banner');
    $img = $file['url'];
    
  if( $file ): ?>
<header class="header" id="one" style="background-image: url(<?php echo $img ?>);">
             
  <?php showMainMenu(); ?>
  
  <div class="heder-position">
    <div class="heder-content">
      <h2><?php the_title(); ?></h2>
      <p><?php echo get_the_excerpt(); ?></p>
      <div class="heder-img">
        <a href="#five">
          <img src="<?php echo get_theme_file_uri('/images/header/3.png'); ?>" alt="">
        </a>
      </div>
    </div>
  </div>
  
</header>

<?php endif; wp_reset_postdata(); }  

}