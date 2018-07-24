<?php
/**
 * Cross-sells
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$active_theme = greenmart_tbay_get_theme();
$crosssells = WC()->cart->get_cross_sells();
$meta_query = WC()->query->get_meta_query();

if( isset($_GET['releated_columns']) ) { 
	$columns = $_GET['releated_columns'];
} else {
	$columns = greenmart_tbay_get_config('releated_product_columns', 4);
}

wc_get_template( 'cart/themes/'.$active_theme.'/cross-sells.php', array('crosssells' => $crosssells, 'meta_query' => $meta_query, 'orderby' => $orderby, 'posts_per_page' => $posts_per_page, 'columns' => $columns));