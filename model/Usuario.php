<?php
class Usuario{
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;
    public function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexionAnterior) {
        $this->codUsuario= $codUsuario;
        $this->password=$password;
        $this->descUsuario=$descUsuario;
        $this->numConexiones=$numConexiones;
        $this->fechaHoraUltimaConexion= new DateTime("now");
        $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
    }
    function getCodUsuario(){
        return $this->codUsuario;
    }
    function getPassword() {
        return $this->password;
    }
    function getDescUsuario(){
        return $this->descUsuario;
    }
    function getNumConexiones() {
        return $this->numConexiones;
    }
    function getFechaHoraUltimaConexion(){
        return $this->fechaHoraUltimaConexion;
    }
    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    function getPerfil() {
        return $this->perfil;
    }
    function setCodUsuario($codUsuario){
        $this->codUsuario=$codUsuario;
    }
    function setPassword($password) {
        $this->password=$password;
    }
    function setDescUsuario($descUsuario){
        $this->descUsuario=$descUsuario;
    }
    function setNumConexiones($numConexiones) {
        $this->numConexiones=$numConexiones;
    }
    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion){
        $this->fechaHoraUltimaConexion=$fechaHoraUltimaConexion;
    }
    function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior) {
        $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
    }
    function setPerfil($perfil) {
        $this->perfil=$perfil;
    }
}

