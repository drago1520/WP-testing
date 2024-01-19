<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category' ),
				'description' => __( 'A collection of full page layouts.' ),
			)
		);
	}
endif;
//Post->ID == Product->ID woocommerce
add_action( 'init', 'twentytwentyfour_pattern_categories' );
// Function to update the meta description of new posts
function action_on_publishing_post( $new_status, $old_status, $post ) {
    if ( $old_status != 'publish' && $new_status == 'publish' && $post->post_type == 'product' ) {	
        // Schedule the custom action to run after 5 seconds
        wp_schedule_single_event(time(), 'my_custom_delayed_action', array($post));
		error_log(print_r($post, true));
		
        
        //error_log("Ok. The post was published. $new_status $old_status $post->post_title");
    }
	//Add %%meta_description%% code here
}
function my_custom_delayed_action($post) {
		$product_id = $post->ID;
		$product = wc_get_product($product_id);
		//!$price = $product->get_price(); returns active price
		$product_name = $post->post_title;
	function is_WRONG_meta_description($meta_descr){
		$meta_descr_length = strlen($meta_descr);
		if($meta_descr_length > 156 || $meta_descr_length < 120) {
			return true;
		}elseif($meta_descr_length >= 120 && $meta_descr_length <= 156) {
			return false;
		}else{
			error_log("Something is wrong with meta description. Too short or too long". __FILE__ . " on line " . __LINE__);
			return true;
		}
	}
	function spintax($text) {
		$pattern = '/{([^{}]*)}/';

		while (preg_match($pattern, $text, $match)) {
			$choices = explode('|', $match[1]);
			$text = str_replace($match[0], $choices[array_rand($choices)], $text);
		}

		return $text;
	}




    



	$all_meta = get_post_meta($post->ID, '', false);
	//$current_meta_description = $all_meta['_yoast_wpseo_metadesc'][0];
	if (isset($all_meta['_yoast_wpseo_metadesc'])) {
		$current_meta_description = $all_meta['_yoast_wpseo_metadesc'][0];
	} else {
		$current_meta_description = false;
	}	
	//error_log( print_r($current_meta_description, TRUE) . __FILE__ . " on line " . __LINE__);
	if (!$current_meta_description) {
		$product_name_length = strlen($post->post_title);
		//$new_meta_description = "New meta description for: " . $post->post_title;
		if($product_name_length <= 53 && $product_name_length >= 15){
			$formula = "%%title%% в {онлайн магазин| уеб магазина на|дигитален магазин|е-магазина на} %%sitename%% {Поръчайте със 100% дискретна експресна доставка|Купете с напълно конфиденциална бърза доставка|Заявете днес с изцяло дискретна бърза доставка}. {Границата е само въображението|Няма граници в избора при нас|Не може дори да си представите}! {❤️|💖|❣️} %%page%%";
		}elseif($product_name_length <= 80 && $product_name_length >= 54){
			$formula = "%%title%% в {онлайн магазин| уеб магазина на|дигитален магазин|е-магазина на} %%sitename%% {Поръчайте лесно с 100% дискретна експресна доставка|Купете сега с напълно конфиденциална бърза доставка|Заявете днес с изцяло поверителна бърза доставка}! {❤️|💖|❣️} %%page%%";
		}elseif ($product_name_length <= 106 && $product_name_length >= 81){
			$formula = "%%title%% в {онлайн магазин|уеб магазина|онлайн секс шоп|е-магазина на} %%sitename%% {100% дискретна доставка|Конфиденциална доставка|Поверителна бърза доставка}! {❤️|💖|❣️} %%page%%";
		}else{error_log("error determining meta description for Product ID: $product_id and Product name: $product_name");};
		  
		  $new_meta_description = spintax($formula);
		
		  $result = update_post_meta($post->ID, '_yoast_wpseo_metadesc', $new_meta_description);
		
		if ($result === false) {
		error_log('Failed to update the meta description. $return is false, see docs. Post ID:'. $post->ID);
		//error_log( print_r($result, TRUE) );
		} elseif ($result === true) {
		error_log('Meta description updated successfully. Post ID'. $post->ID);
		} else {
		error_log('New meta ID key created. Meta description created with Post ID:'. $post->ID );
		}
	}else{
		error_log('Meta description already exists. Post ID'. $post->ID);
	}
	$check_meta_descr = get_post_meta($post->ID, '_yoast_wpseo_metadesc', false);
	
}


add_action( 'transition_post_status', 'action_on_publishing_post', 10, 3);
add_action('my_custom_delayed_action', 'my_custom_delayed_action');
//Обяснение - 1. hook 'transition_post_status' и пуска action_on_publishing_post. Проблем: YoastSEO добавя meta_descr няколко сек. СЛЕД ПУБЛИКУВАНЕ. 2. Забавям функцията за модификация с wp_schedule_single_event() с 5 сек. 3. Чета мета описанието. Ако е ръчно добавено НЕ го пипам. Ако НЕ е ръчно, добавям функция. 4. Променям го с update_post_meta().
//!Добавя се само след отваряне на линка!!!
//* Мога да избера вида на POST от $post->post_type == "product"

//Проблем: Пуснали са продукт/ статия etc., изтрили са формулата и сега искат пак да я въведат.
//#Решение: if (meta descr съдържа %%meta_descr%%) {activate action_on_publishing_post} ; CTRL+F -> (Add %%meta_description%% code here)





/*
Plugin Name: Selective Error Logging
Description: Limit WP logging to a specific file.
*/

// Custom error handler
function selective_error_logging($errno, $errstr, $errfile, $errline) {
    $target_file = 'C:/Users/Dell/Local Sites/test-api/app/public/wp-content/themes/twentytwentyfour/functions.php';
    
    // Check if the error originates from the target file
    if (realpath($errfile) === realpath($target_file)) {
        // Format the error string
        $error_string = "$errstr on line $errline in $errfile\n";
        
        // Log the error to debug.log
        error_log($error_string);
    }

    /* Don't execute PHP internal error handler */
    return true;
}

// Set the error handler
set_error_handler('selective_error_logging');

// Optional: Restore the previous error handler when the theme changes or the plugin is deactivated
function restore_default_error_logging() {
    restore_error_handler();
}
add_action('switch_theme', 'restore_default_error_logging');
register_deactivation_hook(__FILE__, 'restore_default_error_logging');
