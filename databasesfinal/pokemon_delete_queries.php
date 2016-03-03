<?php
	if(isset($_POST['deletePokemon']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection

		$p_name = $_POST['pokemon'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('DELETE FROM pokemon WHERE name=?');
		$stmt->bind_param('s', $p_name);
		$stmt->execute();
		$stmt->close();
		$mysql->close();
	}
	
	if(isset($_POST['deleteType']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection

		$p_type = $_POST['type'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('DELETE FROM types WHERE type_name=?');
		$stmt->bind_param('s', $p_type);
		$stmt->execute();
		$stmt->close();
		$mysql->close();
	}
	
	if(isset($_POST['deleteMove']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection

		$p_move = $_POST['move'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('DELETE FROM moves WHERE move_name=?');
		$stmt->bind_param('s', $p_move);
		$stmt->execute();
		$stmt->close();
		$mysql->close();
	}
	
	if(isset($_POST['deleteRoute']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection

		$p_route = $_POST['route'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('DELETE FROM routes WHERE route_name=?');
		$stmt->bind_param('s', $p_route);
		$stmt->execute();
		$stmt->close();
		$mysql->close();
	}
	
	if(isset($_POST['deleteTrainer']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection

		$p_trainer = $_POST['trainer'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('DELETE FROM trainer WHERE trainer_name=?');
		$stmt->bind_param('s', $p_trainer);
		$stmt->execute();
		$stmt->close();
		$mysql->close();
	}
	
	header("Location:deletion.php");
    exit();
?>