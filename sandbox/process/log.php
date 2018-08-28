<?php
//Start session
session_start();

session_destroy();
header("location: http://localhost/voting_system/sandbox/indexo.php");
exit();