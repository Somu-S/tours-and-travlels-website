<div class="banner-content">
    <div class="banner-header">
        <?php if(!isset($_GET['s'])){ ?>
        <?php the_field('search_form_heading','options');  ?>
    </div>
    <p>
        <?php the_field('search_form_small_text','options'); } ?>
    </p>
    <div class="search-bar">
            <form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
            <input type="text" placeholder="Enter Keywords" name="s">
            <input class="search-btn" type="submit" value="Search">
        </form>
    </div>
</div>