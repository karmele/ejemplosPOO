<?php
<<<<<<< HEAD

// Según el orden de precedencia los métodos de la clase actual 
// sobrescriben los métodos del Trait, a la vez que el Trait 
// sobrescribe los métodos de la clase base. 
trait Comunicacion
{

    function decirHola()
    {
        return "Hola";
    }

    function decirQueTal()
    {
        return "¿Qué tal? Soy un trait";
    }

    function decirHolaYQuetal()
    {
        return $this->decirHola() . " " . $this->decirQueTal();
    }

    function preguntarEstado()
    {
        return $this->decirHola() . " " . parent::decirQueTal();
    }

    function decirBien()
    {
=======
// Según el orden de precedencia los métodos de la clase actual 
// sobrescriben los métodos del Trait, a la vez que el Trait 
// sobrescribe los métodos de la clase base. 
trait Comunicacion {

    function decirHola() {
        return "Hola";
    }

    function decirQueTal() {
        return "¿Qué tal? Soy un trait";
    }

    function decirHolaYQuetal() {
        return $this->decirHola() . " " . $this->decirQueTal();
    }

    function preguntarEstado() {
        return $this->decirHola() . " " . parent::decirQueTal();
    }

    function decirBien() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        return "Bien, desde el Trait Comunicación";
    }

}

<<<<<<< HEAD
class Estado
{

    function decirQueTal()
    {
        return "¿Qué tal? Soy Estado";
    }

    function decirBien()
    {
=======
class Estado {

    function decirQueTal() {
        return "¿Qué tal? Soy Estado";
    }

    function decirBien() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        return "Bien, desde la clase Estado";
    }

}

<<<<<<< HEAD
class Comunicar extends Estado
{

    use Comunicacion;

    function decirQueTal()
    {
=======
class Comunicar extends Estado {

    use Comunicacion;

    function decirQueTal() {
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
        return "¿Qué tal? Soy Comunicar";
    }

}
<<<<<<< HEAD

=======
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
include 'vistas/cabecera.php';
$a = new Comunicar;
echo $a->decirHolaYQuetal() . "<br>"; // Devuelve: Hola ¿Qué tal? Soy Comunicar
echo $a->preguntarEstado() . "<br>"; // Devuelve: Hola ¿Qué tal? Soy Estado
echo $a->decirBien(); // Devuelve: Bien, desde el Trait Comunicación
include 'vistas/pie.php';
?>
