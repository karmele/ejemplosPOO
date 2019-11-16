<?php
<<<<<<< HEAD

// Clase
class Clase6
{

    public $saludo;

    function __construct()
    {
=======
// Clase
class Clase6 {

    public $saludo;

    function __construct() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Se está ejecutando el constructor en la clase " .
        " MiClase base<br />";
    }

<<<<<<< HEAD
    function __destruct()
    {
=======
    function __destruct() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Se está destruyendo un objeto de la clase " .
        " MiClase base<br />";
    }

<<<<<<< HEAD
    function saludar()
    {
=======
    function saludar() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo $this->saludo;
    }

}

// Subclase o clase derivada
<<<<<<< HEAD
class MiSubClase extends Clase6
{

    public $despedida;

    function __construct()
    {
=======
class MiSubClase extends Clase6 {

    public $despedida;

    function __construct() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo "Se está ejecutando el constructor de un objeto de la subclase MiSubClase<br />";
        // Se fuerza la llamada al constructor de la clase base
        parent::__construct();
    }

<<<<<<< HEAD
    function __destruct()
    {
        echo "Se está destruyendo un objeto de la clase MiSubClase<br />";
    }

    function despedirse()
    {
=======
    function __destruct() {
        echo "Se está destruyendo un objeto de la clase MiSubClase<br />";
    }

    function despedirse() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        echo $this->despedida . "<br />";
    }

}
<<<<<<< HEAD

=======
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
?>