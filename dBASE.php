<?php
class config {
	public static function connect(){
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		//database name is signupdb

		try{
			$conn = new PDO ("mysql:host=$servername;dbname=registration",$dbusername,$dbpassword);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "You are registered!";
			}
		catch (PDOException $e) {
			echo "Connection Failed!" . $e->getMessage();
		}
		return $conn;
	}
}
?>