<<<<<<< HEAD
<?php

// Definición de la clase Prueba
class Prueba
{

    static $contador = 0;
    private $cliente;
    private $direccion;

    function __construct()
    {
        echo "<br />Entra a construct: " . self::$contador . "<br />";
        self::$contador++;
    }

    function getCliente()
    {
        return $this->cliente;
    }

    function getDireccion()
    {
        return $this->direccion;
    }

    function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

//    function __clone() {
//        echo "<br />Entra a clone: " . self::$contador . "<br />";
//        self::$contador++;
//        $this->cliente = "nuevo cliente";
//        $this->direccion = "nueva dirección";
//    }
}

include 'vistas/cabecera.php';
echo "Clonación de objetos <br /><br />";

$objPrueba = new Prueba;

$objPrueba->setCliente("cliente original");
$objPrueba->setDireccion("dirección original");
echo "Objeto original<br />";

// el objeto original
echo "Contador " . Prueba::$contador . "<br />";
echo $objPrueba->getCliente() . "<br />";
echo $objPrueba->getDireccion() . "<br />";

$CloPrueba = clone $objPrueba;
echo "<br />Objeto clonado<br />";

// el objeto clonado
echo "Contador " . Prueba::$contador . "<br />";
echo $CloPrueba->getCliente() . "<br />";
echo $CloPrueba->getDireccion() . "<br />";
include 'vistas/pie.php';
=======
<?php

// Definición de la clase Prueba
class Prueba {

    static $contador = 0;
    private $cliente;
    private $direccion;

    function __construct() {
        echo "<br />Entra a construct: " . self::$contador . "<br />";
        self::$contador++;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

//    function __clone() {
//        echo "<br />Entra a clone: " . self::$contador . "<br />";
//        self::$contador++;
//        $this->cliente = "nuevo cliente";
//        $this->direccion = "nueva dirección";
//    }

}
include 'vistas/cabecera.php';
echo "Clonación de objetos <br /><br />";

$objPrueba = new Prueba;

$objPrueba->setCliente("cliente original");
$objPrueba->setDireccion("dirección original");
echo "Objeto original<br />";

// el objeto original
echo "Contador " . Prueba::$contador . "<br />";
echo $objPrueba->getCliente() . "<br />";
echo $objPrueba->getDireccion() . "<br />";

$CloPrueba = clone $objPrueba;
echo "<br />Objeto clonado<br />";

// el objeto clonado
echo "Contador " . Prueba::$contador . "<br />";
echo $CloPrueba->getCliente() . "<br />";
echo $CloPrueba->getDireccion() . "<br />";
include 'vistas/pie.php';
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
?>