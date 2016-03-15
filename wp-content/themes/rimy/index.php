<?php get_header(); ?>
<?php rimy_load_lib('scrollto') ?>
<?php get_template_part('template-parts/slider') ?>
    <div class="content container">
        <?php get_template_part('template-parts/boxes') ?>
    </div>
    <?php get_template_part('template-parts/about') ?>
    <?php get_template_part('template-parts/contact') ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>