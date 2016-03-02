<?php
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "nakashig-db";
	$password = "xXiNAmO8UFsRQc9d";
	$dbname = "nakashig-db";
		// Create connection

	$id = $_POST['value1'];
	$name = $_POST['value2'];
	$desc = $_POST['value3'];
		
	$mysql = new mysqli($servername,$username, $password, $dbname);												
	$stmt = $mysql->prepare('INSERT INTO pokemon (pokemon_id, name, description) VALUES (?, ?, ?)');
	$stmt->bind_param('s', $id, $name, $desc);
	$stmt->execute();				
	$mysql->close();
		
	header("Location:main.php");
    exit();
?>

