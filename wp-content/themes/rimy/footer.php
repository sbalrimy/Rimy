<?php rimy_header_tag( 'css', ASSETS_CSS_URL . 'footer.css' ) ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=186534218392862";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<footer id="footer" class="footer container-fluid">
    <div class="inner container"
        <div class="row">
            <div class="col-sm-4 links footer-box">
                <h4>NAVEGACIÓN</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Portafolio</a></li>
                    <li><a href="#">Nuestros productos</a></li>
                    <li><a href="#">Branding corporativo</a></li>
                    <li><a href="#">Producción gráfica</a></li>
                    <li><a href="#">Diseño WEB</a></li>
                    <li><a href="#">Cotiza con nosotros</a></li>
                </ul>
            </div>
            <div class="col-sm-4 contacto footer-box">
                <h4>SOMOS YMIR LABS</h4>
                <ul class="list-unstyled">
                    <li>Juan Pablo Figueroa Guerra</li>
                    <li>Marcelo Alejandro Cuevas Albornoz</li>
                    <li>Aníbal Esteban Llanos Prado</li>
                    <li>&nbsp;</li>
                    <li><i class="fa fa-whatsapp fa-fw"></i>&nbsp;&nbsp;+569 6396 2257</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i>&nbsp;&nbsp;<img src="<?= ASSETS_IMG_URL ?>mail.png" alt="" /></li>
                    <li>Concepción, Chile</li>
                </ul>
            </div>
            <div class="col-sm-4 social footer-box">
                <div
                    class="fb-page"
                    data-href="https://www.facebook.com/ymirlabs/"
                    data-tabs="timeline"
                    data-small-header="true"
                    data-adapt-container-width="true"
                    data-hide-cover="false"
                    data-show-facepile="true"
                    data-height="300">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/ymirlabs/">
                            <a href="https://www.facebook.com/ymirlabs/">YMIR Labs</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); //Crucial footer hook! ?>
</div>
</body>
</html>