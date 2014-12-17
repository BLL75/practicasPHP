<?php

<?php
$enlace =  mysql_connect('localhost', 'root', '123');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>

?>