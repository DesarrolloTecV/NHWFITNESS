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
       

            <?php
            include_once './Vista/VistaOferta.php';
            ?>

    </body>
    <!-- Footers -->
    <?php
    include_once 'Vista/Footer.php';
    ?>
</html>

<script>
    $(document).ready(function () {
        $('#vistaBreadcoms').hide();
        $('#vista-bread').hide();
        $('#separador-bread').hide();
    });
</script>