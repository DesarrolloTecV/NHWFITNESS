<html>
    <!-- Headers -->
    <?php
    include_once './Vista/Headers.php';
    ?>
    <body>
        <!-- Menu Nav -->
        <?php
        include_once './Vista/MenuNav.php';
        ?>
        <br>
        <br>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="alert alert-success text-center" role="alert">
                            <i class="fas fa-check-circle" style="font-size: 90px;"></i>
                            <br>
                            <br>
                            <p style="font-size: 20px;">Registro de producto !Exitoso¡</p>
                            <br>
                            <br>
                            <a class="btn btn-success btn-block text-white" href="Perfil.php?secction=2"><b>Volver</b></a>
                        </div>  
                    </div>
                    <div class="col"></div>
                </div>

            </div>
        </div>
        <br>
        <br>
        <?php
        include_once './Vista/Footer.php';
        ?>

    </body>

</html>