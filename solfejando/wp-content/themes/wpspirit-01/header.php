<?php

/**
 * The Header template for joomspirit
 *
 * Displays all of the <head> section
 *
 */
 
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class=" <?php echo get_theme_mod('border_image', 'js-border') ; ?> <?php echo get_theme_mod('uppercase', 'uppercase-menu') ; ?> ">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="initial-scale=1" />
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php
	if ( ( preg_match("/MSIE 7/", $_SERVER['HTTP_USER_AGENT'])) || ( preg_match("/MSIE 8/", $_SERVER['HTTP_USER_AGENT'])) || ( preg_match("/MSIE 9/", $_SERVER['HTTP_USER_AGENT'])) ) { set_theme_mod('animation', '1') ; }
	?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="website-header clearfix zindex30" >

		<section class="top-icons clearfix zindex10">
			
			<!--	SOCIAL LINKS	-->
			<?php if( ( get_theme_mod('$google1', '') == '1') || (get_theme_mod('twitter') != '') || (get_theme_mod('facebook') != '') || (get_theme_mod('rss') != '') || (get_theme_mod('linkedin') != '') || (get_theme_mod('google') != '') || (get_theme_mod('instagram') != '') || (get_theme_mod('pinterest') != '') || (get_theme_mod('renren') != '') || (get_theme_mod('weibo') != '') || (get_theme_mod('flickr') != '') || (get_theme_mod('xing') != '') || (get_theme_mod('youtube') != '') || (get_theme_mod('vimeo') != '') || (get_theme_mod('tumblr') != '') || (get_theme_mod('custom_icon01') != '') ) : ?>
			<div class="social-links" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_social') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_social_text') ; ?>"<?php endif; ?> >
		
				<?php if ( get_theme_mod('text_social_icons', '') != '') : ?>
				<span class="text_social_icons hidden-phone" style="color: <?php echo get_theme_mod('color_text_social') ; ?>;"><?php echo get_theme_mod('text_social_icons', '') ; ?></span>
				<?php endif; ?>
					
				<ul>
					
					<?php if ( get_theme_mod('google1') != '') : ?>
					<li class="google">
					<div class="g-plusone" data-size="small" data-count="false" ></div>
					</li>
					<?php endif; ?>
					
					<?php if (get_theme_mod('twitter') != '') : ?>
					<li><a target="_blank" class="icon_twitter" title="Twitter" href="<?php echo get_theme_mod('twitter') ?>"><i class="fa fa-twitter"></i></a></li>
					<?php endif; ?>		
					<?php if (get_theme_mod('facebook') != '') : ?>
					<li><a target="_blank" class="icon_facebook" title="Facebook" href="<?php echo get_theme_mod('facebook') ?>"><i class="fa fa-facebook"></i></a></li>
					<?php endif; ?>
					<?php if (get_theme_mod('rss') != '') : ?>
					<li><a target="_blank" class="icon_rss" title="RSS" href="<?php echo get_theme_mod('rss') ?>"><i class="fa fa-rss"></i></a></li>
					<?php endif; ?>
					<?php if (get_theme_mod('linkedin') != '') : ?>
					<li><a target="_blank" class="icon_linkedin" title="Linkedin" href="<?php echo get_theme_mod('linkedin') ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php endif; ?>
					<?php if (get_theme_mod('google') != '') : ?>
					<li><a target="_blank" class="icon_google" title="Google" href="<?php echo get_theme_mod('google') ?>"><i class="fa fa-google-plus"></i></a></li>
					<?php endif; ?>
					<?php if (get_theme_mod('instagram') != '') : ?>
					<li><a target="_blank" class="icon_instagram" title="Instagram" href="<?php echo get_theme_mod('instagram') ?>"><i class="fa fa-instagram"></i></a></li>
					<?php endif; ?>					
					<?php if (get_theme_mod('pinterest') != '') : ?>
					<li><a target="_blank" class="icon_pinterest" title="Pinterest" href="<?php echo get_theme_mod('pinterest') ?>"><i class="fa fa-pinterest"></i></a></li>
					<?php endif; ?>					
					<?php if (get_theme_mod('renren') != '') : ?>
					<li><a target="_blank" class="icon_renren" title="Renren" href="<?php echo get_theme_mod('renren') ?>"><i class="fa fa-renren"></i></a></li>
					<?php endif; ?>					
					<?php if (get_theme_mod('weibo') != '') : ?>
					<li><a target="_blank" class="icon_weibo" title="Weibo" href="<?php echo get_theme_mod('weibo') ?>"><i class="fa fa-weibo"></i></a></li>
					<?php endif; ?>					
					<?php if (get_theme_mod('xing') != '') : ?>
					<li><a target="_blank" class="icon_xing" title="Xing" href="<?php echo get_theme_mod('xing') ?>"><i class="fa fa-xing"></i></a></li>
					<?php endif; ?>					
					<?php if (get_theme_mod('flickr') != '') : ?>
					<li><a target="_blank" class="icon_flickr" title="Flickr" href="<?php echo get_theme_mod('flickr') ?>"><i class="fa fa-flickr"></i></a></li>
					<?php endif; ?>
					<?php if (get_theme_mod('youtube') != '') : ?>
					<li><a target="_blank" class="icon_youtube" title="Youtube" href="<?php echo get_theme_mod('youtube') ?>"><i class="fa fa-youtube"></i></a></li>
					<?php endif; ?>
					<?php if (get_theme_mod('vimeo') != '') : ?>
					<li><a target="_blank" class="icon_vimeo" title="Vimeo" href="<?php echo get_theme_mod('vimeo') ?>"><i class="fa fa-vimeo-square"></i></a></li>
					<?php endif; ?>
					<?php if (get_theme_mod('tumblr') != '') : ?>
					<li><a target="_blank" class="icon_tumblr" title="Tumblr" href="<?php echo get_theme_mod('tumblr') ?>"><i class="fa fa-tumblr"></i></a></li>
					<?php endif; ?>
	
					<?php if (get_theme_mod('custom_icon01') != '') : ?>
					<li><a target="_blank" class="custom_icon01" title="<?php echo get_theme_mod('custom_icon01_text') ; ?>" href="<?php echo get_theme_mod('custom_icon01') ?>"><img src="<?php echo get_theme_mod('custom_icon01_img') ; ?>" alt="" /></a></li>
					<?php endif; ?>					
	
					<?php if (get_theme_mod('custom_icon02') != '') : ?>
					<li><a target="_blank" class="custom_icon02" title="<?php echo get_theme_mod('custom_icon02_text') ; ?>" href="<?php echo get_theme_mod('custom_icon02') ?>"><img src="<?php echo get_theme_mod('custom_icon02_img') ; ?>" alt="" /></a></li>
					<?php endif; ?>
	
					<?php if (get_theme_mod('custom_icon03') != '') : ?>
					<li><a target="_blank" class="custom_icon03" title="<?php echo get_theme_mod('custom_icon03_text') ; ?>" href="<?php echo get_theme_mod('custom_icon03') ?>"><img src="<?php echo get_theme_mod('custom_icon03_img') ; ?>" alt="" /></a></li>
					<?php endif; ?>					
	
					<?php if (get_theme_mod('custom_icon04') != '') : ?>
					<li><a target="_blank" class="custom_icon04" title="<?php echo get_theme_mod('custom_icon04_text') ; ?>" href="<?php echo get_theme_mod('custom_icon04') ?>"><img src="<?php echo get_theme_mod('custom_icon04_img') ; ?>" alt="" /></a></li>
					<?php endif; ?>
					
				</ul>
					
			</div> 			<!-- 	end of Website icons 		-->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'translate' ) ) : ?>
			<div id="translate" >
				<?php dynamic_sidebar( 'translate' ); ?>
			</div>	
			<?php endif; ?>
			
		</section> 			<!-- 	end of Top icons 		-->

		<section class="wrapper-website zindex20">
			
			
			<?php if ( is_active_sidebar( 'logo' ) ) : ?>
			<div class="logo-module zindex10" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_logo') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_logo_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'logo' ); ?>
			</div>
			
			<?php elseif ( get_theme_mod( 'logo_image', '' ) != '' ) : ?>
			
			
			<div class="logo-module zindex10" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_logo') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_logo_text') ; ?>"<?php endif; ?> >
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo get_theme_mod('logo_image', ''); ?>" alt="" /></a>
			</div>
			
			<?php else : ?>	
			
			<div class="logo-module zindex10" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_logo') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_logo_text') ; ?>"<?php endif; ?> >
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><span class="website-title " ><span><?php echo get_theme_mod( 'website_title', 'WP Spirit 01' ); ?></span></span></a>
				<span class="website-subtitle " ><span><?php echo get_theme_mod( 'subtitle', 'by JoomSpirit' ); ?></span></span>
			</div>
			<?php endif ; ?>
			
			<nav id="js_navigation" class=" zindex20 drop-down " role="navigation" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_menu') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_menu_text') ; ?>"<?php endif; ?> >
				
				<span class="title_menu">
					<a href="#js_navigation"><span class="icon-main-menu"></span>menu</a>
				</span>
									
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_class' => '' ) ); ?>
					
			</nav>
			
			<div class="empty-space"></div> 		<!--		empty DIV for Sticky menu 		-->
			
		</section>
	
	</header>			<!-- 		End of header			-->