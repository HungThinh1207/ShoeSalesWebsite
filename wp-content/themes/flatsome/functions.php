<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

flatsome()->init();

/**
 * It's not recommended to add any custom code here. Please use a child theme
 * so that your customizations aren't lost during updates.
 *
 * Learn more here: https://developer.wordpress.org/themes/advanced-topics/child-themes/
 */
//them code add
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10);
//them code loc
add_filter('woocommerce_default_catalog_orderby_options', 'wc_customize_product_sorting');
add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');
function wc_customize_product_sorting($sorting_options){
$sorting_options = array(
'menu_order' => __('Bộ lọc...', 'woocommerce'),
'popularity' => __('Lọc theo độ phổ biến', 'woocommerce'),
'rating' => __('Lọc theo đánh giá', 'woocommerce'),
'date' => __('Lọc theo mới nhất', 'woocommerce'),
'price' => __('Giá: thấp tới cao', 'woocommerce'),
'price-desc' => __('Giá: cao xuống thấp', 'woocommerce'),
);
return $sorting_options;
}

// 1. Thay đổi text "Add to Cart" trên trang danh sách sản phẩm (Shop/Archive pages)
function change_add_to_cart_text_archives() {
    return 'Mua Ngay';
}
add_filter('woocommerce_product_add_to_cart_text', 'change_add_to_cart_text_archives');

// 2. Thay đổi text "Add to Cart" trên trang chi tiết sản phẩm (Single Product page)
function change_add_to_cart_text_single() {
    return 'Thêm vào giỏ hàng';
}
add_filter('woocommerce_product_single_add_to_cart_text', 'change_add_to_cart_text_single');
