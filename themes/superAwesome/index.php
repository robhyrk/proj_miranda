<?php get_header(); ?>

<section class="hero">
    <div class="heroBlock">
        <hr>
        <div class="heroText">
            <h3>" <span>Simplicty</span> is the soul of efficiency "</h3>
            <span>- Austin Freeman</span>
        </div>
        <hr>
    </div>
    
</section>

<section class="about">
    <section class="top">
        <img src="<?php echo get_template_directory_uri() . '/images/miranda.png';?>">
        <div>
            <hr>
            <p>Helping brands grow through solution based marketing</p>
            <hr>
        </div>
    </section>
    <section class="bottom">
        <p>Graphic Designer from Toronto, Ontario.
        I help business owners clarify their message with simplicity & good content. 
        Directing and working with consumers for years to taking their personality 
        and ideas and making something fresh and exciting.
        </p>
        <div class="btn">
            <button>READ MORE</button>
        </div>
    </section>
</section>

<section class="projects">
    <h2 class="underline">My Projects</h2>
    <div class="carousel">
    <?php
            $portfolioImgs = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1,
            ));
            while($portfolioImgs->have_posts()) :
                $portfolioImgs->the_post();?>

             <div class='carousel-cell'>
                    <?php the_post_thumbnail('large'); ?>
             </div>

            <?php endwhile;?>
        
    </div>
</section>
<?php get_footer();?>