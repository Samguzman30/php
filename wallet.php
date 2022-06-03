<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class persona{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __construct($dni,$nombre,$correo,$celular){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->celular = $celular;

    }
}

class cliente extends persona{
    private $aTarjetas;
    private $bActivo;
    private $fechaAlta;
    private $fechaBaja;

    public function __construct(){
        $this->fechaAlta  = date("d/m/Y");
        $this->aTarjetas = array();
        $this->bActivo = true;
        
}

    public function __get($propiedad) {
        return $this->$propiedad;
}

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
}

    public function agregarTarjeta(){
        $this->aTarjetas[]  = array();
}
    public function imprimirListado(){

}
    public function darDeBaja($fechaBaja){
        $this->bActivo  = false;
        $this->fechaBaja  =  $fechaBaja;
    }
}

class tarjeta{
    private $numero;
    private $fechaVto;
    private $tipo;
    private $cvv;

    const VISA = "Visa";
    const MASTERCARD = "Mastercard";
    const AMEX = "American Express";
    const NARANJA = "Naranja";
    const CABAL = "Cabal";

    public function __construct($tipo, $numero, $fechaVto, $cvv){
        $this->tipo  = $tipo;
        $this->numero  = $numero;
        $this->fechaVto  = $fechaVto;
        $this->cvv  = $cvv;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
}

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
}



}

//desarrollo

$cliente1 = new cliente;
$cliente1->dni = "35625214";
$cliente1->nombre = "Ana Valle";
$cliente1->correo = "ana@gmail.com";
$cliente1->celular = "1140452943";

$tarjeta1 = new tarjeta(tarjeta::VISA, "4938620198447280", "01/23", "577"); 
$tarjeta2 = new tarjeta(tarjeta::AMEX, "377233746728163", "10/22", "1458");
$tarjeta3 = new tarjeta(tarjeta::MASTERCARD, "5310581403363487", "12/22", "754");

$cliente1->agregarTarjeta($tarjeta1);
$cliente1->agregarTarjeta($tarjeta2);
$cliente1->agregarTarjeta($tarjeta3);
 

$cliente2 = new cliente;
$cliente2->dni = "39719929";
$cliente2->nombre = "Miguel Camacho";
$cliente2->correo = "mcamacho@gmail.com";
$cliente2->celular = "1145236987";

$tarjeta1 = new tarjeta(tarjeta::VISA, "377233746728163", "10/22", "1458");
$tarjeta2 = new tarjeta(tarjeta::MASTERCARD, "5310581403363487", "12/22", "754");

$cliente2->agregarTarjeta(new tarjeta(tarjeta::VISA, "377233746728163", "10/22", "1458"));
$cliente2->agregarTarjeta(new tarjeta(tarjeta::MASTERCARD, "5310581403363487", "12/22", "754"));

print_r($cliente1);
print_r($cliente2);
?>