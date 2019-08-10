<?php get_header(); ?>

<section class="projects" id="projects">
    <?php

            while( have_posts() ) :
                the_post();?>
            <h2 class="underline"><?php the_title();?></h2>
                
                <div class="portfolio-img">
                    <?php the_post_thumbnail(array(400, 400));?>
                </div>
                 
                <?php the_content();?>
                

            <?php endwhile;?>

            <a href="<?php echo get_home_url()?>"><button>Back to Home</button></a>

</section>
<?php get_footer();?>