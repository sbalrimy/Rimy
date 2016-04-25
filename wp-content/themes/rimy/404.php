<?php

get_header( 'error' ); ?>
<?php rimy_header_tag( 'css', ASSETS_CSS_URL . 'page.css' ) ?>
<div id="primary" class="content-area container page-template">
    <main id="main" class="site-main" role="main">

        <p style=" text-align: center; margin-top: 100px; margin-bottom: 40px;">
            <span style="font-size: 150px; font-weight:600; line-height: 120px; color:#ed6448">404</span><br>
            <span style="font-size: 20px; font-weight: 600;">PÁGINA NO ENCONTRADA</span>
        </p>

        <p style="text-align: center; margin-bottom: 100px;"><a href="http://ymir.cl" class="btn-ymir btn-ymir-main" role="button">Volver al inicio</a></p>

    </main><!-- .site-main -->

    <?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_template_part('template-parts/contact') ?>
<?php get_footer(); ?>
