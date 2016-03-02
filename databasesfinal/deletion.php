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
		   
					<text>Enter id, name, and description to add a pokemon</text>

						<form action='poke_delete.php' method='POST'>
									<select id = "deletePoke" name = "deletePoke">
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
								<input name="deletePokemon" type="submit" class="btn-primary" value="Submit"/>
						</form>
				</div>
			</fieldset>
			<ol class="list-unstyled">
				<li><a href="main.php">Back to Main Page</a></li> 
            </ol>
    </body>
</html>