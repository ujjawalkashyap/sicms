<?php
	
	DEFINE('DB_NAME','mini_project');
	DEFINE('DB_USER','ujjawalkp');		
	DEFINE('DB_PASS','ujju');
	DEFINE('DB_SERVER','localhost');
	$con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if(!$con)
		die('error connecting to database');
	else
	echo 'connected';
	
?>

