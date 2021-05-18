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
                <img src="Recursos/Imagenes/Pincipio.PNG" alt="" style="width: 100%;height: 100%;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="container text-justify">
                    <p style="margin: 15px;font-size: 20px;color: white;">
                        <sapn style="color: #FF6600;">NHW Fitness</sapn> es una marca de implementos y equipos deportivos creada para todas aquellas personas qué un día dijimos <sapn style="color: #FF6600;">"Puedo tener un gym en mi casa"</sapn>.
                        Conocemos todas las ventajas y beneficios que el entrenamiento físico trae a nuestras vidas, así que decidimos llevar la vida fitness a más personas cada día. ​
                        NHW comenzó este año 2018 como una tienda especializada en prodcutos novedosos para entrenar cada centímetro del cuerpo, por medio del trabajo duro y el esfuerzo que esto implica. Antes de alcanzar tus metas primero debes tener un cuerpo que resista el proceso.
                    </p>
                </div>

            </div>
            <div class="col-sm-6">
                <br>
                <img src="Recursos/Imagenes/Primer párafo.png" alt="" style="width: 530px;height: 250px;"><br>
                <!-- <img src="Recursos/Imagenes/Segundo párrafo.png" alt="" style="width: 530px;height: 250px;"> -->
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