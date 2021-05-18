<html>
    <!-- Headers -->
    <?php include_once 'Vista/Headers.php'; ?>
    <body>
        <!-- Menu Navs -->
        <?php
        include_once 'Vista/MenuNav.php';
        ?>
        
        <!-- Menu Iconos -->
        <?php
        //include_once 'Vista/MenuIconos.php';
        ?>
        <!-- Linea -->
        <?php
        //include_once './Vista/BreadCromMenu.php';
        ?>
        <div class="container-fluid">
            <div class="container">
                <?php
                include_once './Vista/ContenidoListaCategoria.php';
                ?>
            </div>
        </div>
    </body>
    <!-- Footers -->
    <?php
    include_once 'Vista/Footer.php';
    ?>
</html>

