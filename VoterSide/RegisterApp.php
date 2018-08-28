<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DatabaseConfig.php';
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);


  $Name = $_POST['name'];

 $course=$_POST['course'];
 $year=$_POST['year'];
 $stud_id = $_POST['stud_id'];
 $CheckSQL =  "SELECT * FROM applie WHERE stud_id='$stud_id'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

  echo 'Registration Number Already Exist';

 }
else{ 
$Sql_Query = "INSERT INTO applie (name,course,year,stud_id) values ('$Name','$course','year','$stud_id')";

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