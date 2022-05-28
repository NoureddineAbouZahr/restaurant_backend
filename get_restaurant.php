<?php
include("connection.php");
$R_Name=$_POST["name"];
$query = $mysqli->prepare("SELECT R_Id from restaurants where R_Name = ?");
$query1 = $mysqli->prepare("SELECT R_Name from restaurants where R_Name = ?");
$query2 = $mysqli->prepare("SELECT Description from restaurants where R_Name = ?");
$query3 = $mysqli->prepare("SELECT Img from restaurants where R_Name = ?");

$query->bind_param("s", $R_Name);
$query->execute();
$array = $query->get_result();
$response = [];
while($rest = $array->fetch_assoc()){
    $response[] = $rest;
} 
$json = json_encode($response);
$ar=json_decode($json,true);
echo $json;
//quer1
$query1->bind_param("s", $R_Name);
$query1->execute();
$array1 = $query1->get_result();
$response1 = [];
while($rest1 = $array1->fetch_assoc()){
    $response1[] = $rest1;
} 
$json1 = json_encode($response1);
echo $json1;

//query2
$query2->bind_param("s", $R_Name);
$query2->execute();
$array2 = $query2->get_result();
$response2 = [];
while($rest2 = $array2->fetch_assoc()){
    $response2[] = $rest2;
} 
$json2 = json_encode($response2);
echo $json2;

//query3
$query3->bind_param("s", $R_Name);
$query3->execute();
$array3 = $query3->get_result();
$response3 = [];
while($rest3 = $array3->fetch_assoc()){
    $response3[] = $rest3;
} 
$json3 = json_encode($response3);
echo $json3[];

?>