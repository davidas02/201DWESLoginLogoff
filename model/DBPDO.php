<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once '../config/confDB.php';
class DBPDO implements DB{
    public static function ejecutarConsulta($entradaSQL, $parametros=null) {
        try {
            $oPDO=new PDO(DSN,USER,PASS);
        $query=$oPDO->prepare($entradaSQL);
        if(!is_null($parametros)){
            if(is_array($parametros)){
                foreach ($parametros as $par=>$valor){
                    $query->bindParam($par, $valor);
                }
            }
        }
        $query->execute();
        $salida=$query->fetchObject();
        return $salida;
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
            header("Location: index.php");
        } finally {
            unset($pdo);
        }
    }
}