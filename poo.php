<?php

ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class persona{
protected $dni;
protected $nombre;
protected $edad;
protected $nacionalidad;

public function setDni($dni){
    $this->dni = $dni;
}
public function getDni(){
     return $this->dni;
}
public function setNombre($nombre){
    $this->nombre = $nombre;
}
public function getNombre(){
   return $this->nombre;
}
public function setEdad($edad){
    $this->edad = $edad;
}
public function getEdad(){
    return $this->edad;
}
public function setNacionalidad($nacionalidad){
    $this->nacionalidad = $nacionalidad;
}
public function getNacionalidad(){
    return $this->nacionalidad;
}
public function imprimir(){

}

}

class alumno extends persona{
private $legajo;
private $notaPortfolio;
private $notaPhp;
private $notaProyecto;

public function __get($propiedad)
{
    return $this->$propiedad;
}
public function __set($propiedad, $valor)
{
    $this->$propiedad = $valor;
}

public function __construct(){
    $this->notaPortfolio = 0.0;
    $this->notaPhp = 0.0;
    $this->notaProyecto = 0.0;
}
public function imprimir(){
    echo "alumno: " . $this->nombre . "<br>";
    echo "documento: " . $this->dni . "<br>";
    echo "Nota PHP: " . $this->notaPhp . "<br>";
    echo "Nota Portfolio: " . $this->notaPortfolio . "<br>";
    echo "Nota Proyecto: " . $this->notaProyecto . "<br>";

}
public function calcularPromedio(){
    
}

}

class docente extends persona{
 public $especialidad; 

 public function __get($propiedad)
{
    return $this->$propiedad;
}
public function __set($propiedad, $valor)
{
    $this->$propiedad = $valor;
}

 const ESPECIALIDAD_WP = "Worldpress";
 const ESPECIALIDAD_ECO = "Economía aplicada";
 const ESPECIALIDAD_BBDD = "Base de datos";

 public function imprimir(){
    echo "Nombre del docente: " . $this->nombre . "<br>";
    echo "Especialidad: " . $this->especialidad . "<br>";
}
public function imprimirEspecialidadesHabilitadas(){
    echo "Especialidades: " . "<br>";
    echo self::ESPECIALIDAD_BBDD. "<br>";
    echo self::ESPECIALIDAD_ECO. "<br>";
    echo self::ESPECIALIDAD_WP. "<br>"; 

}
}

//programa
$alumno1 = new alumno();
$alumno1->nombre = "juana mendoza";
$alumno1->dni = "32521458";
$alumno1->edad = 32;
$alumno1->nacionalidad = "argentina";
$alumno1->notaPhp = 8;
$alumno1->notaPortfolio = 9;
$alumno1->notaProyecto = 10;
$alumno1->imprimir();

$alumno2 = new alumno();
$alumno2->setNombre("Samuel Guzman");
$alumno2->setDni("95694240");
$alumno2->setEdad(24);
$alumno2->setNacionalidad("Venezolana");
$alumno2->notaPhp = 10;
$alumno2->notaPortfolio = 7;
$alumno2->notaProyecto = 10;
$alumno2->imprimir();

$docente = new docente();
$docente->nombre = "Sergio Gonzales";
$docente->especialidad = docente::ESPECIALIDAD_ECO;
$docente->imprimir();
$docente->imprimirEspecialidadesHabilitadas();
?>

