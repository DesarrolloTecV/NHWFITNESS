<?php

include_once '../Modelo/Conexion.php';

session_start();
$login = $_POST['username'];
$password = $_POST['password'];

if ($result = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario='$login' AND contrasena='$password'")) {
    if (mysqli_num_rows($result) > 0) {
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['SESS_MEMBER_ID'] = $member['idusuarios'];
        $_SESSION['SESS_FIRST_NAME'] = $member['nombre'];
        $_SESSION['SESS_LAST_NAME'] = $member['apellido'];
        $_SESSION['SESS_ID_ROL'] = $member['rol_idrol'];
        $_SESSION['tipo_idtipo'] = $member['tipo_idtipo'];
        $_SESSION['telefono'] = $member['telefono'];
        $_SESSION['celular'] = $member['celular'];
        $_SESSION['usuario'] = $member['usuario'];
        $_SESSION['email'] = $member['email'];
        //$_SESSION['celular'] = $member['celular'];

        session_write_close();

        header("location: ../index.php");
        exit();
    } else {
        $_SESSION['SESS_MEMBER_ID'] = '';
        $_SESSION['SESS_FIRST_NAME'] = '';
        $_SESSION['SESS_LAST_NAME'] = '';
        $_SESSION['SESS_ID_ROL'] = '';
        $_SESSION['tipo_idtipo'] = '';
        $_SESSION['telefono'] = '';
        $_SESSION['celular'] = '';
        $_SESSION['usuario'] = '';
        $_SESSION['email'] = '';
        //Login failed
        header("location: ../index.php");
        exit();
    }
} else {
    die("No existe la consulta");
}

