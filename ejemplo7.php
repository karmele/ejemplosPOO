<<<<<<< HEAD
<?php

// Clase
class MiClase
{

    const IVA = 21;

}

//Subclase o clase derivada (Herencia)
class SubClase extends MiClase
{

    private static $var_static = "Es una variable estática";

    public static function doubleCol()
    {

        echo parent::IVA . "<br />";  //constante de la clase base tb MiClase::IVA
        echo self::$var_static; //variable estática de la propia clase
    }

}

include 'vistas/cabecera.php';
$obj = new SubClase();
$obj->doubleCol();
include 'vistas/pie.php';
=======
<?php

// Clase
class MiClase {

    const IVA = 21;

}

//Subclase o clase derivada (Herencia)
class SubClase extends MiClase {

    private static $var_static = "Es una variable estática";

    public static function doubleCol() {

        echo parent::IVA . "<br />";  //constante de la clase base tb MiClase::IVA
        echo self::$var_static; //variable estática de la propia clase
    }

}

include 'vistas/cabecera.php';
$obj = new SubClase();
$obj->doubleCol();
include 'vistas/pie.php';
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12
?>