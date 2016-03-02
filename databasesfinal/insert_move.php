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
            <text>Enter the move name, type, base damage, pp and description of the move to add to the moves list. 
				  Base damage has a maximum of 150 and PP has a maximum of 40. </text>

            <form action='addMoveList.php' method='POST'>
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
                <input name="addMoveList" type="submit" value="Submit"/>
            </form>
        </div>
        </fieldset>
    </body>
</html>