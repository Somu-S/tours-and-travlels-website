<?php get_header(); ?>
<style>
.inner-banner{
    background-image: url('<?php the_field('about_us_banner_image','options'); ?>');
}
.flight-container{
    background-image: url('<?php the_field('background_image_111','options'); ?>');
}
</style>

    <div class="inner-banner about-banner">
        <div class="inner-banner-header">
            About
        </div>
        <p><?php the_field('about_us_banner_text','options'); ?></p>
        <div class="inner-banner-links">
            <a href="">
                Home
            </a>
            /
            <a href="#">About</a>
        </div>
    </div>

    <div class="about-us">
        <div class="about-content">
            <div class="about-header">
                About Dreamlight Tours & Travels
            </div>
            <p><?php the_field('about_dreamlight_text','options'); ?>
            </p>
            <div class="social-media about-media">
                <a href="<?php the_field('dreamlight_facebook_link','options'); ?>">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="<?php the_field('dreamlight_instagram_link','options'); ?>">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="<?php the_field('dreamlight_twitter_link','options'); ?>">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="<?php the_field('dreamlight_linkden_link','options'); ?>">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="about-img">
            <img src="<?php the_field('about_dreamlight_image','options'); ?>">
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
                <?php the_field('happy_tourists','options'); ?>
            </div>
            <p>Happy Tourists</p>
        </div>
    </div>

    <div class="flight-container">
        <div class="flight-content">
            <div class="flight-header">
                <?php the_field('title_text','options'); ?>
            </div>
            <p>
             <?php the_field('short_description_text_1','options'); ?>
            </p>
            <div class="flight-btn">
                <a href="contact.html">
                    <button>Contact Now</button>
                </a>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>