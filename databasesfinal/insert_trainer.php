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

            <form action='addTrainerList.php' method='POST'>
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
		<ol class="list-unstyled">
			<li><a href="main.php">Back to Main Page</a></li> 
        </ol>
    </body>
</html>
