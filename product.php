<?php
	$name = $_POST['name'];
	$des = $_POST['des'];
	$quantity = $_POST['quantity'];
	$on_hand = $_POST['on_hand'];
	$unit = $_POST['unit'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','water_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into product(name, des, quantity, on_hand, unit_price) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiii", $name, $des, $quantity, $on_hand, $unit);
		$execval = $stmt->execute();
		// echo $execval;
		if(isset($_POST["submit1"])){
			header("Location: public/productTable.php");
		  }
		$stmt->close();
		$conn->close();
	}
?>