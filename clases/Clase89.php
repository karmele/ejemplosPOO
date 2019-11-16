<?php

<<<<<<< HEAD
abstract class Clase89
{

    private $saludo;

    function __construct()
    {
=======
abstract class Clase89 {

    private $saludo;

    function __construct() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Se está ejecutando el constructor en la " .
        "clase MiClase<br />";
    }

<<<<<<< HEAD
    function __destruct()
    {
=======
    function __destruct() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Se está destruyendo un objeto de la clase " .
        " MiClase<br />";
    }

<<<<<<< HEAD
    function getSaludo()
    {
        return $this->saludo;
    }

    function setSaludo($saludo)
    {
        $this->saludo = $saludo;
    }

    function saludar()
    {
=======
    function getSaludo() {
        return $this->saludo;
    }

    function setSaludo($saludo) {
        $this->saludo = $saludo;
    }

    function saludar() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo $this->saludo;
    }

    abstract function presentar($nombre);
}

// Subclase o clase derivada
<<<<<<< HEAD
class MiSubClase extends Clase89
{

    private $despedida;

    function __construct()
    {
=======
class MiSubClase extends Clase89 {

    private $despedida;

    function __construct() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Se está ejecutando el constructor de un objeto " .
        " de la subclase MiSubClase<br />";
    }

<<<<<<< HEAD
    function __destruct()
    {
=======
    function __destruct() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Se está destruyendo un objeto de la clase " .
        " MiSubClase<br />";
    }

<<<<<<< HEAD
    function getDespedida()
    {
        return $this->despedida;
    }

    function setDespedida($despedida)
    {
        $this->despedida = $despedida;
    }

    function despedirse()
    {
        echo $this->despedida . "<br />";
    }

    function presentar($nombre)
    {
=======
    function getDespedida() {
        return $this->despedida;
    }

    function setDespedida($despedida) {
        $this->despedida = $despedida;
    }

    function despedirse() {
        echo $this->despedida . "<br />";
    }
    function presentar($nombre) {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Hola soy $nombre <br />";
    }

}
