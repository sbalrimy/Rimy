<?php rimy_header_tag( 'css', ASSETS_CSS_URL . 'footer.css' ) ?>
<footer id="footer" class="footer container-fluid">
    <div class="contact">
        <div class="inner container">
            <div class="row">
                <div class="network col-sm-offset-2 col-sm-2">
                    <span><i class="fa fa-whatsapp fa-lg"></i> +569 6396 2257</span>
                </div>
                <div class="network col-sm-2">
                    <i class="fa fa-envelope-o fa-lg"></i>
                    <img src="<?php echo ASSETS_IMG_URL . 'contact-mail.png' ?>">
                </div>
                <div class="network col-sm-2">
                    <i class="fa fa-map-marker fa-lg"></i> Concepción, Chile
                </div>
                <div class="network col-sm-2">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                        <i class="fa fa-facebook fa-stack-1x social"></i>
                    </span>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                        <i class="fa fa-twitter fa-stack-1x social"></i>
                    </span>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                        <i class="fa fa-instagram fa-stack-1x social"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation">
        <div class="inner container">
            <div class="row">
                <ul class="nav-links list-unstyled">
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Portafolio</a></li>
                    <li><a href="#">Nuestros productos</a></li>
                    <li><a href="#">Branding corporativo</a></li>
                    <li><a href="#">Producción gráfica</a></li>
                    <li><a href="#">Diseño WEB</a></li>
                    <li><a href="#">Cotiza con nosotros</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer(); //Crucial footer hook! ?>
</div>
</body>
</html>