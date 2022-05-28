<?php

include("connection.php");
$name=$_POST["name"];
$F_Name = $_POST["Fname"];
$L_Name = $_POST["Lname"];
$email = $_POST["email"];
$Password=hash("sha256",$_POST["Password"]);
$query = $mysqli->prepare("UPDATE  users set F_Name=  ?, L_Name= ?, Password= ? where Email= ?");
$query->bind_param("ssss", $F_Name, $L_Name, $Password, $email);
$query->execute();
$response = [];
$response["success"] = true;
echo json_encode($response);


?>
