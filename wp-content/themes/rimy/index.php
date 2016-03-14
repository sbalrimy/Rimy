<?php get_header(); ?>
<?php rimy_load_lib('scrollto') ?>
<?php get_template_part('template-parts/slider') ?>
    <div class="content container">
        <?php get_template_part('template-parts/boxes') ?>
    </div>
    <div class="about container-fluid">
        <div class="inner container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">Nosotros</div>
                </div>
                <div class="col-sm-12">
                    <div class="subtitle">
                        Somos un equipo de emprendedores de la octava región con una visión clara: entregar servicios integrales de diseño para tu empresa.
                        Nuestros estándares de calidad son los más altos del mercado, aprovechando nuestra experiencia en el rubro para entregarte siempre calidad.
                        Nuestros valores como empresa nos guían hacia nuestra meta permanente: <strong>Ofrecer el mejor servicio de la región, al precio justo</strong>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/contact') ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>