<html>
	<head>
	    <title>Navigation</title>
		
	</head>
	<body>
	    
	<?php
	// Inicializar la sesión.
	// Si está usando session_name("algo"), ¡no lo olvide ahora!
	session_start();
    session_unset();
    session_destroy();
    ?>

	    
			<a href="countries.php?ID=1"><h2>Countries</h2></a><br/>
			<a href="cities.php"><h2>Cities</h2></a><br/>
		
	</body>
</html>