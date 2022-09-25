<footer>
        <div class="footer-content">
            <div class="footer-row frow">
               <div class="f-head">About</div>
                <span>
                 <?php the_field('about_us_text','options'); ?>
                </span>

            </div>
            <div class="footer-row">
                <div class="f-head">
                    Contact Information
                </div>
                <div class="f-col">
                    <i class="fa-solid fa-location-dot"></i>
                    <?php the_field('dreamlight_address','options'); ?>
                </div>

                <div class="f-col">
                    <i class="fa-solid fa-phone"></i>
                    <?php the_field('dreamlight_number','options'); ?>
                </div>
                <div class="f-col">
                    <i class="fa-solid fa-envelope"></i> <?php the_field('dreamlight_gmail','options'); ?>
                </div>
            </div>
            <div class="footer-row">
                <div class="f-head">
                    Facebook Page
                </div>
                <div class="f-col">
                    
                    
                </div>
                
                
            </div>
            <div class="footer-row">
                <div class="f-head">
                    Follow us
                </div>
                <div class="social-media">
                    <a href="<?php the_field('dreamlight_facebook_link','options'); ?>">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="<?php the_field('dreamlight_instagram_link','options'); ?>">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?php the_field('dreamlight_twitter_link'); ?>">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="<?php the_field('dreamlight_linkden_link','options'); ?>">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="copywright">
            <?php the_field('footer_copyright_text','options'); ?>|Made by <a href="https://kingsit.net"><span>KINGS IT PVT.LTD</span></a>
        </div>
    </footer>