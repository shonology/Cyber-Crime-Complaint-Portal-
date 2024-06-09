<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$Complaint = $_POST['Complaint'];

	// Database connection
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into portal1(firstName, lastName, gender, email, password, number, Complaint) values(?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssssis", $firstName, $lastName, $gender, $email, $password, $number, $Complaint);
		$execval = $stmt->execute();
		echo $execval;
		echo "You will be contacted by Cyber Police shortly......Stay safe!!!";
		$stmt->close();
		$conn->close();} ?>
