<?php
/**
 * ecapp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ecapp
 */
  
 
/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 */

if ( !function_exists( 'of_get_option' ) ) {
	function of_get_option($name, $default = false) {
	
		$optionsframework_settings = get_option('optionsframework');
	
		// Gets the unique option id
		$option_name = $optionsframework_settings['id'];
	
		if ( get_option($option_name) ) {
			$options = get_option($option_name);
		}
	
		if ( isset($options[$name]) ) {
			return $options[$name];
		} else {
			return $default;
		}
	}
	}
	
	/*
	 * This is an example of how to add custom scripts to the options panel.
	 * This one shows/hides the an option when a checkbox is clicked.
	 */
	
	add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');
	
	function optionsframework_custom_scripts() { ?>
	
	<script type="text/javascript">
	jQuery(document).ready(function() {
	
		jQuery('#example_showhidden').click(function() {
			  jQuery('#section-example_text_hidden').fadeToggle(400);
		});
	
		if (jQuery('#example_showhidden:checked').val() !== undefined) {
			jQuery('#section-example_text_hidden').show();
		}
	
	});
	</script>
	
	<?php
	}
	



if ( ! function_exists( 'ecapp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ecapp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ecapp, use a find and replace
		 * to change 'ecapp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ecapp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ecapp' ),
			'footer-1' => esc_html__('Footer Menu 1', 'ecapp'),
			'footer-2' => esc_html__('Footer Menu 2', 'ecapp'),
			'footer-3' => esc_html__('Footer Menu 3', 'ecapp')
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ecapp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );


	}
endif;
add_action( 'after_setup_theme', 'ecapp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecapp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ecapp_content_width', 640 );
}
add_action( 'after_setup_theme', 'ecapp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory().'/inc/widgets/widgets.php';
add_action( 'widgets_init', 'ecapp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function ecapp_scripts() {
	wp_enqueue_style( 'ecapp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ecapp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ecapp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// custom theme options page
	wp_enqueue_style( 'ecappp-bs', get_template_directory_uri().'/css/bootstrap.css', null, null, 'all' );
	wp_enqueue_style( 'Raleway-font', 'http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900', null, null, 'all' );
	wp_enqueue_style( 'Open Sans-font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic', null, null, 'all' );
	wp_enqueue_style( 'custom', get_template_directory_uri().'/css/style.css', null, null, 'all' );
	wp_enqueue_style( 'flexslider', get_template_directory_uri().'/css/flexslider.css', null, null, 'all' );
	wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-1.11.1.min.js', null, null, true );
	wp_enqueue_script( 'bs-js', get_template_directory_uri().'/js/bootstrap-3.1.1.min.js', null, null, true );
	

}
add_action( 'wp_enqueue_scripts', 'ecapp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Theme options using ACF.
 */
require get_template_directory() . '/evote/theme-options.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom input Page items
 */
require get_template_directory() . '/evote/add-new.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// 
