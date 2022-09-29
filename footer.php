<?php
    wp_footer();
    ?>

<footer>
    <div class="left-footer">
    <img src="<?php echo get_theme_mod('footer_image_logo',get_bloginfo('template_directory').'/assets/images/image 10.png' )?>" border="0" alt="">
    </div>
    <div class="right-footer">
    <?php wp_nav_menu('primary'); ?>
    </div>
</footer>
<div class="copyright">            
    <p>
        <?php 
            printf( 
                '%s. %s &copy; %s', 
                get_theme_mod('copyright_text', __( '© Copyright 2021 HOA Management', 'copyright_text' ) ),
                get_bloginfo('name'), 
                date_i18n( 'Y' )
            ); 
        ?>
    </p></div>
</body>

    
</html>