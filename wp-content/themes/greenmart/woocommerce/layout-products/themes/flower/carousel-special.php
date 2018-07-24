<?php
$product_item = isset($product_item) ? $product_item : 'inner';
$columns = isset($columns) ? $columns : 4;
$rows_count = isset($rows) ? $rows : 1;

$screen_desktop          =      isset($screen_desktop) ? $screen_desktop : 4;
$screen_desktopsmall     =      isset($screen_desktopsmall) ? $screen_desktopsmall : 3;
$screen_tablet           =      isset($screen_tablet) ? $screen_tablet : 3;
$screen_mobile           =      isset($screen_mobile) ? $screen_mobile : 1;

$loop_type          	 =      isset($loop_type) ? $loop_type : '';
$auto_type          	 =      isset($auto_type) ? $auto_type : '';
$autospeed_type          =      isset($autospeed_type) ? $autospeed_type : '';
$disable_mobile          =      isset($disable_mobile) ? $disable_mobile : '';

?>
<div class="owl-carousel products" data-navleft="<?php echo greenmart_get_icon('icon_owl_left'); ?>" data-navright="<?php echo greenmart_get_icon('icon_owl_right'); ?>" data-items="<?php echo esc_attr($columns); ?>" data-large="<?php echo esc_attr($screen_desktop);?>" data-medium="<?php echo esc_attr($screen_desktopsmall); ?>" data-smallmedium="<?php echo esc_attr($screen_tablet); ?>" data-extrasmall="<?php echo esc_attr($screen_mobile); ?>" data-carousel="owl" data-pagination="<?php echo ($pagi_type == 'yes') ? 'true' : 'false'; ?>" data-nav="<?php echo ($nav_type == 'yes') ? 'true' : 'false'; ?>" data-loop="<?php echo ($loop_type == 'yes') ? 'true' : 'false'; ?>" data-auto="<?php echo ($auto_type == 'yes') ? 'true' : 'false'; ?>" data-autospeed="<?php echo esc_attr( $autospeed_type )?>"  data-uncarouselmobile="<?php echo ($disable_mobile == 'yes') ? 'true' : 'false'; ?>">
    <?php $count = 0; while ( $loop->have_posts() ): $loop->the_post(); global $product; ?>
	
			<?php if($count%$rows_count == 0){ ?>
				<div class="item">
			<?php } ?>
	
        
            <div class="product-block grid  products-grid carousel-special product">
				<div class="product-content">
					<div class="row">
							<div class="block-inner">
							<?php woocommerce_show_product_loop_sale_flash(); ?>
								<figure class="image">
									
									<a title="<?php the_title(); ?>" href="<?php echo the_permalink(); ?>" class="product-image">
										<?php
											/**
											* woocommerce_before_shop_loop_item_title hook
											*
											* @hooked woocommerce_show_product_loop_sale_flash - 10
											* @hooked woocommerce_template_loop_product_thumbnail - 10
											*/
											remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash', 10);
											do_action( 'woocommerce_before_shop_loop_item_title' );
										?>
									</a>
									<div class="button-wishlist">
										<?php
											if( class_exists( 'YITH_WCWL' ) ) {
												echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
											}
										?>  
									</div>
								</figure>
							<?php (class_exists( 'YITH_WCBR' )) ? greenmart_brands_get_name($product->get_id()): ''; ?>
							</div>
							<div class="caption">
								<div class="meta">
									<div class="infor">
										<h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<?php
											/**
											* woocommerce_after_shop_loop_item_title hook
											*
											* @hooked woocommerce_template_loop_rating - 5
											* @hooked woocommerce_template_loop_price - 10
											*/
											do_action( 'woocommerce_after_shop_loop_item_title');

										?>
										
										<div class="groups-button">
											<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
											<?php
												$action_add = 'yith-woocompare-add-product';
												$url_args = array(
													'action' => $action_add,
													'id' => $product->get_id()
												);
											?>
											<?php if (class_exists('YITH_WCQV_Frontend')) { ?>
												<a href="#" class="button yith-wcqv-button tbay-tooltip" data-toggle="tooltip" title="<?php echo esc_html__('Quick View', 'greenmart'); ?>" data-product_id="<?php echo esc_attr($product->get_id()); ?>">
													<span>
														<i class="<?php echo greenmart_get_icon('icon_quick_view'); ?>"></i>
													</span>
												</a>
											<?php } ?>
											
									
											<?php if( class_exists( 'YITH_Woocompare' ) ) { ?>
												<?php
													$action_add = 'yith-woocompare-add-product';
													$url_args = array(
														'action' => $action_add,
														'id' => $product->get_id()
													);
												?>
												<div class="yith-compare">
													<a href="<?php echo wp_nonce_url( add_query_arg( $url_args ), $action_add ); ?>" data-toggle="tooltip" title="<?php echo esc_html__('Compare', 'greenmart'); ?>" class="compare tbay-tooltip" data-product_id="<?php echo esc_attr($product->get_id()); ?>">
														<i class="<?php echo greenmart_get_icon('icon_compare'); ?>"></i>
													</a>
												</div>
											<?php } ?> 
										</div>
									</div>
								</div>    
							</div>    
						</div>
				    </div>
            </div>
		
			<?php if($count%$rows_count == $rows_count-1 || $count==$loop->post_count -1){ ?>
				</div>
			<?php }
			$count++; ?>
		
    <?php endwhile; ?>
</div> 
<?php wp_reset_postdata(); ?>