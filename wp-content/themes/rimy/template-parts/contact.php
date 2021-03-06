<?php

get_template_part('inc/recaptchalib');
$secret = "6LdL7xoTAAAAAAyP8JSCMXoMxYNrXtZ4GLLZamUV";
$response = null;
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

$err = '';
if(isset($_POST['submit'])){

    // Validar blancos
    if ( $_POST['name'] == '' ) {
        $err = 'No puedes dejar el campo "Nombre" en blanco';
    } elseif ( $_POST['email'] == '') {
        $err = 'No puedes dejar el campo "Correo electrónico" en blanco';
    } elseif ( is_email( $_POST['email'] ) === false ) { // EMAIL
        $err = 'El correo electrónico es invalido';
    } elseif ( $_POST['message'] == '') {
        $err = 'Debes escribir algún mensaje';
    } elseif ( $response == null || !$response->success ) { // CAPTCHA
        $err = 'No se ha validado el captcha. ¿Eres humano?';
    } else {
        $message = "El siguiente mensaje fue recibido desde la página YMIR.CL:\n\n";
        $message .= 'NOMBRE: ' . $_POST['name'] . "\n";
        $message .= 'CORREO: ' . $_POST['email'] . "\n\n";
        $message .= "MENSAJE:\n" . $_POST['message'] . "\n\n";
        if ( wp_mail( 'contacto@ymir.cl', 'Contacto desde YMIR.CL', $message ) ) {
            header ('Location: http://ymir.cl/contacto-recibido/');
        } else {
            $err = 'Algo salioó mal, que raro';
        }
    }
}
?>

<?php rimy_header_tag( 'css', ASSETS_CSS_URL . 'contact.css' ) ?>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
        <div class="contact container-fluid" id="contact-target">
            <div class="row">
                <div class="inner container">
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-6">
                            <div class="title">Cotiza con nosotros</div>
                            <div class="subtitle">¿Te gustó nuestro trabajo? No dudes en contactarnos!<br>Estaremos encantados de ayudarte.</div>
                            <?php if ( $err != '' ): ?>
                            <div class="alert alert-danger" role="alert" ><?php echo $err ?></div>
                            <?php endif; ?>
                            <div class="form" style="text-align: center">
                                <form method="post" action="<?php echo $_SERVER["REQUEST_URI"] . '#contact' ?>">
                                    <input type="hidden" name="submit" value="1">
                                    <input name="name" type="text" class="form-control" placeholder="Tu nombre"<?php echo empty($_POST['name'])? '': ' value="' . $_POST['name'] . '"' ?>>
                                    <div class="space-5"></div>
                                    <input name="email" type="text" class="form-control" placeholder="Correo electrónico"<?php echo empty($_POST['email'])? '': ' value="' . $_POST['email'] . '"' ?>>
                                    <div class="space-5"></div>
                                    <textarea name="message" class="form-control" rows="6"><?php echo empty($_POST['message'])? '': $_POST['message'] ?></textarea>
                                    <div class="space-5"></div>
                                    <div class="g-recaptcha" data-sitekey="6LdL7xoTAAAAAO30fD3NY4m2V7RyaUKvSD44rH32" style="text-align: -webkit-center;"></div>
                                    <div class="space-5"></div>
                                    <button type="submit" role="button" class="btn btn-loco" style="width: 304px;">ENVIAR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>