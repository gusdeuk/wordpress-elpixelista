<?php
//*******************************************************************	
// Custom custom meta box in the dashboard
add_action('wp_dashboard_setup', 'mycustom_dashboard_widgets');

function mycustom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget1', 'test1', 'custom_dashboard_help1');
wp_add_dashboard_widget('custom_help_widget2', 'test2', 'custom_dashboard_help2');
wp_add_dashboard_widget('custom_help_widget4', 'test3', 'custom_dashboard_help3');
wp_add_dashboard_widget('custom_help_widget3', 'test4', 'custom_dashboard_help4');
}

function custom_dashboard_help1() {
    require_once( 'admin-dashboard-panels/panel_1.php' ); 
}

function custom_dashboard_help2() {
    require_once( 'admin-dashboard-panels/panel_2.php' ); 
}

function custom_dashboard_help3() {
    require_once( 'admin-dashboard-panels/panel_3.php' ); 
}

function custom_dashboard_help4() {
    require_once( 'admin-dashboard-panels/panel_4.php' ); 
}

?>