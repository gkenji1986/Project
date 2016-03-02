<?php
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "nakashig-db";
	$password = "xXiNAmO8UFsRQc9d";
	$dbname = "nakashig-db";
	// Create connection
	$move_name = $_POST['name'];
    $basedmg = $_POST['baseDamage'];
    $power_p = $_POST['pp'];
    $desc = $_POST['moveDesc'];
    $type = $_POST['moveType'];
	
	$mysql = new mysqli($servername, $username, $password, $dbname);												
	$stmt = $mysql->prepare('SELECT type_id FROM types WHERE type_name = (?)');
	$stmt->bind_param('s', $type);
	$stmt->execute();
	$stmt->bind_result($move_Type);
	$results = $stmt->fetch();
	
	$mysql2 = new mysqli($servername, $username, $password, $dbname);	
	$stmt = $mysql2->prepare('INSERT INTO moves (move_name, move_type, move_base_damage, move_pp, description) VALUES (?, ?, ?, ?, ?)');
	$stmt->bind_param('sssss', $move_name, $move_Type, $basedmg, $power_p, $desc);
	
	$stmt->execute();
	$stmt->close();
	
	$mysql->close();
		
	header("Location:main.php");
    exit();
?>