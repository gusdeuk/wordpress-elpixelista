<?php
//--------------------------------------------------------
// THUMBNAILS + IMAGES SETTINGS
//--------------------------------------------------------
// ADD FEATURED IMAGES SUPPORT
// SET THUMBNAILS size (With CROP)
// Best practice > JUST USE SMALL THUMBNAILS and FULL SIZE everywhere
// Thumbnails >> 150 x 150
// Other images >> Uploaded at exact size
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(150, 150, true);

// pero lo IDEAL en un proyecto normal seria  150 x 150 para cosas que necesita el backend y NADA MAS
// y usar ACF fields exactos SIEMPRE para cada imagen del front end 

// DISABLE default image  sizes in wordpress (DONT GENERATE THESE SIZES >> SETEO A CERO y LISTO)
// excapt Thumbnails >> 150 x 150
update_option( 'thumbnail_size_h', 150);
update_option( 'thumbnail_size_w', 150);

// disable generated image sizes ALL IN ONE
function shapeSpace_disable_image_sizes($sizes) {
	// unset($sizes['thumbnail']);    // disable thumbnail size
	unset($sizes['medium']);       // disable medium size
	unset($sizes['large']);        // disable large size
	unset($sizes['medium_large']); // disable medium-large size
	unset($sizes['1536x1536']);    // disable 2x medium-large size
	unset($sizes['2048x2048']);    // disable 2x large size
	return $sizes;
}
add_action('intermediate_image_sizes_advanced', 'shapeSpace_disable_image_sizes');

// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');

// disable other image sizes
function shapeSpace_disable_other_image_sizes() {
	
	remove_image_size('post-thumbnail'); // disable images added via set_post_thumbnail_size() 
	remove_image_size('another-size');   // disable any other added image sizes
	
}
add_action('init', 'shapeSpace_disable_other_image_sizes');


// Aca necesitamos MID thumbs para la grilla de works, tonces usemos un custom de 450 x 450
add_image_size( 'custom-med-thumbnail', 450, 450, true );

// set JPG quality para las imagenes autogeneradas
function jpeg_quality_callback($arg){
	return (int)96;
}

add_filter('jpeg_quality', 'jpeg_quality_callback');

// add_image_size( $name, $width, $height, $crop );
// $width The post thumbnail width in pixels.  Default: 0 
// $height The post thumbnail $height in pixels.  Default: 0 
// $crop Crop the image or not. False - Soft proportional crop mode ; True - Hard crop mode.
// custom thumbnail sizes if needed
// add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); // Hard crop left top
//add_image_size( 'post-header', 1200, 440, true );
// size for the GRID / Featured images
//add_image_size( 'post-medium', 585, 330, true );
// content images fit to 900 px width ONLY, no crop
/*add_image_size( 'post-big', 900);*/
//On some production environments you may get a “unexpected T_FUNCTION” error (older versions of PHP 5 don’t like anonymous functions). In this situation go for the following:


//--------------------------------------------------------
// CROP XY-CERO-CERO (Sin centrar, cropea TOP / LEFT,Y ADEMAS
// esto evita que si una imagen es MAS BAJA QUE ALTA
// quede fea cuando se la cropea a CUADRADO)
//--------------------------------------------------------
function my_awesome_image_resize_dimensions( $payload, $orig_w, $orig_h, $dest_w, $dest_h, $crop ){
	// Change this to a conditional that decides whether you 
	// want to override the defaults for this image or not.
	if( false )
		return $payload;
	if ( $crop ) {
		// crop the largest possible portion of the original image that we can size to $dest_w x $dest_h
		$aspect_ratio = $orig_w / $orig_h;
		$new_w = min($dest_w, $orig_w);
		$new_h = min($dest_h, $orig_h);
		if ( !$new_w ) {
		$new_w = intval($new_h * $aspect_ratio);
		}
		if ( !$new_h ) {
		$new_h = intval($new_w / $aspect_ratio);
		}
		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);
		$s_x = 0; // [[ formerly ]] ==> floor( ($orig_w - $crop_w) / 2 );
		$s_y = 0; // [[ formerly ]] ==> floor( ($orig_h - $crop_h) / 2 );
	} else {
		// don't crop, just resize using $dest_w x $dest_h as a maximum bounding box
		$crop_w = $orig_w;
		$crop_h = $orig_h;
		$s_x = 0;
		$s_y = 0;
		list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
	}
	// if the resulting image would be the same size or larger we don't want to resize it
	if ( $new_w >= $orig_w && $new_h >= $orig_h )
		return false;
	// the return array matches the parameters to imagecopyresampled()
	// int dst_x, int dst_y, int src_x, int src_y, int dst_w, int dst_h, int src_w, int src_h
	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
	}
	add_filter( 'image_resize_dimensions', 'my_awesome_image_resize_dimensions', 10, 6 );
	

?>