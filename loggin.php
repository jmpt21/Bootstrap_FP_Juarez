<!DOCTYPE html>
<html lang="es">
<?php require 'php_include/head_content.hphp'?>
<body>
    <?php require 'php_include/header_content.hphp'?>
    <main id="main-loggin" class="container-fluid">
        <br><br><br><br><br><br><br>
        <section id="fondo" class="container col-lg-4 col-md-6 col-sm-8">
            <form id="form-register" action="./index.php" method="post" spellcheck="true" class="php-email-form" role="form">
                <div class="text-center"><h2 class="text-center title">Inicie sesión en su cuenta, para comenzar a comprar</h2></div>
                <section class="form-group">
                    <label for="email" class="form-label col-lg-4">Correo electrónico:</label>
                    <input type="email" name="text_email" id="email" class="form-control" placeholder="email@example.com"
                           minlength="3" maxlength="30" required>
                </section>
                <section class="form-group">
                    <label for="pass" class="form-label col-lg-4">Contraseña:</label>
                    <input type="password" name="text_pass" id="pass" class="form-control" placeholder="Contraseña"
                           minlength="8" maxlength="50" required>
                </section>
                <div class="text-center">
                    <button type="submit">Iniciar sesión</button>
                </div>
                <div class="text-center" style="margin-top: 5%">
                    <p>¿No tienes una cuenta? Regístrate <a href="./register.php">aquí.</a></p>
                </div>
            </form>
        </section>
        <br><br><br><br><br><br><br>
        <div class="text-center">
            <a href="https://www.freepik.com/free-vector/people-hardware-shop-woman-assistant-standing-talking-man-tools-materials-store-interior-design-panorama-with-drills-toolkits-hammers-screwdrivers_28946193.htm#page=2&query=Ferreter%C3%ADa&position=8&from_view=search&track=sph">Image by studio4rt</a> on Freepik
        </div>
    </main>

    <?php require 'php_include/footer_content.hphp'?>
    <?php require 'php_include/scripts_content.hphp'?>
</body>
</html>