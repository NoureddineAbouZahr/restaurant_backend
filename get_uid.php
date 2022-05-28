<?php
include("connection.php");

$email = $_POST["Email"];

$query = $mysqli->prepare("SELECT U_Id F_Name L_Name from users where Email= ?");
$query->bind_param("s", $email);
$query->execute();
$array = $query->get_result();
$response = [];
while($user = $array->fetch_assoc()){
    $response[] = $user;
} 
$json = json_encode($response);
echo $json;
?>