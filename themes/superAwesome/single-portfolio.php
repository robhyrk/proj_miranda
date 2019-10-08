<?php get_header(); ?>

<section class="projects-single" id="projects">
    <?php

            while( have_posts() ) :
                the_post();?>
            <h2 class="underline"><?php the_title();?></h2>
                
                <div class="portfolio-img">
                    <?php the_post_thumbnail(array(400, 400));?>
                </div>
                <section class="portfolio-content">
                    <?php the_content();?>
                </section>
                

            <?php endwhile;?>
            <!-- Center button -->
            <button><a href="<?php echo home_url("#projects")?>">BACK TO PROJECTS</a></button>

</section>
<?php get_footer();?>