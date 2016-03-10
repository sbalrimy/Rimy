<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php rimy_header_tag('css', 'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900') ?>
    <?php rimy_header_tag('css', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700') ?>
    <?php rimy_load_lib('bootstrap') ?>

    <?php rimy_header_tag('css', get_bloginfo('stylesheet_url')) ?>
    <?php rimy_header_tag('css', ASSETS_CSS_URL . 'header.css') ?>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div id="wrap">
    <header class="header container-fluid">
        <div class="inner container">
            <div class="topbar row">
                <div class="brand">
                    <a href="<?php echo home_url() ?>"><img src="<?= ASSETS_IMG_URL ?>logo.png" alt="" /></a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">productos</a> </li>
                        <li><a href="http://127.0.0.1/rimy/desarrollo-y-diseno-web/">portafolio</a></li>
                        <li><a href="#">nosotros</a></li>
                        <li><a href="#">contacto</a></li>
                    </ul>
                </div>
            </div>
    </header>
    <?php the_breadcrumb() ?>