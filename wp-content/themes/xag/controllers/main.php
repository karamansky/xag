<?php

if( !defined( 'ABSPATH' ) ) exit;

$controllers_path = get_stylesheet_directory().'/controllers/';
$controllers = [
    'Admin'      => [ 'XagSettings' ],
    'Display'    => [
        'DisplayGlobal',
        'GutenbergBlocks'
    ],
    'Menu'       => [
//    	'RegisterCustom',
//		'MenuDisplay'
	],
    'Posts'      => [
        'PostsLoop'
    ],
//    'Taxonomies' => [ 'RegisterCustom' ]
];

foreach( $controllers as $key => $controller ) {
    foreach( $controller as $class ) {
        require_once $controllers_path.$key.'/'.$class.'.php';
    }
}

function debug_data( $data, $exit = true, $hidden = false ) {
    $pre = !$hidden ? "<pre>" : "<pre style='display: none'>";
    echo $pre;
    print_r( $data );
    echo "</pre>";
    if( $exit ) exit;
}