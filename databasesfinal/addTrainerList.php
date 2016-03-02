<?php
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "nakashig-db";
	$password = "xXiNAmO8UFsRQc9d";
	$dbname = "nakashig-db";
		// Create connection
	$name = $_POST['trainer_name'];
	$desc = $_POST['trainer_desc'];
		
	$mysql = new mysqli($servername,$username, $password, $dbname);												
	$stmt = $mysql->prepare('INSERT INTO trainer (trainer_name, description) VALUES (?, ?)');
	$stmt->bind_param('ss', $name, $desc);
	$stmt->execute();				
	$mysql->close();
		
	header("Location:main.php");
    exit();
?>
