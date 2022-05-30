<?php

include("connection.php");

$Feedback = $_POST["fb"];
$user_id = $_POST["uid"];
$restaurant_id=$_POST["rid"];
$rating=$_POST["rate"];

$query = $mysqli->prepare("INSERT INTO reviews (Feedback, User_U_Id, Restaurant_R_Id, Rating) VALUES (?, ?, ?, ?)");
$query->bind_param("ssss", $Feedback, $user_id, $restaurant_id, $rating);
$query->execute();

$response = [];
$response["success"] = true;
echo json_encode($response);
?>