<?php

/**
 * Part betwwen header and loop
 *
 */
 
?>

	<?php if ( is_active_sidebar( 'image' ) ) : ?>
	<aside class="image-module-position" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_image') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_image_text') ; ?>"<?php endif; ?> >
		<div class="wrapper-image-module-position" role="complementary" >
			<?php dynamic_sidebar( 'image' ); ?>
						
			<?php if( get_theme_mod('fade_image', 'fade02') == 'fade01' ) : ?>
				<div class="fade01-left"></div>
				<div class="fade01-right"></div>
			<?php endif; ?>
			
			<?php if( get_theme_mod('fade_image', 'fade02') == 'fade02' ) : ?>
				<div class="fade02-left"></div>
				<div class="fade02-right"></div>
			<?php endif; ?>
			
		</div>
	</aside>
	<?php endif; ?>
	
	<?php if( ( is_home() || is_front_page() ) && (( get_theme_mod('title_slogan', '') != '') || ( get_theme_mod('slogan', '') != '')) ) : ?>
	<section class="module-slogan zindex10" >
		<div class="wrapper-website zindex10" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_slogan') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_slogan_text') ; ?>"<?php endif; ?> >

			<?php if ( get_theme_mod('title_slogan', '') != '' ) : ?><span class="title-slogan "><span><?php echo get_theme_mod('title_slogan', '') ; ?></span></span><?php endif ; ?>
			<?php if ( get_theme_mod('slogan', '') != '' ) : ?><span class="text-slogan "><span><?php echo get_theme_mod('slogan', '') ; ?></span></span><?php endif ; ?>
						
		
		</div>
	</section>
	<?php endif; ?>

	<section class="website-content clearfix zindex10" >
		
		<section class="wrapper-website clearfix zindex10">
		
			<?php if ( get_theme_mod('breadcrumb', '') == '1' ) : ?>
				<nav class="breadcrumb clearfix" role="navigation" >
					<?php joomspirit_the_breadcrumb(); ?>
				</nav>
			<?php endif; ?>
	
			<?php if ( is_active_sidebar( 'top' ) ) : ?>
			<aside class="top-module-position" role="complementary" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_top') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_top_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'top' ); ?>
			</aside>
			<?php endif; ?>
	
			<?php if ( is_active_sidebar( 'left' ) ) : ?>
			<aside class="left_column " role="complementary" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_left') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_left_text') ; ?>"<?php endif; ?>>
				<?php dynamic_sidebar( 'left' ); ?>
			</aside>
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'right' ) ) : ?>
			<aside class="right_column " role="complementary" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_right') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_right_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'right' ); ?>
			</aside>
			<?php endif; ?>
		
				<!--  MAIN COLUMN -->
				<div class="main_content clearfix">
					
					<!--  USER 1, 2, 3 -->
					<?php if ( is_active_sidebar( 'user1' ) || is_active_sidebar( 'user2' ) || is_active_sidebar( 'user3' )  ) : ?>
					<aside class="users_top clearfix" role="complementary" >
																
						<?php if ( is_active_sidebar( 'user1' ) ) : ?>
						<div class="user1" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user1') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user1_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user1' ); ?>
						</div>
						<?php endif; ?>
											
						<?php if ( is_active_sidebar( 'user3' ) ) : ?>
						<div class="user3" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user3') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user3_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user3' ); ?>
						</div>
						<?php endif; ?>
					
						<?php if ( is_active_sidebar( 'user2' ) ) : ?>
						<div class="user2" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user2') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user2_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user2' ); ?>
						</div>
						<?php endif; ?>
											
					</aside>
					<?php endif; ?>  <!--	END OF USERS TOP	-->
					
					<div class="main_component" role="main" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_article') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_article_text') ; ?>"<?php endif; ?> >