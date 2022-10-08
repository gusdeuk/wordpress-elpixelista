<?php
//--------------------------------------------------------
// QUERY VARS ESPECIALES - declarar aqui
//--------------------------------------------------------
function add_query_vars($aVars) {
	$aVars[] .= 'lang';
	$aVars[] .= 'other';
return $aVars;
}
 
// hook add_query_vars function into query_vars
add_filter('query_vars', 'add_query_vars');

//--------------------------------------------------------
// EXCERPT GENERAL
//--------------------------------------------------------
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($len) { return 30; }

// EXCERT ELLIPSIS [...]...
//function excerpt_ellipse($text) {
//return str_replace('[...]', ' Read More', $text); }
//add_filter('the_excerpt', 'excerpt_ellipse');


//--------------------------------------------------------
// WP 7 CUSTOMIZATION
//--------------------------------------------------------
/**  custom ajax loader */
if ( function_exists( 'wpcf7_ajax_loader' ) ) {
     add_filter( 'wpcf7_ajax_loader', 'wap8_wpcf7_ajax_loader' );
     function wap8_wpcf7_ajax_loader() {
          $url = get_template_directory_uri() . '/images/loader-circ.gif';
          return $url;
     }
}
/**  Solo cargo js y css en estas paginas */
/*
add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );
function ac_remove_cf7_scripts() {
	if ( !is_page('works') && !is_front_page() ) {
		wp_deregister_style( 'contact-form-7' );
		wp_deregister_script( 'contact-form-7' );
	}
}
*/

//--------------------------------------------------------
// DISABLE EMOJIS
//--------------------------------------------------------
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
   }
   add_action( 'init', 'disable_emojis' );
   
   /**
	* Filter function used to remove the tinymce emoji plugin.
	* 
	* @param array $plugins 
	* @return array Difference betwen the two arrays
	*/
   function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
	return array();
	}
   }
   
   /**
	* Remove emoji CDN hostname from DNS prefetching hints.
	*
	* @param array $urls URLs to print for resource hints.
	* @param string $relation_type The relation type the URLs are printed for.
	* @return array Difference betwen the two arrays.
	*/
   function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
	/** This filter is documented in wp-includes/formatting.php */
	$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
   
   $urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
   
   return $urls;
   }

?>