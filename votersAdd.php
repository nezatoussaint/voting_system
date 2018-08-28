<?php

//Include authentication


//Include database connection
require("../config/db.php");

//Include class Voters
require("classes/Voters.php");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Register</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style_admin.css">
</head>
<body background="assets/img/background.png">

<!-- Header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			<style>
			
			</style>
            <a class="navbar-brand" href="index.php">BACH TO HOME</a>
	
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="stud_page.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php">Back to Home</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

       <!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->


<style>
.align
{
	margin-left:5px;	
	margin-top:210px;
	color:white;
}
</style>

<div class="container align">
    <div class="row">
        <div class="col-md-4">
            <?php
            if(isset($_POST['submit'])) {
	
                $name       = trim($_POST['name']);
                $course     = trim($_POST['course']);
                $year       = trim($_POST['year']);
                $stud_id    = trim($_POST['stud_id']);
                $password    = trim($_POST['password']);
                $insertVoter = new Voters();
                $rtnInsertVoter = $insertVoter->INSERT_VOTER($name, $course, $year, $stud_id, $password );
            }
            ?>
            <h4>Voter Registration Form</h4><hr>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" role="form">
                <div class="form-group-sm">
                    <label for="name">Name</label>
                    <input required type="text" name="name" class="form-control" placeholder="LName, FName MI.">
                </div>
                <div class="form-group-sm">
                    <label for="course">Department</label>
                    <select required name="course" class="form-control">
                        <option value="">*****Select Department*****</option>
                        <option value="IT">IT</option>
                        <option value="EEE">EEE</option>
                        <option value="PMT">PMT</option>
                        <option value="MVM">MVM</option>
                        <option value="HOM">HOM</option>
              
                    </select>
                </div>
                <div class="form-group-sm">
                    <label for="year">Year</label>
                    <select required name="year" class="form-control">
                        <option value="">*****Select Level*****</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                       
                    </select>
                </div>
                <div class="form-group-sm">
                    <label for="stud_id">Student ID No.</label>
                    <input required type="text" name="stud_id" class="form-control">
                </div>
				<div class="form-group-sm">
                    <label for="stud_id">Password</label>
                    <input required type="text" name="password" class="form-control">
                </div><hr>
				
                <div class="form-group-sm">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info">
                </div>
            </form>
        </div>

       
        </div>
    </div>
</div>






<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    <div class="container">
        <div class="navbar-text pull-left">
           Designed by &nbsp;Toussaint and Mireille &nbsp;&nbsp; ||Copyright &nbsp;2018&nbsp;&nbsp;||IPRC Karongi 
        </div>
    </div>

</nav>
<!-- End Footer -->

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>