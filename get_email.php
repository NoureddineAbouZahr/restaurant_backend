<?php
include("connection.php");


$query = $mysqli->prepare("SELECT Email from users");
$query->execute();
$array = $query->get_result();
$response = [];
while($e = $array->fetch_assoc()){
    $response[] = $e;
} 
$json = json_encode($response);
echo $json;
?>