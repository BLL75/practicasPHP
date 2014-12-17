<?php
	session_start();
	
	unset($_SESSION);	
	
	echo "<a href='bbdd2.php'> volver al inicio</a>";
	
	session_destroy();
?>