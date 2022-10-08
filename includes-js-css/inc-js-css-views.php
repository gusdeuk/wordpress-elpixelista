<?php
// ----------------------------------------------
// SET / ASSIGN JS AND CSS FOR SPECIFIC VIEWS
// Insert CSS for HEAD 
// Insert JS for FOOTER
// ----------------------------------------------
function nwrk_scripts_and_styles_views() {
	
/* 	if (!is_admin()) {

		//---------------------------------------------
		// 1) ENQUEUE JS OR CSS for TEMPLATES for VIEWS 
		//    and several post types > PAGES-POST-CPT
		//---------------------------------------------

		//  specific FOR page by slug (Ej: en, es en estos casos) > home page en 2 idiomas, sino puedo usar >> || is_front_page()
		if ( is_page( 'en' ) || is_page( 'es' )) {
			// register CSS AND JS
			wp_register_style( 'page-home-css', get_template_directory_uri() . '/templates-custom/page-home/page-home.css', array(), '', 'all' );
			wp_register_script('page-home-js',  get_template_directory_uri() . '/templates-custom/page-home/page-home.js', array( 'jquery' ), '', true );
			// enqueue  CSS AND JS
			wp_enqueue_style( 'page-home-css' );
			wp_enqueue_script( 'page-home-js' );
		}

		// specific for template > tpl-post-single.php
		if ( is_page_template('templates-custom/tpl-post-single.php') ) {
		} 

		// specific for template > tpl-work-single.php
		if ( is_page_template('templates-custom/tpl-work-single.php') ) {
		} 

		// specific for template > tpl-product-single.php
		if ( is_page_template('templates-custom/tpl-product-single.php') ) {
		} 

		// specific for template > tpl-page-grid-projects
		if ( is_page_template('templates-custom/tpl-page-grid-projects.php') ) {
		} 

		// specific for template > tpl-page-grid-works
		if ( is_page_template('templates-custom/tpl-page-grid-works.php') ) {
		} 

		//---------------------------------------------
		// 2) ENQUEUE JS OR CSS for TEMPLATES > WP VIEWS
		//    (category, tags, texonomies, etc)
		//---------------------------------------------

		//  WP-VIEW > specific FOR STD category view (STANDARD post type "post")
		if ( is_category() ) {
		} 

		//  WP-VIEW > specific FOR STD TAG view (STANDARD post type "post")
		if ( is_tag() ) {
		} 

		//  WP-VIEW > specific FOR taxonomy view (tax > category-work,  post type "work")
		if ( is_tax('category-work') ) {
		}

		//  WP-VIEW > specific FOR taxonomy view (tax > category-product,  post type "product")
		if ( is_tax('category-product') ) {
		}

		//  WP-VIEW > specific FOR Search Result query view (search-results template, search.php)
		if ( is_search() ) {
		} 

		//  WP-VIEW > specific FOR 404
		if ( is_404() ) {
		} 
	
	} 
	*/
}
?>