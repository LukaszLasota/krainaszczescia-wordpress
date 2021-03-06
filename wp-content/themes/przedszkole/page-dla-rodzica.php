<?php 
 get_header('new');
 ?>
<main>
<section class="parrents">
    <h2 class='main-h2' title="Dla rodzica - Przedszkole Kraina Szcześcia">
        <img src="<?php echo get_theme_file_uri('/images/rodzice/1.png'); ?>" alt="Dla rodzica - Przedszkole Kraina Szcześcia">
    </h2>
    <p><?php the_content(); ?></p>


    <!-- <div class="toggle">
        <h3 class="collapse-head">Dla rodziców</h3>
        <div class="toggle-content"  id="example">
            <p>gfwhgre wedw</p>
            <p>fwfe ef ewg ew gweg</p>
        </div>
	</div> -->

    <div class="toggle-main toggle-main-one">
        <a class="toggle toggle-one" href="#example"><span>Dla rodziców</span></a>
    
        <div class="toggle-content toggle-content-one" id="example">
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        </div>

    </div>

    <div class="toggle-main toggle-main-two">
        
        <a class="toggle toggle-two" href="#exampleOne"><span>Dla gości</span></a>
        
        <div class="toggle-content" id="exampleOne">
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        <p>Here's some text we want to toggle visibility of.</p>
        </div>

    </div>

</section>
</main>
<?php 
get_footer();
?>