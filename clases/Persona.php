<?php

// Definición de la clase Persona
<<<<<<< HEAD
class Persona implements Imprimir
{
=======
class Persona implements Imprimir {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12

    // Identificación de la persona
    public $dni;
    public $nombre;

<<<<<<< HEAD
    function __construct($var_dni, $var_nombre)
    {
        $this->dni = $var_dni;
        $this->nombre = $var_nombre;
    }

    function imprimir()
    {
=======
    function __construct($var_dni, $var_nombre) {
        $this->dni = $var_dni;
        $this->nombre = $var_nombre;
    }
    function imprimir() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Persona: " . ($this->nombre) . "<br /><br />";
    }

}

// la clase empleado extiende la clase persona e implementa 
// la interfaz Imprimir
<<<<<<< HEAD
Interface Imprimir
{
=======
Interface Imprimir {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12

    function imprimir();
}

<<<<<<< HEAD
class Empleado extends Persona implements Imprimir
{
=======
class Empleado extends Persona implements Imprimir {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12

    //   
    public $departamento;

<<<<<<< HEAD
    function __construct($var_departamento, $var_dni, $var_nombre)
    {
=======
    function __construct($var_departamento, $var_dni, $var_nombre) {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        $this->departamento = $var_departamento;
        parent::__construct($var_dni, $var_nombre);
    }

    // este método se debe implementar obligatoriamente
    // porque la clase Empleado implementa la interfaz Imprimir

<<<<<<< HEAD
    function imprimir()
    {
=======
    function imprimir() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Empleado: " . ($this->nombre) . "<br /><br />";
    }

}
