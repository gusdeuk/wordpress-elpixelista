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
		/* $switchLangURL = get_bloginfo('url') . "/portfolio-es/";
		$switchLangLabel = "esp"; */
        break;
	case "es_ES":
	case "default":
		$isViewSpanish = true;
		$backHomeURL = get_bloginfo('url') . "";
		$whoURL = get_bloginfo('url') . "/es/";
		/* $switchLangURL = get_bloginfo('url') . "/portfolio-en/";
		$switchLangLabel = "eng"; */
        break;
}

// set top menu items
$nav_menu_items = array([
	'name' => __('about me', 'nwrktheme'),
	'id-std' => 'author-linker-std',
	'id-mob' => 'author-linker-mob',
	'link' => $whoURL,
	'class' => ''
	],
	[
	'name' => __('samples', 'nwrktheme'),
	'id-std' => 'samples-linker-std',
	'id-mob' => 'samples-linker-mob',
	'link' => '#samples',
	'class' => 'selected'
	],
	[
	'name' => __('contact', 'nwrktheme'),
	'id-std' => 'contact-linker-std',
	'id-mob' => 'contact-linker-mob',
	'link' => '#contact',
	'class' => ''
	]);