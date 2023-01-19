<?php
if (isset($_REQUEST['salir'])){
    $_SESSION['paginaEnCurso']='inicioPublico';
    $_SESSION['usuarioDAW201LoginLogoff']=null;
    session_destroy();
    header("Location: index.php"); 
}
if(isset($_REQUEST['detalle'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']='detalle';
    header("Location: index.php"); 
}
if(isset($_REQUEST['modificar'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']='miCuenta';
    header("Location: index.php"); 
}
if(isset($_REQUEST['mtoDptos'])){
    $_SESSION['paginaEnCurso']='wip';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
}
require_once $aVistas['layout'];
?>