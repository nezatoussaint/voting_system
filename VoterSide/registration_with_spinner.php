<?php 
define("HOST_NAME", "localhost");
define("HOST_USER", "root");
define("HOST_PASS", "");
define("HOST_DB", "voting");

$db = new mysqli(HOST_NAME, HOST_USER, HOST_PASS, HOST_DB);
$db = new mysqli(HOST_NAME, HOST_USER, HOST_PASS, HOST_DB);
$sql = "SELECT * FROM voters";


$r = mysqli_query($db,$sql);

$result = array();
while($row = mysqli_fetch_array($r)){
    array_push($result,array(
        'year'=>$row['year'],
        /*'username'=>$row['username'],
        'password'=>$row['password'],
        'name'=>$row['name']*/
    ));
}
echo json_encode(array('result'=>$result));
mysqli_close($db);
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

 
    $response = array("error" => FALSE);

    $name = $_POST['name'];
    $stud_id = $_POST['stud_id'];
    $password = $_POST['password'];
    $course= $_POST['course'];
	$level=$_POST['level'];

    $CheckSQL = "SELECT * FROM voters WHERE stud_id='$stud_id'";
 
    $check = mysqli_fetch_array(mysqli_query($db,$CheckSQL));
 
    if(isset($check)){

        echo 'Registration number Already Exist';

    }
    else{ 
        $Sql_Query = "INSERT INTO voters (name,stud_id,password,course,level) values ('$name','$stud_id','$password','$course','$level')";

        if(mysqli_query($con,$Sql_Query)){
    
            $Sql_Query = "SELECT * FROM voters WHERE stud_id = '$stud_id' AND password = '$password' ";
 
            $user = mysqli_fetch_array(mysqli_query($db,$Sql_Query));
 
            if(isset($user)){
                // use is found
                $response["error"] = FALSE;
                $response["id"] = $user["unique_id"];
                $response["user"]["name"] = $user["name"];
                $response["user"]["stud_id"] = $user["stud_id"];
                $response["user"]["password"] = $user["password"];
                $response["user"]["course"] = $user["course"];
                $response["user"]["level"] = $user["level"];
                echo json_encode($response);
            } 
            else {
                // user is not found with the credentials
                $response["error"] = TRUE;
                $response["error_msg"] = "Login credentials are wrong. Please try again!";
                echo json_encode($response);
            }
    

        }
        else{
            echo 'Something went wrong';
        }
 
 
    }
 
    mysqli_close($db);
}

?>
