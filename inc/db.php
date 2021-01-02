<?php
	
	$db = mysqli_connect("localhost", "root", "", "ti_agro");

	if ( $db ){
		// echo "Database Connected";
	}
	else {
		die("MySQL Connection Faild." . mysqli_error($db));
	}

?>