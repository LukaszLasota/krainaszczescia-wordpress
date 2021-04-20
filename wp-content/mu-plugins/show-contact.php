<?php function showContact($args = NULL){ 
    
if(get_current_blog_id() == 2){
    $args['title'] = 'Przedszkole';
    $args['paragraphOne'] = '885 755  008 ZUCHY';
    $args['paragraphTwo'] = '885 755  007 STARSZAKI';
}else{
    $args['title'] = 'Żłobek';
    $args['paragraphOne'] = '885 755  006 MALUCHY';
    $args['paragraphTwo'] = '885 755  004 KRASNALE';
}    
?>
    
<section class="contact" id="six">
    
    <h2 class='main-h2' title="Kontakt przedszkole Kraina Szczęścia">
        <img src="<?php echo get_theme_file_uri('/images/kontakt/3.png'); ?>" alt="Kontakt przedszkole Kraina Szcześcia">
    </h2>
    <div class="contact-main">
        
        <div class="contact-one" >
            
            <div class="contact-one-img" >
                <!-- <img src="<?php echo get_theme_file_uri('/images/kontakt/2.png'); ?>" alt=""> -->
                <picture>
                  <source srcset="<?php echo get_theme_file_uri('/images/kontakt/16.png'); ?>" media="(max-width: 600px)">
                  <img src="<?php echo get_theme_file_uri('/images/kontakt/2.png'); ?>" alt="">
                </picture>
            </div>
            
            <div class="content">
                
                <div class="content-one">   
                    <div class="content-one-img">
                        <img src="<?php echo get_theme_file_uri('/images/kontakt/4.png'); ?>" alt="">
                    </div>
                    <div class="content-one-text">
                        <p>17/2000660</p>
                        <h4><?php echo  $args['title']; $args['paragraphOne']?></h4>
                            <p><?php echo $args['paragraphOne']?></p>
                            <p><?php echo $args['paragraphTwo']?></p>
                        <h4>Dyrektor</h4>
                            <p>Aneta Mikosz 733 733 311 <span class="contact-small">(10.00 - 18.00)</span></p>
                        <h4>catering</h4>
                            <p>885 755 003 (nie SMS)</p>
                            <p>17/ 200 06 60 (nie SMS)</p>
                    </div>  
                </div>
    
                <div class="content-one">
                    <div class="content-one-img">
                        <img src="<?php echo get_theme_file_uri('/images/kontakt/5.png'); ?>" alt="">
                    </div>
                    <div class="content-one-text">
                        <p>kontakt@krainaszczescia.edu.pl</p>
                        <p>biuro@krainaszczescia.edu.pl</p>
                    </div>  
                </div>
    
                <div class="content-one">
                    <div class="content-one-img">
                        <img src="<?php echo get_theme_file_uri('/images/kontakt/6.png'); ?>" alt="">
                    </div>
                    <div class="content-one-text">
                        <p>ul. Ofiar Katynia 6, 35-209 Rzeszów</p>
                    </div>  
                </div>
    
                <div class="content-one">                  
                    <div class="content-one-img">
                        <a href="https://www.facebook.com/krainaszczescia.edu" target="_blank">
                            <img src="<?php echo get_theme_file_uri('/images/kontakt/7.png'); ?>" alt="">
                        </a>                       
                    </div>
                    <div class="content-one-text">
                        <a href="https://www.facebook.com/krainaszczescia.edu" target="_blank">
                            <p>Facebook</p>
                        </a>  
                    </div>  
                </div>
    
            </div>  
    
        </div>
        
    </div>
    </section>
    </main>	
    
   
 <?php } ?>