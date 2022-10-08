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
		$switchLangURL = get_bloginfo('url') . "/es/";
		$switchLangLabel = "esp";
		$fullPortfolioURL = get_bloginfo('url') . "/portfolio-en/";
		$latestProjectsURL = get_bloginfo('url') . "/projects-en/";
        break;
	case "es_ES":
	case "default":
		$isViewSpanish = true;
		$backHomeURL = get_bloginfo('url') . "";
		$switchLangURL = get_bloginfo('url') . "/en/";
		$switchLangLabel = "eng";
		$fullPortfolioURL = get_bloginfo('url') . "/portfolio-en/";
		$latestProjectsURL = get_bloginfo('url') . "/projects-en/";
        break;
}
// ACF Fields
$acf_intro_image_url = get_field( "section_a_top_intro_image" );
$acf_intro_title = get_field( "section_a_top_intro_title" );
$acf_intro_sub_title = get_field( "section_a_top_intro_sub_title" );

/* section_a_content (es un group field, devuelve array de sub fields) */
$acf_section_a_content = get_field( "section_a_content" );
$acf_section_a_main_title = $acf_section_a_content ["section_a_main_title"];
$acf_section_a_main_caption = $acf_section_a_content ["section_a_main_caption"];
$acf_section_a_left_caption = $acf_section_a_content ["section_a_left_caption"];
$acf_section_a_block_1_title = $acf_section_a_content ["section_a_block_1_title"];
$acf_section_a_block_1_text = $acf_section_a_content ["section_a_block_1_text"];
$acf_section_a_block_2_title = $acf_section_a_content ["section_a_block_2_title"];
$acf_section_a_block_2_text = $acf_section_a_content ["section_a_block_2_text"];

/* section_a_icon_labels (es un group field, devuelve array de sub fields) */
$acf_section_a_icon_labels = get_field( "section_a_icon_labels" );
$acf_section_a_icon_label_1 = $acf_section_a_icon_labels ["section_a_icon_label_1"];
$acf_section_a_icon_label_2 = $acf_section_a_icon_labels ["section_a_icon_label_2"];
$acf_section_a_icon_label_3 = $acf_section_a_icon_labels ["section_a_icon_label_3"];

/* alone text fields */
$acf_section_b_main_title = get_field( "section_b_main_title" );
$acf_section_b_main_caption = get_field( "section_b_main_caption" );
$acf_section_b_block_1_title = get_field( "section_b_block_1_title" );
$acf_section_b_block_1_text = get_field( "section_b_block_1_text" );
$acf_section_b_block_1_text_bottom = get_field( "section_b_block_1_text_bottom" );
$acf_section_b_block_2_title = get_field( "section_b_block_2_title" );
$acf_section_b_block_2_text = get_field( "section_b_block_2_text" );
$acf_section_b_block_2_text_bottom = get_field( "section_b_block_2_text_bottom" );
$acf_section_b_block_3_title = get_field( "section_b_block_3_title" );
$acf_section_b_block_3_text = get_field( "section_b_block_3_text" );
$acf_section_b_block_3_text_bottom = get_field( "section_b_block_3_text_bottom" );

$acf_section_c_main_title = get_field( "section_c_main_title" );
$acf_section_c_main_caption = get_field( "section_c_main_caption" );
$acf_section_c_bottom_text = get_field( "section_c_bottom_text" );

/* group of posts fields: section_d_gallery (es un group field, devuelve array, devuelve array de sub fields, puedo iterarlo) */
$acf_section_d_gallery = get_field( "section_d_gallery" );


$nav_menu_items = array([
	'name' => __('hello', 'nwrktheme'),
	'id-std' => 'intro-linker-std',
	'id-mob' => 'intro-linker-mob',
	'link' => '#intro',
	'class' => 'selected'
	],
	[
	'name' => __('who', 'nwrktheme'),
	'id-std' => 'about-linker-std',
	'id-mob' => 'about-linker-mob',
	'link' => '#about',
	'class' => ''
	],
	[
	'name' => __('skills', 'nwrktheme'),
	'id-std' => 'skills-linker-std',
	'id-mob' => 'skills-linker-mob',
	'link' => '#skills',
	'class' => ''
	],
	[
	'name' => __('works', 'nwrktheme'),
	'id-std' => 'portfolio-linker-std',
	'id-mob' => 'portfolio-linker-mob',
	'link' => '#portfolio',
	'class' => ''
	],
	[
	'name' => __('contact', 'nwrktheme'),
	'id-std' => 'contact-linker-std',
	'id-mob' => 'contact-linker-mob',
	'link' => '#contact',
	'class' => 'scroll'
	]);