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
                <img src="Recursos/Imagenes/PrincipioT.PNG" alt="" style="width: 100%;height: 100%;">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-sm-12">
                <div class="card" style="width: 100%;background-color: black;">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col text-center">
                                    <h3 style="color: #FF6600;text-decoration: none;">Filtros de Busqueda</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="color: white;">Productos</label>
                                        <select name="" placeholder="Producto" id="" class="form-control">
                                            <option value="">Seleccione</option>
                                            <option value="">Producto 1</option>
                                            <option value="">Producto 1</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="color: white;">Categoria</label>
                                        <select name="" placeholder="Categoria" id="" class="form-control">
                                            <option value="">Seleccione</option>
                                            <option value="">Categoria 1</option>
                                            <option value="">Categoria 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="color: white;">Precio</label>
                                        <select name="" placeholder="Precio" id="" class="form-control">
                                            <option value="">Seleccione</option>
                                            <option value="">Precio 1</option>
                                            <option value="">Precio 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="color: white;">Color</label>
                                        <select name="" placeholder="Color" id="" class="form-control">
                                            <option value="">Seleccione</option>
                                            <option value="">Color 1</option>
                                            <option value="">Color 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col" style="margin: 20px;">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;">
                            Categoria 1
                        </button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;">
                            Categoria 2
                        </button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;">
                            Categoria 3
                        </button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;">
                            Categoria 4
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;">
                            Categoria 5
                        </button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;">
                            Categoria 6
                        </button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;">
                            Categoria 7
                        </button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <button class="btn" style="background-color: #FF6600;color: white;font-weight: bold;width: 100%;    ">
                            Categoria 8
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <br>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <img src="Recursos/Imagenes/producto1.PNG" alt="" style="width: 100%;padding: 30px;">
                    </div>
                    <div class="card-footer">
                        <p class="text-center" style="font-weight: bold;font-size: 25px;font-family: Roboto Medium;">Tula para boxeo profesional <br>
                            de 80 cm en combo
                        </p>
                        <p class="text-center" style="font-weight: bold;font-size: 30px;color: #FF6600;font-family: Roboto Medium;">$ 130.000</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <img src="Recursos/Imagenes/producto1.PNG" alt="" style="width: 100%;padding: 30px;">
                    </div>
                    <div class="card-footer">
                        <p class="text-center" style="font-weight: bold;font-size: 25px;font-family: Roboto Medium;">Tula para boxeo profesional <br>
                            de 80 cm en combo
                        </p>
                        <p class="text-center" style="font-weight: bold;font-size: 30px;color: #FF6600;font-family: Roboto Medium;">$ 130.000</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <img src="Recursos/Imagenes/producto1.PNG" alt="" style="width: 100%;padding: 30px;">
                    </div>
                    <div class="card-footer">
                        <p class="text-center" style="font-weight: bold;font-size: 25px;font-family: Roboto Medium;">Tula para boxeo profesional <br>
                            de 80 cm en combo
                        </p>
                        <p class="text-center" style="font-weight: bold;font-size: 30px;color: #FF6600;font-family: Roboto Medium;">$ 130.000</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <img src="Recursos/Imagenes/producto1.PNG" alt="" style="width: 100%;padding: 30px;">
                    </div>
                    <div class="card-footer">
                        <p class="text-center" style="font-weight: bold;font-size: 25px;font-family: Roboto Medium;">Tula para boxeo profesional <br>
                            de 80 cm en combo
                        </p>
                        <p class="text-center" style="font-weight: bold;font-size: 30px;color: #FF6600;font-family: Roboto Medium;">$ 130.000</p>
                        
                    </div>
                </div>
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