  <?php get_header(); ?>
  <style>
.tour-banner{
    background-image: url('<?php the_field('tour_package_banner_image','options'); ?>');
}

</style>

    <div class="inner-banner tour-banner">
        <div class="inner-banner-header">
            Tour Packages
        </div>
        <p><?php the_field('tour_package_banner_text','options'); ?></p>
        <div class="inner-banner-links">
            <a href="index.html">
                Home
            </a>
            /
            <a href="services.html">Tour Packages</a>
        </div>
    </div>

    <div class="tours-pkg-container">
        <h2>Most Popular Packages</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, ex.</p>
        <div class="pkg-card-wrapper">
                        <?php 
                            $args = array(
                                  'post_type' => 'package',
                                  'posts_per_page' => -1,
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

    <div class="tours-pkg-container">
        <h2>Most Sight Seeing <span style="color: #8C1B21;">This Month</span></h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, ex. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, voluptatibus?</p>
        <div class="pkg-card-wrapper">
                                    <?php 
                            $args = array(
                                  'post_type' => 'package',
                                  'posts_per_page' => -1,
                                  'orderBy'  => 'ID',
                                  'order' => 'DESC',
                                  'category_name' => 'most-sight-seeing',
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

<?php get_footer(); ?>
