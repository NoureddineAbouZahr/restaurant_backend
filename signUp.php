<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");

$F_Name = $_POST["F_Name"];
$L_Name = $_POST["L_Name"];
$Email=$_POST["Email"];
$Password =  hash("sha256", $_POST["Password"]);


$query = $mysqli->prepare("INSERT INTO users(F_Name, L_Name, Email, Password) VALUES (?, ?, ?, ?)");
$query->bind_param("ssss", $F_Name, $L_Name, $Email, $Password);
$query->execute();

$response = [];
$response["success"] = true;
echo json_encode($response);

?>