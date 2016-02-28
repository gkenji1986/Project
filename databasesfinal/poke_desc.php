


<?php

include 'database.php';
mysqli_query($connect,"SELECT p.description FROM pokemon p
 	WHERE p.description = '$_POST[poke_desc]'");

?>
