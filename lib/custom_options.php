<?php

/* 
 * Añadir opciones personalizadas a la plantilla de Soy Minero.
 * Son opciones para personalizar la plantilla
 */

/**
 * Customización de la plantilla
 * Es decir añadir opciones a la plantilla
 * 1. Añadir secciones
 * 2. Identidad del sitio: logotipo, jumbotron, titulos
 * 3. Footer
 */
function soyminero_register_theme_customizer($wp_customizer) {

    //Footer añadir sección footer a la plantilla
    $wp_customizer->add_section(
        'soyminero_footer_options',
        array(
            'title'     => 'Footer Options',
            'priority'  => 200
        )
    );

    //Jumbotron Image
    $wp_customizer->add_setting(
            'header_logo',
            array(
                'default'   => 'Logotipo',
                'transport' => 'postMessage'
            )
    );
    
    $wp_customizer->add_control(
       new WP_Customize_Image_Control(
           $wp_customizer,
           'logo',
           array(
               'label'      => "Logotipo",
               'section'    => 'title_tagline',
               'settings'   => 'header_logo' 
           )
       )
    );
    
    //Eslogan
    $wp_customizer->add_setting(
            'header_eslogan',
            array(
                'default'   => 'Añade aquí tu Eslogan para la plantilla',
                'transport' => 'postMessage'
            )
    );
    $wp_customizer->add_control(  
      'soyminero_header_eslogan',  
      array(  
        'section'   => 'title_tagline',  
        'label'     => 'Header Eslogan',  
        'type'      => 'textarea',  
        'settings'  => 'header_eslogan'  
      )
    );

    //Jumbotron Title H1
    $wp_customizer->add_setting(
            'jumbotron_title',
            array(
                'default'   => '¡Jumbotron Title!',
                'transport' => 'postMessage'
            )
    );
    $wp_customizer->add_control(  
      'soyminero_jumbotron_title',  
      array(  
        'section'   => 'title_tagline',  
        'label'     => 'Jumbotron Title',  
        'type'      => 'text',  
        'settings'  => 'jumbotron_title'  
      )
    );
    
    //Jumbotron Description
    $wp_customizer->add_setting(
            'jumbotron_description',
            array(
                'default'   => 'Descripción debajo de la plantilla',
                'transport' => 'postMessage'
            )
    );
    $wp_customizer->add_control(  
      'soyminero_jumbotron_description',  
      array(  
        'section'   => 'title_tagline',  
        'label'     => 'Jumbotron description',  
        'type'      => 'textarea',  
        'settings'  => 'jumbotron_description'  
      )
    );
    
    //Jumbotron Image
    $wp_customizer->add_setting(
            'jumbotron_image',
            array(
                'default'   => 'Jumbotron Image',
                'transport' => 'postMessage'
            )
    );
    $wp_customizer->add_control(
       new WP_Customize_Image_Control(
           $wp_customizer,
           'logo',
           array(
               'label'      => "Jumbotron image",
               'section'    => 'title_tagline',
               'settings'   => 'jumbotron_image' 
           )
       )
   );

    //Meta Analytics
    $wp_customizer->add_setting(
            'meta_analytics',
            array(
                'default'   => '<script></script>',
                'transport' => 'postMessage'
            )
    );
    $wp_customizer->add_control(  
      'soyminero_meta_analytics',  
      array(  
        'section'   => 'title_tagline',  
        'label'     => 'Analytics Script',  
        'type'      => 'textarea',  
        'settings'  => 'meta_analytics'  
      )
    );

    //Footer Left
    $wp_customizer->add_setting(
            'footer_left',
            array(
                'default'   => 'Descripción de la pagina web. Hay que editar la misma en el footer.php
                   Aunque lo suyo seria añadir una opción a la plantilla.',
                'transport' => 'postMessage'
            )
    );
    $wp_customizer->add_control(  
      'soyminero_footer_left',  
      array(  
        'section'   => 'soyminero_footer_options',  
        'label'     => 'Footer Left',  
        'type'      => 'textarea',  
        'settings'  => 'footer_left'  
      )
    );

    //Footer Right
    $wp_customizer->add_setting(
            'footer_right',
            array(
                'default'   => 'Esta página esta creada con Wordpress a partir de una plantilla de <a href="https://github.com/antonrodin/soyminero">SoyMinero</a> 
                    Hecha con <i class="fa fa-heart"></i> por <a href="http://www.azr.es">AZR</a></small>',
                'transport' => 'postMessage'
            )
    );
    $wp_customizer->add_control(  
      'soyminero_footer_right',  
      array(  
        'section'   => 'soyminero_footer_options',  
        'label'     => 'Footer Right',  
        'type'      => 'textarea',  
        'settings'  => 'footer_right'  
      )
    );

}
add_action('customize_register', 'soyminero_register_theme_customizer');