<?php

class UsuarioPDO implements UsuarioDB {
public static function validarUsuario($codUsuario, $password) {
        try {
            $query = <<<QUERY
               select * from T01_Usuario where T01_CodUsuario="$codUsuario" AND T01_Password=sha2("{$codUsuario}{$password}",256);
               QUERY;
            $oResultado = DBPDO::ejecutarConsulta($query);
            $oDatos = $oResultado->fetchObject();
            if (is_object($oDatos)) {
                return new Usuario($oDatos->T01_CodUsuario, $oDatos->T01_Password, $oDatos->T01_DescUsuario, $oDatos->T01_NumConexiones, $oDatos->T01_FechaHoraUltimaConexion);
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public static function registrarUltimaConexion($oUsuario) {
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones() + 1);
        $actualizar = <<<query
              UPDATE T01_Usuario SET T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now()
              WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
              query;
        $consultaEjecuada=DBPDO::ejecutarConsulta($actualizar);
        return $oUsuario;
    }

    public static function altaUsuario($codUsuario, $password, $descUsuario) {
        $alta = <<<sql
                INSERT INTO T01_Usuario values("{$codUsuario}",sha2("{$codUsuario}{$password}",256),"{$descUsuario}",now(),1,'usuario',null);
                sql;
        if (self::validarCodNoExiste($codUsuario)) {
            DBPDO::ejecutarConsulta($alta);
            return new Usuario($codUsuario, hash('sha256', ($codUsuario . $password)), $descUsuario, 1, new DateTime("now"));
        } else {
            return false;
        }
    }

    public static function cambiarPassword($oUsuario, $newPassword) {
        $modificarUsuario = <<< sq3
            UPDATE T01_Usuario SET T01_Password="{$newPassword}" WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
        sq3;
        $ejecucionOK=DBPDO::ejecutarConsulta($modificarUsuario);
        return $ejecucionOK;
    }

    public static function modificarUsuario($oUsuario, $descUsuario) {
        $modificarUsuario = <<<sql
                UPDATE T01_Usuario set T01_DescUsuario="{$descUsuario}" WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
                sql;
        DBPDO::ejecutarConsulta($modificarUsuario);
        $oUsuario->setDescUsuario($descUsuario);
    }

    public static function borrarUsuario($codUsuario) {
        $query = <<<query
                delete from T01_Usuario where T01_CodUsuario='$codUsuario';
                query;
        DBPDO::ejecutarConsulta($query);
    }

    public static function validarCodNoExiste($codUsuario) {
        $noExiste = true;
        $query = <<< query
                select * from T01_Usuario where T01_CodUsuario="{$codUsuario}";
                query;
        $oResultado = DBPDO::ejecutarConsulta($query);
        if (!$oResultado) {
            $noExiste = false;
        }
        return $noExiste;
    }
}

?>