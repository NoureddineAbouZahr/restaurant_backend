<?php

include("connection.php");

$R_Name = $_POST["R_name"];
$Description = $_POST["Desc"];
$Img=$_POST["Img"];

$query = $mysqli->prepare("INSERT INTO restaurants (R_Name, Description, Img) VALUES (?, ?, ?)");
$query->bind_param("sss", $R_Name, $Description, $Img);
$query->execute();
$response = [];
$response["success"] = true;
echo json_encode($response);
?>
