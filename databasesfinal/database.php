<?php 


$db = new mysqli('', '', '', '');

if($db->connect_errno){
    echo "ERROR connecting to the database." . $db->connect_errno . "" . $db->connect_error;
}
?>