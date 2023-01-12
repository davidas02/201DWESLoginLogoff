<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once './DBPDO.php';
class UsuarioPDO{
    public static function validarUsuario($codUsuario,$password){
       $entradaOk=true;
       $parametros=[':codUsuario',$codUsuario];
       $entradaSQL="select T01_Password from T01_Usuario where T01_codUsuario=:codUsuario";
       $query= DBPDO::ejecutarConsulta($entradaSQL, $parametros);
       $pass=$query['T01_Password'];
       if($pass!=hash('sha256', ($codUsuario . $password))){
           $entradaOk=false;
       }
       return $entradaOk;
    } 
    public static function altaUsuario() {
        
    }
    public static function modificarUsuario() {
        
    }
    public static function borrarUsuario() {
        
    }
    public static function validarCodNoExiste() {
        
    }
}
