<?php
require_once 'core/221024ValidacionFormularios.php';
require_once 'model/DB.php';
require_once 'model/UsuarioDB.php';
require_once 'model/Usuario.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';
require_once 'model/Error.php';
define("OBLIGATORIO", 1);
$aControladores = [ //Array de controladores 
    "login" => "controller/cLogin.php",
    "inicioPublico" => "controller/cInicioPublico.php",
    "inicioPrivado" => "controller/cInicioPrivado.php",
    "registro" => "controller/cRegistro.php",
    "detalle" => "controller/cDetalle.php",
    "wip"=>"controller/cWIP.php",
    "miCuenta"=>"controller/cMiCuenta.php",
    "borrarUsuario"=>"controller/cBorrarCuenta.php",
    "error"=>"controller/cError.php"
    ];
$aVistas=[ //array de vistas
    "login" => "view/vLogin.php",
    "inicioPublico" => "view/vInicioPublico.php",
    "inicioPrivado"=> "view/vInicioPrivado.php",
    "registro"=> "view/vRegistro.php",
    "detalle"=>"view/vDetalle.php",
    "layout"=> "view/layout.php",
    "wip"=>"view/vWIP.php",
    "miCuenta"=>"view/vMiCuenta.php",
    "borrarUsuario"=>"view/vBorrarCuenta.php",
    "error"=>"view/vError.php"
];