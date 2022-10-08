<?php
/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function nwrk_register_sidebars() {

// MAIN SIDEBAR
/*register_sidebar(array(
	'id' => 'sidebar1',
	'name' => 'Sidebar 1',
	'description' => 'The first (primary) sidebar.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<div class="widgettitlewrap clearfix"><h4 class="widgettitle">',
	'after_title' => '</h4></div>',
));*/


// add footer widgets

  register_sidebar(array(
	'id' => 'footer-1',
	'name' => 'Footer Widget 1',
	'description' => 'The first footer widget.',
	'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widgettitle">',
	'after_title' => '</h4>',
  ));

  register_sidebar(array(
	'id' => 'footer-2',
	'name' => 'Footer Widget 2',
	'description' => 'The second footer widget.',
	'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widgettitle">',
	'after_title' => '</h4>',
  ));

  register_sidebar(array(
	'id' => 'footer-3',
	'name' => 'Footer Widget 3',
	'description' => 'The third footer widget.',
	'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widgettitle">',
	'after_title' => '</h4>',
  ));

	register_sidebar(array(
	'id' => 'footer-4',
	'name' => 'Footer Widget 4',
	'description' => 'The fourth footer widget.',
	'before_widget' => '<div id="%1$s" class="widget widgetFooter %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widgettitle">',
	'after_title' => '</h4>',
  ));


} 
?>