<?php
// ----------------------------------------------
// SET CSS for HEAD AND JS for FOOTER (JS AND CSS)
// ----------------------------------------------

function nwrk_scripts_and_styles_global() {

	// call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
	global $wp_styles; 

	// Do this ONLY if is not admin >> (Front end side only)
	if (!is_admin()) {

		//---------------------------------------------
		// 1) REGISTER CSS FILES
		//---------------------------------------------
		// wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/templates-assets/bootstrap/css-nwrk/bootstrap.min.css', array(), '', 'all' );
		// wp_register_style( 'components-css', get_template_directory_uri() . '/templates-assets/css/x-main-plugins.min.css', array(), '', 'all' );
		// wp_register_style( 'base-css', get_template_directory_uri() . '/templates-assets/css/x-main-base.min.css', array(), '', 'all' );
		// wp_register_style( 'fa-css', get_template_directory_uri() . '/templates-assets/fonts/font-awesome/font-awesome.min.css', array(), '', 'all' );
		// ie-only CSS
		// wp_register_style( 'ie-only', get_template_directory_uri() . '/css/ie.css', array(), '' );

		//---------------------------------------------
		// 2) ENQUEUE CSS FILES (SET CSS FILES ORDER HERE!)
		//---------------------------------------------
		/* 
		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'components-css' );
		wp_enqueue_style( 'base-css' );
		wp_enqueue_style( 'fa-css' );
		*/
		// wp_enqueue_style( 'ie-only' );
		// $wp_styles->add_data( 'ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

		//---------------------------------------------
		// 3) REGISTER JS FILES
		//---------------------------------------------
		
		// IMPORTANTE: JQUERY DEREGISTER AND REREGISTER
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		// $handle, $src, $deps, $ver, $in_footer 
		// inserto j query local
		// wp_register_script('jquery',  get_template_directory_uri() . '/templates-assets/js-plugins/jquery/jquery-2.2.4.min.js', array(), '2.2.4', true);	

		// bootstrap JS
		//wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/templates-assets/bootstrap/js/bootstrap.min.js', array(), '3.3.6', false );
		
		// modernizr JS
		//wp_register_script( 'modernizr-js', get_template_directory_uri() . '/templates-assets/js-plugins/modernizr/modernizr.custom.min.js', array(), '2.6.2', false );
		
		// other JS (main, plugins, etc)
		/*
		wp_register_script( 'main-js', get_template_directory_uri() . '/templates-assets/js/x-main.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'owl-js', get_template_directory_uri() . '/templates-assets/js-plugins/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'magnific-js', get_template_directory_uri() . '/templates-assets/js-plugins/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'easing-js',  get_template_directory_uri() . '/templates-assets/js-plugins/easing/jquery.easing.1.3.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'smoothscroll-js',  get_template_directory_uri() . '/templates-assets/js-plugins/smoothscroll/smooth-scroll.polyfills.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'gumshoe-js',  get_template_directory_uri() . '/templates-assets/js-plugins/gumshoe/gumshoe.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'waypoints-js',  get_template_directory_uri() . '/templates-assets/js-plugins/waypoints/noframework.waypoints.min.js', array( 'jquery' ), '', true );
	 	*/	
		//---------------------------------------------
		// 4) ENQUEUE JS FILES (SET JS FILES ORDER HERE!)
		//---------------------------------------------
		
		//wp_enqueue_script( 'jquery' );
		//wp_enqueue_script( 'modernizr-js' );
		//wp_enqueue_script( 'bootstrap-js' );

		/*
		wp_enqueue_script( 'owl-js' );
		wp_enqueue_script( 'magnific-js' );
		wp_enqueue_script( 'easing-js' );
		wp_enqueue_script( 'smoothscroll-js' );
		wp_enqueue_script( 'gumshoe-js' );
		wp_enqueue_script( 'waypoints-js' );
		wp_enqueue_script( 'main-js' );
		*/

		// comment reply JS script for threaded comments
		if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
			wp_enqueue_script( 'comment-reply' );
		}

		//---------------------------------------------
		// 5) MANAGE CSS AND JS from CONTACT FORM 7 
		//---------------------------------------------
		// (Already declared in WP-CONFIG, disabled by default)
		// DISABLE ALL
		//add_filter( 'wpcf7_load_js', '__return_false' );
		//add_filter( 'wpcf7_load_css', '__return_false' );

		// A - LOAD ONLY FORM JS OR CSS STYLES EVERYWHERE
		// wpcf7_enqueue_scripts();
		// wpcf7_enqueue_styles();
		
		// B - LOAD CONTACT FORM JS ONLY IN CONTACT PAGE IF NEEDED
		/*
		 if ( is_page( 'contact' ) ) {
			if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
					wpcf7_enqueue_scripts();
			}
		
			if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
					// NO CSS
					// wpcf7_enqueue_styles();
			}
		}  
		*/

	
	}
}
?>