<?php 

// ***********************************************************************
// There can be no characters before the <?php tag at the top of the page!
// ***********************************************************************

// Functions PHP contains custom PHP used by your theme.  

// Register a custom menu named Main Menu
// http://codex.wordpress.org/Function_Reference/register_nav_menu
// register_nav_menu( $location, $description ); 
register_nav_menu( "main-menu", "Main Menu" ); 
register_nav_menu( "sub-menu", "Sub Menu" ); // Create a second menu (optional) 


// Activate Post thumbnails
// http://codex.wordpress.org/Post_Thumbnails
add_theme_support( "post-thumbnails" );
// To set up images sizes for use with post-thumbnails use the Simple Images Sizes Plugin:
// http://wordpress.org/extend/plugins/simple-image-sizes/



// If your site plans to make use of JQuery you can have WP load JQuery with:
// Add JQuery to WP
function theme_init() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');
	}
}
theme_init();




function get_images_in_current_post( $size="thumbnail", $num=-1 ) {
	global $post;
	$attachments = get_posts( array("numberposts" => $num, 
									"post_type" => "attachment", 
									"post_parent" => $post->ID, 
									"orderby" => "name" ) );
	// Loop through array	
	// [img, img, img ... ]					
	foreach( $attachments as $attachment ) {
		$img = wp_get_attachment_image( $attachment->ID, $size ); 
		echo "<div class='post-img'>$img</div>";
	}
} 

















