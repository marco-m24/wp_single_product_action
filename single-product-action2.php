function mrc_woocommerce_before_add_to_cart_form(  ) { 
    echo 'prima della form';
}; 
         
// add the action 
add_action( 'woocommerce_before_add_to_cart_form', 'mrc_woocommerce_before_add_to_cart_form', 10, 0 );




function mrc_woocommerce_after_add_to_cart_button(  ) { 
    echo '<br>dopo add to cart';
}; 
         
// add the action 
add_action( 'woocommerce_after_add_to_cart_button', 'mrc_woocommerce_after_add_to_cart_button', 10, 0 ); 



function mrc_woocommerce_after_add_to_cart_form(  ) { 
    echo 'dopo form'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_add_to_cart_form', 'mrc_woocommerce_after_add_to_cart_form', 10, 0 );





function mrc_woocommerce_product_meta_start( ) { 
    echo 'prima dei meta';
}; 
         
// add the action 
add_action( 'woocommerce_product_meta_start', 'mrc_woocommerce_product_meta_start', 10, 1 ); 






function mrc_woocommerce_product_meta_end(  ) { 
    echo 'dopo dei meta';
}; 
         
// add the action 
add_action( 'woocommerce_product_meta_end', 'mrc_woocommerce_product_meta_end', 10, 0 ); 
