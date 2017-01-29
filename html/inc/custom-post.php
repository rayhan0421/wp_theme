<?php 

/* function slider_post(){
	
	$args = array(
		
		'label'=>'Sliders',
		'public'=>true,
		'menu_position'=>10,
		'supports'=>array('title','editor','thumbnail','excerpt'),
	);
	register_post_type('slider',$args);
}
add_action('init','slider_post'); */



function slider_post() {
	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Slider', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Slider', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Sliders', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Sliders', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Sliders found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post' );


//Team Custom post type

add_action( 'init', 'team_post_type' );

function team_post_type() {
	$labels = array(
		'name'               => _x( 'Teams', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Team', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Teams', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Team', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Team', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Team', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Team', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Team', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Teams', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Teams', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Teams:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Teams found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Teams found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'team', $args );
}

//Register services custom post type


function service_post_type() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Service', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Service', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Service', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Service', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Service', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Services', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Services', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Services:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Services found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'service', $args );
}
add_action( 'init', 'service_post_type' );

//Register service metabox

function service_meta_box(){
	
	add_meta_box(
	
		'service_icon',//id
		'Service Metabox',//title
		'service_icon_callback',//callback
		'service',//screen
		'normal',//context
		'high'//priority
	);
	
	//$screen = array('post','page','team','service');
}
add_action('add_meta_boxes','service_meta_box');

function service_icon_callback($post){
	
	$s_icon = get_post_meta($post->ID,'s_icon',true);
	wp_nonce_field('save_service_meta','service_nonce');
	?>
		<p>
			<label>Icon</label>
			<input type="text" name="s_icon" value="<?php echo $s_icon;?>"/>
		</p>
	<?php
}

function save_service_meta($post_id){
	
	// Check if our nonce is set.
	if(! isset($_POST['service_nonce'])){
		
		return;
	}
	
	// Verify that the nonce is valid.
	
	if(! wp_verify_nonce($_POST['service_nonce'],'save_service_meta')){
		
		return;
	}
	
	// Make sure that it(input) is set.
	
	if(! isset($_POST['s_icon'])){
		
		return;
	}
	
	// Sanitize user input.
	
	$my_s_icon = sanitize_text_field($_POST['s_icon']);
	
	// Update the meta field in the database
	
	update_post_meta($post_id,'s_icon',$my_s_icon);
	
}
add_action('save_post','save_service_meta');


//Register Pricing Post type

function pricing_post_type() {
	$labels = array(
		'name'               => _x( 'Pricings', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Pricing', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Pricings', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Pricing', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Pricing', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Pricing', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Pricing', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Pricing', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Pricing', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Pricings', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Pricings', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Pricings:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Pricings found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Pricings found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Pricing' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail',  )
	);

	register_post_type( 'pricing', $args );
}
add_action( 'init', 'pricing_post_type' );


//Register Pricing metabox

function pricing_post_meta(){
	
	add_meta_box(
		
		'pricing_meta',//id
		'Pricing MetaBOx',//title
		'pricing_meta_callback',//callback
		'pricing',//screen
		'normal',//context
		'high'//priority
	);
}
add_action('add_meta_boxes','pricing_post_meta');


function pricing_meta_callback($post){
	
	$p_package = get_post_meta($post->ID,'p_package',true);
	$p_currency = get_post_meta($post->ID,'p_currency',true);
	$p_price = get_post_meta($post->ID,'p_price',true);
    $p_page = get_post_meta($post->ID,'p_page',true);
    $p_domain = get_post_meta($post->ID,'p_domain',true);
    $p_hosting = get_post_meta($post->ID,'p_hosting',true);
    $p_support = get_post_meta($post->ID,'p_support',true);
    $p_revision = get_post_meta($post->ID,'p_revision',true);
    $p_orderlink = get_post_meta($post->ID,'p_orderlink',true);
	
	wp_nonce_field('save_pricing_meta','pricing_nonce');
	
	?>
		<p>
			<label>Package</label>
			<input type="text" name="p_package" value="<?php echo $p_package;?>"/>
		</p>
		<p>
			<label>Currency</label>
			<input type="text" name="p_currency" value="<?php echo $p_currency;?>"/>
		</p>
		<p>
			<label>Price</label>
			<input type="text" name="p_price" value="<?php echo $p_price;?>"/>
		</p>
    <p>
        <label>Page</label>
        <input type="text" name="p_page" value="<?php echo $p_page;?>"/>
    </p>

    <p>
        <label>Domain</label>
        <input type="text" name="p_domain" value="<?php echo $p_domain;?>"/>
    </p>
    <p>
        <label>Hosting</label>
        <input type="text" name="p_hosting" value="<?php echo $p_hosting;?>"/>
    </p>

    <p>
        <label>Revision</label>
        <input type="text" name="p_revision" value="<?php echo $p_revision;?>"/>
    </p>
    <p>
        <label>Support</label>
        <input type="text" name="p_support" value="<?php echo $p_support;?>"/>
    </p>

    <p>
        <label>Order Link</label>
        <input type="url" size="20" width="100" name="p_orderlink" value="<?php echo $p_orderlink;?>"/>
    </p>
	<?php
}

function save_pricing_meta($post_id){
	
	//Check if our nonce is set
	if(! isset($_POST['pricing_nonce'])){
		
		return;
	}
	
	//Check if our nonce is valid
	if(! wp_verify_nonce($_POST['pricing_nonce'],'save_pricing_meta')){
		
		return;
	}
	
	//Check it(input) is set
	if(! isset($_POST['p_package'])){

        return;
    }

	
	if(! isset($_POST['p_currency'])){
		
		return;
	}
	
	if(! isset($_POST['p_price'])){
		
		return;
	}
    if(! isset($_POST['p_page'])){

        return;
    }
    if(! isset($_POST['p_domain'])){

        return;
    }
    if(! isset($_POST['p_hosting'])){

        return;
    }
    if(! isset($_POST['p_support'])){

        return;
    }
    if(! isset($_POST['p_revision'])){

        return;
    }
    if(! isset($_POST['p_orderlink'])){

        return;
    }
	
	//Sanitize text field
	
	$my_p_package = sanitize_text_field($_POST['p_package']);
	$my_p_currency = sanitize_text_field($_POST['p_currency']);
	$my_p_price = sanitize_text_field($_POST['p_price']);
    $my_p_page = sanitize_text_field($_POST['p_page']);
    $my_p_domain = sanitize_text_field($_POST['p_domain']);
    $my_p_hosting = sanitize_text_field($_POST['p_hosting']);
    $my_p_support = sanitize_text_field($_POST['p_support']);
    $my_p_revision = sanitize_text_field($_POST['p_revision']);
    $my_p_orderlink = sanitize_text_field($_POST['p_orderlink']);
	
	//Update MetaBOx
	
	update_post_meta($post_id,'p_package',$my_p_package);
	update_post_meta($post_id,'p_currency',$my_p_currency);
	update_post_meta($post_id,'p_price',$my_p_price);
    update_post_meta($post_id,'p_page',$my_p_page);
    update_post_meta($post_id,'p_domain',$my_p_domain);
    update_post_meta($post_id,'p_hosting',$my_p_hosting);
    update_post_meta($post_id,'p_support',$my_p_support);
    update_post_meta($post_id,'p_revision',$my_p_revision);
    update_post_meta($post_id,'p_orderlink',$my_p_orderlink);
	
}
add_action('save_post','save_pricing_meta');












