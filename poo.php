<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class persona{
public $dni;
public $nombre;
public $edad;
public $nacionalidad;

}

class alumno extends persona{

public $legajo;
public $notaPortfolio;
public $notaPhp;
public $notaProyecto;

public function__construct(){
    $this->notaPortfolio = 0.0;
    $this->notaPhp = 0.0;
    $this->notaProyecto = 0.0;
}

}

class docente extends persona{
 public $especialidad; 

}
?>