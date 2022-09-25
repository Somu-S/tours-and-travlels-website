<?php get_header(); ?>
<style>
.inner-banner{
    background-image: url('<?php the_field('services_banner_image','options'); ?>');
}

</style>
    <div class="inner-banner">
        <div class="inner-banner-header">
            Our services
        </div>
        <p><?php the_field('services_banner_text','options'); ?></p>
        <div class="inner-banner-links">
            <a href="index.html">
                Home
            </a>
            /
            <a href="services.html">services</a>
        </div>
    </div>

    <div class="services ser-pg">
        <div class="service-card-container">

                <?php

                
                if( have_rows('add_our_services','options') ):

                    
                    while( have_rows('add_our_services','options') ) : the_row();

                        
                        //$sub_value = get_sub_field('sub_field');
                        ?>

                           <div class="service-card">
                            <div class="service-icon">
                                <img src="<?php echo get_sub_field('our_services_image_upload','options') ?>">
                            </div>
                            <div class="service-header">
                            <?php echo get_sub_field('our_services_title_section','options'); ?>
                            </div>
                            <p><?php echo get_sub_field('our_services_description_section','options'); ?></p>
                        </div> 

                        <?php
                        

                    
                    endwhile;

                
                else :
                       
                endif;
                ?>
                
            
        </div>
    </div>

<?php get_footer(); ?>
    