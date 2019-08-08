<?php get_header(); ?>

<section class="projects" id="projects">
    <?php

            while( have_posts() ) :
                the_post();?>
            <div>
            <h2 class="underline"><?php the_title();?></h2>
            <?php 
            the_post_thumbnail(array(400, 400)); 
            the_content();
            ?>
             </div>

            <?php endwhile;?>
        
    </div>

<?php get_footer();?>