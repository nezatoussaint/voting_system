<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>
<html>
<header>
<title>Voting System</title>
</header>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>
<body background="assets/img/background.png">
<div class="container"><br><br><br>
	<h2>Welcome to our Voting system </h2>	<h3> You allowed to choose what to do</h3>	
		
		<br>
		<br>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-left">
				<?php if (isset($_SESSION['id'])) { ?>
				<li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['name']; ?>
			
				<li><a href="logout.php">Logout </a></li></strong></p></li>
				<li><a href="voting_page.php">Contune to show your choice </a></li></strong></p></li>
				
				<?php } else { ?>
				<li><div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href=" login.php">Login</a>			
		</div>	</li>
				<li><div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="sandbox/votersAdd.php">Creat Account</a>			
		</div>	</li><br><li>
		<div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href=" #">About Voting</a>			
		</div>	
		</li><li>
		<div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="#">Check Infos</a>			
		</div>	
		</li><br><br><br>
		<li><div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href=" #">Back to Tutorial</a>			
		</div>	
		</li>
				
				
				<?php } ?>
			</ul>
		</div>
		
		
		
		
</div>	
<?php include('footer.php');?> 
</body>
</html>