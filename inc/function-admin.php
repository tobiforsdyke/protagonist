<?php

/*

@package protagonist
  =====================
      ADMIN PAGE
  =====================
*/

function protagonist_add_admin_page(){
  //Generate admin page
  // 1-Page title, 2-menu title, 3-capabilities, 4-menu slug, 5-function, 6-icon (dashicons-heart), 7-menu location
  add_menu_page( 'Protagonist Options', 'Protagonist', 'manage_options', 'protagonist', 'protagonist_create_page', get_template_directory_uri() . 'dashicons-admin-customizer', 61 );

  //Generate admin sub pages
  // 1-slug, 2-page title, 3-menu title, 4-capabilities, 5-slug menu, 6-callback function (then add the function to be called below)
  add_submenu_page('protagonist', 'Protagonist Options', 'Settings', 'manage_options', 'protagonist', 'protagonist_create_page' );

  add_submenu_page('protagonist', 'Protagonist CSS Options', 'Custom CSS', 'manage_options', 'protagonist_css', 'protagonist_settings_page' );

}

add_action( 'admin_menu', 'protagonist_add_admin_page' );

function protagonist_create_page() {
  //generation of our admin page
  require_once( get_template_directory() . '/inc/templates/protagonist-admin.php' );
}

function protagonist_settings_page() {
  //generation of our admin settings page
  require_once( get_template_directory() . '/inc/templates/protagonist-customcss.php' );
}
