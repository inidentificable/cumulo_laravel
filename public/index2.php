<?php
define("UBICACION", "");
define("ELCUMULO", UBICACION . "Cumulo/");
include_once(UBICACION . 'InterfaceCumulo.php');

$navegacion = new InterfaceCumulo('cumulocl_demo', 'P2l141987', 'localhost', 'cumulocl_demo');

$navegacion->llamarInterface("Cabeceras");
$navegacion->llamarInterface("Barra");

if (!isset($_GET['ip'])) {
//carrousel sitio estático
    $navegacion->llamarInterface("Carrousel");
}


if (isset($_GET['i'])) {

    //navegar por sitio estático
    $navegacion->llamarInterface($_GET['i']);

} elseif (isset($_GET['ip'])) {
    //Iniciar plataforma
    $navegacion->llamarPlataforma($_GET['ip']);
    echo($navegacion->espacioCumulo->baseDatos);
} else {
    //Opcion por defecto
    $navegacion->llamarInterface("Marketing");
}

$navegacion->llamarInterface("PiePagina");

?>
