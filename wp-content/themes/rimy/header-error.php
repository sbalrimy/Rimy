<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- FONTS -->
    <?php rimy_header_tag('css', 'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900') ?>
    <?php rimy_header_tag('css', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700') ?>

    <!-- JAVASCRIPT -->
    <?php rimy_header_tag('js', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') ?>
    <?php rimy_header_tag('js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') ?>
    <?php rimy_header_tag('js', 'http://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js') ?>

    <!-- CUSTOM JAVASCRIPT -->
    <script type="text/javascript">

        $.easing.elasout = function(x, t, b, c, d) {
            var s=1.70158;var p=0;var a=c;
            if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
            if (a < Math.abs(c)) { a=c; var s=p/4; }
            else var s = p/(2*Math.PI) * Math.asin (c/a);
            return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
        };

        $(document).ready(function() {

            $('.scrollto-link-menu').click( function() {
                var id = $(this).children().first().attr('title');
                $(window).scrollTo('#'+id, 800, { queue:true });
            });

            $('.scrollto-link').click( function() {
                var id = $(this).attr('title');
                $(window).scrollTo('#'+id, 800, { queue:true });
            });

            $('body').append('<div id="toTop" class="btn-ymir btn-ymir-black"><i class="fa fa-arrow-up"></i>Volver arriba</div>');
            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });
            $('#toTop').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });

        });

    </script>

    <!-- CSS -->
    <?php rimy_header_tag('css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') ?>
    <?php rimy_header_tag('css', get_bloginfo('stylesheet_url')) ?>
    <?php rimy_header_tag('css', ASSETS_CSS_URL . 'header.css') ?>
    <?php rimy_header_tag('css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') ?>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div id="wrap">
    <header class="header container-fluid">
        <div class="inner container">
            <?php //wp_nav_menu( array( 'Header Menu' => 'main' ) ); ?>
            <?php get_template_part('template-parts/pieces/navmenu') ?>
        </div>
    </header>