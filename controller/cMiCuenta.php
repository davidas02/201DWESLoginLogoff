<?php

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if(isset($_REQUEST['cambiarPassword'])){
    
}
if (isset($_REQUEST['aceptar'])){
    UsuarioPDO::modificarUsuario($_SESSION['usuarioDAW201LoginLogoff'], $_REQUEST['nombre']);
}
if(isset($_REQUEST['borrarUsuario'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']="borrarUsuario";
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];

