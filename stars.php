<?php
include("connection.php");

$RName = $_POST["rname"];

$query = $mysqli->prepare("SELECT avg(rate) from reviews where Restaurant_R_Id=(select R_Id from restaurants where R_Name=?");
$query->bind_param("s", $RName);

$query->execute();
$array = $query->get_result();
$response = [];
while($rating = $array->fetch_assoc()){
    $response[] = $rating;
} 
$json = json_encode($response);
echo $json;
?>