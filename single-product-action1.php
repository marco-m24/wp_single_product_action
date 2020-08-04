function mrc_woocommerce_before_single_product( ) { 
    echo 'Inizio del prodotto';
}; 
         
// add the action 
add_action( 'woocommerce_before_single_product', 'mrc_woocommerce_before_single_product', 10, 2 ); 




function mrc_woocommerce_before_single_product_summary(  ) { 
    echo 'Inizio product summary'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_single_product_summary', 'mrc_woocommerce_before_single_product_summary', 10, 2 );




function mrc_woocommerce_single_product_summary( ) { 
    echo 'Sommario del prodotto';
}; 
         
// add the action 
add_action( 'woocommerce_single_product_summary', 'mrc_woocommerce_single_product_summary', 10, 2 );





function mrc_woocommerce_product_thumbnails(  ) { 
    echo 'vicino galley'; 
}; 
         
// add the action 
add_action( 'woocommerce_product_thumbnails', 'mrc_woocommerce_product_thumbnails', 10, 0 );







function mrc_woocommerce_after_single_product_summary(  ) { 
    echo 'dopo product summary'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_single_product_summary', 'mrc_woocommerce_after_single_product_summary', 10, 2 );
