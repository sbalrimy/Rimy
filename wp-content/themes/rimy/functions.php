<?php

include_once 'inc/constants.php';

/**
 * Generates a single header tag.
 *
 * @param string $type Tag type. 'css' for a link tag and 'js' for a script tag.
 * @param string $url Location of the resource.
 */
function rimy_header_tag ( $type, $url ) {
    if ( $type == 'css' ) {
        echo str_replace ('%URL%', $url, PATTERN_STYLE );
    } elseif ( $type == 'js' ) {
        echo str_replace( '%URL%', $url, PATTERN_SCRIPT );
    }
    echo "\n";
}


/**
 * Creates a set of import headers. It receives any amount of parameters, but only checks for 'jquery', 'bootstrap'
 * and 'fontawesome'.
 */
function rimy_load_lib () {
    $libs = func_get_args();

    if ( in_array( 'jquery', $libs ) || in_array( 'bootstrap', $libs ) ) {
        rimy_header_tag( 'js', ASSETS_LIB_URL . 'js/jquery-1.12.1.min.js' );
    }
    if ( in_array( 'bootstrap', $libs ) ) {
        rimy_header_tag( 'js', ASSETS_LIB_URL . 'js/bootstrap.min.js' );
        rimy_header_tag( 'css', ASSETS_LIB_URL . 'css/bootstrap.min.css' );
    }
    if ( in_array( 'fontawesome', $libs ) ) {
        rimy_header_tag( 'css', ASSETS_LIB_URL . 'css/font-awesome.css' );
    }
    if ( in_array( 'scrollto', $libs ) ) {
        rimy_header_tag( 'js', ASSETS_LIB_URL . 'js/jquery.scrollTo.min.js' );
    }

}


/**
 * Creates the breadcrumb
 */
function the_breadcrumb () {
    if (!is_home()) {
        echo '<div class="container-fluid breadcrumb-row"><ol class="breadcrumb container">';
        echo '<li><a href="' . home_url() . '">';
        bloginfo('name');
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li><a href="#">Blog</a></li>';
            if (is_single()) {
                echo '<li class="active">';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="active">';
            echo the_title();
            echo '</li>';
        }
        echo '</ol></div>';
    }
}


/**
 * Register navigation menu
 */
