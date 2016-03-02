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

            <form action='poke_id.php' method='POST'>
                <p>
                    <label for="poke_id">Id:</label>
                    <input type="number" name="value1" min="1" max= "151"/>
                </p>
                  <p>
                    <label for="poke_id">Name:</label>
                    <input type="text" name="value2"/>
                </p>
                  <p>
                    <label for="poke_id">Description:</label>
                    <input type="text" name="value3"/>
                </p>
                <input name="addPokemon" type="submit" value="Submit"/>
            </form>
        </div>
        </fieldset>
		<ol class="list-unstyled">
				<li><a href="main.php">Back to Main Page</a></li> 
        </ol>
    </body>
</html>
