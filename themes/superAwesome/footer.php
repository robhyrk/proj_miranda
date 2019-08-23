<footer>
    <div class="footerLogo">
        <img class="aboutLogo" src="<?php echo get_template_directory_uri() . '/images/logo-cropped.png';?>">
        <p>Ryan Miranda &copy; <?php echo date("Y")?></p>
    </div>
    <?php dynamic_sidebar( 'footer' ); ?>
</footer>    

<?php wp_footer();?>
</body>
</html>