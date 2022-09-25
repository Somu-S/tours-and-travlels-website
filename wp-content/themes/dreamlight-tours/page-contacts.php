
<?php get_header(); ?>

<style>
    .con-banner{
        background-image: url('<?php the_field('contact_us_text_banner_image','options'); ?>');
    }
</style>

    <div class="inner-banner con-banner">
        <div class="inner-banner-header">
            Contact Us
        </div>
        <p><?php the_field('contact_us_page_banner_text','options'); ?></p>
        <div class="inner-banner-links">
            <a href="index.html">
                Home
            </a>
            
            <a href="contact.html">Contact</a>
        </div>
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

    <div class="contact-map-container">
        <div class="off-map">
            <div class="mapouter"><div class="gmap_canvas"><?php echo the_field('google_map_embedd_code','options'); ?><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:50rem;width:60rem;}</style><a href="https://www.embedgooglemap.net">custom google map embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:50rem;width:60rem;}</style></div></div>
        </div>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="85" title="Contact form 1"]'); ?>
        </div>
    </div>

    <?php get_footer(); ?>
    