<?php
//Include database connection
include 'DatabaseConfig.php';

//Include class StudentLogin
include 'StudentLogin.php';

if(isset($_POST['submit'])) {
    $stud_id = trim($_POST['stud_id']);
$stud_id = trim($_POST['password']);
    $loginStud = new StudentLogin($stud_id);
    $rtnLogin = $loginStud->StudLogin();
}

$db->close();