




<?php
//Manejo de errores de conexion.
$usuario = 'root';
$pwd = '1234';
try {
    $gbd = new PDO('mysql:host=localhost;dbname=world', $usuario, $pwd);
    
    //$gbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

