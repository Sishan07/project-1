<?php
    register_nav_menus(
        array('primary-menu' =>'Top Menu')
    );
         add_theme_support('post-thumbnails');
         add_theme_support('custom-header');

         
            /* Register the 'primary' sidebar. */
            register_sidebar(
                array(
                    'id'            => 'primary',
                    'name'          => __( 'Primary Sidebar' ),
                    'description'   => __( 'A short description of the sidebar.' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
                )
            );

            add_theme_support('custom-background');

            add_post_type_support('page','excerpt');
            // create custon post type
add_action('init','my_custom_post_type');
function my_custom_post_type(){
	register_post_type('my_product',
		array(
			'labels'      => array(
				'name'          => __('My Products', 'textdomain'),
				'singular_name' => __('My Product', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
	register_post_type('my_news',
		array(
			'labels'      => array(
				'name'          => __('My News', 'textdomain'),
				'singular_name' => __('My New', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}
// create meta box
add_action( 'add_meta_boxes', 'my_add_custom_box' );
function my_add_custom_box(){
	$screens = ['my_product','my_news'];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'my_meta_box_id',                 // Unique ID
			'Custom Meta Box Title',      // Box title
			'my_custom_meta_box_fields',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
// add fields in my custom meta box
function my_custom_meta_box_fields($post){ ?>
	<label>Regular Price</label>
	<input type="number" name="regular_price" value="<?php echo get_post_meta( $post->ID, 'regular_price', true ); ?>">
	<br>
	
	<label>Selling Price</label>
	<input type="number" name="selling_price" value="<?php echo get_post_meta( $post->ID, 'selling_price', true ); ?>">
	<br>
	<label>Contact Number</label>
	<input type="number" name="contact_number" value="<?php echo get_post_meta( $post->ID, 'contact_number', true ); ?>">
	
<?php }
// saving data into metapost
add_action('save_post', 'save_my_product_custom_meta_box_field');
function save_my_product_custom_meta_box_field($post_id){
    update_post_meta($post_id,'regular_price',$_POST['regular_price']);

    update_post_meta($post_id,'selling_price',$_POST['selling_price']);

	update_post_meta($post_id,'contact_number',$_POST['contact_number']);
}

           
?>
