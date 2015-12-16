<?php

/*
	Theme Name: joomspirit
	Author: JoomSpirit

*/
 

add_filter( 'mce_buttons_2', 'juiz_mce_buttons_2' );  
   
if ( !function_exists('juiz_mce_buttons_2')) {  
    function juiz_mce_buttons_2( $buttons ) {  
        array_unshift( $buttons, 'styleselect' );  
   
        return $buttons;  
	}  
}  


add_filter( 'tiny_mce_before_init', 'juiz_mce_before_init' );  
   
if ( !function_exists('juiz_mce_before_init')) {  
	function juiz_mce_before_init( $styles ) {  
		
		$style_formats = array (
   
			// Style "Dropcap"  
			array(  
				'title' => __('Dropcap', 'joomspirit'),  
				'inline' => 'span',  
				'classes' => 'dropcap' 
			),  
   
			// Style "Inset left"  
			array(  
				'title' => __('Inset left', 'joomspirit'),  
				'inline' => 'span',  
				'classes' => 'inset-left'  
			),
			
			// Style "Inset right"  
			array(  
				'title' => __('Inset right', 'joomspirit'),  
				'inline' => 'span',  
				'classes' => 'inset-right'  
			),
			
			// Style "lead"  
			array(  
				'title' => __('Lead', 'joomspirit'),  
				'block' => 'div',  
				'classes' => 'lead',  
				'wrapper' => true  
			),


			//////////////////////////////			Alignment 			///////
			
			array(
            'title' => __( 'Alignment' , 'joomspirit' ),
                'items' => array(
                
					// Style "align left"  
					array(  
						'title' => __('Align left', 'joomspirit'),  
						'block' => 'p',  
						'classes' => 'text-left' 
					),
			
					// Style "align right"  
					array(  
						'title' => __('Align right', 'joomspirit'),  
						'block' => 'p',  
						'classes' => 'text-right' 
					),
					
					// Style "align center"  
					array(  
						'title' => __('Align center', 'joomspirit'),  
						'block' => 'p',  
						'classes' => 'text-center' 
					),
					
					// Style "align justify"  
					array(  
						'title' => __('Align justify', 'joomspirit'),  
						'block' => 'p',  
						'classes' => 'text-justify' 
					)					
				)
			),

			//////////////////////////////			Blockquote 			///////
			
			array(
            'title' => __( 'Blockquote' , 'joomspirit' ),
                'items' => array(
                
					// Style "Blockquote"  
					array(  
						'title' => __('Blockquote left side', 'joomspirit'),  
						'block' => 'blockquote',  
						'classes' => '' 
					),
			
					// Style "Blockquote right side"  
					array(  
						'title' => __('Blockquote right side', 'joomspirit'),  
						'block' => 'blockquote',  
						'classes' => 'pull-right'
					)
				)
			),
			
			
			//////////////////////////////			Unordered list 			///////
			
			array(
            'title' => __( 'Unordered list' , 'joomspirit' ),
                'items' => array(

					// Style "Unordered list simple"  
					array(  
						'title' => __('Unordered list simple', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'simple'
					),
					
					// Style "Unordered list check"  
					array(  
						'title' => __('Unordered list check', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'check'
					),
					
					// Style "Unordered list circle"  
					array(  
						'title' => __('Unordered list circle', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'circle'  
					),
					
					// Style "Unordered list circle o"  
					array(  
						'title' => __('Unordered list circle-o', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'circle-o'  
					),
					
					// Style "Unordered list chevron"  
					array(  
						'title' => __('Unordered list chevron', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'chevron'  
					),
					
					// Style "Unordered list angle"  
					array(  
						'title' => __('Unordered list angle', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'angle'  
					),
					
					// Style "Unordered list angle double"  
					array(  
						'title' => __('Unordered list angle double', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'angle-double'  
					),
					
					// Style "Unordered list star"  
					array(  
						'title' => __('Unordered list star', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'star'  
					),
					
					// Style "Unordered list star-o"  
					array(  
						'title' => __('Unordered list star-o', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'star-o'  
					),
					
					// Style "Unordered list tag"  
					array(  
						'title' => __('Unordered list tag', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'tag'  
					),
					
					// Style "Unordered list arrow-circle"  
					array(  
						'title' => __('Unordered list arrow-circle', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'arrow-circle'  
					),
					
					// Style "Unordered list hand-o"  
					array(  
						'title' => __('Unordered list hand-o', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'hand-o'  
					),
					
					// Style "Unordered list share"  
					array(  
						'title' => __('Unordered list share', 'joomspirit'),  
						'selector' => 'ul',  
						'classes' => 'share'  
					)
				
				)
			),
			
			//////////////////////////////			Ordered list 			///////
			
			array(
            'title' => __( 'Ordered list' , 'joomspirit' ),
                'items' => array(			

					// Style "Ordered list simple"  
					array(  
						'title' => __('Ordered list simple', 'joomspirit'),  
						'selector' => 'ol',  
						'classes' => 'simple'  
					),	
					
					// Style "Ordered list labels"  
					array(  
						'title' => __('Ordered list labels', 'joomspirit'),  
						'selector' => 'ol',  
						'classes' => 'labels'  
					),	
					
					// Style "Ordered list circle"  
					array(  
						'title' => __('Ordered list circle', 'joomspirit'),  
						'selector' => 'ol',  
						'classes' => 'circle'  
					)
				)
			),
			
			//////////////////////////////			Color boxes 			///////
			
			array(
            'title' => __( 'Color boxes' , 'joomspirit' ),
                'items' => array(				
			
					// Style "Background white"  
					array(  
						'title' => __('Background white', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-white clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background grey"  
					array(  
						'title' => __('Background grey', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-grey clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background brown"  
					array(  
						'title' => __('Background brown', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-brown clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background blue"  
					array(  
						'title' => __('Background blue', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-blue clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background black"  
					array(  
						'title' => __('Background black', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-black clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background green"  
					array(  
						'title' => __('Background green', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-green clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background turquoise"  
					array(  
						'title' => __('Background turquoise', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-turquoise clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background orange"  
					array(  
						'title' => __('Background orange', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-orange clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background red"  
					array(  
						'title' => __('Background red', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-red clearfix',  
						'wrapper' => true  
					),
					
					// Style "Background violet"  
					array(  
						'title' => __('Background violet', 'joomspirit'),  
						'block' => 'div',  
						'classes' => 'bg-violet clearfix',  
						'wrapper' => true  
					)
				)
			)
			
		);  
   
		// replace existing styles by the new ones 
		$styles['style_formats'] = json_encode( $style_formats );  
   
		return $styles;  
	}  
}


?>
