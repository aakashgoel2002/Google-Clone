<!--<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$database = "sign_up";

	$conn = mysqli_connect($servername,
		$username, $password, $database);


	if($conn) {
		echo "success";
	}
	else {
	

        die("Error". mysqli_connect_error()); 
    } 
?>-->

<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'sign_up';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['email'], $_POST['password'], $_POST['phoneNo'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['phoneNo'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
if ($stmt = $con->prepare('SELECT id, password FROM register WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'email exists, please choose another!';
	} else {
		if ($stmt = $con->prepare('INSERT INTO register (firstName,lastName,email, password, phoneNo) VALUES (?, ?, ?, ?, ?)')) {
            $stmt->bind_param('ssssi', $_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password'],$_POST['phoneNo']);
            $stmt->execute();
            header("Location: successsignup.html");
        } else {
            // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>
