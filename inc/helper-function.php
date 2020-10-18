<?php 

/**
 * wpautop and more
 *
 * @since 1.0
 *
 * @param string $data
 *
 * @return string
 */
if ( ! function_exists( 'sakib_get_meta' ) ) 
{
    function sakib_get_meta( $data ) 
    {
        global $wp_embed;

        $content = $wp_embed->autoembed( $data );
        $content = $wp_embed->run_shortcode( $content );
        $content = do_shortcode( $content );
        $content = wpautop( $content );

        return $content;
    }
};
