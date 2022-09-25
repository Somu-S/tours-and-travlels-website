<?php get_header(); ?>

<style>
.des-banner{
    background-image: url('<?php the_field('destination_page_banner_image','options'); ?>');
}

</style>
    <div class="inner-banner des-banner">
        <div class="inner-banner-header">
            Tour Destination
        </div>
        <p><?php the_field('destination_page_banner_text','options'); ?></p>
        <div class="inner-banner-links">
            <a href="index.html">
                Home
            </a>
            /
            <a href="tours.html">Tours Destination</a>
        </div>
    </div>

    <div class="tour-pack">
        <div class="tour-header">
            Tour Destinations
        </div>
        <p>Domestic Destinations</p>
        

        <div class="tour-card-container">
            <?php 
                            $args = array(
                                  'post_type' => 'destination',
                                  'posts_per_page' => -1,
                                  'orderBy'  => 'ID',
                                  'category_name' => 'domestic-destination',
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
            Tour Destinations
        </div>
        <p>International Destinations</p>
        <div class="tour-card-container">
                        <?php 
                            $args = array(
                                  'post_type' => 'destination',
                                  'posts_per_page' => -1,
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

    <?php get_footer(); ?>