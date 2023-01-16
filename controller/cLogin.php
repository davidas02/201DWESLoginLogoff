<?php

require_once 'core/221024libreriaValidacionFormularios.php';

require_once $aVistas[$_SESSION['paginaEnCurso']];
if (isset($_REQUEST['login'])) {
    $_SESSION['paginaEncurso'] = 'inicioPrivado';
    header('Location: index.php');
}
if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
}

if (isset($_REQUEST['iniciarSesion'])) {
    $entradaOk = true;
    $buscaUsuarioPorCodigo = <<< sq2
    select * from T01_Usuario where T01_CodUsuario=:codUsuario;
sq2;
//actualizacion usuario introducido
    $actualizacionConexiones = <<< sq3
    update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now() where T01_CodUsuario=:codUsuario;
sq3;
    try {
        $miDB = new PDO(DSN, USER, PASS);
        //Comprobamos que el usuario no haya introducido inyeccion de codigo y los datos están correctos
        $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, obligatorio: 1);
        $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, obligatorio: 1);
        foreach ($aErrores as $claveError => $mensajeError) {
            if ($mensajeError != null) {
                $entradaOk = false;
            }
        }
        if ($entradaOk) {
            $queryConsultaPorCodigo = $miDB->prepare($buscaUsuarioPorCodigo);
            $queryConsultaPorCodigo->bindParam(':codUsuario', $_REQUEST['usuario']);
            $queryConsultaPorCodigo->execute();
            $oUsuario = $queryConsultaPorCodigo->fetchObject();
            //Comprobación de contraseña correcta
            if (UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password'])) {
                $entradaOk = false;
            }
        }
//   si no se ha pulsado iniciar sesion le pedimos que muestre el formulario de inicio
    } catch (PDOException $excepcion) {
        echo 'Error: ' . $excepcion->getMessage() . "<br>";
        echo 'Código de error: ' . $excepcion->getCode() . "<br>";
    } finally {
        unset($miDB);
    }
    if ($entradaOk) {
        $_SESSION['FechaHoraUltimaConexionAnterior'] = $oUsuario->T01_FechaHoraUltimaConexion;
        try {
            $miDB = new PDO(DSN, USER, PASS);
            //actualizamos el usuario
            $queryActualizacion = $miDB->prepare($actualizacionConexiones);
            $queryActualizacion->bindParam(":codUsuario", $oUsuario->T01_CodUsuario);
            $queryActualizacion->execute();
            //Volvemos a buscar el usuario para actualizar el objeto usuario
            $queryConsultaPorCodigo = $miDB->prepare($buscaUsuarioPorCodigo);
            $queryConsultaPorCodigo->bindParam(':codUsuario', $_REQUEST['usuario']);
            $queryConsultaPorCodigo->execute();
            $oUsuario = $queryConsultaPorCodigo->fetchObject();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } finally {
            unset($miDB);
        }
        //Establecemos una nueva cookie para el idioma y utlizaremos el metodo time al cual le sumaremos 1800 segundos(media hora)
        //Introducimos el usuario en la sesion
        $_SESSION['usuarioDAW201AppLoginLogoff'] = $oUsuario;
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header("Location: index.php");
    }
}

require_once $aVistas['layout'];
