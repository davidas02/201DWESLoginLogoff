<?php
require_once 'core/221024libreriaValidacionFormularios.php';

require_once $aVistas[$_SESSION['paginaEnCurso']];
if(isset($_REQUEST['login'])){
    $_SESSION['paginaEncurso']='inicioPrivado';
    header('Location: index.php');
}
require_once $aVistas['layout'];
