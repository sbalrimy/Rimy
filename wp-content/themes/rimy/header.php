<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

    <?php rimy_load_lib('bootstrap') ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
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
                    <img src="<?= ASSETS_IMG_URL ?>ymir-logo.png" alt="" width="60" height="60" />
                </div>
                <div class="menu">
                    <ul>
                        <li>portafolio</li>
                        <li>nosotros</li>
                        <li>contacto</li>
                    </ul>
                </div>
            </div>
            <div class="slider row">
                <div class="text-slide col-sm-offset-2 col-sm-8 row">
                    <div class="title col-sm-offset-1 col-sm-10">
                        diseño web y branding corporativo
                    </div>
                    <div class="subtitle col-sm-12">
                        Nos dedicamos a trabajar y asesorar en el área de diseño y web a tus mazos de hearthstone
                        hasta llegar a nivel platino con puros champs support carreando al putito del Hugo.
                    </div>
                    <div>
                    </div>
                </div>
    </header>