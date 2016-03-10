<?php

ob_start();
bloginfo('template_directory');
$assets = ob_get_clean();

define( 'ASSETS_LIB_URL', $assets . '/assets/libs/' );
define( 'ASSETS_URL', $assets . '/assets/rimy/' );
define( 'ASSETS_IMG_URL', ASSETS_URL . 'img/' );
define( 'ASSETS_CSS_URL', ASSETS_URL . 'css/' );
define( 'ASSETS_JS_URL', ASSETS_URL . 'js/' );
define( 'ASSETS_FONTS_URL', ASSETS_URL . 'fonts/' );

define('PATTERN_SCRIPT', '<script src="%URL%" type="text/javascript"></script>');
define('PATTERN_STYLE', '<link href="%URL%" rel="stylesheet" type="text/css">');