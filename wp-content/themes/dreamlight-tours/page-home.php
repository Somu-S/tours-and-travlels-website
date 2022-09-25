<?php get_header(); ?>
<style>
    main{
        background-image: url('<?php the_field("search_form_background_image","options"); ?>');
    }
    .flight-container{
        background-image: url('<?php the_field("background_image_222","options"); ?>');
    }
</style>
    <main>
        <?php  get_search_form(); ?>
    </main>

    <div class="about-us">
        <div class="about-content">
            <div class="about-header">
                <?php the_field('dreamlight_title','options'); ?>
            </div>
            <p>
                <?php the_field('dreamlight_descriptions','options'); ?>
            </p>
            <a href="<?php echo site_url('/contacts'); ?>">
                <button class="sign">
                    Call Now
                </button>
            </a>
        </div>
        <div class="about-img">
            <img src="<?php the_field('below_search_form_section_thumbnail_image','options'); ?>">
        </div>
    </div>

    <div class="services">
        <div class="service-title">
            <i class="fa-solid fa-horizontal-rule"></i>
            Our Services
            <i class="fa-solid fa-horizontal-rule"></i>
        </div>
        <div class="service-card-container">
            <?php

                
                if( have_rows('our_services_section','options') ):

                    
                    while( have_rows('our_services_section','options') ) : the_row();

                        
                        //$sub_value = get_sub_field('sub_field');
                        ?>

                           <div class="service-card">
                            <div class="service-icon">
                                <img src="<?php echo get_sub_field('services_icon','options') ?>">
                            </div>
                            <div class="service-header">
                            <?php echo get_sub_field('services_title','options'); ?>
                            </div>
                            <p><?php echo get_sub_field('services_description','options'); ?></p>
                        </div> 

                        <?php
                        

                    
                    endwhile;

                
                else :
                       
                endif;
                ?>
            
            
        </div>
    </div>

    <div class="tour-pack">
        <div class="tour-header">
            Tour Destination
        </div>
        <p>Domestic Destination</p>
        <div class="tour-card-container">
                                    <?php 
                            $args = array(
                                  'post_type' => 'destination',
                                  'posts_per_page' => -1,
                                  'orderBy'  => 'ID',
                                  'category_name' => 'domestic destination',
                                  'order' => 'DESC',
                                  'post_status' => 'publish'
                            );

                            $sliders = new WP_Query($args);
                            if($sliders->have_posts()){

                                //$i = 0;

                                while($sliders->have_posts()){
                                    $sliders->the_post();
                                    ?>
                                    <div class="tour-card">
                                        <div class="tour-img">
                                            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full', false, '' ); ?>
                                            <img src="<?php echo $src[0]; ?>">
                                        </div>
                                        <div class="place-name">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>

            <?php

                                    //$i++;

                                    wp_reset_postdata();
                                }

                            }

                            else{
                                //
                            }

                     ?>
            
        </div>
    </div>

    <div class="tour-pack">
        <div class="tour-header">
            Tour Destination
        </div>
        <p>International Destination</p>
        <div class="tour-card-container">
                                   <?php 
                            $args = array(
                                  'post_type' => 'destination',
                                  'posts_per_page' => 4,
                                  'orderBy'  => 'ID',
                                  'category_name' => 'international-destination',
                                  'order' => 'DESC',
                                  'post_status' => 'publish'
                            );

                            $sliders = new WP_Query($args);
                            if($sliders->have_posts()){

                                //$i = 0;

                                while($sliders->have_posts()){
                                    $sliders->the_post();
                                    ?>
                                    <div class="tour-card">
                                        <div class="tour-img">
                                            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full', false, '' ); ?>
                                            <img src="<?php echo $src[0]; ?>">
                                        </div>
                                        <div class="place-name">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>

            <?php

                                    //$i++;

                                    wp_reset_postdata();
                                }

                            }

                            else{
                                //
                            }

                     ?>
        </div>
    </div>

    <div class="view-all-btn">
        <a href="<?php echo site_url('/tour-destination'); ?>">
            <button>View all destinations</button>
        </a>
    </div>

    <div class="tours-pkg-container">
        <h2>Most Popular Packages</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, ex.</p>
        <div class="pkg-card-wrapper">
            <?php 
                            $args = array(
                                  'post_type' => 'package',
                                  'posts_per_page' => 8,
                                  'orderBy'  => 'ID',
                                  'order' => 'DESC',
                                  'post_status' => 'publish'
                            );

                            $sliders = new WP_Query($args);
                            if($sliders->have_posts()){

                                //$i = 0;

                                while($sliders->have_posts()){
                                    $sliders->the_post();
                                    ?>
                                    <div class="pkg-card">
                                        <div class="pkg-img">
                                            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full', false, '' ); ?>
                                            <img src="<?php echo $src[0]; ?>" alt="">
                                            <div class="learn-btn">
                                                <a href="<?php the_permalink(); ?>">
                                                    Learn More
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pkg-card-content">
                                            <div class="tour-name">
                                                <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                                </a>
                                            </div>
                                            <div class="pkg-date">
                                                <i class="fa-solid fa-clock"></i>
                                                <?php the_field('tour_duration',get_the_ID()); ?>
                                            </div>
                                            <div class="book-now-btn">
                                                <div class="book-btn">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <button>Book Now</button>
                                                    </a>
                                                </div>
                                                <div class="pkg-price">
                                                    <i class="fa-solid fao-dollar-sign"></i>
                                                    <?php the_field('package_price',get_the_ID()); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

            <?php

                                    //$i++;

                                    wp_reset_postdata();
                                }

                            }

                            else{
                                //
                            }

                     ?>
            
            
            
        </div>
    </div>

    <div class="view-all-btn">
        <a href="<?php echo site_url('tour-package'); ?>">
            <button>View All Packages</button>
        </a>
    </div>

    <div class="why-container">
        <div class="why-title">
            Why we are the best?
        </div>
        <div class="why-card-container">
            <?php

                
                if( have_rows('features','options') ):

                    
                    while( have_rows('features','options') ) : the_row();

                        
                        //$sub_value = get_sub_field('sub_field');
                        ?>

                           <div class="why-card">
                                <div class="why-icon">
                                    <img src="<?php echo get_sub_field('features_icon','options'); ?>">
                                </div>
                                <div class="why-content">
                                    <div class="why-header">
                                        <?php echo get_sub_field('features_title','options'); ?>
                                    </div>
                                    <div class="why-txt">
                                        <?php echo get_sub_field('features_description','options'); ?>
                                    </div>
                                </div>
                            </div>

                        <?php
                        

                    
                    endwhile;

                
                else :
                       
                endif;
                ?>
            
            
            
        </div>
    </div>

    <div class="tours-container">
        <div class="tours-content">
            <div class="numbers">
                <?php the_field('successful_tours','options'); ?>
            </div>
            <p>Successful Tours</p>
        </div>
        <div class="tours-content">
            <div class="numbers">
                <?php the_field('places_explored','options'); ?>
            </div>
            <p>Places Explored</p>
        </div>
        <div class="tours-content">
            <div class="numbers">
                <?php the_field('happy_tourist','options'); ?>
            </div>
            <p>Happy Tourists</p>
        </div>
    </div>
     <div class="tour-header" style="text-align: center; margin-top: 40px;">
            Call us now for reservation
        </div>
     <div class="contact-card-container">
        
        <div class="contact-card">
            <div class="contact-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/photosrc/phone-call.png">
            </div>
            <div class="contact-info">
                Phone no.
            </div>
            <p><?php echo the_field('contact_phone_number','options'); ?></p>
        </div>
        <div class="contact-card">
            <div class="contact-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/photosrc/email.png">
            </div>
            <div class="contact-info">
                Email
            </div>
            <p><?php echo the_field('contact_email','options'); ?></p>
        </div>
        <div class="contact-card">
            <div class="contact-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/photosrc/fax.png">
            </div>
            <div class="contact-info">
                Fax
            </div>
            <p><?php echo the_field('contact_fax','options'); ?></p>
        </div>
        <div class="contact-card">
            <div class="contact-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/photosrc/location.png">
            </div>
            <div class="contact-info">
                Location
            </div>
            <p>
                <?php echo the_field('contact_location','options'); ?>
            </p>
        </div>
    </div>

    <div class="flight-container">
        <div class="flight-content">
            <div class="flight-header">
             <?php the_field('last_section_title','options'); ?>
            </div>
            <p>
                <?php the_field('last_section_description','options'); ?>
            </p>
            <div class="flight-btn">
                <a href="<?php echo site_url('/contacts'); ?>">
                    <button>Contact Now</button>
                </a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php get_footer(); ?>

</body>
</html>