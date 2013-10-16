<?php

	add_action('widgets_init', 'portfolio_widgets_init');
	add_action( 'after_setup_theme', 'portfolio_setup' );
	add_action('init', 'create_post_type');
	add_action( 'init', 'create_projets_taxonomies' );
	add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
	add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
 
	function my_deregister_styles() {
		wp_deregister_style( 'wp-admin' );
	}

	function add_my_post_types_to_query( $query ) {
		if ( is_home() && $query->is_main_query() )
			$query->set( 'post_type', array( 'post', 'page', 'projets' ) );
		return $query;
	}

	function portfolio_widgets_init(){

		register_sidebar( array(
			'name' => __( 'Main Sidebar', 'portfolio' ),
			'id' => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Secondary Sidebar', 'portfolio' ),
			'id' => 'sidebar-2',
			'description' => __( 'description', 'portfolio' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

	}

	function portfolio_setup(){
		register_nav_menu( 'primary', __( 'Primary Menu', 'portfolio' ) );
	}

	function create_post_type(){
		register_post_type( 'projets', 
			array(
				'labels' => array(
					'name' => __('Projets'),
					'singular_name' => __('Projet')
					),
				'public' => true,
				'has_archive' => true,
				'supports' => array('title', 'editor', 'excerpt'),
				'rewrite' => array('slug' => 'projets')

				) 
			);	
		register_post_type( 'socials', 
			array(
				'labels' => array(
					'name' => __('Socials'),
					'singular_name' => __('Social')
					),
				'public' => true,
				'has_archive' => true,
				'supports' => array(),
				) 
			);
		register_post_type( 'interrests', 
			array(
				'labels' => array(
					'name' => __('Interrests'),
					'singular_name' => __('Interrest')
					),
				'public' => true,
				'has_archive' => true,
				'supports' => array(),
				) 
			);
	}
	

	function create_projets_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Genres' ),
		'all_items'         => __( 'All Genres' ),
		'parent_item'       => __( 'Parent Genre' ),
		'parent_item_colon' => __( 'Parent Genre:' ),
		'edit_item'         => __( 'Edit Genre' ),
		'update_item'       => __( 'Update Genre' ),
		'add_new_item'      => __( 'Add New Genre' ),
		'new_item_name'     => __( 'New Genre Name' ),
		'menu_name'         => __( 'Genre' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'important' ),
	);

	register_taxonomy( 'Genre', array( 'projets' ), $args );

}

