<?php namespace XAG\Taxonomies;

if( !defined( 'ABSPATH' ) ) exit;

class RegisterCustom {

    public function __construct() {
        $this->initHooks();
    }

    public function initHooks() {
        add_action( 'init', [ $this, 'registerCustomTaxonomies' ] );
    }

    public function registerCustomTaxonomies() {
        if( !function_exists( 'register_taxonomy' ) ) return;

        static::registerCustomTaxonomySingle( 'county', 'Counties', 'County', 'county', [ 'experiences', 'tribe_venue', 'tribe_events' ] );
    }

    static public function registerCustomTaxonomySingle( $taxonomy_name, $label, $singular, $slug = '', $post_types = [] ) {
        $slug = !empty( $slug ) ? $slug : $taxonomy_name;
        $post_types = !empty( $post_types ) ? $post_types : [ "post" ];
        $post_types = is_array( $post_types ) ? $post_types : [ $post_types ];

        $args = [
            "label"                 => __( $label, "ivffmd-theme" ),
            "labels"                => [
                "name"          => __( $label, "ivfmd-theme" ),
                "singular_name" => __( $singular, "ivfmd-theme" ),
            ],
            "public"                => true,
            "publicly_queryable"    => true,
            "hierarchical"          => true,
            "show_ui"               => true,
            "show_in_menu"          => true,
            "show_in_nav_menus"     => true,
            "query_var"             => true,
            "rewrite"               => [ 'slug' => $slug, 'with_front' => true, ],
            "show_admin_column"     => false,
            "show_in_rest"          => true,
            "show_tagcloud"         => false,
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "show_in_quick_edit"    => false,
            "show_in_graphql"       => false,
            'meta_box_cb'           => 'post_categories_meta_box'
        ];

        register_taxonomy( $taxonomy_name, $post_types, $args );
    }

}

new RegisterCustom();