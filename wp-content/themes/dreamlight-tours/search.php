<?php 
get_header(); 
 ?>
 
<style>
    main{
        background-image: url('<?php the_field("search_form_background_image","options"); ?>');
    }
    
</style>

    

    <div class="tours-pkg-container">
        <h2>Search Results For: <?php echo $_GET['s']; ?></h2>
        
        <div class="pkg-card-wrapper">
                        <?php 
                            $args = array(
                                  'post_type' => 'package',
                                  'posts_per_page' => 8,
                                  'orderBy'  => 'ID',
                                  'order' => 'DESC',
                                  's' => $s,
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

                            else{?>
                                //

                                <main>
                                    <h2>No package found, perform search again!</h2>
                                    <?php get_search_form(); ?>
                                </main>

                                <?php
                            }

                     ?>
        </div>
    </div>
<?php
                     
                    /*$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                     $s = $_GET['s'];
                     $s1 = $_GET['s1'];
                    $jobs = new WP_Query(array(
                                    'post_type' => 'joblink_job', 
                                    'posts_per_page' => '8',
                                    'orderby' => 'id',
                                    'order' => 'DESC',
                                    'post_status' => 'publish',
                                    's' => $s,
                                    'meta_query' => array(
                                        'key' => 'location',
                                        'value' => $s1,
                                        'compare' => '=',
                                    ),
                                    'paged' => $paged,
                        ));
                    $i = 1;

                    if( $jobs-> have_posts()):
                        

                         while( $jobs-> have_posts() ):

                               $jobs->the_post();
                               

                                ?>
                                   

                                     <div class="col-md-6">
                                        <div class="text-center" id="img-news">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php $featured = get_the_post_thumbnail_url(get_the_ID()); ?>
                                        <img class="mr-0 p-1 border img-fluid"  src="<?php echo $featured; ?>" alt="Safety at workplace during COVID-19">
                                        </a>
                                        </div>
                                        <a href="<?php the_permalink(); ?>">
                                        <h4 class="my-3"><?php the_title(); ?></h4>
                                        </a>
                                      </div>

                                

                                 <?php
                            

                         endwhile;

                     else:
                        echo "<h3>No Matching Jobs Found Search Again!</h3>";
                        get_search_form();

                    endif;

                    wp_reset_postdata();

                    ?>

                

                  <?php
                $big = 999999999; // need an unlikely integer
                 
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $jobs->max_num_pages
                ) );
                */
                ?> 
             


            






 <?php get_footer(); ?>