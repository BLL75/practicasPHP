<?php
//Manejo de errores de conexion.
$usuario = 'root';
$pwd = '123';
try {
    $gbd = new PDO('mysql:host=localhost;dbname=tienda', $usuario, $pwd);
    
    //$gbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>