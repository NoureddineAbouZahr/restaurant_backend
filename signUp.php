<?php

include("connection.php");

$F_Name = $_POST["F_Naame"];
$L_Name = $_POST["L_Name"];
$Email=$_POST["Email"];
$Password =  hash("sha256", $_POST["Password"]);
$Role=$_POST["Role"];

$query = $mysqli->prepare("INSERT INTO users(F_Naame, L_Name, Email, Password,Role) VALUES (?, ?, ?, ?, ?)");
$query->bind_param("sssss", $F_Name, $L_Name, $Email, $Password,$Role);
$query->execute();

$response = [];
$response["success"] = true;
echo json_encode($response);

?>