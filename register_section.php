function dp_kirki_sections( $wp_customize ) {
     /**
     * Add sections
     */

     $wp_customize->add_section( 'typography', array(
        'title'       => __( 'Fonts', 'genesis-sample' ),
        'priority'    => 20,
    ) );
    

}
add_action( 'customize_register', 'dp_kirki_sections' );
