<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if(isset($_REQUEST['registro'])){
    $entradaOk=true;
    $aErrores = [
    'usuario' => null,
    'password' => null,
    'Rpassword' => null,
    'nombre'=>null
];
    $miDB = new PDO(DSN, USER, PASS);
        //Comprobamos que el usuario no haya introducido inyeccion de codigo y los datos están correctos
        $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, obligatorio: 1);
        $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, obligatorio: 1);
        $aErrores['nombre']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombre'], 255, 2, 1);
        foreach ($aErrores as $claveError => $mensajeError) {
            if ($mensajeError != null) {
                $entradaOk = false;
            }
        }
        if ($_REQUEST['password']==$_REQUEST['Rpassword']&$entradaOk) {
            $oUsuario=UsuarioPDO::altaUsuario($_REQUEST['usuario'], $_REQUEST['password'], $_REQUEST['nombre']);
        if(!is_bool($oUsuario)){
            $_SESSION['paginaEnCurso']='inicioPrivado';
            $_SESSION['usuarioDAW201LoginLogoff']=$oUsuario;
        }
        header('Location: index.php');
            exit();
        }
    }
    
require_once $aVistas['layout'];