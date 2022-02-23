<?php
/**
 * Displays footer site info
 *
 * @subpackage Shopkeeper Ecommerce
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info py-4 text-center">
    <?php
        echo esc_html( get_theme_mod( 'shopkeeper_ecommerce_footer_text' ) );
        printf(
            /* translators: %s: Ecommerce WordPress Theme. */
            esc_html__( ' %s ', 'shopkeeper-ecommerce' ),
            '<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-shopkeeper-wordpress-theme/', 'shopkeeper-ecommerce' ) . '">Shopkeeper Ecommerce WordPress Theme</a>'
        );
    ?>
</div>