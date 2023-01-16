<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class UsuarioPDO implements UsuarioDB{
    public static function validarUsuario($codUsuario,$password){
       $entradaOk=true;
       $query=<<<QUERY
               select * from T01_Usuario where T01_codUsuario=$codUsuario AND T01_Password=sha2("{$codUsuario}{$password}",256);
               QUERY;
       $oResultado=DBPDO::ejecutarConsulta($query);
       
       if($oResultado->T01_codUsuario!=$codUsuario||$oResultado->T01_Password!=hash('sha256', ($codUsuario . $password))){
           $entradaOk=false;
       }
       return $entradaOk;
    } 
    public static function altaUsuario() {
        
    }
    public static function modificarUsuario() {
        
    }
    public static function borrarUsuario($codUsuario) {
        $query=<<<query
                delete * from T01_Usuario where T01_codUsuario=$codUsuario;
                query;
        DBPDO::ejecutarConsulta($query);
    }
    public static function validarCodNoExiste($codUsuario) {
        $noExiste=true;
        $query=<<< query
                select * from T01_Usuario where T01_codUsuario=$codUsuario;
                query;
        $oResultado= DBPDO::ejecutarConsulta($query);
        if(is_object($oResultado)){
            $noExiste=false;
        }
        return $noExiste;
    }
}
