<?php

$last_name = $_POST['lastName'];
$first_name = $_POST['firstName'];
$mid_initial = $_POST['midName'];
$studnumber = $_POST['studNum']; 
$year_level = $_POST['yearLevel'];
$birthday = $_POST['bday'];
$mobnumber = $_POST['mobNum']; 
$email = $_POST['emailInput'];
$username = $_POST['usernameInput'];
$password = $_POST['passInput']; 
$passwordRepeat = $_POST['rptPass']; 


	if ($password == $passwordRepeat ) {
		insertRecord($last_name,$first_name,$mid_initial,$studnumber,$year_level,$birthday,$mobnumber,$email,$username,$password);
	}

	else {
		echo '<script>
  				alert("Password Mismatch!");
					</script>';

		echo '<script>
				window.history.go(-1);
					</script>';
		}



function insertRecord($last_name,$first_name,$mid_initial,$studnumber,$year_level,$birthday,$mobnumber,$email,$username,$password) {
 try {
 require 'openDB.php';
     
  $sql = "INSERT INTO dbase (lastName, firstName, middleInitial, studNumber, YearLevel, Birthday, Mobile, Email, Username, Password) VALUES (?,?,?,?,?,?,?,?,?,?)";
     
     
  // use exec() because no results are returned 
     $conn->prepare($sql)->execute([$last_name,$first_name,$mid_initial,$studnumber,$year_level,$birthday,$mobnumber,$email,$username,$password]);

  echo '<script>
  				alert("Congratulations, you are now registered!");
					</script>';
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
}

?>