function rimy_register_nav_menu() {
    register_nav_menu('main',__( 'Header Menu' ));
}
add_action( 'init', 'rimy_register_nav_menu' );





        /**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function theme_customizer( $wp_customize ) {

    /* - - - REMOVING DEFAULT SECTIONS - - - - - - - - - - */
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_section( 'title_tagline' );
    $wp_customize->remove_section( 'nav' );


    /* - - - HEADER SECTION - - - - - - - - - - */
    $wp_customize->add_section(
        'header',
        array(
            'title' => 'Encabezado',
            'description' => 'Configuración de los elementos mostrados en el encabezado de la página de inicio.',
            'priority' => 1,
        )
    );

    // Page title
    $wp_customize->add_setting(
        'page_title',
        array(
            'default' => 'Título'
        )
    );
    $wp_customize->add_control(
        'page_title',
        array(
            'label' => 'Título de la página',
            'section' => 'header',
            'type' => 'text',
        )
    );

    // Header title
    $wp_customize->add_setting(
        'text_slider_title',
        array(
            'default' => 'Diseño web y branding corporativo',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'text_slider_title',
        array(
            'label' => 'Título del encabezado',
            'section' => 'header',
            'type' => 'text',
        )
    );

    // Header text
    $wp_customize->add_setting(
        'text_slider_text',
        array(
            'default' => 'Nos dedicamos a trabajar y asesorar en el área de diseño y web a tus mazos de hearthstone hasta llegar a nivel platino con puros champs support carreando al putito del Hugo.',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control(
        'text_slider_text',
        array(
            'label' => 'Texto del encabezado',
            'section' => 'header',
            'type' => 'textarea',
        )
    );

    /* - - - BOXES SECTION - - - - - - - - - - */
    $wp_customize->add_section(
        'boxes',
        array(
            'title' => 'Cajas del inicio',
            'description' => 'Configuración de las cajas del inicio.',
            'priority' => 2,
        )
    );

    // Box 1 image
    $wp_customize->add_setting(
        'box1_image',
        array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'box1_image',
            array(
                'label' => 'Imagen de la caja 1',
                'section' => 'boxes',
                'settings' => 'box1_image'
            )
        )
    );

    // Box 1 title
    $wp_customize->add_setting(
        'box1_title',
        array(
            'default' => 'Diseño web',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'box1_title',
        array(
            'label' => 'Título de la caja 1',
            'section' => 'boxes',
            'type' => 'text',
        )
    );

    // Box 1 text
    $wp_customize->add_setting(
        'box1_text',
        array(
            'default' => 'Trabajo realizado para consultora y terapeuta asdasdasdasdasdasdasd asdasd asdas de isiaro e tis \'rpdiuctps dogotañe',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'box1_text',
        array(
            'label' => 'Texto de la caja 1',
            'section' => 'boxes',
            'type' => 'textarea',
        )
    );

    // Box 2 image
    $wp_customize->add_setting(
        'box2_image',
        array(
            'transport' => 'postMessage'
        ));
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'box2_image',
            array(
                'label' => 'Imagen de la caja 2',
                'section' => 'boxes',
                'settings' => 'box2_image'
            )
        )
    );

    // box 2 title
    $wp_customize->add_setting(
        'box2_title',
        array(
            'default' => 'Branding corporativo',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'box2_title',
        array(
            'label' => 'Título de la caja 2',
            'section' => 'boxes',
            'type' => 'text',
        )
    );

    // Box 2 text
    $wp_customize->add_setting(
        'box2_text',
        array(
            'default' => 'Trabajo realizado para consultora y terapeuta asdasdasdasdasdasdasd asdasd asdas de isiaro e tis \'rpdiuctps dogotañe',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'box2_text',
        array(
            'label' => 'Texto de la caja 2',
            'section' => 'boxes',
            'type' => 'textarea',
        )
    );

    // Box 3 image
    $wp_customize->add_setting(
        'box3_image',
        array(
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'box3_image',
            array(
                'label' => 'Imagen de la caja 3',
                'section' => 'boxes',
                'settings' => 'box3_image'
            )
        )
    );

    // Box 3 title
    $wp_customize->add_setting(
        'box3_title',
        array(
            'default' => 'Caca rellena',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'box3_title',
        array(
            'label' => 'Título de la caja 3',
            'section' => 'boxes',
            'type' => 'text',
        )
    );

    // Box 3 text
    $wp_customize->add_setting(
        'box3_text',
        array(
            'default' => 'Trabajo realizado para consultora y terapeuta asdasdasdasdasdasdasd asdasd asdas de isiaro e tis \'rpdiuctps dogotañe',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'box3_text',
        array(
            'label' => 'Texto de la caja 3',
            'section' => 'boxes',
            'type' => 'textarea',
        )
    );

    /* - - - ABOUT US SECTION - - - - - - - - - - */
    $wp_customize->add_section(
        'about',
        array(
            'title' => 'Sobre nosotros',
            'description' => 'Configuración del texto de descripción de la empresa.',
            'priority' => 3,
        )
    );

    // About us text
    $wp_customize->add_setting(
        'about_text',
        array(
            'default' => 'Somos un equipo de bla bla bla hola bla bla bla heroes of the storm bla bla bla starcraft 2 bla bla bla me saco los mocos bla bla bla dive innecesario con illidan porque kills bla bla bla bla bl abl abla bla abl lba bla bla.',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'about_text',
        array(
            'label' => 'Texto "sobre nosotros"',
            'section' => 'about',
            'type' => 'textarea',
        )
    );
}
add_action( 'customize_register', 'theme_customizer' );

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Twenty Sixteen 1.0
 */
function theme_customize_preview_js() {
    wp_enqueue_script( 'theme-customize-preview', get_template_directory_uri() . '/assets/js/customize-preview.js', array( 'customize-preview' ), '20150922', true );
}
add_action( 'customize_preview_init', 'theme_customize_preview_js' );
