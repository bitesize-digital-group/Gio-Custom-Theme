<?php 
	function BuyeteResources() {
		wp_enqueue_style('style',get_stylesheet_uri());
		wp_enqueue_style('responsive',get_bloginfo('template_directory')."/assets/css/responsive.css");
		wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
		wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.7.2/css/all.css');
	}

add_action('wp_enqueue_scripts', 'BuyeteResources');

//navigation menus
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
));

register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'Buyete' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'Buyete' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
?>