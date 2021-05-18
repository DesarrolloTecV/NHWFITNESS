<html>
    <!-- Headers -->
    <?php include_once './Vista/Headers.php'; ?>
    <body>
        <!-- Menu Nav -->
        <?php
        include_once './Vista/MenuNav.php';
        ?>
        <!-- Menu Iconos -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <br><br><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;box-shadow: 3px 4px 5px black;" id="login">
                            <div class="card-body">
                                <h5 class="card-title text-center">!Hola¡ Ingresa tu usuario</h5>
                                <br>
                                <form action="Controladores/Login.php" method="Post">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user" style="color: #563d7c;"></i></span>
                                        </div>
                                        <input type="text" class="form-control input-register-login" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock" style="color: #563d7c;"></i></span>
                                        </div>
                                        <input type="password" class="form-control input-register-login" name="password" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-warning btn-lg btn-block boton-login">Iniciar Sesión</button>
                                    </div>
                                    <p class="text-center" style="background-color: transparent;line-height: inherit !important;"><a class="text-dark" href="#">*Olvide mi contraseña</a></p>
                                </form>
                            </div>
                        </div>
                        <div class="alert alert-success text-center" role="alertn" id="alerta-logi">
                            <i class="fas fa-info-circle" style="font-size: 60px;"></i><br><br>
                            <p>El Usuario ya inicio session.</p>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once './Vista/Footer.php';
        ?>

    </body>

</html>
<?php
if ($_SESSION['SESS_ID_ROL'] == NULL) {
    //$user = "Invitado";
    echo "<script>$('#login').show(); $('#alerta-logi').hide();</script>";
    
} else {

    $user = $_SESSION['SESS_FIRST_NAME'];
    
    echo "<script>$('#alerta-logi').show(); $('#login').hide();</script>";
}
?>