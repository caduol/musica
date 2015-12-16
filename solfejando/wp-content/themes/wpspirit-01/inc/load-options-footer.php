<?php

function joomspirit_load_template_options_footer()
{

		// Code for Sticky menu
		
		if ( get_theme_mod( 'sticky_menu', '1' )) {
			
			?>
			
			<script src="<?php echo get_template_directory_uri(); ?>/js/stickUp.min.js" type="text/javascript"></script>
			<script type="text/javascript">
			//initiating jQuery
			jQuery(function($) {
				jQuery(document).ready( function() {
				jQuery('.drop-down').stickUp();
				});
			});
			</script>
			
			<?php
			
		}
    
   		// Code for button Scroll to Top
    
    	if ( get_theme_mod( 'scroll_to_top', '1' )) {
    	
    	?>
    	
			<div class="hidden-phone" id="toTop"><a id="toTopLink"><span class="icon-up"></span><span id="toTopText"><?php echo __('Back to top', 'joomspirit'); ?></span></a></div>
			<script type="text/javascript">
				jQuery(document).ready(function(){
						
						jQuery(window).scroll(function () {
						
							if (jQuery(this).scrollTop() > 200) {
								jQuery("#toTop").fadeIn();
							}
							else {
								jQuery("#toTop").fadeOut();
							}
						});
					
						jQuery("#toTop").click(function() {
							jQuery("html, body").animate({ scrollTop: 0 }, "slow");
							 return false;
						});
				});
			</script>
    	
    	<?php
    	}
    	
    	// Code for Google +1 button
    	
    	if ( get_theme_mod('google1', '') != '') {
    	
    		?>
    		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
			<?php
		
		}
		
		// Code for Animations
		
		if ( (! preg_match("/MSIE 7/", $_SERVER['HTTP_USER_AGENT'])) && (! preg_match("/MSIE 8/", $_SERVER['HTTP_USER_AGENT'])) && (! preg_match("/MSIE 9/", $_SERVER['HTTP_USER_AGENT'])) && ( get_theme_mod('animation', '') == '' ) ) {
		
			?>			
			<script src="<?php echo get_template_directory_uri(); ?>/js/scrollReveal.min.js" type="text/javascript"></script>
			<script type="text/javascript">
				var config = { vFactor: 0.1 }
				window.sr = new scrollReveal( config );
			</script>
			<?php
			
		}
	
		// Google Analytics Tracking Code
		
		if( get_theme_mod('google_code', '') ) { echo get_theme_mod('google_code', '') ; }

}

add_action( 'wp_footer', 'joomspirit_load_template_options_footer');

?>