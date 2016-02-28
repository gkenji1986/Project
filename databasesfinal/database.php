<?php 


$connect = new mysqli('', '', '', '');

if($connect->connect_errno){
    echo "ERROR connecting to the database." . $connect->connect_errno . "" . $connect->connect_error;
}
?>