<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $Name = $_POST['name'];
 $Departement = $_POST['departement'];
 $Level = $_POST['level'];

$studID=$_POST['studId'];
 $password = $_POST['password'];
 $CheckSQL = "SELECT * FROM voters WHERE stud_id='$studID'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Registration Number Already Exist';

 }
else{ 
$Sql_Query = "INSERT INTO voters (name,course,year,stud_id, password) values ('$Name','$Departement','$Level','$studID','$password')";

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
// mysqli_close($con);
?>