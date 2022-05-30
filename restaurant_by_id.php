<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");
$id=$_POST["R_Id"];

$query = $mysqli->prepare("Select * from restaurants where R_Id= ?");
$query->bind_param("s", $id);
$query->execute();
$response = [];
$response["success"] = true;
 $json= json_encode($response);
echo $json;

?>
