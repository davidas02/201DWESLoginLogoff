<?php

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
}
if(isset($_REQUEST['cambiarPassword'])){
    $aErrores=[
        'Apassword'=>null,
        'Npassword'=>null,
        'RNpassword'=>null
    ];
    $entradaOk=true;
    if($_REQUEST['Apassword']!=$_REQUEST['Npassword']&&$_REQUEST['Npassword']==$_REQUEST['RNpassword']){
        $aErrores['Apassword'] = validacionFormularios::validarPassword($_REQUEST['Apassword'], 8, 4, 1, obligatorio: 1);
        $aErrores['Npassword'] = validacionFormularios::validarPassword($_REQUEST['Npassword'], 8, 4, 1, obligatorio: 1);
        $aErrores['RNpassword'] = validacionFormularios::validarPassword($_REQUEST['RNpassword'], 8, 4, 1, obligatorio: 1);
        foreach ($aErrores as $claveError => $mensajeError) {
            if ($mensajeError != null) {
                $entradaOk = false;
            }
        }
        if($entradaOk){
        UsuarioPDO::cambiarPassword($_SESSION['usuarioDAW201LoginLogoff'], hash("sha256",($_SESSION['usuarioDAW201LoginLogoff']->getCodUsuario().$_REQUEST['Npassword'])));
        }
    }
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
}
if (isset($_REQUEST['aceptar'])){
    UsuarioPDO::modificarUsuario($_SESSION['usuarioDAW201LoginLogoff'], $_REQUEST['nombre']);
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    
}
if(isset($_REQUEST['borrarUsuario'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']="borrarUsuario";
    header('Location: index.php');
}
require_once $aVistas['layout'];

