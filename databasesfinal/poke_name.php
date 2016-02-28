

<?php
include 'database.php';

mysqli_query($connect,"SELECT p.name FROM pokemon p
 	WHERE p.name = '$_POST[poke_name]'");

?>
<?php
