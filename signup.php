<?php
	session_start();
	$_SESSION["fname"] = $_POST['fname'];
	$_SESSION["lname"] = $_POST['lname'];
	$_SESSION["email"] = $_POST['email'];
	$_SESSION["psw"] = $_POST['psw'];
	$_SESSION["rpsw"] = $_POST['rpsw'];
	$_SESSION["sex"] = $_POST['sex'];
	$_SESSION["bday"] = $_POST['bday'];
	
	if ($_SESSION["psw"] != $_SESSION["rpsw"]){
		echo "<script>
		alert('Password mismatch!');
		</script>";
		echo "<script>
		window.history.go(-1);
		</script>";
	}
?>

<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Sign Up Form</title>
		<link rel="stylesheet" href="css/signup.css">
		<script>
			function myFunction() {
				document.getElementById('fname').value='<?php echo $_SESSION["fname"];; ?>' ;
				document.getElementById('lname').value='<?php echo $_SESSION["lname"];; ?>' ;
				document.getElementById('email').value='<?php echo $_SESSION["email"];; ?>' ;
				document.getElementById('psw').value='<?php echo $_SESSION["psw"];; ?>' ;
				document.getElementById('rpsw').value='<?php echo $_SESSION["rpsw"];; ?>' ;
				document.getElementById('sex').value='<?php echo $_SESSION["sex"];; ?>' ;
				document.getElementById('bday').value='<?php echo $_SESSION["bday"];; ?>' ;
			}
		</script>
	</head>
	<body>
		<body onload="myFunction()">
		<br>
		<div class="container" id="container">
			<div class="form-container sign-in-container">
				<form action="#">
					<h1>Sign Up Form</h1>
					<input type="text" placeholder="First Name" name="fname" id="fname" readonly/>
					<input type="text" placeholder="Last Name" name="lname" id="lname" readonly/>
					<input type="email" placeholder="Email" name="email" id="email" readonly/>
					<input type="text" placeholder="Password" name="psw" id="psw" readonly/>
					<input type="text" placeholder="Reenter Password" name="rpsw" id="rpsw" readonly/>
					<input type="text" placeholder="Male | Female" name="sex" id="sex" readonly/>
					<input type="date" placeholder="Birthday" name="bday" id="bday" readonly/>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-right">
						<h1>Thank you!</h1>
						<p>Thank you for entrusting us with your personal information</p>
					</div>
					<div class="overlay-panel overlay-left">
						<h1>Welcome Back!</h1>
						<p>To keep connected with us please login with your personal info</p>
						<button class="ghost" id="signIn">Sign In</button>
					</div>

				</div>
			</div>
		</div>
		<script  src="js/signup.js"></script>
	</body>
</html>