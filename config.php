<?php
	$host = "127.0.0.1:3307";
        $user = "root";
        $pass = "";
        $db = "leafnow_db";
        $charset = "utf8mb4";

        $conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}
?>
