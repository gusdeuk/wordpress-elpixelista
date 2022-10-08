<?php
//---------------------------------------------------------------------------------------
// DECLARE PRODUCT POST TYPE
//---------------------------------------------------------------------------------------
class ProductPostType {
	function ProductPostType() {
		// Register custom post types
		register_post_type( 'product', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
			// let's now add all the options for this post type
			array('labels' => array(
				'name' => _x('Products', 'post type general name'), /* This is the Title of the Group */
				'singular_name' => _x('Product', 'post type singular name'), /* This is the individual type */
				'add_new' => _x('Add New Product', 'custom post type item'), /* The add new menu item */
				'add_new_item' => __('Add New Product'), /* Add New Display Title */
				'edit' => __( 'Edit' ), /* Edit Dialog */
				'edit_item' => __('Edit Product'), /* Edit Display Title */
				'new_item' => __('New Product'), /* New Display Title */
				'view_item' => __('View Product'), /* View Display Title */
				'search_items' => __('Search Products'), /* Search Custom Type Title */ 
				'not_found' =>  __('No Products.'), /* This displays if there are no entries yet */ 
				'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
				// deshabilitar PUBLIC para que las pages no sean accesibles
				'public' => true,
				'publicly_queryable' => true,
   				'show_in_menu' => true, 
				'exclude_from_search' => true,
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
				'menu_icon' => get_stylesheet_directory_uri() . '/images/app-icons/ico-wp-lat-yellow.png', /* the icon for the custom post type menu */
				// esto determina la url SLUG base para ARCHIVE (/products/) y tambien acceso a cada POST > (/products/lalapost)
				'rewrite' => array( 'slug' => 'products' ),
				'capability_type' => 'post',
				// archive
				'has_archive' => true,
				'hierarchical' => false,
				/* the next one is important, it tells what's enabled in the post editor */
				/*'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'page-attributes', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')*/
				'supports' => array( 'title', 'thumbnail', 'excerpt'),
				// exponer en REST+URL para consulta!
				'show_in_rest' => true,
				'rest_base' => 'products'
			) 
			/* end of options */
		); 
		/* end of register post type */

		// exponer en REST! Buenisimo
		// NOTA tambien estan disponibles campos ACF con el ACF to REST API plugin

		// https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-rest-api-support-for-custom-content-types/

		// EJEMPLO >> Muestra data de este post type (con embed objects)
		// http://localhost/webs-wp/networkian/wp-json/wp/v2/products?_embed

		// EJEMPLO >> Muestra data de post comunes con embed objects
		// http://localhost/webs-wp/networkian/wp-json/wp/v2/products?_embed

		// EJEMPLO >> Muestra data de pages comunes con embed objects
		// http://localhost/webs-wp/networkian/wp-json/wp/v2/pages?_embed

		// http://localhost/webs-wp/networkian/wp-json/wp/v2/category-product?_embed

		// DATA: 
		// VER AVA TODA LA DATA DE COMO CONSULTAR LA API
		// http://localhost/webs-wp/networkian/wp-json/wp/v2
		
		// llamo a funciones para customizar columnas y cosas de la lista del CMS para este post type
		add_filter("manage_edit-product_columns", array(&$this, "edit_columns_product"));
		add_action("manage_posts_custom_column", array(&$this, "custom_columns_product"));
		
		//REGISTRO LA TAXONOMIA DE CATEGORIZACION
		$labels = array(
			'name' => _x( 'Product Categories', 'taxonomy general name' ),
			'singular_name' => _x( 'Product Category', 'taxonomy singular name' ),
			'search_items' => __( 'Search Product Categories' ),
			'all_items' => __( 'All Product Categories' ),
			'parent_item' => __( 'Parent Product Category' ),
			'parent_item_colon' => __( 'Parent Product Category:' ),
			'edit_item' => __( 'Edit Product Category' ),
			'update_item' => __( 'Update Product Category' ),
			'add_new_item' => __( 'Add New Product Category' ),
			'new_item_name' => __( 'New Product Category Name' ),
			'menu_name' => __( 'Product Categories' ),
			);
		// taxonomy register
		register_taxonomy('category-product',array('product'), array(
			'hierarchical' => true,
			'public' => true,
			'publicly_queryable' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			// esto determina la url SLUG base para la taxonomia-categoria EJ > (/category-work/applications/)
			"rewrite" => array( 'slug' => 'category-product' ),
			"show_admin_column" => true,
			// exponer en REST + URL!
			"show_in_rest" => true,
			// esto determina la url base para REST
			"rest_base" => "category-product"
		));
	}
	
	// ---------------------------------------------------------
	// code para customizar columnas del CMS / LISTA de este port type
	// ---------------------------------------------------------
	function edit_columns_product($columns) {
		$columns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "Product title",
			/* "Col_product_description" => "Product Description", */
			"Col_product_PostPubDate" => "Published",
			"Col_product_categories" => "Product Categories",
			"template" => "Template",
			"slug" => "Slug",
			"thumbnail" => "Thumbnail"/* ,
			"Col_product_menu_order" => "Order", */
		);
		return $columns;
	}

	function custom_columns_product($column) {
		global $post;
		switch ($column)
		{
			case "Col_product_PostPubDate":
				echo (the_time("d/m/Y"));
				break;	
           /*  case "Col_product_description":
			$rest =  get_the_excerpt() ;  // returns "abcde"
				echo substr($rest, 0, 60). "...";
				break; */
			/* case "Col_product_menu_order":
				echo $post->menu_order;
				break; */
			// CUSTOM TAXONOMIES
			case "Col_product_categories":
				$technologies = get_the_terms(0, "category-product");
				//echo (count($technologies));
				$technologies_html = array();
				if(is_array($technologies)){
					foreach ($technologies as $technology)
						array_push($technologies_html, '<a href="' . get_term_link($technology->slug, "category-product") . '">' . $technology->name . '</a>');
					echo implode($technologies_html, ", ");
				}
				break;
		}
	}
	
}

// ---------------------------------------------------------
// Init PRODUCT POST TYPE!
// ---------------------------------------------------------
add_action("init", "productPostTypeInit");
function productPostTypeInit() { 
	global $ProductPostTypeMain;
	$ProductPostTypeMain = new ProductPostType();
}

?>