<?php

use Mpdf\Tag\Table;

ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class Cliente{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

    public function __construct()
    {
        $this->descuento = 0.0;
    }
    public function __get($propiedad)
    {
        return $this-> $propiedad;
    }
    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
    public function imprimir(){
        echo "dni: " . $this->dni . "<br>";
        echo "nombre: " . $this->nombre . "<br>";
        echo "correo: " . $this->correo . "<br>";
        echo "telefono: " . $this->telefono . "<br>";
        echo "descuento: " . $this->descuento . "<br>";
        
    }

}

class Producto{
    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;

public function __construct()
{
    $this->precio = 0.0;
    $this->iva = 0.0;
}
public function __get($propiedad)
{
    return $this-> $propiedad;
}
public function __set($propiedad, $valor)
{
    $this->$propiedad = $valor;
}

public function imprimir(){
    echo "cod: " . $this->cod . "<br>";
    echo "nombre: " . $this->nombre . "<br>";
    echo "precio: " . $this->precio . "<br>";
    echo "descripcion: " . $this->descripcion . "<br>";
    echo "iva: " . $this->iva . "<br>";
    
}

}

class Carrito{
    private $cliente;
    private $aProductos;
    private $subtotal;
    private $total;

    public function __construct()
    {
        $this->aProductos = array();
        $this->subtotal = 0.0;
        $this->total = 0.0;
    }

    public function __get($propiedad)
{
    return $this-> $propiedad;
}
public function __set($propiedad, $valor)
{
    $this->$propiedad = $valor;
}

public function imprimirTicket(){
    echo"<Table class="table table-hover border" style= "width:500px">";
}
}



//programa

$cliente1 = new Cliente();
$cliente1->dni = "37465456";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@gmail.com";
$cliente->telefono = "1145214847";
$cliente1->descuento = 0.05;
print_r($cliente1);
$cliente1->imprimir();

$producto1 = new Producto();
$producto1->cod = "AB787A";
$ptoducto1->nombre = "Notebook 15/HP";
$producto1->descripcion = "esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QRDSJD";
$ptoducto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "esta es una heladera no froze";
$producto2->precio = 76000;
$producto2->iva = 10.5;
$producto2->imprimir();

$carrito = new Carrito();
$carrito->cliente = $cliente1;
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
$carrito->imprimirTicket();
?>