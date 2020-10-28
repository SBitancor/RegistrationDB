<?php

	$username = $_POST['usernameInput'];
	$password = $_POST['passInput'];
		
	if(isset($_POST['login'])){
		if($username == "usernameInput" and $password == "passInput") {
			header("Location:MACHINE PROBLEM(BIONOTE)/ACT1.html");
					
		}
			
		else {
			echo '<script>
				alert ("Wrong Username/Password");
				</script>';
			echo '<script>
				window.history.go(-1);
				</script>';
		}
	}


?>