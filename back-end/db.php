<?php 
$db_server = "localhost";
$db_user = "root";
$db_pass = "459459";
$db_name = "se";
$conn = new mysqli($db_server,$db_user,$db_pass,$db_name ,3306);
if($conn->connect_error){
    die("Connection failed".$connect_error);
}

?>