
<?php
	include("connection.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//echo "2";
		$uname = mysqli_real_escape_string($con, $_POST['username']);
		$mpassword = mysqli_real_escape_string($con, $_POST['pass']);			
		$qry = "SELECT * FROM `admin` WHERE `username`='$uname' AND `pass`=  '$mpassword' ";
		$run = mysqli_query($con,$qry);
		$row = mysqli_fetch_array($run,MYSQLI_ASSOC);
		$active = $row['active'];
		$count = mysqli_num_rows($run);									
		if($count == 1)
		{
			//echo "3";
			$data = mysqli_fetch_assoc($run); 
			$id = $_SESSION['uid'] ;
			$_SESSION['login'] = true;
			header('location:index.html');
		}
		else
		{
			echo '<script>alert("Your Login Name or Password is invalid")</script>';
			
		}
	
	}
	//echo "g". $_SESSION['login'] . "ffdc"  ;
	//echo "f". $run . "d";
	//echo "1";
	//echo $active;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
	a{
        color: black;
        width: 500px;
        text-align: center;
        clear: both;
        margin: 40px auto 60px;
    }
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form action = "login.php" method = "POST" class="login100-form validate-form" >
					<span class="login100-form-title p-b-43">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="text" name="username" id="abc" required>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							Sign in
						</button>
					</div>
				</form>
				<a href="..\index.html" class="list-group-item display" >Homepage</a>
			</div>
		</div>
	</div>
	<script>
function validate(){
	var a = document.getElementById('abc').value;
	if(a=="")
	{
		alert("Username can't be blank");
	}
}
		</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>