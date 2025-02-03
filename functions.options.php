<?php

add_action( 'init','of_options' );

if( ! function_exists( 'of_options' ) ) {
	
	function of_options() {
	
		// Single Blog Style
		$single_blog_style = array(
			'style1' => esc_html__( 'Style1', 'composer' ),
			'style2' => esc_html__( 'Style2', 'composer' ),
			'style3' => esc_html__( 'Style3', 'composer' )
		);

		if ( in_array( 'js_composer/js_composer.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			$vc_editor_post_types = vc_editor_post_types();

			if( in_array( 'post', $vc_editor_post_types ) ) {
				$single_blog_style = array_merge( $single_blog_style, array( 'visual_composer' => esc_html__( 'Visual Composer', 'composer' ) ) );
			}
		}

		// Preloader Animation Style
		$preloader_trans_in = array(
			'fadeIn'      => esc_html__( 'Fade In', 'composer' ),
			'fadeInUp'    => esc_html__( 'Fade In Up', 'composer' ),
			'fadeInDown'  => esc_html__( 'Fade In Down', 'composer' ),
			'fadeInLeft'  => esc_html__( 'Fade In Left', 'composer' ),
			'fadeInRight' => esc_html__( 'Fade In Right', 'composer' ),
			'zoomIn'      => esc_html__( 'Zoom In', 'composer' ),
			'zoomInUp'    => esc_html__( 'Zoom In Up', 'composer' ),
			'zoomInDown'  => esc_html__( 'Zoom In Down', 'composer' ),
			'zoomInLeft'  => esc_html__( 'Zoom In Left', 'composer' ),
			'zoomInRight' => esc_html__( 'Zoom In Right', 'composer' )
		);

		// Single Portfolio
		$style = array(
			'style1' => esc_html__( 'Style1', 'composer' ),
			'style2' => esc_html__( 'Style2', 'composer' ),
			'style3' => esc_html__( 'Style3', 'composer' ),
			'style4' => esc_html__( 'Style4', 'composer' ),
			'style5' => esc_html__( 'Style5', 'composer' ),
			'style6' => esc_html__( 'Style6', 'composer' )
		);

		$pagination = array( 
			'number'    => esc_html__( 'Number', 'composer' ),
			'load_more' => esc_html__( 'Load More Button', 'composer' ),
			'autoload'  => esc_html__( 'Autoload', 'composer' ),
			'text'      => esc_html__( 'Text', 'composer' )
		);

		// Blog & Single Blog & Archives
		$sidebar = array(
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'composer' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'composer' ),
			'full-width'    => esc_html__( 'Full Width', 'composer' )
		);

		$blog_styles = array(
			'masonry' => esc_html__( 'Masonry', 'composer' ),
			'grid'    => esc_html__( 'Grid', 'composer' ),
			'normal'  => esc_html__( 'Normal', 'composer' )
		);

		$shop_styles = array(
			'default' => esc_html__( 'Grid', 'composer' ),
			'masonry' => esc_html__( 'Masonry', 'composer' )
		);

		$animation = array(
			'flash'             => esc_html__( 'flash', 'composer' ),
			'bounce'            => esc_html__( 'bounce', 'composer' ),
			'shake'             => esc_html__( 'shake', 'composer' ),
			'tada'              => esc_html__( 'tada', 'composer' ),
			'swing'             => esc_html__( 'swing', 'composer' ),
			'wobble'            => esc_html__( 'wobble', 'composer' ),
			'pulse'             => esc_html__( 'pulse', 'composer' ),
			'flip'              => esc_html__( 'flip', 'composer' ),
			'flipInX'           => esc_html__( 'flipInX', 'composer' ),
			'flipInY'           => esc_html__( 'flipInY', 'composer' ),
			'fadeIn'            => esc_html__( 'fadeIn', 'composer' ),
			'fadeInUp'          => esc_html__( 'fadeInUp', 'composer' ),
			'fadeInDown'        => esc_html__( 'fadeInDown', 'composer' ),
			'fadeInLeft'        => esc_html__( 'fadeInLeft', 'composer' ),
			'fadeInRight'       => esc_html__( 'fadeInRight', 'composer' ),
			'fadeInUpBig'       => esc_html__( 'fadeInUpBig', 'composer' ),
			'fadeInDownBig'     => esc_html__( 'fadeInDownBig', 'composer' ),
			'fadeInLeftBig'     => esc_html__( 'fadeInLeftBig', 'composer' ),
			'fadeInRightBig'    => esc_html__( 'fadeInRightBig', 'composer' ),
			'slideInDown'       => esc_html__( 'slideInDown', 'composer' ),
			'slideInLeft'       => esc_html__( 'slideInLeft', 'composer' ),
			'slideInRight'      => esc_html__( 'slideInRight', 'composer' ),
			'bounceIn'          => esc_html__( 'bounceIn', 'composer' ),
			'bounceInUp'        => esc_html__( 'bounceInUp', 'composer' ),
			'bounceInDown'      => esc_html__( 'bounceInDown', 'composer' ),
			'bounceInLeft'      => esc_html__( 'bounceInLeft', 'composer' ),
			'bounceInRight'     => esc_html__( 'bounceInRight', 'composer' ),
			'rotateIn'          => esc_html__( 'rotateIn', 'composer' ),
			'rotateInDownLeft'  => esc_html__( 'rotateInDownLeft', 'composer' ),
			'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'composer' ),
			'rotateInUpLeft'    => esc_html__( 'rotateInUpLeft', 'composer' ),
			'rotateInUpRight'   => esc_html__( 'rotateInUpRight', 'composer' ),
			'lightSpeedIn'      => esc_html__( 'lightSpeedIn', 'composer' ),
			'hinge'             => esc_html__( 'hinge', 'composer' ),
			'rollIn'            => esc_html__( 'rollIn', 'composer' )
		);
		
		$order_by = array(
			'date'  => esc_html__( 'Date', 'composer' ),
			'title' => esc_html__( 'Title', 'composer' ),
			'rand'  => esc_html__( 'Random', 'composer' )
		);

		$order = array(
			'asc'  => esc_html__( 'Ascending', 'composer' ),
			'desc' => esc_html__( 'Descending', 'composer' )
		);

		$sub_header_size = array(
			'small'  => esc_html__( 'Small', 'composer' ),
			'medium' => esc_html__( 'Medium', 'composer' ),
			'large'  => esc_html__( 'Large', 'composer' )
		);

		$sub_header_bg_style = array(
			'color'       => esc_html__( 'Default Background Color', 'composer' ),
			'image'       => esc_html__( 'Background Image', 'composer' ),
			'customcolor' => esc_html__( 'Custom Background Color', 'composer' )
		);

		$args = array(
	       'public'   => true,
	       '_builtin' => false,
	    );

	    $custom_post_types = get_post_types( $args );

		$post_types = array_merge( $custom_post_types, array( 'post' => 'post', 'page' => 'page' ) );
		foreach ( $post_types as $key => $post_type ) {
			$obj = get_post_type_object( $post_type );
			$search_exclude[$key] = $obj->label;
		}

		foreach ( $custom_post_types as $key => $post_type ) {
			if( 'product' != $post_type && 'pix_portfolio' != $post_type ) {
				$obj = get_post_type_object( $post_type );
				$general_metabox_active[$key] = sprintf( esc_html__( '%s - Custom Post Type { %s } ', 'composer' ), $obj->label, $key );
			}			
		}

		if( class_exists( 'WooCommerce' ) ) {
			$blocks = array( 
				'blog_blocks'          => esc_html__( 'Blog Blocks', 'composer' ),
				'grid_blog_blocks'     => esc_html__( 'Grid Blog Blocks', 'composer' ),
				'featured_blog_blocks' => esc_html__( 'Featured Blog Blocks', 'composer' ),
				'portfolio_blocks'     => esc_html__( 'Portfolio Blocks', 'composer' ),
				'shop_blocks'          => esc_html__( 'Shop Blocks', 'composer' ),
				'gallery_blocks'       => esc_html__( 'Gallery Blocks', 'composer' )
			);

			$block_default = array( 'blog_blocks', 'grid_blog_blocks', 'featured_blog_blocks', 'portfolio_blocks', 'shop_blocks', 'gallery_blocks' );
		}
		else {
			$blocks = array( 
				'blog_blocks'          => esc_html__( 'Blog Blocks', 'composer' ),
				'grid_blog_blocks'     => esc_html__( 'Grid Blog Blocks', 'composer' ),
				'featured_blog_blocks' => esc_html__( 'Featured Blog Blocks', 'composer' ),
				'portfolio_blocks'     => esc_html__( 'Portfolio Blocks', 'composer' ),
				'shop_blocks'          => esc_html__( 'Shop Blocks', 'composer' ),
				'gallery_blocks'       => esc_html__( 'Gallery Blocks', 'composer' )
			);

			$block_default = array( 'blog_blocks', 'grid_blog_blocks', 'featured_blog_blocks', 'portfolio_blocks', 'gallery_blocks' );
		}

		//Body & Footer Background Options
		$url =  COMPOSER_ADMIN_DIR . 'assets/images/';

		$headers = array(
			'header-1'     => $url . 'header-layout/header1.png',
			'header-2'     => $url . 'header-layout/header2.png',
			'header-3'     => $url . 'header-layout/header3.png',
			'header-4'     => $url . 'header-layout/header4.png',
			'header-5'     => $url . 'header-layout/header5.png',
			'header-6'     => $url . 'header-layout/header6.png',
			'header-7'     => $url . 'header-layout/header7.png',
			'header-8'     => $url . 'header-layout/header8.png',
			'header-9'     => $url . 'header-layout/header9.png',
			'header-10'    => $url . 'header-layout/header10.png',
			'header-11'    => $url . 'header-layout/header11.png',
			'left-header'  => $url . 'header-layout/left-header.png',
			'right-header' => $url . 'header-layout/right-header.png'
		);

		$headers_hover = array(
			'none'                                => $url . 'menu/none.png',
			'drive-nav'                           => $url . 'menu/drive-nav.png',
			'nav-border'                          => $url . 'menu/nav-border.png',
			'nav-double-border'                   => $url . 'menu/nav-double-border.png',
			'nav-border nav-border-bottom'        => $url . 'menu/nav-border-halfline.png',
			'right-arrow'                         => $url . 'menu/right-arrow.png',
			'right-arrow cross-arrow'             => $url . 'menu/cross-arrow.png',
			'background-nav'                      => $url . 'menu/background-nav.png',
			'background-nav background-nav-round' => $url . 'menu/background-nav-round.png',
			'solid-color-bg'                      => $url . 'menu/solid-color-bg.png',
			'square-left-right'                   => $url . 'menu/square-left-right.png'
		);

		$footer = array(
			'col3'              => $url . '/footer-layout/3col.png',
			'col4'              => $url . '/footer-layout/4col.png',
			'fl-3-3-6'          => $url . 'footer-layout/fl-3-3-6.png',
			'fl-3-6-3'          => $url . 'footer-layout/fl-3-6-3.png',
			'fl-6-3-3'          => $url . 'footer-layout/fl-6-3-3.png',
			'fl-3-3-6-12'       => $url . 'footer-layout/fl-3-3-6-12.png',
			'fl-3-6-3-12'       => $url . 'footer-layout/fl-3-6-3-12.png',
			'fl-6-3-3-12'       => $url . 'footer-layout/fl-6-3-3-12.png',
			'fl-6-6'            => $url . 'footer-layout/fl-6-6.png',
			'fl-6-6-12'         => $url . 'footer-layout/fl-6-6-12.png',
			'fl-4-8'            => $url . 'footer-layout/fl-4-8.png',
			'fl-8-4'            => $url . 'footer-layout/fl-8-4.png',
			'fl-4-8-12'         => $url . 'footer-layout/fl-4-8-12.png',
			'fl-8-4-12'         => $url . 'footer-layout/fl-8-4-12.png',
			'fl-4-4-4'          => $url . 'footer-layout/fl-4-4-4.png',
			'fl-4-4-4-12'       => $url . 'footer-layout/fl-4-4-4-12.png',
			'fl-3-3-3-3'        => $url . 'footer-layout/fl-3-3-3-3.png',
			'fl-3-3-3-3-12'     => $url . 'footer-layout/fl-3-3-3-3-12.png',
			'fl-12-3-3-3-3'     => $url . 'footer-layout/fl-12-3-3-3-3.png',
			'fl-2-2-8'          => $url . 'footer-layout/fl-2-2-8.png',
			'fl-2-8-2'          => $url . 'footer-layout/fl-2-8-2.png',
			'fl-8-2-2'          => $url . 'footer-layout/fl-8-2-2.png',
			'fl-2-2-8-12'       => $url . 'footer-layout/fl-2-2-8-12.png',
			'fl-2-8-2-12'       => $url . 'footer-layout/fl-2-8-2-12.png',
			'fl-8-2-2-12'       => $url . 'footer-layout/fl-8-2-2-12.png',
			'fl-2-2-2-2-2-2'    => $url . 'footer-layout/fl-2-2-2-2-2-2.png',
			'fl-2-2-2-2-2-2-12' => $url . 'footer-layout/fl-2-2-2-2-2-2-12.png',
			'fl-12'             => $url . 'footer-layout/fl-12.png',
			'fl-4-4-2-2'        => $url . 'footer-layout/fl-4-4-2-2.png',
			'fl-4-2-4-2'        => $url . 'footer-layout/fl-4-2-4-2.png',
			'fl-4-2-2-4'        => $url . 'footer-layout/fl-4-2-2-4.png',
			'fl-2-2-4-4'        => $url . 'footer-layout/fl-2-2-4-4.png',
			'fl-2-4-2-4'        => $url . 'footer-layout/fl-2-4-2-4.png',
			'fl-2-4-4-2'        => $url . 'footer-layout/fl-2-4-4-2.png'
		);

		$pattern = array(
			'none'  => $url . 'none.png',
			'pat-1' => $url . 'pat-1.png',
			'pat-2' => $url . 'pat-2.png',
			'pat-3' => $url . 'pat-3.png',
			'pat-4' => $url . 'pat-4.png',
			'pat-5' => $url . 'pat-5.png'
		);

		$bg_attachment = array(
			'fixed'  => esc_html__( 'Fixed', 'composer' ),
			'scroll' => esc_html__( 'Scroll', 'composer' )
		);

		$bg_size = array(
			'auto'    => esc_html__( 'Auto', 'composer' ),
			'cover'   => esc_html__( 'Cover', 'composer' ),
			'contain' => esc_html__( 'Contain', 'composer' )
		);

		$bg_repeat = array(
			'repeat'    => esc_html__( 'Repeat', 'composer' ),
			'repeat-x'  => esc_html__( 'Repeat-x', 'composer' ),
			'Repeat-Y'  => esc_html__( 'Repeat-Y', 'composer' ),
			'no-repeat' => esc_html__( 'No Repeat', 'composer' )
		);

		// Font sizes
		$font_sizes = array();
		for ($i = 9; $i < 50; $i++){ 
			$font_sizes[$i.'px'] = $i.'px'; 
		}

		// Header & Footer widget columns
		$columns = array(
			'col3' => esc_html__( 'Three', 'composer' ),
			'col4' => esc_html__( 'Four', 'composer' )
		);
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/

		$args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'hierarchical' => 1,					
			'include' => '',
			'meta_key' => '',
			'meta_value' => '',
			'authors' => '',
			'child_of' => 0,
			'parent' => -1,
			'exclude_tree' => '',
			'number' => '',
			'offset' => 0,
			'post_type' => 'page',
			'post_status' => 'publish'
		); 

		if ( class_exists( 'WooCommerce' ) && is_admin() ) {
			$args['exclude'] = array(
				get_option( 'woocommerce_shop_page_id' ), 
				get_option( 'woocommerce_cart_page_id' ), 
				get_option( 'woocommerce_checkout_page_id' ),
				get_option( 'woocommerce_pay_page_id' ), 
				get_option( 'woocommerce_thanks_page_id' ), 
				get_option( 'woocommerce_myaccount_page_id' ), 
				get_option( 'woocommerce_edit_address_page_id' ), 
				get_option( 'woocommerce_view_order_page_id' ), 
				get_option( 'woocommerce_terms_page_id' )
			);
		}

		$pages = get_pages( $args );
		$all_pages = array( '' => esc_html__( 'Choose A Page', 'composer' ) );

		$all_pages['dashboard'] = esc_html__( 'Dashboard', 'composer' );
		foreach ($pages as $page) {
			$all_pages[$page->ID] = $page->post_title;
		}

/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

// General Settings
$of_options[] = array( 
	'name' => esc_html__( 'General', 'composer' ),
	'type' => 'heading',
	'id' => 'title_general'
);
					
$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Welcome to the composer WordPress Responsive Theme.', 'composer' ) . '</h3>' . esc_html__( 'Adjust the options here and change the theme like you want', 'composer' ),
	'icon' => true,
	'type' => 'info'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Upload Logo', 'composer' ),
	'desc' => esc_html__( 'Upload a custom logo. Height should be within 116px.', 'composer' ),
	'id'   => 'custom_logo',
	'std'  => get_template_directory_uri().'/_images/logo.png',
	'mod'  => 'min',
	'type' => 'media'
);

