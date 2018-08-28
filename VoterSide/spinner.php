<?php 
define("HOST_NAME", "localhost");
define("HOST_USER", "root");
define("HOST_PASS", "");
define("HOST_DB", "voting");

$db = new mysqli(HOST_NAME, HOST_USER, HOST_PASS, HOST_DB);
$db = new mysqli(HOST_NAME, HOST_USER, HOST_PASS, HOST_DB);
$sql = "SELECT * FROM organization";


$r = mysqli_query($db,$sql);

$result = array();

while($row = mysqli_fetch_array($r)){
    array_push($result,array(
        'org'=>$row['org'],
        /*'username'=>$row['username'],
        'password'=>$row['password'],
        'name'=>$row['name']*/
    ));
}

echo json_encode(array('result'=>$result));

mysqli_close($db);
?>