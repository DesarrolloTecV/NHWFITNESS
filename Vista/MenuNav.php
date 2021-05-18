<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #000000 !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <h1 class="text-warning"><img src="Recursos/Imagenes/LOGO NHW.png" style="width: 250px;"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- <div class="input-group mb-3" style="width: 40%;margin-bottom: 0rem!important;margin-left: 6rem;border-radius:20px;">
                <input type="text" class="form-control" placeholder="Buscar Productos" style="border-radius: 20px 0px 0px 20px;" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 20px 20px 0px;background-color: #fff;"><i class="fas fa-search"></i></span>
                </div>
            </div> -->
            <ul class="navbar-nav ml-auto" style="font-family: Roboto Medium;">
                <li class="nav-item">
                    <a class="nav-link text-white" style="padding: 32px;" href="index.php">HOME</a>
                </li>
                <li class="nav-item" id="log">
                    <a class="nav-link text-white" style="padding: 32px;" href="tienda.php">TIENDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" style="padding: 32px;" href="nhwf.php">QUÉ ES NHW?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" style="padding: 32px;" href="videos.php">VIDEOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" style="padding: 32px;" href="#contacto">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" style="padding: 21px;font-size: 30px;" href="carrito.php"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <!-- <li class="nav-item" id="session">
                    <div class="dropdown">
                        <a class="nav-link text-white font-weight-bold dropdown-toggle" style="border:none;background-color: #563d7c !important" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="Perfil.php?secction=1">Mi Perfil</a>
                            <a class="dropdown-item" href="Perfil.php?secction=2">Mis Anuncios</a>
                            <a class="dropdown-item" href="Perfil.php?secction=3">Mis Favoritos</a>
                            <a class="dropdown-item" href="Perfil.php?secction=4">Mis Ofertas</a>
                            
                            <a class="dropdown-item" href="Controladores/Salir.php">Salir</a>
                        </div>
                    </div>
                    
                </li> -->
            </ul>
        </div>
    </div>
</nav>

<?php

// $user = '';
// //var_dump($_SESSION["SESS_ID_ROL"]);
// if ($_SESSION["SESS_ID_ROL"] == NULL) {
//     $_SESSION['SESS_MEMBER_ID'] = '';
// $_SESSION['SESS_FIRST_NAME'] = '';
// $_SESSION['SESS_LAST_NAME'] = '';
// $_SESSION['SESS_ID_ROL'] = '';
// $_SESSION['tipo_idtipo'] = '';
// $_SESSION['telefono'] = '';
// $_SESSION['celular'] = '';
// $_SESSION['usuario'] = '';
// $_SESSION['email'] = '';
//     //$user = "Invitado";
//     echo "<script>$('#dropdownMenuButton').attr('href','Login.php'); $('#dropdownMenuButton').hide();$('#log').show();</script>";
// } else {

//     $user = $_SESSION['SESS_FIRST_NAME'];
//     echo "<script>$('#dropdownMenuButton').attr('href','#'); $('#dropdownMenuButton').text('$user');$('#log').hide();</script>";
// }
// //var_dump($_SESSION['SESS_ID_ROL']);die;


// $menu = "<ul><li>Hla</li></ul>";
?>