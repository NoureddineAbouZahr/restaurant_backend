<?php

include("connection.php");

$R_Name = $_POST["R_name"];

$query = $mysqli->prepare("Delete from restaurants where R_Name = ?");
$query->bind_param("s", $R_Name);
$query->execute();
$response = [];
$response["success"] = true;
echo json_encode($response);
?>