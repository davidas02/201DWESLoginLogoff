<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once '../config/confDB.php';
class DBPDO implements DB{
    
    public static function ejecutarConsulta($entradaSQL, $parametros) {
        try {
            $pdo=new PDO(DSN,USER,PASS);
        $query=$pdo->prepare($entradaSQL);
        if(!is_null($parametros)){
            foreach ($parametros as $par=>$valor){
                $query->bindParam($par, $valor);
            }
        }
        $query->execute();
        $salida=$query->fetchAll();
        return $salida;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } finally {
            
        }

        
    }

}