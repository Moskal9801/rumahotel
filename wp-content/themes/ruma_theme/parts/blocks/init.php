<?php
	
	// регистрация Guthenberg блока
	function slider_register_blocks(): void {
		
		// Проверяем, что функция доступна.
		if ( function_exists( 'acf_register_block_type' ) ) {
			
			// Регистрируем блок рекомендаций.
			acf_register_block_type( [
				'name'            => 'slider',
				'title'           => __( 'Слайдер' ),
				'description'     => __( 'Swiper slider' ),
				'icon'            => 'format-gallery',
				'render_template' => '/parts/blocks/slider/slider.php',
				'enqueue_style'   => get_template_directory_uri() . '/parts/blocks/slider/slider.css',
				'enqueue_script'  => get_template_directory_uri() . '/parts/blocks/slider/slider.js',
				'category'        => 'formatting',
				'mode'            => 'edit'
			] );
		}
	}
	
	// регистрация Guthenberg блока
	function lid_register_blocks(): void {
		
		// Проверяем, что функция доступна.
		if ( function_exists( 'acf_register_block_type' ) ) {
			
			// Регистрируем блок рекомендаций.
			acf_register_block_type( [
				'name'            => 'gutenberg-lid',
				'title'           => __( 'Лид' ),
				'description'     => __( 'Первый абзац статьи' ),
				'icon'            => 'editor-paragraph',
				'render_template' => '/parts/blocks/lid/lid.php',
				'enqueue_style'   => get_template_directory_uri() . '/parts/blocks/lid/lid.css',
				'category'        => 'formatting',
				'mode'            => 'edit'
			] );
		}
	}

	// регистрация Guthenberg блока
	function special_register_blocks(): void {

		// Проверяем, что функция доступна.
		if ( function_exists( 'acf_register_block_type' ) ) {

			// Регистрируем блок рекомендаций.
			acf_register_block_type( [
				'name'            => 'gutenberg-specials',
				'title'           => __( 'Кнопки для спецпредложения' ),
				'description'     => __( 'Кнопки для спецпредложения' ),
				'icon'            => 'editor-paragraph',
				'render_template' => '/parts/blocks/special/special.php',
//				'enqueue_style'   => get_template_directory_uri() . '/parts/blocks/lid/lid.css',
				'category'        => 'formatting',
				'mode'            => 'edit'
			] );
		}
	}
	
	add_action( 'acf/init', 'slider_register_blocks' );
	add_action( 'acf/init', 'lid_register_blocks' );
	add_action( 'acf/init', 'special_register_blocks' );

	if ( function_exists( 'acf_add_local_field_group' ) ):
		acf_add_local_field_group(array(
			'key' => 'group_674ffd22aea4h',
			'title' => 'Внутренняя страница «Спецпредложения»',
			'fields' => array(
				array(
					'key' => 'field_674ffd005124h',
					'label' => 'Кнопка бронирования',
					'name' => 'special-single-button',
					'aria-label' => '',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_674ffd355124h',
							'label' => 'Наименование кнопки',
							'name' => 'button-name',
							'aria-label' => '',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'rows' => 1,
							'placeholder' => '',
							'new_lines' => '',
						),
						array(
							'key' => 'field_674ffd475124h',
							'label' => 'Ссылка кнопки',
							'name' => 'button-links',
							'aria-label' => '',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'rows' => 1,
							'placeholder' => '',
							'new_lines' => '',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/gutenberg-specials',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		));

		acf_add_local_field_group( [
			'key'                   => 'group_64c31e481c00d',
			'title'                 => 'Слайдер',
			'fields'                => [
				[
					'key'               => 'field_64c31e488f8fa',
					'label'             => 'Слайдер',
					'name'              => 'swiper-slider',
					'aria-label'        => '',
					'type'              => 'gallery',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => '',
					],
					'return_format'     => 'id',
					'library'           => 'all',
					'min'               => '',
					'max'               => '',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
					'insert'            => 'append',
					'preview_size'      => 'medium',
				],
			],
			'location'              => [
				[
					[
						'param'    => 'block',
						'operator' => '==',
						'value'    => 'acf/slider',
					],
				],
			],
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
			'show_in_rest'          => 0,
		] );
	
		acf_add_local_field_group(array(
			'key' => 'group_654aeba48c16b',
			'title' => 'Лид',
			'fields' => array(
				array(
					'key' => 'field_654aeba456414',
					'label' => 'Лид',
					'name' => 'gutenberg-lid',
					'aria-label' => '',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'rows' => '',
					'placeholder' => '',
					'new_lines' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/gutenberg-lid',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		));
	
	endif;
	

