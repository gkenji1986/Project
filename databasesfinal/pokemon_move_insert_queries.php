<?php
	if(isset($_POST['addMoveList']))
	{
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
	}
	
	if(isset($_POST['addPokeMove']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
		// Create connection
		$name = $_POST['pokeName'];
		$move = $_POST['pokeMove'];
		
		$mysql = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql->prepare('SELECT pokemon_id FROM pokemon WHERE name = (?)');
		$stmt->bind_param('s', $name);
		$stmt->execute();
		$stmt->bind_result($p_name);
		$results = $stmt->fetch();
		
		$mysql2 = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql2->prepare('SELECT move_id FROM moves WHERE move_name = (?)');
		$stmt->bind_param('s', $move);
		$stmt->execute();
		$stmt->bind_result($p_move);
		$results = $stmt->fetch();
		
		$mysql3 = new mysqli($servername, $username, $password, $dbname);	
		$stmt = $mysql3->prepare('INSERT INTO pokemon_moves (pid, mid) VALUES (?, ?)');
		$stmt->bind_param('ss', $p_name, $p_move);

		$stmt->execute();
		$stmt->close();
		
		$mysql->close();
	}
	
	if(isset($_POST['updateMove']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection
		$move = $_POST['updateMove'];
		$damage = $_POST['updateDmg'];
		$pp = $_POST['updatePp'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('UPDATE moves SET move_base_damage = (?), move_pp = (?) WHERE move_name = (?)');
		$stmt->bind_param('sss', $damage, $pp, $move);
		$stmt->execute();				
		$mysql->close();
	}
	
	if(isset($_POST['addMoveList']))
	{
		
	}
	header("Location:insert_move.php");
    exit();
?>
