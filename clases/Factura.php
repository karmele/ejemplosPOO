<?php

// Definición de la clase Factura
<<<<<<< HEAD
class Factura
{
=======
class Factura {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12

    // Número de la factura
    private $numero;
    private $fecha;
    // matriz de objetos lineas de detalle (Linea_Detalle)
    private $lineas;

<<<<<<< HEAD
    function __construct($var_numero, $var_fecha)
    {
=======
    function __construct($var_numero, $var_fecha) {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        $this->numero = $var_numero;
        $this->fecha = $var_fecha;
    }

<<<<<<< HEAD
    function getNumero()
    {
        return $this->numero;
    }

    function getFecha()
    {
        return $this->fecha;
    }

    function getLineas()
    {
        return $this->lineas;
    }

    function setNumero($numero)
    {
        $this->numero = $numero;
    }

    function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    function agregar_linea($linea_detalle)
    {
=======
    function getNumero() {
        return $this->numero;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getLineas() {
        return $this->lineas;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function agregar_linea($linea_detalle) {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        if ($linea_detalle instanceof Linea_Detalle) {
            $this->lineas[] = $linea_detalle;
        } else {
            
        }
    }

}

// Definición de la clase Linea_Detalle

<<<<<<< HEAD
class Linea_Detalle
{
=======
class Linea_Detalle {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12

    // Una propiedad publica
    private $cantidad;
    private $producto;

<<<<<<< HEAD
    function __construct($var_cantidad, $var_producto)
    {
=======
    function __construct($var_cantidad, $var_producto) {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        // constructor de la clase Linea_Detalle
        $this->cantidad = $var_cantidad;
        $this->producto = $var_producto;
    }

<<<<<<< HEAD
    function getCantidad()
    {
        return $this->cantidad;
    }

    function getProducto()
    {
        return $this->producto;
    }

    function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    function setProducto($producto)
    {
=======
    function getCantidad() {
        return $this->cantidad;
    }

    function getProducto() {
        return $this->producto;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setProducto($producto) {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        $this->producto = $producto;
    }

}
