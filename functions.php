<?php

/**
 * martin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package martin
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('martin_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function martin_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on martin, use a find and replace
		 * to change 'martin' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('martin', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-menu' => esc_html__('Header Primary Navigation', 'martin'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'martin_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'martin_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function martin_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('martin_content_width', 640);
}
add_action('after_setup_theme', 'martin_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function martin_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Under Moto Widget', 'martin'),
			'id'            => 'under-moto-widget',
			'description'   => esc_html__('Under the main text on landing screen, widget title does not get displayed', 'martin'),
			'before_widget' => '<div id="%1$s" class="widget under-moto-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title under-moto-widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Left Service Widget', 'martin'),
			'id'            => 'left-service-widget',
			'description'   => esc_html__('Displayed on the left side under the landing screen', 'martin'),
			'before_widget' => '<div id="%1$s" class="widget left-service-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title left-service-widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Right Service Widget', 'martin'),
			'id'            => 'right-service-widget',
			'description'   => esc_html__('Displayed on the right side under the landing screen', 'martin'),
			'before_widget' => '<div id="%1$s" class="widget right-service-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title right-service-widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('What I Do Widget', 'martin'),
			'id'            => 'what-i-do-widget',
			'description'   => esc_html__('Description of your work', 'martin'),
			'before_widget' => '<div id="%1$s" class="widget what-i-do-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title what-i-do-widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Widget', 'martin'),
			'id'            => 'footer-widget',
			'description'   => esc_html__('Upper part of the footer, widget title does not get displayed', 'martin'),
			'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title footer-widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'martin_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function martin_scripts()
{
	wp_enqueue_style('martin-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('martin-style', 'rtl', 'replace');

	wp_enqueue_script('martin-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_style('google-fonts-lexend-tera', 'https://fonts.googleapis.com/css2?family=Lexend+Tera&display=swap', array());
	wp_enqueue_style('google-fonts-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap', array());
	wp_enqueue_style('google-fonts-kanit', 'https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&display=swap', array());
	wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', array());
	wp_enqueue_style('google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap', array());


	wp_enqueue_script('martin-my-script', get_template_directory_uri() . '/js/my-script.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'martin_scripts');


//	Da da stran uno sranje od margina zgori
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

/**
 * Hex to rgba conversion function
 */


/**
 * CSS output
 */

function custom_css_output()
{	?>

	<style type="text/css">
		:root {
			--text-color: <?php echo get_theme_mod('text-color', ''); ?>;
			--primary-color: <?php echo get_theme_mod('primary-color', ''); ?>;
		}

		.site-header {
			background-color: <?php echo get_theme_mod('header-background-color', '')  .  dechex(get_theme_mod('header-background-transparency', '')); ?>;
		}

		.site-front {
			background-color: <?php echo '#' . get_background_color(  ); ?>;
		}

		.moto {
			color: <?php echo get_theme_mod('moto-text-color', ''); ?>;
			font-size: calc(<?php echo get_theme_mod('moto-size', ''); ?>vw / 10);
		}

		.section-landing {
			background-color: <?php echo get_theme_mod('landing-background-color', ''); ?> !important;
		}

		.under-moto {
			color: <?php echo get_theme_mod('under-moto-text-color', ''); ?>;
		}

		.btn-transition {
			box-shadow: 0 0 0 0 <?php echo get_theme_mod('primary-color', '') . '7f'; ?>, 0 0 0 0 <?php echo get_theme_mod('primary-color', '') . '7f'; ?>;
			transition: box-shadow .5s, filter .2s;
		}

		.btn-transition:hover {
			box-shadow: 5px 5px 0 0 <?php echo get_theme_mod('primary-color', '') . '7f'; ?>, -5px -5px 0 0 <?php echo get_theme_mod('primary-color', '') . '7f'; ?>;
			filter: brightness(106%);
		}

		<?php if (get_theme_mod('img1-url')) {
			$img1_url = get_theme_mod('img1-url');
		} else {
			$img1_url = 'https://source.unsplash.com/random/1920x1080';
		}	?>.img1-container {
			background-image: url(<?php echo $img1_url; ?> );
		}
	</style>

<?php
}
add_action('wp_head', 'custom_css_output');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
