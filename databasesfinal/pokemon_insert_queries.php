<?php
	if(isset($_POST['addPokemon']))
	{
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
		$stmt->bind_param('sss', $id, $name, $desc);
		$stmt->execute();				
		$mysql->close();
	}
	
	if(isset($_POST['addPokemonType']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
		// Create connection
		$name = $_POST['namePoke'];
		$type = $_POST['typePoke'];
		
		$mysql = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql->prepare('SELECT pokemon_id FROM pokemon WHERE name = (?)');
		$stmt->bind_param('s', $name);
		$stmt->execute();
		$stmt->bind_result($pname);
		$results = $stmt->fetch();
		
		$mysql2 = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql2->prepare('SELECT type_id FROM types WHERE type_name = (?)');
		$stmt->bind_param('s', $type);
		$stmt->execute();
		$stmt->bind_result($ptype);
		$results = $stmt->fetch();
		
		$mysql3 = new mysqli($servername, $username, $password, $dbname);	
		$stmt = $mysql3->prepare('INSERT INTO pokemon_types (pid, ptid) VALUES (?, ?)');
		$stmt->bind_param('ss', $pname, $ptype);

		$stmt->execute();
		$stmt->close();
		
		$mysql->close();
	}
	
	if(isset($_POST['evolutionPokemon']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
		// Create connection
		$evolution = $_POST['predPoke'];
		$predecessor = $_POST['evoPoke'];
		
		$mysql = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql->prepare('SELECT pokemon_id FROM pokemon WHERE name = (?)');
		$stmt->bind_param('s', $predecessor);
		$stmt->execute();
		$stmt->bind_result($pid);
		$results = $stmt->fetch();
		
		$mysql2 = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql2->prepare('SELECT pokemon_id FROM pokemon WHERE name = (?)');
		$stmt->bind_param('s', $evolution);
		$stmt->execute();
		$stmt->bind_result($eid);
		$results = $stmt->fetch();
		
		$mysql3 = new mysqli($servername, $username, $password, $dbname);	
		$stmt = $mysql3->prepare('INSERT INTO pokemon_evolutions (pokemon_evolution_id, pokemon_predecessor_id) VALUES (?, ?)');
		$stmt->bind_param('ss', $eid, $pid);

		$stmt->execute();
		$stmt->close();
		
		$mysql->close();
	}
	
	if(isset($_POST['addType']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection

		$name = $_POST['type'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('INSERT INTO types (type_name) VALUES (?)');
		$stmt->bind_param('s', $name);
		$stmt->execute();				
		$mysql->close();
	}
	
	if(isset($_POST['routePoke']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
		// Create connection
		$poke = $_POST['pokeRoute'];
		$location = $_POST['route'];
		
		$mysql = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql->prepare('SELECT pokemon_id FROM pokemon WHERE name = (?)');
		$stmt->bind_param('s', $poke);
		$stmt->execute();
		$stmt->bind_result($name);
		$results = $stmt->fetch();
		
		$mysql2 = new mysqli($servername, $username, $password, $dbname);												
		$stmt = $mysql2->prepare('SELECT route_id FROM routes WHERE route_name = (?)');
		$stmt->bind_param('s', $location);
		$stmt->execute();
		$stmt->bind_result($path);
		$results = $stmt->fetch();
		
		$mysql3 = new mysqli($servername, $username, $password, $dbname);	
		$stmt = $mysql3->prepare('INSERT INTO pokemon_routes (pid, rid) VALUES (?, ?)');
		$stmt->bind_param('ss', $name, $path);

		$stmt->execute();
		$stmt->close();
		
		$mysql->close();
	}
	
	if(isset($_POST['addRoute']))
	{
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nakashig-db";
		$password = "xXiNAmO8UFsRQc9d";
		$dbname = "nakashig-db";
			// Create connection
		$name = $_POST['route_name'];
		$desc = $_POST['route_description'];
			
		$mysql = new mysqli($servername,$username, $password, $dbname);												
		$stmt = $mysql->prepare('INSERT INTO routes (route_name, description) VALUES (?, ?)');
		$stmt->bind_param('ss', $name, $desc);
		$stmt->execute();				
		$mysql->close();
	}
	
	header("Location:insert.php");
    exit();
?>
