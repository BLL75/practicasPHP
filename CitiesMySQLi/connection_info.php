<?php
// MySQL Server Connection Information

	$link_id = new mysqli('localhost', 
	'root', '123', 'world');

	if ($link_id->connect_error) {
		echo "Connection Error ($link_id->connect_errno)
		$link_id->connect_error\n";
		exit;

	}
	
?>