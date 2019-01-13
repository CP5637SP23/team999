<?php

function team999(){
	
	/*Stylesheets*/
	
	
	wp_enqueue_style('main_style',get_stylesheet_uri());
	wp_enqueue_style('style_bootstrap_file',get_template_directory_uri().'/styles/bootstrap-4.1.2/bootstrap.min.css');
	wp_enqueue_style('style_file',get_template_directory_uri().'/styles/main_styles.css');
	wp_enqueue_style('style_responsive_file',get_template_directory_uri().'/styles/responsive.css');
	
	
	
	
	/*javascripts*/
	
	
	wp_enqueue_script('jquery-3.2.1.min.js',get_template_directory_uri().'/js/jquery-3.2.1.min.js',array(),'1.1',true);
	wp_enqueue_script('bootstrap-4.1.2',get_template_directory_uri().'/styles/bootstrap-4.1.2/popper.js',array(),'1.1',true);
	wp_enqueue_script('bootstrap-4.1.2',get_template_directory_uri().'/styles/bootstrap-4.1.2/bootstrap.min.js',array(),'1.1',true);
	wp_enqueue_script('google_map',get_template_directory_uri().'/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA',array(),'1.1',true);
	wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js',array(),'1.1',true);
		
	
	
}
/* attach with the action hook */



add_action('wp_enqueue_scripts','team999');





 function register_team999_menu(){    //Navigation Menu
     // menu register code
  register_nav_menus(
            array(
                'primary-menu' =>__('Primary Menu'), // Id and Name
                'footer-menu' =>__('Footer Menu') // Id and Name
            )
    );
  }


// attach with action hook
  add_action('init', 'register_team999_menu');  
  
  

  
  function themename_custom_logo_setup() {
    $defaults = array(
        'height' => 100,
        'width' => 177
    );
    add_theme_support('custom-logo', $defaults);
}



// adding with action hook
add_action('after_setup_theme', 'themename_custom_logo_setup'); 



?>