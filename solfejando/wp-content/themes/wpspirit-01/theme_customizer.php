<?php

	class Textarea_2_Control extends WP_Customize_Control {
		public $type = 'textarea_2';
	 
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="2" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}

	class Textarea_5_Control extends WP_Customize_Control {
		public $type = 'textarea_5';
	 
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}

	class Separator_Control extends WP_Customize_Control {
		public $type = 'separator';
	 
		public function render_content() {
			?>			
			<?php
		}
	}
	
	class Stylesheet_Control extends WP_Customize_Control {
		public $type = 'stylesheet';
	 
		public function render_content() {
			?>
			
			<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300,700|Abel|Arizonia|Berkshire+Swash|Cookie|Dosis:400,200,300,500,600,700,800|Droid+Sans:400,700|Francois+One|Italianno|Lato:400,100,300,400italic,300italic,100italic,700,700italic,900,900italic|Lobster|Lora:400,400italic,700,700italic|Montserrat:700|Oleo+Script|Open+Sans+Condensed:300:300,300italic,700|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800|Oswald:400,300,700|Oxygen:400,300,700|PT+Sans+Narrow:400,700|PT+Sans:400,400italic,700,700italic|Prosto+One|Quicksand:400,300,700|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Rokkitt:400,700|Share:400,400italic,700,700italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|Ubuntu+Condensed|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	
			<style type="text/css">
			
				/**		change WordPress style		**/
				
				input, textarea {
				font-size:14px;
				}
				
				input[type="number"], input[type="password"], input[type="search"], input[type="text"] {
				padding:3px 5px;
				}
				
				#customize-theme-controls .accordion-section-content {
				background : #f2f2f2;
				}
				
				.accordion-section-content {
			    padding: 10px 12px 15px;
				}
				
				.customize-control-title {
			    font-size: 13px;
			    line-height:120%;
			    font-weight: 500;
			    background: #aaa;
			    border:1px solid #999;
			    color:#fff;
			    padding:2px 8px;
				}
				
				#customize-controls .description {
				font-size:11px;
				padding: 0 8px;
				margin-bottom:10px;
				}
				
				.customize-control-checkbox label, .customize-control-color .color-picker, .customize-control-upload div {
				line-height:120%;
				}
				
				.accordion-section .dropdown-content {
				border-color : #ddd;
				}
				
				.customize-control .dropdown-arrow {
				background : #ddd;
				}
				
				.customize-control {
				margin-bottom:15px;
				}
				
				#customize-info .accordion-section-title:focus, #customize-info .accordion-section-title:hover, #customize-info.open .accordion-section-title,
				#customize-theme-controls .control-section .accordion-section-title:focus, #customize-theme-controls .control-section .accordion-section-title:hover,
				#customize-theme-controls .control-section.open .accordion-section-title, #customize-theme-controls .control-section:hover > .accordion-section-title {
    			background: #ddd;
				}
				
				/** 	custom CSS 					**/
				
				#customize-theme-controls li {
				position:relative;
				}
				
				*[id*="separator"] {
				display:block;
				border-top:2px dotted #666;
				margin: 5px 0 18px 0;
				}
				
				*[id*="fontsize"] input, *[id*="width_website"] input, *[id*="width_left"] input, *[id*="width_right"] input, *[id*="width_image"] input {
				width:60px !important;
				}
				
				*[id*="type_font_size"], *[id*="type_width_size_website"], *[id*="type_width_size_left"], *[id*="type_width_size_right"], *[id*="type_width_size_image"] {
				margin-bottom:0;
				}
				
				*[id*="type_font_size"] label span, *[id*="type_width_size_website"] label span, *[id*="type_width_size_left"] label span, *[id*="type_width_size_right"] label span, *[id*="type_width_size_image"] label span {
				display:none;
				}
				
				*[id*="type_font_size"] label select, *[id*="type_width_size_website"] label select, *[id*="type_width_size_left"] label select, *[id*="type_width_size_right"] label select, *[id*="type_width_size_image"] label select {
				position:absolute;
				top:-41px;
				left:66px;
				min-width:0 !important;
				width: 50px;
				height:26px;
				line-height:26px;
				margin:0;
				padding:0 5px;
				}
				
				
				/**			General Fonts 			**/
				
				#customize-control-font_website_title option, #customize-control-font_menu option, #customize-control-font_h1 option, #customize-control-font_h2 option,
				#customize-control-font_content option, #customize-control-font_subtitle option, #customize-control-font_slogan option, #customize-control-font_title_slogan option {
				font-size:20px;
				height:40px;
				line-height:40px;
				padding: 0 7px;
				}
				
				
				/**			Safe Fonts 				**/
				
				option[value="Arial"] {
				font-family : Arial, sans-serif;
				}
				option[value="Georgia"] {
				font-family : Georgia, sans-serif;
				}
				option[value="Verdana"] {
				font-family : Verdana, sans-serif;
				}
				option[value="Times New Roman"] {
				font-family : Times new roman, sans-serif;
				}
				option[value="Trebuchet ms"] {
				font-family : Trebuchet ms, sans-serif;
				}
				option[value="Helvetica"] {
				font-family : Helvetica, sans-serif;
				}
				
				
				/**			Google Fonts 				**/
				
				option[value="Abel"] {
				font-family : Abel, sans-serif;
				}
				option[value="Arizonia"] {
				font-family : Arizonia, cursive;
				}
				option[value="Berkshire+Swash"] {
				font-family : 'Berkshire Swash', cursive;
				}
				option[value="Comfortaa"] {
				font-family : Comfortaa, sans-serif;
				}
				option[value="Cookie"] {
				font-family : Cookie, cursive;
				}
				option[value="Dosis"] {
				font-family : Dosis, sans-serif;
				}
				option[value="Droid+Sans"] {
				font-family : 'Droid Sans', sans-serif;
				}
				option[value="Comfortaa"] {
				font-family : Comfortaa, sans-serif;
				}
				option[value="Francois+One"] {
				font-family : 'Francois One', sans-serif;
				}
				option[value="Italianno"] {
				font-family : Italianno, cursive;
				}
				option[value="Lato"] {
				font-family : Lato, sans-serif;
				}
				option[value="Lobster"] {
				font-family : Lobster, sans-serif;
				}
				option[value="Lora"] {
				font-family : Lora, sans-serif;
				}
				option[value="Montserrat:700"] {
				font-family : Montserrat, sans-serif;
				}
				option[value="Oleo+Script"] {
				font-family : 'Oleo Script', sans-serif;
				}
				option[value="Open+Sans+Condensed:300"] {
				font-family : 'Open Sans Condensed', sans-serif;
				}
				option[value="Open+Sans"] {
				font-family : 'Open Sans', sans-serif;
				}
				option[value="Oswald"] {
				font-family : Oswald, sans-serif;
				}
				option[value="Oxygen"] {
				font-family : Oxygen, sans-serif;
				}
				option[value="PT+Sans+Narrow"] {
				font-family : 'PT Sans Narrow', sans-serif;
				}
				option[value="PT+Sans"] {
				font-family : 'PT Sans', sans-serif;
				}
				option[value="Prosto+One"] {
				font-family : 'Prosto One', cursive;
				}
				option[value="Quicksand"] {
				font-family : 'Quicksand', sans-serif;
				}
				option[value="Roboto+Condensed"] {
				font-family : 'Roboto Condensed', sans-serif;
				}
				option[value="Roboto"] {
				font-family : Roboto, sans-serif;
				}
				option[value="Rokkitt:400,700"] {
				font-family : Rokkitt, sans-serif;
				}
				option[value="Share"] {
				font-family : Share, cursive;
				}
				option[value="Source+Sans+Pro"] {
				font-family : 'Source Sans Pro', sans-serif;
				}
				option[value="Ubuntu+Condensed"] {
				font-family : 'Ubuntu Condensed', sans-serif;
				}
				option[value="Ubuntu"] {
				font-family : Ubuntu, sans-serif;
				}
				
			</style>
			<?php
		}
	}
	
	function none_sanitize_text( $input ) {
		return ( $input );
	}
	
       $wp_customize->add_section( 'general_section', array(
            'title'          => __( 'General' , 'joomspirit' ),
            'priority'       => 10,
        ) );
        

        	//	load Stylesheet
        	
					$wp_customize->add_setting( 'load_stylesheet', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Stylesheet_Control( $wp_customize, 'load_stylesheet', array(
						'label'   => '',
						'section' => 'general_section',
						'priority' => 0
					) ) );
			
				
			// Default Font size

					$wp_customize->add_setting( 'default_font_size', array(
						'default'        => '0.85em',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'default_font_size', array(
						'label'   => __( 'Default font size' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'select',
						'choices' => array(
						'0.55em' => __( 'smallest' , 'joomspirit' ),
						'0.65em' => __( 'small' , 'joomspirit' ),
						'0.75em' => __( 'normal' , 'joomspirit' ),
						'0.85em' => __( 'big' , 'joomspirit' ),
						'0.95em' => __( 'biggest' , 'joomspirit' ),
						'1.05em' => __( 'biggest +' , 'joomspirit' ),
						'1.15em' => __( 'biggest 2+' , 'joomspirit' ),
						'1.25em' => __( 'biggest 3+' , 'joomspirit' ),
						'1.35em' => __( 'biggest 4+' , 'joomspirit' ),
						'1.45em' => __( 'biggest 5+' , 'joomspirit' ),
						),
						'priority' => 10
					) );
					
	
			// General Color for text

					$wp_customize->add_setting( 'color_text_general', array(
						'default'        => '#818077',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_text_general', array(
						'label'   => __( 'General color of text' , 'joomspirit' ),
						'section' => 'general_section',
						'settings'   => 'color_text_general',
						'priority' => 20
					) ) );        
		

			 // Image border

					$wp_customize->add_setting( 'border_image', array(
						'default'        => 'js-border',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'border_image', array(
						'label'   => 'Border around each image',
						'section' => 'general_section',
						'type'    => 'select',
						'choices' => array(
						'js-border' => 'Yes',
						'no-js-border' => 'No',
						),
						'priority' => 25
					) );
					
					
			 // Uppercase

					$wp_customize->add_setting( 'uppercase', array(
						'default'        => 'uppercase-menu',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'uppercase', array(
						'label'   => 'Display all text in uppercase',
						'section' => 'general_section',
						'type'    => 'select',
						'choices' => array(
						'uppercase-none' => __( 'None' , 'joomspirit' ),
						'uppercase-menu' => __( 'Only the main menu' , 'joomspirit' ),
						'uppercase-menu-title' => __( 'Main menu, article and module titles' , 'joomspirit' ),
						'uppercase-all' => __( 'All the website' , 'joomspirit' ),
						),
						'priority' => 30
					) );

					
			 // Sticky menu

					$wp_customize->add_setting( 'sticky_menu', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'sticky_menu', array(
						'label'   => __( 'Main menu sticky' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'checkbox',
						'priority' => 40
					) );
					

			 // Scroll to top

					$wp_customize->add_setting( 'scroll_to_top', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'scroll_to_top', array(
						'label'   => __( 'Enable the button Scroll to top in the footer' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'checkbox',
						'priority' => 50
					) );


			 // Breadcrumb

					$wp_customize->add_setting( 'breadcrumb', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'breadcrumb', array(
						'label'   => __( 'Display the breadcrumb' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'checkbox',
						'priority' => 60
					) );
					
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_00', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_00', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'general_section',
						'priority' => 70
					) ) );					
									
					
			//	Length of Excerpt		
					
					$wp_customize->add_setting( 'length_excerpt', array(
						'default'        => '55',
						'sanitize_callback' => 'esc_html',
					) );		
					
					$wp_customize->add_control( 'length_excerpt', array(
						'type'        => 'range',
						'section'     => 'general_section',
						'label'       => __( 'Length of Excerpt for your Post' , 'joomspirit' ),
						'description' => __( 'Number of words betwwen 0 and 200' , 'joomspirit' ),
						'input_attrs' => array(
							'min'   => 0,
							'max'   => 200,
							'step'  => 5,
							'class' => 'test-class test',
							'style' => 'color: #0a0',
						),
						'priority'    => 80,
					) );
       

			//	Separator
				
					$wp_customize->add_setting( 'separator_05', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_05', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'general_section',
						'priority' => 85
					) ) );
					
					
			//	Number of columns for Posts

					$wp_customize->add_setting( 'columns_posts', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'columns_posts', array(
						'label'   => __( 'Number of columns for all your Posts' , 'joomspirit' ),
						'description' => __( 'always in a single column under 980 pixels' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'select',
						'choices' => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',			
						),
						'priority' => 90
					) );

			//	Exception single column for Posts

					$wp_customize->add_setting( 'single_column', array(
						'default'        => 'none',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'single_column', array(
						'label'   => __( 'Single column layout for a specific category' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'text',
						'priority' => 100
					) );

			//	Exception 2 columns for Posts

					$wp_customize->add_setting( 'two_columns', array(
						'default'        => 'none',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'two_columns', array(
						'label'   => __( '2 columns layout for a specific category' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'text',
						'priority' => 110
					) );

			//	Exception 3 columns for Posts

					$wp_customize->add_setting( 'three_columns', array(
						'default'        => 'none',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'three_columns', array(
						'label'   => __( '3 columns layout for a specific category' , 'joomspirit' ),
						'section' => 'general_section',
						'type'    => 'text',
						'priority' => 110
					) );
					
							
        
        $wp_customize->add_section( 'width_section', array(
            'title'          => __( 'Width' , 'joomspirit' ),
            'priority'       => 20,
        ) );      
        
					
			//	Width website

					$wp_customize->add_setting( 'width_website', array(
						'default'        => '980',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_website', array(
						'label'   => __( 'Width of your website in px or %' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'text',
						'input_attrs' => array(
        				'class' => 'separator',
        				),
						'priority' => 10
					) );        
	
			//	Type width size website

					$wp_customize->add_setting( 'type_width_size_website', array(
						'default'        => 'px',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'type_width_size_website', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 11
					) );
					
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_10', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_10', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'width_section',
						'priority' => 15
					) ) );
				
			//	Width Left column

					$wp_customize->add_setting( 'width_left', array(
						'default'        => '200',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_left', array(
						'label'   => __( 'Width of your Left column in px or %' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'text',
						'priority' => 20
					) );
	
			//	Type width size left column

					$wp_customize->add_setting( 'type_width_size_left', array(
						'default'        => 'px',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'type_width_size_left', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 21
					) );
					
			//	Width Right column

					$wp_customize->add_setting( 'width_right', array(
						'default'        => '200',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_right', array(
						'label'   => __( 'Width of your Right column in px or %' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'text',
						'priority' => 30
					) );
	
			//	Type width size right column

					$wp_customize->add_setting( 'type_width_size_right', array(
						'default'        => 'px',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'type_width_size_right', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 31
					) );
					
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_20', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_20', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'width_section',
						'priority' => 35
					) ) );
					
			//	Width User1

					$wp_customize->add_setting( 'width_user1', array(
						'default'        => '30',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_user1', array(
						'label'   => __( 'Width of User1 position in %' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'text',
						'priority' => 40
					) );

					
			//	Width User3

					$wp_customize->add_setting( 'width_user3', array(
						'default'        => '30',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_user3', array(
						'label'   => __( 'Width of User3 position in %' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'text',
						'priority' => 50
					) );

					
			//	Width User4

					$wp_customize->add_setting( 'width_user4', array(
						'default'        => '30',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_user4', array(
						'label'   => __( 'Width of User4 position in %' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'text',
						'priority' => 60
					) );
					

			//	Width User6

					$wp_customize->add_setting( 'width_user6', array(
						'default'        => '30',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_user6', array(
						'label'   => __( 'Width of User6 position in %' , 'joomspirit' ),
						'section' => 'width_section',
						'type'    => 'text',
						'priority' => 70
					) );				



        $wp_customize->add_section( 'website_title_section', array(
            'title'          => __( 'Logo or Website title' , 'joomspirit' ),
            'description'	 => __( 'Upload your image logo OR display a website title and a subtitle' , 'joomspirit' ),
            'priority'       => 30,
        ) );
        

       		 // Logo image
       		 
					$wp_customize->add_setting( 'logo_image', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image', array(
						'label'   => __( 'Your logo image' , 'joomspirit' ),
						'section' => 'website_title_section',
						'settings'   => 'logo_image',
						'priority' => 1
					) ) );
        

			//	Separator
				
					$wp_customize->add_setting( 'separator_30', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_30', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'website_title_section',
						'priority' => 5
					) ) );
					
					
			//	Website title

					$wp_customize->add_setting( 'website_title', array(
						'default'        => 'WP Spirit 01',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'website_title', array(
						'label'   => __( 'Your website title' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'text',
						'priority' => 10
					) );         
			
			
			// Color of website title

					$wp_customize->add_setting( 'color_website_title', array(
						'default'        => '#A2A095',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_website_title', array(
						'label'   => __( 'Color of your website title' , 'joomspirit' ),
						'section' => 'website_title_section',
						'settings'   => 'color_website_title',
						'priority' => 20
					) ) ); 

					
			//	Font website title

					$wp_customize->add_setting( 'font_website_title', array(
						'default'        => 'Italianno',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'font_website_title', array(
						'label'   => __( 'Font of your website title' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 30
					) );				

		
			//	Custom font for your website title

					$wp_customize->add_setting( 'custom_font_website_title', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_website_title', array(
						'label'   => __( 'New Google font for your website title' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'text',
						'priority' => 40
					) ); 

	
			//	Font size for your website title

					$wp_customize->add_setting( 'website_title_fontsize', array(
						'default'        => '80',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'website_title_fontsize', array(
						'label'   => __( 'Font size of your website title' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'text',
						'priority' => 50
					) );

			//	Type Font size website title

					$wp_customize->add_setting( 'type_font_size_website_title', array(
						'default'        => 'px',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'type_font_size_website_title', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 51
					) );
					
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_40', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_40', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'website_title_section',
						'priority' => 55
					) ) );
					
	
			//
			//	Website subtitle
			//
					
					$wp_customize->add_setting( 'subtitle', array(
						'default'        => 'by JoomSpirit',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'subtitle', array(
						'label'   => __( 'Your subtitle' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'text',
						'priority' => 60
					) );         
			
			
			// Color of your subtitle

					$wp_customize->add_setting( 'color_subtitle', array(
						'default'        => '#5F9839',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_subtitle', array(
						'label'   => __( 'Color of your subtitle' , 'joomspirit' ),
						'section' => 'website_title_section',
						'settings'   => 'color_subtitle',
						'priority' => 70
					) ) ); 
					
			//	Font subtitle

					$wp_customize->add_setting( 'font_subtitle', array(
						'default'        => 'Dosis',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'font_subtitle', array(
						'label'   => __( 'Font of your subtitle' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 80
					) );				
		

			//	Custom font for your subtitle

					$wp_customize->add_setting( 'custom_font_subtitle', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_subtitle', array(
						'label'   => __( 'New Google font for your subtitle' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'text',
						'priority' => 90
					) ); 
	

			//	Font size for your subtitle

					$wp_customize->add_setting( 'subtitle_fontsize', array(
						'default'        => '20',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'subtitle_fontsize', array(
						'label'   => __( 'Font size of your subtitle' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'text',
						'priority' => 100
					) );
				

			//	Type Font size subtitle

					$wp_customize->add_setting( 'type_font_size_subtitle', array(
						'default'        => 'px',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'type_font_size_subtitle', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'website_title_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 101
					) );
					
					

        $wp_customize->add_section( 'main_menu_section', array(
            'title'          => __( 'Main menu' , 'joomspirit' ),
            'priority'       => 40,
        ) );
        
        
			// Color main menu item

					$wp_customize->add_setting( 'color_main_menu_item', array(
						'default'        => '#A2A095',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_main_menu_item', array(
						'label'   => __( 'Color of the main menu item' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'settings'   => 'color_main_menu_item',
						'priority' => 10
					) ) );         
			

			// Color main menu item active

					$wp_customize->add_setting( 'color_main_menu_item_active', array(
						'default'        => '#5F9839',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_main_menu_item_active', array(
						'label'   => __( 'Color of the main menu item active' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'settings'   => 'color_main_menu_item_active',
						'priority' => 10
					) ) );        

	
			//	Font main menu item

					$wp_customize->add_setting( 'font_menu', array(
						'default'        => 'Dosis',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( 'font_menu', array(
						'label'   => __( 'Font of your main menu' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 30
					) );
					
					
			//	Custom font for the main menu item

					$wp_customize->add_setting( 'custom_font_menu', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_menu', array(
						'label'   => __( 'New Google font for the main menu item' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'type'    => 'text',
						'priority' => 40
					) ); 

	
			//	Font size for the main menu item

					$wp_customize->add_setting( 'main_menu_fontsize', array(
						'default'        => '140',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'main_menu_fontsize', array(
						'label'   => __( 'Font size for the main menu item' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'type'    => 'text',
						'priority' => 50
					) );				


			//	Type Font size main menu

					$wp_customize->add_setting( 'type_font_size_main_menu', array(					
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_font_size_main_menu', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 51
					) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_50', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_50', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'priority' => 55
					) ) );
					
					
			//	Text in the single button

					$wp_customize->add_setting( 'text_menu', array(
						'default'        => 'menu',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'text_menu', array(
						'label'   => __( 'Text in the menu button (small screen)' , 'joomspirit' ),
						'section' => 'main_menu_section',
						'type'    => 'text',
						'priority' => 60
					) );

					
        $wp_customize->add_section( 'slideshow_section', array(
            'title'          => __( 'Slideshow' , 'joomspirit' ),
            'priority'       => 50,
        ) );


        	//	Width of the position Image
        	
					$wp_customize->add_setting( 'width_image', array(
						'default'        => '100',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'width_image', array(
						'label'   => __( 'Width of your Image position (slideshow) in px or %' , 'joomspirit' ),
						'section' => 'slideshow_section',
						'type'    => 'text',
						'priority' => 10
					) );

			//	Type width image

					$wp_customize->add_setting( 'type_width_size_image', array(
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_width_size_image', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'slideshow_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 11
					) );
					
			
			// Background color of Image position
			
					$wp_customize->add_setting( 'bg_image', array(
						'default'        => '#ffffff',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_image', array(
						'label'   => __( 'Background color of Image position' , 'joomspirit' ),
						'section' => 'slideshow_section',
						'settings'   => 'bg_image',
						'priority' => 20
					) ) );  


			// Fade around the Image position
			
					$wp_customize->add_setting( 'fade_image', array(
						'default'        => 'fade02',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'fade_image', array(
						'label'   => __( 'Fade above the Image position' , 'joomspirit' ),
						'section' => 'slideshow_section',
						'type'    => 'select',
						'choices' => array(
						'no' => 'No fade',
						'fade01' => 'Fade 01',
						'fade02' => 'Fade 02',
						),
						'priority' => 30
					) );


        $wp_customize->add_section( 'content_box_section', array(
            'title'          => __( 'Content box' , 'joomspirit' ),
            'priority'       => 70,
        ) );


			// Color of H1 title

					$wp_customize->add_setting( 'colorh1', array(
						'default'        => '#5F9839',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorh1', array(
						'label'   => __( 'Color for article title (H1)' , 'joomspirit' ),
						'section' => 'content_box_section',
						'settings'   => 'colorh1',
						'priority' => 10
					) ) ); 
					
			//	Font article title

					$wp_customize->add_setting( 'font_h1', array(
						'default'        => 'Dosis',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'font_h1', array(
						'label'   => __( 'Font for article title (h1)' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 20
					) );				
		

			//	Custom font for your article title

					$wp_customize->add_setting( 'custom_font_h1', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_h1', array(
						'label'   => __( 'New Google font for article title (h1)' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 30
					) ); 
	

			//	Font size for your article title

					$wp_customize->add_setting( 'h1_fontsize', array(
						'default'        => '220',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'h1_fontsize', array(
						'label'   => __( 'Font size of your article title (h1)' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 40
					) );
					
			//	Type Font size h1 title

					$wp_customize->add_setting( 'type_font_size_h1', array(
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_font_size_h1', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 41
					) );
					

			//	Separator
				
					$wp_customize->add_setting( 'separator_70', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_70', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'content_box_section',
						'priority' => 45
					) ) );
					
					
			// Color of H2 title

					$wp_customize->add_setting( 'colorh2', array(
						'default'        => '#5B3D00',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorh2', array(
						'label'   => __( 'Color for titles h2' , 'joomspirit' ),
						'section' => 'content_box_section',
						'settings'   => 'colorh2',
						'priority' => 50
					) ) ); 
					
			//	Font h2 title

					$wp_customize->add_setting( 'font_h2', array(
						'default'        => 'Dosis',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'font_h2', array(
						'label'   => __( 'Font for widget titles, H2, H3, H4 and H5' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 60
					) );				
		

			//	Custom font for h2 title

					$wp_customize->add_setting( 'custom_font_h2', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_h2', array(
						'label'   => __( 'New Google font for widget titles, H2, H3, H4 and H5' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 70
					) ); 					


			//	Font size for your widget titles

					$wp_customize->add_setting( 'widget_title_fontsize', array(
						'default'        => '130',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'widget_title_fontsize', array(
						'label'   => __( 'Font size of your widget titles' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 80
					) );
					

			//	Type Font size Widget title

					$wp_customize->add_setting( 'type_font_size_widget', array(
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_font_size_widget', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 81
					) );
					
			//	Font size for your h2 titles

					$wp_customize->add_setting( 'h2_fontsize', array(
						'default'        => '150',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'h2_fontsize', array(
						'label'   => __( 'Font size of your h2 titles' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 90
					) );
					

			//	Type Font size h2 title

					$wp_customize->add_setting( 'type_font_size_h2', array(
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_font_size_h2', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 91
					) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_80', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_80', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'content_box_section',
						'priority' => 95
					) ) );

				
			//	Font size for your h3 titles
			
					$wp_customize->add_setting( 'h3_fontsize', array(
						'default'        => '115',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'h3_fontsize', array(
						'label'   => __( 'Font size of your h3 titles' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 100
					) );

			//	Type Font size h3 title

					$wp_customize->add_setting( 'type_font_size_h3', array(
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_font_size_h3', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 101
					) );					
					
			//	Font size for your h4 titles

					$wp_customize->add_setting( 'h4_fontsize', array(
						'default'        => '110',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'h4_fontsize', array(
						'label'   => __( 'Font size of your h4 titles' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 110
					) );
					
			//	Type Font size h4 title

					$wp_customize->add_setting( 'type_font_size_h4', array(
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_font_size_h4', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 111
					) );
					
			//	Font size for your h5 titles

					$wp_customize->add_setting( 'h5_fontsize', array(
						'default'        => '100',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'h5_fontsize', array(
						'label'   => __( 'Font size of your h5 titles' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 120
					) );
					
			//	Type Font size h5 title

					$wp_customize->add_setting( 'type_font_size_h5', array(
						'sanitize_callback' => 'esc_html',
						'default'        => '&#37;',
					) );
			
					$wp_customize->add_control( 'type_font_size_h5', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 121
					) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_90', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_90', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'content_box_section',
						'priority' => 125
					) ) );
					
				
			//	Font content

					$wp_customize->add_setting( 'font_content', array(
						'default'        => 'Helvetica',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'font_content', array(
						'label'   => __( 'Font for your content' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 130
					) );				
		

			//	Custom font for your content

					$wp_customize->add_setting( 'custom_font_content', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_content', array(
						'label'   => __( 'New Google font for your content' , 'joomspirit' ),
						'section' => 'content_box_section',
						'type'    => 'text',
						'priority' => 140
					) );
					


			//	Separator
				
					$wp_customize->add_setting( 'separator_100', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_100', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'content_box_section',
						'priority' => 145
					) ) );
					
					
			// Color of links

					$wp_customize->add_setting( 'color_link', array(
						'default'        => '#5f9839',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link', array(
						'label'   => __( 'Color for your links' , 'joomspirit' ),
						'section' => 'content_box_section',
						'settings'   => 'color_link',
						'priority' => 150
					) ) );
					

			// Color of links hover

					$wp_customize->add_setting( 'color_link_hover', array(
						'default'        => '#0099cc',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link_hover', array(
						'label'   => __( 'Color for active and hover links' , 'joomspirit' ),
						'section' => 'content_box_section',
						'settings'   => 'color_link_hover',
						'priority' => 160
					) ) );
					

        $wp_customize->add_section( 'social_icons_section', array(
            'title'          => __( 'Social icons' , 'joomspirit' ),
            'priority'       => 80,
        ) );


        	//	Text of social icons
        	
					$wp_customize->add_setting( 'text_social_icons', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'text_social_icons', array(
						'label'   => __( 'Text before your social icons' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'text',
						'priority' => 10
					) );
					
					
			// Color of social icons text

					$wp_customize->add_setting( 'color_text_social', array(
						'default'        => '#A2A095',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_text_social', array(
						'label'   => __( 'Color of the text' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'settings'   => 'color_text_social',
						'priority' => 20
					) ) );


			//	Separator
				
					$wp_customize->add_setting( 'separator_110', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_110', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'priority' => 25
					) ) );
					
					
        	//	Twitter URL
        	
					$wp_customize->add_setting( 'twitter', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'twitter', array(
						'label'   => __( 'Twitter URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 30
					) );
					

        	//	Facebook URL
        	
					$wp_customize->add_setting( 'facebook', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'facebook', array(
						'label'   => __( 'Facebook URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 40
					) );
					

        	//	RSS URL
        	
					$wp_customize->add_setting( 'rss', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'rss', array(
						'label'   => __( 'RSS URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 50
					) );
					
					
        	//	Linkedin URL
        	
					$wp_customize->add_setting( 'linkedin', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'linkedin', array(
						'label'   => __( 'Linkedin URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 60
					) );
							
					
        	//	Google+ URL
        	
					$wp_customize->add_setting( 'google', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'google', array(
						'label'   => __( 'Google+ URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 70
					) );
					
					
        	//	Instagram URL
        	
					$wp_customize->add_setting( 'instagram', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'instagram', array(
						'label'   => __( 'Instagram URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 80
					) );
					
					
        	//	Pinterest URL
        	
					$wp_customize->add_setting( 'pinterest', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'pinterest', array(
						'label'   => __( 'Pinterest URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 90
					) );


        	//	Renren URL
        	
					$wp_customize->add_setting( 'renren', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'renren', array(
						'label'   => __( 'Renren URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 100
					) );
					
					
        	//	Weibo URL
        	
					$wp_customize->add_setting( 'weibo', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'weibo', array(
						'label'   => __( 'Weibo URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 110
					) );
					
					
        	//	Xing URL
        	
					$wp_customize->add_setting( 'xing', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'xing', array(
						'label'   => __( 'Xing URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 120
					) );
					
					
        	//	Flickr URL
        	
					$wp_customize->add_setting( 'flickr', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'flickr', array(
						'label'   => __( 'Flickr URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 130
					) );
					
					
        	//	Youtube URL
        	
					$wp_customize->add_setting( 'youtube', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'youtube', array(
						'label'   => __( 'Youtube URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 140
					) );
					
					
        	//	Vimeo URL
        	
					$wp_customize->add_setting( 'vimeo', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'vimeo', array(
						'label'   => __( 'Vimeo URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 150
					) );
					
					
        	//	Tumblr URL
        	
					$wp_customize->add_setting( 'tumblr', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'tumblr', array(
						'label'   => __( 'Tumblr URL' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'text',
						'priority' => 160
					) );


        	//	Google +1
        	
					$wp_customize->add_setting( 'google1', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'google1', array(
						'label'   => __( 'Display Google+1 button' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'checkbox',
						'priority' => 170
					) );


			//	Separator
				
					$wp_customize->add_setting( 'separator_120', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_120', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'priority' => 175
					) ) );
					
					
        	//	Custom icon 01 URL
        	
					$wp_customize->add_setting( 'custom_icon01', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'custom_icon01', array(
						'label'   => __( 'Url of a first custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 180
					) );


        	//	Text on mouse hover custom icon 01 URL
        	
					$wp_customize->add_setting( 'custom_icon01_text', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_icon01_text', array(
						'label'   => __( 'Text on mouse hover for your first custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'text',
						'priority' => 190
					) );
					
					
        	//	Image of Custom icon 01
        	
					$wp_customize->add_setting( 'custom_icon01_img', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_icon01_img', array(
						'label'   => __( 'Image for your first custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'settings'   => 'custom_icon01_img',
						'priority' => 200
					) ) );



			//	Separator
				
					$wp_customize->add_setting( 'separator_130', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_130', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'priority' => 205
					) ) );
					
					
        	//	Custom icon 02 URL
        	
					$wp_customize->add_setting( 'custom_icon02', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'custom_icon02', array(
						'label'   => __( 'Url of a second custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 210
					) );


        	//	Text on mouse hover custom icon 02 URL
        	
					$wp_customize->add_setting( 'custom_icon02_text', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_icon02_text', array(
						'label'   => __( 'Text on mouse hover for your second custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'text',
						'priority' => 220
					) );
					
					
        	//	Image of Custom icon 02
        	
					$wp_customize->add_setting( 'custom_icon02_img', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_icon02_img', array(
						'label'   => __( 'Image for your second custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'settings'   => 'custom_icon02_img',
						'priority' => 230
					) ) );
					

			//	Separator
				
					$wp_customize->add_setting( 'separator_140', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_140', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'priority' => 235
					) ) );
					
					
        	//	Custom icon 03 URL
        	
					$wp_customize->add_setting( 'custom_icon03', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'custom_icon03', array(
						'label'   => __( 'Url of a third custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 240
					) );


        	//	Text on mouse hover custom icon 03 URL
        	
					$wp_customize->add_setting( 'custom_icon03_text', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_icon03_text', array(
						'label'   => __( 'Text on mouse hover for your third custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'text',
						'priority' => 250
					) );
					
					
        	//	Image of Custom icon 03
        	
					$wp_customize->add_setting( 'custom_icon03_img', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_icon03_img', array(
						'label'   => __( 'Image for your third custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'settings'   => 'custom_icon03_img',
						'priority' => 260
					) ) );


			//	Separator
				
					$wp_customize->add_setting( 'separator_150', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_150', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'priority' => 265
					) ) );
					
					
        	//	Custom icon 04 URL
        	
					$wp_customize->add_setting( 'custom_icon04', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( 'custom_icon04', array(
						'label'   => __( 'Url of a fourth custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'url',
						'priority' => 270
					) );


        	//	Text on mouse hover custom icon 04 URL
        	
					$wp_customize->add_setting( 'custom_icon04_text', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_icon04_text', array(
						'label'   => __( 'Text on mouse hover for your fourth custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'type'    => 'text',
						'priority' => 280
					) );
					
					
        	//	Image of Custom icon 04
        	
					$wp_customize->add_setting( 'custom_icon04_img', array(
						'default'        => '',
						'sanitize_callback' => 'esc_url_raw',
					) );
			
					$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_icon04_img', array(
						'label'   => __( 'Image for your fourth custom social link' , 'joomspirit' ),
						'section' => 'social_icons_section',
						'settings'   => 'custom_icon04_img',
						'priority' => 290
					) ) );



        $wp_customize->add_section( 'responsive_design_section', array(
            'title'          => __( 'Responsive design' , 'joomspirit' ),
            'priority'       => 90,
        ) );
        

        	//	Enable Responsive feature
        	
					$wp_customize->add_setting( 'responsive', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'responsive', array(
						'label'   => __( 'Enable responsive feature' , 'joomspirit' ),
						'section' => 'responsive_design_section',
						'type'    => 'checkbox',
						'priority' => 10
					) );



        $wp_customize->add_section( 'animations_section', array(
            'title'          => __( 'Animations' , 'joomspirit' ),
            'priority'       => 100,
        ) );
        
					
        	//	Enable animations code
        	
					$wp_customize->add_setting( 'animation', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation', array(
						'label'   => __( 'Disable all animations' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 10
					) );
 


			//	Separator
				
					$wp_customize->add_setting( 'separator_160', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_160', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 15
					) ) );
					
					
         	//	Enable Social icons animation
        	
					$wp_customize->add_setting( 'animation_social', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_social', array(
						'label'   => __( 'Enable animation for Social icons' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 20
					) );
					
        	//	Text Social icons animation
        	
					$wp_customize->add_setting( 'animation_social_text', array(
						'default'        => 'enter top move 10px after 1.5s over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_social_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 30
					) ) );


			//	Separator
				
					$wp_customize->add_setting( 'separator_170', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_170', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 35
					) ) );
					
					
         	//	Enable logo animation
        	
					$wp_customize->add_setting( 'animation_logo', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_logo', array(
						'label'   => __( 'Enable animation for your Logo' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 40
					) );
					
        	//	Text Logo animation
        	
					$wp_customize->add_setting( 'animation_logo_text', array(
						'default'        => 'enter top move 10px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_logo_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 50
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_180', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_180', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 55
					) ) );
					
					
         	//	Enable menu animation
        	
					$wp_customize->add_setting( 'animation_menu', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_menu', array(
						'label'   => __( 'Enable animation for your main menu' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 60
					) );
					
        	//	Text Menu animation
        	
					$wp_customize->add_setting( 'animation_menu_text', array(
						'default'        => 'enter top move 10px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_menu_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 70
					) ) );					
					
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_190', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_190', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 75
					) ) );
					
					
         	//	Enable Image animation
        	
					$wp_customize->add_setting( 'animation_image', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_image', array(
						'label'   => __( 'Enable animation for the position Image' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 80
					) );
					
        	//	Text Image animation
        	
					$wp_customize->add_setting( 'animation_image_text', array(
						'default'        => 'enter top move 10px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_image_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 90
					) ) );					
					

			//	Separator
				
					$wp_customize->add_setting( 'separator_92', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_92', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 92
					) ) );
					
					
         	//	Enable Slogan animation
        	
					$wp_customize->add_setting( 'animation_slogan', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_slogan', array(
						'label'   => __( 'Enable animation for the Slogan' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 93
					) );
					
        	//	Text Slogan animation
        	
					$wp_customize->add_setting( 'animation_slogan_text', array(
						'default'        => 'enter bottom move 30px over 2.0s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_slogan_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 94
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_200', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_200', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 95
					) ) );
					
					
         	//	Enable Top animation
        	
					$wp_customize->add_setting( 'animation_top', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_top', array(
						'label'   => __( 'Enable animation for the position Top' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 100
					) );
					
        	//	Text Top animation
        	
					$wp_customize->add_setting( 'animation_top_text', array(
						'default'        => 'enter top move 10px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_top_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 110
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_210', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_210', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 115
					) ) );
					
					
         	//	Enable Left animation
        	
					$wp_customize->add_setting( 'animation_left', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_left', array(
						'label'   => __( 'Enable animation for the position Left' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 120
					) );
					
        	//	Text Left animation
        	
					$wp_customize->add_setting( 'animation_left_text', array(
						'default'        => 'enter left wait 0.3s move 20px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_social_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 130
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_220', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_220', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 135
					) ) );
					
					
         	//	Enable Right animation
        	
					$wp_customize->add_setting( 'animation_right', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_right', array(
						'label'   => __( 'Enable animation for the position Right' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 140
					) );
					
        	//	Text Right animation
        	
					$wp_customize->add_setting( 'animation_right_text', array(
						'default'        => 'enter right wait 0.3s move 20px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_right_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 150
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_230', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_230', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 155
					) ) );
					
					
         	//	Enable User1 animation
        	
					$wp_customize->add_setting( 'animation_user1', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_user1', array(
						'label'   => __( 'Enable animation for the position User1' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 160
					) );
					
        	//	Text User1 animation
        	
					$wp_customize->add_setting( 'animation_user1_text', array(
						'default'        => 'enter left move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_user1_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 170
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_240', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_240', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 175
					) ) );
					
					
         	//	Enable User2 animation
        	
					$wp_customize->add_setting( 'animation_user2', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_user2', array(
						'label'   => __( 'Enable animation for the position User2' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 180
					) );
					
        	//	Text User2 animation
        	
					$wp_customize->add_setting( 'animation_user2_text', array(
						'default'        => 'enter top move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_user2_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 190
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_250', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_250', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 195
					) ) );
					
					
         	//	Enable User3 animation
        	
					$wp_customize->add_setting( 'animation_user3', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_user3', array(
						'label'   => __( 'Enable animation for the position User3' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 200
					) );
					
        	//	Text User3 animation
        	
					$wp_customize->add_setting( 'animation_user3_text', array(
						'default'        => 'enter right move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_user3_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 210
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_260', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_260', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 215
					) ) );
					
					
         	//	Enable Article animation
        	
					$wp_customize->add_setting( 'animation_article', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_article', array(
						'label'   => __( 'Enable animation for the Article(s)' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 220
					) );
					
        	//	Text Article animation
        	
					$wp_customize->add_setting( 'animation_article_text', array(
						'default'        => 'enter top move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_article_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 230
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_270', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_270', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 235
					) ) );
					
					
         	//	Enable User4 animation
        	
					$wp_customize->add_setting( 'animation_user4', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_user4', array(
						'label'   => __( 'Enable animation for the position User4' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 240
					) );
					
        	//	Text User4 animation
        	
					$wp_customize->add_setting( 'animation_user4_text', array(
						'default'        => 'enter left move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_user4_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 250
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_280', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_280', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 255
					) ) );
					
					
         	//	Enable User5 animation
        	
					$wp_customize->add_setting( 'animation_user5', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_user5', array(
						'label'   => __( 'Enable animation for the position User5' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 260
					) );
					
        	//	Text User5 animation
        	
					$wp_customize->add_setting( 'animation_user5_text', array(
						'default'        => 'enter top move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_user5_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 270
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_290', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_290', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 275
					) ) );
					
					
         	//	Enable User6 animation
        	
					$wp_customize->add_setting( 'animation_user6', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_user6', array(
						'label'   => __( 'Enable animation for the position User6' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 280
					) );
					
        	//	Text User6 animation
        	
					$wp_customize->add_setting( 'animation_user6_text', array(
						'default'        => 'enter right move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_user6_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 290
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_300', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_300', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 295
					) ) );
					
					
         	//	Enable Bottom animation
        	
					$wp_customize->add_setting( 'animation_bottom', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_bottom', array(
						'label'   => __( 'Enable animation for the position Bottom' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 300
					) );
					
        	//	Text Bottom animation
        	
					$wp_customize->add_setting( 'animation_bottom_text', array(
						'default'        => 'enter top move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_bottom_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 310
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_310', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_310', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 315
					) ) );
					
					
         	//	Enable Bottom menu animation
        	
					$wp_customize->add_setting( 'animation_bottom_menu', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_bottom_menu', array(
						'label'   => __( 'Enable animation for the position Bottom menu' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 320
					) );
					
        	//	Text Bottom menu animation
        	
					$wp_customize->add_setting( 'animation_bottom_menu_text', array(
						'default'        => 'enter top move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_bottom_menu_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 330
					) ) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_320', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_320', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 335
					) ) );
					
					
         	//	Enable Address animation
        	
					$wp_customize->add_setting( 'animation_address', array(
						'default'        => '1',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'animation_address', array(
						'label'   => __( 'Enable animation for the position Address' , 'joomspirit' ),
						'section' => 'animations_section',
						'type'    => 'checkbox',
						'priority' => 340
					) );
					
        	//	Text Address animation
        	
					$wp_customize->add_setting( 'animation_address_text', array(
						'default'        => 'enter top move 12px over 1.33s',
						'sanitize_callback' => 'esc_html',
					) );

					$wp_customize->add_control( new Textarea_2_Control( $wp_customize, 'animation_address_text', array(
						'label'   => __( 'Customize this effect' , 'joomspirit' ),
						'section' => 'animations_section',
						'priority' => 350
					) ) );
										
					
        $wp_customize->add_section( 'google_analytics_section', array(
            'title'          => __( 'Google analytics' , 'joomspirit' ),
            'priority'       => 110,
        ) );
        

        	//	Google code
        	
					$wp_customize->add_setting( 'google_code', array(
						'default'        => '',
						'sanitize_callback' => 'none_sanitize_text',
					) );
			
					$wp_customize->add_control( new Textarea_5_Control( $wp_customize, 'google_code', array(
						'label'   => __( 'Paste your tracking code' , 'joomspirit' ),
						'section' => 'google_analytics_section',
						'priority' => 10
					) ) );
					

        $wp_customize->add_section( 'contact_page', array(
            'title'         => __( 'Contact Page' , 'joomspirit' ),
            'description'  =>  __( 'You must use the Shortcode of your contact form. To obtain that, install the plugin of your choice and paste the code' , 'joomspirit' ),
            'priority'      => 120,
        ) );
        

        	//	Shortcode of the contact form
        	
					$wp_customize->add_setting( 'shortcode_contact_form', array(
						'default'        => '',
						'sanitize_callback' => 'ent2ncr',
					) );
			
					$wp_customize->add_control( 'shortcode_contact_form', array(
						'label'   => __( 'The shortcode of your contact form' , 'joomspirit' ),
						'section' => 'contact_page',
						'type'    => 'text',
						'priority' => 15
					) );
					

			//	Separator
				
					$wp_customize->add_setting( 'separator_345', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_345', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'contact_page',
						'priority' => 18
					) ) );					
					
			//	Position form contact

					$wp_customize->add_setting( 'position_form_contact', array(
						'default'        => 'right',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'position_form_contact', array(
						'label'   => __( 'Position of the contact form' , 'joomspirit' ),
						'section' => 'contact_page',
						'type'    => 'radio',
						'choices' => array(
						'left' => __( 'Left side' , 'joomspirit' ),
						'right' => __( 'Right side' , 'joomspirit' ),			
						),
						'priority' => 20
					) );
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_350', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_350', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'contact_page',
						'priority' => 25
					) ) );
					
        	//	Google map
        	
					$wp_customize->add_setting( 'google_map', array(
						'default'        => '',
						'sanitize_callback' => 'ent2ncr',
					) );
			
					$wp_customize->add_control( new Textarea_5_Control( $wp_customize, 'google_map', array(
						'label'   => __( 'Paste the embed code of your Google map (optionnal)' , 'joomspirit' ),
						'section' => 'contact_page',
						'priority' => 30
					) ) );					
					

        $wp_customize->add_section( 'home_page', array(
            'title'         => __( 'Home page slogan' , 'joomspirit' ),
            'description' 	=> __( 'You can display a slogan under the slideshow. This option is only active in the Home page' , 'joomspirit' ),
            'priority'      => 200,
        ) );
        

			//	Title slogan

					$wp_customize->add_setting( 'title_slogan', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'title_slogan', array(
						'label'   => __( 'Title of your slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'text',
						'priority' => 10
					) );         
			
			
			// Color of title slogan

					$wp_customize->add_setting( 'color_title_slogan', array(
						'default'        => '#5F9839',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_title_slogan', array(
						'label'   => __( 'Color of your title slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'settings'   => 'color_title_slogan',
						'priority' => 20
					) ) ); 

					
			//	Font title slogan

					$wp_customize->add_setting( 'font_title_slogan', array(
						'default'        => 'Italianno',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'font_title_slogan', array(
						'label'   => __( 'Font of your title slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 30
					) );				

		
			//	Custom font for your title slogan

					$wp_customize->add_setting( 'custom_font_title_slogan', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_title_slogan', array(
						'label'   => __( 'New Google font for your website title' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'text',
						'priority' => 40
					) ); 

	
			//	Font size for your title slogan

					$wp_customize->add_setting( 'title_slogan_fontsize', array(
						'default'        => '50',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'title_slogan_fontsize', array(
						'label'   => __( 'Font size of your title slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'text',
						'priority' => 50
					) );

			//	Type Font size title slogan

					$wp_customize->add_setting( 'type_font_size_title_slogan', array(
						'default'        => 'px',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'type_font_size_title_slogan', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 51
					) );
					
					
			//	Separator
				
					$wp_customize->add_setting( 'separator_330', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
					
					$wp_customize->add_control( new Separator_Control( $wp_customize, 'separator_330', array(
						'label'   => __( 'separator' , 'joomspirit' ),
						'section' => 'home_page',
						'priority' => 55
					) ) );
					
	
			//
			//	Slogan
			//
					
					$wp_customize->add_setting( 'slogan', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'slogan', array(
						'label'   => __( 'Your slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'text',
						'priority' => 60
					) );         
			
			
			// Color of your slogan

					$wp_customize->add_setting( 'color_slogan', array(
						'default'        => '#A2A095',
						'sanitize_callback' => 'sanitize_hex_color',
					) );
			
					$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_slogan', array(
						'label'   => __( 'Color of your slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'settings'   => 'color_slogan',
						'priority' => 70
					) ) ); 
					
			//	Font slogan

					$wp_customize->add_setting( 'font_slogan', array(
						'default'        => 'Dosis',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'font_slogan', array(
						'label'   => __( 'Font of your slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'select',
						'choices' => array(
						'Abel' => 'Abel',
						'Arial' => 'Arial *',
						'Arizonia' => 'Arizonia',
						'Berkshire+Swash' => 'Berkshire Swash',
						'Comfortaa' => 'Comfortaa',
						'Cookie' => 'Cookie',
						'Dosis' => 'Dosis',
						'Droid+Sans' => 'Droid Sans',
						'Francois+One' => 'Francois One',
						'Georgia' => 'Georgia *',
						'Helvetica' => 'Helvetica *',
						'Italianno' => 'Italianno',
						'Lato' => 'Lato',
						'Lobster' => 'Lobster',
						'Lora' => 'Lora',
						'Montserrat:700' => 'Montserrat bold',
						'Oleo+Script' => 'Oleo Script',		
						'Open+Sans+Condensed:300' => 'Open Sans Condensed',
						'Open+Sans' => 'Open Sans',
						'Oswald' => 'Oswald',
						'Oxygen' => 'Oxygen',
						'PT+Sans+Narrow' => 'PT Sans Narrow',
						'PT+Sans' => 'PT Sans',
						'Prosto+One' => 'Prosto One',
						'Quicksand' => 'Quicksand',
						'Roboto+Condensed' => 'Roboto Condensed',
						'Roboto' => 'Roboto',
						'Rokkitt:400,700' => 'Rokkitt bold',
						'Share, cursive' => 'Share',
						'Source+Sans+Pro' => 'Source Sans Pro',
						'Times New Roman' => 'Times New Roman *',
						'Trebuchet ms' => 'Trebuchet ms *',
						'Ubuntu+Condensed' => 'Ubuntu Condensed',
						'Ubuntu' => 'Ubuntu',
						'Verdana' => 'Verdana *',					
						),
						'priority' => 80
					) );				
		
			//	Custom font for your slogan

					$wp_customize->add_setting( 'custom_font_slogan', array(
						'default'        => '',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'custom_font_slogan', array(
						'label'   => __( 'New Google font for your slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'text',
						'priority' => 90
					) ); 
	

			//	Font size for your slogan

					$wp_customize->add_setting( 'slogan_fontsize', array(
						'default'        => '20',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'slogan_fontsize', array(
						'label'   => __( 'Font size of your slogan' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'text',
						'priority' => 100
					) );
				

			//	Type Font size slogan

					$wp_customize->add_setting( 'type_font_size_slogan', array(
						'default'        => 'px',
						'sanitize_callback' => 'esc_html',
					) );
			
					$wp_customize->add_control( 'type_font_size_slogan', array(
						'label'   => __( '% or px' , 'joomspirit' ),
						'section' => 'home_page',
						'type'    => 'select',
						'choices' => array(
						'%' => '%',
						'px' => 'px',			
						),
						'priority' => 101
					) );

?>