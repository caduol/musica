<?php

function joomspirit_the_breadcrumb() {
    global $post;
    echo '<ul>';
    
    if (!is_home()) {
    
        echo '<li><a href="';
        echo esc_url( home_url( '/' )) ;
        echo '">';
        echo '<span class="fa fa-home"></span>';
        echo '</a></li><li class="separator"><span class="fa fa-angle-right"></span></li>';
        
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"><span class="fa fa-angle-right"></span></li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"><span class="fa fa-angle-right"></span></li><li>';
                the_title();
                echo '</li>';
            }
            
        } elseif (is_page()) {
        
            if($post->post_parent) {
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator"><span class="fa fa-angle-right"></span></li>';
                }
                echo $output;
                echo $title ;
            } else {
                echo '<li>'.get_the_title().'</li>';
            }
        }
   
		elseif (is_tag()) {single_tag_title();}
		elseif (is_day()) {echo"<li>"; echo __('Archive for ', 'joomspirit'); the_time(); echo'</li>';}
		elseif (is_month()) {echo"<li>"; echo __('Archive for ', 'joomspirit'); the_time('F, Y'); echo'</li>';}
		elseif (is_year()) {echo"<li>"; echo __('Archive for ', 'joomspirit'); the_time('Y'); echo'</li>';}
		elseif (is_author()) {echo"<li>"; echo __('Author Archive ', 'joomspirit'); echo'</li>';}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>"; echo __('Blog Archives ', 'joomspirit'); echo'</li>';}
		elseif (is_search()) {echo"<li>"; echo __('Search Results ', 'joomspirit'); echo'</li>';}
    
    }
    echo '</ul>';
}

?>