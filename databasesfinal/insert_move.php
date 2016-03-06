<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>CS 340 Final</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!-- James' Changes -->
<nav>
        <ul>
        <li><a href="main.php">Back to Main Page</a></li> 
          <li><a href="insert.php">Insert Pokemon and attributes for Pokemon into Pokedex</a></li>       
		  <li><a href="insert_move.php" class="selected">Insert Moves and attributes into Pokedex</a></li>
		  <li><a href="insert_trainer.php" class="selected">Insert Trainer and trainer's Pokemon into Pokedex</a></li>
		  <li><a href="deletion.php" class="selected">Delete Information from Pokedex</a></li>
        </ul>
 </nav>
        <h1>PokeDex</h1>
        <fieldset>
			<div id="insert_poke">
				<text>Enter the move name, type, base damage, pp and description of the move to add to the moves list. 
					  Base damage has a maximum of 150 and PP has a maximum of 40. </text>

				<form action='pokemon_move_insert_queries.php' method='POST'>
					<p>
						<label for="poke_move">Name:</label>
						<input type="text" name="name"/>
					</p>
					<p>
						<label for="poke_move">Type:</label>
						<select id = "moveType" name="moveType">
							<?php
								$servername = "oniddb.cws.oregonstate.edu";
								$username = "nakashig-db";
								$password = "xXiNAmO8UFsRQc9d";
								$dbname = "nakashig-db";
								// Create connection
								$mysql = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($mysql->connect_error) 
								{
									 die("Connection failed: " . $mysql->connect_error);
								} 
								$sql = "SELECT type_name FROM types";
								$result = $mysql->query($sql);
								while ($row = $result->fetch_assoc()) 
								{
									 unset($type);
									$type = $row['type_name']; 
									 echo '<option value="'.$type.'">'.$type.'</option>';
								}
								$mysql->close();
							?>
						</select>
					</p>
					<p>
						<label for="poke_move">Base Damage:</label>
						<input type="number" id="baseDamage" name="baseDamage" min="0" max= "150"/>
					</p>
					<p>
						<label for="poke_move">PP:</label>
						<input type="number" id="pp" name="pp" min="1" max= "40"/>
					</p>
					<p>
						<label for="poke_move">Description:</label>
						<input type="text" id="moveDesc" name="moveDesc"/>
					</p>
					<input name="addMoveList" type="submit" class="btn-primary" value="Submit"/>
				</form>
			</div>
        </fieldset>
		<br>
		<fieldset>
			<div id="addMovePoke">
				<text>Add move to Pokemon.</text>
				
					<form action='pokemon_move_insert_queries.php' method='POST'>
						<p>
						<text>Pokemon</text>
								<select id = "pokeName" name = "pokeName">
									<?php
										$servername = "oniddb.cws.oregonstate.edu";
										$username = "nakashig-db";
										$password = "xXiNAmO8UFsRQc9d";
										$dbname = "nakashig-db";
										// Create connection
										$mysql = new mysqli($servername, $username, $password, $dbname);
										// Check connection
										if ($mysql->connect_error) 
										{
										  die("Connection failed: " . $mysql->connect_error);
										} 
										$sql = "SELECT name FROM pokemon";
										$result = $mysql->query($sql);
										while ($row = $result->fetch_assoc()) 
										{
										  unset($name);
										  $name = $row['name']; 
										  echo '<option value="'.$name.'">'.$name.'</option>';
										}
										$mysql->close();
									?>
								</select>
							<text>Move</text>
								<select id = "pokeMove" name = "pokeMove">
									<?php
										$servername = "oniddb.cws.oregonstate.edu";
										$username = "nakashig-db";
										$password = "xXiNAmO8UFsRQc9d";
										$dbname = "nakashig-db";
										// Create connection
										$mysql = new mysqli($servername, $username, $password, $dbname);
										// Check connection
										if ($mysql->connect_error) 
										{
										  die("Connection failed: " . $mysql->connect_error);
										} 
										$sql = "SELECT move_name FROM moves";
										$result = $mysql->query($sql);
										while ($row = $result->fetch_assoc()) 
										{
											unset($name);
											$name = $row['move_name']; 
											echo '<option value="'.$name.'">'.$name.'</option>';
										}
										$mysql->close();
									?>
								</select>
							</p>
					</form>
					<input name="addPokeMove" type="submit" class="btn-primary" value="Submit"/>
			</div>
		</fieldset>
		<br>
		<fieldset>
			<div id="moveUpdate">
			<text>Insert information about a move to Update.</text>
			
				<form action='pokemon_move_insert_queries.php' method='POST'>
						<p>
						<text>Move</text>				
						<select id = "updateMove" name = "updateMove">
							<?php
								$servername = "oniddb.cws.oregonstate.edu";
								$username = "nakashig-db";
								$password = "xXiNAmO8UFsRQc9d";
								$dbname = "nakashig-db";
								// Create connection
								$mysql = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($mysql->connect_error) 
								{
								  die("Connection failed: " . $mysql->connect_error);
								} 
								$sql = "SELECT move_name FROM moves";
								$result = $mysql->query($sql);
								while ($row = $result->fetch_assoc()) 
								{
									unset($name);
									$name = $row['move_name']; 
									echo '<option value="'.$name.'">'.$name.'</option>';
								}
								$mysql->close();
							?>
						</select>
						</p>
						<p>
							<label for="poke_move">Base Damage:</label>
							<input type="number" id="updateDmg" name="updateDmg" min="0" max= "150"/>
						</p>
						<p>
							<label for="poke_move">PP:</label>
							<input type="number" id="updatePp" name="updatePp" min="1" max= "40"/>
						</p>
				</form>
				<input name="updateMove" type="submit" class="btn-primary" value="Submit"/>
			</div>
		</fieldset>
		<br>
	
    </body>
</html>