$of_options[] = array( 
	'name' => esc_html__( 'Upload Retina Logo', 'composer' ),
	'desc' => esc_html__( 'Upload a retina logo. width and should be double size (width X 2 & height X 2) of above (original) logo.', 'composer' ),
	'id'   => 'retina_logo',
	'std'  => get_template_directory_uri().'/_images/retina-logo.png',
	'mod'  => 'min',
	'type' => 'media'
);

$of_options[] = array( 
	'name' => esc_html__( 'Upload White Logo', 'composer' ),
	'desc' => esc_html__( 'Upload a custom white logo. Height should be within 80px.', 'composer' ),
	'id'   => 'custom_logo_light',
	'std'  => get_template_directory_uri().'/_images/logo-white.png',
	'mod'  => 'min',
	'type' => 'media'
);

$of_options[] = array( 
	'name' => esc_html__( 'Upload Retina White Logo', 'composer' ),
	'desc' => esc_html__( 'Upload a retina white logo. width and should be double size (width X 2 & height X 2) of above (original) logo.', 'composer' ),
	'id'   => 'retina_logo_light',
	'std'  => get_template_directory_uri().'/_images/retina-logo-white.png',
	'mod'  => 'min',
	'type' => 'media'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Upload Sticky Logo', 'composer' ),
	'desc' => esc_html__( 'Upload a sticky logo.', 'composer' ),
	'id'   => 'custom_sticky_logo',
	'std'  => '',
	'mod'  => 'min',
	'type' => 'media'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Upload Retina Sticky Logo', 'composer' ),
	'desc' => esc_html__( 'Upload a retina sticky logo.', 'composer' ),
	'id'   => 'retina_sticky_logo',
	'std'  => '',
	'mod'  => 'min',
	'type' => 'media'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Upload Mobile Logo', 'composer' ),
	'desc' => esc_html__( 'Upload a custom mobile logo.', 'composer' ),
	'id'   => 'custom_mobile_logo',
	'std'  => '',
	'mod'  => 'min',
	'type' => 'media'
);

$of_options[] = array( 
	'name' => esc_html__( 'Fav Icon', 'composer' ),
	'desc' => esc_html__( 'Upload a 16px x 16px Png/Gif image that will represent your website favicon.', 'composer' ),
	'id'   => 'fav_icon',
	'std'  => get_template_directory_uri().'/favicon.png',
	'mod'  => 'min',
	'type' => 'media'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Apple Touch Icon', 'composer' ),
	'desc' => esc_html__( 'Size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one). Transparency is not recommended (iOS will put a black BG behind the icon)', 'composer' ),
	'id'   => 'apple_touch_icon',
	'std'  => get_template_directory_uri().'/_images/apple-icon-touch.png',
	'mod'  => 'min',
	'type' => 'media'
);

$of_options[] = array( 
	'name' => esc_html__( 'Upload Placeholder Image', 'composer' ),
	'desc' => esc_html__( 'Upload a placeholder image and height should be more than 1366x900.', 'composer' ),
	'id'   => 'placeholder',
	'std'  => '',
	'mod'  => 'min',
	'type' => 'media'
);

