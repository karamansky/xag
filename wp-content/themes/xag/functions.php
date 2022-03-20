<?php
	/**
	 * require custom controllers
	 */
//	require_once(get_stylesheet_directory() . '/controllers/main.php');

	if (!function_exists('xag_setup')) {
		function xag_setup()
		{

			load_theme_textdomain('xag', get_template_directory() . '/languages');

			add_theme_support('post-thumbnails');
			set_post_thumbnail_size(1568, 9999);

			register_nav_menus(
				array(
					'primary' => esc_html__('Primary menu', 'xag'),
					'language' => __('Language', 'xag'),
					'footer1' => __('Footer The Company', 'xag'),
					'footer2' => __('Footer Social Media', 'xag'),
					'footer3' => __('Footer Terms', 'xag'),
				)
			);

		}

		add_action('after_setup_theme', 'xag_setup');
	}

	/**
	 * Enqueue scripts and styles.
	 */
	function xag_scripts()
	{
		//styles
		wp_enqueue_style('xag-slick', get_template_directory_uri() . '/app/libs/slick-carousel/slick/slick.css', array());
		wp_enqueue_style('xag-slick-theme', get_template_directory_uri() . '/app/libs/slick-carousel/slick/slick-theme.css', array());
		wp_enqueue_style('xag-formstyle', get_template_directory_uri() . '/app/libs/jquery.form-styler/dist/jquery.formstyler.css', array());
		wp_enqueue_style('xag-modal', get_template_directory_uri() . '/app/libs/jquery.arcticModal-0.3/jquery.arcticmodal-0.3.css', array());
		wp_enqueue_style('xag-style', get_template_directory_uri() . '/app/css/main.min.css', array());

		//scripts
		wp_enqueue_script('xag-scripts', get_template_directory_uri() . '/app/js/scripts.min.js', 'jquery', 1.0, true);
		wp_enqueue_script('xag-arctic', get_template_directory_uri() . '/app/libs/jquery.arcticmodal-0.3/jquery.arcticmodal-0.3.min.js', 'jquery', 1.0, true);
		wp_enqueue_script('xag-common', get_template_directory_uri() . '/app/js/common.js', 'jquery', 1.0, true);
	}

	add_action('wp_enqueue_scripts', 'xag_scripts');




	function xag_register_post_types(){

		$args = array(
			'labels' => array(
				'menu_name' => 'Категории',
				'name'              => 'Категории',
				'singular_name'     => 'Категория',
				'search_items'      => 'Поиск категории',
				'all_items'         => 'Все категории',
				'view_item '        => 'Показать',
				'edit_item'         => 'Изменить',
				'update_item'       => 'Обновить',
				'add_new_item'      => 'Добавиь',
				'back_to_items'     => '← Назад',
			),
			'public' => true,
			'hierarchical'               => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'solution_category', 'solutions', $args );

		register_post_type('solutions', array(
				'labels' => array(
					'name' => 'Products',
					'singular_name' => 'Products',
					'add_new' => 'Добавить',
					'add_new_item' => 'Добавить решение',
					'edit_item' => 'Изменить',
					'new_item' => 'Новый',
					'view_item' => 'Показать',
					'search_items' => 'Найти',
					'not_found' => 'Не найдено Agriculture Solutions',
					'not_found_in_trash' => 'Не найдено Agriculture Solutions в корзине',
					'menu_name' => 'Products'
				),
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => false,
				'rewrite'  => array( 'slug' => 'solutions' ),
				'taxonomies' => array('solution_category'),
				'has_archive' => true,
				'capability_type' => 'post',
				'supports' => array('title', 'excerpt', 'editor', 'thumbnail')
			)
		);



	}
	add_action( 'init', 'xag_register_post_types' );



// add custom options pages
	if (function_exists('acf_add_options_page')) {

		acf_add_options_page(array(
			'page_title' => 'Theme Global Options',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-global-options',
			'redirect' => false
		));
	}



	/**
	 * Add logos for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function xag_customize_register( $wp_customize ) {
		//All our sections, settings, and controls will be added here
		$wp_customize->add_section( 'xag_logos' , array(
			'title'      => __( 'Site Logos', 'xag' ),
			'priority'   => 10,
		) );

		$wp_customize->add_setting('xag_logo_header', array(
			'default'        => '',
		));

		$wp_customize->add_setting('xag_logo_footer', array(
			'default'        => '',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo_header',
				array(
					'label'      => __( 'Upload header logo', 'xag' ),
					'section'    => 'xag_logos',
					'settings'   => 'xag_logo_header'
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo_footer',
				array(
					'label'      => __( 'Upload footer logo', 'xag' ),
					'section'    => 'xag_logos',
					'settings'   => 'xag_logo_footer'
				)
			)
		);

	}
	add_action( 'customize_register', 'xag_customize_register', 1 );


	/* Admin includes
	==================================================================================================== */

if ( is_admin() ) {



}


/* Contact Form 7
==================================================================================================== */

// Disable default CF7 CSS
add_filter( 'wpcf7_load_css', '__return_false' );
