<?php
/*
Plugin Name: Wordpress Bootstrap Visual Editor Styles
Plugin URI: https://pureservices.com.au
Description: Define Bootstrap styles for the style drop-down menu.
Version: 1.0.0
Author: Mathew Callaghan
Author URI: https://mathew.callaghan.xyz
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function wp_bt_visual_editor_styles( $init ) {

$init['block_formats'] = "Paragraph=p; Heading 1=h1; Heading 2=h2; Heading 3=h3; Heading 4=h4; Heading 5=h5; Heading 6=h6; Preformatted=pre";

$style_formats = array(

  array(
    'title' => 'Lead',
    'block' => 'p',
    'classes' => 'lead',
  ),  

  array(
    'title' => 'Mark',
    'block' => 'mark',
  ),

  array(
    'title' => 'Small',
    'block' => 'small',
  ),

  array(
    'title' => 'Underline',
    'block' => 'u',
  ),

  array(
    'title' => 'Blockquotes',
    'block' => 'blockquote',
  ),
);


$init['style_formats'] = json_encode( $style_formats );  

return $init;
}
add_filter( 'tiny_mce_before_init', 'wp_bt_visual_editor_styles' );

function wp_bt_mce_buttons( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}

add_filter( 'mce_buttons_2', 'wp_bt_mce_buttons' );



