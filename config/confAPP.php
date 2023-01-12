<?php
require_once 'core/221024libreriaValidacionFormularios.php';
/*require_once 'model/DB.php';
require_once '../model/UsuarioDB.php';
require_once '../model/Usuario.php';
require_once '../model/UsuarioPDO.php';
require_once '../model/DBPDO.php';
require_once '../model/AppError.php';*/
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
define("OBLIGATORIO", 1);
$aControladores = [
    "login" => "controller/cLogin.php",
    "inicioPublico" => "controller/cInicioPublico.php",
    "inicioPrivado"=> "controller/cInicioPrivado.php"
];
$aVistas=[
    "login" => "view/vLogin.php",
    "inicioPublico" => "view/vInicioPublico.php",
    "inicioPrivado"=> "view/vInicioPrivado.php",
    "layout"=> "view/layout.php"
];
