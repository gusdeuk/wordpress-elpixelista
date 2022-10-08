<?php
// get and declare some flags / vars needed in this php view

// $switchLangURL/$switchLangLabel > comment to hide the switch ling
// $backHomeURL > is for the header LOGO link
// class >> add "selected" > selected item
// link >> Use URL ( get_bloginfo('url') . "/es/"
// link >> Use anchor for scroll in the page (#portfolio-full)

$currentLocale = get_locale();
switch ($currentLocale ) {
    case "en_US":
		$isViewEnglish = true;
		$backHomeURL = get_bloginfo('url') . "";
		$whoURL = get_bloginfo('url') . "/en/";
		$projectsURL = get_bloginfo('url') . "/projects-en/";
		$worksURL = get_bloginfo('url') . "/portfolio-en/";
		/* $switchLangURL = get_bloginfo('url') . "/portfolio-es/";
		$switchLangLabel = "esp"; */
        break;
	case "es_ES":
	case "default":
		$isViewSpanish = true;
		$backHomeURL = get_bloginfo('url') . "";
		$whoURL = get_bloginfo('url') . "/es/";
		$projectsURL = get_bloginfo('url') . "/projects-en/";
		$worksURL = get_bloginfo('url') . "/portfolio-en/";
		/* $switchLangURL = get_bloginfo('url') . "/portfolio-en/";
		$switchLangLabel = "eng"; */
        break;
}

// ACF Fields
/*
 * group of image fields:
 * acf_snapshots_slider / acf_top_slider
 * son groups fields, devuelven array de sub fields de imagenes con URLS
 */

 // -----------------------------------------------------------
 // full template fields

$acf_top_slider = get_field( "top_slider" );
$acf_snapshots_slider = get_field( "snapshots_slider" );

/* several ACF fields (texts and image URL)*/
$acf_right_text_image = get_field( "right_text_image" );
$acf_text_block_1 = get_field( "text_block_1" );
$acf_text_block_2 = get_field( "text_block_2" );
$acf_text_block_3 = get_field( "text_block_3" );
$acf_bulleted_text_a = get_field( "bulleted_text_a" );
$acf_bulleted_text_b = get_field( "bulleted_text_b" );
$acf_bulleted_text_c = get_field( "bulleted_text_c" );
$acf_snapshots_title = get_field( "snapshots_title" );
$acf_bottom_text_block = get_field( "bottom_text_block" );
$acf_full_bottom_full_width_image = get_field( "full_bottom_full_width_image" );
$acf_zoomed_full_image = get_field( "zoomed_full_image" );
$acf_full_head_full_width_image = get_field( "full_head_full_width_image" );

// basic template fields
$acf_basic_before_image = get_field( "basic_before_image" );
$acf_basic_after_image = get_field( "basic_after_image" );
$acf_basic_before_after_text_block = get_field( "basic_before_after_text_block" );
$acf_basic_bottom_text_title = get_field( "basic_bottom_text_title" );
$acf_basic_bottom_full_width_image = get_field( "basic_bottom_full_width_image" );
$acf_basic_bottom_text_block = get_field( "basic_bottom_text_block" );
$acf_basic_zoomed_full_image = get_field( "basic_zoomed_full_image" );
$acf_basic_head_full_width_image = get_field( "basic_head_full_width_image" );

// text template fields
$acf_single_text_post_text_block = get_field( "single_text_post_text_block" );
$acf_single_text_post_top_image = get_field( "single_text_post_top_image" );
$acf_single_text_post_bottom_image = get_field( "single_text_post_bottom_image" );
$acf_single_text_post_bottom_image_link = get_field( "single_text_post_bottom_image_link" );

// current post ID
$currentPostId = get_the_ID();

// set top menu items
$nav_menu_items = array([
	'name' => __('about me', 'nwrktheme'),
	'id-std' => 'author-linker-std',
	'id-mob' => 'author-linker-mob',
	'link' => $whoURL,
	'class' => 'fade-out-click-jump'
	],
	[
	'name' => __('portfolio', 'nwrktheme'),
	'id-std' => 'porfolio-linker-std',
	'id-mob' => 'porfolio-linker-mob',
	'link' => $worksURL,
	'class' => 'fade-out-click-jump'
	],
	[
	'name' => __('latest projects', 'nwrktheme'),
	'id-std' => 'projects-linker-std',
	'id-mob' => 'projects-linker-mob',
	'link' => $projectsURL,
	'class' => 'selected fade-out-click-jump'
	],
	[
	'name' => __('contact', 'nwrktheme'),
	'id-std' => 'contact-linker-std',
	'id-mob' => 'contact-linker-mob',
	'link' => '#contact',
	'class' => ''
	]);