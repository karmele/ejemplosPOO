<?php
include 'vistas/cabecera.php';
include 'clases/MiNamespace.php';

use Espacionom\Carrera as nuevo;  //se le puede poner alias a un espacio de nombres
<<<<<<< HEAD

$obj2 = new nuevo("Txantrea", "Txantrea Herri Krosa", "16-12-2017");
=======
$obj2=new nuevo("Txantrea","Txantrea Herri Krosa","16-12-2017");
>>>>>>> bf4e4cd09e79efd42c6dddcbf91dbb0a845d1d12

$obj2->apuntarse();
include 'vistas/pie.php';



