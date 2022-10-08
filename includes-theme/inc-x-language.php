<?php
//--------------------------------------------------------	
// LANGUAGE MANAGEMENT - LOCALE OVERRRIDES for frontend and backend
//--------------------------------------------------------	

// LOAD MO FILES FOR TRANSLATION
add_action('after_setup_theme', 'load_txt_dom');
function load_txt_dom(){
	load_theme_textdomain('nwrktheme', get_template_directory() . '/languages');
}

// 1) lang backend en WP CMS > default en_US, no seteado
// 2) declare default FORCED Front end language > es_ES >> Siempre va a ser español salvo los slugs terminados "-en"
if ( !is_admin() ) {
    switch_to_locale('es_ES');
}

// 3) For front end >  FORCED en_US ONLY for specific pages 
function switch_lang_gus() {
    if (!is_admin()) {

        // slug ends with "-en"?
        $currentSlug = get_post_field( 'post_name');
        $currentSlugLast3Chars = substr( $currentSlug, -3);

        if ( is_page('en') || $currentSlugLast3Chars == "-en") { 
            // set english for specific pages ending with "-en"
            switch_to_locale('en_US');
        } else {
            // front end default 
        }
    }
}
// action "wp" es ANTES DEL 'wp_head', mejor
//add_action( 'wp_head', 'switch_lang_gus' );
add_action( 'wp', 'switch_lang_gus' );

// 4) ALWAYS Force backend to english > Overrides backend WP lang setting
function wp_set_admin_locale_brute_force($locale) {
    if ( is_admin() ) {
        // force to english
        switch_to_locale('en_US');
     }
}
add_filter('init','wp_set_admin_locale_brute_force');

?>