<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DatabaseConfig.php';
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);


  $Name = $_POST['name'];
 $stud_id = $_POST['stud_id'];
 $password = $_POST['password'];
 $course=$_POST['course'];
 $year=$_POST['year'];

 $CheckSQL =  "SELECT * FROM voters WHERE stud_id='$stud_id'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

  echo 'Registration Number Already Exist';

 }
else{ 
$Sql_Query = "INSERT INTO voters (name,stud_id,password,course,year) values ('$Name','$stud_id','$password','$course','year')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Registration Successful';
}
else
{
 echo 'Something went wrong';
 }
 }
  
}
mysqli_close($con);
?>