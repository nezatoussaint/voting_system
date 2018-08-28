<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$db);
 
 $studID=$_POST['stud_id'];
$password = $_POST['password'];
 
 $Sql_Query = "select * from voters where stud_id = '$studID' and password = '$password' ";
 
 $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));
 
 if(isset($check)){
 
 echo "Data Matched";
 }
 else{
 echo "Invalid Username or Password Please Try Again";
 }
 
 }else{
 echo "Check Again";
 }
mysqli_close($con);

?>