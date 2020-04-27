<?php

function register_acf_block_types() {
	/**
	 * ACF Block - Testimonial
	 */
	acf_register_block_type(
		array(
			'name'            => 'testimonial',
			'title'           => __( 'Depoimento' ),
			'description'     => __( 'A custom testimonial block.' ),
			'render_template' => 'template-parts/blocks/testimonial/testimonial.php',
			'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css',
			'align'           => 'wide',
			'post_types'      => array( 'portfolio', 'page' ),
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
			'keywords'        => array( 'testimonial', 'quote', 'depoimento' ),
			'supports'        => array(
				'align'    => false,
				'multiple' => false,
			),
		)
	);

	/**
	 * ACF Block - Swiper
	 */

	acf_register_block_type(
		array(
			'name'            => 'swiper',
			'title'           => __( 'Swiper' ),
			'description'     => __( 'Swiper para as imagens do portfólio.' ),
			'render_template' => 'template-parts/blocks/swiper/swiper.php',
			'enqueue_assets'  => function () {
				wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/css/swiper.min.css', array(), 'latest' );
				wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/js/swiper.min.js', array( 'jquery' ), 'latest', true );
				wp_enqueue_style( 'block-swiper', get_template_directory_uri() . '/template-parts/blocks/swiper/swiper.css', array(), VERSION );
				wp_enqueue_script( 'block-swiper', get_template_directory_uri() . '/template-parts/blocks/swiper/swiper.js', array(), VERSION, true );
			},

			'category'        => 'widgets',
			'icon'            => 'slides',
			'align'           => 'full',
			'keywords'        => array( 'swiper', 'slide', 'slider', 'gallery', 'galeria' ),
		)
	);

	/**
	 * ACF Block - Image Grid
	 */

	acf_register_block_type(
		array(
			'name'            => 'image-grid',
			'title'           => __( 'Grid de 3 imagens' ),
			'description'     => __( 'Grid de 3 imagens.' ),
			'render_template' => 'template-parts/blocks/image-grid/image-grid.php',
			'enqueue_assets'  => function () {
				wp_enqueue_style( 'block-image-grid', get_template_directory_uri() . '/template-parts/blocks/image-grid/image-grid.css', array(), VERSION );
			},
			'post_types'      => array( 'portfolio' ),
			'category'        => 'widgets',
			'icon'            => 'grid-view',
			'align'           => 'full',
			'keywords'        => array( 'grid', 'imagem', 'imagens', 'gallery', 'galeria' ),
		)
	);

	/**
	 * ACF Block - Hero
	 */
	acf_register_block_type(
		array(
			'name'            => 'hero',
			'title'           => __( 'Hero' ),
			'description'     => __( 'Hero' ),
			'render_template' => 'template-parts/blocks/hero/hero.php',
			'align'           => 'wide',
			'category'        => 'widgets',
			'post_types'      => array( 'portfolio', 'post', 'page' ),
			'icon'            => 'laptop',
			'keywords'        => array( 'hero', 'header', 'title', 'título', 'cabeçalho' ),
			'supports'        => array(
				'align'    => array( 'wide' ),
				'multiple' => false,
			),
		)
	);

		/**
	 * ACF Block - Clients
	 */
	acf_register_block_type(
		array(
			'name'            => 'clients',
			'title'           => __( 'Clientes' ),
			'description'     => __( 'Clientes' ),
			'render_template' => 'template-parts/blocks/clients/clients.php',
			'category'        => 'widgets',
			'post_types'      => array( 'portfolio', 'post', 'page' ),
			'icon'            => 'laptop',
			'keywords'        => array( 'clients', 'clientes' ),
			'align'           => 'wide',
			'supports'        => array(
				'align'    => array( 'full' ),
				'multiple' => false,
			),
		)
	);

	/**
	  * ACF Block - Latest Works
	  */
	acf_register_block_type(
		array(
			'name'            => 'latest-works',
			'title'           => __( 'Últimos trabalhos' ),
			'description'     => __( 'Últimos trabalhos' ),
			'render_template' => 'template-parts/blocks/latest-works/latest-works.php',
			'category'        => 'widgets',
			'post_types'      => array( 'portfolio', 'post', 'page' ),
			'icon'            => 'laptop',
			'align'           => 'full',
			'keywords'        => array( 'latest-works', 'slider', 'portfolio', 'trabalhos' ),
			'supports'        => array(
				'align'    => false,
				'multiple' => false,
			),
		)
	);

	   /**
	 * ACF Block - Latest Works
	 */
	acf_register_block_type(
		array(
			'name'            => 'section-background',
			'title'           => __( 'Conteúdo com Background' ),
			'description'     => __( 'Conteúdo com Background' ),
			'render_template' => 'template-parts/blocks/section-background/section-background.php',

			'category'        => 'widgets',
			'post_types'      => array( 'portfolio', 'post', 'page' ),
			'icon'            => 'laptop',
			'keywords'        => array( 'section-background', 'slider', 'portfolio', 'trabalhos' ),
			'align'           => 'full',
			'supports'        => array(
				'align'    => false,
				'multiple' => false,
			),
		)
	);

		   /**
	 * ACF Block - Latest Works
	 */
	acf_register_block_type(
		array(
			'name'            => 'features',
			'title'           => __( 'Diferenciais' ),
			'description'     => __( 'Diferenciais' ),
			'render_template' => 'template-parts/blocks/features/features.php',

			'category'        => 'widgets',
			'post_types'      => array( 'portfolio', 'post', 'page' ),
			'icon'            => 'laptop',
			'keywords'        => array( 'features', 'slider', 'portfolio', 'trabalhos' ),
			'align'           => 'wide',
			'supports'        => array(
				'align' => false,
			),
		)
	);
}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}
