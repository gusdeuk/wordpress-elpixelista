<?php


global $NOCACHE_VERSION_STRING;
$NOCACHE_VERSION_STRING = '?v=1.16';
//--------------------------------------------------------
/* LOAD NWRK MODULES */
//--------------------------------------------------------

/*base*/
require_once( 'includes-theme/inc-nwrk-brew.php' );
require_once( 'includes-theme/inc-nwrk-main.php' );

/*wp menus*/
require_once( 'includes-theme/inc-wp-menus.php' );
require_once( 'includes-theme/inc-wp-menus-navwalker.php' );

/*register sidebars*/
require_once( 'includes-theme/inc-set-sidebars-init.php' );

/*internal widgets*/
require_once( 'includes-theme/inc-widgets-internal.php' );

/*admin dashboard*/
require_once( 'includes-theme/inc-admin-dashboard.php' );

/*admin tunning*/
require_once( 'includes-theme/inc-admin-tuning.php' );

/*images support setup*/
require_once( 'includes-theme/inc-nwrk-images-and-thumbs.php' );

/*theme content management shortcodes setup*/
require_once( 'includes-theme/inc-set-shortcodes.php' );

/*comments layout elements init*/
require_once( 'includes-theme/inc-comments-init.php' );

/*theme general options view*/
require_once( 'includes-theme/inc-nwrk-options.php' );

/* Disable WP standard comments functionality */
require_once( 'includes-theme/inc-comments-disable.php' );

/* post formats support*/
// require_once( 'includes/set-post-formats.php' );

/* Custom post types */
require_once( 'includes-post-types/inc-post-type-settings.php' );
require_once( 'includes-post-types/inc-post-type-work.php' );
require_once( 'includes-post-types/inc-post-type-product.php' );

/* De todo / funciones varias */
require_once( 'includes-theme/inc-x-various.php' );

/* lang configuration */
require_once( 'includes-theme/inc-x-language.php' );

/* Search engine options */
require_once( 'includes-theme/inc-set-search-options.php' );

/*head and footer scripts js css jquery etc*/
require_once( 'includes-js-css/inc-js-css-global.php' );
require_once( 'includes-js-css/inc-js-css-views.php' );

/* early access para acf 5, borrar despues de que lance */
define('ACF_EARLY_ACCESS', '5');

?>
