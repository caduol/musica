<?php

function joomspirit_load_template_options_header()
{

		$space_font_name   = array("+");
		if ( get_theme_mod('custom_font_website_title', '') != '' ) { $font_website_title = get_theme_mod('custom_font_website_title', '') ; } else { $font_website_title = get_theme_mod('font_website_title', 'Italianno') ; }
		if ( get_theme_mod('custom_font_subtitle', '') != '' ) { $font_subtitle = get_theme_mod('custom_font_subtitle', '') ; } else { $font_subtitle = get_theme_mod('font_subtitle', 'Dosis') ; }
		if ( get_theme_mod('custom_font_title_slogan', '') != '' ) { $font_title_slogan = get_theme_mod('custom_font_title_slogan', '') ; } else { $font_title_slogan = get_theme_mod('font_title_slogan', 'Italianno') ; }
		if ( get_theme_mod('custom_font_slogan', '') != '' ) { $font_slogan = get_theme_mod('custom_font_slogan', '') ; } else { $font_slogan = get_theme_mod('font_slogan', 'Dosis') ; }
		if ( get_theme_mod('custom_font_menu', '') != '' ) { $font_menu = get_theme_mod('custom_font_menu', '') ; } else { $font_menu = get_theme_mod('font_menu', 'Dosis') ; }
		if ( get_theme_mod('custom_font_h1', '') != '' ) { $font_h1 = get_theme_mod('custom_font_h1', '') ; } else { $font_h1 = get_theme_mod('font_h1', 'Dosis') ; }
		if ( get_theme_mod('custom_font_h2', '') != '' ) { $font_h2 = get_theme_mod('custom_font_h2', '') ; } else { $font_h2 = get_theme_mod('font_h2', 'Dosis') ; }
		if ( get_theme_mod('custom_font_content', '') != '' ) { $font_content = get_theme_mod('custom_font_content', '') ; } else { $font_content = get_theme_mod('font_content', 'Helvetica') ; }
		
		
		// 		find the position of the caracter ":"
		function sep_font($font)
		{
			$pos1=strpos($font, ":");
			$pos2=strpos($font, "&");
				
			$length=strlen($font);
			if ( ($pos1 !== false) & ($pos2 !== false) ) { return min( $pos1, $pos2) ; }
			elseif ($pos1 !== false)  { return $pos1 ; }
			elseif ($pos2 !== false)  { return $pos2 ; }
			else { return $length ; }
		}
	
	
		// load all non standard fonts from Google
	
		$defaultFonts = array('Arial', 'Verdana', 'Trebuchet ms', 'Helvetica', 'Georgia', 'Times new roman');
		$allFonts = array($font_content, $font_menu, $font_website_title, $font_subtitle, $font_title_slogan, $font_slogan, $font_h1, $font_h2);
		$googleFonts = array_unique(array_diff($allFonts, $defaultFonts));
		foreach ($googleFonts as $loadFont) {
			?>
			
			<link href="http://fonts.googleapis.com/css?family=<?php echo $loadFont ; ?>" media="all" type="text/css" rel="stylesheet" >
			
			<?php
		}
	
	?>
	
	<style type="text/css">
	
		/**		General 		**/
         
		body {
		font-size:<?php echo get_theme_mod( 'default_font_size' , '0.85em' ); ?>;
		color : <?php echo get_theme_mod( 'color_text_general', '#818077' ); ?>;
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_content,0,sep_font($font_content)) ) ; ?>', sans-serif;
		}

		/** 	COLOR 			**/
		
		.drop-down li a, .drop-down li span.separator {
		color:<?php echo get_theme_mod('color_main_menu_item', '#A2A095') ; ?>;
		}		
		.drop-down li[class*="current"] > a, .drop-down li[class*="current"] > span, .drop-down li:hover > a, .drop-down li:hover > span {
		color: <?php echo get_theme_mod('color_main_menu_item_active', '#5F9839') ; ?>;
		border-color : <?php echo get_theme_mod('color_main_menu_item_active', '#5F9839') ; ?>;
		}		
		a {
		color: <?php echo get_theme_mod('color_link', '#5f9839') ; ?>;
		}
		
		#wp-calendar tbody a {
		background-color : <?php echo get_theme_mod('color_link', '#5f9839') ; ?>;
		}
		
		input[type="submit"], button, .breadcrumb a:hover,
		.horizontal-menu li[class*="current"] > a, .vertical-menu li[class*="current"] > a, .vertical-menu li a:hover,
		.bottom_menu li a:hover, a:hover  {
		color: <?php echo get_theme_mod('color_link_hover', '#0099cc') ; ?>;
		}
		
		.entry-meta .tag-links a:hover, #wp-calendar tbody a:hover {
		background-color: <?php echo get_theme_mod('color_link_hover', '#0099cc') ; ?>;
		}

		.entry-meta .tag-links a:hover:before {
		border-right-color: <?php echo get_theme_mod('color_link_hover', '#0099cc') ; ?>;
		}

		.horizontal-menu li[class*="current"] > a {
		background: <?php echo get_theme_mod('color_link_hover', '#0099cc') ; ?>;
		}		
		.vertical-menu li[class*="current"] > a {
		border-right-color: <?php echo get_theme_mod('color_link_hover', '#0099cc') ; ?>;
		}		
		.vertical-menu.green li[class*="current"] > a, .vertical-menu.blue li[class*="current"] > a, .vertical-menu.turquoise li[class*="current"] > a, .vertical-menu.orange li[class*="current"] > a, .vertical-menu.red li[class*="current"] > a, .vertical-menu.brown li[class*="current"] > a,
		.vertical-menu.black li[class*="current"] > a, .vertical-menu.violet li[class*="current"] > a, .vertical-menu.green li[class*="current"] > a, .vertical-menu.green li[class*="current"] > a, .vertical-menu.green li[class*="current"] > a {
		border-right: none;
		background: <?php echo get_theme_mod('color_link_hover', '#0099cc') ; ?>;
		}
		
		h2 a {
		color : <?php echo get_theme_mod( 'color_text_general', '#818077' ); ?>;
		}
		
		/**		Slogan 		**/	
		
		.title-slogan {
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_title_slogan,0,sep_font($font_title_slogan)) ) ; ?>', sans-serif;
		font-size : <?php echo get_theme_mod( 'title_slogan_fontsize', '50' ); echo get_theme_mod( 'type_font_size_title_slogan', 'px' ); ?>;
		color: <?php echo get_theme_mod('color_title_slogan', '#5F9839') ; ?>;
		}
		
		.text-slogan {
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_slogan,0,sep_font($font_slogan)) ) ; ?>', sans-serif;
		color : <?php echo get_theme_mod( 'color_slogan', '#A2A095' ); ?>;
		font-size : <?php echo get_theme_mod( 'slogan_fontsize', '20' ); echo get_theme_mod( 'type_font_size_slogan', 'px' ); ?>;
		}
		
		/**		TITLE 		**/	
		
		.website-title {
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_website_title,0,sep_font($font_website_title)) ) ; ?>', sans-serif;
		font-size : <?php echo get_theme_mod( 'website_title_fontsize', '80' ); echo get_theme_mod( 'type_font_size_website_title', 'px' ); ?>;
		color: <?php echo get_theme_mod('color_website_title', '#A2A095') ; ?>;
		}
		
		.website-subtitle {
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_subtitle,0,sep_font($font_subtitle)) ) ; ?>', sans-serif;
		color : <?php echo get_theme_mod( 'color_subtitle', '#5F9839' ); ?>;
		font-size : <?php echo get_theme_mod( 'subtitle_fontsize', '20' ); echo get_theme_mod( 'type_font_size_subtitle', 'px' ); ?>;
		}

		h1, h1 a, h1 a:hover, .blog > h1, .blog > h2 {
		color: <?php echo get_theme_mod('colorh1', '#5F9839') ; ?>;
		}		
		h2, h2 > a, h1 + h1 > a {
		color: <?php echo get_theme_mod('colorh2', '#5B3D00') ; ?>;
		}		
		h3.widget-title {
		color: <?php echo get_theme_mod('colorh2', '#5B3D00') ; ?>;
		}
		
		.widget_calendar .widget-title {
		color: <?php echo get_theme_mod('colorh2', '#5B3D00') ; ?> !important;
		}
		
		/**		FONT	**/
		
		.drop-down li a, .drop-down li span.separator {
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_menu,0,sep_font($font_menu)) ) ; ?>', sans-serif;
		}
		.drop-down li {
		font-size : <?php echo get_theme_mod('main_menu_fontsize', '140') ; echo get_theme_mod( 'type_font_size_main_menu', '&#37;' ); ?>;
		}
		h1, .blog > h1, .blog > h2 {
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_h1,0,sep_font($font_h1)) ) ; ?>', sans-serif;
		font-size : <?php echo get_theme_mod('h1_fontsize', '220') ; echo get_theme_mod( 'type_font_size_h1', '&#37;'); ?>;
		}
		h1 + h1, h2, h3, h4, h5, h3.widget-title {
		font-family: '<?php echo str_replace($space_font_name," ",substr($font_h2,0,sep_font($font_h2)) ) ; ?>', sans-serif;
		}
		h1 + h1, h2 {
		font-size : <?php echo get_theme_mod('h2_fontsize', '150') ; echo get_theme_mod( 'type_font_size_h2', '&#37;' ); ?>;
		}
		h3 {
		font-size : <?php echo get_theme_mod('h3_fontsize', '115') ; echo get_theme_mod( 'type_font_size_h3', '&#37;' ); ?>;
		}
		h3.widget-title {
		font-size : <?php echo get_theme_mod('widget_title_fontsize', '130') ; echo get_theme_mod( 'type_font_size_widget', '&#37;' ); ?>;
		}
		h4 {
		font-size : <?php echo get_theme_mod('h4_fontsize', '110') ; echo get_theme_mod( 'type_font_size_h4', '&#37;' ); ?>;
		}
		h5 {
		font-size : <?php echo get_theme_mod('h5_fontsize', '100') ; echo get_theme_mod( 'type_font_size_h5', '&#37;' ); ?>;
		}
		
		/**			Slideshow  **/
		
		.image-module-position {
		background: <?php echo get_theme_mod('bg_image', '#ffffff') ; ?>;
		}
		
		.wrapper-image-module-position {
		width:<?php echo get_theme_mod( 'width_image', '100'); echo get_theme_mod( 'type_width_size_image', '&#37;' ); ?>;
		}
		
		/**			Width 		**/
		
		body {
		min-width : <?php echo get_theme_mod( 'width_website', '980' ); echo get_theme_mod( 'type_width_size_website', 'px' ); ?>;
		}
		 
		.wrapper-website {
		width : <?php echo get_theme_mod( 'width_website', '980' ); echo get_theme_mod( 'type_width_size_website', 'px' ); ?>;
		}		
		.left_column {
		width:<?php echo get_theme_mod( 'width_left', '200'); echo get_theme_mod( 'type_width_size_left', 'px' ); ?>;
		}
		.right_column {
		width:<?php echo get_theme_mod( 'width_right', '200'); echo get_theme_mod( 'type_width_size_right', 'px' ); ?>;
		}
		
		.user1 {
		width:<?php echo get_theme_mod( 'width_user1', '30' ); ?>% ;
		}
		.user3 {
		width:<?php echo get_theme_mod( 'width_user3', '30' ); ?>% ;
		}
		.user4 {
		width:<?php echo get_theme_mod( 'width_user4', '30' ); ?>% ;
		}
		.user6 {
		width:<?php echo get_theme_mod( 'width_user6', '30' ); ?>% ;
		}
		
		@media screen and (min-width: 979px) and (min-width: <?php echo get_theme_mod( 'width_website', '980' ); echo get_theme_mod( 'type_width_size_website', 'px' ); ?>) {
		
			.header-fixed .website-header {
			position:fixed;
			top:0px;
			left:0;
			right:0;
			}	
		}
		
    </style>
    
	<?php
	// for Font Awesome
	?>
	<!--		Load Font Awesome 		-->
	<link href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome.css" media="all" type="text/css" rel="stylesheet">
	
	
	<?php
	// for Animations Scrollreveal
	?>
	<style type="text/css"> [data-sr] { visibility: hidden; } </style>
	
	
	<?php
    
    //		Responsive code
    if ( get_theme_mod('responsive', '1') == '1') {
    	
    	?>
    	<link href="<?php echo get_template_directory_uri(); ?>/media-queries.css" media="all" type="text/css" rel="stylesheet" >
    	<style type="text/css">
    		
    		.drop-down span.title_menu a, .icon-main-menu:before  {
			color: <?php echo get_theme_mod('color_link_hover', '#0099cc') ; ?>;
			}
		
    	</style>
    	<?php
    	
    	}
    	
    else {
    	
    	?>
    	<link href="<?php echo get_template_directory_uri(); ?>/media-queries-no-responsive.css" media="all" type="text/css" rel="stylesheet" >
    	<?php
    
		}
	
}

add_action( 'wp_head', 'joomspirit_load_template_options_header');

?>