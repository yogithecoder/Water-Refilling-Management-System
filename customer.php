<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$date = $_POST['date'];
	$time = $_POST['time'];

	// Database connection
	$conn = new mysqli('localhost','root','','water_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer(firstName, lastName, address, phone,age, c_date, c_time) values(?, ?, ?,?,?, ?, ?)");
		$stmt->bind_param("sssiiss", $firstName, $lastName, $address, $phone,$age, $date, $time);
		$execval = $stmt->execute();
		// echo $execval;
		if(isset($_POST["submit1"])){
			header("Location: public/customerTable.php");
		  }
		$stmt->close();
		$conn->close();
	}
?>