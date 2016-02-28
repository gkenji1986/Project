

<?php
include 'database.php';
mysqli_query($connect,"SELECT t.type_name FROM types t
 	INNER JOIN pokemon_types pt ON pt.ptid = t.type_id
 	INNER JOIN pokemon p ON p.pokemon_id = pt.ptid
 	WHERE p.name= '$_POST[poke_type]'");

?>




