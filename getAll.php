<?php
include("connection.php");
$query = $mysqli->prepare("SELECT * from restaurants");
$query->execute();
$array = $query->get_result();
$response = [];
while($all = $array->fetch_assoc()){
    $response[] = $all;
} 
$json = json_encode($response);
echo $json;

?>