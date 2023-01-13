<?php
class Usuario{
    protected $codUsuario;
    protected $password;
    protected $descUsuario;
    protected $numConexiones;
    protected $fechaHoraUltimaConexion;
    protected $fechaHoraUltimaConexionAnterior;
    protected $perfil;
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
    function getdescUsuario(){
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
    function setCodUsuario(){
        return $this->codUsuario;
    }
    function setPassword() {
        return $this->password;
    }
    function setdescUsuario(){
        return $this->descUsuario;
    }
    function setNumConexiones() {
        return $this->numConexiones;
    }
    function setFechaHoraUltimaConexion(){
        return $this->fechaHoraUltimaConexion;
    }
    function setFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    function setPerfil() {
        return $this->perfil;
    }
}

