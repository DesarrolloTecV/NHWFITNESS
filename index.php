<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once './Modelo/Conexion.php';
//$idproducto = $_GET['idproducto'];
?>
<html>
<!-- Headers -->
<?php include_once './Vista/Headers.php'; ?>

<body style="background-color: black;">

    <!-- Menu Nav -->
    <?php
    include_once './Vista/MenuNav.php';
    ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="Recursos/Imagenes/Slider1.PNG" alt="" style="width: 100%;height: 100%;">
                <button class="boton-inicio " style="font-family: Roboto Bold;">PRODUCTOS</button>
            </div>
        </div>
        <div class="row" style="padding: 16px;">
            <div class="col-sm-4 sep-uno">
                <div class="card" style="background-color: transparent;border: none;">
                    <div class="card-body">
                        <h5 class="card-title titulo-card">NUEVOS <br> PRODUCTOS</h5>
                    </div>
                    <div class="card-footer" style="border: none;">
                        <a href="#" class="btn boton-sep-uno">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sep-dos">
                <div class="card" style="background-color: transparent;border: none;">
                    <div class="card-body">
                        <h5 class="card-title titulo-card">COMIENZA <br> DESDE CERO</h5>
                    </div>
                    <div class="card-footer" style="border: none;">
                        <a href="#" class="btn boton-sep-uno">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sep-tres">
                <div class="card" style="background-color: transparent;border: none;">
                    <div class="card-body">
                        <h5 class="card-title titulo-card">CONECTA<br>CON NHW</h5>
                    </div>
                    <div class="card-footer" style="border: none;">
                        <a href="#" class="btn boton-sep-dos">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img src="Recursos/Imagenes/Pagina de Facebook.PNG" alt="" style="width: 100%;height: 100%;">
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center" style="background-color: #FF6600;">
                <p style="color: white;font-size: 30px;font-weight: bold;">PRODUCTOS</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center" style="background-image: url('Recursos/Imagenes/Productos.PNG');">
                <div class="row">
                    <div class="col-sm-4" style="padding: 20px;">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <img src="Recursos/Imagenes/producto1.PNG" alt="" style="width: 60%;padding: 30px;">
                            </div>
                            <div class="card-footer">
                                <p style="font-weight: bold;font-size: 30px;font-family: Roboto Medium;">Tula para boxeo profesional <br>
                                    de 80 cm en combo
                                </p>
                                <p style="font-weight: bold;font-size: 30px;color: #FF6600;font-family: Roboto Medium;">$ 130.000</p>
                                <button class="boton-inicio-productos ">COMPRAR</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 20px;">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <img src="Recursos/Imagenes/producto1.PNG" alt="" style="width: 60%;padding: 30px;">
                            </div>
                            <div class="card-footer">
                                <p style="font-weight: bold;font-size: 30px;font-family: Roboto Medium;">Tula para boxeo profesional <br>
                                    de 80 cm en combo
                                </p>
                                <p style="font-weight: bold;font-size: 30px;color: #FF6600;font-family: Roboto Medium;">$ 130.000</p>
                                <button class="boton-inicio-productos ">COMPRAR</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 20px;">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <img src="Recursos/Imagenes/producto1.PNG" alt="" style="width: 60%;padding: 30px;">
                            </div>
                            <div class="card-footer">
                                <p style="font-weight: bold;font-size: 30px;font-family: Roboto Medium;">Tula para boxeo profesional <br>
                                    de 80 cm en combo
                                </p>
                                <p style="font-weight: bold;font-size: 30px;color: #FF6600;font-family: Roboto Medium;">$ 130.000</p>
                                <button class="boton-inicio-productos ">COMPRAR</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="boton-inicio-mas ">VER MÁS</button>
                        <BR></BR>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center" style="background-color: #FF6600;">
                        <p style="color: white;font-size: 30px;font-weight: bold;">VIDEOS</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 text-center">
                <iframe width="70%" height="315" src="https://www.youtube.com/embed/kYbS5EhBpzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 text-center">
                <iframe width="70%" height="315" src="https://www.youtube.com/embed/ki6aswJJHzY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <iframe width="70%" height="315" src="https://www.youtube.com/embed/aDZdOE0NF_U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

        <div class="row">
            <div class="col-12 text-center">
                <img src="Recursos/Imagenes/Conoce más.PNG" alt="" style="width: 100%">
                
            </div>
        </div>
        <br>
    </div>

    </div>

    <?php
    include_once './Vista/Footer.php';
    ?>
</body>

</html>