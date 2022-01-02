<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "sign_up";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=sign_up",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$email = test_input($_POST["email"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM register");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['email'] == $email) &&
			($user['password'] == $password))
			  {
				header("Location: success.html");
		}
		else {
			header("Location: unsuccess.html");
		}
	}
}

?>
