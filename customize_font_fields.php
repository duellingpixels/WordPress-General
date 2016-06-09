
function dp_kirki_fields( $fields ) {
	
	$fields[] = array(
        'type'        => 'select',
        'setting'     => 'site_title_font_family',
        'label'       => __( 'Site Title Font Family', 'genesis-sample' ),
        'description' => __( 'Please choose a font for your site. This font-family will be applied to Site title element on your page.', 'genesis-sample' ),
        'section'     => 'typography',
        'default'     => 'Lato',
        'priority'    => 1,
        'choices'     => Kirki_Fonts::get_font_choices(),
        'output'      => array(
            array(
                'element'  => '.site-title',
                'property' => 'font-family',
            ),
        ),
        'transport'   => 'refresh',
        'js_vars'     => array(
            array(
                'element'  => '.site-title',
                'function' => 'css',
                'property' => 'font-family',
            ),
        ),
    );


    $fields[] = array(
        'type'        => 'select',
        'setting'     => 'heading_font_family',
        'label'       => __( 'Heading Font Family', 'genesis-sample' ),
        'description' => __( 'Please choose a font for your site. This font-family will be applied to heading elements on your page.', 'genesis-sample'),
        'section'     => 'typography',
        'default'     => '',
        'priority'    => 10,
        'choices'     => Kirki_Fonts::get_font_choices(),
        'output'      => array(
            array(
                'element'  => 'h1, h2, h3, h4, h5, h6',
                'property' => 'font-family',
            ),
        ),
        'transport'   => 'refresh',
        'js_vars'     => array(
            array(
                'element'  => 'h1, h2, h3, h4, h5, h6',
                'function' => 'css',
                'property' => 'font-family',
            ),
        ),
    );

        
     $fields[] = array(
        'type'        => 'select',
        'setting'     => 'body_font_family',
        'label'       => __( 'Body Font Family', 'genesis-sample'),
        'description' => __( 'Please choose a font for your site. This font-family will be applied to body elements on your page.', 'genesis-sample'),
        'section'     => 'typography',
        'default'     => 'Lato',
        'priority'    => 20,
        'choices'     => Kirki_Fonts::get_font_choices(),
        'output'      => array(
            array(
                'element'  => 'body, body > div',
                'property' => 'font-family',
            ),
        ),
        'transport'   => 'refresh',
        'js_vars'     => array(
            array(
                'element'  => 'body, body > div',
                'function' => 'css',
                'property' => 'font-family',
            ),
        ),
    );
 
  
    return $fields;

}
add_filter( 'kirki/fields', 'dp_kirki_fields' );
