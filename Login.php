<?php
include("connection.php");
$email = $_POST["Email"];

$password = hash("sha256", $_POST["Password"]);
echo $password;
$query = $mysqli->prepare("Select U_Id from users where Email = ? AND Password = ?");
$query->bind_param("ss", $email, $password);
$query->execute();
$query->store_result();
$num_rows = $query->num_rows;
$query->bind_result($id);
$query->fetch();
$response = [];
if($num_rows == 0){
    $response["response"] = "Invalid";
}else{
    $response["response"] = "Logged in";
    $response["user_id"] = $id;
}
$json =json_encode($response);
echo $json;
?>