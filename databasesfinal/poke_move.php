
<?php
include 'database.php';

mysqli_query($connect,"SELECT m.move_name FROM moves m
 	INNER JOIN pokemon_moves pm ON pm.mid = m.move_id
 	INNER JOIN pokemon p ON p.pokemon_id = pm.pid
 	WHERE p.name= '$_POST[poke_move]'");

?>


