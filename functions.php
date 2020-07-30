<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
// add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */

//  dequeues storefront built in css so you can use your own css in child theme
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}


/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


//  changes woo-commerce info to equipdirects info on footer.
function storefront_credit() {
    ?>
    
    <div class="site-info">
        <?php echo esc_html((apply_filters('storefront_copyright_text', $content = '&copy; ' . get_bloginfo('name') . ' ' . date('Y')))); ?>
        <?php if ( apply_filters('storefront_credit_link', true ) ) {?>
        <br/> <?php echo '<a href = "https://www.equipdirect.com" target="_blank"' . '"rel="author">' . esc_html__('Built by Equipment Direct ', 'storefront' ) . '</a>' ?>
        <?php
    } ?>
    </div><!-- .site-info -->

    <?php
}


// uncomment if would like to change social media icons 

// function add_fontawesome_kit() {
//     wp_register_script( 'fa-kit', 'https://kit.fontawesome.com/4861f2b45b.js', array( 'jquery' ) , '5.9.0', true ); // -- From an External URL

// // Javascript - Enqueue Scripts
//     wp_enqueue_script( 'fa-kit' );
// }

// add_action( 'wp_enqueue_scripts', 'add_fontawesome_kit', 100 );