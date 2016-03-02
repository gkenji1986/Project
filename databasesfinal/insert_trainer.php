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
        <div id="insert_poke">
       
            <text>Enter name and description for the new Trainer</text>

            <form action='pokemon_insert_trainer_queries.php' method='POST'>
                 <p>
                    <label for="trainer">Name:</label>
                    <input type="text" name="trainer_name"/>
                </p>
                  <p>
                    <label for="trainer">Description:</label>
                    <input type="text" name="trainer_desc"/>
                </p>
                <input name="addTrainer" type="submit" value="Submit"/>
            </form>
        </div>
        </fieldset>
		<br>
		<fieldset>
			<text>Select a Trainer and element type to add the Pokemon type to the Trainer.</text>
				<text>Trainer</text>
					<form action='pokemon_insert_trainer_queries.php' method='POST'>
								<select id = "trainerName" name = "trainerName">
									<?php
										$servername = "oniddb.cws.oregonstate.edu";
										$username = "nakashig-db";
										$password = "xXiNAmO8UFsRQc9d";
										$dbname = "nakashig-db";
										
										$mysql= new mysqli($servername, $username, $password, $dbname);
											
										if ($mysql->connect_error) 
										{
											 die("Connection failed: " . $mysql->connect_error);
										} 
										$sql = "SELECT trainer_name FROM trainer";
										$result = $mysql->query($sql);
										while ($row = $result->fetch_assoc()) 
										{
											 unset($name);
											$name = $row['trainer_name']; 
											 echo '<option value="'.$name.'">'.$name.'</option>';
										}
										$mysql->close();	
									?>
								</select>
				<text>Type</text>
								<select id = "trainerType" name = "trainerType">
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
							<input name="addTrainerType" type="submit" value="Submit"/>	
					</form>
		</fieldset>
		<ol class="list-unstyled">
			<li><a href="main.php">Back to Main Page</a></li> 
        </ol>
    </body>
</html>