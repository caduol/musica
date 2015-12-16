<?php

function joomspirit_new_excerpt_length($length) {
 return get_theme_mod('length_excerpt', '55');
}

add_filter('excerpt_length', 'joomspirit_new_excerpt_length');


// Replaces the excerpt "more" text by a link
function joomspirit_new_excerpt_more($more) {
       global $post;
	return '<span class="before-more-link">...</span><a class="more-link" href="'. get_permalink($post->ID) . '">' . __('Read more ...', 'joomspirit') .'</a>';
}
add_filter('excerpt_more', 'joomspirit_new_excerpt_more');

?>