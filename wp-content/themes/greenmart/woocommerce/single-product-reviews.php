<?php
/**
 * Display single product reviews (comments)
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */
global $product;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! comments_open() ) {
	return;
}
$count =  $product->get_review_count() ;

$counts = greenmart_woo_get_review_counting();

$average      = $product->get_average_rating();

$active_theme = greenmart_tbay_get_theme();

wc_get_template( 'single-product/themes/'.$active_theme.'/reviews.php', array( 'counts' => $counts, 'count' => $count, 'average' => $average));

?>