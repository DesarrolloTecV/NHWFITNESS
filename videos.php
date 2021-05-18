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
            <div class="col-sm-12">
                <img src="Recursos/Imagenes/PrincipioV.PNG" alt="" style="width: 100%;height: 100%;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12" style="background-image: url('Recursos/Imagenes//Fondo.png');">
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
            </div>
        </div>
        <br>
    </div>
    <br>
    <br>

    <?php
    include_once './Vista/Footer.php';
    ?>
</body>

</html>