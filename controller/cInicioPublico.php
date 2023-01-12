<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_REQUEST['iniciarSesion'])) {//
    $_SESSION['paginaEnCurso']='login';
    header('Location: registro.php');
    exit();
}
if (isset($_REQUEST['registrarse'])) {
    $_SESSION['paginaAnterior']='inicioPublico';
    $_SESSION['paginaEnCurso']='login';
    header('Location: registro.php');
    exit();
}
if (isset($_REQUEST['salir'])) {
    $_SESSION['usuarioDAW201AppLoginLogoff'] = null;
    $_SESSION['FechaHoraUltimaConexionAnterior'] = null;
    session_destroy();
    header('Location: ../201DWESproyectoDWES/indexProyectoDWES.php');
    exit;
}
require_once $aVistas["layout"];
