        <?php rimy_header_tag( 'css', ASSETS_CSS_URL . 'contact.css' ) ?>

        <script>
            $(document).ready( function () {
                $('.alert').hide();
            });

        </script>

        <div id="contact" class="contact container-fluid">
            <div class="row">
                <div class="inner container">
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-6">
                            <div class="title">Mantengamos el contacto!</div>
                            <div class="subtitle">¿Te gustó nuestro trabajo? No dudes en contactarnos!<br>Estaremos encantados de ayudarte.</div>
                            <div class="alert alert-danger" role="alert" >Mensaje de error</div>
                            <div class="form">
                                <form method="post">
                                    <input type="hidden" name="submit" value="1">
                                    <input name="name" type="text" class="form-control" placeholder="Tu nombre">
                                    <div class="space-5"></div>
                                    <input name="email" type="text" class="form-control" placeholder="Correo electrónico">
                                    <div class="space-5"></div>
                                    <textarea name="message" class="form-control" rows="6"></textarea>
                                    <div class="space-5"></div>
                                    <button type="submit" role="button" class="btn btn-loco">ENVIAR</button>
                                    <div class="space-30"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>