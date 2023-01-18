<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
        require_once 'config/confAPP.php'; //configuacion de la aplicacion
        require_once 'config/confDB.php'; //Configuracion BD
        session_start();//Creamos o recuperamos sesion
        if(!isset($_SESSION['paginaEnCurso'])){//Si no hay ninguna pagina en curso
            $_SESSION['paginaEnCurso']='inicioPublico'; //Establecemos la pagina de inicio en la pagina en curso 
        }
        require_once $aControladores[$_SESSION['paginaEnCurso']]; //pedimos el controlador del inicio publico
        require_once $aVistas[$_SESSION['paginaEnCurso']];
        ?>