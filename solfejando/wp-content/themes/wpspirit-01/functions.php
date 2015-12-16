<?php

/**
 * 		FUNCTIONS
 *
 */

/** 	Load Templates options **/


/**
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
 
 
function joomspirit_setup() {

	/*
	 * Makes available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 */
	 
	load_theme_textdomain( 'joomspirit', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in 1 location.
	register_nav_menu( 'main_menu', 'Main menu' );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'joomspirit_setup' );


/***********************************************************
*
*		Enqueue scripts and styles for front-end.
*
*************************************************************/
 
function joomspirit_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'joomspirit-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20140711', true );

	// Loads our main stylesheet.
	wp_enqueue_style( 'joomspirit-style', get_stylesheet_uri() );
	
	// Load the Internet Explorer specific js file
	wp_enqueue_script( 'joomspirit-html5shiv-min', get_template_directory_uri() . '/js/html5shiv-min.js', array(), '20121010', true );
	$wp_styles->add_data( 'joomspirit-html5', 'conditional', 'lt IE 9' );
	
	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'joomspirit-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'joomspirit-style' ), '20121010' );
	$wp_styles->add_data( 'joomspirit-ie8', 'conditional', 'lt IE 9' );
	wp_enqueue_style( 'joomspirit-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'joomspirit-style' ), '20121010' );
	$wp_styles->add_data( 'joomspirit-ie7', 'conditional', 'lt IE 8' );
}
add_action( 'wp_enqueue_scripts', 'joomspirit_scripts_styles' );



/***********************************************************
*
*		Add Tiny editor styles
*
*************************************************************/


require_once('inc/tiny-styles.php');

    
/***********************************************************
*
*		Filter the page menu arguments.
*
* 		Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
*
*************************************************************/
 
function joomspirit_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'joomspirit_page_menu_args' );


/***********************************************************
*
*				Content width
*
*
*************************************************************/

if ( ! isset( $content_width ) ) {
	$content_width = get_theme_mod( 'width_website' ) ;
}


/***********************************************************
*
* 			Registers all widget areas.
*
*************************************************************/
 
require_once('inc/register-widget-area.php');
 

/***********************************************************
*
*			Add custom CSS class for each Widget
*
*************************************************************/

require_once('inc/widget-css-class.php');


/***********************************************************
*
*				Change the length of Excerpt
*
*************************************************************/

require_once('inc/length-excerpt.php');


/***********************************************************
*
* 		breadcrumb
*
*************************************************************/


require_once('inc/breadcrumb.php');



/***********************************************************
*
*			Displays navigation to next/previous pages when applicable.
*
*
*************************************************************/
 
 
if ( ! function_exists( 'joomspirit_content_nav' ) ) :
 
function joomspirit_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation clearfix" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'joomspirit' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'joomspirit' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'joomspirit' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;



/***********************************************************
*
*			Template for comments and pingbacks.
*
*			To override this walker in a child theme without modifying the comments template
*			simply create your own joomspirit_comment(), and that function will be used instead.
*
*			Used as a callback by wp_list_comments() for displaying the comments.
*
*
*************************************************************/
 
 if ( ! function_exists( 'joomspirit_comment' ) ) :
 
function joomspirit_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'joomspirit' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'joomspirit' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'joomspirit' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'joomspirit' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'joomspirit' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'joomspirit' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'joomspirit' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;


/***********************************************************
*
*				Set up post entry meta.
*
* 				Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
*
*				Create your own joomspirit_entry_meta() to override in a child theme.
*
*
*************************************************************/

 
if ( ! function_exists( 'joomspirit_entry_meta' ) ) :
 
function joomspirit_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'joomspirit' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'joomspirit' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'joomspirit' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'joomspirit' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'joomspirit' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'joomspirit' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;


/***********************************************************
*
*			Register postMessage support.
*
*			Add postMessage support for site title and description for the Customizer.
*
*
*			@param WP_Customize_Manager $wp_customize Customizer object.
*
*
*************************************************************/
 

add_action( 'customize_register', 'joomspirit_customize_register' );

function joomspirit_customize_register( $wp_customize ) {
	
	// remove section
	$wp_customize->remove_section( 'title_tagline');
	

	// 		Important for Live preview
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	include 'theme_customizer.php';
					
}



/*****************************************************************************************************
**
**											Load Options in the Header
**
******************************************************************************************************/

require_once('inc/load-options-header.php');


/*****************************************************************************************************
**
**											Load Options in the Footer
**
******************************************************************************************************/

require_once('inc/load-options-footer.php');


/*****************************************************************************************************
*
*			Enqueue Javascript postMessage handlers for the Customizer.
*
* 			Binds JS handlers to make the Customizer preview reload changes asynchronously.
*
******************************************************************************************************/
 
function joomspirit_customize_preview_js() {
	wp_enqueue_script( 'joomspirit-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20130301', true );
}
add_action( 'customize_preview_init', 'joomspirit_customize_preview_js' );