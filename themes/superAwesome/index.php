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

<section class="extra">
    <h3>Peace of Mind</h3>
    <hr>
        <img src="<?php echo get_template_directory_uri() . '/images/yoga.png';?>">
        <p>Restless nights and stressful days are now a thing of the past. Go to sleep and wake up in the morning with peace of mind knowing that your project is in good hands.</p>
    <h3>Growth Gains</h3>
    <hr>
    <img src="<?php echo get_template_directory_uri() . '/images/moneybag.png';?>">
        <p>The overall goal is to reach higher levels. Our goal is not to maintain but to grow your company to its full potential.</p>
</section>

<?php get_footer();?>