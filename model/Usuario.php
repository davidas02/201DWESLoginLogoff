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

}

