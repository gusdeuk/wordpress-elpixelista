<?php
/* Welcome to nwrk :)
URL: http://themble.com/nwrk/
*/

/*********************
LAUNCH nwrk
Let's fire off all the functions
and tools. I put it up here so it's
right up top and clean.
*********************/

// we're firing all out initial functions at the start
add_action( 'after_setup_theme', 'nwrk_ahoy', 16 );

function nwrk_ahoy() {

	// launching operation cleanup
	add_action( 'init', 'nwrk_head_cleanup' );
	// remove WP version from RSS
	add_filter( 'the_generator', 'nwrk_rss_version' );
	// remove pesky injected css for recent comments widget
	add_filter( 'wp_head', 'nwrk_remove_wp_widget_recent_comments_style', 1 );
	// clean up comment styles in the head
	add_action( 'wp_head', 'nwrk_remove_recent_comments_style', 1 );
	// clean up gallery output in wp
	add_filter( 'gallery_style', 'nwrk_gallery_style' );

	// enqueue base scripts and styles
	add_action( 'wp_enqueue_scripts', 'nwrk_scripts_and_styles_global', 999 );
	add_action( 'wp_enqueue_scripts', 'nwrk_scripts_and_styles_views', 999 );
	// ie conditional wrapper

	// launching this stuff after theme setup
	//add_theme_support('automatic-feed-links');

	// adding sidebars to Wordpress (these are created in functions.php)
	add_action( 'widgets_init', 'nwrk_register_sidebars' );
	// adding the nwrk search form (created in functions.php)
	// add_filter( 'get_search_form', 'nwrk_wpsearch' );

	// cleaning up random code around images
	add_filter( 'the_content', 'nwrk_filter_ptags_on_images' );
	// cleaning up excerpt
	add_filter( 'excerpt_more', 'nwrk_excerpt_more' );

	// limir excerpt to 20
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// disable XMLRPC
	add_filter( 'xmlrpc_methods', 'remove_xmlrpc_pingback_ping' );
	add_filter( 'xmlrpc_enabled', '__return_false');


} /* end nwrk ahoy */

/* disable XMLRPC remove pingpbacks*/
function remove_xmlrpc_pingback_ping( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} ;


/*********************
WP_HEAD GOODNESS
The default wordpress head is
a mess. Let's clean it up by
removing all the junk we don't
need.
*********************/

function nwrk_head_cleanup() {
	// category feeds
	 remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	 remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
	// remove WP version from css
	add_filter( 'style_loader_src', 'nwrk_remove_wp_ver_css_js', 9999 );
	// Remove dns-prefetch Link from WordPress Head (Frontend)
	remove_action( 'wp_head', 'wp_resource_hints', 2 );
	// Remove canonical ans slink
	remove_action('wp_head', 'rel_canonical');
	remove_action('wp_head', 'wp_shortlink_wp_head');
	// remove Wp version from scripts
	add_filter( 'script_loader_src', 'nwrk_remove_wp_ver_css_js', 9999 );


} /* end nwrk head cleanup */

function remove_json_api () {

    // Remove the REST API lines from the HTML Header
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

    // Remove the REST API endpoint.
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );

    // Turn off oEmbed auto discovery.
    add_filter( 'embed_oembed_discover', '__return_false' );

    // Don't filter oEmbed results.
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

    // Remove oEmbed discovery links.
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );

	// Remove all embeds rewrite rules.
	//add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

}
add_action( 'after_setup_theme', 'remove_json_api' );

// remove WP version from RSS
function nwrk_rss_version() { return ''; }

// remove WP version from scripts
function nwrk_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

// remove injected CSS for recent comments widget
function nwrk_remove_wp_widget_recent_comments_style() {
   if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
	  remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
   }
}

// remove injected CSS from recent comments widget
function nwrk_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
	remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
  }
}

// remove injected CSS from gallery
function nwrk_gallery_style($css) {
  return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}






/*********************
RELATED POSTS FUNCTION
*********************/

// Related Posts Function (call using nwrk_related_posts(); )
function nwrk_related_posts() {
	echo '<ul id="nwrk-related-posts">';
	global $post;
	$tags = wp_get_post_tags( $post->ID );
	if($tags) {
		foreach( $tags as $tag ) { 
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 5, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<li class="related_post"><a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; }
		else { ?>
			<?php echo '<li class="no_related_post">' . 'No Related Posts Yet!' . '</li>'; ?>
		<?php }
	}
	wp_reset_query();
	echo '</ul>';
} /* end nwrk related posts function */




/*********************
PAGE NAVI
*********************/
// Numeric Page Navi (built into the theme by default)
function nwrk_page_navi() {
	global $wp_query;
	$bignum = 999999999;
	if ( $wp_query->max_num_pages <= 1 )
	return;
	
	echo '<nav class="pagination">';
	
		echo paginate_links( array(
			'base' 			=> str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
			'format' 		=> '',
			'current' 		=> max( 1, get_query_var('paged') ),
			'total' 		=> $wp_query->max_num_pages,
			'prev_text' 	=> '&larr;',
			'next_text' 	=> '&rarr;',
			'type'			=> 'list',
			'end_size'		=> 3,
			'mid_size'		=> 3
		) );
	
	echo '</nav>';
} /* end page navi */



/*********************
RANDOM CLEANUP ITEMS
*********************/
// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function nwrk_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function nwrk_excerpt_more($more) {
	global $post;
	// edit here if you like
	//return '...</p><p><a class="excerpt-read-more btn btn-primary" href="'. get_permalink($post->ID) . '" title="'. __( 'Read', 'nwrktheme' ) . get_the_title($post->ID).'">'. __( 'Read More', 'nwrktheme' ) .'</a>';
	return ' ...';
}

/*
 * This is a modified the_author_posts_link() which just returns the link.
 *
 * This is necessary to allow usage of the usual l10n process with printf().
 */
function nwrk_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}

function custom_excerpt_length( $length ) {
	return 20;
}

?>
