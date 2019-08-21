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

<section class="about" id="about">
    <section class="top">
        <img src="<?php echo get_template_directory_uri() . '/images/miranda.png';?>">
        <div>
            <hr>
            <h3>Helping brands grow through solution based marketing</p>
            <hr>
        </div>
    </section>
    <section class="bottom">
        <p>Hello, my name is Ryan Miranda.<br>
I am a Graphic Designer from Toronto, Ontario.<br>
Helping business’ clarify their message with simplicity &amp; good content.
Directing and working with consumers for years to taking their personality and ideas and making something fresh and exciting.
        </p>
        <div class="read-more"><?php dynamic_sidebar( 'about-me-read-more' ); ?></div>
        <button>Read More</button>
    </section>
</section>

<section class="projects" id="projects">
    <h2 class="underline">My Projects</h2>
    <div class="carousel">
    <?php
        $portfolioImgs = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per_page' => 9,
        ));
        while($portfolioImgs->have_posts()) :
            $portfolioImgs->the_post();?>

            <div class='carousel-cell'>
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(400, 400)); ?></a> 
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

<section class="contact">
    <section class="tagline">
        <div class="tagText">
            <h3>Bring your umbrellas out, lets brainstorm.</h3>
            <p>I would love opportunity to work with you on your next project, small or large I welcome all tasks.</p>
            <p>Schedule an appointment today or request a quote.</p>
        </div>
    </section>
    <section class="form" id="contact">
        <h2>Contact</h2>
        <h3>Get Pricing and Free Marketing Plan</h3>
        <?php dynamic_sidebar( 'contact-form' ); ?>
    </section>
</section>

<?php get_footer();?>