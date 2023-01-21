<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once 'config/confDB.php';
class DBPDO implements DB{
    public static function ejecutarConsulta($entradaSQL, $parametros=null) {
        try {
            $oPDO=new PDO(DSN,USER,PASS);
        $query=$oPDO->prepare($entradaSQL);
        $query->execute($parametros);
        return $query;
        } catch (PDOException $excepcion) {
            $_SESSION['paginaEnCurso']='error';
            $error=new Error($excepcion->getCode(), $excepcion->getMessage(), $excepcion->getFile(), $excepcion->getLine(), $_SESSION['paginaAnterior']);
            $_SESSION['error']=$error;
            
            header('Location: index.php');
            exit;
        } finally {
            unset($oPDO);
        }
    }
}