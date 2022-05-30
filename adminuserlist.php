<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");
$recieved_data = json_decode(file_get_contents("php://input"));
$data=array();
$query = $mysqli->prepare("SELECT F_Name , L_Name , Email , Password from users");
$query->execute();
$array = $query->get_result();
$response = [];
while($todo = $array->fetch_assoc()){
    $response[] = $todo;
} 
$json = json_encode($response);
echo $json;
?>