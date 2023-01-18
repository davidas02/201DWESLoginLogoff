<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class UsuarioPDO implements UsuarioDB{
    public static function validarUsuario($codUsuario,$password){
       try{
        $query=<<<QUERY
               select * from T01_Usuario where T01_CodUsuario="$codUsuario" AND T01_Password=sha2("{$codUsuario}{$password}",256);
               QUERY;
       $oResultado=DBPDO::ejecutarConsulta($query);
       $oDatos=$oResultado->fetchObject();
       if(is_object($oDatos)){
           return new Usuario($oDatos->T01_CodUsuario,$oDatos->T01_Password, $oDatos->T01_DescUsuario, $oDatos->T01_NumConexiones, $oDatos->T01_FechaHoraUltimaConexion);
       }
       } catch (Exception $ex){
           echo $ex->getMessage();
       }
    } 
    public static function registrarUltimaConexion($oUsuario) {
      $oUsuario->setNumConexiones($oUsuario->getNumConexiones()+1);
      $actualizar= <<<query
              UPDATE T01_Usuario SET T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now()
              WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
              query;
      DBPDO::ejecutarConsulta($actualizar);
      return $oUsuario;
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
