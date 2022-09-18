<?php namespace XAG\Admin;

if( !defined( 'ABSPATH' ) ) exit;

class XagSettings {

    public function __construct() {
        $this->initHooks();
    }

    public function initHooks() {
        add_action( 'acf/init', [ $this, 'addOptionsPages' ] );
    }

    public function addOptionsPages() {
        if( !function_exists( 'acf_add_options_page' ) ) return;

//        acf_add_options_page(
//            [
//                'page_title' => 'Theme settings',
//                'menu_title' => 'Theme settings',
//                'menu_slug'  => 'ivfmd-theme-settings',
//                'capability' => 'administrator',
//                'redirect'   => false
//            ]
//        );
    }

}

new XagSettings();