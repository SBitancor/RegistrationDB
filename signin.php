<?php
	session_start();
	$_SESSION["email"] = $_POST['email'];
	$_SESSION["psw"] = $_POST['psw'];
	
	if ($_SESSION["email"] == "admin" and $_SESSION["psw"] == "password"){
		if (isset($_POST['remPass'])){
			echo "<script>
			alert('You will be remembered!');
			</script>";
			echo "<script>
			window.history.go(-1);
			</script>";
		} else{
			echo "<script>
			window.location = '../Bionote/Bionote.html';
			</script>";
		}
	} else {
		echo "<script>
			alert('Login failed, username or password is incorrect');
		</script>";
		echo "<script>
			window.history.go(-1);
		</script>";
	}
?>