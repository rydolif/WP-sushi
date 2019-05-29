<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


//------------------настройка- ACF---------------------
    // if( function_exists('acf_add_options_page') ) {
     
    //     $option_page = acf_add_options_page(array(
    //         'page_title'    => 'Базовые блоки',
    //         'menu_title'    => 'Базовые блоки',
    //         'menu_slug'     => 'theme-general-settings',
    //         'capability'    => 'edit_posts',
    //         'redirect'  => false
    //     ));
     
    // }


// //------------------поля- ACF---------------------
// 	if( function_exists('acf_add_local_field_group') ):

// 	acf_add_local_field_group(array(
// 		'key' => 'group_5c693e30e57c9',
// 		'title' => 'Д/З',
// 		'fields' => array(
// 			array(
// 				'key' => 'field_5c693e3d97f6b',
// 				'label' => 'Видео',
// 				'name' => 'video',
// 				'type' => 'text',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'maxlength' => '',
// 			),
// 			array(
// 				'key' => 'field_5c693e5597f6c',
// 				'label' => 'Файл',
// 				'name' => 'file',
// 				'type' => 'file',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'return_format' => 'url',
// 				'library' => 'all',
// 				'min_size' => '',
// 				'max_size' => '',
// 				'mime_types' => '',
// 			),
// 		),
// 		'location' => array(
// 			array(
// 				array(
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'post',
// 				),
// 			),
// 		),
// 		'menu_order' => 0,
// 		'position' => 'normal',
// 		'style' => 'default',
// 		'label_placement' => 'top',
// 		'instruction_placement' => 'label',
// 		'hide_on_screen' => '',
// 		'active' => 1,
// 		'description' => '',
// 	));

// 	acf_add_local_field_group(array(
// 		'key' => 'group_5c673112846be',
// 		'title' => 'Курсы',
// 		'fields' => array(
// 			array(
// 				'key' => 'field_5c67312309cd0',
// 				'label' => 'Видео',
// 				'name' => 'video',
// 				'type' => 'wysiwyg',
// 				'instructions' => '',
// 				'required' => 1,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'tabs' => 'all',
// 				'toolbar' => 'full',
// 				'media_upload' => 1,
// 				'delay' => 0,
// 			),
// 			// array(
// 			// 	'key' => 'field_5c67f8d32c9d7',
// 			// 	'label' => 'file',
// 			// 	'name' => 'file',
// 			// 	'type' => 'file',
// 			// 	'instructions' => '',
// 			// 	'required' => 0,
// 			// 	'conditional_logic' => 0,
// 			// 	'wrapper' => array(
// 			// 		'width' => '',
// 			// 		'class' => '',
// 			// 		'id' => '',
// 			// 	),
// 			// 	'return_format' => 'url',
// 			// 	'library' => 'all',
// 			// 	'min_size' => '',
// 			// 	'max_size' => '',
// 			// 	'mime_types' => '',
// 			// ),
// 		),
// 		'location' => array(
// 			array(
// 				array(
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'homework',
// 				),
// 			),
// 		),
// 		'menu_order' => 0,
// 		'position' => 'normal',
// 		'style' => 'default',
// 		'label_placement' => 'top',
// 		'instruction_placement' => 'label',
// 		'hide_on_screen' => '',
// 		'active' => 1,
// 		'description' => '',
// 	));

// 	endif;