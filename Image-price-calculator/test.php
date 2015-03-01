    <?php
        
         require(dirname(__FILE__) . '/../../../wp-load.php');
         //include(dirname(__FILE__) .'/imagepricecalc.js');

       /* function wptuts_scripts_basic(){
            // Register the script like this for a plugin:
            wp_register_script( 'custom-script', plugins_url( '/js/custom-script.js', __FILE__ ) );
            // or
            
        }
        add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );*/

        if(isset($_POST['textoMaster'])){

         $user_id = 1111;
         $product = $_POST['textoMaster'];
         $precio = $_POST['precioTotal'];
         $post = array(
             'post_author' => $user_id,
             'post_content' => '',
             'post_status' => "publish",
             'post_title' => $product,
             'post_parent' => '',
             'post_type' => "product",
         );
          //Create post
         $post_id = wp_insert_post( $post, $wp_error );

         //var_dump($post_id);
         add_action( 'init', 'add_product_to_cart' );
         global $woocommerce;
         
         //var_dump($woocommerce->cart->add_to_cart($post_id));

        

        if ( $post_id ){
          //var_dump($post_id);
          add_post_meta($post_id, '_regular_price', $precio );
          add_post_meta($post_id, '_price', $precio );
          //add_post_meta($post_id, '_stock_status', 'instock' );

          //Getting error on this line.
          $woocommerce->cart->add_to_cart( $post_id, $quantity=1 );

          exit( wp_redirect( get_permalink( woocommerce_get_page_id( 'cart' ) ) ) );

        }
         /*if($post_id){
         var_dump($post_id);
         $attach_id = get_post_meta($product, "_thumbnail_id", true);
         add_post_meta($post_id, '_thumbnail_id', $attach_id);
         var_dump('toma ma');
        }*/
        wp_set_object_terms($post_id, 'Races', 'product_cat' );
        wp_set_object_terms($post_id, 'simple', 'product_type');

        update_post_meta( $post_id, '_visibility', 'visible' );
        //update_post_meta( $post_id, '_stock_status', 'instock');
        update_post_meta( $post_id, 'total_sales', '5');
        update_post_meta( $post_id, '_downloadable', 'yes');
        update_post_meta( $post_id, '_virtual', 'yes');
        //update_post_meta( $post_id, '_regular_price', "1" );
        //update_post_meta( $post_id, '_sale_price', "1" );
        //update_post_meta( $post_id, '_purchase_note', "" );
        //update_post_meta( $post_id, '_featured', "no" );
        //update_post_meta( $post_id, '_weight', "" );
        //update_post_meta( $post_id, '_length', "" );
        //update_post_meta( $post_id, '_width', "" );
        //update_post_meta( $post_id, '_height', "" );
        //update_post_meta($post_id, '_sku', "");
        //update_post_meta( $post_id, '_product_attributes', array());
        //update_post_meta( $post_id, '_sale_price_dates_from', "" );
        //update_post_meta( $post_id, '_sale_price_dates_to', "" );
        //update_post_meta( $post_id, '_price', "1" );
        //update_post_meta( $post_id, '_sold_individually', "" );
        //update_post_meta( $post_id, '_manage_stock', "no" );
        //update_post_meta( $post_id, '_backorders', "no" );
        //update_post_meta( $post_id, '_stock', "" );
    }
     ?>





    