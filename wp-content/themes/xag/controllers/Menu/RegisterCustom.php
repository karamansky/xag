<?php namespace IVFMD\Menu;

if( !defined( 'ABSPATH' ) ) exit;

class RegisterCustom {

    public function __construct() {
        $this->initHooks();
    }

    public function initHooks() {
        add_action( 'after_setup_theme', [ $this, 'registerCustomMenuLocations' ] );
    }

    public function registerCustomMenuLocations() {
        register_nav_menus( [
            'main_primary' => 'Primary',
            'main_buttons_menu' => 'Main buttons menu',
            'footer_menu' => 'Footer menu',
        ] );
    }

}

new RegisterCustom();