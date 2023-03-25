<?php namespace XAG\Display;

if( !defined( 'ABSPATH' ) ) exit;

class GutenbergBlocks {

    public function __construct() {
        $this->initHooks();
    }

    public function initHooks() {
        add_action( 'acf/init', [ $this, 'addBlocks' ] );
		add_action( 'block_categories', [ $this, 'add_custom_gutenberg_block_category' ], 10, 2 );
    }


	public function add_custom_gutenberg_block_category( $categories ) {
		return array_merge(
			[
				[
					'slug'  => 'xag-blocks',
					'title' => __( 'XAG Blocks', 'xag-blocks' ),
				],
				[
					'slug'  => 'xag-landing-blocks',
					'title' => __( 'XAG Landing Blocks', 'xag-landing-blocks' ),
				],
			],
			$categories
		);
	}


    public static function checkForPreview($block) {
        if( empty( $_POST['query']['preview'] ) ) return false;

        echo $block['title'];
        /* Render screenshot if it's exist for example */
        echo !empty( $block['example']['attributes']['data']['image'] ) ? $block['example']['attributes']['data']['image'] : '';

        return true;
    }

    public function addBlocks() {
        if( !function_exists( 'acf_register_block_type' ) ) return;

        $blocks = $this->returnListOfBlocks();
        foreach( $blocks as $block ) {
            if( empty( $block['name'] ) ) continue;

            acf_register_block_type(
                [
                    'name'            => $block['name'],
                    'title'           => __( !empty( $block['title'] ) ? $block['title'] : $block['name'] ),
                    'description'     => !empty( $block['description'] ) ? __( $block['description'] ) : '',
                    'render_template' => 'template-parts/blocks/'.$block['name'].'.php',
                    'category'        => !empty( $block['category'] ) ? $block['category'] : '',
                    'icon'            => !empty( $block['icon'] ) ? $block['icon'] : [ 'background' => '#B60000', 'src' => 'desktop' ],
                    'keywords'        => !empty( $block['keywords'] ) ? $block['keywords'] : [],
                    'example'         => !empty( $block['example'] ) ? $block['example'] : [],
                ]
            );
        }
    }

    public function returnListOfBlocks() {
        return [
//            [
//                'name'     => 'block_with_landing_hero',
//                'title'    => 'Block with header (hero-block)',
//                'category' => 'xag-landing-blocks',
//                'icon'     => [ 'background' => '#B60000', 'src' => 'minus' ],
//                'keywords' => [ 'header', 'main block', 'top', 'menu', 'hamburger' ],
//            ],
//            [
//                'name'        => 'block_with_landing_hero',
//                'title'       => 'Block with header (hero-block)',
//                'category'    => 'xag-landing-blocks',
//                'description' => '',
//                'icon'        => [ 'background' => '#B60000', 'src' => 'admin-home' ],
//                'keywords'    => [ 'hero', 'video', 'header', 'block' ],
//                'example'     => [
//                    'attributes' => [
//                        'mode' => 'preview',
//                        'data' => [
//	                        'image' => '<img src="'.get_template_directory_uri().'/app/img/modules/block-with-landing-hero-module.png" style="display: block; margin: 0 auto; width: 100%; object-fit: contain;">',
//                        ]
//                    ]
//                ]
//            ],
//			[
//				'name'        => 'block_with_landing_hero2',
//				'title'       => 'Block with header2 (hero2-block)',
//				'category'    => 'xag-landing-blocks',
//				'description' => '',
//				'icon'        => [ 'background' => '#B60000', 'src' => 'admin-home' ],
//				'keywords'    => [ 'hero2', 'header', 'block' ],
//				'example'     => [
//					'attributes' => [
//						'mode' => 'preview',
//						'data' => [
//							'image' => '<img src="'.get_template_directory_uri().'/app/img/modules/block-with-landing-hero2-module.png" style="display: block; margin: 0 auto; width: 100%; object-fit: contain;">',
//						]
//					]
//				]
//			],
        ];
    }

}

new GutenbergBlocks();

class_alias( 'XAG\Display\GutenbergBlocks', 'GutenbergBlocks' );