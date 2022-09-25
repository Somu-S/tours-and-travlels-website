<?php get_header(); ?>
<style>
.tour-banner{
    background-image: url('<?php the_field('tour_details_banner_image','options'); ?>');
}

</style>
    <div class="inner-banner tour-banner">
        <div class="inner-banner-header">
            Tour Packages
        </div>
        <p><?php the_field('tour_details_banner_text','options'); ?></p>
        <div class="inner-banner-links">
            <a href="index.html">
                Home
            </a>
            /
            <a href="services.html">Package Detail</a>
        </div>
    </div>

    <div class="pkg-container">
        <div class="pkg-content">
            <div class="pkg-header">
                <h1>
                    <?php the_title(); ?>
                </h1>

                
                
            </div>
            <div class="description">
                <p><i class="fa-solid fa-umbrella"></i> Package Price:</p>
                <p>
                <?php the_field('package_price',get_the_ID()); ?>
            </p>
            </div>
            <div class="description">
                <h2><i class="fa-solid fa-umbrella"></i> Description</h2>
                <p>
                <?php the_content(); ?>
            </p>
            </div>
            <div class="pkg-photo description">
                <h2><i class="fa-solid fa-umbrella"></i> Photo Gallery</h2>
                <img src="<?php the_field('package_photo_gallery', get_the_ID()); ?>">
            </div>
            <div class="location-wrapper">
                <div class="location description">
                    <h2><i class="fa-solid fa-umbrella"></i>  Location
                </div>
                <div class="location-map">
                    <div class="mapouter"><div class="gmap_canvas"><?php the_field('tour_location',get_the_ID()); ?><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:50rem;width:69rem;}</style><a href="https://www.embedgooglemap.net">get google maps embed code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:50rem;width:69rem;}</style></div></div>
                </div>
            </div>
            <div class="about-tour">
                <div class="location description">
                    <h2><i class="fa-solid fa-umbrella"></i>  Location
                </div>
                <table cellspacing="0">
                    <tr>
                        <th>Places covered</th>
                        <th>Inclusion</th>
                        <th>Exclusion</th>
                        <th>Event Date</th>
                    </tr>

                    <?php

                
                if( have_rows('tour_data', get_the_ID()) ):

                    
                    while( have_rows('tour_data', get_the_ID()) ) : the_row();

                        
                        //$sub_value = get_sub_field('sub_field');
                        ?>

                         <tr>
                           <td><?php echo get_sub_field('places_covered', get_the_ID()); ?></td>
                           <td><?php echo get_sub_field('inclusion', get_the_ID()); ?></td>
                           <td><?php echo get_sub_field('exclusion', get_the_ID()); ?></td>
                           <td><?php echo get_sub_field('event_date', get_the_ID()); ?></td>
                         </tr>



                        <?php
                        

                    
                    endwhile;

                
                else :
                       
                endif;
                ?>
                    
                    
                </table>
            </div>
            <div class="detail">
                <div class="location description">
                    <h2><i class="fa-solid fa-umbrella"></i>
                        Detailed Day Wise Itinerary
                </div>
                <?php

                
                if( have_rows('detailed_day_wise_itinerary', get_the_ID()) ):

                    
                    while( have_rows('detailed_day_wise_itinerary', get_the_ID()) ) : the_row();

                        
                        //$sub_value = get_sub_field('sub_field');
                        ?>

                        <div class="day">
                           Day <?php echo get_sub_field('day', get_the_ID()); ?>: <span><?php echo get_sub_field('itinerary_title', get_the_ID()); ?></span>
                        </div>
                        <p><?php echo get_sub_field('itinerary_description', get_the_ID()); ?></p>

                         



                        <?php
                        

                    
                    endwhile;

                
                else :
                       
                endif;
                ?>
                
                
            </div>
        </div>
        <div class="pkg-sidebar">
            <div class="pkg-searchbar">
                <input type="text" placeholder="Search..">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="trip-container">
                <div class="trip-head">
                    Trip Information
                </div>
                <div class="trip-info">
                    Location: <?php the_field('trip_location', get_the_ID()); ?>
                </div>
                <div class="trip-info">
                    Departure Date: <?php the_field('departure_date', get_the_ID()); ?>
                </div>
                <div class="trip-info">
                    Arrival Date: <?php the_field('arrival_date', get_the_ID()); ?>
                </div>
                <div class="trip-info">
                    Free sightseeing: <?php the_field('free_sightseeing', get_the_ID()); ?>
                </div>
            </div>
            <div class="trip-container">
                <div class="trip-head">
                    Share This Package
                </div>
                <div class="share-media">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-pinterest"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            
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

  <?php get_footer(); ?>  