$of_options[] = array( 
	'name'    => esc_html__( 'Enable Preloader', 'composer' ),
	'desc'    => esc_html__( 'Do you want to like to enable preloader?', 'composer' ),
	'id'      => 'pix_preloader',
	'std'     => 'no',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 
	'name'    => esc_html__( 'Preloader Style', 'composer' ),
	'desc'    => esc_html__( 'Do you want to like to enable preloader?', 'composer' ),
	'id'      => 'pix_preloader_style',
	'std'     => 'style-1',
	'type'    => 'switch',						
	'fold'    => array( 'pix_preloader' => array( 'yes' ) ),
	'options' => array(
		'style-1' => esc_html__( 'Style 1', 'composer' ),
		'style-2' => esc_html__( 'Style 2', 'composer' ),
		'style-3' => esc_html__( 'Style 3', 'composer' ),
		'style-4' => esc_html__( 'Style 4', 'composer' ),
		'style-5' => esc_html__( 'Style 5', 'composer' ),
		'style-6' => esc_html__( 'Style 6', 'composer' ),
		'style-7' => esc_html__( 'Style 7', 'composer' ),
		'style-8' => esc_html__( 'Style 8', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Preloader Animation In', 'composer' ),
	'desc'    => esc_html__( 'Choose a loading animation', 'composer' ),
	'id'      => 'preloadtrans',
	'std'     => 'fadeInUp',
	'fold'    => array( 'pix_preloader' => array('yes') ),
	'type'    => 'select',
	'options' => $preloader_trans_in
);

$of_options[] = array(  
	'name'    => esc_html__( 'Visual Composer frontend', 'composer' ),
	'desc'    => esc_html__( 'Enable/Disable Visual Composer Frontend Editor form this settings. Visual Composer Frontend Editor not officially supported by theme. Ultimate addon is also not supports Frontend Editor. However lots of element will work on Frontend except elements which using javascripts (eg: carousel, counter etc.) are not working on Frontend Editor preview', 'composer' ),
	'id'      => 'vc_frontend',
	'std'     => 'disable',
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	),
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Wide &amp; Boxed &amp; Frame Layout', 'composer' ),
	'desc'    => esc_html__( 'Choose Header Layout. Boxed = max header width is 1200px; Wide = header covers the viewport. Frame = White space around the edges.', 'composer' ),
	'id'      => 'boxed_content',
	'std'     => 'wide',
	'type'    => 'select',
	'options' => array(
		'wide'  => esc_html__( 'Wide', 'composer' ),
		'boxed' => esc_html__( 'Boxed', 'composer' ),
		'frame' => esc_html__( 'Frame', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Main Wrap', 'composer' ),
	'desc' => esc_html__( 'Adjust Main wrap width', 'composer' ),
	'id'   => 'main_wrap',
	'std'  => '1366',
	'min'  => '940',
	'step' => '1',
	'max'  => '1366',
	'edit' => true,
	'type' => 'sliderui' 
);

$of_options[] = array( 	
	'name' => esc_html__( 'Content Wrap', 'composer' ),
	'desc' => esc_html__( 'Adjust Content wrap width', 'composer' ),
	'id'   => 'content_wrap',
	'std'  => '1200',
	'min'  => '940',
	'step' => '1',
	'max'  => '1366',
	'edit' => true,
	'type' => 'sliderui' 
);

$of_options[] = array( 	
	'name' => esc_html__( 'Row Top Padding', 'composer' ),
	'desc' => esc_html__( 'Type the row top padding in px. Eg: 100px. Leave it to empty to apply default', 'composer' ),
	'id'   => 'row_top_padding',
	'std'  => '',
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Row Bottom Padding', 'composer' ),
	'desc' => esc_html__( 'Type the row bottom padding in px. Eg: 100px. Leave it to empty to apply default', 'composer' ),
	'id'   => 'row_bottom_padding',
	'std'  => '',
	'type' => 'text'
);

$of_options[] = array( 
	'name'    => esc_html__( 'Responsive', 'composer' ),
	'desc'    => esc_html__( 'Please choose responsive.', 'composer' ),
	'id'      => 'mobile_responsive',
	'std'     => 'on',
	'type'    => 'switch',
	'options' => array(
		'on'  => esc_html__( 'ON', 'composer' ),
		'off' => esc_html__( 'OFF', 'composer' )
	)
);

$of_options[] = array( 
	'name' => esc_html__( 'Menu Responsive Breakpoint', 'composer' ),
	'desc' => esc_html__( 'Please Enter Menu Responsive Breakpoint (Ex:1024). Default Value is 991.', 'composer' ),
	'id'   => 'mobile_break_menu',
	'std'  => '991',
	'type' => 'text'
);

$of_options[] = array( 
	'name'    => esc_html__( 'Show Flyin Sidebar', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show flyin sidebar?', 'composer' ),
	'id'      => 'flyin_sidebar',
	'std'     => 'off',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'on'  => esc_html__( 'ON', 'composer' ),
		'off' => esc_html__( 'OFF', 'composer' )
	)
);

$of_options[] = array( 
	'name' => esc_html__( 'Choose the Flyin Sidebar', 'composer' ),
	'desc' => esc_html__( 'Please choose the flyin sidebar you have created', 'composer' ),
	'id'   => 'flyin_select_sidebar',
	'std'  => '0',
	'type' => 'select_sidebar',
	'fold' => array( 'flyin_sidebar' => array( 'on' ) ),
	'hide' => array( 'flyin-sidebar' )
);

$of_options[] = array( 
	'name' => esc_html__( 'Search Text', 'composer' ),
	'desc' => esc_html__( 'Please enter search text here.', 'composer' ),
	'id'   => 'search_text',
	'std'  => esc_html__( 'Search', 'composer' ),
	'type' => 'text'
);
					
$of_options[] = array( 	
	'name'    => esc_html__( 'Show Go to Top Button', 'composer' ),
	'desc'    => esc_html__( 'Show/Hide go to top button in the page', 'composer' ),
	'id'      => 'go_to_top',
	'std'     => 'enable',
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);
					
$of_options[] = array( 	
	'name'    => esc_html__( 'Show Go to Top Button on Mobile', 'composer' ),
	'desc'    => esc_html__( 'Show/Hide go to top button on mobile in the page', 'composer' ),
	'id'      => 'go_to_top_mobile',
	'std'     => 'disable',
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'How to load the like count', 'composer' ),
	'desc'    => esc_html__( 'If you using any cache plugin, choose AJAX to load the count properly.', 'composer' ),
	'id'      => 'load_like',
	'std'     => 'php',
	'type'    => 'switch',
	'options' => array(
		'php'  => esc_html__( 'PHP', 'composer' ),
		'ajax' => esc_html__( 'AJAX', 'composer' )
	)
);

if( ! empty( $general_metabox_active ) ) {
	$of_options[] = array( 	
		'name'    => esc_html__( 'General Page Options Settings', 'composer' ),
		'desc'    => esc_html__( 'If you use any third party plugins for adding custom post types, Please check the post types for showing page options. It helps to customize the individual posts title bar, header, layout, etc..For single pages please rename the single-{custom-post-type} in your theme folder.', 'composer' ),
		'id'      => 'general_metabox_active',
		'std'     => array(''),
		'type'    => 'multicheck',
		'options' => $general_metabox_active
	);
}

																		  
$of_options[] = array( 
	'name' => esc_html__( 'Custom CSS', 'composer' ),
	'desc' => esc_html__( 'Type your custom CSS rules.', 'composer' ),
	'id'   => 'custom_css',
	'std'  => '',
	'type' => 'textarea'
);
																		  
$of_options[] = array( 
	'name' => esc_html__( 'Custom JS in Head Tag', 'composer' ),
	'desc' => esc_html__( 'Type your header custom JS.', 'composer' ),
	'id'   => 'custom_js',
	'std'  => '',
	'type' => 'textarea'
);
																		  
$of_options[] = array( 
	'name' => esc_html__( 'Custom JS below Footer', 'composer' ),
	'desc' => esc_html__( 'Type your footer custom JS.', 'composer' ),
	'id'   => 'custom_js_footer',
	'std'  => '',
	'type' => 'textarea'
);

// Header
$of_options[] = array( 
	'name'     => esc_html__( 'Header', 'composer' ),
	'type'     => 'heading',
	'id'       => 'title_header',
	'sub_menu' => array( 
		esc_html__( 'Top Header', 'composer' ),
		esc_html__( 'Header Options', 'composer' ),
		esc_html__( 'Header Builder', 'composer' )
	)
);

// Top Header
$of_options[] = array( 
	'name' => esc_html__( 'Top Header', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_top_header'
);

$of_options[] = array(  
	'name'    => esc_html__( 'Show Top Header?', 'composer' ),
	'desc'    => esc_html__( 'Choose "Yes" to enable top header.', 'composer' ),
	'id'      => 'top_header',
	'std'     => 'hide',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Yes', 'composer' ),
		'hide' => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array(  
	'name'    => esc_html__( 'Top Header Position', 'composer' ),
	'desc'    => esc_html__( 'Choose top header position.', 'composer' ),
	'id'      => 'top_header_position',
	'std'     => 'top',
	'type'    => 'switch',
	'fold'    => array( 'top_header' => array( 'show' ) ),
	'options' => array(
		'top'    => esc_html__( 'Top', 'composer' ),
		'bottom' => esc_html__( 'Bottom', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Top Header Background Style', 'composer' ),
	'desc'    => esc_html__( 'Select Top Header Background Style. Dark = White Text and Black Background; Light = Black Text and White Background.', 'composer' ),
	'id'      => 'top_section_style',
	'std'     => 'light',
	'type'    => 'switch',
	'fold'    => array( 'top_header' => array( 'show' ) ),
	'options' => array(
		'dark'  => esc_html__( 'Dark', 'composer' ),
		'light' => esc_html__( 'Light', 'composer' )
	)
);

$of_options[] = array(  
	'name'    => esc_html__( 'Top Header on Mobile?', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show top header on Mobile.', 'composer' ),
	'id'      => 'top_header_mobile',
	'std'     => 'hide',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Email and Phone Number in Top left', 'composer' ) . '</h3>' . esc_html__( 'Enter the value to display email and phone, Leave it empty if you don\'t want display', 'composer' ),
	'icon' => true,
	'type' => 'info'
);							
					
					
$of_options[] = array( 
	'name' => esc_html__( 'Email', 'composer' ),
	'desc' => esc_html__( 'Please Enter Email address.', 'composer' ),
	'id'   => 'top_email',
	'std'  => 'info@yoursite.com',
	'type' => 'text'
); 		
					
$of_options[] = array( 
	'name' => esc_html__( 'Telephone', 'composer' ),
	'desc' => esc_html__( 'Please Enter Telephone Number.', 'composer' ),
	'id'   => 'top_tel',
	'std'  => '+ (009) 123 4567',
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'Top Header Text', 'composer' ),
	'desc' => esc_html__( 'Please Enter Text Here.', 'composer' ),
	'id'   => 'top_text',
	'std'  => esc_html__( 'Enter Your Text...', 'composer' ),
	'type' => 'textarea'
);

$of_options[] = array( 
	'name' => esc_html__( 'Shortcode', 'composer' ),
	'desc' => esc_html__( 'Please Enter Shortcode Here.', 'composer' ),
	'id'   => 'shortcode_text',
	'std'  => '',
	'type' => 'textarea'
);

$of_options[] = array( 
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Social Networking Icons', 'composer' ) . '</h3>' . esc_html__( 'Enter the url to display social networking icons you want, Leave it empty if you don\'t want display', 'composer' ),
	'icon' => true,
	'type' => 'info'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Facebook URL', 'composer' ),
	'desc' => esc_html__( 'Please Enter Facebook URL, This will display in header.', 'composer' ),
	'id'   => 'top_facebook',
	'std'  => '',
	'type' => 'text'
); 					

$of_options[] = array( 
	'name' => esc_html__( 'Twitter', 'composer' ),
	'desc' => esc_html__( 'Please Enter Twitter Username, This will display in header.', 'composer' ),
	'id'   => 'top_twitter',
	'std'  => '',
	'type' => 'text'
);
										
$of_options[] = array( 
	'name' => esc_html__( 'Google Plus URL', 'composer' ),
	'desc' => esc_html__( 'Please Enter Google Plus URL, This will display in header.', 'composer' ),
	'id'   => 'top_gplus',
	'std'  => '',
	'type' => 'text'
);
										
$of_options[] = array( 
	'name' => esc_html__( 'LinkedIn URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full linkedIn URL, This will display in header.', 'composer' ),
	'id'   => 'top_linkedin',
	'std'  => '',
	'type' => 'text'
);
										
$of_options[] = array( 
	'name' => esc_html__( 'Dribble URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full dribble URL, This will display in header.', 'composer' ),
	'id'   => 'top_dribble',
	'std'  => '',
	'type' => 'text'
);
										
$of_options[] = array( 
	'name' => esc_html__( 'Instagram URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full instagram URL, This will display in header.', 'composer' ),
	'id'   => 'top_instagram',
	'std'  => '',
	'type' => 'text'
);
										
$of_options[] = array( 
	'name' => esc_html__( 'Flickr URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full flickr URL, This will display in header.', 'composer' ),
	'id'   => 'top_flickr',
	'std'  => '',
	'type' => 'text'
);
										
$of_options[] = array( 
	'name' => esc_html__( 'Pinterest URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full pinterest URL, This will display in header.', 'composer' ),
	'id'   => 'top_pinterest',
	'std'  => '',
	'type' => 'text'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Tumblr URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full tumblr URL, This will display in header.', 'composer' ),
	'id'   => 'top_tumblr',
	'std'  => '',
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'Youtube URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full youtube URL, This will display in header.', 'composer' ),
	'id'   => 'top_youtube',
	'std'  => '',
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'Vimeo URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full vimeo URL, This will display in header.', 'composer' ),
	'id'   => 'top_vimeo',
	'std'  => '',
	'type' => 'text'
);
					
$of_options[] = array( 
	'name' => esc_html__( 'Blogger URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full blogger URL, This will display in header.', 'composer' ),
	'id'   => 'top_blogger',
	'std'  => '',
	'type' => 'text'
);
										
$of_options[] = array( 
	'name' => esc_html__( 'RSS URL', 'composer' ),
	'desc' => esc_html__( 'Enter your full rss URL, This will display in header.', 'composer' ),
	'id'   => 'top_rss',
	'std'  => '',
	'type' => 'text'
);

$of_options = apply_filters( 'composer_social_icons_option_filter', $of_options );

// Header Options
$of_options[] = array( 
	'name' => esc_html__( 'Header Options', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_top_header'
);

$of_options[] = array(  
	'name'    => esc_html__( 'Show/Hide Header', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display Header?', 'composer' ),
	'id'      => 'header_hide',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Header Layout Style.', 'composer' ),
	'desc'    => esc_html__( 'Choose Header Layout. Boxed = max header width is 1200px; Wide = header covers the viewport.', 'composer' ),
	'id'      => 'header_width',
	'std'     => 'wide',
	'type'    => 'switch',
	'options' => array(
		'wide'  => esc_html__( 'Wide', 'composer' ),
		'boxed' => esc_html__( 'Boxed', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Main Header Layout', 'composer' ),
	'id'      => 'header_layout',
	'std'     => 'header-2',
	'type'    => 'images',
	'options' => $headers
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Left and Right Header Menu Alignment', 'composer' ),
	'desc'    => esc_html__( 'Select menu alignment on left and right header.', 'composer' ),
	'id'      => 'lr_menu_align',
	'std'     => 'center',
	'type'    => 'switch',
	'options' => array(
		'center' => esc_html__( 'Center', 'composer' ),
		'top'    => esc_html__( 'Top', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Left and Right Header Text Alignment', 'composer' ),
	'desc'    => esc_html__( 'Select text alignment on left and right header.', 'composer' ),
	'id'      => 'lr_text_align',
	'std'     => 'left',
	'type'    => 'switch',
	'options' => array(
		'center' => esc_html__( 'Center', 'composer' ),
		'left'   => esc_html__( 'Left', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Menu Border for Left and Right Header', 'composer' ),
	'desc'    => esc_html__( 'Do you Want to add border on Menu?', 'composer' ),
	'id'      => 'lr_nav_line',
	'std'     => 'yes',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Header Hover Style', 'composer' ),
	'id'      => 'header_hover_layout',
	'std'     => 'none',
	'type'    => 'images',
	'options' => $headers_hover
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Header Background Style', 'composer' ),
	'desc'    => esc_html__( 'Select header background style. Dark = White Text and Black Background; Light = Black Text and White Background.', 'composer' ),
	'id'      => 'header_background_style',
	'std'     => 'light',
	'type'    => 'switch',
	'options' => array(
		'dark'  => esc_html__( 'Dark', 'composer' ),
		'light' => esc_html__( 'Light', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Do you want Header border on Bottom?', 'composer' ),
	'desc'    => esc_html__( 'Do you want header border on bottom', 'composer' ),
	'id'      => 'header_line',
	'std'     => 'yes',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Enable Transparent Header', 'composer' ),
	'desc'    => esc_html__( 'Do you like to enable transparent header?', 'composer' ),
	'id'      => 'transparent_header',
	'std'     => 'hide',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Yes', 'composer' ),
		'hide' => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Choose Percentage of Header Transparency', 'composer' ),
	'desc' => esc_html__( 'How much transparency you want to apply for header', 'composer' ),
	'id'   => 'transparent_header_opacity',
	'std'  => '0',
	'min'  => '0',
	'step' => '10',
	'max'  => '90',
	'fold' => array( 'transparent_header'=> array( 'show' ) ),
	'type' => 'sliderui' 
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Sticky Header', 'composer' ),
	'desc'    => esc_html__( 'Enable or disable Sticky Header from here', 'composer' ),
	'id'      => 'header_sticky',
	'std'     => 'scroll_up',
	'type'    => 'switch',
	'options' => array(
		'disable'   => esc_html__( 'Disable', 'composer' ),
		'enable'    => esc_html__( 'Enable', 'composer' ),
		'scroll_up' => esc_html__( 'Show On Scroll Up', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Enable Sticky Header on Mobile Devices?', 'composer' ),
	'desc'    => esc_html__( 'Enable or Disable Sticky Header on Mobile Devices from here', 'composer' ),
	'id'      => 'header_sticky_responsive',
	'std'     => 'disable',
	'type'    => 'switch',
	'options' => array(
		'disable' => esc_html__( 'Disable', 'composer' ),
		'enable'  => esc_html__( 'Enable', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Sticky Header Background', 'composer' ),
	'desc'    => esc_html__( 'Select Sticky Background Color', 'composer' ),
	'id'      => 'header_sticky_color',
	'std'     => 'light',
	'type'    => 'switch',
	'options' => array(
		'dark'  => esc_html__( 'Dark', 'composer' ),
		'light' => esc_html__( 'Light', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Header Widget', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the header widget?', 'composer' ),
	'id'      => 'header_widget',
	'std'     => 'hide',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Header Widget Columns', 'composer' ),
	'desc'    => esc_html__( 'Choose the header widget columns', 'composer' ),
	'id'      => 'header_widget_col',
	'std'     => 'col3',
	'fold'    => array( 'header_widget' => array( 'show' ) ),
	'type'    => 'select',
	'options' => $columns
);

$of_options[] = array( 
	'name' => esc_html__( 'Choose the Registered Sidebar', 'composer' ),
	'desc' => esc_html__( 'Please choose the sidebar you have created', 'composer' ),
	'id'   => 'header_select_sidebar',
	'std'  => '0',
	'fold' => array( 'header_widget' => array( 'show' ) ),
	'type' => 'select_sidebar',
	'hide' => array( 'header-widgets' )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Main Menu Style', 'composer' ),
	'desc'    => esc_html__( 'Select main menu style.', 'composer' ),
	'id'      => 'main_menu',
	'std'     => 'dark',
	'type'    => 'switch',
	'options' => array(
		'dark'  => esc_html__( 'Dark', 'composer' ),
		'light' => esc_html__( 'Light', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'DropDown Menu Style', 'composer' ),
	'desc'    => esc_html__( 'Select dropdown menu style.', 'composer' ),
	'id'      => 'sub_menu',
	'std'     => 'light',
	'type'    => 'switch',
	'options' => array(
		'dark'  => esc_html__( 'Dark', 'composer' ),
		'light' => esc_html__( 'Light', 'composer' )
	)
);

$of_options[] = array(  
	'name'    => esc_html__( 'Menu on Mobile?', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show Menu on Mobile.', 'composer' ),
	'id'      => 'display_menu',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Mobile Menu Alignment', 'composer' ),
	'desc'    => esc_html__( 'Select mobile menu alignment.', 'composer' ),
	'id'      => 'mobile_menu_align',
	'std'     => 'left',
	'type'    => 'switch',
	'options' => array(
		'left'  => esc_html__( 'Left', 'composer' ),
		'right' => esc_html__( 'Right', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Mobile Menu Dropdown', 'composer' ),
	'desc'    => esc_html__( 'Choose Yes to show sub menus (as dropdown) in mobile menu.', 'composer' ),
	'id'      => 'mobile_menu_dropdown',
	'std'     => 'yes',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show Language Selector', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display language selector?', 'composer' ),
	'id'      => 'show_lang_sel',
	'std'     => 'no',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'     => esc_html__( 'WPML Language Selector Style', 'composer' ),
	'desc'     => esc_html__( 'Choose Language Selector Style', 'composer' ),
	'id'       => 'wpml_lang_style',
	'std'      => 'normal',
	'type'     => 'select',
	'options'  => array( 
		'normal'   => esc_html__( 'Normal', 'composer' ), 
		'dropdown' => esc_html__( 'Dropdown', 'composer' ) 
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'WPML Language Display Style', 'composer' ),
	'desc'    => esc_html__( 'Choose Language Display Style', 'composer' ),
	'id'      => 'language_style',
	'std'     => 'flag',
	'type'    => 'select',
	'options' => array( 
		'lang_code'      => esc_html__( 'Language Code', 'composer' ), 
		'lang_name'      => esc_html__( 'Language Name', 'composer' ), 
		'flag'           => esc_html__( 'Flag', 'composer' ), 
		'flag_with_name' => esc_html__( 'Flag With Name', 'composer' ) 
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'How to handle languages without translation', 'composer' ),
	'desc'    => esc_html__( 'What you want to do when pages/elements not translationed for that language? Skip missing language or Link to home of language for missing translations', 'composer' ),
	'id'      => 'skip_missing_lang',
	'std'     => 'yes',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Skip language', 'composer' ),
		'no'  => esc_html__( 'Link to home of language', 'composer' )
	)
);

// Header Builder
$of_options[] = array( 	
	'name' => esc_html__( 'Header Builder', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_header_builder'
);

$of_options[] = array( 
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Grey Header Area.', 'composer' ) . '</h3>' . esc_html__( 'This is the setting for grey Header Area which can be displayed above or below Main Header depends on header settings', 'composer' ),
	'icon' => true,
	'type' => 'info'
);

// Top Left Header Element
$header_top_elem = array( 
	'disabled' => array(
		'placebo'      => 'placebo',
		'top_menu'     => esc_html__( 'Menu', 'composer' ),
		'shortcode'    => esc_html__( 'Shortcode', 'composer' ),
		'search'       => esc_html__( 'Search', 'composer' ),
		'cart'         => esc_html__( 'WooCommerce cart', 'composer' ),
		'lang'         => esc_html__( 'WPML Language Selector', 'composer' ),
		'text'         => esc_html__( 'Custom Text', 'composer' ),
		'login_logout' => esc_html__( 'Composer login / logout links', 'composer' )
	), 
	'left' => array(
		'placebo' => 'placebo',
		'email'   => esc_html__( 'Email', 'composer' ),
		'tel'     => esc_html__( 'Telephone', 'composer' )
	),
	'right' => array(
		'placebo' => 'placebo',
		'sicons'  => esc_html__( 'Social Icons', 'composer' )
	)
);

if ( class_exists('WooCommerce') ) {
	$header_top_elem['disabled']['wc_login_logout'] = esc_html__( 'WooCommerce login / logout links', 'composer' );
}

$of_options[] = array( 	
	'name' => esc_html__( 'Top Header', 'composer' ),
	'desc' => esc_html__( 'Choose what you want to display on Left / Right Side of Top Header Area', 'composer' ),
	'id'   => 'grey_header_sorter',
	'std'  => $header_top_elem,
	'type' => 'sorter'
);

// Main Header Element
$main_header_elem = array( 
	'disabled' => array(
		'placebo'      => 'placebo',	
		'shortcode'    => esc_html__( 'Shortcode', 'composer' ),
		'sicons'       => esc_html__( 'Social Icons', 'composer' ),
		'search'       => esc_html__( 'Search Form', 'composer' ),
		'text'         => esc_html__( 'Custom Text', 'composer' ),
		'login_logout' => esc_html__( 'Composer login / logout links', 'composer' )
	),	
	'left' => array(
		'placebo' => 'placebo',
		'email'   => esc_html__( 'Email', 'composer' ),
		'tel'     => esc_html__( 'Telephone', 'composer' )
	),
	'right' => array(
		'placebo'     => 'placebo',
		'lang'        => esc_html__( 'WPML Language Selector', 'composer' ),
		'search_icon' => esc_html__( 'Search Icon', 'composer' ),
		'cart'        => esc_html__( 'WooCommerce cart', 'composer' )
	)
);

if ( class_exists( 'WooCommerce' ) ) {
	$main_header_elem['disabled']['wc_login_logout'] = esc_html__( 'WooCommerce login / logout links', 'composer' );
}

$of_options[] = array( 
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Main Header.', 'composer' ) . '</h3>' . esc_html__( 'This is the setting for Main Header Header layout Can be change in header settings', 'composer' ),
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Main Header', 'composer' ),
	'desc' => esc_html__( 'Choose what you want to display in Main Header Left / Right Side', 'composer' ),
	'id'   => 'main_sorter',
	'std'  => $main_header_elem,
	'type' => 'sorter'
);

// Header with Center Logo Elements
$center_header_elem = array( 
	'disabled' => array(
		'placebo'      => 'placebo',	
		'email'        => esc_html__( 'Email', 'composer' ),
		'tel'          => esc_html__( 'Telephone', 'composer' ),
		'lang'         => esc_html__( 'WPML Language Selector', 'composer' ),
		'search_icon'  => esc_html__( 'Search Icon', 'composer' ),
		'cart'         => esc_html__( 'WooCommerce cart', 'composer' ),
		'shortcode'    => esc_html__( 'Shortcode', 'composer' ),
		'sicons'       => esc_html__( 'Social Icons', 'composer' ),
		'search'       => esc_html__( 'Search Form', 'composer' ),
		'text'         => esc_html__( 'Custom Text', 'composer' ),
		'login_logout' => esc_html__( 'Composer login / logout links', 'composer' )
	),	
	'left' => array(
		'placebo' => 'placebo'
	),
	'right' => array(
		'placebo' => 'placebo'
	),
);

if ( class_exists( 'WooCommerce' ) ) {
	$center_header_elem['disabled']['wc_login_logout'] = esc_html__( 'WooCommerce login / logout links', 'composer' );
}

$of_options[] = array( 	
	'name' => esc_html__( 'Header with Center Logo', 'composer' ),
	'desc' => esc_html__( 'Choose what you want to display in Header with Center Logo Left / Right Side', 'composer' ),
	'id'   => 'center_sorter',
	'std'  => $center_header_elem,
	'type' => 'sorter'
);

// Header with Center Logo Elements
$menu_header_elem = array( 
	'disabled' => array(
		'placebo'      => 'placebo',	
		'search_icon'  => esc_html__( 'Search Icon', 'composer' ),
		'cart'         => esc_html__( 'WooCommerce cart', 'composer' )
	),	
	'left' => array(
		'placebo' => 'placebo'
	),
	'right' => array(
		'placebo' => 'placebo'
	),
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header with Menu Below', 'composer' ),
	'desc' => esc_html__( 'Choose what you want to display in Header with Menu Below Left / Right Side', 'composer' ),
	'id'   => 'menu_sorter',
	'std'  => $menu_header_elem,
	'type' => 'sorter'
);

// Side Header Element
$side_header_elem = array( 
	'disabled' => array(
		'placebo'   => 'placebo',	
		'shortcode' => esc_html__( 'Shortcode', 'composer' ),
		'search'    => esc_html__( 'Search Form', 'composer' ),
		'lang'      => esc_html__( 'WPML Language Selector', 'composer' ),
		'cart'      => esc_html__( 'WooCommerce cart', 'composer' ),
		'tel'       => esc_html__( 'Telephone', 'composer' )
	),	
	'left' => array(
		'placebo'        => 'placebo',
		'sicons'         => esc_html__( 'Social Icons', 'composer' ),	
		'copyright_text' => esc_html__( 'Copyright Text', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Side Header Widget', 'composer' ),
	'desc' => esc_html__( 'Choose what you want to display in side header widget', 'composer' ),
	'id'   => 'side_sorter',
	'std'  => $side_header_elem,
	'type' => 'sorter'
);

// Title Bar
$of_options[] = array( 
	'name' => esc_html__( 'Title Bar', 'composer' ),
	'type' => 'heading',
	'id' => 'title_title_bar'
);

$of_options[] = array(  
	'name'    => esc_html__( 'Show/Hide Title Bar', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display title bar?', 'composer' ),
	'id'      => 'title_bar',
	'std'     => 'show',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Title Bar Title Tag', 'composer' ),
	'desc'    => esc_html__( 'Select title bar title tag', 'composer' ),
	'id'      => 'title_bar_title_tag',
	'std'     => 'h2',
	'type'    => 'select',
	'fold'    => array( 'title_bar' => array( 'show' ) ),
	'options' => array(
		'h1' => esc_html__( 'H1', 'composer' ),
		'h2' => esc_html__( 'H2', 'composer' ),
		'h3' => esc_html__( 'H3', 'composer' ),
		'h4' => esc_html__( 'H4', 'composer' ),
		'h5' => esc_html__( 'H5', 'composer' ),
		'h6' => esc_html__( 'H6', 'composer' ),
		'p'  => esc_html__( 'P', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Title Bar Size', 'composer' ),
	'desc'    => esc_html__( 'Select title bar size', 'composer' ),
	'id'      => 'title_bar_size',
	'std'     => 'small',
	'fold'    => array( 'title_bar' => array( 'show' ) ),
	'type'    => 'select',
	'options' => array(
		'small'  => esc_html__( 'Small', 'composer' ),
		'medium' => esc_html__( 'Medium', 'composer' ),
		'large'  => esc_html__( 'Large', 'composer' )
	)
);

$of_options[] = array(  
	'name'    => esc_html__( 'Show/Hide breadcrumbs', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display breadcrumbs?', 'composer' ),
	'id'      => 'breadcrumbs',
	'std'     => 'show',
	'fold'    => array( 'title_bar' => array( 'show' ) ),
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 
	'name' => esc_html__( 'Breadcrumbs Prefix', 'composer' ),
	'desc' => esc_html__( 'Type the breadcrumbs prefix', 'composer' ),
	'id'   => 'breadcrumbs_prefix',
	'std'  => esc_html__( 'Home', 'composer' ),
	'type' => 'text',
	'fold' => array( 'title_bar' => array( 'show' ) )
);

// Login/Registration
$of_options[] = array( 
	'name' => esc_html__( 'Login and Registration', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_login_registration'
);

$pages_list = $all_pages;

unset( $pages_list['dashboard'] );

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose Login Page', 'composer' ),
	'desc'    => esc_html__( 'If you need register / login in header, then create a page and add "Login and Register Form" element and choose that page here', 'composer' ),
	'id'      => 'login_page_id',
	'std'     => '',
	'options' => $pages_list,
	'type'    => 'select'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Login Redirect Page', 'composer' ),
	'desc'    => esc_html__( 'Please Choose page. When user login sucessfully, they will be redirect to this chosen page.', 'composer' ),
	'id'      => 'login_redirect',
	'std'     => 'dashboard',
	'options' => $all_pages,
	'type'    => 'select'
);

$of_options[] = array( 
	'name' => esc_html__( 'Welcome Text for "login logout link" header element', 'composer' ),
	'desc' => esc_html__( 'Please Enter the Welcome text for login logout link. note: "{username}" will be replaced by user display name', 'composer' ),
	'id'   => 'welcome_text',
	'std'  => esc_html__( 'Welcome {username},', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'Login / Register link Text for "login logout link" header element', 'composer' ),
	'desc' => esc_html__( 'Please Enter the Login link text', 'composer' ),
	'id'   => 'login_text',
	'std'  => esc_html__( 'Log In / Register', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'Logout Text link Text for "login logout link" header element', 'composer' ),
	'desc' => esc_html__( 'Please Enter the Logout link text', 'composer' ),
	'id'   => 'logout_text',
	'std'  => esc_html__( 'Logout', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'Extra class for "login logout link" header element', 'composer' ),
	'desc' => esc_html__( 'Please Enter the extra class for "login logout link" header element', 'composer' ),
	'id'   => 'login_el_class',
	'std'  => '',
	'type' => 'text'
);

// Event Tribe Settings
if( class_exists( 'Tribe__Events__Main' ) ) {

	$of_options[] = array( 	
		'name' => esc_html__( 'Event Tribe', 'composer' ),
		'type' => 'heading',
		'id'   => 'title_event_tribe'
	);

	$of_options[] = array( 
		'name' => esc_html__( 'Event Tribe Page Title', 'composer' ),
		'desc' => esc_html__( 'Please Enter the page title for event tribe', 'composer' ),
		'id'   => 'event_tribe_page_title',
		'std'  => esc_html__( 'Calendar', 'composer' ),
		'type' => 'text'
	);
}

// Portfolio Settings
$of_options[] = array( 	
	'name' => esc_html__( 'Portfolio', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_portfolio',
	'sub_menu' => array( 
		esc_html__( 'General', 'composer' ),
		esc_html__( 'Single Portfolio', 'composer' ),
		esc_html__( 'Portfolio Category', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'General', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_portfolio_general'
);

$of_options[] = array( 
	'name' => esc_html__( 'Portfolio Slug', 'composer' ),
	'desc' => esc_html__( 'Please Enter the slug for Portfolio', 'composer' ),
	'id'   => 'slug_portfolio',
	'std'  => 'portfolio',
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose Portfolio Page', 'composer' ),
	'desc'    => esc_html__( 'Please Choose page', 'composer' ),
	'id'      => 'portfolio_page',
	'std'     => 'dashboard',
	'options' => $all_pages,
	'type'    => 'select'
);


$port_terms = array();

if( taxonomy_exists( 'pix_categories' ) ) {	
	$terms = get_terms( 'pix_categories' );
	if( ! empty( $terms ) ) {
		$port_terms['none'] = esc_html__( 'None', 'composer' );
		foreach( $terms as $term ){
			if( isset( $term->slug ) && isset( $term->name ) ) {
				$port_terms[$term->slug] = $term->name;
			}			
		}
	}

	if( ! empty( $port_terms ) ) {

		$of_options[] = array( 	
			'name'    => esc_html__( 'Hide/skip Portfolio Categories', 'composer' ),
			'desc'    => esc_html__( 'Choosen Categories are removed from portfolio filter, single portfolio category and portfolio hover catergory', 'composer' ),
			'id'      => 'portfolio_skip_terms',
			'std'     => array(),
			'options' => $port_terms,
			'type'    => 'multi_select'
		);
	}
	
}

$of_options[] = array( 	
	'name' => esc_html__( 'Single Portfolio', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_portfolio_sinle_portfolio'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Single Portfolio Title Tag', 'composer' ),
	'desc'    => esc_html__( 'Select title tag', 'composer' ),
	'id'      => 'single_porfolio_title_tag',
	'std'     => 'h2',
	'type'    => 'select',
	'options' => array(
		'h1' => esc_html__( 'H1', 'composer' ),
		'h2' => esc_html__( 'H2', 'composer' ),
		'h3' => esc_html__( 'H3', 'composer' ),
		'h4' => esc_html__( 'H4', 'composer' ),
		'h5' => esc_html__( 'H5', 'composer' ),
		'h6' => esc_html__( 'H6', 'composer' ),
		'p'  => esc_html__( 'P', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Project Detail Title', 'composer' ),
	'desc' => esc_html__( 'Type the project detail title', 'composer' ),
	'id'   => 'single_porfolio_project_detail_title',
	'std'  => 'Project Details',
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Client Title', 'composer' ),
	'desc' => esc_html__( 'Type the Client title', 'composer' ),
	'id'   => 'single_porfolio_client_title',
	'std'  => 'Client',
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Skill Title', 'composer' ),
	'desc' => esc_html__( 'Type the Skill title', 'composer' ),
	'id'   => 'single_porfolio_skill_title',
	'std'  => 'Skills',
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Task Title', 'composer' ),
	'desc' => esc_html__( 'Type the Task title', 'composer' ),
	'id'   => 'single_porfolio_task_title',
	'std'  => 'Tasks',
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Launch Button Text', 'composer' ),
	'desc' => esc_html__( 'Type the Launch button text', 'composer' ),
	'id'   => 'single_porfolio_launch_btn_text',
	'std'  => esc_html__( 'Launch Project', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Like button', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display Like button?', 'composer' ),
	'id'      => 'single_porfolio_like',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Share option', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display Share option?', 'composer' ),
	'id'      => 'single_porfolio_share',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Next and Previous arrow', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display Next and Previous arrow?', 'composer' ),
	'id'      => 'single_porfolio_next_prev',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

// Portfolio Category Page Settings
$of_options[] = array( 	
	'name' => esc_html__( 'Portfolio Category', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_portfolio_portfolio_category'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Portfolio Category Title Tag', 'composer' ),
	'desc'    => esc_html__( 'Select title tag', 'composer' ),
	'id'      => 'portfolio_cat_title_tag',
	'std'     => 'h2',
	'type'    => 'select',
	'options' => array(
		'h1' => esc_html__( 'H1', 'composer' ),
		'h2' => esc_html__( 'H2', 'composer' ),
		'h3' => esc_html__( 'H3', 'composer' ),
		'h4' => esc_html__( 'H4', 'composer' ),
		'h5' => esc_html__( 'H5', 'composer' ),
		'h6' => esc_html__( 'H6', 'composer' ),
		'p'  => esc_html__( 'P', 'composer' )
	)
);

$of_options[] = array( 
	'name' => esc_html__( 'Portfolio Category Slug', 'composer' ),
	'desc' => esc_html__( 'Please Enter the slug for Portfolio Category Base', 'composer' ),
	'id'   => 'slug_portfolio_cat',
	'std'  => 'portfolio-category',
	'type' => 'text'
);

$of_options[] = array(
	'name' => esc_html__( 'Number of Items', 'composer' ),
	'desc' => esc_html__( 'How many items you want to display', 'composer' ),
	'id'   => 'portfolio_cat_no_of_items',
	'std'  => '6',
	'type' => 'text'
);

$of_options[] = array( 
	'name'    => esc_html__( 'Portfolio Style', 'composer' ),
	'desc'    => esc_html__( 'Choose Portfolio Style', 'composer' ),
	'id'      => 'portfolio_cat_portfolio_style',
	'std'     => 'grid',
	'type'    => 'select',
	'options' => array( 
		'grid'          => esc_html__( 'Grid', 'composer' ), 
		'masonry-fixed' => esc_html__( 'Masonry Defined Height', 'composer' ), 
		'masonry'       => esc_html__( 'Masonry Auto Height', 'composer' )  
	)
);

$of_options[] = array( 
	'name'    => esc_html__( 'Choose a hover style', 'composer' ),
	'desc'    => esc_html__( 'Choose Portfolio Category Hover Style', 'composer' ),
	'id'      => 'portfolio_cat_style',
	'std'     => 'style1',
	'type'    => 'select',
	'options' => array( 
		'style1' => esc_html__( 'Style 1', 'composer' ), 
		'style2' => esc_html__( 'Style 2', 'composer' ), 
		'style3' => esc_html__( 'Style 3', 'composer' ), 
		'style4' => esc_html__( 'Style 4', 'composer' ), 
		'style5' => esc_html__( 'Style 5', 'composer' ), 
		'style6' => esc_html__( 'Style 6', 'composer' )
	)
);

$of_options[] = array( 
	'name'    => esc_html__( 'Show Filter', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show filter?', 'composer' ),
	'id'      => 'portfolio_cat_filter',
	'std'     => 'yes',
	'type'    => 'switch',
	'options' => array( 
		'yes' => esc_html__( 'Yes', 'composer' ), 
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 
	'name'    => esc_html__( 'Show Sub Category Only', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show sub categories only?', 'composer' ),
	'id'      => 'portfolio_cat_show_sub_category_only',
	'std'     => 'yes',
	'type'    => 'switch',
	'options' => array( 
		'yes' => esc_html__( 'Yes', 'composer' ), 
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 
	'name'    => esc_html__( 'Show Search', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show search?', 'composer' ),
	'id'      => 'portfolio_cat_search',
	'std'     => 'no',
	'type'    => 'switch',
	'options' => array( 
		'yes' => esc_html__( 'Yes', 'composer' ), 
		'no'  => esc_html__( 'No', 'composer' )
	)
);

// Block
$of_options[] = array( 
	'name' => esc_html__( 'Block', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_block'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Blocks', 'composer' ),
	'desc'    => esc_html__( 'Select the blocks shortcodes you want to use', 'composer' ),
	'id'      => 'required_blocks',
	'std'     => $block_default,
	'type'    => 'multicheck',
	'options' => $blocks
);

// Blog Related Pages
$of_options[] = array( 	
	'name' => esc_html__( 'Blog Related Pages', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_blog_related_pages',
	'sub_menu' => array( 
		esc_html__( 'Blog', 'composer' ),
		esc_html__( 'Archives', 'composer' ),
		esc_html__( 'Search', 'composer' ),
		esc_html__( 'Single Blog', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Blog', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_blog_related_pages_blog'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Blog Title', 'composer' ),
	'desc' => esc_html__( 'Type the blog title', 'composer' ),
	'id'   => 'blog_page_title',
	'std'  => esc_html__( 'Blog', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Post Title Tag', 'composer' ),
	'desc'    => esc_html__( 'Select title tag', 'composer' ),
	'id'      => 'blog_title_tag',
	'std'     => 'h3',
	'type'    => 'select',
	'options' => array(
		'h1' => esc_html__( 'H1', 'composer' ),
		'h2' => esc_html__( 'H2', 'composer' ),
		'h3' => esc_html__( 'H3', 'composer' ),
		'h4' => esc_html__( 'H4', 'composer' ),
		'h5' => esc_html__( 'H5', 'composer' ),
		'h6' => esc_html__( 'H6', 'composer' ),
		'p'  => esc_html__( 'P', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Pagination Type', 'composer' ),
	'desc'    => esc_html__( 'Choose pagination type', 'composer' ),
	'id'      => 'blog_pagination',
	'std'     => 'number',
	'type'    => 'select',
	'options' => $pagination
);

$of_options[] = array( 
	'name' => esc_html__( 'Load More Text', 'composer' ),
	'desc' => esc_html__( 'Type load more text', 'composer' ),
	'id'   => 'blog_loadmore_text',
	'std'  => esc_html__( 'Load More', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'All Posts Loaded Text', 'composer' ),
	'desc' => esc_html__( 'Type load more text', 'composer' ),
	'id'   => 'blog_allpost_loaded_text',
	'std'  => esc_html__( 'All Posts Loaded', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Change Url', 'composer' ),
	'desc'    => esc_html__( 'Do you want to change url in address bar on load more/autoload option', 'composer' ),
	'id'      => 'blog_change_url',
	'std'     => 'no',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show Image Caption', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show image caption below of the image?', 'composer' ),
	'id'      => 'blog_caption',
	'std'     => 'disable',
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show Placeholder Image', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show placeholder? If image is not.', 'composer' ),
	'id'      => 'blog_placeholder',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show'  => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Slider Shortcode', 'composer' ),
	'desc' => esc_html__( 'Type the slider shortcode to display slider. Eg: [revslider demo]', 'composer' ),
	'id'   => 'blog_slider',
	'std'  => '',
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Style', 'composer' ),
	'desc'    => esc_html__( 'Select the style', 'composer' ),
	'id'      => 'blog_styles',
	'std'     => 'normal',
	'type'    => 'select',
	'options' => $blog_styles
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Masonry/Grid style columns', 'composer' ),
	'desc'    => esc_html__( 'Choose the column', 'composer' ),
	'id'      => 'blog_columns',
	'std'     => 'col-md-3',
	'type'    => 'switch',
	'options' => array(
		'col-md-6'  => esc_html__( '2 Column', 'composer' ),
		'col-md-4' => esc_html__( '3 Column', 'composer' ),
		'col-md-3' => esc_html__( '4 Column', 'composer' )
	)
);
								
$of_options[] = array( 
	'name' => esc_html__( 'Choose the Registered Sidebar', 'composer' ),
	'desc' => esc_html__( 'Please choose the sidebar you have created', 'composer' ),
	'id'   => 'blog_select_sidebar',
	'std'  => '0',
	'type' => 'select_sidebar',
	'hide' => array( 'blog-sidebar' )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Sidebar Position', 'composer' ),
	'desc'    => esc_html__( 'Choose blog sidebar position, it applies blog page only.', 'composer' ),
	'id'      => 'blog_sidebar',
	'std'     => 'right-sidebar',
	'type'    => 'select',
	'options' => $sidebar
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Enable/Disable Animation', 'composer' ),
	'desc'    => esc_html__( 'Do you want to animate?', 'composer' ),
	'id'      => 'blog_animate',
	'std'     => 'enable',
	'folds'   => 'enable',
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Animation Transition', 'composer' ),
	'desc'    => esc_html__( 'Choose animation transition', 'composer' ),
	'id'      => 'blog_transition',
	'std'     => 'fadeInUp',
	'type'    => 'select',
	'fold'    => array( 'blog_animate' => array( 'enable' ) ),
	'options' => $animation
);

$of_options[] = array( 	
	'name' => esc_html__( 'Transition Duration', 'composer' ),
	'desc' => esc_html__( 'Enter the Duration (Ex: 500ms or 1s)', 'composer' ),
	'id'   => 'blog_duration',
	'std'  => '500ms',
	'fold' => array( 'blog_animate' => array( 'enable' ) ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title Limit', 'composer' ),
	'desc' => esc_html__( 'Type the no. of letters you want to display for the post title', 'composer' ),
	'id'   => 'blog_title_limit',
	'std'  => 80,
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Blog Content Type', 'composer' ),
	'desc'    => esc_html__( 'Display full content or summary?', 'composer' ),
	'id'      => 'blog_content_type',
	'std'     => 'excerpt',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'content' => esc_html__( 'Full Content', 'composer' ),
		'excerpt' => esc_html__( 'Excerpt', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Content Limit', 'composer' ),
	'desc' => esc_html__( 'Type the no. of words you want to display for the content', 'composer' ),
	'id'   => 'blog_content_limit',
	'fold' => array( 'blog_content_type' => array( 'excerpt' ) ),
	'std'  => 40,
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Category in meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display category meta?', 'composer' ),
	'id'      => 'blog_category',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Like meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display like meta', 'composer' ),
	'id'      => 'blog_meta_like',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Comment meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display comments meta?', 'composer' ),
	'id'      => 'blog_meta_comment',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Single post link', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display single post link?', 'composer' ),
	'id'      => 'blog_single_link',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Type the single post link text', 'composer' ),
	'desc' => esc_html__( 'Type the single post link text here', 'composer' ),
	'id'   => 'blog_single_link_text',
	'std'  => esc_html__( esc_html__( 'Continue Reading...', 'composer' ), 'composer' ),
	'type' => 'text'
);

// Single Post Setting
$of_options[] = array( 	
	'name' => esc_html__( 'Single Blog', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_blog_related_pages_single_blog'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Single Blog Style', 'composer' ),
	'desc'    => esc_html__( 'Select the single blog style', 'composer' ),
	'id'      => 'single_style',
	'std'     => 'style1',
	'options' => $single_blog_style,
	'type'    => 'switch'
);

$of_options[] = array( 
	'name' => esc_html__( 'Choose the Registered Sidebar', 'composer' ),
	'desc' => esc_html__( 'Please choose the sidebar you have created', 'composer' ),
	'id'   => 'single_select_sidebar',
	'std'  => '0',
	'type' => 'select_sidebar',
	'hide' => array( 'blog-sidebar' )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Single Post Layout', 'composer' ),
	'desc'    => esc_html__( 'Choose single blog layout', 'composer' ),
	'id'      => 'single_sidebar',
	'std'     => 'right-sidebar',
	'type'    => 'select',
	'options' => $sidebar
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Title Tag', 'composer' ),
	'desc'    => esc_html__( 'Choose title tag', 'composer' ),
	'id'      => 'single_title_tag',
	'std'     => 'h2',
	'type'    => 'select',
	'options' => array(
		'h1' => esc_html__( 'H1', 'composer' ),
		'h2' => esc_html__( 'H2', 'composer' ),
		'h3' => esc_html__( 'H3', 'composer' ),
		'h4' => esc_html__( 'H4', 'composer' ),
		'h5' => esc_html__( 'H5', 'composer' ),
		'h6' => esc_html__( 'H6', 'composer' ),
		'p'  => esc_html__( 'P', 'composer' )
	),
);

$of_options[] = array( 	
	'name' => esc_html__( 'Image Width', 'composer' ),
	'desc' => esc_html__( 'Enter the width in integer. Type "full" if you dont want to crop the image. That size options only applies to "Single Blog style 1"', 'composer' ),
	'id'   => 'single_image_width',
	'std'  => '1360',
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Image Height', 'composer' ),
	'desc' => esc_html__( 'Enter the height in integer. Type "full" if you dont want to crop the image. That size options only applies to "Single Blog style 1"', 'composer' ),
	'id'   => 'single_image_height',
	'std'  => '480',
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show Image Caption', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show image caption below of the image?', 'composer' ),
	'id'      => 'single_caption',
	'std'     => 'disable',
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Ad', 'composer' ),
	'desc' => esc_html__( 'Enter the Ad code', 'composer' ),
	'id'   => 'ad1',
	'std'  => '',
	'type' => 'textarea'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Category', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display category', 'composer' ),
	'id'      => 'single_category',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Tags', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display tags', 'composer' ),
	'id'      => 'single_tags',
	'std'     => 'show',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	),
	'type' 		=> 'switch'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Date meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display date meta', 'composer' ),
	'id'      => 'single_date',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Like meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display like meta', 'composer' ),
	'id'      => 'single_like',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Author meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display like meta', 'composer' ),
	'id'      => 'single_author',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Comment meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display comment meta', 'composer' ),
	'id'      => 'single_comment',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

// Share
$share = array
( 
	'disabled' => array(
		'placebo' => 'placebo'
	), 
	'enabled' => array(
		'placebo'   => 'placebo',
		'facebook'  => esc_html__( 'Facebook', 'composer' ),
		'twitter'   => esc_html__( 'Twitter', 'composer' ),
		'gplus'     => esc_html__( 'Google Plus', 'composer' ),
		'linkedin'  => esc_html__( 'Linkedin', 'composer' ),
		'pinterest' => esc_html__( 'Pinterest', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Share', 'composer' ),
	'desc' => esc_html__( 'Enable what you want to display', 'composer' ),
	'id'   => 'single_share',
	'std'  => $share,
	'type' => 'sorter'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Related Posts Section', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display related post section', 'composer' ),
	'id'      => 'single_related',
	'std'     => 'show',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Related Posts Featured Image', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display related post featured image', 'composer' ),
	'id'      => 'single_related_featured_image',
	'std'     => 'no',
	'fold'    => array( 'single_related' => array( 'show' ) ),
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Show', 'composer' ),
		'no'  => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Related Post Title', 'composer' ),
	'desc' => esc_html__( 'Type the relatted post section title here', 'composer' ),
	'id'   => 'single_related_title',
	'std'  => esc_html__( 'Related Post', 'composer' ),
	'fold' => array( 'single_related' => array( 'show' ) ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Related Post Columns', 'composer' ),
	'desc'    => esc_html__( 'Enter the related post columns', 'composer' ),
	'id'      => 'single_related_columns',
	'std'     => 'col1',
	'type'    => 'select',
	'fold'    => array( 'single_related' => array( 'show' ) ),
	'options' => array(
		'col1' => esc_html__( '1 Column', 'composer' ),
		'col2' => esc_html__( '2 Column', 'composer' ),
		'col3' => esc_html__( '3 Column', 'composer' ),
		'col4' => esc_html__( '4 Column', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title Limit', 'composer' ),
	'desc' => esc_html__( 'Type the numerical value for the post title', 'composer' ),
	'id'   => 'single_related_title_length',
	'std'  => 30,
	'type' => 'text',
	'fold' => array( 'single_related' => array( 'show' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Content Limit', 'composer' ),
	'desc' => esc_html__( 'Type the numerical value for the content', 'composer' ),
	'id'   => 'single_related_content_length',
	'std'  => 90,
	'type' => 'text',
	'fold' => array( 'single_related' => array( 'show' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Number of Related Post', 'composer' ),
	'desc' => esc_html__( 'Enter the integer value to display related post', 'composer' ),
	'id'   => 'single_related_no',
	'std'  => '6',
	'fold' => array( 'single_related' => array( 'show' ) ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Order By', 'composer' ),
	'desc'    => esc_html__( 'Choose the order by selection ', 'composer' ),
	'id'      => 'single_related_orderby',
	'std'     => 'date',
	'fold'    => array( 'single_related' => array( 'show' ) ),
	'type'    => 'select',
	'options' => $order_by
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Sorting Order', 'composer' ),
	'desc'    => esc_html__( 'Choose the sorting order', 'composer' ),
	'id'      => 'single_related_order',
	'std'     => 'desc',
	'fold'    => array( 'single_related' => array( 'show' ) ),
	'type'    => 'select',
	'options' => $order
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Bottom meta', 'composer' ),
	'desc'    => esc_html__( 'Select the bottom meta', 'composer' ),
	'id'      => 'single_related_bottom_meta',
	'std'     => 'like_comment',
	'fold'    => array( 'single_related' => array( 'show' ) ),
	'type'    => 'switch',
	'options' => array(
		'like_comment' => esc_html__( 'Like and Comment', 'composer' ),
		'link'         => esc_html__( 'Link', 'composer' ),
		'none'         => esc_html__( 'None', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Like', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display Like meta?', 'composer' ),
	'id'      => 'single_related_like',
	'std'     => 'yes',
	'fold'    => array( 'single_related' => array( 'show' ) ),
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Show', 'composer' ),
		'no'  => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide comment meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display comment meta', 'composer' ),
	'id'      => 'single_related_comment',
	'std'     => 'yes',
	'fold'    => array( 'single_related' => array( 'show' ) ),
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Show', 'composer' ),
		'no'  => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Related Post Link Text', 'composer' ),
	'desc' => esc_html__( 'Type the related post link text', 'composer' ),
	'id'   => 'single_related_link_text',
	'std'  => esc_html__( 'Read More', 'composer' ),
	'type' => 'text',
	'fold' => array( 'single_related' => array( 'show' ) )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Comment template', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display category', 'composer' ),
	'id'      => 'single_comment_template',
	'std'     => 'show',
	'type'    => 'switch',
	'folds'   => 1,
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Comment Section Title', 'composer' ),
	'desc' => esc_html__( 'Type the comment section title here', 'composer' ),
	'id'   => 'single_comment_title',
	'fold'    => array( 'single_comment_template' => array( 'show' ) ),
	'std'  => esc_html__( 'Comments', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Comment form Title', 'composer' ),
	'desc' => esc_html__( 'Type the comment form title here', 'composer' ),
	'id'   => 'single_comment_form_title',
	'fold'    => array( 'single_comment_template' => array( 'show' ) ),
	'std'  => esc_html__( 'Leave a Comments', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Comment form button text', 'composer' ),
	'desc' => esc_html__( 'Type the comment form button text here', 'composer' ),
	'id'   => 'single_comment_form_btn_text',
	'fold'    => array( 'single_comment_template' => array( 'show' ) ),
	'std'  => esc_html__( 'Add Comment', 'composer' ),
	'type' => 'text'
);


// Archives Settings
$of_options[] = array( 	
	'name' => esc_html__( 'Archives', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_blog_related_pages_archives'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Slider Shortcode', 'composer' ),
	'desc' => esc_html__( 'Type the slider shortcode to display slider. Eg: [revslider demo]', 'composer' ),
	'id'   => 'archives_slider',
	'std'  => '',
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Post Title Tag', 'composer' ),
	'desc'    => esc_html__( 'Select title tag', 'composer' ),
	'id'      => 'archives_title_tag',
	'std'     => 'h3',
	'type'    => 'select',
	'options' => array(
		'h1' => esc_html__( 'H1', 'composer' ),
		'h2' => esc_html__( 'H2', 'composer' ),
		'h3' => esc_html__( 'H3', 'composer' ),
		'h4' => esc_html__( 'H4', 'composer' ),
		'h5' => esc_html__( 'H5', 'composer' ),
		'h6' => esc_html__( 'H6', 'composer' ),
		'p'  => esc_html__( 'P', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Pagination Type', 'composer' ),
	'desc'    => esc_html__( 'Choose pagination type', 'composer' ),
	'id'      => 'archives_pagination',
	'std'     => 'number',
	'type'    => 'select',
	'options' => $pagination
);

$of_options[] = array( 
	'name' => esc_html__( 'Load More Text', 'composer' ),
	'desc' => esc_html__( 'Type load more text', 'composer' ),
	'id'   => 'archives_loadmore_text',
	'std'  => esc_html__( 'Load More', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'All Posts Loaded Text', 'composer' ),
	'desc' => esc_html__( 'Type load more text', 'composer' ),
	'id'   => 'archives_allpost_loaded_text',
	'std'  => esc_html__( 'All Posts Loaded', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Change Url', 'composer' ),
	'desc'    => esc_html__( 'Do you want to change url in address bar on load more/autoload option', 'composer' ),
	'id'      => 'archives_change_url',
	'std'     => 'no',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show Image Caption', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show image caption below of the image?', 'composer' ),
	'id'      => 'archives_caption',
	'std'     => 'disable',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	),
	'type' 		=> 'switch'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show Placeholder Image', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show placeholder? If image is not.', 'composer' ),
	'id'      => 'archives_placeholder',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show'  => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Style', 'composer' ),
	'desc'    => esc_html__( 'Select the style', 'composer' ),
	'id'      => 'archives_styles',
	'std'     => 'normal',
	'type'    => 'select',
	'options' => $blog_styles
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Masonry/Grid style columns', 'composer' ),
	'desc'    => esc_html__( 'Choose the column', 'composer' ),
	'id'      => 'archives_columns',
	'std'     => 'col-md-3',
	'type'    => 'switch',
	'options' => array(
		'col-md-6'  => esc_html__( '2 Column', 'composer' ),
		'col-md-4' => esc_html__( '3 Column', 'composer' ),
		'col-md-3' => esc_html__( '4 Column', 'composer' )
	)
);
								
$of_options[] = array( 
	'name' => esc_html__( 'Choose the Registered Sidebar', 'composer' ),
	'desc' => esc_html__( 'Please choose the sidebar you have created', 'composer' ),
	'id'   => 'archives_select_sidebar',
	'std'  => '0',
	'type' => 'select_sidebar',
	'hide' => array( 'blog-sidebar' )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Sidebar Position', 'composer' ),
	'desc'    => esc_html__( 'Choose blog sidebar position, it applies blog page only.', 'composer' ),
	'id'      => 'archives_sidebar',
	'std'     => 'right-sidebar',
	'type'    => 'select',
	'options' => $sidebar
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Enable/Disable Animation', 'composer' ),
	'desc'    => esc_html__( 'Do you want to animate?', 'composer' ),
	'id'      => 'archives_animate',
	'std'     => 'enable',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Animation Transition', 'composer' ),
	'desc'    => esc_html__( 'Choose animation transition', 'composer' ),
	'id'      => 'archives_transition',
	'std'     => 'fadeInUp',
	'type'    => 'select',
	'fold'    => array( 'archives_animate' => array( 'enable' ) ),
	'options' => $animation
);

$of_options[] = array( 	
	'name' => esc_html__( 'Transition Duration', 'composer' ),
	'desc' => esc_html__( 'Enter the Duration (Ex: 500ms or 1s)', 'composer' ),
	'id'   => 'archives_duration',
	'std'  => '500ms',
	'fold' => array( 'archives_animate' => array( 'enable' ) ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title Limit', 'composer' ),
	'desc' => esc_html__( 'Type the numerical value for the post title', 'composer' ),
	'id'   => 'archives_title_limit',
	'std'  => 80,
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Content Limit', 'composer' ),
	'desc' => esc_html__( 'Type the numerical value for the content', 'composer' ),
	'id'   => 'archives_content_limit',
	'std'  => 40,
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Category in meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display category meta?', 'composer' ),
	'id'      => 'archives_category',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Like meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display like meta', 'composer' ),
	'id'      => 'archives_meta_like',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Comment meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display comments meta?', 'composer' ),
	'id'      => 'archives_meta_comment',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Single post link', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display single post link?', 'composer' ),
	'id'      => 'archives_single_link',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Type the single post link text', 'composer' ),
	'desc' => esc_html__( 'Type the single post link text here', 'composer' ),
	'id'   => 'archives_single_link_text',
	'std'  => esc_html__( 'Continue Reading...', 'composer' ),
	'type' => 'text'
);

// Search Setting
$of_options[] = array( 	
	'name' => esc_html__( 'Search', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_blog_related_pages_search'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Post Title Tag', 'composer' ),
	'desc'    => esc_html__( 'Select title tag', 'composer' ),
	'id'      => 'search_title_tag',
	'std'     => 'h3',
	'type'    => 'select',
	'options' => array(
		'h1' => esc_html__( 'H1', 'composer' ),
		'h2' => esc_html__( 'H2', 'composer' ),
		'h3' => esc_html__( 'H3', 'composer' ),
		'h4' => esc_html__( 'H4', 'composer' ),
		'h5' => esc_html__( 'H5', 'composer' ),
		'h6' => esc_html__( 'H6', 'composer' ),
		'p'  => esc_html__( 'P', 'composer' )
	)
);

$of_options[] = array(  
	'name'    => esc_html__( 'Search Title Bar', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display search title bar?', 'composer' ),
	'id'      => 'search_title_bar',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Search Exclude', 'composer' ),
	'desc'    => esc_html__( 'Exclude Search result here', 'composer' ),
	'id'      => 'search_exclude',
	'std'     => array(''),
	'type'    => 'multicheck',
	'options' => $search_exclude
);

$of_options[] = array( 	
	'name' => esc_html__( 'No Search result title', 'composer' ),
	'desc' => esc_html__( 'Type the no search result title', 'composer' ),
	'id'   => 'search_no_search_result_title',
	'std'  => esc_html__( 'Oops, Search Result Not Found!', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'No Search result content', 'composer' ),
	'desc' => esc_html__( 'Type the no search result content', 'composer' ),
	'id'   => 'search_no_search_result_content',
	'std'  => esc_html__( 'Uh Oh. Something is missing. Try double checking things.', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Slider Shortcode', 'composer' ),
	'desc' => esc_html__( 'Type the slider shortcode to display slider. Eg: [revslider demo]', 'composer' ),
	'id'   => 'search_slider',
	'std'  => '',
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Pagination Type', 'composer' ),
	'desc'    => esc_html__( 'Choose pagination type', 'composer' ),
	'id'      => 'search_pagination',
	'std'     => 'number',
	'type'    => 'select',
	'options' => $pagination
);

$of_options[] = array( 
	'name' => esc_html__( 'Load More Text', 'composer' ),
	'desc' => esc_html__( 'Type load more text', 'composer' ),
	'id'   => 'search_loadmore_text',
	'std'  => esc_html__( 'Load More', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 
	'name' => esc_html__( 'All Posts Loaded Text', 'composer' ),
	'desc' => esc_html__( 'Type load more text', 'composer' ),
	'id'   => 'search_allpost_loaded_text',
	'std'  => esc_html__( 'All Posts Loaded', 'composer' ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Change Url', 'composer' ),
	'desc'    => esc_html__( 'Do you want to change url in address bar on load more/autoload option', 'composer' ),
	'id'      => 'search_change_url',
	'std'     => 'no',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show Image Caption', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show image caption below of the image?', 'composer' ),
	'id'      => 'search_caption',
	'std'     => 'disable',
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);



$of_options[] = array( 	
	'name'    => esc_html__( 'Show Placeholder Image', 'composer' ),
	'desc'    => esc_html__( 'Do you want to show placeholder? If image is not.', 'composer' ),
	'id'      => 'search_placeholder',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show'  => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);
								
$of_options[] = array( 	
	'name'    => esc_html__( 'Style', 'composer' ),
	'desc'    => esc_html__( 'Select the style', 'composer' ),
	'id'      => 'search_styles',
	'std'     => 'normal',
	'type'    => 'select',
	'options' => $blog_styles
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Masonry/Grid style columns', 'composer' ),
	'desc'    => esc_html__( 'Choose the column', 'composer' ),
	'id'      => 'search_columns',
	'std'     => 'col-md-3',
	'type'    => 'switch',
	'options' => array(
		'col-md-6'  => esc_html__( '2 Column', 'composer' ),
		'col-md-4' => esc_html__( '3 Column', 'composer' ),
		'col-md-3' => esc_html__( '4 Column', 'composer' )
	)
);
								
$of_options[] = array( 
	'name' => esc_html__( 'Choose the Registered Sidebar', 'composer' ),
	'desc' => esc_html__( 'Please choose the sidebar you have created', 'composer' ),
	'id'   => 'search_select_sidebar',
	'std'  => '0',
	'type' => 'select_sidebar',
	'hide' => array( 'blog-sidebar' )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Sidebar Position', 'composer' ),
	'desc'    => esc_html__( 'Choose blog sidebar position, it applies blog page only.', 'composer' ),
	'id'      => 'search_sidebar',
	'std'     => 'right-sidebar',
	'type'    => 'select',
	'options' => $sidebar
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Enable/Disable Animation', 'composer' ),
	'desc'    => esc_html__( 'Do you want to animate?', 'composer' ),
	'id'      => 'search_animate',
	'std'     => 'enable',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'enable'  => esc_html__( 'Enable', 'composer' ),
		'disable' => esc_html__( 'Disable', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Animation Transition', 'composer' ),
	'desc'    => esc_html__( 'Choose animation transition', 'composer' ),
	'id'      => 'search_transition',
	'std'     => 'fadeInUp',
	'type'    => 'select',
	'fold'    => array( 'search_animate' => array( 'enable' ) ),
	'options' => $animation
);

$of_options[] = array( 	
	'name' => esc_html__( 'Transition Duration', 'composer' ),
	'desc' => esc_html__( 'Enter the Duration (Ex: 500ms or 1s)', 'composer' ),
	'id'   => 'search_duration',
	'std'  => '500ms',
	'fold' => array( 'search_animate' => array( 'enable' ) ),
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title Limit', 'composer' ),
	'desc' => esc_html__( 'Type the numerical value for the post title', 'composer' ),
	'id'   => 'search_title_limit',
	'std'  => 80,
	'type' => 'text'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Content Limit', 'composer' ),
	'desc' => esc_html__( 'Type the numerical value for the content', 'composer' ),
	'id'   => 'search_content_limit',
	'std'  => 40,
	'type' => 'text'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Category in meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display category meta?', 'composer' ),
	'id'      => 'search_category',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Like meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display like meta', 'composer' ),
	'id'      => 'search_meta_like',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Comment meta', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display comments meta?', 'composer' ),
	'id'      => 'search_meta_comment',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Single post link', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display single post link?', 'composer' ),
	'id'      => 'search_single_link',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Type the single post link text', 'composer' ),
	'desc' => esc_html__( 'Type the single post link text here', 'composer' ),
	'id'   => 'search_single_link_text',
	'std'  => esc_html__( 'Continue Reading...', 'composer' ),
	'type' => 'text'
);

// 404 Settings
$of_options[] = array( 	
	'name' => esc_html__( 'Error Page', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_error_page'
);

$pages_list['default'] = esc_html__( 'Default', 'composer' );

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose 404 Page', 'composer' ),
	'desc'    => esc_html__( 'Choose here to choose a custom 404 page', 'composer' ),
	'id'      => '404_custom_page',
	'std'     => 'default',
	'options' => $pages_list,
	'type'    => 'select'
);

unset( $pages_list['default'] );

$of_options[] = array( 
	'name' => esc_html__( 'Upload 404 Image', 'composer' ),
	'desc' => esc_html__( 'Upload a custom 404 image. Height should be more than 1360px.', 'composer' ),
	'id'   => '404_bg',
	'std'  => get_template_directory_uri().'/_images/404.png',
	'mod'  => 'min',
	'type' => 'media'
);

$of_options[] = array( 	
	'name' => esc_html__( '404 Error text', 'composer' ),
	'desc' => esc_html__( 'Enter the 404 error text here', 'composer' ),
	'id'   => '404_text',
	'std'  => esc_html__( 'Page Not Found', 'composer' ),
	'type' => 'textarea'
);

$of_options[] = array( 	
	'name' => esc_html__( '404 Error text', 'composer' ),
	'desc' => esc_html__( 'Enter the 404 error description here', 'composer' ),
	'id'   => '404_description',
	'std'  => esc_html__( 'Sorry, but the page you were looking for cannot be found. Please inform us about this error.', 'composer' ),
	'type' => 'textarea'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide 404 menu', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the 404 menu?', 'composer' ),
	'id'      => '404_menu',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide 404 Search', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the Search?', 'composer' ),
	'id'      => '404_search',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

if (class_exists('WooCommerce')) {

	//Shop Setting
	$of_options[] = array( 	
		'name' => esc_html__( 'Shop', 'composer' ),
		'type' => 'heading',
		'id'   => 'title_shop'
	);


	$of_options[] = array( 	
		'name'    => esc_html__( 'Product Title Tag', 'composer' ),
		'desc'    => esc_html__( 'Select title tag', 'composer' ),
		'id'      => 'shop_title_tag',
		'std'     => 'h3',
		'type'    => 'select',
		'options' => array(
			'h1' => esc_html__( 'H1', 'composer' ),
			'h2' => esc_html__( 'H2', 'composer' ),
			'h3' => esc_html__( 'H3', 'composer' ),
			'h4' => esc_html__( 'H4', 'composer' ),
			'h5' => esc_html__( 'H5', 'composer' ),
			'h6' => esc_html__( 'H6', 'composer' ),
			'p'  => esc_html__( 'P', 'composer' )
		)
	);

	$of_options[] = array( 	
		'name'    => esc_html__( 'Show/Hide Cart Button on Shop Page', 'composer' ),
		'desc'    => esc_html__( 'Do you want to display Cart Button on Shop Page?', 'composer' ),
		'id'      => 'cart_btn_on_hover',
		'std'     => 'show',
		'type'    => 'switch',
		'options' => array(
			'show' => esc_html__( 'Show', 'composer' ),
			'hide' => esc_html__( 'Hide', 'composer' )
		)
	);

	$of_options[] = array( 	
		'name'    => esc_html__( 'Shop Page Style', 'composer' ),
		'desc'    => esc_html__( 'Choose shop page style, Ex: default, Masonry, Grid.', 'composer' ),
		'id'      => 'shop_style',
		'std'     => 'default',
		'type'    => 'select',
		'options' => $shop_styles
	);

	$of_options[] = array( 	
		'name'    => esc_html__( 'Pagination Type', 'composer' ),
		'desc'    => esc_html__( 'Choose pagination type', 'composer' ),
		'id'      => 'shop_pagination',
		'std'     => 'number',
		'type'    => 'select',
		'options' => $pagination
	);

	$of_options[] = array( 
		'name' => esc_html__( 'Load More Text', 'composer' ),
		'desc' => esc_html__( 'Type load more text', 'composer' ),
		'id'   => 'shop_loadmore_text',
		'std'  => esc_html__( 'Load More', 'composer' ),
		'type' => 'text'
	);

	$of_options[] = array( 
		'name' => esc_html__( 'All Posts Loaded Text', 'composer' ),
		'desc' => esc_html__( 'Type load more text', 'composer' ),
		'id'   => 'shop_allpost_loaded_text',
		'std'  => esc_html__( 'All Posts Loaded', 'composer' ),
		'type' => 'text'
	);

	$of_options[] = array( 	
		'name'    => esc_html__( 'Change Url', 'composer' ),
		'desc'    => esc_html__( 'Do you want to change url in address bar on load more/autoload option', 'composer' ),
		'id'      => 'shop_change_url',
		'std'     => 'no',
		'type'    => 'switch',
		'options' => array(
			'yes' => esc_html__( 'Yes', 'composer' ),
			'no'  => esc_html__( 'No', 'composer' )
		)
	);

	$of_options[] = array( 	
		'name' => esc_html__( 'Number of Products', 'composer' ),
		'desc' => esc_html__( 'How many products you want to display per page?', 'composer' ),
		'id'   => 'shop_count',
		'std'  => '8',
		'type' => 'text'
	);

	$of_options[] = array( 	
		'name'    => esc_html__( 'Shop Page Sidebar Position', 'composer' ),
		'desc'    => esc_html__( 'Choose shop page sidebar position, it applies shop page only.', 'composer' ),
		'id'      => 'shop_sidebar',
		'std'     => 'full-width',
		'type'    => 'select',
		'options' => $sidebar
	);

	$of_options[] = array( 
		'name' => esc_html__( 'Choose the Shop Page Registered Sidebar', 'composer' ),
		'desc' => esc_html__( 'Please choose the sidebar you have created', 'composer' ),
		'id'   => 'shop_select_sidebar',
		'std'  => '0',
		'type' => 'select_sidebar',
		'hide' => array( 'shop' )
	);

	$of_options[] = array( 	
		'name'    => esc_html__( 'Single Shop Sidebar Position', 'composer' ),
		'desc'    => esc_html__( 'Choose single shop page sidebar position, it applies single shop page only.', 'composer' ),
		'id'      => 'single_shop_sidebar',
		'std'     => 'full-width',
		'type'    => 'select',
		'options' => $sidebar
	);

	$of_options[] = array( 
		'name' => esc_html__( 'Choose the Single Shop Page Registered Sidebar', 'composer' ),
		'desc' => esc_html__( 'Please choose the sidebar you have created', 'composer' ),
		'id'   => 'single_shop_select_sidebar',
		'std'  => '0',
		'type' => 'select_sidebar',
		'hide' => array( 'single-shop' )
	);

	$of_options[] = array( 	
		'name' => esc_html__( 'Product width', 'composer' ),
		'desc' => esc_html__( 'Type the width of the products', 'composer' ),
		'id'   => 'shop_width',
		'std'  => '398',
		'type' => 'text'
	);

	$of_options[] = array( 	
		'name' => esc_html__( 'Product height', 'composer' ),
		'desc' => esc_html__( 'Type the height of the products', 'composer' ),
		'id'   => 'shop_height',
		'std'  => '494',
		'type' => 'text'
	);

}

// Footer Options
$of_options[] = array( 	
	'name' => esc_html__( 'Footer Options', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_footer_options'
);

$of_options[] = array( 
	'name' => esc_html__( 'Before Footer', 'composer' ),
	'desc' => esc_html__( 'Type the Shortcode or HTML to print all the pages above the footer.', 'composer' ),
	'id'   => 'footer_before_sc',
	'std'  => '',
	'type' => 'textarea'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose Fixed Footer?', 'composer' ),
	'desc'    => esc_html__( 'Do you want Footer Fixed?', 'composer' ),
	'id'      => 'footer_fixed',
	'std'     => 'no',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Footer Layout Style.', 'composer' ),
	'desc'    => esc_html__( 'Choose Footer Layout. Boxed = max footer width is 1200px; Wide = footer covers the viewport.', 'composer' ),
	'id'      => 'footer_width',
	'std'     => 'boxed',
	'type'    => 'switch',
	'options' => array(
		'boxed' => esc_html__( 'Boxed', 'composer' ),
		'wide'  => esc_html__( 'Wide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Footer Widget', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the footer widget?', 'composer' ),
	'id'      => 'f_widget',
	'std'     => 'show',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Footer Widget on Mobile', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the footer widget on mobile?', 'composer' ),
	'id'      => 'f_widget_mobile_hide',
	'std'     => 'show',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Footer Layout', 'composer' ),
	'id'      => 'f_widget_col',
	'std'     => 'col3',
	'type'    => 'images',
	'fold'    => array( 'f_widget' => array( 'show' ) ),
	'options' => $footer
);

$of_options[] = array( 
	'name' => esc_html__( 'Choose the Registered Widgets', 'composer' ),
	'desc' => esc_html__( 'Please choose the widget area you have created', 'composer' ),
	'id'   => 'f_select_sidebar',
	'std'  => '0',
	'type' => 'select_sidebar',
	'fold' => array( 'f_widget' => array( 'show' ) ),
	'hide' => array( 'footer-widgets' )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Footer Style', 'composer' ),
	'desc'    => esc_html__( 'Select footer style.', 'composer' ),
	'id'      => 'footer_style',
	'std'     => 'dark',
	'fold'    => array( 'f_widget' => array( 'show' ) ),
	'type'    => 'switch',
	'options' => array(
		'dark'  => esc_html__( 'Dark', 'composer' ),
		'light' => esc_html__( 'Light', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Small footer', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the small footer?', 'composer' ),
	'id'      => 'f_small',
	'std'     => 'show',
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Show/Hide Small Footer on Mobile', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the small footer on mobile?', 'composer' ),
	'id'      => 'f_small_mobile_hide',
	'std'     => 'show',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'show' => esc_html__( 'Show', 'composer' ),
		'hide' => esc_html__( 'Hide', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Copyright Style', 'composer' ),
	'desc'    => esc_html__( 'Do you want to display the small footer?', 'composer' ),
	'id'      => 'copyright_side',
	'std'     => 'center',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'left_right' => esc_html__( 'Left and Right Side', 'composer' ),
		'center'     => esc_html__( 'Centered', 'composer' )
	)
);

$copyright_elem = array( 
	'disabled' => array(
		'placebo' => 'placebo',
		'sicons'  => esc_html__( 'Social Icons', 'composer' ),
		'f_shortcode'    => esc_html__( 'Custom Text', 'composer' )
	),
	'left' => array(
		'copyright_text' => esc_html__( 'Copyright Text', 'composer' )
	),
	'right' => array(
		'placebo'     => 'placebo',
		'footer_menu' => esc_html__( 'Menu', 'composer' )
	),
);

$of_options[] = array( 	
	'name' => esc_html__( 'Copyright Left Right elements', 'composer' ),
	'desc' => esc_html__( 'Choose what you want to display on Footer Area', 'composer' ),
	'id'   => 'copyright_sorter',
	'std'  => $copyright_elem,
	'fold' => array( 'copyright_side' => array( 'left_right' ) ),
	'type' => 'sorter'
);

$copyright_center_elem = array( 
	'disabled' => array(
		'placebo'     => 'placebo',
		'sicons'      => esc_html__( 'Social Icons', 'composer' ),
		'footer_menu' => esc_html__( 'Menu', 'composer' ),
		'f_shortcode'    => esc_html__( 'Custom Text', 'composer' )
	),
	'center' => array(
		'copyright_text' => esc_html( 'Copyright Text', 'composer' )
	),
);

$of_options[] = array( 	
	'name' => esc_html__( 'Copyright Center elements', 'composer' ),
	'desc' => esc_html__( 'Choose what you want to display on Footer Area', 'composer' ),
	'id'   => 'copyright_center_sorter',
	'std'  => $copyright_center_elem,
	'fold' => array( 'copyright_side' => array( 'center' ) ),
	'type' => 'sorter'
);

$of_options[] = array( 
	'name' => esc_html__( 'Copyright Text', 'composer' ),
	'desc' => esc_html__( 'Type Copyright Text', 'composer' ),
	'id'   => 'f_copyright_t',
	'std'  => '&copy; 2016 [blog-link], All Rights Reserved.',
	'type' => 'textarea'
);

$of_options[] = array( 
	'name' => esc_html__( 'Copyright Custom Text', 'composer' ),
	'desc' => esc_html__( 'Please Enter Shortcode or Text Here.', 'composer' ),
	'id'   => 'f_shortcode_text',
	'std'  => '',
	'type' => 'textarea'
);

// Styling Options
$of_options[] = array( 
	'name' => esc_html__( 'Styling Options', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_styling_options',
	'sub_menu' => array( 
		esc_html__( 'General', 'composer' ),
		esc_html__( 'Body Background', 'composer' ),
		esc_html__( 'Header', 'composer' ),
		esc_html__( 'Mobile Menu', 'composer' ),
		esc_html__( 'Title Bar', 'composer' ),
		esc_html__( 'Single Blog', 'composer' ),
		esc_html__( 'Footer', 'composer' )
	)
);

$of_options[] = array( 
	'name' => esc_html__( 'General', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_styling_options_general'
);

$of_options[] = array( 
	'name'    => esc_html__( 'Custom Styles', 'composer' ),
	'desc'    => esc_html__( 'Do you like to use Custom Styles, Please enable it and choose the Background color, Primary color, Selection text color, selection background color, link hover color. If it\'s disabled, the default style will apply and custom styles are won\'t apply.', 'composer' ),
	'id'      => 'custom_styles',
	'std'     => 'no',
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Primary Color', 'composer' ),
	'desc' => esc_html__( 'This is the primary color. Its applied for most of the items in the theme such as button, link etc..', 'composer' ),
	'id'   => 'pri_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Color', 'composer' ),
	'desc' => esc_html__( 'This is the default content color.', 'composer' ),
	'id'   => 'body_text_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the default link color.', 'composer' ),
	'id'   => 'link_text_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the default link hover color. ', 'composer' ),
	'id'   => 'link_text_hover_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Selection Text Color', 'composer' ),
	'desc' => esc_html__( 'This is the text color when selecting the text.', 'composer' ),
	'id'   => 'selection_text_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Selection Text Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the text background color when selecting the text.', 'composer' ),
	'id'   => 'selection_bg_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Widget Title Color', 'composer' ),
	'desc' => esc_html__( 'This is the header widget title color.', 'composer' ),
	'id'   => 'header_widget_title_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Widget Text Color', 'composer' ),
	'desc' => esc_html__( 'This is the header text color.', 'composer' ),
	'id'   => 'header_text_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Widget Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the header link color.', 'composer' ),
	'id'   => 'header_link_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Widget Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the header widget link hover color.', 'composer' ),
	'id'   => 'header_link_hover_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Highlight Color', 'composer' ),
	'desc' => esc_html__( 'This is the highlight color.', 'composer' ),
	'id'   => 'highlight_color',
	'std'  => '',
	'type' => 'color'
);

// Styling Options: Body Background
$of_options[] = array( 
	'name' => esc_html__( 'Body Background', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_styling_options_body_background'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Page Background', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 
	'name'    => esc_html__( 'Customize Body Background', 'composer' ),
	'desc'    => esc_html__( 'Do you want to customize the body backgound?', 'composer' ),
	'id'      => 'customize_body_bg',
	'std'     => 'no',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body background color for all pages', 'composer' ),
	'id'   => 'body_bgcolor',
	'std'  => '#ffffff',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Container Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body container container background color for all pages', 'composer' ),
	'id'   => 'body_container_bgcolor',
	'std'  => '#ffffff',
	'type' => 'color'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose Body Pattern', 'composer' ),
	'id'      => 'custom_body_bg_pattern',
	'std'     => 'none',
	'type'    => 'images',
	'fold'    => array( 'customize_body_bg' => array( 'yes' ) ),
	'options' => $pattern
);

$of_options[] = array( 
	'name' => esc_html__( 'Upload Body Background Image', 'composer' ),
	'desc' => esc_html__( 'Upload a body background image', 'composer' ),
	'id'   => 'custom_body_bg',
	'std'  => '',
	'mod'  => 'min',
	'fold' => array( 'customize_body_bg' => array( 'yes' ) ),
	'type' => 'media'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Background Attachment', 'composer' ),
	'desc'    => esc_html__( 'Choose the footer background image attachment', 'composer' ),
	'id'      => 'custom_body_bg_attachment',
	'std'     => 'scroll',
	'fold'    => array( 'customize_body_bg' => array( 'yes' ) ),
	'type'    => 'select',
	'options' => $bg_attachment
);

$of_options[] = array( 
	'name'    => esc_html__( 'Background Size', 'composer' ),
	'desc'    => esc_html__( 'Choose the footer background image size', 'composer' ),
	'id'      => 'custom_body_bg_size',
	'std'     => 'cover',
	'fold'    => array( 'customize_body_bg' => array( 'yes' ) ),
	'type'    => 'select',
	'options' => $bg_size
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Background Repeat', 'composer' ),
	'desc'    => esc_html__( 'Choose the footer background image repeat option', 'composer' ),
	'id'      => 'custom_body_bg_repeat',
	'std'     => 'cover',
	'fold'    => array( 'customize_body_bg' => array( 'yes' ) ),
	'type'    => 'select',
	'options' => $bg_repeat
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Blog Page Background', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body background color for blog page', 'composer' ),
	'id'   => 'blog_body_bgcolor',
	'std'  => '#fff',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Container Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body container background color for all pages', 'composer' ),
	'id'   => 'blog_body_container_bgcolor',
	'std'  => '#ffffff',
	'type' => 'color'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Archives Page Background', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body background color for archives page', 'composer' ),
	'id'   => 'archives_body_bgcolor',
	'std'  => '#fff',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Container Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body container background color for all pages', 'composer' ),
	'id'   => 'archives_body_container_bgcolor',
	'std'  => '#ffffff',
	'type' => 'color'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Search Page Background', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body background color for search page', 'composer' ),
	'id'   => 'search_body_bgcolor',
	'std'  => '#fff',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Container Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body container background color for all pages', 'composer' ),
	'id'   => 'search_body_container_bgcolor',
	'std'  => '#ffffff',
	'type' => 'color'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Error Page Background', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body background color', 'composer' ),
	'desc' => esc_html__( 'It applies body background color for 404 page', 'composer' ),
	'id'   => '404_body_bgcolor',
	'std'  => '#fff',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Container Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body container background color for all pages', 'composer' ),
	'id'   => '404_body_container_bgcolor',
	'std'  => '#ffffff',
	'type' => 'color'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Shop Page Background', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body background color for shop page', 'composer' ),
	'id'   => 'shop_body_bgcolor',
	'std'  => '#fff',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Body Container Background Color', 'composer' ),
	'desc' => esc_html__( 'It applies body container background color for all pages', 'composer' ),
	'id'   => 'shop_body_container_bgcolor',
	'std'  => '#ffffff',
	'type' => 'color'
);

// Styling Options: Header
$of_options[] = array( 
	'name' => esc_html__( 'Header', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_styling_options_header'
);

$of_options[] = array(  
	'name'    => esc_html__( 'Custom Header Styles', 'composer' ),
	'desc'    => esc_html__( 'Do you like to use Custom Styles, Please enable it and choose the Background color, Primary color, Selection text color, selection background color, link hover color. If it\'s disabled, the default style will apply and custom styles are won\'t apply.', 'composer' ),
	'id'      => 'custom_header_styles',
	'std'     => 'no',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Top Info bar Styling Options.', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Top Header Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the top header background color.', 'composer' ),
	'id'   => 'top_header_background_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Top Header Color', 'composer' ),
	'desc' => esc_html__( 'This is the top header color.', 'composer' ),
	'id'   => 'top_header_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array('yes') ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Top Header Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the top header link color.', 'composer' ),
	'id'   => 'top_header_link_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Top Header Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the top header link hover color.', 'composer' ),
	'id'   => 'top_header_link_hover_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Main Header', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Main Header Height', 'composer' ),
	'desc' => esc_html__( 'Type the height in px. Eg: 100px. Leave it to empty to apply default', 'composer' ),
	'id'   => 'main_header_height',
	'std'  => '',
	'type' => 'text',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'mod'  => 'mini'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the header background color.', 'composer' ),
	'id'   => 'main_header_background_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Color', 'composer' ),
	'desc' => esc_html__( 'This is the header color.', 'composer' ),
	'id'   => 'main_header_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the header link color.', 'composer' ),
	'id'   => 'main_header_link_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Header Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the header link hover color.', 'composer' ),
	'id'   => 'main_header_link_hover_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Menu', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Menu Text Transform', 'composer' ),
	'desc'    => esc_html__( 'Choose Menu Text Transform. Uppercase = text in all capital letters; Lowercase = text in all small letters; Capitalize = first letter only capital letter.', 'composer' ),
	'id'      => 'menu_text_transform',
	'std'     => 'uppercase',
	'fold'    => array( 'custom_header_styles' => array( 'yes' ) ),
	'type'    => 'select',
	'options' => array(
		'uppercase'  => esc_html__( 'Uppercase', 'composer' ),
		'lowercase'  => esc_html__( 'Lowercase', 'composer' ),
		'capitalize' => esc_html__( 'Capitalize', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Menu Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the menu background color (for Header 6, Header 7, Header 8, Header 9).', 'composer' ),
	'id'   => 'menu_background_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Menu Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the menu link color.', 'composer' ),
	'id'   => 'menu_link_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Menu Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the menu link hover color.', 'composer' ),
	'id'   => 'menu_link_hover_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Sub Menu Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the sub menu background color.', 'composer' ),
	'id'   => 'sub_menu_background_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Sub Menu Border Color', 'composer' ),
	'desc' => esc_html__( 'This is the sub menu top & bottom border color.', 'composer' ),
	'id'   => 'sub_menu_border_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Sub Menu Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the sub menu link color.', 'composer' ),
	'id'   => 'sub_menu_link_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Sub Menu Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the sub menu link hover color.', 'composer' ),
	'id'   => 'sub_menu_link_hover_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mega Menu Title Color', 'composer' ),
	'desc' => esc_html__( 'This is the mega menu title color.', 'composer' ),
	'id'   => 'mega_menu_title_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Sticky Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the sticky background color.', 'composer' ),
	'id'   => 'sticky_background_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Sticky Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the sticky link color.', 'composer' ),
	'id'   => 'sticky_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array('yes') ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Sticky Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the sticky link hover color and active color.', 'composer' ),
	'id'   => 'sticky_hover_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Hambarger Icon', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Hambarger Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the hambarger background color.', 'composer' ),
	'id'   => 'hambarger_background_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Hambarger Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the hambarger link color.', 'composer' ),
	'id'   => 'hambarger_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Hambarger Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the hambarger link hover color and active color.', 'composer' ),
	'id'   => 'hambarger_hover_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Hambarger Close Icon Color', 'composer' ),
	'desc' => esc_html__( 'This is the hambarger close icon color.', 'composer' ),
	'id'   => 'hambarger_close_color',
	'std'  => '',
	'fold' => array( 'custom_header_styles' => array( 'yes' ) ),
	'type' => 'color'
);

// Styling Options: Mobile Menu
$of_options[] = array( 
	'name' => esc_html__( 'Mobile Menu', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_styling_options_mobile_menu'
);

$of_options[] = array(  
	'name'    => esc_html__( 'Custom Mobile Menu Styles', 'composer' ),
	'desc'    => esc_html__( 'Do you like to use Custom Styles, Please enable it and choose the Background color, Primary color, Selection text color, selection background color, link hover color. If it\'s disabled, the default style will apply and custom styles are won\'t apply.', 'composer' ),
	'id'      => 'custom_mobile_menu_styles',
	'std'     => 'no',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Hambarger Icon Color', 'composer' ),
	'desc' => esc_html__( 'This is the hambarger icon color.', 'composer' ),
	'id'   => 'mobile_menu_hambarger_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile menu background color.', 'composer' ),
	'id'   => 'mobile_menu_background_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Text Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile menu text color.', 'composer' ),
	'id'   => 'mobile_menu_text_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Text Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile menu hover color.', 'composer' ),
	'id'   => 'mobile_menu_hover_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Text Active Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile menu text active color.', 'composer' ),
	'id'   => 'mobile_menu_active_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Border Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile menu border color.', 'composer' ),
	'id'   => 'mobile_menu_border_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Arrow Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile menu arrow color.', 'composer' ),
	'id'   => 'mobile_menu_arrow_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Menu Arrow Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile menu arrow Hover color.', 'composer' ),
	'id'   => 'mobile_menu_arrow_hover_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Sub Menu Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile sub menu background color.', 'composer' ),
	'id'   => 'mobile_menu_sub_background_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Sub Menu Text Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile sub menu text color.', 'composer' ),
	'id'   => 'mobile_menu_sub_text_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Sub Menu Text Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile sub menu hover color.', 'composer' ),
	'id'   => 'mobile_menu_sub_hover_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Sub Menu Border Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile sub menu border color.', 'composer' ),
	'id'   => 'mobile_menu_sub_border_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Sub Menu Arrow Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile sub menu arrow color.', 'composer' ),
	'id'   => 'mobile_menu_sub_arrow_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Mobile Sub Menu Arrow Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the mobile sub menu arrow Hover color.', 'composer' ),
	'id'   => 'mobile_menu_sub_arrow_hover_color',
	'std'  => '',
	'fold' => array( 'custom_mobile_menu_styles' => array( 'yes' ) ),
	'type' => 'color'
);

// Styling Options: Title Bar
$of_options[] = array( 
	'name' => esc_html__( 'Title Bar', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_styling_options_title_bar'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Title Bar Style', 'composer' ),
	'desc'    => esc_html__( 'Select title bar style', 'composer' ),
	'id'      => 'title_bar_style',
	'std'     => 'default',
	'type'    => 'switch',
	'folds'    => 1,
	'options' => array(
		'default' => esc_html__( 'Default', 'composer' ),
		'custom'  => esc_html__( 'Custom', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title bar background color', 'composer' ),
	'desc' => esc_html__( 'It applies title bar background color', 'composer' ),
	'id'   => 'title_bar_bg_color',
	'std'  => '',
	'type' => 'color',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

$of_options[] = array( 
	'name' => esc_html__( 'Upload Title bar background image', 'composer' ),
	'desc' => esc_html__( 'It applies title bar background image.', 'composer' ),
	'id'   => 'title_bar_bg_image',
	'std'  => '',
	'mod'  => 'min',
	'type' => 'media',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Title Bar overlay', 'composer' ),
	'desc'    => esc_html__( 'Background Overlay Style', 'composer' ),
	'id'      => 'title_bar_overlay',
	'std'     => 'color',
	'type'    => 'select',
	'fold'    => array( 'title_bar_style' => array( 'custom' ) ),
	'options' => array(
		'gradient' => esc_html__( 'Gradient', 'composer' ),
		'color'    => esc_html__( 'Color', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title bar overlay color', 'composer' ),
	'desc' => esc_html__( 'It applies title bar background overlay color', 'composer' ),
	'id'   => 'title_bar_overlay_color',
	'std'  => '',
	'type' => 'color',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Overlay Gradient Top Value', 'composer' ),
	'desc' => esc_html__( 'It applies title bar background overlay color', 'composer' ),
	'id'   => 'title_bar_gradient_top_value',
	'std'  => '',
	'type' => 'color',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Overlay Gradient Middle Value', 'composer' ),
	'desc' => esc_html__( 'It applies title bar background overlay color', 'composer' ),
	'id'   => 'title_bar_gradient_middle_value',
	'std'  => '',
	'type' => 'color',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Overlay Gradient Bottom Value', 'composer' ),
	'desc' => esc_html__( 'It applies title bar background overlay color', 'composer' ),
	'id'   => 'title_bar_gradient_bottom_value',
	'std'  => '',
	'type' => 'color',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Overlay Gradient Opacity', 'composer' ),
	'desc' => esc_html__( 'Type the alpha value. Eg: 0.1 to 1.0', 'composer' ),
	'id'   => 'title_bar_gradient_opacity',
	'std'  => '0.9',
	'type' => 'text',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title bar text color', 'composer' ),
	'desc' => esc_html__( 'It applies title bar text color', 'composer' ),
	'id'   => 'title_bar_text_color',
	'std'  => '',
	'type' => 'color',
	'fold' => array( 'title_bar_style' => array( 'custom' ) )
);

// Styling Options: Single Blog
$of_options[] = array( 
	'name' => esc_html__( 'Single Blog', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_styling_options_single_blog'
);

$of_options[] = array( 
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Single Blog Banner', 'composer' ) . '</h3>',
	'icon' => true,
	'type' => 'info'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Top Meta Color', 'composer' ),
	'desc' => esc_html__( 'This is the banner top meta color.', 'composer' ),
	'id'   => 'single_banner_top_meta_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Top Meta Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the banner top meta background color.', 'composer' ),
	'id'   => 'single_banner_top_meta_background_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Title Color', 'composer' ),
	'desc' => esc_html__( 'This is the banner title color.', 'composer' ),
	'id'   => 'single_banner_title_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Meta Color', 'composer' ),
	'desc' => esc_html__( 'This is the banner meta color.', 'composer' ),
	'id'   => 'single_banner_meta_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Meta Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the banner meta link color.', 'composer' ),
	'id'   => 'single_banner_meta_link_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Caption Color', 'composer' ),
	'desc' => esc_html__( 'This is the banner caption color.', 'composer' ),
	'id'   => 'single_banner_caption_color',
	'std'  => '',
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the banner background color.', 'composer' ),
	'id'   => 'single_banner_background_color',
	'std'  => '',
	'type' => 'color'
);

// Styling Options: Footer
$of_options[] = array( 
	'name' => esc_html__( 'Footer', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_styling_options_footer'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose Footer Custom Style', 'composer' ),
	'desc'    => esc_html__( 'Do you want to customize the footer appearance?', 'composer' ),
	'id'      => 'f_customization',
	'std'     => 'no',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name' => esc_html__( 'Footer Widget Title Color', 'composer' ),
	'desc' => esc_html__( 'This is the footer widget title color', 'composer' ),
	'id'   => 'custom_f_title_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Footer Text Color', 'composer' ),
	'desc' => esc_html__( 'This is the footer text color', 'composer' ),
	'id'   => 'custom_f_txt_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Footer Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the footer link color', 'composer' ),
	'id'   => 'custom_f_link_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Footer Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the footer link hover color', 'composer' ),
	'id'   => 'custom_f_link_hover_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);


$of_options[] = array( 	
	'name' => esc_html__( 'Footer Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the footer background color', 'composer' ),
	'id'   => 'custom_f_bg_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose Footer Pattern', 'composer' ),
	'desc'    => esc_html__( 'Select the footer pattern it affects only footer widget area section', 'composer' ),
	'id'      => 'custom_f_bg_pattern',
	'std'     => 'none',
	'type'    => 'images',
	'fold'    => array( 'f_customization' => array( 'yes' ) ),
	'options' => $pattern
);

$of_options[] = array( 
	'name' => esc_html__( 'Upload Footer Background', 'composer' ),
	'desc' => esc_html__( 'Upload a custom footer background. Height should be more than 1360px.', 'composer' ),
	'id'   => 'custom_f_bg',
	'std'  => '',
	'mod'  => 'min',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'media'
);


$of_options[] = array( 	
	'name'    => esc_html__( 'Background Attachment', 'composer' ),
	'desc'    => esc_html__( 'Choose the footer background image attachment', 'composer' ),
	'id'      => 'custom_f_bg_attachment',
	'std'     => 'scroll',
	'fold'    => array( 'f_customization' => array( 'yes' ) ),
	'type'    => 'select',
	'options' => $bg_attachment
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Background Size', 'composer' ),
	'desc'    => esc_html__( 'Choose the footer background image size', 'composer' ),
	'id'      => 'custom_f_bg_size',
	'std'     => 'cover',
	'fold'    => array( 'f_customization' => array( 'yes' ) ),
	'type'    => 'select',
	'options' => $bg_size
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Background Repeat', 'composer' ),
	'desc'    => esc_html__( 'Choose the footer background image repeat option', 'composer' ),
	'id'      => 'custom_f_bg_repeat',
	'std'     => 'cover',
	'fold'    => array( 'f_customization' => array( 'yes' ) ),
	'type'    => 'select',
	'options' => $bg_repeat
);

$of_options[] = array( 	
	'name' => esc_html__( 'Copyright Background Color', 'composer' ),
	'desc' => esc_html__( 'This is the copyright background color', 'composer' ),
	'id'   => 'custom_fc_bg_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Copyright Text Color', 'composer' ),
	'desc' => esc_html__( 'This is the copyright text color', 'composer' ),
	'id'   => 'custom_fc_txt_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Copyright Link Color', 'composer' ),
	'desc' => esc_html__( 'This is the copyright link color', 'composer' ),
	'id'   => 'custom_fc_link_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

$of_options[] = array( 	
	'name' => esc_html__( 'Copyright Link Hover Color', 'composer' ),
	'desc' => esc_html__( 'This is the copyright link hover color', 'composer' ),
	'id'   => 'custom_fc_link_hover_color',
	'std'  => '',
	'fold' => array( 'f_customization' => array( 'yes' ) ),
	'type' => 'color'
);

// Typography
$of_options[] = array( 
	'name' => esc_html__( 'Typography', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_typography',
	'sub_menu' => array( 
		esc_html__( 'Simple', 'composer' ),
		esc_html__( 'Advance Typography', 'composer' ),
		esc_html__( 'Custom Fonts', 'composer' )
	)
);

// Typography: Simple
$of_options[] = array( 
	'name' => esc_html__( 'Simple', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_simple'
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Body Fonts', 'composer' ),
	'desc'    => esc_html__( 'Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply). This font will for body texts', 'composer' ),
	'id'      => 'custom_font_body',
	'type'    => 'select_google_font',
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Raleway',
		'face'    => 'Arial, sans-serif',
		'style'   => 'regular',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Primary Fonts', 'composer' ),
	'desc'    => esc_html__( 'Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply). This font will apply for Headings, main menu, Titles etc. To take full contorl turn on advance font settings from below and enjoy!', 'composer' ),
	'id'      => 'custom_font_primary',
	'type'    => 'select_google_font',
	'std'     => array(
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Content Fonts', 'composer' ),
	'desc'    => esc_html__( 'Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply). This font will apply for most of the sections in the theme including paragraph, lists, blockquote, testimonial, sub menu etc. To take full contorl turn on advance font settings from below and enjoy!', 'composer' ),
	'id'      => 'custom_font_content',
	'type'    => 'select_google_font',
	'std'     => array(
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		//'style' => 'regular'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);


// Subset
$subset = array(
	'latin'        => esc_html__( 'Latin', 'composer' ),
	'cyrillic-ext' => esc_html__( 'Cyrillic Extended (cyrillic-ext) ', 'composer' ),
	'greek-ext'    => esc_html__( 'Greek Extended (greek-ext)', 'composer' ),
	'greek'        => esc_html__( 'Greek (greek)', 'composer' ),
	'vietnamese'   => esc_html__( 'Vietnamese (vietnamese)', 'composer' ),
	'latin-ext'    => esc_html__( 'Latin Extended (latin-ext)', 'composer' ),
	'cyrillic'     => esc_html__( 'Cyrillic (cyrillic)', 'composer' )
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Choose the character sets you want:', 'composer' ),
	'desc'    => esc_html__( 'If you choose only the languages that you need, you\'ll help prevent slowness on your webpage.', 'composer' ),
	'id'      => 'subset',
	'std'     => array( 'latin' ),
	'type'    => 'multicheck',
	'options' => $subset
);

// Typography: Advance Typography
$of_options[] = array( 
	'name' => esc_html__( 'Advance Typography', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_advance_typography'
);

$of_options[] = array( 
	'name'    => esc_html__( 'Advance Font Setting', 'composer' ),
	'desc'    => esc_html__( 'Do you like to Enable Advance Font Settings? By enabling this you can choose font each and every possible section. choose less number of fonts, it will to help prevent slowness on your webpage.', 'composer' ),
	'id'      => 'ad_font_settings',
	'std'     => 'no',
	'folds'   => 1,
	'type'    => 'switch',
	'options' => array(
		'yes' => esc_html__( 'Yes', 'composer' ),
		'no'  => esc_html__( 'No', 'composer' )
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'H1 Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for h1 tag blog and pages. (This will not apply in Title Shortcode). Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_h1',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '24px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'H2 Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for h2 tag blog and pages. (This will not apply in Title Shortcode). Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_h2',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '21px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'H3 Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for h2 tag blog and pages. (This will not apply in Title Shortcode). Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_h3',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '18px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'H4 Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for h2 tag blog and pages. (This will not apply in Title Shortcode). Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_h4',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '16px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'H5 Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for h2 tag blog and pages. (This will not apply in Title Shortcode). Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_h5',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'H6 Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for h2 tag blog and pages. (This will not apply in Title Shortcode). Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_h6',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array('yes') ),
	'std'     => array(
		'size'    => '12px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'List Item Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for li tag.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_list',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '400',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Link Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for link tag.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_link',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array('yes') ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '400',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Logo Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Text Logo.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_logo',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '30px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'BlockQuote Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for blockquote tag.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_blockquote',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '400italic',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Main Menu Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Main Menu Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_menu',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Sub Menu Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Sub Menu Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_sub_menu',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '400',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Mega Menu Title Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Mega Menu Title Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_mega_menu',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Title Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Title Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_main_title',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '21px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);


$of_options[] = array( 	
	'name'    => esc_html__( 'Button Small Font Size', 'composer' ),
	'desc'    => esc_html__( 'Choose the button large text font size', 'composer' ),
	'id'      => 'cf_btn_small',
	'std'     => '13px',
	'type'    => 'select',
	'mod'     => 'mini',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'options' => $font_sizes
);


$of_options[] = array( 	
	'name'    => esc_html__( 'Button Medium Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Button Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_btn',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Button Large Font Size', 'composer' ),
	'desc'    => esc_html__( 'Choose the button large text font size', 'composer' ),
	'id'      => 'cf_btn_lg',
	'std'     => '16px',
	'type'    => 'select',
	'mod'     => 'mini',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'options' => $font_sizes
); 

$of_options[] = array( 	
	'name'    => esc_html__( 'Process Title Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Process Title Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_process_title',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '21px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
); 

$of_options[] = array( 	
	'name'    => esc_html__( 'Process Content Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Process Content Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_process_content',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '40px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '400',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Skill Percentage Text Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Percentage Text Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_percent_text',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '40px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
); 

$of_options[] = array( 	
	'name'    => esc_html__( 'Skill Percentage Outside Title Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Percentage Outside Title Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_percent_outside',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '16px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Textfield Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Textfield Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_txtfield',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '400italic',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Portfolio Filter Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Portfolio Filter Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_filter_normal',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Pricing Table Title Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Pricing Table Title Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_plan_title',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '16px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '600',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Pricing Table Price Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Pricing Table Price Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_plan_value',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '32px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '900',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Pricing Table Currency Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Pricing Table Currency Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_plan_valign',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '13px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Pricing Table Price Period Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Pricing Table Price Period Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_plan_month',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array('yes') ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '400',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Single Blog Banner Title', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Single Blog Banner Title.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_single_banner_title',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '41px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '500',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Single Blog Banner Meta', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Single Blog Banner Meta.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_single_banner_meta',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '14px',
		'g_face'  => 'Raleway',
		'face'    => 'Arial, sans-serif',
		'style'   => '400',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

$of_options[] = array( 	
	'name'    => esc_html__( 'Widget Title Font', 'composer' ),
	'desc'    => esc_html__( 'This font will apply for Widget Title Style.Choose google webfont and Fallback fonts (incase google webfonts not loaded, fallback websafe fonts will apply).', 'composer' ),
	'id'      => 'cf_widget_title',
	'type'    => 'select_google_font',
	'fold'    => array( 'ad_font_settings' => array( 'yes' ) ),
	'std'     => array(
		'size'    => '16px',
		'g_face'  => 'Poppins',
		'face'    => 'Arial, sans-serif',
		'style'   => '700',
		//'color' => '#3d3d3d'
	),
	'preview' => array(
		'text'    => 'This is choosen google webfonts preview text!<br>0123456789', //this is the text from preview box
		'size'    => '30px' //this is the text size from preview box
	)
);

// Typography: Custom Fonts
$of_options[] = array( 
	'name' => esc_html__( 'Custom Fonts', 'composer' ),
	'type' => 'sub_heading',
	'id'   => 'title_custom_fonts'
);

$of_options[] = array(
	'id'   => 'introduction',
	'std'  => '<h3>'. esc_html__( 'Add you own Custom fonts.', 'composer' ) . '</h3> ' . __('Add your own fonts here, once you added <strong>hit save button and refresh page</strong>, then you will see on your font on all fonts settings dropdown. <strong>Note:</strong> Once you added font here, it will automatically loaded on the site, but you have choose the font from styling options.', 'composer' ),
	'icon' => true,
	'type' => 'info'
);	

$of_options[] = array( 	
	'name' => esc_html__( 'Add you own fonts here', 'composer' ),
	'desc' => esc_html__( 'Add your own fonts here, once you added your font refresh the page to see on your font on all fonts font refresh dropdown.', 'composer' ),
	'id'   => 'custom_fonts',
	'std'  => '',		
	'type' => 'custom_fonts'
);

// Backup Options
$of_options[] = array( 	
	'name' => esc_html__( 'Backup Options', 'composer' ),
	'type' => 'heading',
	'id'   => 'title_backup_options'
);
				
$of_options[] = array( 	
	'name' => esc_html__( 'Backup and Restore Options', 'composer' ),
	'desc' => esc_html__( 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.', 'composer' ),
	'id'   => 'of_backup',
	'std'  => '',
	'type' => 'backup'
);
				
$of_options[] = array( 	
	'name' => esc_html__( 'Transfer Theme Options Data', 'composer' ),
	'desc' => esc_html__( 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".', 'composer' ),
	'id'   => 'of_transfer',
	'std'  => '',
	'type' => 'transfer'
);
				
	} // of_options()
} // if function exists: of_options()
