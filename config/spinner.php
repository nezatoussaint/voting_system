<?php 
require("config/db.php");
$sql = "SELECT * FROM admin";



$r = mysqli_query($con,$sql);

$result = array();

while($row = mysqli_fetch_array($r)){
    array_push($result,array(
        'id'=>$row['id'],
        'username'=>$row['username'],
        'password'=>$row['password'],
        'name'=>$row['name']
    ));
}

echo json_encode(array('result'=>$result));

mysqli_close($con);