 <?php

 /**
 * Plugin Name:       Elementor Dyroth Widget
 * Plugin URI:        
 * Description:       Simple plugin to add custom elementor widget.
 * Version:           1.0.0
 * Author:            Dyroth
 * Author URI:        
 * Text Domain:       elementor-dyroth-widget

 */

 if( ! defined('ABSPATH')) {
    exit; // Exit if directly accessed.
 }

 function register_elementor_dyroth_widget( $widgets_manager) {
   require_once(__DIR__ . '/widgets/dyroth-widget.php');//include the widget file   
   $widgets_manager->register( new \Elementor_Dyroth_Widget());// register the widget
 }

 add_action( 'elementor/widgets/register', 'register_elementor_dyroth_widget' );


 
 function enqueue_dyroth_styles(){
 
  wp_register_style( 'dyroth-styles', plugins_url( '/css/dyroth-styles.css', __FILE__ ) );

  wp_enqueue_style( 'dyroth-styles' );
 }
 add_action( 'elementor/frontend/after_enqueue_styles', 'enqueue_dyroth_styles' );
 
 