<?php
get_header();
?>
    <div class="banner">

		<div class="banner__col__img">
			<img src="<?php echo get_theme_mod('banner_image',get_bloginfo('template_directory').'/assets/images/Rectangle 40.png' )?>" alt="">
		</div>

		<div class="banner-col">

			<div class="title">
				<h2>
					<?php printf( get_theme_mod('banner_heading', __( 'Live a Golden Life', 'banner_heading' ) )); ?>
				</h2>

				<div class="description">
					<p>
						<?php printf( get_theme_mod('banner_text', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero.', 'banner_text' ) ));     ?>                
					</p>

					<button class="banner_button"><a class= "banner_link" href="<?php echo get_theme_mod('banner_button_url', __( '#', 'banner_button_url' ) ); ?>"><?php printf( get_theme_mod('banner_button_text', __( 'HOMEOWNERS SUPPORT', 'banner_button_text' ) )); ?></a></button>
				</div>
			</div>

		</div>
        
    </div>

    <div class="ctn ctn__community">
        <h2>
            <?php printf( get_theme_mod('second_section_heading', __( 'With Great Community', 'second_section_heading' ) )); ?>
        </h2>

        <p>
            <?php printf( get_theme_mod('second_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.', 'second_section_paragraph' ) )); ?>
        </p>
    </div>

    <div class="ctn ctn__latest-event ctn--bg-secondary">
        <div class="left-latest">
            <p>
                <?php printf( get_theme_mod('third_section_sales', __( 'Backyard Sale 12-15-2021 <br> Easter Egg Hunt 04-23-2021 <br> Coffee Hours 02-08-2021 <br> Backyard Together 11-16-2021 <br> Pet Celebration 07-10-2021', 'third_section_sales' ) )); ?>
            </p>
        </div>

        <div class="right-latest">
            <h2>
                <?php printf( get_theme_mod('third_section_heading', __( 'Latest Events', 'third_section_heading' ) )); ?>
            </h2>
            <p class="latest_events_events">
                <?php printf( get_theme_mod('third_section_description', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. ', 'third_section_description' ) )); ?>
            </p>
        </div>       
    </div>

    <div class="ctn ctn__best-places">
        <div class="left-best">
            <h2>
                <?php printf( get_theme_mod('fourth_section_heading', __( 'Best Place', 'fourth_section_heading' ) )); ?>
            </h2>
            
            <p class="latest_events_events">
                <?php printf( get_theme_mod('fourth_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est.', 'fourth_section_paragraph' ) )); ?>
            </p>
        </div>

        <div class="right-best">
            <img src="<?php echo get_theme_mod('fourth_image',get_bloginfo('template_directory').'/assets/images/Rectangle 43.png' )?>" border="0" alt="map">
        </div>
    </div>

<?php
get_footer();
?>
