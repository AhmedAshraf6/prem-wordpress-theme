<?php 

/*
 =========================
    ADMIN PAGE
 =========================
*/

function anaqid_ahmed_add_admin_page(){

  // Genrarte anaqid admin page 
  // manage_options to make the only admin show this
  add_menu_page('anaqid Ahmed Options','anaqid','manage_options','alecadd_anaqid','anaqid_ahmed_create_page',get_template_directory_uri() . '/img/sunset-icon.png',110);
 
  // Genrarte subset anaqid admin page 
  add_submenu_page('alecadd_anaqid','anaqid Ahmed Options','settings','manage_options','alecadd_anaqid','anaqid_ahmed_create_page');
  add_submenu_page('alecadd_anaqid','Anaqid Css Options','Custom Css','manage_options','alecadd_anaqi_css','anaqid_theme_settings_page');

  // Active Custom Settings
  add_action('admin_init','anaqid_custom_settings');

}
add_action('admin_menu','anaqid_ahmed_add_admin_page');

function anaqid_custom_settings(){
 register_setting('anaqid-settings-group','first_name');
 //  first option => id of section second=> title of section third=> function will be called to genrate html inside this section fourth=> where thsis section be positioned and we choose parent page id 
 add_settings_section('anaqid-sidebar-options','Sidebar Options','anaqid_sidebar_options','alecadd_anaqid');
}

function anaqid_ahmed_create_page(){
  require_once(get_template_directory() . '/inc/templates/anaqid-admin.php');
}
function anaqid_theme_settings_page(){
  // generation Of our admin page
  
}