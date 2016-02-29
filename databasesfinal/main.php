<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>CS 340 Final</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <h1>PokeDex</h1>
        <fieldset>
			<div id="poke_id">
		   
				<text>Select a Pokemon name for information about the Pokemon.</text>
				<form action='main.php' method='POST'>
					<select id = "generalInfo" name = "generalInfo">
					   <?php
							$servername = "oniddb.cws.oregonstate.edu";
							$username = "nakashig-db";
							$password = "xXiNAmO8UFsRQc9d";
							$dbname = "nakashig-db";
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) 
							{
							  die("Connection failed: " . $conn->connect_error);
							} 
							$sql = "SELECT name FROM pokemon";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) 
							{
							  unset($name);
							  $name = $row['name']; 
							  echo '<option value="'.$name.'">'.$name.'</option>';
							}
							$conn->close();
						?>
					</select>
					<input name="getPokeInfo" type="submit" class="btn-primary" value="Check PokeDex"/>
				</form>
			</div>
			<div id="generalTable">
				<table class="genTable">
					<tr>
						<th>Pokemon ID</th>
						<th>Pokemon Name</th>
						<th>Pokemon Type</th>
						<th>Pokemon Description</th>
						<th>Moves</th>
						<th>Wild Pokemon Location</th>
						<th>Predecessor</th>
					</tr>
					<tr>
						<td>
							<?php
								if(isset($_POST['getPokeInfo']))
								{							
									$servername = "oniddb.cws.oregonstate.edu";
									$username = "nakashig-db";
									$password = "xXiNAmO8UFsRQc9d";
									$dbname = "nakashig-db";
										
									$name = $_POST['generalInfo'];
										
									$mysql= new mysqli($servername, $username, $password, $dbname);
										
									$stmt = $mysql->prepare('SELECT pokemon_id FROM pokemon WHERE name=?');
									$stmt->bind_param('s',$name);
									$stmt->execute();
									$stmt->bind_result($pokemonID);
									$results = $stmt->fetch();
									echo $pokemonID;
									$stmt->close();
									
									if($mysql->connect_error)
									{
										die("Connection error: ". $mysql->connect_error);
									}
									$mysql->close();
								}
							?>
						</td>
						<td>
							<?php
								if(isset($_POST['getPokeInfo']))
								{
									echo $_POST['generalInfo'];
								}
							?>
						</td>
						<td>
							<?php
								if(isset($_POST['getPokeInfo']))
								{							
									$servername = "oniddb.cws.oregonstate.edu";
									$username = "nakashig-db";
									$password = "xXiNAmO8UFsRQc9d";
									$dbname = "nakashig-db";
									
									$name = $_POST['generalInfo'];
									
									$mysql= new mysqli($servername, $username, $password, $dbname);
									
									$stmt = $mysql->prepare('SELECT type_name FROM types 
											INNER JOIN pokemon_types ON types.type_id = pokemon_types.ptid
											INNER JOIN pokemon ON pokemon_types.pid = pokemon.pokemon_id
											WHERE pokemon.name=?');
									$stmt->bind_param('s',$name);
									$stmt->execute();
									if($mysql->connect_error)
									{
										die("Connection error: ". $mysql->connect_error);
									}
									$type = "";
									$stmt->bind_result($type);
									while($stmt->fetch())
									{
										echo $type."<br>";
									}
									$stmt->close();
									$mysql->close();
								}
							?>
						</td>
						<td>
							<?php
								if(isset($_POST['getPokeInfo']))
								{							
									$servername = "oniddb.cws.oregonstate.edu";
									$username = "nakashig-db";
									$password = "xXiNAmO8UFsRQc9d";
									$dbname = "nakashig-db";
										
									$name = $_POST['generalInfo'];
										
									$mysql= new mysqli($servername, $username, $password, $dbname);
										
									$stmt = $mysql->prepare('SELECT description FROM pokemon WHERE name=?');
									$stmt->bind_param('s',$name);
									$stmt->execute();
									if($mysql->connect_error)
									{
										die("Connection error: ". $mysql->connect_error);
									}
									$stmt->bind_result($pokemonDesc);
									$results = $stmt->fetch();
									echo $pokemonDesc;
									$stmt->close();
									$mysql->close();
								}
							?>
						</td>
						<td>
							<?php
								if(isset($_POST['getPokeInfo']))
								{							
									$servername = "oniddb.cws.oregonstate.edu";
									$username = "nakashig-db";
									$password = "xXiNAmO8UFsRQc9d";
									$dbname = "nakashig-db";
									
									$name = $_POST['generalInfo'];
									
									$mysql= new mysqli($servername, $username, $password, $dbname);
									
									$stmt = $mysql->prepare('SELECT move_name FROM moves 
											INNER JOIN pokemon_moves ON moves.move_id = pokemon_moves.mid
											INNER JOIN pokemon ON pokemon_moves.pid = pokemon.pokemon_id
											WHERE pokemon.name=?');
									$stmt->bind_param('s',$name);
									$stmt->execute();
									if($mysql->connect_error)
									{
										die("Connection error: ". $mysql->connect_error);
									}
									$moves = "";
									$stmt->bind_result($moves);
									while($stmt->fetch())
									{
										echo $moves. "<br>";
									}
									$stmt->close();
									$mysql->close();
								}
							?>
						</td>
						<td>
							<?php
								if(isset($_POST['getPokeInfo']))
								{							
									$servername = "oniddb.cws.oregonstate.edu";
									$username = "nakashig-db";
									$password = "xXiNAmO8UFsRQc9d";
									$dbname = "nakashig-db";
									
									$name = $_POST['generalInfo'];
									
									$mysql= new mysqli($servername, $username, $password, $dbname);
									
									$stmt = $mysql->prepare('SELECT route_name FROM routes
											INNER JOIN pokemon_routes ON routes.route_id = pokemon_routes.rid
											INNER JOIN pokemon ON pokemon_routes.pid = pokemon.pokemon_id
											WHERE pokemon.name=?');
									$stmt->bind_param('s',$name);
									$stmt->execute();
									if($mysql->connect_error)
									{
										die("Connection error: ". $mysql->connect_error);
									}
									$routes = "";
									$stmt->bind_result($routes);
									while($stmt->fetch())
									{
										echo $routes. "<br>";
									}
									$stmt->close();
									$mysql->close();
								}
							?>
						</td>
						<td>
							<?php
								if(isset($_POST['getPokeInfo']))
								{							
									$servername = "oniddb.cws.oregonstate.edu";
									$username = "nakashig-db";
									$password = "xXiNAmO8UFsRQc9d";
									$dbname = "nakashig-db";
									
									$name = $_POST['generalInfo'];
									
									$mysql= new mysqli($servername, $username, $password, $dbname);
									
									$stmt = $mysql->prepare('SELECT poke1.name FROM pokemon poke1 
											INNER JOIN pokemon_evolutions pe ON pe.pokemon_predecessor_id = poke1.pokemon_id
											INNER JOIN pokemon poke2 ON poke2.pokemon_id = pe.pokemon_id = pokemon_evolution_id
											WHERE poke2.name=?');
									$stmt->bind_param('s',$name);
									$stmt->execute();
									if($mysql->connect_error)
									{
										die("Connection error: ". $mysql->connect_error);
									}
									$evolution = "";
									$stmt->bind_result($evolution);
									while($stmt->fetch())
									{
										echo $evolution."<br>";
									}
									$stmt->close();
									$mysql->close();
								}
							?>
						</td>
					</tr>
				</table>
			</div>
        </fieldset>
    </body>
</html>