<?php

function showPayment(){ ?>

<section class="payment"  style="background-image: url(<?php echo get_theme_file_uri('/images/oplaty/1.png'); ?>);">
    <div class="payment-position">
    
        <div class="payment-space"></div>
        
        <?php showTuition(); ?>

        <div class="payment-space"></div>
        
        <?php showFees(); ?>

    </div>
</section>

<?php } ?>