poke_evo


<?php
include 'database.php';

mysqli_query($connect,"SELECT p.name FROM pokemon p
 	INNER JOIN pokemon_ evolutions pe ON pe. pokemon_predecessor_id = p.pokemon_id
 	INNER JOIN pokemon p_evo ON p_evo.pokemon_id = pe. pokemon_evolution_id
 	WHERE p_evo.name= '$_POST[poke_type]'");
?>


