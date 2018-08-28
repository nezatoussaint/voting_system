<?php 
session_start();
include('header.php');
include("config/db.php");
include_once("db_connect.php");

if(isset($_SESSION['stud_id'])!="") {
	header("Location: index.php");
}
if (isset($_POST['login'])) {
	 $stud_id = mysqli_real_escape_string($conn, $_POST['stud_id']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM voters WHERE stud_id = '" . $stud_id. "' and password = '" . $password. "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['course'] = $row['course'];
		$_SESSION['year'] = $row['year'];
$_SESSION['stud_id'] = $row['stud_id'];
$_SESSION['password'] = $row['password'];		

		
		header("Location: stud_page.php");
	} else {
		$error_message = "Incorrect Student ID or Password!!!";
	}
}
?>
<html>
<header>
<title>Voting Home</title></header>
<link rel="shortcut icon" type="image/png" href="assets/img/logoreal.png">
<script type="text/javascript" src="script/ajax.js"></script>

<body background="assets/img/background.png">
<div class="container">
<br><br><br><br><br><br><br>
		<style>
		.row2
		{
		color:white;	
		}
		</style>
	<div class="row">
	<h2 class="row2 "> Login Here to contunue Votes </h2>	
		<div class="col-md-4 col-md-offset-4 well">
		
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
			
				<fieldset>
					<legend>Login</legend>						
					<div class="form-group">
						<label for="name">Stud ID</label>
						<input type="text" name="stud_id" placeholder="Your Student ID" required class="form-control" />
					</div>	
					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>	
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="sandbox/votersAdd.php">Sign Up Here</a>
		</div>
	</div>
</div>
<?php include('footer.php');?> 
</body>
</html>