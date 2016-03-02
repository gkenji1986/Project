<?php
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "nakashig-db";
	$password = "xXiNAmO8UFsRQc9d";
	$dbname = "nakashig-db";
		// Create connection

	$name = $_POST['deletePoke'];
		
	$mysql = new mysqli($servername,$username, $password, $dbname);												
	$stmt = $mysql->prepare('DELETE FROM pokemon WHERE name=?');
	$stmt->bind_param('s', $name);
	$stmt->execute();
	$stmt->close();
	$mysql->close();
		
	header("Location:main.php");
    exit();
?>