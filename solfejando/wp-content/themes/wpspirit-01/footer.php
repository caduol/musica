<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content
 *
 */
 
?>
	
	<footer class="website-footer zindex10 clearfix ">

		<section class="wrapper-website zindex10">
		
			<!--	bottom nav	-->
			<?php if ( is_active_sidebar( 'bottom_menu' ) ) : ?>
			<nav class="bottom_menu " role="navigation" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_bottom_menu') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_bottom_menu_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'bottom_menu' ); ?>
			</nav>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'address' ) ) : ?>
			<div class="address " <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_address') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_address_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'address' ); ?>
			</div>
			<?php endif; ?>			

		</section>								<!--			END OF WEBSITE-WRAPPER		-->				

	</footer>						<!--			END OF WEBSITE-FOOTER 		-->
	
	<div class="js-copyright" ><a class="jslink" target="_blank" href="http://www.template-joomspirit.com" >theme WordPress</a></div>
	
	<?php wp_footer(); ?>

</body>
</html>