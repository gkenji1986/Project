
<?php

include 'database.php';
mysqli_query($connect,"SELECT p.pokemon_id FROM pokemon p
 	WHERE p.name = '$_POST[poke_id]'");

?>
<?php
