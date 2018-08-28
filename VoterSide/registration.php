<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $Name = $_POST['name'];
 $Stud_id = $_POST['stud_id'];
 $Password = $_POST['password'];
 $Program = $_POST['course'];
 $Level=$_POST['year']

 $CheckSQL = "SELECT * FROM voters WHERE stud_id='$Stud_id'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Registration Number Already Exist';

 }
else{ 
$Sql_Query = "INSERT INTO voters (name,stud_id,password,course,year) values ('$Name','$Stud_id','$Password','$Program', '$Level')";

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