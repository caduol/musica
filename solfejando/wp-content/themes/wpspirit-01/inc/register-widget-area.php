<?php

function joomspirit_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Left' , 'joomspirit' ),
		'id' => 'left',
		'description' => __( 'Position to display your Widget in Left position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
		register_sidebar( array(
		'name' => __( 'Logo' , 'joomspirit' ),
		'id' => 'logo',
		'description' => __( 'Position to display your Logo' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="hidden-title">',
		'after_title' => '</span>',
	) );
	
		register_sidebar( array(
		'name' => __( 'Translate' , 'joomspirit' ),
		'id' => 'translate',
		'description' => __( 'Position to display your Translate widget' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="hidden-title">',
		'after_title' => '</span>',
	) );	
	
		register_sidebar( array(
		'name' => __( 'Image' , 'joomspirit' ),
		'id' => 'image',
		'description' => __( 'Position to display your Image or Slideshow' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="hidden-title">',
		'after_title' => '</span>',
	) );

		register_sidebar( array(
		'name' => __( 'Top' , 'joomspirit' ),
		'id' => 'top',
		'description' => __( 'Position to display your Widget in Top position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Right' , 'joomspirit' ),
		'id' => 'right',
		'description' => __( 'Position to display your Widget in Right position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'User1' , 'joomspirit' ),
		'id' => 'user1',
		'description' => __( 'Position to display your Widget in User1 position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'User2' , 'joomspirit' ),
		'id' => 'user2',
		'description' => __( 'Position to display your Widget in User2 position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'User3' , 'joomspirit' ),
		'id' => 'user3',
		'description' => __( 'Position to display your Widget in User3 position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'User4' , 'joomspirit' ),
		'id' => 'user4',
		'description' => __( 'Position to display your Widget in User4 position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'User5' , 'joomspirit' ),
		'id' => 'user5',
		'description' => __( 'Position to display your Widget in User5 position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'User6' , 'joomspirit' ),
		'id' => 'user6',
		'description' => __( 'Position to display your Widget in User6 position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Bottom' , 'joomspirit' ),
		'id' => 'bottom',
		'description' => __( 'Position to display your Widget in Bottom position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Address' , 'joomspirit' ),
		'id' => 'address',
		'description' => __( 'Position to display your Widget in Address position' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<h3 class="widget-title "><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Bottom menu' , 'joomspirit' ),
		'id' => 'bottom_menu',
		'description' => __( 'Position to display your Bottom menu' , 'joomspirit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
		'after_widget' => '</div><div class="icon-module"></div></div>',
		'before_title' => '<span class="hidden-title">',
		'after_title' => '</span>',
	) );	

}
add_action( 'widgets_init', 'joomspirit_widgets_init' );

?>