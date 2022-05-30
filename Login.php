<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");
$email = $_POST["Email"];
$password = hash("sha256", $_POST["Password"]);
$query = $mysqli->prepare("Select U_Id , Role from users where Email = ? AND Password = ?");
$query->bind_param("ss", $email, $password);
$query->execute();
$query->store_result();
$num_rows = $query->num_rows;
$query->bind_result($id , $role);
$query->fetch();
$response = [];
if($num_rows == 0){
    $response["response"] = "Invalid";
}else{
    $response["response"] = "Logged in";
    $response["user_id"] = $id;
    $response["role"] = $role;

}
$json =json_encode($response);
echo $json;
?>